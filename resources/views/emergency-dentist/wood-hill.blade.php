@extends('index')
@if(!empty($location))
    @section('title', 'Emergency Dentist ' . str_replace('in ', '', $location) . ' - Trusted ' . str_replace('in ', '', $location) . ' Dentist | Dentist 111')
@else
    @section('title', 'Emergency Dentist for Same-Day Appointments')
@endif
@section('keywords', 'dental abscess, lost filling, extraction, dental pain, broken tooth, wisdom tooth pain, broken denture, toothache')
@section('description', 'Looking for a reliable dentist ' . $location . '? Dentist 111 offers emergency dental care, dental implants, teeth cleaning, and same-day appointments. Book now!')

@section('content')
<section class="breadcrumb-area d-flex align-items-center bg-custom-dark">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 col-lg-12 text-center">
                <div class="breadcrumb-wrap">
                    <div class="breadcrumb-title">
                        <h1>Emergency Dentist {{ str_replace('in ', '', $location) }} - Trusted {{ str_replace('in ', '', $location) }} Dentist</h1>    
                        <p class="my-4 text-white">
                            Looking for a trusted <b>{{ str_replace('in ', '', $location) }} dentist</b>? At <b>{{ str_replace('in ', '', $location) }} Dental Centre</b>, we specialize in providing prompt, private <b>emergency dental care {{ $location }}</b> tailored to your urgent needs. Our <b>{{ str_replace('in ', '', $location) }} Dental Clinic</b> combines expertise and compassionate service to cater to patients of all ages. From <b>general dentistry</b> to advanced services like <b>dental implants {{ $location }}</b>, our clinic is recognized as a top choice for comprehensive dental care. Whether you need <b>teeth cleaning {{ $location }}</b>, dental checkups, or immediate treatment, our team ensures exceptional care.
                        </p>
                        <p class="my-4 text-white">
                            Book your appointment today at <b>{{ str_replace('in ', '', $location) }} Dentistry</b>, and experience professional, reliable, and immediate care from the leading <b>dentist office {{ $location }}</b>.
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
                    <h2>Why Choose Dentist 111 {{ $location }} for Your Dental Emergency?</h2>
                    <p class="my-4 text-center">
                        When it comes to dental emergencies, waiting isn’t an option. Whether you’re dealing with a severe toothache, a <b>lost filling</b>, or a broken denture, the sooner you act, the better. At <b>Dentist 111 {{ $location }}</b>, we’re dedicated to delivering quick, professional care when you need it most. As a leading <b>{{ str_replace('in ', '', $location) }} Dental Centre</b>, our team ensures that every patient receives the personalized attention they deserve. Here’s why <b>Dentist 111</b> stands out for dental emergencies:
                    </p>
                </div>
            </div>
        </div>
        <div class="row services-card">
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">
                        <h4 class="text-center">Immediate Care for Dental Pain</h4>                                    
                        <p class="text-center">Dental pain can be debilitating, making it difficult to focus on your daily tasks. If you’re dealing with a sharp toothache or <b>wisdom tooth discomfort</b>, fast relief is essential. At <b>Dentist 111 {{ str_replace('in ', '', $location) }} Dentistry</b>, we offer same-day appointments, so you never have to wait for treatment. Our experienced team will assess your condition and provide effective solutions to alleviate your pain. As a trusted <b>mayfield dentist</b>, we’re here to ensure your comfort and care.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">                                    
                        <h4 class="text-center">Expert Treatment for Dental Abscesses</h4>                                    
                        <p class="text-center">A dental abscess is a serious issue that requires immediate attention. Symptoms like swelling, fever, or intense pain indicate that the infection may spread if left untreated. At <b>Dentist 111 {{ str_replace('in ', '', $location) }} Dental Specialties</b>, we specialize in diagnosing and treating dental abscesses quickly. From draining the infection to prescribing antibiotics, our team at <b>Dentist Office {{ str_replace('in ', '', $location) }}</b> ensures you get the care you need to restore your health.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">                                    
                        <h4 class="text-center">Broken Teeth? We’ve Got You Covered</h4>                                    
                        <p class="text-center">A broken tooth can happen unexpectedly, whether from an accident or biting down on something hard. At <b>Dentist 111 {{ str_replace('in ', '', $location) }} Dental Care</b>, we provide immediate solutions to restore your smile. Whether you need bonding, a crown, or <b>dental implants {{ $location }}</b>, our experienced dentists ensure a seamless repair. Trust us to help you regain your confidence and comfort.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">
                        <h4 class="text-center">Lost Filling? No Problem!</h4>                                    
                        <p class="text-center">Losing a filling can leave your tooth exposed to further decay and sensitivity. At <b>Dentist 111 {{ $location }}</b>, we offer prompt replacements using durable, high-quality materials. As a leading <b>{{ str_replace('in ', '', $location) }} Dental Centre Mayfield</b>, our focus is on restoring your tooth’s function and protecting it from future damage. You’ll leave our <b>dental clinic {{ $location }}</b> with peace of mind, knowing your dental health is secure.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">                                    
                        <h4 class="text-center">Out-of-Hours Services for Your Convenience</h4>                              
                        <p class="text-center">Dental emergencies don’t follow a schedule, which is why <b>Dentist 111 {{ str_replace('in ', '', $location) }} Dental Specialties</b> offers out-of-hours services. Whether it’s late at night, a weekend, or a holiday, our team is here to provide immediate care. As a top <b>Mayfield dentist</b>, we prioritize your health and well-being, ensuring you never have to wait for treatment when you need it most.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">                                    
                        <h4 class="text-center">Same-Day Appointments for Immediate Relief</h4>                              
                        <p class="text-center">At <b>Dentist 111 {{ $location }}</b>, we understand the stress that comes with dental emergencies. That’s why we offer same-day appointments for urgent cases, ensuring you get the care you need without unnecessary delays. Whether it’s a severe toothache or a need for <b>teeth cleaning {{ $location }}</b>, our team is committed to providing fast and effective solutions.</p>
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
                <h2>Emergency Dental Treatments at Dentist 111 {{ $location }}</h2>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="about-content s-about-content wow fadeInRight animated" data-animation="fadeInRight" data-delay=".4s">
                    <p>
                        At <a href="{{ route('home') }}" title="Visit Dentist 111 - Same-day appointments for $49">Dentist 111</a> {{ $location }}, we are fully equipped to handle all kinds of dental emergencies. Here’s a look at the common treatments we offer to get you back on track:
                    </p>
                    <ul>
                        <li class="d-block">
                            <strong>Emergency Tooth Extractions: </strong>
                            When a tooth is beyond repair, an emergency extraction may be necessary. Our skilled dentists perform extractions with care, ensuring you experience minimal discomfort and recover quickly.
                        </li>
                        <li class="d-block">
                            <strong>Root Canals: </strong>
                            If a tooth is infected or has extensive decay, we may need to perform a root canal to save it. At Dentist 111 {{ $location }}, we make sure this procedure is as painless and efficient as possible, preserving your tooth while relieving pain.
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
                    While we’re here to help in any dental emergency, we also encourage preventive care to avoid them altogether. Regular checkups at Dentist 111 {{ $location }} can catch small issues before they become big problems. We’ll provide personalized care and advice to keep your teeth healthy, reducing the risk of a toothache, broken tooth, or other emergency situations.
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
                                <button class="nav-link tab-btn" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Visit Dentist 111 Regularly</button>
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
                                    <p>Routine dental checkups at <a href="{{ route('home') }}" title="Visit Dentist 111 - Same-day appointments for $49">Dentist111</a> {{ $location }} are crucial in maintaining long-term oral health and preventing emergencies. Regular visits allow our experienced dentists to perform thorough cleanings and catch potential issues before they become severe. For instance, a minor cavity detected during a checkup can be easily treated with a filling, preventing it from growing into a painful dental abscess or a broken tooth that could require emergency attention. We recommend visiting Dentist 111 {{ $location }} every six months for a comprehensive exam and cleaning, as this proactive approach ensures that gums and your teeth stay in top condition, reducing the likelihood of needing emergency dental treatment.</p>
                                </div>
                            </div>
                            <div class="tab tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="content">
                                    <p>Wearing a mouthguard is crucial if you participate in activities that could harm your teeth or contact sports to prevent injuries like broken or chipped teeth. Mouthguards act as a protective barrier, absorbing shocks and minimizing the impact of blows to the face or jaw. Custom-fitted mouthguards provided by Dentist 111 {{ $location }} offer the best protection, as they are designed specifically for your teeth and fit comfortably in your mouth. Whether playing football or basketball or engaging in any activity where accidental falls or hits could occur, wearing a mouthguard is an easy way to prevent a dental emergency and keep your smile intact.</p>
                                </div>
                            </div>  
                            <div class="tab tab-pane fade" id="product" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="content">
                                    <p>Hard foods like ice, candies, and popcorn kernels can easily crack or chip your teeth if you need to be more careful. These tiny cracks may not seem significant initially but can lead to bigger problems, including painful tooth fractures or infections. At Dentist 111 {{ $location }}, we advise being mindful of what you eat and how you chew, especially when consuming more complex foods. Avoid biting down directly on these items, or opt for softer alternatives. Protecting your teeth from unnecessary strain can reduce the risk of a dental emergency and keep your teeth strong and healthy.</p>
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
                                        What services does Dentist 111 {{ $location }} provide?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse show" aria-bs-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    At <b>Dentist 111</b>, we offer a wide range of dental services, including emergency care, <b>dental cleaning {{ $location }}</b>, general dentistry, restorative treatments, and <b>dental implants {{ $location }}</b>. Our team is equipped to handle everything from routine checkups to urgent dental emergencies.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-bs-expanded="false" aria-bs-controls="collapseOne">
                                        Why should I choose Dentist 111 as my {{ str_replace('in ', '', $location) }} dentist?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <b>Dentist 111 {{ $location }}</b> is recognized as a trusted name in dental care. We are committed to providing personalized, compassionate service for patients of all ages. Our <b>{{ str_replace('in ', '', $location) }} Dental Centre Mayfield</b> prioritizes emergency cases with same-day appointments and offers out-of-hours services to meet your needs.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-bs-expanded="false" aria-bs-controls="collapseTwo">
                                        Does Dentist 111 handle dental emergencies {{ $location }}?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Yes, we specialize in emergency dental care. Whether you’re dealing with a <b>lost filling</b>, severe toothache, or broken tooth, our team at <b>Dentist 111 {{ str_replace('in ', '', $location) }} Dentistry</b> is available to provide immediate relief and effective solutions.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingFour" aria-bs-expanded="false" aria-bs-controls="headingFour">
                                        Can I get dental implants at Dentist 111 {{ $location }}?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Absolutely! At <b>Dentist 111 {{ str_replace('in ', '', $location) }} Dental Specialties</b>, we offer expert services for <b>dental implants {{ $location }}</b> to restore your smile and improve oral function. Our experienced team ensures a seamless and comfortable process.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingFive" aria-bs-expanded="false" aria-bs-controls="headingFive">
                                        Do you provide teeth cleaning services {{ $location }}?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Yes, <b>teeth cleaning {{ $location }}</b> is one of our core services. At <b>Dentist 111</b>, we provide professional cleanings to maintain your oral health and prevent future dental issues.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingSix" aria-bs-expanded="false" aria-bs-controls="headingSix">
                                        How can I book an appointment at Dentist 111 {{ $location }}?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Booking an appointment is easy. Simply contact <b>Dentist 111 {{ str_replace('in ', '', $location) }} Dental Care</b> by phone or through our website. We offer flexible scheduling, including same-day appointments, to accommodate your needs.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingSeven" aria-bs-expanded="false" aria-bs-controls="headingSeven">
                                        Does Dentist 111 offer out-of-hours services?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingSeven" class="collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Yes, <b>Dentist 111 {{ $location }}</b> provides out-of-hours services to ensure you receive care whenever you need it. Whether it’s late at night or during a holiday, our <b>{{ str_replace('in ', '', $location) }} Dental Centre</b> is here to help.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingEight" aria-bs-expanded="false" aria-bs-controls="headingEight">
                                        What should I do if I lose a filling?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingEight" class="collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    If you lose a filling, contact <b>Dentist 111 {{ $location }}</b> immediately. Our emergency dental services include quick replacements using high-quality materials to restore and protect your tooth.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingNine" aria-bs-expanded="false" aria-bs-controls="headingNine">
                                        Is Dentist 111 suitable for families in Mayfield?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingNine" class="collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Yes, <b>Dentist 111 {{ str_replace('in ', '', $location) }} Dentistry</b> caters to patients of all ages. Our <b>Mayfield dentist</b> services include general, restorative, and emergency care, making us the ideal choice for families.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingTen" aria-bs-expanded="false" aria-bs-controls="headingTen">
                                        Where is Dentist 111 located {{ $location }}?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingTen" class="collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <b>Dentist 111 {{ str_replace('in ', '', $location) }} Dental Centre</b> is conveniently located in Mayfield, providing easy access for patients {{ $location }} and the surrounding areas. Contact us today to book your visit.
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