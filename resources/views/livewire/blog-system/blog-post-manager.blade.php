<div>
    <section class="flat-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="flat-blog-list">
                        <!-- Liste der Blog Posts -->
                        @foreach($posts as $post)
                            <div class="flat-blog-item">
                                <a href="{{ route('blog.show', $post->slug) }}" class="img-style">
                                    <img src="{{ Storage::url($post->image_large) }}" alt="{{ $post->title }}">
                                </a>
                                <div class="content-box">
                                    <h5 class="title"><a href="{{ route('blog.show', $post->slug) }}" class="link">{{ $post->title }}</a></h5>
                                    <div class="post-author">
                                        <span>{{ $post->author }}</span>
                                        <span>{{ $post->created_at->format('F j, Y') }}</span>
                                    </div>
                                    <div class="blog-content">
                                        <p>{!! limitHtmlContentWithFormatting($post->content, 100) !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{ $posts->links() }}
                    </div>
                </div>

                <!-- Sidebar mit Filter und Reset Button -->
                <div class="col-lg-4">
                    <aside class="sidebar-blog fixed-sidebar">
                        <div class="widget-search">
                            <h5 class="text-black-2 text-capitalize">Search Blog</h5>
                            <div class="search-box">
                                <input wire:model.debounce.500ms.live="search" class="search-field" type="text" placeholder="Search...">
                                <a href="#" class="icon icon-search"><i class="fas fa-search"></i></a>
                            </div>
                        </div>

                        <div class="widget-box categories">
                            <h5 class="text-black-2 text-capitalize">Categories</h5>
                            <ul class="mt-20">

                                <!-- BlogPostManager Blade -->
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('blog-grid-manager', ['categoryId' => $category->id]) }}" class="categories-item link">
                                        <span>{{ $category->name }}</span>
                                        <span>({{ $category->posts_count }})</span>
                                    </a>
                                </li>
                            @endforeach
                            </ul>
                        </div>

                        <div class="widget-box recent">
                            <h5 class="text-black-2 text-capitalize">Featured listings</h5>
                            <ul>
                                @foreach($featuredPosts as $featuredPost)
                                    <li>
                                        <div class="recent-post-item not-overlay hover-img">
                                            <a href="{{ route('blog.show', $featuredPost->slug) }}" class="img-style">
                                                <img src="{{ Storage::url($featuredPost->image_thumbnail) }}" alt="{{ $featuredPost->title }} - post-recent">
                                            </a>
                                            <div class="content">
                                                <a href="{{ route('blog.show', $featuredPost->slug) }}" class="title link">{{ $featuredPost->title }}</a>
                                                <div class="subtitle">
                                                    <span>{{ $featuredPost->created_at->format('F j, Y') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget-box newsletter">
                            <h5 class="text-black-2 text-capitalize">Join our newsletter</h5>
                            <p class="caption-2 text-variant-1 mt-20">Signup to be the first to hear about exclusive deals, special offers and upcoming collections</p>
                            <div class="search-box mt-20">
                                <input wire:model="newsletterEmail" class="search-field" type="text" placeholder="Enter your email">
                                <a href="#" wire:click.prevent="subscribeNewsletter" class="icon">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.00035 7.99998L2.17969 2.08398C6.53489 3.35043 10.6419 5.35118 14.3237 7.99998C10.6422 10.6492 6.53541 12.6504 2.18035 13.9173L4.00035 7.99998ZM4.00035 7.99998H9.00035" stroke="#1563DF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="widget-box tag">
                            <h5 class="text-black-2 text-capitalize">Popular Tags</h5>
                            <ul class="mt-20">
                                @foreach($tags as $tag)
                                    <li><a href="#" wire:click.prevent="$set('tagFilter', {{ $tag->id }})" class="tag-item">{{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Reset Filter Button -->
                        <div class="widget-box">
                            <button wire:click="resetFilters" class="btn btn-secondary mt-3">Reset Filters</button>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>



    <style>
        /* Scoped styles for blog content */
        .blog-content strong {
            font-weight: bold;
            color: #333;
        }

        /* Scoped style for blockquote */
        .blog-content blockquote {
            font-style: italic;
            color: #555;
            border-left: 4px solid #b53717;
            padding-left: 15px;
            margin: 15px 0;
            background-color: #f8f8f8;
            padding: 10px;
            border-radius: 4px;
        }

        /* Scoped style for unordered list */
        .blog-content ul {
            margin-left: 20px;
            list-style-type: disc;
        }

        .blog-content ul li {
            margin-bottom: 5px;
            list-style-type: disc;
        }

        /* Scoped style for ordered list */
        .blog-content ol {
            margin-left: 20px;
            list-style-type: decimal;
        }

        .blog-content ol li {
            margin-bottom: 5px;
            list-style-type: decimal;
        }

        /* Scoped style for preformatted text */
        .blog-content pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
            color: #333;
            font-family: 'Courier New', Courier, monospace;
            margin: 15px 0;
        }

        /* Scoped styles for gallery or attachment divs */
        .blog-content .attachment-gallery {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .blog-content .attachment-gallery img {
            max-width: 100px;
            border-radius: 4px;
        }
        </style>


</div>

