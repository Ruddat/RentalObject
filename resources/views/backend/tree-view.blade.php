@extends('layout.master')
@section('title', 'Tree View')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/fontawesome/css/all.css')}}">

    <!-- tree-view css  -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/jstree/style.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Tree View</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                                            <span>
                                                <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Tree View</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!--tree-view start -->
        <div class="row tree-view">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Tree</h5>
                    </div>

                    <div class="card-body">
                        <div class="nestable">
                            <div id="theme_tree"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Tree With Checkbox</h5>
                    </div>

                    <div class="card-body">
                        <div class="level-nestable">
                            <div id="level_tree"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- tree-view end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- tree-view js  -->
    <script src="{{asset('backend/assets/vendor/jstree/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/jstree/jstree.min.js')}}"></script>

    <!-- tree-view-custom-js  -->
    <script src="{{asset('backend/assets/js/tree-view.js')}}"></script>
@endsection
