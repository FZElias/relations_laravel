@extends('templates.structure')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center my-5">
            <h1 class="m-0">Users</h1>
            <button class="btn btn-success ml-3" data-toggle="modal" data-target=".user-create">Add user</button>
        </div>
        @include('users.create')
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $e)
                    <tr>
                        <th scope="row">{{ $e->id }}</th>
                        <td>{{ $e->name }}</td>
                        <td>{{ $e->email }}</td>
                        <td>{{ $e->password }}</td>
                        <td>{{ $e->roles->name }}</td>
                        <td class="d-flex">
                            <button class="btn btn-warning ml-3" data-toggle="modal" data-target=".user-edit-{{ $e->id }}">Edit</button>

                            @include('users.edit')
                            <form action="/user/{{ $e->id }}" method="post">
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
