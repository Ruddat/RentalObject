
@extends('layout.master')
@section('title', 'Ratings')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/all.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Rating</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                              <span>
                                <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                              </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Rating</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- rating start  -->
        <div class="row">
            <!-- Controlled start -->
            <div class="col-md-6 col-xl-3">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Controlled</h5>
                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <input type="radio" id="star5" name="rating" value="5">
                            <label class="star" for="star5"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star4" name="rating" value="4">
                            <label class="star" for="star4"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star3" name="rating" value="3">
                            <label class="star" for="star3"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star2" name="rating" value="2">
                            <label class="star" for="star2"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star1" name="rating" value="1">
                            <label class="star" for="star1"><span class="fa fa-star"></span></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controlled end -->

            <!-- Read Only start -->
            <div class="col-md-6 col-xl-3">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Read Only</h5>
                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <i class="ti ti-star-filled text-warning f-s-20"></i>
                            <i class="ti ti-star-filled text-warning f-s-20"></i>
                            <i class="ti ti-star-filled  f-s-20  star-filled"></i>
                            <i class="ti ti-star-filled  f-s-20 star-filled"></i>
                            <i class="ti ti-star-filled  f-s-20 star-filled"></i>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Read Only end -->

            <!-- Custom SVG start -->
            <div class="col-md-6 col-xl-3">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Custom SVG</h5>
                    </div>
                    <div class="card-body">

                        <div class="rating ">
                            <input type="radio" id="star6" name="ratings3" value="5">
                            <label class="star" for="star6"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star7" name="ratings3" value="4">
                            <label class="star" for="star7"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star8" name="ratings3" value="3">
                            <label class="star" for="star8"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star9" name="ratings3" value="2">
                            <label class="star" for="star9"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star10" name="ratings3" value="1">
                            <label class="star" for="star10"><span class="fa fa-star"></span></label>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Custom SVG end -->

            <!-- Half Star start -->
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Half star</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <div class="half-rate">
                                <input type="radio" id="rating10" name="rating" value="10"><label for="rating10" title="5 stars"></label>
                                <input type="radio" id="rating9" name="rating" value="9"><label class="half" for="rating9" title="4 1/2 stars"></label>
                                <input type="radio" id="rating8" name="rating" value="8"><label for="rating8" title="4 stars"></label>
                                <input type="radio" id="rating7" name="rating" value="7"><label class="half" for="rating7" title="3 1/2 stars"></label>
                                <input type="radio" id="rating6" name="rating" value="6"><label for="rating6" title="3 stars"></label>
                                <input type="radio" id="rating5" name="rating" value="5"><label class="half" for="rating5" title="2 1/2 stars"></label>
                                <input type="radio" id="rating4" name="rating" value="4"><label for="rating4" title="2 stars"></label>
                                <input type="radio" id="rating3" name="rating" value="3"><label class="half" for="rating3" title="1 1/2 stars"></label>
                                <input type="radio" id="rating2" name="rating" value="2"><label for="rating2" title="1 star"></label>
                                <input type="radio" id="rating1" name="rating" value="1"><label class="half" for="rating1" title="1/2 star"></label>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Half Star end -->

            <!-- Full Star start -->
            <div class="col-md-6  col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Full Star</h5>
                    </div>
                    <div class="card-body">
                        <div class="rating ">
                            <input type="radio" id="star16" name="ratings" value="16" checked>
                            <label class="star" for="star16"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star17" name="ratings" value="17" checked>
                            <label class="star" for="star17"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star18" name="ratings" value="18" checked>
                            <label class="star" for="star18"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star19" name="ratings" value="19" checked>
                            <label class="star" for="star19"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star20" name="ratings" value="20" checked>
                            <label class="star" for="star20"><span class="fa fa-star"></span></label>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Full Star end -->

            <!-- 10 stars start -->
            <div class="col-md-6  col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5>10 stars</h5>
                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <input type="radio" id="star21" name="ratings4" value="21" checked>
                            <label class="star" for="star21"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star22" name="ratings4" value="22" checked>
                            <label class="star" for="star22"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star23" name="ratings4" value="23" checked>
                            <label class="star" for="star23"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star24" name="ratings4" value="24" checked>
                            <label class="star" for="star24"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star25" name="ratings4" value="25" checked>
                            <label class="star" for="star25"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star26" name="ratings4" value="26">
                            <label class="star" for="star26"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star27" name="ratings4" value="27">
                            <label class="star" for="star27"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star28" name="ratings4" value="28">
                            <label class="star" for="star28"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star29" name="ratings4" value="29">
                            <label class="star" for="star29"><span class="fa fa-star"></span></label>
                            <input type="radio" id="star30" name="ratings4" value="30">
                            <label class="star" for="star30"><span class="fa fa-star"></span></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 10 stars end -->

            <!-- Square Rating start -->
            <div class="col-md-6  col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Square Rating</h5>
                    </div>
                    <div class="card-body">
                        <div class="boxs box-blue box-example-square d-flex-center">
                            <div class="box-body">
                                <select id="example-square" name="rating" autocomplete="off">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Square Rating end -->

            <!-- Pill Rating start -->
            <div class="col-md-6 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Pill Rating</h5>
                    </div>
                    <div class="card-body">
                        <div class="boxs box-green box-example-pill d-flex-center">
                            <div class="box-body">
                                <select id="example-pill" name="rating" autocomplete="off">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pill Rating end -->

            <!-- 1/10 Rating start -->
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>1/10 Rating</h5>
                    </div>
                    <div class="card-body">
                        <div class="boxs box-orange box-example-1to10">
                            <select id="example-1to10" name="rating" autocomplete="off">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7" selected="selected">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 1/10 Rating end -->

            <!-- Reversed Rating start -->
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Reversed Rating</h5>
                    </div>
                    <div class="card-body">
                        <div class="boxs box-green box-large box-example-reversed  p-4">
                            <div class="box-body">
                                <select id="example-reversed" name="rating" autocomplete="off">
                                    <option value="Strongly Agree">Strongly Agree</option>
                                    <option value="Agree">Agree</option>
                                    <option value="Neither Agree or Disagree" selected="selected">Neither Agree or Disagree </option>
                                    <option value="Disagree">Disagree</option>
                                    <option value="Strongly Disagree">Strongly Disagree</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Reversed Rating end -->

            <!-- Hover Feedback start -->
            <div class="col-md-6 col-xl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Hover Feedback</h5>
                    </div>
                    <div class="card-body">
                        <div class="stars_rating" id="stars_rating">
                            <div class="stars">
                                <div class="stars1 rated">★</div>
                                <div class="stars1 rated">★</div>
                                <div class="stars1 rated">★</div>
                                <div class="stars1">★</div>
                                <div class="stars1">★</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Hover Feedback end -->

            <!-- Horizontal Rating start -->
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal Rating</h5>
                    </div>
                    <div class="card-body">
                        <div class="boxs box-orange box-large box-example-horizontal d-flex-center">
                            <div class="box-body">
                                <select id="example-horizontal" name="rating" autocomplete="off">
                                    <option value="10">10</option>
                                    <option value="9">9</option>
                                    <option value="8">8</option>
                                    <option value="7">7</option>
                                    <option value="6">6</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1" selected="selected">1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Horizontal Rating end -->

            <!-- emoji rating start  -->
            <div class="col-md-6  col-xl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Emoji-Rating</h5>
                    </div>
                    <div class="card-body">
                        <div class="feedback-container">
                            <div class="emoji-container">
                                <i class="far fa-angry fa-3x"></i>
                                <i class="far fa-frown fa-3x"></i>
                                <i class="far fa-meh fa-3x"></i>
                                <i class="far fa-smile fa-3x"></i>
                                <i class="far fa-laugh fa-3x"></i>
                            </div>
                            <div class="rating-container mt-4">
                                <i class="fas fa-star fa-2x active emoji-star"></i>
                                <i class="fas fa-star fa-2x emoji-star"></i>
                                <i class="fas fa-star fa-2x emoji-star"></i>
                                <i class="fas fa-star fa-2x emoji-star"></i>
                                <i class="fas fa-star fa-2x emoji-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- emoji rating end  -->

            <!-- emoji rating progress start  -->
            <div class="col-md-6 col-xl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Emoji Progress</h5>
                    </div>
                    <div class="card-body">
                        <div class="rate-1">
                            <div class="emoji">😑</div>
                            <div class="emoji-slider">
                                <input type="range" min="0" max="9" step="1" class="accent">
                            </div>
                            <label class="text"></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- emoji rating progress end  -->
        </div>
        <!-- rating end  -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- rating-->
<script src="{{asset('assets/vendor/rating/jquery.barrating.min.js')}}"></script>

<!-- js-->
<script src="{{asset('assets/js/ratings.js')}}"></script>

@endsection
