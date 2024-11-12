@extends('layout.master')
@section('title', 'Tooltips Popovers')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Tooltips Popovers</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                              <span>
                                <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                              </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Tooltips Popovers</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <!-- Default Tooltips start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Default Tooltips </h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Custom tooltip">Custom tooltip</button>
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Disabled tooltip">
                      <button class="btn bg-secondary-300" type="button" disabled>Disabled Tooltips</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Default Tooltips end -->
            <!-- Placement start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Placement </h5>
                    </div>
                    <div class="card-body d-flex flex-wrap gap-3">
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Tooltip on top">
                                Tooltip on top
                            </button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="Tooltip on right">
                                Tooltip on right
                            </button>

                        </div>
                        <div>
                            <button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Tooltip on bottom">
                                Tooltip on bottom
                            </button>
                        </div>

                        <div>
                            <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Tooltip on left">
                                Tooltip on left
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Placement end -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>HTML</h5>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-html="true"
                                title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                            Tooltip with HTML
                        </button>
                    </div>
                </div>
            </div>
            <!-- Colors Tooltips start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Colors Tooltips</h5>
                    </div>
                    <div class="card-body d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="tooltip"
                                data-bs-custom-class="custom-primary" data-bs-html="true" title="Primary">
                            Primary
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                data-bs-custom-class="custom-secondary" data-bs-html="true" title="Secondary">
                            Secondary
                        </button>
                        <button type="button" class="btn btn-success" data-bs-toggle="tooltip"
                                data-bs-custom-class="custom-success" data-bs-html="true" title="Success">
                            Success
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="tooltip"
                                data-bs-custom-class="custom-danger" data-bs-html="true" title="Danger">
                            Danger
                        </button>
                        <button type="button" class="btn btn-warning" data-bs-toggle="tooltip"
                                data-bs-custom-class="custom-warning" data-bs-html="true" title="Warning">
                            Warning
                        </button>
                        <button type="button" class="btn btn-info" data-bs-toggle="tooltip"
                                data-bs-custom-class="custom-info" data-bs-html="true" title="Info">
                            Info
                        </button>
                        <button type="button" class="btn btn-light" data-bs-toggle="tooltip"
                                data-bs-custom-class="custom-light" data-bs-html="true" title="Light">
                            Light
                        </button>
                        <button type="button" class="btn btn-dark" data-bs-toggle="tooltip"
                                data-bs-custom-class="custom-dark" data-bs-html="true" title="Dark">
                            Dark
                        </button>
                    </div>
                </div>
            </div>
            <!-- Colors Tooltips end -->
            <!-- Custom popovers start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom popovers </h5>
                    </div>
                    <div class="card-body">
                        <a tabindex="0" class="btn text-light-warning" role="button" data-bs-toggle="popover"
                           data-bs-trigger="focus" data-bs-title="Dismissible popover"
                           data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible
                            popover</a>
                    </div>
                </div>
            </div>
            <!-- Custom popovers end -->

        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- Tooltip js  -->
<script src="{{asset('assets/js/tooltips_popovers.js')}}"></script>
@endsection
