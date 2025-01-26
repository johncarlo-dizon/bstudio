<?php

namespace App\Controllers\OuterController;
use App\Controllers\BaseController;
use  App\Models\OuterModel\LoginModel;
class Login extends BaseController
{
    public $loginmodel;
    public $session;
    public function __construct(){
        helper('form');
        $this->session = session();
        $this->loginmodel = new LoginModel();
    }
    public function index(): string
    {
        $data ['validation'] = null;
        return view('login_view', $data);
    }
    public function login()
    {   
        $data = [];
        if($this->request->getMethod() == "POST")
        {
           $rules = [
            "email" => "required|valid_email",
            "password" => "required|min_length[6]|max_length[16]",
           ];

      

           if( $this->validate($rules))
           {
                $email = $this->request->getVar("email");
                $password = $this->request->getVar("password");
                $userdata = $this->loginmodel->verifyEmail($email);
                if($userdata)
                {
                 
                    if(password_verify($password, $userdata['password']))
                    {
                        if($userdata['status'] == "active" )
                        {
                            $this->session->set("logged_user", $userdata["uniid"]);
                            return redirect()->to(base_url()."dashboard");
                        }
                        else
                        {
                            $this->session->setTempdata("logerror", "Please activate your account, Contact Admin",3);
                            return redirect()->to("/");
                        }
                    }
                    else
                    {
                        $this->session->setTempdata("logerror", "Sorry! wrong password for entered email",3);
                        return redirect()->to("/");
                    }
                }
                else
                {
                    $this->session->setTempdata("logerror", "Sorry! email does not exist",3);
                    return redirect()->to("/");
                }


           }
           else
           {
                $data['validation'] = $this->validator;
           }
        }


        return view('login_view' , $data);
    }




}
