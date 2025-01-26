<?php

namespace App\Controllers\Components;
use App\Controllers\BaseController;
use App\Controllers\Dashboard;
use App\Models\Components\FormModel;
class FormCtrl  extends BaseController
{
    public $dashboard;
    public $session;
    public $formmodel;

    public function __construct(){
      $this->dashboard = new Dashboard();
      $this->session = session();
      $this->formmodel = new FormModel();
    }

    public function displayForm($pform = null)
    {
   
        $form = null;
        $form = $pform;
  
    
        if ($form) {
            $this->session->set("form", $form);
            $formdata = $this->formmodel->getForm($form);
            $this->session->set("formdata", $formdata);
    
            // Assign Navbar data to the next available container
            $this->dashboard ->assignToNextContainer($formdata);
        }
    
        return redirect()->to(base_url() . "dashboard");
    }
}