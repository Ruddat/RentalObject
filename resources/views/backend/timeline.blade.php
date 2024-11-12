@extends('layout.master')
@section('title', 'Timeline')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/all.css')}}">

    <!--  slick css-->
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick-theme.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Timeline</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Timeline</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Timeline start -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-body">
                        <ul class="app-timeline-box">

                            <li class="timeline-section">
                                <div class="timeline-icon">
                          <span class="text-light-primary h-35 w-35 d-flex-center b-r-50">
                            <i class="ti ti-circle-check f-s-20"></i>
                          </span>
                                </div>
                                <div class="timeline-content bg-light-primary b-1-primary">
                                    <div class="d-flex justify-content-between align-items-center timeline-flex">
                                        <h6 class="mt-2 text-primary">Task finished</h6>
                                        <p class="text-dark">10 Min ago</p>
                                    </div>
                                    <p class="mt-2 text-dark">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax
                                        quiz prog.
                                        <a href="#" class="text-primary">[more info]</a>
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-section">
                                <div class="timeline-icon">
                          <span class="text-light-secondary h-35 w-35 d-flex-center b-r-50">
                            <i class="ti ti-clock f-s-20 "></i>
                          </span>
                                </div>
                                <div class="timeline-content bg-light-secondary b-1-secondary">
                                    <div class="d-flex justify-content-between align-items-center timeline-flex">
                                        <h6 class="mt-2 text-secondary">Task Overdue</h6>
                                        <span class="color-light">50 Min ago</span>
                                    </div>
                                    <p class="mt-2">Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz.
                                        <a href="#" class="text-primary">[more info]</a>
                                    </p>
                                    <span class="badge bg-primary-900">Design</span>
                                    <span class="badge bg-primary-900">HTML</span>
                                </div>
                            </li>
                            <li class="timeline-section">
                                <div class="timeline-icon">
                          <span class="text-light-success h-35 w-35 d-flex-center b-r-50">
                            <i class="ti ti-clipboard-check f-s-20"></i>
                          </span>
                                </div>
                                <div class="timeline-content bg-light-success b-1-success">
                                    <div class="d-flex justify-content-between align-items-center timeline-flex">
                                        <h6 class="mt-2 text-success">New Task</h6>
                                        <span class="text-dark">10 hours ago</span>
                                    </div>
                                    <p class="mt-2 text-dark">Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick
                                        wafting zephyrs vex bold Jim.
                                        <a href="#" class="text-primary">[more info]</a>
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-section">
                                <div class="timeline-icon">
                          <span class="text-light-info h-35 w-35 d-flex-center b-r-50">
                            <i class="ti ti-message-circle f-s-20"></i>
                          </span>
                                </div>
                                <div class="timeline-content bg-light-info b-1-info">
                                    <div class="d-flex justify-content-between align-items-center timeline-flex">
                                        <h6 class="mt-2 text-info">New Comment</h6>
                                        <span class="text-dark">Yesterday</span>
                                    </div>
                                    <p class="mt-2 text-dark">Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How
                                        quickly daft jumping zebras vex.
                                        <a href="#" class="text-primary">[more info]</a>
                                    </p>

                                </div>
                            </li>
                            <li class="timeline-section">
                                <div class="timeline-icon">
                          <span class="text-light-warning h-35 w-35 d-flex-center b-r-50">
                            <i class="ti ti-message-circle f-s-20"></i>
                          </span>
                                </div>
                                <div class="timeline-content bg-light-warning b-1-warning">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mt-2 text-warning">New Task</h6>
                                        <span class="text-dark">10 hours ago</span>
                                    </div>
                                    <p class="mt-2 text-dark">Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick
                                        wafting zephyrs vex bold Jim.
                                        <a href="#" class="text-primary">[more info]</a>
                                    </p>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-body">
                        <ul class="app-side-timeline">
                            <li class="side-timeline-section left-side">
                                <div class="side-timeline-icon">
                          <span class="text-light-primary h-25 w-25 d-flex-center b-r-50">
                            <i class="ph-fill  ph-circle f-s-12 rounded-circle animate__animated animate__zoomIn animate__infinite animate__slower"></i>
                          </span>
                                </div>
                                <div class="timeline-content ">
                                    <div class="">
                                        <h6 class="mt-2 text-primary">Task finished</h6>
                                        <p class="text-dark">10 Min ago</p>
                                    </div>
                                    <p class="mt-2 text-dark">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax
                                        quiz prog.
                                        <a href="#" class="text-primary">[more info]</a>
                                    </p>
                                </div>
                            </li>
                            <li class="side-timeline-section right-side">
                                <div class="side-timeline-icon">
                          <span class="text-light-secondary h-25 w-25 d-flex-center b-r-50">
                            <i class="ph-fill  ph-circle f-s-12 rounded-circle animate__animated animate__zoomIn animate__infinite animate__slower"></i>
                          </span>
                                </div>
                                <div class="timeline-content ">
                                    <div class="">
                                        <h6 class="mt-2 text-secondary">Task Overdue</h6>
                                        <span class="color-light">50 Min ago</span>
                                    </div>
                                    <p class="mt-2">Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz.
                                        <a href="#" class="text-primary">[more info]</a>
                                    </p>
                                    <span class="badge bg-primary-900">Design</span>
                                    <span class="badge bg-primary-900">HTML</span>
                                </div>
                            </li>
                            <li class="side-timeline-section left-side">
                                <div class="side-timeline-icon">
                          <span class="text-light-success h-25 w-25 d-flex-center b-r-50">
                            <i class="ph-fill  ph-circle f-s-12 rounded-circle animate__animated animate__zoomIn animate__infinite animate__slower"></i>
                          </span>
                                </div>
                                <div class="timeline-content">
                                    <div class="">
                                        <h6 class="mt-2 text-success">New Task</h6>
                                        <span class="text-dark">10 hours ago</span>
                                    </div>
                                    <p class="mt-2 text-dark">Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick
                                        wafting zephyrs vex bold Jim.
                                        <a href="#" class="text-primary">[more info]</a>
                                    </p>

                                </div>
                            </li>
                            <li class="side-timeline-section right-side">
                                <div class="side-timeline-icon">
                          <span class="text-light-info h-25 w-25 d-flex-center b-r-50">
                           <i class="ph-fill  ph-circle f-s-12 rounded-circle animate__animated animate__zoomIn animate__infinite animate__slower"></i>
                          </span>
                                </div>
                                <div class="timeline-content">
                                    <div class="">
                                        <h6 class="mt-2 text-info">New Task</h6>
                                        <span class="text-dark">10 hours ago</span>
                                    </div>
                                    <p class="mt-2 text-dark">Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick
                                        wafting zephyrs vex bold Jim.
                                        <a href="#" class="text-primary">[more info]</a>
                                    </p>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Timeline horizontal start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Timeline horizontal</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="timeline-horizontal">
                                    <div class="main-timeline-section">
                                        <div class="conference-center-line"></div>
                                        <div>
                                            <div class="conference-timeline-content slider timeline-horizontal-responsive">
                                                <div class="timeline-article">
                                                    <div class="meta-date border-info">
                                    <span class="text-light-info h-40  w-40 p-3 d-flex-center b-r-50 timline_position">
                                      <i class="fa-regular fa-comment-dots f-s-20 mg-t-2"></i>
                                    </span>
                                                    </div>
                                                    <div class="card card-light-info content-box content-box-bottom">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="m-0 text-info">New Task</h6>
                                                                <span class="text-info">10 hours ago</span>
                                                            </div>
                                                            <p class="text-secondary timeline-ellipsis"> A business- and employment-oriented
                                                                social
                                                                networking service that operates via websites and nomile apps
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-article">
                                                    <div class="meta-date border-success">
                                    <span
                                        class="text-light-success h-40  w-40 p-3 d-flex-center b-r-50 timline_position">
                                      <i class="fa-regular fa-square-check f-s-20 mg-t-2"></i>
                                    </span>
                                                    </div>
                                                    <div class="card card-light-success content-box content-box-top">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="m-0 text-success">New Task</h6>
                                                                <span class="text-success">10 hours ago</span>
                                                            </div>
                                                            <p class="text-secondary timeline-ellipsis"> An online social media and social
                                                                networking sercice based in menlo park, califonia.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-article">
                                                    <div class="meta-date border-secondary">
                                    <span
                                        class="text-light-secondary h-40  w-40 p-3 d-flex-center b-r-50 timline_position">
                                      <i class="fa-regular fa-clock f-s-20 mg-t-2"></i>
                                    </span>
                                                    </div>
                                                    <div class="card card-light-secondary content-box content-box-bottom">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="m-0 text-secondary">New Task</h6>
                                                                <span class="text-secondary">10 hours ago</span>
                                                            </div>
                                                            <p class="text-secondary timeline-ellipsis"> A service for friends,family, and
                                                                coworkers to communcate
                                                                and stay connected through the exchange of quick, frequent messages.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-article">
                                                    <div class="meta-date border-primary">
                                    <span
                                        class="text-light-primary h-40  w-40 p-3 d-flex-center b-r-50 timline_position">
                                      <i class="fa-regular fa-circle-check f-s-20 mg-t-2"></i>
                                    </span>
                                                    </div>
                                                    <div class="card card-light-primary content-box content-box-top">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="m-0 text-primary">New Task</h6>
                                                                <span class="text-primary">10 hours ago</span>
                                                            </div>
                                                            <p class="text-secondary timeline-ellipsis"> First large-scale video sharing
                                                                website that
                                                                makes it easy to watch videos online.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-article">
                                                    <div class="meta-date border-info">
                                    <span class="text-light-info h-40  w-40 p-3 d-flex-center b-r-50 timline_position">
                                      <i class="fa-regular fa-comment-dots f-s-20 mg-t-2"></i>
                                    </span>
                                                    </div>
                                                    <div class="card card-light-info content-box content-box-bottom">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="m-0 text-info">New Task</h6>
                                                                <span class="text-info">10 hours ago</span>
                                                            </div>
                                                            <p class="text-secondary timeline-ellipsis"> Lets you effortlessly share anthing.
                                                                Post text,photos
                                                                quotes, links,music,and videos from your browser, phone, desktop, email.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-article">
                                                    <div class="meta-date border-success">
                                    <span
                                        class="text-light-success h-40  w-40 p-3 d-flex-center b-r-50 timline_position">
                                      <i class="fa-regular fa-square-check f-s-20 mg-t-2"></i>
                                    </span>
                                                    </div>
                                                    <div class="card card-light-success content-box content-box-top">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="m-0 text-success">New Task</h6>
                                                                <span class="text-success">10 hours ago</span>
                                                            </div>
                                                            <p class="text-secondary timeline-ellipsis"> The home for visual stroytelling
                                                                for everyone from celebrities, newsrooms and newsrooms and brands to teens,
                                                                musicians and anyone with a creative passion.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-article">
                                                    <div class="meta-date border-secondary">
                                    <span
                                        class="text-light-secondary h-40  w-40 p-3 d-flex-center b-r-50 timline_position">
                                      <i class="fa-regular fa-clock f-s-20 mg-t-2"></i>
                                    </span>
                                                    </div>
                                                    <div class="card card-light-secondary content-box content-box-bottom">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="m-0 text-secondary">New Task</h6>
                                                                <span class="text-secondary">10 hours ago</span>
                                                            </div>
                                                            <p class="text-secondary timeline-ellipsis"> A visual bookmarking tool that helps
                                                                you
                                                                disscore and save creative ideas.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-article">
                                                    <div class="meta-date border-primary">
                                    <span
                                        class="text-light-primary h-40  w-40 p-3 d-flex-center b-r-50 timline_position">
                                      <i class="fa-solid fa-check f-s-20 mg-t-2"></i>
                                    </span>
                                                    </div>
                                                    <div class="card card-light-primary content-box content-box-top">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <h6 class="m-0 text-primary">New Task</h6>
                                                                <span class="text-primary">10 hours ago</span>
                                                            </div>
                                                            <p class="text-secondary timeline-ellipsis"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. Quis deserunt minus ipsa qui minima! Quibusdam
                                                                possimus quia quas? Facere ea sint perspiciatis non odit nihil soluta amet
                                                                sapiente deleniti omnis.
                                                            </p>
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
                </div>
            </div>
            <!-- Timeline horizontal end -->
        </div>
        <!-- Timeline end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!--slick-file -->
<script src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>

<!-- js-->
<script src="{{asset('assets/js/timeline.js')}}"></script>

@endsection
