@extends('layout.app')

@section('title', 'Welcome')

@section('main-content')
<h1>
    Show SuperHero
</h1>
<div>
    {{$superhero->name}}
</div>
@endsection