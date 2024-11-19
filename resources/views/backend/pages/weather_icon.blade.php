@extends('backend.layout.master')
@section('title', 'Weather Icon')
@section('css')
    <!-- wheather icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendor/weather/weather-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendor/weather/weather-icons-wind.css')}}">

    <!--Notifications-css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendor/notifications/toastify.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Wheather</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                    <span>
                      <i class="ph-duotone  ph-shapes f-s-16"></i>Icons
                    </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Wheather</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <!-- wheather start  -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="search-bar app-form app-icon-form position-relative">
                                    <input type="search" class="form-control" name="search" placeholder="type to search" >
                                    <i class="ti ti-search"></i>
                                </div>
                            </div>
                            <div class="col-md-8 text-end pt-2">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="icon-list">
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-sunny"></i><strong>wi-day-sunny</strong>
                                <div class="icon-box-codes"><code>wi wi-day-sunny</code><br><code>\f00d </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-cloudy"></i><strong>wi-day-cloudy</strong>
                                <div class="icon-box-codes"><code>wi wi-day-cloudy</code><br><code>\f002 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-cloudy-gusts"></i><strong>wi-day-cloudy-gusts</strong>
                                <div class="icon-box-codes"><code>wi wi-day-cloudy-gusts</code><br><code>\f000 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-cloudy-windy"></i><strong>wi-day-cloudy-windy</strong>
                                <div class="icon-box-codes"><code>wi wi-day-cloudy-windy</code><br><code>\f001 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-fog"></i><strong>wi-day-fog</strong>
                                <div class="icon-box-codes"><code>wi wi-day-fog</code><br><code>\f003 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-hail"></i><strong>wi-day-hail</strong>
                                <div class="icon-box-codes"><code>wi wi-day-hail</code><br><code>\f004 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-haze"></i><strong>wi-day-haze</strong>
                                <div class="icon-box-codes"><code>wi wi-day-haze</code><br><code>\f0b6 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-lightning"></i><strong>wi-day-lightning</strong>
                                <div class="icon-box-codes"><code>wi wi-day-lightning</code><br><code>\f005 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-rain"></i><strong>wi-day-rain</strong>
                                <div class="icon-box-codes"><code>wi wi-day-rain</code><br><code>\f008 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-rain-mix"></i><strong>wi-day-rain-mix</strong>
                                <div class="icon-box-codes"><code>wi wi-day-rain-mix</code><br><code>\f006 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-rain-wind"></i><strong>wi-day-rain-wind</strong>
                                <div class="icon-box-codes"><code>wi wi-day-rain-wind</code><br><code>\f007 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-showers"></i><strong>wi-day-showers</strong>
                                <div class="icon-box-codes"><code>wi wi-day-showers</code><br><code>\f009 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-sleet"></i><strong>wi-day-sleet</strong>
                                <div class="icon-box-codes"><code>wi wi-day-sleet</code><br><code>\f0b2 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-sleet-storm"></i><strong>wi-day-sleet-storm</strong>
                                <div class="icon-box-codes"><code>wi wi-day-sleet-storm</code><br><code>\f068 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-snow"></i><strong>wi-day-snow</strong>
                                <div class="icon-box-codes"><code>wi wi-day-snow</code><br><code>\f00a </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-snow-thunderstorm"></i><strong>wi-day-snow-thunderstorm</strong>
                                <div class="icon-box-codes"><code>wi wi-day-snow-thunderstorm</code><br><code>\f06b </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-snow-wind"></i><strong>wi-day-snow-wind</strong>
                                <div class="icon-box-codes"><code>wi wi-day-snow-wind</code><br><code>\f065 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-sprinkle"></i><strong>wi-day-sprinkle</strong>
                                <div class="icon-box-codes"><code>wi wi-day-sprinkle</code><br><code>\f00b </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-storm-showers"></i><strong>wi-day-storm-showers</strong>
                                <div class="icon-box-codes"><code>wi wi-day-storm-showers</code><br><code>\f00e </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-sunny-overcast"></i><strong>wi-day-sunny-overcast</strong>
                                <div class="icon-box-codes"><code>wi wi-day-sunny-overcast</code><br><code>\f00c </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-thunderstorm"></i><strong>wi-day-thunderstorm</strong>
                                <div class="icon-box-codes"><code>wi wi-day-thunderstorm</code><br><code>\f010 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-windy"></i><strong>wi-day-windy</strong>
                                <div class="icon-box-codes"><code>wi wi-day-windy</code><br><code>\f085 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-solar-eclipse"></i><strong>wi-solar-eclipse</strong>
                                <div class="icon-box-codes"><code>wi wi-solar-eclipse</code><br><code>\f06e </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-hot"></i><strong>wi-hot</strong>
                                <div class="icon-box-codes"><code>wi wi-hot</code><br><code>\f072 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-cloudy-high"></i><strong>wi-day-cloudy-high</strong>
                                <div class="icon-box-codes"><code>wi wi-day-cloudy-high</code><br><code>\f07d </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-day-light-wind"></i><strong>wi-day-light-wind</strong>
                                <div class="icon-box-codes"><code>wi wi-day-light-wind</code><br><code>\f0c4 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-clear"></i><strong>wi-night-clear</strong>
                                <div class="icon-box-codes"><code>wi wi-night-clear</code><br><code>\f02e </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-cloudy"></i><strong>wi-night-alt-cloudy</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-cloudy</code><br><code>\f086 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-cloudy-gusts"></i><strong>wi-night-alt-cloudy-gusts</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-cloudy-gusts</code><br><code>\f022 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-cloudy-windy"></i><strong>wi-night-alt-cloudy-windy</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-cloudy-windy</code><br><code>\f023 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-hail"></i><strong>wi-night-alt-hail</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-hail</code><br><code>\f024 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-lightning"></i><strong>wi-night-alt-lightning</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-lightning</code><br><code>\f025 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-rain"></i><strong>wi-night-alt-rain</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-rain</code><br><code>\f028 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-rain-mix"></i><strong>wi-night-alt-rain-mix</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-rain-mix</code><br><code>\f026 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-rain-wind"></i><strong>wi-night-alt-rain-wind</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-rain-wind</code><br><code>\f027 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-showers"></i><strong>wi-night-alt-showers</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-showers</code><br><code>\f029 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-sleet"></i><strong>wi-night-alt-sleet</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-sleet</code><br><code>\f0b4 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-sleet-storm"></i><strong>wi-night-alt-sleet-storm</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-sleet-storm</code><br><code>\f06a </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-snow"></i><strong>wi-night-alt-snow</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-snow</code><br><code>\f02a </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-snow-thunderstorm"></i><strong>wi-night-alt-snow-thunderstorm</strong>
                                <div class="icon-box-codes">
                                    <code>wi wi-night-alt-snow-thunderstorm</code><br><code>\f06d </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-snow-wind"></i><strong>wi-night-alt-snow-wind</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-snow-wind</code><br><code>\f067 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-sprinkle"></i><strong>wi-night-alt-sprinkle</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-sprinkle</code><br><code>\f02b </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-storm-showers"></i><strong>wi-night-alt-storm-showers</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-storm-showers</code><br><code>\f02c </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-thunderstorm"></i><strong>wi-night-alt-thunderstorm</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-thunderstorm</code><br><code>\f02d </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-cloudy"></i><strong>wi-night-cloudy</strong>
                                <div class="icon-box-codes"><code>wi wi-night-cloudy</code><br><code>\f031 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-cloudy-gusts"></i><strong>wi-night-cloudy-gusts</strong>
                                <div class="icon-box-codes"><code>wi wi-night-cloudy-gusts</code><br><code>\f02f </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-cloudy-windy"></i><strong>wi-night-cloudy-windy</strong>
                                <div class="icon-box-codes"><code>wi wi-night-cloudy-windy</code><br><code>\f030 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-fog"></i><strong>wi-night-fog</strong>
                                <div class="icon-box-codes"><code>wi wi-night-fog</code><br><code>\f04a </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-hail"></i><strong>wi-night-hail</strong>
                                <div class="icon-box-codes"><code>wi wi-night-hail</code><br><code>\f032 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-lightning"></i><strong>wi-night-lightning</strong>
                                <div class="icon-box-codes"><code>wi wi-night-lightning</code><br><code>\f033 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-partly-cloudy"></i><strong>wi-night-partly-cloudy</strong>
                                <div class="icon-box-codes"><code>wi wi-night-partly-cloudy</code><br><code>\f083 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-rain"></i><strong>wi-night-rain</strong>
                                <div class="icon-box-codes"><code>wi wi-night-rain</code><br><code>\f036 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-rain-mix"></i><strong>wi-night-rain-mix</strong>
                                <div class="icon-box-codes"><code>wi wi-night-rain-mix</code><br><code>\f034 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-rain-wind"></i><strong>wi-night-rain-wind</strong>
                                <div class="icon-box-codes"><code>wi wi-night-rain-wind</code><br><code>\f035 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-showers"></i><strong>wi-night-showers</strong>
                                <div class="icon-box-codes"><code>wi wi-night-showers</code><br><code>\f037 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-sleet"></i><strong>wi-night-sleet</strong>
                                <div class="icon-box-codes"><code>wi wi-night-sleet</code><br><code>\f0b3 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-sleet-storm"></i><strong>wi-night-sleet-storm</strong>
                                <div class="icon-box-codes"><code>wi wi-night-sleet-storm</code><br><code>\f069 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-snow"></i><strong>wi-night-snow</strong>
                                <div class="icon-box-codes"><code>wi wi-night-snow</code><br><code>\f038 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-snow-thunderstorm"></i><strong>wi-night-snow-thunderstorm</strong>
                                <div class="icon-box-codes"><code>wi wi-night-snow-thunderstorm</code><br><code>\f06c </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-snow-wind"></i><strong>wi-night-snow-wind</strong>
                                <div class="icon-box-codes"><code>wi wi-night-snow-wind</code><br><code>\f066 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-sprinkle"></i><strong>wi-night-sprinkle</strong>
                                <div class="icon-box-codes"><code>wi wi-night-sprinkle</code><br><code>\f039 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-storm-showers"></i><strong>wi-night-storm-showers</strong>
                                <div class="icon-box-codes"><code>wi wi-night-storm-showers</code><br><code>\f03a </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-thunderstorm"></i><strong>wi-night-thunderstorm</strong>
                                <div class="icon-box-codes"><code>wi wi-night-thunderstorm</code><br><code>\f03b </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-lunar-eclipse"></i><strong>wi-lunar-eclipse</strong>
                                <div class="icon-box-codes"><code>wi wi-lunar-eclipse</code><br><code>\f070 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-stars"></i><strong>wi-stars</strong>
                                <div class="icon-box-codes"><code>wi wi-stars</code><br><code>\f077 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-storm-showers"></i><strong>wi-storm-showers</strong>
                                <div class="icon-box-codes"><code>wi wi-storm-showers</code><br><code>\f01d </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-thunderstorm"></i><strong>wi-thunderstorm</strong>
                                <div class="icon-box-codes"><code>wi wi-thunderstorm</code><br><code>\f01e </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-cloudy-high"></i><strong>wi-night-alt-cloudy-high</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-cloudy-high</code><br><code>\f07e </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-cloudy-high"></i><strong>wi-night-cloudy-high</strong>
                                <div class="icon-box-codes"><code>wi wi-night-cloudy-high</code><br><code>\f080 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-night-alt-partly-cloudy"></i><strong>wi-night-alt-partly-cloudy</strong>
                                <div class="icon-box-codes"><code>wi wi-night-alt-partly-cloudy</code><br><code>\f081 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-cloud"></i><strong>wi-cloud</strong>
                                <div class="icon-box-codes"><code>wi wi-cloud</code><br><code>\f041 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-cloudy"></i><strong>wi-cloudy</strong>
                                <div class="icon-box-codes"><code>wi wi-cloudy</code><br><code>\f013 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-cloudy-gusts"></i><strong>wi-cloudy-gusts</strong>
                                <div class="icon-box-codes"><code>wi wi-cloudy-gusts</code><br><code>\f011 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-cloudy-windy"></i><strong>wi-cloudy-windy</strong>
                                <div class="icon-box-codes"><code>wi wi-cloudy-windy</code><br><code>\f012 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-fog"></i><strong>wi-fog</strong>
                                <div class="icon-box-codes"><code>wi wi-fog</code><br><code>\f014 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-hail"></i><strong>wi-hail</strong>
                                <div class="icon-box-codes"><code>wi wi-hail</code><br><code>\f015 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-rain"></i><strong>wi-rain</strong>
                                <div class="icon-box-codes"><code>wi wi-rain</code><br><code>\f019 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-rain-mix"></i><strong>wi-rain-mix</strong>
                                <div class="icon-box-codes"><code>wi wi-rain-mix</code><br><code>\f017 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-rain-wind"></i><strong>wi-rain-wind</strong>
                                <div class="icon-box-codes"><code>wi wi-rain-wind</code><br><code>\f018 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-showers"></i><strong>wi-showers</strong>
                                <div class="icon-box-codes"><code>wi wi-showers</code><br><code>\f01a </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-sleet"></i><strong>wi-sleet</strong>
                                <div class="icon-box-codes"><code>wi wi-sleet</code><br><code>\f0b5 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-snow"></i><strong>wi-snow</strong>
                                <div class="icon-box-codes"><code>wi wi-snow</code><br><code>\f01b </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-sprinkle"></i><strong>wi-sprinkle</strong>
                                <div class="icon-box-codes"><code>wi wi-sprinkle</code><br><code>\f01c </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-storm-showers"></i><strong>wi-storm-showers</strong>
                                <div class="icon-box-codes"><code>wi wi-storm-showers</code><br><code>\f01d </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-thunderstorm"></i><strong>wi-thunderstorm</strong>
                                <div class="icon-box-codes"><code>wi wi-thunderstorm</code><br><code>\f01e </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-snow-wind"></i><strong>wi-snow-wind</strong>
                                <div class="icon-box-codes"><code>wi wi-snow-wind</code><br><code>\f064 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-smog"></i><strong>wi-smog</strong>
                                <div class="icon-box-codes"><code>wi wi-smog</code><br><code>\f074 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-smoke"></i><strong>wi-smoke</strong>
                                <div class="icon-box-codes"><code>wi wi-smoke</code><br><code>\f062 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-lightning"></i><strong>wi-lightning</strong>
                                <div class="icon-box-codes"><code>wi wi-lightning</code><br><code>\f016 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-raindrops"></i><strong>wi-raindrops</strong>
                                <div class="icon-box-codes"><code>wi wi-raindrops</code><br><code>\f04e </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-raindrop"></i><strong>wi-raindrop</strong>
                                <div class="icon-box-codes"><code>wi wi-raindrop</code><br><code>\f078 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-dust"></i><strong>wi-dust</strong>
                                <div class="icon-box-codes"><code>wi wi-dust</code><br><code>\f063 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-snowflake-cold"></i><strong>wi-snowflake-cold</strong>
                                <div class="icon-box-codes"><code>wi wi-snowflake-cold</code><br><code>\f076 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-windy"></i><strong>wi-windy</strong>
                                <div class="icon-box-codes"><code>wi wi-windy</code><br><code>\f021 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-strong-wind"></i><strong>wi-strong-wind</strong>
                                <div class="icon-box-codes"><code>wi wi-strong-wind</code><br><code>\f050 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-sandstorm"></i><strong>wi-sandstorm</strong>
                                <div class="icon-box-codes"><code>wi wi-sandstorm</code><br><code>\f082 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-earthquake"></i><strong>wi-earthquake</strong>
                                <div class="icon-box-codes"><code>wi wi-earthquake</code><br><code>\f0c6 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-fire"></i><strong>wi-fire</strong>
                                <div class="icon-box-codes"><code>wi wi-fire</code><br><code>\f0c7 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-flood"></i><strong>wi-flood</strong>
                                <div class="icon-box-codes"><code>wi wi-flood</code><br><code>\f07c </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-meteor"></i><strong>wi-meteor</strong>
                                <div class="icon-box-codes"><code>wi wi-meteor</code><br><code>\f071 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-tsunami"></i><strong>wi-tsunami</strong>
                                <div class="icon-box-codes"><code>wi wi-tsunami</code><br><code>\f0c5 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-volcano"></i><strong>wi-volcano</strong>
                                <div class="icon-box-codes"><code>wi wi-volcano</code><br><code>\f0c8 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-hurricane"></i><strong>wi-hurricane</strong>
                                <div class="icon-box-codes"><code>wi wi-hurricane</code><br><code>\f073 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-tornado"></i><strong>wi-tornado</strong>
                                <div class="icon-box-codes"><code>wi wi-tornado</code><br><code>\f056 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-small-craft-advisory"></i><strong>wi-small-craft-advisory</strong>
                                <div class="icon-box-codes"><code>wi wi-small-craft-advisory</code><br><code>\f0cc </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-gale-warning"></i><strong>wi-gale-warning</strong>
                                <div class="icon-box-codes"><code>wi wi-gale-warning</code><br><code>\f0cd </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-storm-warning"></i><strong>wi-storm-warning</strong>
                                <div class="icon-box-codes"><code>wi wi-storm-warning</code><br><code>\f0ce </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-hurricane-warning"></i><strong>wi-hurricane-warning</strong>
                                <div class="icon-box-codes"><code>wi wi-hurricane-warning</code><br><code>\f0cf </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-wind-direction"></i><strong>wi-wind-direction</strong>
                                <div class="icon-box-codes"><code>wi wi-wind-direction</code><br><code>\f0b1 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-alien"></i><strong>wi-alien</strong>
                                <div class="icon-box-codes"><code>wi wi-alien</code><br><code>\f075 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-celsius"></i><strong>wi-celsius</strong>
                                <div class="icon-box-codes"><code>wi wi-celsius</code><br><code>\f03c </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-fahrenheit"></i><strong>wi-fahrenheit</strong>
                                <div class="icon-box-codes"><code>wi wi-fahrenheit</code><br><code>\f045 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-degrees"></i><strong>wi-degrees</strong>
                                <div class="icon-box-codes"><code>wi wi-degrees</code><br><code>\f042 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-thermometer"></i><strong>wi-thermometer</strong>
                                <div class="icon-box-codes"><code>wi wi-thermometer</code><br><code>\f055 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-thermometer-exterior"></i><strong>wi-thermometer-exterior</strong>
                                <div class="icon-box-codes"><code>wi wi-thermometer-exterior</code><br><code>\f053 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-thermometer-internal"></i><strong>wi-thermometer-internal</strong>
                                <div class="icon-box-codes"><code>wi wi-thermometer-internal</code><br><code>\f054 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-cloud-down"></i><strong>wi-cloud-down</strong>
                                <div class="icon-box-codes"><code>wi wi-cloud-down</code><br><code>\f03d </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-cloud-up"></i><strong>wi-cloud-up</strong>
                                <div class="icon-box-codes"><code>wi wi-cloud-up</code><br><code>\f040 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-cloud-refresh"></i><strong>wi-cloud-refresh</strong>
                                <div class="icon-box-codes"><code>wi wi-cloud-refresh</code><br><code>\f03e </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-horizon"></i><strong>wi-horizon</strong>
                                <div class="icon-box-codes"><code>wi wi-horizon</code><br><code>\f047 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-horizon-alt"></i><strong>wi-horizon-alt</strong>
                                <div class="icon-box-codes"><code>wi wi-horizon-alt</code><br><code>\f046 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-sunrise"></i><strong>wi-sunrise</strong>
                                <div class="icon-box-codes"><code>wi wi-sunrise</code><br><code>\f051 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-sunset"></i><strong>wi-sunset</strong>
                                <div class="icon-box-codes"><code>wi wi-sunset</code><br><code>\f052 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moonrise"></i><strong>wi-moonrise</strong>
                                <div class="icon-box-codes"><code>wi wi-moonrise</code><br><code>\f0c9 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moonset"></i><strong>wi-moonset</strong>
                                <div class="icon-box-codes"><code>wi wi-moonset</code><br><code>\f0ca </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-refresh"></i><strong>wi-refresh</strong>
                                <div class="icon-box-codes"><code>wi wi-refresh</code><br><code>\f04c </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-refresh-alt"></i><strong>wi-refresh-alt</strong>
                                <div class="icon-box-codes"><code>wi wi-refresh-alt</code><br><code>\f04b </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-umbrella"></i><strong>wi-umbrella</strong>
                                <div class="icon-box-codes"><code>wi wi-umbrella</code><br><code>\f084 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-barometer"></i><strong>wi-barometer</strong>
                                <div class="icon-box-codes"><code>wi wi-barometer</code><br><code>\f079 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-humidity"></i><strong>wi-humidity</strong>
                                <div class="icon-box-codes"><code>wi wi-humidity</code><br><code>\f07a </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i class="wi wi-na"></i><strong>wi-na</strong>
                                <div class="icon-box-codes"><code>wi wi-na</code><br><code>\f07b </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-train"></i><strong>wi-train</strong>
                                <div class="icon-box-codes"><code>wi wi-train</code><br><code>\f0cb </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-new"></i><strong>wi-moon-new</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-new</code><br><code>\f095 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waxing-crescent-1"></i><strong>wi-moon-waxing-crescent-1</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waxing-crescent-1</code><br><code>\f096 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waxing-crescent-2"></i><strong>wi-moon-waxing-crescent-2</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waxing-crescent-2</code><br><code>\f097 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waxing-crescent-3"></i><strong>wi-moon-waxing-crescent-3</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waxing-crescent-3</code><br><code>\f098 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waxing-crescent-4"></i><strong>wi-moon-waxing-crescent-4</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waxing-crescent-4</code><br><code>\f099 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waxing-crescent-5"></i><strong>wi-moon-waxing-crescent-5</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waxing-crescent-5</code><br><code>\f09a </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waxing-crescent-6"></i><strong>wi-moon-waxing-crescent-6</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waxing-crescent-6</code><br><code>\f09b </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-first-quarter"></i><strong>wi-moon-first-quarter</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-first-quarter</code><br><code>\f09c </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waxing-gibbous-1"></i><strong>wi-moon-waxing-gibbous-1</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waxing-gibbous-1</code><br><code>\f09d </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waxing-gibbous-2"></i><strong>wi-moon-waxing-gibbous-2</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waxing-gibbous-2</code><br><code>\f09e </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waxing-gibbous-3"></i><strong>wi-moon-waxing-gibbous-3</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waxing-gibbous-3</code><br><code>\f09f </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waxing-gibbous-4"></i><strong>wi-moon-waxing-gibbous-4</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waxing-gibbous-4</code><br><code>\f0a0 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waxing-gibbous-5"></i><strong>wi-moon-waxing-gibbous-5</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waxing-gibbous-5</code><br><code>\f0a1 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waxing-gibbous-6"></i><strong>wi-moon-waxing-gibbous-6</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waxing-gibbous-6</code><br><code>\f0a2 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-full"></i><strong>wi-moon-full</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-full</code><br><code>\f0a3 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waning-gibbous-1"></i><strong>wi-moon-waning-gibbous-1</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waning-gibbous-1</code><br><code>\f0a4 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waning-gibbous-2"></i><strong>wi-moon-waning-gibbous-2</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waning-gibbous-2</code><br><code>\f0a5 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waning-gibbous-3"></i><strong>wi-moon-waning-gibbous-3</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waning-gibbous-3</code><br><code>\f0a6 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waning-gibbous-4"></i><strong>wi-moon-waning-gibbous-4</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waning-gibbous-4</code><br><code>\f0a7 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waning-gibbous-5"></i><strong>wi-moon-waning-gibbous-5</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waning-gibbous-5</code><br><code>\f0a8 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waning-gibbous-6"></i><strong>wi-moon-waning-gibbous-6</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waning-gibbous-6</code><br><code>\f0a9 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-third-quarter"></i><strong>wi-moon-third-quarter</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-third-quarter</code><br><code>\f0aa </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waning-crescent-1"></i><strong>wi-moon-waning-crescent-1</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waning-crescent-1</code><br><code>\f0ab </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waning-crescent-2"></i><strong>wi-moon-waning-crescent-2</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waning-crescent-2</code><br><code>\f0ac </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waning-crescent-3"></i><strong>wi-moon-waning-crescent-3</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waning-crescent-3</code><br><code>\f0ad </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waning-crescent-4"></i><strong>wi-moon-waning-crescent-4</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waning-crescent-4</code><br><code>\f0ae </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waning-crescent-5"></i><strong>wi-moon-waning-crescent-5</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waning-crescent-5</code><br><code>\f0af </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-waning-crescent-6"></i><strong>wi-moon-waning-crescent-6</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-waning-crescent-6</code><br><code>\f0b0 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-new"></i><strong>wi-moon-alt-new</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-new</code><br><code>\f0eb </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waxing-crescent-1"></i><strong>wi-moon-alt-waxing-crescent-1</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waxing-crescent-1</code><br><code>\f0d0 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waxing-crescent-2"></i><strong>wi-moon-alt-waxing-crescent-2</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waxing-crescent-2</code><br><code>\f0d1 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waxing-crescent-3"></i><strong>wi-moon-alt-waxing-crescent-3</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waxing-crescent-3</code><br><code>\f0d2 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waxing-crescent-4"></i><strong>wi-moon-alt-waxing-crescent-4</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waxing-crescent-4</code><br><code>\f0d3 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waxing-crescent-5"></i><strong>wi-moon-alt-waxing-crescent-5</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waxing-crescent-5</code><br><code>\f0d4 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waxing-crescent-6"></i><strong>wi-moon-alt-waxing-crescent-6</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waxing-crescent-6</code><br><code>\f0d5 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-first-quarter"></i><strong>wi-moon-alt-first-quarter</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-first-quarter</code><br><code>\f0d6 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waxing-gibbous-1"></i><strong>wi-moon-alt-waxing-gibbous-1</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waxing-gibbous-1</code><br><code>\f0d7 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waxing-gibbous-2"></i><strong>wi-moon-alt-waxing-gibbous-2</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waxing-gibbous-2</code><br><code>\f0d8 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waxing-gibbous-3"></i><strong>wi-moon-alt-waxing-gibbous-3</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waxing-gibbous-3</code><br><code>\f0d9 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waxing-gibbous-4"></i><strong>wi-moon-alt-waxing-gibbous-4</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waxing-gibbous-4</code><br><code>\f0da </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waxing-gibbous-5"></i><strong>wi-moon-alt-waxing-gibbous-5</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waxing-gibbous-5</code><br><code>\f0db </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waxing-gibbous-6"></i><strong>wi-moon-alt-waxing-gibbous-6</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waxing-gibbous-6</code><br><code>\f0dc </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-full"></i><strong>wi-moon-alt-full</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-full</code><br><code>\f0dd </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waning-gibbous-1"></i><strong>wi-moon-alt-waning-gibbous-1</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waning-gibbous-1</code><br><code>\f0de </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waning-gibbous-2"></i><strong>wi-moon-alt-waning-gibbous-2</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waning-gibbous-2</code><br><code>\f0df </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waning-gibbous-3"></i><strong>wi-moon-alt-waning-gibbous-3</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waning-gibbous-3</code><br><code>\f0e0 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waning-gibbous-4"></i><strong>wi-moon-alt-waning-gibbous-4</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waning-gibbous-4</code><br><code>\f0e1 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waning-gibbous-5"></i><strong>wi-moon-alt-waning-gibbous-5</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waning-gibbous-5</code><br><code>\f0e2 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waning-gibbous-6"></i><strong>wi-moon-alt-waning-gibbous-6</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waning-gibbous-6</code><br><code>\f0e3 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-third-quarter"></i><strong>wi-moon-alt-third-quarter</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-third-quarter</code><br><code>\f0e4 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waning-crescent-1"></i><strong>wi-moon-alt-waning-crescent-1</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waning-crescent-1</code><br><code>\f0e5 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waning-crescent-2"></i><strong>wi-moon-alt-waning-crescent-2</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waning-crescent-2</code><br><code>\f0e6 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waning-crescent-3"></i><strong>wi-moon-alt-waning-crescent-3</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waning-crescent-3</code><br><code>\f0e7 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waning-crescent-4"></i><strong>wi-moon-alt-waning-crescent-4</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waning-crescent-4</code><br><code>\f0e8 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waning-crescent-5"></i><strong>wi-moon-alt-waning-crescent-5</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waning-crescent-5</code><br><code>\f0e9 </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-moon-alt-waning-crescent-6"></i><strong>wi-moon-alt-waning-crescent-6</strong>
                                <div class="icon-box-codes"><code>wi wi-moon-alt-waning-crescent-6</code><br><code>\f0ea </code>
                                </div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-time-1"></i><strong>wi-time-1</strong>
                                <div class="icon-box-codes"><code>wi wi-time-1</code><br><code>\f08a </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-time-2"></i><strong>wi-time-2</strong>
                                <div class="icon-box-codes"><code>wi wi-time-2</code><br><code>\f08b </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-time-3"></i><strong>wi-time-3</strong>
                                <div class="icon-box-codes"><code>wi wi-time-3</code><br><code>\f08c </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-time-4"></i><strong>wi-time-4</strong>
                                <div class="icon-box-codes"><code>wi wi-time-4</code><br><code>\f08d </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-time-5"></i><strong>wi-time-5</strong>
                                <div class="icon-box-codes"><code>wi wi-time-5</code><br><code>\f08e </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-time-6"></i><strong>wi-time-6</strong>
                                <div class="icon-box-codes"><code>wi wi-time-6</code><br><code>\f08f </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-time-7"></i><strong>wi-time-7</strong>
                                <div class="icon-box-codes"><code>wi wi-time-7</code><br><code>\f090 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-time-8"></i><strong>wi-time-8</strong>
                                <div class="icon-box-codes"><code>wi wi-time-8</code><br><code>\f091 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-time-9"></i><strong>wi-time-9</strong>
                                <div class="icon-box-codes"><code>wi wi-time-9</code><br><code>\f092 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-time-10"></i><strong>wi-time-10</strong>
                                <div class="icon-box-codes"><code>wi wi-time-10</code><br><code>\f093 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-time-11"></i><strong>wi-time-11</strong>
                                <div class="icon-box-codes"><code>wi wi-time-11</code><br><code>\f094 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-time-12"></i><strong>wi-time-12</strong>
                                <div class="icon-box-codes"><code>wi wi-time-12</code><br><code>\f089 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-direction-up"></i><strong>wi-direction-up</strong>
                                <div class="icon-box-codes"><code>wi wi-direction-up</code><br><code>\f058 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-direction-up-right"></i><strong>wi-direction-up-right</strong>
                                <div class="icon-box-codes"><code>wi wi-direction-up-right</code><br><code>\f057 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-direction-right"></i><strong>wi-direction-right</strong>
                                <div class="icon-box-codes"><code>wi wi-direction-right</code><br><code>\f04d </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-direction-down-right"></i><strong>wi-direction-down-right</strong>
                                <div class="icon-box-codes"><code>wi wi-direction-down-right</code><br><code>\f088 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-direction-down"></i><strong>wi-direction-down</strong>
                                <div class="icon-box-codes"><code>wi wi-direction-down</code><br><code>\f044 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-direction-down-left"></i><strong>wi-direction-down-left</strong>
                                <div class="icon-box-codes"><code>wi wi-direction-down-left</code><br><code>\f043 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-direction-left"></i><strong>wi-direction-left</strong>
                                <div class="icon-box-codes"><code>wi wi-direction-left</code><br><code>\f048 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-direction-up-left"></i><strong>wi-direction-up-left</strong>
                                <div class="icon-box-codes"><code>wi wi-direction-up-left</code><br><code>\f087 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-wind-beaufort-0"></i><strong>wi-wind-beaufort-0</strong>
                                <div class="icon-box-codes"><code>wi wi-wind-beaufort-0</code><br><code>\f0b7 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-wind-beaufort-1"></i><strong>wi-wind-beaufort-1</strong>
                                <div class="icon-box-codes"><code>wi wi-wind-beaufort-1</code><br><code>\f0b8 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-wind-beaufort-2"></i><strong>wi-wind-beaufort-2</strong>
                                <div class="icon-box-codes"><code>wi wi-wind-beaufort-2</code><br><code>\f0b9 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-wind-beaufort-3"></i><strong>wi-wind-beaufort-3</strong>
                                <div class="icon-box-codes"><code>wi wi-wind-beaufort-3</code><br><code>\f0ba </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-wind-beaufort-4"></i><strong>wi-wind-beaufort-4</strong>
                                <div class="icon-box-codes"><code>wi wi-wind-beaufort-4</code><br><code>\f0bb </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-wind-beaufort-5"></i><strong>wi-wind-beaufort-5</strong>
                                <div class="icon-box-codes"><code>wi wi-wind-beaufort-5</code><br><code>\f0bc </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-wind-beaufort-6"></i><strong>wi-wind-beaufort-6</strong>
                                <div class="icon-box-codes"><code>wi wi-wind-beaufort-6</code><br><code>\f0bd </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-wind-beaufort-7"></i><strong>wi-wind-beaufort-7</strong>
                                <div class="icon-box-codes"><code>wi wi-wind-beaufort-7</code><br><code>\f0be </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-wind-beaufort-8"></i><strong>wi-wind-beaufort-8</strong>
                                <div class="icon-box-codes"><code>wi wi-wind-beaufort-8</code><br><code>\f0bf </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-wind-beaufort-9"></i><strong>wi-wind-beaufort-9</strong>
                                <div class="icon-box-codes"><code>wi wi-wind-beaufort-9</code><br><code>\f0c0 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-wind-beaufort-10"></i><strong>wi-wind-beaufort-10</strong>
                                <div class="icon-box-codes"><code>wi wi-wind-beaufort-10</code><br><code>\f0c1 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-wind-beaufort-11"></i><strong>wi-wind-beaufort-11</strong>
                                <div class="icon-box-codes"><code>wi wi-wind-beaufort-11</code><br><code>\f0c2 </code></div>
                            </li>
                            <li class="icon-box" onclick="wheather_font(this)"><i
                                    class="wi wi-wind-beaufort-12"></i><strong>wi-wind-beaufort-12</strong>
                                <div class="icon-box-codes"><code>wi wi-wind-beaufort-12</code><br><code>\f0c3 </code></div>
                            </li>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wheather end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- toastify js -->
<script src="{{asset('backend/assets/vendor/notifications/toastify-js.js')}}"></script>

<!--js-->
<script src="{{asset('backend/assets/js/wheather_icon.js')}}"></script>
@endsection
