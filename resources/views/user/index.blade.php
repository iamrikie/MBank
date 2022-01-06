@extends('layouts.dash')

@section('header-content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Users</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">A list of all the users in the system</h3>

            <div class="card-tools">
                @if(auth()->user()->isAdmin())
                    <a href="{{ route('users.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i> Add A User
                    </a>
                @endif
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Username</th>
                    <th>ID Number</th>
                    <th>Email Address</th>
                    <th>Rank</th>
                    <th>Date Registered</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->id_number }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->rank }}</td>
                        <td>{{ $user->created_at->toDayDateTimeString() }}</td>
                        <td>
                            <a href="{{ route('users.show', ['user' => $user->id]) }}" class="btn btn-primary-outline"
                               data-toggle="tooltip"
                               data-placement="bottom"
                               title="View user details">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="row justify-content-around">
                <div>
                    Showing page {{ $users->currentPage() }} of {{ $users->lastPage() }} pages -
                    {{ $users->lastItem() }} users per page.
                </div>
                {{ $users->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
