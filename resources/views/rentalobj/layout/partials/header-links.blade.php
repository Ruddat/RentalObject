<ul class="navigation clearfix">
    <li class="dropdown2 home {{ Request::is('start-page') ? 'current' : '' }}"><a href="#">@autotranslate("Home", app()->getLocale())</a>
        <ul>

            <li class="{{ Request::is('start-page') ? 'current' : '' }}">
                <a href="{{ url('/') }}">Homepage 01</a>
            </li>
            <li class="{{ Request::is('home-02') ? 'current' : '' }}">
                <a href="{{route('home-02')}}">Homepage 02</a>
            </li>
            <li class="{{ Request::is('home-03') ? 'current' : '' }}">
                <a href="{{ url('home-03') }}">Homepage 03</a>
            </li>
            <li class="{{ Request::is('home-04') ? 'current' : '' }}">
                <a href="{{ url('home-04') }}">Homepage 04</a>
            </li>
            <li class="{{ Request::is('home-05') ? 'current' : '' }}">
                <a href="{{ url('home-05') }}">Homepage 05</a>
            </li>
            <li class="{{ Request::is('home-06') ? 'current' : '' }}">
                <a href="{{ url('home-06') }}">Homepage 06</a>
            </li>
        </ul>
    </li>


    <li class="dropdown {{ Request::is('manager/blog-manager-12') ? 'current' : '' }}"><a href="{{ route('blog-manager-12') }}">Blog</a>
    </li>

<!-- Sprachwahl hinzufügen -->
<li class="dropdown2">
    <a href="#">@autotranslate("Language", app()->getLocale())</a>
    <ul>
        @foreach(config('app.available_locales') as $localeCode => $locale)
            <li class="@if(session('locale') == $localeCode) active @endif">
                <a href="#" onclick="changeLanguage('{{ $localeCode }}')">
                    <span class="d-flex align-items-center">
                        <i class="flag-icon {{ $locale['flag'] }} rounded-circle b-r-10 f-s-22"></i>
                        <span class="ps-2">{{ $locale['name'] }}</span>
                    </span>
                </a>
            </li>
        @endforeach
    </ul>
</li>

<!-- Inserieren Button mit Modal -->
<li class="dropdown2">
    <div class="grid-flex grid-item grid-justify-end padding-top-xs">
        <!-- Inserieren Button -->
        <a href="#"
           title="Inserieren ab 0 €"
           class="button-secondary inserieren-badge"
           data-event="evtrack"
           data-bs-toggle="modal"
           data-bs-target="#insertModal"
           data-tracking='{
               "evt_ga_category": "navigation",
               "evt_ga_action": "header",
               "evt_ga_label": "click_fuer0€inserieren",
               "event_name": "navigation_click",
               "event_product": "search",
               "event_parameter_1": "click_fuer0€inserieren"
           }'>
            <span class="palm-hide">Inserieren ab 0 €</span>
        </a>
    </div>
</li>






<script type="text/javascript">
    function changeLanguage(locale) {
        let url = "{{ route('change.lang') }}";
        window.location.href = url + "?lang=" + locale;
    }
</script>









<style>
.grid-justify-end {
    justify-content: center; /* Zentriert die Buttons */
    gap: 8px; /* Abstand zwischen den Buttons */
}

    /* Style for the active language item */
    .dropdown2 ul li.active {
        position: relative;
        font-weight: bold;
    }

    /* Add a bar to the left of the active language */
    .dropdown2 ul li.active a::before {
        content: "";
        position: absolute;
        left: -10px; /* Abstand vom linken Rand */
        top: 50%;
        transform: translateY(-50%);
        width: 4px; /* Breite des Balkens */
        height: 60%; /* Höhe des Balkens, etwa 60% der Höhe des Listenelements */
        background-color: #007bff; /* Farbe des Balkens */
        border-radius: 2px; /* Abgerundete Ecken für den Balken */
    }

/* Inserieren Badge Style */
.inserieren-badge {
    background-color: #1563df;
    color: white;
    border: 1px solid #1563df;
    border-radius: 4px;
    padding: 8px 16px;
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    display: inline-block;
    text-decoration: none;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.inserieren-badge:hover {
    background-color: #0d4bb5;
    color: white;
}

/* Makler Button Style */
.makler-button {
    background-color: white;
    color: #1563df;
    border: 1px solid #1563df;
    border-radius: 4px;
    padding: 8px 16px;
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    display: inline-block;
    text-decoration: none;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.makler-button:hover {
    background-color: #1563df;
    color: white;
}

.modal .tf-grid-layout {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.box-service {
    width: 30%;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.box-service:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

.box-service .image img {
    width: 100%;
    height: auto;
    display: block;
}

.box-service .content {
    padding: 20px;
}

.box-service .content .title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
}

.box-service .content .description {
    font-size: 14px;
    color: #666;
    margin-bottom: 15px;
}

.box-service .tf-btn.btn-line {
    font-size: 14px;
    font-weight: bold;
    color: #1563df;
    border: 1px solid #1563df;
    padding: 10px 20px;
    border-radius: 4px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.box-service .tf-btn.btn-line:hover {
    background-color: #1563df;
    color: #fff;
}
.modal-dialog {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh; /* Vollbildhöhe, um vertikal zu zentrieren */
}

.modal-content {
    border-radius: 10px; /* Abgerundete Ecken */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Schatten für einen modernen Look */
}

.header-account .tf-btn {
    min-width: 40px;
}


</style>

<!--Flag Icon css-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendor/flag-icons-master/flag-icon.css') }}">

</ul>
