

<!-- Footer Section starts-->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-12">
                <ul class="footer-text">
                    <li>
                        <p class="mb-0">Copyright © 11.2024 - {{ date('Y') }} {{ config('app.name') }}. All rights reserved 💖</p>
                    </li>
                    <li> <a href="#">{{ config('app.version') }}</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="footer-text text-end">
                    <li> <a href="{{ url('document.html') }}"> Need Help <i class="ti ti-help"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section ends-->

