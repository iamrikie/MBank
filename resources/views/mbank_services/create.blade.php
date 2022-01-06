@extends('layouts.dash')

@section('header-content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create User </h1>
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
            <h3 class="card-title">Create a new hospital</h3>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form method="post" action="{{ route('hospitals.store') }}">
                        @csrf

                        {{--<div class="form-group mb-3">
                            <label for="rank"></label>
                            <select id="rank" type="text" class="form-control @error('rank') is-invalid @enderror"
                                    name="rank">
                                <option value="">Choose user rank...</option>
                                <option value="RANK1">Admin</option>
                                <option value="RANK2">Doctor</option>
                                --}}{{--<option value="RANK3">Patient</option>--}}{{--
                            </select>
                            @error('rank')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>--}}

                        <div class="input-group mb-3">
                            <input id="county_id" type="text"
                                   class="form-control @error('county_id') is-invalid @enderror"
                                   name="county_id" value="{{ old('county_id') }}" placeholder="County ID">
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
                                   name="name" value="{{ old('name') }}" placeholder="Hospital name">
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
                                   name="level" value="{{ old('level') }}" placeholder="Hospital Level" autofocus>
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

                       {{-- <div class="input-group mb-3">
                            <input id="phone_number" type="text"
                                   class="form-control @error('phone_number') is-invalid @enderror"
                                   name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone number">
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
                                   name="username" value="{{ old('username') }}" placeholder="Username">
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
                                   name="email" value="{{ old('email') }}" placeholder="Email address">
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
                        </div>

                        <div class="input-group mb-3">
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="password_confirmation" type="password"
                                   class="form-control @error('password_confirmation') is-invalid @enderror"
                                   name="password_confirmation" placeholder="Retype password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
--}}
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

















{{--
@extends('layouts.dash')

@section('header-content')

<div class="page-content">
<div class="container-fluid">
<header class="section-header">
<div class="tbl">
<div class="tbl-row">
	<div class="tbl-cell">
		<h3>New Hospital</h3>
		<ol class="breadcrumb breadcrumb-simple">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Hospital</a></li>
			<li class="active">Add</li>
		</ol>
	</div>
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
		<input type="text" name="name" class="form-control" id="hospital_name" placeholder="Enter Hospital Name">
	</fieldset>
</div>
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label semibold" for="location">Hospital Location</label>
		<select name="location" class="form-control" id="location">
			<option>Select Location</option>
			@foreach($districts as $district)
			<option value="{{$district->district_name}}">{{$district->district_name}}</option>
			@endforeach
		</select>
	</fieldset>
</div>
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label semibold" for="quota">Hospital Quota/day</label>
		<input  type="text" name="quota" class="form-control" id="quota" placeholder="Patients hospital Can serve per day">
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<span>
<input type="checkbox" name="activate" value="1"/> <span style="color:green">Activate Hospital</span>
</span>
</div>
</div>
</div>
<input type="submit"  name="save" class="btn btn-rounded  btn-primary-outline" value="save Hospital"/>
</form>
</div><!--.row-->
--}}
{{-- end --}}{{--

</div><!--.box-typical-->
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
--}}
