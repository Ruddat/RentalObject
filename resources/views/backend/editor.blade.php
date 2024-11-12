@extends('layout.master')
@section('title', 'Editor')
@section('css')
    <!-- editor css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/trumbowyg/trumbowyg.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Editor</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
									<span>
									  <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
									</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Editor</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Editor start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="app-editor" id="editor">
                            <p>Hello !</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="editor1">
                            <p>Hello !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Editor end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>


<!-- Trumbowyg js -->
<script src="{{asset('assets/vendor/trumbowyg/trumbowyg.min.js')}}"></script>

<!-- js -->
<script src="{{asset('assets/js/editor.js')}}"></script>
@endsection
