@extends('layout.master')
@section('title', 'Input Masks')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Input Masks</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Input Masks </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Input Masks start -->
        <div class="row">
            <!-- Date Formatting Input Masks start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Date Formatting Input Masks</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <form class="app-form mb-3">
                                    <label class="form-label">Simple Date :</label>
                                    <input type="text" class="form-control cleave-input-date" placeholder="date">
                                </form>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <form class="app-form mb-3">
                                    <label class="form-label">Date & Month :</label>
                                    <input type="text" class="form-control month-input" placeholder="date & month">
                                </form>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <form class="app-form mb-3">
                                    <label class="form-label">Formatting Date :</label>
                                    <input type="text" class="form-control formatting-input" placeholder="formatting date">
                                </form>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <form class="app-form">
                                    <label class="form-label">Formatting Delimiter :</label>
                                    <input type="text" class="form-control formatting-delimter" placeholder="delimter">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Date Formatting Input Masks end -->

            <!-- Time Formatting Input Masks start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Time Formatting Input Masks</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <form class="app-form">
                                    <label class="form-label">Simple Time :</label>
                                    <input type="text" class="form-control time-input" placeholder="time ">
                                </form>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <form class="app-form">
                                    <label class="form-label">Minutes & Seconds :</label>
                                    <input type="text" class="form-control min-sec-input" placeholder="minutes & seconds">
                                </form>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <form class="app-form">
                                    <label class="form-label">Hours & Minutes :</label>
                                    <input type="text" class="form-control hours-min-input" placeholder="hours & minutes">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Time Formatting Input Masks end -->

            <!-- Custom Formatting Input Masks start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Formatting Input Masks</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form class="app-form mb-3">
                                    <label class="form-label">Simple Contact :</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-secondary-200 b-r-left" id="basic-addon1">+91</span>
                                        <input type="text" class="form-control contact-input" placeholder="xxx-xxx-xxxx">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form class="app-form mb-3">
                                    <label class="form-label">Formatting Contact :</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-secondary-200 b-r-left" id="basic-addon12">+91</span>
                                        <input type="text" class="form-control formatting-contact" placeholder="(xxx)(xxx)(xxxx)">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form class="app-form mb-3">
                                    <label class="form-label">Credit card number Formatting :</label>
                                    <input type="text" class="form-control credit-input" placeholder="xxxx xxxxx xxxxxx">
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form class="app-form mb-3">
                                    <label class="form-label">Numeral Formatting :</label>
                                    <input type="text" class="form-control nueral-input" placeholder="xx,xxx,xx">
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form class="app-form mb-3">
                                    <label class="form-label">Price :</label>
                                    <input type="text" class="form-control price-input">
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form class="app-form mb-3">
                                    <label class="form-label">Price Formatting :</label>
                                    <input type="text" class="form-control price-formatting">
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form class="app-form">
                                    <label class="form-label">prefix :</label>
                                    <input type="text" class="form-control prefix-input">
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form class="app-form">
                                    <label class="form-label">Prefix with Delimiters :</label>
                                    <input type="text" class="form-control prefix-del-input">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Custom Formatting Input Masks end -->

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p>
                            clever.js is Javascript Plugin for Input Masks for more options please check refer
                            <a href="https://nosir.github.io/cleave.js/" class="text-decoration-underline link-primary">https://nosir.github.io/cleave.js/ </a> And
                            <a href="https://github.com/nosir/cleave.js" class="text-decoration-underline link-primary">https://github.com/nosir/cleave.js</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Input Masks end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!--cleave js  -->
<script src="{{asset('assets/vendor/cleavejs/cleave.min.js')}}"></script>

<!-- js -->
<script src="{{asset('assets/js/input_masks.js')}}"></script>
@endsection
