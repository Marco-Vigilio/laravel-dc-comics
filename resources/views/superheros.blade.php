@extends('layout.app')

@section('title', 'Welcome')

@section('main-content')
    <h1>
        Superhero List
    </h1>
    <div>
        @foreach($superherosList as $superhero)
            <li>
                <a href="#">
                
                    {{$superhero->name}}
                </a>
            </li>
        @endforeach
    </div>
@endsection