@extends('layout.app')

@section('title', 'Welcome')

@section('main-content')
    <h1>
        Comics
    </h1>
    <div>
        @foreach($fumetto as $comic)
            <li>
                <a href="">{{$comic->title}} - {{$comic->price}}</a>
                
            </li>
        @endforeach
    </div>
@endsection