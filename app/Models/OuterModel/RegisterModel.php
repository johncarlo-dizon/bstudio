<?php 
namespace App\Models\OuterModel;

use CodeIgniter\Model;

class RegisterModel extends Model{
  public function createuser($data)
  {
      $builder = $this->db->table('users');
      $res = $builder->insert($data);

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
    $builder->select("activation_date,status,uniid");
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

  public function undoInsert($email)
  {
    $builder = $this->db->table('users');
    $builder->where("email ", $email);
    $res = $builder->delete();
    
    if($this->db->affectedRows()==1)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
  


  public function updatestatus($uniid)
  {
    $builder = $this->db->table('users');
    $builder->where("uniid ", $uniid);
    $builder->update(['status' => 'active']);


    if($this->db->affectedRows()==1)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  
}