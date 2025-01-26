<?php

namespace App\Controllers\Components;
use App\Controllers\BaseController;
use App\Controllers\Dashboard;
use App\Models\Components\AlertModel;
class AlertCtrl  extends BaseController
{
    public $dashboard;
    public $session;
    public $alertmodel;

    public function __construct(){
      $this->dashboard = new Dashboard();
      $this->session = session();
      $this->alertmodel = new AlertModel();
    }

    public function displayAlert($palert = null)
    {
   
        $alert = null;
        $alert = $palert;
  
    
        if ($alert) {
            $this->session->set("alert", $alert);
            $alertdata = $this->alertmodel->getAlert($alert);
            $this->session->set("alertdata", $alertdata);
    
            // Assign Navbar data to the next available container
            $this->dashboard ->assignToNextContainer($alertdata);
        }
    
        return redirect()->to(base_url() . "dashboard");
    }
}