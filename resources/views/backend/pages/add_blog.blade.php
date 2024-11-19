@extends('backend.layout.master')
@section('title', 'Add Blog')
@section('css')

    <!-- filepond css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/filepond/filepond.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/filepond/image-preview.min.css')}}">

    <!-- editor css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/trumbowyg/trumbowyg.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Add Blog</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">

                                            <span>
                                                <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="f-s-14 f-w-500">Blog Page</a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Add Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Blog Details start -->
        <div class="col-xl-12">
            <div class="card add-blog">
                <div class="card-header">
                    <h5>Add Blog</h5>
                </div>
                <div class="card-body">
                    <form class="app-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                           placeholder="Blog Title">
                                    <label for="floatingInput">Blog Title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example">
                                        <option selected="">Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label for="floatingSelect">Works with selects</label>
                                </div>
                                <div class="form-floating mb-3">
                                                    <textarea class="form-control"
                                                              placeholder="Type a comment here"></textarea>
                                    <label>Blog Discription</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingInput1">
                                    <label for="floatingInput">Blog Date</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="file-uploader">
                                    <label for="file-input" id="uploaded_image">
                                        <i class="fa-solid fa-cloud-arrow-up me-2 fs-1 mb-3 text-secondary"></i>
                                        <span class="fs-5">Choose a file</span>
                                        <span class="fs-6 text-secondary text-center ms-3 me-3">JPEG , PNG & PDG formats, up to 50MB</span>
                                        <span class="btn btn-lg  btn-secondary mt-4">Choose a Files</span>
                                    </label>
                                    <input class="uploadfile" type="file" id="file-input" name="images"
                                           accept="image/jpeg, image/png">
                                </div>
                            </div>
                            <div class="col-xl-12 editor-details">
                                <div id="editor" >
                                    <p>Hello !</p>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="text-end">
                                    <a href="{{route('blog')}}" target="_blank" class="btn btn-primary">Add Blog</a>
                                    <button class="btn btn-outline-primary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Blog Details end -->

    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- Trumbowyg js -->
    <script src="{{asset('backend/assets/vendor/trumbowyg/trumbowyg.min.js')}}"></script>

    <!-- filepond -->
    <script src="{{asset('backend/assets/vendor/filepond/file-encode.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/filepond/validate-size.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/filepond/validate-type.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/filepond/exif-orientation.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/filepond/image-preview.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/filepond/filepond.min.js')}}"></script>

    <!-- add blog js  -->
    <script src="{{asset('backend/assets/js/add_blog.js')}}"></script>
@endsection
