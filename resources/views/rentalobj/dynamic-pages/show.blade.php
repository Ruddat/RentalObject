<?php $page = 'start-page'; ?>
@extends('rentalobj.layout.mainlayout')
@section('content')
    <!-- Page Title -->
    <section class="flat-title-page" style="background-image: url('/images/page-title/page-title-7.jpg');">
        <div class="container">
            <div class="breadcrumb-content">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}" class="text-white">Home</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="flat-section flat-wrapper-privacy">
        <div class="container">
            @foreach ($blocks as $block)
                @if ($block->type === 'text')
                    <div class="block block-text">
                        <h2>{{ $block->title }}</h2>
                        <div class="content">
                            {!! $block->content !!}
                        </div>
                    </div>
                @elseif ($block->type === 'pricing')
                    @php $pricingItems = json_decode($block->content, true); @endphp
                    <section class="flat-section flat-pricing">
                        <div class="container">
                            <div class="box-title text-center wow fadeInUpSmall animated animated" data-wow-delay=".2s" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 0.2s;">
                                <div class="text-subtitle text-primary">Pricing</div>
                                <h3 class="title mt-4">{{ $block->title }}</h3>
                            </div>

                            <div class="row">
                                @foreach ($pricingItems as $item)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="box-pricing">

                                            <div class="box price d-flex align-items-end">
                                                <h3>{{ $item['price'] }}</h3>
                                                <span class="body-2 text-variant-1">{{ $item['duration'] }}</span>
                                            </div>

                                            <div class="box box-title-price">
                                                <h5 class="title">{{ $item['title'] }}</h5>
                                                <p class="desc">{{ $item['description'] }}</p>
                                            </div>

                                            <ul class="box list-price">
                                                @foreach ($item['features'] as $feature)
                                                <li class="item">
                                                    <span class="check-icon icon-tick2"></span>
                                                    {{ $feature }}
                                                </li>
                                                @endforeach
                                            </ul>
                                            <div class="box">
                                                <a href="#" class="tf-btn btn-view primary size-1 hover-btn-view">View All Properties <span class="icon icon-arrow-right2"></span></a>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @elseif ($block->type === 'accordion')
                    @php $accordionItems = json_decode($block->content, true); @endphp
                    <section class="flat-section">
                        <div class="container">
                            <div class="tf-faq">
                                <div class="box-title style-1 text-center wow fadeInUpSmall animated animated" data-wow-delay=".2s" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 0.2s;">
                                    <div class="text-subtitle text-primary"></div>
                                    <h3 class="title mt-4">{{ $block->title }}</h3>
                                </div>
                                <ul class="box-faq" id="wrapper-faq-{{ $block->id }}">
                                    @foreach ($accordionItems as $index => $item)
                                        <li class="faq-item">
                                            <a href="#accordion-faq-{{ $block->id }}-{{ $index }}" class="faq-header collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="accordion-faq-{{ $block->id }}-{{ $index }}">
                                                {{ $item['question'] }}
                                            </a>
                                            <div id="accordion-faq-{{ $block->id }}-{{ $index }}" class="collapse" data-bs-parent="#wrapper-faq-{{ $block->id }}">
                                                <p class="faq-body">{{ $item['answer'] }}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </section>
                @elseif ($block->type === 'testimonial')
                    @php $testimonialItems = json_decode($block->content, true); @endphp
                    <section class="flat-section bg-primary-new flat-testimonial">
                        <div class="container">
                            <div class="box-title text-center">
                                <h3>{{ $block->title }}</h3>
                            </div>
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($testimonialItems as $item)
                                        <div class="swiper-slide">
                                            <div class="box-tes-item">
                                                <span class="icon icon-quote"></span>
                                                <p class="note">{{ $item['quote'] }}</p>
                                                <div class="box-avt d-flex align-items-center gap-12">
                                                    <div class="avatar avt-60 round">
                                                        <img src="{{ $item['avatar'] }}" alt="avatar">
                                                    </div>
                                                    <div class="info">
                                                        <h6>{{ $item['author'] }}</h6>
                                                        <p>{{ $item['position'] }}</p>
                                                        <ul class="list-star">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <li class="icon {{ $i <= $item['rating'] ? 'icon-star' : 'icon-star disable' }}"></li>
                                                            @endfor
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            @endforeach
        </div>
    </section>



    <!-- Flat Footer -->
    @include('rentalobj.layout.partials.footer')


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


@endsection
