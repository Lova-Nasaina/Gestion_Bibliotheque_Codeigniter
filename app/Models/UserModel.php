<?php
  namespace App\Models;
  use CodeIgniter\Model;

  class UserModel extends Model
  {
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password'];
    // protected $returnType = 'object';
    // protected $useTimestamps = true;

    public function getUserByUsername(string $name)
    {
        return $this->where('name', $name)->first();
    }

    public function getUserById(int $id)
    {
      return $this->where('name', $id)->first();
    }

    public function getUserByEmail(string $email)
    {
      return $this->where('email', $email)->first();
    }

  }


  