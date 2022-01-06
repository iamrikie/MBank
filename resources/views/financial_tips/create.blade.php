@extends('layouts.dash')

@section('header-content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Appointment </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('appointments.index') }}">Appointments</a></li>
                    <li class="breadcrumb-item active">Appointment</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Add a new Appointment</h3>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form method="post" action="{{ route('appointments.store') }}">
                        @csrf


                        <div class="input-group mb-3">
                            <input id="patient_id" type="text"
                                   class="form-control @error('patient_id') is-invalid @enderror"
                                   name="category_id" value="{{ old('patient_id') }}" placeholder="Patient">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            @error('patient_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="doctor_id" type="text"
                                   class="form-control @error('doctor_id') is-invalid @enderror"
                                   name="doctor_id" value="{{ old('doctor_id') }}" placeholder="Doctor">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            @error('doctor_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="date" type="text"
                                   class="form-control @error('date') is-invalid @enderror"
                                   name="date" value="{{ old('date') }}" placeholder="Date" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                            </div>
                            @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="start_time" type="text"
                                   class="form-control @error('start_time') is-invalid @enderror"
                                   name="start_time" value="{{ old('start_time') }}" placeholder="Start Time">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-business-time"></span>
                                </div>
                            </div>
                            @error('start_time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="end_time" type="text"
                                   class="form-control @error('end_time') is-invalid @enderror"
                                   name="end_time" value="{{ old('end_time') }}" placeholder="End Time">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-business-time"></span>
                                </div>
                            </div>
                            @error('end_time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="status" type="text"
                                   class="form-control @error('status') is-invalid @enderror"
                                   name="status" value="{{ old('status') }}" placeholder="Status">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-audio-description"></span>
                                </div>
                            </div>
                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="approved" type="text"
                                   class="form-control @error('approved') is-invalid @enderror"
                                   name="approved" value="{{ old('approved') }}" placeholder="Approved">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-audio-description"></span>
                                </div>
                            </div>
                            @error('approved')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="row justify-content-end">

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-footer">
        </div>
    </div>

@endsection


