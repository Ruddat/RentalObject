<?php $page = 'blog-manager'; ?>
@extends('rentalobj.layout.mainlayout')
@section('content')




@livewire('frontend.search-rental-object.search-results') <!-- Die Livewire-Komponente einbinden -->



    <!-- popup login -->
    <livewire:auth.login-user />
    <!-- popup register -->
    <livewire:auth.register-user />




<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('toggle-filters');
    const filters = document.getElementById('filters');

    if (toggleButton && filters) {
        toggleButton.addEventListener('click', function () {
            if (filters.classList.contains('d-none')) {
                // Filter sichtbar machen
                filters.classList.remove('d-none');
                toggleButton.textContent = 'Hide Filters';
            } else {
                // Filter ausblenden
                filters.classList.add('d-none');
                toggleButton.textContent = 'Show Filters';
            }
        });
    }
});

</script>

<style>
@media (max-width: 991.98px) {
    #filters {
        display: none; /* Standardmäßig ausgeblendet */
    }

    #filters.d-none {
        display: none; /* Bleibt ausgeblendet, wenn d-none aktiv */
    }

    #filters {
        display: block; /* Sichtbar, wenn d-none entfernt wird */
    }
}
</style>


@endsection
