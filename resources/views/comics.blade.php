@extends('layout.app')

@section('title', 'Welcome')

@section('main-content')
<div class="contain">
<h1>
        Comics
    </h1>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover text-center table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Serie</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fumetto as $comic)
                        <tr>
                            <th scope="row">
                                {{ $comic->id }}
                            </th>
                            <td>
                                {{ $comic->title  }}
                            </td>
                            <td>
                                {{ $comic->series  }}
                            </td>
                            <td>
                                <a class="btn btn-sm btn-primary me-2"
                                    href="{{ route('comics.show',$comic->id)}}">
                                    View
                                </a>
                                <a class="btn btn-sm btn-success me-2"
                                    href="#">
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
</div>
    
    
@endsection