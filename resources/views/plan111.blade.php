@extends('index')
@section('title', 'Affordable Dental Plan 111 | Dentist111')
@section('keywords', 'dental service pricing, affordable dental care, Dentist 111 prices, dental treatment cost, teeth cleaning cost, braces pricing, Invisalign cost, emergency dental care prices, pediatric dentistry prices')
@section('description', 'Explore affordable and transparent dental care pricing plans at Dentist 111. From preventative care to cosmetic treatments, we provide quality services tailored to your needs. Contact us today!')

@section('content')
<section class="breadcrumb-area d-flex align-items-center bg-custom-dark">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 col-lg-12 text-center">
                <div class="breadcrumb-wrap">
                    <div class="breadcrumb-title">
                        <h1>Affordable Dental Care Plan 111</h1>    
                        <p class="my-4 text-white">
                            At Dentist111, we understand that dental care is essential for maintaining your health and confidence. To make your experience stress-free, we provide clear and affordable pricing plans for a wide range of dental services. Our goal is to deliver top-notch care that fits your budget while ensuring you receive the best treatment possible.
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
<section id="pricing" class="pricing-area pb-50 pt-50 fix p-relative">
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
<section class="about-area about-p pb-50 p-relative fix">
    <div class="container">
        <div class="row">
            <div class="second-title pb-25">
                <span class="badge-text-detail">Plan111</span>
                <h2>Accident & Emergency Dental Benefit Information Summary</h2>
            </div>
            <div class="col-sm-12 col-md-12">
                <div class="about-content s-about-content wow fadeInRight animated" data-animation="fadeInRight" data-delay=".4s">
                    <p>
                        The Registered Practice holds an insurance policy which covers all registered patients who are members of its payment plan. Such patients benefit from cover following oral injuries sustained by accident, or in an emergency. This is a benefit summary only. For full terms, limits, conditions and exclusions, a policy wording is available on request from the Registered Practice.
                    </p>
                    <ul class="pricing-ul">
                        <li>
                            <strong>Emergency Treatment: </strong>
                            <span>
                                Covers worldwide emergency dental treatment when you’re unable to get access to your Registered Practice, or at your Registered Practice out of normal opening hours. It also extends to phone triage services where available.
                                <br>
                                In such cases, the patient should pay for the required treatment, keep receipts (including detail of the treatment) and submit the claim via their Registered Practice.
                            </span>
                        </li>
                        <li>
                            <strong>Treatment following <br> an Accident: </strong>
                            <span>
                                Covers you for Treatment following an Accident, carried out at your Registered Practice.
                                <br>
                                You can claim up to 18 months after the date of the Accident.
                            </span>
                        </li>
                        <li>
                            <strong>Hospital Benefit: </strong>
                            <span>
                                £150 per 24 hours whilst admitted to hospital for dental treatment, under the care of a Specialist.
                            </span>
                        </li>
                        <li>
                            <strong>Oral Cancer: </strong>
                            <span>£3,000 cash benefit upon diagnosis of Oral Cancer by a Specialist.</span>
                        </li>
                        <li>
                            <strong>Permanent Facial<br> Disfigurement: </strong>
                            <span>Cash benefits following an Accident, dependant on the severity of scarring.Permanent Facial Disfigurement</span>
                        </li>
                        <li>
                            <strong>Key Exclusions: </strong>
                            <span>
                                The first £10 of each and every incident of Emergency Treatment and Treatment following an Accident.
                                <br>
                                Costs above the specified limits shown in the policy wording.
                                <br>
                                Emergency Treatment at the Registered Practice during normal opening hours.
                                <br>
                                Treatment as a consequence of; injury caused by foodstuffs, normal wear and tear, mouth jewellery, self inflicted injury while participating in boxing, martial arts, rugby or shinty unless appropriate mouth protection is worn.
                                <br>
                                Cosmetic Treatment.
                                <br>
                                Damage which is not apparent within seven days of the date of impact.
                            </span>
                        </li>
                    </ul>
                    <p>
                        Accident and Emergency Dental claims are administered by Denis UK Limited registered in England and Wales under No. 06399615 at Grove House, Lutyens Close, Basingstoke Hants RG24 8AG, Financial Services Register No. 600303. Denis UK Limited is an appointed representative of Healix Insurance Services Limited. Healix Insurance Services Limited, registered in England and Wales under No.5484190, is an approved coverholder at Lloyd’s and is authorised and regulated by the Financial Conduct Authority. Financial Services Register No. 437248. The Accident and Emergency Dental Policy is underwritten by Healix Insurance Services Limited on behalf of Hamilton Insurance DAC, a designated activity company registered in Ireland, number 484148, at 2 Shelbourne Buildings, Crampton Avenue, Ballsbridge, Dublin 4, D04W3V6, Ireland. Hamilton Insurance Dac is authorised by the Central Bank of Ireland and subject to limited regulation by the Financial Conduct Authority and Prudential Regulation Authority in connection with its UK branch.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection