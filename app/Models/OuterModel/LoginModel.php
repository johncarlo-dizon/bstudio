<?php
namespace App\Models\OuterModel;
use CodeIgniter\Model;

class LoginModel extends  Model{
    public function verifyEmail($email)
    {
      $builder = $this->db->table('users');
      $builder->select("uniid,status,email,username,password");
      $builder->where("email",$email);
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
}