@extends('templates.structure')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center my-5">
            <h1 class="m-0">Photos</h1>
            <button class="btn btn-success ml-3" data-toggle="modal" data-target=".photo-create">Add photo</button>
        </div>
        @include('photos.create')
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name Photo</th>
                    <th scope="col">Album</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photos as $e)
                    <tr>
                        <th scope="row">{{ $e->id }}</th>
                        <td>{{ $e->name }}</td>
                        <td>{{ $e->albums->name }}</td>
                        <td class="d-flex">
                            <button class="btn btn-warning ml-3" data-toggle="modal" data-target=".photo-edit-{{ $e->id }}">Edit</button>

                            @include('photos.edit')
                            <form action="/photo/{{ $e->id }}" method="post">
                                @csrf
                                @method("delete")
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
