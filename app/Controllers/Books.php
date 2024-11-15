<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\Book_CommandModel;
use App\Models\BookModel;
use CodeIgniter\Controller;

class Books extends BaseController
{
    public function index(): string
    {

        $bookModel = new BookModel();
        // $booksCommandeModel = new Book_CommandModel();

        // construction de la reuête avec jointure
        $builder = $bookModel->builder();
        $builder->select('books.id, books.title, books.profil, books.author, books.Descriptions');
        $builder->select("CASE WHEN books_command.id_books IS NOT NULL THEN 'déja Commandé' ELSE 'Disponible' END AS statut_commande", false);
        $builder->join('books_command', 'books_command.id_books = books.id', 'left');
        $builder->orderBy('books.id', 'DESC');

        // Recuperation des resultats
        $query = $builder->get();
        $data['books'] = $query->getResultArray();

        return view('HomePage', $data);
    }

    public function show($id): string
    {
        $model = new BookModel();
        $data['books'] = $model->findAll($id);

        return view('commande/show', $data);
    }

}
