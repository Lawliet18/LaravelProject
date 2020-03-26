

@section('content')
    @foreach($allBooks->books_genre as $genre)
        <ul>
        <li><h2>{{$genre->id}}</h2></li>
        <li><h3><a href="/all/book/{{$genre->id}}">{{$genre->genre}}</a></h3></li>
        </ul>
        @extends('layouts.main',['title' => $genre->genre])
    @endforeach
@endsection
