@extends('layouts.dash')

@section('header-content')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Hospital Details </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('hospitals.index') }}">Hospitals</a></li>
                    <li class="breadcrumb-item active">Hospital</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Displaying the details of hospital #{{ $hospital->id }}</h3>
        </div>
        <div class="card-body">
            <div class="list-group">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">County ID</h5>
                            </div>
                            <p class="mb-1">{{ $hospital->county_id}}</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Hospital Name</h5>
                            </div>
                            <p class="mb-1">{{ $hospital->name }}{{-- {{ $hospital->hospital_level }}--}}</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Hospital Level</h5>
                            </div>
                            <p class="mb-1">{{ $hospital->level}}</p>
                        </a>
                        {{--<a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Location</h5>
                            </div>
                            <p class="mb-1">{{ $hospital->county_name }}</p>
                        </a>--}}

                    </div>
                </div>


            </div>

        </div>
        <div class="card-footer">
            <div class="row justify-content-around">
                @if(auth()->user()->isAdmin())
                <a href="#!" class="btn btn-danger delete-hospital">Delete</a>
                <a href="{{ route('hospitals.edit', ['hospital' => $hospital->id]) }}" class="btn btn-primary">Edit</a>
                @endif
            </div>
        </div>

        <form id="delete-hospital" method="POST" action="{{ route('hospitals.destroy', ['hospital' => $hospital->id]) }}"
              style="display:none">
            @csrf
            @method('DELETE')
        </form>
    </div>
@endsection

@push('footer-stack')
    <script !src="">
        $(function () {
            $('.delete-hospital').click(function () {
                $('#delete-hospital').submit()
            })
        })
    </script>
@endpush

