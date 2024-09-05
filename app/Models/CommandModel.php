<?php
  namespace App\Models;
  use CodeIgniter\Model;

  class CommandModel extends Model
  {
    protected $table = 'command';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'id_admin', 'duration'];

  }


  