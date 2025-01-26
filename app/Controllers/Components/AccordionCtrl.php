<?php

namespace App\Controllers\Components;
use App\Controllers\BaseController;
use App\Controllers\Dashboard;
use App\Models\Components\AccordionModel;
class AccordionCtrl  extends BaseController
{
    public $dashboard;
    public $session;
    public $accordionmodel;

    public function __construct(){
      $this->dashboard = new Dashboard();
      $this->session = session();
      $this->accordionmodel = new AccordionModel();
    }

    public function displayAccordion($paccordion = null)
    {
   
        $accordion = null;
        $accordion = $paccordion;
  
    
        if ($accordion) {
            $this->session->set("accordion", $accordion);
            $accordiondata = $this->accordionmodel->getAccordion($accordion);
            $this->session->set("accordiondata", $accordiondata);
    
            // Assign Navbar data to the next available container
            $this->dashboard ->assignToNextContainer($accordiondata);
        }
    
        return redirect()->to(base_url() . "dashboard");
    }
}