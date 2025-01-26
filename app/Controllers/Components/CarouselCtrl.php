<?php

namespace App\Controllers\Components;
use App\Controllers\BaseController;
use App\Controllers\Dashboard;
use App\Models\Components\CarouselModel;
class CarouselCtrl  extends BaseController
{
    public $dashboard;
    public $session;
    public $carouselmodel;

    public function __construct(){
      $this->dashboard = new Dashboard();
      $this->session = session();
      $this->carouselmodel = new CarouselModel();
    }

    public function displayCarousel($pcarousel = null)
    {
   
        $carousel = null;
        $carousel = $pcarousel;
  
    
        if ($carousel) {
            $this->session->set("carousel", $carousel);
            $carouseldata = $this->carouselmodel->getCarousel($carousel);
            $this->session->set("carouseldata", $carouseldata);
    
            // Assign Navbar data to the next available container
            $this->dashboard ->assignToNextContainer($carouseldata);
        }
    
        return redirect()->to(base_url() . "dashboard");
    }
}