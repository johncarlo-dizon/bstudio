<?php 
namespace App\Models\OuterModel;
use CodeIgniter\Model;

class ForgotpassModel extends Model
{
  public function findUser($useremail){
    $builder = $this->db->table('users');
    $builder->select("uniid,status,email,username,password");
    $builder->where("email",$useremail);
    $res = $builder->get();

    if(count($res->getResultArray())==1)
    {
      return $res->getRowArray();
    }
    else
    {
      return false;
    }
  }


  public function updateUniid($newuniid, $useremail, $timereset){
    $builder = $this->db->table('users');
    $builder->set("uniid", $newuniid);
    $builder->set("reset_passTime", $timereset);
    $builder->where("email",$useremail);
    $res = $builder->update();

    if($this->db->affectedRows()==1)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function updatepassword($uniid, $password){
    $builder = $this->db->table('users');
    $builder->set("password", $password);
    $builder->where("uniid",$uniid);
    $res = $builder->update();

    if($this->db->affectedRows()==1)
    {
      return true;
    }
    else
    {
      return false;
    }
  }


  public function verifyUni($uniid)
  {
    $builder = $this->db->table('users');
    $builder->select("reset_passTime,status,uniid");
    $builder->where("uniid ", $uniid);
    $res = $builder->get();
    
    if(count($res->getResultArray())==1)
    {
      return $res->getRow();;  
    }
    else
    {
      return false;
    }
  }
}

