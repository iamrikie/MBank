@extends('layouts.dash')

@section('header-content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Appointment Requests</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Appointment Requests</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">A list of appointment requests from patients</h3>

            <div class="card-tools">
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Patient</th>
                    <th>Doctor</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->id }}</td>
                        <td>{{ $appointment->patient->user->first_name }} {{ $appointment->patient->user->last_name }}</td>
                        <td>{{ $appointment->doctor->user->first_name }} {{ $appointment->doctor->user->last_name }}</td>
                        <td>{{ $appointment->appointment_start_time->toDayDateTimeString() }}</td>
                        <td>{{ $appointment->appointment_end_time->toDayDateTimeString() }}</td>
                        <td>{{ config('sys.appointment.statuses')[$appointment->appointment_status] }}</td>
                        <td>
                            <a href="{{ route('doctor.appointments.show', ['appointment' => $appointment->id]) }}"
                               class="btn btn-primary-outline"
                               data-toggle="tooltip"
                               data-placement="bottom"
                               title="View appointment details">
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
                    Showing page {{ $appointments->currentPage() }} of {{ $appointments->lastPage() }} pages -
                    {{ $appointments->lastItem() }} appointments per page.
                </div>
                {{ $appointments->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
