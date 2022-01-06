@extends('layouts.dash')

@section('header-content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Invoice Details </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('invoices.index') }}">Invoices</a></li>
                    <li class="breadcrumb-item active">Invoice</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('main-content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Displaying the details of invoice #{{ $invoice->id }}</h3>
        </div>
        <div class="card-body">
            <div class="list-group">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Title</h5>
                            </div>
                            <p class="mb-1">{{ $invoice->invoice_title }} {{ $invoice->last_name }}</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Description</h5>
                            </div>
                            <p class="mb-1">{{ $invoice->invoice_description }}</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Amount</h5>
                            </div>
                            <p class="mb-1">{{ number_format($invoice->invoice_amount, 2, '.', ',') }}</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Patient's name</h5>
                            </div>
                            <p class="mb-1">{{ $invoice->patient->user->first_name }} {{ $invoice->patient->user->last_name }}</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Created</h5>
                            </div>
                            <p class="mb-1">{{ $invoice->created_at->toDayDateTimeString() }}</p>
                        </a>
                    </div>
                </div>


            </div>

        </div>

        <div class="card-footer">
            <div class="row justify-content-around">
                <a href="{{ route('invoices.print', ['invoice' => $invoice->id]) }}" class="btn btn-primary">Print</a>
            </div>
        </div>
@endsection
