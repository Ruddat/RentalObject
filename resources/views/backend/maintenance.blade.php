@section('title', 'Maintenance')
@include('layout.head')

@include('layout.css')

<body>

<!-- maintenance start -->
<div class="bg-dark maintenance py-5">
    <div class="container">
        <div class="row">
            <div class="overlay-maintenance-card">
                <div class="col-md-5">
                    <h1 class="text-warning"> We are <br>under Maintenance</h1>

                    <p class="text-white">Someone has kidnapped our site. We are negotiation ransom and
                        will resolve this issue in 24/7 hours</p>

                    <a href="{{route('index')}}" role="button" class="btn btn-lg btn-warning mt-3">
                        <i class="ti ti-home"></i>
                        Back To Home </a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- maintenance end -->

</body>
@section('script')

    <!-- Bootstrap js-->
    <script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
@endsection
