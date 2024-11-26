@extends('backend.layout.master')
@section('title', 'Blank')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Blank</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-newspaper f-s-16"></i> Other Pages
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Blank</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Todo start -->
        <div class="row">
            <!-- Add Project start -->
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">

                        @livewire('backend.admin.project-manager.project-manager-component')

                    </div>
                </div>
            </div>
            <!-- Add Project end -->


            <!-- Todo start -->
            <div class="col-xl-9">
                <div id="myTodo">

                    @livewire('backend.admin.project-manager.todo-manager-component')

                </div>
            </div>
            <!-- Todo end -->


        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- List js -->
<script src="{{asset('backend/assets/vendor/listJs/list-jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/listJs/list.min.js')}}"></script>

<!--js -->
<script src="{{asset('backend/assets/js/to_do.js')}}"></script>

@endsection
