<?php

Route::get('/', function () {
	$users = factory(App\User::class,5)->make();
    return view('pages.home',compact('users'));
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    $books = App\BooksCustomer::all();
    $ggg = App\Books::find(1);

    return view('pages.contact',compact('books'));
});
Route::get('/about/{id}', function ($id) {
    return $id * $id;
});
Route::get('/customer/book/{id}', function ($id) {
    $allBooks = App\BooksCustomer::find($id)->book;
    return view('pages.contact_books',compact('allBooks'));
});
Route::get('/all/book/{id}', function ($id) {
    $allBooks = App\BooksGenre::find($id);
    return view('pages.all_books',compact('allBooks'));
});
Route::get('/genre/{id}', function ($id) {
    $allBooks = App\Books::find($id);
    return view('pages.genre',compact('allBooks'));
});
Route::get('/about/{id}/comment/{comment}', function ($id,$comment) {
    return $id * $comment;
});
Route::get('/welcome','UserController@index');

