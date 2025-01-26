<?php
namespace App\Controllers;

class Container extends BaseController
{
  public $session;

  public function __construct(){
    $this->session = session();
  }
  public function getList($id){
    $this->session->set("cont", $id);
    return redirect()->to(base_url("dashboard"));
  }

  
  public function getContent($id){
    $this->session->set("conts", $id);
    return redirect()->to(base_url("dashboard"));
  }

  public function getpage($id){
    $this->session->set("pagename", $id);
    return redirect()->to(base_url("dashboard"));
  }

  
}