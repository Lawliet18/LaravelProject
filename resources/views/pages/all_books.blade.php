@extends('layouts.main')

@section('content')

    @foreach($allBooks->book as $book)
        <ul>
            <li><h2>{{$book->id}}</h2></li>
            <li><h4><a href="/genre/{{$book->id}}">{{$book->name}}</a></h4></li>
            <li><h5>{{$book->author}}</h5></li>
        </ul>
    @endforeach
@endsection
