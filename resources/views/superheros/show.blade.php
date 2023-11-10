@extends('layout.app')

@section('title', 'Welcome')

@section('main-content')
<h1>
    Show SuperHero
</h1>
<div>
    <p>name: {{$superhero->name}}</p>
</div>
<div>
    <a class="btn btn-sm btn-primary me-2" href="{{ route('superheros.index')}}">
        Back to List
    </a>
</div>
@endsection