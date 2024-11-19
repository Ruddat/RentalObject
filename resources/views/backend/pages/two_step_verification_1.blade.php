@section('title', 'Two Step Verification Bg')
@include('layout.head')

@include('layout.css')

<body>
<div class="app-wrapper d-block">
    <div class="">
        <!-- Body main section starts -->
        <main class="w-100 p-0">
            <div class="container-fluid">
                <div class="row">
                    <!-- Verify OTP 1 start -->
                    <div class="col-12 p-0 ">
                        <div class="login-form-container">
                            <div class="mb-4">
                                <a class="logo d-inline-block" href="{{route('index')}}">
                                    <img src="{{asset('../assets/images/logo/1.png')}}" width="250" alt="#">
                                </a>
                            </div>
                            <div class="form_container">
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-5 text-center">
                                                <h2 class="text-primary">Verify OTP</h2>
                                                <p>Enter the 5 digit code sent to the registered email Id</p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="verification-box">
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
                    <!-- Verify OTP 1 end -->
                </div>
            </div>
        </main>
        <!-- Body main section ends -->
    </div>
</div>


</body>

@section('script')
    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/two_step.js')}}"></script>
@endsection
