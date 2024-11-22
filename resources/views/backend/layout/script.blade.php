<!-- latest jquery-->
<script src="{{asset('backend/assets/js/jquery-3.6.3.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('backend/assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>

<!-- Simple bar js-->
<script src="{{asset('backend/assets/vendor/simplebar/simplebar.js')}}"></script>

<!-- phosphor js -->
<script src="{{asset('backend/assets/vendor/phosphor/phosphor.js')}}"></script>

<!-- Customizer js-->
<script src="{{asset('backend/assets/js/customizer.js')}}"></script>

<!-- prism js-->
<script src="{{asset('backend/assets/vendor/prism/prism.min.js')}}"></script>

<!-- App js-->
<script src="{{asset('backend/assets/js/script.js')}}"></script>

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

@yield('script')
