<?php

namespace App\Controllers\Components;
use App\Controllers\BaseController;
use App\Controllers\Dashboard;
use App\Models\Components\NavTabModel;
class NavTabCtrl  extends BaseController
{
    public $dashboard;
    public $session;
    public $navtabmodel;

    public function __construct(){
      $this->dashboard = new Dashboard();
      $this->session = session();
      $this->navtabmodel = new NavTabModel();
    }

    public function displayNavTab($pnavtab = null)
    {
   
        $navtab = $pnavtab;
  
    
        if ($navtab) {
            $this->session->set("navtab", $navtab);
            $navtabdata = $this->navtabmodel->getNavTab($navtab);
            $this->session->set("navtabdata", $navtabdata);
    
            // Assign Navbar data to the next available container
            $this->dashboard ->assignToNextContainer($navtabdata);
        }
    
        return redirect()->to(base_url() . "dashboard");
    }
}