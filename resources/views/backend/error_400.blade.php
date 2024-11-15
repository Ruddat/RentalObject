@section('title', 'Bad Request')
@include('backend.layout.head')

@include('backend.layout.css')

<div class="error-container p-0">
    <div class="container">
        <div>
            <div>
                <img src="{{asset('backend/assets/images/background/error-400.png')}}" class="img-fluid" alt="">
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <p class="text-center text-secondary f-w-500">400 Bad Request response status code indicates that the
                            server
                            cannot or will not
                            process the request due to something that is perceived to be a client error</p>
                    </div>
                </div>
            </div>
            <a role="button" href="{{ route('index') }}" class="btn btn-lg btn-lg btn-danger"><i class="ti ti-home"></i> Back To Home</a>
        </div>
    </div>
</div>
@section('script')
    <!--jquery-->
    <script src="{{asset('backend/assets/js/jquery-3.6.3.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('backend/assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
@endsection

