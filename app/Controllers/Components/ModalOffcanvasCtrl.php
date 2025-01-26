<?php

namespace App\Controllers\Components;
use App\Controllers\BaseController;
use App\Controllers\Dashboard;
use App\Models\Components\ModalCanvasModel;

class ModalOffcanvasCtrl  extends BaseController
{
    public $dashboard;
    public $session;
    public $model;

    public function __construct(){
      $this->dashboard = new Dashboard();
      $this->session = session();
      $this->model = new ModalCanvasModel();
    }

    public function display($param1 = null)
    {
   
        $param = $param1;
  
    
        if ($param) {
            $this->session->set("param", $param);
            $paramdata = $this->model->getdata($param);
            $this->session->set("paramdata", $paramdata);
    
            // Assign Navbar data to the next available container
            $this->dashboard ->assignToNextContainer($paramdata);
        }
    
        return redirect()->to(base_url() . "dashboard");
    }
}