<?php
  namespace App\Models;
  use CodeIgniter\Model;

  class AdminModel extends Model
  {
    protected $table = 'administrator';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'code', 'email', 'password'];
    // protected $returnType = 'object';
    // protected $useTimestamps = true;

    public function getAdminByUsername(string $name)
    {
        return $this->where('name', $name)->first();
    }

    public function getAdminById(int $id)
    {
      return $this->where('name', $id)->first();
    }

    public function getAdminByEmail($email)
    {
      return $this->where('email', $email)->first();
    }

  }


  