@extends('layout.master')
@section('title', 'Badges')
@section('css')

@endsection
@section('main-content')
    <main>
        <div class="container-fluid">

            <!-- Breadcrumb start -->
            <div class="row m-1">
                <div class="col-12 ">
                    <h4 class="main-title">Badges</h4>
                    <ul class="app-line-breadcrumbs mb-3">
                        <li class="">
                            <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
                      </span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#" class="f-s-14 f-w-500">Badges</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb end -->

            <!-- Badges start -->
            <div class="row">
                <!-- Basic Badges start -->
                <div class="col-sm-12 col-xl-6">
                    <div class="card">
                        <div class="card-header code-header" >
                            <h5> Basic Badges</h5>
                            <a  data-bs-toggle="collapse" href="#basic-badges-Example"
                                aria-expanded="false" aria-controls="basic-badges-Example">
                                <i class="ti ti-code source" data-source="addithional"></i>
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-2 flex-wrap">
                                <span class="badge text-bg-primary">Primary</span>
                                <span class="badge text-bg-secondary">Secondary</span>
                                <span class="badge text-bg-success">Success</span>
                                <span class="badge text-bg-danger">Danger</span>
                                <span class="badge text-bg-warning">Warning</span>
                                <span class="badge text-bg-info">Info</span>
                                <span class="badge text-bg-light">Light</span>
                                <span class="badge text-bg-dark">Dark</span>
                            </div>
                        </div>

                        <pre class="basicbadges collapse mt-3" id="basic-badges-Example">
                    <code class="language-html">

                       &lt;div class="d-flex gap-2 flex-wrap"&gt;
                        &lt;span class="badge text-bg-primary"&gt;Primary&lt;/span&gt;
                        &lt;span class="badge text-bg-secondary"&gt;Secondary&lt;/span&gt;
                        &lt;span class="badge text-bg-success"&gt;Success&lt;/span&gt;
                        &lt;span class="badge text-bg-danger"&gt;Danger&lt;/span&gt;
                        &lt;span class="badge text-bg-warning"&gt;Warning&lt;/span&gt;
                        &lt;span class="badge text-bg-info"&gt;Info&lt;/span&gt;
                        &lt;span class="badge text-bg-light"&gt;Light&lt;/span&gt;
                        &lt;span class="badge text-bg-dark"&gt;Dark&lt;/span&gt;
                        &lt;/div&gt;

                    </code>
                </pre>
                    </div>
                </div>
                <!-- Basic Badges end -->

                <!-- Outline Badges start -->
                <div class="col-sm-12 col-xl-6">
                    <div class="card equal-card">
                        <div class="card-header code-header">
                            <h5> Outline Badges</h5>
                            <a data-bs-toggle="collapse" href="#outlinebadgeexample"
                               aria-expanded="false" aria-controls="outlinebadgeexample">
                                <i class="ti ti-code source" data-source="outlinebadge"></i>
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-2 flex-wrap">
                                <span class="badge text-outline-primary">Primary</span>
                                <span class="badge text-outline-secondary">Secondary</span>
                                <span class="badge text-outline-success">Success</span>
                                <span class="badge text-outline-danger">Danger</span>
                                <span class="badge text-outline-warning">Warning</span>
                                <span class="badge text-outline-info">Info</span>
                                <span class="badge text-outline-dark">Dark</span>
                            </div>
                        </div>

                        <pre class="outlinebadge collapse mt-3" id="outlinebadgeexample">
                    <code class="language-html">

                        &lt;div class="d-flex gap-2 flex-wrap"&gt;
                         &lt;span class="badge text-outline-primary"&gt;Primary&lt;/span&gt;
                         &lt;span class="badge text-outline-secondary"&gt;Secondary&lt;/span&gt;
                         &lt;span class="badge text-outline-success"&gt;Success&lt;/span&gt;
                         &lt;span class="badge text-outline-danger"&gt;Danger&lt;/span&gt;
                         &lt;span class="badge text-outline-warning"&gt;Warning&lt;/span&gt;
                         &lt;span class="badge text-outline-info"&gt;Info&lt;/span&gt;
                         &lt;span class="badge text-outline-dark"&gt;Dark&lt;/span&gt;
                         &lt;/div&gt;

                    </code>
                </pre>
                    </div>
                </div>
                <!-- Outline Badges end -->
                <!-- Light Badges start -->
                <div class="col-sm-12 col-xl-6">
                    <div class="card">
                        <div class="card-header code-header">
                            <h5> Light Badges</h5>
                            <a   data-bs-toggle="collapse" href="#lightbadgeExample"
                                 aria-expanded="false" aria-controls="lightbadgeExample">
                                <i class="ti ti-code source" data-source="lightborder"></i>
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-2 flex-wrap">
                                <span class="badge text-light-primary"> <i class="ti ti-download me-1"></i>Primary</span>
                                <span class="badge text-light-secondary">Secondary</span>
                                <span class="badge text-light-success">Success</span>
                                <span class="badge text-light-danger">Danger</span>
                                <span class="badge text-light-warning">Warning</span>
                                <span class="badge text-light-info">Info</span>
                                <span class="badge text-light-dark">Dark</span>
                            </div>
                        </div>

                        <pre class="lightbbadge collapse mt-3" id="lightbadgeExample">
 <code class="language-html">

        &nbsp;&lt;div class="d-flex gap-2 flex-wrap"&gt;
           &lt;span class="badge text-light-primary"&gt; &lt;i class="ti ti-download me-1"&gt;&lt;/i&gt;Primary&lt;/span&gt;
           &lt;span class="badge text-light-secondary"&gt;Secondary&lt;/span&gt;
           &lt;span class="badge text-light-success"&gt;Success&lt;/span&gt;
           &lt;span class="badge text-light-danger"&gt;Danger&lt;/span&gt;
           &lt;span class="badge text-light-warning"&gt;Warning&lt;/span&gt;
           &lt;span class="badge text-light-info"&gt;Info&lt;/span&gt;
           &lt;span class="badge text-light-dark"&gt;Dark&lt;/span&gt;
         &lt;/div&gt;

 </code>
</pre>
                    </div>
                </div>
                <!-- Light Badges end -->
                <!-- Radius option on Badges start -->
                <div class="col-sm-12 col-xl-6">
                    <div class="card equal-card">
                        <div class="card-header code-header">
                            <h5 class="txt-ellipsis">Radius option on Badges</h5>
                            <a   data-bs-toggle="collapse" href="#radiusbadgeExample"
                                 aria-expanded="false" aria-controls="radiusbadgeExample">
                                <i class="ti ti-code source" data-source="radiusbadge"></i>
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-2 flex-wrap">
                                <span class="badge text-bg-primary b-r-0">Primary</span>
                                <span class="badge text-bg-secondary b-r-6">Secondary</span>
                                <span class="badge text-bg-success b-r-8">Success</span>
                                <span class="badge text-bg-danger b-r-10">Danger</span>
                            </div>
                        </div>

                        <pre class="radiusbadge collapse mt-3" id="radiusbadgeExample">
                    <code class="language-html">

                       &lt;div class="d-flex gap-2 flex-wrap"&gt;
                           &lt;span class="badge text-bg-primary b-r-0"&gt;Primary&lt;/span&gt;
                           &lt;span class="badge text-bg-secondary b-r-6"&gt;Secondary&lt;/span&gt;
                           &lt;span class="badge text-bg-success b-r-8"&gt;Success&lt;/span&gt;
                           &lt;span class="badge text-bg-danger b-r-10"&gt;Danger&lt;/span&gt;
                        &lt;/div&gt;

                    </code>
                </pre>
                    </div>
                </div>
                <!-- Radius option on Badges end -->
                <!-- Badges position start -->
                <div class="col-sm-12 col-xl-6">
                    <div class="card">
                        <div class="card-header code-header" >
                            <h5>Badges position</h5>
                            <a  data-bs-toggle="collapse" href="#badgeposithiontExample"
                                aria-expanded="false" aria-controls="badgeposithiontExample">
                                <i class="ti ti-code source" data-source="badgeposithion"></i>
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-3 flex-wrap">
                                <button type="button" class="btn btn-outline-danger position-relative">
                                    Offline
                                    <span
                                        class="position-absolute top-0 start-0 translate-middle p-1 bg-danger border border-light rounded-circle">
                          <span class="visually-hidden">Offline</span>
                        </span>
                                </button>

                                <button type="button" class="btn btn-outline-warning position-relative">
                                    Busy
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle p-1 bg-warning border border-light rounded-circle">
                          <span class="visually-hidden">Busy</span>
                        </span>
                                </button>


                                <button type="button" class="btn btn-outline-success position-relative">
                                    Online
                                    <span
                                        class="position-absolute top-100 start-0 translate-middle p-1 bg-success border border-light rounded-circle">
                          <span class="visually-hidden">Online</span>
                        </span>
                                </button>

                                <button type="button" class="btn btn-outline-secondary position-relative">
                                    Disable
                                    <span
                                        class="position-absolute top-100 start-100 translate-middle p-1 bg-secondary border border-light rounded-circle">
                          <span class="visually-hidden">Disable</span>
                        </span>
                                </button>

                            </div>
                        </div>

                        <pre class="badgeposithion collapse mt-3" id="badgeposithiontExample">
                    <code class="language-html">

                   &lt;div class="d-flex gap-3 flex-wrap"&gt;
                        &lt;button type="button" class="btn btn-outline-danger position-relative"&gt;
                           Offline
                           &lt;span
                           &nbsp; class="position-absolute top-0 start-0 translate-middle p-1 bg-danger border border-light rounded-circle"&gt;
                           &nbsp; &lt;span class="visually-hidden"&gt;Offline&lt;/span&gt;
                           &lt;/span&gt;
                        &lt;/button&gt;
                        <br>
                        &lt;button type="button" class="btn btn-outline-warning position-relative"&gt;
                           Busy
                           &lt;span
                           &nbsp; class="position-absolute top-0 start-100 translate-middle p-1 bg-warning border border-light rounded-circle"&gt;
                           &nbsp; &lt;span class="visually-hidden"&gt;Busy&lt;/span&gt;
                           &lt;/span&gt;
                        &lt;/button&gt;
                        <br><br>
                        &lt;button type="button" class="btn btn-outline-success position-relative"&gt;
                           Online
                           &lt;span
                           &nbsp; class="position-absolute top-100 start-0 translate-middle p-1 bg-success border border-light rounded-circle"&gt;
                           &nbsp; &lt;span class="visually-hidden"&gt;Online&lt;/span&gt;
                           &lt;/span&gt;
                        &lt;/button&gt;
                        <br >
                        &lt;button type="button" class="btn btn-outline-secondary position-relative"&gt;
                           Disable
                           &lt;span
                           &nbsp; class="position-absolute top-100 start-100 translate-middle p-1 bg-secondary border border-light rounded-circle"&gt;
                           &nbsp; &lt;span class="visually-hidden"&gt;Disable&lt;/span&gt;
                           &lt;/span&gt;
                        &lt;/button&gt;
                   &lt;/div&gt;

                    </code>
                </pre>
                    </div>
                </div>
                <!-- Badges position end -->
                <!-- Icon's badges start -->
                <div class="col-sm-12 col-xl-6">
                    <div class="card equal-card">
                        <div class="card-header code-header">
                            <h5>Icon's badges</h5>
                            <a data-bs-toggle="collapse" href="#iconbadgeExample"
                               aria-expanded="false" aria-controls="iconbadgeExample">
                                <i class="ti ti-code source" data-source="iconbadge"></i>
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-3 flex-wrap">

                                <a href="#" class="position-relative bg-light-primary px-2 py-1 b-r-10">
                                    <i class="ti ti-shopping-cart f-s-22"></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle p-1 bg-primary rounded-circle animate__animated animate__fadeIn animate__infinite animate__fast"></span>
                                </a>

                                <a href="#" class="position-relative bg-light-secondary px-2 py-1 b-r-10">
                                    <i class="ti ti-line-dashed f-s-22"></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle p-1 bg-secondary rounded-circle animate__animated animate__fadeIn animate__infinite animate__fast"></span>
                                </a>

                                <a href="#" class="position-relative bg-light-success px-2 py-1 b-r-10">
                                    <i class="ti ti-speakerphone f-s-22"></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle p-1 bg-success rounded-circle animate__animated animate__fadeIn animate__infinite animate__fast"></span>
                                </a>

                                <a href="#" class="position-relative bg-light-danger px-2 py-1 b-r-10">
                                    <i class="ti ti-mail f-s-22"></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle p-1 bg-danger rounded-circle animate__animated animate__fadeIn animate__infinite animate__fast"></span>
                                </a>

                                <a href="#" class="position-relative bg-light-dark px-2 py-1 b-r-10">
                                    <i class="ti ti-moon-filled f-s-22"></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle p-1 bg-dark rounded-circle animate__animated animate__fadeIn animate__infinite animate__fast"></span>
                                </a>

                            </div>
                        </div>

                        <pre class="iconbadge collapse mt-3" id="iconbadgeExample">
  <code class="language-html">

     &lt;div class="d-flex gap-3 flex-wrap"&gt;
          &lt;button type="button" class="btn btn-outline-danger position-relative"&gt;
             Offline
             &lt;span
             &nbsp; class="position-absolute top-0 start-0 translate-middle p-1 bg-danger border border-light rounded-circle"&gt;
             &nbsp; &lt;span class="visually-hidden"&gt;Offline&lt;/span&gt;
             &lt;/span&gt;
          &lt;/button&gt;
          <br>
          &lt;button type="button" class="btn btn-outline-warning position-relative"&gt;
             Busy
             &lt;span
             &nbsp; class="position-absolute top-0 start-100 translate-middle p-1 bg-warning border border-light rounded-circle"&gt;
             &nbsp; &lt;span class="visually-hidden"&gt;Busy&lt;/span&gt;
             &lt;/span&gt;
          &lt;/button&gt;
          <br><br>
          &lt;button type="button" class="btn btn-outline-success position-relative"&gt;
             Online
             &lt;span
             &nbsp; class="position-absolute top-100 start-0 translate-middle p-1 bg-success border border-light rounded-circle"&gt;
             &nbsp; &lt;span class="visually-hidden"&gt;Online&lt;/span&gt;
             &lt;/span&gt;
          &lt;/button&gt;
          <br>
          &lt;button type="button" class="btn btn-outline-secondary position-relative"&gt;
             Disable
             &lt;span
             &nbsp; class="position-absolute top-100 start-100 translate-middle p-1 bg-secondary border border-light rounded-circle"&gt;
             &nbsp; &lt;span class="visually-hidden"&gt;Disable&lt;/span&gt;
             &lt;/span&gt;
          &lt;/button&gt;
     &lt;/div&gt;

  </code>
</pre>
                    </div>
                </div>
                <!-- Icon's badges end -->

                <!-- Badges with button start -->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header code-header">
                            <h5>Badges with button</h5>
                            <a   data-bs-toggle="collapse" href="#bagdewithbuttonexample"
                                 aria-expanded="false" aria-controls="bagdewithbuttonexample">
                                <i class="ti ti-code source" data-source="badgewithbtn"></i>
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-4 flex-wrap">
                                <button type="button" class="btn btn-light-primary">
                                    Notifications <span class="badge text-bg-primary badge-notification">4</span>
                                </button>

                                <button type="button" class="btn btn-light-secondary position-relative">
                                    Disable
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle p-2 bg-secondary border border-light rounded-circle">
                          <span class="visually-hidden">Disable</span>
                        </span>
                                </button>

                                <button type="button" class="btn btn-light-success position-relative">
                                    Inbox
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success badge-notification">
                          99+
                          <span class="visually-hidden">unread messages</span>
                        </span>
                                </button>

                                <button type="button" class="btn btn-light-danger position-relative">
                                    Unread

                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger badge-notification">
                          <i class="ti ti-bell-ringing"></i>
                        </span>
                                </button>

                                <button type="button" class="btn btn-outline-warning position-relative">
                                    Inbox
                                    <span class="badge rounded-pill bg-warning badge-notification">
                          99+
                          <span class="visually-hidden">unread messages</span>
                        </span>
                                </button>

                                <button type="button" class="btn btn-light-info position-relative f-s-14">
                                    <b>50%</b> Off
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle bg-info b-r-6 badge-notification p-1 f-s-12">
                          New
                        </span>
                                </button>

                                <button type="button" class="btn btn-light-dark position-relative">
                                    <b> 1 </b> missed call
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle p-2 bg-dark border border-light rounded-circle animate__animated animate__fadeIn animate__infinite animate__slower">
                          <span class="visually-hidden">Busy</span>
                        </span>
                                </button>

                            </div>
                        </div>

                        <pre class="badgewithbtn collapse mt-3" id="bagdewithbuttonexample">
                    <code class="language-html">

                    &lt;div class="d-flex gap-4 flex-wrap"&gt;
                         &lt;button type="button" class="btn btn-light-primary"&gt;
                         &nbsp; Notifications &lt;span class="badge text-bg-primary badge-notification"&gt;4&lt;/span&gt;
                         &lt;/button&gt;
                        <br>
                         &lt;button type="button" class="btn btn-light-secondary position-relative"&gt;
                          Disable
                          &lt;span
                          &nbsp; class="position-absolute top-0 start-100 translate-middle p-2 bg-secondary border border-light rounded-circle"&gt;
                          &nbsp; &lt;span class="visually-hidden"&gt;Disable&lt;/span&gt;
                          &lt;/span&gt;
                         &lt;/button&gt;
                        <br>
                         &lt;button type="button" class="btn btn-light-success position-relative"&gt;
                           Inbox
                           &lt;span
                           &nbsp; class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success badge-notification"&gt;
                           &nbsp; 99+
                           &nbsp; &lt;span class="visually-hidden"&gt;unread messages&lt;/span&gt;
                           &lt;/span&gt;
                         &lt;/button&gt;
                        <br>
                         &lt;button type="button" class="btn btn-light-danger position-relative"&gt;
                         &nbsp; Unread
                        <br>
                           &lt;span
                           &nbsp; class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger badge-notification"&gt;
                           &nbsp; &lt;i class="ti ti-bell-ringing"&gt;&lt;/i&gt;
                           &lt;/span&gt;
                         &lt;/button&gt;
                        <br>
                         &lt;button type="button" class="btn btn-outline-warning position-relative"&gt;
                           Inbox
                           &lt;span class="badge rounded-pill bg-warning badge-notification"&gt;
                           &nbsp; 99+
                           &nbsp; &lt;span class="visually-hidden"&gt;unread messages&lt;/span&gt;
                           &lt;/span&gt;
                         &lt;/button&gt;
                        <br>
                         &lt;button type="button" class="btn btn-light-info position-relative f-s-14"&gt;
                           &lt;b&gt;50%&lt;/b&gt; Off
                           &lt;span
                           &nbsp; class="position-absolute top-0 start-100 translate-middle bg-info b-r-6 badge-notification p-1 f-s-12"&gt;
                           &nbsp; New
                           &lt;/span&gt;
                         &lt;/button&gt;
                        <br>
                         &lt;button type="button" class="btn btn-light-dark position-relative"&gt;
                           &lt;b&gt; 1 &lt;/b&gt; missed call
                           &lt;span
                           &nbsp; class="position-absolute top-0 start-100 translate-middle p-2 bg-dark border border-light rounded-circle animate__animated animate__fadeIn animate__infinite animate__slower"&gt;
                           &nbsp; &lt;span class="visually-hidden"&gt;Busy&lt;/span&gt;
                           &lt;/span&gt;
                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/button&gt;
                        <br>
                    &lt;/div&gt;

                    </code>
                </pre>
                    </div>
                </div>
                <!-- Badges with button end -->
                <!-- Radius Badges strat -->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header code-header" >
                            <h5>Radius Badges</h5>
                            <a  data-bs-toggle="collapse" href="#Radiusbadgeexample"
                                aria-expanded="false" aria-controls="Radiusbadgeexample" >
                                <i class="ti ti-code source" data-source="radiusbadge"></i>
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="">
                                <h1 class="mb-3">Heading <span class="badge bg-secondary">New</span></h1>
                                <h2 class="mb-3">Heading <span class="badge bg-secondary">New</span></h2>
                                <h3 class="mb-3">Heading <span class="badge bg-secondary">New</span></h3>
                                <h4 class="mb-3">Heading <span class="badge bg-secondary">New</span></h4>
                                <h5 class="mb-3">Heading <span class="badge bg-secondary">New</span></h5>
                                <h6 class="mb-3">Heading <span class="badge bg-secondary">New</span></h6>
                            </div>
                        </div>

                        <pre class="radiusbadge collapse mt-3" id="Radiusbadgeexample">
                    <code class="language-html">

                    &lt;div class=""&gt;
                            &lt;h1 class="mb-3"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h1&gt;
                            &lt;h2 class="mb-3"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h2&gt;
                            &lt;h3 class="mb-3"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h3&gt;
                            &lt;h4 class="mb-3"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h4&gt;
                            &lt;h5 class="mb-3"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h5&gt;
                            &lt;h6 class="mb-3"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h6&gt;
                      &lt;/div&gt;

                    </code>
                </pre>
                    </div>
                </div>
                <!-- Radius Badges end -->
            </div>
            <!-- Badges end -->

        </div>
    </main>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

@endsection

