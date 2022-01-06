@extends('layouts.dash')

@section('header-content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Hospital </h1>
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
            <h3 class="card-title">Editing the details of hospital #{{ $hospital->id }}</h3>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form method="post" action="{{route('hospitals.update', ['hospital' =>$hospital->id]) }}">
                        @csrf
                        @method('PUT')

                       {{-- <div class="input-group mb-3">
                            <input id="id" type="text"
                                   class="form-control @error('id') is-invalid @enderror"
                                   name="id" value="{{ $hospital->id ?? old('id') }}"
                                   placeholder="#Hospital ID">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            @error('id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>--}}

                        <div class="input-group mb-3">
                            <input id="county_id" type="text"
                                   class="form-control @error('county_id') is-invalid @enderror"
                                   name="county_id" value="{{$hospital->county_id ?? old('county_id') }}"
                                   placeholder="County ID" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-city"></span>
                                </div>
                            </div>
                            @error('county_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="name" type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ $hospital->name ?? old('name') }}"
                                   placeholder="Hospital name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-hospital-symbol"></span>
                                </div>
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="level" type="text"
                                   class="form-control @error('level') is-invalid @enderror"
                                   name="level" value="{{ $hospital->level ?? old('level') }}"
                                   placeholder="Hospital Level">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-level-up-alt"></span>
                                </div>
                            </div>
                            @error('level')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>



                        {{--<div class="input-group mb-3">
                            <input id="id_number" type="text"
                                   class="form-control @error('id_number') is-invalid @enderror"
                                   name="id_number" value="{{$user->id_number ?? old('id_number') }}"
                                   placeholder="ID number" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-id-card"></span>
                                </div>
                            </div>
                            @error('id_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="phone_number" type="text"
                                   class="form-control @error('phone_number') is-invalid @enderror"
                                   name="phone_number" value="{{$user->phone_number ?? old('phone_number') }}"
                                   placeholder="Phone number">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone-alt"></span>
                                </div>
                            </div>
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="username" type="text"
                                   class="form-control @error('username') is-invalid @enderror"
                                   name="username" value="{{$user->username ?? old('username') }}"
                                   placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{$user->email ?? old('email') }}" placeholder="Email address">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>--}}

                        <div class="row justify-content-end">

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Save</button>
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
































{{--
@extends('layouts.dash')

@section('header-content')

<div class="container-fluid">
<header class="section-header">
<div class="tbl">
<div class="tbl-row">
	<div class="tbl-cell">
		<h3>Edit Hospital</h3>(<b>{{ $hospital->hospital_name}}</b>)
		<ol class="breadcrumb breadcrumb-simple">
			<li><a href="#">Dashboard</a></li>
			<li><a href="{{route('hospitals.index')}}">Hospital</a></li>
			<li class="active">Edit</li>
		</ol>
	</div>

</div>
</header>

<div class="box-typical box-typical-padding">
<h5 class="m-t-lg with-border">Hospital Information</h5>
<form action="{{ url('hospitals.store') }}" method="post">
{{csrf_field()}}
<div class="row">
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label semibold" for="hospital_name">Hospital Name</label>
		<input type="text" name="hospital_name" class="form-control" id="hospital_name" value="{{ $hospital->hospital_name }}">
	</fieldset>
</div>
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label semibold" for="location">Hospital Location</label>
		<select name="location" class="form-control" id="location">
			<option value="{{ $hospital->location }}">{{ $hospital->location }}</option>
			@foreach($districts as $district)
			<option value="{{$district->district_name}}">{{$district->district_name}}</option>
			@endforeach
		</select>
	</fieldset>
</div>
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label semibold" for="quota">Hospital Quota/day</label>
		<input  type="text" name="quota" class="form-control" id="quota" value="{{ $hospital->quota_per_day}}">
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<span>
<input type="checkbox" name="activate" value="{{ $hospital->actiis_activated }}"/> <span style="color:green">Activate Hospital</span>
</span>
</div>
</div>
</div>
<input type="submit"  name="save" class="btn btn-rounded  btn-primary-outline" value="Update Hospital"/>
</form>
</div><!--.row-->
--}}
{{-- end --}}{{--

</div><!--.box-typical-->
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
--}}
