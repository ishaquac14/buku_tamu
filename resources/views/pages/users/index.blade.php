@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Users List</h1>
                <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Create User</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Department</th>
                            <th>No Handphone</th>
                            <th>NPK</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->full_name }}</td>
                                <td>{{ $user->department }}</td>
                                <td>{{ $user->no_hp }}</td>
                                <td>{{ $user->npk }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
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
