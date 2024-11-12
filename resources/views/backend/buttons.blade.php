@extends('layout.master')
@section('title', 'Buttons')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid button-section">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Button</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
									<span>
									  <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
									</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Button</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Button start -->
        <div class="row">
            <!-- Basic buttons start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Basic Buttons</h5>
                        <a data-bs-toggle="collapse" href="#basicbtnexample" aria-expanded="false"
                           aria-controls="basicbtnexample">
                            <i class="ti ti-code source" data-source="basicbutton"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="app-btn-list">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-light">Light</button>
                            <button type="button" class="btn btn-dark">Dark</button>
                            <button type="button" class="btn btn-link">Link</button>
                        </div>
                    </div>

                    <pre class="basicbutton collapse mt-3" id="basicbtnexample">
										<code class="language-html">
&lt;button type="button" class="btn btn-primary"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-success"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-danger"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-warning"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-info"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-light"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-dark"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-link"&gt;...&lt;/button&gt;
										</code>
									</pre>
                </div>
            </div>
            <!-- Basic buttons end -->
            <!-- Outline buttons start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Outline Buttons</h5>
                        <a data-bs-toggle="collapse" href="#outlinebtnexample" aria-expanded="false"
                           aria-controls="outlinebtnexample">
                            <i class="ti ti-code source" data-source="outlinebtn"></i></a>


                    </div>
                    <div class="card-body">
                        <div class="app-btn-list">
                            <button type="button" class="btn btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn btn-outline-success">Success</button>
                            <button type="button" class="btn btn-outline-danger">Danger</button>
                            <button type="button" class="btn btn-outline-warning">Warning</button>
                            <button type="button" class="btn btn-outline-info">Info</button>
                            <button type="button" class="btn btn-outline-light">Light</button>
                            <button type="button" class="btn btn-outline-dark">Dark</button>
                            <button type="button" class="btn btn-outline-link">Link</button>
                        </div>
                    </div>

                    <pre class="outlinebtn collapse mt-3" id="outlinebtnexample">
										<code class="language-html">
&lt;button type="button" class="btn btn-outline-primary"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-secondary"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-success"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-danger"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-warning"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-info"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-light"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-dark"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-link"&gt;...&lt;/button&gt;
										</code>
									</pre>
                </div>
            </div>
            <!-- Outline buttons end -->
            <!-- Light buttons start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Light Buttons</h5>
                        <a data-bs-toggle="collapse" href="#lightbtnexample" aria-expanded="false"
                           aria-controls="lightbtnexample">
                            <i class="ti ti-code source" data-source="lightbtn"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="app-btn-list">
                            <button type="button" class="btn btn-light-primary">Primary</button>
                            <button type="button" class="btn btn-light-secondary">Secondary</button>
                            <button type="button" class="btn btn-light-success">Success</button>
                            <button type="button" class="btn btn-light-danger">Danger</button>
                            <button type="button" class="btn btn-light-warning">Warning</button>
                            <button type="button" class="btn btn-light-info">Info</button>
                            <button type="button" class="btn btn-light-light">Light</button>
                            <button type="button" class="btn btn-light-dark">Dark</button>
                            <button type="button" class="btn btn-light-link">Link</button>
                        </div>
                    </div>

                    <pre class="lightbtn collapse mt-3" id="lightbtnexample">
										<code class="language-html">
&lt;button type="button" class="btn btn-light-primary"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-light-secondary"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-light-success"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-light-danger"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-light-warning"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-light-info"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-light-light"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-light-dark"&gt;...&lt;/button&gt;
&lt;button type="button" class="btn btn-light-link"&gt;...&lt;/button&gt;
										</code>
									</pre>
                </div>
            </div>
            <!-- Light buttons end -->
            <!-- Icon Button start -->
            <div class="col-12">
                <div class="card button-view">
                    <div class="card-header code-header">
                        <h5>Icon Button</h5>
                        <a data-bs-toggle="collapse" href="#iconbtnExample" aria-expanded="false"
                           aria-controls="iconbtnExample">
                            <i class="ti ti-code source" data-source="iconbtn"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 app-btn-list">
                                <button type="button" class="btn btn-primary"> <i
                                        class="ti ti-download"></i> Primary</button>
                                <button type="button"
                                        class="btn btn-secondary d-lg-inline-flex align-items-center">
                                    Secondary <i class="ti ti-alert-triangle m-s-3"></i></button>
                            </div>
                            <div class="col-md-6 col-lg-4 app-btn-list">
                                <button type="button" class="btn btn-outline-primary"> <i
                                        class="ti ti-download"></i> Primary</button>
                                <button type="button"
                                        class="btn btn-outline-secondary d-lg-inline-flex align-items-center">
                                    Secondary <i class="ti ti-alert-triangle m-s-3"></i></button>
                            </div>
                            <div class="col-md-6 col-lg-4 app-btn-list">
                                <button type="button" class="btn btn-light-primary"> <i
                                        class="ti ti-download"></i> Primary</button>
                                <button type="button"
                                        class="btn btn-light-secondary d-lg-inline-flex align-items-center">
                                    Secondary <i class="ti ti-alert-triangle m-s-3"></i></button>
                            </div>
                        </div>
                    </div>

                    <pre class="iconbtn collapse mt-3" id="iconbtnExample">
										<code class="language-html">
&lt;div class="row app-btn-list"&gt;
 &lt;div class="col-md-6 col-lg-4"&gt;
	 &lt;button type="button" class="btn btn-primary"&gt; &lt;i
	   class="ti ti-download"&gt;&lt;/i&gt; Primary&lt;/button&gt;
	 &lt;button type="button"
	  class="btn btn-secondary d-lg-inline-flex align-items-center"&gt;
	  Secondary &lt;i class="ti ti-alert-triangle m-s-3"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="col-md-6 col-lg-4"&gt;
	 &lt;button type="button" class="btn btn-outline-primary"&gt; &lt;i
	   class="ti ti-download"&gt;&lt;/i&gt; Primary&lt;/button&gt;
	 &lt;button type="button"
	  class="btn btn-outline-secondary d-lg-inline-flex align-items-center"&gt;
	  Secondary &lt;i class="ti ti-alert-triangle m-s-3"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;/div&gt;
 &lt;div class="col-md-6 col-lg-4"&gt;
	 &lt;button type="button" class="btn btn-light-primary"&gt; &lt;i
	   class="ti ti-download"&gt;&lt;/i&gt; Primary&lt;/button&gt;
	 &lt;button type="button"
	  class="btn btn-light-secondary d-lg-inline-flex align-items-center"&gt;
	  Secondary &lt;i class="ti ti-alert-triangle m-s-3"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;/div&gt;
&lt;/div&gt;
										</code>
									</pre>
                </div>
            </div>
            <!-- Icon Button end -->
            <!-- Radius start -->
            <div class="col-12">
                <div class="card button-view">
                    <div class="card-header code-header">
                        <h5>Radius</h5>
                        <a data-bs-toggle="collapse" href="#Radiusexample1" aria-expanded="false"
                           aria-controls="Radiusexample1">
                            <i class="ti ti-code source" data-source="Radius"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button type="button" class="btn btn-primary b-r-22"> <i
                                        class="ti ti-download"></i> Primary</button>
                                <button type="button"
                                        class="btn btn-secondary d-lg-inline-flex align-items-center b-r-22">
                                    Secondary <i class="ti ti-alert-triangle m-s-3"></i></button>
                            </div>
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button type="button" class="btn btn-outline-primary b-r-22"> <i
                                        class="ti ti-download"></i> Primary</button>
                                <button type="button"
                                        class="btn btn-outline-secondary d-lg-inline-flex align-items-center b-r-22">
                                    Secondary <i class="ti ti-alert-triangle m-s-3"></i></button>
                            </div>
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button type="button" class="btn btn-light-primary b-r-22"> <i
                                        class="ti ti-download"></i> Primary</button>
                                <button type="button"
                                        class="btn btn-light-secondary d-lg-inline-flex align-items-center b-r-22">
                                    Secondary <i class="ti ti-alert-triangle m-s-3"></i></button>
                            </div>
                        </div>
                    </div>

                    <pre class="Radius collapse mt-3" id="Radiusexample1">
										<code class="language-html">
&lt;div class="row app-btn-list"&gt;
  &lt;div class="col-md-6 col-lg-4 col-12"&gt;
  &lt;button type="button" class="btn btn-primary b-r-22"&gt; &lt;i
   class="ti ti-download"&gt;&lt;/i&gt; Primary&lt;/button&gt;
  &lt;button type="button"
  class="btn btn-secondary d-lg-inline-flex align-items-center b-r-22"&gt;
   Secondary &lt;i class="ti ti-alert-triangle m-s-3"&gt;&lt;/i&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="col-md-6 col-lg-4 col-12"&gt;
   &lt;button type="button" class="btn btn-outline-primary b-r-22"&gt; &lt;i
   class="ti ti-download"&gt;&lt;/i&gt; Primary&lt;/button&gt;
   &lt;button type="button"
    class="btn btn-outline-secondary d-lg-inline-flex align-items-center b-r-22"&gt;
    Secondary &lt;i class="ti ti-alert-triangle m-s-3"&gt;&lt;/i&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="col-md-6 col-lg-4 col-12"&gt;
   &lt;button type="button" class="btn btn-light-primary b-r-22"&gt; &lt;i
   class="ti ti-download"&gt;&lt;/i&gt; Primary&lt;/button&gt;
   &lt;button type="button"
   class="btn btn-light-secondary d-lg-inline-flex align-items-center b-r-22"&gt;
    Secondary &lt;i class="ti ti-alert-triangle m-s-3"&gt;&lt;/i&gt;&lt;/button&gt;
  &lt;/div&gt;
 &lt;/div&gt;
										</code>
									</pre>

                </div>
            </div>
            <!-- Radius end -->
            <!-- Social Buttons start -->
            <div class="col-12">
                <div class="card button-view">
                    <div class="card-header code-header">
                        <h5>Social Buttons</h5>
                        <a data-bs-toggle="collapse" href="#socialbtnexample" aria-expanded="false"
                           aria-controls="socialbtnexample">
                            <i class="ti ti-code source" data-source="socialbtn"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button type="button"
                                        class="btn btn-facebook b-r-22 text-white d-inline-flex-center"><i
                                        class="ti ti-brand-facebook f-s-18 me-1"></i> Facebook </button>
                                <button type="button"
                                        class="btn btn-twitter b-r-22 text-white d-inline-flex-center"><i
                                        class="ti ti-brand-twitter f-s-18 me-1"></i> twitter </button>
                            </div>
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button type="button"
                                        class="btn btn-outline-pinterest b-r-22 d-inline-flex-center"><i
                                        class="ti ti-brand-pinterest f-s-18 me-1"></i> Pinterest
                                </button>
                                <button type="button"
                                        class="btn btn-outline-linkedin b-r-22 d-inline-flex-center"><i
                                        class="ti ti-brand-linkedin f-s-18 me-1"></i> Linkedin </button>
                            </div>
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button type="button"
                                        class="btn btn-light-reddit b-r-22 d-inline-flex-center"><i
                                        class="ti ti-brand-reddit f-s-18 me-1"></i> Reddit </button>
                                <button type="button"
                                        class="btn btn-light-twitter b-r-22 d-inline-flex-center"><i
                                        class="ti ti-brand-twitter f-s-18 me-1"></i> twitter </button>
                            </div>
                        </div>
                    </div>

                    <pre class="socialbtn collapse mt-3" id="socialbtnexample">
										<code class="language-html">
&lt;div class="row"&gt;
	 &lt;div class="col-md-6 col-lg-4 col-12"&gt;
	  &lt;button type="button"
	   class="btn btn-facebook b-r-22 text-white d-inline-flex-center"&gt;&lt;i
	  class="ti ti-brand-facebook f-s-18 me-1"&gt;&lt;/i&gt; Facebook &lt;/button&gt;
	  &lt;button type="button"
	  class="btn btn-twitter b-r-22 text-white d-inline-flex-center"&gt;&lt;i
 	class="ti ti-brand-twitter f-s-18 me-1"&gt;&lt;/i&gt; twitter &lt;/button&gt;
	 &lt;/div&gt;

	 &lt;div class="col-md-6 col-lg-4 col-12"&gt;
	  &lt;button type="button"
	 class="btn btn-outline-pinterest b-r-22 d-inline-flex-center"&gt;&lt;i
	   class="ti ti-brand-pinterest f-s-18 me-1"&gt;&lt;/i&gt; Pinterest
	  &lt;/button&gt;
	  &lt;button type="button"
	  class="btn btn-outline-linkedin b-r-22 d-inline-flex-center"&gt;&lt;i
	 class="ti ti-brand-linkedin f-s-18 me-1"&gt;&lt;/i&gt; Linkedin &lt;/button&gt;
	 &lt;/div&gt;

	 &lt;div class="col-md-6 col-lg-4 col-12"&gt;
	  &lt;button type="button"
	  class="btn btn-light-reddit b-r-22 d-inline-flex-center"&gt;&lt;i
	   class="ti ti-brand-reddit f-s-18 me-1"&gt;&lt;/i&gt; Reddit &lt;/button&gt;
	  &lt;button type="button"
	   class="btn btn-light-twitter b-r-22 d-inline-flex-center"&gt;&lt;i
	  class="ti ti-brand-twitter f-s-18 me-1"&gt;&lt;/i&gt; twitter &lt;/button&gt;
	 &lt;/div&gt;
 &lt;/div&gt;
										</code>
									</pre>
                </div>
            </div>
            <!-- Social Buttons end -->
            <!-- Icon Button start -->
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Icon Button</h5>
                        <a data-bs-toggle="collapse" href="#iconbtnexample" aria-expanded="false"
                           aria-controls="iconbtnexample">
                            <i class="ti ti-code source" data-source="iconbtn"></i>
                        </a>


                    </div>
                    <div class="card-body">
                        <div class="app-btn-list">
                            <button type="button" class="btn btn-primary icon-btn b-r-4"> <i
                                    class="ti ti-capture"></i></button>
                            <button type="button" class="btn btn-secondary icon-btn b-r-4"><i
                                    class="ti ti-bell-ringing"></i></button>
                            <button type="button" class="btn btn-outline-primary icon-btn b-r-4"> <i
                                    class="ti ti-capture"></i></button>
                            <button type="button" class="btn btn-outline-secondary icon-btn b-r-4"><i
                                    class="ti ti-bell-ringing"></i></button>
                            <button type="button" class="btn btn-light-primary icon-btn b-r-4">
                                <i class="ti ti-capture"></i></button>
                            <button type="button" class="btn btn-light-secondary icon-btn b-r-4"><i
                                    class="ti ti-bell-ringing"></i></button>
                        </div>
                    </div>

                    <pre class="iconbtn collapse mt-3" id="iconbtnexample">
	<code class="language-html">

	&lt;div class="app-btn-list"&gt;
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
	&lt;/div&gt;

	</code>
</pre>
                </div>
            </div>
            <!-- Icon Button end -->

            <!-- Social Buttons start -->
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Social Buttons</h5>
                        <a data-bs-toggle="collapse" href="#socialbuttonexample" aria-expanded="false"
                           aria-controls="socialbuttonexample">
                            <i class="ti ti-code source" data-source="socialbutton"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="app-btn-list">
                            <button type="button" class="btn btn-facebook icon-btn b-r-22"><i
                                    class="ti ti-brand-facebook text-white"></i></button>
                            <button type="button" class="btn btn-twitter icon-btn b-r-22"><i
                                    class="ti ti-brand-twitter text-white"></i></button>
                            <button type="button" class="btn btn-pinterest icon-btn b-r-22"><i
                                    class="ti ti-brand-pinterest text-white"></i></button>
                            <button type="button" class="btn btn-linkedin icon-btn b-r-22"><i
                                    class="ti ti-brand-linkedin text-white"></i></button>
                            <button type="button" class="btn btn-reddit icon-btn b-r-22"><i
                                    class="ti ti-brand-reddit text-white"></i></button>
                            <button type="button" class="btn btn-whatsapp icon-btn b-r-22"><i
                                    class="ti ti-brand-whatsapp text-white"></i></button>
                            <button type="button" class="btn btn-gmail icon-btn b-r-22"><i
                                    class="ti ti-brand-gmail text-white"></i></button>
                            <button type="button" class="btn btn-telegram icon-btn b-r-22"><i
                                    class="ti ti-brand-telegram text-white"></i></button>
                            <button type="button" class="btn btn-youtube icon-btn b-r-22"><i
                                    class="ti ti-brand-youtube text-white"></i></button>
                            <button type="button" class="btn btn-vimeo icon-btn b-r-22"><i
                                    class="ti ti-brand-vimeo text-white"></i></button>
                            <button type="button" class="btn btn-behance icon-btn b-r-22"><i
                                    class="ti ti-brand-behance text-white"></i></button>
                            <button type="button" class="btn btn-github icon-btn b-r-22"><i
                                    class="ti ti-brand-github text-white"></i></button>
                            <button type="button" class="btn btn-skype icon-btn b-r-22"><i
                                    class="ti ti-brand-skype text-white"></i></button>
                            <button type="button" class="btn btn-snapchat icon-btn b-r-22"><i
                                    class="ti ti-brand-snapchat"></i></button>
                        </div>
                    </div>

                    <pre class="socialbutton collapse mt-3" id="socialbuttonexample">
	<code class="language-html">
 &lt;button type="button" class="btn btn-facebook icon-btn b-r-22"&gt;&lt;i
  class="ti ti-brand-facebook text-white"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button type="button" class="btn btn-twitter icon-btn b-r-22"&gt;&lt;i
  class="ti ti-brand-twitter text-white"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button type="button" class="btn btn-pinterest icon-btn b-r-22"&gt;&lt;i
  class="ti ti-brand-pinterest text-white"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button type="button" class="btn btn-linkedin icon-btn b-r-22"&gt;&lt;i
  class="ti ti-brand-linkedin text-white"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button type="button" class="btn btn-reddit icon-btn b-r-22"&gt;&lt;i
  class="ti ti-brand-reddit text-white"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button type="button" class="btn btn-whatsapp icon-btn b-r-22"&gt;&lt;i
  class="ti ti-brand-whatsapp text-white"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button type="button" class="btn btn-gmail icon-btn b-r-22"&gt;&lt;i
  class="ti ti-brand-gmail text-white"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button type="button" class="btn btn-telegram icon-btn b-r-22"&gt;&lt;i
  class="ti ti-brand-telegram text-white"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button type="button" class="btn btn-youtube icon-btn b-r-22"&gt;&lt;i
  class="ti ti-brand-youtube text-white"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button type="button" class="btn btn-vimeo icon-btn b-r-22"&gt;&lt;i
  class="ti ti-brand-vimeo text-white"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button type="button" class="btn btn-behance icon-btn b-r-22"&gt;&lt;i
  class="ti ti-brand-behance text-white"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button type="button" class="btn btn-github icon-btn b-r-22"&gt;&lt;i
  class="ti ti-brand-github text-white"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button type="button" class="btn btn-skype icon-btn b-r-22"&gt;&lt;i
  class="ti ti-brand-skype text-white"&gt;&lt;/i&gt;&lt;/button&gt;
 &lt;button type="button" class="btn btn-snapchat icon-btn b-r-22"&gt;&lt;i
  class="ti ti-brand-snapchat"&gt;&lt;/i&gt;&lt;/button&gt;
	</code>
</pre>
                </div>
            </div>
            <!-- Social Buttons end -->
            <!-- Disable Buttons start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Disable Buttons</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button type="button" class="btn btn-primary disabled"> <i
                                        class="ti ti-download"></i> Primary</button>
                                <button type="button"
                                        class="btn btn-secondary d-lg-inline-flex align-items-center disabled">
                                    Secondary <i class="ti ti-alert-triangle m-s-3"></i></button>
                            </div>
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button type="button" class="btn btn-outline-primary disabled"> <i
                                        class="ti ti-download"></i> Primary</button>
                                <button type="button"
                                        class="btn btn-outline-secondary d-lg-inline-flex align-items-center disabled">
                                    Secondary <i class="ti ti-alert-triangle m-s-3"></i></button>
                            </div>
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button type="button" class="btn btn-light-primary disabled"> <i
                                        class="ti ti-download"></i> Primary</button>
                                <button type="button"
                                        class="btn btn-light-secondary d-lg-inline-flex align-items-center disabled">
                                    Secondary <i class="ti ti-alert-triangle m-s-3"></i></button>
                            </div>
                        </div>
                    </div>

                    <pre class="Radius collapse mt-3" id="Radiusexample">
										<code class="language-html">

										</code>
									</pre>
                </div>
            </div>
            <!-- Disable Buttons end -->
            <!-- Active Buttons start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Active Buttons</h5>
                        <a data-bs-toggle="collapse" href="#activebuttonexample" aria-expanded="false"
                           aria-controls="activebuttonexample">
                            <i class="ti ti-code source" data-source="activebtn"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button type="button" class="btn btn-primary active"> <i
                                        class="ti ti-download"></i> Primary</button>
                                <button type="button"
                                        class="btn btn-secondary d-lg-inline-flex align-items-center active">
                                    Secondary <i class="ti ti-alert-triangle m-s-3"></i></button>
                            </div>
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button type="button" class="btn btn-outline-primary active"> <i
                                        class="ti ti-download"></i> Primary</button>
                                <button type="button"
                                        class="btn btn-outline-secondary d-lg-inline-flex align-items-center active">
                                    Secondary <i class="ti ti-alert-triangle m-s-3"></i></button>
                            </div>
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button type="button" class="btn btn-light-primary active"> <i
                                        class="ti ti-download"></i> Primary</button>
                                <button type="button"
                                        class="btn btn-light-secondary d-lg-inline-flex align-items-center active">
                                    Secondary <i class="ti ti-alert-triangle m-s-3"></i></button>
                            </div>
                        </div>
                    </div>

                    <pre class="activebtn collapse mt-3" id="activebuttonexample">
										<code class="language-html">
&lt;div class="row"&gt;
	 &lt;div class="col-md-6 col-lg-4 col-12 mb-3 app-btn-list"&gt;
	  &lt;button type="button" class="btn btn-primary active"&gt; &lt;i
	    class="ti ti-download"&gt;&lt;/i&gt; Primary&lt;/button&gt;
	  &lt;button type="button"
	   class="btn btn-secondary d-lg-inline-flex align-items-center active"&gt;
	   Secondary &lt;i class="ti ti-alert-triangle m-s-3"&gt;&lt;/i&gt;&lt;/button&gt;
	 &lt;/div&gt;
	 &lt;div class="col-md-6 col-lg-4 col-12 mb-3 app-btn-list"&gt;
	  &lt;button type="button" class="btn btn-outline-primary active"&gt; &lt;i
	    class="ti ti-download"&gt;&lt;/i&gt; Primary&lt;/button&gt;
	  &lt;button type="button"
	   class="btn btn-outline-secondary d-lg-inline-flex align-items-center active"&gt;
	   Secondary &lt;i class="ti ti-alert-triangle m-s-3"&gt;&lt;/i&gt;&lt;/button&gt;
	 &lt;/div&gt;
	 &lt;div class="col-md-6 col-lg-4 col-12 mb-3 app-btn-list"&gt;
	  &lt;button type="button" class="btn btn-light-primary active"&gt; &lt;i
	    class="ti ti-download"&gt;&lt;/i&gt; Primary&lt;/button&gt;
	  &lt;button type="button"
	   class="btn btn-light-secondary d-lg-inline-flex align-items-center active"&gt;
	   Secondary &lt;i class="ti ti-alert-triangle m-s-3"&gt;&lt;/i&gt;&lt;/button&gt;
	 &lt;/div&gt;
 &lt;/div&gt;
										</code>
									</pre>
                </div>
            </div>
            <!-- Active Buttons end -->

            <!-- Loading Buttons start -->
            <div class="col-12">
                <div class="card button-view">
                    <div class="card-header code-header">
                        <h5>Loading Buttons</h5>
                        <a data-bs-toggle="collapse" href="#loadingbtnexample" aria-expanded="false"
                           aria-controls="loadingbtnexample">
                            <i class="ti ti-code source" data-source="loadingbtn"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-12 app-btn-list mb-0">
                                <button class="btn btn-primary d-inline-flex-center" type="button">
													<span class="spinner-border spinner-border-sm me-2" role="status"
                                                          aria-hidden="true"></span>
                                    Loading...
                                </button>
                                <button class="btn btn-secondary d-inline-flex-center" type="button">
                                    Wait... <span class="spinner-border spinner-border-sm ms-2"
                                                  role="status" aria-hidden="true"></span>
                                </button>
                                <button class="btn btn-success icon-btn" type="button">
													<span class="spinner-border spinner-border-sm" role="status"
                                                          aria-hidden="true"></span>
                                    <span class="visually-hidden">Loading...</span>
                                </button>
                                <button class="btn btn-danger icon-btn" type="button">
													<span class="spinner-grow spinner-grow-sm" role="status"
                                                          aria-hidden="true"></span>
                                    <span class="visually-hidden">Loading...</span>
                                </button>
                            </div>
                            <div class="col-lg-6 col-12 app-btn-list">
                                <button class="btn btn-outline-primary d-inline-flex-center"
                                        type="button">
													<span class="spinner-border spinner-border-sm me-2" role="status"
                                                          aria-hidden="true"></span>
                                    Loading...
                                </button>
                                <button class="btn btn-outline-secondary d-inline-flex-center"
                                        type="button">
                                    Wait... <span class="spinner-border spinner-border-sm ms-2"
                                                  role="status" aria-hidden="true"></span>
                                </button>
                                <button class="btn btn-outline-success icon-btn" type="button">
													<span class="spinner-border spinner-border-sm" role="status"
                                                          aria-hidden="true"></span>
                                    <span class="visually-hidden">Loading...</span>
                                </button>
                                <button class="btn btn-outline-danger icon-btn" type="button">
													<span class="spinner-grow spinner-grow-sm" role="status"
                                                          aria-hidden="true"></span>
                                    <span class="visually-hidden">Loading...</span>
                                </button>
                            </div>
                            <div class="col-lg-6 col-12 app-btn-list">
                                <button class="btn btn-light-primary d-inline-flex-center"
                                        type="button">
													<span class="spinner-border spinner-border-sm me-2" role="status"
                                                          aria-hidden="true"></span>
                                    Loading...
                                </button>
                                <button class="btn btn-light-secondary d-inline-flex-center"
                                        type="button">
                                    Wait... <span class="spinner-border spinner-border-sm ms-2"
                                                  role="status" aria-hidden="true"></span>
                                </button>
                                <button class="btn btn-light-success icon-btn" type="button">
													<span class="spinner-border spinner-border-sm" role="status"
                                                          aria-hidden="true"></span>
                                    <span class="visually-hidden">Loading...</span>
                                </button>
                                <button class="btn btn-light-danger icon-btn" type="button">
													<span class="spinner-grow spinner-grow-sm" role="status"
                                                          aria-hidden="true"></span>
                                    <span class="visually-hidden">Loading...</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <pre class="loadingbtn collapse mt-3" id="loadingbtnexample">
										<code class="language-html">
 &lt;div class="row"&gt;
  &lt;div class="col-lg-6 col-12"&gt;
  &lt;button class="btn btn-primary d-inline-flex-center" type="button"&gt;
  &lt;span class="spinner-border spinner-border-sm me-2" role="status"
  aria-hidden="true"&gt;&lt;/span&gt;
  Loading...
  &lt;/button&gt;
  &lt;button class="btn btn-secondary d-inline-flex-center" type="button"&gt;
  Wait... &lt;span class="spinner-border spinner-border-sm ms-2"
  role="status" aria-hidden="true"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;button class="btn btn-success icon-btn" type="button"&gt;
  &lt;span class="spinner-border spinner-border-sm" role="status"
  aria-hidden="true"&gt;&lt;/span&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
  &lt;/button&gt;
  &lt;button class="btn btn-danger icon-btn" type="button"&gt;
  &lt;span class="spinner-grow spinner-grow-sm" role="status"
  aria-hidden="true"&gt;&lt;/span&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
  &lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="col-lg-6 col-12 mb-3"&gt;
  &lt;button class="btn btn-outline-primary d-inline-flex-center"
  type="button"&gt;
  &lt;span class="spinner-border spinner-border-sm me-2" role="status"
  aria-hidden="true"&gt;&lt;/span&gt;
  Loading...
  &lt;/button&gt;
  &lt;button class="btn btn-outline-secondary d-inline-flex-center"
  type="button"&gt;
  Wait... &lt;span class="spinner-border spinner-border-sm ms-2"
  role="status" aria-hidden="true"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;button class="btn btn-outline-success icon-btn" type="button"&gt;
  &lt;span class="spinner-border spinner-border-sm" role="status"
  aria-hidden="true"&gt;&lt;/span&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
  &lt;/button&gt;
  &lt;button class="btn btn-outline-danger icon-btn" type="button"&gt;
  &lt;span class="spinner-grow spinner-grow-sm" role="status"
  aria-hidden="true"&gt;&lt;/span&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
  &lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="col-lg-6 col-12 mb-3"&gt;
  &lt;button class="btn btn-light-primary d-inline-flex-center"
  type="button"&gt;
  &lt;span class="spinner-border spinner-border-sm me-2" role="status"
  aria-hidden="true"&gt;&lt;/span&gt;
  Loading...
  &lt;/button&gt;
  &lt;button class="btn btn-light-secondary d-inline-flex-center"
  type="button"&gt;
  Wait... &lt;span class="spinner-border spinner-border-sm ms-2"
  role="status" aria-hidden="true"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;button class="btn btn-light-success icon-btn" type="button"&gt;
  &lt;span class="spinner-border spinner-border-sm" role="status"
  aria-hidden="true"&gt;&lt;/span&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
  &lt;/button&gt;
  &lt;button class="btn btn-light-danger icon-btn" type="button"&gt;
  &lt;span class="spinner-grow spinner-grow-sm" role="status"
  aria-hidden="true"&gt;&lt;/span&gt;
  &lt;span class="visually-hidden"&gt;Loading...&lt;/span&gt;
  &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
										</code>
									</pre>
                </div>
            </div>
            <!-- Loading Buttons end -->
            <!-- Block Buttons start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Block Buttons</h5>
                        <a data-bs-toggle="collapse" href="#blockbtnexample" aria-expanded="false"
                           aria-controls="blockbtnexample">
                            <i class="ti ti-code source" data-source="blockbtn"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button class="btn btn-primary w-100" type="button">Button</button>
                                <button class="btn btn-secondary w-100" type="button">Button</button>
                            </div>
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button class="btn btn-outline-primary w-100"
                                        type="button">Button</button>
                                <button class="btn btn-outline-secondary w-100"
                                        type="button">Button</button>
                            </div>
                            <div class="col-md-6 col-lg-4 col-12 app-btn-list">
                                <button class="btn btn-light-primary w-100"
                                        type="button">Button</button>
                                <button class="btn btn-light-secondary w-100"
                                        type="button">Button</button>
                            </div>
                        </div>
                    </div>

                    <pre class="blockbtn collapse mt-3" id="blockbtnexample">
										<code class="language-html">
&lt;div class="row"&gt;
 &lt;div class="col-md-6 col-lg-4 col-12"&gt;
 &lt;div class="d-grid gap-2"&gt;
 &lt;button class="btn btn-primary w-100" type="button"&gt;Button&lt;/button&gt;
 &lt;button class="btn btn-secondary w-100"
 type="button"&gt;Button&lt;/button&gt;
 &lt;/div&gt;
 &lt;/div&gt;

 &lt;div class="col-md-6 col-lg-4 col-12"&gt;
 &lt;div class="d-grid gap-2"&gt;
 &lt;button class="btn btn-outline-primary w-100"
 type="button"&gt;Button&lt;/button&gt;
 &lt;button class="btn btn-outline-secondary w-100"
 type="button"&gt;Button&lt;/button&gt;
 &lt;/div&gt;
 &lt;/div&gt;

 &lt;div class="col-md-6 col-lg-4 col-12"&gt;
 &lt;div class="d-grid gap-2"&gt;
 &lt;button class="btn btn-light-primary w-100"
 type="button"&gt;Button&lt;/button&gt;
 &lt;button class="btn btn-light-secondary w-100"
 type="button"&gt;Button&lt;/button&gt;
 &lt;/div&gt;
 &lt;/div&gt;
  &lt;/div&gt;
										</code>
									</pre>
                </div>
            </div>
            <!-- Block Buttons end -->
            <!-- Button with sizes start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5> Button with sizes</h5>
                        <a data-bs-toggle="collapse" href="#buttonsizesexample" aria-expanded="false"
                           aria-controls="buttonsizesexample">
                            <i class="ti ti-code source" data-source="btnsize"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="app-btn-list">
                            <button type="button" class="btn btn-primary btn-xxl"> <i
                                    class="ti ti-download"></i> Primary</button>
                            <button type="button" class="btn btn-primary btn-xl"> <i
                                    class="ti ti-download"></i> Primary</button>
                            <button type="button" class="btn btn-secondary btn-lg"> Secondary <i
                                    class="ti ti-butterfly"></i></button>
                            <button type="button" class="btn btn-success"> <i class="ti ti-award"></i>
                                Success</button>
                            <button type="button" class="btn btn-danger btn-sm"> <i
                                    class="ti ti-power"></i> Danger</button>
                            <button type="button" class="btn btn-warning btn-xs"><i
                                    class="ti ti-alert-triangle"></i> Warning</button>
                        </div>
                    </div>

                    <pre class="btnsize collapse mt-3" id="buttonsizesexample">
										<code class="language-html">
&lt;h1 class="mb-3"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h1&gt;
&lt;h2 class="mb-3"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h2&gt;
&lt;h3 class="mb-3"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h3&gt;
&lt;h4 class="mb-3"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h4&gt;
&lt;h5 class="mb-3"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h5&gt;
&lt;h6 class="mb-3"&gt;Example heading &lt;span class="badge bg-secondary"&gt;New&lt;/span&gt;&lt;/h6&gt;
										</code>
									</pre>
                </div>
            </div>
            <!-- Button with sizes end -->
            <!-- Radius Button start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Radius Button </h5>
                        <a data-bs-toggle="collapse" href="#radiosbtnexample" aria-expanded="false"
                           aria-controls="radiosbtnexample">
                            <i class="ti ti-code source" data-source="radiosbtn"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="app-btn-list">
                            <button type="button" class="btn btn-primary b-r-0">Primary</button>
                            <button type="button" class="btn btn-secondary b-r-6">Secondary</button>
                            <button type="button" class="btn btn-success b-r-10">Danger</button>
                            <button type="button" class="btn btn-danger b-r-22">Danger</button>
                        </div>
                    </div>

                    <pre class="radiosbtn collapse mt-3" id="radiosbtnexample">
										<code class="language-html">
&lt;button type="button" class="btn btn-primary b-r-0"&gt;Primary&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary b-r-6"&gt;Secondary&lt;/button&gt;
&lt;button type="button" class="btn btn-success b-r-10"&gt;Danger&lt;/button&gt;
&lt;button type="button" class="btn btn-danger b-r-22"&gt;Danger&lt;/button&gt;
										</code>
									</pre>
                </div>
            </div>
            <!-- Radius Button end -->
            <!-- Button Group start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Button Group</h5>
                        <a data-bs-toggle="collapse" href="#buttongroupexample" aria-expanded="false"
                           aria-controls="buttongroupexample">
                            <i class="ti ti-code source" data-source="buttongroup"></i>

                        </a>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-secondary active"
                                       aria-current="page">Active link</a>
                                    <a href="#" class="btn btn-secondary">Link</a>
                                    <a href="#" class="btn btn-secondary">Link</a>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-outline-secondary active"
                                       aria-current="page">Active link</a>
                                    <a href="#" class="btn btn-outline-secondary">Link</a>
                                    <a href="#" class="btn btn-outline-secondary">Link</a>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-light-secondary active"
                                       aria-current="page">Active link</a>
                                    <a href="#" class="btn btn-light-secondary">Link</a>
                                    <a href="#" class="btn btn-light-secondary">Link</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <pre class="buttongroup collapse" id="buttongroupexample">
										<code class="language-html">
&lt;div class="row"&gt;
 &lt;div class="col-md-6 col-lg-4 col-12"&gt;
  &lt;div class="btn-group"&gt;
   &lt;a href="#" class="btn btn-secondary active"
    aria-current="page"&gt;Active link&lt;/a&gt;
   &lt;a href="#" class="btn btn-secondary"&gt;Link&lt;/a&gt;
   &lt;a href="#" class="btn btn-secondary"&gt;Link&lt;/a&gt;
  &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-md-6 col-lg-4 col-12"&gt;
  &lt;div class="btn-group"&gt;
   &lt;a href="#" class="btn btn-outline-secondary active"
    aria-current="page"&gt;Active link&lt;/a&gt;
   &lt;a href="#" class="btn btn-outline-secondary"&gt;Link&lt;/a&gt;
   &lt;a href="#" class="btn btn-outline-secondary"&gt;Link&lt;/a&gt;
  &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="col-md-6 col-lg-4 col-12"&gt;
  &lt;div class="btn-group"&gt;
   &lt;a href="#" class="btn btn-light-secondary active"
    aria-current="page"&gt;Active link&lt;/a&gt;
   &lt;a href="#" class="btn btn-light-secondary"&gt;Link&lt;/a&gt;
   &lt;a href="#" class="btn btn-light-secondary"&gt;Link&lt;/a&gt;
  &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
										</code>
									</pre>
                </div>
            </div>
            <!-- Button Group end -->

            <!-- sizes start -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Sizes</h5>
                        <a data-bs-toggle="collapse" href="#sizesexample" aria-expanded="false"
                           aria-controls="sizesexample">
                            <i class="ti ti-code source" data-source="sizegroup"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="btn-group btn-group-lg" role="group"
                                     aria-label="Large button group">
                                    <button type="button"
                                            class="btn btn-outline-secondary">Left</button>
                                    <button type="button"
                                            class="btn btn-outline-secondary">Middle</button>
                                    <button type="button"
                                            class="btn btn-outline-secondary">Right</button>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="btn-group" role="group" aria-label="Default button group">
                                    <button type="button"
                                            class="btn btn-outline-secondary">Left</button>
                                    <button type="button"
                                            class="btn btn-outline-secondary">Middle</button>
                                    <button type="button"
                                            class="btn btn-outline-secondary">Right</button>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="btn-group btn-group-sm" role="group"
                                     aria-label="Small button group">
                                    <button type="button"
                                            class="btn btn-outline-secondary">Left</button>
                                    <button type="button"
                                            class="btn btn-outline-secondary">Middle</button>
                                    <button type="button"
                                            class="btn btn-outline-secondary">Right</button>
                                </div>
                            </div>
                        </div>


                    </div>

                    <pre class="sizegroup collapse" id="sizesexample">
										<code class="language-html">
&lt;div class="row"&gt;
 &lt;div class="col-lg-4 col-12 mb-3"&gt;
 &lt;div class="btn-group btn-group-lg" role="group"
		 aria-label="Large button group"&gt;
		 &lt;button type="button"
		 class="btn btn-outline-secondary"&gt;Left&lt;/button&gt;
		 &lt;button type="button"
		 class="btn btn-outline-secondary"&gt;Middle&lt;/button&gt;
		 &lt;button type="button"
		 class="btn btn-outline-secondary"&gt;Right&lt;/button&gt;
		 &lt;/div&gt;
		 &lt;/div&gt;

		 &lt;div class="col-lg-4 col-12 mb-3"&gt;
		 &lt;div class="btn-group" role="group" aria-label="Default button group"&gt;
		 &lt;button type="button"
		 class="btn btn-outline-secondary"&gt;Left&lt;/button&gt;
		 &lt;button type="button"
		 class="btn btn-outline-secondary"&gt;Middle&lt;/button&gt;
		 &lt;button type="button"
		 class="btn btn-outline-secondary"&gt;Right&lt;/button&gt;
		 &lt;/div&gt;
		 &lt;/div&gt;

		 &lt;div class="col-lg-4 col-12 mb-3"&gt;
		 &lt;div class="btn-group btn-group-sm" role="group"
		 aria-label="Small button group"&gt;
		 &lt;button type="button"
		 class="btn btn-outline-secondary"&gt;Left&lt;/button&gt;
		 &lt;button type="button"
		 class="btn btn-outline-secondary"&gt;Middle&lt;/button&gt;
		 &lt;button type="button"
		 class="btn btn-outline-secondary"&gt;Right&lt;/button&gt;
	 &lt;/div&gt;
	&lt;/div&gt;
	&lt;/div&gt;
										</code>
									</pre>
                </div>
            </div>
            <!-- sizes end -->

            <!-- Nesting start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Nesting</h5>
                        <a data-bs-toggle="collapse" href="#nestingexample" aria-expanded="false"
                           aria-controls="nestingexample">
                            <i class="ti ti-code source" data-source="nesting"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="row btn-responsive">
                            <div class="col-12">
                                <div class="btn-group" role="group"
                                     aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-secondary">1</button>
                                    <button type="button" class="btn btn-secondary">2</button>

                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Dropdown link</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Dropdown link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="btn-group" role="group"
                                     aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-outline-secondary">1</button>
                                    <button type="button" class="btn btn-outline-secondary">2</button>

                                    <div class="btn-group" role="group">
                                        <button type="button"
                                                class="btn btn-outline-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Dropdown link</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Dropdown link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="btn-group" role="group"
                                     aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-light-secondary">1</button>
                                    <button type="button" class="btn btn-light-secondary">2</button>

                                    <div class="btn-group" role="group">
                                        <button type="button"
                                                class="btn btn-light-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Dropdown link</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Dropdown link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <pre class="nesting collapse mt-3" id="nestingexample">
										<code class="language-html">
&lt;div class="row"&gt;
 &lt;div class="col-md-6 col-lg-4 col-12"&gt;
  &lt;div class="btn-group" role="group"
   aria-label="Button group with nested dropdown"&gt;
   &lt;button type="button" class="btn btn-secondary"&gt;1&lt;/button&gt;
   &lt;button type="button" class="btn btn-secondary"&gt;2&lt;/button&gt;

   &lt;div class="btn-group" role="group"&gt;
    &lt;button type="button" class="btn btn-secondary dropdown-toggle"
     data-bs-toggle="dropdown" aria-expanded="false"&gt;
     Dropdown
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
     &lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
     &lt;/li&gt;
    &lt;/ul&gt;
   &lt;/div&gt;
  &lt;/div&gt;
 &lt;/div&gt;

 &lt;div class="col-md-6 col-lg-4 col-12"&gt;
  &lt;div class="btn-group" role="group"
   aria-label="Button group with nested dropdown"&gt;
   &lt;button type="button" class="btn btn-outline-secondary"&gt;1&lt;/button&gt;
   &lt;button type="button" class="btn btn-outline-secondary"&gt;2&lt;/button&gt;

   &lt;div class="btn-group" role="group"&gt;
    &lt;button type="button"
     class="btn btn-outline-secondary dropdown-toggle"
     data-bs-toggle="dropdown" aria-expanded="false"&gt;
     Dropdown
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
     &lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
     &lt;/li&gt;
    &lt;/ul&gt;
   &lt;/div&gt;
  &lt;/div&gt;
 &lt;/div&gt;

 &lt;div class="col-md-6 col-lg-4 col-12"&gt;
  &lt;div class="btn-group" role="group"
   aria-label="Button group with nested dropdown"&gt;
   &lt;button type="button" class="btn btn-light-secondary"&gt;1&lt;/button&gt;
   &lt;button type="button" class="btn btn-light-secondary"&gt;2&lt;/button&gt;

   &lt;div class="btn-group" role="group"&gt;
    &lt;button type="button"
     class="btn btn-light-secondary dropdown-toggle"
     data-bs-toggle="dropdown" aria-expanded="false"&gt;
     Dropdown
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
     &lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
     &lt;/li&gt;
    &lt;/ul&gt;
   &lt;/div&gt;
  &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
										</code>
									</pre>
                </div>
            </div>
            <!-- Nesting end -->
            <!-- Checkbox radio start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Checkbox Radio</h5>
                        <a data-bs-toggle="collapse" href="#cheakradioexample" aria-expanded="false"
                           aria-controls="cheakradioexample">
                            <i class="ti ti-code source" data-source="radiusbadge"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="row btn-responsive">
                            <div class="col-12">
                                <div class="btn-group" role="group"
                                     aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btncheck1">
                                    <label class="btn btn-outline-secondary" for="btncheck1">Checkbox
                                        1</label>
                                    <input type="checkbox" class="btn-check" id="btncheck2">
                                    <label class="btn btn-outline-secondary" for="btncheck2">Checkbox
                                        2</label>
                                    <input type="checkbox" class="btn-check" id="btncheck3">
                                    <label class="btn btn-outline-secondary" for="btncheck3">Checkbox
                                        3</label>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="btn-group" role="group"
                                     aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                           checked>
                                    <label class="btn btn-outline-secondary" for="btnradio1">Radio
                                        1</label>
                                    <input type="radio" class="btn-check" name="btnradio"
                                           id="btnradio2">
                                    <label class="btn btn-outline-secondary" for="btnradio2">Radio
                                        2</label>
                                    <input type="radio" class="btn-check" name="btnradio"
                                           id="btnradio3">
                                    <label class="btn btn-outline-secondary" for="btnradio3">Radio
                                        3</label>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="btn-toolbar" role="toolbar"
                                     aria-label="Toolbar with button groups">
                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-secondary">1</button>
                                        <button type="button" class="btn btn-secondary">2</button>
                                        <button type="button" class="btn btn-secondary">3</button>
                                        <button type="button" class="btn btn-secondary">4</button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-secondary">8</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <pre class="radiusbadge collapse" id="cheakradioexample">
											<code class="language-html">
&lt;div class="row"&gt;
	 &lt;div class="col-lg-4 col-12 mb-3"&gt;
	  &lt;div class="btn-group" role="group"
	   aria-label="Basic checkbox toggle button group"&gt;
	   &lt;input type="checkbox" class="btn-check" id="btncheck1"&gt;
	   &lt;label class="btn btn-outline-secondary" for="btncheck1"&gt;Checkbox
	    1&lt;/label&gt;
	   &lt;input type="checkbox" class="btn-check" id="btncheck2"&gt;
	   &lt;label class="btn btn-outline-secondary" for="btncheck2"&gt;Checkbox
	    2&lt;/label&gt;
	   &lt;input type="checkbox" class="btn-check" id="btncheck3"&gt;
	   &lt;label class="btn btn-outline-secondary" for="btncheck3"&gt;Checkbox
	    3&lt;/label&gt;
	  &lt;/div&gt;
	 &lt;/div&gt;

	 &lt;div class="col-lg-4 col-12 mb-3"&gt;
	  &lt;div class="btn-group" role="group"
	   aria-label="Basic radio toggle button group"&gt;
	   &lt;input type="radio" class="btn-check" name="btnradio" id="btnradio1"
	    checked&gt;
	   &lt;label class="btn btn-outline-secondary" for="btnradio1"&gt;Radio
	    1&lt;/label&gt;
	   &lt;input type="radio" class="btn-check" name="btnradio"
	    id="btnradio2"&gt;
	   &lt;label class="btn btn-outline-secondary" for="btnradio2"&gt;Radio
	    2&lt;/label&gt;
	   &lt;input type="radio" class="btn-check" name="btnradio"
	    id="btnradio3"&gt;
	   &lt;label class="btn btn-outline-secondary" for="btnradio3"&gt;Radio
	    3&lt;/label&gt;
	  &lt;/div&gt;
	 &lt;/div&gt;

	 &lt;div class="col-lg-4 col-12 mb-3"&gt;
	  &lt;div class="btn-toolbar" role="toolbar"
	   aria-label="Toolbar with button groups"&gt;
	   &lt;div class="btn-group me-2" role="group" aria-label="First group"&gt;
	    &lt;button type="button" class="btn btn-secondary"&gt;1&lt;/button&gt;
	    &lt;button type="button" class="btn btn-secondary"&gt;2&lt;/button&gt;
	    &lt;button type="button" class="btn btn-secondary"&gt;3&lt;/button&gt;
	    &lt;button type="button" class="btn btn-secondary"&gt;4&lt;/button&gt;
	   &lt;/div&gt;
	   &lt;div class="btn-group" role="group" aria-label="Third group"&gt;
	    &lt;button type="button" class="btn btn-secondary"&gt;8&lt;/button&gt;
	   &lt;/div&gt;
	  &lt;/div&gt;
	 &lt;/div&gt;
&lt;/div&gt;
											</code>
										</pre>
                    </div>


                </div>
            </div>
            <!-- Checkbox radio end -->
            <!-- Button Vertical start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Button Vertical</h5>
                        <a data-bs-toggle="collapse" href="#buttonverticalexample" aria-expanded="false"
                           aria-controls="buttonverticalexample">
                            <i class="ti ti-code source" data-source="btnvertical"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="row btn-responsive">
                            <div class="col-auto m-2">
                                <div class="btn-group-vertical" role="group"
                                     aria-label="Vertical radio toggle button group">
                                    <input type="radio" class="btn-check" name="vbtn-radio"
                                           id="vbtn-radio1" checked>
                                    <label class="btn btn-outline-secondary" for="vbtn-radio1">Radio
                                        1</label>
                                    <input type="radio" class="btn-check" name="vbtn-radio"
                                           id="vbtn-radio2">
                                    <label class="btn btn-outline-secondary" for="vbtn-radio2">Radio
                                        2</label>
                                    <input type="radio" class="btn-check" name="vbtn-radio"
                                           id="vbtn-radio3">
                                    <label class="btn btn-outline-secondary" for="vbtn-radio3">Radio
                                        3</label>
                                </div>
                            </div>
                            <div class="col-auto m-2">
                                <div class="btn-group-vertical" role="group"
                                     aria-label="Vertical button group">
                                    <button type="button" class="btn btn-secondary">Button</button>
                                    <button type="button" class="btn btn-secondary">Button</button>
                                    <button type="button" class="btn btn-secondary">Button</button>
                                </div>
                                <div class="btn-group-vertical ms-2" role="group"
                                     aria-label="Vertical button group">
                                    <button type="button" class="btn btn-secondary">Button</button>
                                    <button type="button" class="btn btn-secondary">Button</button>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Dropdown
                                                    link</a></li>
                                            <li><a class="dropdown-item" href="#">Dropdown
                                                    link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto m-2">
                                <div class="btn-group-vertical" role="group"
                                     aria-label="Vertical button group">
                                    <button type="button"
                                            class="btn btn-outline-secondary">Button</button>
                                    <button type="button"
                                            class="btn btn-outline-secondary">Button</button>
                                    <button type="button"
                                            class="btn btn-outline-secondary">Button</button>
                                </div>


                                <div class="btn-group-vertical ms-2" role="group"
                                     aria-label="Vertical button group">
                                    <button type="button"
                                            class="btn btn-outline-secondary">Button</button>
                                    <button type="button"
                                            class="btn btn-outline-secondary">Button</button>
                                    <div class="btn-group" role="group">
                                        <button type="button"
                                                class="btn btn-outline-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Dropdown
                                                    link</a></li>
                                            <li><a class="dropdown-item" href="#">Dropdown
                                                    link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto m-2">
                                <div class="btn-group-vertical" role="group"
                                     aria-label="Vertical button group">
                                    <button type="button"
                                            class="btn btn-light-secondary">Button</button>
                                    <button type="button"
                                            class="btn btn-light-secondary">Button</button>
                                    <button type="button"
                                            class="btn btn-light-secondary">Button</button>
                                </div>


                                <div class="btn-group-vertical ms-2" role="group"
                                     aria-label="Vertical button group">
                                    <button type="button"
                                            class="btn btn-light-secondary">Button</button>
                                    <button type="button"
                                            class="btn btn-light-secondary">Button</button>
                                    <div class="btn-group" role="group">
                                        <button type="button"
                                                class="btn btn-light-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Dropdown
                                                    link</a></li>
                                            <li><a class="dropdown-item" href="#">Dropdown
                                                    link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <pre class="btnvertical collapse mt-3" id="buttonverticalexample">
										<code class="language-html">
&lt;div class="row"&gt;
		 &lt;div class="col-lg-4 col-12"&gt;
		 &lt;div class="btn-group-vertical mb-3" role="group"
		  aria-label="Vertical button group"&gt;
		  &lt;button type="button" class="btn btn-secondary"&gt;Button&lt;/button&gt;
		  &lt;button type="button" class="btn btn-secondary"&gt;Button&lt;/button&gt;
		  &lt;button type="button" class="btn btn-secondary"&gt;Button&lt;/button&gt;
		 &lt;/div&gt;

		 &lt;div class="btn-group-vertical ms-2 mb-3" role="group"
		  aria-label="Vertical button group"&gt;
		  &lt;button type="button" class="btn btn-secondary"&gt;Button&lt;/button&gt;
		  &lt;button type="button" class="btn btn-secondary"&gt;Button&lt;/button&gt;
		  &lt;div class="btn-group" role="group"&gt;
		  &lt;button type="button" class="btn btn-secondary dropdown-toggle"
		   data-bs-toggle="dropdown" aria-expanded="false"&gt;
		   Dropdown
		  &lt;/button&gt;
		  &lt;ul class="dropdown-menu"&gt;
		   &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown
		    link&lt;/a&gt;&lt;/li&gt;
		   &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown
		    link&lt;/a&gt;&lt;/li&gt;
		  &lt;/ul&gt;
		  &lt;/div&gt;
		 &lt;/div&gt;

		 &lt;div class="btn-group-vertical ms-sm-2 mb-3" role="group"
		  aria-label="Vertical radio toggle button group"&gt;
		  &lt;input type="radio" class="btn-check" name="vbtn-radio"
		  id="vbtn-radio1" checked&gt;
		  &lt;label class="btn btn-outline-secondary" for="vbtn-radio1"&gt;Radio
		  1&lt;/label&gt;
		  &lt;input type="radio" class="btn-check" name="vbtn-radio"
		  id="vbtn-radio2"&gt;
		  &lt;label class="btn btn-outline-secondary" for="vbtn-radio2"&gt;Radio
		  2&lt;/label&gt;
		  &lt;input type="radio" class="btn-check" name="vbtn-radio"
		  id="vbtn-radio3"&gt;
		  &lt;label class="btn btn-outline-secondary" for="vbtn-radio3"&gt;Radio
		  3&lt;/label&gt;
		 &lt;/div&gt;

		 &lt;/div&gt;
		 &lt;div class="col-lg-4 col-12 mb-3"&gt;
		 &lt;div class="btn-group-vertical" role="group"
		  aria-label="Vertical button group"&gt;
		  &lt;button type="button"
		  class="btn btn-outline-secondary"&gt;Button&lt;/button&gt;
		  &lt;button type="button"
		  class="btn btn-outline-secondary"&gt;Button&lt;/button&gt;
		  &lt;button type="button"
		  class="btn btn-outline-secondary"&gt;Button&lt;/button&gt;
		 &lt;/div&gt;

		 &lt;div class="btn-group-vertical ms-2" role="group"
		  aria-label="Vertical button group"&gt;
		  &lt;button type="button"
		  class="btn btn-outline-secondary"&gt;Button&lt;/button&gt;
		  &lt;button type="button"
		  class="btn btn-outline-secondary"&gt;Button&lt;/button&gt;
		  &lt;div class="btn-group" role="group"&gt;
		  &lt;button type="button"
		   class="btn btn-outline-secondary dropdown-toggle"
		   data-bs-toggle="dropdown" aria-expanded="false"&gt;
		   Dropdown
		  &lt;/button&gt;
		  &lt;ul class="dropdown-menu"&gt;
		   &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown
		    link&lt;/a&gt;&lt;/li&gt;
		   &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown
		    link&lt;/a&gt;&lt;/li&gt;
		  &lt;/ul&gt;
		  &lt;/div&gt;
		 &lt;/div&gt;
		 &lt;/div&gt;
		 &lt;div class="col-lg-4 col-12 mb-3"&gt;
		 &lt;div class="btn-group-vertical" role="group"
		  aria-label="Vertical button group"&gt;
		  &lt;button type="button"
		  class="btn btn-light-secondary"&gt;Button&lt;/button&gt;
		  &lt;button type="button"
		  class="btn btn-light-secondary"&gt;Button&lt;/button&gt;
		  &lt;button type="button"
		  class="btn btn-light-secondary"&gt;Button&lt;/button&gt;
		 &lt;/div&gt;

		 &lt;div class="btn-group-vertical ms-2" role="group"
		  aria-label="Vertical button group"&gt;
		  &lt;button type="button"
		  class="btn btn-light-secondary"&gt;Button&lt;/button&gt;
		  &lt;button type="button"
		  class="btn btn-light-secondary"&gt;Button&lt;/button&gt;
		  &lt;div class="btn-group" role="group"&gt;
		  &lt;button type="button"
		   class="btn btn-light-secondary dropdown-toggle"
		   data-bs-toggle="dropdown" aria-expanded="false"&gt;
		   Dropdown
		  &lt;/button&gt;
		  &lt;ul class="dropdown-menu"&gt;
		   &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown
		    link&lt;/a&gt;&lt;/li&gt;
		   &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dropdown
		    link&lt;/a&gt;&lt;/li&gt;
		  &lt;/ul&gt;
		  &lt;/div&gt;
		 &lt;/div&gt;
		 &lt;/div&gt;
&lt;/div&gt;
										</code>
									</pre>
                </div>
            </div>
            <!-- Button Vertical end -->
        </div>
        <!-- Button end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

@endsection
