<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $model = new App\BooksCustomer;
        return $model->findAllBooks();
    }
    public function customer($id){
        $model = new App\BooksCustomer;
        return $model->findBooksId($id);
    }
    public function allBooks($id){
        $model = new App\BooksGenre;
        return $model->findAllBooks($id);
    }
    public function allGenre($id){
        $model = new App\Books;
        return $model->findAllGenre($id);
    }
}
