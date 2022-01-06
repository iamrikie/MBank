@extends('layouts.dash')

@section('header-content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Invoices</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Invoices</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">A list of all invoices in the system</h3>

            <div class="card-tools">
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($invoices as $invoice)
                    <tr>
                        <td>{{  $invoice->id }}</td>
                        <td>{{  $invoice->invoice_title }}</td>
                        <td>{{  substr($invoice->invoice_description, 0, 64) }}...</td>
                        <td>KSh. {{  number_format($invoice->invoice_amount, 2, '.', ',') }}</td>
                        <td>{{  $invoice->created_at->toDayDateTimeString() }}</td>
                        <td>
                            <a href="{{ route('invoices.show', ['invoice' => $invoice->id]) }}"
                               class="btn btn-primary-outline"
                               data-toggle="tooltip"
                               data-placement="bottom"
                               title="View invoice details">
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
                    Showing page {{ $invoices->currentPage() }} of {{ $invoices->lastPage() }} pages -
                    {{ $invoices->lastItem() }} invoices per page.
                </div>
                {{ $invoices->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
@endsection
