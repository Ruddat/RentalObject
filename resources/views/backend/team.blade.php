@extends('backend.layout.master')
@section('title', 'Team')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Team</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Team</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Team start -->
        <div class="row">
            <div class="col-12">
                <div class="tab-wrapper">
                    <ul class="tabs">
                        <li class="tab-link active" data-tab="1"><i class="ph-duotone  ph-pen-nib f-s-18 me-2"></i>Designer</li>
                        <li class="tab-link" data-tab="2"><i class="ph-duotone  ph-gear-fine f-s-18 me-2"></i>Development</li>
                        <li class="tab-link" data-tab="3"><i class="ph-duotone  ph-megaphone f-s-18 me-2"></i>Marketing</li>
                    </ul>
                </div>
                <div class="content-wrapper mt-3">
                    <div id="tab-1" class="tabs-content active">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-md-6 col-xl-4 ">
                                        <div class="card team-box-card hover-effect overflow-hidden">
                                            <div class="team-box">
                                                <img src="{{asset('backend/assets/images/team/6.jpg')}}" class="card-img-top" alt="...">
                                            </div>

                                            <div class="team-container">
                                                <div class="team-pic">
                                  <span
                                      class="bg-secondary h-80 w-80 d-flex-center b-r-50 position-relative overflow-hidden">
                                    <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid b-r-50 ">
                                  </span>
                                                </div>
                                            </div>
                                            <div class="taem-content">
                                                <div class="mb-3 mt-3">
                                                    <h5>Silene Tokyo</h5>
                                                    <p>UI/UX Designer</p>
                                                </div>
                                                <div class="team-details">
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('project_app')}}" target="_blank">Projects</a></p>
                                                        <p class="text-center">20</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('to_do')}}" target="_blank">Tasks</a></p>
                                                        <p class="text-center">15</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="#">Position</a></p>
                                                        <p class="text-center">Employee</p>
                                                    </div>
                                                </div>
                                                <p class="team-content-list text-muted  mb-3 ">Designers can be outnumbered in a team which might lead to their opinions being disregarded.
                                                    A user interface (UI) designer creates all the screens users  while using an app.
                                                </p>
                                                <div class="p-2 mb-3">
                                                    <button type="button" class="btn btn-facebook icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-facebook text-white"></i></button>
                                                    <button type="button" class="btn btn-twitter icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-twitter text-white"></i></button>
                                                    <button type="button" class="btn btn-pinterest icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-pinterest text-white"></i></button>
                                                    <button type="button" class="btn btn-whatsapp icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-whatsapp text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-6 col-xl-4 ">
                                        <div class="card team-box-card hover-effect overflow-hidden">
                                            <div class="team-box">
                                                <img src="{{asset('backend/assets/images/team/5.jpg')}}" class="card-img-top" alt="...">
                                            </div>
                                            <div class="team-container">
                                                <div class="team-pic">
                                  <span
                                      class="bg-secondary h-80 w-80 d-flex-center b-r-50 position-relative overflow-hidden">
                                    <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="" class="img-fluid b-r-50 ">
                                  </span>
                                                </div>
                                            </div>
                                            <div class="taem-content">
                                                <div class="mb-3 mt-3">
                                                    <h5>Jasmin Volkman</h5>
                                                    <p>Web Designer</p>
                                                </div>
                                                <div class="team-details">
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('project_app')}}" target="_blank">Projects</a></p>
                                                        <p class="text-center">25</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('to_do')}}" target="_blank">Tasks</a></p>
                                                        <p class="text-center">15</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="#">Position</a></p>
                                                        <p class="text-center">Employee</p>
                                                    </div>
                                                </div>
                                                <p class="team-content-list text-muted  mb-3">They may channel efforts in the right direction and even change the entire thought processDesigning graphic user interface elements,  menus, tabs and widgets.</p>
                                                <div class="p-2 mb-3">
                                                    <button type="button" class="btn btn-facebook icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-facebook text-white"></i></button>
                                                    <button type="button" class="btn btn-twitter icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-twitter text-white"></i></button>
                                                    <button type="button" class="btn btn-pinterest icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-pinterest text-white"></i></button>
                                                    <button type="button" class="btn btn-whatsapp icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-whatsapp text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-6 col-xl-4 ">
                                        <div class="card team-box-card hover-effect overflow-hidden">
                                            <div class="team-box">
                                                <img src="{{asset('backend/assets/images/team/2.jpg')}}" class="card-img-top" alt="...">
                                            </div>
                                            <div class="team-container">
                                                <div class="team-pic">
                                  <span
                                      class="bg-secondary h-80 w-80 d-flex-center b-r-50 position-relative overflow-hidden">
                                    <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="" class="img-fluid b-r-50 ">
                                  </span>
                                                </div>
                                            </div>
                                            <div class="taem-content">
                                                <div class="mb-3 mt-3">
                                                    <h5>Aliya Robel</h5>
                                                    <p>Web Designer</p>
                                                </div>
                                                <div class="team-details">
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('project_app')}}" target="_blank">Projects</a></p>
                                                        <p class="text-center">40</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('to_do')}}" target="_blank">Tasks</a></p>
                                                        <p class="text-center">35</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="#">Position</a></p>
                                                        <p class="text-center"> Manager</p>
                                                    </div>
                                                </div>
                                                <p class="team-content-list text-muted  mb-3 ">They are the best at curing blues or depression. And, they are much cheaper and faster than
                                                    structures and the code that forms these, web designers tend to focus on the visual.
                                                </p>
                                                <div class="p-2 mb-3">
                                                    <button type="button" class="btn btn-facebook icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-facebook text-white"></i></button>
                                                    <button type="button" class="btn btn-twitter icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-twitter text-white"></i></button>
                                                    <button type="button" class="btn btn-pinterest icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-pinterest text-white"></i></button>
                                                    <button type="button" class="btn btn-whatsapp icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-whatsapp text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-6 col-xl-4 ">
                                        <div class="card team-box-card hover-effect overflow-hidden">
                                            <div class="team-box">
                                                <img src="{{asset('backend/assets/images/team/1.jpg')}}" class="card-img-top" alt="...">
                                            </div>
                                            <div class="team-container">
                                                <div class="team-pic">
                                  <span
                                      class="bg-secondary h-80 w-80 d-flex-center b-r-50 position-relative overflow-hidden">
                                    <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid b-r-50 ">
                                  </span>
                                                </div>
                                            </div>
                                            <div class="taem-content">
                                                <div class="mb-3 mt-3">
                                                    <h5>Lexus Toy</h5>
                                                    <p>XD Designer</p>
                                                </div>
                                                <div class="team-details">
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('project_app')}}" target="_blank">Projects</a></p>
                                                        <p class="text-center">20</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('to_do')}}" target="_blank">Tasks</a></p>
                                                        <p class="text-center">15</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="#">Position</a></p>
                                                        <p class="text-center">Employee</p>
                                                    </div>
                                                </div>
                                                <p class="team-content-list text-muted  mb-3">Understand the tasks and goals change  of users through user research and empathetic design.
                                                    Finding a skilled UX designer can mean the difference between selling the next.
                                                </p>
                                                <div class="p-2 mb-3">
                                                    <button type="button" class="btn btn-facebook icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-facebook text-white"></i></button>
                                                    <button type="button" class="btn btn-twitter icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-twitter text-white"></i></button>
                                                    <button type="button" class="btn btn-pinterest icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-pinterest text-white"></i></button>
                                                    <button type="button" class="btn btn-whatsapp icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-whatsapp text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-6 col-xl-4 ">
                                        <div class="card team-box-card hover-effect overflow-hidden">
                                            <div class="team-box">
                                                <img src="{{asset('backend/assets/images/team/3.jpg')}}" class="card-img-top" alt="...">
                                            </div>
                                            <div class="team-container">
                                                <div class="team-pic">
                                  <span
                                      class="bg-secondary h-80 w-80 d-flex-center b-r-50 position-relative overflow-hidden">
                                    <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt="" class="img-fluid b-r-50 ">
                                  </span>
                                                </div>
                                            </div>
                                            <div class="taem-content">
                                                <div class="mb-3 mt-3">
                                                    <h5>Arianna Feeney</h5>
                                                    <p>Designer</p>
                                                </div>
                                                <div class="team-details">
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('project_app')}}" target="_blank">Projects</a></p>
                                                        <p class="text-center">50</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('to_do')}}" target="_blank">Tasks</a></p>
                                                        <p class="text-center">100</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="#">Position</a></p>
                                                        <p class="text-center">Manager</p>
                                                    </div>
                                                </div>
                                                <p class=" team-content-list text-muted  mb-3">Make the tool do the work – fit the solution to the user, not the other way around through user
                                                    This user experience designer job description template can help you create .
                                                </p>
                                                <div class="p-2 mb-3">
                                                    <button type="button" class="btn btn-facebook icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-facebook text-white"></i></button>
                                                    <button type="button" class="btn btn-twitter icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-twitter text-white"></i></button>
                                                    <button type="button" class="btn btn-pinterest icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-pinterest text-white"></i></button>
                                                    <button type="button" class="btn btn-whatsapp icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-whatsapp text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-6 col-xl-4 ">
                                        <div class="card team-box-card hover-effect overflow-hidden">
                                            <div class="team-box">
                                                <img src="{{asset('backend/assets/images/team/5.jpg')}}" class="card-img-top" alt="...">
                                            </div>
                                            <div class="team-container">
                                                <div class="team-pic">
                                  <span
                                      class="bg-secondary h-80 w-80 d-flex-center b-r-50 position-relative overflow-hidden">
                                    <img src="{{asset('backend/assets/images/avtar/15.png')}}" alt="" class="img-fluid b-r-50 ">
                                  </span>
                                                </div>
                                            </div>
                                            <div class="taem-content">
                                                <div class="mb-3 mt-3">
                                                    <h5>Jerrod Beahan</h5>
                                                    <p>Figma Designer</p>
                                                </div>
                                                <div class="team-details">
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('project_app')}}" target="_blank">Projects</a></p>
                                                        <p class="text-center">20</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('to_do')}}" target="_blank">Tasks</a></p>
                                                        <p class="text-center">15</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="#">Position</a></p>
                                                        <p class="text-center">Employee</p>
                                                    </div>
                                                </div>
                                                <p class=" team-content-list text-muted  mb-3">Develop UI mockups and prototypes that clearly illustrate how sites function and look that.
                                                    Understand product specifications and user psychology. Develop UI mockups.
                                                </p>
                                                <div class="p-2 mb-3">
                                                    <button type="button" class="btn btn-facebook icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-facebook text-white"></i></button>
                                                    <button type="button" class="btn btn-twitter icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-twitter text-white"></i></button>
                                                    <button type="button" class="btn btn-pinterest icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-pinterest text-white"></i></button>
                                                    <button type="button" class="btn btn-whatsapp icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-whatsapp text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tabs-content">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card team-box-card hover-effect overflow-hidden">
                                            <div class="team-box">
                                                <img src="{{asset('backend/assets/images/team/2.jpg')}}" class="card-img-top" alt="...">
                                            </div>
                                            <div class="team-container">
                                                <div class="team-pic">
                                  <span
                                      class="bg-secondary h-80 w-80 d-flex-center b-r-50 position-relative overflow-hidden">
                                    <img src="{{asset('backend/assets/images/avtar/16.png')}}" alt="" class="img-fluid b-r-50 ">
                                  </span>
                                                </div>
                                            </div>
                                            <div class="taem-content">
                                                <div class="mb-3 mt-3">
                                                    <h5>Lacy Lehner</h5>
                                                    <p>Web Developer</p>
                                                </div>
                                                <div class="team-details">
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('project_app')}}" target="_blank">Projects</a></p>
                                                        <p class="text-center">20</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('to_do')}}" target="_blank">Tasks</a></p>
                                                        <p class="text-center">15</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="#">Position</a></p>
                                                        <p class="text-center">Developer</p>
                                                    </div>
                                                </div>
                                                <p class=" team-content-list text-muted  mb-3">Designing and building responsive and mobile-friendly websites optimised for different devices
                                                    Develops high level, detailed storyboards, mock-ups, and prototypes.
                                                </p>
                                                <div class="p-2 mb-3">
                                                    <button type="button" class="btn btn-facebook icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-facebook text-white"></i></button>
                                                    <button type="button" class="btn btn-twitter icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-twitter text-white"></i></button>
                                                    <button type="button" class="btn btn-pinterest icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-pinterest text-white"></i></button>
                                                    <button type="button" class="btn btn-whatsapp icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-whatsapp text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card team-box-card hover-effect overflow-hidden">
                                            <div class="team-box">
                                                <img src="{{asset('backend/assets/images/team/1.jpg')}}" class="card-img-top" alt="...">
                                            </div>
                                            <div class="team-container">
                                                <div class="team-pic">
                                  <span
                                      class="bg-secondary h-80 w-80 d-flex-center b-r-50 position-relative overflow-hidden">
                                    <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="" class="img-fluid b-r-50 ">
                                  </span>
                                                </div>
                                            </div>
                                            <div class="taem-content">
                                                <div class="mb-3 mt-3">
                                                    <h5>Mark Feeney</h5>
                                                    <p>React Developer</p>
                                                </div>
                                                <div class="team-details">
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('project_app')}}" target="_blank">Projects</a></p>
                                                        <p class="text-center">20</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('to_do')}}" target="_blank">Tasks</a></p>
                                                        <p class="text-center">15</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="#">Position</a></p>
                                                        <p class="text-center">Manager</p>
                                                    </div>
                                                </div>
                                                <p class=" team-content-list text-muted  mb-3">A React developer is responsible for the design and implementation of user interfaces (UIs)
                                                    Develops high level, detailed storyboards, mock-ups, and prototypes.
                                                </p>
                                                <div class="p-2 mb-3">
                                                    <button type="button" class="btn btn-facebook icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-facebook text-white"></i></button>
                                                    <button type="button" class="btn btn-twitter icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-twitter text-white"></i></button>
                                                    <button type="button" class="btn btn-pinterest icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-pinterest text-white"></i></button>
                                                    <button type="button" class="btn btn-whatsapp icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-whatsapp text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card team-box-card hover-effect overflow-hidden">
                                            <div class="team-box">
                                                <img src="{{asset('backend/assets/images/team/6.jpg')}}" class="card-img-top" alt="...">
                                            </div>
                                            <div class="team-container">
                                                <div class="team-pic">
                                  <span
                                      class="bg-secondary h-80 w-80 d-flex-center b-r-50 position-relative overflow-hidden">
                                    <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid b-r-50 ">
                                  </span>
                                                </div>
                                            </div>
                                            <div class="taem-content">
                                                <div class="mb-3 mt-3">
                                                    <h5>Jasmin Volkman</h5>
                                                    <p>PHP Developer</p>
                                                </div>
                                                <div class="team-details">
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('project_app')}}" target="_blank">Projects</a></p>
                                                        <p class="text-center">20</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('to_do')}}" target="_blank">Tasks</a></p>
                                                        <p class="text-center">15</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="#">Developer</a></p>
                                                        <p class="text-center">Employee</p>
                                                    </div>
                                                </div>
                                                <p class=" team-content-list text-muted  mb-3">A PHP Developer writes beautiful, fast PHP to a high standard, in a timely and scalable way
                                                    and support the front-end developers by integrating their work with.
                                                </p>
                                                <div class="p-2 mb-3">
                                                    <button type="button" class="btn btn-facebook icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-facebook text-white"></i></button>
                                                    <button type="button" class="btn btn-twitter icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-twitter text-white"></i></button>
                                                    <button type="button" class="btn btn-pinterest icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-pinterest text-white"></i></button>
                                                    <button type="button" class="btn btn-whatsapp icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-whatsapp text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card team-box-card hover-effect overflow-hidden">
                                            <div class="team-box">
                                                <img src="{{asset('backend/assets/images/team/5.jpg')}}" class="card-img-top" alt="...">
                                            </div>
                                            <div class="team-container">
                                                <div class="team-pic">
                                  <span
                                      class="bg-secondary h-80 w-80 d-flex-center b-r-50 position-relative overflow-hidden">
                                  <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="" class="img-fluid b-r-50 ">
                                </span>
                                                </div>
                                            </div>
                                            <div class="taem-content">
                                                <div class="mb-3 mt-3">
                                                    <h5>Elliot Hegmann</h5>
                                                    <p>Node js Developer</p>
                                                </div>
                                                <div class="team-details">
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('project_app')}}" target="_blank">Projects</a></p>
                                                        <p class="text-center">20</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('to_do')}}" target="_blank">Tasks</a></p>
                                                        <p class="text-center">15</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="#">Position</a></p>
                                                        <p class="text-center">Manager</p>
                                                    </div>
                                                </div>
                                                <p class=" team-content-list text-muted  mb-3">A Node.js developer is responsible for writing server-side web application logic the design
                                                    Writing a good job description and advertisement for a Node.js developer.
                                                </p>
                                                <div class="p-2 mb-3">
                                                    <button type="button" class="btn btn-facebook icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-facebook text-white"></i></button>
                                                    <button type="button" class="btn btn-twitter icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-twitter text-white"></i></button>
                                                    <button type="button" class="btn btn-pinterest icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-pinterest text-white"></i></button>
                                                    <button type="button" class="btn btn-whatsapp icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-whatsapp text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card team-box-card hover-effect overflow-hidden">
                                            <div class="team-box">
                                                <img src="{{asset('backend/assets/images/team/3.jpg')}}" class="card-img-top" alt="...">
                                            </div>
                                            <div class="team-container">
                                                <div class="team-pic">
                                  <span
                                      class="bg-secondary h-80 w-80 d-flex-center b-r-50 position-relative overflow-hidden">
                                  <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="" class="img-fluid b-r-50 ">
                                </span>
                                                </div>
                                            </div>
                                            <div class="taem-content">
                                                <div class="mb-3 mt-3">
                                                    <h5>Lauryn Reilly</h5>
                                                    <p>Full Stack Developer</p>
                                                </div>
                                                <div class="team-details">
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('project_app')}}" target="_blank">Projects</a></p>
                                                        <p class="text-center">20</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('to_do')}}" target="_blank">Tasks</a></p>
                                                        <p class="text-center">15</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="#">Position</a></p>
                                                        <p class="text-center">Employee</p>
                                                    </div>
                                                </div>
                                                <p class=" team-content-list text-muted  mb-3">This article will provide you with a sample Full Stack Developer job description sample that help.
                                                    hey design front-end website architecture and work closely Graphic.
                                                </p>
                                                <div class="p-2 mb-3">
                                                    <button type="button" class="btn btn-facebook icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-facebook text-white"></i></button>
                                                    <button type="button" class="btn btn-twitter icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-twitter text-white"></i></button>
                                                    <button type="button" class="btn btn-pinterest icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-pinterest text-white"></i></button>
                                                    <button type="button" class="btn btn-whatsapp icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-whatsapp text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tabs-content">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card team-box-card hover-effect overflow-hidden">
                                            <div class="team-box">
                                                <img src="{{asset('backend/assets/images/team/6.jpg')}}" class="card-img-top" alt="...">
                                            </div>
                                            <div class="team-container">
                                                <div class="team-pic">
                                  <span
                                      class="bg-secondary h-80 w-80 d-flex-center b-r-50 position-relative overflow-hidden">
                                    <img src="{{asset('backend/assets/images/avtar/woman.jpg')}}" alt="" class="img-fluid b-r-50 ">
                                  </span>
                                                </div>
                                            </div>
                                            <div class="taem-content">
                                                <div class="mb-3 mt-3">
                                                    <h5>Jayda Ferry</h5>
                                                    <p>Marketing Management</p>
                                                </div>
                                                <div class="team-details">
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('project_app')}}" target="_blank">Projects</a></p>
                                                        <p class="text-center">20</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('to_do')}}" target="_blank">Tasks</a></p>
                                                        <p class="text-center">15</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="#">Position</a></p>
                                                        <p class="text-center">Manager</p>
                                                    </div>
                                                </div>
                                                <p class=" team-content-list text-muted  mb-3">The Marketing Development Manager builds a customer base for the food products within assigned.
                                                    company to ensure website applications collaborate well with their.
                                                </p>
                                                <div class="p-2 mb-3">
                                                    <button type="button" class="btn btn-facebook icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-facebook text-white"></i></button>
                                                    <button type="button" class="btn btn-twitter icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-twitter text-white"></i></button>
                                                    <button type="button" class="btn btn-pinterest icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-pinterest text-white"></i></button>
                                                    <button type="button" class="btn btn-whatsapp icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-whatsapp text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card team-box-card hover-effect overflow-hidden">
                                            <div class="team-box">
                                                <img src="{{asset('backend/assets/images/team/5.jpg')}}" class="card-img-top" alt="...">
                                            </div>
                                            <div class="team-container">
                                                <div class="team-pic">
                                  <span
                                      class="bg-secondary h-80 w-80 d-flex-center b-r-50 position-relative overflow-hidden">
                                    <img src="{{asset('backend/assets/images/avtar/10.png')}}" alt="" class="img-fluid b-r-50 ">
                                  </span>
                                                </div>
                                            </div>
                                            <div class="taem-content">
                                                <div class="mb-3 mt-3">
                                                    <h5>Liya Tokyo</h5>
                                                    <p>CEO</p>
                                                </div>
                                                <div class="team-details">
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('project_app')}}" target="_blank">Projects</a></p>
                                                        <p class="text-center">20</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('to_do')}}" target="_blank">Tasks</a></p>
                                                        <p class="text-center">15</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="#">Position</a></p>
                                                        <p class="text-center">CEO</p>
                                                    </div>
                                                </div>
                                                <p class=" team-content-list text-muted mb-3">Manage overall operations and make major decisions affecting the organization customer make.
                                                    User authentication and authorization between multiple systems.
                                                </p>
                                                <div class="p-2 mb-3">
                                                    <button type="button" class="btn btn-facebook icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-facebook text-white"></i></button>
                                                    <button type="button" class="btn btn-twitter icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-twitter text-white"></i></button>
                                                    <button type="button" class="btn btn-pinterest icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-pinterest text-white"></i></button>
                                                    <button type="button" class="btn btn-whatsapp icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-whatsapp text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card team-box-card hover-effect overflow-hidden">
                                            <div class="team-box">
                                                <img src="{{asset('backend/assets/images/team/2.jpg')}}" class="card-img-top" alt="...">
                                            </div>
                                            <div class="team-container">
                                                <div class="team-pic">
                                  <span
                                      class="bg-secondary h-80 w-80 d-flex-center b-r-50 position-relative overflow-hidden">
                                  <img src="{{asset('backend/assets/images/avtar/12.png')}}" alt="" class="img-fluid b-r-50 ">
                                </span>
                                                </div>
                                            </div>
                                            <div class="taem-content">
                                                <div class="mb-3 mt-3">
                                                    <h5>Elise Baumbach</h5>
                                                    <p>Marketing Management</p>
                                                </div>
                                                <div class="team-details">
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('project_app')}}" target="_blank">Projects</a></p>
                                                        <p class="text-center">20</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="{{route('to_do')}}" target="_blank">Tasks</a></p>
                                                        <p class="text-center">15</p>
                                                    </div>
                                                    <div class="taem-contentbox">
                                                        <p class="f-w-500"><a href="#">Position</a></p>
                                                        <p class="text-center">Employee</p>
                                                    </div>
                                                </div>
                                                <p class=" team-content-list text-muted  mb-3">She works with business part in the assign market to promote the products main distribution business.
                                                    Creating database schemas that represent and support business.
                                                </p>
                                                <div class="p-2 mb-3">
                                                    <button type="button" class="btn btn-facebook icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-facebook text-white"></i></button>
                                                    <button type="button" class="btn btn-twitter icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-twitter text-white"></i></button>
                                                    <button type="button" class="btn btn-pinterest icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-pinterest text-white"></i></button>
                                                    <button type="button" class="btn btn-whatsapp icon-btn b-r-22 me-2"><i
                                                            class="ti ti-brand-whatsapp text-white"></i></button>
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
        <!-- Team end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- js -->
<script src="{{asset('backend/assets/js/team.js')}}"></script>
@endsection
