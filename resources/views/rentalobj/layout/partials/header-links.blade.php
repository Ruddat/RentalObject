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
    <li class="dropdown2"><a href="#">Listing</a>
        <ul>
            <li><a href="property-halfmap-grid.html">Property Half Map Grid</a></li>
            <li><a href="property-halfmap-list.html">Property Half Map List</a></li>
            <li><a href="topmap-grid.html">Find Topmap Grid</a></li>
            <li><a href="topmap-list.html">Find Topmap List</a></li>
            <li><a href="sidebar-grid.html">Find Sidebar Grid</a></li>
            <li><a href="sidebar-list.html">Find Sidebar List</a></li>

        </ul>
    </li>

    <li class="dropdown2"><a href="#">Properties</a>
        <ul>
            <li><a href="property-details-v1.html">Property Details 1</a></li>
            <li><a href="property-details-v2.html">Property Details 2</a></li>
            <li><a href="property-details-v3.html">Property Details 3</a></li>
            <li><a href="property-details-v4.html">Property Details 4</a></li>
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

    <!-- Inserieren und Makler finden -->
    <li class="dropdown2">
        <div class="grid-flex grid-item grid-justify-end padding-top-xs">
            <!-- Inserieren Button -->
            <a href="#"
               title="Inserieren ab 0 €"
               class="button-secondary inserieren-badge"
               data-event="evtrack"
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

    <li class="dropdown2">
            <!-- Makler finden Button -->
            <div class="grid-flex grid-item grid-justify-end padding-top-xs">
                <a href="#"
                   title="Makler:in finden"
                   class="button makler-button"
                   data-event="evtrack"
                   data-tracking='{
                       "evt_ga_category": "navigation",
                       "evt_ga_action": "header",
                       "evt_ga_label": "click_maklerfinden",
                       "event_name": "navigation_click",
                       "event_product": "search",
                       "event_parameter_1": "click_maklerfinden"
                   }'>
                    Makler:in finden
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

</style>

<!--Flag Icon css-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendor/flag-icons-master/flag-icon.css') }}">

</ul>
