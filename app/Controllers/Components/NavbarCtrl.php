<?php

namespace App\Controllers\Components;
use App\Controllers\BaseController;
use App\Controllers\Dashboard;
use App\Models\Components\NavbarModel;
class NavbarCtrl  extends BaseController
{
    public $dashboard;
    public $session;
    public $navbarmodel;

    public function __construct(){
      $this->dashboard = new Dashboard();
      $this->session = session();
      $this->navbarmodel = new NavbarModel();
    }

    public function displayNavbar($pnavbar = null)
    {
   
        $navbar = null;
        $navbar = $pnavbar;
  
    
        if ($navbar) {
            $this->session->set("navbar", $navbar);
            $navbardata = $this->navbarmodel->getNavbar($navbar);
            $this->session->set("navbardata", $navbardata);
    
            // Assign Navbar data to the next available container
            $this->dashboard ->assignToNextContainer($navbardata);
        }
    
        return redirect()->to(base_url() . "dashboard");
    }
}