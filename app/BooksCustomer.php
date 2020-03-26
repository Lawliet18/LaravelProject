<?php

namespace App;
use App;
use Illuminate\Database\Eloquent\Model;

class BooksCustomer extends Model
{
    public function book(){
        return $this->hasMany(Books::class);
    }
    public function findAllBooks(){
        $books = App\BooksCustomer::all();
        return view('pages.contact',compact('books'));
    }
    public function findBooksId($id){
        $allBooks = App\BooksCustomer::find($id)->book;
        return view('pages.contact_books',compact('allBooks'));
    }
}
