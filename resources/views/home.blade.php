@extends('index')
@section('title', '24/7 Emergency Dentist Nottingham from £49 | Dentist 111')
@section('keywords', '111 dentist, 111 emergency dentist, emergency dentist appointment, Emergency Dentist Nottingham, night and day emergency dentist nottingham, private emergency dentist, Emergency Dentist in Nottingham, emergency dentist, emergency dentist in nottingham, nottingham emergency dental service, 24 hour emergency dentist nottingham, 24 7 emergency dentist nottingham, nottingham emergency dentist, emergency dentist nottinghamshire, emergency dental nottingham, out of hours dentist, dentist same day appointment')
@section('description', 'Emergency Dentist in Nottingham – Dentist 111 offers fast, affordable 24/7 emergency dental care starting at £49. Book your appointment for immediate relief today!')

@section('content')
<main>
    <section id="home" class="slider-area fix p-relative">
        <div class="slider-active bg-custom-dark">
            <div class="single-slider d-flex slider-four slider-bg-three align-items-center">
                <div class="container">
                    <div class="row justify-content-center align-items-center pt-100 pb-100">
                        <div class="col-lg-12 col-md-12 text-center">
                            <div class="slider-content hero-section s-slider-content slider-text-2">
                                <h1>Emergency Dentist Nottingham - Appointments from £49</h1>
                                <p class="fw-bolder">Looking for an emergency dentist appointment? Dentist 111 offers 24-hour, private emergency dental care in Nottinghamshire. We provide night and day emergency dentist services, delivering reliable, immediate care. Book your appointment now for trusted emergency dentist Nottingham services.</p>
                                <div class="slider-btn mt-20">
                                    <a href="https://wa.me/{{ Helper::$admin_whatsapp_phone_number }}?text=Book Appointment for £49" class="btn ss-btn me-2" title="Book Appointment for £49 on WhatsApp" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i> Book Appointment for £49</a>
                                    <a href="tel:{{ Helper::$admin_phone_number }}" class="btn btn-outline ss-btn" title="Book Appointment Online"><i class="fas fa-phone"></i> {{ Helper::$admin_phone_number }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.services')
    <section class="about-area about-p pt-50 pb-50 p-relative fix">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="s-about-img p-relative">
                        <img src="{{ asset('img/features/emergency-dental-services-available-24-hours-in-dentist111.webp') }}" alt="Emergency Dental Services Available 24 Hours In Dentist111" title="Emergency Dental Services Available 24 Hours In Dentist111" />
                        <div class="about-text second-about">
                            <span>20</span>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content s-about-content">
                        <div class="second-title pb-25">
                            <span class="badge-text-detail">Our Story</span>
                            <h2>Emergency Dental Services Available 24/7 at Dentist 111</h2>
                        </div>
                        <p>20+ Years of Experience – Compassionate, Reliable, Immediate Care</p>
                        <p>
                            Our Nottingham clinic offers night and day emergency dentist services to meet all urgent dental needs, including late-night and weekend appointments for ultimate convenience. With over 20 years of experience, our skilled dentists across the UK provide the highest standard of care, helping you avoid long waits and get the relief you need promptly.
                        </p>
                        <p>
                            Book an emergency appointment with us today to skip extended queues and receive swift, quality treatment at your convenience.
                        </p>
                        <div class="slider-btn">
                            <a href="https://wa.me/{{ Helper::$admin_whatsapp_phone_number }}?text=Book Appointment for £49" class="btn ss-btn me-2" title="Book Appointment On Whatsapp" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i> Book Appointment On Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-area p-relative fix pt-50 pb-50">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-12">
                    <div class="section-title center-align mb-30">
                        <span class="badge-text-detail">Location</span>
                        <h2>Choose Your Local Dental Care</h2>
                        <p class="my-4">
                            At Dentist 111, we’re committed to delivering outstanding dental care across the UK, serving Nottinghamshire, Derbyshire, and Leicestershire. Our clinics are equipped with state-of-the-art technology and staffed with compassionate professionals to ensure every patient receives top-notch service, from regular checkups to emergency dental services.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row services-card services-card-330">
                <div class="col-lg-4 col-md-6">
                    <div class="single-post2 mb-30">
                        <div class="blog-content2 text-center">
                            <p class="h4-heading">Emergency Dentist Nottinghamshire</p>                                    
                            <p>Our Nottinghamshire clinics are dedicated to providing comprehensive care, including preventive, cosmetic, and emergency dental services. Whether you’re looking for a private emergency dentist, our Nottinghamshire - <a href="https://wa.me/{{ Helper::$admin_whatsapp_phone_number }}?text=Book Appointment for £49" title="Book Appointment for £49 on WhatsApp in Nottinghamshire">{{ Helper::$admin_whatsapp_phone_number }}</a> locations are here to meet your needs with accessible, friendly services.</p>
                            <a href="{{ route('emergency.dentist.county', 'nottinghamshire') }}" title="Emergency Dentist in Nottinghamshire">Emergency Dentist in Nottinghamshire</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-post2 mb-30">
                        <div class="blog-content2 text-center">                                    
                            <p class="h4-heading">Emergency Dentist Derbyshire</p>                                    
                            <p>In Derbyshire, Dentist 111 offers a full range of dental solutions, including routine cleanings, orthodontics, and 111 emergency dentist services. Our experienced team prioritizes your oral health in a comfortable environment, making it easier to achieve and maintain a healthy smile.</p>
                            <a href="{{ route('emergency.dentist.county', 'derbyshire') }}" title="Emergency Dentist in Derbyshire">Emergency Dentist in Derbyshire</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-post2 mb-30">
                        <div class="blog-content2 text-center">                                    
                            <p class="h4-heading">Emergency Dentist Leicestershire</p>                                    
                            <p class="text-center">For Leicestershire residents, Dentist 111 offers personalized care, including cosmetic procedures like teeth whitening and dental implants. Our Leicestershire - <a href="https://wa.me/{{ Helper::$admin_leicester_whatsapp_phone_number }}?text=Book Appointment for £49" title="Book Appointment for £49 on WhatsApp in Leicestershire">{{ Helper::$admin_leicester_phone_number }}</a> clinic focuses on prevention and effective treatments, helping you achieve the smile you’ve always wanted.</p>
                            <a href="{{ route('emergency.dentist.county', 'leicestershire') }}" title="Emergency Dentist in Leicestershire">Emergency Dentist in Leicestershire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pricing" class="pricing-area pb-50 fix p-relative">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-12">
                    <div class="section-title center-align mb-30 text-center">
                        <span class="badge-text-detail">Choose</span>
                        <h2>Patient Plan</h2>
                    </div>
                </div>
            </div> 
           <div class="row d-md-flex justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="pricing-box pricing-box2 mb-60">
                        <div class="recommended-ribbon"><span>Recommend</span></div>
                        <div class="row d-md-flex justify-content-center align-items-center">
                            <div class="col-12 col-md-5 bordered-bottom pb-3">
                                <div class="pricing-head mb-3">   
                                    <h3>PLAN 111</h3>  
                                    <div class="price-count">
                                        <h2>£11.99 <span>/ Monthly</span></h2>
                                    </div> 
                                </div>
                                <div class="pricing-btn text-center">
                                   <a href="https://pay.gocardless.com/BRT0003H3YQGXMZ" target="_blank" rel="noopener noreferrer" class="btn ss-btn">Join A Plan Via Dentist 111</a>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 bordered-left">
                                <div class="pricing-body mt-20 mb-30">
                                   <ul>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            1 x emergency appointment per year
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            1 x hygiene per year
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            1 x dental check up per year
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            11% discount on treatment (But they have to seen within practice hours 9-5pm)
                                        </li>
                                    </ul>
                                    <div class="appointment-alert pt-2 alert alert-info mb-0 text-center">
                                        *Treatment and x-ray not included*
                                    </div>
                                </div>  
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-area fix bg-custom-dark pt-50 pb-50">
        <div class="container mb-50 why-choose-section">
            <div class="row align-items-center"> 
                <div class="col-lg-12">
                    <div class="section-title center-align mb-30">
                        <span class="badge-text-detail">Choose</span>
                        <h2>Why Choose Dentist 111?</h2>
                    </div>
                </div>
            </div>
            <div class="row services-card services-card-210">
                <div class="col-lg-3 col-md-6">
                    <div class="single-post2 mb-30">
                        <div class="blog-content2">
                            <h4 class="text-center">Available 24/7</h4>                                    
                            <p class="text-center">Your health doesn’t keep office hours, and neither do we. Our Nottingham clinic offers 24-hour emergency services, ensuring you get prompt care when you need it.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-post2 mb-30">
                        <div class="blog-content2">                                    
                            <h4 class="text-center">Experienced Emergency Dentists</h4>                                    
                            <p class="text-center">Our team has extensive experience in handling all types of dental emergencies, from severe pain to chipped teeth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-post2 mb-30">
                        <div class="blog-content2">                                    
                            <h4 class="text-center">State-of-the-Art Facility</h4>                                    
                            <p class="text-center">Equipped with advanced technology to handle emergency dental treatments efficiently and effectively.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-post2 mb-30">
                        <div class="blog-content2">
                            <h4 class="text-center">Flexible Payment Options</h4>                                    
                            <p class="text-center">We offer flexible payment options to ensure that you can get the care you need, regardless of financial concerns.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title mb-50">
                        <h2>Frequently Asked Question</h2>
                    </div>
                    <div class="faq-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-bs-expanded="true" aria-bs-controls="collapseThree">
                                            What should I do in a dental emergency in Nottingham?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse show" aria-bs-labelledby="headingThree" data-bs-parent="#headingThree">
                                    <div class="card-body">
                                        If you’re experiencing a dental emergency in Nottingham, contact Dentist 111 for immediate assistance. Our emergency dentist services are available 24/7 to provide quick relief from pain and treatment options.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-bs-expanded="false" aria-bs-controls="collapseOne">
                                            How can I book an emergency dentist appointment?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#headingOne">
                                    <div class="card-body">
                                        To book an emergency dentist appointment, simply call our team or use our online booking system. We prioritize urgent cases, so you can expect prompt, effective care.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-bs-expanded="false" aria-bs-controls="collapseTwo">
                                            What types of dental emergencies do you treat?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#headingTwo">
                                    <div class="card-body">
                                        At Dentist 111, we handle all types of dental emergencies, including severe toothaches, broken or chipped teeth, lost fillings, and abscesses.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-bs-expanded="false" aria-bs-controls="collapseFour">
                                            Are you available for night and day emergency dental services?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#headingFour">
                                    <div class="card-body">
                                        Yes, Dentist 111 offers both night and day emergency dental services in Nottingham to ensure you get care when you need it most. 
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFourOne">
                                    <h2 class="mb-0">
                                        <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourOne" aria-bs-expanded="false" aria-bs-controls="collapseFourOne">
                                            Is there a 24-hour emergency dentist available in Nottingham?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFourOne" class="collapse" aria-labelledby="headingFourOne" data-bs-parent="#headingFourOne">
                                    <div class="card-body">
                                        Yes, our 24-hour emergency dentist service in Nottingham ensures that help is available around the clock, no matter the time of day or night. 
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFourTwo">
                                    <h2 class="mb-0">
                                        <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourTwo" aria-bs-expanded="false" aria-bs-controls="collapseFourTwo">
                                            Do you offer private emergency dentist services in Nottingham?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFourTwo" class="collapse" aria-labelledby="headingFourTwo" data-bs-parent="#headingFourTwo">
                                    <div class="card-body">
                                        Yes, we offer private emergency dental care with minimal wait times, ensuring you get quality care when you need it.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFourThree">
                                    <h2 class="mb-0">
                                        <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourThree" aria-bs-expanded="false" aria-bs-controls="collapseFourThree">
                                            Where are you located, and how can I get there?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFourThree" class="collapse" aria-labelledby="headingFourThree" data-bs-parent="#headingFourThree">
                                    <div class="card-body">
                                        We’re located in Nottingham, easily accessible for local patients. Check our contact page for directions and reach us 24/7 for emergencies.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-area p-relative fix pt-50 pb-50">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-12">
                    <div class="section-title center-align mb-30 text-center">
                        <span class="badge-text-detail">Testimonials</span>
                        <h3>What Our Clients Says</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-post2 mb-30">
                        <div class="blog-content2">                                    
                            <div class="review mb-4"><img src="{{ asset('img/testimonial/top-clients-reviews-about-dentist111-services.webp') }}" alt="Top Clients Reviews About Dentist111 Services" title="Top Clients Reviews About Dentist111 Services" /></div>
                            <p class="review-text">Excellent teeth filling at Dentist111! Impressed by the quick response through WhatsApp and professional service. Grateful!</p>
                            <div class="review-user-text">Lisa Driver</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-post2 mb-30">
                        <div class="blog-content2">                                    
                            <div class="review mb-4"><img src="{{ asset('img/testimonial/top-clients-reviews-about-dentist111-services.webp') }}" alt="Top Clients Reviews About Dentist111 Services" title="Top Clients Reviews About Dentist111 Services" /></div>
                            <p class="review-text">Grateful for the rapid response and expert care! Emergency root canal at Dentist111 clinic made a challenging situation manageable.</p>
                            <div class="review-user-text">Alexa Young</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-post2 mb-30">
                        <div class="blog-content2">                                    
                            <div class="review mb-4"><img src="{{ asset('img/testimonial/top-clients-reviews-about-dentist111-services.webp') }}" alt="Top Clients Reviews About Dentist111 Services" title="Top Clients Reviews About Dentist111 Services" /></div>
                            <p class="review-text">Thank You to Dentist111 Emergency Dental Clinic! Rapid tooth extraction resolved my issue within hours. Thank you for the speedy help!</p>
                            <div class="review-user-text">Don Francis</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-blog pb-50">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-12">
                    <div class="section-title center-align mb-30 text-center">
                        <h3>Read Our Latest Posts</h3>
                    </div>
                </div>
            </div>
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
        </div>
    </section>
</main>
@endsection

@section('scheme')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "{{ Helper::getSiteTitle() }}",
        "url": "{{ route('home') }}"
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "{{ Helper::getSiteTitle() }}",
        "alternateName": "Dentist111",
        "url": "{{ url()->current() }}",
        "logo": "{{ asset('img/logo.png') }}",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "{{ Helper::$admin_phone_number }}",
            "contactType": "customer service",
            "areaServed": "US",
            "availableLanguage": "en"
        }
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What should I do in a dental emergency in Nottingham?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "If you’re experiencing a dental emergency in Nottingham, contact Dentist 111 for immediate assistance. Our emergency dentist services are available 24/7 to provide quick relief from pain and treatment options."
                }
            },
            {
                "@type": "Question",
                "name": "How can I book an emergency dentist appointment?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "To book an emergency dentist appointment, simply call our team or use our online booking system. We prioritize urgent cases, so you can expect prompt, effective care."
                }
            },
            {
                "@type": "Question",
                "name": "What types of dental emergencies do you treat?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "At Dentist 111, we handle all types of dental emergencies, including severe toothaches, broken or chipped teeth, lost fillings, and abscesses."
                }
            },
            {
                "@type": "Question",
                "name": "Are you available for night and day emergency dental services?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Dentist 111 offers both night and day emergency dental services in Nottingham to ensure you get care when you need it most."
                }
            },
            {
                "@type": "Question",
                "name": "Is there a 24-hour emergency dentist available in Nottingham?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our 24-hour emergency dentist service in Nottingham ensures that help is available around the clock, no matter the time of day or night."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer private emergency dentist services in Nottingham?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we offer private emergency dental care with minimal wait times, ensuring you get quality care when you need it."
                }
            },
            {
                "@type": "Question",
                "name": "Where are you located, and how can I get there?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We’re located in Nottingham, easily accessible for local patients. Check our contact page for directions and reach us 24/7 for emergencies."
                }
            }
        ]
    }
</script>
@endsection