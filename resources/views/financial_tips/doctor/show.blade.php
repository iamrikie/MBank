@extends('layouts.dash')

@section('header-content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Appointment Request Details</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('doctor.appointments.index') }}">Appointment Requests</a>
                    </li>
                    <li class="breadcrumb-item active">Appointment Request</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Displaying the details of appointment #{{ $appointment->id }}</h3>
        </div>
        <div class="card-body">
            <div class="list-group">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Status</h5>
                            </div>
                            <p class="mb-1">{{ config('sys.appointment.statuses')[$appointment->appointment_status] }} </p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Patient</h5>
                            </div>
                            <p class="mb-1">{{ $appointment->patient->user->first_name }} {{ $appointment->patient->user->last_name }}</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Doctor</h5>
                            </div>
                            <p class="mb-1">{{ $appointment->doctor->user->first_name }} {{ $appointment->doctor->user->last_name }}</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Start Time</h5>
                            </div>
                            <p class="mb-1">{{ $appointment->appointment_start_time->toDayDateTimeString() }}</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">End Time</h5>
                            </div>
                            <p class="mb-1">{{ $appointment->appointment_end_time->toDayDateTimeString() }}</p>
                        </a>
                    </div>
                </div>

            </div>

        </div>

        <div class="card-footer">
            <div class="row justify-content-around">
                {{--<a href="{{ route('invoices.print', ['invoice' => $appointment->id]) }}"
                   class="btn btn-primary">Print</a>--}}
            </div>
        </div>
@endsection
