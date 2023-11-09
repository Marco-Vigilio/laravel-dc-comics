@extends('layout.app')

@section('title', 'Welcome')

@section('main-content')
<h1>
    Superhero List
</h1>
<div class="row">
    <div class="col-12">
        <table class="table table-striped table-hover text-center table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($superherosList as $superhero)
                <tr>
                    <th scope="row">
                        {{$superhero->id}}
                    </th>
                    <td>
                        {{$superhero->name}}
                    </td>
                    <td>
                        <a class="btn btn-sm btn-primary me-2" href="{{ route('superheros.show',$superhero->id)}}">
                            View
                        </a>
                        <a class="btn btn-sm btn-success me-2" href="{{ route('superheros.edit',$superhero->id)}}">
                            Edit
                        </a>
                        <form action="#" class="d-inline form-terminator" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-warning me-2">
                                Delete
                            </button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection