@extends('layout.master')
@section('title', 'Scrollbar')
@section('css')
    <!-- simplebar css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/simplebar/simplebar.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Scrollbar</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                              <span>
                                <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                              </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Scrollbar</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <!-- Scrollbar start -->
        <div class="row">
            <!-- verticall scrollbar strat  -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Vertical Scrollbar</h5>
                    </div>
                    <div class="card-body">
                        <div class="scroll-bar vertical-scrollbar-box" id="vertical_scroll">
                            <h5 class="mb-2">Vertically scrollbar:</h5>
                            <p class="">To create a vertically scrollable container with detailed control over the scrollbar, you can use a combination of HTML and CSS. Here's a more detailed example that includes customization of the scrollbar </p>
                            <img src="{{asset('../assets/images/blog-app/02.jpg')}}" alt="" class="w-100">
                            <ul>
                                <li class="mb-2 mt-2 ">
                                    <span class="f-w-600">Overflow Content:</span> When content within a container exceeds the container’s height, a vertical scrollbar is used to access the hidden content.
                                </li>
                                <li class="mb-2">
                                    <span class="f-w-600">Text Blocks:</span> Displaying lengthy articles, documents, or lists of comments.
                                </li>
                                <li class="mb-2">
                                    <span class="f-w-600">Data Tables: </span>Viewing large datasets or tables that extend beyond the visible area.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- verticall scrollbar end  -->

            <!-- both scrollbar start  -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header ">
                        <h5>Both Scrollbar</h5>
                    </div>
                    <div class="card-body">
                        <div class="scroll-bar both-scroll" id="both_scroll">
                            <img src="{{asset('../assets/images/blog-app/09.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- both scrollbar start  -->

            <!-- Horizontal scrollbar start  -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header ">
                        <h5>Horizontal Scrollbar</h5>
                    </div>
                    <div class="card-body">
                        <div class="scroll-bar horizontal-scrollbar" id="horizontal_scroll">
                            <div class="horizontal-content">
                                <div class="row flex-nowrap">
                                    <div class="col-4">
                                        <div class="horizontal-img">
                                            <img src="{{asset('../assets/images/profile-app/07.jpg')}}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="horizontal-img">
                                            <img src="{{asset('../assets/images/profile-app/09.jpg')}}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="horizontal-img">
                                            <img src="{{asset('../assets/images/profile-app/10.jpg')}}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="horizontal-img">
                                            <img src="{{asset('../assets/images/profile-app/05.jpg')}}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Horizontal scrollbar start  -->

            <!-- Badges scrollbar start  -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Badges Scrollbar</h5>
                    </div>
                    <div class="card-body">
                        <ol class="list-group scroll-bar scroll-list-group" id="vertical_scroll_content">
                            <li class="list-group-item b-r-0 d-flex justify-content-between align-items-center flex-wrap">
                                <div class="ms-2">1. Stella Nowland</div>
                                <span class="badge text-bg-primary">Freelance</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between flex-wrap">
                                <div class="ms-2">2.Lola Stanford</div>
                                <span class="badge text-bg-secondary">Issue</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between flex-wrap">
                                <div class="ms-2">3. Caitlin Coungeau</div>
                                <span class="badge text-bg-success">Social</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between flex-wrap">
                                <div class="ms-2">4. Graciela W. McClaran</div>

                                <span class="badge text-bg-danger">Issue</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between flex-wrap">
                                <div class="ms-2">5. Derek T. Aldridge</div>
                                <span class="badge text-bg-warning">Freelance</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between flex-wrap">
                                <div class="ms-2">6.Annie A. Riley</div>
                                <span class="badge text-bg-primary">Social</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between flex-wrap">
                                <div class="ms-2">7. Hana J. Boyd</div>
                                <span class="badge text-bg-danger">Issue</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between flex-wrap">
                                <div class="ms-2">8. Karen R. Pryce</div>
                                <span class="badge text-bg-warning">Freelance</span>
                            </li>
                            <li class="list-group-item b-r-0 d-flex justify-content-between align-items-center flex-wrap">
                                <div class="ms-2">9. Annie A. Riley</div>
                                <span class="badge text-bg-primary">Social</span>
                            </li>
                            <li class="list-group-item b-r-0 d-flex justify-content-between align-items-center flex-wrap">
                                <div class="ms-2">10.Graciela W. McClaran</div>
                                <span class="badge text-bg-danger">Issue</span>
                            </li>
                            <li class="list-group-item b-r-0 d-flex justify-content-between align-items-center flex-wrap">
                                <div class="ms-2">11. Hana J. Boyd</div>
                                <span class="badge text-bg-warning">Freelance</span>
                            </li>
                            <li class="list-group-item b-r-0 d-flex justify-content-between align-items-center flex-wrap">
                                <div class="ms-2">12. Stella Nowland</div>
                                <span class="badge text-bg-primary">Social</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Badges scrollbar start  -->
        </div>
        <!-- Scrollbar end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- Simple bar js-->
<script src="{{asset('assets/js/simplebar.js')}}"></script>
@endsection
