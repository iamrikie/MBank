@extends('layouts.dash')

@section('header-content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User Details </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Displaying the details of user #{{ $user->id }}</h3>
        </div>
        <div class="card-body">
            <div class="list-group">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Name</h5>
                            </div>
                            <p class="mb-1">{{ $user->first_name }} {{ $user->last_name }}</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Username</h5>
                            </div>
                            <p class="mb-1">{{ $user->username }}</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">ID Number</h5>
                            </div>
                            <p class="mb-1">{{ $user->id_number }}</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Phone Number</h5>
                            </div>
                            <p class="mb-1">{{ $user->phone_number }}</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Email Address</h5>
                            </div>
                            <p class="mb-1">{{ $user->email }}</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Rank</h5>
                            </div>
                            <p class="mb-1">{{ $user->rank }}</p>
                        </a>
                    </div>
                </div>


            </div>

        </div>
        <div class="card-footer">
            <div class="row justify-content-around">
                <a href="#!" class="btn btn-danger delete-user">Delete</a>
                <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary">Edit</a>
            </div>
        </div>

        <form id="delete-user" method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}"
              style="display:none">
            @csrf
            @method('DELETE')
        </form>
    </div>
@endsection

@push('footer-stack')
    <script !src="">
        $(function () {
            $('.delete-user').click(function () {
                $('#delete-user').submit()
            })
        })
    </script>
@endpush
