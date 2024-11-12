@extends('layout.master')
@section('title', 'Progress')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Progress</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Progress</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Progress start -->
        <div class="row progress-rtl">
            <!-- Progress Bars Basic start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Progress Bars Basic</h5>
                        <a  data-bs-toggle="collapse" href="#progressBar1"
                            aria-expanded="false" aria-controls="progressBar1">
                            <i class="ti ti-code source" data-source="progress1"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex gap-3 flex-wrap">
                                <div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-primary" style="width: 12.5%"></div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-secondary" style="width: 25%"></div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="37.5" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 37.5%"></div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-danger" style="width: 50%"></div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="62.5" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-warning" style="width: 62.5%"></div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-info" style="width: 75%"></div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="82.5" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-light" style="width: 82.5%"></div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-dark" style="width: 95%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <pre class="progress1 collapse mt-3" id="progressBar1">
                    <code class="language-html">

                           &lt;div class="card"&gt;
                        &lt;div class="card-header"&gt;
                         &lt;h5&gt;Progress Bars Basic&lt;/h5&gt;
                        &lt;/div&gt;
                        &lt;div class="card-body"&gt;
                         &lt;div class="row"&gt;
                          &lt;div class="d-flex gap-3 flex-wrap"&gt;
                           &lt;div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                            &lt;div class="progress-bar bg-primary" style="width: 12.5%"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="progress w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                            &lt;div class="progress-bar bg-secondary" style="width: 25%"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="progress w-100" role="progressbar" aria-valuenow="37.5" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                            &lt;div class="progress-bar bg-success" style="width: 37.5%"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="progress w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                            &lt;div class="progress-bar bg-danger" style="width: 50%"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="progress w-100" role="progressbar" aria-valuenow="62.5" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                            &lt;div class="progress-bar bg-warning" style="width: 62.5%"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="progress w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                            &lt;div class="progress-bar bg-info" style="width: 75%"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="progress w-100" role="progressbar" aria-valuenow="82.5" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                            &lt;div class="progress-bar bg-light" style="width: 82.5%"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="progress w-100" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                            &lt;div class="progress-bar bg-dark" style="width: 95%"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                          &lt;/div&gt;
                         &lt;/div&gt;
                        &lt;/div&gt;
                               &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>
            <!-- Progress Bars Basic end-->
            <!-- Progress Bars light with text start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5 class="txt-ellipsis">Progress Bars Light With Text</h5>
                        <a  data-bs-toggle="collapse" href="#progressBar2"
                            aria-expanded="false" aria-controls="progressBar2">
                            <i class="ti ti-code source" data-source="progress2"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex gap-3 flex-wrap">
                                <div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-light-primary" style="width: 12.5%"> 12.5% </div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-light-secondary" style="width: 25%"> 25% </div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="37.5" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-light-success" style="width: 37.5%"> 37.5% </div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-light-danger" style="width: 50%"> 50% </div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="62.5" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-light-warning" style="width: 62.5%"> 62.5% </div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-light-info" style="width: 75%"> 75% </div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="82.5" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-light-light" style="width: 82.5%"> 82.5% </div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-light-dark" style="width: 95%"> 95% </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <pre class="progress2 collapse mt-3" id="progressBar2">
                    <code class="language-html">

                         &lt;div class="card"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;h5&gt;Progress Bars light with text&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body"&gt;
                          &lt;div class="row"&gt;
                         &lt;div class="d-flex gap-3 flex-wrap"&gt;
                          &lt;div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                         aria-valuemax="100"&gt;
                         &lt;div class="progress-bar bg-light-primary" style="width: 12.5%"&gt; 12.5% &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                         aria-valuemax="100"&gt;
                         &lt;div class="progress-bar bg-light-secondary" style="width: 25%"&gt; 25% &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress w-100" role="progressbar" aria-valuenow="37.5" aria-valuemin="0"
                         aria-valuemax="100"&gt;
                         &lt;div class="progress-bar bg-light-success" style="width: 37.5%"&gt; 37.5% &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                         aria-valuemax="100"&gt;
                         &lt;div class="progress-bar bg-light-danger" style="width: 50%"&gt; 50% &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress w-100" role="progressbar" aria-valuenow="62.5" aria-valuemin="0"
                         aria-valuemax="100"&gt;
                         &lt;div class="progress-bar bg-light-warning" style="width: 62.5%"&gt; 62.5% &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                         aria-valuemax="100"&gt;
                         &lt;div class="progress-bar bg-light-info" style="width: 75%"&gt; 75% &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress w-100" role="progressbar" aria-valuenow="82.5" aria-valuemin="0"
                         aria-valuemax="100"&gt;
                         &lt;div class="progress-bar bg-light-light" style="width: 82.5%"&gt; 82.5% &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress w-100" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                         aria-valuemax="100"&gt;
                         &lt;div class="progress-bar bg-light-dark" style="width: 95%"&gt; 95% &lt;/div&gt;
                          &lt;/div&gt;
                         &lt;/div&gt;
                          &lt;/div&gt;
                         &lt;/div&gt;
                          &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>
            <!-- Progress Bars light with text end -->
            <!-- Striped Progress with animation start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5 class="txt-ellipsis">Striped Progress With Animation</h5>
                        <a  data-bs-toggle="collapse" href="#progressBar3"
                            aria-expanded="false" aria-controls="progressBar3">
                            <i class="ti ti-code source" data-source="progress3"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex gap-3 flex-wrap">
                                <div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-primary progress-bar-striped" style="width: 12.5%"> 12.5% </div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated"
                                         style="width: 25%"> 25% </div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="37.5" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                                         style="width: 37.5%"> 37.5% </div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                                         style="width: 50%"> 50% </div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="62.5" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated"
                                         style="width: 62.5%"> 62.5% </div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                                         style="width: 75%"> 75% </div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="82.5" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-light progress-bar-striped progress-bar-animated"
                                         style="width: 82.5%"> 82.5% </div>
                                </div>
                                <div class="progress w-100" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                     aria-valuemax="100">
                                    <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated"
                                         style="width: 95%"> 95% </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <pre class="progres3 collapse mt-3" id="progressBar3">
                    <code class="language-html">

                      &lt;div class="card"&gt;
                          &lt;div class="card-header"&gt;
                           &lt;h5&gt;Striped Progress with animation&lt;/h5&gt;
                          &lt;/div&gt;
                          &lt;div class="card-body"&gt;
                           &lt;div class="row"&gt;
                            &lt;div class="d-flex gap-3 flex-wrap"&gt;
                             &lt;div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-primary progress-bar-striped" style="width: 12.5%"&gt; 12.5% &lt;/div&gt;
                             &lt;/div&gt;
                             &lt;div class="progress w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated"
                               style="width: 25%"&gt; 25% &lt;/div&gt;
                             &lt;/div&gt;
                             &lt;div class="progress w-100" role="progressbar" aria-valuenow="37.5" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                               style="width: 37.5%"&gt; 37.5% &lt;/div&gt;
                             &lt;/div&gt;
                             &lt;div class="progress w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                               style="width: 50%"&gt; 50% &lt;/div&gt;
                             &lt;/div&gt;
                             &lt;div class="progress w-100" role="progressbar" aria-valuenow="62.5" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-warning progress-bar-striped progress-bar-animated"
                               style="width: 62.5%"&gt; 62.5% &lt;/div&gt;
                             &lt;/div&gt;
                             &lt;div class="progress w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                               style="width: 75%"&gt; 75% &lt;/div&gt;
                             &lt;/div&gt;
                             &lt;div class="progress w-100" role="progressbar" aria-valuenow="82.5" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-light progress-bar-striped progress-bar-animated"
                               style="width: 82.5%"&gt; 82.5% &lt;/div&gt;
                             &lt;/div&gt;
                             &lt;div class="progress w-100" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-dark progress-bar-striped progress-bar-animated"
                               style="width: 95%"&gt; 95% &lt;/div&gt;
                             &lt;/div&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                          &lt;/div&gt;
                         &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>
            <!-- Striped Progress with animation end -->
            <!-- Progress Sizes start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Progress Sizes</h5>
                        <a  data-bs-toggle="collapse" href="#progressBar4"
                            aria-expanded="false" aria-controls="progressBar4">
                            <i class="ti ti-code source" data-source="progress4"></i>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-column gap-3">
                        <div class="progress h-5">
                            <div class="progress-bar bg-primary h-5" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 20%;"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 30%;">This is normal size</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 40%;">This is normal size</div>
                        </div>
                        <div class="progress h-15">
                            <div class="progress-bar bg-success h-15" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 50%;"> height 15px</div>
                        </div>
                        <div class="progress h-15">
                            <div class="progress-bar bg-info h-15" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 60%;"> height 15px</div>
                        </div>
                        <div class="progress h-20">
                            <div class="progress-bar bg-danger h-20" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 70%;"> height 20px</div>
                        </div>
                        <div class="progress h-25">
                            <div class="progress-bar bg-warning h-25" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 80%;"> height 25px</div>
                        </div>
                    </div>

                    <pre class="progres4 collapse mt-3" id="progressBar4">
                    <code class="language-html">

                          &lt;div class="card"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;h5&gt;Progress Sizes&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body d-flex flex-column gap-3"&gt;
                          &lt;div class="progress h-5"&gt;
                           &lt;div class="progress-bar bg-primary h-5" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                            aria-valuemax="100" style="width: 20%;"&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress"&gt;
                           &lt;div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100" style="width: 30%;"&gt;This is normal size&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress"&gt;
                           &lt;div class="progress-bar bg-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100" style="width: 40%;"&gt;This is normal size&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress h-15"&gt;
                           &lt;div class="progress-bar bg-success h-15" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                            aria-valuemax="100" style="width: 50%;"&gt; height 15px&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress h-15"&gt;
                           &lt;div class="progress-bar bg-info h-15" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                            aria-valuemax="100" style="width: 60%;"&gt; height 15px&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress h-20"&gt;
                           &lt;div class="progress-bar bg-danger h-20" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                            aria-valuemax="100" style="width: 70%;"&gt; height 20px&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress h-25"&gt;
                           &lt;div class="progress-bar bg-warning h-25" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                            aria-valuemax="100" style="width: 80%;"&gt; height 25px&lt;/div&gt;
                          &lt;/div&gt;
                         &lt;/div&gt;
                                &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>
            <!-- Progress Sizes and -->
            <!-- The real time example start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>The Real Time Example</h5>
                        <a  data-bs-toggle="collapse" href="#progressBar5"
                            aria-expanded="false" aria-controls="progressBar5">
                            <i class="ti ti-code source" data-source="progress5"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex gap-3 flex-wrap">
                                    <div class="progress-box bg-light-primary w-100">
                                        <div class="progress-content">
                                            <div>
                                                <div class="left d-flex align-items-center">
                                  <span class="spinner-border spinner-border-sm me-2 ms-2" role="status"
                                        aria-hidden="true"></span>
                                                    Loading data...
                                                </div>
                                                <div class="right">
                                                    <i class="fa fa-close"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress w-100 h-5" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-primary h-5" style="width: 100%"></div>
                                        </div>
                                    </div>
                                    <div class="progress-box bg-light-secondary w-100">
                                        <div class="progress-content">
                                            <div>
                                                <div class="left d-flex align-items-center">
                                                    <b class="me-1 ms-1">75%</b> Processing
                                                </div>
                                                <div class="right">
                                                    <i class="fa fa-close"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress w-100 h-5" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-secondary h-5" style="width: 75%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex gap-3 flex-wrap">
                                    <div class="progress-box bg-light-success w-100">
                                        <div class="progress-content">
                                            <div>
                                                <div class="left d-flex align-items-center">
                                                    <b class="me-1 ms-1">52%</b> Updating..
                                                </div>
                                                <div class="right">
                                                    <span class="badge text-bg-success">1 Min</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress w-100 h-5" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-success h-5" style="width: 52%"></div>
                                        </div>
                                    </div>

                                    <div class="progress-box bg-light-danger w-100">
                                        <div class="progress-content">
                                            <div>
                                                <div class="left d-flex align-items-center">
                                                    <i class="ti ti-trash me-1 ms-1"></i> Deleting data <small> (85% remain)</small>
                                                </div>
                                                <div class="right">
                                                    <span class="badge text-bg-danger">1 Min left</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress w-100 h-5" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-danger h-5" style="width: 15%"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <pre class="progres5 collapse mt-3" id="progressBar5">
                    <code class="language-html">

                         &lt;div class="card"&gt;
                         &lt;div class="card-header"&gt;
                         &lt;h5&gt;The real time example&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body"&gt;
                         &lt;div class="row"&gt;
                         &lt;div class="col-md-6 mb-3"&gt;
                          &lt;div class="d-flex gap-3 flex-wrap"&gt;
                          &lt;div class="progress-box bg-light-primary w-100"&gt;
                          &lt;div class="progress-content"&gt;
                           &lt;div&gt;
                           &lt;div class="left d-flex align-items-center"&gt;
                           &lt;span class="spinner-border spinner-border-sm me-2 ms-2" role="status"
                          aria-hidden="true"&gt;&lt;/span&gt;
                           Loading data...
                           &lt;/div&gt;
                           &lt;div class="right"&gt;
                           &lt;i class="fa fa-close"&gt;&lt;/i&gt;
                           &lt;/div&gt;
                           &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress w-100 h-5" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                           aria-valuemax="100"&gt;
                           &lt;div class="progress-bar bg-primary h-5" style="width: 100%"&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress-box bg-light-secondary w-100"&gt;
                          &lt;div class="progress-content"&gt;
                           &lt;div&gt;
                           &lt;div class="left d-flex align-items-center"&gt;
                           &lt;b class="me-1 ms-1"&gt;75%&lt;/b&gt; Processing
                           &lt;/div&gt;
                           &lt;div class="right"&gt;
                           &lt;i class="fa fa-close"&gt;&lt;/i&gt;
                           &lt;/div&gt;
                           &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress w-100 h-5" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                           aria-valuemax="100"&gt;
                           &lt;div class="progress-bar bg-secondary h-5" style="width: 75%"&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;/div&gt;
                         &lt;/div&gt;
                         &lt;div class="col-md-6"&gt;
                          &lt;div class="d-flex gap-3 flex-wrap"&gt;
                          &lt;div class="progress-box bg-light-success w-100"&gt;
                          &lt;div class="progress-content"&gt;
                           &lt;div&gt;
                           &lt;div class="left d-flex align-items-center"&gt;
                           &lt;b class="me-1 ms-1"&gt;52%&lt;/b&gt; Updating..
                           &lt;/div&gt;
                           &lt;div class="right"&gt;
                           &lt;span class="badge text-bg-success"&gt;1 Min&lt;/span&gt;
                           &lt;/div&gt;
                           &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress w-100 h-5" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                           aria-valuemax="100"&gt;
                           &lt;div class="progress-bar bg-success h-5" style="width: 52%"&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;/div&gt;
                        <br>
                          &lt;div class="progress-box bg-light-danger w-100"&gt;
                          &lt;div class="progress-content"&gt;
                           &lt;div&gt;
                           &lt;div class="left d-flex align-items-center"&gt;
                           &lt;i class="ti ti-trash me-1 ms-1"&gt;&lt;/i&gt; Deleting data &lt;small&gt; (85% remain)&lt;/small&gt;
                           &lt;/div&gt;
                           &lt;div class="right"&gt;
                           &lt;span class="badge text-bg-danger"&gt;1 Min left&lt;/span&gt;
                           &lt;/div&gt;
                           &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="progress w-100 h-5" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                           aria-valuemax="100"&gt;
                           &lt;div class="progress-bar bg-danger h-5" style="width: 15%"&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;/div&gt;
                        <br>
                          &lt;/div&gt;
                         &lt;/div&gt;
                         &lt;/div&gt;
                         &lt;/div&gt;
                          &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>
            <!-- The real time example end -->
        </div>
        <!-- Progress end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection

