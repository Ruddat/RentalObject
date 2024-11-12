@extends('layout.master')
@section('title', 'Email')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Email</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Email</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <!-- Email start -->
        <div class="row position-relative">
            <div class="col-lg-3">
                <div class="mailbox">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                        data-bs-target="#emailBox">Compose</button>

                                <div class="close-togglebtn">
                                    <a class="ms-2 close-toggle" role="button"><i class="ti ti-align-justified fs-5"></i></a>
                                </div>
                            </div>

                            <div class="horizontal-tab-wrapper">
                                <ul class="email-list mt-3 tabs">
                                    <li class="tab-link active" data-tab="1">
                                        <i class="ti ti-mail fs-5 pe-2"></i> <span class="flex-grow-1">Inbox</span> 10+
                                    </li>
                                    <li class="tab-link" data-tab="2"><i class="ti ti-send fs-5 pe-2"></i><span
                                            class="flex-grow-1">Sent</span></li>
                                    <li class="tab-link" data-tab="3"><i class="ti ti-file fs-5 pe-2"></i><span
                                            class="flex-grow-1">Draft</span> </li>
                                    <li class="tab-link" data-tab="4"><i class="ti ti-star fs-5 pe-2"></i><span
                                            class="flex-grow-1">
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
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="d-lg-none">
                                <a class="me-3 toggle-btn" role="button"><i class="ti ti-align-justified"></i></a>
                            </div>
                            <div class="flex-grow-1">
                                <div class="input-group b-r-search">
                                    <span class="input-group-text bg-primary border-0 "><i class="ti ti-search"></i></span>
                                    <input class="form-control" type="text" placeholder="Search...">
                                </div>
                            </div>
                            <div>
                                <div class="btn-group dropdown-icon-none">
                                    <a class="icon-btn dropdown-toggle p-2" role="button" data-bs-toggle="dropdown"
                                       data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-album"></i> Primary </a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-tag"></i> Promotions </a></li>
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-users"></i> Social </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="content-wrapper mt-3">
                            <div id="tab-1" class="tabs-content active">
                                <div class="mail-table">
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti ti-star text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-primary position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Gene Hart</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">This is the content of
                                    the email. It may contain anything the user....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">sep 23</p>
                                            <span class="badge text-light-success">Important</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox21" value="option1">
                                        <span class="ms-2 me-2">
                             <i class="ti text-warning star-icon fs-5 ti-star-filled"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-secondary position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/15.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Neil Fisher</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">It enables users to
                                    easily send and receive documents, images, links and ....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">Oct 23</p>
                                            <span class="badge text-light-primary">Company</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox22" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti ti-star text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-dark position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/13.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Simon Young</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">Companies can use email
                                    to convey information to a large number of ....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">Dec 22</p>
                                            <span class="badge text-light-danger">Social</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox23" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti text-warning star-icon fs-5 ti-star-filled"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-primary position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Kylie Wright</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">The domain of Gmail is
                                    xyz@gmail.com where ....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">sep 23</p>
                                            <span class="badge text-light-primary">Company</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox24" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti ti-star text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-danger position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Diana White</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">System Software is
                                    closer to the computer system.....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">sep 23</p>
                                            <span class="badge text-light-success">Important</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox25" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti ti-star text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-warning position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">James Lewis</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">An important feature of
                                    application software is it performs more....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">Nov 16</p>
                                            <span class="badge text-light-info">Private</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox26" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti ti-star text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-primary position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Gene Raynor</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">The application software
                                    is easy to design and understand.....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">Oct 6</p>
                                            <span class="badge text-light-info">Private</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tabs-content">
                                <div class="mail-table">
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                        <span class="ms-2 me-2">
                               <i class="ti ti-star text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-primary position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/15.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Neil Fisher</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">Whether you're preparing
                                    for your first job interview or aiming to upskill....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">Oct 23</p>
                                            <span class="badge text-light-primary">Company</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti ti-star text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-primary position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">James Lewis</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">A message or messages
                                    sent or received by such a system.....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">Nov 16</p>
                                            <span class="badge text-light-info">Private</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti ti-star text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-primary position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Neil Fisher</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">E-mail has become one of
                                    the most widely used aspects of the Internet, ....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">Oct 23</p>
                                            <span class="badge text-light-primary">Company</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tabs-content">
                                <div class="mail-table">
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti ti-star text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-danger position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Kylie Wright</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">One of the great things
                                    about it is that it’s fast, cost-effective, and convenient....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">sep 23</p>
                                            <span class="badge text-light-primary">Company</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti ti-star text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-dark position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Diana White</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">Email messages are sent
                                    from software programs and web browsers, collectively as email....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">Oct 23</p>
                                            <span class="badge text-light-success">Important</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti ti-star-filled text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-secondary position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Gene Raynor</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">The sender’s mail
                                    server, also called a Agent (MTA), initiates a Simple....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">Oct 6</p>
                                            <span class="badge text-light-info">Private</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti ti-star text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-warning position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Gene Hart</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">The SMTP “envelope” is
                                    the data communicated between servers during the email delivery
                                    process...</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">sep 23</p>
                                            <span class="badge text-light-success">Important</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-4" class="tabs-content">
                                <div class="mail-table">
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti ti-star-filled text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-primary position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Kylie Wright</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">The domain of Gmail is
                                    xyz@gmail.com where ....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">sep 23</p>
                                            <span class="badge text-light-primary">Company</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti ti-star-filled text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-dark position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/15.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Neil Fisher</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">It enables users to
                                    easily send and receive documents, images, links and ....</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">Oct 23</p>
                                            <span class="badge text-light-primary">Company</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="option1">
                                        <span class="ms-2 me-2">
                              <i class="ti ti-star-filled text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-secondary position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Gene Raynor</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">Computer-based messaging
                                    between users of the same system became possible after...</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">Oct 6</p>
                                            <span class="badge text-light-info">Private</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-5" class="tabs-content">
                                <div class="mail-table d-flex align-items-center justify-content-center">
                                    <div class="spam-box text-center">
                                        <img src="{{asset('../assets/images/icons/spam..png')}}" alt="">
                                        <h5>No spam here</h5>
                                        <p>The MUA formats the message in email format and uses the submission a profile of the
                                            Simple Mail Transfer Protocol (SMTP), to send the message !</p>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-6" class="tabs-content">
                                <div class="mail-table">
                                    <div class="mail-box">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="option1">
                                        <span class="ms-2 me-2">
                               <i class="ti ti-star text-warning star-icon fs-5"></i>
                            </span>
                                        <div class="flex-grow-1 position-relative">
                                            <div
                                                class="mail-img h-35 w-35 b-r-50 overflow-hidden text-bg-primary position-absolute mt-1">
                                                <img src="{{asset('../assets/images/avtar/13.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="mg-s-45">
                                                <h6 class="mb-0 f-w-600">Simon Young</h6>
                                                <a href="{{route('read_email')}}"><span class="f-s-13 text-secondary">Internet email messages
                                    consist of two sections, "header" and "body". These are known as..</span></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-center">Oct 22</p>
                                            <span class="badge text-light-danger">Social</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-archive"></i> Archive </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-mail-opened"></i> Read Mali </a>
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
            </div>
        </div>
        <!-- Email end -->
    </div>

    <div class="modal fade" id="emailBox" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="emailBoxLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="emailBoxLabel">New Message</h1>
                </div>
                <div class="modal-body">
                    <form class="app-form">
                        <div class="mb-3">
                            <label class="form-label">To :</label>
                            <input type="email" class="form-control" id="userName" placeholder="@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Subject :</label>
                            <input type="text" class="form-control" id="subject"  placeholder="type subject...">
                        </div>
                        <div class="status mb-3">
                            <label class="form-label">status :</label>
                            <select class="form-select" id="status" aria-label="Default select example">
                                <option value="">Status</option>
                                <option value="Important">Important</option>
                                <option value="Company">Company</option>
                                <option value="Social">Social</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
                        </div>
                        <div>
                            <label class="form-label">Attached File</label>
                            <input type="file" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="addEmail">Send</button>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- js -->
<script src="{{asset('assets/js/email.js')}}"></script>
@endsection


