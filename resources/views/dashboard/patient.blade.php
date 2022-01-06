<div class="card">

    @include('common.dash.alert')
    <link rel="stylesheet" type="text/css" href="{{asset('css/mycustom.css')}}" />
   {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fancybox.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datetimepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/flaticon/flaticon.css')}}" />--}}

    {{--<link rel="stylesheet" href="{{ asset('dash/css/adminlte.min.css') }}">--}}
    <div class="card-header">
        <h3 class="card-title">Patient's Summary</h3>

        {{--<div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>--}}
    </div>
    <div class="card-body">
        <strong>Coming Soon:</strong> A summary of the notable events/details.
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>



<!-- ===================================
    POPUP FORMS FOR BOOKING APPOINTMENTS
===================================== -->
{{--<div class="bookform bookform-1" id="bookform1">
    <div class="bookform-left">
        <h2 class="section-title"><span class="bold700">BOOK APPOINTMENT</span></h2>
        <form method="post" action="--}}{{--{{ route('appointments.store') }}--}}{{--">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item f-doctor">
                    <select id="form-doctor" class="form-doctor form-control-error" name="hospital_id">
                        <option selected="selected">Select hospital</option>
                         --}}{{--@foreach($hospitals as $hospital)
                             <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                         @endforeach--}}{{--
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                    <input type="text" name="patient_id" id="name1" data-validation="required" placeholder="Your Patient ID" />
                    <div class="help help-sm help-red">!</div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
                    <input type="text" class="datepicker-f" id="datepicker1" name="date" data-validation="required" placeholder="Date" />
                    <div class="help help-sm help-red">!</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
                    <input type="text" class="timepicker-f" id="timepicker1" name="start_time" data-validation="required" placeholder="Time" />
                    <div class="help help-sm help-red">!</div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                    <textarea name="message" id="message1" placeholder="Write how you feel.."></textarea>
                </div>
            </div>

            <div class="row latest-row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                    <a class="fb-close" id="fb-close1" href="javascript:jQuery.fancybox.close();">Cancel</a>
                </div>
            </div>

        </form>
    </div>
    <div class="bookform-right">

        <div class="bookform-right-info-1">
            <h5>Please select a hospital</h5>
            Here are  lists of all hospitals or clinics you can choose.

        </div>

        <div class="bookform-right-info-2">
            We are working hard to work with some many hospital/clinic if yours is not available feel free to tell us maybe next time will be available.
        </div>

    </div>
</div>--}}
<!-- =========================
    END POPUP FORMS
============================== -->
<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />

<!-- =========================
     SCRIPTS
============================== -->
<!-- JQUERY -->
<script src="{{asset('js/jquery-2.2.0.min.js')}}"></script>

<!-- BOOTSTRAP -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- SLIDER PRO -->
<script src="{{asset('js/jquery.sliderPro.min.js')}}"></script>

<!-- LIGHTBOX -->
<script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>

<!-- CAROUSEL -->
<script src="{{asset('js/owl.carousel.js')}}"></script>

<!-- STAR RATING -->
<script src="{{asset('js/jquery.barrating.min.js')}}"></script>

<!-- ISOTOPE FILTER -->
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>

<!-- SCROLLSPY -->
<script src="{{asset('js/scrollspy.js')}}"></script>

<!-- DATEPICKER -->
<script src="{{asset('js/moment.js')}}"></script>
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>

<!-- FORM VALIDATOR -->
<script src="{{asset('js/jquery.form-validator.js')}}"></script>

<!-- SELECT STYLING -->
<script src="{{asset('js/jquery.selectBox.js')}}"></script>

<!-- CUSTOM SCRIPT -->
<script src="{{asset('js/theme.js')}}"></script>
<!-- SWEET ALERT -->
<script src="{{asset('dashboard/js/lib/bootstrap-sweetalert/sweetalert.min.js')}}"></script>
@stack('scripts')
<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
<script src="{{asset('js/app.js')}}"></script>
