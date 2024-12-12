<div>
    @if($showSection)
    <section class="flat-section bg-primary-new">
        <div class="container">
            <div class="box-title text-center wow fadeInUp" style="visibility: visible;">
                <div class="text-subtitle text-primary">@autotranslate("Latest News", app()->getLocale())</div>
                <h3 class="title mt-4">@autotranslate("From Our Blog", app()->getLocale())</h3>
            </div>
            <div class="swiper tf-sw-latest wow fadeInUp" data-wow-delay=".2s" data-preview="3" data-tablet="2" data-mobile-sm="2" data-mobile="1" data-space-lg="30" data-space-md="15" data-space="15">
                <div class="swiper-wrapper">
                    @foreach ($blogs as $blog)
                        <div class="swiper-slide">
                            <a href="{{ route('blog-details-manager', ['postId' => $blog->id]) }}" class="flat-blog-item hover-img">
                                <div class="img-style">
                                    <img class="lazyload" data-src="{{ Storage::url($blog->image_small) ?? '/default-thumbnail.jpg' }}"
                                         src="{{ Storage::url($blog->image_thumbnail) ?? '/default-thumbnail.jpg' }}"
                                         alt="{{ $blog->title }}">
                                         <span class="date-post">
                                            {{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('F d, Y') : 'Not Published' }}
                                        </span>
                                    </div>
                                <div class="content-box">
                                    <div class="post-author">
                                        <span class="fw-6">{{ $blog->author }}</span>
                                        <span>{{ $blog->category->name ?? 'Uncategorized' }}</span>
                                    </div>
                                    <h5 class="title link">{{ $blog->short_title ?? $blog->title }}</h5>
                                    <p class="description">{!! Str::limit($blog->content, 100) !!}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="sw-pagination sw-pagination-latest text-center"></div>
            </div>
        </div>
    </section>
    @endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.tf-sw-latest', {
        slidesPerView: 3, // Anzahl der sichtbaren Slides
        spaceBetween: 30, // Abstand zwischen den Slides
        breakpoints: {
            1024: { slidesPerView: 3, spaceBetween: 30 }, // Desktop
            768: { slidesPerView: 2, spaceBetween: 15 }, // Tablet
            576: { slidesPerView: 2, spaceBetween: 15 }, // Mobile small
            0: { slidesPerView: 1, spaceBetween: 10 }, // Mobile
        },
        pagination: {
            el: '.sw-pagination-latest',
            clickable: true,
        },
    });
});
</script>



</div>
