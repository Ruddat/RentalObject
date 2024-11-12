@extends('layout.master')
@section('title', 'Read Email')
@section('css')
    <!-- editor css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/trumbowyg/trumbowyg.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Read Email</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Read Email</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->


        <!-- Read Email start -->
        <div class="row">
            <div class="col-xl-3">
                <div class="card d-none d-xl-block">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary w-100">Compose</button>

                        <div class="horizontal-tab-wrapper">
                            <ul class="email-list mt-3 tabs">
                                <li class="tab-link active" data-tab="1">
                                    <i class="ti ti-mail fs-5 pe-2"></i> <span class="flex-grow-1">Inbox</span> 10+
                                </li>
                                <li class="tab-link" data-tab="2"><i class="ti ti-send fs-5 pe-2"></i><span
                                        class="flex-grow-1">Sent</span></li>
                                <li class="tab-link" data-tab="3"><i class="ti ti-file fs-5 pe-2"></i><span
                                        class="flex-grow-1">Draft</span> </li>
                                <li class="tab-link" data-tab="4"><i class="ti ti-star fs-5 pe-2"></i><span class="flex-grow-1">
                            Starred </span>
                                    2+</li>
                                <li class="tab-link" data-tab="5"><i class="ti ti-alert-octagon fs-5 pe-2"></i><span
                                        class="flex-grow-1">Spam</span> </li>
                                <li class="tab-link" data-tab="6"><i class="ti ti-trash fs-5 pe-2 "></i><span
                                        class="flex-grow-1">Trash</span> </li>
                            </ul>
                        </div>
                        <div class="app-divider-v dashed p-2"></div>
                        <ul class="email-list">
                            <li>
                                <h6>Labels</h6>
                            </li>
                            <li><i class="ti ti-circle-filled pe-2 text-danger"></i> Social</li>
                            <li><i class="ti ti-circle-filled pe-2 text-primary"></i> Company</li>
                            <li><i class="ti ti-circle-filled pe-2 text-success"></i> Important</li>
                            <li><i class="ti ti-circle-filled pe-2 text-info"></i> Private</li>
                        </ul>
                        <div class="app-divider-v dashed p-2"></div>
                        <ul class="email-list">
                            <li><i class="ti ti-mail fs-5 pe-2"></i>All Mail</li>
                            <li><i class="ti ti-album fs-5 pe-2"></i>Primary</li>
                            <li><i class="ti ti-tag fs-5 pe-2"></i>Promotions</li>
                            <li><i class="ti ti-users fs-5 pe-2"></i>Social</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap mb-3">
                            <div class="flex-grow-1">
                                <a href="{{route('email')}}" role="button" class="btn p-0 pe-2" data-bs-toggle="tooltip"
                                   data-bs-placement="top" data-bs-original-title="Back To Inbox">
                                    <i class="ti ti-arrow-left fs-4 text-dark"></i>
                                </a>
                                <button type="button" class="btn border-0 p-1" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Archive ">
                                    <i class="ti ti-archive fs-5 text-dark"></i>
                                </button>
                                <button type="button" class="btn border-0 p-1" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Starred">
                                    <i class="ti ti-star fs-5 text-dark"></i>
                                </button>
                                <button type="button" class="btn border-0 p-1" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Spam">
                                    <i class="ti ti-alert-octagon fs-5 text-dark"></i>
                                </button>
                                <button type="button" class="btn border-0 p-1" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Delete">
                                    <i class="ti ti-trash fs-5 text-dark"></i>
                                </button>
                                <button type="button" class="btn border-0 p-1" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Folder">
                                    <i class="ti ti-folder fs-5 text-dark"></i>
                                </button>
                                <button type="button" class="btn border-0 p-1" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Labels">
                                    <i class="ti ti-tags fs-5 text-dark"></i>
                                </button>
                            </div>
                            <div class="justify-content-end">
                                <span class="text-muted text-dark">2 to 10</span>
                                <button type="button" class="btn border-0 p-1" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Next">
                                    <i class="ti ti-chevron-left fs-5 text-dark"></i>
                                </button>
                                <button type="button" class="btn border-0 p-1" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Previous">
                                    <i class="ti ti-chevron-right fs-5 text-dark"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mail-container">
                            <div class="d-flex align-items-center flex-nowrap mb-5">
                        <span class="bg-secondary h-45 w-45 d-flex-center b-r-50 position-relative ">
                          <img src="{{asset('../assets/images/avtar/6.png')}}" alt="" class="img-fluid b-r-50">
                          <span
                              class="position-absolute top-0 d-flex-center bg-success border border-light rounded-circle text-center p-1 f-s-10 end-0"></span>
                        </span>
                                <div class="flex-grow-1 ps-2">
                                    <p class="text-muted f-s-14 m-0">bettehagenes@gmail.com</p>
                                    <div class="btn-group hover-dropdown">
                                        <button type="button" class="btn waves-effect waves-light text-dark p-0" data-bs-toggle="dropdown"
                                                data-trigger="hover" aria-expanded="false">to<i class="ti ti-chevron-down"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item">From : <span
                                                        class="text-muted f-s-14">arteam@gmail.com</span></a>
                                            </li>
                                            <li><a class="dropdown-item">To : <span
                                                        class="text-muted f-s-14">bettehagenes@gmail.com</span></a>
                                            </li>
                                            <li><a class="dropdown-item">cc : <span
                                                        class="text-muted f-s-14">bettehagenes@gmail.com</span></a>
                                            </li>
                                            <li><a class="dropdown-item">Date : <span class="text-muted f-s-14">29 Sep 2024</span></a>
                                            </li>
                                            <li><a class="dropdown-item">Subject : <span class="text-muted f-s-14">meeting
                                    invitation</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-end d-none d-sm-block">
                                    <p>Sep 29 2024, 4:00 PM</p>
                                    <span class="badge text-light-primary">Company</span>
                                </div>
                                <div class="d-none d-sm-block">
                                    <div class="btn-group dropdown-icon-none ps-2">
                                        <a class="icon-btn dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                           data-bs-auto-close="true" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mb-3">
                                    <h6>Hello! Bette</h6>
                                </div>
                                <div class="mb-3 text-secondary">
                                    <p>I hope you're doing well. I would like to schedule a one-on-one
                                        meeting with you to <strong>discussing a new project</strong>.
                                        I'll send over the
                                        agenda in advance.</p>
                                    <p>The meeting will be in my office, will you be available
                                        one-on-one
                                        <strong> 10 Oct,2024
                                            at 10PM ?</strong> It's important that we have this meeting
                                        so that we can
                                        continue to work effectively together.
                                    </p>
                                </div>
                                <div class="mb-3 text-secondary">
                                    <p>I hope you can make it!</p>
                                    <p>Best,</p>
                                </div>
                                <p class="f-w-500">AR team</p>
                            </div>
                            <div class="app-divider-v dotted"></div>

                            <div class="mb-3">
                                <h6><i class="ti ti-paperclip"></i> Attached</h6>
                                <div class="data-list-box d-flex flex-wrap gap-2 mt-3">
                                    <div class="filebox">
                                        <div class="d-flex gap-3 align-items-center position-relative">
                                            <div class="position-absolute start-0">
                                                <img src="{{asset('../assets/images/icons/file.png')}}" class="w-35 h-35" alt="">
                                            </div>
                                            <div class="flex-grow-1 mg-s-40">
                                                <h6 class="mb-0">Meeting Paper's</h6>
                                                <p class="text-secondary mb-0">1MB</p>
                                            </div>
                                            <p class="file-data text-secondary f-w-500 mb-0"><i class="ti ti-download fs-4"></i></p>
                                        </div>
                                    </div>
                                    <div class="filebox">
                                        <div class="d-flex gap-3 align-items-center position-relative">
                                            <div class="position-absolute start-0">
                                                <img src="{{asset('../assets/images/icons/folder.png')}}" class="w-35 h-35" alt="">
                                            </div>
                                            <div class="flex-grow-1 mg-s-40">
                                                <h6 class="mb-0">Project Details</h6>
                                                <p class="text-secondary mb-0">18 Files</p>
                                            </div>
                                            <p class="file-data text-secondary f-w-500 mb-0"><i class="ti ti-download fs-4"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div id="editor">
                                    <p>Type Message...</p>
                                </div>
                            </div>
                            <button class="btn btn-primary mb-1" type="button">
                                <i class="ti ti-arrow-back-up"></i> Reply
                            </button>
                            <button class="btn btn-primary mb-1" type="button">
                                <i class="ti ti-corner-up-left-double"></i> Reply All
                            </button>
                            <button class="btn btn-primary mb-1" type="button">
                                <i class="ti ti-arrow-forward-up"></i> Forward
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Read Email end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- Trumbowyg js -->
<script src="{{asset('assets/vendor/trumbowyg/trumbowyg.min.js')}}"></script>

<!-- email js -->
<script src="{{asset('assets/js/read_email.js')}}"></script>
@endsection
