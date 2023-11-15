@extends('layout.app')

@section('title', 'Welcome')

@section('main-content')
<h1>
    Show SuperHero
</h1>
<div>
    <h2>Name: </h2>
    <p>{{$superhero->name}}</p>

    <h3>Helpers: </h3>
    <ul>
        @foreach ($superhero->helpers as $helper)
        <li>{{ $helper->name }} --</li>
        @endforeach
    </ul>

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