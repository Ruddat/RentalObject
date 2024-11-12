@extends('layout.master')
@section('title', 'Switch')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Switch</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Switch</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Switch start -->
        <div class="row">
            <!-- Basic Switch start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Switch</h5>
                    </div>
                    <div class="card-body main-switch ">
                        <div class="form-check form-switch d-flex">
                            <input class="form-check-input" type="checkbox" id="basic-switch-1">
                            <label class="form-check-label ms-2" for="basic-switch-1">Bootstrap Switch</label>
                        </div>
                        <div class="form-check form-switch d-flex">
                            <input class="form-check-input" type="checkbox" id="basic-switch-2" disabled>
                            <label class="form-check-label ms-2" for="basic-switch-2">Bootstrap Disabled</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Switch end -->
            <!-- Switch Sizing start -->
            <div class="col-sm-6 col-xxl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Switch Sizing</h5>
                    </div>

                    <div class="card-body main-switch main-switch-color">
                        <div class="switch-primary my-3">
                            <input type="checkbox" id="check-001" class="toggle" checked>
                            <label for="check-001" class="text-dark">Large Size</label>
                        </div>
                        <div class="switch-secondary my-3">
                            <input type="checkbox" id="check-002" class="toggle">
                            <label for="check-002"> Large Unhecked</label>
                        </div>
                        <div class="swich-size my-3">
                            <input type="checkbox" id="check-003" class="toggle" checked>
                            <label for="check-003">Large Size</label>
                        </div>
                        <div class="switch-danger swich-size my-3">
                            <input type="checkbox" id="=check-004" class="toggle">
                            <label for="=check-004">Normal Unhecked</label>
                        </div>
                        <div class="switch-warning swich-size2 my-3">
                            <input type="checkbox" id="check-005" class="toggle" checked>
                            <label for="check-005">Small Size</label>
                        </div>
                        <div class="switch-info swich-size2 my-3">
                            <input type="checkbox" id="check-006" class="toggle">
                            <label for="check-006">Small Size Unchecked</label>
                        </div>

                    </div>
                </div>

            </div>
            <!-- Switch Sizing end -->
            <!-- Switch Color start -->
            <div class="col-sm-6 col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Switch Variants</h5>
                    </div>
                    <div class="card-body main-switch main-switch-color switch-unchecked switch_border">
                        <div class="switch-primary switch-unchecked-primary switch-border-primary my-3">
                            <input type="checkbox" id="check5" class="toggle m-3" checked>
                            <label for="check5">Primary</label>
                        </div>
                        <div class="switch-secondary switch-unchecked-secondary switch-border-secondary my-3">
                            <input type="checkbox" id="check6" class="toggle m-3" checked>
                            <label for="check6"> Secondary</label>
                        </div>
                        <div class="switch-success switch-unchecked-success switch-border-success my-3">
                            <input type="checkbox" id="check7" class="toggle m-3" checked>
                            <label for="check7">Success</label>
                        </div>
                        <div class="switch-danger switch-unchecked-danger switch-border-danger my-3">
                            <input type="checkbox" id="check8" class="toggle m-3" checked>
                            <label for="check8">Info</label>
                        </div>
                        <div class="switch-warning switch-unchecked-warning switch-border-warning my-3">
                            <input type="checkbox" id="check9" class="toggle m-3" checked>
                            <label for="check9">Warning</label>
                        </div>
                        <div class="switch-info switch-unchecked-info switch-border-info my-3">
                            <input type="checkbox" id="check10" class="toggle m-3" checked>
                            <label for="check10">Info</label>
                        </div>
                        <div class="switch-dark switch-unchecked-dark switch-border-dark my-3">
                            <input type="checkbox" id="check01" class="toggle m-3" checked>
                            <label for="check01">Dark</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Switch Color end -->

            <!-- Switch Outline start -->
            <div class="col-sm-6 col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Switch Outline</h5>
                    </div>
                    <div class="card-body switch_border main-switch switch-unchecked ">
                        <div class="switch-border-primary switch-primary switch-unchecked-primary my-3">
                            <input type="checkbox" id="check-02" class="toggle switch-border-primary" checked>
                            <label for="check-02">Primary</label>
                        </div>
                        <div class="switch-border-secondary switch-secondary switch-unchecked-secondary my-3">
                            <input type="checkbox" id="check-03" class="toggle" checked>
                            <label for="check-03">Secondary</label>
                        </div>
                        <div class="switch-border-success switch-success switch-unchecked-success my-3">
                            <input type="checkbox" id="check-04" class="toggle switch-border-primary" checked>
                            <label for="check-04">Success</label>
                        </div>
                        <div class="switch-border-danger switch-danger switch-unchecked-danger my-3">
                            <input type="checkbox" id="check-05" class="toggle" checked>
                            <label for="check-05">Danger</label>
                        </div>
                        <div class="switch-border-warning switch-warning switch-unchecked-warning my-3">
                            <input type="checkbox" id="check-06" class="toggle" checked>
                            <label for="check-06">Warning</label>
                        </div>
                        <div class="switch-border-info switch-info switch-unchecked-info my-3">
                            <input type="checkbox" id="check-07" class="toggle" checked>
                            <label for="check-07">Info</label>
                        </div>
                        <div class="switch-border-dark switch-dark switch-unchecked-dark my-3">
                            <input type="checkbox" id="check-08" class="toggle" checked>
                            <label for="check-08">Dark</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Switch Outline end -->
        </div>
        <!-- Switch end -->

    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
