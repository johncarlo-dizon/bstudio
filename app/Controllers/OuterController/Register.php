<?php

namespace App\Controllers\OuterController;
use App\Controllers\BaseController;
use \App\Models\OuterModel\RegisterModel;

class Register extends BaseController
{

    public $registermodel;
    public $session;
    public $email;
    public function __construct(){
      helper('form');
      helper('date');
      $this->registermodel = new RegisterModel();
      $this->session = \Config\Services::session();
      $this->email = \Config\Services::email();
    }

    public function index(): string
    {
        $data = [];
        $data['validation'] = null;
        return view('register_view', $data);
    }

    public function insertdata()
    {
      $data = [];
      if($this->request->getMethod() == 'POST')
      {
        $rules = [
          "username" => "required|min_length[4]|max_length[20]",
          "email" => "required|valid_email|is_unique[users.email]",
          "password" => "required|min_length[6]|max_length[16]",
          "confirm_password" => "required|matches[password]",  
        ];
      

        if($this->validate($rules))
        {
            $uniid = md5(str_shuffle("abcdefghijklmnopqrstuvwxyz".time()));
            $userdata = [
              "email" => $this->request->getVar("email"),
              "username" => $this->request->getVar("username", FILTER_SANITIZE_STRING),
              "password" => password_hash($this->request->getVar("password"),PASSWORD_DEFAULT),
              "uniid" => $uniid,
              "created_at" => date("Y-m-d h:i:s"),
              "activation_date" => date("Y-m-d h:i:s"),
            ];

            if($this->registermodel->createuser($userdata))
            {

                  $to = $this->request->getVar("email");
                  $subject = "Account Activation Link";
                  $message = 'Hi ' . $this->request->getVar("username", FILTER_SANITIZE_STRING) . ',<br><br>
                  Thank you for creating an account with us!<br>
                  To complete your registration, please activate your account by clicking the link below:<br><br>
                  <a href="' . base_url() . 'activate/' . $uniid . '" target="_blank">Activate My Account</a><br><br>
                  If you didn\'t request this, please ignore this email.<br><br>
                  Best regards,<br>
                  BSTUDIO';
                  

                  $this->email->setTo($to);
                  $this->email->setFrom("johncarlovictoriadizon@gmail.com", "Info");
                  $this->email->setSubject($subject);
                  $this->email->setMessage($message );
                

                  if(  $this->email->send())
                  {
              
                    $this->session->setTempdata('error', 'Account Created Successfully, Please Check Your Email');
                    return redirect()->to("/sign_up");
                  }
                  else
                  {
                    $del = $this->registermodel->undoInsert($this->request->getVar("email"));
                    if($del){
                      $this->session->setTempdata('error', 'Sorry unable to register your account, Check your Internet');
                      return redirect()->to("/sign_up");
                    }
                  
                  
                  }




            }
            else
            {
              $this->session->setTempdata('error', 'Failed to create your account. Try Again');
              return redirect()->to("/");
            }

        }
        else
        {
          $data['validation'] = $this->validator;
        }
      }
 
        return view('register_view', $data);
    }







    public function activate($uniid = null)
    {
      $data = [];

      if(!empty($uniid))
      {
          $userdata = $this->registermodel->verifyUni($uniid);

          if($userdata)
          {
              
              if($this->verifyExpiryTime($userdata->activation_date))
              {
                    if($userdata->status == "inactive")
                    {
                        $stat = $this->registermodel->updatestatus($uniid);
                        if($stat == true)
                        {
                          $data['success'] = "Account activated successfully";
                        }
                    }
                    else
                    {
                      $data['success'] = "Your account is already activated"; 
                    }
              } 
              else
              {
                $data['error'] = "Sorry activation link was expired";
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



}
