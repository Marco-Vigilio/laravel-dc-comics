@extends('layout.app')

@section('title', 'Welcome')

@section('main-content')
<h1>
    Show SuperHero Edit
</h1>
<div>
    <form action="{{route('superheros.update', $superhero)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method ('PUT')

        @error('name')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="{{ old('name', $superhero->name)}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection