<?php

namespace App\Controllers\Components;
use App\Controllers\BaseController;
use App\Controllers\Dashboard;
use App\Models\Components\BadgeButtonModel;
class BadgeButtonCtrl  extends BaseController
{
    public $dashboard;
    public $session;
    public $badgebtn;

    public function __construct(){
      $this->dashboard = new Dashboard();
      $this->session = session();
      $this->badgebtn = new BadgeButtonModel();
    }

    public function displayBadgeBtn($pbadgebtn = null)
    {
   
        $badgebtns = null;
        $badgebtns = $pbadgebtn ;
  
    
        if ($badgebtns) {
            $this->session->set("badgebtns", $badgebtns);
            $badgebtnsdata = $this->badgebtn->getBadgeButton($badgebtns);
            $this->session->set("badgebtnsdata", $badgebtnsdata);
    
            // Assign Navbar data to the next available container
            $this->dashboard ->assignToNextContainer($badgebtnsdata);
        }
    
        return redirect()->to(base_url() . "dashboard");
    }
}