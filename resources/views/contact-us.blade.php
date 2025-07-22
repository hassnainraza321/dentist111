@extends('index')
@section('title', 'Contact Us for Same Day Emergency Dentist Appointments - ' . Helper::$admin_phone_number)
@section('keywords', 'emergency dentist, out of hours dentist, dentist same day appointment')
@section('description', 'Contact Dentist111 for emergency dental assistance. Schedule a same-day appointment for toothaches, broken dentures, extractions, and more. Reach out now!')

@section('content')
<section class="breadcrumb-area d-flex align-items-center bg-custom-dark">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 col-lg-12 text-center">
                <div class="breadcrumb-wrap">
                    <div class="breadcrumb-title">
                        <h1>Contact Us</h1>    
                        <p class="my-4 text-white">
                            Contact <a href="{{ route('home') }}" title="Visit Same-day appointments for $49">Dentist111</a> for emergency dental assistance. Schedule a same-day appointment for toothaches, broken dentures, <a href="{{ route('extraction') }}" title="Tooth Extraction Services Available 24 Hours In Dentist111">extractions</a>, and more. Reach out now!
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
<section id="contact" class="contact-area after-none contact-bg pt-50 pb-50 p-relative fix">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 order-2">
                <div class="contact-info">
                    <div class="single-cta pb-30 mb-30 wow fadeInUp animated">
                        <div class="f-cta-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <span class="badge-text-detail">Address 1</span>
                        <p>
                            Nottingham : 24-26 Station Street, Kirkby-in-Ashfield, Nottingham, NG17 7AS
                        </p>
                    </div>
                    <div class="single-cta pb-30 mb-30 wow fadeInUp animated">
                        <div class="f-cta-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <span class="badge-text-detail">Address 2</span>
                        <p>
                            Leicester : 146 Melton road, Leicester,  LE4 5EE<br>
                            Worcestershire : 58 Spring Ln, Malvern, WR14 1AJ
                        </p>
                    </div>
                    <div class="single-cta pb-30 mb-30 wow fadeInUp animated">
                        <div class="f-cta-icon">
                            <i class="icon fas fa-phone"></i>
                        </div>
                        <span class="badge-text-detail">Phone</span>
                        <p>
                            Nottingham : <a href="tel:{{ Helper::$admin_phone_number }}" title="Book Appointment for £49 in Nottinghamshire">{{ Helper::$admin_phone_number }}</a>
                            <br>
                            Leicester : <a href="https://wa.me/{{ Helper::$admin_leicester_whatsapp_phone_number }}?text=Book Appointment for £49" title="Book Appointment for £49 on WhatsApp in Leicestershire" target="_blank" rel="noopener noreferrer">{{ Helper::$admin_leicester_phone_number }}</a>
                        </p>
                    </div>
                    <div class="single-cta wow fadeInUp animated">
                        <div class="f-cta-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <span class="badge-text-detail">Email</span>
                        <p>
                            Nottingham : <a href="mailto:{{ Helper::$admin_mail_address }}">{{ Helper::$admin_mail_address }}</a><br>
                            Leicester : <a href="mailto:{{ Helper::$admin_leicester_mail_address }}">{{ Helper::$admin_leicester_mail_address }}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 order-1">
                <div class="contact-bg02">
                    <div class="section-title center-align">
                        <h2>Book Appointment Online</h2>
                    </div>
                    <form action="{{ route('contact.us') }}" method="post" class="contact-form mt-30 ajax-form-submit">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">
                                    <input type="text" id="first_name" class="field_first_name" name="first_name" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <input type="text" id="last_name" class="field_last_name" name="last_name" placeholder="Last Name"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <input type="email" id="email" class="field_email" name="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <input type="text" id="phone" class="field_phone" name="phone" placeholder="Phone No." />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-20">
                                    <textarea name="message" class="field_message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                </div>
                                <div class="mb-30">
                                    {!! htmlFormSnippet() !!}
                                </div>
                                @if($errors->has('g-recaptcha-response'))
                                    <div class="alert alert-danger" role="alert">Please complete the CAPTCHA verification to continue. If you experience any issues, please refresh the page and try again.</div>
                                @endif
                                <div class="slider-btn">
                                    <button type="submit" class="btn ss-btn btn-ajax-show-processing">
                                        <span class="processing-show d-none fa fa-spinner fa-spin me-1" role="status" aria-hidden="true"></span>
                                        <span class="processing-show d-none">Submiting ...</span>
                                        <span class="default-show">Submit Now</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('css')
{!! ReCaptcha::htmlScriptTagJsApi() !!}
@endsection