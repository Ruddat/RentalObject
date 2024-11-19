@extends('layout.master')
@section('title', 'Date Picker')
@section('css')
    <!-- flatpickr css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datepikar/flatpickr.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Date Picker</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Date Picker</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <div class="row app-form">
            <!-- Basic start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic</h5>
                    </div>
                    <div class="card-body">
                        <div class="dates">
                            <form>
                                <input class="form-control basic-date" type="text" placeholder="YYYY-MM-DD">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic end -->
            <!-- Time Picker start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Time Picker</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <input class="form-control date-time-picker" type="text" placeholder="12:00">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Time Picker end -->
            <!-- Datetime Picker start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Datetime Picker</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <input class="form-control time-picker" type="text" placeholder="YYYY-MM-DD">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Datetime Picker end -->
            <!-- Range Picker start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Range Picker</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <input class="form-control picker-range" type="text" placeholder="YYYY-MM-DD to YYYY-MM-DD">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Range Picker end -->

            <!-- Human-friendly Dates start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Human-friendly Dates</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <input class="form-control human-friendly-dates" type="text" placeholder="MM-DD-YYYY">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Human-friendly Dates end -->
            <!-- Multiple Dates start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Multiple Dates</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <input class="form-control multiple-dates" type="text" placeholder="YYYY-MM-DD">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Multiple Dates end -->
            <!-- Week Numbers start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Week Numbers</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <input class="form-control week-numbers" type="text" placeholder="YYYY-MM-DD">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Week Numbers end -->

            <!-- Time Picker w/ Limits start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Time Picker with Limits</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <input class="form-control time-picker-limits" type="text" placeholder="YYYY-MM-DD">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Time Picker w/ Limits end -->
            <!-- 24-hour Time Picker start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>24 hour Time Picker</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <input class="form-control hour-time-picker mb-2" type="text" placeholder="YYYY-MM-DD">
                        </form>
                    </div>
                </div>
            </div>
            <!-- 24-hour Time Picker end -->
            <!-- Inline start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Inline</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <input class="form-control inline mb-2" type="text" placeholder="YYYY-MM-DD">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Inline end -->

        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- flatpickr js-->
<script src="{{asset('assets/vendor/datepikar/flatpickr.js')}}"></script>

<!--js-->
<script src="{{asset('assets/js/date_picker.js')}}"></script>
@endsection
