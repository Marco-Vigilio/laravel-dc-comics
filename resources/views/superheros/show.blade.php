@extends('layout.app')

@section('title', 'Welcome')

@section('main-content')
<h1>
    Show SuperHero
</h1>
<div>
    <p>name: {{$superhero->name}}</p>

    @foreach ($superhero->helpers as $helper)
    <p> helpers: {{ $helper->name }} --</p>
    @endforeach

</div>
<div>
    <a class="btn btn-sm btn-primary me-2" href="{{ route('superheros.index')}}">
        Back to List
    </a>
    <a class="btn btn-sm btn-success me-2" href="{{ route('superheros.edit',$superhero->id)}}">
        Edit
    </a>
</div>
@endsection