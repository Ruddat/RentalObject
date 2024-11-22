    <!-- Javascript -->
    <script type="text/javascript" src="{{ URL::asset('/build/js/bootstrap.min.js') }}"></script>
    <!-- Feather Icon JS -->
    <script src="{{ URL::asset('/build/js/feather.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('/build/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/build/js/plugin.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/build/js/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/build/js/shortcodes.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/build/js/main.js') }}"></script>



    <script>
        feather.replace();
    </script>

<script>
    let startTime = Date.now(); // Zeit beim Laden der Seite
    let timeSpent = 0;

    // Berechne die Zeit, wenn der Benutzer den Tab verlässt oder die Seite schließt
    function logTime() {
        timeSpent += Math.floor((Date.now() - startTime) / 1000);

        // Verwende fetch für einen POST-Request
        fetch('/log-time', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({
                page_url: window.location.pathname,
                time_spent: timeSpent,
            }),
        });
    }

    // Event-Listener für Tab-Wechsel oder Seitenwechsel
    document.addEventListener('visibilitychange', function () {
        if (document.visibilityState === 'hidden') {
            logTime();
        }
    });

    // Event-Listener für das Verlassen der Seite
    window.addEventListener('beforeunload', function () {
        logTime();
    });
</script>

@if (Route::is(['sales-dashboard']))

 @endif
