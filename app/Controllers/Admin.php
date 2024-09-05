<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\Book_CommandModel;
use App\Models\BookModel;
use App\Models\CommandModel;
use CodeIgniter\Controller;

class Admin extends BaseController
{
    public function AddBooks(): string
    {
        return view('books/Addbooks');
    }

    public function ViewsCommand(): string
    {
        return view('books/CommandBooks');
    }

    public function AddLivre()
    {
        
        $data = [
            "title" => $this->request->getPost("title"),
            "author" => $this->request->getPost("author"),
            "Descriptions" => $this->request->getPost("Descriptions"),
        ];


        $model = new BookModel();
        $model->insert($data);
        session()->setFlashdata("success", "Ajout effectuer avec success");
        
        return redirect()->to('AddBook');
    }

}
