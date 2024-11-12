@extends('backend.layout.master')
@section('title', 'Blog')
@section('css')
    <!-- glight css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/glightbox/glightbox.min.css')}}">
@endsection
@section('main-content')
<div class="container-fluid">
    <!-- Breadcrumb start -->
    <div class="row m-1">
        <div class="col-12 ">
            <h4 class="main-title">Blog</h4>
            <ul class="app-line-breadcrumbs mb-3">
                <li class="">
                    <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="f-s-14 f-w-500">Blog Page</a>
                </li>
                <li class="active">
                    <a href="#" class="f-s-14 f-w-500">Blog</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb end -->

    <!-- blog start -->
    <div class="row blog-section">
        <!-- Technology start -->
        <div class="col-md-6 col-lg-4 col-xxl-3">
            <div class="card blog-card overflow-hidden">
                <a href="{{asset('assets/images/blog-app/02.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                    <img src="{{asset('assets/images/blog-app/02.jpg')}}" class="card-img-top" alt="...">
                </a>
                <div class="tag-container">
                    <span class="badge text-light-secondary">Technology</span>
                </div>
                <div class="card-body">
                    <p class="text-body-secondary"><i class="ti ti-calendar-due"></i> 02.01.2021</p>
                    <a href="{{route('blog_details')}}" class="bloglink">
                        <h5 class="title-text mb-2">Web Development</h5>
                    </a>
                    <p class="card-text text-secondary">
                        Web development is the work involved in developing a website for the Internet or an intranet
                    </p>
                    <div class="app-divider-v dashed py-3"></div>
                    <div class="d-flex justify-content-between align-items-center gap-2 position-relative">
                        <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden bg-primary position-absolute">
                            <img src="{{asset('assets/images/avtar/1.png')}}" alt="avatar" class="img-fluid">
                        </div>
                        <div class="ps-5">
                            <h6 class="text-dark f-w-500 mb-0"> Bette Hagenes</h6>
                            <p class="text-secondary f-s-12 mb-0">1day ago</p>
                        </div>
                        <div>
                            <div class="btn-group dropdown-icon-none">
                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical f-s-18 text-dark"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a class="dropdown-item text-success" href="#"><i class="ti ti-archive"></i> Edit </a></li>
                                    <li class="delete-btn"><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Technology end -->
        <!-- Lifestyle start -->
        <div class="col-md-6 col-lg-4 col-xxl-3">
            <div class="card blog-card overflow-hidden">
                <a href="{{asset('assets/images/blog-app/01.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                    <img src="{{asset('assets/images/blog-app/01.jpg')}}" class="card-img-top" alt="...">
                </a>
                <div class="tag-container">
                    <span class="badge">Lifestyle</span>
                </div>
                <div class="card-body">
                    <p class="text-body-secondary"><i class="ti ti-calendar-due"></i> 25.03.2022</p>
                    <a href="{{route('blog_details')}}" class="bloglink">
                        <h5 class="title-text mb-2">Photographs</h5>
                    </a>
                    <p class="card-text text-secondary">
                        “Photography is a way of feeling, of touching, of loving. What you have caught on film…”
                    </p>
                    <div class="app-divider-v dashed py-3"></div>
                    <div class="d-flex justify-content-between align-items-center gap-2 position-relative">
                        <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden bg-dark position-absolute">
                            <img src="{{asset('assets/images/avtar/2.png')}}" alt="avatar" class="img-fluid">
                        </div>
                        <div class="ps-5">
                            <h6 class="text-dark f-w-500 mb-0"> James Parker</h6>
                            <p class="text-secondary f-s-12 mb-0">1day ago</p>
                        </div>
                        <div>
                            <div class="btn-group dropdown-icon-none">
                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical f-s-18 text-dark"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a class="dropdown-item text-success" href="#"><i class="ti ti-archive"></i> Edit </a></li>
                                    <li class="delete-btn"><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Lifestyle end -->
        <!-- Travel start -->
        <div class="col-md-6 col-lg-4 col-xxl-3">
            <div class="card blog-card overflow-hidden">
                <a href="{{asset('assets/images/blog-app/04.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                    <img src="{{asset('assets/images/blog-app/04.jpg')}}" class="card-img-top" alt="...">
                </a>
                <div class="tag-container">
                    <span class="badge text-light-secondary">Travel</span>
                </div>
                <div class="card-body">
                    <p class="text-body-secondary"><i class="ti ti-calendar-due"></i> 25.03.2022</p>
                    <a href="{{route('blog_details')}}" class="bloglink">
                        <h5 class="title-text mb-2">Travel</h5>
                    </a>
                    <p class="card-text text-secondary">
                        Travel is the movement of people between distant geographical locations.To travel ...
                    </p>
                    <div class="app-divider-v dashed py-3"></div>
                    <div class="d-flex justify-content-between align-items-center gap-2 position-relative">
                        <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden bg-danger position-absolute">
                            <img src="{{asset('assets/images/avtar/4.png')}}" alt="avatar" class="img-fluid">
                        </div>
                        <div class="ps-5">
                            <h6 class="text-dark f-w-500 mb-0"> Emma Bennett</h6>
                            <p class="text-secondary f-s-12 mb-0">1day ago</p>
                        </div>
                        <div>
                            <div class="btn-group dropdown-icon-none">
                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical f-s-18 text-dark"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a class="dropdown-item text-success" href="#"><i class="ti ti-archive"></i> Edit </a></li>
                                    <li class="delete-btn"><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Travel end -->
        <!-- Sports start -->
        <div class="col-md-6 col-lg-4 col-xxl-3">
            <div class="card blog-card overflow-hidden">
                <a href="{{asset('assets/images/blog-app/06.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                    <img src="{{asset('assets/images/blog-app/06.jpg')}}" class="card-img-top" alt="...">
                </a>
                <div class="tag-container">
                    <span class="badge text-light-secondary">Sports</span>
                </div>
                <div class="card-body">
                    <p class="text-body-secondary"><i class="ti ti-calendar-due"></i> 25.03.2022</p>
                    <a href="{{route('blog_details')}}" class="bloglink">
                        <h5 class="title-text mb-2">Sports Blog</h5>
                    </a>
                    <p class="card-text text-secondary">
                        Sports have taught me so many valuable life lessons, from teamwork.
                    </p>
                    <div class="app-divider-v dashed py-3"></div>
                    <div class="d-flex justify-content-between align-items-center gap-2 position-relative">
                        <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden bg-warning position-absolute">
                            <img src="{{asset('assets/images/avtar/3.png')}}" alt="avatar" class="img-fluid">
                        </div>
                        <div class="ps-5">
                            <h6 class="text-dark f-w-500 mb-0">William Foster</h6>
                            <p class="text-secondary f-s-12 mb-0">10day ago</p>
                        </div>
                        <div>
                            <div class="btn-group dropdown-icon-none">
                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical f-s-18 text-dark"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a class="dropdown-item text-success" href="#"><i class="ti ti-archive"></i> Edit </a></li>
                                    <li class="delete-btn"><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sports end -->

        <div class="col-md-6 col-lg-4 col-xxl-3">
            <div class="card blog-card overflow-hidden">
                <a href="{{asset('assets/images/blog-app/05.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                    <img src="{{asset('assets/images/blog-app/05.jpg')}}" class="card-img-top" alt="...">
                </a>
                <div class="tag-container">
                    <span class="badge text-light-secondary">Travel</span>
                </div>
                <div class="card-body">
                    <p class="text-body-secondary"><i class="ti ti-calendar-due"></i> 08.04.2022</p>
                    <a href="{{route('blog_details')}}" class="bloglink">
                        <h5 class="title-text mb-2">Living in the Moment</h5>
                    </a>
                    <p class="card-text text-secondary">
                        “I believe the happiness we feel in relation to animals is immensely...
                    </p>
                    <div class="app-divider-v dashed py-3"></div>
                    <div class="d-flex justify-content-between align-items-center gap-2 position-relative">
                        <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden bg-secondary position-absolute">
                            <img src="{{asset('assets/images/avtar/5.png')}}" alt="avatar" class="img-fluid">
                        </div>
                        <div class="ps-5">
                            <h6 class="text-dark f-w-500 mb-0">Evelyn Morgan</h6>
                            <p class="text-secondary f-s-12 mb-0">7day ago</p>
                        </div>
                        <div>
                            <div class="btn-group dropdown-icon-none">
                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical f-s-18 text-dark"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a class="dropdown-item text-success" href="#"><i class="ti ti-archive"></i> Edit </a></li>
                                    <li class="delete-btn"><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xxl-3">
            <div class="card blog-card overflow-hidden">
                <a href="{{asset('assets/images/blog-app/07.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                    <img src="{{asset('assets/images/blog-app/07.jpg')}}" class="card-img-top" alt="...">
                </a>
                <div class="tag-container">
                    <span class="badge text-light-secondary">Lifestyle</span>
                </div>
                <div class="card-body">
                    <p class="text-body-secondary"><i class="ti ti-calendar-due"></i> 25.03.2022</p>
                    <a href="{{route('blog_details')}}" class="bloglink">
                        <h5 class="title-text mb-2">Every sunset has a story.</h5>
                    </a>
                    <p class="card-text text-secondary">
                        You may not get to enjoy the beautiful foliage marked by the color-changing leaves...
                    </p>
                    <div class="app-divider-v dashed py-3"></div>
                    <div class="d-flex justify-content-between align-items-center gap-2 position-relative">
                        <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden bg-success position-absolute">
                            <img src="{{asset('assets/images/avtar/11.png')}}" alt="avatar" class="img-fluid">
                        </div>
                        <div class="ps-5">
                            <h6 class="text-dark f-w-500 mb-0"> Isabella Davis</h6>
                            <p class="text-secondary f-s-12 mb-0">1day ago</p>
                        </div>
                        <div>
                            <div class="btn-group dropdown-icon-none">
                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical f-s-18 text-dark"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a class="dropdown-item text-success" href="#"><i class="ti ti-archive"></i> Edit </a></li>
                                    <li class="delete-btn"><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xxl-3">
            <div class="card blog-card overflow-hidden">
                <a href="{{asset('assets/images/blog-app/08.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                    <img src="{{asset('assets/images/blog-app/08.jpg')}}" class="card-img-top" alt="...">
                </a>
                <div class="tag-container">
                    <span class="badge text-light-secondary">Depot</span>
                </div>
                <div class="card-body">
                    <p class="text-body-secondary"><i class="ti ti-calendar-due"></i> 1.08.2022</p>
                    <a href="{{route('blog_details')}}" class="bloglink">
                        <h5 class="title-text mb-2"> Webdesigner Depot</h5>
                    </a>
                    <p class="card-text text-secondary">
                        “With a name like "Designer Depot," it's no wonder that this design news site...</p>
                    <div class="app-divider-v dashed py-3"></div>
                    <div class="d-flex justify-content-between align-items-center gap-2 position-relative">
                        <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden bg-info position-absolute">
                            <img src="{{asset('assets/images/avtar/14.png')}}" alt="avatar" class="img-fluid">
                        </div>
                        <div class="ps-5">
                            <h6 class="text-dark f-w-500 mb-0"> Oliver Brooks</h6>
                            <p class="text-secondary f-s-12 mb-0">9day ago</p>
                        </div>
                        <div>
                            <div class="btn-group dropdown-icon-none">
                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical f-s-18 text-dark"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a class="dropdown-item text-success" href="#"><i class="ti ti-archive"></i> Edit </a></li>
                                    <li class="delete-btn"><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xxl-3">
            <div class="card blog-card overflow-hidden">
                <a href="{{asset('assets/images/blog-app/09.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                    <img src="{{asset('assets/images/blog-app/09.jpg')}}" class="card-img-top" alt="...">
                </a>
                <div class="tag-container">
                    <span class="badge text-light-secondary">Life</span>
                </div>
                <div class="card-body">
                    <p class="text-body-secondary"><i class="ti ti-calendar-due"></i> 11.2.2019</p>
                    <a href="{{route('blog_details')}}" class="bloglink">
                        <h5 class="title-text mb-2">Life As We Explore .</h5>
                    </a>
                    <p class="card-text text-secondary">
                        Belgium has some of the most beautiful cities in this world and renowned with...
                    </p>
                    <div class="app-divider-v dashed py-3"></div>
                    <div class="d-flex justify-content-between align-items-center gap-2 position-relative">
                        <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden bg-dark position-absolute">
                            <img src="{{asset('assets/images/avtar/12.png')}}" alt="avatar" class="img-fluid">
                        </div>
                        <div class="ps-5">
                            <h6 class="text-dark f-w-500 mb-0">Liam Walker</h6>
                            <p class="text-secondary f-s-12 mb-0">1day ago</p>
                        </div>
                        <div>
                            <div class="btn-group dropdown-icon-none">
                                <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical f-s-18 text-dark"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a class="dropdown-item text-success" href="#"><i class="ti ti-archive"></i> Edit </a></li>
                                    <li class="delete-btn"><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Collect Moments start -->
        <div class="col-md-12 col-lg-6">
            <div class="card vertical-blog mb-3 hover-effect overflow-hidden">
                <div class="row g-0">
                    <div class="col-sm-4">
                        <a href="{{asset('assets/images/blog-app/10.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                            <img src="{{asset('assets/images/blog-app/10.jpg')}}" class="card-img-top" alt="...">
                        </a>

                    </div>
                    <div class="col-sm-8">
                        <div class="card-body">
                            <p class="text-body-secondary"><i class="ti ti-calendar-due"></i> 25.03.2024</p>
                            <a href="{{route('blog_details')}}">
                                <h5 class="title-text mb-3 bloglink">Collect Moments</h5>
                            </a>
                            <p class="card-text text-secondary">
                                "This is what holidays, travels, vacations are about. It is not really rest or even leisure we
                                chase.
                            </p>
                            <p class="card-text text-secondary">
                                "We tend to put values on what we buy such as a new car, which we may value at $30,000. However when it comes to experiences."
                            </p>
                            <div class="app-divider-v mb-2"></div>
                            <div class="d-flex justify-content-between align-items-center gap-2 position-relative">
                                <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden bg-dark position-absolute">
                                    <img src="{{asset('assets/images/avtar/11.png')}}" alt="avatar" class="img-fluid">
                                </div>
                                <div class="ps-5">
                                    <h6 class="text-dark f-w-500 mb-0"> Sophia Mitchell</h6>
                                    <p class="text-secondary f-s-12 mb-0">1day ago</p>
                                </div>
                                <div>
                                    <div class="btn-group dropdown-icon-none">
                                        <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                            <i class="ti ti-dots-vertical f-s-18 text-dark"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a class="dropdown-item text-success" href="#"><i class="ti ti-archive"></i> Edit </a></li>
                                            <li class="delete-btn"><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Collect Moments end -->

        <!-- just me self start -->
        <div class="col-md-12 col-lg-6">
            <div class="card vertical-blog mb-3 hover-effect overflow-hidden">
                <div class="row g-0">
                    <div class="col-sm-4">
                        <a href="{{asset('assets/images/blog-app/11.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                            <img src="{{asset('assets/images/blog-app/11.jpg')}}" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="col-sm-8">
                        <div class="card-body">
                            <p class="text-body-secondary"><i class="ti ti-calendar-due"></i> 25.03.2024</p>
                            <a href="{{route('blog_details')}}">
                                <h5 class="title-text mb-2 bloglink">Just Me, Myself & Coffee</h5>
                            </a>
                            <p class="card-text text-secondary">
                                Coffee is the fuel that keeps our designers and engineers, movers and shakers going all day
                                long.
                            </p>
                            <p class="card-text text-secondary">
                                "Coffee is the best thing to douse the sunrise with."
                                "Coffee is always a good idea."
                            </p>

                            <div class="app-divider-v mb-2"></div>
                            <div class="d-flex justify-content-between align-items-center gap-2 position-relative">
                                <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden bg-dark position-absolute">
                                    <img src="{{asset('assets/images/avtar/12.png')}}" alt="avatar" class="img-fluid">
                                </div>
                                <div class="ps-5">
                                    <h6 class="text-dark f-w-500 mb-0"> Henry Powell</h6>
                                    <p class="text-secondary f-s-12 mb-0">1day ago</p>
                                </div>
                                <div>
                                    <div class="btn-group dropdown-icon-none">
                                        <button class="btn border-0 icon-btn b-r-4 dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                            <i class="ti ti-dots-vertical f-s-18 text-dark"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a class="dropdown-item text-success" href="#"><i class="ti ti-archive"></i> Edit </a></li>
                                            <li class="delete-btn"><a class="dropdown-item text-danger" href="#"><i class="ti ti-trash"></i> Delete </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- just me self end -->
    </div>
    <!-- blog end -->
</div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- Glight js -->
<script src="{{asset('assets//vendor/glightbox/glightbox.min.js')}}"></script>

<!--js-->
<script src="{{asset('assets//js/blog.js')}}"></script>
@endsection
