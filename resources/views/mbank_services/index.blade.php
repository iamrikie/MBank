@extends('layouts.dash')

@section('header-content')

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Hospitals</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Hospitals</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">A list of all the hospitals in the system</h3>

            <div class="card-tools">
                @if(auth()->user()->isAdmin())
                    <a href="{{ route('hospitals.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i> Add A Hospital
                    </a>
                @endif
            </div>
        </div>

        <div class="card-body">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th></th>
                    <th>County ID</th>
                    <th>Hospital Name</th>
                    <th>Hospital Level</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($hospitals as $hospital)

                    <tr>
                        <td>{{ $hospital->id }}</td>
                        <td></td>
                        <td>{{ $hospital->county_id }}</td>
                        <td>{{ $hospital->name }}</td>
                        <td>{{ $hospital->level }}</td>
                        <td>
                            <a href="{{ route('hospitals.show', ['hospital' => $hospital->id]) }}" class="btn btn-primary-outline"
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
                    Showing page {{ $hospitals->currentPage() }} of {{ $hospitals->lastPage() }} pages -
                    {{ $hospitals->lastItem() }} hospitals per page.
                </div>
                {{ $hospitals->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection

{{--
@push('styles')
<link rel="stylesheet" href="{{asset('dashboard/css/separate/vendor/pnotify.min.css')}}">
@endpush
@section('content')
<div class="page-content">
<div class="container-fluid">
--}}
{{-- records informations --}}{{--

@if(!empty($hospitals) && $hospitals->count())
<section class="card">
<header class="card-header card-header-lg">
All Registered Hospitals <span class="label label-pill label-info">{{$hospitals->count()}}</span>
<a href="{{ route('hospitals.create')}} " class="btn btn-rounded  btn-success-outline pull-right">Add new Hospital</a>
</header>
<div class="card-block">
<p class="card-text">
<div class="row">
<table id="table-edit" class="table table-bordered table-hover">
<thead>
<tr>
<th width="1">#</th>
<th>Name</th>
<th>Location</th>
<th>Quota Per Day</th>
<th>Active</th>
<th>Registered At</th>
<th class="table-icon-cell">
<i class="font-icon font-icon-edit"></i>
</th>
</tr>
</thead>
<tbody>
@foreach($hospitals as $hospital)
<tr>
<td>{{ $hospital->id }}</td>
<td>{{ $hospital->name }}</td>
<td>{{ $hospital->county_name}}</td>
<td>{{$hospital->level}}</td>
<td @if($hospital->is_activated) style="color:green;" @else style="red;" @endif>{{$hospital->is_activated?'operation':'no operation'}}</td>
<td class="table-date">{{ $hospital->created_at->diffForHumans()}}</td>
<td class="table-date"><a href="{{ route('hospitals.edit',$hospital->$hospital_id)}}">update</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</p>
</div>
</section>
@else
<h2>notify that there is no hospitals registered yet</h2>
@endif
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
@push('scripts')
<script src="{{asset('dashboard/js/lib/pnotify/pnotify.js')}}"></script>
<script>
PNotify.prototype.options.styling = "bootstrap3";
</script>
@endpush
--}}
