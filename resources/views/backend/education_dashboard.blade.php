@extends('layout.master')
@section('title', 'Education Dashboard')
@section('css')

    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/apexcharts/apexcharts.css') }}">

    <!-- glight css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/glightbox/glightbox.min.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick-theme.css')}}">

@endsection
@section('main-content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-lg-4 col-xxl-3 order--3-lg">
                    <div class="card education-profile-card">
                        <div class="card-body">
                            <div class="profile-header">
                                <h5 class="header-title-text">Profile</h5>
                            </div>
                            <div class="profile-top-content">
                                <div class="h-80 w-80 d-flex-center b-r-50 overflow-hidden">
                                    <img src="{{asset('assets/images/dashboard/education/01.png')}}" alt="" class="img-fluid">
                                </div>
                                <h6 class="text-dark f-w-600 mb-0">Kari wiza</h6>
                                <p class="text-secondary f-s-13 mb-0">@Kari_wiza@001</p>
                                <div>
                                    <button type="button" class="btn btn-primary">Follow</button>
                                    <a href="{{route('profile')}}" target="_blank" role="button" class="btn btn-light-secondary">View Profile</a>
                                </div>
                                <div class="text-center">
                                    <p class="text-secondary txt-ellipsis-2 f-s-15 my-4">"Crafting a Path of Knowledge, Innovation, <br> and Excellence."</p>
                                </div>
                            </div>
                            <div class="profile-content-box">
                                <div class="profile-details">
                                    <p class="f-s-18 mb-0"><i class="ph-bold  ph-clock-countdown"></i></p>
                                    <span class="badge text-light-primary">45H</span>
                                </div>
                                <div class="profile-details">
                                    <p class="f-s-18 mb-0"><i class="ph-fill  ph-book-bookmark"></i></p>
                                    <span class="badge text-light-secondary">10</span>
                                </div>
                                <div class="profile-details">
                                    <p class="f-s-18 mb-0"><i class="ph-fill  ph-seal-check"></i></p>
                                    <span class="badge text-light-success">2K</span>
                                </div>
                                <div class="profile-details">
                                    <p class="f-s-18 mb-0"><i class="ph-fill  ph-user-circle"></i></p>
                                    <span class="badge text-light-info">34K</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 col-lg-5 col-xxl-4 order--2-lg">
                    <div class="row">
                        <div class="col-6">
                            <div class="card courses-cards card-success">
                                <div class="card-body">
                                    <i class="ph-duotone  ph-calendar-check icon-bg"></i>
                                    <span class="bg-white h-50 w-50 d-flex-center b-r-15">
                          <i class="ph-duotone  ph-calendar-check text-success f-s-24"></i>
                        </span>
                                    <div class="mt-5">
                                        <h4>2K+</h4>
                                        <p class="f-w-500 mb-0">Completed Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card courses-cards card-info">
                                <div class="card-body">
                                    <i class="ph-duotone  ph-projector-screen-chart icon-bg"></i>
                                    <span class="bg-white h-50 w-50 d-flex-center b-r-15">
                          <i class="ph-duotone  ph-projector-screen-chart text-info f-s-24"></i>
                        </span>
                                    <div class="mt-5">
                                        <h4>38+</h4>
                                        <p class="f-w-500 mb-0">Online Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card courses-cards card-primary">
                                <div class="card-body">
                                    <i class="ph-duotone  ph-graduation-cap icon-bg"></i>
                                    <span class="bg-white h-50 w-50 d-flex-center b-r-15">
                          <i class="ph-duotone  ph-graduation-cap text-primary f-s-24"></i>
                        </span>
                                    <div class="mt-5">
                                        <h4>16</h4>
                                        <p class="f-w-500 mb-0">Upcoming Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card courses-cards card-warning">
                                <div class="card-body">
                                    <i class="ph-duotone  ph-pencil-line icon-bg"></i>
                                    <span class="bg-white h-50 w-50 d-flex-center b-r-15">
                          <i class="ph-duotone  ph-pencil-line text-warning text-warning f-s-24"></i>
                        </span>
                                    <div class="mt-5">
                                        <h4>25+</h4>
                                        <p class="f-w-500 mb-0">In Progress Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- order-1-lg -->
                <div class="col-md-6 col-lg-5 order-1-lg">
                    <div class="card courses-progress-card">
                        <div class="card-body">
                            <div>
                                <h5 class="header-title-text">Courses Progress</h5>
                            </div>
                            <div class="d-flex justify-content-center align-items-center mt-3">
                                <div class="courses-progress-box">
                                    <div class="courses-progress-label">
                                        <h6 class="mb-0 text-dark"><i class="ph-fill  ph-circle f-s-14 text-primary me-2"></i>$68,200</h6>
                                        <p class="text-secondary mb-0 ms-4">Income</p>
                                    </div>
                                    <div class="courses-progress-label">
                                        <h6 class="mb-0 text-dark"><i class="ph-fill  ph-circle f-s-14 text-secondary me-2"></i>$45,587</h6>
                                        <p class="text-secondary mb-0 ms-4">Income</p>
                                    </div>
                                    <div class="courses-progress-label">
                                        <h6 class="mb-0 text-dark"><i class="ph-fill  ph-circle f-s-14 text-danger me-2"></i>$49k</h6>
                                        <p class="text-secondary mb-0 ms-4">Income</p>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div id="coursesProgress"></div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="f-s-16 text-secondary mb-0"><span class="text-success">86.90%<i
                                            class="ph-bold  ph-trend-up ms-2"></i></span> More Than last month</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="header-title-text">Recent Activity</h5>

                            <ul class="activity-list mt-3">
                                <li class="activity-list-item">
                                    <div
                                        class="h-35 w-35 d-flex-center b-r-10 overflow-hidden text-bg-secondary activity-list-avtar">
                                        <img src="{{asset('assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="activity-list-content">
                                        <h6 class="mb-0">Earl Klein</h6>
                                        <p class="mb-0 text-secondary">Paused "Fillo Design Sy"</p>
                                    </div>
                                    <div class="flex-shrink-0 align-self-start">
                                        <p class="mb-0 text-primary f-s-12 ">2 Week</p>
                                    </div>
                                </li>
                                <li class="activity-list-item">
                                    <div class="h-35 w-35 d-flex-center b-r-10 overflow-hidden text-bg-light activity-list-avtar">
                                        <img src="{{asset('assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="activity-list-content">
                                        <h6 class="mb-0">Matteo Klein</h6>
                                        <p class="mb-0 text-secondary">"Completed 'Introduction to Python Programming' course </p>
                                    </div>
                                    <div class="flex-shrink-0 align-self-start">
                                        <p class="mb-0 text-success f-s-12 ">1 Min</p>
                                    </div>
                                </li>
                                <li class="activity-list-item">
                                    <div class="h-35 w-35 d-flex-center b-r-10 overflow-hidden text-bg-dark activity-list-avtar">
                                        <img src="{{asset('assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="activity-list-content">
                                        <h6 class="mb-0">Sam Franco</h6>
                                        <p class="mb-0 text-secondary">"Joined 'Literature Appreciation Club'</p>
                                    </div>
                                    <div class="flex-shrink-0 align-self-start">
                                        <p class="mb-0 text-primary f-s-12 "> 4 hours</p>
                                    </div>
                                </li>
                                <li class="activity-list-item">
                                    <div
                                        class="h-35 w-35 d-flex-center b-r-10 overflow-hidden text-bg-secondary activity-list-avtar">
                                        <img src="{{asset('assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="activity-list-content">
                                        <h6 class="mb-0">Steve Waters</h6>
                                        <p class="mb-0 text-secondary">"Achieved 90% score in 'Advanced Mathematics Quiz' </p>
                                    </div>
                                    <div class="flex-shrink-0  align-self-start">
                                        <p class="mb-0 text-primary f-s-12 ">1 week</p>
                                    </div>
                                </li>
                                <li class="activity-list-item">
                                    <div
                                        class="h-35 w-35 d-flex-center b-r-10 overflow-hidden text-bg-secondary activity-list-avtar">
                                        <img src="{{asset('assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="activity-list-content">
                                        <h6 class="mb-0">John Mandela</h6>
                                        <p class="mb-0 text-secondary">Submitted research paper </p>
                                    </div>
                                    <div class="flex-shrink-0 align-self-start">
                                        <p class="mb-0 text-success f-s-12 ">1 Min</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- order-2-lg -->
                <div class="col-md-6 col-lg-5 col-xxl-4">
                    <div class="card lecture-schedule-card">
                        <div class="card-body">
                            <h5 class="header-title-text text-nowrap">Today's Lecture Schedule</h5>

                            <div class="lecture-schedule-tab mt-3">
                                <ul class="nav nav-tabs p-1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="mon-lecture-tab" data-bs-toggle="tab"
                                                data-bs-target="#mon-lecture-tab-pane" type="button" role="tab"
                                                aria-selected="true"> MON <span>20</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="tue-lecture-tab" data-bs-toggle="tab"
                                                data-bs-target="#tue-lecture-tab-pane" type="button" role="tab"
                                                aria-selected="false">TUE <span>21</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="wed-lecture-tab" data-bs-toggle="tab"
                                                data-bs-target="#wed-lecture-tab-pane" type="button" role="tab"
                                                aria-selected="false">WED <span>22</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="thu-lecture-tab" data-bs-toggle="tab"
                                                data-bs-target="#thu-lecture-tab-pane" type="button" role="tab"
                                                aria-selected="false">THU <span>23</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="fri-lecture-tab" data-bs-toggle="tab"
                                                data-bs-target="#fri-lecture-tab-pane" type="button" role="tab"
                                                aria-selected="false">FRI <span>24</span></button>
                                    </li>
                                </ul>
                                <div>
                                    <div class="app-timeline lecture-timeline app-scroll">
                                        <div class="timeline-text align-items-center">
                                            <p class="mb-0 me-2 timeline-time-text">9:00AM</p>

                                            <div class="app-timeline-info-text">
                                                <div class="lecture-content-box bg-light-primary">
                                                    <ul class="avatar-group">
                                                        <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light"
                                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                            <img src="{{asset('assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                                        </li>
                                                        <li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50"
                                                            data-bs-toggle="tooltip" data-bs-title="10 More">
                                                            10+
                                                        </li>
                                                    </ul>
                                                    <p class="f-s-14 f-w-600  mb-0">frontend development</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-text align-items-center">
                                            <p class="mb-0 me-2 timeline-time-text">11:00AM</p>

                                            <div class="app-timeline-info-text">
                                                <div class="lecture-content-box bg-light-success">
                                                    <ul class="avatar-group">
                                                        <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-dark b-2-light"
                                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                            <img src="{{asset('assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                                        </li>
                                                        <li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50"
                                                            data-bs-toggle="tooltip" data-bs-title="10 More">
                                                            10+
                                                        </li>
                                                    </ul>
                                                    <p class="f-s-14 f-w-600 mb-0">Principles of Economics</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-text align-items-center">
                                            <p class="mb-0 me-2 timeline-time-text">1:30PM</p>

                                            <div class="app-timeline-info-text">
                                                <div class="lecture-content-box bg-light-secondary">
                                                    <ul class="avatar-group">
                                                        <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-secondary b-2-light"
                                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                            <img src="{{asset('assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                                        </li>
                                                        <li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50"
                                                            data-bs-toggle="tooltip" data-bs-title="10 More">
                                                            25+
                                                        </li>
                                                    </ul>
                                                    <p class="f-s-14 f-w-600 mb-0">Organic Chemistry</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-text align-items-center">
                                            <p class="mb-0 me-2 timeline-time-text">3:30PM</p>

                                            <div class="app-timeline-info-text">
                                                <div class="lecture-content-box bg-light-primary">
                                                    <ul class="avatar-group">
                                                        <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-secondary b-2-light"
                                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                            <img src="{{asset('assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                                        </li>
                                                        <li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50"
                                                            data-bs-toggle="tooltip" data-bs-title="10 More">
                                                            15+
                                                        </li>
                                                    </ul>
                                                    <p class="f-s-14 f-w-600 mb-0">World History</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-text align-items-center">
                                            <p class="mb-0 me-2 timeline-time-text">4:00PM</p>

                                            <div class="app-timeline-info-text">
                                                <div class="lecture-content-box bg-light-dark">
                                                    <ul class="avatar-group">
                                                        <li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light"
                                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                            <img src="{{asset('assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                                        </li>
                                                        <li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50"
                                                            data-bs-toggle="tooltip" data-bs-title="10 More">
                                                            20+
                                                        </li>
                                                    </ul>
                                                    <p class="f-s-14 f-w-600 mb-0">Application software</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xxl-5">
                    <div class="row lecture-video-slider">
                        <div class="col-6">
                            <div class="card draggable-card">
                                <div class="card-body">
                                    <div class="box-ribbon box-left">
                                        <div class="ribbonbox ribbon-success">Best</div>
                                    </div>
                                    <div class="draggable-card-img">
                                        <a href="{{asset('assets/images/dashboard/education/video.mp4')}}" class="glightbox">
                                            <img src="{{asset('assets/images/dashboard/education/02.png')}}" class="img-fluid h-225 m-auto" alt="image">
                                            <div class="video-transparent-box">
                              <span class="bg-dark-800 h-35 w-35 d-flex-center b-r-50">
                                <i class="ph ph-play-circle f-s-18"></i>
                              </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="draggable-card-content pt-3">
                                        <h6 class="text-dark f-s-16 mb-0 mf-w-500"><span class="f-s-20 me-2">•</span>Unlocking the Power of Creativity </h6>
                                        <p class="f-s-14 text-secondary mb-0">(A Journey Through Artistic Expression.)</p>
                                        <p class="text-secondary f-s-13 mb-0 mt-2">- By <span class="text-dark text-d-underline"> Cameron.p.West</span> </p>
                                        <span class="badge text-light-primary mt-2"><i class="ph-duotone  ph-clock"></i> April 10.2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card draggable-card">
                                <div class="card-body">
                                    <div class="draggable-card-img">
                                        <a href="{{asset('assets/images/dashboard/education/video.mp4')}}" class="glightbox">
                                            <img src="{{asset('assets/images/dashboard/education/03.png')}}" class="img-fluid h-225 m-auto" alt="image">
                                            <div class="video-transparent-box">
                              <span class="bg-dark-800 h-35 w-35 d-flex-center b-r-50">
                                <i class="ph ph-play-circle f-s-18"></i>
                              </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="draggable-card-content pt-3">
                                        <h6 class="text-dark f-s-16 mb-0 mf-w-500"><span class="f-s-20 me-2">•</span>Navigating the Digital Landscape</h6>
                                        <p class="f-s-14 text-secondary mb-0">(Harnessing Technology for Tomorrow.)</p>
                                        <p class="text-secondary f-s-13 mb-0 mt-2">- By <span class="text-dark text-d-underline"> Camryn Lowe</span> </p>
                                        <span class="badge text-light-dark mt-2"><i class="ph-duotone  ph-clock"></i>Mar 18.2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card draggable-card">
                                <div class="card-body">
                                    <div class="draggable-card-img">
                                        <a href="{{asset('assets/images/dashboard/education/video.mp4')}}" class="glightbox">
                                            <img src="{{asset('assets/images/dashboard/education/04.png')}}" class="img-fluid h-225 m-auto" alt="image">
                                            <div class="video-transparent-box">
                              <span class="bg-dark-800 h-35 w-35 d-flex-center b-r-50">
                                <i class="ph ph-play-circle f-s-18"></i>
                              </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="draggable-card-content pt-3">
                                        <h6 class="text-dark f-s-16 mb-0 mf-w-500"><span class="f-s-20 me-2">•</span>The Art of Persuasion</h6>
                                        <p class="f-s-14 text-secondary mb-0">(Mastering Rhetoric for Communication.)</p>
                                        <p class="text-secondary f-s-13  mb-0 mt-2">- By <span class="text-dark text-d-underline">  Marques Hill</span> </p>
                                        <span class="badge text-light-success mt-2"><i class="ph-duotone  ph-clock"></i> Des 24.2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card draggable-card">
                                <div class="card-body">
                                    <div class="draggable-card-img">
                                        <a href="{{asset('assets/images/dashboard/education/video.mp4')}}" class="glightbox">
                                            <img src="{{asset('assets/images/dashboard/education/06.png')}}" class="img-fluid h-225 m-auto" alt="image">
                                            <div class="video-transparent-box">
                              <span class="bg-dark-800 h-35 w-35 d-flex-center b-r-50">
                                <i class="ph ph-play-circle f-s-18"></i>
                              </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="draggable-card-content pt-3">
                                        <h6 class="text-dark f-s-16 mb-0 mf-w-500"><span class="f-s-20 me-2">•</span>Sustainable Living</h6>
                                        <p class="f-s-14 text-secondary mb-0">(Dive into our Sustainable Living Crate.)</p>
                                        <p class="text-secondary f-s-13 mb-0 mt-2">- By <span class="text-dark text-d-underline"> Krystal Ringer</span> </p>
                                        <span class="badge text-light-secondary mt-2"><i class="ph-duotone  ph-clock"></i> Fed 20.2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- order-4-lg -->
                <div class="col-md-5 col-lg-3 col-xxl-4 order-4-lg">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="header-title-text">Spent Hours</h5>
                            <div class="mt-3">
                                <div id="activityHoursChart"></div>
                            </div>
                            <div class="spent-hours-content">
                                <div>
                                    <h6 class="mb-0">20H</h6>
                                    <p class="text-secondary mb-0">Time Spent</p>
                                </div>
                                <div>
                                    <h6 class="mb-0">45</h6>
                                    <p class="text-secondary mb-0">Lessons taken</p>
                                </div>
                                <div>
                                    <h6 class="mb-0">200</h6>
                                    <p class="text-secondary mb-0">Lessons remaining</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- order-3-lg -->
                <div class="col-md-7 col-lg-4 order-2-lg">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="header-title-text">Today Task</h5>
                            <div class="mt-3">
                                <div class="today-task-input">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control b-r-left" id="task-input" placeholder="Enter Your Task" aria-label="Enter Your Task">
                                        <button class="btn btn-secondary b-r-right" id="add-task">Add</button>
                                    </div>
                                </div>
                                <ul class="today-task-list app-scroll">
                                    <li>
                                        <div>
                                            <span class="task-text">Create Brand design & Logo</span>
                                        </div>
                                        <div class="task_actions">
                            <span>
                              <i class="ph-duotone  ph-note-pencil f-s-18 text-success"></i>
                            </span>
                                            <span>
                              <i class="ph-duotone  ph-trash f-s-18 text-danger"></i>
                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <span class="task-text">Create To-Do Using React js</span>
                                        </div>
                                        <div class="task_actions">
                            <span class="task-edit">
                              <i class="ph-duotone  ph-note-pencil f-s-18 text-success"></i>
                            </span>
                                            <span class="task-delete">
                              <i class="ph-duotone  ph-trash f-s-18 text-danger"></i>
                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <span class="task-text">Create Countdown Using js</span>
                                        </div>
                                        <div class="task_actions">
                            <span>
                              <i class="ph-duotone  ph-note-pencil f-s-18 text-success"></i>
                            </span>
                                            <span>
                              <i class="ph-duotone  ph-trash f-s-18 text-danger"></i>
                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <span class="task-text">Create Form Validation Page</span>
                                        </div>
                                        <div class="task_actions">
                            <span>
                              <i class="ph-duotone  ph-note-pencil f-s-18 text-success"></i>
                            </span>
                                            <span>
                              <i class="ph-duotone  ph-trash f-s-18 text-danger"></i>
                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <span class="task-text">Create Speech Detection</span>
                                        </div>
                                        <div class="task_actions">
                            <span>
                              <i class="ph-duotone  ph-note-pencil f-s-18 text-success"></i>
                            </span>
                                            <span>
                              <i class="ph-duotone  ph-trash f-s-18 text-danger"></i>
                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <span class="task-text">Create Webpage Filter</span>
                                        </div>
                                        <div class="task_actions">
                            <span>
                              <i class="ph-duotone  ph-note-pencil f-s-18 text-success"></i>
                            </span>
                                            <span>
                              <i class="ph-duotone  ph-trash f-s-18 text-danger"></i>
                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <span class="task-text">Create Note app</span>
                                        </div>
                                        <div class="task_actions">
                            <span>
                              <i class="ph-duotone  ph-note-pencil f-s-18 text-success"></i>
                            </span>
                                            <span>
                              <i class="ph-duotone  ph-trash f-s-18 text-danger"></i>
                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <span class="task-text">Create Admin</span>
                                        </div>
                                        <div class="task_actions">
                            <span>
                              <i class="ph-duotone  ph-note-pencil f-s-18 text-success"></i>
                            </span>
                                            <span>
                              <i class="ph-duotone  ph-trash f-s-18 text-danger"></i>
                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-xxl-4 order--1-lg education-courses-card">
                    <div class="row">
                        <div class="col-6 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="header-title-text">Total Courses</h5>
                                    <p class="text-secondary mb-0">Latest Update</p>
                                    <div class="d-flex justify-content-between mt-2">
                                        <h3 class="text-dark mb-0">2K+</h3>
                                        <div class="total-courses flex-grow-1">
                                            <div id="totalCourses"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="header-title-text">User Progress</h5>
                                    <p class="text-secondary mb-0">Latest Update</p>
                                    <div class="d-flex justify-content-between mt-2">
                                        <h3 class="text-dark mb-0">89%</h3>
                                        <div class="progress-user flex-grow-1">
                                            <div id="progressUser"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')

    <!-- slick-file -->
    <script src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>

    <!-- Glight js -->
    <script src="{{('assets/vendor/glightbox/glightbox.min.js')}}"></script>

    <!-- data table-->
    <script src="{{asset('assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>

    <!-- apexcharts js-->
    <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Education js-->
    <script src="{{asset('assets/js/education.js')}}"></script>

@endsection


