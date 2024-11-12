@extends('layout.master')
@section('title', 'Textarea')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Textarea</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                                          <span>
                                            <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                                          </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Textarea</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Textarea start -->
        <div class="row">
            <!-- Basic Textarea start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Basic Textarea</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form class="app-form">
                                    <label for="textareaexample" class="form-label">Simple
                                        textarea</label>
                                    <textarea class="form-control" id="textareaexample" placeholder="Some text..."
                                              rows="2"></textarea>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form class="app-form">
                                    <label class="form-label">Floating
                                        textarea</label>
                                    <div class="form-floating">
                            <textarea class="form-control" id="floatingTextarea2"
                                      placeholder="Type Your Address"></textarea>
                                        <label for="floatingTextarea2">Address</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Textarea end -->
            <!-- Horizontal Textarea start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal Textarea</h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="row mb-3">
                                <label for="textareaexample1" class="col-sm-4 col-lg-2">Small Textarea</label>
                                <div class="col-sm-8 col-lg-10">
                          <textarea class="form-control" id="textareaexample1" placeholder="Some text..."
                                    rows="1"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="textareaexample2" class="col-sm-4 col-lg-2">Default Textarea</label>
                                <div class="col-sm-8 col-lg-10">
                                    <textarea class="form-control" id="textareaexample2" placeholder="Some text..."></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <label for="textareaexample3" class="col-sm-4 col-lg-2">Large Textarea</label>
                                <div class="col-sm-8 col-lg-10">
                          <textarea class="form-control" id="textareaexample3" placeholder="Some text..."
                                    rows="6"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Horizontal Textarea end -->
            <!-- Textarea With States start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Textarea With States</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form class="app-form was-validated">
                                    <div class="mb-3">
                                        <label for="validationTextarea" class="form-label">Textarea</label>
                                        <textarea class="form-control" id="validationTextarea"
                                                  placeholder="Required example textarea" required></textarea>
                                        <div class="invalid-feedback">
                                            Please enter a message in the textarea.
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-12">
                                <form class="app-form was-validated">
                                    <div>
                                        <label for="validationTextarea1" class="form-label">Textarea</label>
                                        <textarea class="form-control is-valid" id="validationTextarea1"
                                                  placeholder="Required example textarea"></textarea>
                                        <div class="invalid-feedback">
                                            Please enter a message in the textarea.
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Textarea With States end -->
            <!-- Textarea Formatter start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Textarea Formatter</h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="mb-3">
                                <textarea class="form-control" id="write-textarea" placeholder="write some text.."></textarea>
                            </div>
                            <div class="form-control h-40" id="code-output"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Textarea Formatter end -->
            <!-- Custom Textarea Formatter start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Textarea Formatter</h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="mb-3">
                                <textarea class="form-control" id="myTextarea" placeholder="write some text.."></textarea>
                            </div>
                            <div class="mb-3">
                                <button id="submitBtn" class="btn btn-primary">Submit
                                    Code</button>
                            </div>
                            <div class="form-control h-40" id="output"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Custom Textarea Formatter end -->
        </div>
        <!-- Textarea end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- js -->
    <script src="{{asset('assets/js/textarea.js')}}"></script>
@endsection
