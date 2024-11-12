@extends('layout.master')
@section('title', 'Ticket Details')
@section('css')
    <!-- filepond css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/filepond/filepond.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/filepond/image-preview.min.css')}}">

    <!-- editor css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/trumbowyg/trumbowyg.min.css')}}">

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Ticket Details</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="f-s-14 f-w-500">Ticket</a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Ticket Details</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Ticket details start -->
        <div class="ticket-details row">
            <div class="col-md-5 col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="ticket-details-profile">
                            <div class="ticket-profile mb-4">
                                <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-secondary me-3">
                                    <img src="{{asset('../assets/images/avtar/2.png')}}" alt="" class="img-fluid ">
                                </div>
                                <div>
                                    <h6 class="mb-0">Marry jones</h6>
                                    <p class="text-secondary">(678)456-7890</p>
                                </div>
                            </div>
                            <div class="ticket-profile-con">
                      <span>
                        <i class="ph-bold ph-phone-call text-success f-s-18 me-3"></i>
                      </span>
                                <span>
                        <i class="ph-bold  ph-arrow-square-out f-s-20 text-danger f-s-18 me-3"></i>
                      </span>
                                <span>
                        <i class="ph-bold  ph-user text-info f-s-18"></i>
                      </span>
                                <div class="app-divider-v dashed  pt-4 pb-4"></div>
                            </div>
                        </div>
                        <div class="about-list pt-0">
                            <div>
                                <span class="fw-medium">Ticket Number</span>
                                <span class="float-end f-s-13 text-secondary">AR 2044</span>
                            </div>
                            <div>
                                <span class="fw-medium">Client</span>
                                <span class="float-end f-s-13 text-secondary">Gavin Cortez</span>
                            </div>
                            <div>
                                <span class="fw-medium">Priority</span>
                                <span class="float-end f-s-13 text-secondary">Medium</span>
                            </div>
                            <div>
                                <span class="fw-medium">Title</span>
                                <span class="float-end f-s-13 text-secondary">Bug Report</span>
                            </div>
                            <div>
                                <span class="fw-medium">Status</span>
                                <span class="float-end f-s-13 text-secondary">In Progress</span>
                            </div>
                            <div>
                                <span class="fw-medium">Create Date</span>
                                <span class="float-end f-s-13 text-secondary">1 jan 2024</span>
                            </div>
                            <div>
                                <span class="fw-medium">Due Date</span>
                                <span class="float-end f-s-13 text-secondary">3 feb 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>File Upload</h5>
                    </div>
                    <div class="card-body">
                        <input class="ticket-file-upload app-file-upload" type="file" id="id" multiple="multiple"
                               data-allow-reorder="true">
                        <div class="file-upload-btn mt-3">
                            <div class="d-flex">
                        <span class="bg-danger h-40 w-40 d-flex-center b-r-50 me-3 heartBtn">
                          <i class="ph ph-google-drive-logo f-s-18"></i>
                        </span>
                                <span class="bg-success h-40 w-40 d-flex-center b-r-50 me-3 heartBtn">
                          <i class="ph-bold  ph-folder f-s-18"></i>
                        </span>
                            </div>
                            <div>
                        <span class="bg-warning h-40 w-40 d-flex-center b-r-50 me-3 heartBtn">
                          <i class="ph ph-file-arrow-down f-s-18"></i>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-8  col-xxl-9">
                <div class="card">
                    <div class="card-header">
                        <h5>Ticket Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="ticket-details-content">
                            <div class="mb-3">
                                <h6>Ticket Id</h6>
                                <p class="text-secondary f-s-16">AR 2044 - Bug Report</p>
                            </div>
                            <div class="mb-3">
                                <h6>Ticket Description</h6>
                                <p class="text-secondary">When attempting to send an email with attachments through the system, the attachments are not included in the outgoing email. The expected behavior is for all selected attachments to be sent along with the email content.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5>Comments</h5>
                    </div>
                    <div class="card-body">
                        <div class="ticket-comment-box mb-3">
                            <div class="d-flex justify-content-between position-relative flex-wrap">
                                <div class="h-45 w-45 d-flex-center b-r-50 bg-success overflow-hidden position-absolute">
                                    <img src="{{asset('../assets/images/avtar/12.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="flex-grow-1 ps-2 pe-2 ms-5">
                                    <h6 class="mb-0">Gavin Cortez</h6>
                                    <p class="text-muted f-s-14">to Danny Amacher danny@capacity.com</p>
                                    <p class="text-dark mb-3">More detailed steps if you have found a different way or additional conditions under which the bug occurs.</p>

                                </div>
                                <div class="ms-5">
                                    <p>Feb 9,2022 10:31 AM</p>
                                </div>
                            </div>
                            <ul class="d-flex flex-wrap ms-5">
                                <li class="me-3 w-250 mb-3">
                                    <div class="ticket-details-comment p-3 w-100">
                                        <h6 class="mb-0">Screenshot png</h6>
                                        <p class="mb-0 text-secondary ">16 june 2022, 1.30pm</p>
                                    </div>
                                </li>
                                <li class="me-3 w-250">
                                    <div class="ticket-details-comment p-3 w-100">
                                        <h6 class="mb-0">Screen_shot.png')}}</h6>
                                        <p class="mb-0 text-secondary">16 june 2022, 1.30pm</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ticket-comment-box mb-3">
                            <div class="d-flex justify-content-between position-relative flex-wrap">
                                <div class="h-45 w-45 d-flex-center b-r-50 bg-primary overflow-hidden position-absolute">
                                    <img src="{{asset('../assets/images/avtar/11.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="flex-grow-1 ps-2 pe-2 ms-5">
                                    <h6 class="mb-0">Allian Horman</h6>
                                    <p class="text-muted f-s-14">to Danny Amacher danny@capacity.com</p>
                                    <p class="text-dark mb-3">Thanks for flagging this issue! I was able to reproduce the bug following the steps you outlined.</p>
                                </div>
                                <div>
                                    <p>Feb 9,2022 10:31 AM</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Leave a Note</h5>
                    </div>
                    <div class="card-body">
                        <div id="editor-1">
                            <p>Hello !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ticket details end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- filepond -->
<script src="{{asset('assets/vendor/filepond/file-encode.min.js')}}"></script>
<script src="{{asset('assets/vendor/filepond/validate-size.min.js')}}"></script>
<script src="{{asset('assets/vendor/filepond/validate-type.js')}}"></script>
<script src="{{asset('assets/vendor/filepond/exif-orientation.min.js')}}"></script>
<script src="{{asset('assets/vendor/filepond/image-preview.min.js')}}"></script>
<script src="{{asset('assets/vendor/filepond/filepond.min.js')}}"></script>

<!-- data table js -->
<script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>

<!-- Trumbowyg js -->
<script src="{{asset('assets/vendor/trumbowyg/trumbowyg.min.js')}}"></script>

<!-- ticket js -->
<script src="{{asset('assets/js/ticket_details.js')}}"></script>
@endsection

