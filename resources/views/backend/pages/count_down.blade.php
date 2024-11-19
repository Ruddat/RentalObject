@extends('layout.master')
@section('title', 'Count Down')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Count Down</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                            <span>
                              <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Count Down</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- count down page start  -->
        <div class="row">
            <!-- With Seconds start -->
            <div class="col-xl-6 ">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>With Seconds</h5>
                        <p>You can add only seconds countdown using
                            <span class="text-danger"> countdown-seconds </span>
                            class
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="countdown-seconds">
                            <ul class="timer">
                                <li class="seconds fw-bold">35</li>
                                <li class="timer-countdown">seconds</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- With Seconds end -->

            <!-- With minutes start -->
            <div class="col-xl-6 ">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>With minutes</h5>
                        <p>You can add minutes countdown style using <span class="text-danger"> app-countdown-min</span>
                            class.</p>
                    </div>
                    <div class="card-body">
                        <div class="app-countdown-min">
                            <ul class="timer">
                                <li class="countdown">
                                    <span class="minutes time-value fw-bold">37</span>
                                    <span class="timer-countdown f-s-14 f-w-400">Minutes </span>
                                </li>
                                <li class="app-line">:</li>
                                <li class="countdown">
                                    <span class="seconds fw-bold">43</span>
                                    <span class="timer-countdown f-s-14 f-w-400">Seconds</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- With minutes end -->

            <!-- With Hours start -->
            <div class="col-xl-6 ">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>With Hours</h5>
                        <p>You can add hours countdown using <span class="text-danger">app-countdown-hours</span>
                            class.</p>
                    </div>
                    <div class="card-body">
                        <div class="app-countdown-hours">
                            <ul class="timer">
                                <li class="app-countdown countdown-border">
                                    <span class="Hours f-s-20 fw-bold">1</span>
                                    <span class="timer-countdown">Hours</span>
                                </li>
                                <li class="app-countdown">
                                    <span class="minutes f-s-20 fw-bold">57</span>
                                    <span class="timer-countdown">Minutes</span>
                                </li>
                                <li class="app-countdown countdown-border-1">
                                    <span class="seconds f-s-20 fw-bold">35</span>
                                    <span class="timer-countdown">Seconds</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- With Hours end -->

            <!-- Countdown Styles start -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Countdown Styles</h5>
                        <p>You can add countdown using <span class="text-danger">app-countdown-background</span> class.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="app-countdown-background">
                            <ul class="timer">
                                <li class="countdown">
                                    <h6 class="days mb-0 f-s-20 ">72</h6>
                                    <p class="timer-countdown">Days</p>
                                </li>
                                <li class="countdown">
                                    <h6 class="hours mb-0 f-s-20 ">1</h6>
                                    <p class="timer-countdown">Hours</p>
                                </li>
                                <li class="countdown">
                                    <h6 class="minutes mb-0 f-s-20 ">57</h6>
                                    <p class="timer-countdown">Min</p>
                                </li>
                                <li class="countdown">
                                    <h6 class="seconds mb-0 f-s-20 ">35</h6>
                                    <p class="timer-countdown">Sec</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Countdown Styles end -->

            <!-- Countdown Styles start -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Countdown Styles</h5>
                        <p>You can add countdown using <span class="text-danger">app-countdown-circle</span>
                            class.</p>
                    </div>
                    <div class="card-body">
                        <div class="app-countdown-circle">
                            <ul class="timer">
                                <li class="countdown">
                                    <span class="days fw-medium f-s-20 bg-light-primary">72</span>
                                    <span class="timer-countdown bg-primary">Day</span>
                                </li>
                                <li class="countdown">
                                    <span class="hours fw-medium f-s-20 bg-light-secondary">1</span>
                                    <span class="timer-countdown bg-secondary">Hour</span>
                                </li>
                                <li class="countdown">
                                    <span class="minutes fw-medium f-s-20 bg-light-success">57</span>
                                    <span class="timer-countdown bg-success">Minutes</span>
                                </li>
                                <li class="countdown">
                                    <span class="seconds fw-medium f-s-20 bg-light-info">35</span>
                                    <span class="timer-countdown bg-info">Seconds</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Countdown Styles end -->

            <!-- Background Countdown start -->
            <div class="col-xl-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Border Countdown</h5>
                        <p>You can add countdown with background using <span
                                class="text-danger">app-countdown-square </span>class.</p>
                    </div>
                    <div class="card-body d-flex-center">
                        <div class="app-countdown-square">
                            <ul class="timer">
                                <li
                                    class="countdown">
                                    <span class="days f-s-20 fw-bold">72</span>
                                    <span class="day f-s-20">Day</span>
                                </li>
                                <li
                                    class="countdown">
                                    <span class="hours f-s-20 fw-bold">1</span>
                                    <span class="hour f-s-20">Hour</span>
                                </li>
                                <li
                                    class="countdown">
                                    <span class="minutes f-s-20 fw-bold">57</span>
                                    <span class="min f-s-20">Min</span>
                                </li>
                                <li class="countdown">
                                    <span class="seconds f-s-20 fw-bold">35</span>
                                    <span class="sec f-s-20">Sec</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Background Countdown end -->

        </div>
        <!-- count down page start  -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- js-->
<script src="{{asset('assets/js/count_down.js')}}"></script>
@endsection
