@extends('layout.app')

@section('title', 'Welcome')

@section('main-content')
    <h1>
        Show Comic 
    </h1>
    <div>
        {{$comic->title}}
    </div>
@endsection