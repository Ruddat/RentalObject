@extends('layout.master')
@section('title', 'Count Up')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Count up</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                            <span>
                              <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Count up</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Simple</h5>
                        <a data-bs-toggle="collapse" href="#simple1" aria-expanded="false">
                            <i class="ti ti-code source" data-source="av1"></i>
                        </a>
                        <div class="text-secondary mt-2">Explore CountUp.js <a
                                href="https://inorganik.github.io/countUp.js/" class="text-primary">Official Website</a> for
                            additional examples.</div>
                    </div>

                    <div class="card-body">
                        <div class="simple-counter mt-4">
                            <div class="simple">
                                <div>
                                    <span>$</span>
                                    <p class="counter" data-count="150">0</p>
                                </div>
                                <p><i class="ti ti-arrow-narrow-up text-success"></i>Income</p>
                            </div>
                            <div class="simple">
                                <div class="counter" data-count="85">0</div>
                                <p><i class="ti ti-arrow-narrow-down text-danger"></i>Projects</p>
                            </div>
                            <div class="simple">
                                <div>
                                    <p class="counter" data-count="60">0</p>
                                    <span>%</span>
                                </div>
                                <p><i class="ti ti-arrow-narrow-up text-success"></i>Achievement</p>
                            </div>
                        </div>



                        <pre class="av1 collapse mt-3" id="simple1">
  <code class="language-html">
   &lt;div class="simple-counter"&gt;
  &lt;div class="simple"&gt;
  &lt;div&gt;
    &lt;span&gt;$&lt;/span&gt;
      &lt;p class="counter" data-count="150"&gt;0&lt;/p&gt;
    &lt;/div&gt;
    &lt;p&gt;&lt;i class="ti ti-arrow-narrow-up text-success"&gt;&lt;/i&gt;Income&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="simple"&gt;
    &lt;div class="counter" data-count="85"&gt;0&lt;/div&gt;
    &lt;p&gt;&lt;i class="ti ti-arrow-narrow-down text-danger"&gt;&lt;/i&gt;Projects&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="simple"&gt;
     &lt;div&gt;
      &lt;p class="counter" data-count="60"&gt;0&lt;/p&gt;
      &lt;span&gt;%&lt;/span&gt;
    &lt;/div&gt;
    &lt;p&gt;&lt;i class="ti ti-arrow-narrow-up text-success"&gt;&lt;/i&gt;Achievement&lt;/p&gt;
  &lt;/div&gt;
 &lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Customized</h5>
                        <a data-bs-toggle="collapse" href="#customized1" aria-expanded="false">
                            <i class="ti ti-code source" data-source="av1"></i>
                        </a>
                        <div class="text-secondary mt-2">You have the flexibility to modify CountUp by incorporating our
                            extended Bootstrap classes.</div>
                    </div>
                    <div class="card-body">
                        <div class="customized-counter mt-4">
                            <div class="customized">
                                <i class="ti ti-apps"></i>
                                <div class="d-flex align-items-center">
                                    <span>$</span>
                                    <p class="counter f-w-500 f-s-30 text-dark" data-count="500">0</p>
                                </div>
                                <p>Respected Companies</p>
                            </div>
                            <div class="customized">
                                <i class="ti ti-report-analytics"></i>
                                <div class="counter" data-count="75">0</div>
                                <p>Analytical Reports</p>
                            </div>
                            <div class="customized">
                                <i class="ti ti-brand-paypal"></i>
                                <div class="d-flex align-items-center">
                                    <p class="counter f-w-500 f-s-30 text-dark" data-count="40">0</p>
                                    <span>%</span>
                                </div>
                                <p>Protected Payments</p>
                            </div>
                        </div>


                        <pre class="av1 collapse mt-3" id="customized1">
  <code class="language-html">
  &lt;div class="customized-counter mt-4"&gt;
  &lt;div class="customized"&gt;
    &lt;i class="ti ti-apps"&gt;&lt;/i&gt;
    &lt;div class="d-flex align-items-center"&gt;
    &lt;span&gt;$&lt;/span&gt;
    &lt;p class="counter f-w-500 f-s-30 text-dark" data-count="500"&gt;0&lt;/p&gt;
  &lt;/div&gt;
    &lt;p&gt;Respected Companies&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="customized"&gt;
    &lt;i class="ti ti-report-analytics"&gt;&lt;/i&gt;
    &lt;div class="counter" data-count="75"&gt;0&lt;/div&gt;
    &lt;p&gt;Analytical Reports&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="customized"&gt;
    &lt;i class="ti ti-brand-paypal"&gt;&lt;/i&gt;
    &lt;div class="d-flex align-items-center"&gt;
    &lt;p class="counter f-w-500 f-s-30 text-dark" data-count="40"&gt;0&lt;/p&gt;
    &lt;span&gt;%&lt;/span&gt;
  &lt;/div&gt;
    &lt;p&gt;Protected Payments&lt;/p&gt;
  &lt;/div&gt;
 &lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Update Data</h5>
                        <a data-bs-toggle="collapse" href="#updatedata1" aria-expanded="false">
                            <i class="ti ti-code source" data-source="av1"></i>
                        </a>
                        <div class="text-secondary mt-2">Refer to CountUp.js's official documentation to understand the
                            plugin API. The provided example demonstrates how to reset a CountUp instance with a new value
                            and configuration to dynamically update the displayed value.</div>
                    </div>
                    <div class="card-body">
                        <div class="simple-counter mt-4">
                            <div class="d-flex gap-3">
                                <div class="simple">
                                    <div>
                                        <span>$</span>
                                        <p class="counter update-counter" data-count="200">0</p>
                                    </div>
                                    <p><i class="ti ti-arrow-narrow-up text-success"></i>Income</p>
                                </div>
                                <div class="simple">
                                    <div class="counter update-counter" data-count="81">0</div>
                                    <p><i class="ti ti-arrow-narrow-down text-danger"></i>Projects</p>
                                </div>
                                <div class="simple">
                                    <div>
                                        <p class="counter update-counter" data-count="60">0</p>
                                        <span>%</span>
                                    </div>
                                    <p><i class="ti ti-arrow-narrow-up text-success"></i>Achievement</p>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-light-primary" id="startCounter">Update Data</button>
                            </div>
                        </div>

                        <pre class="av1 collapse mt-3" id="updatedata1">
                  <code class="language-html">
  &lt;div class="simple-counter"&gt;
  &lt;div class="simple"&gt;
      &lt;div&gt;
    &lt;span&gt;$&lt;/span&gt;
      &lt;p class="counter" data-count="150"&gt;0&lt;/p&gt;
    &lt;/div&gt;
    &lt;p&gt;&lt;i class="ti ti-arrow-narrow-up text-success"&gt;&lt;/i&gt;Income&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="simple"&gt;
    &lt;div class="counter" data-count="85"&gt;0&lt;/div&gt;
    &lt;p&gt;&lt;i class="ti ti-arrow-narrow-down text-danger"&gt;&lt;/i&gt;Projects&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="simple"&gt;
     &lt;div&gt;
      &lt;p class="counter" data-count="60"&gt;0&lt;/p&gt;
      &lt;span&gt;%&lt;/span&gt;
    &lt;/div&gt;
    &lt;p&gt;&lt;i class="ti ti-arrow-narrow-up text-success"&gt;&lt;/i&gt;Achievement&lt;/p&gt;
  &lt;/div&gt;
   &lt;div&gt;
     &lt;button class="btn btn-light-primary" id="startCounter"&gt;Update Data &lt;/button&gt;
   &lt;/div&gt;
 &lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Under Tab Sections</h5>
                        <a data-bs-toggle="collapse" href="#undertab1" aria-expanded="false">
                            <i class="ti ti-code source" data-source="av1"></i>
                        </a>
                        <div class="text-secondary mt-2">Experience a demo featuring CountUp, triggered only when it enters
                            the
                            viewport within a tab container.</div>
                    </div>
                    <div class="card-body">
                        <div class="mt-3 under-tab-section">
                            <ul class="nav nav-tabs app-tabs-primary under-tab justify-content-center" id="Basic" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="one-tab" data-bs-toggle="tab" data-bs-target="#tab-one"
                                            type="button" role="tab" aria-controls="tab-one" aria-selected="true">Tab-1</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="two-tab" data-bs-toggle="tab" data-bs-target="#tab-two"
                                            type="button" role="tab" aria-controls="tab-two" aria-selected="false">Tab-2</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="three-tab" data-bs-toggle="tab" data-bs-target="#tab-three"
                                            type="button" role="tab" aria-controls="tab-three" aria-selected="false">Tab-3</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="BasicContent">
                                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="one-tab"
                                     tabindex="0">
                                    <div class="simple-counter mt-4">
                                        <div class="d-flex gap-3">
                                            <div class="simple">
                                                <div>
                                                    <span>$</span>
                                                    <p class="counter" data-count="150">0</p>
                                                </div>
                                                <p><i class="ti ti-arrow-narrow-up text-success"></i>Income</p>
                                            </div>
                                            <div class="simple">
                                                <div class="counter" data-count="85">0%</div>
                                                <p><i class="ti ti-arrow-narrow-down text-danger"></i>Projects</p>
                                            </div>
                                            <div class="simple">
                                                <div>
                                                    <p class="counter" data-count="150">0</p>
                                                    <span>%</span>
                                                </div>
                                                <p><i class="ti ti-arrow-narrow-up text-success"></i>Achievement</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="two-tab" tabindex="0">
                                    <div class="simple-counter mt-4">
                                        <div class="d-flex gap-3">
                                            <div class="simple">
                                                <div class="counter" data-count="110">0</div>
                                                <p><i class="ti ti-arrow-narrow-up text-success"></i>Income</p>
                                            </div>
                                            <div class="simple">
                                                <div class="counter" data-count="65">0</div>
                                                <p><i class="ti ti-arrow-narrow-down text-danger"></i>Projects</p>
                                            </div>
                                            <div class="simple">
                                                <div class="counter" data-count="3200">0</div>
                                                <p><i class="ti ti-arrow-narrow-up text-success"></i>Achievement</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="three-tab"
                                     tabindex="0">
                                    <div class="simple-counter mt-4">
                                        <div class="d-flex gap-3">
                                            <div class="simple">
                                                <div class="counter" data-count="100">0</div>
                                                <p><i class="ti ti-arrow-narrow-up text-success"></i>Income</p>
                                            </div>
                                            <div class="simple">
                                                <div class="counter" data-count="70">0</div>
                                                <p><i class="ti ti-arrow-narrow-down text-danger"></i>Projects</p>
                                            </div>
                                            <div class="simple">
                                                <div class="counter" data-count="1200">0</div>
                                                <p><i class="ti ti-arrow-narrow-up text-success"></i>Achievement</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <pre class="av1 collapse mt-3" id="undertab1">
        <code class="language-html">
         &lt;div class="simple-counter"&gt;
        &lt;ul class="nav nav-tabs app-tabs-primary" id="Basic" role="tablist"&gt;
          &lt;li class="nav-item" role="presentation"&gt;
            &lt;button class="nav-link active" id="one-tab" data-bs-toggle="tab"
              data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one"
              aria-selected="true"&gt;Tab-1&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
            &lt;button class="nav-link" id="two-tab" data-bs-toggle="tab" data-bs-target="#tab-two"
              type="button" role="tab" aria-controls="tab-two" aria-selected="false"&gt;Tab-2&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
            &lt;button class="nav-link" id="three-tab" data-bs-toggle="tab" data-bs-target="#tab-three"
              type="button" role="tab" aria-controls="tab-three" aria-selected="false"&gt;Tab-3&lt;/button&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
        &lt;div class="tab-content" id="BasicContent"&gt;
          &lt;div class="tab-pane fade show active" id="tab-one" role="tabpanel"
            aria-labelledby="one-tab" tabindex="0"&gt;
            ...
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="two-tab"
            tabindex="0"&gt;
             ...
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="three-tab"
            tabindex="0"&gt;
             ...
          &lt;/div&gt;
        &lt;/div&gt;
      </code>
                 </pre>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <h5 class="mb-1">Introduction</h5>
                            <ul class="list-disc ms-3">
                                <li class="text-secondary"><a href="#">CountUp.js is a self-reliant, lightweight JavaScript
                                        class, perfect for swiftly creating animations that present numerical data in an engaging
                                        manner. Refer to the Official Website and GitHub repository for additional insights.</a></li>
                            </ul>
                        </div>
                        <div class="mb-3">
                            <h5 class="mb-1">Use</h5>
                            <ul class="list-disc ms-3">
                                <li class="text-secondary"><a href="#">The styling and script bundles for CountUp.js are
                                        distinct from our overarching bundle and need manual inclusion and initiation on associated
                                        pages.</a></li>
                            </ul>
                            <pre
                                class=""><code class="language-html">&lt;script src="assets/js/countup.js"&gt;&lt;/script&gt;       </code></pre>
                        </div>
                        <div class="mb-3">
                            <h5 class="mb-1">Initiation</h5>
                            <ul class="list-disc ms-3">
                                <li class="text-secondary"><a href="#">Including CountUp in your project involves adding the
                                        HTML attribute <code></code> to the CountUp element, accompanied by
                                        the target counting value set using. For a comprehensive
                                        range of options, including loop parameters and more, please review the detailed choices
                                        below.</a></li>
                                <li class=" text-secondary"><a href="#">You have the ability to programmatically control
                                        CountUp instances. To explore additional options for Smooth Scroll, refer to the official
                                        plugin site for comprehensive information.</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <h5 class="mb-1">Document Markup Guide</h5>
                            <ul class="list-disc ms-3">
                                <li class=" text-secondary"><a href="#">Configuring specific settings in CountUp is achieved
                                        through HTML attributes. Below are references for each. For a full range of options, please
                                        review the official documentation.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- js-->
<script src="{{asset('assets/js/countup.js')}}"></script>
@endsection
