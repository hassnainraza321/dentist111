@extends('index')
@section('title', 'Dental Services: Emergency Care, Extractions, and Broken Denture Repair | Dentist111')
@section('keywords', 'dental abscess, lost filling, extraction, dental pain, broken tooth, wisdom tooth pain, broken denture, toothache')
@section('description', "Explore Dentist111 services: emergency dental care, extractions, wisdom tooth pain relief, lost fillings, broken tooth repairs, and out-of-hours dentist support.")

@section('content')
<section class="breadcrumb-area d-flex align-items-center bg-custom-dark">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 col-lg-12 text-center">
                <div class="breadcrumb-wrap">
                    <div class="breadcrumb-title">
                        <h1>Services We Offer</h1>    
                        <p class="my-4 text-white">
                            Explore <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">Dentist111</a> services: emergency dental care, <a href="{{ route('extraction') }}" title="Tooth Extraction Services Available 24 Hours In Dentist111">extractions</a>, wisdom tooth pain relief, <a href="{{ route('lost.filling') }}" title="Lost Fillings Services Available 24 Hours In Dentist111">lost fillings</a>, broken tooth repairs, and out-of-hours dentist support.
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
@include('includes.services')
@endsection