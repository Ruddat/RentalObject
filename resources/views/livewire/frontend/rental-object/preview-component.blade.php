<div class="preview-wrapper">









    <div id="wrapper">
        <div id="pagee" class="clearfix">

            <div class="flat-section-v4">
                <div class="container">
                    <div class="header-property-detail">
                        <div class="content-top d-flex justify-content-between align-items-center">
                            <h3 class="title link fw-8">Lakeview Haven, Lake Tahoe</h3>
                            <div class="box-price d-flex align-items-end">
                                <h3 class="fw-8">$250,00</h3>
                                <span class="body-1 text-variant-1">/month</span>
                            </div>
                        </div>
                        <div class="content-bottom">
                            <div class="box-left">
                                <!-- Features -->
                                <div class="info-box" x-data>
                                    <div class="label">@autotranslate("Features", app()->getLocale())</div>
                                    <ul class="meta">
                                        @if(!empty($collectedData['stepTwo']['data']['beds']))
                                            <li class="meta-item">
                                                <i class="icon icon-bed"></i>
                                                <span class="text-variant-1">@autotranslate("Beds", app()->getLocale()):</span>
                                                <span class="fw-6">{{ $collectedData['stepTwo']['data']['beds'] }}</span>
                                            </li>
                                        @endif

                                        @if(!empty($collectedData['stepTwo']['data']['baths']))
                                            <li class="meta-item">
                                                <i class="icon icon-bath"></i>
                                                <span class="text-variant-1">@autotranslate("Baths", app()->getLocale()):</span>
                                                <span class="fw-6">{{ $collectedData['stepTwo']['data']['baths'] }}</span>
                                            </li>
                                        @endif

                                        @if(!empty($collectedData['stepTwo']['data']['sqft']))
                                            <li class="meta-item">
                                                <i class="icon icon-sqft"></i>
                                                <span class="text-variant-1">@autotranslate("Sqft", app()->getLocale()):</span>
                                                <span class="fw-6">{{ $collectedData['stepTwo']['data']['sqft'] }}</span>
                                            </li>
                                        @endif
                                    </ul>
                                </div>

                                <!-- Location -->
                                @if(!empty($collectedData['stepOne']['street']) || !empty($collectedData['stepOne']['city']))
                                    <div class="info-box">
                                        <div class="label">@autotranslate("Location", app()->getLocale())</div>
                                        <p class="meta-item">
                                            <span class="icon icon-mapPin"></span>
                                            <span class="text-variant-1">
                                                {{ $collectedData['stepOne']['street'] ?? '' }}
                                                {{ !empty($collectedData['stepOne']['city']) ? ', ' . $collectedData['stepOne']['city'] : '' }}
                                            </span>
                                        </p>
                                    </div>
                                @endif
                            </div>


                            <ul class="icon-box">
                                <li><a href="#" class="item">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.75 6.1875C15.75 4.32375 14.1758 2.8125 12.234 2.8125C10.7828 2.8125 9.53625 3.657 9 4.86225C8.46375 3.657 7.21725 2.8125 5.76525 2.8125C3.825 2.8125 2.25 4.32375 2.25 6.1875C2.25 11.6025 9 15.1875 9 15.1875C9 15.1875 15.75 11.6025 15.75 6.1875Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </a></li>
                                <li><a href="#" class="item">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.625 15.75L2.25 12.375M2.25 12.375L5.625 9M2.25 12.375H12.375M12.375 2.25L15.75 5.625M15.75 5.625L12.375 9M15.75 5.625H5.625" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </a></li>
                                <li><a href="#" class="item">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.41251 8.18022C5.23091 7.85345 4.94594 7.59624 4.60234 7.44895C4.25874 7.30167 3.87596 7.27265 3.51408 7.36645C3.1522 7.46025 2.83171 7.67157 2.60293 7.96722C2.37414 8.26287 2.25 8.62613 2.25 8.99997C2.25 9.37381 2.37414 9.73706 2.60293 10.0327C2.83171 10.3284 3.1522 10.5397 3.51408 10.6335C3.87596 10.7273 4.25874 10.6983 4.60234 10.551C4.94594 10.4037 5.23091 10.1465 5.41251 9.81972M5.41251 8.18022C5.54751 8.42322 5.62476 8.70222 5.62476 8.99997C5.62476 9.29772 5.54751 9.57747 5.41251 9.81972M5.41251 8.18022L12.587 4.19472M5.41251 9.81972L12.587 13.8052M12.587 4.19472C12.6922 4.39282 12.8358 4.56797 13.0095 4.70991C13.1832 4.85186 13.3834 4.95776 13.5985 5.02143C13.8135 5.08509 14.0392 5.10523 14.2621 5.08069C14.4851 5.05614 14.7009 4.98739 14.897 4.87846C15.093 4.76953 15.2654 4.62261 15.404 4.44628C15.5427 4.26995 15.6448 4.06775 15.7043 3.85151C15.7639 3.63526 15.7798 3.40931 15.751 3.18686C15.7222 2.96442 15.6494 2.74994 15.5368 2.55597C15.3148 2.17372 14.9518 1.89382 14.5256 1.77643C14.0995 1.65904 13.6443 1.71352 13.2579 1.92818C12.8715 2.14284 12.5848 2.50053 12.4593 2.92436C12.3339 3.34819 12.3797 3.80433 12.587 4.19472ZM12.587 13.8052C12.4794 13.999 12.4109 14.2121 12.3856 14.4323C12.3603 14.6525 12.3787 14.8756 12.4396 15.0887C12.5005 15.3019 12.6028 15.5009 12.7406 15.6746C12.8784 15.8482 13.0491 15.9929 13.2429 16.1006C13.4367 16.2082 13.6498 16.2767 13.87 16.302C14.0902 16.3273 14.3133 16.3089 14.5264 16.248C14.7396 16.1871 14.9386 16.0848 15.1122 15.947C15.2858 15.8092 15.4306 15.6385 15.5383 15.4447C15.7557 15.0534 15.8087 14.5917 15.6857 14.1612C15.5627 13.7307 15.2737 13.3668 14.8824 13.1493C14.491 12.9319 14.0293 12.8789 13.5989 13.0019C13.1684 13.1249 12.8044 13.4139 12.587 13.8052Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a></li>
                                <li><a href="#" class="item">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.04 10.3718C4.86 10.3943 4.68 10.4183 4.5 10.4438M5.04 10.3718C7.66969 10.0418 10.3303 10.0418 12.96 10.3718M5.04 10.3718L4.755 13.5M12.96 10.3718C13.14 10.3943 13.32 10.4183 13.5 10.4438M12.96 10.3718L13.245 13.5L13.4167 15.3923C13.4274 15.509 13.4136 15.6267 13.3762 15.7378C13.3388 15.8489 13.2787 15.951 13.1996 16.0376C13.1206 16.1242 13.0244 16.1933 12.9172 16.2407C12.8099 16.288 12.694 16.3125 12.5767 16.3125H5.42325C4.92675 16.3125 4.53825 15.8865 4.58325 15.3923L4.755 13.5M4.755 13.5H3.9375C3.48995 13.5 3.06072 13.3222 2.74426 13.0057C2.42779 12.6893 2.25 12.2601 2.25 11.8125V7.092C2.25 6.28125 2.826 5.58075 3.62775 5.46075C4.10471 5.3894 4.58306 5.32764 5.0625 5.2755M13.2435 13.5H14.0618C14.2834 13.5001 14.5029 13.4565 14.7078 13.3718C14.9126 13.287 15.0987 13.1627 15.2555 13.006C15.4123 12.8493 15.5366 12.6632 15.6215 12.4585C15.7063 12.2537 15.75 12.0342 15.75 11.8125V7.092C15.75 6.28125 15.174 5.58075 14.3723 5.46075C13.8953 5.38941 13.4169 5.32764 12.9375 5.2755M12.9375 5.2755C10.3202 4.99073 7.67978 4.99073 5.0625 5.2755M12.9375 5.2755V2.53125C12.9375 2.0655 12.5595 1.6875 12.0938 1.6875H5.90625C5.4405 1.6875 5.0625 2.0655 5.0625 2.53125V5.2755M13.5 7.875H13.506V7.881H13.5V7.875ZM11.25 7.875H11.256V7.881H11.25V7.875Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a></li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div>



                <div class="single-property-gallery">
                    <div class="position-relative">
                        <div class="swiper sw-single">
                            <div class="swiper-wrapper">
                                @if (!empty($photos['sliderImages']))
                                    @foreach ($photos['sliderImages'] as $image)
                                        <div class="swiper-slide">
                                            <div class="image-sw-single">
                                                <img src="{{ $image }}" alt="Property Image">
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="swiper-slide">
                                        <div class="image-sw-single">
                                            <img src="{{ asset('images/no-image-available.png') }}" alt="No Image Available">
                                        </div>
                                    </div>
                                @endif
                            </div>

                        </div>
                        <div class="box-navigation">
                            <div class="navigation swiper-nav-next nav-next-single"><span class="icon icon-arr-l"></span></div>
                            <div class="navigation swiper-nav-prev nav-prev-single"><span class="icon icon-arr-r"></span></div>
                        </div>
                    </div>
                    <div class="swiper thumbs-sw-pagi">
                        <div class="swiper-wrapper">

                            @if (!empty($photos['thumbnailImages']))
                                @foreach ($photos['thumbnailImages'] as $thumbnail)
                                    <div class="swiper-slide">
                                        <div class="img-thumb-pagi">
                                            <img src="{{ $thumbnail }}" alt="images">
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="swiper-slide">
                                    <div class="img-thumb-pagi">
                                        <img src="{{ asset('images/no-image-available.png') }}" alt="No Thumbnail Available">
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>

            <section class="flat-section-v3 flat-property-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            @if(!empty($collectedData['stepTwo']['sections']))
                            @foreach($collectedData['stepTwo']['sections'] as $section)
                            @if(!empty($section['description']))
                                <div class="single-property-element single-property-desc">
                                    <h5 class="fw-6 title">{{ $section['headline'] }}</h5>

                                    <!-- Dynamische Beschreibung mit "Mehr anzeigen" -->
                                    <div x-data="{ expanded: false }" class="mt-3">
                                        <p class="text-variant-1">
                                            <span x-show="!expanded">{{ \Illuminate\Support\Str::substr($section['description'], 0, 250) }}<span x-show="!expanded && '{{ strlen($section['description']) > 250 }}'">...</span></span>
                                            <span x-show="expanded">{{ $section['description'] }}</span>
                                        </p>

                                        @if(strlen($section['description']) > 250)
                                            <button x-on:click="expanded = !expanded" class="btn btn-outline-primary btn-sm mt-2">
                                                <span x-show="!expanded" class="text">@autotranslate("View More", app()->getLocale())</span>
                                                <span x-show="expanded" class="text">@autotranslate("View Less", app()->getLocale())</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        @endif


                            <div class="single-property-element single-property-overview">
                                <h6 class="title fw-6">Overview</h6>
                                <ul class="info-box">
                                    <li class="item">
                                        <a href="#" class="box-icon w-52"><i class="icon icon-house-line"></i></a>
                                        <div class="content">
                                            <span class="label">ID:</span>
                                            <span>2297</span>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="box-icon w-52"><i class="icon icon-sliders-horizontal"></i></a>
                                        <div class="content">
                                            <span class="label">Type:</span>
                                            <span>House</span>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="box-icon w-52"><i class="icon icon-garage"></i></a>
                                        <div class="content">
                                            <span class="label">Garages:</span>
                                            <span>1</span>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="box-icon w-52"><i class="icon icon-bed1"></i></a>
                                        <div class="content">
                                            <span class="label">Bedrooms:</span>
                                            <span>2 Rooms</span>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="box-icon w-52"><i class="icon icon-bathtub"></i></a>
                                        <div class="content">
                                            <span class="label">Bathrooms:</span>
                                            <span>2 Rooms</span>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="box-icon w-52"><i class="icon icon-crop"></i></a>
                                        <div class="content">
                                            <span class="label">Land Size:</span>
                                            <span>2,000 SqFt</span>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="box-icon w-52"><i class="icon icon-hammer"></i></a>
                                        <div class="content">
                                            <span class="label">Year Built:</span>
                                            <span>2024</span>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="box-icon w-52"><i class="icon icon-ruler"></i></a>
                                        <div class="content">
                                            <span class="label">Size:</span>
                                            <span>900 SqFt</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="single-property-element single-property-video">
                                <h5 class="title fw-6">Video</h5>
                                <div class="img-video">
                                    <img src="images/banner/img-video.jpg" alt="img-video">
                                    <a href="https://youtu.be/MLpWrANjFbI" data-fancybox="gallery2" class="btn-video"> <span class="icon icon-play"></span></a>
                                </div>
                            </div>
                            <div class="single-property-element single-property-info">
                                <h5 class="title fw-6">Property Details</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="inner-box">
                                            <span class="label text-black-3">ID:</span>
                                            <div class="content text-black-3">#1234</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="inner-box">
                                            <span class="label text-black-3">Beds</span>
                                            <div class="content text-black-3">7.328</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="inner-box">
                                            <span class="label text-black-3">Price</span>
                                            <div class="content text-black-3">$7,500</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="inner-box">
                                            <span class="label text-black-3">Year built</span>
                                            <div class="content text-black-3">2024</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="inner-box">
                                            <span class="label text-black-3">Size</span>
                                            <div class="content text-black-3">150 sqft</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="inner-box">
                                            <span class="label text-black-3">Type</span>
                                            <div class="content text-black-3">Villa</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="inner-box">
                                            <span class="label text-black-3">Rooms</span>
                                            <div class="content text-black-3">9</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="inner-box">
                                            <span class="label text-black-3">Status</span>
                                            <div class="content text-black-3">For sale</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="inner-box">
                                            <span class="label text-black-3">Baths</span>
                                            <div class="content text-black-3">3</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="inner-box">
                                            <span class="label text-black-3">Garage</span>
                                            <div class="content text-black-3">1</div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="single-property-element single-property-feature">
                                <h5 class="title fw-6">@autotranslate("Amenities and features", app()->getLocale())</h5>
                                @if($attributeGroups->isNotEmpty())
                                    <div class="wrap-feature">
                                        @foreach($attributeGroups as $group)
                                            @if($group->attributes->isNotEmpty())
                                                <div class="box-feature">
                                                    <h6 class="subtitle fw-5">{{ $group->name }}</h6>
                                                    <ul>
                                                        @foreach($group->attributes as $attribute)
                                                            <li class="feature-item">
                                                                {{ $attribute->name }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @else
                                    <p>@autotranslate("No amenities and features available.", app()->getLocale())</p>
                                @endif
                            </div>



                            @if(!empty($collectedData['stepOne']['nearbyPlaces']))

                            <div class="single-property-element single-property-map">
                                <h5 class="title fw-6">@autotranslate("Map location", app()->getLocale())</h5>

                                <!-- Dynamische Google Maps Einbettung ohne API-Schlüssel -->
                                <iframe class="map"
                                    src="https://www.google.com/maps?q={{ $collectedData['stepOne']['latitude'] }},{{ $collectedData['stepOne']['longitude'] }}&hl=en&z=15&output=embed"
                                    height="478"
                                    style="border:0;"
                                    allowfullscreen
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>

                                <div class="info-map">
                                    <ul class="box-left">
                                        <li>
                                            <span class="label fw-6">@autotranslate("Address", app()->getLocale())</span>
                                            <div class="text text-variant-1">{{ $collectedData['stepOne']['street'] ?? '-' }}</div>
                                        </li>
                                        <li>
                                            <span class="label fw-6">@autotranslate("City", app()->getLocale())</span>
                                            <div class="text text-variant-1">{{ $collectedData['stepOne']['city'] ?? '-' }}</div>
                                        </li>
                                        <li>
                                            <span class="label fw-6">@autotranslate("State/county", app()->getLocale())</span>
                                            <div class="text text-variant-1">{{ $collectedData['stepOne']['state'] ?? '-' }}</div>
                                        </li>
                                    </ul>
                                    <ul class="box-right">
                                        <li>
                                            <span class="label fw-6">@autotranslate("Postal code", app()->getLocale())</span>
                                            <div class="text text-variant-1">{{ $collectedData['stepOne']['zip'] ?? '-' }}</div>
                                        </li>
                                        <li>
                                            <span class="label fw-6">@autotranslate("Country", app()->getLocale())</span>
                                            <div class="text text-variant-1">{{ $collectedData['stepOne']['country'] ?? '-' }}</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
@endif




                            <div class="single-property-element single-property-floor">
                                <h5 class="title fw-6">Floor plans</h5>
                                <ul class="box-floor" id="parent-floor">
                                    <li class="floor-item">
                                        <div class="floor-header" data-bs-target="#floor-one" data-bs-toggle="collapse" aria-expanded="false" aria-controls="floor-one" role="button">
                                            <div class="inner-left">
                                                <i class="icon icon-arr-r"></i>
                                                <span class="text-btn">First Floor</span>
                                            </div>
                                            <ul class="inner-right">
                                                <li class="d-flex align-items-center gap-8">
                                                    <i class="icon icon-bed"></i>
                                                    2 Bedroom
                                                </li>
                                                <li class="d-flex align-items-center gap-8">
                                                    <i class="icon icon-bath"></i>
                                                    2 Bathroom
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="floor-one" class="collapse show" data-bs-parent="#parent-floor">
                                            <div class="faq-body">
                                                <div class="box-img">
                                                    <img src="images/banner/floor.png" alt="img-floor">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="floor-item">
                                        <div class="floor-header collapsed" data-bs-target="#floor-two" data-bs-toggle="collapse" aria-expanded="false" aria-controls="floor-two" role="button">
                                            <div class="inner-left">
                                                <i class="icon icon-arr-r"></i>
                                                <span class="text-btn">Second Floor</span>
                                            </div>
                                            <ul class="inner-right">
                                                <li class="d-flex align-items-center gap-8">
                                                    <i class="icon icon-bed"></i>
                                                    2 Bedroom
                                                </li>
                                                <li class="d-flex align-items-center gap-8">
                                                    <i class="icon icon-bath"></i>
                                                    2 Bathroom
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="floor-two" class="collapse" data-bs-parent="#parent-floor">
                                            <div class="faq-body">
                                                <div class="box-img">
                                                    <img src="images/banner/floor.png" alt="img-floor">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="single-property-element single-property-attachments">
                                <h6 class="title fw-6">File Attachments</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="#" target="_blank" class="attachments-item">
                                            <div class="box-icon w-60">
                                                <img src="images/home/file-1.png" alt="file">
                                            </div>
                                            <span>Villa-Document.pdf</span>
                                            <i class="icon icon-download"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#" target="_blank" class="attachments-item">
                                            <div class="box-icon w-60">
                                                <img src="images/home/file-2.png" alt="file">
                                            </div>
                                            <span>Villa-Document.pdf</span>
                                            <i class="icon icon-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-property-element single-property-explore">
                                <h5 class="title fw-6">Explore Property</h5>
                                <div class="box-img">
                                    <img src="images/banner/img-explore.jpg" alt="img">
                                    <div class="box-icon">
                                        <span class="icon icon-360"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-property-element single-property-loan">
                                <h5 class="title fw-6">Loan Calculator</h5>
                                <form action="#" class="box-loan-calc">
                                    <div class="box-top">
                                        <div class="item-calc">
                                            <label for="loan1" class="label">Total Amount:</label>
                                            <input type="number" id="loan1" placeholder="10,000" class="form-control">
                                        </div>
                                        <div class="item-calc">
                                            <label for="loan2" class="label">Down Payment:</label>
                                            <input type="number" id="loan2" placeholder="3000" class="form-control">
                                        </div>
                                        <div class="item-calc">
                                            <label for="loan3" class="label">Amortization Period (months):</label>
                                            <input type="number" id="loan3" placeholder="12" class="form-control">
                                        </div>
                                        <div class="item-calc">
                                            <label for="loan4" class="label">Interest rate (%):</label>
                                            <input type="number" id="loan4" placeholder="5" class="form-control">
                                        </div>
                                    </div>
                                    <div class="box-bottom">
                                        <button class="tf-btn primary">Calculator</button>
                                        <div class="d-flex gap-4">
                                            <span class="text-btn fw-6">Monthly Payment:</span>
                                            <span class="text-btn fw-6 text-primary">$599.25</span>
                                        </div>
                                    </div>
                                </form>
                            </div>


                            <div class="single-property-element single-property-nearby">
                                <h5 class="title fw-6">@autotranslate("What’s nearby?", app()->getLocale())</h5>
                                <p>@autotranslate("Explore nearby amenities to precisely locate your property and identify surrounding conveniences, providing a comprehensive overview of the living environment and the property's convenience.", app()->getLocale())</p>
                                <div class="row box-nearby">
                                    @if(!empty($collectedData['stepOne']['nearbyPlaces']))
                                        <!-- Spalte 1 -->
                                        <div class="col-md-5">
                                            <ul class="box-left">
                                                @foreach($collectedData['stepOne']['nearbyPlaces'] as $index => $place)
                                                    @if($index % 2 === 0) <!-- Zeige die ersten 50% hier -->
                                                    <li class="item-nearby">
                                                        <span class="label">@autotranslate(ucfirst($place['type']), app()->getLocale()):</span>
                                                        <span class="fw-7">{{ number_format($place['distance'], 2) }} km</span>
                                                    </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <!-- Spalte 2 -->
                                        <div class="col-md-5">
                                            <ul class="box-right">
                                                @foreach($collectedData['stepOne']['nearbyPlaces'] as $index => $place)
                                                    @if($index % 2 !== 0) <!-- Zeige die restlichen 50% hier -->
                                                    <li class="item-nearby">
                                                        <span class="label">@autotranslate(ucfirst($place['type']), app()->getLocale()):</span>
                                                        <span class="fw-7">{{ number_format($place['distance'], 2) }} km</span>
                                                    </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    @else
                                        <p>@autotranslate("No nearby places found.", app()->getLocale())</p>
                                    @endif
                                </div>
                            </div>





                        </div>

                    </div>

                </div>

            </section>







        </div>
        <!-- /#page -->

    </div>








    <div class="preview-header">
        <h1>{{ $collectedData['stepOne']['title'] ?? 'Titel der Immobilie' }}</h1>
        <p class="property-info">
            <strong>Adresse:</strong> {{ $collectedData['stepOne']['street'] ?? 'Straße' }},
            {{ $collectedData['stepOne']['zip'] ?? 'PLZ' }} {{ $collectedData['stepOne']['city'] ?? 'Stadt' }}
        </p>
        <p><strong>Land:</strong> {{ $collectedData['stepOne']['country'] ?? 'Land' }}</p>
    </div>

    <!-- Hauptdaten -->
    <div class="property-overview">
        <h2>Übersicht</h2>
        <ul>
            <li><strong>Typ:</strong> {{ $collectedData['stepOne']['propertyTypeName'] ?? 'Nicht angegeben' }}</li>
            <li><strong>Benutzertyp:</strong> {{ $collectedData['stepOne']['userType'] ?? 'Nicht angegeben' }}</li>
            <li><strong>Transaktion:</strong> {{ $collectedData['stepOne']['transactionType'] ?? 'Nicht angegeben' }}</li>
            <li><strong>Kontakt:</strong> {{ $collectedData['stepOne']['contactDetails'] ?? 'Nicht angegeben' }}</li>
        </ul>
    </div>

    <!-- Orte in der Nähe -->
    @if(!empty($collectedData['stepOne']['nearbyPlaces']))
    <div class="nearby-places">
        <h2>Orte in der Nähe</h2>
        <ul>
            @foreach($collectedData['stepOne']['nearbyPlaces'] as $place)
            <li>
                <strong>{{ $place['name'] }}</strong> ({{ ucfirst($place['type']) }}) -
                {{ number_format($place['distance'], 2) }} km entfernt
            </li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Abschnitte -->
    @if(!empty($collectedData['stepTwo']['sections']))
    <div class="property-sections">
        <h2>Weitere Informationen</h2>
        @foreach($collectedData['stepTwo']['sections'] as $section)
        <div class="section">
            <h3>{{ $section['headline'] }}</h3>
            <p>{{ $section['description'] ?? 'Keine Beschreibung verfügbar' }}</p>
            <img src="{{ $section['backgroundImage'] }}" alt="Hintergrund: {{ $section['headline'] }}">
        </div>
        @endforeach
    </div>
    @endif

    <button class="btn btn-primary" x-on:click="isPreviewOpen = false">Schließen</button>


<style>
    .wrap-feature {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.box-feature {
    width: 30%;
    min-width: 150px;
    background: #f9f9f9;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.feature-item {
    font-size: 14px;
    line-height: 1.5;
    margin-bottom: 5px;
}



.sw-single .swiper-slide img,
.sw-thumbnails .swiper-slide img {
    width: 100%;
    border-radius: 8px;
}

.sw-thumbnails {
    margin-top: 15px;
}

.sw-thumbnails .swiper-slide {
    width: auto;
    flex-shrink: 0;
    cursor: pointer;
}

.sw-thumbnails .swiper-slide-active img {
    border: 2px solid #007bff;
}


</style>



<script>
    let mainSlider, thumbSlider;

    function initializeSwipers() {
        if (mainSlider) mainSlider.destroy();
        if (thumbSlider) thumbSlider.destroy();

        mainSlider = new Swiper('.sw-single', {
            slidesPerView: 1,
            navigation: {
                nextEl: '.swiper-nav-next',
                prevEl: '.swiper-nav-prev',
            },
        });

        thumbSlider = new Swiper('.thumbs-sw-pagi', {
            slidesPerView: 4,
            spaceBetween: 10,
            slideToClickedSlide: true,
        });

        mainSlider.controller.control = thumbSlider;
        thumbSlider.controller.control = mainSlider;
    }

    document.addEventListener('livewire:load', initializeSwipers);
    document.addEventListener('livewire:update', initializeSwipers);
</script>


</div>
