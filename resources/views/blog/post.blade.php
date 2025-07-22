@extends('index')
@section('title', $post->title)
@section('keywords', $post->meta_keywords)
@section('description', $post->meta_description)
@section('image', !empty($post->featured_image) ? asset($post->featured_image) : '')
@section('image_alt', $post->featured_image_alt_text)

@section('content')
<section class="inner-blog b-details-p pb-30">
    <div class="container">
        <div class="row mt-45">
            <div class="col-lg-8">
                <div class="blog-details-wrap">
                    <div class="mb-30">
                        <img class="blog-detail-img" src="{{ asset($post->featured_image) }}" alt="{{ $post->featured_image_alt_text }}" title="{{ $post->title }}">
                    </div>
                    <div class="details__content pb-30">
                        <h1>{{ $post->title }}</h1>
                        <div class="meta-info">
                            <ul>
                                <li><i class="fa-regular fa-calendar"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}</li>
                            </ul>
                        </div>
                        @include('blog.detail.post-' . $post->id, ['post' => $post])
                    </div>
                    @if(!empty($next_post) || !empty($previous_post))
                    <div class="related__post mt-45 mb-85">
                        <div class="post-title">
                            <h4>Related Post</h4>
                        </div>
                        <div class="row">
                            @if(!empty($previous_post))
                            <div class="col-md-6">
                                <div class="related-post-wrap mb-30">
                                    <div class="post-thumb">
                                        <img src="{{ asset($previous_post->featured_image) }}" alt="{{ $previous_post->featured_image_alt_text }}" title="{{ $previous_post->title }}">
                                    </div>
                                    <div class="rp__content">
                                        <a href="{{ route('blog.detail', $previous_post->slug) }}" title="{{ $previous_post->title }}">{{ $previous_post->title }}</a>
                                        @if(!empty($previous_post->excerpt))
                                            <p>{{ $previous_post->excerpt }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(!empty($next_post))
                            <div class="col-md-6">
                                <div class="related-post-wrap mb-30">
                                    <div class="post-thumb">
                                        <img src="{{ asset($next_post->featured_image) }}" alt="{{ $next_post->featured_image_alt_text }}" title="{{ $next_post->title }}">
                                    </div>
                                    <div class="rp__content">
                                        <a href="{{ route('blog.detail', $next_post->slug) }}" title="{{ $next_post->title }}">{{ $next_post->title }}</a>
                                        @if(!empty($next_post->excerpt))
                                            <p>{{ $next_post->excerpt }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
               <aside class="sidebar-widget">
                  <section id="search-3" class="widget widget_search">
                     <h2 class="widget-title">Search</h2>
                     <form role="search" method="GET" class="search-form" action="{{ route('search') }}">
                        <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="keyword" required />
                        </label>
                        <input type="submit" class="search-submit" value="Search" />
                     </form>
                  </section>
                  <section id="custom_html-5" class="widget_text widget widget_custom_html">
                     <h2 class="widget-title">Follow Us</h2>
                     <div class="textwidget custom-html-widget">
                        <div class="widget-social">
                           <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.detail', $post->slug) }}" target="_blank" rel="noopener noreferrer" title="Dentist111 Facebook Page"><i class="fab fa-facebook-f"></i></a>
                           <a href="https://www.instagram.com/dentist__111/" target="_blank" rel="noopener noreferrer" title="Dentist111 Instagram"><i class="fab fa-instagram"></i></a>
                           <a href="https://api.whatsapp.com/send?text={{ route('blog.detail', $post->slug) }}" title="Dentist111 WhatsApp Number" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
                        </div>
                     </div>
                  </section>
                  @if(!$recent_post->isEmpty())
                  <section id="recent-posts-4" class="widget widget_recent_entries">
                     <h2 class="widget-title">Recent Posts</h2>
                     <ul>
                        @foreach($recent_post as $post)
                        <li>
                           <a href="{{ route('blog.detail', $post->slug) }}" title="{{ $post->title }}">{{ $post->title }} </a>
                           <span class="post-date"> {{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}</span>
                        </li>
                        @endforeach
                     </ul>
                  </section>
                  @endif
                  @if(!$tags->isEmpty())
                  <section id="tag_cloud-1" class="widget widget_tag_cloud">
                     <h2 class="widget-title">Tag</h2>
                     <div class="tagcloud">
                        @foreach($tags as $tag)
                         <a href="{{ route('blog', $tag->slug) }}" class="tag-cloud-link tag-link-28 tag-link-position-1" style="font-size: 8pt;" aria-label="{{ $tag->title }}">{{ $tag->title }}</a>
                         @endforeach
                     </div>
                  </section>
                  @endif
               </aside>
            </div>
        </div>
    </div>
</section>
@endsection