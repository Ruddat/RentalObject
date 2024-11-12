@extends('layout.master')
@section('title', 'Animation')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Animation</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                            <span>
                              <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Animation</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <div class="row">
            <!-- example start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Where can use? some example ..!</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                            <img src="{{asset('assets/images/avtar/2.png')}}" alt=""
                                                 class="img-fluid animate__pulse animate__animated animate__infinite animate__faster">
                                        </div>
                                        <span class="bg-secondary h-45 w-45 d-flex-center b-r-50 position-relative">
                            <img src="{{asset('assets/images/avtar/1.png')}}" alt="" class="img-fluid b-r-50">
                            <span
                                class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle animate__animated animate__zoomIn animate__infinite animate__fast"></span>
                          </span>
                                        <span class="bg-secondary h-45 w-45 d-flex-center b-r-50 position-relative">
                            <img src="{{asset('assets/images/avtar/6.png')}}" alt="" class="img-fluid b-r-50">
                            <span
                                class="position-absolute top-10 start-40 translate-middle d-flex-center bg-danger border border-light rounded-circle text-center h-20 w-20 f-s-10">
                              <i
                                  class="ti ti-message-circle animate__animated animate__heartBeat animate__infinite animate__fast"></i>
                            </span>
                          </span>
                                        <span class="text-outline-primary h-45 w-45 d-flex-center b-r-50">
                            <i
                                class="ti ti-bell-ringing animate__animated animate__rubberBand animate__infinite animate__fast"></i>
                          </span>
                                        <button type="button" class="btn btn-success btn-lg"> Submit <i
                                                class="ti ti-chevrons-right animate__animated animate__fadeOutRight  animate__infinite animate__fast"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-lg">
                                            <i
                                                class="ti ti-trash animate__animated animate__bounceIn  animate__infinite animate__fast"></i>
                                            Delete </button>
                                        <button type="button" class="btn btn-primary btn-lg">
                                            <i
                                                class="ti ti-download animate__animated animate__bounceInDown  animate__infinite animate__slow"></i>
                                            Download </button>
                                        <button type="button" class="btn btn-warning btn-lg"> Upload <i
                                                class="ti ti-upload animate__animated animate__fadeOutRight  animate__infinite animate__fast"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- example end -->
            <div class="col-12">
                <div class="animation-blocks" data-masonry='{"percentPosition": true }'>
                    <!-- Attention seekers start -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#attention-seekers" aria-expanded="false">Attention seekers</a>
                        </div>
                        <div class="collapse  card-body show px-4" id="attention-seekers">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="bounce"> bounce</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="flash"> flash</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="pulse"> pulse</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="rubberBand"> rubberBand</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="shakeX"> shakeX</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="shakeY"> shakeY</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="headShake"> headShake</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="swing"> swing</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="tada"> tada</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="wobble"> wobble</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="jello"> jello</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="heartBeat"> heartBeat</a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- Attention seekers end -->
                    <!-- Back entrances start -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#back-entrances" aria-expanded="false">
                                Back entrances
                            </a>
                        </div>
                        <div class="collapse card-body show" id="back-entrances">
                            <ul>
                                <li class="d-flex flex-wrap gap-3">
                                    <a href="#" class="btn btn-light-primary" data-ani="backInDown"> backInDown</a>
                                    <a href="#" class="btn btn-light-primary" data-ani="backInLeft"> backInLeft</a>
                                    <a href="#" class="btn btn-light-primary" data-ani="backInRight"> backInRight</a>
                                    <a href="#" class="btn btn-light-primary" data-ani="backInUp"> backInUp</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Back entrances end -->
                    <!-- Back exits strat -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#back-exits" aria-expanded="false">
                                Back exits
                            </a>
                        </div>
                        <div class="collapse card-body show" id="back-exits">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="backOutDown"> backOutDown</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="backOutLeft"> backOutLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="backOutRight"> backOutRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="backOutUp"> backOutUp</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Back exits end -->
                    <!-- Bouncing entrances start -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#bouncing-entrances" aria-expanded="false">
                                Bouncing entrances
                            </a>
                        </div>
                        <div class="collapse card-body show" id="bouncing-entrances">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="bounceIn"> bounceIn</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="bounceInDown"> bounceInDown</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="bounceInLeft"> bounceInLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="bounceInRight"> bounceInRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="bounceInUp"> bounceInUp</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Bouncing entrances end -->
                    <!-- Bouncing exits start -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#bouncing-exits" aria-expanded="false">
                                Bouncing exits
                            </a>
                        </div>
                        <div class="collapse card-body show" id="bouncing-exits">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="bounceOut"> bounceOut</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="bounceOutDown"> bounceOutDown</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="bounceOutLeft"> bounceOutLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="bounceOutRight"> bounceOutRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="bounceOutUp"> bounceOutUp</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Bouncing exits end -->
                    <!-- Fading entrances start -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#fading-entrances" aria-expanded="false">
                                Fading entrances
                            </a>
                        </div>
                        <div class="collapse card-body show" id="fading-entrances">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeIn"> fadeIn</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeInDown"> fadeInDown</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeInDownBig"> fadeInDownBig</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeInLeft"> fadeInLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeInLeftBig"> fadeInLeftBig</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeInRight"> fadeInRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeInRightBig"> fadeInRightBig</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeInUp"> fadeInUp</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeInUpBig"> fadeInUpBig</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeInTopLeft"> fadeInTopLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeInTopRight"> fadeInTopRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeInBottomLeft"> fadeInBottomLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeInBottomRight">
                                            fadeInBottomRight</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Fading entrances end -->
                    <!-- Fading exits start -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#fading-exits" aria-expanded="false">
                                Fading exits
                            </a>
                        </div>
                        <div class="collapse card-body show" id="fading-exits">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeOut"> fadeOut</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeOutDown"> fadeOutDown</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeOutDownBig"> fadeOutDownBig</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeOutLeft"> fadeOutLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeOutLeftBig"> fadeOutLeftBig</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeOutRight"> fadeOutRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeOutRightBig"> fadeOutRightBig</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeOutUp"> fadeOutUp</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeOutUpBig"> fadeOutUpBig</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeOutTopLeft"> fadeOutTopLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeOutTopRight"> fadeOutTopRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeOutBottomRight">
                                            fadeOutBottomRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="fadeOutBottomLeft">
                                            fadeOutBottomLeft</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Fading exits end -->
                    <!-- Flippers start -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#flippers" aria-expanded="false">
                                Flippers
                            </a>
                        </div>
                        <div class="collapse card-body show" id="flippers">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="flip"> flip</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="flipInX"> flipInX</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="flipInY"> flipInY</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="flipOutX"> flipOutX</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="flipOutY"> flipOutY</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Flippers end -->
                    <!-- Lightspeed start -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#lightspeed" aria-expanded="false">
                                Lightspeed
                            </a>
                        </div>
                        <div class="collapse card-body show" id="lightspeed">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="lightSpeedInRight">
                                            lightSpeedInRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="lightSpeedInLeft"> lightSpeedInLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="lightSpeedOutRight">
                                            lightSpeedOutRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="lightSpeedOutLeft">
                                            lightSpeedOutLeft</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Lightspeed end -->
                    <!-- Rotating entrances start -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#rotating-entrances" aria-expanded="false">
                                Rotating entrances
                            </a>
                        </div>
                        <div class="collapse card-body show" id="rotating-entrances">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="rotateIn"> rotateIn</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="rotateInDownLeft"> rotateInDownLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="rotateInDownRight">
                                            rotateInDownRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="rotateInUpLeft"> rotateInUpLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="rotateInUpRight"> rotateInUpRight</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Rotating entrances end -->
                    <!-- Rotating exits start -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#rotating-exits" aria-expanded="false">
                                Rotating exits
                            </a>
                        </div>
                        <div class="collapse card-body show" id="rotating-exits">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="rotateOut"> rotateOut</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="rotateOutDownLeft">
                                            rotateOutDownLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="rotateOutDownRight">
                                            rotateOutDownRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="rotateOutUpLeft"> rotateOutUpLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="rotateOutUpRight"> rotateOutUpRight</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Rotating exits end -->
                    <!-- Specials start -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#specials" aria-expanded="false">
                                Specials
                            </a>
                        </div>
                        <div class="collapse card-body show" id="specials">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="hinge"> hinge</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="jackInTheBox"> jackInTheBox</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="rollIn"> rollIn</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="rollOut"> rollOut</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Specials end -->
                    <!-- Zooming entrances start -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#zooming-entrances" aria-expanded="false">
                                Zooming entrances
                            </a>
                        </div>
                        <div class="collapse card-body show" id="zooming-entrances">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="zoomIn"> zoomIn</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="zoomInDown"> zoomInDown</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="zoomInLeft"> zoomInLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="zoomInRight"> zoomInRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="zoomInUp"> zoomInUp</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#zooming-exits" aria-expanded="false">
                                Zooming entrances
                            </a>
                        </div>
                        <div class="collapse card-body show" id="zooming-exits">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="zoomOut"> zoomOut</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="zoomOutDown"> zoomOutDown</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="zoomOutLeft"> zoomOutLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="zoomOutRight"> zoomOutRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="zoomOutUp"> zoomOutUp</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Zooming entrances end -->
                    <!-- Sliding entrances start -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#sliding-entrances" aria-expanded="false">
                                Sliding entrances
                            </a>
                        </div>
                        <div class="collapse card-body show" id="sliding-entrances">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="slideInDown"> slideInDown</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="slideInLeft"> slideInLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="slideInRight"> slideInRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="slideInUp"> slideInUp</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sliding entrances end -->
                    <!-- Sliding exits start -->
                    <div class="card cheatsheet-card animation-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-center f-s-18 f-w-500 rounded-bottom-0 py-2"
                               data-bs-toggle="collapse" href="#sliding-exits" aria-expanded="false">
                                Sliding exits
                            </a>
                        </div>
                        <div class="collapse card-body show" id="sliding-exits">
                            <ul>
                                <li>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#" class="btn btn-light-primary" data-ani="slideOutDown"> slideOutDown</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="slideOutLeft"> slideOutLeft</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="slideOutRight"> slideOutRight</a>
                                        <a href="#" class="btn btn-light-primary" data-ani="slideOutUp"> slideOutUp</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sliding exits end -->
                </div>
            </div>
            <!-- How to use start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>How to use</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <h6> By adding clases </h6>
                                                <p>Add the class <code>animate__animated</code> to an element, along with any of the
                                                    animation names (don't forget the <code>animate__</code> prefix!): </p>
                                                <p>
                                                    <code> &lt;h5&gt; class="animate__animated animate__bounce">An animated element &lt;/h5&gt; </code>
                                                </p>
                                                <p class="fw-600 ms-3 mt-3">Utility Classes </p>
                                                <div class="ms-4">
                                                    <p>Animate.css provides the following delays:</p>
                                                    <code>animate__delay-2s, animate__delay-3s, animate__delay-4s, animate__delay-5s</code>
                                                    <p class="mt-2">Slow, slower, fast, and Faster classes</p>
                                                    <code>animate__slow, animate__slower, animate__fast, animate__faster</code>
                                                    <p class="mt-2">Repeating classes</p>
                                                    <code>animate__repeat-1, animate__repeat-2, animate__repeat-3, animate__infinite</code>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <h6> Using @keyframes</h6>
                                                <p>Even though the library provides you a few helper classes like the
                                                    <code>animated</code> class to get you up running quickly, you can directly use the
                                                    provided animations <code>keyframes</code>. This provides a flexible way to use
                                                    Animate.css with your current projects without having to refactor your HTML code.
                                                </p>
                                                <p class="fw-500">Example:</p>
                                                <p>
                                                    <code
                                                        class="d-flex flex-column"> .my-element { <span> display: inline-block; </span><span> margin: 0 0.5rem; </span><span> animation: bounce; /* referring directly to the animation's @keyframe declaration */ </span><span> animation-duration: 2s; /* don't forget to set a duration! */ </span>} </code>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-sm-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <h6> CSS Custom Properties (CSS Variables) </h6>
                                                <p>Animate.css uses custom properties (also known as CSS variables) to define the
                                                    animation's duration, delay, and iterations. This makes Animate.css very flexible and
                                                    customizable. Need to change an animation duration? Just set a new value globally or
                                                    locally.</p>
                                                <p class="fw-500">Example:</p>
                                                <p>
                                                    <code class="d-flex flex-column"> /* This only changes this particular animation duration */ <span> .animate__animated.animate__bounce { </span><span> --animate-duration: 2s; </span> }
                                                        <span> </span><span> /* This changes all the animations globally */ </span><span> :root { </span><span> --animate-duration: 800ms; </span><span> --animate-delay: 0.9s; </span><span> } </span>
                                                    </code>
                                                </p>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <div class="col-6"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- How to use end -->

        </div>
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- masonry js-->
    <script src="{{asset('assets/vendor/masonry/masonry.pkgd.min.js')}}"></script>

    <!-- animation page js-->
    <script src="{{asset('assets/js/animation.js')}}"></script>
@endsection
