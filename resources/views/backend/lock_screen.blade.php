@section('title', 'Lock Screen')
@include('layout.head')

@include('layout.css')

<body class="sign-in-bg">
<div class="app-wrapper d-block">
    <!-- Body main section starts -->
    <div class="main-container">
        <!-- lock_screen start -->
        <div class="container">
            <div class="row sign-in-content-bg">
                <div class="col-lg-6 image-contentbox d-none d-lg-block">
                    <div class="form-container">
                        <div class="signup-content mt-4">
                  <span>
                    <img src="{{asset('../assets/images/logo/1.png')}}" alt="avtar" class="img-fluid ">
                  </span>
                        </div>
                        <div class="signup-bg-img">
                            <img src="{{asset('../assets/images/login/06.png')}}" alt="avtar" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 form-contentbox">
                    <div class="form-container">
                        <form class="app-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 user-screen">
                                        <div class="w-90 h-90 b-r-15 d-flex-center overflow-hidden text-bg-primary">
                                            <img src="{{asset('../assets/images/avtar/14.png')}}" alt="avtar" class="img-fluid">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-5 text-center text-lg-start">
                                        <h2 class="text-primary f-w-600">Lock Screen</h2>
                                        <p>Hello enter your password to unlock the screen</p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Your Password" id="password"
                                               required="">
                                        <p class="text-dark f-s-12 mt-2">Enter Your Password to View your Screen</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
                                        <label class="form-check-label" for="invalidCheck">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <a href="{{route('index')}}" role="button" class="btn btn-primary w-100">Unlock</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- lock_screen end -->

    </div>
    <!-- Body main section ends -->
</div>





</body>
@section('script')
    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
@endsection
