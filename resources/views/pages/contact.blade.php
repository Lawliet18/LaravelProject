@extends('layouts.main')

@section('content')
	contact page
    @foreach($books as $book)
        <br>
        <h4><a href="/customer/book/{{$book->id}}">{{$book->name}}</a></h4>
    @endforeach
@endsection
