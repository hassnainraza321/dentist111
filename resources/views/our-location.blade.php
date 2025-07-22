@extends('index')
@section('title', 'Your Nearest Emergency Dentist for Same-Day Appointments | Dentist111')
@section('keywords', 'emergency dentist, out of hours dentist, same day dentist appointment')
@section('description', 'Find Dentist111 near you for emergency dental services. Convenient locations offering same-day appointments for dental pain, abscesses, and more. Visit us today!')

@section('content')
<section class="breadcrumb-area d-flex align-items-center bg-custom-dark">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 col-lg-12 text-center">
                <div class="breadcrumb-wrap">
                    <div class="breadcrumb-title">
                        <h1>Dentist111 in Nottinghamshire & Worcestershire</h1>    
                        <p class="my-4 text-white">
                            Explore our convenient locations to receive top-notch dental care tailored to your needs. Whether you're due for a check-up or looking for specialized treatments, we’ve got you covered.
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
<section class="about-area about-p pt-50 pb-50 p-relative fix">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-md-12 col-sm-12 pb-50">
                <div class="about-content s-about-content wow fadeInRight animated">
                    <div class="about-title second-title pb-25">
                        <span class="badge-text-detail">Location 1</span>
                        <h3>Dentist111 - Nottinghamshire</h3>
                    </div>
                    <p>
                        Based at:
                        24-26 Station Street, 
                        Kirkby-in-Ashfield, 
                        Nottingham,

                        NG17 7AS

                        <a href="tel:{{ Helper::$admin_phone_number }}" title="Book Appointment for £49 in Nottinghamshire">{{ Helper::$admin_phone_number }}</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="s-about-img p-relative wow fadeInLeft animated">
                    <iframe
                        title="Google Maps"
                        aria-label="Google Maps"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93941.34338369703!2d-1.2558483541255948!3d53.09879123463466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879f507c0100001%3A0xb36e1a2a87f9ec16!2s24-26%20Station%20St%2C%20Kirkby%20in%20Ashfield%2C%20Nottingham%20NG17%207AS%2C%20UK!5e0!3m2!1sen!2sus!4v1625648390505!5m2!1sen!2sus"
                        width="300"
                        height="250"
                        allowfullscreen=""
                        loading="lazy"
                    ></iframe>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-md-12 col-sm-12 pb-50">
                <div class="about-content s-about-content wow fadeInRight animated">
                    <div class="about-title second-title pb-25">
                        <span class="badge-text-detail">Location 2</span>
                        <h3>Dentist111 - Leicestershire</h3>
                    </div>
                    <p>
                        Based at:
                        146 Melton road, 
                        Leicester,  
                        LE4 5EE 

                        <a href="https://wa.me/{{ Helper::$admin_leicester_whatsapp_phone_number }}?text=Book Appointment for £49" title="Book Appointment for £49 on WhatsApp in Leicestershire" target="_blank" rel="noopener noreferrer">{{ Helper::$admin_leicester_phone_number }}</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="s-about-img p-relative wow fadeInLeft animated">
                    <iframe
                        title="Google Maps"
                        aria-label="Google Maps"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.2974537239074!2d-1.1214927717387257!3d52.65564438474049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487761a0c9e5bf1d%3A0x5e58fb431c733dda!2s146%20Melton%20Rd%2C%20Leicester%20LE4%205EE%2C%20UK!5e0!3m2!1sen!2s!4v1732869780988!5m2!1sen!2s"
                        width="300"
                        height="250"
                        allowfullscreen=""
                        loading="lazy"
                    ></iframe>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-md-12 col-sm-12 pb-50">
                <div class="about-content s-about-content wow fadeInRight animated">
                    <div class="about-title second-title pb-25">
                        <span class="badge-text-detail">Location 3</span>
                        <h3>Dentist111 - Worcestershire</h3>
                    </div>
                    <p>
                        Based at:
                        58 Spring Ln,
                        Malvern,
                        WR14 1AJ
                    </p>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="s-about-img p-relative wow fadeInLeft animated">
                    <iframe
                        title="Google Maps"
                        aria-label="Google Maps"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2448.9973451911857!2d-2.307332684232316!3d52.1150243797341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487095163ac9e51d%3A0x6f5c3f4b3a3dc1e7!2s58%20Spring%20Ln%2C%20Malvern%20WR14%201AJ%2C%20UK!5e0!3m2!1sen!2sus!4v1625648413994!5m2!1sen!2sus"
                        width="300"
                        height="250"
                        allowfullscreen=""
                        loading="lazy"
                    ></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-area about-p pb-50 p-relative fix">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="s-about-img p-relative wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                    <img src="{{ asset('img/features/emergency-dental-services-available-24-hours-in-dentist111.webp') }}" alt="Emergency Dental Services Available 24 Hours In Dentist111" title="Emergency Dental Services Available 24 Hours In Dentist111" />
                    <div class="about-text second-about">
                        <span>20</span>
                        <p>Years of Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="about-content s-about-content wow fadeInRight animated" data-animation="fadeInRight" data-delay=".4s">
                    <div class="about-title second-title pb-25">
                        <span class="badge-text-detail">Our Story</span>
                        <h2>We Hear For Your Dental Emergencies</h2>
                    </div>
                    <p>
                        <a href="{{ route('emergency.dentist') }}" title="Emergency Dental Services Available 24 Hours In Dentist111">Emergency dental services</a> available 24 hours a day. We provide evening, weekend and late night dental appointments to patients in <a href="{{ route('emergency.dentist.county', 'nottinghamshire') }}" title="Emergency Dentist in Nottinghamshire">Nottinghamshire</a> and the surrounding  areas. At <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">Dentist111</a> we appreciate that patients need flexible appointments with experienced empathetic and skilled dentists.
                    </p>
                    <p>
                        Book in for an appointment and skip the month long queues to be seen urgently at your convenience. We have over 20 years of experience in delivering. The highest standard of care with our team of dentists across the country.
                    </p>
                    <div class="slider-btn mt-20">
                        <a href="{{ route('contact.us') }}" class="btn ss-btn smoth-scroll">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection