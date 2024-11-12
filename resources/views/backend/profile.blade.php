
@extends('backend.layout.master')
@section('title', 'Profile')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/fontawesome/css/all.css')}}">

    <!-- glight css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/glightbox/glightbox.min.css')}}">

    <!-- filepond css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/filepond/filepond.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/filepond/image-preview.min.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/slick/slick-theme.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Profile</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="f-s-14 f-w-500">Profile</a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <div class="row">
            <div class="col-lg-3">
                <!-- profile tabs -->
                <div class="card" >
                    <div class="card-body">
                        <div class="tab-wrapper">
                            <ul class="profile-app-tabs ">
                                <li class="tab-link fw-medium f-s-16 f-w-600 active" data-tab="1"><i class="ti ti-user fw-bold"></i>
                                    Profile</li>
                                <li class="tab-link fw-medium f-s-16 f-w-600" data-tab="2"><i
                                        class="ti ti-timeline fw-bold"></i>
                                    Activities
                                    <span class="badge rounded-pill bg-warning badge-notification">
                            10+
                            <span class="visually-hidden">unread messages</span>
                          </span>
                                </li>
                                <li class="tab-link fw-medium f-s-16 f-w-600" data-tab="3"><i
                                        class="ti ti-clipboard-data fw-bold"></i> Projects</li>
                                <li class="tab-link fw-medium f-s-16 f-w-600" data-tab="4"><i
                                        class="ti ti-photo-heart fw-bold"></i> Post</li>
                                <li class="tab-link fw-medium f-s-16  f-w-600" data-tab="5"><i class="ti ti-users fw-bold"></i>
                                    Friends</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="card d-lg-block d-none">
                    <div class="card-header">
                        <h5>Friends</h5>
                    </div>
                    <div class="card-body profile-friends">
                        <div class="d-flex align-items-center">
                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden bg-dark">
                                <img src="{{asset('../backend/assets/images/avtar/2.png')}}" alt="image" class="img-fluid">
                            </div>
                            <div class="flex-grow-1 ps-2">
                                <div class="fw-medium"> Bette Hagenes</div>
                                <div class="text-muted f-s-12">Wed Developer</div>
                            </div>
                            <a href="#" class="btn btn-light-secondary icon-btn b-r-22"> <i class="ti ti-user-check"></i> </a>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden bg-primary">
                                <img src="{{asset('../backend/assets/images/avtar/10.png')}}" alt="image" class="img-fluid">
                            </div>
                            <div class="flex-grow-1 ps-2">
                                <div class="fw-medium"> Fleta Walsh</div>
                                <div class="text-muted f-s-12">Wed Designer</div>
                            </div>
                            <a href="#" class="btn btn-light-secondary icon-btn b-r-22"> <i class="ti ti-user-check"></i> </a>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden bg-success">
                                <img src="{{asset('../backend/assets/images/avtar/14.png')}}" alt="image" class="img-fluid">
                            </div>
                            <div class="flex-grow-1 ps-2">
                                <div class="fw-medium"> Lenora</div>
                                <div class="text-muted f-s-12">UI/UX designer</div>
                            </div>
                            <a href="#" class="btn btn-light-secondary icon-btn b-r-22"> <i class="ti ti-user-check"></i> </a>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden bg-warning">
                                <img src="{{asset('../backend/assets/images/avtar/16.png')}}" alt="image" class="img-fluid">
                            </div>
                            <div class="flex-grow-1 ps-2">
                                <div class="fw-medium"> Fleta Walsh </div>
                                <div class="text-muted f-s-12">React Developer</div>
                            </div>
                            <a href="#" class="btn btn-light-secondary icon-btn b-r-22"> <i class="ti ti-user-check"></i> </a>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden bg-danger">
                                <img src="{{asset('../backend/assets/images/avtar/13.png')}}" alt="image" class="img-fluid">
                            </div>
                            <div class="flex-grow-1 ps-2">
                                <div class="fw-medium"> Emery McKenzie</div>
                                <div class="text-muted f-s-12">Wed Developer</div>
                            </div>
                            <a href="#" class="btn btn-light-secondary icon-btn b-r-22"> <i class="ti ti-user-check"></i> </a>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden bg-info">
                                <img src="{{asset('../backend/assets/images/avtar/1.png')}}" alt="image" class="img-fluid">
                            </div>
                            <div class="flex-grow-1 ps-2">
                                <div class="fw-medium"> Bette Hagenes</div>
                                <div class="text-muted f-s-12">Wed Designer</div>
                            </div>
                            <a href="#" class="btn btn-light-secondary icon-btn b-r-22"> <i class="ti ti-user-check"></i> </a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden bg-danger">
                                <img src="{{asset('../backend/assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="flex-grow-1 ps-2 pe-2">
                                <div class="f-w-600">Heli Walsh</div>
                                <div class="text-muted f-s-12">3 Week</div>
                            </div>
                            <div><i class="ti ti-dots-vertical"></i></div>
                        </div>
                        <div class="post-div">
                            <div class="row g-2 my-2">
                                <div class="col-6">
                                    <a href="{{asset('../backend/assets/images/profile-app/19.jpg')}}" class="glightbox" data-glightbox="type: image; zoomable: true;">
                                        <img src="{{asset('../backend/assets/images/profile-app/19.jpg')}}" class="w-100 rounded" alt="">
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="{{asset('../backend/assets/images/profile-app/27.jpg')}}" class="glightbox" data-glightbox="type: image; zoomable: true;">
                                        <img src="{{asset('../backend/assets/images/profile-app/27.jpg')}}" class="w-100 rounded" alt="">
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="{{asset('../backend/assets/images/profile-app/28.jpg')}}" class="glightbox" data-glightbox="type: image; zoomable: true;">
                                        <img src="{{asset('../backend/assets/images/profile-app/28.jpg')}}" class="w-100 rounded" alt="">
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="{{asset('../backend/assets/images/profile-app/29.jpg')}}" class="glightbox" data-glightbox="type: image; zoomable: true;">
                                        <img src="{{asset('../backend/assets/images/profile-app/29.jpg')}}" class="w-100 rounded" alt="">
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="{{asset('../backend/assets/images/profile-app/30.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                                        <img src="{{asset('../backend/assets/images/profile-app/30.jpg')}}" class="w-100 rounded" alt="">
                                    </a>
                                </div>
                            </div>
                            <p class="test-muted">There's nothing like fresh flowers!......🌸🌼🌻</p>
                            <div class="post-icon">
                                <i class="ti ti-heart"></i>
                                <i class="ti ti-brand-hipchat"></i>
                                <i class="ti ti-send"></i>
                                <p class="text-secondary">2k Likes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-xxl-6 col-box-5">
                <!-- profile content -->
                <div class="content-wrapper">
                    <!-- tab 1 -->
                    <div id="tab-1" class="tabs-content active">
                        <div class="profile-content">

                            <!-- story section -->
                            <div class="card" >
                                <div class="card-header">
                                    <h5>Featured Stories</h5>
                                </div>
                                <div class="card-body">
                                    <div class="story-container app-arrow">
                                        <div>
                                            <a  href="{{asset('../backend/assets/images/profile-app/11.jpg')}}" class="glightbox story" data-glightbox="type: image; zoomable: true;">
                                                <img src="{{asset('../backend/assets/images/profile-app/11.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-50 w-50 d-flex-center b-r-50 overflow-hidden story-icon bg-primary">
                                                    <img src="{{asset('../backend/assets/images/avtar/1.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <a  href="{{asset('../backend/assets/images/profile-app/12.jpg')}}" class="glightbox story" data-glightbox="type: image; zoomable: true;">
                                                <img src="{{asset('../backend/assets/images/profile-app/12.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-50 w-50 d-flex-center b-r-50 overflow-hidden story-icon bg-primary">
                                                    <img src="{{asset('../backend/assets/images/avtar/08.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <a  href="{{asset('../backend/assets/images/profile-app/13.jpg')}}" class="glightbox story" data-glightbox="type: image; zoomable: true;">
                                                <img src="{{asset('../backend/assets/images/profile-app/13.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-50 w-50 d-flex-center b-r-50 overflow-hidden story-icon bg-primary">
                                                    <img src="{{asset('../backend/assets/images/avtar/2.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <a  href="{{asset('../backend/assets/images/profile-app/14.jpg')}}" class="glightbox story" data-glightbox="type: image; zoomable: true;">
                                                <img src="{{asset('../backend/assets/images/profile-app/14.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-50 w-50 d-flex-center b-r-50 overflow-hidden story-icon bg-primary">
                                                    <img src="{{asset('../backend/assets/images/avtar/3.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <a  href="{{asset('../backend/assets/images/profile-app/15.jpg')}}" class="glightbox story" data-glightbox="type: image; zoomable: true;">
                                                <img src="{{asset('../backend/assets/images/profile-app/15.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-50 w-50 d-flex-center b-r-50 overflow-hidden story-icon bg-primary">
                                                    <img src="{{asset('../backend/assets/images/avtar/07.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <a  href="{{asset('../backend/assets/images/profile-app/16.jpg')}}" class="glightbox story" data-glightbox="type: image; zoomable: true;">
                                                <img src="{{asset('../backend/assets/images/profile-app/16.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-50 w-50 d-flex-center b-r-50 overflow-hidden story-icon bg-primary">
                                                    <img src="{{asset('../backend/assets/images/avtar/4.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <a  href="{{asset('../backend/assets/images/profile-app/17.jpg')}}" class="glightbox story" data-glightbox="type: image; zoomable: true;">
                                                <img src="{{asset('../backend/assets/images/profile-app/17.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-50 w-50 d-flex-center b-r-50 overflow-hidden story-icon bg-primary">
                                                    <img src="{{asset('../backend/assets/images/avtar/5.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <a  href="{{asset('../backend/assets/images/profile-app/18.jpg')}}" class="glightbox story" data-glightbox="type: image; zoomable: true;">
                                                <img src="{{asset('../backend/assets/images/profile-app/18.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-50 w-50 d-flex-center b-r-50 overflow-hidden story-icon bg-primary">
                                                    <img src="{{asset('../backend/assets/images/avtar/6.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- post section-->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Post</h5>
                                </div>
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="photos-container">
                                            <div class="left-main-img img-box">
                                                <a href="{{asset('../backend/assets/images/profile-app/20.jpg')}}" class="glightbox"
                                                   data-glightbox="type: image; zoomable: true;">
                                                    <img src="{{asset('../backend/assets/images/profile-app/20.jpg')}}" alt="image">
                                                    <div class="transparent-box2">
                                                        <div class="captions">
                                                            Simple image example
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <div class="sub">
                                                    <div class="img-box">
                                                        <a href="{{asset('../backend/assets/images/profile-app/21.jpg')}}" class="glightbox" data-glightbox="type: image">
                                                            <img src="{{asset('../backend/assets/images/profile-app/21.jpg')}}" alt="image">
                                                            <div class="transparent-box2">
                                                                <div class="captions">
                                                                    Simple image example
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="img-box"><a href="{{asset('../backend/assets/images/profile-app/23.jpg')}}" class="glightbox"
                                                                            data-glightbox="type: image"><img src="{{asset('../backend/assets/images/profile-app/23.jpg')}}"
                                                                                                              alt="image">
                                                            <div class="transparent-box2">
                                                                <div class="captions">
                                                                    Simple image example
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="img-box"><a href="{{asset('../backend/assets/images/profile-app/24.jpg')}}" class="glightbox"
                                                                            data-glightbox="type: image"><img src="{{asset('../backend/assets/images/profile-app/24.jpg')}}"
                                                                                                              alt="image">
                                                            <div class="transparent-box2">
                                                                <div class="captions">
                                                                    Simple image example
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div id="multi-link" class="img-box">
                                                        <a href="{{asset('../backend/assets/images/profile-app/22.jpg')}}" class="glightbox"
                                                           data-glightbox="type: image">
                                                            <img src="{{asset('../backend/assets/images/profile-app/22.jpg')}}" alt="image">
                                                            <div class="transparent-box">
                                                                <div class="caption">
                                                                    +3
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="more-img" class="extra-images-container hide-element">
                                                <a href="{{asset('../backend/assets/images/blog-app/01.jpg')}}" class="glightbox"
                                                   data-glightbox="type: image"><img src="{{asset('../backend/assets/images/blog-app/01.jpg')}}"
                                                                                     alt="image"></a>
                                                <a href="{{asset('../backend/assets/images/blog-app/02.jpg')}}" class="glightbox"
                                                   data-glightbox="type: image"><img src="{{asset('../backend/assets/images/blog-app/02.jpg')}}"
                                                                                     alt="image" ></a>
                                                <a href="{{asset('../backend/assets/images/blog-app/03.jpg')}}" class="glightbox"
                                                   data-glightbox="type: image"><img src="{{asset('../backend/assets/images/blog-app/03.jpg')}}"
                                                                                     alt="image"></a>
                                            </div>
                                        </div>

                                        <div class="photos-container">
                                            <div class="left-main-img img-box">
                                                <a href="{{asset('../backend/assets/images/profile-app/video.mp4')}}" class="glightbox">
                                                    <img src="{{asset('../backend/assets/images/profile-app/26.jpg')}}" alt="image">
                                                    <div class="transparent-box">
                                                        <div class="caption">
                                                            <i class="fa-solid fa-play-circle fa-fw"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right-main-img img-box">
                                                <a href="{{asset('../backend/assets/images/profile-app/video.mp4')}}" class="glightbox">
                                                    <img src="{{asset('../backend/assets/images/profile-app/25.jpg')}}" alt="image">
                                                    <div class="transparent-box">
                                                        <div class="caption">
                                                            <i class="fa-solid fa-play-circle fa-fw"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab 2 -->
                    <div id="tab-2" class="tabs-content ">
                        <div class="card">
                            <div class="card-header">
                                <h5>Activity</h5>
                            </div>
                            <div class="card-body">
                                <ul class="app-timeline-box">
                                    <li class="timeline-section">
                                        <div class="timeline-icon">
                              <span class="text-light-primary h-35 w-35 d-flex-center b-r-50">
                                W
                              </span>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="f-s-16">
                                                <span class="text-primary f-s-16 mb-0">Wilson<span class="text-secondary ms-2">added reaction in <span class="badge text-outline-primary me-2">#product website</span>post</span></span>
                                            </div>
                                            <p class="f-w-500 text-end mt-2 mb-0">
                                                <i class="ph ph-clock me-1 align-middle"></i>09.00AM
                                            </p>
                                        </div>
                                    </li>
                                    <li class="timeline-section">
                                        <div class="timeline-icon">
                              <span class="text-light-info h-35 w-35 d-flex-center b-r-50 icon-direction">
                                <i class="ph-duotone  ph-image f-s-18"></i>
                              </span>
                                        </div>
                                        <div class="timeline-content">
                                            <p class=" f-s-16 text-info mb-0">2 image files and 2 vedios uploaded</p>

                                            <div class="app-timeline-info-text timeline-border-box me-2 ms-0 mt-3 p-3">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <a href="{{asset('../backend/assets/images/draggable/02.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                                                            <img src="{{asset('../backend/assets/images/draggable/02.jpg')}}" class="w-100 rounded" alt="">
                                                        </a>

                                                    </div>
                                                    <div class="col-sm-4">
                                                        <a href="{{asset('../backend/assets/images/draggable/04.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                                                            <img src="{{asset('../backend/assets/images/draggable/04.jpg')}}" class="w-100 rounded" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <a href="{{asset('../backend/assets/images/draggable/01.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                                                            <img src="{{asset('../backend/assets/images/draggable/01.jpg')}}" class="w-100 rounded" alt="">
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>

                                            <p class="f-w-500 text-end mt-2 mb-0">
                                                <i class="ph ph-clock me-1 align-middle"></i>Updated at 12:45 pm
                                            </p>
                                        </div>


                                    </li>
                                    <li class="timeline-section">
                                        <div class="timeline-icon">
                              <span class="text-light-success  h-35 w-35 d-flex-center b-r-50">
                                D
                              </span>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="f-s-16">
                                                <span class="text-secondary"><span class="text-success f-s-16 mb-0">Dane Wiza</span> added reaction in <span class="badge text-outline-success me-2">#product website</span>post</span>
                                            </div>
                                            <div class="timeline-border-box me-2 ms-0 mt-3">
                                                <h6 class="mb-0">Need a feature</h6>
                                                <p class="mb-4 text-secondary">Hello everyone,
                                                    question on email marketing. What are some
                                                    tips/tricks to avoid going to promotion
                                                    spam/ junk for automated marketing emails
                                                    going to promotion spam/ junk for automated
                                                    marketing emails</p>
                                                <span class="badge text-outline-success me-2 timeline-badge">#🙂❤10Reactions</span>
                                                <span class="badge text-outline-success me-2">#✨12Replies</span>
                                            </div>
                                            <p class="f-w-500 text-end mt-2 mb-0">
                                                <i class="ph ph-clock me-1 align-middle"></i>09.00AM
                                            </p>
                                        </div>


                                    </li>
                                    <li class="timeline-section">
                                        <div class="timeline-icon">
                              <span class="text-light-danger h-35 w-35 d-flex-center b-r-50">
                                B
                              </span>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="f-s-16">
                                                <span class="text-danger f-s-16 mb-0">Betty Mante <span class="text-secondary ms-2">Request joined <span class="badge text-outline-danger me-2">#reaserchteam</span>groups</span></span>
                                            </div>
                                            <div class="mt-3">
                                                <button type="button"
                                                        class="btn btn-danger">Accept</button>
                                                <button type="button"
                                                        class="btn btn-outline-danger">Rejects</button>
                                            </div>
                                            <p class="f-w-500 text-end mt-2 mb-0">
                                                <i class="ph ph-clock me-1 align-middle"></i>4 days ago
                                            </p>
                                        </div>


                                    </li>
                                    <li class="timeline-section">
                                        <div class="timeline-icon">
                              <span class="text-light-primary h-35 w-35 d-flex-center b-r-50">
                                P
                              </span>
                                        </div>
                                        <div class="timeline-content">
                                            <div class=" f-s-16">
                                <span class="text-primary f-s-16 mb-0">Pinkie
                                <span class="text-secondary ms-2">uploaded
                                  <span class="text-dark f-w-600 me-2 ms-2">2</span>attachment <span class="badge text-outline-primary me-2">#reaserchteam</span></span>
                                </span>
                                            </div>

                                            <div class="mt-3">
                                                <button type="button"
                                                        class="btn btn-primary">Accept</button>
                                                <button type="button"
                                                        class="btn btn-outline-primary">Rejects</button>
                                            </div>
                                            <p class="f-w-500 text-end mt-2 mb-0">
                                                <i class="ph ph-clock me-1 align-middle"></i>4 days ago
                                            </p>
                                        </div>


                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- tab 3 -->
                    <div id="tab-3" class="tabs-content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card hover-effect">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden">
                                                <img src="{{asset('../backend/assets/images/icons/logo2.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <a href="{{route('project_details')}}" target="_blank" class="flex-grow-1 px-3">
                                                <h6 class="m-0 text-dark f-w-600"> Designing</h6>
                                                <div class="text-muted f-s-14 f-w-500">Prototyping</div>
                                            </a>
                                            <div class="dropdown">
                                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ti ti-edit text-success"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item delete-button" href="#">
                                                            <i class="ti ti-trash text-danger"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="text-dark f-s-14 f-w-500">Start Date : <span class="text-success">2024-02-03 </span></h6>
                                                <h6 class="text-dark f-s-14 f-w-500">End Date : <span class="text-danger">2024-04-05</span></h6>
                                            </div>
                                            <div class="flex-grow-1 text-end">
                                                <p class="f-w-500 text-secondary">Pricing </p>
                                                <h6 class="f-w-600">$280</h6>
                                            </div>
                                        </div>
                                        <p class="text-muted f-s-14 text-secondary txt-ellipsis-2">I am a keen, hardworking, reliable and
                                            excellent timekeeper. I am a bright and receptive person</p>
                                        <div class="text-end mb-2">
                                            <span class="badge text-light-success">Completed</span>
                                        </div>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 100%"> 100% </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="text-dark f-w-600"><i class="ti ti-brand-wechat"></i> 10 Members</span>
                                            </div>
                                            <div class="col-6">

                                                <ul class="avatar-group float-end breadcrumb-start ">
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-danger b-2-light position-relative" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="5 More">
                                                        5+
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card hover-effect">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden">
                                                <img src="{{asset('../backend/assets/images/icons/logo4.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <a href="{{route('project_details')}}" target="_blank" class="flex-grow-1 px-3">
                                                <h6 class="m-0 text-dark f-w-600"> Web Development</h6>
                                                <div class="text-muted f-s-14 f-w-500">Weather Application</div>
                                            </a>
                                            <div class="dropdown">
                                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ti ti-edit text-success"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item delete-button" href="#">
                                                            <i class="ti ti-trash text-danger"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="text-dark f-s-14 f-w-500">Start Date : <span class="text-success">2024-06-16 </span></h6>
                                                <h6 class="text-dark f-s-14 f-w-500">End Date : <span class="text-danger">2024-01-01</span></h6>
                                            </div>
                                            <div class="flex-grow-1 text-end">
                                                <p class="f-w-500 text-secondary">Pricing </p>
                                                <h6 class="f-w-600">$400k</h6>
                                            </div>
                                        </div>
                                        <p class="text-muted f-s-14 text-secondary txt-ellipsis-2">I am a keen, hardworking, reliable and
                                            excellent timekeeper. I am a bright and receptive person</p>
                                        <div class="text-end mb-2">
                                            <span class="badge text-light-success">Progress</span>
                                        </div>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 40%"> 40% </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="text-dark f-w-600"><i class="ti ti-brand-wechat"></i> 34 Members</span>
                                            </div>
                                            <div class="col-6">

                                                <ul class="avatar-group float-end breadcrumb-start ">
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-danger b-2-light position-relative" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="5 More">
                                                        10+
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Client Messages</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="client-list">
                                            <li>
                                                <div class="d-flex align-items-center justify-content-between position-relative">
                                  <span class="bg-danger h-35 w-35 d-flex-center b-r-50 position-absolute">
                                    EM
                                  </span>
                                                    <div class="mg-s-40">
                                                        <span class="f-w-500"> Elyssa Moen</span>
                                                    </div>
                                                    <div>
                                                        <i class="ti ti-star fs-5 "></i>
                                                    </div>
                                                </div>
                                                <p class="text-muted mt-2"> It was quite good.🥳 We can
                                                    continue with the next assignment.</p>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center justify-content-between position-relative">
                                  <span class="bg-light-secondary h-35 w-35 d-flex-center b-r-50 position-absolute">
                                    <i class="fa-solid fa-user"></i>
                                  </span>
                                                    <div class="mg-s-40">
                                                        <span class="f-w-500"> Mark</span>
                                                    </div>
                                                    <div>
                                                        <i class="ti ti-star fs-5 "></i>
                                                    </div>
                                                </div>
                                                <p class="text-muted mt-2">Hey, can tell me about progress of project? I'm waiting
                                                    for
                                                    your response.</p>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center justify-content-between position-relative">
                                  <span class="bg-primary h-35 w-35 d-flex-center b-r-50 position-absolute">
                                    D
                                  </span>
                                                    <div class="mg-s-40">
                                                        <span class="f-w-500">David</span>
                                                    </div>
                                                    <div>
                                                        <i class="ti ti-star fs-5 "></i>
                                                    </div>
                                                </div>
                                                <p class="text-muted mt-3">Awesome! 🤩 I like it. We can schedule a meeting for the
                                                    next
                                                    one.</p>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center  justify-content-between position-relative">
                                  <span class="bg-primary h-35 w-35 d-flex-center b-r-50 position-absolute">
                                    J
                                  </span>
                                                    <div class="mg-s-40">
                                                        <span class="f-w-500"> Jessica</span>
                                                    </div>
                                                    <div class="float-end">
                                                        <i class="ti ti-star fs-5 "></i>
                                                    </div>
                                                </div>
                                                <p class="text-muted mt-2">I am really impressed! Can't wait to see the final
                                                    result.
                                                </p>
                                            </li>
                                            <li>

                                                <div class="d-flex align-items-center justify-content-between position-relative">
                                  <span
                                      class="bg-light-secondary  h-35 w-35 d-flex-center b-r-50 position-absolute">
                                    E
                                  </span>
                                                    <div class="mg-s-40">
                                                        <span class="f-w-500">Elmer</span>
                                                    </div>
                                                    <div>
                                                        <i class="ti ti-star fs-5 "></i>
                                                    </div>
                                                </div>
                                                <p class="text-muted mt-3">Hi! We can schedule a meeting for the Next week.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab 4 -->
                    <div id="tab-4" class="tabs-content">

                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden bg-danger">
                                        <img src="{{asset('../backend/assets/images/avtar/09.png')}}" alt="avtar" class="img-fluid">
                                    </div>
                                    <div class="flex-grow-1 ps-2 pe-2">
                                        <div class="f-w-500">Ninfa Monaldo</div>
                                        <div class="text-muted f-s-12">20min ago</div>
                                    </div>
                                    <div><i class="ti ti-dots-vertical"></i></div>
                                </div>
                                <div class="post-div">
                                    <div class="post"></div>
                                    <p class="test-muted">Exploring new horizons, one destination at a time.🌸✨</p>
                                    <div class="post-icon">
                                        <i class="ti ti-heart"></i>
                                        <i class="ti ti-brand-hipchat"></i>
                                        <i class="ti ti-send"></i>
                                        <p>10k Likes</p>
                                    </div>
                                </div>
                                <div class="Comment-box mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden bg-primary">
                                            <img src="{{asset('../backend/assets/images/avtar/woman.png')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="flex-grow-1 ps-2 pe-2">
                                            <div class="f-w-600">Bette Hagenes</div>
                                            <div class="text-muted f-s-12">1 min</div>
                                        </div>
                                        <div><i class="ti ti-dots-vertical"></i></div>
                                    </div>
                                    <div class="mt-2">
                                        <p>Love your style! keep slaying.</p>
                                    </div>
                                </div>
                                <div class="Comment-box">
                                    <div class="d-flex align-items-center">
                                        <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden bg-warning">
                                            <img src="{{asset('../backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="flex-grow-1 ps-2 pe-2">
                                            <div class="f-w-600">Emery McKenzie</div>
                                            <div class="text-muted f-s-12">12 min</div>
                                        </div>
                                        <div><i class="ti ti-dots-vertical"></i></div>
                                    </div>
                                    <div class="mt-2">
                                        <p>Amazing post! can't wait to see more.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="post-container">
                                    <input class="post-upload" type="file" id="id" multiple="multiple"
                                           data-allow-reorder="true">
                                </div>
                                <div class="app-form mt-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Post">
                                        <span class="input-group-text text-light-primary b-1-secondary"><i class="ti ti-mood-smile-beam"></i></span>
                                        <span class="input-group-text text-light-primary b-1-secondary"><i class="ti ti-pencil-plus"></i></span>
                                    </div>
                                </div>
                                <div class="float-end">
                                    <button type="button" class="btn btn-primary mt-2">
                                        <i class="ti ti-photo-plus"></i> Post</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab 5 -->
                    <div id="tab-5" class="tabs-content">
                        <div class="row profile-friend-box">
                            <div class="col-12">
                                <div class="row">

                                    <div class="col-xxl-6 box-col">
                                        <div class="card friend-list-card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden bg-dark position-absolute">
                                                        <img src="{{asset('../backend/assets/images/avtar/2.png')}}" alt="image" class="img-fluid">
                                                    </div>
                                                    <div class="flex-grow-1 mg-s-55">
                                                        <div class="f-w-500">Fleta Walsh</div>
                                                        <div class="text-muted f-s-12">Wed Developer</div>
                                                    </div>
                                                    <a href="{{route('chat')}}" target="_blank" class="btn btn-light-success icon-btn b-r-22"> <i class="ti ti-brand-hipchat"></i> </a>
                                                </div>
                                                <div class="mt-4 friend-list-content">
                                                    <p class="mb-0">
                                                        Web Developer 👩‍💼 at <span class="text-primary f-w-500">@TechFirm</span>. Building innovative solutions for <span class="text-primary f-w-500">@PersonalProject</span>  in my free 🕐 time.
                                                    </p>
                                                    <div class="app-divider-v dashed m-0 py-3"></div>
                                                    <p class="f-s-16 text-secondary mb-0"><span class="text-dark f-w-500">14k</span> Follower <span class="text-dark f-w-500">8k</span> Following</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 box-col">
                                        <div class="card friend-list-card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden bg-primary position-absolute">
                                                        <img src="{{asset('../backend/assets/images/avtar/16.png')}}" alt="image" class="img-fluid">
                                                    </div>
                                                    <div class="flex-grow-1 mg-s-55">
                                                        <div class="fw-medium"> Bette Hagenes</div>
                                                        <div class="text-muted f-s-12">Wed Designer</div>
                                                    </div>
                                                    <a href="{{route('chat')}}" target="_blank" class="btn btn-light-success icon-btn b-r-22"> <i class="ti ti-brand-hipchat"></i> </a>
                                                </div>
                                                <div class="mt-4 friend-list-content">
                                                    <p class="mb-0">
                                                        "Transforming ideas into visually stunning 💻 websites for <span class="text-primary f-w-500">@FreelanceProject</span> during my off hours."
                                                    </p>
                                                    <div class="app-divider-v dashed m-0 py-3"></div>
                                                    <p class="f-s-16 text-secondary mb-0"><span class="text-dark f-w-500">14k</span> Follower <span class="text-dark f-w-500">8k</span> Following</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 box-col">
                                        <div class="card friend-list-card equal-card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden bg-warning position-absolute">
                                                        <img src="{{asset('../backend/assets/images/avtar/1.png')}}" alt="image" class="img-fluid">
                                                    </div>
                                                    <div class="flex-grow-1 mg-s-55">
                                                        <div class="fw-medium"> Heli Walsh</div>
                                                        <div class="text-muted f-s-12">UI/UX designer</div>
                                                    </div>
                                                    <a href="{{route('chat')}}" target="_blank" class="btn btn-light-success icon-btn b-r-22"> <i class="ti ti-brand-hipchat"></i> </a>
                                                </div>
                                                <div class="mt-3 friend-list-content">
                                                    <p class="mb-0">
                                                        "Crafting intuitive experiences, one  pixel at a time 📏📈."
                                                    </p>
                                                    <div class="app-divider-v dashed m-0 py-3"></div>
                                                    <p class="f-s-16 text-secondary mb-0"><span class="text-dark f-w-500">14k</span> Follower <span class="text-dark f-w-500">8k</span> Following</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 box-col">
                                        <div class="card friend-list-card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden bg-danger  position-absolute">
                                                        <img src="{{asset('../backend/assets/images/avtar/10.png')}}" alt="image" class="img-fluid">
                                                    </div>
                                                    <div class="flex-grow-1 mg-s-55">
                                                        <div class="fw-medium"> Lenora</div>
                                                        <div class="text-muted f-s-12">React Developer</div>
                                                    </div>
                                                    <a href="{{route('chat')}}" target="_blank" class="btn btn-light-success icon-btn b-r-22"> <i class="ti ti-brand-hipchat"></i> </a>
                                                </div>
                                                <div class="mt-3 friend-list-content">
                                                    <p class="mb-0">
                                                        "Crafting dynamic, responsive, and efficient user interfaces with the ⚡ power of React."
                                                    </p>
                                                    <div class="app-divider-v dashed m-0 py-3"></div>
                                                    <p class="f-s-16 text-secondary mb-0"><span class="text-dark f-w-500">14k</span> Follower <span class="text-dark f-w-500">8k</span> Following</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card equal-card">
                                            <div class="card-header">
                                                <h5>Friends Requests</h5>
                                            </div>
                                            <div class="card-body">
                                                <ul class="friend-list">
                                                    <li class="d-flex align-items-center position-relative">
                                                        <div class="h-50 w-50 d-flex-center b-r-50 overflow-hidden position-absolute bg-danger">
                                                            <img src="{{asset('../backend/assets/images/avtar/1.png')}}" alt="image" class="img-fluid">
                                                        </div>
                                                        <div class="flex-grow-1 mg-s-50">
                                                            <h6 class="mb-0 fw-medium text-ellipsis"> @Bette</h6>
                                                            <p class="text-muted mb-0">Web Developer</p>
                                                        </div>
                                                        <a href="#" class="btn btn-primary b-r-5 me-2"> <i class="ti ti-user-check me-2"></i><span>Follow</span> </a>
                                                        <a href="#" class="btn btn-danger b-r-5"> <i class="ti ti-user-x me-2"></i><span>Remove</span>
                                                        </a>

                                                    </li>
                                                    <li class="d-flex align-items-center mt-3 position-relative">
                                                        <div class="h-50 w-50 d-flex-center b-r-50 overflow-hidden position-absolute bg-success">
                                                            <img src="{{asset('../backend/assets/images/avtar/10.png')}}" alt="image" class="img-fluid">
                                                        </div>
                                                        <div class="flex-grow-1 mg-s-50">
                                                            <h6 class="mb-0 fw-medium  text-ellipsis"> @Fleta</h6>
                                                            <p class="text-muted mb-0">Web Designer</p>
                                                        </div>
                                                        <a href="#" class="btn btn-primary b-r-5 me-2"> <i class="ti ti-user-check me-2"></i><span>Follow</span> </a>
                                                        <a href="#" class="btn btn-danger b-r-5"> <i class="ti ti-user-x me-2"></i><span>Remove</span>
                                                        </a>
                                                    </li>
                                                    <li class="d-flex align-items-center mt-3 position-relative">
                                                        <div class="h-50 w-50 d-flex-center b-r-50 overflow-hidden position-absolute bg-secondary">
                                                            <img src="{{asset('../backend/assets/images/avtar/14.png')}}" alt="image" class="img-fluid">
                                                        </div>
                                                        <div class="flex-grow-1 mg-s-50">
                                                            <h6 class="mb-0 fw-medium  text-ellipsis"> @Lenora</h6>
                                                            <p class="text-muted mb-0">UI/UX designer</p>
                                                        </div>
                                                        <a href="#" class="btn btn-primary b-r-5 me-2"> <i class="ti ti-user-check me-2"></i><span>Follow</span> </a>
                                                        <a href="#" class="btn btn-danger b-r-5"> <i class="ti ti-user-x me-2"></i><span>Remove</span>
                                                        </a>
                                                    </li>
                                                    <li class="d-flex align-items-center mt-3 position-relative">
                                                        <div class="h-50 w-50 d-flex-center b-r-50 overflow-hidden position-absolute bg-warning">
                                                            <img src="{{asset('../backend/assets/images/avtar/12.png')}}" alt="image" class="img-fluid">
                                                        </div>
                                                        <div class="flex-grow-1 mg-s-50">
                                                            <h6 class="mb-0 fw-medium text-ellipsis"> @Olive </h6>
                                                            <p class="text-muted mb-0"> Developer</p>
                                                        </div>
                                                        <a href="#" class="btn btn-primary b-r-5 me-2"> <i class="ti ti-user-check me-2"></i><span>Follow</span> </a>
                                                        <a href="#" class="btn btn-danger b-r-5"> <i class="ti ti-user-x me-2"></i><span>Remove</span>
                                                        </a>
                                                    </li>
                                                    <li class="d-flex align-items-center mt-3 position-relative">
                                                        <div class="h-50 w-50 d-flex-center b-r-50 overflow-hidden position-absolute bg-primary">
                                                            <img src="{{asset('../backend/assets/images/avtar/2.png')}}" alt="image" class="img-fluid">
                                                        </div>
                                                        <div class="flex-grow-1 mg-s-50">
                                                            <h6 class="mb-0 fw-medium text-ellipsis"> @Mason</h6>
                                                            <p class="text-muted mb-0"> Developer</p>
                                                        </div>
                                                        <a href="#" class="btn btn-primary b-r-5 me-2"> <i class="ti ti-user-check me-2"></i><span>Follow</span> </a>
                                                        <a href="#" class="btn btn-danger b-r-5"> <i class="ti ti-user-x me-2"></i><span>Remove</span>
                                                        </a>
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

            <div class="col-lg-4 col-xxl-3 col-box-4 order-lg--1">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-container">
                            <div class="image-details">
                                <div class="profile-image"></div>
                                <div class="profile-pic">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type="file" id="imageUpload" accept=".png')}}, .jpg')}}, .jpeg">
                                            <label for="imageUpload"><i class="ti ti-photo-heart"></i></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imgPreview">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person-details">
                                <h5 class="f-w-600">Ninfa Monaldo
                                    <img src="{{asset('../backend/assets/images/profile-app/01.png')}}" class="w-20 h-20" alt="instagram-check-mark">
                                </h5>
                                <p>Web designer &amp; Developer</p>
                                <div class="details">
                                    <div>
                                        <h4 class="text-primary">10</h4>
                                        <p class="text-secondary">Post</p>
                                    </div>
                                    <div>
                                        <h4 class="text-primary">3.4k</h4>
                                        <p class="text-secondary">Follower</p>
                                    </div>
                                    <div>
                                        <h4 class="text-primary">1k</h4>
                                        <p class="text-secondary">Following</p>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <button type="button" class="btn btn-primary b-r-22" id="followButton"> <i class="ti ti-user"></i>
                                        Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>About Me</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted f-s-13">Hello! I am,Ninfa Monaldo Devoted web designer with
                            over five years of experience and a strong understanding of Adobe Creative Suite,
                            HTML5, CSS3 and Java. Excited to bring my exceptional front-end development
                            abilities to the retail industry. </p>
                        <div class="about-list">
                            <div>
                                <span class="fw-medium"><i class="ti ti-briefcase"></i> Work passion</span>
                                <span class="float-end f-s-13 text-secondary">IT Section</span>
                            </div>
                            <div>
                                <span class="fw-medium"><i class="ti ti-mail"></i> Email</span>
                                <span class="float-end f-s-13 text-secondary">Ninfa@gmail.com</span>
                            </div>
                            <div>
                                <span class="fw-medium"><i class="ti ti-phone"></i> Contact</span>
                                <span class="float-end f-s-13 text-secondary">0364 4559103</span>
                            </div>
                            <div>
                                <span class="fw-medium"><i class="ti ti-cake"></i> Birth of Date</span>
                                <span class="float-end f-s-13 text-secondary">24 Oct</span>
                            </div>
                            <div>
                                <span class="fw-semibold"><i class="ti ti-map-pin"></i> Location</span>
                                <span class="float-end f-s-13 text-secondary">Via Partenope, 117</span>
                            </div>
                            <div>
                                <span class="fw-semibold"><i class="ti ti-device-laptop"></i> Website</span>
                                <span class="float-end f-s-13 text-secondary">Ninfa_devWWW.com</span>
                            </div>
                            <div>
                                <span class="fw-semibold"><i class="ti ti-brand-github"></i> Github</span>
                                <span class="float-end f-s-13 text-secondary">Ninfa_dev</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- Glight js -->
<script src="{{asset('backend/assets/vendor/glightbox/glightbox.min.js')}}"></script>

<!-- filepond -->
<script src="{{asset('backend/assets/vendor/filepond/file-encode.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/filepond/validate-size.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/filepond/validate-type.js')}}"></script>
<script src="{{asset('backend/assets/vendor/filepond/exif-orientation.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/filepond/image-preview.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/filepond/filepond.min.js')}}"></script>

<!-- slick-file -->
<script src="{{asset('backend/assets/vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/shepherdjs/shepherd.js')}}"></script>

<!-- js -->
<script src="{{asset('backend/assets/js/profile.js')}}"></script>

@endsection
