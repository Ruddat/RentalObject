@extends('layout.master')
@section('title', 'Chat')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Chat</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Chat</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <!-- Chat start -->
        <div class="row position-relative chat-container-box">
            <div class="col-lg-4 col-xxl-3  box-col-5">
                <div class="chat-div">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                        <span class="chatdp h-45 w-45 d-flex-center b-r-50 position-relative bg-danger">
                          <img src="{{asset('../assets/images/avtar/09.png')}}" alt="" class="img-fluid b-r-50">
                          <span
                              class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                        </span>
                                <div class="flex-grow-1 ps-2">
                                    <div class="fs-6"> Ninfa Monaldo</div>
                                    <div class="text-muted f-s-12">Web Developer</div>
                                </div>
                                <div>
                                    <div class="btn-group dropdown-icon-none">
                                        <a role="button"  data-bs-placement="top"  data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                            <i class="ti ti-settings fs-5"></i>
                                        </a>
                                        <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-brand-hipchat"></i> <span
                                                        class="f-s-13">Chat Settings</span></a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-phone-call"></i> <span
                                                        class="f-s-13">Contact Settings</span></a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="ti ti-settings"></i> <span
                                                        class="f-s-13">Settings</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="close-togglebtn">
                                    <a class="ms-2 close-toggle" role="button"><i class="ti ti-align-justified fs-5"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chat-tab-wrapper">
                                <ul class="tabs chat-tabs">
                                    <li class="tab-link active" data-tab="1"><i class="ph-fill  ph-chat-circle-text f-s-18 me-2"></i>Chat</li>
                                    <li class="tab-link" data-tab="2"><i class="ph-fill  ph-wechat-logo f-s-18 me-2"></i>Updates</li>
                                    <li class="tab-link" data-tab="3"><i class="ph-fill  ph-phone-call f-s-18 me-2"></i>Contact</li>
                                </ul>
                            </div>
                            <div class="content-wrapper">

                                <!-- tab 1 -->

                                <div id="tab-1" class="tabs-content active">
                                    <div class="tab-wrapper">
                                        <div class="mt-3">
                                            <ul class="nav nav-tabs app-tabs-primary tab-light-primary chat-status-tab border-0 justify-content-between mb-0 pb-0" id="Basic"
                                                role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="private-tab" data-bs-toggle="tab"
                                                            data-bs-target="#private-tab-pane" type="button" role="tab"
                                                            aria-controls="private-tab-pane" aria-selected="false"
                                                            tabindex="-1"><i class="ph-fill  ph-lock-key-open me-2"></i>Private</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="groups-tab" data-bs-toggle="tab"
                                                            data-bs-target="#groups-tab-pane" type="button" role="tab"
                                                            aria-controls="groups-tab-pane" aria-selected="false" tabindex="-1"><i class="ph-fill  ph-users-three me-2"></i>Group </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="BasicContent">
                                                <!-- Private Chat -->
                                                <div class="tab-pane fade show active" id="private-tab-pane" role="tabpanel"
                                                     aria-labelledby="private-tab" tabindex="0">
                                                    <div class="chat-contact">
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                        <span class="h-45 w-45 d-flex-center b-r-50 position-relative bg-primary">
                                          <img src="{{asset('../assets/images/avtar/1.png')}}" alt="" class="img-fluid b-r-50">
                                          <span
                                              class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                        </span>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-50">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Bette Hagenes</p>
                                                                <p class="text-secondary mb-0 f-s-12 mb-0 chat-message"><i class="ti ti-checks"></i> Hi! Bette How are you?
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">2:30AM</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                        <span class="h-45 w-45 d-flex-center b-r-50 position-relative bg-dark">
                                          <img src="{{asset('../assets/images/avtar/2.png')}}" alt="" class="img-fluid b-r-50">
                                          <span
                                              class="position-absolute top-0 end-0 p-1 bg-secondary border border-light rounded-circle"></span>
                                        </span>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-50">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Mark Walsh</p>
                                                                <p class="text-secondary mb-0 f-s-12 mb-0 chat-message"><i class="ti ti-checks"></i> Hi! Work is done
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">2:30AM</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                        <span class="h-45 w-45 d-flex-center b-r-50 position-relative bg-success">
                                          <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid b-r-50">
                                          <span
                                              class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                        </span>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-50">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Jerry Ladies</p>
                                                                <p class="text-secondary mb-0 f-s-12 mb-0 chat-message"><i class="ti ti-checks"></i> I'm waiting
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">2:30AM</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                        <span class="h-45 w-45 d-flex-center b-r-50 position-relative bg-danger">
                                          <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid b-r-50">
                                          <span
                                              class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                        </span>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-50">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Jessica</p>
                                                                <p class="text-secondary mb-0 f-s-12 mb-0 chat-message"><i class="ti ti-checks"></i> Awesome! 🤩 I like it
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">2:30AM</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                        <span class="h-45 w-45 d-flex-center b-r-50 position-relative bg-warning">
                                          <img src="{{asset('../assets/images/avtar/5.png')}}" alt="" class="img-fluid b-r-50">
                                          <span
                                              class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                        </span>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-50">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Sue Flay</p>
                                                                <p class="text-secondary mb-0 f-s-12 mb-0 chat-message"><i class="ti ti-checks"></i> oh, Really !!
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">1:00PM</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                        <span class="h-45 w-45 d-flex-center b-r-50 position-relative bg-dark">
                                          <img src="{{asset('../assets/images/avtar/6.png')}}" alt="" class="img-fluid b-r-50">
                                          <span
                                              class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                        </span>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-50">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Isla White</p>
                                                                <p class="text-secondary mb-0 f-s-12 mb-0 chat-message"><i class="ti ti-checks"></i> Bye! see you soon
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">12:33PM</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                        <span class="h-45 w-45 d-flex-center b-r-50 position-relative bg-secondary">
                                          <img src="{{asset('../assets/images/avtar/07.png')}}" alt="" class="img-fluid b-r-50">
                                          <span
                                              class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                        </span>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-50">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Anita Break</p>
                                                                <p class="text-secondary mb-0 f-s-12 mb-0 chat-message"><i class="ti ti-checks"></i> Bye!
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">1:52AM</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                        <span class="h-45 w-45 d-flex-center b-r-50 position-relative bg-primary">
                                          <img src="{{asset('../assets/images/avtar/08.png')}}" alt="" class="img-fluid b-r-50">
                                          <span
                                              class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                        </span>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-50">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Lou Pole</p>
                                                                <p class="text-secondary mb-0 f-s-12 mb-0 chat-message"><i class="ti ti-checks"></i> Heyy !
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">2 days</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                        <span class="h-45 w-45 d-flex-center b-r-50 position-relative bg-info">
                                          <img src="{{asset('../assets/images/avtar/09.png')}}" alt="" class="img-fluid b-r-50">
                                          <span
                                              class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                        </span>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-50">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Noah Davis</p>
                                                                <p class="text-secondary mb-0 f-s-12 mb-0 chat-message"><i class="ti ti-checks"></i> Have a great day
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">8:00 PM</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                        <span class="h-45 w-45 d-flex-center b-r-50 position-relative bg-success">
                                          <img src="{{asset('../assets/images/avtar/10.png')}}" alt="" class="img-fluid b-r-50">
                                          <span
                                              class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                        </span>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-50">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Pete Sakes</p>
                                                                <p class="text-secondary mb-0 f-s-12 mb-0 chat-message"><i class="ti ti-checks"></i> Bye! see you soon
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">12:30 PM</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                        <span class="h-45 w-45 d-flex-center b-r-50 position-relative bg-danger">
                                          <img src="{{asset('../assets/images/avtar/11.png')}}" alt="" class="img-fluid b-r-50">
                                          <span
                                              class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                        </span>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-50">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Fleta Walsh</p>
                                                                <p class="text-muted mb-0 text-success f-s-12 chat-message">Typing....</p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">Now</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Group Chat -->
                                                <div class="tab-pane fade" id="groups-tab-pane" role="tabpanel"
                                                     aria-labelledby="groups-tab" tabindex="0">
                                                    <div class="chat-contact chat-group-list">
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                                                <ul class="avatar-group">
                                                                    <li class="text-bg-warning h-45 w-45 d-flex-center b-r-50">
                                                                        A
                                                                    </li>
                                                                    <li class="text-bg-secondary h-35 w-35 d-flex-center b-r-50"
                                                                        data-bs-toggle="tooltip" data-bs-title="2 More">
                                                                        2+
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-75">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Office Group</p>
                                                                <p class="text-secondary f-s-12 chat-message">Hi! Bette How are you?</p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">2:30AM</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                                                <ul class="avatar-group">
                                                                    <li class="h-45 w-45 d-flex-center overflow-hidden b-r-50 bg-primary">
                                                                        <img src="{{asset('../assets/images/avtar/16.png')}} " alt="" class="img-fluid">
                                                                    </li>
                                                                    <li class="text-bg-secondary h-35 w-35 d-flex-center b-r-50"
                                                                        data-bs-toggle="tooltip" data-bs-title="2 More">
                                                                        4+
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-75">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Markting Group</p>
                                                                <p class="text-secondary f-s-12 chat-message">Hi! Work is done</p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">7:24AM</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                                                <ul class="avatar-group">
                                                                    <li class="h-45 w-45 d-flex-center overflow-hidden b-r-50 bg-info">
                                                                        <img src="{{asset('../assets/images/avtar/15.png')}} " alt="" class="img-fluid">
                                                                    </li>
                                                                    <li class="text-bg-secondary h-35 w-35 d-flex-center b-r-50"
                                                                        data-bs-toggle="tooltip" data-bs-title="2 More">
                                                                        10+
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-75">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Developer Group</p>
                                                                <p class="text-secondary f-s-12 chat-message"> I'm waiting </p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">2min</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                                                <ul class="avatar-group">
                                                                    <li class="text-bg-danger h-45 w-45 d-flex-center overflow-hidden b-r-50">
                                                                        AD
                                                                    </li>
                                                                    <li class="text-bg-secondary h-35 w-35 d-flex-center b-r-50"
                                                                        data-bs-toggle="tooltip" data-bs-title="2 More">
                                                                        2+
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-75">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Designer Group</p>
                                                                <p class="text-secondary f-s-12 chat-message">Awesome! 🤩 I like it </p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">2day</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                                                <ul class="avatar-group">
                                                                    <li class="h-45 w-45 d-flex-center overflow-hidden b-r-50 bg-dark">
                                                                        <img src="{{asset('../assets/images/avtar/14.png')}} " alt="" class="img-fluid">
                                                                    </li>
                                                                    <li class="text-bg-secondary h-35 w-35 d-flex-center b-r-50"
                                                                        data-bs-toggle="tooltip" data-bs-title="2 More">
                                                                        15+
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-75">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">Friend's Group</p>
                                                                <p class="text-secondary f-s-12 chat-message">Bye! see you soon </p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">12:30PM</p>
                                                            </div>
                                                        </div>
                                                        <div class="chat-contactbox">
                                                            <div class="position-absolute">
                                                                <ul class="avatar-group">
                                                                    <li class="text-bg-danger h-45 w-45 d-flex-center overflow-hidden b-r-50">
                                                                        <img src="{{asset('../assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                                                    </li>
                                                                    <li class="text-bg-secondary h-35 w-35 d-flex-center b-r-50"
                                                                        data-bs-toggle="tooltip" data-bs-title="2 More">
                                                                        25+
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="flex-grow-1 text-start mg-s-75">
                                                                <p class="mb-0 f-w-500 text-dark txt-ellipsis-1">client Group</p>
                                                                <p class="text-muted text-success f-s-12 chat-message">Typing...</p>
                                                            </div>
                                                            <div>
                                                                <p class="f-s-12 chat-time">Now</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="float-end">
                                                    <div class="btn-group dropup  dropdown-icon-none">
                                                        <button class="btn btn-primary icon-btn b-r-22 dropdown-toggle active" type="button"
                                                                data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                            <i class="ti ti-plus"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-brand-hipchat"></i> <span
                                                                        class="f-s-13">New Chat</span></a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-phone-call"></i> <span
                                                                        class="f-s-13">New Contact</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 2 -->

                                <div id="tab-2" class="tabs-content">
                                    <div class="chat-contact tabcontent">
                                        <div class="updates-box">
                                            <div class="b-2-success b-r-50 p-1">
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-primary">
                                  <img src="{{asset('../assets/images/avtar/16.png')}}" alt="" class="img-fluid b-r-50">
                                </span>
                                            </div>
                                            <div class="flex-grow-1 text-start ps-2">
                                                <span>Bette Hagenes</span>
                                                <p class="f-s-12 text-secondary mb-0">2:30AM</p>
                                            </div>
                                        </div>
                                        <div class="updates-box">
                                            <div class="b-2-secondary b-r-50 p-1">
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-info">
                                  <img src="{{asset('../assets/images/avtar/6.png')}}" alt="" class="img-fluid b-r-50">
                                </span>
                                            </div>
                                            <div class="flex-grow-1 text-start ps-2">
                                                <span>Jessica</span>
                                                <p class="f-s-12 text-secondary mb-0">2min</p>
                                            </div>
                                        </div>
                                        <div class="updates-box">
                                            <div class="b-2-secondary b-r-50 p-1">
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-dark">
                                  <img src="{{asset('../assets/images/avtar/5.png')}}" alt="" class="img-fluid b-r-50">
                                </span>
                                            </div>
                                            <div class="flex-grow-1 text-start ps-2">
                                                <span>Jerry Ladies</span>
                                                <p class="f-s-12 text-secondary mb-0">7:00AM</p>
                                            </div>
                                        </div>
                                        <div class="updates-box">
                                            <div class="b-2-success b-r-50 p-1">
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-warning">
                                  <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid b-r-50">
                                </span>
                                            </div>
                                            <div class="flex-grow-1 text-start ps-2">
                                                <span>Emery McKenzie</span>
                                                <p class="f-s-12 text-secondary mb-0">5:26PM</p>
                                            </div>
                                        </div>
                                        <div class="updates-box">
                                            <div class="b-2-success b-r-50 p-1">
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-primary">
                                  <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid b-r-50">
                                </span>
                                            </div>
                                            <div class="flex-grow-1 text-start ps-2">
                                                <span>Mark Walsh</span>
                                                <p class="f-s-12 text-secondary mb-0">1:26PM</p>
                                            </div>
                                        </div>
                                        <div class="updates-box">
                                            <div class="b-2-secondary b-r-50 p-1">
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-dark">
                                  <img src="{{asset('../assets/images/avtar/2.png')}}" alt="" class="img-fluid b-r-50">
                                </span>
                                            </div>
                                            <div class="flex-grow-1 text-start ps-2">
                                                <span>Noah Davis</span>
                                                <p class="f-s-12 text-secondary mb-0">6:22PM</p>
                                            </div>
                                        </div>
                                        <div class="updates-box">
                                            <div class="b-2-secondary b-r-50 p-1">
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-primary">
                                  <img src="{{asset('../assets/images/avtar/1.png')}}" alt="" class="img-fluid b-r-50">
                                </span>
                                            </div>
                                            <div class="flex-grow-1 text-start ps-2">
                                <span>
                                  Isla White</span>
                                                <p class="f-s-12 text-secondary mb-0">6:10PM</p>
                                            </div>
                                        </div>
                                        <div class="updates-box">
                                            <div class="b-2-secondary b-r-50 p-1">
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-secondary">
                                  <img src="{{asset('../assets/images/avtar/10.png')}}" alt="" class="img-fluid b-r-50">
                                </span>
                                            </div>
                                            <div class="flex-grow-1 text-start ps-2">
                                                <span>Fleta Walsh</span>
                                                <p class="f-s-12 text-secondary mb-0">5:26PM</p>
                                            </div>
                                        </div>
                                        <div class="updates-box">
                                            <div class="b-2-secondary b-r-50 p-1">
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-secondary">
                                  <img src="{{asset('../assets/images/avtar/11.png')}}" alt="" class="img-fluid b-r-50">
                                </span>
                                            </div>
                                            <div class="flex-grow-1 text-start ps-2">
                                                <span>Pete Sakes</span>
                                                <p class="f-s-12 text-secondary mb-0">3:26PM</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="float-end">
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn btn-primary icon-btn b-r-22 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-plus"></i>
                                            </button>
                                            <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-brand-hipchat"></i> <span
                                                            class="f-s-13">New Chat</span></a>
                                                </li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-phone-call"></i> <span
                                                            class="f-s-13">New Contact</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 3 -->

                                <div id="tab-3" class="tabs-content">
                                    <div class="chat-contact tabcontent chat-contact-list">
                                        <div class=" d-flex align-items-center py-3">
                                            <div>
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-info">
                                  <img src="{{asset('../assets/images/avtar/13.png')}}" alt="" class="img-fluid b-r-50">
                                  <span
                                      class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                </span>
                                            </div>
                                            <div class="flex-grow-1 ps-2">
                                                <p class="contact-name text-dark mb-0 f-w-500">Bette Hagenes</p>
                                                <p class="mb-0 text-secondary f-s-13">+978356479</p>
                                            </div>
                                            <div>
                                <span class="h-35 w-35 text-outline-success d-flex-center b-r-50">
                                  <i class="ti ti-phone-call"></i>
                                </span>
                                            </div>
                                            <div>
                                <span class="h-35 w-35 text-outline-primary d-flex-center b-r-50 ms-1">
                                  <i class="ti ti-video"></i>
                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-3">
                                            <div>
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-danger">
                                  <img src="{{asset('../assets/images/avtar/12.png')}}" alt="" class="img-fluid b-r-50">
                                  <span
                                      class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                </span>
                                            </div>
                                            <div class="flex-grow-1 ps-2">
                                                <p class="contact-name text-dark mb-0 f-w-500">Fleta Walsh</p>
                                                <p class="mb-0 text-secondary f-s-13">+988456479</p>
                                            </div>
                                            <div>
                                <span class="h-35 w-35 text-outline-success d-flex-center b-r-50">
                                  <i class="ti ti-phone-call"></i>
                                </span>
                                            </div>
                                            <div>
                                <span class="h-35 w-35 text-outline-primary d-flex-center b-r-50 ms-1">
                                  <i class="ti ti-video"></i>
                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-3">
                                            <div>
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-warning">
                                  <img src="{{asset('../assets/images/avtar/11.png')}}" alt="" class="img-fluid b-r-50">
                                  <span
                                      class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                </span>
                                            </div>
                                            <div class="flex-grow-1 ps-2">
                                                <p class="contact-name text-dark mb-0 f-w-500">Lenora Bogisich</p>
                                                <p class="mb-0 text-secondary f-s-13">+4583546479</p>
                                            </div>
                                            <div>
                                <span class="h-35 w-35 text-outline-success d-flex-center b-r-50">
                                  <i class="ti ti-phone-call"></i>
                                </span>
                                            </div>
                                            <div>
                                <span class="h-35 w-35 text-outline-primary d-flex-center b-r-50 ms-1">
                                  <i class="ti ti-video"></i>
                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-3">
                                            <div>
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-success">
                                  <img src="{{asset('../assets/images/avtar/10.png')}}" alt="" class="img-fluid b-r-50">
                                  <span
                                      class="position-absolute top-0 end-0 p-1 bg-secondary border border-light rounded-circle"></span>
                                </span>
                                            </div>
                                            <div class="flex-grow-1 ps-2">
                                                <p class="contact-name text-dark mb-0 f-w-500">Emery McKenzie</p>
                                                <p class="mb-0 text-secondary f-s-13">+378356479</p>
                                            </div>
                                            <div>
                                <span class="h-35 w-35 text-outline-success d-flex-center b-r-50">
                                  <i class="ti ti-phone-call"></i>
                                </span>
                                            </div>
                                            <div>
                                <span class="h-35 w-35 text-outline-primary d-flex-center b-r-50 ms-1">
                                  <i class="ti ti-video"></i>
                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-3">
                                            <div>
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-danger">
                                  <img src="{{asset('../assets/images/avtar/08.png')}}" alt="" class="img-fluid b-r-50">
                                  <span
                                      class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                </span>
                                            </div>
                                            <div class="flex-grow-1 ps-2">
                                                <p class="contact-name text-dark mb-0 f-w-500">Elmer</p>
                                                <p class="mb-0 text-secondary f-s-13">+678356270</p>
                                            </div>
                                            <div>
                                <span class="h-35 w-35 text-outline-success d-flex-center b-r-50">
                                  <i class="ti ti-phone-call"></i>
                                </span>
                                            </div>
                                            <div>
                                <span class="h-35 w-35 text-outline-primary d-flex-center b-r-50 ms-1">
                                  <i class="ti ti-video"></i>
                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-3">
                                            <div>
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-success">
                                  <img src="{{asset('../assets/images/avtar/09.png')}}" alt="" class="img-fluid b-r-50">
                                  <span
                                      class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                </span>
                                            </div>
                                            <div class="flex-grow-1 ps-2">
                                                <p class="contact-name text-dark mb-0 f-w-500">Mark Walsh</p>
                                                <p class="mb-0 text-secondary f-s-13">+780356479</p>
                                            </div>
                                            <div>
                                <span class="h-35 w-35 text-outline-success d-flex-center b-r-50">
                                  <i class="ti ti-phone-call"></i>
                                </span>
                                            </div>
                                            <div>
                                <span class="h-35 w-35 text-outline-primary d-flex-center b-r-50 ms-1">
                                  <i class="ti ti-video"></i>
                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-3">
                                            <div>
                                <span class="h-40 w-40 d-flex-center b-r-50 position-relative bg-warning">
                                  <img src="{{asset('../assets/images/avtar/07.png')}}" alt="" class="img-fluid b-r-50">
                                  <span
                                      class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                </span>
                                            </div>
                                            <div class="flex-grow-1 ps-2">
                                                <p class="contact-name text-dark mb-0 f-w-500">Sue Flay</p>
                                                <p class="mb-0 text-secondary f-s-13">+780356479</p>
                                            </div>
                                            <div>
                                <span class="h-35 w-35 text-outline-success d-flex-center b-r-50">
                                  <i class="ti ti-phone-call"></i>
                                </span>
                                            </div>
                                            <div>
                                <span class="h-35 w-35 text-outline-primary d-flex-center b-r-50 ms-1">
                                  <i class="ti ti-video"></i>
                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="float-end">
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn btn-primary icon-btn b-r-22 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-plus"></i>
                                            </button>
                                            <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-brand-hipchat"></i> <span
                                                            class="f-s-13">New Chat</span></a>
                                                </li>
                                                <li><a class="dropdown-item" href="#"><i class="ti ti-phone-call"></i> <span
                                                            class="f-s-13">New Contact</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xxl-9 box-col-7">
                <div class="card chat-container-content-box">
                    <div class="card-header">
                        <div class="chat-header d-flex align-items-center">
                            <div class="d-lg-none">
                                <a class="me-3 toggle-btn" role="button"><i class="ti ti-align-justified"></i></a>
                            </div>
                            <a href="{{route('profile')}}">
                        <span class="profileimg h-45 w-45 d-flex-center b-r-50 position-relative bg-light">
                          <img src="{{asset('../assets/images/avtar/14.png')}}" alt="" class="img-fluid b-r-50">
                          <span
                              class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                        </span>
                            </a>
                            <div class="flex-grow-1 ps-2 pe-2">
                                <div class="fs-6"> Jerry Ladies</div>
                                <div class="text-muted f-s-12 text-success">Online</div>
                            </div>
                            <button type="button" class="btn btn-success h-45 w-45 icon-btn b-r-22 me-sm-2"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="ti ti-phone-call f-s-20"></i>
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-body p-0">
                                        <div class="call">
                                            <div class="call-div">
                                                <img src="{{asset('../assets/images/profile-app/32.jpg')}}" class="w-100" alt="">
                                                <div class="call-caption">
                                                    <h2 class="text-white">Jerry Ladies</h2>
                                                    <div class="d-flex justify-content-center">
                                    <span
                                        class="bg-success h-40 w-40 d-flex-center b-r-50 animate__animated animate__1 animate__shakeY animate__infinite call-btn pointer-events-auto" data-bs-dismiss="modal">
                                      <i class="ti ti-phone-call "></i>
                                    </span>
                                                        <span class="bg-danger h-40 w-40 d-flex-center b-r-50 ms-4 call-btn pointer-events-auto" data-bs-dismiss="modal">
                                      <i class="ti ti-phone"></i>
                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary h-45 w-45 icon-btn b-r-22 me-sm-2"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                <i class="ti ti-video f-s-20"></i>
                            </button>
                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-body p-0">
                                        <div class="call">
                                            <div class="call-div pointer-events-auto">
                                                <img src="{{asset('../assets/images/profile-app/25.jpg')}}" class="w-100" alt="">

                                                <div class="call-caption">
                                                    <div class="d-flex justify-content-center align-items-center">

                                    <span class="bg-white h-35 w-35 d-flex-center b-r-50 ms-4">
                                      <i class="ti ti-microphone text-dark"></i>
                                    </span>
                                                        <span data-bs-dismiss="modal"
                                                              class="bg-danger h-45 w-45 d-flex-center b-r-50 ms-4 animate__pulse animate__animated animate__infinite animate__faster call-btn pointer-events-auto">
                                      <i class="ti ti-phone"></i>
                                    </span>
                                                        <span class="bg-white h-35 w-35 d-flex-center b-r-50 ms-4">
                                      <i class="ti ti-phone-pause text-dark"></i>
                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="video-div">
                                                <img src="{{asset('../assets/images/profile-app/31.jpg')}}" class="w-100 rounded" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-secondary h-45 w-45 icon-btn b-r-22 me-sm-2"
                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                    <i class="ti ti-settings f-s-20"></i>
                                </button>
                                <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-brand-hipchat"></i> <span
                                                class="f-s-13">Chat Settings</span></a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-phone-call"></i> <span
                                                class="f-s-13">Contact Settings</span></a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="ti ti-settings"></i> <span
                                                class="f-s-13">Settings</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body chat-body">
                        <div class="chat-container ">
                            <div class="text-center">
                                <span class="badge text-light-secondary">Today</span>
                            </div>
                            <div class="position-relative">
                                <div class="chatdp h-45 w-45 b-r-50 position-absolute start-0 bg-light">
                                    <img src="{{asset('../assets/images/avtar/14.png')}}" alt="" class="img-fluid b-r-50">
                                </div>
                                <div class="chat-box">
                                    <div>
                                        <p class="chat-text">Hi! Ninfa Monaldo can we go over the project details for the upcoming presentation?</p>
                                        <p class="text-muted"><i class="ti ti-checks text-primary"></i> 2:00PM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative">
                                <div class="chat-box-right">
                                    <div>
                                        <p class="chat-text">Sure, Jerry.</p>
                                        <p class="chat-text">I was just reviewing our notes.</p>
                                        <p class="chat-text">What do you want to start with?</p>
                                        <p class="text-muted"><i class="ti ti-checks text-primary"></i> 2:02PM</p>
                                    </div>
                                </div>
                                <div class="chatdp h-45 w-45 b-r-50 position-absolute end-0 top-0 bg-danger">
                                    <img src="{{asset('../assets/images/avtar/09.png')}}" alt="" class="img-fluid b-r-50">
                                </div>
                            </div>
                            <div class="position-relative">
                                <div class="chatdp h-45 w-45 b-r-50 position-absolute start-0 bg-light">
                                    <img src="{{asset('../assets/images/avtar/14.png')}}" alt="" class="img-fluid b-r-50">
                                </div>
                                <div class="chat-box">
                                    <div>
                                        <p class="chat-text">  Let’s begin with the project timeline.</p>
                                        <p class="chat-text">  Are we on track to meet the deadlines?</p>
                                        <p class="text-muted"><i class="ti ti-checks text-primary"></i> 2:03PM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative">
                                <div class="chat-box-right">
                                    <div>
                                        <p class="chat-text">Yes, mostly.</p>
                                        <p class="chat-text">We completed the initial research phase and the design draft. We're currently in the development phase, which should be done by the end of the week.</p>
                                        <p class="text-muted"><i class="ti ti-checks text-primary"></i> 2:02PM</p>
                                    </div>
                                </div>
                                <div class="chatdp h-45 w-45 b-r-50 position-absolute end-0 top-0 bg-danger">
                                    <img src="{{asset('../assets/images/avtar/09.png')}}" alt="" class="img-fluid b-r-50">
                                </div>
                            </div>
                            <div class="position-relative">
                        <span class="chatdp h-45 w-45 position-absolute start-0 b-r-50 bg-light">
                          <img src="{{asset('../assets/images/avtar/14.png')}}" alt="" class="img-fluid b-r-50">
                        </span>
                                <div class="chat-box">
                                    <div>
                                        <p class="chat-text"> Great to hear! </p>
                                        <p class="chat-text"> How about the testing phase? When do we plan to start that?</p>
                                        <p class="text-muted"><i class="ti ti-checks text-primary"></i> 2:06PM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative">
                                <div class="chat-box-right">
                                    <div>
                                        <p class="chat-text">We have it scheduled to start next Monday. That gives us a full week to iron out any issues before the final presentation.</p>
                                        <p class="text-muted"><i class="ti ti-checks text-primary"></i> 2:08M</p>
                                    </div>
                                </div>
                                <span class="chatdp h-45 w-45 b-r-50 position-absolute top-0 end-0 bg-danger">
                          <img src="{{asset('../assets/images/avtar/09.png')}}" alt="" class="img-fluid b-r-50">
                        </span>
                            </div>
                            <div class="position-relative">
                        <span class="chatdp h-45 w-45 b-r-50 position-absolute start-0 bg-light">
                          <img src="{{asset('../assets/images/avtar/14.png')}}" alt="" class="img-fluid b-r-50">
                        </span>
                                <div class="chat-box">
                                    <div>
                                        <p class="chat-text"> Perfect. Have we assigned specific tasks for the testing phase?</p>
                                        <p class="text-muted"><i class="ti ti-checks text-primary"></i> 2:10PM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative">
                                <div class="chat-box-right">
                                    <div>
                                        <p class="chat-text">Yes, I've assigned the initial testing to the QA team. I've also scheduled a meeting with them to go over the testing protocols.</p>
                                        <p class="text-muted"><i class="ti ti-checks text-primary"></i> 2:08M</p>
                                    </div>
                                </div>
                                <span class="chatdp h-45 w-45 b-r-50 position-absolute top-0 end-0 bg-danger">
                          <img src="{{asset('../assets/images/avtar/09.png')}}" alt="" class="img-fluid b-r-50">
                        </span>
                            </div>
                            <div class="position-relative">
                        <span class="chatdp h-45 w-45 b-r-50 position-absolute start-0 bg-light">
                          <img src="{{asset('../assets/images/avtar/14.png')}}" alt="" class="img-fluid b-r-50">
                        </span>
                                <div class="chat-box">
                                    <div>
                                        <p class="chat-text">Typing....</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="chat-footer d-flex">
                            <div class="app-form flex-grow-1">
                                <div class="input-group">
                          <span class="input-group-text bg-secondary ms-2 me-2 b-r-10 ">
                            <a class="emoji-btn d-flex-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Emoji" role="button">
                              <i class="ti ti-mood-smile f-s-18"></i>
                            </a>
                          </span>
                                    <input type="text" class="form-control b-r-6" placeholder="Type a message"
                                           aria-label="Recipient's username">
                                    <button class="btn btn-sm btn-primary ms-2 me-2 b-r-4" type="button"><i class="ti ti-send"></i> <span>Send</span> </button>
                                </div>
                            </div>
                            <div class="d-none d-sm-block">
                                <a class="bg-secondary h-50 w-50 d-flex-center b-r-10 ms-1" role="button"
                                   data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Microphone">
                                    <i class="ti ti-microphone f-s-18"></i>
                                </a>
                            </div>
                            <div class="d-none d-sm-block">
                                <a class="bg-secondary h-50 w-50 d-flex-center b-r-10 ms-1" role="button"
                                   data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Camera">
                                    <i class="ti ti-camera-plus f-s-18"></i>
                                </a>
                            </div>
                            <div class="d-none d-sm-block">
                                <a class="bg-secondary h-50 w-50 d-flex-center b-r-10 ms-1" role="button"
                                   data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Paperclip">
                                    <i class="ti ti-paperclip f-s-18"></i>
                                </a>
                            </div>
                            <div>
                                <div class="btn-group dropdown-icon-none d-sm-none">
                                    <a class="h-35 w-35 d-flex-center ms-1" role="button" data-bs-toggle="dropdown"
                                       data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-microphone"></i> <span
                                                    class="f-s-13">Microphone</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"> <i class="ti ti-camera-plus"></i> <span
                                                    class="f-s-13">camera</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-paperclip"></i> <span
                                                    class="f-s-13">paperclip</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Chat end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<script src="{{asset('assets/js/chat.js')}}"></script>
@endsection
