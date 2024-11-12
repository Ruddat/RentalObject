@section('title', 'Two Step Verifications')
@include('layout.head')

@include('layout.css')

<body class="sign-in-bg">
<div class="app-wrapper d-block">
    <!-- <div class="app-content"> -->
    <div class="main-container">
        <!-- Body main section starts -->

        <div class="container">
            <!-- Verify OTP start -->
            <div class="sign-in-content-bg">
                <div class="row sign-in-content-bg">
                    <div class="col-lg-6 image-contentbox d-none d-lg-block">
                        <div class="form-container">
                            <div class="signup-content mt-4">
                  <span>
                    <img src="{{asset('../assets/images/logo/1.png')}}" alt="" class="img-fluid ">
                  </span>
                            </div>
                            <div class="signup-bg-img">
                                <img src="{{asset('../assets/images/login/01.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 form-contentbox">
                        <div class="form-container">
                            <form class="app-form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-5 text-center text-lg-start">
                                            <h2 class="text-primary">Verify OTP</h2>
                                            <p>Enter the 5 digit code sent to the registered email Id</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="verification-box justify-content-lg-start mb-3">
                                            <div>
                                                <input type="text" class="form-control h-60 w-60 text-center" oninput='digitValidate(this)'
                                                       onkeyup='tabChange(1)' id="one" maxlength="1">
                                            </div>
                                            <div>
                                                <input type="text" class="form-control h-60 w-60 text-center" oninput='digitValidate(this)'
                                                       onkeyup='tabChange(2)' id="two" maxlength="1">
                                            </div>
                                            <div>
                                                <input type="text" class="form-control h-60 w-60 text-center" oninput='digitValidate(this)'
                                                       onkeyup='tabChange(3)' id="three" maxlength="1">
                                            </div>
                                            <div>
                                                <input type="text" class="form-control h-60 w-60 text-center" oninput='digitValidate(this)'
                                                       onkeyup='tabChange(4)' id="four" maxlength="1">
                                            </div>
                                            <div>
                                                <input type="text" class="form-control h-60 w-60 text-center" oninput='digitValidate(this)'
                                                       onkeyup='tabChange(5)' id="five" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p>
                                            Did not recieve a code <a href="#" class="link-primary text-decoration-underline"> Resend!</a>
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <button type="reset" class="btn btn-primary w-100">Verify</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Verify OTP end -->
        </div>

        <!-- Body main section ends -->
    </div>
</div>

</body>

@section('script')

    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>

    <!-- js -->
    <script src="{{asset('assets/js/two_step.js')}}"></script>
@endsection
