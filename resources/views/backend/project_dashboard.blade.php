@extends('backend.layout.master')
@section('title', 'Project Dashboard')
@section('css')

    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/apexcharts/apexcharts.css') }}">


    <!-- Data Table css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendor/datatable/jquery.dataTables.min.css')}}">


@endsection
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <!-- order -3 -->
            <div class="col-lg-8 col-xxl-6 order--2-lg">
                <div class="card equal-card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h5 class="header-title-text">Project Status</h5>

                                <div class="project-status-box">
                                    <div class="project-status-card bg-primary">
                            <span class="bg-light-light h-45 w-45 d-flex-center b-r-50">
                              <i class="ph-fill  ph-projector-screen-chart"></i>
                            </span>
                                        <p class="mb-0 mt-2">Project</p>
                                        <h4 class="text-white f-w-600">35k</h4>
                                    </div>
                                    <div class="project-status-card bg-dark">
                            <span class="bg-light-light h-45 w-45 d-flex-center b-r-50">
                              <i class="ph-bold  ph-circles-three-plus"></i>
                            </span>
                                        <p class="mb-0 mt-2">Assigned</p>
                                        <h4 class="text-white f-w-600">60</h4>
                                    </div>
                                    <div class="project-status-card bg-warning">
                            <span class="bg-light-dark h-45 w-45 d-flex-center b-r-50">
                              <i class="ph ph-chart-line-up"></i>
                            </span>
                                        <p class="mb-0 mt-2">In Progress</p>
                                        <h4 class="text-white f-w-600">20</h4>
                                    </div>
                                    <div class="project-status-card">
                            <span class="bg-light-secondary h-45 w-45 d-flex-center b-r-50">
                              <i class="ph-bold  ph-check-circle"></i>
                            </span>
                                        <p class="mb-0 mt-2">Completed</p>
                                        <h4 class="f-w-600">2k</h4>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap gap-2 mt-4">
                                    <div>
                                        <p class="f-s-16 text-secondary mb-0">On Time Completion Rating :</p>
                                    </div>
                                    <h5>89%</h5>
                                    <div class="flex-shrink-0">
                                        <span class="badge text-bg-success">20%</span>
                                    </div>
                                </div>
                                <div class="progress-box bg-light-secondary w-100 mt-3">
                                    <div class="progress-content">
                                        <div>
                                            <div class="left d-flex align-items-center">
                                                <b class="me-1 ms-1">85%</b> Processing
                                            </div>
                                            <div class="right">
                                                <i class="fa fa-close"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress w-100 h-8" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                         aria-valuemax="100">
                                        <div class="progress-bar bg-secondary h-8" style="width: 75%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 pt-3 pt-sm-0">
                                <h5 class="header-title-text txt-ellipsis-1">Project Team</h5>

                                <div class="mt-3">

                                    <ul class="avatar-group justify-content-start mt-3">
                                        <li class="text-bg-danger h-45 w-45 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                            data-bs-title="Everlee Lambert">
                                            A
                                        </li>
                                        <li class="text-bg-dark h-45 w-45 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                            data-bs-title="Hunter Scott">
                                            CD
                                        </li>
                                        <li class="text-bg-warning h-45 w-45 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                            data-bs-title="Hunter Scott">
                                            XYZ
                                        </li>
                                        <li class="text-bg-secondary h-30 w-30 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                            data-bs-title="2 More">
                                            2+
                                        </li>
                                    </ul>

                                </div>

                                <div class="project-hour-box">
                                    <div class="flex-grow-1">
                                        <p class="f-s-18 f-w-500 text-secondary mb-0">Hours: <span class="f-w-600 text-primary">60</span></p>
                                    </div>
                                    <div>
                                        <div id="hoursRedial"></div>
                                    </div>
                                </div>
                                <div class="project-hour-box">
                                    <div class="flex-grow-1 ">
                                        <p class="f-s-18 f-w-500 text-secondary mb-0">Task: <span class="f-w-600 text-success">100/85</span></p>
                                    </div>
                                    <div>
                                        <div id="spendhoursRedial"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="header-title-text">Messages</h5>

                        <ul class="messages-list mt-3">
                            <li class="messages-list-item">
                                <div
                                    class="h-40 w-40 d-flex-center b-r-15 overflow-hidden text-bg-secondary messages-list-avatar">
                                    <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="messages-list-content">
                                    <h6 class="mb-0 f-s-16">Emily Johnson</h6>
                                    <p class="mb-0 f-s-13 text-secondary">Could we discuss the project timeline?</p>
                                </div>
                            </li>
                            <li class="messages-list-item">
                                <div class="h-40 w-40 d-flex-center b-r-15 overflow-hidden text-bg-light messages-list-avatar">
                                    <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="messages-list-content">
                                    <h6 class="mb-0 f-s-16">David Smith</h6>
                                    <p class="mb-0 f-s-13 text-secondary">I'm impressed with the progress so far!</p>
                                </div>
                            </li>
                            <li class="messages-list-item">
                                <div class="h-40 w-40 d-flex-center b-r-15 overflow-hidden text-bg-dark messages-list-avatar">
                                    <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="messages-list-content">
                                    <h6 class="mb-0 f-s-16">Samantha Brown</h6>
                                    <p class="mb-0 f-s-13 text-secondary">Can we have a quick update meeting?</p>
                                </div>
                            </li>
                            <li class="messages-list-item">
                                <div
                                    class="h-40 w-40 d-flex-center b-r-15 overflow-hidden text-bg-secondary messages-list-avatar">
                                    <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="messages-list-content">
                                    <h6 class="mb-0 f-s-16">Michael Davis</h6>
                                    <p class="mb-0 f-s-13 text-secondary">Looking forward to the next milestone.</p>
                                </div>
                            </li>
                            <li class="messages-list-item">
                                <div class="h-40 w-40 d-flex-center b-r-15 overflow-hidden text-bg-light messages-list-avatar">
                                    <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="messages-list-content">
                                    <h6 class="mb-0 f-s-16">Jennifer Martinez</h6>
                                    <p class="mb-0 f-s-13 text-secondary">Is there any way to expedite the delivery?</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- order -1 -->
            <div class="col-md-6 col-lg-4 col-xxl-3 order--1-lg">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="p-3">
                            <h6 class="f-w-500 text-secondary mb-0"><i class="ph-bold  ph-caret-left me-2"></i>Feb 02 - Feb 08</h6>
                            <div class="project-earning mt-3">
                                <div class="project-earning-label">
                                    <h6 class="mb-0"><i class="ph-fill  ph-circle f-s-14 text-warning me-2"></i>$68,200</h6>
                                    <p class="text-secondary mb-0 ms-4">Income</p>
                                </div>
                                <div class="project-earning-label">
                                    <h6 class="mb-0"><i class="ph-fill  ph-circle f-s-14 text-success me-2"></i>$12,200</h6>
                                    <p class="text-secondary mb-0 ms-4">Total</p>
                                </div>
                            </div>
                        </div>
                        <div class="project-earning-chart">
                            <div id="projectEarning"></div>
                        </div>
                        <div class="p-3 project-earning-content">
                            <p class="mb-0">In the symphony of success, our total project income resonates as the crescendo of our endeavors.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-6 col-xxl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="header-title-text">Meeting Schedule</h5>

                        <ul class="meeting-schedule-list  mt-3" id="meetingSchedule">
                            <li>
                                <div class="meeting-time">

                                    <div class="meeting-schedule-icons">
                                        <div class="">
                                            <img src="{{asset('backend/assets/images/dashboard/project/03.png')}}" alt="" class="w-25">
                                        </div>
                                        <div class="">
                                            <img src="{{asset('backend/assets/images/dashboard/project/01.png')}}" alt="" class="w-25">
                                        </div>
                                        <div class="">
                                            <img src="{{asset('backend/assets/images/dashboard/project/02.png')}}" alt="" class="w-25">
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between" draggable="false">
                                            <div class="">
                                                <h6 class="mb-0 text-dark">Layla Garcia</h6>
                                                <p class="mb-0 text-secondary f-s-12">Weekly Progress Update </p>
                                            </div>
                                            <p class="text-secondary mb-0">10:00 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="meeting-time">
                                    <div class="meeting-schedule-icons">
                                        <div class="">
                                            <img src="{{asset('backend/assets/images/dashboard/project/03.png')}}" alt="" class="w-25">
                                        </div>
                                        <div class="">
                                            <img src="{{asset('backend/assets/images/dashboard/project/01.png')}}" alt="" class="w-25">
                                        </div>
                                        <div class="">
                                            <img src="{{asset('backend/assets/images/dashboard/project/02.png')}}" alt="" class="w-25">
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between" draggable="false">
                                            <div class="">
                                                <h6 class="mb-0 text-dark">Jim Kramer</h6>
                                                <p class="mb-0 text-secondary f-s-12">Client Feedback Session</p>
                                            </div>
                                            <p class="text-secondary mb-0">11:30 AM</p>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="meeting-time">
                                    <div class="meeting-schedule-icons">
                                        <div class="">
                                            <img src="{{asset('backend/assets/images/dashboard/project/03.png')}}" alt="" class="w-25">
                                        </div>
                                        <div class="">
                                            <img src="{{asset('backend/assets/images/dashboard/project/01.png')}}" alt="" class="w-25">
                                        </div>
                                        <div class="">
                                            <img src="{{asset('backend/assets/images/dashboard/project/02.png')}}" alt="" class="w-25">
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between" draggable="false">
                                            <div class="">
                                                <h6 class="mb-0 text-dark">Zack Padilla</h6>
                                                <p class="mb-0 text-secondary f-s-12">Problem-Solving Brainstorm</p>
                                            </div>

                                            <p class="text-secondary mb-0">1:00 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="meeting-time">
                                    <div class="meeting-schedule-icons">
                                        <div class="">
                                            <img src="{{asset('backend/assets/images/dashboard/project/03.png')}}" alt="" class="w-25">
                                        </div>
                                        <div class="">
                                            <img src="{{asset('backend/assets/images/dashboard/project/01.png')}}" alt="" class="w-25">
                                        </div>
                                        <div class="">
                                            <img src="{{asset('backend/assets/images/dashboard/project/02.png')}}" alt="" class="w-25">
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between" draggable="false">
                                            <div class="">
                                                <h6 class="mb-0 text-dark">Wilson Terry</h6>
                                                <p class="mb-0 text-secondary f-s-12">Product Demo and Review</p>
                                            </div>
                                            <p class="text-secondary mb-0">2:45 AM</p>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="header-title-text">Activity Hours</h5>
                        <div>
                            <div id="activityHours"></div>
                        </div>
                        <div>
                            <p class="text-secondary f-w-500 txt-ellipsis-3 mb-0">Your work performance is 30% better compare to last month</p>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-xxl-5">
                <div class="card">
                    <div class="card-body">
                        <div class="team-chat-header d-flex align-items-center">
                            <a href="{{route('profile')}}">
                        <span class="profileimg h-45 w-45 d-flex-center bg-primary b-r-50 position-relative">
                           RA
                          <span class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                        </span>
                            </a>
                            <div class="flex-grow-1 ps-2 pe-2">
                                <h6 class="text-dark mb-0 f-w-600"> Innovision Squad</h6>
                                <div class="text-muted f-s-12 text-success">Online</div>
                            </div>
                        </div>
                        <div class="team-chat-container app-scroll mt-3">
                            <div class="position-relative">
                                <div class="chatdp h-40 w-40 b-r-15 position-absolute">
                                    <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid b-r-15">
                                </div>
                                <div class="team-chat-box">
                                    <div>
                                        <div class="team-text-box">
                                            <p class="chat-text">Good morning team! I've made some progress on the homepage design. Check it out: [homepage_designing.com]</p>
                                        </div>
                                        <p class="text-muted mb-0"> 2 Minutes ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative right-side-chat">
                                <div class="chatdp h-40 w-40 b-r-15 position-absolute">
                                    <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt="" class="img-fluid b-r-15">
                                </div>
                                <div class="team-chat-box">
                                    <div>
                                        <div class="team-text-box">
                                            <p class="chat-text">Looks great, Alice! I'll start working on the backend functionalities to support it.</p>
                                        </div>
                                        <p class="text-muted mb-0"> 2 Minutes ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative right-side-chat">
                                <div class="chatdp h-40 w-40 b-r-15 position-absolute">
                                    <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid b-r-15">
                                </div>
                                <div class="team-chat-box">
                                    <div>
                                        <div class="team-text-box">
                                            <p class="chat-text">I've encountered an issue with the database connection. Can someone help troubleshoot?</p>
                                        </div>
                                        <p class="text-muted mb-0"> 2 Minutes ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative right-side-chat">
                                <div class="chatdp h-40 w-40 b-r-15 position-absolute">
                                    <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt="" class="img-fluid b-r-15">
                                </div>
                                <div class="team-chat-box">
                                    <div>
                                        <div class="team-text-box">
                                            <p class="chat-text">Sure, Charlie. Let's hop on a call after lunch to debug it together.</p>
                                        </div>
                                        <p class="text-muted mb-0"> 2 Minutes ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative">
                                <div class="chatdp h-40 w-40 b-r-15 position-absolute">
                                    <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid b-r-15">
                                </div>
                                <div class="team-chat-box">
                                    <div>
                                        <div class="team-text-box">
                                            <p class="chat-text text-success">Typing...</p>
                                        </div>
                                        <p class="text-muted mb-0"> 2 Minutes ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-chat-footer">
                            <div class="flex-grow-1">
                                <div class="input-group">
                          <span class="input-group-text mx-2 b-r-10 ">
                            <a class="d-flex-center text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Emoji" role="button">
                              <i class="ti ti-mood-smile f-s-18"></i>
                            </a>
                          </span>
                                    <input type="text" class="form-control b-r-6" placeholder="Type a message" aria-label="Recipient's username">
                                    <span class="input-group-text ms-2 me-2 b-r-10 bg-primary">
                            <a class="d-flex-center text-white" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Send" role="button">
                              <i class="ti ti-send f-s-18"></i>
                            </a>
                          </span>
                                </div>
                            </div>
                            <div class="d-none d-sm-block">
                                <a class="text-light-secondary h-35 w-35 d-flex-center b-r-8" role="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Microphone">
                                    <i class="ti ti-microphone f-s-18"></i>
                                </a>
                            </div>
                            <div class="d-none d-sm-block">
                                <a class="text-light-secondary h-35 w-35 d-flex-center b-r-8 mx-1" role="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Camera">
                                    <i class="ti ti-camera-plus f-s-18"></i>
                                </a>
                            </div>
                            <div class="d-none d-sm-block">
                                <a class="text-light-secondary h-35 w-35 d-flex-center b-r-8" role="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Paperclip">
                                    <i class="ti ti-paperclip f-s-18"></i>
                                </a>
                            </div>
                            <div>
                                <div class="btn-group dropdown-icon-none d-sm-none">
                                    <a class="h-35 w-35 d-flex-center ms-1" role="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-microphone"></i> <span class="f-s-13">Microphone</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"> <i class="ti ti-camera-plus"></i> <span class="f-s-13">camera</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-paperclip"></i> <span class="f-s-13">paperclip</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- order 1 -->
            <div class="col-xxl-9 order-1-md">
                <div class="card">
                    <div class="card-body p-0">
                        <!-- <h5>Projects</h5> -->

                        <div class="table-responsive Projects-datatable  app-datatable-default app-scroll">
                            <table id="ProjectsDatatable" class="display">
                                <thead>
                                <tr>
                                    <th>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </th>
                                    <th>Project</th>
                                    <th>Status</th>
                                    <th>Type</th>
                                    <th>Team</th>
                                    <th>Preview</th>
                                    <th>Tracking</th>
                                    <th>Progress</th>
                                    <th>Due Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="position-relative">
                                            <div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden bg-light-primary b-1-primary p-1 position-absolute">
                                                <i class="ph-duotone  ph-swap f-s-16"></i>
                                            </div>
                                            <div class="ms-5">
                                                <h6 class="f-s-15 f-w-600 mb-0">Website Redesign</h6>
                                                <p class="f-s-13 text-secondary mb-0">John Mandela</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge text-light-warning"> <i class="ti ti-download me-1"></i> In Progress</span>
                                    </td>
                                    <td>Front-end</td>
                                    <td>
                                        <ul class="avatar-group justify-content-start">
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-success b-2-light" data-bs-toggle="tooltip" data-bs-title="Eva Bailey">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-danger b-2-light" data-bs-toggle="tooltip" data-bs-title="Michael Hughes">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="10 More">
                                                10+
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="#">www.web.com</a>
                                    </td>
                                    <td>
                                        <div class="time-tracking-box">
                                            <i class="ph-duotone  ph-clock f-s-12"></i>
                                            <span class="f-s-12">20 hours</span>
                                            <span class="badge text-bg-warning"><i class="ph ph-play-pause text-white f-s-13"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        50%
                                    </td>
                                    <td>2024-06-15</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="position-relative">
                                            <div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden bg-light-info b-1-info p-1 position-absolute">
                                                <i class="ph-duotone  ph-arrows-in-cardinal f-s-16"></i>
                                            </div>
                                            <div class="ms-5">
                                                <h6 class="f-s-15 f-w-600 mb-0"> Marketing Campaign</h6>
                                                <p class="f-s-13 text-secondary mb-0">John Mandela</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge text-light-success"> <i class="ti ti-download me-1"></i>Completed</span>
                                    </td>
                                    <td>Marketing</td>
                                    <td>
                                        <ul class="avatar-group justify-content-start">
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-secondary b-2-light" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light" data-bs-toggle="tooltip" data-bs-title="Eva Bailey">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="10 More">
                                                15+
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="#">www.marketing.com</a>
                                    </td>
                                    <td>
                                        <div class="time-tracking-box">
                                            <i class="ph-duotone  ph-clock f-s-12"></i>
                                            <span class="f-s-12">40 hours</span>
                                            <span class="badge text-bg-warning"><i class="ph ph-play-pause text-white f-s-13"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        100%
                                    </td>
                                    <td>2024-04-30</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="position-relative">
                                            <div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden bg-light-danger b-1-danger p-1 position-absolute">
                                                <i class="ph-duotone  ph-airplay f-s-16"></i>
                                            </div>
                                            <div class="ms-5">
                                                <h6 class="f-s-15 f-w-600 mb-0">Product Launch</h6>
                                                <p class="f-s-13 text-secondary mb-0">John Mandela</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge text-light-info"> <i class="ti ti-download me-1"></i>Pending</span>
                                    </td>
                                    <td>Launch</td>
                                    <td>
                                        <ul class="avatar-group justify-content-start">
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-dark b-2-light" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="10 More">
                                                20+
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="#">www.web_app_dev.com</a>
                                    </td>
                                    <td>
                                        <div class="time-tracking-box">
                                            <i class="ph-duotone  ph-clock f-s-12"></i>
                                            <span class="f-s-12">0 hours</span>
                                            <span class="badge text-bg-warning"><i class="ph ph-play-pause text-white f-s-13"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        0%
                                    </td>
                                    <td>2024-07-10</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="position-relative">
                                            <div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden bg-light-success b-1-success p-1 position-absolute">
                                                <i class="ph-duotone  ph-codesandbox-logo f-s-16"></i>
                                            </div>
                                            <div class="ms-5">
                                                <h6 class="f-s-15 f-w-600 mb-0">App Development</h6>
                                                <p class="f-s-13 text-secondary mb-0">John Mandela</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge text-light-danger"> <i class="ti ti-download me-1"></i>On Hold</span>
                                    </td>
                                    <td>Development</td>
                                    <td>
                                        <ul class="avatar-group justify-content-start">
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-secondary b-2-light" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-success b-2-light" data-bs-toggle="tooltip" data-bs-title="Eva Bailey">
                                                <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-warning b-2-light" data-bs-toggle="tooltip" data-bs-title="Michael Hughes">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="10 More">
                                                5+
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="#">www.appdev.com</a>
                                    </td>
                                    <td>
                                        <div class="time-tracking-box">
                                            <i class="ph-duotone  ph-clock f-s-12"></i>
                                            <span class="f-s-12">10 hours</span>
                                            <span class="badge text-bg-warning"><i class="ph ph-play-pause text-white f-s-13"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        20%
                                    </td>
                                    <td>2024-08-20</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="position-relative">
                                            <div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden bg-light-warning b-1-warning p-1 position-absolute">
                                                <i class="ph-duotone  ph-folder-notch f-s-16"></i>
                                            </div>
                                            <div class="ms-5">
                                                <h6 class="f-s-15 f-w-600 mb-0">Content Creation</h6>
                                                <p class="f-s-13 text-secondary mb-0">John Mandela</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge text-light-warning"> <i class="ti ti-download me-1"></i>In Progress</span>
                                    </td>
                                    <td>Content</td>
                                    <td>
                                        <ul class="avatar-group justify-content-start">
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-success b-2-light" data-bs-toggle="tooltip" data-bs-title="Eva Bailey">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="10 More">
                                                10+
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="#">www.site.com</a>
                                    </td>
                                    <td>
                                        <div class="time-tracking-box">
                                            <i class="ph-duotone  ph-clock f-s-12"></i>
                                            <span class="f-s-12">30 hours</span>
                                            <span class="badge text-bg-warning"><i class="ph ph-play-pause text-white f-s-13"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        70%
                                    </td>
                                    <td>2024-05-25</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="position-relative">
                                            <div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden bg-light-secondary b-1-secondary p-1 position-absolute">
                                                <i class="ph-duotone  ph-text-outdent f-s-16"></i>
                                            </div>
                                            <div class="ms-5">
                                                <h6 class="f-s-15 f-w-600 mb-0">Training Workshop</h6>
                                                <p class="f-s-13 text-secondary mb-0">John Mandela</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge text-light-success"> <i class="ti ti-download me-1"></i>Completed</span>
                                    </td>
                                    <td>Training</td>
                                    <td>
                                        <ul class="avatar-group justify-content-start">
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-success b-2-light" data-bs-toggle="tooltip" data-bs-title="Eva Bailey">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-danger b-2-light" data-bs-toggle="tooltip" data-bs-title="Michael Hughes">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="10 More">
                                                10+
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="#">www.training.com</a>
                                    </td>
                                    <td>
                                        <div class="time-tracking-box">
                                            <i class="ph-duotone  ph-clock f-s-12"></i>
                                            <span class="f-s-12">50 hours</span>
                                            <span class="badge text-bg-warning"><i class="ph ph-play-pause text-white f-s-13"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        100%
                                    </td>
                                    <td>2024-03-15</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="position-relative">
                                            <div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden bg-light-dark b-1-dark p-1 position-absolute">
                                                <i class="ph-duotone  ph-presentation-chart f-s-16"></i>
                                            </div>
                                            <div class="ms-5">
                                                <h6 class="f-s-15 f-w-600 mb-0">Research Initiative</h6>
                                                <p class="f-s-13 text-secondary mb-0">John Mandela</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge text-light-success"> <i class="ti ti-download me-1"></i>Progress</span>
                                    </td>
                                    <td>Research</td>
                                    <td>
                                        <ul class="avatar-group justify-content-start">
                                            <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt="" class="img-fluid">
                                            </li>
                                            <li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="10 More">
                                                15+
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="#">www.initiative.com</a>
                                    </td>
                                    <td>
                                        <div class="time-tracking-box">
                                            <i class="ph-duotone  ph-clock f-s-12"></i>
                                            <span class="f-s-12">15 hours</span>
                                            <span class="badge text-bg-warning"><i class="ph ph-play-pause text-white f-s-13"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        40%
                                    </td>
                                    <td>2024-09-05</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-5 col-xxl-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="header-title-text">Data Folder & Files</h5>

                        <div class="data-list-box mt-3">
                            <div class="filebox">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('backend/assets/images/icons/10.png')}}" class="w-35 h-35" alt="">
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">React Data</h6>
                                        <p class="text-secondary mb-0">18 Files</p>
                                    </div>
                                    <p class="text-secondary f-w-500">32GB</p>
                                </div>
                            </div>
                            <div class="filebox">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('backend/assets/images/icons/02.png')}}" class="w-35 h-35" alt="">
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">React Data</h6>
                                        <p class="text-secondary mb-0">18 Files</p>
                                    </div>
                                    <p class="text-secondary f-w-500">32GB</p>
                                </div>
                            </div>
                            <div>
                                <a href="{{route('file_manager')}}" target="_blank" role="button" class="btn btn-primary b-r-15 w-100">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-dark milestones-card">
                    <div class="card-body">
                        <div class="milestones-image">
                            <img src="{{asset('backend/assets/images/dashboard/project/04.png')}}" alt="">
                        </div>
                        <div class="text-center">
                            <h4 class="text-white">There are no <span class="text-primary">milestones</span> for today</h4>
                            <p class="text-light mb-0">You can create milestones.</p>
                            <a href="{{route('pricing')}}" target="_blank" class="btn btn-primary b-r-24 mt-3"><i class="ph ph-plus me-2"></i>Create Milestones</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- data table-->
    <script src="{{asset('backend/assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>

    <!-- apexcharts js-->
    <script src="{{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <!-- sortable js  -->
    <script src="{{asset('backend/assets/vendor/sortable/Sortable.min.js')}}"></script>

    <!-- Project js-->
    <script src="{{asset('backend/assets/js/project_dashboard.js')}}"></script>

@endsection
