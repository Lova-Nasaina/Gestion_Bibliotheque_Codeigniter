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
        $picture = $this->request->getFile("sary");
        // var_dump($picture);
        // die();

        $name = $picture->getName();
        $data = [
            "title" => $this->request->getPost("title"),
            "author" => $this->request->getPost("author"),
            "Descriptions" => $this->request->getPost("Descriptions"),
            "profil" => '/'. $name,
        ];

        $picture->move(ROOTPATH . "/public/sary/", $name);


        $model = new BookModel();
        $model->insert($data);
        session()->setFlashdata("success", "Ajout effectuer avec success");
        
        return redirect()->to('AddBook');
    }

}
