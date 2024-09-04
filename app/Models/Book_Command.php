<?php
  namespace App\Models;
  use CodeIgniter\Model;

  class Book_CommandModel extends Model
  {
    protected $table = 'books_command';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_books', 'id_command'];

  }


  