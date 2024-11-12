@extends('layout.master')
@section('title', 'Calendar')
@section('css')
    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick-theme.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Calendar</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Calendar</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <div class="row m-1 calendar app-fullcalender">
            <!-- Draggable Events start -->
            <div class="col-xxl-3">
                <div class="row">
                    <div class="col-md-6 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Draggable Events</h5>
                            </div>
                            <div class="card-body ">
                                <div id='events-list'>
                                    <div class='list-event event-primary' data-class="event-primary"><i
                                            class="ti ti-briefcase"></i> Meeting Time</div>

                                    <div class='list-event event-success' data-class="event-success"><i class="ti ti-photo"></i>
                                        Holiday</div>

                                    <div class='list-event event-warning' data-class="event-warning"><i class="ti ti-plane"></i>
                                        Tour Event Planning</div>

                                    <div class='list-event event-info' data-class="event-info"><i class="ti ti-cake"></i> Birthday
                                        Event</div>

                                    <div class='list-event event-secondary' data-class="event-secondary"><i
                                            class="ti ti-glass-full"></i> Lunch Breck</div>

                                    <div class="form-check calendar-remove-check ps-0">
                                        <input class="form-check-input mg-2" type="checkbox" id='drop-remove'>
                                        <label class="form-check-label" for="drop-remove">
                                            Remove After Drop
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Events Update List</h5>
                            </div>
                            <div class="card-body">
                                <div class="event-container slider">
                                    <div class="event-box">
                                        <h6 class="mb-0">International Women's Day</h6>
                                        <p class="mb-0 text-secondary f-s-13">
                                            Celebrated to recognize the social and political achievements of women.
                                        </p>

                                        <p class="f-s-13 text-end mb-0">
                                            <i class="ti ti-calendar-event me-1"></i>08 Mar 2024
                                        </p>
                                    </div>

                                    <div class="event-box">
                                        <h6 class="mb-0">World Book Day</h6>
                                        <p class="mb-0 text-secondary f-s-13">
                                            Celebrated to promote reading, publishing, and copyright, although in the US
                                        </p>
                                        <p class="f-s-13 text-end mb-0">
                                            <i class="ti ti-calendar-event me-1"></i>23 apr 2024
                                        </p>
                                    </div>

                                    <div class="event-box">
                                        <h6 class="mb-0">World Refugee Day</h6>
                                        <p class="mb-0 text-secondary f-s-13">
                                            Observed to honor the courage and resilience of refugees.
                                        </p>
                                        <p class="f-s-13 text-end mb-0">
                                            <i class="ti ti-calendar-event me-1"></i>20 Jun 2024
                                        </p>
                                    </div>

                                    <div class="event-box">
                                        <h6 class="mb-0">World Humanitarian Day</h6>
                                        <p class="mb-0 text-secondary f-s-13">
                                            A day to recognize humanitarian personnel and those who have lost their lives working
                                        </p>
                                        <p class="f-s-13 text-end mb-0">
                                            <i class="ti ti-calendar-event me-1"></i>19 Aug 2024
                                        </p>
                                    </div>

                                    <div class="event-box">
                                        <h6 class="mb-0">International Day of Peace</h6>
                                        <p class="mb-0 text-secondary f-s-13">
                                            World Braille Day is an international day on 4 January.!
                                        </p>
                                        <p class="f-s-13 text-end mb-0">
                                            <i class="ti ti-calendar-event me-1"></i>21 sep 2024
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Draggable Events end -->
            <div class="col-xxl-9">
                <div class="card">
                    <div class="card-body" id="mydraggable">
                        <div id='calendar' class="app-calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- slick-file -->
    <script src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>

    <!-- fullcalendar js -->
    <script src="{{asset('assets/vendor/fullcalendar/global.js')}}"></script>

    <!-- calendar js -->
    <script src="{{asset('assets/js/calendar.js')}}"></script>

@endsection
