@extends('layout.master')
@section('title', 'Typeahead')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Typeahead</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Typeahead</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- typeahead start -->
        <div class="row app-typeahead typeahead-demo">
            <!-- The Basics start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>The Basics</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" class="app-form">
                            <div id="basictype">
                                <input type="text" class="form-control typeahead" placeholder="States">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- The Basics end -->
            <!-- Bloodhound start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Bloodhound</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" class="app-form">
                            <div id="bloodhoundtype">
                                <input type="text" class="form-control typeahead" placeholder="States of USA">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Bloodhound end -->
            <!-- Prefetch start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Prefetch</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" class="app-form">
                            <div id="prefetchtype">
                                <input type="text" class="form-control typeahead" placeholder="Countries">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Prefetch end -->
            <!-- Remote typeahead start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Remote Typeahead</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" class="app-form">
                            <div id="remotetype">
                                <input type="text" class="form-control typeahead" placeholder="Oscar winners for Best Picture">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Remote typeahead end -->
            <!-- Custom Templates start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Templates</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" class="app-form">
                            <div id="customtype-templates">
                                <input type="text" class="form-control typeahead" placeholder="Oscar winners for Best Picture">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Custom Templates end -->
            <!-- Multiple Datasets start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Multiple Datasets</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" class="app-form">
                            <div id="multiple-datasetstype">
                                <input type="text" class="form-control typeahead" placeholder="NBA and NHL teams">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Multiple Datasets end -->
            <!-- Scrollable Dropdown Menu start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Scrollable Dropdown Menu</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" class="app-form">
                            <div class="scrollable-dropdown" id="scrollable-dropdown-menu">
                                <input type="text" class="form-control typeahead" placeholder="Countries">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Scrollable Dropdown Menu end -->
            <!-- RTL Support start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>RTL Support</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" class="app-form">
                            <div id="rtltype">
                                <input type="text" class="form-control typeahead text-end" placeholder="Countries">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- RTL Support end -->
        </div>
        <!-- typeahead end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- typeahead js -->
<script src="{{asset('assets/vendor/typeahead/typeahead.bundle.js')}}"></script>

<!-- js -->
<script src="{{asset('assets/js/typeahead.js')}}"></script>
@endsection
