<?php

namespace App\Controllers\Components;
use App\Controllers\BaseController;
use App\Controllers\Dashboard;
use App\Models\Components\CardModel;
class CardCtrl  extends BaseController
{
    public $dashboard;
    public $session;
    public $cardmodel;

    public function __construct(){
      $this->dashboard = new Dashboard();
      $this->session = session();
      $this->cardmodel = new CardModel();
    }

    public function displayCard($pcard = null)
    {
   
        $card = null;
        $card = $pcard;
  
    
        if ($card) {
            $this->session->set("card", $card);
            $carddata = $this->cardmodel->getCard($card);
            $this->session->set("carddata", $carddata);
    
            // Assign Navbar data to the next available container
            $this->dashboard ->assignToNextContainer($carddata);
        }
    
        return redirect()->to(base_url() . "dashboard");
    }
}