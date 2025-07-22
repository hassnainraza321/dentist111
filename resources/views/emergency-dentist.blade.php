@extends('index')
@if(!empty($location))
    @section('title', 'Emergency Dentist ' . str_replace('in ', '', $location) . ' | Trusted ' . str_replace('in ', '', $location) . ' Dentist - Dentist 111 ')
@else
    @section('title', 'Emergency Dentist for Same-Day Appointments')
@endif
@section('keywords', 'dental abscess, lost filling, extraction, dental pain, broken tooth, wisdom tooth pain, broken denture, toothache')
@section('description', 'Looking for a reliable emergency dentist ' . $location . '? Dentist 111 offers comprehensive dental services for urgent care.  Book your appointment today!')

@section('content')
<section class="breadcrumb-area d-flex align-items-center bg-custom-dark">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 col-lg-12 text-center">
                <div class="breadcrumb-wrap">
                    <div class="breadcrumb-title">
                        <h1>Emergency Dentist {{ str_replace('in ', '', $location) }} -  Trusted {{ str_replace('in ', '', $location) }} Dentist</h1>    
                        <p class="my-4 text-white">
                            Looking for a reliable {{ str_replace('in ', '', $location) }} dentist? Dentist 111 offers prompt, private emergency dental care {{ $location }}. Our {{ str_replace('in ', '', $location) }} Dental Clinic is equipped to handle urgent needs, providing compassionate service for patients of all ages. From general dentistry to emergency services, we are recognized as one of the best dental clinics {{ $location }}. Book your appointment now for trusted, immediate care from the leading emergency dentist {{ $location }}.
                        </p>
                        <div class="slider-btn">
                            <a href="https://wa.me/{{ $is_from_leicestershire ? Helper::$admin_leicester_whatsapp_phone_number : Helper::$admin_whatsapp_phone_number }}?text=Book Appointment for £49" class="btn ss-btn me-2" title="Book Emergency Dentist Appointment for £49 {{ $location }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i> Book Appointment for £49</a>     
                            <a href="tel:{{ $is_from_leicestershire ? Helper::$admin_leicester_phone_number : Helper::$admin_phone_number }}" class="btn btn-outline ss-btn" title="Book Emergency Dentist Appointment Online {{ $location }}"><i class="fas fa-phone-alt"></i> {{ $is_from_leicestershire ? Helper::$admin_leicester_phone_number : Helper::$admin_phone_number }}</a>
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
                    <span class="badge-text-detail">Services</span>
                    <h2>Why Choose Dentist111 {{ $location }} for Your Dental Emergency?</h2>
                    <p class="my-4 text-center">
                        When it comes to dental emergencies, you can’t afford to wait. Whether it's a severe toothache, a <a href="{{ route('lost.filling') }}" title="Lost Filling Services Available 24 Hours In Dentist111">lost filling</a>, or even a broken denture, the longer you delay, the worse it could become. At <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">Dentist111</a> {{ $location }}, we understand the importance of getting quick, professional treatment, and that’s exactly what we offer. Here’s why our clinic is the best choice:
                    </p>
                </div>
            </div>
        </div>
        <div class="row services-card">
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">
                        <h4 class="text-center">Immediate Care for Dental Pain</h4>                                    
                        <p class="text-center">Dental pain can be unbearable. If you’re dealing with a sudden, sharp toothache or experiencing wisdom tooth pain, you need relief—fast. At Dentist111 {{ $location }}, we offer same-day appointments, so you don’t have to wait to feel better. Our emergency team is trained to assess the cause of your pain and provide the most effective treatment to alleviate it right away.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">                                    
                        <h4 class="text-center">Expert Treatment for Dental Abscesses</h4>                                    
                        <p class="text-center">A dental abscess is a serious condition that requires urgent care. If you’re experiencing intense pain, swelling, or fever, you may have an infection that could spread if not treated quickly. Our emergency dentists at <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">Dentist111</a> {{ $location }} will promptly diagnose the problem, drain the abscess, and prescribe the necessary antibiotics to ensure the infection doesn’t worsen.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">                                    
                        <h4 class="text-center">Broken Teeth? We’ve Got You Covered</h4>                                    
                        <p class="text-center">A broken tooth can happen at any time—whether it’s from an accident or biting down on something hard. When this happens, you don’t just need quick treatment; you need expert care. At Dentist111 {{ $location }}, we provide immediate solutions to restore your broken tooth. Whether you need bonding, a crown, or other treatments, our experienced dentists will have your smile looking good as new in no time.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">
                        <h4 class="text-center">Lost Filling? No Problem!</h4>                                    
                        <p class="text-center">Losing a filling can leave your tooth vulnerable to further decay and infection. At Dentist111 {{ $location }}, we offer emergency services to replace lost fillings quickly. Our team uses high-quality materials to restore your tooth and ensure it’s protected from future damage. You’ll leave our office with peace of mind, knowing your tooth is safe.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">                                    
                        <h4 class="text-center">Out-of-Hours Services for Your Convenience</h4>                                    
                        <p class="text-center">Emergencies don’t follow a 9-to-5 schedule. That’s why Dentist111 {{ $location }} provides out-of-hours dentist services to ensure you can get help when you need it most. Whether it’s late at night, a weekend, or even a holiday, our team is on hand to deliver the care you need, right when you need it. Our priority is your comfort and health, so you’ll never be left waiting for urgent care.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">                                    
                        <h4 class="text-center">Same-Day Appointments for Immediate Relief</h4>                                    
                        <p class="text-center">At Dentist111 {{ $location }}, we understand the stress that comes with waiting for treatment, especially when you're in pain. We prioritize emergency cases with same-day appointments, ensuring you get prompt attention. From relieving your toothache to treating your wisdom tooth pain, our emergency team will have you feeling better in no time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="call-area bg-custom-dark-image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="single-counter-img">
                    <img src="{{ asset('img/bg/book-emergency-dental-appointment-now.webp') }}" alt="Book Emergency Dental Appointment {{ $location }}" title="Book Emergency Dental Appointment {{ $location }}" class="img" />
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="call-text">
                    <span class="badge-text-detail">Book Emergency Dental Appointment Now</span>
                    <h2>We Will Get You Out Of Pain And Back To Work</h2>
                    <div class="slider-btn">
                        <a href="{{ route('contact.us') }}" class="btn ss-btn me-2" title="Book Emergency Dental Appointment {{ $location }}">Contact Now</a>
                        <a href="tel:{{ $is_from_leicestershire ? Helper::$admin_leicester_phone_number : Helper::$admin_phone_number }}" class="btn btn-outline ss-btn" title="Book Emergency Dentist Appointment Online {{ $location }}"><i class="fas fa-phone-alt"></i> {{ $is_from_leicestershire ? Helper::$admin_leicester_phone_number : Helper::$admin_phone_number }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="about-area about-p pb-50 pt-50 p-relative fix">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="second-title pb-25">
                <span class="badge-text-detail">Our Story</span>
                <h2>Emergency Dental Treatments at Dentist111 {{ $location }}</h2>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="about-content s-about-content wow fadeInRight animated" data-animation="fadeInRight" data-delay=".4s">
                    <p>
                        At <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">Dentist111</a> {{ $location }}, we are fully equipped to handle all kinds of dental emergencies. Here’s a look at the common treatments we offer to get you back on track:
                    </p>
                    <ul>
                        <li class="d-block">
                            <strong>Emergency Tooth Extractions: </strong>
                            When a tooth is beyond repair, an emergency extraction may be necessary. Our skilled dentists perform extractions with care, ensuring you experience minimal discomfort and recover quickly.
                        </li>
                        <li class="d-block">
                            <strong>Root Canals: </strong>
                            If a tooth is infected or has extensive decay, we may need to perform a root canal to save it. At Dentist111 {{ $location }}, we make sure this procedure is as painless and efficient as possible, preserving your tooth while relieving pain.
                        </li>
                        <li class="d-block">
                            <strong>Restorations for Broken or Chipped Teeth: </strong>
                            We offer a variety of restoration options for damaged teeth, from dental bonding to crowns. Our goal is to restore the function and appearance of your tooth.
                        </li>
                        <li class="d-block">
                            <strong>Lost Filling or Crown Replacements: </strong>
                            A lost filling or crown can leave your tooth vulnerable to damage. We offer fast replacements using durable, high-quality materials to protect your tooth and restore your smile.
                        </li>
                    </ul>
                </div>
                <div class="slider-btn mt-20 mb-2">
                    <a href="https://wa.me/{{ $is_from_leicestershire ? Helper::$admin_leicester_whatsapp_phone_number : Helper::$admin_whatsapp_phone_number }}?text=Book Appointment for £49" class="btn ss-btn me-2" title="Book Emergency Dentist Appointment for £49 {{ $location }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i> Book Appointment for £49</a>
                    <a href="tel:{{ $is_from_leicestershire ? Helper::$admin_leicester_phone_number : Helper::$admin_phone_number }}" class="btn btn-outline ss-btn" title="Book Emergency Dentist Appointment Online {{ $location }}"><i class="fas fa-phone-alt"></i> {{ $is_from_leicestershire ? Helper::$admin_leicester_phone_number : Helper::$admin_phone_number }}</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="s-about-img p-relative wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                    <img src="{{ asset('img/gallery/lost-filling-or-crown-replacements.webp') }}" alt="Lost Filling or Crown Replacements {{ $location }}" title="Lost Filling or Crown Replacements {{ $location }}" class="mx-auto d-block" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-area about-p pt-50 pb-50 p-relative fix">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="second-title pb-25">
                <h2>How to Avoid Dental Emergencies</h2>
                <p class="my-2">
                    While we’re here to help in any dental emergency, we also encourage preventive care to avoid them altogether. Regular checkups at Dentist111 {{ $location }} can catch small issues before they become big problems. We’ll provide personalized care and advice to keep your teeth healthy, reducing the risk of a toothache, broken tooth, or other emergency situations.
                </p>
                <p class="my-2">
                    Here are some simple tips to help avoid dental emergencies:
                </p>
            </div>
            <div class="service-detail px-2 m-0">
                <div class="product-info-tabs">
                    <div class="prod-tabs tabs-box">
                        <ul class="tab-btns tab-buttons nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-btn active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Maintain a Good Oral Hygiene Routine</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-btn" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Visit Dentist111 Regularly</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-btn" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Wear a Mouthguard</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-btn" id="contact-tab" data-bs-toggle="tab" data-bs-target="#product" type="button" role="tab" aria-controls="product" aria-selected="false">Avoid Hard Foods</button>
                            </li>
                        </ul>
                        <div class="tabs-content tab-content">
                            <div class="tab tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="content">
                                    <p>Practising proper oral hygiene is the foundation of preventing dental emergencies. Brushing your teeth twice daily with fluoride toothpaste removes plaque and food particles, which helps gum disease prevent cavities and other oral health issues. Flossing daily is equally important as it cleans between your teeth and along the gum line, where a toothbrush can't reach, helping to prevent gum disease and tooth decay. Incorporating mouthwash into your routine adds an extra layer of protection by killing bacteria, freshening breath, and reaching areas that brushing and flossing might miss. Keeping gums healthy and your teeth with these habits significantly reduces the chances of developing sudden dental problems like toothaches or infections that could require emergency care.</p>
                                </div>
                            </div>
                            <div class="tab tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="content">
                                    <p>Routine dental checkups at <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">Dentist111</a> {{ $location }} are crucial in maintaining long-term oral health and preventing emergencies. Regular visits allow our experienced dentists to perform thorough cleanings and catch potential issues before they become severe. For instance, a minor cavity detected during a checkup can be easily treated with a filling, preventing it from growing into a painful dental abscess or a broken tooth that could require emergency attention. We recommend visiting Dentist111 {{ $location }} every six months for a comprehensive exam and cleaning, as this proactive approach ensures that gums and your teeth stay in top condition, reducing the likelihood of needing emergency dental treatment.</p>
                                </div>
                            </div>
                            <div class="tab tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="content">
                                    <p>Wearing a mouthguard is crucial if you participate in activities that could harm your teeth or contact sports to prevent injuries like broken or chipped teeth. Mouthguards act as a protective barrier, absorbing shocks and minimizing the impact of blows to the face or jaw. Custom-fitted mouthguards provided by Dentist111 {{ $location }} offer the best protection, as they are designed specifically for your teeth and fit comfortably in your mouth. Whether playing football or basketball or engaging in any activity where accidental falls or hits could occur, wearing a mouthguard is an easy way to prevent a dental emergency and keep your smile intact.</p>
                                </div>
                            </div>  
                            <div class="tab tab-pane fade" id="product" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="content">
                                    <p>Hard foods like ice, candies, and popcorn kernels can easily crack or chip your teeth if you need to be more careful. These tiny cracks may not seem significant initially but can lead to bigger problems, including painful tooth fractures or infections. At Dentist111 {{ $location }}, we advise being mindful of what you eat and how you chew, especially when consuming more complex foods. Avoid biting down directly on these items, or opt for softer alternatives. Protecting your teeth from unnecessary strain can reduce the risk of a dental emergency and keep your teeth strong and healthy.</p>
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
                    <h2>What Our Clients Says</h2>
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
<section class="faq-area services-faq fix mb-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="section-title mb-50">
                    <h2 class="text-center">Frequently Asked Question</h2>
                </div>
                <div class="faq-wrap">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-bs-expanded="true" aria-bs-controls="collapseThree">
                                        What services does an emergency dentist {{ $location }} provide?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse show" aria-bs-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    An emergency dentist {{ $location }} offers immediate care for urgent dental issues, such as severe toothaches, broken teeth, lost fillings, and infections. Dentist 111 {{ $location }} provides comprehensive emergency dental services to address these issues promptly.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-bs-expanded="false" aria-bs-controls="collapseOne">
                                        How can I find the best dentist {{ $location }} for emergency care?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    To find the best dentist {{ $location }} for emergency care, look for a clinic like Dentist 111, known for its experienced team and high-quality emergency services. Our {{ str_replace('in ', '', $location) }} dental clinic is fully equipped to handle all urgent dental needs.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-bs-expanded="false" aria-bs-controls="collapseTwo">
                                        Does Dentist 111 offer children’s dental services {{ $location }}?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Yes, Dentist 111 provides specialized services as a children’s dentist {{ $location }}. We offer a welcoming environment and ensure that our young patients feel comfortable and cared for.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingFour" aria-bs-expanded="false" aria-bs-controls="headingFour">
                                        Are there emergency dental clinics {{ $location }} open 24/7?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    While not all clinics are open 24/7, Dentist 111 {{ $location }} offers flexible hours for emergency dentist appointments. Contact us to learn more about our availability and to book an urgent appointment with our {{ str_replace('in ', '', $location) }} dentist.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingFive" aria-bs-expanded="false" aria-bs-controls="headingFive">
                                        Where is the nearest dental clinic {{ $location }} for urgent care?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    If you’re looking for a nearby dental clinic {{ $location }}, Dentist 111 is centrally located and offers quick, reliable emergency dental services. We’re here to help {{ str_replace('in ', '', $location) }} residents with all their dental needs, including emergencies.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingSix" aria-bs-expanded="false" aria-bs-controls="headingSix">
                                        Why choose Dentist 111 as your {{ str_replace('in ', '', $location) }} emergency dentist?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Dentist 111 is a trusted emergency dentist {{ $location }}, known for our swift response and professional care. Our {{ str_replace('in ', '', $location) }} dental clinic is staffed with skilled dentists ready to handle all dental emergencies efficiently.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingSeven" aria-bs-expanded="false" aria-bs-controls="headingSeven">
                                        Can I visit a {{ str_replace('in ', '', $location) }} dental clinic for regular check-ups as well?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingSeven" class="collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Yes, at Dentist 111 {{ $location }}, we offer both emergency and routine dental services. Whether you need immediate care or a standard dental check-up, our {{ str_replace('in ', '', $location) }} dentists are here to provide comprehensive dental care.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingEight" aria-bs-expanded="false" aria-bs-controls="headingEight">
                                        How do I book an appointment with a {{ str_replace('in ', '', $location) }} dentist?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingEight" class="collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    To book an appointment with a {{ str_replace('in ', '', $location) }} dentist, simply contact Dentist 111. We offer flexible booking options for both emergency and routine appointments at our dental clinic {{ $location }}.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingNine" aria-bs-expanded="false" aria-bs-controls="headingNine">
                                        Do you provide after-hours emergency dentist services {{ $location }}?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingNine" class="collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Yes, Dentist 111 offers after-hours emergency dental services {{ $location }}. Our clinic is here to provide urgent dental care when you need it most.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingTen" aria-bs-expanded="false" aria-bs-controls="headingTen">
                                        Are emergency dental services {{ $location }} available on weekends?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingTen" class="collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Dentist 111 offers emergency dental services {{ $location }}, including weekend availability. We understand that dental emergencies can happen anytime, so we’re here to help when you need us.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection