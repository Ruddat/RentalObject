@extends('layout.master')
@section('title', 'Cheatsheet')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/all.css')}}">

    <!-- toastify css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/toastify/toastify.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Cheatsheet</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                          <span>
                            <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
                          </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Cheatsheet</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <div class="row">
            <div class="col-12">
                <div class="cheatsheet-header">
                    <img src="{{asset('../assets/images/logo/3.png')}}" alt="">
                    <h2>Your Ultimate Cheatsheet</h2>
                    <div class="search-div app-form">
                        <div class="input-group b-r-search">
                            <span class="input-group-text bg-primary border-0 "><i class="ti ti-search"></i></span>
                            <input class="form-control cheatsheet-filter" type="text" placeholder="Search..." aria-label="Search">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="cheatsheet-blocks" data-masonry='{"percentPosition": true }'>
                    <div class="card cheatsheets-card box-template-list toggle-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-start f-s-18 f-w-500 rounded-bottom-0 py-2 box-template-name"
                               data-bs-toggle="collapse" href="#badges" aria-expanded="false" aria-controls="badges">
                                badges
                            </a>
                        </div>
                        <div class="collapse card-body show p-0" id="badges">
                            <ul>

                                <li class="list-item-preview d-flex gap-2" data-header="primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> primary </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgePrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgePrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgePrimaryClass" class="opacity-0 w-0 h-0">badge text-bg-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgePrimaryCode">
                                &lt;span class="badge text-bg-primary"&gt;Primary&lt;/span&gt;
                               </code>
                             </pre>
                                </li>

                                <li class="list-item-preview d-flex gap-2"  data-header="secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> secondary</span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgeSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgeSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgeSecondaryClass" class="opacity-0 w-0 h-0">badge text-bg-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgeSecondaryCode">
                               &lt;span class="badge text-bg-secondary"&gt;Secondary&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2"  data-header="success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> success</span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgeSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgeSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgeSuccessClass" class="opacity-0 w-0 h-0">badge text-bg-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgeSuccessCode">
                              &lt;span class="badge text-bg-success"&gt;Success&lt;/span&gt;
                               </code>
                             </pre>

                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> danger</span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgeDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgeDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgeDangerClass" class="opacity-0 w-0 h-0">badge text-bg-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgeDangerCode">
                               &lt;span class="badge text-bg-danger"&gt;Danger&lt;/span>
                               </code>
                             </pre>

                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> warning </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgeWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgeWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgeWarningClass" class="opacity-0 w-0 h-0">badge text-bg-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgeWarningCode">
                               &lt;span class="badge text-bg-warning"&gt;Warning&lt;/span&gt;
                               </code>
                             </pre>

                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> info </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgeInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgeInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgeInfoClass" class="opacity-0 w-0 h-0">badge text-bg-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgeInfoCode">
                               &lt;span class="badge text-bg-info"&gt;Info&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2"  data-header="light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> light </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgeLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgeLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgeLightClass" class="opacity-0 w-0 h-0">badge text-bg-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgeLightCode">
                              &lt;span class="badge text-bg-light"&gt;Light&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> dark </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgeDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgeDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgeDarkClass" class="opacity-0 w-0 h-0">badge text-bg-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgeDarkCode">
                               &lt;span class="badge text-bg-dark"&gt;Dark&lt;/span&gt;
                               </code>
                             </pre>

                                </li>

                                <li class="list-item-preview d-flex gap-2" data-header="badges-outline-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-outline-primary </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('outlinePrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#outlinePrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="outlinePrimaryClass" class="opacity-0 w-0 h-0">badge text-outline-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="outlinePrimaryCode">
                                &lt;span class="badge text-outline-primary"&gt;Primary&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="badges-outline-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-outline-secondary </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('outlineSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#outlineSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="outlineSecondaryClass" class="opacity-0 w-0 h-0">badge text-outline-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="outlineSecondaryCode">
                                &lt;span class="badge text-outline-secondary"&gt;Secondary&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="badges-outline-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-outline-success </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('outlineSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#outlineSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="outlineSuccessClass" class="opacity-0 w-0 h-0">badge text-outline-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="outlineSuccessCode">
                                &lt;span class="badge text-outline-success"&gt;Success&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="badges-outline-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-outline-danger </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('outlineDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#outlineDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="outlineDangerClass" class="opacity-0 w-0 h-0">badge text-outline-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="outlineDangerCode">
                                &lt;span class="badge text-outline-danger"&gt;Danger&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="badges-outline-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-outline-warning </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('outlineWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#outlineWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="outlineWarningClass" class="opacity-0 w-0 h-0">badge text-outline-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="outlineWarningCode">
                                &lt;span class="badge text-outline-warning"&gt;Warning&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="badges-outline-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-outline-info </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('outlineInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#outlineInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="outlineInfoClass" class="opacity-0 w-0 h-0">badge text-outline-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="outlineInfoCode">
                                &lt;span class="badge text-outline-info"&gt;Info&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="badges-outline-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-outline-dark </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('outlineDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#outlineDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="outlineDarkClass" class="opacity-0 w-0 h-0">badge text-outline-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="outlineDarkCode">
                                &lt;span class="badge text-outline-dark"&gt;Dark&lt;/span&gt;
                               </code>
                             </pre>
                                </li>

                                <li class="list-item-preview d-flex gap-2" data-header="badges-light-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-light-primary </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgesLightPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgesLightPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgesLightPrimaryClass" class="opacity-0 w-0 h-0">badge text-light-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgesLightPrimaryCode">
                                &lt;span class="badge text-light-primary"&gt;Primary&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="badges-light-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-light-secondary </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgesLightSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgesLightSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgesLightSecondaryClass" class="opacity-0 w-0 h-0">badge text-light-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgesLightSecondaryCode">
                                &lt;span class="badge text-light-secondary"&gt;Secondary&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="badges-light-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-light-success </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgesLightSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgesLightSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgesLightSuccessClass" class="opacity-0 w-0 h-0">badge text-light-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgesLightSuccessCode">
                                &lt;span class="badge text-light-success"&gt;Success&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="badges-light-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-light-danger </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgesLightDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgesLightDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgesLightDangerClass" class="opacity-0 w-0 h-0">badge text-light-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgesLightDangerCode">
                                &lt;span class="badge text-light-danger"&gt;Danger&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="badges-light-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-light-warning </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgesLighteWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgesLighteWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgesLighteWarningClass" class="opacity-0 w-0 h-0">badge text-light-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgesLighteWarningCode">
                                &lt;span class="badge text-light-warning"&gt;Warning&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="badges-light-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-light-info </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgesLightInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgesLightInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgesLightInfoClass" class="opacity-0 w-0 h-0">badge text-light-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgesLightInfoCode">
                                &lt;span class="badge text-light-info"&gt;Info&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="badges-light-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-light-light </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgesLightLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgesLightLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgesLightLightClass" class="opacity-0 w-0 h-0">badge text-light-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgesLightLightCode">
                                &lt;span class="badge text-light-light"&gt;Info&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="badges-light-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> badge text-light-dark </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('badgesLightDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#badgesLightDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="badgesLightDarkClass" class="opacity-0 w-0 h-0">badge text-light-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="badgesLightDarkCode">
                                &lt;span class="badge text-light-dark"&gt;Dark&lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card cheatsheets-card box-template-list toggle-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-start f-s-18 f-w-500 rounded-bottom-0 py-2 box-template-name"
                               data-bs-toggle="collapse" href="#alerts" aria-expanded="false" aria-controls="alerts">
                                alerts
                            </a>
                        </div>
                        <div class="collapse card-body show p-0" id="alerts">
                            <ul>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertPrimaryClass" class="opacity-0 w-0 h-0">alert alert-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertPrimaryCode">
                                 &lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt; Simple primary alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertSecondaryClass" class="opacity-0 w-0 h-0">alert alert-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertSecondaryCode">
                                 &lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt; Simple secondary  alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-success</span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertSuccessClass" class="opacity-0 w-0 h-0">alert alert-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertSuccessCode">
                                   &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt; Simple success  alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-danger</span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertDangerClass" class="opacity-0 w-0 h-0">alert alert-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertDangerCode">
                                   &lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt; Simple danger  alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-warning </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertWarningClass" class="opacity-0 w-0 h-0">alert alert-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertWarningCode">
                                  &lt;div class=&quot;alert alert-warning &quot; role=&quot;alert&quot;&gt; Simple warning  alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-info </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertInfoClass" class="opacity-0 w-0 h-0">alert alert-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertInfoCode">
                                 &lt;div class=&quot;alert alert-info &quot; role=&quot;alert&quot;&gt; Simple info  alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-light </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLightClass" class="opacity-0 w-0 h-0">alert alert-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLightCode">
                               &lt;div class=&quot;alert alert-light &quot; role=&quot;alert&quot;&gt; Simple light  alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-dark </span>
                                    </div>

                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertDarkClass" class="opacity-0 w-0 h-0">alert alert-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertDarkCode">
                              &lt;div class=&quot;alert alert-dark &quot; role=&quot;alert&quot;&gt; Simple dark  alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>

                                <li class="list-item-preview d-flex gap-2" data-header="alert-outline-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-outline-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertOutlinePrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertOutlinePrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertOutlinePrimaryClass" class="opacity-0 w-0 h-0">alert alert-outline-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertOutlinePrimaryCode">
                                &lt;div class=&quot;alert alert-outline-primary&quot; role=&quot;alert&quot;&gt; outline primary alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-outline-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-outline-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertOutlineSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertOutlineSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertOutlineSecondaryClass" class="opacity-0 w-0 h-0">alert alert-outline-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertOutlineSecondaryCode">
                                &lt;div class=&quot;alert alert-outline-secondary&quot; role=&quot;alert&quot;&gt; outline secondary alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-outline-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-outline-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertOutlineSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertOutlineSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertOutlineSuccessClass" class="opacity-0 w-0 h-0">alert alert-outline-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertOutlineSuccessCode">
                                &lt;div class=&quot;alert alert-outline-success&quot; role=&quot;alert&quot;&gt; outline success alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-outline-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-outline-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertOutlineDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertOutlineDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertOutlineDangerClass" class="opacity-0 w-0 h-0">alert alert-outline-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertOutlineDangerCode">
                                &lt;div class=&quot;alert alert-outline-danger&quot; role=&quot;alert&quot;&gt; outline danger alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-outline-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-outline-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertOutlineWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertOutlineWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertOutlineWarningClass" class="opacity-0 w-0 h-0">alert alert-outline-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertOutlineWarningCode">
                                &lt;div class=&quot;alert alert-outline-warning&quot; role=&quot;alert&quot;&gt; outline warning alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-outline-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-outline-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertOutlineInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertOutlineInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertOutlineInfoClass" class="opacity-0 w-0 h-0">alert alert-outline-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertOutlineInfoCode">
                                &lt;div class=&quot;alert alert-outline-info&quot; role=&quot;alert&quot;&gt; outline info alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-outline-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-outline-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertOutlineLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertOutlineLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertOutlineLightClass" class="opacity-0 w-0 h-0">alert alert-outline-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertOutlineLightCode">
                                &lt;div class=&quot;alert alert-outline-light&quot; role=&quot;alert&quot;&gt; outline light alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-outline-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-outline-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertOutlineDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertOutlineDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertOutlineDarkClass" class="opacity-0 w-0 h-0">alert alert-outline-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertOutlineDarkCode">
                                &lt;div class=&quot;alert alert-outline-dark&quot; role=&quot;alert&quot;&gt; outline dark alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>

                                <li class="list-item-preview d-flex gap-2" data-header="alert-light-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-light-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLightPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLightPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLightPrimaryClass" class="opacity-0 w-0 h-0">alert alert-light-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLightPrimaryCode">
                                &lt;div class=&quot;alert alert-light-primary&quot; role=&quot;alert&quot;&gt; light primary alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-light-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-light-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLightSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLightSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLightSecondaryClass" class="opacity-0 w-0 h-0">alert alert-light-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLightSecondaryCode">
                                &lt;div class=&quot;alert alert-light-secondary&quot; role=&quot;alert&quot;&gt; light secondary alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-light-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-light-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLightSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLightSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLightSuccessClass" class="opacity-0 w-0 h-0">alert alert-light-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLightSuccessCode">
                                &lt;div class=&quot;alert alert-light-success&quot; role=&quot;alert&quot;&gt; light success alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-light-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-light-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLightDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLightDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLightDangerClass" class="opacity-0 w-0 h-0">alert alert-light-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLightDangerCode">
                                &lt;div class=&quot;alert alert-light-danger&quot; role=&quot;alert&quot;&gt; light danger alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-light-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-light-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLightWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLightWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLightWarningClass" class="opacity-0 w-0 h-0">alert alert-light-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLightWarningCode">
                                &lt;div class=&quot;alert alert-light-warning&quot; role=&quot;alert&quot;&gt; light warning alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-light-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-light-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLightInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLightInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLightInfoClass" class="opacity-0 w-0 h-0">alert alert-light-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLightInfoCode">
                                &lt;div class=&quot;alert alert-light-info&quot; role=&quot;alert&quot;&gt; light info alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-light-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-light-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLightLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLightLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLightLightClass" class="opacity-0 w-0 h-0">alert alert-light-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLightLightCode">
                                &lt;div class=&quot;alert alert-light-light&quot; role=&quot;alert&quot;&gt; light light alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-light-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> alert-light-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLightDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLightDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLightDarkClass" class="opacity-0 w-0 h-0">alert alert-light-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLightDarkCode">
                                &lt;div class=&quot;alert alert-light-dark&quot; role=&quot;alert&quot;&gt; light dark alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>

                                <li class="list-item-preview d-flex gap-2" data-header="light-border-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-light-border-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('borderLightPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#borderLightPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="borderLightPrimaryClass" class="opacity-0 w-0 h-0">alert alert-light-border-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="borderLightPrimaryCode">
                                &lt;div class=&quot;alert alert-light-border-primary&quot; role=&quot;alert&quot;&gt; Light-border-primary alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="light-border-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-light-border-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('borderLightSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#borderLightSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="borderLightSecondaryClass" class="opacity-0 w-0 h-0">alert alert-light-border-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="borderLightSecondaryCode">
                                &lt;div class=&quot;alert alert-light-border-secondary&quot; role=&quot;alert&quot;&gt; Light-border-secondary alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="light-border-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-light-border-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('borderLightSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#borderLightSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="borderLightSuccessClass" class="opacity-0 w-0 h-0">alert alert-light-border-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="borderLightSuccessCode">
                                &lt;div class=&quot;alert alert-light-border-success&quot; role=&quot;alert&quot;&gt; Light-border-success alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="light-border-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-light-border-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('borderLightDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#borderLightDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="borderLightDangerClass" class="opacity-0 w-0 h-0">alert alert-light-border-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="borderLightDangerCode">
                                &lt;div class=&quot;alert alert-light-border-danger&quot; role=&quot;alert&quot;&gt; Light-border-danger alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="light-border-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-light-border-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('borderLightWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#borderLightWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="borderLightWarningClass" class="opacity-0 w-0 h-0">alert alert-light-border-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="borderLightWarningCode">
                                &lt;div class=&quot;alert alert-light-border-warning&quot; role=&quot;alert&quot;&gt; Light-border-warning alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="light-border-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-light-border-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('borderInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#borderInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="borderInfoClass" class="opacity-0 w-0 h-0">alert alert-light-border-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="borderInfoCode">
                                &lt;div class=&quot;alert alert-light-border-info&quot; role=&quot;alert&quot;&gt; Light-border-info alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="light-border-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-light-border-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('borderLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#borderLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="borderLightClass" class="opacity-0 w-0 h-0">alert alert-light-border-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="borderLightCode">
                                &lt;div class=&quot;alert alert-light-border-light&quot; role=&quot;alert&quot;&gt; Light-border-light alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="light-border-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-light-border-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('borderDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#borderDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="borderDarkClass" class="opacity-0 w-0 h-0">alert alert-light-border-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="borderDarkCode">
                                &lt;div class=&quot;alert alert-light-border-dark&quot; role=&quot;alert&quot;&gt; Light-border-dark alert -check it out  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>

                                <li class="list-item-preview d-flex gap-2" data-header="alert-border-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-border-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertBorderPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertBorderPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertBorderPrimaryClass" class="opacity-0 w-0 h-0">alert alert-border-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertBorderPrimaryCode">
                                &lt;div class=&quot;alert alert-border-primary&quot; role=&quot;alert&quot;&gt;  Alert with left slide border - check out!  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-border-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-border-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertBorderSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertBorderSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertBorderSecondaryClass" class="opacity-0 w-0 h-0">alert alert-border-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertBorderSecondaryCode">
                                &lt;div class=&quot;alert alert-border-secondary&quot; role=&quot;alert&quot;&gt;  Alert with left slide border - check out!  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-border-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-border-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertBorderSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertBorderSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertBorderSuccessClass" class="opacity-0 w-0 h-0">alert alert-border-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertBorderSuccessCode">
                                &lt;div class=&quot;alert alert-border-success&quot; role=&quot;alert&quot;&gt;  Alert with left slide border - check out!  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-border-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-border-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertBorderDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertBorderDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertBorderDangerClass" class="opacity-0 w-0 h-0">alert alert-border-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertBorderDangerCode">
                                &lt;div class=&quot;alert alert-border-danger&quot; role=&quot;alert&quot;&gt;  Alert with left slide border - check out!  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-border-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-border-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertBorderWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertBorderWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertBorderWarningClass" class="opacity-0 w-0 h-0">alert alert-border-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertBorderWarningCode">
                                &lt;div class=&quot;alert alert-border-warning&quot; role=&quot;alert&quot;&gt;  Alert with left slide border - check out!  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-border-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-border-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertBorderInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertBorderInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertBorderInfoClass" class="opacity-0 w-0 h-0">alert alert-border-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertBorderInfoCode">
                                &lt;div class=&quot;alert alert-border-info&quot; role=&quot;alert&quot;&gt;  Alert with left slide border - check out!  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-border-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-border-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertBorderLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertBorderLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertBorderLightClass" class="opacity-0 w-0 h-0">alert alert-border-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertBorderLightCode">
                                &lt;div class=&quot;alert alert-border-light&quot; role=&quot;alert&quot;&gt;  Alert with left slide border - check out!  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-border-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-border-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertBorderDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertBorderDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertBorderDarkClass" class="opacity-0 w-0 h-0">alert alert-border-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertBorderDarkCode">
                                &lt;div class=&quot;alert alert-border-dark&quot; role=&quot;alert&quot;&gt;  Alert with left slide border - check out!  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>

                                <li class="list-item-preview d-flex gap-2" data-header="alert-label-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-label alert-label-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLablePrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLablePrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLablePrimaryClass" class="opacity-0 w-0 h-0">alert alert-label alert-label-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLablePrimaryCode">
                                &lt;div class=&quot;alert alert-label alert-label-primary&quot; role=&quot;alert&quot;&gt;
                          &lt;p class=&quot;mb-0&quot;&gt;
                            &lt;i class=&quot;ti ti-download label-icon label-icon-primary&quot;&gt;&lt;/i&gt;
                            Alert with lable icons - check out!
                          &lt;/p&gt;
                        &lt;div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-label-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-label alert-label-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLableSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLableSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLableSecondaryClass" class="opacity-0 w-0 h-0">alert alert-label alert-label-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLableSecondaryCode">
                                &lt;div class=&quot;alert alert-label alert-label-secondary&quot; role=&quot;alert&quot;&gt;
                          &lt;p class=&quot;mb-0&quot;&gt;
                            &lt;i class=&quot;ti ti-download label-icon label-icon-secondary&quot;&gt;&lt;/i&gt;
                            Alert with lable icons - check out!
                          &lt;/p&gt;
                        &lt;div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-label-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-label alert-label-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLableSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLableSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLableSuccessClass" class="opacity-0 w-0 h-0">alert alert-label alert-label-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLableSuccessCode">
                                &lt;div class=&quot;alert alert-label alert-label-success&quot; role=&quot;alert&quot;&gt;
                          &lt;p class=&quot;mb-0&quot;&gt;
                            &lt;i class=&quot;ti ti-download label-icon label-icon-success&quot;&gt;&lt;/i&gt;
                            Alert with lable icons - check out!
                          &lt;/p&gt;
                        &lt;div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-label-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-label alert-label-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLableDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLableDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLableDangerClass" class="opacity-0 w-0 h-0">alert alert-label alert-label-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLableDangerCode">
                                &lt;div class=&quot;alert alert-label alert-label-danger&quot; role=&quot;alert&quot;&gt;
                          &lt;p class=&quot;mb-0&quot;&gt;
                            &lt;i class=&quot;ti ti-download label-icon label-icon-danger&quot;&gt;&lt;/i&gt;
                            Alert with lable icons - check out!
                          &lt;/p&gt;
                        &lt;div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-label-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-label alert-label-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLableWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLableWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLableWarningClass" class="opacity-0 w-0 h-0">alert alert-label alert-label-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLableWarningCode">
                                &lt;div class=&quot;alert alert-label alert-label-warning&quot; role=&quot;alert&quot;&gt;
                          &lt;p class=&quot;mb-0&quot;&gt;
                            &lt;i class=&quot;ti ti-download label-icon label-icon-warning&quot;&gt;&lt;/i&gt;
                            Alert with lable icons - check out!
                          &lt;/p&gt;
                        &lt;div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-label-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-label alert-label-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLableInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLableInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLableInfoClass" class="opacity-0 w-0 h-0">alert alert-label alert-label-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLableInfoCode">
                                &lt;div class=&quot;alert alert-label alert-label-info&quot; role=&quot;alert&quot;&gt;
                          &lt;p class=&quot;mb-0&quot;&gt;
                            &lt;i class=&quot;ti ti-download label-icon label-icon-info&quot;&gt;&lt;/i&gt;
                            Alert with lable icons - check out!
                          &lt;/p&gt;
                        &lt;div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-label-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-label alert-label-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLableLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLableLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLableLightClass" class="opacity-0 w-0 h-0">alert alert-label alert-label-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLableLightCode">
                                &lt;div class=&quot;alert alert-label alert-label-light&quot; role=&quot;alert&quot;&gt;
                          &lt;p class=&quot;mb-0&quot;&gt;
                            &lt;i class=&quot;ti ti-download label-icon label-icon-light&quot;&gt;&lt;/i&gt;
                            Alert with lable icons - check out!
                          &lt;/p&gt;
                        &lt;div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="alert-label-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">alert alert-label alert-label-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('alertLableDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#alertLableDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="alertLableDarkClass" class="opacity-0 w-0 h-0">alert alert-label alert-label-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="alertLableDarkCode">
                                &lt;div class=&quot;alert alert-label alert-label-dark&quot; role=&quot;alert&quot;&gt;
                          &lt;p class=&quot;mb-0&quot;&gt;
                            &lt;i class=&quot;ti ti-download label-icon label-icon-dark&quot;&gt;&lt;/i&gt;
                            Alert with lable icons - check out!
                          &lt;/p&gt;
                        &lt;div&gt;
                               </code>
                             </pre>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card cheatsheets-card box-template-list toggle-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-start f-s-18 f-w-500 rounded-bottom-0 py-2 box-template-name"
                               data-bs-toggle="collapse" href="#buttons" aria-expanded="false" aria-controls="buttons">
                                Button
                            </a>
                        </div>
                        <div class="collapse card-body show p-0" id="buttons">
                            <ul>
                                <li class="list-item-preview d-flex gap-2" data-header="button-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('buttonPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#buttonPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="buttonPrimaryClass" class="opacity-0 w-0 h-0">btn-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="buttonPrimaryCode">
                                &lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('buttonSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#buttonSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="buttonSecondaryClass" class="opacity-0 w-0 h-0">btn-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="buttonSecondaryCode">
                                &lt;button type="button" class="btn btn-secondary"&gt;Secondary&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('buttonSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#buttonSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="buttonSuccessClass" class="opacity-0 w-0 h-0">btn-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="buttonSuccessCode">
                                &lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('buttonDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#buttonDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="buttonDangerClass" class="opacity-0 w-0 h-0">btn-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="buttonDangerCode">
                                &lt;button type="button" class="btn btn-danger"&gt;Danger&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('buttonWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#buttonWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="buttonWarningClass" class="opacity-0 w-0 h-0">btn-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="buttonWarningCode">
                                &lt;button type="button" class="btn btn-warning"&gt;Warning&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('buttonInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#buttonInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="buttonInfoClass" class="opacity-0 w-0 h-0">btn-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="buttonInfoCode">
                                &lt;button type="button" class="btn btn-info"&gt;Info&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('buttonLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#buttonLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="buttonLightClass" class="opacity-0 w-0 h-0">btn-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="buttonLightCode">
                                &lt;button type="button" class="btn btn-light"&gt;Light&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('buttonDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#buttonDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="buttonDarkClass" class="opacity-0 w-0 h-0">btn-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="buttonDarkCode">
                                &lt;button type="button" class="btn btn-dark"&gt;Dark&lt;/button&gt;
                               </code>
                             </pre>
                                </li>

                                <li class="list-item-preview d-flex gap-2" data-header="button-outline-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-outline-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnOutlinePrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnOutlinePrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnOutlinePrimaryClass" class="opacity-0 w-0 h-0">btn-outline-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnOutlinePrimaryCode">
                                &lt;button type="button" class="btn btn-outline-primary"&gt;Primary&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-outline-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-outline-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnOutlineSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnOutlineSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnOutlineSecondaryClass" class="opacity-0 w-0 h-0">btn-outline-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnOutlineSecondaryCode">
                                &lt;button type="button" class="btn btn-outline-secondary"&gt;Secondary&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-outline-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-outline-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnOutlineSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnOutlineSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnOutlineSuccessClass" class="opacity-0 w-0 h-0">btn-outline-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnOutlineSuccessCode">
                                &lt;button type="button" class="btn btn-outline-success"&gt;Success&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-outline-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-outline-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnOutlineDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnOutlineDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnOutlineDangerClass" class="opacity-0 w-0 h-0">btn-outline-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnOutlineDangerCode">
                                &lt;button type="button" class="btn btn-outline-danger"&gt;Danger&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-outline-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-outline-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnOutlineWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnOutlineWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnOutlineWarningClass" class="opacity-0 w-0 h-0">btn-outline-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnOutlineWarningCode">
                                &lt;button type="button" class="btn btn-outline-warning"&gt;Warning&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-outline-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-outline-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnOutlineInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnOutlineInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnOutlineInfoClass" class="opacity-0 w-0 h-0">btn-outline-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnOutlineInfoCode">
                                &lt;button type="button" class="btn btn-outline-info"&gt;Info&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-outline-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-outline-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnOutlineLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnOutlineLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnOutlineLightClass" class="opacity-0 w-0 h-0">btn-outline-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnOutlineLightCode">
                                &lt;button type="button" class="btn btn-outline-light"&gt;Light&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-outline-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-outline-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnOutlineDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnOutlineDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnOutlineDarkClass" class="opacity-0 w-0 h-0">btn-outline-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnOutlineDarkCode">
                                &lt;button type="button" class="btn btn-outline-dark"&gt;Dark&lt;/button&gt;
                               </code>
                             </pre>
                                </li>

                                <li class="list-item-preview d-flex gap-2" data-header="button-light-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-light-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnLightPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnLightPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnLightPrimaryClass" class="opacity-0 w-0 h-0">btn-light-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnLightPrimaryCode">
                                &lt;button type="button" class="btn btn-light-primary"&gt;Primary&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-light-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-light-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnLightSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnLightSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnLightSecondaryClass" class="opacity-0 w-0 h-0">btn-light-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnLightSecondaryCode">
                                &lt;button type="button" class="btn btn-light-secondary"&gt;Secondary&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-light-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-light-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnLightSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnLightSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnLightSuccessClass" class="opacity-0 w-0 h-0">btn-light-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnLightSuccessCode">
                                &lt;button type="button" class="btn btn-light-success"&gt;Success&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-light-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-light-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnLightDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnLightDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnLightDangerClass" class="opacity-0 w-0 h-0">btn-light-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnLightDangerCode">
                                &lt;button type="button" class="btn btn-light-danger"&gt;Danger&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-light-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-light-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnLightWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnLightWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnLightWarningClass" class="opacity-0 w-0 h-0">btn-light-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnLightWarningCode">
                                &lt;button type="button" class="btn btn-light-warning"&gt;Warning&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-light-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-light-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnLightInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnLightInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnLightInfoClass" class="opacity-0 w-0 h-0">btn-light-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnLightInfoCode">
                                &lt;button type="button" class="btn btn-light-info"&gt;Info&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-light-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-light-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnLightLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnLightLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnLightLightClass" class="opacity-0 w-0 h-0">btn-light-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnLightLightCode">
                                &lt;button type="button" class="btn btn-light-light"&gt;Light&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="button-light-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-light-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnLightDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnLightDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnLightDarkClass" class="opacity-0 w-0 h-0">btn-light-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnLightDarkCode">
                                &lt;button type="button" class="btn btn-light-dark"&gt;Dark&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-icon">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> icon-btn</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnIconClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnIconCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnIconClass" class="opacity-0 w-0 h-0">icon-btn</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnIconCode">
                                &lt;button type="button" class="btn btn-primary icon-btn b-r-4"&gt; &lt;i
                                class="ti ti-capture"&gt;&lt;/i&gt;&lt;/button&gt;

                                &lt;button type="button" class="btn btn-secondary icon-btn b-r-4"&gt;&lt;i
                                class="ti ti-bell-ringing"&gt;&lt;/i&gt;&lt;/button&gt;

                                &lt;button type="button" class="btn btn-outline-primary icon-btn b-r-4"&gt; &lt;i
                                 class="ti ti-capture"&gt;&lt;/i&gt;&lt;/button&gt;

                                &lt;button type="button" class="btn btn-outline-secondary icon-btn b-r-4"&gt;&lt;i
                                 class="ti ti-bell-ringing"&gt;&lt;/i&gt;&lt;/button&gt;

                                &lt;button type="button" class="btn btn-light-primary icon-btn b-r-4"&gt;
                                 &lt;i class="ti ti-capture"&gt;&lt;/i&gt;&lt;/button&gt;

                                &lt;button type="button" class="btn btn-light-secondary icon-btn b-r-4"&gt;&lt;i
                                  class="ti ti-bell-ringing"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-facebook">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-facebook</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnFacebookClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnFacebookCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnFacebookClass" class="opacity-0 w-0 h-0">btn-facebook</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnFacebookCode">
                                &lt;button type="button" class="btn btn-facebook icon-btn b-r-22"&gt;&lt;i
                                class="ti ti-brand-facebook text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-twitter">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-twitter</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnTwitterClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnTwitterCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnTwitterClass" class="opacity-0 w-0 h-0">btn-twitter</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnTwitterCode">
                                &lt;button type="button" class="btn btn-twitter icon-btn b-r-22"&gt;&lt;i
                                class="ti ti-brand-twitter text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-pinterest">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-pinterest</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnPinterestClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnPinterestCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnPinterestClass" class="opacity-0 w-0 h-0">btn-pinterest</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnPinterestCode">
                                &lt;button type="button" class="btn btn-pinterest icon-btn b-r-22"&gt;&lt;i
                                class="ti ti-brand-pinterest text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-linkedin">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-linkedin</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnLinkedinClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnLinkedinCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnLinkedinClass" class="opacity-0 w-0 h-0">btn-linkedin</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnLinkedinCode">
                                &lt;button type="button" class="btn btn-linkedin icon-btn b-r-22"&gt;&lt;i
                                class="ti ti-brand-linkedin text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-reddit">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-reddit</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnRedditClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnRedditCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnRedditClass" class="opacity-0 w-0 h-0">btn-reddit</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnRedditCode">
                                &lt;button type="button" class="btn btn-reddit icon-btn b-r-22"&gt;&lt;i
                                class="ti ti-brand-reddit text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-whatsapp">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-whatsapp</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnWhatsappClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnWhatsappCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnWhatsappClass" class="opacity-0 w-0 h-0">btn-whatsapp</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnWhatsappCode">
                                &lt;button type="button" class="btn btn-whatsapp icon-btn b-r-22"&gt;&lt;i
                                class="ti ti-brand-whatsapp text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-gmail">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-gmail</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnGmailClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnGmailCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnGmailClass" class="opacity-0 w-0 h-0">btn-gmail</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnGmailCode">
                                &lt;button type="button" class="btn btn-gmail icon-btn b-r-22"&gt;&lt;i
                                class="ti ti-brand-gmail text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-telegram">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-telegram</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnTelegramClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnTelegramCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnTelegramClass" class="opacity-0 w-0 h-0">btn-telegram</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnTelegramCode">
                                &lt;button type="button" class="btn btn-telegram icon-btn b-r-22"&gt;&lt;i
                                class="ti ti-brand-telegram text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-youtube">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-youtube</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnYoutubeClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnYoutubeCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnYoutubeClass" class="opacity-0 w-0 h-0">btn-youtube</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnYoutubeCode">
                                &lt;button type="button" class="btn btn-youtube icon-btn b-r-22"&gt;&lt;i
                                class="ti ti-brand-youtube text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-vimeo">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-vimeo</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnVimeoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnVimeoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnVimeoClass" class="opacity-0 w-0 h-0">btn-vimeo</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnVimeoCode">
                                &lt;button type="button" class="btn btn-vimeo icon-btn b-r-22"&gt;&lt;i
                                class="ti ti-brand-vimeo text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-behance">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-behance</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnBehanceClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnBehanceCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnBehanceClass" class="opacity-0 w-0 h-0">btn-behance</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnBehanceCode">
                                &lt;button type="button" class="btn btn-behance icon-btn b-r-22"&gt;&lt;i
                                class="ti ti-brand-behance text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-github">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-github</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnGithubClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnGithubCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnGithubClass" class="opacity-0 w-0 h-0">btn-github</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnGithubCode">
                                &lt;button type="button" class="btn btn-github icon-btn b-r-22"&gt;&lt;i
                                class="ti ti-brand-github text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-skype">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-skype</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnSkypeClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnSkypeCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnSkypeClass" class="opacity-0 w-0 h-0">btn-skype</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnSkypeCode">
                                &lt;button type="button" class="btn btn-skype icon-btn b-r-22"&gt;&lt;i
                                class="ti ti-brand-skype text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="btn-snapchat">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> btn-snapchat</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('btnSnapchatClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#btnSnapchatCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="btnSnapchatClass" class="opacity-0 w-0 h-0">btn-snapchat</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="btnSnapchatCode">
                                &lt;button type="button" class="btn btn-snapchat icon-btn b-r-22"&gt;&lt;i
                                class="ti ti-brand-snapchat text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                               </code>
                             </pre>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card cheatsheets-card box-template-list toggle-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-start f-s-18 f-w-500 rounded-bottom-0 py-2 box-template-name"
                               data-bs-toggle="collapse" href="#cards" aria-expanded="false" aria-controls="cards">
                                Cards
                            </a>
                        </div>
                        <div class="collapse card-body show p-0" id="cards">
                            <ul>
                                <li class="list-item-preview d-flex gap-2" data-header="card">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> card</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardClass" class="opacity-0 w-0 h-0">card</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="cardCode">
    &lt;div class="card hover-effect"&gt;
    &lt;div class="card-header"&gt;
     &lt;h6 class="mb-0 mt-2 f-w-600"&gt;My Profile&lt;/h6&gt;
    &lt;/div&gt;
    &lt;div class="card-body"&gt;
     &lt;p&gt;
     ....
     &lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="card-footer"&gt;
     &lt;div class="row"&gt;
      &lt;div class="col-6"&gt;
       &lt;i class="ti ti-heart-filled text-danger f-s-16 m-r-5"&gt; &lt;/i&gt;
       &lt;span&gt; 60 likes &lt;/span&gt;
      &lt;/div&gt;
      &lt;div class="col-6"&gt;
       &lt;ul class="avatar-group float-end"&gt;
        &lt;li class="h-25 w-25 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
         data-bs-toggle="tooltip" data-bs-title="Sabrina Torres"&gt;
         &lt;img src="{{asset('assets//images/avtar/4.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden"&gt;
        &lt;/li&gt;
        &lt;li class="h-25 w-25 d-flex-center b-r-50 text-bg-info b-2-light position-relative"
         data-bs-toggle="tooltip" data-bs-title="Sabrina Torres"&gt;
         &lt;img src="{{asset('assets//images/avtar/3.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden"&gt;
        &lt;/li&gt;
        &lt;li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip"
         data-bs-title="5 More"&gt;
         5+
        &lt;/li&gt;
       &lt;/ul&gt;
      &lt;/div&gt;
     &lt;/div&gt;
    &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardPrimaryClass" class="opacity-0 w-0 h-0">card-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardPrimaryCode">
    &lt;div class="card hover-effect card-primary"&gt;
           &lt;div class="card-header"&gt;
              &lt;h5&gt;primary card&lt;/h5&gt;
           &lt;/div&gt;
           &lt;div class="card-body"&gt;
                &lt;h6&gt;Card body&lt;/h6&gt;
                &lt;p&gt;...&lt;/p&gt;
           &lt;/div&gt;
    &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardSecondaryClass" class="opacity-0 w-0 h-0">card-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardSecondaryCode">
    &lt;div class="card hover-effect card-secondary"&gt;
           &lt;div class="card-header"&gt;
              &lt;h5&gt;secondary card&lt;/h5&gt;
           &lt;/div&gt;
           &lt;div class="card-body"&gt;
                &lt;h6&gt;Card body&lt;/h6&gt;
                &lt;p&gt;...&lt;/p&gt;
           &lt;/div&gt;
    &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardSuccessClass" class="opacity-0 w-0 h-0">card-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardSuccessCode">
    &lt;div class="card hover-effect card-success"&gt;
           &lt;div class="card-header"&gt;
              &lt;h5&gt;success card&lt;/h5&gt;
           &lt;/div&gt;
           &lt;div class="card-body"&gt;
                &lt;h6&gt;Card body&lt;/h6&gt;
                &lt;p&gt;...&lt;/p&gt;
           &lt;/div&gt;
    &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardDangerClass" class="opacity-0 w-0 h-0">card-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardDangerCode">
    &lt;div class="card hover-effect card-danger"&gt;
           &lt;div class="card-header"&gt;
              &lt;h5&gt;danger card&lt;/h5&gt;
           &lt;/div&gt;
           &lt;div class="card-body"&gt;
                &lt;h6&gt;Card body&lt;/h6&gt;
                &lt;p&gt;...&lt;/p&gt;
           &lt;/div&gt;
    &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardWarningClass" class="opacity-0 w-0 h-0">card-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardWarningCode">
    &lt;div class="card hover-effect card-warning"&gt;
           &lt;div class="card-header"&gt;
              &lt;h5&gt;warning card&lt;/h5&gt;
           &lt;/div&gt;
           &lt;div class="card-body"&gt;
                &lt;h6&gt;Card body&lt;/h6&gt;
                &lt;p&gt;...&lt;/p&gt;
           &lt;/div&gt;
    &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardInfoClass" class="opacity-0 w-0 h-0">card-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardInfoCode">
    &lt;div class="card hover-effect card-info"&gt;
           &lt;div class="card-header"&gt;
              &lt;h5&gt;info card&lt;/h5&gt;
           &lt;/div&gt;
           &lt;div class="card-body"&gt;
                &lt;h6&gt;Card body&lt;/h6&gt;
                &lt;p&gt;...&lt;/p&gt;
           &lt;/div&gt;
    &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardLightClass" class="opacity-0 w-0 h-0">card-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardLightCode">
    &lt;div class="card hover-effect card-light"&gt;
           &lt;div class="card-header"&gt;
              &lt;h5&gt;light card&lt;/h5&gt;
           &lt;/div&gt;
           &lt;div class="card-body"&gt;
                &lt;h6&gt;Card body&lt;/h6&gt;
                &lt;p&gt;...&lt;/p&gt;
           &lt;/div&gt;
    &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardDarkClass" class="opacity-0 w-0 h-0">card-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardDarkCode">
    &lt;div class="card hover-effect card-dark"&gt;
           &lt;div class="card-header"&gt;
              &lt;h5&gt;dark card&lt;/h5&gt;
           &lt;/div&gt;
           &lt;div class="card-body"&gt;
                &lt;h6&gt;Card body&lt;/h6&gt;
                &lt;p&gt;...&lt;/p&gt;
           &lt;/div&gt;
    &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-outline-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-outline-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardOutlinePrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardOutlinePrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardOutlinePrimaryClass" class="opacity-0 w-0 h-0">card-outline-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardOutlinePrimaryCode">
                                &lt;div class="card hover-effect card-outline-primary"&gt;
                                  &lt;div class="card-header"&gt;
                                    &lt;h5&gt;Outline card-outline-primary card&lt;/h5&gt;
                                  &lt;/div&gt;
                                  &lt;div class="card-body"&gt;
                                     &lt;h6&gt;Card body&lt;/h6&gt;
                                    &lt;p&gt;...&lt;/p&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-outline-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-outline-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardOutlineSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardOutlineSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardOutlineSecondaryClass" class="opacity-0 w-0 h-0">card-outline-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardOutlineSecondaryCode">
                                &lt;div class="card hover-effect card-outline-secondary"&gt;
                                  &lt;div class="card-header"&gt;
                                    &lt;h5&gt;Outline card-outline-secondary card&lt;/h5&gt;
                                  &lt;/div&gt;
                                  &lt;div class="card-body"&gt;
                                     &lt;h6&gt;Card body&lt;/h6&gt;
                                    &lt;p&gt;...&lt;/p&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-outline-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-outline-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardOutlineSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardOutlineSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardOutlineSuccessClass" class="opacity-0 w-0 h-0">card-outline-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardOutlineSuccessCode">
                                &lt;div class="card hover-effect card-outline-success"&gt;
                                  &lt;div class="card-header"&gt;
                                    &lt;h5&gt;Outline card-outline-success card&lt;/h5&gt;
                                  &lt;/div&gt;
                                  &lt;div class="card-body"&gt;
                                     &lt;h6&gt;Card body&lt;/h6&gt;
                                    &lt;p&gt;...&lt;/p&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-outline-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-outline-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardOutlineDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardOutlineDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardOutlineDangerClass" class="opacity-0 w-0 h-0">card-outline-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardOutlineDangerCode">
                                &lt;div class="card hover-effect card-outline-danger"&gt;
                                  &lt;div class="card-header"&gt;
                                    &lt;h5&gt;Outline card-outline-danger card&lt;/h5&gt;
                                  &lt;/div&gt;
                                  &lt;div class="card-body"&gt;
                                     &lt;h6&gt;Card body&lt;/h6&gt;
                                    &lt;p&gt;...&lt;/p&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-outline-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-outline-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardOutlineWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardOutlineWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardOutlineWarningClass" class="opacity-0 w-0 h-0">card-outline-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardOutlineWarningCode">
                                &lt;div class="card hover-effect card-outline-warning"&gt;
                                  &lt;div class="card-header"&gt;
                                    &lt;h5&gt;Outline card-outline-warning card&lt;/h5&gt;
                                  &lt;/div&gt;
                                  &lt;div class="card-body"&gt;
                                     &lt;h6&gt;Card body&lt;/h6&gt;
                                    &lt;p&gt;...&lt;/p&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-outline-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-outline-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardOutlineInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardOutlineInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardOutlineInfoClass" class="opacity-0 w-0 h-0">card-outline-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardOutlineInfoCode">
                                &lt;div class="card hover-effect card-outline-info"&gt;
                                  &lt;div class="card-header"&gt;
                                    &lt;h5&gt;Outline card-outline-info card&lt;/h5&gt;
                                  &lt;/div&gt;
                                  &lt;div class="card-body"&gt;
                                     &lt;h6&gt;Card body&lt;/h6&gt;
                                    &lt;p&gt;...&lt;/p&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-outline-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-outline-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardOutlineLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardOutlineLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardOutlineLightClass" class="opacity-0 w-0 h-0">card-outline-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardOutlineLightCode">
                                &lt;div class="card hover-effect card-outline-light"&gt;
                                  &lt;div class="card-header"&gt;
                                    &lt;h5&gt;Outline card-outline-light card&lt;/h5&gt;
                                  &lt;/div&gt;
                                  &lt;div class="card-body"&gt;
                                     &lt;h6&gt;Card body&lt;/h6&gt;
                                    &lt;p&gt;...&lt;/p&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="card-outline-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">card-outline-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardOutlineDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardOutlineDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardOutlineDarkClass" class="opacity-0 w-0 h-0">card-outline-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardOutlineDarkCode">
                                &lt;div class="card hover-effect card-outline-dark"&gt;
                                  &lt;div class="card-header"&gt;
                                    &lt;h5&gt;Outline card-outline-dark card&lt;/h5&gt;
                                  &lt;/div&gt;
                                  &lt;div class="card-body"&gt;
                                     &lt;h6&gt;Card body&lt;/h6&gt;
                                    &lt;p&gt;...&lt;/p&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="icon-bg">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">icon-bg</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardIconBgClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardIconBgCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardIconBgClass" class="opacity-0 w-0 h-0">icon-bg</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardIconBgCode">
      &lt;div class="col-lg-8 offset-lg-2"&gt;
   &lt;div class="card hover-effect card-primary"&gt;
    &lt;div class="card-body"&gt;
     &lt;i class="ti ti-alarm icon-bg"&gt;&lt;/i&gt;
     &lt;h6&gt;Card With icon&lt;/h6&gt;
     &lt;p&gt;With supporting text below lead-in to additional content below as a natural.&lt;/p&gt;
    &lt;/div&gt;
   &lt;/div&gt;
  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="border-top">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">border-primary border-top</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardBorderTopClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardBorderTopCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardBorderTopClass" class="opacity-0 w-0 h-0">border-primary border-top</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardBorderTopCode">
                                &lt;div class="card hover-effect border-primary border-top border-4"&gt;
                                         &lt;div class="card-body"&gt;
                                          &lt;h6&gt;Card With Top border&lt;/h6&gt;
                                          &lt;p&gt;With supporting text below lead-in to additional content below as a natural.&lt;/p&gt;
                                         &lt;/div&gt;
                                        &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="border-bottom">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">border-secondary border-bottom</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardBorderBottomClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardBorderBottomCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardBorderBottomClass" class="opacity-0 w-0 h-0">border-secondary border-bottom</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardBorderBottomCode">
                                &lt;div class="card hover-effect border-secondary border-bottom border-4"&gt;
                                         &lt;div class="card-body"&gt;
                                          &lt;h6&gt;Card With Bottom border&lt;/h6&gt;
                                          &lt;p&gt;With supporting text below lead-in to additional content below as a natural.&lt;/p&gt;
                                         &lt;/div&gt;
                                        &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="border-start">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">border-success border-start</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardBorderStartClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardBorderStartCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardBorderStartClass" class="opacity-0 w-0 h-0">border-success border-start</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardBorderStartCode">
                                &lt;div class="card hover-effect border-success border-start border-4"&gt;
                                         &lt;div class="card-body"&gt;
                                          &lt;h6&gt;Card With Start border&lt;/h6&gt;
                                          &lt;p&gt;With supporting text below lead-in to additional content below as a natural.&lt;/p&gt;
                                         &lt;/div&gt;
                                        &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="border-end">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">border-danger border-end</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('cardBorderEndClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#cardBorderEndCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="cardBorderEndClass" class="opacity-0 w-0 h-0">border-danger border-end</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="cardBorderEndCode">
                                &lt;div class="card hover-effect border-danger border-end border-4"&gt;
                                         &lt;div class="card-body"&gt;
                                          &lt;h6&gt;Card With End border&lt;/h6&gt;
                                          &lt;p&gt;With supporting text below lead-in to additional content below as a natural.&lt;/p&gt;
                                         &lt;/div&gt;
                                        &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card cheatsheets-card box-template-list toggle-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-start f-s-18 f-w-500 rounded-bottom-0 py-2 box-template-name"
                               data-bs-toggle="collapse" href="#dropdown" aria-expanded="false" aria-controls="dropdown">
                                Dropdown
                            </a>
                        </div>
                        <div class="collapse card-body show p-0" id="dropdown">
                            <ul>
                                <li class="list-item-preview d-flex gap-2" data-header="app-dropdown">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> app-dropdown</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('appDropdownClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#appDropdownCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="appDropdownClass" class="opacity-0 w-0 h-0">app-dropdown</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="appDropdownCode">
                                &lt;div class="card"&gt;
                                &lt;div class="card-body d-flex flex-wrap gap-2"&gt;
                                &lt;div class="app-dropdown"&gt;
                                &lt;button class="btn btn-primary border-0 " type="button" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false"&gt;
                                Clickable Submenu
                                &lt;/button&gt;
                                &lt;div class="dropdown-menu mb-3"&gt;
                                &lt;a href="#" class="dropdown-item"&gt;
                                &lt;span&gt; Action&lt;/span&gt;
                                &lt;i class="ti ti-user-plus ms-auto"&gt;&lt;/i&gt;
                                &lt;/a&gt;
                                &lt;hr class="dropdown-divider"&gt;
                                &lt;a class="dropdown-item border-0" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
                                &lt;span&gt;More Option&lt;/span&gt;
                                &lt;i class="ti ti-arrow-badge-right ms-auto"&gt;&lt;/i&gt;
                                &lt;/a&gt;
                                &lt;div class="dropdown-menu sub-menu"&gt;
                                &lt;a href="#" class="dropdown-item"&gt;
                                &lt;span&gt; Action&lt;/span&gt;
                                &lt;i class="ti ti-user-plus ms-auto"&gt;&lt;/i&gt;
                                &lt;/a&gt;
                                &lt;a href="#" class="dropdown-item"&gt;
                                &lt;span&gt;Another action&lt;/span&gt;
                                &lt;i class="ti ti-circles-relation ms-auto"&gt;&lt;/i&gt;
                                &lt;/a&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;

                                &lt;div class="hover-dropdown app-hover-dropdown"&gt;
                                &lt;button class="btn btn-primary dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown"
                                data-trigger="hover" aria-expanded="false"&gt;
                                Hoverable Dropdown
                                &lt;/button&gt;
                                &lt;ul class="dropdown-menu bg-dark"&gt;
                                &lt;li class="dropdown-item"&gt;
                                &lt;a href="#"&gt;
                                &lt;span&gt; Action&lt;/span&gt;
                                &lt;/a&gt;
                                &lt;i class="ti ti-user-plus ms-auto"&gt;&lt;/i&gt;
                                &lt;/li&gt;
                                &lt;li class="dropdown-item"&gt;
                                &lt;a href="#"&gt;
                                &lt;span&gt;Another action&lt;/span&gt;
                                &lt;/a&gt;
                                &lt;i class="ti ti-circles-relation ms-auto"&gt;&lt;/i&gt;
                                &lt;/li&gt;
                                &lt;li class="dropdown-item"&gt;
                                &lt;a href="#"&gt;
                                &lt;span&gt;Something else here&lt;/span&gt;
                                &lt;/a&gt;
                                &lt;i class="ti ti-message-circle ms-auto"&gt;&lt;/i&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                &lt;hr class="dropdown-divider"&gt;
                                &lt;/li&gt;
                                &lt;li class="hover-dropdown"&gt;
                                &lt;a role="button" class="dropdown-item waves-effect waves-light" data-bs-toggle="dropdown"
                                data-trigger="hover" aria-expanded="false"&gt;
                                More Option
                                &lt;/a&gt;
                                &lt;ul class="dropdown-menu hover-submenu bg-dark"&gt;
                                &lt;li class="dropdown-item"&gt;
                                &lt;a href="#"&gt;
                                &lt;span&gt; Action&lt;/span&gt;
                                &lt;/a&gt;
                                &lt;i class="ti ti-user-plus ms-auto"&gt;&lt;/i&gt;
                                &lt;/li&gt;
                                &lt;li class="dropdown-item"&gt;
                                &lt;a href="#"&gt;
                                &lt;span&gt;Another action&lt;/span&gt;
                                &lt;/a&gt;
                                &lt;i class="ti ti-circles-relation ms-auto"&gt;&lt;/i&gt;
                                &lt;/li&gt;
                                &lt;li class="dropdown-item"&gt;
                                &lt;a href="#"&gt;
                                &lt;span&gt;Something else here&lt;/span&gt;
                                &lt;/a&gt;
                                &lt;i class="ti ti-message-circle ms-auto"&gt;&lt;/i&gt;
                                &lt;/li&gt;
                                &lt;/ul&gt;
                                &lt;/li&gt;

                                &lt;/ul&gt;
                                &lt;/div&gt;

                                &lt;/div&gt;
                               &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-dropdown primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> app-dropdown primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('appdropdownPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#appdropdownPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="appdropdownPrimaryClass" class="opacity-0 w-0 h-0">btn btn-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="appdropdownPrimaryCode">
                                &lt;div class="btn-group btn-rtl"&gt;
                                &lt;button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"&gt;
                                primary &lt;i class="mdi mdi-chevron-down"&gt;&lt;/i&gt;
                                &lt;/button&gt;
                                &lt;div class="dropdown-menu"&gt;
                                &lt;!-- item--&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-dropdown secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> app-dropdown secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('appdropdownSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#appdropdownSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="appdropdownSecondaryClass" class="opacity-0 w-0 h-0">btn btn-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="appdropdownSecondaryCode">
                                &lt;div class="btn-group btn-rtl"&gt;
                                &lt;button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"&gt;
                                secondary &lt;i class="mdi mdi-chevron-down"&gt;&lt;/i&gt;
                                &lt;/button&gt;
                                &lt;div class="dropdown-menu"&gt;
                                &lt;!-- item--&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-dropdown success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> app-dropdown success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('appdropdownSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#appdropdownSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="appdropdownSuccessClass" class="opacity-0 w-0 h-0">btn btn-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="appdropdownSuccessCode">
                                &lt;div class="btn-group btn-rtl"&gt;
                                &lt;button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"&gt;
                                success &lt;i class="mdi mdi-chevron-down"&gt;&lt;/i&gt;
                                &lt;/button&gt;
                                &lt;div class="dropdown-menu"&gt;
                                &lt;!-- item--&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-dropdown danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> app-dropdown danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('appdropdownDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#appdropdownDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="appdropdownDangerClass" class="opacity-0 w-0 h-0">btn btn-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="appdropdownDangerCode">
                                &lt;div class="btn-group btn-rtl"&gt;
                                &lt;button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"&gt;
                                danger &lt;i class="mdi mdi-chevron-down"&gt;&lt;/i&gt;
                                &lt;/button&gt;
                                &lt;div class="dropdown-menu"&gt;
                                &lt;!-- item--&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-dropdown warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> app-dropdown warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('appdropdownWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#appdropdownWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="appdropdownWarningClass" class="opacity-0 w-0 h-0">btn btn-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="appdropdownWarningCode">
                                &lt;div class="btn-group btn-rtl"&gt;
                                &lt;button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"&gt;
                                warning &lt;i class="mdi mdi-chevron-down"&gt;&lt;/i&gt;
                                &lt;/button&gt;
                                &lt;div class="dropdown-menu"&gt;
                                &lt;!-- item--&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-dropdown info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> app-dropdown info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('appdropdownInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#appdropdownInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="appdropdownInfoClass" class="opacity-0 w-0 h-0">btn btn-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="appdropdownInfoCode">
                                &lt;div class="btn-group btn-rtl"&gt;
                                &lt;button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"&gt;
                                info &lt;i class="mdi mdi-chevron-down"&gt;&lt;/i&gt;
                                &lt;/button&gt;
                                &lt;div class="dropdown-menu"&gt;
                                &lt;!-- item--&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-dropdown light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> app-dropdown light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('appdropdownLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#appdropdownLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="appdropdownLightClass" class="opacity-0 w-0 h-0">btn btn-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="appdropdownLightCode">
                                &lt;div class="btn-group btn-rtl"&gt;
                                &lt;button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"&gt;
                                light &lt;i class="mdi mdi-chevron-down"&gt;&lt;/i&gt;
                                &lt;/button&gt;
                                &lt;div class="dropdown-menu"&gt;
                                &lt;!-- item--&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-dropdown dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> app-dropdown dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('appdropdownDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#appdropdownDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="appdropdownDarkClass" class="opacity-0 w-0 h-0">btn btn-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="appdropdownDarkCode">
                                &lt;div class="btn-group btn-rtl"&gt;
                                &lt;button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"&gt;
                                dark &lt;i class="mdi mdi-chevron-down"&gt;&lt;/i&gt;
                                &lt;/button&gt;
                                &lt;div class="dropdown-menu"&gt;
                                &lt;!-- item--&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                                &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="dropdown-menu menu-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> dropdown-menu menu-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dropdownMenuPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dropdownMenuPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dropdownMenuPrimaryClass" class="opacity-0 w-0 h-0">btn btn-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dropdownMenuPrimaryCode">
                                &lt;div class="app-dropdown"&gt;
                                    &lt;button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                     data-bs-auto-close="true" aria-expanded="false"&gt;
                                     &lt;i class="ti ti-dots"&gt;&lt;/i&gt;
                                    &lt;/button&gt;
                                    &lt;ul class="dropdown-menu menu-primary show"&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt; Action&lt;/span&gt;
                                      &lt;i class="ti ti-user-plus"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Another action&lt;/span&gt;
                                      &lt;i class="ti ti-circles-relation"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Something else here&lt;/span&gt;
                                      &lt;i class="ti ti-message-circle"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-divider"&gt;&lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Settings&lt;/span&gt;
                                      &lt;i class="ti ti-settings"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                    &lt;/ul&gt;
                                   &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="dropdown-menu menu-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> dropdown-menu menu-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dropdownMenuSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dropdownMenuSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dropdownMenuSecondaryClass" class="opacity-0 w-0 h-0">btn btn-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dropdownMenuSecondaryCode">
                                &lt;div class="app-dropdown"&gt;
                                    &lt;button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                     data-bs-auto-close="true" aria-expanded="false"&gt;
                                     &lt;i class="ti ti-dots"&gt;&lt;/i&gt;
                                    &lt;/button&gt;
                                    &lt;ul class="dropdown-menu menu-secondary show"&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt; Action&lt;/span&gt;
                                      &lt;i class="ti ti-user-plus"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Another action&lt;/span&gt;
                                      &lt;i class="ti ti-circles-relation"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Something else here&lt;/span&gt;
                                      &lt;i class="ti ti-message-circle"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-divider"&gt;&lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Settings&lt;/span&gt;
                                      &lt;i class="ti ti-settings"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                    &lt;/ul&gt;
                                   &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="dropdown-menu menu-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> dropdown-menu menu-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dropdownMenuSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dropdownMenuSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dropdownMenuSuccessClass" class="opacity-0 w-0 h-0">btn btn-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dropdownMenuSuccessCode">
                                &lt;div class="app-dropdown"&gt;
                                    &lt;button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                     data-bs-auto-close="true" aria-expanded="false"&gt;
                                     &lt;i class="ti ti-dots"&gt;&lt;/i&gt;
                                    &lt;/button&gt;
                                    &lt;ul class="dropdown-menu menu-success show"&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt; Action&lt;/span&gt;
                                      &lt;i class="ti ti-user-plus"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Another action&lt;/span&gt;
                                      &lt;i class="ti ti-circles-relation"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Something else here&lt;/span&gt;
                                      &lt;i class="ti ti-message-circle"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-divider"&gt;&lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Settings&lt;/span&gt;
                                      &lt;i class="ti ti-settings"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                    &lt;/ul&gt;
                                   &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="dropdown-menu menu-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> dropdown-menu menu-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dropdownMenuDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dropdownMenuDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dropdownMenuDangerClass" class="opacity-0 w-0 h-0">btn btn-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dropdownMenuDangerCode">
                                &lt;div class="app-dropdown"&gt;
                                    &lt;button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                     data-bs-auto-close="true" aria-expanded="false"&gt;
                                     &lt;i class="ti ti-dots"&gt;&lt;/i&gt;
                                    &lt;/button&gt;
                                    &lt;ul class="dropdown-menu menu-danger show"&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt; Action&lt;/span&gt;
                                      &lt;i class="ti ti-user-plus"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Another action&lt;/span&gt;
                                      &lt;i class="ti ti-circles-relation"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Something else here&lt;/span&gt;
                                      &lt;i class="ti ti-message-circle"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-divider"&gt;&lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Settings&lt;/span&gt;
                                      &lt;i class="ti ti-settings"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                    &lt;/ul&gt;
                                   &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="dropdown-menu menu-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> dropdown-menu menu-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dropdownMenuWarningrClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dropdownMenuWarningrCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dropdownMenuWarningrClass" class="opacity-0 w-0 h-0">btn btn-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dropdownMenuWarningrCode">
                                &lt;div class="app-dropdown"&gt;
                                    &lt;button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                     data-bs-auto-close="true" aria-expanded="false"&gt;
                                     &lt;i class="ti ti-dots"&gt;&lt;/i&gt;
                                    &lt;/button&gt;
                                    &lt;ul class="dropdown-menu menu-warning show"&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt; Action&lt;/span&gt;
                                      &lt;i class="ti ti-user-plus"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Another action&lt;/span&gt;
                                      &lt;i class="ti ti-circles-relation"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Something else here&lt;/span&gt;
                                      &lt;i class="ti ti-message-circle"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-divider"&gt;&lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Settings&lt;/span&gt;
                                      &lt;i class="ti ti-settings"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                    &lt;/ul&gt;
                                   &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="dropdown-menu menu-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> dropdown-menu menu-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dropdownMenuInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dropdownMenuInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dropdownMenuInfoClass" class="opacity-0 w-0 h-0">btn btn-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dropdownMenuInfoCode">
                                &lt;div class="app-dropdown"&gt;
                                    &lt;button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                     data-bs-auto-close="true" aria-expanded="false"&gt;
                                     &lt;i class="ti ti-dots"&gt;&lt;/i&gt;
                                    &lt;/button&gt;
                                    &lt;ul class="dropdown-menu menu-info show"&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt; Action&lt;/span&gt;
                                      &lt;i class="ti ti-user-plus"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Another action&lt;/span&gt;
                                      &lt;i class="ti ti-circles-relation"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Something else here&lt;/span&gt;
                                      &lt;i class="ti ti-message-circle"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-divider"&gt;&lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Settings&lt;/span&gt;
                                      &lt;i class="ti ti-settings"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                    &lt;/ul&gt;
                                   &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="dropdown-menu menu-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> dropdown-menu menu-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dropdownMenuLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dropdownMenuLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dropdownMenuLightClass" class="opacity-0 w-0 h-0">btn btn-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dropdownMenuLightCode">
                                &lt;div class="app-dropdown"&gt;
                                    &lt;button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                     data-bs-auto-close="true" aria-expanded="false"&gt;
                                     &lt;i class="ti ti-dots"&gt;&lt;/i&gt;
                                    &lt;/button&gt;
                                    &lt;ul class="dropdown-menu menu-light show"&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt; Action&lt;/span&gt;
                                      &lt;i class="ti ti-user-plus"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Another action&lt;/span&gt;
                                      &lt;i class="ti ti-circles-relation"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Something else here&lt;/span&gt;
                                      &lt;i class="ti ti-message-circle"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-divider"&gt;&lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Settings&lt;/span&gt;
                                      &lt;i class="ti ti-settings"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                    &lt;/ul&gt;
                                   &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="dropdown-menu menu-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> dropdown-menu menu-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dropdownMenuDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dropdownMenuDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dropdownMenuDarkClass" class="opacity-0 w-0 h-0">btn btn-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dropdownMenuDarkCode">
                                &lt;div class="app-dropdown"&gt;
                                    &lt;button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                     data-bs-auto-close="true" aria-expanded="false"&gt;
                                     &lt;i class="ti ti-dots"&gt;&lt;/i&gt;
                                    &lt;/button&gt;
                                    &lt;ul class="dropdown-menu menu-dark show"&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt; Action&lt;/span&gt;
                                      &lt;i class="ti ti-user-plus"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Another action&lt;/span&gt;
                                      &lt;i class="ti ti-circles-relation"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Something else here&lt;/span&gt;
                                      &lt;i class="ti ti-message-circle"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                     &lt;li class="dropdown-divider"&gt;&lt;/li&gt;
                                     &lt;li class="dropdown-item d-flex justify-content-between"&gt;
                                      &lt;span&gt;Settings&lt;/span&gt;
                                      &lt;i class="ti ti-settings"&gt;&lt;/i&gt;
                                     &lt;/li&gt;
                                    &lt;/ul&gt;
                                   &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card cheatsheets-card box-template-list toggle-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-start f-s-18 f-w-500 rounded-bottom-0 py-2 box-template-name"
                               data-bs-toggle="collapse" href="#avtar" aria-expanded="false" aria-controls="avtar">
                                Avtar
                            </a>
                        </div>
                        <div class="collapse card-body show p-0" id="avtar">
                            <ul>
                                <li class="list-item-preview d-flex gap-2" data-header="avtar-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> Primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarPrimaryClass" class="opacity-0 w-0 h-0">bg-primary h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarPrimaryCode">
                                &lt;span class="bg-primary h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="avtar-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> Secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarSecondaryClass" class="opacity-0 w-0 h-0">bg-secondary h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarSecondaryCode">
                                &lt;span class="bg-secondary h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="avtar-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> Success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarSuccessClass" class="opacity-0 w-0 h-0">bg-success h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarSuccessCode">
                                &lt;span class="bg-success h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="avtar-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> Danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarDangerClass" class="opacity-0 w-0 h-0">bg-danger h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarDangerCode">
                                &lt;span class="bg-danger h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="avtar-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> Warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarWarningClass" class="opacity-0 w-0 h-0">bg-warning h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarWarningCode">
                                &lt;span class="bg-warning h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="avtar-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> Info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarInfoClass" class="opacity-0 w-0 h-0">bg-info h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarInfoCode">
                                &lt;span class="bg-info h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="avtar-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> Light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarLightClass" class="opacity-0 w-0 h-0">bg-light h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarLightCode">
                                &lt;span class="bg-light h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="avtar-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> Dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarDarkClass" class="opacity-0 w-0 h-0">bg-dark h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarDarkCode">
                                &lt;span class="bg-dark h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-outline-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-outline-primary </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarOutlinePrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarOutlinePrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarOutlinePrimaryClass" class="opacity-0 w-0 h-0">text-outline-primary h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarOutlinePrimaryCode">
                                &lt;span class="text-outline-primary h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-outline-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-outline-secondary </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarOutlineSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarOutlineSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarOutlineSecondaryClass" class="opacity-0 w-0 h-0">text-outline-secondary h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarOutlineSecondaryCode">
                                &lt;span class="text-outline-secondary h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-outline-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-outline-success </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarOutlineSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarOutlineSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarOutlineSuccessClass" class="opacity-0 w-0 h-0">text-outline-success h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarOutlineSuccessCode">
                                &lt;span class="text-outline-success h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-outline-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-outline-danger </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarOutlineDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarOutlineDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarOutlineDangerClass" class="opacity-0 w-0 h-0">text-outline-danger h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarOutlineDangerCode">
                                &lt;span class="text-outline-danger h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-outline-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-outline-warning </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarOutlineWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarOutlineWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarOutlineWarningClass" class="opacity-0 w-0 h-0">text-outline-warning h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarOutlineWarningCode">
                                &lt;span class="text-outline-warning h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-outline-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-outline-info </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarOutlineInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarOutlineInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarOutlineInfoClass" class="opacity-0 w-0 h-0">text-outline-info h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarOutlineInfoCode">
                                &lt;span class="text-outline-info h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-outline-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-outline-light </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarOutlineLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarOutlineLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarOutlineLightClass" class="opacity-0 w-0 h-0">text-outline-light h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarOutlineLightCode">
                                &lt;span class="text-outline-light h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-outline-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-outline-dark </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarOutlineDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarOutlineDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarOutlineDarkClass" class="opacity-0 w-0 h-0">text-outline-dark h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarOutlineDarkCode">
                                &lt;span class="text-outline-dark h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="avtar images">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> avtar images </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarImagesCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarImagesCode">
                                &lt;div class="d-flex gap-3 flex-wrap"&gt;
                                &lt;div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-primary"&gt;
                                 &lt;img src="{{asset('assets//images/avtar/1.png')}}" alt="" class="img-fluid"&gt;
                                &lt;/div&gt;
                                &lt;div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-secondary"&gt;
                                 &lt;img src="{{asset('assets//images/avtar/2.png')}}" alt="" class="img-fluid"&gt;
                                &lt;/div&gt;
                                &lt;div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-success"&gt;
                                 &lt;img src="{{asset('assets//images/avtar/3.png')}}" alt="" class="img-fluid"&gt;
                                &lt;/div&gt;
                                &lt;div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-info"&gt;
                                 &lt;img src="{{asset('assets//images/avtar/4.png')}}" alt="" class="img-fluid"&gt;
                                &lt;/div&gt;
                                &lt;div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-success"&gt;
                                 &lt;img src="{{asset('assets//images/avtar/5.png')}}" alt="" class="img-fluid"&gt;
                                &lt;/div&gt;
                                &lt;div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-danger"&gt;
                                 &lt;img src="{{asset('assets//images/avtar/6.png')}}" alt="" class="img-fluid"&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="avtar size">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> avtar size </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarSizeCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarSizeCode">
                                &lt;div class="d-flex gap-3 flex-wrap"&gt;
                                 &lt;span class="bg-secondary h-30 w-30 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                 &lt;/span&gt;
                                 &lt;span class="bg-success h-35 w-35 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                 &lt;/span&gt;
                                 &lt;span class="bg-info h-40 w-40 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                 &lt;/span&gt;
                                 &lt;span class="bg-warning h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                 &lt;/span&gt;
                                 &lt;span class="bg-danger h-50 w-50 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                 &lt;/span&gt;
                                &lt;/div&gt;
                               &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-light-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-light-primary </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarLightPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarLightPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarLightPrimaryClass" class="opacity-0 w-0 h-0">text-light-primary h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarLightPrimaryCode">
                                &lt;span class="text-light-primary h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-light-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-light-secondary </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarLightSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarLightSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarLightSecondaryClass" class="opacity-0 w-0 h-0">text-light-secondary h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarLightSecondaryCode">
                                &lt;span class="text-light-secondary h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-light-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-light-success </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarLightSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarLightSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarLightSuccessClass" class="opacity-0 w-0 h-0">text-light-success h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarLightSuccessCode">
                                &lt;span class="text-light-success h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-light-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-light-danger </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarLightDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarLightDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarLightDangerClass" class="opacity-0 w-0 h-0">text-light-danger h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarLightDangerCode">
                                &lt;span class="text-light-danger h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-light-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-light-warning </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarLightWarningClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarLightWarningCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarLightWarningClass" class="opacity-0 w-0 h-0">text-light-warning h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarLightWarningCode">
                                &lt;span class="text-light-warning h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-light-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-light-info </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarLightInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarLightInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarLightInfoClass" class="opacity-0 w-0 h-0">text-light-info h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarLightInfoCode">
                                &lt;span class="text-light-info h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-light-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-light-light </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarLightLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarLightLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarLightLightClass" class="opacity-0 w-0 h-0">text-light-light h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarLightLightCode">
                                &lt;span class="text-light-light h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-light-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> text-light-dark </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('avtarLightDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarLightDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="avtarLightDarkClass" class="opacity-0 w-0 h-0">text-light-dark h-45 w-45 d-flex-center b-r-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarLightDarkCode">
                                &lt;span class="text-light-dark h-45 w-45 d-flex-center b-r-50"&gt;
                                  &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                &lt;/span&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="avtar Radius">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> avtar Radius </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarRadiusCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarRadiusCode">

                                 &lt;div class="d-flex gap-3 flex-wrap"&gt;
                                  &lt;span class="text-light-primary h-45 w-45 d-flex-center b-r-0"&gt;
                                   &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                  &lt;/span&gt;

                                  &lt;span class="text-light-secondary h-45 w-45 d-flex-center b-r-6"&gt;
                                   &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                  &lt;/span&gt;

                                  &lt;span class="text-light-success h-45 w-45 d-flex-center b-r-10"&gt;
                                   &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                  &lt;/span&gt;

                                  &lt;span class="text-light-info h-45 w-45 d-flex-center b-r-14"&gt;
                                   &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                  &lt;/span&gt;

                                  &lt;span class="text-light-warning h-45 w-45 d-flex-center b-r-20"&gt;
                                   &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                  &lt;/span&gt;

                                  &lt;span class="text-light-danger h-45 w-45 d-flex-center b-r-30"&gt;
                                   &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                                  &lt;/span&gt;
                                 &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="Avtar group">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> Avtar group </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#avtarGroupCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="avtarGroupCode">

                                 &lt;div class="d-flex gap-3 flex-wrap"&gt;

                               &lt;ul class="avatar-group"&gt;
                               &lt;li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light"
                                data-bs-toggle="tooltip" data-bs-title="Sabrina Torres"&gt;
                                &lt;img src="{{asset('assets//images/avtar/4.png')}}" alt="" class="img-fluid"&gt;
                               &lt;/li&gt;
                               &lt;li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-success b-2-light"
                                data-bs-toggle="tooltip" data-bs-title="Eva Bailey"&gt;
                                &lt;img src="{{asset('assets//images/avtar/5.png')}}" alt="" class="img-fluid"&gt;
                               &lt;/li&gt;
                               &lt;li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-danger b-2-light"
                                data-bs-toggle="tooltip" data-bs-title="Michael Hughes"&gt;
                                &lt;img src="{{asset('assets//images/avtar/6.png')}}" alt="" class="img-fluid"&gt;
                               &lt;/li&gt;
                               &lt;li class="text-bg-secondary h-35 w-35 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                data-bs-title="10 More"&gt;
                                10+
                               &lt;/li&gt;
                                 &lt;/ul&gt;
                                 &lt;ul class="avatar-group"&gt;
                               &lt;li class="h-45 w-45 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                data-bs-toggle="tooltip" data-bs-title="Sabrina Torres"&gt;
                                &lt;span
                                 class="position-absolute top-0 start-2 p-1 bg-danger border border-light rounded-circle"&gt;&lt;/span&gt;
                                &lt;img src="{{asset('assets//images/avtar/4.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden"&gt;
                               &lt;/li&gt;
                               &lt;li class="h-45 w-45 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                data-bs-toggle="tooltip" data-bs-title="Sabrina Torres"&gt;
                                &lt;span
                                 class="position-absolute top-0 start-2 p-1 bg-success border border-light rounded-circle"&gt;&lt;/span&gt;
                                &lt;img src="{{asset('assets//images/avtar/1.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden"&gt;
                               &lt;/li&gt;
                               &lt;li class="h-45 w-45 d-flex-center b-r-50 text-bg-warning b-2-light position-relative"
                                data-bs-toggle="tooltip" data-bs-title="Sabrina Torres"&gt;
                                &lt;span
                                 class="position-absolute top-0 start-2 p-1 bg-warning border border-light rounded-circle"&gt;&lt;/span&gt;
                                &lt;img src="{{asset('assets//images/avtar/2.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden"&gt;
                               &lt;/li&gt;
                               &lt;li class="h-45 w-45 d-flex-center b-r-50 text-bg-info b-2-light position-relative"
                                data-bs-toggle="tooltip" data-bs-title="Sabrina Torres"&gt;
                                &lt;span
                                 class="position-absolute top-0 start-2 p-1 bg-info border border-light rounded-circle"&gt;&lt;/span&gt;
                                &lt;img src="{{asset('assets//images/avtar/3.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden"&gt;
                               &lt;/li&gt;
                               &lt;li class="text-bg-primary h-35 w-35 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                data-bs-title="5 More"&gt;
                                5+
                               &lt;/li&gt;

                                 &lt;/ul&gt;
                                 &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card cheatsheets-card box-template-list toggle-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-start f-s-18 f-w-500 rounded-bottom-0 py-2 box-template-name"
                               data-bs-toggle="collapse" href="#tabs" aria-expanded="false" aria-controls="tabs">
                                Tabs
                            </a>
                        </div>
                        <div class="collapse card-body show p-0" id="tabs">
                            <ul>
                                <li class="list-item-preview d-flex gap-2" data-header="tabs-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> app-tabs-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('tabsPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#tabsPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="tabsPrimaryClass" class="opacity-0 w-0 h-0">app-tabs-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="tabsPrimaryCode">
     &lt;div class="card"&gt;
             &lt;div class="card-body"&gt;
       &lt;ul class="nav nav-tabs app-tabs-primary" role="tablist"&gt;
        &lt;li class="nav-item" role="presentation"&gt;
         &lt;button class="nav-link active" id="html-tab" data-bs-toggle="tab"
          data-bs-target="#html-tab-pane" type="button" role="tab" aria-controls="html-tab-pane"
          aria-selected="true"&gt;HTML&lt;/button&gt;
        &lt;/li&gt;
        &lt;li class="nav-item" role="presentation"&gt;
         &lt;button class="nav-link" id="css-tab" data-bs-toggle="tab" data-bs-target="#css-tab-pane"
          type="button" role="tab" aria-controls="css-tab-pane" aria-selected="false"&gt;CSS&lt;/button&gt;
        &lt;/li&gt;
        &lt;li class="nav-item" role="presentation"&gt;
         &lt;button class="nav-link" id="php-tab" data-bs-toggle="tab" data-bs-target="#php-tab-pane"
          type="button" role="tab" aria-controls="php-tab-pane" aria-selected="false"&gt;PHP&lt;/button&gt;
        &lt;/li&gt;
       &lt;/ul&gt;
       &lt;div class="tab-content" id="BasicContent"&gt;
        &lt;div class="tab-pane fade show active" id="html-tab-pane" role="tabpanel"
         aria-labelledby="html-tab" tabindex="0"&gt;
         &lt;p&gt;Hypertext Markup Language is the standard markup language for documents designed to be
          displayed in a web browser.&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class="tab-pane fade" id="css-tab-pane" role="tabpanel" aria-labelledby="css-tab"
         tabindex="0"&gt;
         &lt;p&gt;Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation
          of a document written in a markup language like HTML.&lt;/p&gt;
         &lt;p&gt;CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class="tab-pane fade" id="php-tab-pane" role="tabpanel" aria-labelledby="php-tab"
         tabindex="0"&gt;
         &lt;p&gt;PHP is a popular general-purpose scripting language that is especially suited to web
          development.&lt;/p&gt;
          &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="tabs-outline-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> tab-outline-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('tabsOutlineClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#tabsOutlineCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="tabsOutlineClass" class="opacity-0 w-0 h-0">tab-outline-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="tabOutlineCode">
                                &lt;div class="card"&gt;
                                      &lt;div class="card-body"&gt;
                                       &lt;ul class="nav nav-tabs tab-outline-primary" role="tablist"&gt;
                                        &lt;li class="nav-item" role="presentation"&gt;
                                      &lt;button class="nav-link active" id="connect-tab" data-bs-toggle="tab"
                                       data-bs-target="#connect-tab-pane" type="button" role="tab" aria-controls="connect-tab-pane"
                                       aria-selected="true"&gt;Connect&lt;/button&gt;
                                        &lt;/li&gt;
                                        &lt;li class="nav-item" role="presentation"&gt;
                                      &lt;button class="nav-link" id="discover-tab" data-bs-toggle="tab"
                                       data-bs-target="#discover-tab-pane" type="button" role="tab" aria-controls="discover-tab-pane"
                                       aria-selected="false"&gt;Discover&lt;/button&gt;
                                        &lt;/li&gt;
                                        &lt;li class="nav-item" role="presentation"&gt;
                                      &lt;button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order-tab-pane"
                                       type="button" role="tab" aria-controls="order-tab-pane" aria-selected="false"&gt;Orders&lt;/button&gt;
                                        &lt;/li&gt;
                                       &lt;/ul&gt;
                                       &lt;div class="tab-content" id="OutlineContent"&gt;
                                        &lt;div class="tab-pane fade show active" id="connect-tab-pane" role="tabpanel"
                                      aria-labelledby="connect-tab" tabindex="0"&gt;
                                      &lt;h6 class="mb-1"&gt;This is the content of tab one.&lt;/h6&gt;
                                      ...
                                        &lt;/div&gt;
                                        &lt;div class="tab-pane fade" id="discover-tab-pane" role="tabpanel" aria-labelledby="discover-tab"
                                      tabindex="0"&gt;
                                      &lt;h6 class="mb-1"&gt;This is the content of tab two.&lt;/h6&gt;
                                      ...
                                        &lt;/div&gt;
                                        &lt;div class="tab-pane fade" id="order-tab-pane" role="tabpanel" aria-labelledby="order-tab"
                                      tabindex="0"&gt;
                                      &lt;h6 class="mb-1"&gt;This is the content of tab three.&lt;/h6&gt;
                                     ...
                                    &lt;/div&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;

                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="tabs-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> tab-light-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('tabsLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#tabsLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="tabsLightClass" class="opacity-0 w-0 h-0">tab-light-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
            <code class="language-html" id="tabLightCode">
        &lt;div class="card"&gt;
        &lt;div class="card-body"&gt;
         &lt;ul class="nav nav-tabs tab-light-primary" role="tablist"&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link active" id="connect-tab" data-bs-toggle="tab"
         data-bs-target="#connect-tab-pane" type="button" role="tab" aria-controls="connect-tab-pane"
         aria-selected="true"&gt;Connect&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link" id="discover-tab" data-bs-toggle="tab"
         data-bs-target="#discover-tab-pane" type="button" role="tab" aria-controls="discover-tab-pane"
         aria-selected="false"&gt;Discover&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order-tab-pane"
         type="button" role="tab" aria-controls="order-tab-pane" aria-selected="false"&gt;Orders&lt;/button&gt;
          &lt;/li&gt;
         &lt;/ul&gt;
         &lt;div class="tab-content" id="OutlineContent"&gt;
          &lt;div class="tab-pane fade show active" id="connect-tab-pane" role="tabpanel"
        aria-labelledby="connect-tab" tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab one.&lt;/h6&gt;
        ...
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="discover-tab-pane" role="tabpanel" aria-labelledby="discover-tab"
        tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab two.&lt;/h6&gt;
        ...
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="order-tab-pane" role="tabpanel" aria-labelledby="order-tab"
        tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab three.&lt;/h6&gt;
       ...
      &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="tabs-vertical">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> vertical-tab</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('tabsVerticalClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#tabsVerticalCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="tabsVerticalClass" class="opacity-0 w-0 h-0"> vertical-tab</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
            <code class="language-html" id="tabVerticalCode">
        &lt;div class="card"&gt;
        &lt;div class="card-body vertical-tab"&gt;
         &lt;ul class="nav nav-tabs tab-light-secondary ms-3" role="tablist"&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link active" id="connect-tab" data-bs-toggle="tab"
         data-bs-target="#connect-tab-pane" type="button" role="tab" aria-controls="connect-tab-pane"
         aria-selected="true"&gt;Connect&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link" id="discover-tab" data-bs-toggle="tab"
         data-bs-target="#discover-tab-pane" type="button" role="tab" aria-controls="discover-tab-pane"
         aria-selected="false"&gt;Discover&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order-tab-pane"
         type="button" role="tab" aria-controls="order-tab-pane" aria-selected="false"&gt;Orders&lt;/button&gt;
          &lt;/li&gt;
         &lt;/ul&gt;
         &lt;div class="tab-content" id="OutlineContent"&gt;
          &lt;div class="tab-pane fade show active" id="connect-tab-pane" role="tabpanel"
        aria-labelledby="connect-tab" tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab one.&lt;/h6&gt;
        ...
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="discover-tab-pane" role="tabpanel" aria-labelledby="discover-tab"
        tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab two.&lt;/h6&gt;
        ...
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="order-tab-pane" role="tabpanel" aria-labelledby="order-tab"
        tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab three.&lt;/h6&gt;
       ...
      &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="tabs-vertical-right">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> vertical-right-tab</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('tabsEndVerticalClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#tabsEndVerticalCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="tabsEndVerticalClass" class="opacity-0 w-0 h-0"> vertical-right-tab</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
            <code class="language-html" id="tabEndVerticalCode">
        &lt;div class="card"&gt;
        &lt;div class="card-body vertical-right-tab"&gt;
         &lt;ul class="nav nav-tabs app-tabs-success" id="Outline" role="tablist"&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link active" id="connect-tab" data-bs-toggle="tab"
         data-bs-target="#connect-tab-pane" type="button" role="tab" aria-controls="connect-tab-pane"
         aria-selected="true"&gt;Connect&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link" id="discover-tab" data-bs-toggle="tab"
         data-bs-target="#discover-tab-pane" type="button" role="tab" aria-controls="discover-tab-pane"
         aria-selected="false"&gt;Discover&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order-tab-pane"
         type="button" role="tab" aria-controls="order-tab-pane" aria-selected="false"&gt;Orders&lt;/button&gt;
          &lt;/li&gt;
         &lt;/ul&gt;
         &lt;div class="tab-content" id="OutlineContent"&gt;
          &lt;div class="tab-pane fade show active" id="connect-tab-pane" role="tabpanel"
        aria-labelledby="connect-tab" tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab one.&lt;/h6&gt;
        ...
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="discover-tab-pane" role="tabpanel" aria-labelledby="discover-tab"
        tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab two.&lt;/h6&gt;
        ...
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="order-tab-pane" role="tabpanel" aria-labelledby="order-tab"
        tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab three.&lt;/h6&gt;
       ...
      &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="tabs background">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> tab background </span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#tabsBackgroundCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>

                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="tabBackgroundCode">
                                &lt;ul class="nav nav-tabs tab-primary bg-primary p-1" id="bg" role="tablist"&gt;
                                &lt;li class="nav-item" role="presentation"&gt;
                                 &lt;button class="nav-link active" id="features-tab" data-bs-toggle="tab"
                                  data-bs-target="#features-tab-pane" type="button" role="tab" aria-controls="features-tab-pane"
                                  aria-selected="true"&gt; &lt;i class="ti ti-disc pe-1 ps-1"&gt;&lt;/i&gt; features&lt;/button&gt;
                                &lt;/li&gt;
                                &lt;li class="nav-item" role="presentation"&gt;
                                 &lt;button class="nav-link" id="history-tab" data-bs-toggle="tab"
                                  data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="history-tab-pane"
                                  aria-selected="false"&gt;&lt;i class="ti ti-history pe-1 ps-1"&gt;&lt;/i&gt;History&lt;/button&gt;
                                &lt;/li&gt;
                                &lt;li class="nav-item" role="presentation"&gt;
                                 &lt;button class="nav-link" id="reviews-tab" data-bs-toggle="tab"
                                  data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane"
                                  aria-selected="false"&gt;&lt;i class="ti ti-star pe-1 ps-1"&gt;&lt;/i&gt;reviews&lt;/button&gt;
                                &lt;/li&gt;

                               &lt;/ul&gt;
                               &lt;div class="tab-content" id="bgContent"&gt;
                                &lt;div class="tab-pane fade show active" id="features-tab-pane" role="tabpanel"
                                 aria-labelledby="features-tab" tabindex="0"&gt;
                                 &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
                                  identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                  with fragment identifiers to switch between them.&lt;/p&gt;
                                &lt;/div&gt;

                                &lt;div class="tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab"
                                 tabindex="0"&gt;
                                 &lt;ol&gt;
                                  &lt;li&gt;Show only the last tab.&lt;/li&gt;
                                  &lt;li&gt;If &lt;code&gt;:target&lt;/code&gt; matches a tab, show it and hide all following siblings.&lt;/li&gt;
                                  &lt;li&gt;Matches a tab, show it and hide all following siblings.&lt;/li&gt;
                                 &lt;/ol&gt;
                                &lt;/div&gt;

                                &lt;div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab"
                                 tabindex="0"&gt;
                                 &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
                                  identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                  with fragment identifiers to switch between them.&lt;/p&gt;
                           &lt;/div&gt;
                         &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bottom-tab">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> bottom-tab</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('tabsBottomClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#tabsBottomCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="tabsBottomClass" class="opacity-0 w-0 h-0"> bottom-tab</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
            <code class="language-html" id="tabBottomCode">
        &lt;div class="card"&gt;
        &lt;div class="card-body bottom-tab"&gt;
         &lt;ul class="nav nav-tabs app-tabs-success" role="tablist"&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link active" id="connect-tab" data-bs-toggle="tab"
         data-bs-target="#connect-tab-pane" type="button" role="tab" aria-controls="connect-tab-pane"
         aria-selected="true"&gt;Connect&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link" id="discover-tab" data-bs-toggle="tab"
         data-bs-target="#discover-tab-pane" type="button" role="tab" aria-controls="discover-tab-pane"
         aria-selected="false"&gt;Discover&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order-tab-pane"
         type="button" role="tab" aria-controls="order-tab-pane" aria-selected="false"&gt;Orders&lt;/button&gt;
          &lt;/li&gt;
         &lt;/ul&gt;
         &lt;div class="tab-content" id="OutlineContent"&gt;
          &lt;div class="tab-pane fade show active" id="connect-tab-pane" role="tabpanel"
        aria-labelledby="connect-tab" tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab one.&lt;/h6&gt;
        ...
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="discover-tab-pane" role="tabpanel" aria-labelledby="discover-tab"
        tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab two.&lt;/h6&gt;
        ...
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="order-tab-pane" role="tabpanel" aria-labelledby="order-tab"
        tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab three.&lt;/h6&gt;
       ...
      &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="tab-justify-content-around">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> justify-content-around</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('tabsContentAroundClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#tabsContentAroundCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="tabsContentAroundClass" class="opacity-0 w-0 h-0"> justify-content-around</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
            <code class="language-html" id="tabsContentAroundCode">
        &lt;div class="card"&gt;
        &lt;div class="card-body"&gt;
         &lt;ul class="nav nav-tabs app-tabs-dark justify-content-around" role="tablist"&gt;
          &lt;li class="nav-item flex-fill" role="presentation"&gt;
        &lt;button class="nav-link w-100 active" id="connect-tab" data-bs-toggle="tab"
         data-bs-target="#connect-tab-pane" type="button" role="tab" aria-controls="connect-tab-pane"
         aria-selected="true"&gt;Connect&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item flex-fill" role="presentation"&gt;
        &lt;button class="nav-link w-100" id="discover-tab" data-bs-toggle="tab"
         data-bs-target="#discover-tab-pane" type="button" role="tab" aria-controls="discover-tab-pane"
         aria-selected="false"&gt;Discover&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item flex-fill" role="presentation"&gt;
        &lt;button class="nav-link w-100" id="order-tab" data-bs-toggle="tab" data-bs-target="#order-tab-pane"
         type="button" role="tab" aria-controls="order-tab-pane" aria-selected="false"&gt;Orders&lt;/button&gt;
          &lt;/li&gt;
         &lt;/ul&gt;
         &lt;div class="tab-content" id="OutlineContent"&gt;
          &lt;div class="tab-pane fade show active" id="connect-tab-pane" role="tabpanel"
        aria-labelledby="connect-tab" tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab one.&lt;/h6&gt;
        ...
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="discover-tab-pane" role="tabpanel" aria-labelledby="discover-tab"
        tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab two.&lt;/h6&gt;
        ...
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="order-tab-pane" role="tabpanel" aria-labelledby="order-tab"
        tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab three.&lt;/h6&gt;
       ...
      &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="image as nav link">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">image as nav link</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#tabsContentAroundCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>

                                    <pre class="opacity-0 w-0 h-0 p-0">
                              <code class="language-html" id="tabContentAroundCode">
                                &lt;ul class="nav nav-tabs tab-light-secondary" id="lang-Light" role="tablist"&gt;
                                 &lt;li class="nav-item" role="presentation"&gt;
                                  &lt;button class="nav-link gap-2 active" id="lang-home-tab" data-bs-toggle="tab"
                                   data-bs-target="#lang-home-tab-pane" type="button" role="tab"
                                   aria-controls="lang-home-tab-pane" aria-selected="true"&gt;
                                   &lt;i class="flag-icon flag-icon-usa"&gt;&lt;/i&gt;
                                   USA
                                  &lt;/button&gt;
                                 &lt;/li&gt;
                                 &lt;li class="nav-item" role="presentation"&gt;
                                  &lt;button class="nav-link gap-2" id="lang-profile-tab" data-bs-toggle="tab"
                                   data-bs-target="#lang-profile-tab-pane" type="button" role="tab"
                                   aria-controls="lang-profile-tab-pane" aria-selected="false"&gt;
                                   &lt;i class="flag-icon flag-icon-gbr"&gt;&lt;/i&gt;
                                   GBR
                                  &lt;/button&gt;
                                 &lt;/li&gt;
                                 &lt;li class="nav-item" role="presentation"&gt;
                                  &lt;button class="nav-link gap-2" id="lang-contact-tab" data-bs-toggle="tab"
                                   data-bs-target="#lang-contact-tab-pane" type="button" role="tab"
                                   aria-controls="lang-contact-tab-pane" aria-selected="false"&gt;
                                   &lt;i class="flag-icon flag-icon-deu"&gt;&lt;/i&gt;
                                   DEU
                                  &lt;/button&gt;
                                 &lt;/li&gt;


                               &lt;/ul&gt;
                               &lt;div class="tab-content" id="lang-LightContent"&gt;
                                 &lt;div class="tab-pane fade show active" id="lang-home-tab-pane" role="tabpanel"
                                  aria-labelledby="lang-home-tab" tabindex="0"&gt;
                                  &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
                                   identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                   with fragment identifiers to switch between them.&lt;/p&gt;
                                 &lt;/div&gt;

                                 &lt;div class="tab-pane fade" id="lang-profile-tab-pane" role="tabpanel"
                                  aria-labelledby="lang-profile-tab" tabindex="0"&gt;
                                  &lt;ol&gt;
                                   &lt;li&gt;Show only the last tab.&lt;/li&gt;
                                   &lt;li&gt;If &lt;code&gt;:target&lt;/code&gt; matches a tab, show it and hide all following siblings.&lt;/li&gt;
                                   &lt;li&gt;Matches a tab, show it and hide all following siblings.&lt;/li&gt;
                                  &lt;/ol&gt;
                                 &lt;/div&gt;

                                 &lt;div class="tab-pane fade" id="lang-contact-tab-pane" role="tabpanel"
                                  aria-labelledby="lang-contact-tab" tabindex="0"&gt;
                                  &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
                                   identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                   with fragment identifiers to switch between them.&lt;/p&gt;
                                 &lt;/div&gt;

                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card cheatsheets-card box-template-list toggle-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-start f-s-18 f-w-500 rounded-bottom-0 py-2 box-template-name"
                               data-bs-toggle="collapse" href="#accordions" aria-expanded="false" aria-controls="accordions">
                                Accordions
                            </a>
                        </div>
                        <div class="collapse card-body show p-0" id="accordions">
                            <ul>
                                <li class="list-item-preview d-flex gap-2" data-header="accordions">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> accordion-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('accordionsPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#accordionsPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="accordionsPrimaryClass" class="opacity-0 w-0 h-0">accordion-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="accordionsPrimaryCode">
                                &lt;div class="card"&gt;
                                     &lt;div class="card-body"&gt;
                                      &lt;div class="accordion app-accordion accordion-primary"&gt;
                                       &lt;div class="accordion-item"&gt;
                                        &lt;h2 class="accordion-header"&gt;
                                         &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                                          data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"&gt;
                                          Accordion Item #1
                                         &lt;/button&gt;
                                        &lt;/h2&gt;
                                        &lt;div id="collapseOne" class="accordion-collapse collapse show"
                                         data-bs-parent="#accordionExample"&gt;
                                         &lt;div class="accordion-body"&gt;
                                          ...
                                         &lt;/div&gt;
                                        &lt;/div&gt;
                                       &lt;/div&gt;
                                       &lt;div class="accordion-item"&gt;
                                        &lt;h2 class="accordion-header"&gt;
                                         &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                          data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"&gt;
                                          Accordion Item #2
                                         &lt;/button&gt;
                                        &lt;/h2&gt;
                                        &lt;div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample"&gt;
                                         &lt;div class="accordion-body"&gt;
                                          ...
                                         &lt;/div&gt;
                                        &lt;/div&gt;
                                       &lt;/div&gt;
                                       &lt;div class="accordion-item"&gt;
                                        &lt;h2 class="accordion-header"&gt;
                                         &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"&gt;
                                          Accordion Item #3
                                         &lt;/button&gt;
                                        &lt;/h2&gt;
                                        &lt;div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample"&gt;
                                         &lt;div class="accordion-body"&gt;
                                          ...
                                       &lt;/div&gt;
                                      &lt;/div&gt;
                                    &lt;/div&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                              &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="accordions-outline">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> accordion-outline-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('accordionsOutlineClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#accordionsOutlineCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="accordionsOutlineClass" class="opacity-0 w-0 h-0">accordion-outline-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="accordionsOutlineCode">
     &lt;div class="card"&gt;
        &lt;div class="card-body"&gt;
         &lt;div class="accordion app-accordion accordion-outline-secondary"&gt;
          &lt;div class="accordion-item"&gt;
           &lt;h2 class="accordion-header"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
             data-bs-target="#collapseOneOutline" aria-expanded="true"
             aria-controls="collapseOneOutline"&gt;
             Accordion Item #1
            &lt;/button&gt;
           &lt;/h2&gt;
           &lt;div id="collapseOneOutline" class="accordion-collapse collapse show"
            data-bs-parent="#accordionExampleoutlineoutline"&gt;
            &lt;div class="accordion-body"&gt;
             ...
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="accordion-item"&gt;
           &lt;h2 class="accordion-header"&gt;
            &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
             data-bs-target="#collapseTwooutline" aria-expanded="false"
             aria-controls="collapseTwooutline"&gt;
             Accordion Item #2
            &lt;/button&gt;
           &lt;/h2&gt;
           &lt;div id="collapseTwooutline" class="accordion-collapse collapse"
            data-bs-parent="#accordionExampleoutlineoutline"&gt;
            &lt;div class="accordion-body"&gt;
             ...
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="accordion-item"&gt;
           &lt;h2 class="accordion-header"&gt;
            &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
             data-bs-target="#collapseThreeoutline" aria-expanded="false"
             aria-controls="collapseThreeoutline"&gt;
             Accordion Item #3
            &lt;/button&gt;
           &lt;/h2&gt;
           &lt;div id="collapseThreeoutline" class="accordion-collapse collapse"
            data-bs-parent="#accordionExampleoutlineoutline"&gt;
            &lt;div class="accordion-body"&gt;
             ...
           &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="accordions-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> accordion-light-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('accordionsLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#accordionsLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="accordionsLightClass" class="opacity-0 w-0 h-0">accordion-light-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="accordionsLightCode">
           &lt;div class="accordion app-accordion accordion-light-success" id="accordionFlushExample"&gt;
            &lt;div class="accordion-item"&gt;
             &lt;h2 class="accordion-header"&gt;
              &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
               data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne"&gt;
               Accordion Item #1
              &lt;/button&gt;
             &lt;/h2&gt;
             &lt;div id="flush-collapseOne" class="accordion-collapse show"
              data-bs-parent="#accordionFlushExample"&gt;
              &lt;div class="accordion-body"&gt;Placeholder content for this accordion, which is intended to
               demonstrate the &lt;code&gt;.accordion-flush&lt;/code&gt; class. This is the first item's accordion
               body.&lt;/div&gt;
             &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="accordion-item"&gt;
             &lt;h2 class="accordion-header"&gt;
              &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
               data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"&gt;
               Accordion Item #2
              &lt;/button&gt;
             &lt;/h2&gt;
             &lt;div id="flush-collapseTwo" class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample"&gt;
              &lt;div class="accordion-body"&gt;Placeholder content for this accordion, which is intended to
               demonstrate the &lt;code&gt;.accordion-flush&lt;/code&gt; class. This is the second item's accordion
               body. Let's imagine this being filled with some actual content.&lt;/div&gt;
             &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="accordion-item"&gt;
             &lt;h2 class="accordion-header"&gt;
              &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
               data-bs-target="#flush-collapseThree" aria-expanded="false"
               aria-controls="flush-collapseThree"&gt;
               Accordion Item #3
              &lt;/button&gt;
             &lt;/h2&gt;
             &lt;div id="flush-collapseThree" class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample"&gt;
              &lt;div class="accordion-body"&gt;Placeholder content for this accordion, which is intended to
               demonstrate the &lt;code&gt;.accordion-flush&lt;/code&gt; class. This is the third item's accordion
               body. Nothing more exciting happening here in terms of content, but just filling up the
               space to make it look, at least at first glance, a bit more representative of how this would
               look in a real-world application.&lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;

                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="accordions-flush">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> accordion-flush</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('accordionsFlushClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#accordionsFlushCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="accordionsFlushClass" class="opacity-0 w-0 h-0">accordion-flush</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="accordionsFlushCode">
    &lt;div class="card"&gt;
        &lt;div class="card-body"&gt;
         &lt;div class="accordion app-accordion accordion-flush accordion-secondary"
          id="accordionappflushExample"&gt;
          &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header"&gt;
         &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
          data-bs-target="#appflush-collapseOne" aria-expanded="true"
          aria-controls="appflush-collapseOne"&gt;
          Accordion Item #1
         &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="appflush-collapseOne" class="accordion-collapse show"
         data-bs-parent="#accordionappflushExample"&gt;
         &lt;div class="accordion-body"&gt;Placeholder content for this accordion, which is intended to
          demonstrate the &lt;code&gt;.accordion-appflush&lt;/code&gt; class. This is the first item's accordion
          body.&lt;/div&gt;
        &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header"&gt;
         &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#appflush-collapseTwo" aria-expanded="false"
          aria-controls="appflush-collapseTwo"&gt;
          Accordion Item #2
         &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="appflush-collapseTwo" class="accordion-collapse collapse"
         data-bs-parent="#accordionappflushExample"&gt;
         &lt;div class="accordion-body"&gt;Placeholder content for this accordion, which is intended to
          demonstrate the &lt;code&gt;.accordion-appflush&lt;/code&gt; class. This is the second item's accordion
          body. Let's imagine this being filled with some actual content.&lt;/div&gt;
        &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header"&gt;
         &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#appflush-collapseThree" aria-expanded="false"
          aria-controls="appflush-collapseThree"&gt;
          Accordion Item #3
         &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="appflush-collapseThree" class="accordion-collapse collapse"
         data-bs-parent="#accordionrealExample"&gt;
         &lt;div class="accordion-body"&gt;Placeholder content for this accordion, which is intended to
          demonstrate the &lt;code&gt;.accordion-appflush&lt;/code&gt; class. This is the third item's accordion
          body. Nothing more exciting happening here in terms of content, but just filling up the
          space to make it look, at least at first glance, a bit more representative of how this would
          look in a real-world application.&lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
   &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="accordions-icon-left">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> app-accordion-icon-left</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('accordionsIconLeftClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#accordionsIconLeftCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="accordionsIconLeftClass" class="opacity-0 w-0 h-0">app-accordion-icon-left</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="accordionsIconLeftCode">
    &lt;div class="card"&gt;

    &lt;div class="card-body"&gt;
     &lt;div
      class="accordion app-accordion accordion-light-primary app-accordion-icon-left app-accordion-plus"
      id="accordionlefticonExample"&gt;
      &lt;div class="accordion-item"&gt;
       &lt;h2 class="accordion-header"&gt;
        &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
         data-bs-target="#lefticon-collapseOne" aria-expanded="true"
         aria-controls="lefticon-collapseOne"&gt;
         What happens if I just pay my ticket?
        &lt;/button&gt;
       &lt;/h2&gt;
       &lt;div id="lefticon-collapseOne" class="accordion-collapse collapse show"&gt;
        &lt;div class="accordion-body"&gt;
        ...
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="accordion-item"&gt;
       &lt;h2 class="accordion-header"&gt;
        &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
         data-bs-target="#lefticon-collapseTwo" aria-expanded="false"
         aria-controls="lefticon-collapseTwo"&gt;
         Can this ticket affect my job?
        &lt;/button&gt;
       &lt;/h2&gt;
       &lt;div id="lefticon-collapseTwo" class="accordion-collapse collapse"&gt;
        &lt;div class="accordion-body"&gt;
         ...
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="accordion-item"&gt;
       &lt;h2 class="accordion-header"&gt;
        &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
         data-bs-target="#lefticon-collapseThree" aria-expanded="false"
         aria-controls="lefticon-collapseThree"&gt;
         How long does it take to resolve my case?
        &lt;/button&gt;
       &lt;/h2&gt;
       &lt;div id="lefticon-collapseThree" class="accordion-collapse collapse"&gt;
        &lt;div class="accordion-body"&gt;
        ...
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;
     &lt;/div&gt;
    &lt;/div&gt;
   &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="accordions-plus">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-accordion-plus</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('accordionsPlusClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#accordionsPlusCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="accordionsPlusClass" class="opacity-0 w-0 h-0">app-accordion-plus</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="accordionsPlusCode">
    &lt;div class="card"&gt;

    &lt;div class="card-body"&gt;
     &lt;div
      class="accordion app-accordion accordion-light-primary app-accordion-icon-left app-accordion-plus"
      id="accordionlefticonExample"&gt;
      &lt;div class="accordion-item"&gt;
       &lt;h2 class="accordion-header"&gt;
        &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
         data-bs-target="#lefticon-collapseOne" aria-expanded="true"
         aria-controls="lefticon-collapseOne"&gt;
         What happens if I just pay my ticket?
        &lt;/button&gt;
       &lt;/h2&gt;
       &lt;div id="lefticon-collapseOne" class="accordion-collapse collapse show"&gt;
        &lt;div class="accordion-body"&gt;
        ...
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="accordion-item"&gt;
       &lt;h2 class="accordion-header"&gt;
        &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
         data-bs-target="#lefticon-collapseTwo" aria-expanded="false"
         aria-controls="lefticon-collapseTwo"&gt;
         Can this ticket affect my job?
        &lt;/button&gt;
       &lt;/h2&gt;
       &lt;div id="lefticon-collapseTwo" class="accordion-collapse collapse"&gt;
        &lt;div class="accordion-body"&gt;
         ...
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="accordion-item"&gt;
       &lt;h2 class="accordion-header"&gt;
        &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
         data-bs-target="#lefticon-collapseThree" aria-expanded="false"
         aria-controls="lefticon-collapseThree"&gt;
         How long does it take to resolve my case?
        &lt;/button&gt;
       &lt;/h2&gt;
       &lt;div id="lefticon-collapseThree" class="accordion-collapse collapse"&gt;
        &lt;div class="accordion-body"&gt;
        ...
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;
     &lt;/div&gt;
    &lt;/div&gt;
   &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="accordions without indicators">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">No icon indicators</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#accordionsWithoutIndicatorsCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>

                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="accordionsWithoutIndicatorsCode">
                                &lt;div class="card"&gt;

                                &lt;div class="card-body"&gt;
                                &lt;div class="accordion app-accordion accordion-light-danger app-accordion-no-icon"
                                id="accordionnoiconExample"&gt;
                                &lt;div class="accordion-item"&gt;
                                &lt;h2 class="accordion-header"&gt;
                                &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#noicon-collapseOne" aria-expanded="true"
                                aria-controls="noicon-collapseOne"&gt;
                                &lt;i class="ti ti-message-report me-1 f-s-20"&gt;&lt;/i&gt; What happens if I just pay my ticket?
                                &lt;/button&gt;
                                &lt;/h2&gt;
                                &lt;div id="noicon-collapseOne" class="accordion-collapse collapse show"&gt;
                                &lt;div class="accordion-body"&gt;
                                Paying your ticket without contesting it can result in a conviction on your driving record.
                                This can have long-lasting consequences such as increased insurance rates, driver's license
                                suspension, employment restrictions, and additional fines imposed by your state's DMV.
                                &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="accordion-item"&gt;
                                &lt;h2 class="accordion-header"&gt;
                                &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#noicon-collapseTwo" aria-expanded="false"
                                aria-controls="noicon-collapseTwo"&gt;
                                &lt;i class="ti ti-ticket me-1 f-s-20"&gt;&lt;/i&gt; Can this ticket affect my job?
                                &lt;/button&gt;
                                &lt;/h2&gt;
                                &lt;div id="noicon-collapseTwo" class="accordion-collapse collapse"&gt;
                                &lt;div class="accordion-body"&gt;
                                Absolutely, tickets recorded on your driving history can result in disqualification from
                                driving commercially or obtaining a commercial driver's license (CDL). They can also
                                disqualify you from driving for ride-sharing services such as Uber or Lyft, which require a
                                clean driving record.
                                &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="accordion-item"&gt;
                                &lt;h2 class="accordion-header"&gt;
                                &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#noicon-collapseThree" aria-expanded="false"
                                aria-controls="noicon-collapseThree"&gt;
                                &lt;i class="ti ti-transition-bottom me-1 f-s-20"&gt;&lt;/i&gt; How long does it take to resolve my
                                case?
                                &lt;/button&gt;
                                &lt;/h2&gt;
                                &lt;div id="noicon-collapseThree" class="accordion-collapse collapse"&gt;
                                &lt;div class="accordion-body"&gt;
                                It really depends on the court your ticket landed in. Some courts move faster than others,
                                but on average, it could take about 1-3 months. This is perfectly normal in the legal
                                process.
                                &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                               &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card cheatsheets-card box-template-list toggle-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-start f-s-18 f-w-500 rounded-bottom-0 py-2 box-template-name"
                               data-bs-toggle="collapse" href="#background" aria-expanded="false" aria-controls="background">
                                Background
                            </a>
                        </div>
                        <div class="collapse card-body show p-0" id="background">
                            <ul>
                                <li class="list-item-preview d-flex gap-2" data-header="background-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('backgroundPrimaryClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#backgroundPrimaryCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="backgroundPrimaryClass" class="opacity-0 w-0 h-0">bg-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="backgroundPrimaryCode">
                              &lt;button type="button" class="btn bg-primary text-white"&gt;bg-primary&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="background-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('backgroundSecondaryClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#backgroundSecondaryCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="backgroundSecondaryClass" class="opacity-0 w-0 h-0">bg-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="backgroundSecondaryCode">
                              &lt;button type="button" class="btn bg-secondary text-white"&gt;bg-secondary&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="background-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('backgroundSuccessClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#backgroundSuccessCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="backgroundSuccessClass" class="opacity-0 w-0 h-0">bg-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="backgroundSuccessCode">
                              &lt;button type="button" class="btn bg-success text-white"&gt;bg-success&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="background-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('backgroundDangerClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#backgroundDangerCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="backgroundDangerClass" class="opacity-0 w-0 h-0">bg-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="backgroundDangerCode">
                              &lt;button type="button" class="btn bg-danger text-white"&gt;bg-danger&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="background-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('backgroundWarningClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#backgroundWarningCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="backgroundWarningClass" class="opacity-0 w-0 h-0">bg-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="backgroundWarningCode">
                              &lt;button type="button" class="btn bg-warning text-white"&gt;bg-warning&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="background-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('backgroundInfoClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#backgroundInfoCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="backgroundInfoClass" class="opacity-0 w-0 h-0">bg-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="backgroundInfoCode">
                              &lt;button type="button" class="btn bg-info text-white"&gt;bg-info&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="background-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('backgroundLightClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#backgroundLightCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="backgroundLightClass" class="opacity-0 w-0 h-0">bg-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="backgroundLightCode">
                              &lt;button type="button" class="btn bg-light text-white"&gt;bg-light&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="background-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('backgroundDarkClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#backgroundDarkCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="backgroundDarkClass" class="opacity-0 w-0 h-0">bg-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="backgroundDarkCode">
                              &lt;button type="button" class="btn bg-dark text-white"&gt;bg-dark&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="shades900">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-primary-900</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('shades900Class')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#shades900Code')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="shades900Class" class="opacity-0 w-0 h-0">bg-primary-900</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="shades900Code">
                              &lt;button type="button" class="btn bg-primary-900"&gt;bg-primary-900&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="shades800">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-primary-800</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('shades800Class')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#shades800Code')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="shades800Class" class="opacity-0 w-0 h-0">bg-primary-800</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="shades800Code">
                              &lt;button type="button" class="btn bg-primary-800"&gt;bg-primary-800&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="shades700">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-primary-700</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('shades700Class')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#shades700Code')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="shades700Class" class="opacity-0 w-0 h-0">bg-primary-700</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="shades700Code">
                              &lt;button type="button" class="btn bg-primary-700"&gt;bg-primary-700&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="shades600">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-primary-600</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('shades600Class')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#shades600Code')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="shades600Class" class="opacity-0 w-0 h-0">bg-primary-600</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="shades600Code">
                              &lt;button type="button" class="btn bg-primary-600"&gt;bg-primary-600&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="shades500">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-primary-500</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('shades500Class')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#shades500Code')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="shades500Class" class="opacity-0 w-0 h-0">bg-primary-500</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="shades500Code">
                              &lt;button type="button" class="btn bg-primary-500"&gt;bg-primary-500&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="shades400">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-primary-400</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('shades400Class')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#shades400Code')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="shades400Class" class="opacity-0 w-0 h-0">bg-primary-400</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="shades400Code">
                              &lt;button type="button" class="btn bg-primary-400"&gt;bg-primary-400&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="shades300">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-primary-300</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('shades300Class')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#shades300Code')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="shades300Class" class="opacity-0 w-0 h-0">bg-primary-300</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="shades300Code">
                              &lt;button type="button" class="btn bg-primary-300"&gt;bg-primary-300&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-outline-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-outline-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgOutlinePrimaryClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgOutlinePrimaryCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgOutlinePrimaryClass" class="opacity-0 w-0 h-0">bg-outline-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgOutlinePrimaryCode">
                              &lt;button type="button" class="btn bg-outline-primary"&gt;bg-outline-primary&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-outline-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-outline-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgOutlineSecondaryClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgOutlineSecondaryCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgOutlineSecondaryClass" class="opacity-0 w-0 h-0">bg-outline-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgOutlineSecondaryCode">
                              &lt;button type="button" class="btn bg-outline-secondary"&gt;bg-outline-secondary&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-outline-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-outline-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgOutlineSuccessClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgOutlineSuccessCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgOutlineSuccessClass" class="opacity-0 w-0 h-0">bg-outline-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgOutlineSuccessCode">
                              &lt;button type="button" class="btn bg-outline-success"&gt;bg-outline-success&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-outline-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-outline-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgOutlineDangerClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgOutlineDangerCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgOutlineDangerClass" class="opacity-0 w-0 h-0">bg-outline-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgOutlineDangerCode">
                              &lt;button type="button" class="btn bg-outline-danger"&gt;bg-outline-danger&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-outline-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-outline-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgOutlineWarningClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgOutlineWarningCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgOutlineWarningClass" class="opacity-0 w-0 h-0">bg-outline-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgOutlineWarningCode">
                              &lt;button type="button" class="btn bg-outline-warning"&gt;bg-outline-warning&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-outline-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-outline-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgOutlineInfoClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgOutlineInfoCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgOutlineInfoClass" class="opacity-0 w-0 h-0">bg-outline-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgOutlineInfoCode">
                              &lt;button type="button" class="btn bg-outline-info"&gt;bg-outline-info&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-outline-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-outline-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgOutlineLightClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgOutlineLightCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgOutlineLightClass" class="opacity-0 w-0 h-0">bg-outline-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgOutlineLightCode">
                              &lt;button type="button" class="btn bg-outline-light"&gt;bg-outline-light&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-outline-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-outline-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgOutlineDarkClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgOutlineDarkCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgOutlineDarkClass" class="opacity-0 w-0 h-0">bg-outline-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgOutlineDarkCode">
                              &lt;button type="button" class="btn bg-outline-dark"&gt;bg-outline-dark&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-light-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-light-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgLightPrimaryClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgLightPrimaryCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgLightPrimaryClass" class="opacity-0 w-0 h-0">bg-light-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgLightPrimaryCode">
                              &lt;button type="button" class="btn bg-light-primary"&gt;bg-light-primary&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-light-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-light-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgLightSecondaryClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgLightSecondaryCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgLightSecondaryClass" class="opacity-0 w-0 h-0">bg-light-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgLightSecondaryCode">
                              &lt;button type="button" class="btn bg-light-secondary"&gt;bg-light-secondary&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-light-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-light-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgLightSuccessClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgLightSuccessCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgLightSuccessClass" class="opacity-0 w-0 h-0">bg-light-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgLightSuccessCode">
                              &lt;button type="button" class="btn bg-light-success"&gt;bg-light-success&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-light-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-light-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgLightDangerClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgLightDangerCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgLightDangerClass" class="opacity-0 w-0 h-0">bg-light-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgLightDangerCode">
                              &lt;button type="button" class="btn bg-light-danger"&gt;bg-light-danger&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-light-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-light-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgLightWarningClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgLightWarningCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgLightWarningClass" class="opacity-0 w-0 h-0">bg-light-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgLightWarningCode">
                              &lt;button type="button" class="btn bg-light-warning"&gt;bg-light-warning&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-light-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-light-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgLightInfoClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgLightInfoCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgLightInfoClass" class="opacity-0 w-0 h-0">bg-light-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgLightInfoCode">
                              &lt;button type="button" class="btn bg-light-info"&gt;bg-light-info&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-light-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-light-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgLightLightClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgLightLightCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgLightLightClass" class="opacity-0 w-0 h-0">bg-light-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgLightLightCode">
                              &lt;button type="button" class="btn bg-light-light"&gt;bg-light-light&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="bg-light-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">bg-light-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('bgLightDarkClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#bgLightDarkCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="bgLightDarkClass" class="opacity-0 w-0 h-0">bg-light-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="bgLightDarkCode">
                              &lt;button type="button" class="btn bg-light-dark"&gt;bg-light-dark&lt;/button&gt;
                             </code>
                           </pre>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card cheatsheets-card box-template-list toggle-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-start f-s-18 f-w-500 rounded-bottom-0 py-2 box-template-name"
                               data-bs-toggle="collapse" href="#progress" aria-expanded="false" aria-controls="progress">
                                Progress
                            </a>
                        </div>
                        <div class="collapse card-body show p-0" id="progress">
                            <ul>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressPrimaryClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressPrimaryCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressPrimaryClass" class="opacity-0 w-0 h-0">progress-bar bg-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressPrimaryCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-primary" style="width: 12.5%"&gt;&lt;/div&gt;
                             &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressSecondaryClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressSecondaryCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressSecondaryClass" class="opacity-0 w-0 h-0">progress-bar bg-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressSecondaryCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-secondary" style="width: 12.5%"&gt;&lt;/div&gt;
                             &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressSuccessClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressSuccessCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressSuccessClass" class="opacity-0 w-0 h-0">progress-bar bg-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressSuccessCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-success" style="width: 12.5%"&gt;&lt;/div&gt;
                             &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressDangerClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressDangerCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressDangerClass" class="opacity-0 w-0 h-0">progress-bar bg-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressDangerCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-danger" style="width: 12.5%"&gt;&lt;/div&gt;
                             &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressWaningClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressWaningCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressWaningClass" class="opacity-0 w-0 h-0">progress-bar bg-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressWaningCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-warning" style="width: 12.5%"&gt;&lt;/div&gt;
                             &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressInfoClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressInfoCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressInfoClass" class="opacity-0 w-0 h-0">progress-bar bg-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressInfoCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-info" style="width: 12.5%"&gt;&lt;/div&gt;
                             &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressLightClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressLightCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressLightClass" class="opacity-0 w-0 h-0">progress-bar bg-light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressLightCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-light" style="width: 12.5%"&gt;&lt;/div&gt;
                             &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressDarkClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressDarkCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressDarkClass" class="opacity-0 w-0 h-0">progress-bar bg-dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressDarkCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-dark" style="width: 12.5%"&gt;&lt;/div&gt;
                             &lt;/div&gt;
                             </code>
                           </pre>
                                </li>

                                <li class="list-item-preview d-flex gap-2" data-header="progress-light-primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-light-primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressLightPrimaryClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressLightPrimaryCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressLightPrimaryClass" class="opacity-0 w-0 h-0">progress-bar bg-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressLightPrimaryCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-light-primary" style="width: 12.5%"&gt; 12.5% &lt;/div&gt;
                               &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-light-secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-light-secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressLightSecondaryClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressLightSecondaryCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressLightSecondaryClass" class="opacity-0 w-0 h-0">progress-bar bg-secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressLightSecondaryCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-light-secondary" style="width: 25%"&gt; 25% &lt;/div&gt;
                               &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-light-success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-light-success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressLightSuccessClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressLightSuccessCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressLightSuccessClass" class="opacity-0 w-0 h-0">progress-bar bg-success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressLightSuccessCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="37.5" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-light-success" style="width: 37.5%"&gt; 37.5% &lt;/div&gt;
                               &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-light-danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-light-danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressLightDangerClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressLightDangerCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressLightDangerClass" class="opacity-0 w-0 h-0">progress-bar bg-danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressLightDangerCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                           aria-valuemax="100"&gt;
                           &lt;div class="progress-bar bg-light-danger" style="width: 50%"&gt; 50% &lt;/div&gt;
                            &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-light-warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-light-warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressLightWarningClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressLightWarningCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressLightWarningClass" class="opacity-0 w-0 h-0">progress-bar bg-warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressLightWarningCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="62.5" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-light-warning" style="width: 62.5%"&gt; 62.5% &lt;/div&gt;
                               &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-light-info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-light-info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressLightInfoClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressLightInfoCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressLightInfoClass" class="opacity-0 w-0 h-0">progress-bar bg-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressLightInfoCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="62.5" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-light-info" style="width: 62.5%"&gt; 62.5% &lt;/div&gt;
                               &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-light-light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-light-light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressLightLightClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressLightLightCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressLightLightClass" class="opacity-0 w-0 h-0">progress-bar bg-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressLightLightCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="82.5" aria-valuemin="0"
                              aria-valuemax="100"&gt;
                              &lt;div class="progress-bar bg-light-light" style="width: 82.5%"&gt; 82.5% &lt;/div&gt;
                               &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-light-dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar bg-light-dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressLightDarkClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressLightDarkCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressLightDarkClass" class="opacity-0 w-0 h-0">progress-bar bg-info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressLightDarkCode">
                              &lt;div class="progress w-100" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                           aria-valuemax="100"&gt;
                           &lt;div class="progress-bar bg-light-dark" style="width: 95%"&gt; 95% &lt;/div&gt;
                            &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress-bar-striped">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress-bar progress-bar-striped</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('progressStripedyClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressStripedyCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="progressStripedyClass" class="opacity-0 w-0 h-0">progress-bar bg-primary progress-bar-striped</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressStripedyCode">

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
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="progress sizes">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">progress sizes</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#progressSizeCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>

                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="progressSizeCode">
                              &lt;div class="d-flex flex-column gap-3"&gt;
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
                             </code>
                           </pre>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card cheatsheets-card box-template-list toggle-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-start f-s-18 f-w-500 rounded-bottom-0 py-2 box-template-name"
                               data-bs-toggle="collapse" href="#helperClass" aria-expanded="false" aria-controls="helperClass">
                                Helper Classes
                            </a>
                        </div>
                        <div class="collapse card-body show p-0" id="helperClass">
                            <ul>
                                <li class="list-item-preview d-flex gap-2" data-header="text-[color]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">text-[color]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('textColorClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#textColorCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="textColorClass" class="opacity-0 w-0 h-0">text-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="textColorCode">
                              &lt;div class="d-flex flex-wrap gap-2"&gt;
                                 &lt;span class="text-primary p-2"&gt; - .text-primary&lt;/span&gt;
                                 &lt;span class="text-secondary p-2"&gt; - .text-secondary&lt;/span&gt;
                                 &lt;span class="text-success p-2"&gt; - .text-success&lt;/span&gt;
                                 &lt;span class="text-danger p-2"&gt; - .text-danger&lt;/span&gt;
                                 &lt;span class="text-warning p-2"&gt; - .text-warning&lt;/span&gt;
                                 &lt;span class="text-info p-2"&gt; - .text-info&lt;/span&gt;
                                 &lt;span class="text-light p-2"&gt; - .text-light&lt;/span&gt;
                                 &lt;span class="text-dark p-2"&gt; - .text-dark&lt;/span&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="link-[color]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">link-[color]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('linkColorClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#linkColorCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="linkColorClass" class="opacity-0 w-0 h-0">link-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="linkColorCode">
                              &lt;div class="d-flex flex-wrap gap-2"&gt;
                                 &lt;span class="link-primary p-2"&gt; - .link-primary&lt;/span&gt;
                                 &lt;span class="link-secondary p-2"&gt; - .link-secondary&lt;/span&gt;
                                 &lt;span class="link-success p-2"&gt; - .link-success&lt;/span&gt;
                                 &lt;span class="link-danger p-2"&gt; - .link-danger&lt;/span&gt;
                                 &lt;span class="link-warning p-2"&gt; - .link-warning&lt;/span&gt;
                                 &lt;span class="link-info p-2"&gt; - .link-info&lt;/span&gt;
                                 &lt;span class="link-light p-2"&gt; - .link-light&lt;/span&gt;
                                 &lt;span class="link-dark p-2"&gt; - .link-dark&lt;/span&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="txt-bg-[color]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">txt-bg-[color]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('txtBgColorClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#txtBgColorCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="txtBgColorClass" class="opacity-0 w-0 h-0">txt-bg-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="txtBgColorCode">
                              &lt;div class="d-flex flex-wrap gap-2"&gt;
                                 &lt;span class="txt-bg-primary p-2"&gt; - .txt-bg-primary&lt;/span&gt;
                                 &lt;span class="txt-bg-secondary p-2"&gt; - .txt-bg-secondary&lt;/span&gt;
                                 &lt;span class="txt-bg-success p-2"&gt; - .txt-bg-success&lt;/span&gt;
                                 &lt;span class="txt-bg-danger p-2"&gt; - .txt-bg-danger&lt;/span&gt;
                                 &lt;span class="txt-bg-warning p-2"&gt; - .txt-bg-warning&lt;/span&gt;
                                 &lt;span class="txt-bg-info p-2"&gt; - .txt-bg-info&lt;/span&gt;
                                 &lt;span class="txt-bg-light p-2"&gt; - .txt-bg-light&lt;/span&gt;
                                 &lt;span class="txt-bg-dark p-2"&gt; - .txt-bg-dark&lt;/span&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">text-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('textalignClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#textalignCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="textalignClass" class="opacity-0 w-0 h-0">text-start</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="textalignCode">
                                 &lt;div class="text-lowercase p-2"&gt;Text-Lowercase&lt;/div&gt;
                                 &lt;div class="text-uppercase p-2"&gt;Text-Uppercase&lt;/div&gt;
                                 &lt;div class="text-capitalize p-2"&gt;Text-Capitalize&lt;/div&gt;
                                 &lt;div class="text-center"&gt;- Text Align Center&lt;/div&gt;
                                 &lt;div class="text-start"&gt;- Text Align Start&lt;/div&gt;
                                 &lt;div class="text-end"&gt;- Text Align End&lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="text-d-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">text-d-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('textDecorationClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#textDecorationCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="textDecorationClass" class="opacity-0 w-0 h-0">text-d-underline</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="textDecorationCode">
                              &lt;div class="p-2"&gt;- Text Decoration&lt;span class="text-d-underline ms-2"&gt; underline &lt;/span&gt;&lt;/div&gt;
                                  &lt;div class="p-2"&gt;- Text Decoration&lt;span class="text-d-line-through ms-2"&gt; line-through &lt;/span&gt;&lt;/div&gt;
                                  &lt;div class="p-2"&gt;- Text Decoration&lt;span class="text-d-overline ms-2"&gt; overline&lt;/span&gt;&lt;/div&gt;
                                  &lt;div class="p-2"&gt;- Text Decoration&lt;span class="text-d-overline-underline ms-2"&gt;overline-underline&lt;/span&gt;&lt;/div&gt;
                                  &lt;div class="p-2"&gt;- Text Decoration&lt;span class="text-d-line-underline ms-2"&gt;underline-line-through&lt;/span&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="f-fs-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">f-fs-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('fontStyleClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#fontStyleCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="fontStyleClass" class="opacity-0 w-0 h-0">f-fs-normal</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="fontStyleCode">
                               &lt;div class="p-2"&gt;- Font style&lt;span class="f-fs-normal ms-2"&gt;Normal&lt;/span&gt;&lt;/div&gt;
                               &lt;div class="p-2"&gt;- Font style&lt;span class="f-fs-italic ms-2"&gt;Italic&lt;/span&gt;&lt;/div&gt;
                               &lt;div class="p-2"&gt;- Font style&lt;span class="f-fs-oblique ms-2"&gt;Oblique&lt;/span&gt;&lt;/div&gt;
                               &lt;div class="p-2"&gt;- Font style&lt;span class="f-fs-initial ms-2"&gt;Initial&lt;/span&gt;&lt;/div&gt;
                               &lt;div class="p-2"&gt;- Font style&lt;span class="f-fs-inherit ms-2"&gt;Inherit&lt;/span&gt;&lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="Headings">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">h1-h6</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('HeadingsClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#HeadingsCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="HeadingsClass" class="opacity-0 w-0 h-0">h1-h6</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="HeadingsCode">
  &lt;div class="h1"&gt;h1 Fontsize&lt;/div&gt;
   &lt;div class="h2"&gt;h2 Fontsize&lt;/div&gt;
   &lt;div class="h3"&gt;h3 Fontsize&lt;/div&gt;
   &lt;div class="h4"&gt;h4 Fontsize&lt;/div&gt;
   &lt;div class="h5"&gt;h5 Fontsize&lt;/div&gt;
   &lt;div class="h6"&gt;h6 Fontsize&lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="f-fw-[weight]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">f-fw-[weight]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('fontWeightClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#fontWeightCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="fontWeightClass" class="opacity-0 w-0 h-0">f-fw-500</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="fontWeightCode">
                               &lt;div class="p-2"&gt;- Font weight&lt;span class="f-fw-100 ms-2"&gt;f-fw-100* &lt;/span&gt;&lt;/div&gt;
                               &lt;div class="p-2"&gt;- Font weight&lt;span class="f-fw-200 ms-2"&gt;f-fw-200* &lt;/span&gt;&lt;/div&gt;
                               &lt;div class="p-2"&gt;- Font weight&lt;span class="f-fw-300 ms-2"&gt;f-fw-300* &lt;/span&gt;&lt;/div&gt;
                               &lt;div class="p-2"&gt;- Font weight&lt;span class="f-fw-400 ms-2"&gt;f-fw-400* &lt;/span&gt;&lt;/div&gt;
                               &lt;div class="p-2"&gt;- Font weight&lt;span class="f-fw-500 ms-2"&gt;f-fw-500* &lt;/span&gt;&lt;/div&gt;
                               &lt;div class="p-2"&gt;- Font weight&lt;span class="f-fw-600 ms-2"&gt;f-fw-600* &lt;/span&gt;&lt;/div&gt;
                               &lt;div class="p-2"&gt;- Font weight&lt;span class="f-fw-700 ms-2"&gt;f-fw-700* &lt;/span&gt;&lt;/div&gt;
                               &lt;div class="p-2"&gt;- Font weight&lt;span class="f-fw-800 ms-2"&gt;f-fw-800* &lt;/span&gt;&lt;/div&gt;
                               &lt;div class="p-2"&gt;- Font weight&lt;span class="f-fw-900 ms-2"&gt;f-fw-900* &lt;/span&gt;&lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="f-s-[size]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">f-s-[size]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('fontSizeClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#fontSizeCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="fontSizeClass" class="opacity-0 w-0 h-0">f-s-14</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="fontSizeCode">
                                   &lt;div class="p-2 f-s-10 ms-2"&gt;Size-10 &lt;/span&gt;&lt;/div&gt;
                                   &lt;div class="p-2 f-s-12 ms-2"&gt;Size-12 &lt;/span&gt;&lt;/div&gt;
                                   &lt;div class="p-2 f-s-14 ms-2"&gt;Size-14 &lt;/span&gt;&lt;/div&gt;
                                   &lt;div class="p-2 f-s-16 ms-2"&gt;Size-16 &lt;/span&gt;&lt;/div&gt;
                                   &lt;div class="p-2 f-s-18 ms-2"&gt;Size-18 &lt;/span&gt;&lt;/div&gt;
                                   &lt;div class="p-2 f-s-20 ms-2"&gt;Size-20 &lt;/span&gt;&lt;/div&gt;
                                   &lt;div class="p-2 f-s-24 ms-2"&gt;Size-24 &lt;/span&gt;&lt;/div&gt;
                                   &lt;div class="f-s-80 ms-2"&gt;Size-80 &lt;/span&gt;&lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="pa-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">pa-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('paddingClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#paddingCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="paddingClass" class="opacity-0 w-0 h-0">pd-0</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="paddingCode">
                              &lt;div class="row"&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-16"&gt;Padding-16&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-14"&gt;Padding-14&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-10"&gt;Padding-10&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-8"&gt;Padding-8&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-4"&gt;Padding-4&lt;/p&gt;
                                  &lt;/div&gt;
                              &lt;/div&gt;

                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="pa-t-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> pa-t-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('paddingTopClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#paddingTopCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="paddingTopClass" class="opacity-0 w-0 h-0"> pa-t-0</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="paddingTopCode">
                              &lt;div class="row"&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-t-40"&gt;Padding-Top-40&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-t-35"&gt;Padding-Top-35&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-t-20"&gt;Padding-Top-20&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-t-15"&gt;Padding-Top-15&lt;/p&gt;
                                  &lt;/div&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="pa-s-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> pa-s-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('paddingStartClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#paddingStartCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="paddingStartClass" class="opacity-0 w-0 h-0"> pa-s-0</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="paddingStartCode">
                              &lt;div class="row"&gt;
                                  &lt;div class="col-12"&gt;
                                   &lt;p class="border pa-s-40"&gt;Padding-Start-40&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-12"&gt;
                                   &lt;p class="border pa-s-35"&gt;Padding-Start-35&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-12"&gt;
                                   &lt;p class="border pa-s-20"&gt;Padding-Start-20&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-12"&gt;
                                   &lt;p class="border pa-s-15"&gt;Padding-Start-15&lt;/p&gt;
                                  &lt;/div&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="pa-b-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> pa-b-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('paddingBottomClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#paddingBottomCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="paddingBottomClass" class="opacity-0 w-0 h-0"> pa-t-0</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="paddingBottomCode">
                              &lt;div class="row"&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-b-40"&gt;Padding-Bottom-40&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-b-35"&gt;Padding-Bottom-35&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-b-20"&gt;Padding-Bottom-20&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-b-15"&gt;Padding-Bottom-15&lt;/p&gt;
                                  &lt;/div&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="pa-e-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> pa-e-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('paddingEndClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#paddingEndCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="paddingEndClass" class="opacity-0 w-0 h-0"> pa-e-0</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="paddingEndCode">
                              &lt;div class="row"&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-e-40"&gt;Padding-End-40&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-e-35"&gt;Padding-End-35&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-e-20"&gt;Padding-End-20&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border pa-e-15"&gt;Padding-End-15&lt;/p&gt;
                                  &lt;/div&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="mg-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">mg-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('marginClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#marginCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="marginClass" class="opacity-0 w-0 h-0">pd-0</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="marginCode">
                            &lt;div class="row"&gt;
                                  &lt;div class="col-auto mb-2"&gt;
                                   &lt;div class="border"&gt;
                                    &lt;div class="mg-40 txt-bg-primary"&gt;Margin-40&lt;/div&gt;
                                   &lt;/div&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-auto mb-2"&gt;
                                   &lt;div class="border"&gt;
                                    &lt;div class="mg-34 txt-bg-dark"&gt;Margin-34&lt;/div&gt;
                                   &lt;/div&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-auto mb-2"&gt;
                                   &lt;div class="border"&gt;
                                    &lt;div class="mg-30 txt-bg-light"&gt;Margin-30&lt;/div&gt;
                                   &lt;/div&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-auto mb-2"&gt;
                                   &lt;div class="border"&gt;
                                    &lt;div class="mg-28 txt-bg-info"&gt;Margin-28&lt;/div&gt;
                                   &lt;/div&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-auto mb-2"&gt;
                                   &lt;div class="border"&gt;
                                    &lt;div class="mg-24 txt-bg-warning"&gt;Margin-24&lt;/div&gt;
                                   &lt;/div&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-auto mb-2"&gt;
                                   &lt;div class="border"&gt;
                                    &lt;div class="mg-20 txt-bg-danger"&gt;Margin-20&lt;/div&gt;
                                   &lt;/div&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-auto mb-2"&gt;
                                   &lt;div class="border"&gt;
                                    &lt;div class="mg-14 txt-bg-success"&gt;Margin-14&lt;/div&gt;
                                   &lt;/div&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-auto mb-2"&gt;
                                   &lt;div class="border"&gt;
                                    &lt;p class="mg-10 txt-bg-secondary"&gt;Margin-10&lt;/p&gt;
                                   &lt;/div&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-auto mb-2"&gt;
                                   &lt;div class="border"&gt;
                                    &lt;p class="mg-4 txt-bg-primary"&gt;Margin-4&lt;/p&gt;
                                   &lt;/div&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="mg-t-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> mg-t-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('marginTopClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#marginTopCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="marginTopClass" class="opacity-0 w-0 h-0"> mg-t-0</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="marginTopCode">
                              &lt;div class="row"&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border mg-t-40"&gt;margin-Top-40&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border mg-t-35"&gt;margin-Top-35&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border mg-t-20"&gt;margin-Top-20&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border mg-t-15"&gt;margin-Top-15&lt;/p&gt;
                                  &lt;/div&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="mg-s-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> mg-s-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('marginStartClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#marginStartCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="marginStartClass" class="opacity-0 w-0 h-0"> mg-s-0</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="marginStartCode">
                              &lt;div class="row"&gt;
                                  &lt;div class="col-12"&gt;
                                   &lt;p class="border mg-s-40"&gt;margin-Start-40&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-12"&gt;
                                   &lt;p class="border mg-s-35"&gt;margin-Start-35&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-12"&gt;
                                   &lt;p class="border mg-s-20"&gt;margin-Start-20&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-12"&gt;
                                   &lt;p class="border mg-s-15"&gt;margin-Start-15&lt;/p&gt;
                                  &lt;/div&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="pa-b-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> mg-b-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('marginBottomClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#marginBottomCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="marginBottomClass" class="opacity-0 w-0 h-0"> mg-t-0</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="marginBottomCode">
                              &lt;div class="row"&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border mg-b-40"&gt;margin-Bottom-40&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border mg-b-35"&gt;margin-Bottom-35&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border mg-b-20"&gt;margin-Bottom-20&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col"&gt;
                                   &lt;p class="border mg-b-15"&gt;margin-Bottom-15&lt;/p&gt;
                                  &lt;/div&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="mg-e-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name"> mg-e-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('marginEndClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#marginEndCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="marginEndClass" class="opacity-0 w-0 h-0"> mg-e-0</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="marginEndCode">
                              &lt;div class="row"&gt;
                                  &lt;div class="col-12"&gt;
                                   &lt;p class="border mg-e-40"&gt;margin-End-40&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-12"&gt;
                                   &lt;p class="border mg-e-35"&gt;margin-End-35&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-12"&gt;
                                   &lt;p class="border mg-e-20"&gt;margin-End-20&lt;/p&gt;
                                  &lt;/div&gt;
                                  &lt;div class="col-12"&gt;
                                   &lt;p class="border mg-e-15"&gt;margin-End-15&lt;/p&gt;
                                  &lt;/div&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="w-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">w-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('widthClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#widthCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="widthClass" class="opacity-0 w-0 h-0">w-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="widthCode">
                                   &lt;div class="w-150 border  p-2 mb-2"&gt; w-150 &lt;/div&gt;
                                   &lt;div class="w-80 border  p-2 mb-2"&gt; w-80 &lt;/div&gt;
                                   &lt;div class="w-60 border  p-2 mb-2"&gt; w-60 &lt;/div&gt;
                                   &lt;div class="w-50 border  p-2 mb-2"&gt; w-50 &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="h-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">h-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('heightClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#heightCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="heightClass" class="opacity-0 w-0 h-0">h-50</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="heightCode">
                                   &lt;div class="h-150 border  p-2 mb-2"&gt; h-150 &lt;/div&gt;
                                   &lt;div class="h-80 border  p-2 mb-2"&gt; h-80 &lt;/div&gt;
                                   &lt;div class="h-60 border  p-2 mb-2"&gt; h-60 &lt;/div&gt;
                                   &lt;div class="h-50 border  p-2 mb-2"&gt; h-50 &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="b-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">b-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('borderClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#borderCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="borderClass" class="opacity-0 w-0 h-0">border</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="borderCode">
                              &lt;div class="app-example"&gt;
                                 &lt;div class="border"&gt;border&lt;/div&gt;
                                 &lt;div class="border-t"&gt;border-t&lt;/div&gt;
                                 &lt;div class="border-s"&gt;border-s&lt;/div&gt;
                                 &lt;div class="border-e"&gt;border-e&lt;/div&gt;
                                 &lt;div class="border-b"&gt;border-b&lt;/div&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="b-1-[color]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">b-1-[color]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('borderColorClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#borderColorCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="borderColorClass" class="opacity-0 w-0 h-0">b-1-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="borderColorCode">
                              &lt;div class="app-example"&gt;
                                  &lt;div class="b-1-primary p-2"&gt;b-1-primary&lt;/div&gt;
                                  &lt;div class="b-1-secondary p-2"&gt;b-1-secondary&lt;/div&gt;
                                  &lt;div class="b-1-success p-2"&gt;b-1-success&lt;/div&gt;
                                  &lt;div class="b-1-danger p-2"&gt;b-1-danger&lt;/div&gt;
                                  &lt;div class="b-1-warning p-2"&gt;b-1-warning&lt;/div&gt;
                                  &lt;div class="b-1-info p-2"&gt;b-1-info&lt;/div&gt;
                                  &lt;div class="b-1-light p-2"&gt;b-1-light&lt;/div&gt;
                                  &lt;div class="b-1-dark p-2"&gt;b-1-dark&lt;/div&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="b-[size]-[color]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">b-[size]-[color]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('borderSizeClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#borderSizeCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="borderSizeClass" class="opacity-0 w-0 h-0">b-1-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="borderSizeCode">
                              &lt;div class="app-example"&gt;
                                  &lt;div class="b-1-primary p-2"&gt;b-1-primary&lt;/div&gt;
                                  &lt;div class="b-3-secondary p-2"&gt;b-3-secondary&lt;/div&gt;
                                  &lt;div class="b-5-success p-2"&gt;b-5-success&lt;/div&gt;
                                  &lt;div class="b-7-danger p-2"&gt;b-7-danger&lt;/div&gt;
                                  &lt;div class="b-9-warning p-2"&gt;b-9-warning&lt;/div&gt;
                                  &lt;div class="b-15-info p-2"&gt;b-15-info&lt;/div&gt;
                              &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="b-r-[option]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">b-r-[option]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('borderRadiusClass')">
                              <i class="ti ti-copy"></i>
                            </a>

                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#borderRadiusCode')">
                              <i class="ti ti-code"></i>
                            </a>
                          </span>
                                    <div id="borderRadiusClass" class="opacity-0 w-0 h-0">b-r-5</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                             <code class="language-html" id="borderRadiusCode">
                              &lt;div class="app-example"&gt;
                                  &lt;div class="b-1-secondary b-r-5"&gt;b-r-5&lt;/div&gt;
                                  &lt;div class="b-1-secondary b-r-10"&gt;b-r-10&lt;/div&gt;
                                  &lt;div class="b-1-secondary b-r-15"&gt;b-r-15&lt;/div&gt;
                                  &lt;div class="b-1-secondary b-r-20"&gt;b-r-20&lt;/div&gt;
                                  &lt;div class="b-1-secondary b-r-25"&gt;b-r-25&lt;/div&gt;
                                  &lt;div class="b-1-secondary b-r-30"&gt;b-r-30&lt;/div&gt;
                               &lt;/div&gt;
                             </code>
                           </pre>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card cheatsheets-card box-template-list toggle-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-start f-s-18 f-w-500 rounded-bottom-0 py-2 box-template-name"
                               data-bs-toggle="collapse" href="#divider" aria-expanded="false" aria-controls="divider">
                                Divider
                            </a>
                        </div>
                        <div class="collapse card-body show p-0" id="divider">
                            <ul>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-v</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerSimpleClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerSimpleCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerSimpleClass" class="opacity-0 w-0 h-0">app-divider-v</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerSimpleCode">
                                &lt;div class="app-divider-v"&gt;&lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v dotted">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-v dotted</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerDottedClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerDottedCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerDottedClass" class="opacity-0 w-0 h-0">app-divider-v dotted</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerDottedCode">
                                &lt;div class="app-divider-v dotted"&gt;&lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v dashed">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-v dashed</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerDashedClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerDashedCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerDashedClass" class="opacity-0 w-0 h-0">app-divider-v dashed</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerDashedCode">
                                &lt;div class="app-divider-v dashed"&gt;&lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-h</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerHSimpleClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerHSimpleCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerHSimpleClass" class="opacity-0 w-0 h-0">app-divider-h</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerHSimpleCode">
                                &lt;div class="app-divider-h"&gt;&lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-h dotted">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-h dotted</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerHDottedClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerHDottedCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerHDottedClass" class="opacity-0 w-0 h-0">app-divider-h dotted</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerHDottedCode">
                                &lt;div class="app-divider-h dotted"&gt;&lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-h dashed">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-h dashed</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerHDashedClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerHDashedCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerHDashedClass" class="opacity-0 w-0 h-0">app-divider-h dashed</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerHDashedCode">
                                &lt;div class="app-divider-h dashed"&gt;&lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v justify-content-start">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-v justify-content-start</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerContentStartClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerContentStartCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerContentStartClass" class="opacity-0 w-0 h-0">app-divider-v</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerContentStartCode">
                                &lt;div class="app-divider-v"&gt;
                                &lt;p&gt; justify-content-start &lt;/p&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v justify-content-center">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-v justify-content-center</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerContentCenterClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerContentCenterCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerContentCenterClass" class="opacity-0 w-0 h-0">app-divider-v justify-content-center</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerContentCenterCode">
                                &lt;div class="app-divider-v justify-content-center"&gt;
                                &lt;p&gt; justify-content-center &lt;/p&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v justify-content-end">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-v justify-content-end</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerContentEndClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerContentEndCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerContentEndClass" class="opacity-0 w-0 h-0">app-divider-v justify-content-end</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerContentEndCode">
                                &lt;div class="app-divider-v justify-content-end"&gt;
                                &lt;p&gt; justify-content-end &lt;/p&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-h align-items-start">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-h align-items-start</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerHContentStartClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerHContentStartCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerHContentStartClass" class="opacity-0 w-0 h-0">app-divider-h</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerHContentStartCode">
                                &lt;div class="card h-100"&gt;
                                  &lt;div class="card-body divider-body d-flex"&gt;
                                    &lt;div class="app-divider-h"&gt;
                                      &lt;p&gt;Or&lt;/p&gt;
                                     &lt;/div&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-h align-items-center">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-h align-items-center</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerHContentCenterClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerHContentCenterCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerHContentCenterClass" class="opacity-0 w-0 h-0">app-divider-h align-items-center</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerHContentCenterCode">
                                &lt;div class="card h-100"&gt;
                                  &lt;div class="card-body divider-body d-flex"&gt;
                                    &lt;div class="app-divider-h align-items-center"&gt;
                                      &lt;p&gt;Or&lt;/p&gt;
                                     &lt;/div&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-h align-items-end">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-h align-items-end</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerHContentEndClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerHContentEndCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerHContentEndClass" class="opacity-0 w-0 h-0">app-divider-h align-items-end</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerHContentEndCode">
                                &lt;div class="card h-100"&gt;
                                  &lt;div class="card-body divider-body d-flex"&gt;
                                    &lt;div class="app-divider-h align-items-end"&gt;
                                      &lt;p&gt;Or&lt;/p&gt;
                                     &lt;/div&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-v primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerPrimaryClass" class="opacity-0 w-0 h-0">app-divider-v primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerPrimaryCode">
                                &lt;div class="app-divider-v primary"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-v secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerSecondaryClass" class="opacity-0 w-0 h-0">app-divider-v secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerSecondaryCode">
                                &lt;div class="app-divider-v secondary"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-v success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerSuccessClass" class="opacity-0 w-0 h-0">app-divider-v success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerSuccessCode">
                                &lt;div class="app-divider-v success"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-v danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerDangerClass" class="opacity-0 w-0 h-0">app-divider-v danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerDangerCode">
                                &lt;div class="app-divider-v danger"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-v warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerWaringClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerWaringCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerWaringClass" class="opacity-0 w-0 h-0">app-divider-v warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerWaringCode">
                                &lt;div class="app-divider-v warning"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-v info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerInfoClass" class="opacity-0 w-0 h-0">app-divider-v info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerInfoCode">
                                &lt;div class="app-divider-v info"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-v light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerLightClass" class="opacity-0 w-0 h-0">app-divider-v light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerLightCode">
                                &lt;div class="app-divider-v light"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-v dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-v dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerDarkClass" class="opacity-0 w-0 h-0">app-divider-v dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerDarkCode">
                                &lt;div class="app-divider-v dark"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-h primary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-h primary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerHPrimaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerHPrimaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerHPrimaryClass" class="opacity-0 w-0 h-0">app-divider-h primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerHPrimaryCode">
                                &lt;div class="app-divider-h primary"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-h secondary">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-h secondary</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerHSecondaryClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerHSecondaryCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerHSecondaryClass" class="opacity-0 w-0 h-0">app-divider-h secondary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerHSecondaryCode">
                                &lt;div class="app-divider-h secondary"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-h success">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-h success</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerHSuccessClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerHSuccessCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerHSuccessClass" class="opacity-0 w-0 h-0">app-divider-h success</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerHSuccessCode">
                                &lt;div class="app-divider-h success"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-h danger">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-h danger</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerHDangerClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerHDangerCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerHDangerClass" class="opacity-0 w-0 h-0">app-divider-h danger</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerHDangerCode">
                                &lt;div class="app-divider-h danger"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-h warning">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-h warning</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerHWaringClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerHWaringCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerHWaringClass" class="opacity-0 w-0 h-0">app-divider-h warning</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerHWaringCode">
                                &lt;div class="app-divider-h warning"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-h info">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-h info</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerHInfoClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerHInfoCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerHInfoClass" class="opacity-0 w-0 h-0">app-divider-h info</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerHInfoCode">
                                &lt;div class="app-divider-h info"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-h light">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-h light</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerHLightClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerHLightCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerHLightClass" class="opacity-0 w-0 h-0">app-divider-h light</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerHLightCode">
                                &lt;div class="app-divider-h light"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="app-divider-h dark">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">app-divider-h dark</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('dividerHDarkClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#dividerHDarkCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="dividerHDarkClass" class="opacity-0 w-0 h-0">app-divider-h dark</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="dividerHDarkCode">
                                &lt;div class="app-divider-h dark"&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card cheatsheets-card box-template-list toggle-card">
                        <div class="card-header p-0">
                            <a class="btn btn-primary w-100 text-start f-s-18 f-w-500 rounded-bottom-0 py-2 box-template-name"
                               data-bs-toggle="collapse" href="#ribbon" aria-expanded="false" aria-controls="ribbon">
                                Ribbon
                            </a>
                        </div>
                        <div class="collapse card-body show p-0" id="ribbon">
                            <ul>
                                <li class="list-item-preview d-flex gap-2" data-header="ribbon ribbon-left">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">ribbon ribbon-left</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('ribbonSimpleClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#ribbonSimpleCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="ribbonSimpleClass" class="opacity-0 w-0 h-0">ribbon ribbon-left ribbon-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="ribbonSimpleCode">
                                &lt;div class="d-flex gap-2 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="ribbon ribbon-left ribbon-primary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="ribbon ribbon-left ribbon-secondary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="ribbon ribbon-left ribbon-success"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-danger-500"&gt;
                                        &lt;div class="ribbon ribbon-left ribbon-danger"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-warning-500"&gt;
                                        &lt;div class="ribbon ribbon-left ribbon-warning"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-info-500"&gt;
                                        &lt;div class="ribbon ribbon-left ribbon-info"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-light-500"&gt;
                                        &lt;div class="ribbon ribbon-left ribbon-light"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-dark-500"&gt;
                                        &lt;div class="ribbon ribbon-left ribbon-dark"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="cross-shadow-ribbon cross-left">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">cross-shadow-ribbon cross-left</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('ribbonCrossClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#ribbonCrossCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="ribbonCrossClass" class="opacity-0 w-0 h-0">cross-shadow-ribbon cross-left ribbon-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="ribbonCrossCode">
                                &lt;div class="d-flex gap-2 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="cross-shadow-ribbon cross-left ribbon-primary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="cross-shadow-ribbon cross-left ribbon-secondary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="cross-shadow-ribbon cross-left ribbon-success"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-danger-500"&gt;
                                        &lt;div class="cross-shadow-ribbon cross-left ribbon-danger"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-warning-500"&gt;
                                        &lt;div class="cross-shadow-ribbon cross-left ribbon-warning"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-info-500"&gt;
                                        &lt;div class="cross-shadow-ribbon cross-left ribbon-info"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-light-500"&gt;
                                        &lt;div class="cross-shadow-ribbon cross-left ribbon-light"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-dark-500"&gt;
                                        &lt;div class="cross-shadow-ribbon cross-left ribbon-dark"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="ribbon-shape shape-left">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">ribbon-shape shape-left</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('ribbonShapeClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#ribbonShapeCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="ribbonShapeClass" class="opacity-0 w-0 h-0">ribbon-shape shape-left ribbon-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="ribbonShapeCode">
                                &lt;div class="d-flex gap-2 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="ribbon-shape shape-left ribbon-primary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="ribbon-shape shape-left ribbon-secondary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="ribbon-shape shape-left ribbon-success"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-danger-500"&gt;
                                        &lt;div class="ribbon-shape shape-left ribbon-danger"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-warning-500"&gt;
                                        &lt;div class="ribbon-shape shape-left ribbon-warning"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-info-500"&gt;
                                        &lt;div class="ribbon-shape shape-left ribbon-info"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-light-500"&gt;
                                        &lt;div class="ribbon-shape shape-left ribbon-light"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-dark-500"&gt;
                                        &lt;div class="ribbon-shape shape-left ribbon-dark"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="arrow-ribbon arrow-left">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">arrow-ribbon arrow-left</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('ribbonArrowClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#ribbonArrowCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="ribbonArrowClass" class="opacity-0 w-0 h-0">arrow-ribbon arrow-left ribbon-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="ribbonArrowCode">
                                &lt;div class="d-flex gap-2 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="arrow-ribbon arrow-left ribbon-primary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="arrow-ribbon arrow-left ribbon-secondary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="arrow-ribbon arrow-left ribbon-success"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-danger-500"&gt;
                                        &lt;div class="arrow-ribbon arrow-left ribbon-danger"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-warning-500"&gt;
                                        &lt;div class="arrow-ribbon arrow-left ribbon-warning"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-info-500"&gt;
                                        &lt;div class="arrow-ribbon arrow-left ribbon-info"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-light-500"&gt;
                                        &lt;div class="arrow-ribbon arrow-left ribbon-light"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-dark-500"&gt;
                                        &lt;div class="arrow-ribbon arrow-left ribbon-dark"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="ribbon-side side-left">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">ribbon-side side-left</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('ribbonSideClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#ribbonSideCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="ribbonSideClass" class="opacity-0 w-0 h-0">ribbon-side side-left ribbon-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="ribbonSideCode">
                                &lt;div class="d-flex gap-4 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="ribbon-side side-left ribbon-primary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="ribbon-side side-left ribbon-secondary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="ribbon-side side-left ribbon-success"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-danger-500"&gt;
                                        &lt;div class="ribbon-side side-left ribbon-danger"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-warning-500"&gt;
                                        &lt;div class="ribbon-side side-left ribbon-warning"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-info-500"&gt;
                                        &lt;div class="ribbon-side side-left ribbon-info"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-light-500"&gt;
                                        &lt;div class="ribbon-side side-left ribbon-light"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-dark-500"&gt;
                                        &lt;div class="ribbon-side side-left ribbon-dark"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="ribbon-top top-left">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">ribbon-top top-left</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('topRibbonClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#topRibbonCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="topRibbonClass" class="opacity-0 w-0 h-0">ribbon-top top-left ribbon-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="topRibbonCode">
                                &lt;div class="d-flex gap-2 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="ribbon-top top-left ribbon-primary"&gt;
                                          &lt;i class="fa-solid fa-gift fa-fw"&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="ribbon-top top-left ribbon-secondary"&gt;
                                          &lt;i class="fa-solid fa-gift fa-fw"&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="ribbon-top top-left ribbon-success"&gt;
                                          &lt;i class="fa-solid fa-gift fa-fw"&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-danger-500"&gt;
                                        &lt;div class="ribbon-top top-left ribbon-danger"&gt;
                                          &lt;i class="fa-solid fa-gift fa-fw"&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-warning-500"&gt;
                                        &lt;div class="ribbon-top top-left ribbon-warning"&gt;
                                          &lt;i class="fa-solid fa-gift fa-fw"&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-info-500"&gt;
                                        &lt;div class="ribbon-top top-left ribbon-info"&gt;
                                          &lt;i class="fa-solid fa-gift fa-fw"&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-light-500"&gt;
                                        &lt;div class="ribbon-top top-left ribbon-light"&gt;
                                          &lt;i class="fa-solid fa-gift fa-fw"&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-dark-500"&gt;
                                        &lt;div class="ribbon-top top-left ribbon-dark"&gt;
                                          &lt;i class="fa-solid fa-gift fa-fw"&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="circle-ribbon circle-left">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">circle-ribbon circle-left</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('ribbonCircleClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#ribbonCircleCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="ribbonCircleClass" class="opacity-0 w-0 h-0">circle-ribbon circle-left ribbon-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="ribbonCircleCode">
                                &lt;div class="d-flex gap-2 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="circle-ribbon circle-left ribbon-primary"&gt;
                                          50%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="circle-ribbon circle-left ribbon-secondary"&gt;
                                          50%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="circle-ribbon circle-left ribbon-success"&gt;
                                          50%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-danger-500"&gt;
                                        &lt;div class="circle-ribbon circle-left ribbon-danger"&gt;
                                          50%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-warning-500"&gt;
                                        &lt;div class="circle-ribbon circle-left ribbon-warning"&gt;
                                          50%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-info-500"&gt;
                                        &lt;div class="circle-ribbon circle-left ribbon-info"&gt;
                                          50%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-light-500"&gt;
                                        &lt;div class="circle-ribbon circle-left ribbon-light"&gt;
                                          50%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-dark-500"&gt;
                                        &lt;div class="circle-ribbon circle-left ribbon-dark"&gt;
                                          50%
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="ribbon file-left">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">ribbon file-left</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('fileRibbonClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#fileRibbonCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="fileRibbonClass" class="opacity-0 w-0 h-0">ribbon file-left ribbon-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="fileRibbonCode">
                                &lt;div class="d-flex gap-2 flex-wrap"&gt;
                                     &lt;div class="ribbon-file w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="ribbon file-left ribbon-primary"&gt;
                                          25%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-file w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="ribbon file-left ribbon-secondary"&gt;
                                          25%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-file w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="ribbon file-left ribbon-success"&gt;
                                          25%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-file w-120 h-120 bg-danger-500"&gt;
                                        &lt;div class="ribbon file-left ribbon-danger"&gt;
                                          25%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-file w-120 h-120 bg-warning-500"&gt;
                                        &lt;div class="ribbon file-left ribbon-warning"&gt;
                                          25%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-file w-120 h-120 bg-info-500"&gt;
                                        &lt;div class="ribbon file-left ribbon-info"&gt;
                                          25%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-file w-120 h-120 bg-light-500"&gt;
                                        &lt;div class="ribbon file-left ribbon-light"&gt;
                                          25%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-file w-120 h-120 bg-dark-500"&gt;
                                        &lt;div class="ribbon file-left ribbon-dark"&gt;
                                          25%
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="box-ribbon box-left">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">box-ribbon box-left</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Class" onclick="copyClassClipboard('boxRibbonClass')">
                                <i class="ti ti-copy"></i>
                              </a>

                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#boxRibbonCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <div id="boxRibbonClass" class="opacity-0 w-0 h-0">ribbon file-left ribbon-primary</div>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="boxRibbonCode">
                                &lt;div class="d-flex gap-2 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="box-ribbon box-left"&gt;
                                          &lt;div class="ribbonbox ribbon-primary"&gt; Box &lt;/div&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="box-ribbon box-left"&gt;
                                          &lt;div class="ribbonbox ribbon-secondary"&gt; Box &lt;/div&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="box-ribbon box-left"&gt;
                                          &lt;div class="ribbonbox ribbon-success"&gt; Box &lt;/div&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-danger-500"&gt;
                                        &lt;div class="box-ribbon box-left"&gt;
                                          &lt;div class="ribbonbox ribbon-danger"&gt; Box &lt;/div&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-warning-500"&gt;
                                        &lt;div class="box-ribbon box-left"&gt;
                                          &lt;div class="ribbonbox ribbon-warning"&gt; Box &lt;/div&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-info-500"&gt;
                                        &lt;div class="box-ribbon box-left"&gt;
                                          &lt;div class="ribbonbox ribbon-info"&gt; Box &lt;/div&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-light-500"&gt;
                                        &lt;div class="box-ribbon box-left"&gt;
                                          &lt;div class="ribbonbox ribbon-light"&gt; Box &lt;/div&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-dark-500"&gt;
                                     &lt;div class="box-ribbon box-left"&gt;
                                       &lt;div class="ribbonbox ribbon-dark"&gt; Box &lt;/div&gt;
                                     &lt;/div&gt;
                                  &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>

                                <li class="list-item-preview d-flex gap-2" data-header="ribbon ribbon-[position]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">ribbon ribbon-[position]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#ribbonPositionSimpleCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="ribbonPositionSimpleCode">
                                &lt;div class="d-flex gap-2 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="ribbon ribbon-right ribbon-primary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="ribbon ribbon-left-bottom ribbon-secondary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="ribbon ribbon-right-bottom ribbon-success"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="ribbon-shape shape-[position]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">ribbon-shape shape-[position]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#ribbonPositionShapeCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="ribbonPositionShapeCode">
                                &lt;div class="d-flex gap-2 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="ribbon-shape shape-right ribbon-primary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="ribbon-shape shape-left-bottom ribbon-secondary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="ribbon-shape shape-right-bottom ribbon-success"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="arrow-ribbon arrow-[position]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">arrow-ribbon arrow-[position]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#ribbonPositionArrowCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="ribbonPositionArrowCode">
                                &lt;div class="d-flex gap-2 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="arrow-ribbon arrow-right ribbon-primary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="arrow-ribbon arrow-left-bottom ribbon-secondary"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="arrow-ribbon arrow-right-bottom ribbon-success"&gt;
                                          Ribbon
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="ribbon-top top-[position]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">ribbon-top top-[position]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#topRibbonPositionCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="topRibbonPositionCode">
                                &lt;div class="d-flex gap-2 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="ribbon-top top-right ribbon-primary"&gt;
                                          &lt;i class="fa-solid fa-gift fa-fw"&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="ribbon-top top-left-bottom ribbon-secondary"&gt;
                                          &lt;i class="fa-solid fa-gift fa-fw"&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="ribbon-top top-right-bottom ribbon-success"&gt;
                                          &lt;i class="fa-solid fa-gift fa-fw"&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="ribbon-side side-[position]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">ribbon-side side-[position]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#sideRibbonPositionCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="sideRibbonPositionCode">
                                &lt;div class="d-flex gap-4 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="ribbon-side side-right ribbon-primary"&gt;
                                          Side
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="ribbon-side side-left-bottom ribbon-secondary"&gt;
                                          Side
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="ribbon-side side-right-bottom ribbon-success"&gt;
                                          Side
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="cross-shadow-ribbon cross-[position]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">cross-shadow-ribbon cross-[position]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#crossRibbonPositionCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="crossRibbonPositionCode">
                                &lt;div class="d-flex gap-4 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="cross-shadow-ribbon cross-right ribbon-primary"&gt;
                                          Side
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="cross-shadow-ribbon cross-left-bottom ribbon-secondary"&gt;
                                          Side
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="cross-shadow-ribbon cross-right-bottom ribbon-success"&gt;
                                          Side
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="circle-ribbon circle-[position]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">circle-ribbon circle-[position]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#CircleRibbonPositionCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="CircleRibbonPositionCode">
                                &lt;div class="d-flex gap-2 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="circle-ribbon circle-right ribbon-primary"&gt;
                                          25%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="circle-ribbon circle-left-bottom ribbon-secondary"&gt;
                                          25%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="circle-ribbon circle-right-bottom ribbon-success"&gt;
                                          25%
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="ribbon file-[position]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">ribbon file-[position]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#fileRibbonPositionCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>
                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="fileRibbonPositionCode">
                                &lt;div class="d-flex gap-2 flex-wrap"&gt;
                                     &lt;div class="ribbon-file w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="ribbon file-right ribbon-primary"&gt;
                                          10%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-file w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="ribbon file-left-bottom ribbon-secondary"&gt;
                                          10%
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-file w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="ribbon file-right-bottom ribbon-success"&gt;
                                          10%
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                                <li class="list-item-preview d-flex gap-2" data-header="box-ribbon box-[position]">
                                    <div class="list-preview w-100">
                                        <span class="collapse-name">box-ribbon box-[position]</span>
                                    </div>
                                    <span class="collapse-icons d-flex gap-2">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy Code" onclick="copyToClipboard('#boxRibbonPositionCode')">
                                <i class="ti ti-code"></i>
                              </a>
                            </span>

                                    <pre class="opacity-0 w-0 h-0 p-0">
                               <code class="language-html" id="boxRibbonPositionCode">
                                &lt;div class="d-flex gap-3 flex-wrap"&gt;
                                     &lt;div class="ribbon-box w-120 h-120 bg-primary-500"&gt;
                                        &lt;div class="box-ribbon box-right"&gt;
                                          &lt;div class="ribbonbox ribbon-primary"&gt; Box &lt;/div&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-secondary-500"&gt;
                                        &lt;div class="box-ribbon box-left-bottom"&gt;
                                          &lt;div class="ribbonbox ribbon-secondary"&gt; Box &lt;/div&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;

                                     &lt;div class="ribbon-box w-120 h-120 bg-success-500"&gt;
                                        &lt;div class="box-ribbon box-right-bottom"&gt;
                                          &lt;div class="ribbonbox ribbon-success"&gt; Box &lt;/div&gt;
                                        &lt;/div&gt;
                                     &lt;/div&gt;
                                &lt;/div&gt;
                               </code>
                             </pre>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid code-container code-preview-popup d-none">
        <div class="row">
            <div class="col-12 p-0">
                <div class="code-preview-header d-flex justify-content-between mb-3">
                    <h4 class="m-0 text-white header-preview-text"></h4>
                    <button type="button" class="btn h-30 w-30 bg-light p-2 box-close d-flex-center"><i class="fa fa-close"></i></button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-end justify-content-between mg-b-16">
                    <h4 class="text-white">Code</h4>
                    <button type="button" class="btn h-30 w-30 bg-dark text-white p-2 d-flex-center" onclick="copyToClipboard('#previewCodeText')"><i class="ti ti-copy"></i></button>
                </div>
                <div class="card box-shadow-none code-preview">
                    <div class="card-body">
                        <pre class=""><code class="language-html " id="previewCodeText"></code></pre>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mg-b-16">
                    <h4 class="text-white">Preview</h4>
                </div>
                <div class="card box-shadow-none code-preview">
                    <div class="card-body code-preview-div">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- masonry js-->
<script src="{{asset('assets/vendor/masonry/masonry.pkgd.min.js')}}"></script>

<!-- toatify js-->
<script src="{{asset('assets/vendor/toastify/toastify.js')}}"></script>
<script src="{{asset('assets/js/tooltips_popovers.js')}}"></script>

<!-- cheatsheet js -->
<script src="{{asset('assets/js/cheatsheet.js')}}"></script>
@endsection
