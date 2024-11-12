@section('title', 'Password Reset')
@include('layout.head')

@include('layout.css')

<body class="sign-in-bg">
<div class="app-wrapper d-block">
    <div class="main-container">
        <!-- Reset Your Password start -->
        <div class="container">
            <div class="row sign-in-content-bg">
                <div class="col-lg-6 image-contentbox d-none d-lg-block">
                    <div class="form-container">
                        <div class="signup-content mt-4">
                  <span>
                    <img src="{{asset('../assets/images/logo/1.png')}}" alt="" class="img-fluid ">
                  </span>
                        </div>

                        <div class="signup-bg-img">
                            <img src="{{asset('../assets/images/login/03.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 form-contentbox">
                    <div class="form-container">
                        <form class="app-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5 text-center text-lg-start">
                                        <h2 class="text-primary f-w-600">Reset Your Password</h2>
                                        <p>Create a new password and sign in to admin</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">New Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Your Password"
                                               id="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Your Password"
                                               id="password1" required="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <a href="{{route('sign_in')}}" role="button" class="btn btn-primary w-100">Reset
                                            Password</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reset Your Password end -->
    </div>
</div>
</body>

@section('script')
    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
@endsection

