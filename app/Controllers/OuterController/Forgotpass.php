<?php

namespace App\Controllers\OuterController;
use App\Controllers\BaseController;
use App\Models\OuterModel\ForgotpassModel;


class Forgotpass extends BaseController
{


    public $email;
    public $session;

    public $forgotpassmodel;

    public function __construct(){
        helper('form');
        helper('date');
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
        $this->forgotpassmodel = new ForgotpassModel();
    }

    public function index(): string
    {
        $data ['validation'] = null;
        return view('forgotpass_view', $data);
    }

    public function verify(){
        if($this->request->getMethod() == 'POST')
        {
          $rules = [
            "email" => "required|valid_email",
          ];
        
  
          if($this->validate($rules))
          {
                $uniid = md5(str_shuffle("abcdefghijklmnopqrstuvwxyzxmvmxsd".time()));
              
                $email = $this->request->getVar("email");
            
                if($userdata = $this->forgotpassmodel->findUser($email))
                {
                   
                    $reset_passTime = date("Y-m-d h:i:s");
                    $updateuniid = $this->forgotpassmodel->updateUniid($uniid, $email, $reset_passTime);
                    if($updateuniid){

                        $to = $email;
                        $subject = "Password Reset Request";
                        $message = 'Hi ' . $this->request->getVar("username", FILTER_SANITIZE_STRING) . ',<br><br>
                        We received a request to reset your password.<br>
                        If you made this request, please reset your password by clicking the link below:<br><br>
                        <a href="' . base_url() . 'resetpassword/' . $uniid . '" target="_blank">Reset My Password</a><br><br>
                        If you didn\'t request this, please ignore this email.<br><br>
                        Best regards,<br>
                        BSTUDIO';
                        
                        $this->email->setTo($to);
                        $this->email->setFrom("johncarlovictoriadizon@gmail.com", "Info");
                        $this->email->setSubject($subject);
                        $this->email->setMessage($message);
                        
                        if ($this->email->send()) {
                            $this->session->setTempdata('errorchange', 'Password reset link has been sent. Please check your email.',3);
                            return redirect()->to(base_url()."forgot_password");
                        } else {
                            $this->session->setTempdata('errorchange', 'Unable to send the reset link. Please try again later.',3 );
                            return redirect()->to(base_url()."forgot_password");
                        }
                        
                    }
                    else
                    {
                        $this->session->setTempdata('errorchange', 'Unable to process your request. Please try again later.',3);
                        return redirect()->to(base_url()."forgot_password");
                    }
                }
                else
                {
                    $this->session->setTempdata('errorchange', 'The email address does not registered yet',3);
                    return redirect()->to(base_url()."forgot_password");
                }
  
          }
          else
          {
            $data['validation'] = $this->validator;
          }
        }

        return view('forgotpass_view', $data);
    }



    
    public function resetpassword($param = null)
    {
      $data = [];

      if(!empty($param))
      {
          $userdata = $this->forgotpassmodel->verifyUni($param);

          if($userdata)
          {
              
            if ($this->verifyExpiryTime($userdata->reset_passTime)) {
                $data['userdata'] = $userdata;
                $data ['validation'] = null;
                return view('changepassword_view', $data);
            } else {
                $data['error'] = "Sorry, the reset password link has expired.";
            }
          }
          else
          {
              $data['error'] = "Sorry we're unable to find your account";
          }
      }
      else
      {
        $data['error'] = "Sorry unable to process your request";
      }


      return view("activateacc_view", $data);
    }

    public function verifyExpiryTime($regtime)
    {
      $curtime = now();
      $regtime = strtotime($regtime);
      $diftime = $curtime - $regtime;
        if(3600 < $diftime)
        {
          return true;
        }
        else
        {
          return false;
        }
    }


    public function changepassdone()
    {
        $data = [];
        $data['validation'] = null;
        if($this->request->getMethod() == 'POST')
        {
          $rules = [
            "password" => "required|min_length[6]|max_length[16]",
            "confirm_password" => "required|matches[password]",  
          ];
        
  
          if($this->validate($rules))
          {
            $uniid =  $this->request->getVar("uniid");
            $password = password_hash($this->request->getVar("password"),PASSWORD_DEFAULT);
            $userpass = $this->forgotpassmodel->updatepassword($uniid , $password);

            if($userpass)
            {
                

                $this->session->setTempdata("logerror", "Account password updated successfully",3);
                return redirect()->to("/");
         
            }
            else
            {
                $data['error'] = "Sorry we're unable to update your password";
            }

          }
          else
          {
            $data['validation'] = $this->validator;
          }
        }
   
          return view('changepassword_view', $data);
    }
}
