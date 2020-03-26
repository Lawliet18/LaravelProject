

@section('content')

    @foreach($allBooks->book as $book)
        <ul>
            <li><h2>{{$book->id}}</h2></li>
            <li><h4><a href="/genre/{{$book->id}}">{{$book->name}}</a></h4></li>
            <li><h5>{{$book->author}}</h5></li>
        </ul>
        @extends('layouts.main', ['title'=> $book->name])
        @if($book->name == 'ggg')
            <h1>hello</h1>
        @elseif($book->author == 'qwerqwr')
            <h2>80</h2>
        @endif
    @endforeach

@endsection
