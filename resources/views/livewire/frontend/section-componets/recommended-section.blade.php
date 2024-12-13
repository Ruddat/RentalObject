<div>
    @if($displayBlock)
        <!-- Recommended -->
        <section class="flat-section flat-recommended">
            <div class="container">
                <div class="box-title text-center wow fadeInUp">
                    <div class="text-subtitle text-primary">
                        @autotranslate("Featured Properties", app()->getLocale())
                    </div>
                    <h3 class="mt-4 title">Recommended For You</h3>
                </div>
                <div class="flat-tab-recommended flat-animate-tab wow fadeInUp" data-wow-delay=".2s">
                    <!-- Dynamische Tabs für Kategorien -->
                    <ul class="nav-tab-recommended justify-content-md-center" role="tablist">
                        <!-- Tab für "Alle" -->
                        <li class="nav-tab-item" role="presentation">
                            <a href="#tab-all" class="nav-link-item active" data-bs-toggle="tab">
                                @autotranslate("All", app()->getLocale())
                            </a>
                        </li>
                        @foreach($propertyTypes as $type)
                            <li class="nav-tab-item" role="presentation">
                                <a href="#tab-{{ $type->id }}" class="nav-link-item" data-bs-toggle="tab">
                                    {{ $type->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        <!-- Tab-Content für "Alle" -->
                        <div class="tab-pane fade show active" id="tab-all" role="tabpanel">
                            <div class="row">
                                @foreach($allProperties as $property)
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="#" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload"
                                                            data-src="{{ $property->getMediumPhotoPath() }}"
                                                            src="{{ $property->getMediumPhotoPath() }}"
                                                            alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">
                                                                {{ ucfirst($property->transaction_type) }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom">
                                                        {{ $property->address }}
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="archive-bottom">
                                                <h6>{{ $property->title }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Dynamischer Tab-Content für jede Kategorie -->
                        @foreach($propertyTypes as $type)
                            <div class="tab-pane fade" id="tab-{{ $type->id }}" role="tabpanel">
                                <div class="row">
                                    @foreach($type->properties as $property)
                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="homelengo-box">
                                                <div class="archive-top">
                                                    <a href="#" class="images-group">
                                                        <div class="images-style">
                                                            <img class="lazyload"
                                                                data-src="{{ $property->getMediumPhotoPath() }}"
                                                                src="{{ $property->getMediumPhotoPath() }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="top">
                                                            <ul class="d-flex gap-6">
                                                                <li class="flag-tag primary">Featured</li>
                                                                <li class="flag-tag style-1">
                                                                    {{ ucfirst($property->transaction_type) }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="bottom">
                                                            {{ $property->address }}
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="archive-bottom">
                                                    <h6>{{ $property->title }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Recommended -->
    @endif
</div>
