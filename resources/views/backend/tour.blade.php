@extends('layout.master')
@section('title', 'Tour')
@section('css')
    <!-- glight css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/glightbox/glightbox.min.css')}}">

    <!-- shepherdjs css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/shepherdjs/shepherd.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Tour</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                            <span>
                              <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Tour</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- tour page section start  -->
        <div class="row">
            <div class="col-lg-3">
                <!-- profil tabs -->
                <div class="card" id="profile-tabs">
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

                <div class="card d-lg-block d-none" id="friend">
                    <div class="card-header">
                        <h5>Friends</h5>
                    </div>
                    <div class="card-body profile-friends">
                        <div class="d-flex align-items-center">
                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden bg-dark">
                                <img src="{{asset('../assets/images/avtar/2.png')}}" alt="image" class="img-fluid">
                            </div>
                            <div class="flex-grow-1 ps-2">
                                <div class="fw-medium"> Bette Hagenes</div>
                                <div class="text-muted f-s-12">Wed Developer</div>
                            </div>
                            <a href="#" class="btn btn-light-secondary icon-btn b-r-22"> <i class="ti ti-user-check"></i> </a>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden bg-primary">
                                <img src="{{asset('../assets/images/avtar/10.png')}}" alt="image" class="img-fluid">
                            </div>
                            <div class="flex-grow-1 ps-2">
                                <div class="fw-medium"> Fleta Walsh</div>
                                <div class="text-muted f-s-12">Wed Designer</div>
                            </div>
                            <a href="#" class="btn btn-light-secondary icon-btn b-r-22"> <i class="ti ti-user-check"></i> </a>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden bg-success">
                                <img src="{{asset('../assets/images/avtar/14.png')}}" alt="image" class="img-fluid">
                            </div>
                            <div class="flex-grow-1 ps-2">
                                <div class="fw-medium"> Lenora</div>
                                <div class="text-muted f-s-12">UI/UX designer</div>
                            </div>
                            <a href="#" class="btn btn-light-secondary icon-btn b-r-22"> <i class="ti ti-user-check"></i> </a>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden bg-warning">
                                <img src="{{asset('../assets/images/avtar/16.png')}}" alt="image" class="img-fluid">
                            </div>
                            <div class="flex-grow-1 ps-2">
                                <div class="fw-medium"> Fleta Walsh </div>
                                <div class="text-muted f-s-12">React Developer</div>
                            </div>
                            <a href="#" class="btn btn-light-secondary icon-btn b-r-22"> <i class="ti ti-user-check"></i> </a>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden bg-danger">
                                <img src="{{asset('../assets/images/avtar/13.png')}}" alt="image" class="img-fluid">
                            </div>
                            <div class="flex-grow-1 ps-2">
                                <div class="fw-medium"> Emery McKenzie</div>
                                <div class="text-muted f-s-12">Wed Developer</div>
                            </div>
                            <a href="#" class="btn btn-light-secondary icon-btn b-r-22"> <i class="ti ti-user-check"></i> </a>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden bg-info">
                                <img src="{{asset('../assets/images/avtar/1.png')}}" alt="image" class="img-fluid">
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
                                <img src="{{asset('../assets/images/avtar/16.png')}}" alt="" class="img-fluid">
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
                                    <img src="{{asset('../assets/images/profile-app/19.jpg')}}" class="w-100 rounded" alt="">
                                </div>
                                <div class="col-6">
                                    <img src="{{asset('../assets/images/profile-app/27.jpg')}}" class="w-100 rounded" alt="">
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('../assets/images/profile-app/28.jpg')}}" class="w-100 rounded" alt="">
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('../assets/images/profile-app/29.jpg')}}" class="w-100 rounded" alt="">
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('../assets/images/profile-app/30.jpg')}}" class="w-100 rounded" alt="">
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
                            <div class="card" id="featured-Stories">
                                <div class="card-header">
                                    <h5>Featured Stories</h5>
                                </div>
                                <div class="card-body">
                                    <div class="story-container app-arrow">
                                        <div>
                                            <div class="story">
                                                <img src="{{asset('../assets/images/profile-app/11.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden story-icon bg-primary">
                                                    <img src="{{asset('../assets/images/avtar/1.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="story">
                                                <img src="{{asset('../assets/images/profile-app/12.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden story-icon bg-danger">
                                                    <img src="{{asset('../assets/images/avtar/08.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="story">
                                                <img src="{{asset('../assets/images/profile-app/13.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden story-icon bg-secondry">
                                                    <img src="{{asset('../assets/images/avtar/2.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="story">
                                                <img src="{{asset('../assets/images/profile-app/14.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden story-icon bg-dark">
                                                    <img src="{{asset('../assets/images/avtar/3.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="story">
                                                <img src="{{asset('../assets/images/profile-app/15.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden story-icon bg-warning">
                                                    <img src="{{asset('../assets/images/avtar/07.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="story">
                                                <img src="{{asset('../assets/images/profile-app/16.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden story-icon bg-info">
                                                    <img src="{{asset('../assets/images/avtar/4.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="story">
                                                <img src="{{asset('../assets/images/profile-app/17.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden story-icon bg-light">
                                                    <img src="{{asset('../assets/images/avtar/5.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="story">
                                                <img src="{{asset('../assets/images/profile-app/18.jpg')}}" class="rounded img-fluid" alt="image">
                                                <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden story-icon bg-success">
                                                    <img src="{{asset('../assets/images/avtar/6.png')}}" alt="image" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- post section-->
                            <div class="card" id="post">
                                <div class="card-header">
                                    <h5>Post</h5>
                                </div>
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="photos-container">
                                            <div class="left-main-img img-box">
                                                <a href="{{asset('assets/images/profile-app/20.jpg')}}" class="glightbox"
                                                   data-glightbox="type: image; zoomable: true;">
                                                    <img src="{{asset('../assets/images/profile-app/20.jpg')}}" alt="image">
                                                    <div class="transparent-box2">
                                                        <div class="captions">
                                                            Simple image example
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <div class="sub">
                                                    <div class="img-box"><a href="{{asset('assets/images/profile-app/21.jpg')}}" class="glightbox"
                                                                            data-glightbox="type: image"><img src="{{asset('../assets/images/profile-app/21.jpg')}}"
                                                                                                              alt="image">
                                                            <div class="transparent-box2">
                                                                <div class="captions">
                                                                    Simple image example
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="img-box"><a href="{{asset('assets/images/profile-app/23.jpg')}}" class="glightbox"
                                                                            data-glightbox="type: image"><img src="{{asset('../assets/images/profile-app/23.jpg')}}"
                                                                                                              alt="image">
                                                            <div class="transparent-box2">
                                                                <div class="captions">
                                                                    Simple image example
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="img-box"><a href="{{asset('assets/images/profile-app/24.jpg')}}" class="glightbox"
                                                                            data-glightbox="type: image"><img src="{{asset('../assets/images/profile-app/24.jpg')}}"
                                                                                                              alt="image" >
                                                            <div class="transparent-box2">
                                                                <div class="captions">
                                                                    Simple image example
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div id="multi-link" class="img-box">
                                                        <a href="{{asset('assets/images/profile-app/22.jpg')}}" class="glightbox"
                                                           data-glightbox="type: image">
                                                            <img src="{{asset('../assets/images/profile-app/22.jpg')}}" alt="image">
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
                                                <a href="{{asset('assets/images/blog-app/01.jpg')}}" class="glightbox"
                                                   data-glightbox="type: image"><img src="{{asset('../assets/images/blog-app/01.jpg')}}"
                                                                                     alt="image" ></a>
                                                <a href="{{asset('assets/images/blog-app/02.jpg')}}" class="glightbox"
                                                   data-glightbox="type: image"><img src="{{asset('../assets/images/blog-app/02.jpg')}}"
                                                                                     alt="image" ></a>
                                                <a href="{{asset('assets/images/blog-app/03.jpg')}}" class="glightbox"
                                                   data-glightbox="type: image"><img src="{{asset('../assets/images/blog-app/03.jpg')}}"
                                                                                     alt="image" ></a>
                                            </div>
                                        </div>

                                        <div class="photos-container">
                                            <div class="left-main-img img-box">
                                                <a href="{{asset('assets/images/profile-app/video.mp4" class="glightbox">
                                                    <img src="{{asset('../assets/images/profile-app/26.jpg')}}" alt="image" >
                                                    <div class="transparent-box">
                                                        <div class="caption">
                                                            <i class="fa-solid fa-play-circle fa-fw"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right-main-img img-box">
                                                <a href="{{asset('assets/images/profile-app/video.mp4" class="glightbox">
                                                    <img src="{{asset('../assets/images/profile-app/25.jpg')}}" alt="image" >
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
                </div>
            </div>

            <div class="col-lg-4 col-xxl-3 order--1-lg col-box-4">
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
                                    <img width="20" height="20" src="{{asset('../assets/images/profile-app/01.png')}}"
                                         alt="instagram-check-mark" >
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
                                    <button type="button" class="btn btn-primary b-r-22"> <i class="ti ti-user-check"></i>
                                        Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="about-me">
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
        <!-- tour page section end  -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- slick-file -->
<script src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/vendor/shepherdjs/shepherd.js')}}"></script>

<!-- js -->
<script src="{{asset('assets/js/tour.js')}}"></script>
@endsection
