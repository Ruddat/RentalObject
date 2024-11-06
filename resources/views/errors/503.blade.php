<!DOCTYPE html>
<html lang="de">
<head>
    <title>Wartungsmodus - Immobilien- und Nebenkostenverwaltung</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('build/images/logo/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('build/images/logo/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/css/error/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/css/error/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('build/css/error/main.css') }}">
    <meta name="robots" content="noindex, follow">
</head>
<body>
    <div class="flex-w flex-str size1 overlay1">
        <div class="flex-w flex-col-sb wsize1 bg0 p-l-65 p-t-37 p-b-50 p-r-80 respon1">
            <!-- Logo und Haupttext -->
            <div class="wrappic1">
                <a href="/"><img src="{{ asset('build/images/logo/logo@2x.png') }}" alt="IMG"></a>
            </div>
            <div class="w-full flex-c-m p-t-80 p-b-90">
                <div class="wsize2">
                    <h3 class="l1-txt1 p-b-34 respon3">Wir sind bald wieder da!</h3>
                    <p class="m2-txt1 p-b-46">
                        Unsere Seite zur Immobilienverwaltung und Abrechnung für Mietobjekte wird momentan gewartet.
                        Bitte schauen Sie bald wieder vorbei, um alle Funktionen zu nutzen.
                    </p>
                    <!-- Newsletter-Formular -->
                    <form id="newsletter-form" class="contact100-form validate-form m-t-10 m-b-10">
                        <div class="wrap-input100 validate-input m-lr-auto-lg" data-validate="Email ist erforderlich: z.B. ex@abc.xyz">
                            <input class="s2-txt1 placeholder0 input100 trans-04" type="email" name="email" id="newsletter-email" placeholder="E-Mail-Adresse" required>
                            <button type="submit" class="flex-c-m ab-t-r size2 hov1"><i class="zmdi zmdi-long-arrow-right fs-30 cl1 trans-04"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Soziale Netzwerke -->
            <div class="flex-w">
<!-- Beispiel für Facebook -->
@if(config('app.settings.facebook_url'))
    <a href="{{ config('app.settings.facebook_url') }}" class="size3 flex-c-m how-social trans-04 m-r-15 m-b-10">
        <i class="fa fa-facebook"></i>
    </a>
@endif

<!-- Beispiel für Twitter -->
@if(config('app.settings.twitter_url'))
    <a href="{{ config('app.settings.twitter_url') }}" class="size3 flex-c-m how-social trans-04 m-r-15 m-b-10">
        <i class="fa fa-twitter"></i>
    </a>
@endif

<!-- Beispiel für Instagram -->
@if(config('app.settings.instagram_url'))
    <a href="{{ config('app.settings.instagram_url') }}" class="size3 flex-c-m how-social trans-04 m-r-15 m-b-10">
        <i class="fa fa-instagram"></i>
    </a>
@endif
            </div>
        </div>
        <!-- Hintergrundbilder -->
        <div class="wsize1 simpleslide100-parent respon2">
            <div class="simpleslide100">
                <div class="simpleslide100-item bg-img1" style="background-image: url('{{ asset('build/images/slider/slider-2.jpg') }}');"></div>
                <div class="simpleslide100-item bg-img1" style="background-image: url('{{ asset('build/images/slider/slider-2-1.jpg') }}');"></div>
                <div class="simpleslide100-item bg-img1" style="background-image: url('{{ asset('build/images/slider/slider-2-3.jpg') }}');"></div>
            </div>
        </div>
    </div>
    <!-- JavaScript-Dateien -->
    <script src="{{ asset('build/js/jquery.min.js') }}"></script>
    <script src="{{ asset('build/js/bootstrap/popper.js') }}"></script>
    <script src="{{ asset('build/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('build/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('build/js/tilt/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('build/js/vendor/main.js') }}"></script>
</body>
</html>
<script>
document.getElementById('newsletter-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = document.getElementById('newsletter-email').value;

    fetch("{{ route('newsletter.signup') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({ email: email })
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
    })
    .catch(error => console.error('Error:', error));
});
</script>
