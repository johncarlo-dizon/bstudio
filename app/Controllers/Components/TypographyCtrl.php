<?php

namespace App\Controllers\Components;
use App\Controllers\BaseController;
use App\Controllers\Dashboard;
use App\Models\Components\TypographyModel;
class TypographyCtrl  extends BaseController
{
    public $dashboard;
    public $session;
    public $typomodel;

    public function __construct(){
      $this->dashboard = new Dashboard();
      $this->session = session();
      $this->typomodel = new TypographyModel();
    }

    public function displayTypography($ptypography = null)
    {
   
        $typography = null;
        $typography = $ptypography;
  
    
        if ($typography) {
            $this->session->set("typography", $typography);
            $typographydata = $this->typomodel->getTypography($typography);
            $this->session->set("typographydata", $typographydata);
    
            // Assign Navbar data to the next available container
            $this->dashboard ->assignToNextContainer($typographydata);
        }
    
        return redirect()->to(base_url() . "dashboard");
    }
}