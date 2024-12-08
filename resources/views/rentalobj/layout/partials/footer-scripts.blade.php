    <!-- Javascript -->
    <script type="text/javascript" src="{{ URL::asset('/build/js/bootstrap.min.js') }}"></script>
    <!-- Feather Icon JS -->
    <script src="{{ URL::asset('/build/js/feather.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('/build/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/build/js/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/build/js/plugin.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('/build/js/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/build/js/countto.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/build/js/shortcodes.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/build/js/animation_heading.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/build/js/lazysize.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/build/js/main.js') }}"></script>


    <script type="text/javascript" src="{{ URL::asset('/build/js/jqueryui.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/build/js/chart.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/build/js/chart-init.js') }}"></script>





    <script>
        feather.replace();
    </script>

<script>
    let timeSpent = 0;

    // Erhöhe die Zeit jede Sekunde
    const interval = setInterval(() => {
        timeSpent++;
    }, 1000);

    // Sende die Daten an den Server, wenn der Benutzer die Seite verlässt
    window.addEventListener('beforeunload', function () {
        navigator.sendBeacon('/log-time', new URLSearchParams({
            page_url: window.location.pathname,
            time_spent: timeSpent,
        }));
    });
</script>



@if (Route::is(['sales-dashboard']))

 @endif
