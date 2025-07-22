@extends('index')
@section('title', isset($tag) && !empty($tag->meta_title) ? $tag->meta_title : 'Dental Blog - Expert Tips & Advice | Dentist 111')
@section('description', isset($tag) && !empty($tag->meta_description) ? $tag->meta_description : 'Stay updated with expert dental care tips, oral hygiene advice, and the latest news in dentistry. Explore our blog at Dentist 111 for a healthier smile.')

@section('content')
<section class="breadcrumb-area d-flex align-items-center bg-custom-dark">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 col-lg-12 text-center">
                <div class="breadcrumb-wrap">
                    <div class="breadcrumb-title">
                        <h1>Latest Blog</h1>    
                        <p class="my-4 text-white">
                            Explore our latest blogs, where we share expert insights and helpful tips on maintaining a healthy smile. From dental care advice to the latest industry trends, our blogs are designed to keep you informed and your oral health in top shape. Explore our posts to discover valuable information for all your dental needs.
                        </p>
                        <div class="slider-btn">
                            <a href="https://wa.me/{{ Helper::$admin_whatsapp_phone_number }}?text=Book Appointment for £49" class="btn ss-btn me-2" title="Book Emergency Dentist Appointment for £49" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i> Book Appointment for £49</a>
                            <a href="tel:{{ Helper::$admin_phone_number }}" class="btn btn-outline ss-btn" title="Book Emergency Dentist Appointment Online"><i class="fas fa-phone-alt"></i> {{ Helper::$admin_phone_number }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="inner-blog pt-50 pb-50">
    <div class="container">
        <div class="row">
            @if(!$posts->isEmpty())
                @foreach($posts as $post)
                    <div class="col-sm-4 col-md-4 col-lg-4 mb-20">
                        <div class="bsingle__post">
                            <div class="bsingle__post-thumb">
                                @if(!empty($post->featured_image))
                                <a href="{{ route('blog.detail', $post->slug) }}">
                                    <img src="{{ asset($post->featured_image) }}" alt="{{ $post->featured_image_alt_text }}" title="{{ $post->title }}">
                                </a>
                                @endif
                            </div>
                            <div class="bsingle__content">
                                <div class="meta-info">
                                    <ul>
                                        <li>{{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}</li>
                                    </ul>
                                </div>
                                <a href="{{ route('blog.detail', $post->slug) }}" class="post-index-title" title="{{ $post->title }}">{{ $post->title }}</a>
                               @if(!empty($post->excerpt))
                                    <p>{{ $post->excerpt }}</p>
                                @endif
                                <div class="blog__btn">
                                    <a href="{{ route('blog.detail', $post->slug) }}" class="post-read-more-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-sm-12">
                    <h3 class="text-center">No post exist.</h3>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex justify-content-center">
                    @if (!$posts->onFirstPage())
                        <div class="button-wrapper button-wrapper-end">
                            <a href="{{ $posts->previousPageUrl() }}" class="button-a">
                                <span class="gb-icon">
                                    <svg aria-hidden="true" height="1em" width="1em" viewBox="0 0 256 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill="currentColor"
                                            d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"
                                        ></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    @endif
                    @if ($posts->hasMorePages())
                        <div class="button-wrapper button-wrapper-start">
                            <a href="{{ $posts->nextPageUrl() }}" class="btn-a">
                                <span class="gb-icon">
                                    <svg aria-hidden="true" height="1em" width="1em" viewBox="0 0 256 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill="currentColor"
                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"
                                        ></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection