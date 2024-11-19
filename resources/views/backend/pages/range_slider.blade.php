@extends('layout.master')
@section('title', 'Range Slider')
@section('css')
    <!-- nouislider js css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/nouislider/nouislider.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Range Slider</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                                          <span>
                                            <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                                          </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Range Slider</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Range Slider start -->
        <div class="row">

            <!-- Bootstrap Range Sliders start -->
            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Bootstrap Range Sliders</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="customRange1" class="form-label">Basic range
                                    Slider</label>
                                <input type="range" class="form-range" id="customRange1">
                            </div>
                            <div class="col-md-12">
                                <label for="disabledRange" class="form-label">Disabled range
                                    Slider</label>
                                <input type="range" class="form-range" id="disabledRange" disabled>
                            </div>
                            <div class="col-md-12">
                                <label for="customRange2" class="form-label">Min and max range
                                    Slider</label>
                                <input type="range" class="form-range" min="0" max="2" id="customRange2">
                            </div>
                            <div class="col-md-12">
                                <label for="customRange3" class="form-label">Steps range
                                    Slider</label>
                                <input type="range" class="form-range" min="0" max="5" id="customRange3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap Range Sliders end -->

            <!-- colour variant slider start  -->
            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>colour variant</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">primary range slider</label>
                                    <div class="slider-round" id="primary-slider"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">secondary range slider</label>
                                    <div class="slider-round slider-secondary" id="secondary-slider">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Success range slider</label>
                                    <div class="slider-round slider-success" id="success-slider"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">danger range slider</label>
                                    <div class="slider-round slider-danger" id="danger-slider"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">warning range slider</label>
                                    <div class="slider-round slider-warning" id="warning-slider"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">info range slider</label>
                                    <div class="slider-round slider-info" id="info-slider"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">light range slider</label>
                                    <div class="slider-round slider-light" id="light-slider"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">dark range slider</label>
                                    <div class="slider-round slider-dark" id="dark-slider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- colour variant slider end  -->


            <!-- value slider start  -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>value slider</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <div class="mb-4">
                                <label class="form-label f-s-16 text-secondary mb-3">Locking sliders
                                    together</label>
                                <div class="slider-round" id="slider-1"></div>
                                value:
                                <span id="val1"></span>
                            </div>
                            <div class="mb-5">
                                <div class="slider-round" id="slider-2"></div>
                                value:
                                <span id="val2"></span>
                                <div>
                                    <button type="button" class="btn btn-primary float-end" id="lockbtn">Lock</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label class="form-label text-secondary f-s-16 mb-3">Multi range slider</label>
                                <div class="slider-round" id="multi-values-slider"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-5 mg-t-70">
                                <label class="form-label f-s-16 mb-3 text-secondary">Soft limits</label>
                                <div class="colored-slider slider-round" id="limit-slider"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- value slider end  -->

            <!-- tooltip slider start  -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Tooltip slider</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <div class="mb-5">
                                <label class="form-label f-s-16 text-secondary mb-5">values slider</label>
                                <div class="slider-round primary-slider-round" id="values-slider"></div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-5">
                                <label class="form-label f-s-16 text-secondary mb-5">tooltip slider</label>
                                <div class="slider-round hide-tooltips primary-slider-round" id="hide-tooltips"></div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-5">
                                <label class="form-label f-s-16 text-secondary mb-5">Colored Connect Slider</label>
                                <div class="colored-slider primary-colored-slider" id="slider-colored"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tooltip slider end  -->


            <!-- dynamic slider start   -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>dynamic slider</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">HTML5 input</label>
                                <div class="slider-round" id="html-input"></div>
                            </div>
                            <div class=" d-flex gap-2 mb-5">
                                <select id="select-input" class="form-select"></select>
                                <input type="number" id="number-input" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- dynamic slider end  -->


            <!-- Color picker slider start -->
            <div class="col-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Color picker slider</h5>
                            </div>
                            <div class="card-body">
                                <div class="colorpicker-slider">
                                    <div class="vertical verticalsliders red me-2" id="red"></div>
                                    <div class="vertical verticalsliders green me-2" id="green"></div>
                                    <div class="vertical verticalsliders blue" id="blue"></div>
                                    <div class="result" id="result"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Vertical slider</h5>
                            </div>
                            <div class="card-body">
                                <div class="vertical m-auto" id="vertical-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Toggle slider</h5>
                            </div>
                            <div class="card-body">
                                <div class="vertical m-auto" id="toggle-slider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Color picker slider end -->
        </div>
        <!-- Range Slider end -->

    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- nouislider js -->
<script src="{{asset('assets/vendor/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('assets/vendor/nouislider/wNumb.min.js')}}"></script>

<!-- js -->
<script src="{{asset('assets/js/range_slider.js')}}"></script>
@endsection
