@extends('layouts.app')

@section('body')
    <div class="container px-5">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row d-flex flex-wrap">
                <div class="text-center mb-4">
                    <h7 class="text-primary fw-bolder">Edit User</h7>
                </div>
                <div class="col-md-6 mt-3">
                    <input class="form-control" type="text" name="full_name" value="{{ $user->full_name }}" placeholder="Full Name">
                </div>
                <div class="col-md-6 mt-3">
                    <input class="form-control" type="text" name="department" value="{{ $user->department }}" placeholder="Department">
                </div>
                <div class="col-md-6 mt-3">
                    <input class="form-control" type="number" name="no_hp" value="{{ $user->no_hp }}" placeholder="No Handphone">
                </div>
                <div class="col-md-6 mt-3">
                    <input class="form-control" type="number" name="npk" value="{{ $user->npk }}" placeholder="NPK (6 Digit)">
                </div>
            </div>
            <div class="row justify-content-left">
                <div class="mt-4 mb-4 text-start">
                    <div class="">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
