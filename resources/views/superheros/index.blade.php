@extends('layout.app')

@section('title', 'Welcome')

@section('main-content')
<h1 class="text-center my-3">
    Superhero List
</h1>
<div class="row m-auto">
    <div class="col-11 m-auto">
        <table class="table table-striped table-hover text-center table-bordered">
            <thead>
                <tr>
                    <th class="col-1">Id</th>
                    <th class="col-7">Name</th>
                    <th class="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($superherosList as $superhero)
                <tr class="">
                    <td scope="col-3">
                        {{$superhero->id}}
                    </td>
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
                        <form action="{{route('superheros.destroy', $superhero)}}" class="d-inline form-terminator" method="POST">
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