<?php

namespace App;
use App;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function books_customer(){
        return $this->belongsTo(BooksCustomer::class);
    }
    public function books_genre(){
        return $this->belongsToMany(BooksGenre::class , 'book_books_genre' , 'books_id' , 'books_genre_id');
    }
    public function findAllGenre($id){
        $allBooks = App\Books::find($id);
        return view('pages.genre',compact('allBooks'));
    }

}
