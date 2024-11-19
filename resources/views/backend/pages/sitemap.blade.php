@extends('layout.master')
@section('title', 'Site Map')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Sitemap</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-newspaper f-s-16"></i> Other Pages
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Sitemap</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- sitemap start -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card sitemap-card">
                    <div class="card-header">
                        <h5>Vertically Map</h5>
                    </div>
                    <div class="card-body app-scroll">
                        <div class="col-12">
                            <div class="vertical-sitemap">
                                <ul class="list-unstyled mb-0">
                                    <li class="p-0 parent-title"><a href="" class="fw-medium fs-14">RA-ADMIN</a></li>
                                    <li>
                                        <div class="first-part">
                                            <div class="list-wrap">
                                                <a href="" class="fw-medium text-primary">Dashboards</a>
                                            </div>
                                            <ul class="second-part list-unstyled">
                                                <li>
                                                    <a href="" class=""><i class="ti ti-home f-s-18 me-1 "></i>Dashboards</a>
                                                    <ul class="second-part list-unstyled">
                                                        <li>
                                                            <a href="">Ecommerce</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Projects
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Crypto
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Education
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="" class=""><i class="ti ti-server f-s-18 me-1 "></i>Apps</a>
                                                    <ul class="second-part list-unstyled">
                                                        <li>
                                                            <a href=""> calender </a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Invoive </a>
                                                        </li>
                                                        <li>
                                                            <a href=""> kanban board </a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Profile </a>
                                                        </li>
                                                        <li>
                                                            <a href=""> timeline </a>
                                                        </li>
                                                        <li>
                                                            <a href=""> faqs </a>
                                                        </li>
                                                        <li>
                                                            <a href=""> pricing </a>
                                                        </li>
                                                        <li>
                                                            <a href=""> gallery </a>
                                                        </li>
                                                        <li>
                                                            <a href=""> team </a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Chat </a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Email Page </a>
                                                            <ul class="second-part list-unstyled">
                                                                <li>
                                                                    <a href=""> Email </a>
                                                                </li>
                                                                <li>
                                                                    <a href=""> Read Email </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href=""> e-shop </a>
                                                            <ul class="second-part list-unstyled">
                                                                <li>
                                                                    <a href=""> Cart </a>
                                                                </li>

                                                                <li>
                                                                    <a href=""> Product </a>
                                                                </li>
                                                                <li>
                                                                    <a href=""> Add Product </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Product-Details
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href=""> Product list </a>
                                                                </li>
                                                                <li>
                                                                    <a href=""> Orders </a>
                                                                </li>
                                                                <li>
                                                                    <a href=""> Orders Details </a>
                                                                </li>
                                                                <li>
                                                                    <a href=""> Orders List </a>
                                                                </li>
                                                                <li>
                                                                    <a href=""> Checkout</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Wishlist </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href=""> Projects Page </a>
                                                            <ul class="second-part list-unstyled">
                                                                <li>
                                                                    <a href="">projects </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">projects Details </a>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                        <li>
                                                            <a href=""> todo </a>
                                                        </li>
                                                        <li>
                                                            <a href="">Filemanager</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Blog Page</a>
                                                            <ul class="second-part list-unstyled">
                                                                <li>
                                                                    <a href="">blog</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Blog Details</a>
                                                                </li>
                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="" class=""><i class="ti ti-chart-treemap f-s-18 me-1 "></i> Widgets
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="first-part">
                                            <div class="list-wrap">
                                                <a href="" class="fw-medium text-primary"> COMPONENT</a>
                                            </div>
                                            <ul class="second-part list-unstyled">
                                                <li>
                                                    <a href="" class=""><i class="ti ti-first-aid-kit f-s-18 me-1 "></i>Ui Kit</a>
                                                    <ul class="second-part list-unstyled">
                                                        <li>
                                                            <a href=""> cheatsheet</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> alert</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> badges</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> buttonns</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> cards</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Dropdown</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> grid</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> avtar</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> tabs</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> accordions</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Progress</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Notifications</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> lists</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Helper Classes</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> background</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Divider</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Ribbons</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Editor</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> collapse</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Navbar</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Footer</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Shadow</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Wrapper</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Bullet</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Placeholder</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Alignment Thing</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="" class=""><i class="ti ti-briefcase f-s-18 me-1 "></i>Advance UI</a>
                                                    <ul class="second-part list-unstyled">
                                                        <li>
                                                            <a href=""> Modals</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Offcanvas Toggle</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Sweat Alert</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Scrollbar</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Spinners</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Animation</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Video Embed</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Tour</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Slider</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Bootstrap Slider</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Scrollpy</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Tooltip & Popovers</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Rating</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Prismjs</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Count Down</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Count up</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Draggable</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Tree View</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Block Ui</a>
                                                        </li>

                                                    </ul>

                                                </li>

                                                <li>
                                                    <a href="" class=""><i class="ti ti-icons f-s-18 me-1 "></i>Icons</a>
                                                    <ul class="second-part list-unstyled">
                                                        <li>
                                                            <a href=""> Fontawesome</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Flag</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Tabler</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Wheather</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Animated</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Iconoir</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Phosphor</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="" class=""><i class="ti ti-album f-s-18 me-1 "></i>Misc</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="first-part">
                                            <div class="list-wrap">
                                                <a href="" class="fw-medium text-primary"> MAP & CHARTS</a>
                                            </div>
                                            <ul class="second-part list-unstyled">
                                                <li>
                                                    <a href="" class=""> <i class="ti ti-map f-s-18 me-1 "></i>Map</a>
                                                    <ul class="second-part list-unstyled">
                                                        <li>
                                                            <a href=""> Google Maps</a>
                                                        </li>
                                                        <li>
                                                            <a href=""> Leaflet map</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Vector map</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="" class=""><i class="ti ti-chart-pie f-s-18 me-1 "></i>Chart</a>
                                                    <ul class="second-part list-unstyled">
                                                        <li>
                                                            <a href=""> Chart js</a>
                                                        </li>
                                                    </ul>

                                                    <ul class="second-part list-unstyled">
                                                        <li>
                                                            <a href="">Apexcharts</a>
                                                            <ul class="second-part list-unstyled">
                                                                <li>
                                                                    <a href=""> Line</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Area</a>
                                                                </li>
                                                                <li>
                                                                    <a href=""> Column</a>
                                                                </li>
                                                                <li>
                                                                    <a href=""> Bar</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Mixed</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Timeline & Range-Bars</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Candlestick</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Boxplot</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Bubble</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Scatter</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Heatmap</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Treemap</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Pie</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Radialbar</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Radar</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="first-part">
                                            <div class="list-wrap">
                                                <a href="" class="fw-medium text-primary"> TABLE & FORMS</a>
                                            </div>
                                            <ul class="second-part list-unstyled">
                                                <li>
                                                    <a href="" class=""><i class="ti ti-table f-s-18 me-1 "></i>Table </a>
                                                    <ul class="third-part list-unstyled">
                                                        <li><a href="">BasicTable</a></li>
                                                        <li><a href="">Data Table</a></li>
                                                        <li><a href="">List Js</a></li>
                                                        <li><a href="">Advance Table</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="" class=""><i class="ti ti-forms f-s-18 me-1 "></i> Forms elements</a>
                                                    <ul class="third-part list-unstyled">
                                                        <li><a href="">Form Validation</a></li>
                                                        <li><a href="">Base Input</a></li>
                                                        <li><a href="">Checkbox & Radio</a></li>
                                                        <li><a href="">Input Groups</a></li>
                                                        <li><a href="">Input Masks</a></li>
                                                        <li><a href="">Floating Labels</a></li>
                                                        <li><a href="">Datetimepicker</a></li>
                                                        <li><a href="">Touch spin</a></li>
                                                        <li><a href="">Select2</a></li>
                                                        <li><a href="">Switch</a></li>
                                                        <li><a href="">Range Slider</a></li>
                                                        <li><a href="">Typeahead</a></li>
                                                        <li><a href="">Textarea</a></li>
                                                        <li><a href="">Clipboard</a></li>
                                                        <li><a href="">File upload</a></li>
                                                        <li><a href="">dual_listboxes</a></li>
                                                        <li><a href="">Default Forms</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="" class=""> <i class="ti ti-table-import f-s-18 me-1 "></i> Ready to use </a>
                                                    <ul class="third-part list-unstyled">
                                                        <li><a href="">form wizards</a></li>
                                                        <li><a href="">form wizards 1</a></li>
                                                        <li><a href="">form wizards 2</a></li>
                                                        <li><a href="">ready to use form</a></li>
                                                        <li><a href="">ready to use tables</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="first-part">
                                            <div class="list-wrap">
                                                <a href="" class="fw-medium text-primary">PAGES</a>
                                            </div>
                                            <ul class="second-part list-unstyled">
                                                <li>
                                                    <a href="" class=""><i class="ti ti-news f-s-18 me-1 "></i>Auth Pages </a>
                                                    <ul class="third-part list-unstyled">
                                                        <li><a href="">Sign In</a></li>
                                                        <li><a href="">Sign In with Bgimage</a></li>
                                                        <li><a href="">Sign Up</a></li>
                                                        <li><a href="">Sign Up with Bgimage</a></li>
                                                        <li><a href="">Password Reset</a></li>
                                                        <li><a href="">Password Reset with Bgimage </a></li>
                                                        <li><a href="">Password Create</a></li>
                                                        <li><a href="">Password Reset with Bgimage</a></li>
                                                        <li><a href="">Lock Screen</a></li>
                                                        <li><a href="">Lock Screen with Bgimage</a></li>
                                                        <li><a href="">Two-Step Verification</a></li>
                                                        <li><a href="">Two-Step Verification with Bgimage</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="" class=""><i class="ti ti-article-off f-s-18 me-1 "></i>Error Pages </a>
                                                    <ul class="third-part list-unstyled">
                                                        <li><a href="">Bad Request</a></li>
                                                        <li><a href="">Forbidden</a></li>
                                                        <li><a href="">Not Found</a></li>
                                                        <li><a href="">Internal Server</a></li>
                                                        <li><a href="">Service Unavailable</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="" class=""><i class="ti ti-box-multiple f-s-18 me-1 "></i>Other Pages </a>
                                                    <ul class="third-part list-unstyled">
                                                        <li><a href="">Blank</a></li>
                                                        <li><a href="">Maintaince</a></li>
                                                        <li><a href="">Landing Page</a></li>
                                                        <li><a href="">Coming Soon</a></li>
                                                        <li><a href="">Sitemap</a></li>
                                                        <li><a href="">Privacy Policy</a></li>
                                                        <li><a href="">Terms & Condition</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="first-part">
                                            <div class="list-wrap">
                                                <a href="" class="fw-medium text-primary">OTHERS</a>
                                            </div>
                                            <ul class="second-part list-unstyled">
                                                <li>
                                                    <a href="" class=""><i class="ti ti-box-multiple-2 f-s-18 me-1 "></i>2 level</a>
                                                    <ul class="third-part list-unstyled">
                                                        <li><a href="">Blank</a></li>
                                                        <li><a href="">Another Level</a>
                                                            <ul class="third-part list-unstyled">
                                                                <li><a href="">Blank</a></li>
                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="" class=""><i class="ti ti-file-text f-s-18 me-1 "></i>Document</a>
                                                </li>
                                                <li>
                                                    <a href="" class=""><i class="ti ti-headset f-s-18 me-1 "></i>Support</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card sitemap-card">
                    <div class="card-header">
                        <h5>Map With Description</h5>
                    </div>
                    <div class="card-body app-scroll">
                        <div class="col-12">
                            <div class="vertical-sitemap">
                                <ul class="list-unstyled">
                                    <li class="p-0 parent-title"><a href="" class="fw-medium fs-14">RA-ADMIN</a></li>
                                    <li>
                                        <div class="first-part">
                                            <div class="list-wrap">
                                                <a href="" class="fw-medium text-primary "><i
                                                        class="ti ti-home f-s-18 me-1"></i>Dashboards</a>
                                            </div>
                                            <ul class="second-part list-unstyled">
                                                <li>
                                                    <a href="">Ecommerce</a>
                                                    <div class="content-box">
                                                        <p>E-commerce dashboard involves presenting key metrics and insights that help
                                                            businesses make informed decisions. Here are some essential components and ideas
                                                            for an e-commerce dashboard</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <a href="">project</a>
                                                </li>
                                                <li>
                                                    <a href="">Crypto</a>
                                                </li>
                                                <li>
                                                    <a href="">Education</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="first-part">
                                            <div class="list-wrap">
                                                <a href="" class="fw-medium text-primary"><i
                                                        class="ti ti-server f-s-18 me-1 f-w-600"></i>Apps</a>
                                            </div>
                                            <ul class="second-part list-unstyled">
                                                <li>
                                                    <a href="">Kanban board</a>
                                                </li>
                                                <li>
                                                    <a href="">Email-Page</a>
                                                    <ul class="second-part list-unstyled">
                                                        <li>
                                                            <a href="">Email</a>
                                                            <div class="content-box">
                                                                <p>Creating effective content for an e-commerce email page involves presenting
                                                                    critical email marketing metrics and performance indicators.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="first-part">
                                            <div class="list-wrap">
                                                <a href="" class="fw-medium text-primary"><i class="ti ti-first-aid-kit f-s-18 me-1"></i>UI
                                                    Kit</a>
                                            </div>
                                        </div>
                                        <div class="first-part">
                                            <div class="list-wrap">
                                                <a href="" class="fw-medium text-primary"><i
                                                        class="ti ti-briefcase  me-1"></i>Advance UI</a>
                                            </div>
                                        </div>
                                        <div class="first-part">
                                            <div class="list-wrap">
                                                <a href="" class="fw-medium text-primary"><i class="ti ti-briefcase me-1"></i>Other
                                                    Pages</a>
                                            </div>
                                            <ul class="second-part list-unstyled">
                                                <li>
                                                    <a href="">Landing page</a>

                                                    <div class="content-box">
                                                        <p>Landing page involves presenting key metrics and insights that help businesses
                                                            make informed decisions. Here are some essential components and ideas for an
                                                            e-commerce dashboard</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sitemap and -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
