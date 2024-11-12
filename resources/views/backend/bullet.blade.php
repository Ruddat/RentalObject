@extends('layout.master')
@section('title', 'Bullet')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Bullet</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
									<span>
									  <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
									</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Bullet</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <!--list-item start -->
        <div class="row list-item bullet-item">
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Diamond Bullet</h5>
                        <a data-bs-toggle="collapse" href="#dimondbulletExample"
                           aria-expanded="false" aria-controls="dimondbulletExample">
                            <i class="ti ti-code source" data-source="dimondbullet"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="diamond diamond-bullet-primary">Primary Bullet</li>
                            <li class="diamond diamond-bullet-secondary">secondary Bullet</li>
                            <li class="diamond diamond-bullet-success">Success Bullet</li>
                            <li class="diamond diamond-bullet-danger">Danger Bullet</li>
                            <li class="diamond diamond-bullet-warning">Warning Bullet</li>
                            <li class="diamond diamond-bullet-info">Info Bullet</li>
                            <li class="diamond diamond-bullet-light">Light Bullet</li>
                            <li class="diamond diamond-bullet-dark">Dark Bullet</li>

                        </ul>

                        <pre class="dimondbullet collapse mt-3" id="dimondbulletExample">
                                            <code class="language-html">
&lt;ul&gt;
&lt;li class="diamond diamond-bullet-primary"&gt;Primary Bullet&lt;/li&gt;
&lt;li class="diamond diamond-bullet-secondary"&gt;secondary Bullet&lt;/li&gt;
&lt;li class="diamond diamond-bullet-success"&gt;Success Bullet&lt;/li&gt;
&lt;li class="diamond diamond-bullet-danger"&gt;Danger Bullet&lt;/li&gt;
&lt;li class="diamond diamond-bullet-warning"&gt;Warning Bullet&lt;/li&gt;
&lt;li class="diamond diamond-bullet-info"&gt;Info Bullet&lt;/li&gt;
&lt;li class="diamond diamond-bullet-light"&gt;Light Bullet&lt;/li&gt;
&lt;li class="diamond diamond-bullet-dark"&gt;Dark Bullet&lt;/li&gt;
&lt;/ul&gt;

                                            </code>
                                        </pre>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Heart Bullet</h5>
                        <a data-bs-toggle="collapse" href="#heartbulletExample"
                           aria-expanded="false" aria-controls="heartbulletExample">
                            <i class="ti ti-code source" data-source="heartbullet"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="heart heart-bullet-primary">Primary Bullet</li>
                            <li class="heart heart-bullet-secondary">secondary Bullet</li>
                            <li class="heart heart-bullet-success">Success Bullet</li>
                            <li class="heart heart-bullet-danger">Danger Bullet</li>
                            <li class="heart heart-bullet-warning">Warning Bullet</li>
                            <li class="heart heart-bullet-info">Info Bullet</li>
                            <li class="heart heart-bullet-light">Light Bullet</li>
                            <li class="heart heart-bullet-dark">Dark Bullet</li>

                        </ul>
                        <pre class="heartbullet collapse mt-3" id="heartbulletExample">
                                            <code class="language-html">
 &lt;ul&gt;
  &lt;li class="heart heart-bullet-primary"&gt;Primary Bullet&lt;/li&gt;
  &lt;li class="heart heart-bullet-secondary"&gt;secondary Bullet&lt;/li&gt;
  &lt;li class="heart heart-bullet-success"&gt;Success Bullet&lt;/li&gt;
  &lt;li class="heart heart-bullet-danger"&gt;Danger Bullet&lt;/li&gt;
  &lt;li class="heart heart-bullet-warning"&gt;Warning Bullet&lt;/li&gt;
  &lt;li class="heart heart-bullet-info"&gt;Info Bullet&lt;/li&gt;
  &lt;li class="heart heart-bullet-light"&gt;Light Bullet&lt;/li&gt;
  &lt;li class="heart heart-bullet-dark"&gt;Dark Bullet&lt;/li&gt;
&lt;/ul&gt;
                                            </code>
                                        </pre>

                    </div>


                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Burst Bullet</h5>
                        <a data-bs-toggle="collapse" href="#burstbulletExample"
                           aria-expanded="false" aria-controls="burstbulletExample">
                            <i class="ti ti-code source" data-source="burstbullet"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="burst burst-bullet-primary ">Primary Bullet</li>
                            <li class="burst burst-bullet-secondary">secondary Bullet</li>
                            <li class="burst burst-bullet-success">Success Bullet</li>
                            <li class="burst burst-bullet-danger">Danger Bullet</li>
                            <li class="burst burst-bullet-warning">Warning Bullet</li>
                            <li class="burst burst-bullet-info">Info Bullet</li>
                            <li class="burst burst-bullet-light">Light Bullet</li>
                            <li class="burst burst-bullet-dark">Dark Bullet</li>

                        </ul>
                        <pre class="burstbullet collapse mt-3" id="burstbulletExample">
                                            <code class="language-html">
&lt;ul&gt;
&lt;li class="burst burst-bullet-primary "&gt;Primary Bullet&lt;/li&gt;
&lt;li class="burst burst-bullet-secondary"&gt;secondary Bullet&lt;/li&gt;
&lt;li class="burst burst-bullet-success"&gt;Success Bullet&lt;/li&gt;
&lt;li class="burst burst-bullet-danger"&gt;Danger Bullet&lt;/li&gt;
&lt;li class="burst burst-bullet-warning"&gt;Warning Bullet&lt;/li&gt;
&lt;li class="burst burst-bullet-info"&gt;Info Bullet&lt;/li&gt;
&lt;li class="burst burst-bullet-light"&gt;Light Bullet&lt;/li&gt;
&lt;li class="burst burst-bullet-dark"&gt;Dark Bullet&lt;/li&gt;
&lt;/ul&gt;
                                            </code>
                                        </pre>



                    </div>


                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Star-Bullet</h5>
                        <a data-bs-toggle="collapse" href="#starbulletExample"
                           aria-expanded="false" aria-controls="starbulletExample">
                            <i class="ti ti-code source" data-source="starbullet"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="star mb-3"><i class="ti ti-north-star text-primary me-2"></i>Primary Bullet</li>
                            <li class="star mb-3 "><i class="ti ti-north-star text-secondary me-2"></i>secondary Bullet</li>
                            <li class="star mb-3 "><i class="ti ti-north-star text-success me-2"></i>Success Bullet</li>
                            <li class="star mb-3 "><i class="ti ti-north-star text-danger me-2"></i>Danger Bullet</li>
                            <li class="star mb-3 "><i class="ti ti-north-star text-warning me-2"></i>Warning Bullet</li>
                            <li class="star mb-3"><i class="ti ti-north-star text-info me-2"></i>Info Bullet</li>
                            <li class="star mb-3 "><i class="ti ti-north-star text-light  me-2"></i>Light Bullet</li>
                            <li class="star"><i class="ti ti-north-star text-dark me-2"></i>Dark Bullet</li>

                        </ul>
                        <pre class="starbullet collapse mt-3" id="starbulletExample">
                                            <code class="language-html">
&lt;ul&gt;
&lt;li class="star mb-3"&gt;&lt;i class="ti ti-north-star text-primary me-2"&gt;&lt;/i&gt;Primary Bullet&lt;/li&gt;
&lt;li class="star mb-3 "&gt;&lt;i class="ti ti-north-star text-secondary me-2"&gt;&lt;/i&gt;secondary Bullet&lt;/li&gt;
&lt;li class="star mb-3 "&gt;&lt;i class="ti ti-north-star text-success me-2"&gt;&lt;/i&gt;Success Bullet&lt;/li&gt;
&lt;li class="star mb-3 "&gt;&lt;i class="ti ti-north-star text-danger me-2"&gt;&lt;/i&gt;Danger Bullet&lt;/li&gt;
&lt;li class="star mb-3 "&gt;&lt;i class="ti ti-north-star text-warning me-2"&gt;&lt;/i&gt;Warning Bullet&lt;/li&gt;
&lt;li class="star mb-3"&gt;&lt;i class="ti ti-north-star text-info me-2"&gt;&lt;/i&gt;Info Bullet&lt;/li&gt;
&lt;li class="star mb-3 "&gt;&lt;i class="ti ti-north-star text-light me-2"&gt;&lt;/i&gt;Light Bullet&lt;/li&gt;
&lt;li class="star"&gt;&lt;i class="ti ti-north-star text-dark me-2"&gt;&lt;/i&gt;Dark Bullet&lt;/li&gt;
&lt;/ul&gt;
                                            </code>
                                        </pre>

                    </div>


                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Right Arrow Bullet</h5>
                        <a data-bs-toggle="collapse" href="#rightarrowbulletExample"
                           aria-expanded="false" aria-controls="rightarrowbulletExample">
                            <i class="ti ti-code source" data-source="rightarrowbullet"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="right-arrow mb-3"><i class="ti ti-arrow-big-right-line-filled text-primary me-2"></i>Primary Bullet</li>
                            <li class="right-arrow mb-3 "><i class="ti ti-arrow-big-right-line-filled text-secondary me-2 "></i>secondary Bullet</li>
                            <li class="right-arrow mb-3 "><i class="ti ti-arrow-big-right-line-filled text-success me-2"></i>Success Bullet</li>
                            <li class="right-arrow mb-3 "><i class="ti ti-arrow-big-right-line-filled text-danger me-2"></i>Danger Bullet</li>
                            <li class="right-arrow mb-3 "><i class="ti ti-arrow-big-right-line-filled text-warning me-2"></i>Warning Bullet</li>
                            <li class="right-arrow mb-3"><i class="ti ti-arrow-big-right-line-filled text-info me-2"></i>Info Bullet</li>
                            <li class="right-arrow mb-3 "><i class="ti ti-arrow-big-right-line-filled text-light me-2"></i>Light Bullet</li>
                            <li class="right-arrow"><i class="ti ti-arrow-big-right-line-filled me-2 text-dark"></i>Dark Bullet</li>

                        </ul>
                        <pre class="rightarrowbullet collapse mt-3" id="rightarrowbulletExample">
                                            <code class="language-html">
&lt;ul&gt;
&lt;li class="right-arrow mb-3"&gt;&lt;i class="ti ti-arrow-big-right-line-filled text-primary me-2"&gt;&lt;/i&gt;Primary Bullet&lt;/li&gt;
&lt;li class="right-arrow mb-3 "&gt;&lt;i class="ti ti-arrow-big-right-line-filled text-secondary me-2 "&gt;&lt;/i&gt;secondary Bullet&lt;/li&gt;
&lt;li class="right-arrow mb-3 "&gt;&lt;i class="ti ti-arrow-big-right-line-filled text-success me-2"&gt;&lt;/i&gt;Success Bullet&lt;/li&gt;
&lt;li class="right-arrow mb-3 "&gt;&lt;i class="ti ti-arrow-big-right-line-filled text-danger me-2"&gt;&lt;/i&gt;Danger Bullet&lt;/li&gt;
&lt;li class="right-arrow mb-3 "&gt;&lt;i class="ti ti-arrow-big-right-line-filled text-warning me-2"&gt;&lt;/i&gt;Warning Bullet&lt;/li&gt;
&lt;li class="right-arrow mb-3"&gt;&lt;i class="ti ti-arrow-big-right-line-filled text-info me-2"&gt;&lt;/i&gt;Info Bullet&lt;/li&gt;
&lt;li class="right-arrow mb-3 "&gt;&lt;i class="ti ti-arrow-big-right-line-filled text-light me-2"&gt;&lt;/i&gt;Light Bullet&lt;/li&gt;
&lt;li class="right-arrow"&gt;&lt;i class="ti ti-arrow-big-right-line-filled me-2 text-dark"&gt;&lt;/i&gt;Dark Bullet&lt;/li&gt;
&lt;/ul&gt;
                                            </code>
                                        </pre>

                    </div>


                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Line Bullet</h5>
                        <a data-bs-toggle="collapse" href="#linebulletExample"
                           aria-expanded="false" aria-controls="linebulletExample">
                            <i class="ti ti-code source" data-source="linebullet"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="line line-bullet-primary">Primary Bullet</li>
                            <li class="line line-bullet-secondary">secondary Bullet</li>
                            <li class="line line-bullet-success">Success Bullet</li>
                            <li class="line line-bullet-danger">Danger Bullet</li>
                            <li class="line line-bullet-warning">Warning Bullet</li>
                            <li class="line line-bullet-info">Info Bullet</li>
                            <li class="line line-bullet-light">Light Bullet</li>
                            <li class="line line-bullet-dark">Dark Bullet</li>

                        </ul>

                        <pre class="linebulletbullet collapse mt-3" id="linebulletExample">
                                            <code class="language-html">
&lt;ul&gt;
&lt;li class="line line-bullet-primary"&gt;Primary Bullet&lt;/li&gt;
&lt;li class="line line-bullet-secondary"&gt;secondary Bullet&lt;/li&gt;
&lt;li class="line line-bullet-success"&gt;Success Bullet&lt;/li&gt;
&lt;li class="line line-bullet-danger"&gt;Danger Bullet&lt;/li&gt;
&lt;li class="line line-bullet-warning"&gt;Warning Bullet&lt;/li&gt;
&lt;li class="line line-bullet-info"&gt;Info Bullet&lt;/li&gt;
&lt;li class="line line-bullet-light"&gt;Light Bullet&lt;/li&gt;
&lt;li class="line line-bullet-dark"&gt;Dark Bullet&lt;/li&gt;
&lt;/ul&gt;
                                            </code>
                                        </pre>
                    </div>


                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Arrow Bullet</h5>
                        <a data-bs-toggle="collapse" href="#arrowbulletExample"
                           aria-expanded="false" aria-controls="arrowbulletExample">
                            <i class="ti ti-code source" data-source="arrowbullet"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="arrow arrow-bullet-primary">Primary Bullet</li>
                            <li class="arrow arrow-bullet-secondary">secondary Bullet</li>
                            <li class="arrow arrow-bullet-success">Success Bullet</li>
                            <li class="arrow arrow-bullet-danger">Danger Bullet</li>
                            <li class="arrow arrow-bullet-warning">Warning Bullet</li>
                            <li class="arrow arrow-bullet-info">Info Bullet</li>
                            <li class="arrow arrow-bullet-light">Light Bullet</li>
                            <li class="arrow arrow-bullet-dark">Dark Bullet</li>

                        </ul>
                        <pre class="arrowbullet collapse mt-3" id="arrowbulletExample">
                                            <code class="language-html">
&lt;ul&gt;
&lt;li class="arrow arrow-bullet-primary"&gt;Primary Bullet&lt;/li&gt;
&lt;li class="arrow arrow-bullet-secondary"&gt;secondary Bullet&lt;/li&gt;
&lt;li class="arrow arrow-bullet-success"&gt;Success Bullet&lt;/li&gt;
&lt;li class="arrow arrow-bullet-danger"&gt;Danger Bullet&lt;/li&gt;
&lt;li class="arrow arrow-bullet-warning"&gt;Warning Bullet&lt;/li&gt;
&lt;li class="arrow arrow-bullet-info"&gt;Info Bullet&lt;/li&gt;
&lt;li class="arrow arrow-bullet-light"&gt;Light Bullet&lt;/li&gt;
&lt;li class="arrow arrow-bullet-dark"&gt;Dark Bullet&lt;/li&gt;
&lt;/ul&gt;
                                            </code>
                                        </pre>
                    </div>


                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Corner Arrow Bullet</h5>
                        <a data-bs-toggle="collapse" href="#cornerarrowExample"
                           aria-expanded="false" aria-controls="cornerarrowExample">
                            <i class="ti ti-code source" data-source="cornerarrow"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="corner-arrow mb-3"><i class="ti ti-corner-down-right-double text-primary me-2"></i>Primary Bullet</li>
                            <li class="corner-arrow mb-3 "><i class="ti ti-corner-down-right-double text-secondary me-2"></i>secondary Bullet</li>
                            <li class="corner-arrow mb-3 "><i class="ti ti-corner-down-right-double text-success me-2"></i>Success Bullet</li>
                            <li class="corner-arrow mb-3 "><i class="ti ti-corner-down-right-double text-danger me-2"></i>Danger Bullet</li>
                            <li class="corner-arrow mb-3 "><i class="ti ti-corner-down-right-double text-warning me-2"></i>Warning Bullet</li>
                            <li class="corner-arrow mb-3"><i class="ti ti-corner-down-right-double text-info me-2"></i>Info Bullet</li>
                            <li class="corner-arrow mb-3 "><i class="ti ti-corner-down-right-double text-light  me-2"></i>Light Bullet</li>
                            <li class="corner-arrow"><i class="ti ti-corner-down-right-double text-dark me-2"></i>Dark Bullet</li>

                        </ul>
                        <pre class="cornerarrow collapse mt-3" id="cornerarrowExample">
                                            <code class="language-html">
&lt;ul&gt;
&lt;li class="corner-arrow mb-3"&gt;&lt;i class="ti ti-corner-down-right-double text-primary me-2"&gt;&lt;/i&gt;Primary Bullet&lt;/li&gt;
&lt;li class="corner-arrow mb-3 "&gt;&lt;i class="ti ti-corner-down-right-double text-secondary me-2"&gt;&lt;/i&gt;secondary Bullet&lt;/li&gt;
&lt;li class="corner-arrow mb-3 "&gt;&lt;i class="ti ti-corner-down-right-double text-success me-2"&gt;&lt;/i&gt;Success Bullet&lt;/li&gt;
&lt;li class="corner-arrow mb-3 "&gt;&lt;i class="ti ti-corner-down-right-double text-danger me-2"&gt;&lt;/i&gt;Danger Bullet&lt;/li&gt;
&lt;li class="corner-arrow mb-3 "&gt;&lt;i class="ti ti-corner-down-right-double text-warning me-2"&gt;&lt;/i&gt;Warning Bullet&lt;/li&gt;
&lt;li class="corner-arrow mb-3"&gt;&lt;i class="ti ti-corner-down-right-double text-info me-2"&gt;&lt;/i&gt;Info Bullet&lt;/li&gt;
&lt;li class="corner-arrow mb-3 "&gt;&lt;i class="ti ti-corner-down-right-double text-light me-2"&gt;&lt;/i&gt;Light Bullet&lt;/li&gt;
&lt;li class="corner-arrow"&gt;&lt;i class="ti ti-corner-down-right-double text-dark me-2"&gt;&lt;/i&gt;Dark Bullet&lt;/li&gt;
&lt;/ul&gt;
                                            </code>
                                        </pre>
                    </div>


                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Circle Bullet</h5>
                        <a data-bs-toggle="collapse" href="#circlearrowExample"
                           aria-expanded="false" aria-controls="circlearrowExample">
                            <i class="ti ti-code source" data-source="circlearrow"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="circle circle-bullet-primary">Primary Bullet</li>
                            <li class="circle circle-bullet-secondary">secondary Bullet</li>
                            <li class="circle circle-bullet-success">Success Bullet</li>
                            <li class="circle circle-bullet-danger">Danger Bullet</li>
                            <li class="circle circle-bullet-warning">Warning Bullet</li>
                            <li class="circle circle-bullet-info">Info Bullet</li>
                            <li class="circle circle-bullet-light">Light Bullet</li>
                            <li class="circle circle-bullet-dark">Dark Bullet</li>

                        </ul>

                        <pre class="circlearrow collapse mt-3" id="circlearrowExample">
                                            <code class="language-html">
&lt;ul&gt;
&lt;li class="circle circle-bullet-primary"&gt;Primary Bullet&lt;/li&gt;
&lt;li class="circle circle-bullet-secondary"&gt;secondary Bullet&lt;/li&gt;
&lt;li class="circle circle-bullet-success"&gt;Success Bullet&lt;/li&gt;
&lt;li class="circle circle-bullet-danger"&gt;Danger Bullet&lt;/li&gt;
&lt;li class="circle circle-bullet-warning"&gt;Warning Bullet&lt;/li&gt;
&lt;li class="circle circle-bullet-info"&gt;Info Bullet&lt;/li&gt;
&lt;li class="circle circle-bullet-light"&gt;Light Bullet&lt;/li&gt;
&lt;li class="circle circle-bullet-dark"&gt;Dark Bullet&lt;/li&gt;
&lt;/ul&gt;
                                            </code>
                                        </pre>

                    </div>


                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Triangle Bullet</h5>
                        <a data-bs-toggle="collapse" href="#trianglearrowExample"
                           aria-expanded="false" aria-controls="trianglearrowExample">
                            <i class="ti ti-code source" data-source="trianglearrow"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="triangle triangle-bullet-primary">Primary Bullet</li>
                            <li class="triangle triangle-bullet-secondary">secondary Bullet</li>
                            <li class="triangle triangle-bullet-success">Success Bullet</li>
                            <li class="triangle triangle-bullet-danger">Danger Bullet</li>
                            <li class="triangle triangle-bullet-warning">Warning Bullet</li>
                            <li class="triangle triangle-bullet-info">Info Bullet</li>
                            <li class="triangle triangle-bullet-light">Light Bullet</li>
                            <li class="triangle triangle-bullet-dark">Dark Bullet</li>

                        </ul>
                        <pre class="trianglearrow collapse mt-3" id="trianglearrowExample">
                                            <code class="language-html">
&lt;ul&gt;
&lt;li class="triangle triangle-bullet-primary"&gt;Primary Bullet&lt;/li&gt;
&lt;li class="triangle triangle-bullet-secondary"&gt;secondary Bullet&lt;/li&gt;
&lt;li class="triangle triangle-bullet-success"&gt;Success Bullet&lt;/li&gt;
&lt;li class="triangle triangle-bullet-danger"&gt;Danger Bullet&lt;/li&gt;
&lt;li class="triangle triangle-bullet-warning"&gt;Warning Bullet&lt;/li&gt;
&lt;li class="triangle triangle-bullet-info"&gt;Info Bullet&lt;/li&gt;
&lt;li class="triangle triangle-bullet-light"&gt;Light Bullet&lt;/li&gt;
&lt;li class="triangle triangle-bullet-dark"&gt;Dark Bullet&lt;/li&gt;
&lt;/ul&gt;
                                            </code>
                                        </pre>
                    </div>


                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Square Bullet</h5>
                        <a data-bs-toggle="collapse" href="#squarearrowExample"
                           aria-expanded="false" aria-controls="squarearrowExample">
                            <i class="ti ti-code source" data-source="squarearrow"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="square square-bullet-primary">Primary Bullet</li>
                            <li class="square square-bullet-secondary">secondary Bullet</li>
                            <li class="square square-bullet-success">Success Bullet</li>
                            <li class="square square-bullet-danger">Danger Bullet</li>
                            <li class="square square-bullet-warning">Warning Bullet</li>
                            <li class="square square-bullet-info">Info Bullet</li>
                            <li class="square square-bullet-light">Light Bullet</li>
                            <li class="square square-bullet-dark">Dark Bullet</li>

                        </ul>

                        <pre class="squarearrow collapse mt-3" id="squarearrowExample">
                                            <code class="language-html">
&lt;ul&gt;
&lt;li class="square square-bullet-primary"&gt;Primary Bullet&lt;/li&gt;
&lt;li class="square square-bullet-secondary"&gt;secondary Bullet&lt;/li&gt;
&lt;li class="square square-bullet-success"&gt;Success Bullet&lt;/li&gt;
&lt;li class="square square-bullet-danger"&gt;Danger Bullet&lt;/li&gt;
&lt;li class="square square-bullet-warning"&gt;Warning Bullet&lt;/li&gt;
&lt;li class="square square-bullet-info"&gt;Info Bullet&lt;/li&gt;
&lt;li class="square square-bullet-light"&gt;Light Bullet&lt;/li&gt;
&lt;li class="square square-bullet-dark"&gt;Dark Bullet&lt;/li&gt;
&lt;/ul&gt;
                                            </code>
                                        </pre>
                    </div>


                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Plus Bullet</h5>
                        <a data-bs-toggle="collapse" href="#plusarrowExample"
                           aria-expanded="false" aria-controls="plusarrowExample">
                            <i class="ti ti-code source" data-source="plusarrow"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li class="plus plus-bullet-primary">Primary Bullet</li>
                            <li class="plus plus-bullet-secondary">secondary Bullet</li>
                            <li class="plus plus-bullet-success">Success Bullet</li>
                            <li class="plus plus-bullet-danger">Danger Bullet</li>
                            <li class="plus plus-bullet-warning">Warning Bullet</li>
                            <li class="plus plus-bullet-info">Info Bullet</li>
                            <li class="plus plus-bullet-light">Light Bullet</li>
                            <li class="plus plus-bullet-dark">Dark Bullet</li>

                        </ul>
                        <pre class="plusarrow collapse mt-3" id="plusarrowExample">
                                            <code class="language-html">
&lt;ul&gt;
&lt;li class="plus plus-bullet-primary"&gt;Primary Bullet&lt;/li&gt;
&lt;li class="plus plus-bullet-secondary"&gt;secondary Bullet&lt;/li&gt;
&lt;li class="plus plus-bullet-success"&gt;Success Bullet&lt;/li&gt;
&lt;li class="plus plus-bullet-danger"&gt;Danger Bullet&lt;/li&gt;
&lt;li class="plus plus-bullet-warning"&gt;Warning Bullet&lt;/li&gt;
&lt;li class="plus plus-bullet-info"&gt;Info Bullet&lt;/li&gt;
&lt;li class="plus plus-bullet-light"&gt;Light Bullet&lt;/li&gt;
&lt;li class="plus plus-bullet-dark"&gt;Dark Bullet&lt;/li&gt;
&lt;/ul&gt;
                                            </code>
                                        </pre>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

@endsection
