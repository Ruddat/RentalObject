@extends('layout.master')
@section('title', 'Alert')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Alert</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Alert</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Alert start -->
        <div class="row">
            <!-- Basic Alert start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Basic Alert</h5>
                        <a data-bs-toggle="collapse" href="#simpalalertExample"
                           aria-expanded="false" aria-controls="simpalalertExample">
                            <i class="ti ti-code source" data-source="simpalalert"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                            Simple primary alert -check it out!
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            Simple secondary alert -check it out!
                        </div>
                        <div class="alert alert-success" role="alert">
                            Simple success alert -check it out!
                        </div>
                        <div class="alert alert-danger" role="alert">
                            Simple danger alert -check it out!
                        </div>
                        <div class="alert alert-warning" role="alert">
                            Simple warning alert -check it out!
                        </div>
                        <div class="alert alert-info" role="alert">
                            Simple info alert -check it out!
                        </div>
                        <div class="alert alert-light" role="alert">
                            Simple light alert -check it out!
                        </div>
                        <div class="alert alert-dark" role="alert">
                            Simple dark alert -check it out!
                        </div>

                        <pre class="simpalalert collapse mt-3" id="simpalalertExample">
    <code class="language-html">
      &lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt; Simple primary alert -check it out  &lt;/div&gt;
      &lt;div class=&quot;alert alert-secondary &quot; role=&quot;alert&quot;&gt; Simple secondary  alert -check it out  &lt;/div&gt;
      &lt;div class=&quot;alert alert-success &quot; role=&quot;alert&quot;&gt; Simple success  alert -check it out  &lt;/div&gt;
      &lt;div class=&quot;alert alert-danger &quot; role=&quot;alert&quot;&gt; Simple danger  alert -check it out  &lt;/div&gt;
      &lt;div class=&quot;alert alert-warning &quot; role=&quot;alert&quot;&gt; Simple warning  alert -check it out  &lt;/div&gt;
      &lt;div class=&quot;alert alert-info &quot; role=&quot;alert&quot;&gt; Simple info  alert -check it out  &lt;/div&gt;
      &lt;div class=&quot;alert alert-light &quot; role=&quot;alert&quot;&gt; Simple light  alert -check it out  &lt;/div&gt;
      &lt;div class=&quot;alert alert-dark &quot; role=&quot;alert&quot;&gt; Simple dark  alert -check it out  &lt;/div&gt;

    </code>
</pre>
                    </div>
                </div>
            </div>
            <!-- Basic Alert end -->
            <!-- Outline Alert start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header code-header" >
                        <h5>Outline Alert </h5>
                        <a data-bs-toggle="collapse" href="#outlinealertExample"
                           aria-expanded="false" aria-controls="outlinealertExample">
                            <i class="ti ti-code source" data-source="outlinealert"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-outline-primary" role="alert">
                            Outline-alert primary -check it out!
                        </div>
                        <div class="alert alert-outline-secondary" role="alert">
                            Outline-alert secondary -check it out!
                        </div>
                        <div class="alert alert-outline-success" role="alert">
                            Outline-alert success -check it out!
                        </div>
                        <div class="alert alert-outline-danger" role="alert">
                            Outline-alert danger -check it out!
                        </div>
                        <div class="alert alert-outline-warning" role="alert">
                            Outline-alert warning -check it out!
                        </div>
                        <div class="alert alert-outline-info" role="alert">
                            Outline-alert info -check it out!
                        </div>
                        <div class="alert alert-outline-light" role="alert">
                            Outline-alert light -check it out!
                        </div>
                        <div class="alert alert-outline-dark" role="alert">
                            Outline-alert dark -check it out!
                        </div>

                        <pre class="outlinealert collapse mt-3" id="outlinealertExample">
    <code class="language-html">
      &lt;div class=&quot;alert alert-outline-primary&quot; role=&quot;alert&quot;&gt; outline primary alert -check it out  &lt;/div&gt;
      &lt;div class=&quot;alert alert-outline-secondary &quot; role=&quot;alert&quot;&gt; outline secondary  alert -check it out  &lt;/div&gt;
      &lt;div class=&quot;alert alert-outline-success &quot; role=&quot;alert&quot;&gt; outline success  alert -check it out  &lt;/div&gt;
      &lt;div class=&quot;alert alert-outline-danger &quot; role=&quot;alert&quot;&gt; outline danger  alert -check it out  &lt;/div&gt;
      &lt;div class=&quot;alert alert-outline-warning &quot; role=&quot;alert&quot;&gt; outline warning  alert -check it out  &lt;/div&gt;
      &lt;div class=&quot;alert alert-outline-info &quot; role=&quot;alert&quot;&gt; outline info  alert -check it out  &lt;/div&gt;
      &lt;div class=&quot;alert alert-outline-light &quot; role=&quot;alert&quot;&gt; outline light  alert -check it out  &lt;/div&gt;
      &lt;div class=&quot;alert alert-outline-dark &quot; role=&quot;alert&quot;&gt; outline dark  alert -check it out  &lt;/div&gt;

    </code>
</pre>
                    </div>
                </div>
            </div>
            <!-- Outline Alert end -->
            <!-- Light Alert With Link color start -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header code-header" >
                        <h5 class="txt-ellipsis">Light Alert With Link color</h5>
                        <a data-bs-toggle="collapse" href="#lightalertExample"
                           aria-expanded="false" aria-controls="lightalertExample">
                            <i class="ti ti-code source" data-source="lightalert"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="alert alert-light-primary" role="alert">
                            Light primary color alert with <a href="#" class="alert-link">an example link</a> -Check it!
                        </div>
                        <div class="alert alert-light-secondary" role="alert">
                            Light secondary color alert with <a href="#" class="alert-link">an example link</a> -Check it!
                        </div>
                        <div class="alert alert-light-success" role="alert">
                            Light success color alert with <a href="#" class="alert-link">an example link</a> -Check it!
                        </div>
                        <div class="alert alert-light-danger" role="alert">
                            Light danger color alert with <a href="#" class="alert-link">an example link</a> -Check it!
                        </div>
                        <div class="alert alert-light-warning" role="alert">
                            Light warning color alert with <a href="#" class="alert-link">an example link</a> -Check it!
                        </div>
                        <div class="alert alert-light-info" role="alert">
                            Light info color alert with <a href="#" class="alert-link">an example link</a> -Check it!
                        </div>
                        <div class="alert alert-light-light" role="alert">
                            Light light color alert with <a href="#" class="alert-link">an example link</a> -Check it!
                        </div>
                        <div class="alert alert-light-dark" role="alert">
                            Light dark color alert with <a href="#" class="alert-link">an example link</a> -Check it!
                        </div>

                        <pre class="lightalert collapse mt-3" id="lightalertExample">
   <code class="language-html">
     &lt;div class=&quot;alert alert-light-primary&quot; role=&quot;alert&quot;&gt; Light primary color alert with an example link check it   &lt;/div&gt;
     &lt;div class=&quot;alert alert-light-secondary &quot; role=&quot;alert&quot;&gt; Light secondary color alert with an example link check it   &lt;/div&gt;
     &lt;div class=&quot;alert alert-light-success &quot; role=&quot;alert&quot;&gt; Light success color alert with an example link check it   &lt;/div&gt;
     &lt;div class=&quot;alert alert-light-danger &quot; role=&quot;alert&quot;&gt; Light danger color alert with an example link check it   &lt;/div&gt;
     &lt;div class=&quot;alert alert-light-warning &quot; role=&quot;alert&quot;&gt; Light warning color alert with an example link check it   &lt;/div&gt;
     &lt;div class=&quot;alert alert-light-info &quot; role=&quot;alert&quot;&gt; Light info color alert with an example link check it   &lt;/div&gt;
     &lt;div class=&quot;alert alert-light-light &quot; role=&quot;alert&quot;&gt; Light light color alert with an example link check it   &lt;/div&gt;
     &lt;div class=&quot;alert alert-light-dark &quot; role=&quot;alert&quot;&gt; Light dark color alert with an example link check it   &lt;/div&gt;

   </code>
  </pre>
                    </div>
                </div>
            </div>
            <!-- Light Alert With Link color end -->
            <!-- Alert With Icons start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header code-header" >
                        <h5>Alert With Icons</h5>
                        <a data-bs-toggle="collapse" href="#lightborderalertExample"
                           aria-expanded="false" aria-controls="lightborderalertExample">
                            <i class="ti ti-code source" data-source="lightborder"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="alert alert-light-border-primary d-flex align-items-center justify-content-between"
                             role="alert">
                            <p class="mb-0">
                                <i class="ti ti-download f-s-18 me-2"></i> Light-border-primary alert With icons -check it out!
                            </p>
                            <i class="ti ti-x" data-bs-dismiss="alert"></i>
                        </div>
                        <div class="alert alert-light-border-secondary d-flex align-items-center justify-content-between"
                             role="alert">
                            <p class="mb-0">
                                <i class="ti ti-accessible-off-filled f-s-18 me-2"></i>Light-border-secondary alert With icons
                                -check it out!
                            </p>
                            <i class="ti ti-x" data-bs-dismiss="alert"></i>
                        </div>
                        <div class="alert alert-light-border-success d-flex align-items-center justify-content-between"
                             role="alert">
                            <p class="mb-0">
                                <i class="ti ti-circle-check f-s-18 me-2"></i>Light-border-success alert With icons -check it
                                out!
                            </p>
                            <i class="ti ti-x" data-bs-dismiss="alert"></i>
                        </div>
                        <div class="alert alert-light-border-danger d-flex align-items-center justify-content-between"
                             role="alert">
                            <p class="mb-0">
                                <i class="ti ti-power f-s-18 me-2"></i>Light-border-danger alert With icons -check it out!
                            </p>
                            <i class="ti ti-x" data-bs-dismiss="alert"></i>
                        </div>
                        <div class="alert alert-light-border-warning d-flex align-items-center justify-content-between"
                             role="alert">
                            <p class="mb-0">
                                <i class="ti ti-alert-triangle f-s-18 me-2"></i>Light-border-warning alert With icons -check it
                                out!
                            </p>
                            <i class="ti ti-x" data-bs-dismiss="alert"></i>
                        </div>
                        <div class="alert alert-light-border-info d-flex align-items-center justify-content-between"
                             role="alert">
                            <p class="mb-0">
                                <i class="ti ti-info-circle f-s-18 me-2"></i>Light-border-info alert With icons -check it out!
                            </p>
                            <i class="ti ti-x" data-bs-dismiss="alert"></i>
                        </div>
                        <div class="alert alert-light-border-light d-flex align-items-center justify-content-between"
                             role="alert">
                            <p class="mb-0">
                                <i class="ti ti-align-box-bottom-center f-s-18 me-2"></i>Light-border-light alert With icons
                                -check it out!
                            </p>
                            <i class="ti ti-x" data-bs-dismiss="alert"></i>
                        </div>
                        <div class="alert alert-light-border-dark d-flex align-items-center justify-content-between"
                             role="alert">
                            <p class="mb-0">
                                <i class="ti ti-world-download f-s-18 me-2"></i>Light-border-dark alert With icons -check it
                                out!
                            </p>
                            <i class="ti ti-x" data-bs-dismiss="alert"></i>
                        </div>

                        <pre class="lightborder collapse mt-3" id="lightborderalertExample">
                      <code class="language-html">
                        &lt;div class=&quot;light-border-primary&quot; role=&quot;alert&quot;&gt; alert -check it out  &lt;/div&gt;
                        &lt;div class=&quot;light-border-secondary &quot; role=&quot;alert&quot;&gt; alert -check it out  &lt;/div&gt;
                        &lt;div class=&quot;light-border-success &quot; role=&quot;alert&quot;&gt; alert -check it out  &lt;/div&gt;
                        &lt;div class=&quot;light-border-danger &quot; role=&quot;alert&quot;&gt;  alert -check it out  &lt;/div&gt;
                        &lt;div class=&quot;light-border-warning &quot; role=&quot;alert&quot;&gt; alert -check it out  &lt;/div&gt;
                        &lt;div class=&quot;light-border-info &quot; role=&quot;alert&quot;&gt; alert -check it out  &lt;/div&gt;
                        &lt;div class=&quot;light-border-light &quot; role=&quot;alert&quot;&gt; alert -check it out  &lt;/div&gt;
                        &lt;div class=&quot;light-border-dark &quot; role=&quot;alert&quot;&gt; alert -check it out  &lt;/div&gt;

                      </code>
                  </pre>
                    </div>
                </div>
            </div>
            <!-- Alert With Icons end -->
            <!-- Alert With Left Border start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header code-header" >
                        <h5>Alert With Left Border</h5>
                        <a  data-bs-toggle="collapse" href="#leftborderalertExample"
                            aria-expanded="false" aria-controls="leftborderalertExample">
                            <i class="ti ti-code source" data-source="leftbor"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="alert alert-border-primary" role="alert">
                            Alert with left slide border - check out!
                        </div>
                        <div class="alert alert-border-secondary" role="alert">
                            Alert with left slide border - check out!
                        </div>
                        <div class="alert alert-border-success" role="alert">
                            Alert with left slide border - check out!
                        </div>

                        <pre class="leftbor collapse mt-3" id="leftborderalertExample">
                      <code class="language-html">

                          &lt;div class="alert alert-border-primary" role="alert"&gt;
                           &nbsp; Alert with left slide border - check out!
                           &lt;/div&gt;
                           &lt;div class="alert alert-border-secondary" role="alert"&gt;
                           &nbsp; Alert with left slide border - check out!
                           &lt;/div&gt;
                           &lt;div class="alert alert-border-success" role="alert"&gt;
                           &nbsp; Alert with left slide border - check out!
                           &lt;/div&gt;

                      </code>
                  </pre>
                    </div>
                </div>
            </div>
            <!-- Alert With Left Border end -->
            <!-- Alert With Label Icons start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Alert With Label Icons</h5>
                        <a  data-bs-toggle="collapse" href="#labeliconExample"
                            aria-expanded="false" aria-controls="labeliconExample">
                            <i class="ti ti-code source" data-source="labelicon"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="alert alert-label alert-label-primary" role="alert">
                            <p class="mb-0">
                                <i class="ti ti-download label-icon label-icon-primary"></i>
                                Alert with lable icons - check out!
                            </p>
                        </div>
                        <div class="alert alert-label alert-label-secondary" role="alert">
                            <p class="mb-0">
                                <i class="ti ti-download label-icon label-icon-secondary"></i>
                                Alert with lable icons - check out!
                            </p>
                        </div>
                        <div class="alert alert-label alert-label-success" role="alert">
                            <p class="mb-0">
                                <i class="ti ti-download label-icon label-icon-success"></i>
                                Alert with lable icons - check out!
                            </p>
                        </div>


                        <pre class="labelicon collapse mt-3" id="labeliconExample">
                      <code class="language-html">
                      &lt;div class=&quot;alert alert-label alert-label-primary&quot; role=&quot;alert&quot;&gt;
                        &lt;p class=&quot;mb-0&quot;&gt;
                          &lt;i class=&quot;ti ti-download label-icon label-icon-primary&quot;&gt;&lt;/i&gt;
                          Alert with lable icons - check out!
                        &lt;/p&gt;
                      &lt;div&gt;
                      &lt;div class=&quot;alert alert-label alert-label-secondary&quot; role=&quot;alert&quot;&gt;
                        &lt;p class=&quot;mb-0&quot;&gt;
                          &lt;i class=&quot;ti ti-download label-icon label-icon-secondary&quot;&gt;&lt;/i&gt;
                          Alert with lable icons - check out!
                        &lt;/p&gt;
                      &lt;div&gt;
                      &lt;div class=&quot;alert alert-label alert-label-success&quot; role=&quot;alert&quot;&gt;
                        &lt;p class=&quot;mb-0&quot;&gt;
                          &lt;i class=&quot;ti ti-download label-icon label-icon-success&quot;&gt;&lt;/i&gt;
                          Alert with lable icons - check out!
                        &lt;/p&gt;
                      &lt;div&gt;
                      </code>
                  </pre>
                    </div>
                </div>
            </div>
            <!-- Alert With Label Icons end -->
            <!-- Custom Alerts With Dismissing start -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header code-header">
                        <h5 class="txt-ellipsis">Custom Alerts With Dismissing</h5>
                        <a   data-bs-toggle="collapse" href="#customeralertExample"
                             aria-expanded="false" aria-controls="customeralertExample">
                            <i class="ti ti-code source" data-source="custome"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary alert-dismissible cookies-alert" role="alert">
                            <div class="d-flex justify-content-between">
                                <img src="{{asset('../assets/images/icons/cookie-.png')}}" class="w-35 h-35 me-2" alt="image">
                                <p class="mb-0">
                                    We have Cookies! We use it to ensure you get the best experience on our website and service
                                </p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>

                        <div class="alert alert-label alert-label-success justify-content-between shopping-alert" role="alert">
                            <p class="mb-0">
                                <i class="ti ti-garden-cart label-icon label-icon-success"></i>
                                your order is delayed
                            </p>
                            <button type="button" class="btn btn-sm btn-success" data-bs-dismiss="alert"> Accept</button>
                        </div>

                        <div class="alert alert-border-info" role="alert">
                            <h6>
                                <i class="ti ti-info-circle f-s-18 me-2 text-info"></i>
                                New Version is now availble
                            </h6>
                            <p>
                                With this new Version you have accesss to more customization features and file export options.
                            </p>
                            <div class="text-end">
                                <a href="" class="link-primary text-d-underline" data-bs-dismiss="alert">Don't allow</a>
                                <a href="" class="link-primary text-d-underline ms-2">Allow</a>
                            </div>
                        </div>

                        <div class="alert custom-alert p-0" role="alert">
                            <div class="alert-header">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="alert-body">
                                <h4 class="mb-0 text-center mb-3">
                                    <img src="{{asset('../assets/images/icons/warning.png')}}" class="w-40 h-40" alt="image">
                                    Under maintenance
                                </h4>
                                <p class="mb-3">
                                    Our team is currently checking some errors in this area.
                                    We dont't recommend changing any of your settings until the next update.
                                </p>
                                <div class="text-end">
                                    <a href="{{route('maintenance')}}" type="button" class="btn btn-warning">Get more info</a>
                                </div>
                            </div>
                        </div>

                        <pre class="custome collapse mt-3" id="customeralertExample">
  <code class="language-html">

      &lt;div class="alert alert-primary alert-dismissible" role="alert"&gt;
       &lt;div class="d-flex justify-content-between"&gt;
       &nbsp; &lt;img src="{{asset('../assets/images/alert/cookie-.png')}}" class="w-35 h-35 me-2" alt="image"&gt;
       &nbsp; &lt;p class="mb-0"&gt;
       &nbsp; &nbsp; We have Cookies! We use it to ensure you get the best experience on our website and service
       &nbsp; &lt;/p&gt;
       &nbsp; &lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;/button&gt;
       &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="alert alert-label alert-label-success justify-content-between" role="alert"&gt;
       &lt;p class="mb-0"&gt;
       &nbsp; &lt;i class="ti ti-garden-cart label-icon label-icon-success"&gt;&lt;/i&gt;
       &nbsp; your order is delayed
       &lt;/p&gt;
       &lt;button type="button" class="btn btn-sm btn-success" data-bs-dismiss="alert"&gt; Accept&lt;/button&gt;
       &lt;/div&gt;

       &lt;div class="alert alert-border-info" role="alert"&gt;
       &lt;h6&gt;
       &nbsp; &lt;i class="ti ti-info-circle f-s-18 me-2 text-info"&gt;&lt;/i&gt;
       &nbsp; New Version is now availble
       &lt;/h6&gt;
       &lt;p&gt;
       &nbsp; With this new Version you have accesss to more customization features and file export options.
       &lt;/p&gt;
       &lt;div class="text-end"&gt;
       &nbsp; &lt;a href="" class="link-primary text-d-underline" data-bs-dismiss="alert"&gt;Don't allow&lt;/a&gt;
       &nbsp; &lt;a href="" class="link-primary text-d-underline ms-2"&gt;Allow&lt;/a&gt;
       &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="alert custom-alert p-0" role="alert"&gt;
       &lt;div class="alert-header"&gt;
       &nbsp; &lt;button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"&gt;&lt;/button&gt;
       &lt;/div&gt;
       &lt;div class="alert-body"&gt;
       &lt;h4 class="mb-0 text-center mb-3"&gt;
       &nbsp; &lt;img src="{{asset('../assets/images/alert/warning.png')}}" class="w-40 h-40" alt="image"&gt;
       &nbsp; Under maintenance
       &lt;/h4&gt;
       &lt;p class="mb-3"&gt;
       &nbsp; Our team is currently checking some errors in this area.
       &nbsp; We dont't recommend changing any of your settings until the next update.
       &lt;/p&gt;
       &lt;div class="text-end"&gt;
       &nbsp; &lt;button type="button" class="btn btn-warning"&gt;Get more info&lt;/button&gt;
       &lt;/div&gt;
       &lt;/div&gt;

  </code>
</pre>
                    </div>
                </div>
            </div>
            <!-- Custom Alerts With Dismissing end -->
            <!-- Alert Additional content start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5 class="txt-ellipsis">Alert Additional content</h5>
                        <a   data-bs-toggle="collapse" href="#addithionalalertExample"
                             aria-expanded="false" aria-controls="addithionalalertExample">
                            <i class="ti ti-code source" data-source="addithional"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">Well done! <i class="ti ti-x float-end breadcrumb-start"
                                                                    data-bs-dismiss="alert"></i></h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run
                                a bit longer so that you can see how spacing within an alert works with this kind of content.
                            </p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                                tidy.</p>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <h4 class="alert-heading">Well done! <i class="ti ti-x float-end breadcrumb-start"
                                                                    data-bs-dismiss="alert"></i></h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run
                                a bit longer so that you can see how spacing within an alert works with this kind of content.
                            </p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                                tidy.</p>
                        </div>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Well done! <i class="ti ti-x float-end breadcrumb-start"
                                                                    data-bs-dismiss="alert"></i></h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run
                                a bit longer so that you can see how spacing within an alert works with this kind of content.
                            </p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                                tidy.</p>
                        </div>
                    </div>

                    <pre class="addithional collapse mt-3" id="addithionalalertExample">
  <code class="language-html">

     &nbsp;&lt;div class="alert alert-primary" role="alert"&gt;
      &lt;h4 class="alert-heading"&gt;Well done! &lt;i class="ti ti-x float-end breadcrumb-start"
      &nbsp; &nbsp; data-bs-dismiss="alert"&gt;&lt;/i&gt;&lt;/h4&gt;
      &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run
      &nbsp; a bit longer so that you can see how spacing within an alert works with this kind of content.
      &lt;/p&gt;
      &lt;hr&gt;
      &lt;p class="mb-0"&gt;Whenever you need to, be sure to use margin utilities to keep things nice and
      &nbsp; tidy.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="alert alert-secondary" role="alert"&gt;
       &lt;h4 class="alert-heading"&gt;Well done! &lt;i class="ti ti-x float-end breadcrumb-start"
       &nbsp; &nbsp; data-bs-dismiss="alert"&gt;&lt;/i&gt;&lt;/h4&gt;
       &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run
       &nbsp; a bit longer so that you can see how spacing within an alert works with this kind of content.
       &lt;/p&gt;
       &lt;hr&gt;
       &lt;p class="mb-0"&gt;Whenever you need to, be sure to use margin utilities to keep things nice and
       &nbsp; tidy.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="alert alert-success" role="alert"&gt;
      &lt;h4 class="alert-heading"&gt;Well done! &lt;i class="ti ti-x float-end breadcrumb-start"
      &nbsp; &nbsp; data-bs-dismiss="alert"&gt;&lt;/i&gt;&lt;/h4&gt;
      &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run
      &nbsp; a bit longer so that you can see how spacing within an alert works with this kind of content.
      &lt;/p&gt;
      &lt;hr&gt;
      &lt;p class="mb-0"&gt;Whenever you need to, be sure to use margin utilities to keep things nice and
      &nbsp; tidy.&lt;/p&gt;
      &lt;/div&gt;
      &lt;/div&gt;

    </code>
</pre>
                </div>
            </div>
            <!-- Alert Additional content end -->
            <!-- Live Alert start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header" >
                        <h5>Live Alert</h5>
                        <a  data-bs-toggle="collapse" href="#livealertExample"
                            aria-expanded="false" aria-controls="livealertExample">
                            <i class="ti ti-code source" data-source="livealeart"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div id="liveAlert"></div>
                        <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
                    </div>

                    <pre class="livealeart collapse mt-3" id="livealertExample">
                    <code class="language-html">

                        &lt;div id="liveAlert"&gt;&lt;/div&gt;
                        &lt;button type="button" class="btn btn-primary" id="liveAlertBtn"&gt;Show live alert&lt;/button&gt;


                    </code>
                </pre>

                </div>
            </div>
            <!-- Live Alert end -->
        </div>
        <!-- Alert end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- alert js-->
    <script src="{{asset('assets/js/alert.js')}}"></script>
@endsection

