@extends('layout.master')
@section('title', 'Helper Classes')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Helper Classes</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
									<span>
									  <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
									</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Helper Classes</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Helper Classes start -->
        <div class="row">
            <!-- Text Color start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Text Color</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">text-*</a> class for text color
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <span class="text-primary p-2"> - .text-primary</span>
                            <span class="text-secondary p-2"> - .text-secondary</span>
                            <span class="text-success p-2"> - .text-success</span>
                            <span class="text-danger p-2"> - .text-danger</span>
                            <span class="text-warning p-2"> - .text-warning</span>
                            <span class="text-info p-2"> - .text-info</span>
                            <span class="text-light p-2"> - .text-light</span>
                            <span class="text-dark  p-2"> - .text-dark</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Text Color end -->

            <!--  Link Color start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Link Color</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">link-*</a> class for Link color
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                      <span class="p-2">-<a href="#"
                                            class="text-decoration-underline link-primary">link-primary</a></span>
                            <span class="p-2">-<a href="#"
                                                  class="text-decoration-underline link-secondary">link-secondary</a></span>
                            <span class="p-2">-<a href="#" class="text-decoration-underline link-success">
                        link-success</a></span>
                            <span class="p-2">-<a href="#" class="text-decoration-underline link-danger">link-danger</a></span>
                            <span class="p-2">-<a href="#" class="text-decoration-underline link-waring">link-warning</a></span>
                            <span class="p-2">- <a href="#" class="text-decoration-underline link-info">link-info</a></span>
                            <span class="p-2">-<a href="#" class="text-decoration-underline link-light">link-light</a></span>
                            <span class="p-2">-<a href="#" class="text-decoration-underline link-dark">link-dark</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Link Color end -->

            <!-- Text background Color start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Text background Color</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">txt-bg-*</a> class for light background
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <span class="txt-bg-primary p-2"> - .txt-bg-primary</span>
                            <span class="txt-bg-secondary p-2"> - .txt-bg-secondary</span>
                            <span class="txt-bg-success p-2"> - .txt-bg-success</span>
                            <span class="txt-bg-danger p-2"> - .txt-bg-danger</span>
                            <span class="txt-bg-warning p-2"> - .txt-bg-warning</span>
                            <span class="txt-bg-info p-2"> - .txt-bg-info</span>
                            <span class="txt-bg-light p-2"> - .txt-bg-light</span>
                            <span class="txt-bg-dark  p-2"> - .txt-bg-dark</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Text background Color end -->

            <!-- Text Align start -->
            <div class="col-xl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Text Align</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">text-*</a>
                            class for text align
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-lowercase p-2">Text-Lowercase</div>
                        <div class="text-uppercase p-2">Text-Uppercase</div>
                        <div class="text-capitalize p-2">Text-Capitalize</div>
                        <div class="text-center">- Text Align Center</div>
                        <div class="text-start">- Text Align Start</div>
                        <div class="text-end">- Text Align End</div>
                    </div>
                </div>
            </div>
            <!-- Text Align end -->

            <!-- Text Decoration start -->
            <div class="col-xl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Text Decoration</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">text-d-*</a>
                            class for text decoration
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="p-2">- Text Decoration<span class="text-d-underline ms-2"> underline </span></div>
                        <div class="p-2">- Text Decoration<span class="text-d-line-through ms-2"> line-through </span></div>
                        <div class="p-2">- Text Decoration<span class="text-d-overline ms-2"> overline</span></div>
                        <div class="p-2">- Text Decoration<span
                                class="text-d-overline-underline ms-2">overline-underline</span></div>
                        <div class="p-2">- Text Decoration<span
                                class="text-d-line-underline ms-2">underline-line-through</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Text Decoration end -->

            <!-- Font Style start -->
            <div class="col-xl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Font Style</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">f-fs-*</a> class for font style
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="p-2">- Font style<span class="f-fs-normal ms-2">Normal</span></div>
                        <div class="p-2">- Font style<span class="f-fs-italic ms-2">Italic</span></div>
                        <div class="p-2">- Font style<span class="f-fs-oblique ms-2">Oblique</span></div>
                        <div class="p-2">- Font style<span class="f-fs-initial ms-2">Initial</span></div>
                        <div class="p-2">- Font style<span class="f-fs-inherit ms-2">Inherit</span></div>
                    </div>
                </div>
            </div>
            <!-- Font Style end -->

            <!-- Font Size start -->
            <div class="col-xl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Headings</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">h1 to h6</a> class for Headings
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="h1">h1 Fontsize</div>
                        <div class="h2">h2 Fontsize</div>
                        <div class="h3">h3 Fontsize</div>
                        <div class="h4">h4 Fontsize</div>
                        <div class="h5">h5 Fontsize</div>
                        <div class="h6">h6 Fontsize</div>
                    </div>
                </div>
            </div>
            <!-- Font Size end -->

            <!-- Font Weight start -->
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Font Weight</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">f-fw-*</a>
                            class for font weight
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="p-2">- Font weight<span class="f-fw-100 ms-2">f-fw-100* </span></div>
                        <div class="p-2">- Font weight<span class="f-fw-200 ms-2">f-fw-200* </span></div>
                        <div class="p-2">- Font weight<span class="f-fw-300 ms-2">f-fw-300* </span></div>
                        <div class="p-2">- Font weight<span class="f-fw-400 ms-2">f-fw-400* </span></div>
                        <div class="p-2">- Font weight<span class="f-fw-500 ms-2">f-fw-500* </span></div>
                        <div class="p-2">- Font weight<span class="f-fw-600 ms-2">f-fw-600* </span></div>
                        <div class="p-2">- Font weight<span class="f-fw-700 ms-2">f-fw-700* </span></div>
                        <div class="p-2">- Font weight<span class="f-fw-800 ms-2">f-fw-800* </span></div>
                        <div class="p-2">- Font weight<span class="f-fw-900 ms-2">f-fw-900* </span></div>
                    </div>
                </div>
            </div>
            <!-- Font Weight end -->

            <!-- Font Size start -->
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Font Size</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">f-s-*</a>
                            class for font size
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="p-2">- Font<span class="f-s-10 ms-2">Size-10 </span></div>
                        <div class="p-2">- Font<span class="f-s-12 ms-2">Size-12 </span></div>
                        <div class="p-2">- Font<span class="f-s-14 ms-2">Size-14 </span></div>
                        <div class="p-2">- Font<span class="f-s-16 ms-2">Size-16 </span></div>
                        <div class="p-2">- Font<span class="f-s-18 ms-2">Size-18 </span></div>
                        <div class="p-2">- Font<span class="f-s-20 ms-2">Size-20 </span></div>
                        <div class="p-2">- Font<span class="f-s-24 ms-2">Size-24 </span></div>
                        <div>- Font<span class="f-s-32 ms-2">Size-32 </span></div>
                    </div>
                </div>
            </div>
            <!-- Font Size end -->

            <!-- Padding start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Padding</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">pa-*</a> class for Padding
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="row">
                                <div class="col">
                                    <p class="border pa-16">Padding-16</p>
                                </div>
                                <div class="col">
                                    <p class="border pa-14">Padding-14</p>
                                </div>
                                <div class="col">
                                    <p class="border pa-10">Padding-10</p>
                                </div>
                                <div class="col">
                                    <p class="border pa-8">Padding-8</p>
                                </div>
                                <div class="col">
                                    <p class="border pa-4">Padding-4</p>
                                </div>
                                <div class="col">
                                    <p class="border pa-2">Padding-2</p>
                                </div>
                            </div>
                        </div>
                        <div class="app-divider-v">
                            <h6>Padding List</h6>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <p>- pa-1</p>
                                <p>- pa-2</p>
                                <p>- pa-3</p>
                                <p>- pa-4</p>
                                <p>- pa-5</p>
                                <p>- pa-6</p>
                                <p>- pa-7</p>
                                <p>- pa-8</p>
                                <p>- pa-9</p>
                                <p>- pa-10</p>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <p>- pa-11</p>
                                <p>- pa-12</p>
                                <p>- pa-13</p>
                                <p>- pa-14</p>
                                <p>- pa-15</p>
                                <p>- pa-16</p>
                                <p>- pa-17</p>
                                <p>- pa-18</p>
                                <p>- pa-19</p>
                                <p>- pa-20</p>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <p>- pa-21</p>
                                <p>- pa-22</p>
                                <p>- pa-23</p>
                                <p>- pa-24</p>
                                <p>- pa-25</p>
                                <p>- pa-26</p>
                                <p>- pa-27</p>
                                <p>- pa-28</p>
                                <p>- pa-29</p>
                                <p>- pa-30</p>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <p>- pa-31</p>
                                <p>- pa-32</p>
                                <p>- pa-33</p>
                                <p>- pa-34</p>
                                <p>- pa-35</p>
                                <p>- pa-36</p>
                                <p>- pa-37</p>
                                <p>- pa-38</p>
                                <p>- pa-39</p>
                                <p>- pa-40</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Padding end -->

            <!-- Side Padding start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Side Padding</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">pd-t-*/pd-s-*/pd-e-*/pd-b-*</a> class for
                            Padding
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="border pa-t-40">Padding-Top-40</p>
                            </div>
                            <div class="col">
                                <p class="border text-end pa-e-40">Padding-End-40</p>
                            </div>
                            <div class="col">
                                <p class="border pa-b-40">Padding-Bottom-40</p>
                            </div>
                            <div class="col">
                                <p class="border pa-s-40">Padding-Start-40</p>
                            </div>
                        </div>
                        <div class="app-divider-v">
                            <h6>Side Padding List</h6>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xl-3 mb-3">
                                <p>- padding top</p>
                                <p>- pa-t-4</p>
                                <p>- pa-t-8</p>
                                <p>- pa-t-10</p>
                                <p>- pa-t-14</p>
                                <p>- pa-t-18</p>
                                <p>- pa-t-20</p>
                                <p>- pa-t-24</p>
                                <p>- pa-t-28</p>
                                <p>- pa-t-30</p>
                                <p>- pa-t-34</p>
                                <p>- pa-t-38</p>
                                <p>- pa-t-40</p>
                            </div>
                            <div class="col-md-6 col-xl-3 mb-3">
                                <p>- padding start</p>
                                <p>- pa-s-4</p>
                                <p>- pa-s-8</p>
                                <p>- pa-s-10</p>
                                <p>- pa-s-14</p>
                                <p>- pa-s-18</p>
                                <p>- pa-s-20</p>
                                <p>- pa-s-24</p>
                                <p>- pa-s-28</p>
                                <p>- pa-s-30</p>
                                <p>- pa-s-34</p>
                                <p>- pa-s-38</p>
                                <p>- pa-s-40</p>
                            </div>
                            <div class="col-md-6 col-xl-3 mb-3">
                                <p>- padding end</p>
                                <p>- pa-e-4</p>
                                <p>- pa-e-8</p>
                                <p>- pa-e-10</p>
                                <p>- pa-e-14</p>
                                <p>- pa-e-18</p>
                                <p>- pa-e-20</p>
                                <p>- pa-e-24</p>
                                <p>- pa-e-28</p>
                                <p>- pa-e-30</p>
                                <p>- pa-e-34</p>
                                <p>- pa-e-38</p>
                                <p>- pa-e-40</p>
                            </div>
                            <div class="col-md-6 col-xl-3 mb-3">
                                <p>- padding bottom</p>
                                <p>- pa-b-4</p>
                                <p>- pa-b-8</p>
                                <p>- pa-b-10</p>
                                <p>- pa-b-14</p>
                                <p>- pa-b-18</p>
                                <p>- pa-b-20</p>
                                <p>- pa-b-24</p>
                                <p>- pa-b-28</p>
                                <p>- pa-b-30</p>
                                <p>- pa-b-34</p>
                                <p>- pa-b-38</p>
                                <p>- pa-b-40</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side Padding end -->

            <!-- Margin start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Margin</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">mg-*</a> class for margin
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto mb-2">
                                <div class="border">
                                    <div class="mg-40 txt-bg-primary">Margin-40</div>
                                </div>
                            </div>
                            <div class="col-auto mb-2">
                                <div class="border">
                                    <div class="mg-34 txt-bg-dark">Margin-34</div>
                                </div>
                            </div>
                            <div class="col-auto mb-2">
                                <div class="border">
                                    <div class="mg-30 txt-bg-light">Margin-30</div>
                                </div>
                            </div>
                            <div class="col-auto mb-2">
                                <div class="border">
                                    <div class="mg-28 txt-bg-info">Margin-28</div>
                                </div>
                            </div>
                            <div class="col-auto mb-2">
                                <div class="border">
                                    <div class="mg-24 txt-bg-warning">Margin-24</div>
                                </div>
                            </div>
                            <div class="col-auto mb-2">
                                <div class="border">
                                    <div class="mg-20 txt-bg-danger">Margin-20</div>
                                </div>
                            </div>
                            <div class="col-auto mb-2">
                                <div class="border">
                                    <div class="mg-14 txt-bg-success">Margin-14</div>
                                </div>
                            </div>
                            <div class="col-auto mb-2">
                                <div class="border">
                                    <p class="mg-10 txt-bg-secondary">Margin-10</p>
                                </div>
                            </div>
                            <div class="col-auto mb-2">
                                <div class="border">
                                    <p class="mg-4 txt-bg-primary">Margin-4</p>
                                </div>
                            </div>
                            <div class="app-divider-v">
                                <h6>Margin List</h6>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <p>- mg-1</p>
                                    <p>- mg-2</p>
                                    <p>- mg-3</p>
                                    <p>- mg-4</p>
                                    <p>- mg-5</p>
                                    <p>- mg-6</p>
                                    <p>- mg-7</p>
                                    <p>- mg-8</p>
                                    <p>- mg-9</p>
                                    <p>- mg-10</p>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <p>- mg-11</p>
                                    <p>- mg-12</p>
                                    <p>- mg-13</p>
                                    <p>- mg-14</p>
                                    <p>- mg-15</p>
                                    <p>- mg-16</p>
                                    <p>- mg-17</p>
                                    <p>- mg-18</p>
                                    <p>- mg-19</p>
                                    <p>- mg-20</p>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <p>- mg-21</p>
                                    <p>- mg-22</p>
                                    <p>- mg-23</p>
                                    <p>- mg-24</p>
                                    <p>- mg-25</p>
                                    <p>- mg-26</p>
                                    <p>- mg-27</p>
                                    <p>- mg-28</p>
                                    <p>- mg-29</p>
                                    <p>- mg-30</p>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <p>- mg-31</p>
                                    <p>- mg-32</p>
                                    <p>- mg-33</p>
                                    <p>- mg-34</p>
                                    <p>- mg-35</p>
                                    <p>- mg-36</p>
                                    <p>- mg-37</p>
                                    <p>- mg-38</p>
                                    <p>- mg-39</p>
                                    <p>- mg-40</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Margin end -->

            <!-- Side Margin start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Side Margin</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">mg-t-*/mg-s-*/mg-e-*/mg-b-*</a> class for
                            Padding
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col mg-2 border">
                                <div class="mg-s-40">
                                    <p>Margin-Start-40</p>
                                </div>
                            </div>
                            <div class="col mg-2 border">
                                <div class="mg-t-40">
                                    <p>Margin-Top-40</p>
                                </div>
                            </div>
                            <div class="col mg-2 border">
                                <div class="mg-e-40">
                                    <p>Margin-End-40</p>
                                </div>
                            </div>
                            <div class="col mg-2 border">
                                <div class="mg-b-40">
                                    <p>Margin-Bottom-40</p>
                                </div>
                            </div>
                        </div>
                        <div class="app-divider-v">
                            <h6>Side Margin List</h6>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xl-3 mb-3">
                                <p>- Margin top</p>
                                <p>- mg-t-4</p>
                                <p>- mg-t-8</p>
                                <p>- mg-t-10</p>
                                <p>- mg-t-14</p>
                                <p>- mg-t-18</p>
                                <p>- mg-t-20</p>
                                <p>- mg-t-24</p>
                                <p>- mg-t-28</p>
                                <p>- mg-t-30</p>
                                <p>- mg-t-34</p>
                                <p>- mg-t-38</p>
                                <p>- mg-t-40</p>
                            </div>
                            <div class="col-md-6 col-xl-3 mb-3">
                                <p>- Margin start</p>
                                <p>- mg-s-4</p>
                                <p>- mg-s-8</p>
                                <p>- mg-s-10</p>
                                <p>- mg-s-14</p>
                                <p>- mg-s-18</p>
                                <p>- mg-s-20</p>
                                <p>- mg-s-24</p>
                                <p>- mg-s-28</p>
                                <p>- mg-s-30</p>
                                <p>- mg-s-34</p>
                                <p>- mg-s-38</p>
                                <p>- mg-s-40</p>
                            </div>
                            <div class="col-md-6 col-xl-3 mb-3">
                                <p>- Margin end</p>
                                <p>- mg-e-4</p>
                                <p>- mg-e-8</p>
                                <p>- mg-e-10</p>
                                <p>- mg-e-14</p>
                                <p>- mg-e-18</p>
                                <p>- mg-e-20</p>
                                <p>- mg-e-24</p>
                                <p>- mg-e-28</p>
                                <p>- mg-e-30</p>
                                <p>- mg-e-34</p>
                                <p>- mg-e-38</p>
                                <p>- mg-e-40</p>
                            </div>
                            <div class="col-md-6 col-xl-3 mb-3">
                                <p>- Margin bottom</p>
                                <p>- mg-b-4</p>
                                <p>- mg-b-8</p>
                                <p>- mg-b-10</p>
                                <p>- mg-b-14</p>
                                <p>- mg-b-18</p>
                                <p>- mg-b-20</p>
                                <p>- mg-b-24</p>
                                <p>- mg-b-28</p>
                                <p>- mg-b-30</p>
                                <p>- mg-b-34</p>
                                <p>- mg-b-38</p>
                                <p>- mg-b-40</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side Margin end -->

            <!-- Width and Height start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Width and Height</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">w-*/h-*</a> class for Radius
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="w-200 h-200 border mb-2">200*200</div>
                            <div class="w-150 h-150 border mb-2">150*150</div>
                            <div class="w-110 h-110 border mb-2">110*110</div>
                            <div class="w-90 h-90 border mb-2">90*90</div>
                            <div class="w-80 h-80 border mb-2">80*80</div>
                            <div class="w-60 h-60 border mb-2">60*60</div>
                            <div class="w-50 h-50 border mb-2">50*50</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Width and Height end -->

            <!-- Radius start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Radius</h5>
                        <div class="text-muted">
                            using <a href="#"
                                     class="text-decoration-underline">rounded*/rounded-top*/rounded-end*/rounded-bottom*/
                                rounded-start*/rounded-pill*/rounded-circle*</a> class for Radius
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="app-example">
                            <img src="{{asset('../assets/images/blog-app/01.jpg')}}" class="rounded" alt="">
                            <img src="{{asset('../assets/images/blog-app/01.jpg')}}" class="rounded-top" alt="">
                            <img src="{{asset('../assets/images/blog-app/01.jpg')}}" class="rounded-end" alt="">
                            <img src="{{asset('../assets/images/blog-app/01.jpg')}}" class="rounded-bottom" alt="">
                            <img src="{{asset('../assets/images/blog-app/01.jpg')}}" class="rounded-start" alt="">
                            <img src="{{asset('../assets/images/blog-app/01.jpg')}}" class="rounded-pill" alt="">
                            <img src="{{asset('../assets/images/blog-app/01.jpg')}}" class="rounded-circle w-120 h-120" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Radius end -->

            <!-- Border start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Border</h5>
                        <div class="text-muted">
                            using <a href="#" class="text-decoration-underline">b-*</a> class for border
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="app-example">
                            <div class="border">border</div>
                            <div class="border-t">border-t</div>
                            <div class="border-s">border-s</div>
                            <div class="border-e">border-e</div>
                            <div class="border-b">border-b</div>
                        </div>

                        <div class="app-divider-v">
                            <h6>Side Border</h6>
                        </div>
                        <div class="app-example">
                            <div class="border-0 ">border-0</div>
                            <div class="border-t-0 ">border-t-0</div>
                            <div class="border-s-0 ">border-s-0</div>
                            <div class="border-e-0 ">border-e-0</div>
                            <div class="border-b-0 ">border-b-0</div>
                        </div>
                        <div class="app-divider-v">
                            <h6>Border Color</h6>
                        </div>
                        <div class="app-example">
                            <div class="b-1-primary p-2">b-1-primary</div>
                            <div class="b-1-secondary p-2">b-1-secondary</div>
                            <div class="b-1-success p-2">b-1-success</div>
                            <div class="b-1-danger p-2">b-1-danger</div>
                            <div class="b-1-warning p-2">b-1-warning</div>
                            <div class="b-1-info p-2">b-1-info</div>
                            <div class="b-1-light p-2">b-1-light</div>
                            <div class="b-1-dark p-2">b-1-dark</div>
                        </div>

                        <div class="app-divider-v">
                            <h6>Border Width</h6>
                        </div>
                        <div class="app-example">
                            <div class="b-1-primary">b-1-primary</div>
                            <div class="b-3-primary">b-3-primary</div>
                            <div class="b-5-primary">b-5-primary</div>
                            <div class="b-7-primary">b-7-primary</div>
                            <div class="b-9-primary">b-9-primary</div>
                            <div class="b-11-primary">b-11-primary</div>
                            <div class="b-13-primary">b-13-primary</div>
                            <div class="b-15-primary">b-15-primary</div>
                            <div class="b-16-primary">b-16-primary</div>
                        </div>

                        <div class="app-divider-v">
                            <h6>Border Radius</h6>
                        </div>
                        <div class="app-example">
                            <div class="b-1-secondary b-r-5">b-r-5</div>
                            <div class="b-1-secondary b-r-10">b-r-10</div>
                            <div class="b-1-secondary b-r-15">b-r-15</div>
                            <div class="b-1-secondary b-r-20">b-r-20</div>
                            <div class="b-1-secondary b-r-25">b-r-25</div>
                            <div class="b-1-secondary b-r-30">b-r-30</div>
                        </div>

                        <div class="app-divider-v">
                            <h6>Border Dashed Style</h6>
                        </div>

                        <div class="app-example">
                            <div class="dashed-1-primary">dashed-1-primary</div>
                            <div class="dashed-2-secondary">dashed-2-secondary</div>
                            <div class="dashed-3-success">dashed-3-success</div>
                            <div class="dashed-4-warning">dashed-4-warning</div>
                            <div class="dashed-5-danger">dashed-5-danger</div>
                            <div class="dashed-6-dark">dashed-6-dark</div>
                            <div class="dashed-8-info">dashed-8-info</div>
                        </div>

                        <div class="app-divider-v">
                            <h6>Border Dashed Style</h6>
                        </div>

                        <div class="app-example">
                            <div class="dotted-1-primary">dotted-1-primary</div>
                            <div class="dotted-2-secondary">dotted-2-secondary</div>
                            <div class="dotted-3-success">dotted-3-success</div>
                            <div class="dotted-4-warning">dotted-4-warning</div>
                            <div class="dotted-5-danger">dotted-5-danger</div>
                            <div class="dotted-6-dark">dotted-6-dark</div>
                            <div class="dotted-8-info">dotted-8-info</div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Border end -->
            <!-- rotate - degree start  -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Rotate</h5>
                    </div>
                    <div class="card-body">

                        <div class="row rotaed-box">
                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <div class="rotate b-r-5">
                              <span>90°
                              </span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <div class="rotate rotate-180 b-r-5">
                              <span>180°
                              </span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <div class="rotate rotate-270 b-r-5">
                              <span>270°
                              </span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-2 ">
                                <div class="rotate rotate-90-1 b-r-5">
                              <span>-90°
                              </span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <div class="rotate rotate-180-1 b-r-5">
                              <span>-180°
                              </span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <div class="rotate rotate-280-1 b-r-5">
                              <span>-280°
                              </span>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!-- rotate - degree end  -->
        </div>
        <!-- Helper Classes end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
