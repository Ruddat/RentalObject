@extends('layout.master')
@section('title', 'Add Product')
@section('css')
    <!-- filepond css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/filepond/filepond.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/filepond/image-preview.min.css')}}">

    <!-- editor css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/trumbowyg/trumbowyg.min.css')}}">

    <!-- select2 css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/select/select2.min.css')}}" >
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Add Product</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="f-s-14 f-w-500">E-shop</a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Add Product</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Add Product start -->
        <div class="row">
            <div class="col-lg-8 col-xxl-9">
                <div class="card">
                    <div class="card-body">
                        <div class="app-product-section">
                            <div class="main-title">
                                <h6>General Information</h6>
                            </div>
                            <div>
                                <form class="app-form">
                                    <div class="mb-3">
                                        <label class="form-label">Product Title</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Brand Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Product Description</label>
                                        <div id="description-editor">
                                            <p>Hello !</p>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="app-divider-v dashed"></div>

                            <div class="main-title">
                                <h6>Category</h6>
                            </div>

                            <div>
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Product Category</label>
                                                <select class="category-select w-100">
                                                    <option value="IN">Industry</option>
                                                    <option value="FN">Functionality</option>
                                                    <option value="CN">Customer Needs</option>
                                                    <option value="CP">Customer Preferences</option>
                                                    <option value="DE">Demographics</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Product Tags</label>
                                                <select class="category-select w-100">
                                                    <option value="Cl">Clothing</option>
                                                    <option value="SH">Shoes</option>
                                                    <option value="TO">Toys</option>
                                                    <option value="IT">Internet Of Things</option>
                                                    <option value="BS">Books & Stationaries</option>
                                                    <option value="AS">Art Supplies</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="app-divider-v dashed"></div>

                            <div class="main-title">
                                <h6>Inventory</h6>
                            </div>

                            <div>
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label">SKU(Optional)</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Barcode</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label">Quantity</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>

                            <div class="app-divider-v dashed"></div>

                            <div class="main-title">
                                <h6>Shipping</h6>
                            </div>

                            <form class="app-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Weight</label>
                                            <input type="text" class="form-control">
                                            <div class="form-text">Package Size(The package you use to ship your product)</div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Shipping Days</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Length</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Breadth</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Width</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mt-4 d-flex justify-content-end gap-2 flex-column flex-sm-row text-end">
                                            <button type="button" class="btn btn-light-secondary">Discard</button>
                                            <a href="{{route('product_details')}}" target="_blank" role="button" class="btn btn-primary">Add Product</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="app-product-section">
                            <div class="main-title">
                                <h6>Product Media</h6>
                            </div>

                            <div>
                                <input class="app-file-upload addproduct" type="file" id="addProduct" multiple="multiple" data-allow-reorder="true">
                            </div>
                            <div class="app-divider-v dashed"></div>
                            <div class="main-title">
                                <h6>Pricing</h6>
                            </div>

                            <form class="app-form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text b-r-left" id="basic-addon1">$</span>
                                                <input type="text" class="form-control b-r-right" aria-label="Username"
                                                       aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Compare at price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text b-r-left" id="basic-addon2">$</span>
                                                <input type="text" class="form-control b-r-right" aria-label="Username"
                                                       aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Discount(%)</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Discount Type</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="app-divider-v dashed"></div>

                            <div>
                                <div class="main-title">
                                    <h6>Product Variants</h6>
                                </div>

                                <div class="variants-box">
                                    <a role="button" class="text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="ti ti-plus"></i> Add Variants
                                    </a>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="app-form">
                                                    <div class="mb-3">
                                                        <label class="form-label">City</label>
                                                        <select class="form-select">
                                                            <option selected="">select Option</option>
                                                            <option value="1">Size</option>
                                                            <option value="2">Weight</option>
                                                            <option value="3">Color</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Product Hight</label>
                                                        <input type="number" class="form-control" placeholder="Enter Number">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add Variants</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="app-divider-v dashed"></div>

                            <div class="main-title">
                                <h6>Visibility</h6>
                            </div>

                            <div>
                                <div class="form-check d-flex align-items-center mt-2">
                                    <input class="form-check-input f-s-18 mb-1 m-1" type="radio" name="flexRadioDefault"
                                           id="Visibility_1">
                                    <label class="form-check-label" for="Visibility_1">
                                        Published
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center mt-2">
                                    <input class="form-check-input f-s-18 mb-1 m-1" type="radio" name="flexRadioDefault"
                                           id="Visibility_2">
                                    <label class="form-check-label" for="Visibility_2">
                                        Schedule
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center mt-2">
                                    <input class="form-check-input f-s-18 mb-1 m-1" type="radio" name="flexRadioDefault"
                                           id="Visibility_3">
                                    <label class="form-check-label" for="Visibility_3">
                                        Hidden
                                    </label>
                                </div>
                            </div>

                            <form class="app-form mt-4  ">
                                <div class="mb-3">
                                    <label class="form-label">Publish Date</label>
                                    <input type="text" class="form-control">
                                    <div class="form-text">The category will not be visible until the specified date.</div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Product end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- select2 -->
    <script src="{{asset('assets/vendor/select/select2.min.js')}}"></script>

    <!-- filepond -->
    <script src="{{asset('assets/vendor/filepond/file-encode.min.js')}}"></script>
    <script src="{{asset('assets/vendor/filepond/validate-size.min.js')}}"></script>
    <script src="{{asset('assets/vendor/filepond/validate-type.js')}}"></script>
    <script src="{{asset('assets/vendor/filepond/exif-orientation.min.js')}}"></script>
    <script src="{{asset('assets/vendor/filepond/image-preview.min.js')}}"></script>
    <script src="{{asset('assets/vendor/filepond/filepond.min.js')}}"></script>

    <!-- Trumbowyg js -->
    <script src="{{asset('assets/vendor/trumbowyg/trumbowyg.min.js')}}"></script>

    <!-- add product -->
    <script src="{{asset('assets/js/add_product.js')}}"></script>
@endsection


