<?php
  namespace App\Models;
  use CodeIgniter\Model;

  class UserModel extends Model
  {
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password'];
    protected $returnType = 'object';
    // protected $useTimestamps = true;

    public function getUserByUsername($name)
    {
        return $this->where('name', $name)->first();
    }

  }


  