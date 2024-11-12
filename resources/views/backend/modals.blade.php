@extends('layout.master')
@section('title', 'Modals')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Modals</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                              <span>
                                <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                              </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Modals</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <!-- Modals start -->
        <div class="row">

            <div class="col-sm-12 col-md-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Default Modal</h5>
                        <p class="mb-0 text-secondary">if you want to keep the default modal then you can keep it using <span class="text-danger">modal-dialog</span></p>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Default Modal
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Small Modal</h5>
                        <p class="mb-0 text-secondary">if you want to keep the default modal then you can keep it using <span class="text-danger">modal-dialog or app_modal_sm</span></p>
                    </div>
                    <div class="card-body modal-btn">
                        <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            small Modal
                        </button>
                        <button type="button" class="btn btn-secondary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModalLarge">
                            Large Modal
                        </button>
                        <button type="button" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#bd-example-modal-xl">
                            Extra Large Modal
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Center Modal</h5>
                        <p class="mb-0 text-secondary">if you want to keep the default modal then you can keep it using <span class="text-danger">modal-dialog-centered</span></p>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-danger btn-md" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                            Center Modal
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Scrollable Modal</h5>
                        <p class="mb-0 text-secondary">if you want to keep the default modal then you can keep it using <span class="text-danger">modal-dialog-centered or modal-dialog-scrollable</span></p>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-info btn-md" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">
                            Scrollable Modal
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Full Screen Modal</h5>
                        <p class="mb-0 text-secondary">if you want to keep the default modal then you can keep it using <span class="text-danger">modal-fullscreen</span></p>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-dark btn-md" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">
                            Full Screen Modal
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Full Screen Sm Down Modal</h5>
                        <p class="mb-0 text-secondary">if you want to keep the default modal then you can keep it using <span class="text-danger"> modal-fullscreen-sm-down</span></p>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-secondary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenSm">
                            Full Screen Sm Down Modal
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Full-Screen Md Down Modal</h5>
                        <p class="mb-0 text-secondary">if you want to keep the default modal then you can keep it using <span class="text-danger">modal-fullscreen-md-down</span></p>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenSm">
                            Full Screen Md Down Modal
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Full Screen Lg Down Modal</h5>
                        <p class="mb-0 text-secondary">if you want to keep the default modal then you can keep it using <span class="text-danger">modal-fullscreen-lg-down</span></p>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-danger btn-md" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenLg">
                            Full Screen Lg Down Modal
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Full Screen Xl Down Modal</h5>
                        <p class="mb-0 text-secondary">if you want to keep the default modal then you can keep it using <span class="text-danger">modal-fullscreen-Xl-down</span></p>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-info btn-md" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXl">
                            Full Screen Xl Down Modal
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Full Screen Xxl Down Modal</h5>
                        <p class="mb-0 text-secondary">if you want to keep the default modal then you can keep it using <span class="text-danger">modal-fullscreen-Xxl-down</span></p>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-warning btn-md" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXxl">
                            Full Screen Xxl Down Modal
                        </button>
                    </div>
                </div>
            </div>

            <!-- modal-1-start -->
            <div class="modal fade" id="exampleModalDefault" tabindex="-1"
                 aria-labelledby="exampleModalDefault" aria-hidden="true">
                <div class="modal-dialog app_modal_md">
                    <div class="modal-content">
                        <div class="modal-header bg-primary-800">
                            <h1 class="modal-title fs-5 text-white" id="exampleModalDefault13">Default Modal</h1>
                            <button type="button" class="fs-5 border-0  bg-none text-white" data-bs-dismiss="modal"
                                    aria-label="Close"><i class="fa-solid fa-xmark fs-3"></i></button>
                        </div>
                        <div class="modal-body ">
                            <div class="row">
                                <div class="col-lg-3 text-center align-self-center">
                                    <img src="{{asset('../assets/images/modals/04.png')}}" alt="" class="img-fluid b-r-10">
                                </div>
                                <div class="col-lg-9 ps-4">
                                    <h5>Wed designer</h5>
                                    <ul class="mt-2 mb-0 list-disc">
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary"
                                    data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-light-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal-1-end -->

            <!--small/default-modal-start -->
            <div class="modal fade" id="exampleModal" tabindex="-1"
                 aria-hidden="true">
                <div class="modal-dialog app_modal_sm">
                    <div class="modal-content">
                        <div class="modal-header bg-primary-800">
                            <h1 class="modal-title fs-5 text-white" id="exampleModal2">Small Modal</h1>
                            <button type="button" class="fs-5 border-0 bg-none  text-white" data-bs-dismiss="modal"
                                    aria-label="Close"><i class="fa-solid fa-xmark fs-3"></i></button>
                        </div>
                        <div class="modal-body text-center">
                            <div class="d-flex gap-2">
                                <img src="{{asset('../assets/images/modals/06.jpg')}}" alt=""
                                     class="rounded-pill object-fit-cover h-90 w-90 b-r-10">
                                <div class="text-start d-flex flex-column gap-2">
                                    <h5>Content marketing</h5>
                                    <p class="m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>

                            <!-- <h5 class="mb-0 mt-3">Good Morning!</h5> -->
                            <!-- <p>Hi, Aaron Gish ! Congratulations.</p> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary"
                                    data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-light-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--small/default-modal-end -->

            <!-- large-modal-start -->
            <div class="modal fade" id="exampleModalLarge" tabindex="-1"
                 aria-hidden="true">
                <div class="modal-dialog app_modal_lg ">
                    <div class="modal-content">
                        <div class="modal-header bg-primary-800">
                            <h1 class="modal-title fs-5 text-white" id="exampleModalLarge2">Large Modal</h1>
                            <button type="button" class="fs-5 border-0 bg-none text-white" data-bs-dismiss="modal"
                                    aria-label="Close"><i class="fa-solid fa-xmark fs-3"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-4 text-center">
                                    <img src="{{asset('../assets/images/modals/05.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-8 align-self-center">
                                    <div class="error-content text-center">
                                        <!-- <h1>404!</h1> -->
                                        <h4 class=" mb-3">DO NOT ENTER</h4>
                                        <button type="button" class="btn btn-light-primary">Back to Dashboard</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary"
                                    data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- large-modal-end -->

            <!-- extra-large-start -->
            <div class="modal fade" id="bd-example-modal-xl" tabindex="-1"
                 aria-labelledby="bd-example-modal-xl" aria-hidden="true">
                <div class="modal-dialog app_modal_xl">
                    <div class="modal-content">
                        <div class="modal-header bg-primary-800">
                            <h1 class="modal-title fs-5 text-white">Extra Large Modal</h1>
                            <button type="button" class="fs-5 border-0 bg-none text-white" data-bs-dismiss="modal"
                                    aria-label="Close"><i class="fa-solid fa-xmark fs-3"></i></button>
                        </div>
                        <div class="modal-body">
                            <!-- <h5 class="mt-0">Overflowing text to show scroll behavior</h5> -->
                            <p>In a professional context it often happens that private or corporate clients corder a
                                publication to be made and presented with the actual content still not being ready.
                                Think of a news blog that's filled with content hourly on the day of going live.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary">Save changes</button>
                            <button type="button" class="btn btn-light-secondary"
                                    data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- extra-large-end -->

            <!-- center-modal-start-->
            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Center Modal</h5>
                            <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-3 text-center align-self-center">
                                    <img src="{{asset('../assets/images/modals/04.png')}}" alt="" class="img-fluid b-r-10">
                                </div>
                                <div class="col-lg-9 ps-4">
                                    <h5>Web designer</h5>
                                    <ul class="mt-3 mb-0 list-disc">
                                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary">Save changes</button>
                            <button type="button" class="btn btn-light-secondary"
                                    data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- center-modal-end -->

            <!-- scrollable-modal-start -->
            <div class="modal fade" id="exampleModalScrollable"  data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" tabindex="-1">
                <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel3">Scroll Modal</h5>
                            <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body h-90">
                            <p><i class="ti ti-chevron-right text-secondary f-w-600"></i> However, reviewers tend to
                                be distracted by comprehensible content, say, a random text copied from a newspaper or
                                the internet. They are likely to focus on the text, disregarding the layout and its
                                elements</p>



                            <p><i class="ti ti-chevron-right text-secondary f-w-600"></i> It was found by Richard McClintock, a philologist, director of publications at Hampden-Sydney College in Virginia; he searched for citings of consectetur in classical Latin literature, a term of remarkably low frequency in that literary corpus.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary">Save changes</button>
                            <button type="button" class="btn btn-light-secondary"
                                    data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- scrollable-modal-end -->


            <!-- Fullscreen Modal start -->


            <!-- Full screen modal start  -->
            <div class="modal fade" id="exampleModalFullscreen" tabindex="-1"
                 aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="exampleModalFullscreenLabel">Full screen modal</h6>
                            <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><i class="ti ti-chevrons-right text-secondary f-w-600"></i> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>


                            <p><i class="ti ti-chevrons-right text-secondary f-w-600"></i> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>


                            <p><i class="ti ti-chevrons-right text-secondary f-w-600"></i>  I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>


                            <p><i class="ti ti-chevrons-right text-secondary f-w-600"></i>  I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>


                            <p><i class="ti ti-chevrons-right text-secondary f-w-600"></i>  I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>


                            <p><i class="ti ti-chevrons-right text-secondary f-w-600"></i>  I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.  I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>


                            <p><i class="ti ti-chevrons-right text-secondary f-w-600"></i>  I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>


                            <p><i class="ti ti-chevrons-right text-secondary f-w-600"></i>  I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.  I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>


                            <p><i class="ti ti-chevrons-right text-secondary f-w-600"></i> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>


                            <p><i class="ti ti-chevrons-right text-secondary f-w-600"></i> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Full screen modal end  -->

            <!-- Full-screen-sm-down modal start  -->
            <div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1"
                 aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen-sm-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="exampleModalFullscreenSmLabel">Full screen below sm</h6>
                            <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><i class="ti ti-caret-right text-secondary f-w-600"></i> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>

                            <p><i class="ti ti-caret-right text-secondary f-w-600"></i> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary btn-sm"
                                    data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Full-screen-sm-down modal end  -->

            <!-- Full-screen-md-down modal start  -->
            <div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1"
                 aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="exampleModalFullscreenMdLabel">Full screen below md</h6>
                            <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><i class="ti ti-arrow-big-right text-secondary f-w-600"></i> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary btn-sm"
                                    data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Full-screen-md-down modal end -->

            <!-- Full-screen-lg-down modal start  -->
            <div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1"
                 aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen-lg-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="exampleModalFullscreenLgLabel">Full screen below lg</h6>
                            <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><i class="ti ti-arrow-right text-secondary f-w-600"></i>  I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>


                            <p><i class="ti ti-arrow-right text-secondary f-w-600"></i> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>


                            <p><i class="ti ti-arrow-right text-secondary f-w-600"></i> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary btn-sm"
                                    data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Full-screen-lg-down modal end -->

            <!-- Full-screen-xl-down modal start  -->
            <div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1"
                 aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen-xl-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="exampleModalFullscreenXlLabel">Full screen below xl</h6>
                            <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><i class="ti ti-arrow-big-right text-secondary f-w-600"></i> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary btn-sm"
                                    data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Full-screen-xl-down modal end -->

            <!-- Full-screen-xxl-down modal start  -->
            <div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1"
                 aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen-xxl-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="exampleModalFullscreenXxlLabel">Full screen below xxl</h6>
                            <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><i class="ti ti-arrow-big-right-lines text-secondary f-w-600"></i>  I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary btn-sm"
                                    data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Full-screen-xxl-down modal end  -->


            <!-- Fullscreen Modal end -->


            <!-- Themes Modal start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="">Themes Modal</h4>
                        <p>You can use custom modals with themes colors.</p>
                    </div>
                    <div class="card-body">
                        <button class="btn m-1 btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#box_1">Primary</button>
                        <button class="btn m-1 btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#box_2">secondary</button>
                        <button class="btn m-1 btn-outline-success" data-bs-toggle="modal"
                                data-bs-target="#box_3">success</button>
                        <button class="btn m-1 btn-outline-warning" data-bs-toggle="modal"
                                data-bs-target="#box_4">warning</button>
                        <button class="btn m-1 btn-outline-info" data-bs-toggle="modal"
                                data-bs-target="#box_5">info</button>
                        <button class="btn m-1 btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#box_6">danger</button>
                        <button class="btn m-1 btn-outline-dark" data-bs-toggle="modal"
                                data-bs-target="#box_7">dark</button>
                        <!-- box-1-start-->
                        <div class="modal fade" id="box_1" aria-hidden="true"
                             tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary ">
                                        <h5 class="modal-title text-white" id="exampleModalToggleLabel4">Primary Modal</h5>
                                        <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="mt-0 text-primary">Quos modi tempora illo fuga blanditiis voluptatum atque.</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="badge text-light-primary fs-6">
                                            Save changes</button>
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- box-1-end-->
                        <!-- box-2-start-->
                        <div class="modal fade" id="box_2" aria-hidden="true"
                             tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-secondary ">
                                        <h5 class="modal-title text-white" id="exampleModalToggleLabel5">Secondary Modal</h5>
                                        <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="mt-0 text-secondary">Quos modi tempora illo fuga blanditiis voluptatum atque.
                                        </h5>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="badge text-light-secondary fs-6">Save changes</button>
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- box-2-end-->
                        <!-- box-3-start-->
                        <div class="modal fade" id="box_3" aria-hidden="true"
                             tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-success ">
                                        <h5 class="modal-title text-white" id="exampleModalToggleLabel13">Success Modal</h5>
                                        <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="mt-0 text-success">Quos modi tempora illo fuga blanditiis voluptatum atque.</h5>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="badge text-light-success fs-6">Save changes</button>
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- box-3-end-->
                        <!-- box-4-start-->
                        <div class="modal fade" id="box_4" aria-hidden="true"
                             tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-warning ">
                                        <h5 class="modal-title text-white" id="exampleModalToggleLabel12">Warning Modal</h5>
                                        <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="mt-0 text-warning">Quos modi tempora illo fuga blanditiis voluptatum atque.</h5>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="badge text-light-warning fs-6">Save changes</button>
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- box-4-end-->
                        <!-- box-5-start-->
                        <div class="modal fade" id="box_5" aria-hidden="true"
                             tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-info">
                                        <h5 class="modal-title text-white" id="exampleModalToggleLabel7">Info Modal</h5>
                                        <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="mt-0 text-info">Quos modi tempora illo fuga blanditiis voluptatum atque.</h5>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="badge text-light-info fs-6">Save changes</button>
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- box-5-end-->
                        <!-- box-6-start-->
                        <div class="modal fade" id="box_6" aria-hidden="true"
                             tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger ">
                                        <h5 class="modal-title text-white" id="exampleModalToggleLabel9">Danger Modal</h5>
                                        <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="mt-0 text-danger">Quos modi tempora illo fuga blanditiis voluptatum atque.</h5>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="badge text-light-danger fs-6">Save changes</button>
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- box-6-end-->

                        <!-- box-7-start-->
                        <div class="modal fade" id="box_7" aria-hidden="true"
                             tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-secondary-900">
                                        <h5 class="modal-title text-white" id="exampleModalToggleLabel11">Dark Modal</h5>
                                        <button type="button" class="btn-close m-0 fs-5" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="mt-0 text-dark">Quos modi tempora illo fuga blanditiis voluptatum atque.</h5>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="badge text-light-dark fs-6">Save changes</button>
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- box-7-end-->
                    </div>
                </div>
            </div>
            <!-- Themes Modal end -->

        </div>
        <!-- Modals end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
