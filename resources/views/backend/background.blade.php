@extends('layout.master')
@section('title', 'Background')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Background</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
									<span>
									  <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
									</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Background</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Background start -->
        <div class="row gap-4">
            <!-- Background colors start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Background colors</h5>
                        <a  data-bs-toggle="collapse" href="#button1"
                            aria-expanded="false" aria-controls="button1">
                            <i class="ti ti-code source" data-source="btn1"></i>
                        </a>
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="d-flex gap-2 flex-wrap">
                            <button type="button" class="btn bg-primary text-white">bg-primary</button>
                            <button type="button" class="btn bg-secondary text-white">bg-secondary</button>
                            <button type="button" class="btn bg-success text-white">bg-success</button>
                            <button type="button" class="btn bg-danger text-white">bg-danger</button>
                            <button type="button" class="btn bg-warning text-white">bg-warning</button>
                            <button type="button" class="btn bg-info text-white">bg-info</button>
                            <button type="button" class="btn bg-light text-dark">bg-light</button>
                            <button type="button" class="btn bg-dark text-white">bg-dark</button>
                        </div>
                    </div>

                    <pre class="btn1 collapse mt-3" id="button1">
<code class="language-html">&lt;div class="card"&gt;
 &lt;div class="card-header"&gt;
       &lt;h5&gt;Background colors&lt;/h5&gt;
      &lt;/div&gt;
      &lt;div class="card-body d-flex justify-content-between align-items-center"&gt;
       &lt;div class="d-flex gap-2 flex-wrap"&gt;
        &lt;button type="button" class="btn bg-primary text-white"&gt;bg-primary&lt;/button&gt;
        &lt;button type="button" class="btn bg-secondary text-white"&gt;bg-secondary&lt;/button&gt;
        &lt;button type="button" class="btn bg-success text-white"&gt;bg-success&lt;/button&gt;
        &lt;button type="button" class="btn bg-danger text-white"&gt;bg-danger&lt;/button&gt;
        &lt;button type="button" class="btn bg-warning text-white"&gt;bg-warning&lt;/button&gt;
        &lt;button type="button" class="btn bg-info text-white"&gt;bg-info&lt;/button&gt;
        &lt;button type="button" class="btn bg-light text-dark"&gt;bg-light&lt;/button&gt;
        &lt;button type="button" class="btn bg-dark text-white"&gt;bg-dark&lt;/button&gt;
       &lt;/div&gt;
      &lt;/div&gt;
&lt;/div&gt;</code>
                  </pre>
                </div>
            </div>
            <!-- Background colors end -->
            <!-- Background color shades start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5 class="txt-ellipsis">Background color shades</h5>
                        <a  data-bs-toggle="collapse" href="#button2"
                            aria-expanded="false" aria-controls="button2">
                            <i class="ti ti-code source" data-source="btn2"></i>
                        </a>
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="d-flex gap-2 flex-wrap">
                            <button type="button" class="btn bg-primary-900">bg-primary-900</button>
                            <button type="button" class="btn bg-primary-800">bg-primary-800</button>
                            <button type="button" class="btn bg-primary-700">bg-primary-700</button>
                            <button type="button" class="btn bg-primary-600">bg-primary-600</button>
                            <button type="button" class="btn bg-primary-500">bg-primary-500</button>
                            <button type="button" class="btn bg-primary-400">bg-primary-400</button>
                            <button type="button" class="btn bg-primary-300">bg-primary-300</button>
                        </div>
                    </div>
                    <pre class="btn2 collapse mt-3" id="button2">
<code class="language-html">&lt;div class="card"&gt;
     &lt;div class="card-header"&gt;
      &lt;h5&gt;Background color shades&lt;/h5&gt;
     &lt;/div&gt;
     &lt;div class="card-body d-flex justify-content-between align-items-center"&gt;
      &lt;div class="d-flex gap-2 flex-wrap"&gt;
       &lt;button type="button" class="btn bg-primary-900"&gt;bg-primary-900&lt;/button&gt;
       &lt;button type="button" class="btn bg-primary-800"&gt;bg-primary-800&lt;/button&gt;
       &lt;button type="button" class="btn bg-primary-700"&gt;bg-primary-700&lt;/button&gt;
       &lt;button type="button" class="btn bg-primary-600"&gt;bg-primary-600&lt;/button&gt;
       &lt;button type="button" class="btn bg-primary-500"&gt;bg-primary-500&lt;/button&gt;
       &lt;button type="button" class="btn bg-primary-400"&gt;bg-primary-400&lt;/button&gt;
       &lt;button type="button" class="btn bg-primary-300"&gt;bg-primary-300&lt;/button&gt;
      &lt;/div&gt;
     &lt;/div&gt;
  &lt;/div&gt;</code></pre>
                </div>
            </div>
            <!-- Background color shades end -->
            <!-- Outline Background start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5> Outline Background</h5>
                        <a  data-bs-toggle="collapse" href="#button3"
                            aria-expanded="false" aria-controls="button3">
                            <i class="ti ti-code source" data-source="btn3"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex gap-2 flex-wrap">
                            <button type="button" class="btn bg-outline-primary">bg-outline-primary</button>
                            <button type="button" class="btn bg-outline-secondary">bg-outline-secondary</button>
                            <button type="button" class="btn bg-outline-success">bg-outline-success</button>
                            <button type="button" class="btn bg-outline-danger">bg-outline-danger</button>
                            <button type="button" class="btn bg-outline-warning">bg-outline-warning</button>
                            <button type="button" class="btn bg-outline-info">bg-outline-info</button>
                            <button type="button" class="btn bg-outline-light">bg-outline-light</button>
                            <button type="button" class="btn bg-outline-dark">bg-outline-dark</button>
                        </div>
                    </div>

                    <pre class="btn3 collapse mt-3" id="button3">
<code class="language-html">&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
     &lt;h5&gt; Outline Background&lt;/h5&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;div class="d-flex gap-2 flex-wrap"&gt;
     &lt;button type="button" class="btn bg-outline-primary"&gt;bg-outline-primary&lt;/button&gt;
     &lt;button type="button" class="btn bg-outline-secondary"&gt;bg-outline-secondary&lt;/button&gt;
     &lt;button type="button" class="btn bg-outline-success"&gt;bg-outline-success&lt;/button&gt;
     &lt;button type="button" class="btn bg-outline-danger"&gt;bg-outline-danger&lt;/button&gt;
     &lt;button type="button" class="btn bg-outline-warning"&gt;bg-outline-warning&lt;/button&gt;
     &lt;button type="button" class="btn bg-outline-info"&gt;bg-outline-info&lt;/button&gt;
     &lt;button type="button" class="btn bg-outline-light"&gt;bg-outline-light&lt;/button&gt;
     &lt;button type="button" class="btn bg-outline-dark"&gt;bg-outline-dark&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
            <!-- Outline Background end -->
            <!-- Soft Background start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5> Soft Background</h5>
                        <a  data-bs-toggle="collapse" href="#button4"
                            aria-expanded="false" aria-controls="button4">
                            <i class="ti ti-code source" data-source="btn4"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex gap-2 flex-wrap">
                            <button type="button" class="btn bg-light-primary">bg-light-primary</button>
                            <button type="button" class="btn bg-light-secondary">bg-light-secondary</button>
                            <button type="button" class="btn bg-light-success">bg-light-success</button>
                            <button type="button" class="btn bg-light-danger">bg-light-danger</button>
                            <button type="button" class="btn bg-light-warning">bg-light-warning</button>
                            <button type="button" class="btn bg-light-info">bg-light-info</button>
                            <button type="button" class="btn bg-light-light">bg-light-light</button>
                            <button type="button" class="btn bg-light-dark">bg-light-dark</button>
                            <button type="button" class="btn bg-light-link">bg-light-link</button>
                        </div>
                    </div>

                    <pre class="btn4 collapse mt-3" id="button4">
<code class="language-html">&lt;div class="card"&gt;
     &lt;div class="card-header"&gt;
      &lt;h5&gt; Soft Background&lt;/h5&gt;
     &lt;/div&gt;
     &lt;div class="card-body"&gt;
      &lt;div class="d-flex gap-2 flex-wrap"&gt;
       &lt;button type="button" class="btn bg-light-primary"&gt;bg-light-primary&lt;/button&gt;
       &lt;button type="button" class="btn bg-light-secondary"&gt;bg-light-secondary&lt;/button&gt;
       &lt;button type="button" class="btn bg-light-success"&gt;bg-light-success&lt;/button&gt;
       &lt;button type="button" class="btn bg-light-danger"&gt;bg-light-danger&lt;/button&gt;
       &lt;button type="button" class="btn bg-light-warning"&gt;bg-light-warning&lt;/button&gt;
       &lt;button type="button" class="btn bg-light-info"&gt;bg-light-info&lt;/button&gt;
       &lt;button type="button" class="btn bg-light-light"&gt;bg-light-light&lt;/button&gt;
       &lt;button type="button" class="btn bg-light-dark"&gt;bg-light-dark&lt;/button&gt;
       &lt;button type="button" class="btn bg-light-link"&gt;bg-light-link&lt;/button&gt;
      &lt;/div&gt;
     &lt;/div&gt;
  &lt;/div&gt;</code></pre>
                </div>
            </div>
            <!-- Soft Background end -->
        </div>
        <!-- Background end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

@endsection

