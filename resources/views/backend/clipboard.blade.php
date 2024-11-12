@extends('backend.layout.master')
@section('title', 'Clipboard')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Clipboard</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Clipboard</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- clipboard start -->
        <div class="row">
            <!-- Copy to Clipboard start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Copy to Text Input</h5>
                    </div>
                    <div class="card-body">
                        <div class="bg-light-secondary pa-25 copy-clipboard b-r-10">
                            <input type="text" class="form-control copytext" id="text2" value="Some text to be copied">
                            <div class="col-sm-12 mt-4">
                                <button class="btn btn-primary copy-input" onclick="clipboard('text2','copy')">
                                    <i class="ti ti-copy"></i> <span>Copy Input</span>
                                </button>
                                <button class="btn btn-danger" onclick="clipboard('text2','cut')">
                                    <i class="ti ti-cut"></i> <span>Cut Input</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Copy to Textarea</h5>
                    </div>
                    <div class="card-body">
                        <div class="bg-light-secondary pa-25  copy-clipboard b-r-10">
                       <textarea class="form-control copytext rows=3" id="text-2" rows="3"
                                 placeholder="Enter Your Text"></textarea>
                            <div class="col-sm-12 mt-4">
                                <button class="btn btn-info copy-input" onclick="clipboard('text-2','copy')">
                                    <i class="ti ti-copy"></i> <span>Copy Input</span>
                                </button>
                                <button class="btn btn-warning" onclick="clipboard('text-2','cut')">
                                    <i class="ti ti-cut"></i> <span>Cut Input</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Copy to highlighted text</h5>
                    </div>
                    <div class="card-body">
                        <div class="bg-light-secondary pa-25 copy-clipboard b-r-10">
                            <p class="form-control copytext mb-3"> For text that you can <span
                                    class="text-bg-primary px-2 b-r-5" id="text-4"> i am going to copy </span> </p>
                            <div class="">
                                <button class="btn btn-success" onclick="copy('text-4')">
                                    <i class="ti ti-copy"></i> Copy Text</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Copy to Paragraph</h5>
                    </div>
                    <div class="card-body">
                        <div class="bg-light-secondary pa-25 copy-clipboard b-r-10">
                            <p class="form-control copytext" id="text-3"> I'd be happy to help you copy a paragraph, but I
                                need a bit more context or the text...
                            </p>
                            <div class="">
                                <button class="btn btn-dark mt-3" onclick="copy('text-3')">
                                    <i class="ti ti-copy"></i>
                                    Copy Paragraph </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Paste</h5>
                    </div>
                    <div class="card-body">
                        <div class="b-r-5">
                            <textarea class="form-control" placeholder="Paste your copied content here" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copy to Clipboard end -->

        </div>
        <!-- clipboard end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!--js-->
<script src="{{asset('assets/js/clipboard.js')}}"></script>
@endsection
