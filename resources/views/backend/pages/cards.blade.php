@extends('layout.master')
@section('title', 'Cards')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Cards</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
									<span>
									  <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
									</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Cards</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- cards start -->
        <div class="row">
            <div class="col-md-6 col-xl-3">

                <div class="card">
                    <div class="card-header code-header"  >
                        <h5>Card Header</h5>
                        <a data-bs-toggle="collapse" href="#cardheader1"
                           aria-expanded="false" aria-controls="cardheader1">
                            <i class="ti ti-code source" data-source="card1"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h6>Card body</h6>
                        <p>With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>

                <pre class="card1 collapse mt-3" id="cardheader1">
    <code class="language-html">
     &lt;div class="card-body"&gt;
        &lt;h6&gt;Card body&lt;/h6&gt;
        &lt;p&gt;...&lt;/p&gt;
      &lt;/div&gt;
    </code>
</pre>

            </div>

            <div class="col-md-6 col-xl-3">

                <div class="card">

                    <div class="card-body">
                        <h6>Card body</h6>
                        <p>With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer code-footer">
                        <h5>Card Footer</h5>
                        <a data-bs-toggle="collapse" href="#cardheader2"
                           aria-expanded="false" aria-controls="cardheader2">
                            <i class="ti ti-code source" data-source="card2"></i>
                        </a>
                    </div>
                </div>


                <pre class="card2 collapse mt-3" id="cardheader2">
    <code class="language-html">
      &nbsp;&lt;div class="card-body"&gt;
        &lt;h6&gt;Card body&lt;/h6&gt;
        &lt;p&gt;...&lt;/p&gt;
      &lt;/div&gt;

    </code>
</pre>
            </div>

            <div class="col-md-6 col-xl-3">

                <div class="card border-0">
                    <div class="card-header code-header">
                        <h5>Card Header</h5>
                        <a  data-bs-toggle="collapse" href="#cardheader3"
                            aria-expanded="false" aria-controls="cardheader3">
                            <i class="ti ti-code source" data-source="card3"></i>
                        </a>
                    </div>
                    <div class="card-body pb-1">
                        <p>With supporting text below as a natural lead-in to additional content below as a natural.</p>
                    </div>
                    <div class="card-footer">
                        <h5>Card Footer</h5>
                    </div>
                </div>

                <pre class="card3 collapse mt-3" id="cardheader3">
    <code class="language-html">

      &nbsp;&lt;div class="card-body"&gt;
        &lt;h6&gt;Card body&lt;/h6&gt;
        &lt;p&gt;...&lt;/p&gt;
      &lt;/div&gt;

    </code>
</pre>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect">
                    <div class="card-header code-header">
                        <h5>Hover effect</h5>
                        <a data-bs-toggle="collapse" href="#cardheader4"
                           aria-expanded="false" aria-controls="cardheader4" >
                            <i class="ti ti-code source" data-source="card4"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <h6>Card body</h6>
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                    </div>
                </div>
                <pre class="card4 collapse mt-3" id="cardheader4">
    <code class="language-html">

      &nbsp;&lt;div class="card-body"&gt;
       &lt;h6&gt;Card body&lt;/h6&gt;
       &lt;p&gt;...&lt;/p&gt;
     &lt;/div&gt;

    </code>
</pre>

            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect card-primary">
                    <div class="card-header code-header">
                        <h5>Primary card</h5>
                        <a  data-bs-toggle="collapse" href="#cardheader5"
                            aria-expanded="false" aria-controls="cardheader5">
                            <i class="ti ti-code source" data-source="card5"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <h6>Card body</h6>
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                    </div>
                </div>



                <pre class="card5 collapse mt-3" id="cardheader5">
    <code class="language-html">

     &lt;div class="col-md-6 col-xl-3"&gt;
     &lt;div class="card hover-effect card-primary"&gt;
     &lt;div class="card-header"&gt;
       &lt;h5&gt;Secondary card&lt;/h5&gt;
       &lt;/div&gt;
       &lt;div class="card-body"&gt;
       &lt;h6&gt;Card body&lt;/h6&gt;
       &lt;p&gt;...&lt;/p&gt;
     &lt;/div&gt;
     &lt;/div&gt;
     &lt;/div&gt;

    </code>
</pre>

            </div>

            <!-- card 6 -->


            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect card-secondary">
                    <div class="card-header code-header">
                        <h5>Secondary card</h5>
                        <a  data-bs-toggle="collapse" href="#cardheader6"
                            aria-expanded="false" aria-controls="cardheader6">
                            <i class="ti ti-code source" data-source="card6"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <h6>Card body</h6>
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                    </div>
                </div>

                <pre class="card6 collapse mt-3" id="cardheader6">
    <code class="language-html">

     &lt;div class="col-md-6 col-xl-3"&gt;
     &lt;div class="card hover-effect card-secondary"&gt;
     &lt;div class="card-header"&gt;
       &lt;h5&gt;Secondary card&lt;/h5&gt;
       &lt;/div&gt;
       &lt;div class="card-body"&gt;
       &lt;h6&gt;Card body&lt;/h6&gt;
       &lt;p&gt;...&lt;/p&gt;
     &lt;/div&gt;
     &lt;/div&gt;
     &lt;/div&gt;

    </code>
</pre>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect card-success">
                    <div class="card-header code-header">
                        <h5>Success card</h5>
                        <a  data-bs-toggle="collapse" href="#cardheader7"
                            aria-expanded="false" aria-controls="cardheader7">
                            <i class="ti ti-code source" data-source="card7"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <h6>Card body</h6>
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                    </div>
                </div>

                <pre class="card7 collapse mt-3" id="cardheader7">
    <code class="language-html">

     &lt;div class="col-md-6 col-xl-3"&gt;
     &lt;div class="card hover-effect card-success"&gt;
     &lt;div class="card-header"&gt;
       &lt;h5&gt;Secondary card&lt;/h5&gt;
       &lt;/div&gt;
       &lt;div class="card-body"&gt;
       &lt;h6&gt;Card body&lt;/h6&gt;
       &lt;p&gt;...&lt;/p&gt;
     &lt;/div&gt;
     &lt;/div&gt;
     &lt;/div&gt;

    </code>
</pre>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect card-danger">
                    <div class="card-header code-header">
                        <h5>Danger card</h5>
                        <a  data-bs-toggle="collapse" href="#cardheader8"
                            aria-expanded="false" aria-controls="cardheader8">
                            <i class="ti ti-code source" data-source="card8"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <h6>Card body</h6>
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                    </div>
                </div>
                <pre class="card8 collapse mt-3" id="cardheader8">
    <code class="language-html">

     &lt;div class="col-md-6 col-xl-3"&gt;
     &lt;div class="card hover-effect card-danger"&gt;
     &lt;div class="card-header"&gt;
       &lt;h5&gt;Secondary card&lt;/h5&gt;
       &lt;/div&gt;
       &lt;div class="card-body"&gt;
       &lt;h6&gt;Card body&lt;/h6&gt;
       &lt;p&gt;...&lt;/p&gt;
     &lt;/div&gt;
     &lt;/div&gt;
     &lt;/div&gt;

    </code>
</pre>
            </div>

            <!-- card 9 -->


            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect card-outline-primary">
                    <div class="card-header code-header">
                        <h5>Outline card</h5>
                        <a data-bs-toggle="collapse" href="#cardheader9"
                           aria-expanded="false" aria-controls="cardheader9">
                            <i class="ti ti-code source" data-source="card9"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <h6>Card body</h6>
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                    </div>
                </div>

                <pre class="card9 collapse mt-3" id="cardheader9">
    <code class="language-html">

       &nbsp;&lt;div class="col-md-6 col-xl-3"&gt;
        &lt;div class="card hover-effect card-outline-secondary"&gt;
       &lt;div class="card-header"&gt;
       &nbsp; &lt;h5&gt;Outline secondary card&lt;/h5&gt;
       &lt;/div&gt;
       &lt;div class="card-body"&gt;
       &lt;h6&gt;Card body&lt;/h6&gt;
       &lt;p&gt;...&lt;/p&gt;
       &lt;/div&gt;
       &lt;/div&gt;
       &lt;/div&gt;

    </code>
</pre>
            </div>

            <!-- card 10 -->

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect card-outline-secondary">
                    <div class="card-header code-header">
                        <h5>Outline card</h5>
                        <a  data-bs-toggle="collapse" href="#cardheader10"
                            aria-expanded="false" aria-controls="cardheader10">
                            <i class="ti ti-code source" data-source="card10"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <h6>Card body</h6>
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                    </div>
                </div>

                <pre class="card10 collapse mt-3" id="cardheader10">
    <code class="language-html">

       &nbsp;&lt;div class="col-md-6 col-xl-3"&gt;
        &lt;div class="card hover-effect card-outline-secondary"&gt;
       &lt;div class="card-header"&gt;
       &nbsp; &lt;h5&gt;Outline secondary card&lt;/h5&gt;
       &lt;/div&gt;
       &lt;div class="card-body"&gt;
       &lt;h6&gt;Card body&lt;/h6&gt;
       &lt;p&gt;...&lt;/p&gt;
       &lt;/div&gt;
       &lt;/div&gt;
       &lt;/div&gt;

    </code>
</pre>

            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect card-light-primary">
                    <div class="card-header code-header">
                        <h5>Light card</h5>
                        <a data-bs-toggle="collapse" href="#cardheader12"
                           aria-expanded="false" aria-controls="cardheader12">
                            <i class="ti ti-code source" data-source="card10"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <h6>Card body</h6>
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                    </div>
                </div>

                <pre class="card12 collapse mt-3" id="cardheader12">
    <code class="language-html">

       &lt;div class="col-md-6 col-xl-3"&gt;
        &lt;div class="card hover-effect card-light-primary"&gt;
       &lt;div class="card-header"&gt;
       &nbsp; &lt;h5&gt;Light primary card&lt;/h5&gt;
       &lt;/div&gt;
       &lt;div class="card-body"&gt;
       &lt;h6&gt;Card body&lt;/h6&gt;
       &lt;p&gt;...&lt;/p&gt;
       &lt;/div&gt;
       &lt;/div&gt;
       &lt;/div&gt;

    </code>
</pre>
            </div>

            <!-- card 11 -->

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect card-light-secondary">
                    <div class="card-header code-header" >
                        <h5>Light  card</h5>
                        <a data-bs-toggle="collapse" href="#cardheader11"
                           aria-expanded="false" aria-controls="cardheader11">
                            <i class="ti ti-code source" data-source="card11"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <h6>Card body</h6>
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                    </div>
                </div>

                <pre class="card11 collapse mt-3" id="cardheader11">
    <code class="language-html">

        &lt;div class="col-md-6 col-xl-3"&gt;
         &lt;div class="card hover-effect card-light-secondary"&gt;
        &lt;div class="card-header"&gt;
        &nbsp; &lt;h5&gt;Light primary card&lt;/h5&gt;
        &lt;/div&gt;
        &lt;div class="card-body"&gt;
        &lt;h6&gt;Card body&lt;/h6&gt;
        &lt;p&gt;...&lt;/p&gt;
        &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    </code>
</pre>

            </div>

            <!-- icon card start -->

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect card-primary">
                    <div class="card-body">
                        <i class="ti ti-alarm icon-bg"></i>
                        <h6>Card With icon</h6>
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect card-secondary">
                    <div class="card-body">
                        <i class="ti ti-bug icon-bg"></i>
                        <h6>Card With icon</h6>
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect card-light-primary">
                    <div class="card-body">
                        <i class="ti ti-briefcase icon-bg"></i>
                        <h6>Card With icon</h6>
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect card-light-secondary">
                    <div class="card-body">
                        <i class="ti ti-award icon-bg"></i>
                        <h6>Card With icon</h6>
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                    </div>
                </div>
            </div>


            <!-- icon card end -->

            <!-- card border start -->

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect b-t-4-primary">
                    <div class="card-body">
                        <h6>Card With Top border</h6>
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect b-b-4-secondary">
                    <div class="card-body">
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                        <h6 class="mb-0 mt-2">Card With Bottom border</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect b-s-4-success">
                    <div class="card-body">
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                        <h6 class="mb-0 mt-2">Card With left border</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card hover-effect b-e-4-danger">

                    <div class="card-body">
                        <p>With supporting text below lead-in to additional content below as a natural.</p>
                        <h6 class="mb-0 mt-2">Card With right border</h6>
                    </div>
                </div>
            </div>

            <!-- card border end -->

            <div class="col-md-6 col-xxl-4">
                <div class="card overflow-hidden hover-effect">
                    <img src="{{asset('../assets/images/blog-app/06.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to. This
                            content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xxl-4">
                <div class="card overflow-hidden  hover-effect">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional This content.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                    <img src="{{asset('../assets/images/blog-app/02.jpg')}}" class="card-img-bottom" alt="...">
                </div>
            </div>

            <div class="col-xxl-4">
                <div class="row">
                    <div class="col-xxl-12 col-md-6">
                        <div class="card hover-effect">
                            <div class="card-header">
                                <h6 class="mb-0 mt-2 f-w-600">My Profile</h6>
                            </div>
                            <div class="card-body">
                                <p>I am a keen, hard working, reliable and excellent time keeper. I am a bright and receptive
                                    person
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="ti ti-heart-filled text-danger f-s-16 m-r-5"> </i>
                                        <span> 60 likes </span>
                                    </div>
                                    <div class="col-6">
                                        <ul class="avatar-group float-end">
                                            <li class="h-25 w-25 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                                data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                            </li>
                                            <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                <img src="{{asset('../assets/images/avtar/1.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                            </li>
                                            <li class="h-25 w-25 d-flex-center b-r-50 text-bg-warning b-2-light position-relative"
                                                data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                <img src="{{asset('../assets/images/avtar/2.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                            </li>
                                            <li class="h-25 w-25 d-flex-center b-r-50 text-bg-info b-2-light position-relative"
                                                data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                            </li>
                                            <li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                                data-bs-title="5 More">
                                                5+
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-md-6">
                        <div class="card hover-effect">
                            <div class="card-header">
                                Featured
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                                <li class="list-group-item">A Fourth item</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 horizontal-card">
                <div class="card mb-3 hover-effect">
                    <div class="row g-0">
                        <div class="col-md-6 col-xl-4">
                            <img src="{{asset('../assets/images/blog-app/08.jpg')}}" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-6 col-xl-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card hover-effect equal-card tab-card">
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-light-primary" id="Light" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                        data-bs-target="#description-tab-pane" type="button" role="tab"
                                        aria-controls="description-tab-pane" aria-selected="true"> <i class="ti ti-lifebuoy pe-1"></i>
                                    Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="howowrk-tab" data-bs-toggle="tab"
                                        data-bs-target="#howowrk-tab-pane" type="button" role="tab" aria-controls="howowrk-tab-pane"
                                        aria-selected="false" tabindex="-1"> <i class="ti ti-keyboard-show pe-1"></i> How It
                                    Works</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="drawbacks-tab" data-bs-toggle="tab"
                                        data-bs-target="#drawbacks-tab-pane" type="button" role="tab"
                                        aria-controls="drawbacks-tab-pane" aria-selected="false" tabindex="-1"><i
                                        class="ti ti-file-dislike pe-1"></i>Drawbacks</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="LightContent">
                            <div class="tab-pane fade active show" id="description-tab-pane" role="tabpanel"
                                 aria-labelledby="description-tab" tabindex="0">
                                <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>
                            <div class="tab-pane fade" id="howowrk-tab-pane" role="tabpanel" aria-labelledby="howowrk-tab"
                                 tabindex="0">
                                <ol>
                                    <li>Show only the last tab.</li>
                                    <li>If <code>:target</code> matches a tab, show it and hide all following siblings.</li>
                                    <li>Matches a tab, show it and hide all following siblings.</li>
                                </ol>
                            </div>
                            <div class="tab-pane fade" id="drawbacks-tab-pane" role="tabpanel" aria-labelledby="drawbacks-tab"
                                 tabindex="0">
                                <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6  horizontal-card">
                <div class="card mb-3  hover-effect">
                    <div class="row g-0">
                        <div class="col-md-6 col-xl-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text with supporting little bit longer
                                    below as a natural below as a natural lead-in to additional content. This content is a little
                                    bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <img src="{{asset('../assets/images/blog-app/09.jpg')}}" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card hover-effect equal-card tab-card">
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-primary bg-primary p-1" id="bg" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="features-tab" data-bs-toggle="tab"
                                        data-bs-target="#features-tab-pane" type="button" role="tab" aria-controls="features-tab-pane"
                                        aria-selected="false" tabindex="-1"> <i class="ti ti-disc pe-1"></i> features</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="history-tab" data-bs-toggle="tab"
                                        data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="history-tab-pane"
                                        aria-selected="false" tabindex="-1"><i class="ti ti-history pe-1"></i>History</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="reviews-tab" data-bs-toggle="tab"
                                        data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane"
                                        aria-selected="true"><i class="ti ti-star pe-1"></i>reviews</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="bgContent">
                            <div class="tab-pane fade" id="features-tab-pane" role="tabpanel" aria-labelledby="features-tab"
                                 tabindex="0">
                                <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                            <div class="tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab"
                                 tabindex="0">
                                <ol>
                                    <li>Show only the last tab.</li>
                                    <li>If <code>:target</code> matches a tab, show it and hide all following siblings.</li>
                                    <li>Matches a tab, show it and hide all following siblings.</li>
                                </ol>
                            </div>

                            <div class="tab-pane fade active show" id="reviews-tab-pane" role="tabpanel"
                                 aria-labelledby="reviews-tab" tabindex="0">
                                <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- cards end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

@endsection
