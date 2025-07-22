@extends('index')
@section('title', 'Dental Implants in Kirkby-in-Ashfield')
@section('keywords', 'dental implants, tooth replacement, dental implants near me, Dentist111, implant dentist, missing teeth solutions, durable dental implants, natural-looking teeth')
@section('description', 'Restore your smile with natural-looking dental implants at Dentist111 in Kirkby-in-Ashfield! Our experienced team offers durable, comfortable, customized implants for missing teeth.')

@section('content')
<section class="breadcrumb-area d-flex align-items-center bg-custom-dark">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 col-lg-12 text-center">
                <div class="breadcrumb-wrap">
                    <div class="breadcrumb-title">
                        <h1>Dental Implants in Kirkby-in-Ashfield</h1>    
                        <p class="my-4 text-white">
                            Dental implants are one of the most effective solutions for replacing missing teeth. They offer a natural look, long-lasting durability, and a permanent improvement to your smile. At <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">Dentist111</a> {{ $location }}, we specialize in high-quality dental implants designed to enhance oral health and regain the assurance that accompanies a complete. Whether you've lost a single or multiple teeth or require a full-mouth restoration, our team guides you through every step of the dental implant process, from consultation to aftercare.
                        </p>
                        <div class="slider-btn">
                            <a href="https://wa.me/{{ Helper::$admin_whatsapp_phone_number }}?text=Book Appointment for £49" class="btn ss-btn me-2" title="Book Appointment for £49" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i> Book Appointment for £49</a>
                            <a href="tel:{{ Helper::$admin_phone_number }}" class="btn btn-outline ss-btn" title="Book Appointment Online"><i class="fas fa-phone-alt"></i> {{ Helper::$admin_phone_number }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-area about-p pb-50 pt-50 p-relative fix">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="second-title pb-25">
                <span class="badge-text-detail">Services</span>
                <h2>What Are Dental Implants {{ $location }}?</h2>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="about-content s-about-content wow fadeInRight animated" data-animation="fadeInRight" data-delay=".4s">
                    <p class="mb-3">
                        Dental implants are synthetic tooth roots that create a solid support for permanent or removable prosthetic teeth. They are typically made of titanium, a biocompatible metal that fuses well with bone, ensuring a secure fit within the jawbone. Dental implants replicate the anatomy of genuine teeth, making them an ideal option for restoring functionality, aesthetics, and oral health.
                    </p>
                    <p class="mb-3">
                        <strong>Every dental implant is composed of three primary parts:</strong>
                    </p>
                    <ul class="checked-ul">
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <div>
                                <strong>Implant Post: </strong>
                                The titanium screw is placed into the jawbone, acting as an artificial root.
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <div>
                                <strong>Abutment: </strong>
                                A linking component that secures the implant to the crown.
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <div>
                                <strong>Crown: </strong>
                                The exposed part of the implant, tailored to resemble the appearance and performance of a natural tooth.
                            </div>
                        </li>
                    </ul>
                    <p class="mt-3">
                        Dental implants are well-known for their resilience, robustness, and capacity to integrate smoothly with natural teeth. They offer a lasting remedy for missing teeth.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="s-about-img p-relative wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                    <img src="{{ asset('img/gallery/dentist111-design-high-quality-dental-implants-to-enhance-oral-health.webp') }}" alt="Dentist111 design high-quality dental implants  to enhance oral health" title="Dentist111 design high-quality dental implants  to enhance oral health" class="mx-auto d-block" />
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
                    <h2>The Dental Implant Process at Dentist111 {{ $location }}</h2>
                    <p class="my-4">
                        Getting dental implants is a multi-step process that requires planning and precision. At <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">Dentist111</a> {{ $location }}, our experienced team follows a comprehensive approach to ensure your implants are placed safely and comfortably.
                    </p>
                </div>
            </div>
        </div>
        <div class="row services-card services-card-280">
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">
                        <h4 class="text-center">Initial Consultation</h4>                                    
                        <p class="text-center">Your process starts with a comprehensive consultation and assessment. This meeting will evaluate your oral health and dental and medical history and decide if you are a perfect implant candidate. Digital X-rays or 3D scans may be taken to get a detailed view of your bone structure and identify the optimal positioning for your implants.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">                                    
                        <h4 class="text-center">Treatment Planning</h4>                             
                        <p class="text-center">Once we confirm that you are a suitable candidate, we'll create a personalized treatment plan tailored to your needs. This plan will detail the number of implants needed, the specific type, and the schedule for each procedure phase.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">                                    
                        <h4 class="text-center">Implant Placement</h4>                                    
                        <p class="text-center">Our team will insert the titanium post into the jawbone during implant placement. This is typically performed under local anaesthesia, and sedation options are available if needed for your comfort. The implant will merge with the jawbone in the following months through osseointegration, forming a stable base for the final restoration.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">
                        <h4 class="text-center">Abutment Placement</h4>           
                        <p class="text-center">When the implant has completely bonded with the bone, an abutment is fastened to the implant post. This small connector piece will hold the crown securely in place.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">
                        <h4 class="text-center">Crown Placement</h4>           
                        <p class="text-center">The last stage entails connecting the personalized crown to the abutment. Our crowns are crafted to match your natural teeth' colour, shape, and size, providing a flawless result that blends seamlessly with your smile.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">
                        <h4 class="text-center">Follow-Up Care</h4>           
                        <p class="text-center">After your implant is in place, our team will guide you in maintaining your new smile. Follow-up visits may be arranged to assess the condition of your implants and ensure your comfort.</p>
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
                    <img src="{{ asset('img/bg/book-emergency-dental-appointment-now.webp') }}" alt="Book Emergency Dental Appointment Now" title="Book Emergency Dental Appointment Now" class="img" />
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="call-text">
                    <span class="badge-text-detail">Book Emergency Dental Appointment Now</span>
                    <h2>We Will Get You Out Of Pain And Back To Work</h2>
                    <div class="slider-btn">
                        <a href="{{ route('contact.us') }}" class="btn ss-btn me-2" title="Book Emergency Dental Appointment Now">Contact Now</a>
                        <a href="tel:{{ Helper::$admin_phone_number }}" class="btn btn-outline ss-btn" title="Book Emergency Dental Appointment Now"><i class="fas fa-phone-alt"></i> {{ Helper::$admin_phone_number }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="about-area about-p pt-50 pb-50 p-relative fix">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="second-title pb-25">
                <h2>Types of Dental Implants Offered at Dentist111 {{ $location }}</h2>
                <p class="my-4">
                    At <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">Dentist111</a> {{ $location }}, we understand that every patient has unique needs. We offer various dental implant options to cater to different situations and requirements.
                </p>
            </div>
            <div class="service-detail px-2 m-0">
                <div class="product-info-tabs">
                    <div class="prod-tabs tabs-box">
                        <ul class="tab-btns tab-buttons nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-btn active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Single Tooth Implants</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-btn" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Multiple Tooth Implants</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-btn" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Full Arch Implants (All-on-4)</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-btn" id="contact-tab" data-bs-toggle="tab" data-bs-target="#product" type="button" role="tab" aria-controls="product" aria-selected="false">Mini Dental Implants</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-btn" id="contact-tab" data-bs-toggle="tab" data-bs-target="#product1" type="button" role="tab" aria-controls="product" aria-selected="false">Mini Immediate Implants</button>
                            </li>
                        </ul>
                        <div class="tabs-content tab-content">
                            <div class="tab tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="content">
                                    <p class="mb-2">
                                        A single dental implant is ideal for patients missing a tooth. This implant replaces the missing tooth without affecting neighbouring teeth, ensuring a seamless look and feel.
                                    </p>
                                    <ul class="checked-ul">
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Preserves Adjacent Teeth: </strong>
                                                Single-tooth implants offer the benefit of replacing a missing tooth without impacting surrounding teeth. Unlike traditional dental bridges requiring adjacent teeth to be filed down, single implants leave neighbouring teeth intact, helping maintain their natural structure and health.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Natural Look and Feel: </strong>
                                                Designed to blend seamlessly with your natural teeth, single-tooth implants are custom-crafted to match the colour, shape, and size of your existing teeth. This ensures a natural-looking result that feels like a natural tooth, providing comfort and confidence in your smile.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Long-Lasting Solution: </strong>
                                                With proper care, single-tooth implants are a permanent solution to tooth loss. Made of durable materials like titanium and porcelain, these implants resist decay and wear, offering a strong and stable replacement that can last a lifetime with regular dental maintenance.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Restores Full Functionality: </strong>
                                                Single tooth implants restore full bite function, allowing you to chew, speak, and smile without limitations. Because the implant is securely anchored in the jawbone, it provides stability and strength similar to a natural tooth, making it easy to enjoy your favourite foods and activities without worry.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="content">
                                    <p class="mb-2">
                                        If you have lost several teeth, we can install implants that support numerous crowns or bridges. Multiple tooth implants offer a stable solution for replacing several missing teeth without individual implants for each tooth.
                                    </p>
                                    <ul class="checked-ul">
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Efficient Replacement for Several Teeth: </strong>
                                                Multiple tooth implants provide a streamlined solution for patients missing multiple teeth. Rather than placing individual implants for each tooth, strategically positioned implants can support numerous crowns or a bridge, making them more efficient and cost-effective for restoring various teeth simultaneously.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Enhanced Stability and Comfort: </strong>
                                                Numerous tooth implants offer superior stability compared to partial dentures or traditional bridges by anchoring multiple crowns or bridges onto a few implant posts. The implants are securely fixed within the jawbone, preventing movement or slippage, which allows for natural and comfortable eating, speaking, and smiling.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Prevents Bone Loss and Facial Sagging: </strong>
                                                Like single implants, multiple tooth implants help prevent bone loss by stimulating the jawbone where teeth are missing. This prevents the jawbone from shrinking over time, which can otherwise lead to facial sagging and a prematurely aged appearance.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Customized for a Natural-Looking Smile: </strong>
                                                Multiple tooth implants are custom-made to fit each patient's unique smile, ensuring that the replacement teeth' colour, shape, and size match the surrounding natural teeth. This results in a cohesive and natural-looking appearance, giving patients a restored smile they can feel confident about.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="content">
                                    <p class="mb-2">
                                        All-on-4 or All-on-6 dental implants provide a complete set of teeth with minimal implants for patients needing an entire upper or lower arch replacement. This approach supports a custom-made denture that looks and functions like a whole arch of natural teeth, offering a secure fit without adhesives.
                                    </p>
                                    <ul class="checked-ul">
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Complete Smile Restoration with Minimal Implants: </strong>
                                                All-on-4 implants provide an entire arch of teeth using only four strategically placed implants, making it a minimally invasive and efficient solution for full-mouth restoration. This approach allows patients to enjoy the benefits of a complete set of teeth with fewer surgical procedures and shorter recovery times.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Immediate Functionality and Fast Results: </strong>
                                                One key advantage of All-on-4 implants is that they allow for the same-day placement of a temporary arch, giving patients immediate functionality. You can leave the <a href="{{ route('emergency.dentist') }}" title="Visit Dental Clinic - Same-day appointments for $49">clinic</a> with a new smile on the same day, restoring your ability to eat, speak, and smile confidently immediately.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Stability Without the Need for Bone Grafting: </strong>
                                                All-on-4 implants are designed to maximize the available bone structure, often eliminating the need for bone grafting. By angling the back implants, the procedure provides strong support even in patients with lower bone density, making it suitable for a broader range of candidates.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Easy Maintenance and Natural Appearance: </strong>
                                                Full-arch implants are permanently fixed, so they don't require daily removal and maintenance like traditional dentures. The All-on-4 prosthetic is crafted to mimic the look of natural teeth and gums, offering a realistic, comfortable, and easy-to-care-for alternative to removable dentures.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab tab-pane fade" id="product" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="content">
                                    <p class="mb-2">
                                        Mini implants are compact alternatives to conventional implants. They are an option for patients with limited bone density or those who cannot undergo more invasive procedures. They provide the same benefits as regular implants but with a less invasive procedure and shorter recovery time.
                                    </p>
                                    <ul class="checked-ul">
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Less Invasive Procedure: </strong>
                                                Mini dental implants are smaller in diameter than traditional implants, allowing for a less invasive placement process. This often means fewer surgical steps, minimal discomfort, and a shorter recovery time, making them an excellent option for patients seeking a more comfortable treatment experience.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Ideal for Patients with Limited Bone Density: </strong>
                                                For patients with insufficient bone density for regular implants, mini dental implants can be a viable solution without requiring extensive bone grafting. Their smaller size makes it easier to place them securely in areas with reduced bone mass, expanding implant options for a broader range of patients.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Quick and Convenient Placement: </strong>
                                                The placement of mini implants is typically faster than traditional implants, often completed in a single appointment. This allows for quicker results and a more rapid return to everyday activities, making them a convenient choice for patients with busy schedules.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Secure Option for Denture Support: </strong>
                                                Mini dental implants can stabilize dentures, providing a secure foundation that prevents slippage and discomfort associated with traditional dentures. By anchoring the denture securely, mini implants allow patients to eat, speak, and smile confidently without worrying about movement.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab tab-pane fade" id="product1" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="content">
                                    <p class="mb-2">
                                        Immediate implants are placed right after a <a href="{{ route('extraction') }}" title="Tooth Extraction Services Available 24 Hours In Dentist111">tooth extraction</a>, allowing for a quicker restoration. This option minimizes the number of surgical procedures. It shortens the treatment timeline, making it an efficient choice for eligible patients.
                                    </p>
                                    <ul class="checked-ul">
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Faster Treatment Timeline: </strong>
                                                Immediate implants allow for implant placement directly after a tooth extraction, reducing the overall treatment time. This approach eliminates the waiting period between extraction and implant placement, helping patients achieve a restored smile more quickly than traditional implant timelines.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Preservation of Bone and Gum Structure: </strong>
                                                By placing the implant immediately after extraction, immediate implants help preserve the natural bone and gum structure. This timely placement supports the surrounding bone and soft tissues, preventing shrinkage and maintaining the natural contours of the jaw and gums.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Reduced Number of Surgical Procedures: </strong>
                                                Since the implant is placed at the same time as the <a href="{{ route('extraction') }}" title="Tooth Extraction Services Available 24 Hours In Dentist111">extraction</a>, immediate implants can reduce the number of surgical appointments needed, making the process simpler and more convenient. This streamlined approach is ideal for patients looking to minimize visits and avoid multiple surgical procedures.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Enhanced Aesthetics and Confidence: </strong>
                                                Immediate implants provide an immediate solution for missing teeth, allowing patients to leave the <a href="{{ route('emergency.dentist') }}" title="Visit Dental Clinic - Same-day appointments for $49">clinic</a> with a temporary crown on the same day. This immediate restoration enhances appearance and boosts confidence, ensuring patients don't have to live with a gap in their smile during the healing process.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>  
                        </div>
                        <div class="slider-btn mt-20 mb-2">
                            <a href="https://wa.me/{{ Helper::$admin_whatsapp_phone_number }}?text=Book Appointment for £49" class="btn ss-btn me-2" title="Book Appointment for £49" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i> Book Appointment for £49</a>
                            <a href="tel:{{ Helper::$admin_phone_number }}" class="btn btn-outline ss-btn" title="Book Appointment Online"><i class="fas fa-phone-alt"></i> {{ Helper::$admin_phone_number }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-area p-relative fix pt-50 pb-50">
    <div class="container">
        <div class="row services-card services-card-460">
            <div class="col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">
                        <h4>Are You a Candidate for Dental Implants?</h4>                     
                        <p>Many healthy adults are eligible for dental implants. However, specific criteria can influence the procedure's success.</p>
                        <p><strong>Ideal Candidates for Dental Implants:</strong></p>
                        <ul class="checked-ul">
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <div>
                                    <strong>Good Oral Health: </strong>
                                    Robust gums and adequate bone density support the implant.
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <div>
                                    <strong>Non-Smokers: </strong>
                                    Smoking can affect healing and the overall success of the implant.
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <div>
                                    <strong>Commitment to Oral Hygiene: </strong>
                                    Patients must maintain good oral hygiene and attend regular dental checkups.
                                </div>
                            </li>
                        </ul>
                        <p class="mt-2">
                            Bone grafting may increase the chances of implant placement success for those with insufficient bone density. Our team at <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">Dentist111</a> {{ $location }} will conduct a thorough assessment and discuss all options with you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">                                    
                        <h4>Dental Implant Care and Maintenance</h4>                     
                        <p>Dental implants are a long-term solution but need consistent maintenance to stay in peak condition. Here's how to maintain your implants for lasting results:</p>
                        <ul class="checked-ul">
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <div>
                                    <strong>Regular Brushing and Flossing: </strong>
                                    Brush and floss your implant daily to care for it like a natural tooth.
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <div>
                                    <strong>Routine Dental Checkups: </strong>
                                    Schedule regular visits to <a href="{{ route('emergency.dentist') }}" title="Visit Dental Clinic - Same-day appointments for $49">our clinic</a> to ensure your implant and surrounding gums stay healthy.
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <div>
                                    <strong>Avoid Hard Foods: </strong>
                                    While implants are durable, Avoiding very hard or sticky foods that might harm the crown is advisable.
                                </div>
                            </li>
                        </ul>
                        <p class="mt-2">
                            Following these simple care practices will help extend the life of your implants and keep your smile looking and feeling great.
                        </p>
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
                                        How long do dental implants last?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse show" aria-bs-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Dental implants can endure as long as regular dental checkups with appropriate maintenance. The crown connected to the implant might require substitution after 10–15 years, but the titanium post is highly durable.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-bs-expanded="false" aria-bs-controls="collapseOne">
                                        Is the dental implant procedure painful?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    The procedure is generally well-tolerated and performed under local anaesthesia. While you might feel slight discomfort following the procedure, it can be alleviated with over-the-counter pain medication and most patients heal rapidly.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-bs-expanded="false" aria-bs-controls="collapseTwo">
                                        Can dental implants be done in one day?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Immediate implants can sometimes be placed on the same day as a <a href="{{ route('extraction') }}" title="Tooth Extraction Services Available 24 Hours In Dentist111">tooth extraction</a>. However, most patients require a few months before the implant fully integrates with the bone and the final crown is attached.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingFour" aria-bs-expanded="false" aria-bs-controls="headingFour">
                                        Are dental implants safe for everyone?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Dental implants are a secure and efficient option for most healthy adults. However, those with specific health issues, like uncontrolled diabetes or advanced gum disease, might require further treatment or evaluation to guarantee the success of the implant.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingFive" aria-bs-expanded="false" aria-bs-controls="headingFive">
                                        How much do dental implants cost?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    The cost of dental implants varies depending on factors such as the number of implants needed and the type of restoration. At <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">Dentist111</a> {{ $location }}, we offer detailed consultations and transparent pricing, enabling you to choose wisely according to your requirements.
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