@extends('backend.layout.master')
@section('title', 'Setting')
@section('css')
    <!-- glight css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/glightbox/glightbox.min.css')}}">

    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendor/apexcharts/apexcharts.css')}}">

    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendor/select/select2.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Setting</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                                    <span>
                                      <i class="ph-duotone  ph-stack f-s-16 "></i> Apps
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="f-s-14 f-w-500">Profile</a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Setting</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- setting-app start -->


                    @livewire('backend.admin.profile-settings.settings-navigation-component')



        <!--setting app end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- apexcharts-->
    <script src="{{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Glight js -->
    <script src="{{asset('backend/assets/vendor/glightbox/glightbox.min.js')}}"></script>

    <!-- sweetalert js-->
    <script src="{{asset('backend/assets/vendor/sweetalert/sweetalert.js')}}"></script>

    <!-- select2 -->
    <script src="{{asset('backend/assets/vendor/select/select2.min.js')}}"></script>

    <!--setting js  -->
    <script src="{{asset('backend/assets/js/setting.js')}}"></script>
@endsection
