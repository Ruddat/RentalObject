<!-- resources/views/livewire/blog-system/blog-grid-manager.blade.php -->
<div>
    <section class="flat-section">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('blog.show', $post->slug) }}" class="flat-blog-item hover-img">
                            <div class="img-style">
                                <img class="lazyload" src="{{ Storage::url($post->image_grid) }}" alt="{{ $post->title }}">
                                <span class="date-post">{{ $post->created_at->format('F d, Y') }}</span>
                            </div>
                            <div class="content-box">
                                <div class="post-author">
                                    <span class="fw-6">{{ $post->author }}</span>
                                    <span>{{ $post->category->name ?? 'Uncategorized' }}</span>
                                </div>
                                <h5 class="title link">{{ $post->title }}</h5>
                                <p class="description">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach

                <div class="col-12 text-center pt-26 line-t">
                    {{ $posts->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
</div>

