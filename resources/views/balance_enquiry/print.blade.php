<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Invoice</title>

    <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <style>
        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .color-child-5 {
            color: #13cfd7;
        }
        .color-child-6 {
            color: #00acdb;
        }
        .bold400 {
            font-weight: 400;
        }
        .bold500 {
            font-weight: 500;
        }
        .bold600 {
            font-weight: 600;
        }
        .link {
            text-decoration:none;
        }
        .brand-link .brand-image {
            /*float: left;*/
            line-height: .8;
            margin-left: .8rem;
            margin-right: .1rem;
            margin-top: 15px;
            max-height: 35px;
            width: auto;
        }
        .elevation-3 {
            box-shadow: 0 10px 20px rgba(0,0,0,.19),0 6px 6px rgba(0,0,0,.23) !important;
        }
        .img-circle {
            border-radius: 50%;
        }

        .mmm{
            margin-top: -90px;
        }
        .nnn{
            margin-top: 12px;
        }
        .bbb{
            margin-top: 120px;
        }
        .vvv{
            font-size: 24px;
        }

    </style>

</head>

<body class="login-page" style="background: white">

<div class="text-right"><a href="#" class="brand-link link">
        <h> <img src="{{ asset('dash/img/logo.svg') }}" alt="HMS Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="bold600 color-child-6 vvv">Project_</span><span class="color-child-5 vvv">imp.</span></h>
    </a></div>

<div>
    <div class="row">
        <div class="col-xs-7 mmm">

            <h4>From:</h4>

            <b>Hospital Doctor</b> <br>
            123 Company Ave. <br>
            Toronto, Ontario - L2R 5A4<br>
            P: (416) 123-4567 <br>
            E: copmany@company.com <br>

            <br>
        </div>


    </div>

    <div style="margin-bottom: 0px">&nbsp;</div>

    <div class="row">
        <div class="col-xs-6">
            <h4>To:</h4>
            <address>
                <strong>{{ $invoice->patient->user->first_name }} {{ $invoice->patient->user->last_name }}</strong><br>
                <span>admin@hms.co.ke</span> <br>
                <span>123 Address St.</span>
            </address>
        </div>

        <div class="col-xs-5 nnn">
            <table style="width: 100%">
                <tbody>
                <tr>
                    <th>Invoice Num:</th>
                    <td class="text-right">{{ $invoice->id }}</td>
                </tr>
                <tr>
                    <th>Title:</th>
                    <td class="text-right">{{ $invoice->invoice_title }} {{ $invoice->last_name }}</td>
                </tr>
                <tr>
                    <th>Amount:</th>
                    <td class="text-right">KSh. {{ number_format($invoice->invoice_amount, 2, '.', ',') }}</td>
                </tr>
                <tr>
                    <th>Created: </th>
                    <td class="text-right">{{ $invoice->created_at->toDayDateTimeString() }}</td>
                </tr>
                </tbody>
            </table>

            <div style="margin-bottom: 0px">&nbsp;</div>

            <table style="width: 100%; margin-bottom: 20px">
                <tbody>
                <tr class="well" style="padding: 5px">
                    <th style="padding: 5px"><div> Balance Due (CAD) </div></th>
                    <td style="padding: 5px" class="text-right"><strong>KSh. 500.00 </strong></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <table class="table">
        <thead style="background: #F5F5F5;">
        <tr>
            <th>Item List</th>
            <th></th>
            <th class="text-right">Price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><div><strong>Service</strong></div>
                <p>{{ $invoice->invoice_title }} {{ $invoice->last_name }}</p></td>
            <td></td>
            <td class="text-right">KSh. {{ number_format($invoice->invoice_amount, 2, '.', ',') }}</td>
        </tr>
        <tr>
            <td><div><strong>Description</strong></div>
                <p>{{ $invoice->invoice_description }}</p></td>
            <td></td>
            <td class="text-right">KSh. {{ number_format($invoice->invoice_amount, 2, '.', ',') }}</td>
        </tr>
        </tbody>
    </table>

    <div class="row">
        <div class="col-xs-6"></div>
        <div class="col-xs-5">
            <table style="width: 100%">
                <tbody>
                <tr class="well" style="padding: 5px">
                    <th style="padding: 5px"><div> Balance Due (CAD) </div></th>
                    <td style="padding: 5px" class="text-right"><strong> 500.00 </strong></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div style="margin-bottom: 0px">&nbsp;</div>

    <div class="row">
        <div class="col-xs-8 invbody-terms">
            Thank you for trusting us with your health. <br>
            <br>
            <h4>Payment Terms</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eius quia, aut doloremque, voluptatibus quam ipsa sit sed enim nam dicta. Soluta eaque rem necessitatibus commodi, autem facilis iusto impedit!</p>
        </div>
    </div>
</div>

</body>
</html>


















{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Invoice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .page-break {
            page-break-after: always;
        }
        .bg-grey {
            background: #F3F3F3;
        }
        .text-right {
            text-align: right;
        }

        .w-full {
            width: 100%;
        }

        .small-width {
            width: 15%;
        }
        .invoice {
            background: white;
            border: 1px solid #CCC;
            font-size: 14px;
            padding: 48px;
            margin: 20px 0;
        }
    </style>
</head>
<body class="bg-grey">

<div class="container container-smaller">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1" style="margin-top:20px; text-align: right">
<div class="btn-group mb-4">
                <a href="/invoice-pdf" class="btn btn-success">Save as PDF</a>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="invoice">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>From:</h4>
                        <address>
                            <strong>Company Inc.</strong><br>
                            123 Company Ave. <br>
                            Toronto, Ontario - L2R 4U6<br>
                            P: (416) 123 - 4567 <br>
                            E: company@company.com
                        </address>
                    </div>

                    <div class="col-sm-6 text-right">
                        <img src="{{asset('dash/img/logo.svg')}}" alt="HMS Logo">
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-7">
                        <h4>To:</h4>
                        <address>
                            <strong>Andre Madarang</strong><br>
                            <span>123 Cool St.</span><br>
                            <span>andre@andre.com</span>
                        </address>
                    </div>

                    <div class="col-sm-5 text-right">
                        <table class="w-full">
                            <tbody>
                            <tr>
                                <th>Invoice Num:</th>
                                <td>56</td>
                            </tr>
                            <tr>
                                <th> Invoice Date: </th>
                                <td>Jun 24, 2019</td>
                            </tr>
                            </tbody>
                        </table>

                        <div style="margin-bottom: 0px">&nbsp;</div>

                        <table class="w-full">
                            <tbody>
                            <tr class="well" style="padding: 5px">
                                <th style="padding: 5px"><div> Balance Due (CAD) </div></th>
                                <td style="padding: 5px"><strong> $499 </strong></td>
                            </tr>
                            </tbody>
                        </table>


                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table invoice-table">
                        <thead style="background: #F5F5F5;">
                        <tr>
                            <th>Item List</th>
                            <th></th>
                            <th class="text-right">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <strong>Service</strong>
                                <p>Description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita perferendis doloribus, quaerat molestias est eum, adipisci dolorem nulla rerum voluptatibus.</p>
                            </td>
                            <td></td>
                            <td class="text-right">$600</td>
                        </tr>

                        <tr>
                            <td>
                                <strong>Service</strong>
                                <p>Description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita perferendis doloribus, quaerat molestias est eum, adipisci dolorem nulla rerum voluptatibus.</p>
                            </td>
                            <td></td>
                            <td class="text-right">$600</td>
                        </tr>

                        </tbody>
                    </table>
                </div><!-- /table-responsive -->

                <table class="table invoice-total">
                    <tbody>
                    <tr>
                        <td class="text-right"><strong>Balance Due :</strong></td>
                        <td class="text-right small-width">$600</td>
                    </tr>
                    </tbody>
                </table>

                <hr>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="invbody-terms">
                            Thank you for your business. <br>
                            <br>
                            <h4>Payment Terms and Methods</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque neque velit tenetur pariatur perspiciatis dignissimos corporis laborum doloribus, inventore.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
--}}














{{--
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
--}}
