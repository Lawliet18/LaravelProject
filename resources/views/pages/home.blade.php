@extends('layouts.main', ['title'=> 'Something with h1'])

@section('content')
	home page
    @each('partials.users-box',$users,'user')
    {{-- @foreach ($users as $user)
        @include('partials.users-box',['user'=>$user])
    @endforeach --}}
    @if($users[1]->name == 'Miss Breanna Dooley')
        <h1>hi</h1>
    @elseif(true)
        <h1>hello</h1>
    @else
        <h1>GG</h1>
    @endif
@endsection
