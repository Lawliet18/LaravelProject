<?php

namespace App;
use App;
use Illuminate\Database\Eloquent\Model;

class BooksGenre extends Model
{
    public function book(){
        return $this->belongsToMany(Books::class , 'book_books_genre' , 'books_genre_id','books_id');
    }
    public function findAllBooks($id){
        $allBooks = App\BooksGenre::find($id);
        return view('pages.all_books',compact('allBooks'));
    }
}
