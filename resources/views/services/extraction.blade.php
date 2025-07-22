@extends('index')
@section('title', 'Tooth Extraction Nottingham | Emergency & Affordable Dental Care')
@section('keywords', 'tooth extraction, tooth extraction nottingham, dental extraction, wisdom tooth removal, dental surgery, aftercare for tooth extraction, painless tooth extraction, tooth extraction recovery, dentist for tooth extraction, nottinghamshire dentist 111')
@section('description', 'Looking for expert tooth extraction in Nottingham? Dentist 111 offers emergency wisdom tooth extractions, aftercare guidance, and affordable dental solutions.')

@section('content')
<section class="breadcrumb-area d-flex align-items-center bg-custom-dark">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 col-lg-12 text-center">
                <div class="breadcrumb-wrap">
                    <div class="breadcrumb-title">
                        <h1>Tooth Extraction in Nottingham</h1>    
                        <p class="my-4 text-white">
                            Tooth removal is a routine dental procedure to address various oral health issues that may seem daunting. However, it's often necessary to preserve overall oral health. Whether you're dealing with a decayed tooth, overcrowding, or an impacted wisdom tooth, understanding the extraction process and what to expect before and after can ease your worries. In this guide, we'll cover the different types of tooth extraction, the reasons it might be needed, and tips for a smooth recovery. At <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">Dentist111</a>, we specialize in making wisdom tooth extractions as comfortable and pain-free as possible, ensuring you receive top-notch care.
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
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="about-content s-about-content wow fadeInRight animated" data-animation="fadeInRight" data-delay=".4s">
                    <div class="second-title pb-25">
                        <span class="badge-text-detail">Services</span>
                        <h2>Why Tooth Extraction May Be Necessary</h2>
                    </div>
                    <p class="mb-3">
                        There are several reasons why a <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">dentist</a> might recommend tooth extraction. While no one likes losing a tooth, sometimes it's the best option for maintaining optimal dental health. Here are some everyday situations where extraction is necessary:
                    </p>
                    <ul class="checked-ul">
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <div>
                                <strong>Severe Tooth Decay:</strong>
                                When decay is so advanced that it affects the tooth's structure and cannot be saved through a <a href="{{ route('lost.filling') }}" title="Lost Filling Services Available 24 Hours In Dentist111">filling</a>, root canal, or extraction, a crown may be necessary to prevent the infection from spreading to other areas of your mouth.
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <div>
                                <strong>Gum Disease (Periodontal Disease):</strong>
                                In the severe stages of gum disease, the supporting structures of the teeth (bone, gums, and tissue) may deteriorate. If the tooth becomes loose due to this damage, extraction might be the only way to preserve the health of surrounding teeth.
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <div>
                                <strong>Overcrowding:</strong>
                                In cases of orthodontic treatment, teeth might need to be removed to allow space for the remaining teeth to align correctly. Extracting a tooth ensures that braces or other orthodontic treatments are successful.
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <div>
                                <strong>Impacted Wisdom Teeth: </strong>
                                Wisdom teeth, the last set of molars to develop, often become impacted, meaning they don't have enough room to grow correctly. Impacted wisdom teeth may cause discomfort, infection, and swelling, making extraction necessary to prevent future complications.
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <div>
                                <strong>Trauma or Injury: </strong>
                                Teeth that have been extensively damaged from injury, such as a car accident or sports injury, may need to be extracted if they cannot be repaired.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="s-about-img p-relative wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                    <img src="{{ asset('img/bg/tooth-extraction-services-by-dentist111.webp') }}" alt="Tooth extraction services by dentist111" title="Tooth extraction services by dentist111" class="mx-auto d-block" />
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
<section class="blog-area p-relative fix pt-50 pb-50">
    <div class="container">
        <div class="row align-items-center"> 
            <div class="col-lg-12">
                <div class="section-title center-align mb-30">
                    <span class="badge-text-detail">Types</span>
                    <h2>Types of Tooth Extraction</h2>
                    <p class="my-4">
                        There are two critical categories of tooth extraction: simple and surgical. Knowing which type you need can help you mentally prepare for the procedure.
                    </p>
                    <ul class="checked-ul">
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <div>
                                <strong>Simple Extraction:</strong>
                                This type of extraction is conducted when the tooth is easily accessible. It's a simple procedure where your dentist will use an elevator instrument to loosen the tooth before extracting it with forceps. Simple extractions are typically less invasive and require minimal recovery time.
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <div>
                                <strong>Surgical Extraction:</strong>
                                Surgical extractions are more complex when a tooth has broken off at the gumline or is impacted. This procedure involves making an incision in the gum to remove the tooth. It sometimes requires breaking the tooth into smaller pieces for easier removal. Surgical extractions are commonly needed for wisdom teeth and may require extended recovery.
                            </div>
                        </li>
                    </ul>
                    <h3 class="my-4">Steps to Anticipate During a Tooth Extraction Procedure</h3 class="my-4">
                </div>
            </div>
        </div>
        <div class="row services-card services-card-320">
            <div class="col-lg-3 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">
                        <h4 class="text-center">Initial Examination </h4>                                    
                        <p class="text-center">Your dentist will first assess the tooth and surrounding area to determine the best approach for extraction. X-rays may be taken to get a clear view of the tooth's position and potential complications.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">                                    
                        <h4 class="text-center">Local Anesthesia </h4>                                    
                        <p class="text-center">Before the procedure, local anaesthesia will be applied to numb the area surrounding the tooth. This ensures that you don't feel any pain during the extraction, although you might experience some pressure or slight discomfort.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">                                    
                        <h4 class="text-center">Tooth Removal </h4>                                    
                        <p class="text-center">For a simple extraction, the <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">dentist</a> will use specific instruments to loosen and remove the tooth. In surgical extractions, an incision in the gum may be needed to access the tooth.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-post2 mb-30">
                    <div class="blog-content2">
                        <h4 class="text-center">Aftercare Instructions </h4>                                    
                        <p class="text-center">After the procedure, your dentist will provide important aftercare instructions to ensure proper healing. These may include recommendations for managing pain and swelling and avoiding certain foods.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-area about-p pt-50 pb-50 p-relative fix">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="second-title pb-25">
                <h2>Aftercare Tips for a Smooth Recovery</h2>
                <p class="my-4">
                    Proper aftercare is essential for healing after tooth extraction and preventing complications such as a dry socket or infection. Use these guidelines to support a smooth and speedy recovery:
                </p>
            </div>
            <div class="service-detail px-2 m-0">
                <div class="product-info-tabs">
                    <div class="prod-tabs tabs-box">
                        <ul class="tab-btns tab-buttons nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-btn active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Tips</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-btn" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Common Complications and How to Avoid Them</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-btn" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">How Long Does Recovery Take?</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab-btn" id="contact-tab" data-bs-toggle="tab" data-bs-target="#product" type="button" role="tab" aria-controls="product" aria-selected="false">Preventing the Need for Future Extractions</button>
                            </li>
                        </ul>
                        <div class="tabs-content tab-content" id="myTabContent">
                            <div class="tab tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="content">
                                    <ul class="checked-ul">
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Rest and Take It Easy: </strong>
                                                After the procedure, give your body the time it needs to heal. Refrain from engaging in vigorous activities during the first 24 hours, and keep your head elevated when resting to reduce bleeding and swelling.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Manage Bleeding: </strong>
                                                It's normal to experience light bleeding for the first 24 hours. Your <a href="{{ route('home') }}" title="Visit Dentist111 - Same-day appointments for $49">dentist</a> will supply gauze to bite down on to help manage the bleeding. This will aid in clot formation and help control the bleeding. Be sure to change the gauze as instructed.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Control Swelling: </strong>
                                                Place an ice pack on the side of your face where the extraction occurred for 15 minutes to reduce swelling. This can help alleviate discomfort and keep swelling to a minimum.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Follow Pain Management Recommendations: </strong>
                                                Over-the-counter pain relievers like ibuprofen can effectively reduce discomfort following the extraction. If prescribed, take any medications as directed by your dentist.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Eat Soft Foods: </strong>
                                                For the first few days following the procedure, avoid eating soft foods such as yoghurt, applesauce, mashed potatoes, and soups to avoid irritating the extraction site.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Avoid Smoking and Drinking Through a Straw: </strong>
                                                Using a straw or smoking may disturb the blood clot that develops at the extraction site, leading to a dry socket. It's best to avoid these activities until the area has healed completely.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="content">
                                    <p class="mb-2">
                                        While tooth extractions are generally safe, a few potential complications could arise. Understanding these risks can help you avoid them and ensure a successful recovery.
                                    </p>
                                    <ul class="checked-ul">
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Dry Socket: </strong>
                                                A dry socket arises when the blood clot in the extraction area either gets dislodged or dissolves earlier than expected. This leaves the bone and nerves exposed, causing intense pain. Avoiding smoking, using straws, and eating solid foods can help prevent this complication.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Infection: </strong>
                                                If the extraction site is not kept clean, infections can develop. To avoid this, follow your dentist's instructions on oral hygiene and take any prescribed antibiotics if needed.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Prolonged Bleeding: </strong>
                                                Contact your <a href="{{ route('emergency.dentist') }}" title="Emergency Dental Services Available 24 Hours In Dentist111">emergency dentist</a> immediately if you observe significant bleeding that persists for more than 24 hours. Keeping your head raised and avoiding actions that elevate blood flow to your mouth can help control the bleeding.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="content">
                                    <p class="mb-2">
                                        Recovery time after tooth extraction can vary depending on the complexity of the procedure and how well you follow post-operative care instructions. Typically, the area takes about one to two weeks to heal fully. However, many people start feeling better after just a few days.
                                    </p>
                                    <ul class="checked-ul">
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Simple Extractions: </strong>
                                                You can expect to return to normal within a few days for a simple extraction. Swelling and discomfort usually subside within three days, and you should be able to resume normal activities shortly after.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Surgical Extractions: </strong>
                                                Recovery from surgical extractions, such as wisdom teeth removal, may take longer. Swelling and pain can persist for up to a week, and the gum tissue may take several weeks to heal completely.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab tab-pane fade" id="product" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="content">
                                    <p class="mb-2">
                                        Tooth extractions are sometimes unavoidable, but Practicing excellent oral hygiene can significantly decrease the chances of requiring a tooth extraction later on. Here's how you can protect your teeth and gums:
                                    </p>
                                    <ul class="checked-ul">
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Brush and Floss Daily: </strong>
                                                Consistent brushing and flossing eliminate plaque and help prevent cavities, a leading cause of tooth extraction.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Visit Your Dentist for Regular Checkups: </strong>
                                                Regular dental appointments enable your dentist to identify any problems early, preventing them from progressing to the point where extraction is necessary.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Wear a Mouthguard: </strong>
                                                Suppose you play contact sports or often clench your teeth. In that case, a mouthguard can safeguard your teeth from injury and lower the chances of trauma resulting in extraction.
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <div>
                                                <strong>Maintain a Healthy Diet: </strong>
                                                Maintaining a nutritious diet that includes fruits, vegetables, and dairy is essential for the health of your teeth and gums. Limiting sugary foods and beverages is advisable, as they can increase the risk of dental decay.
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
                                        Does tooth extraction hurt?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse show" aria-bs-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Tooth extractions are performed under local anaesthesia to minimize pain. <a href="{{ route('emergency.dentist.cities', 'nottingham') }}" title="Emergency Dental Services Available 24 Hours In Dentist 111 Nottingham">Dentists in Nottingham</a>, like those at Dentist 111, ensure a comfortable experience with proper post-procedure guidance.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-bs-expanded="false" aria-bs-controls="collapseOne">
                                        What is the cost of tooth extraction in Nottingham?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    In Nottingham, <a href="{{ route('home') }}" title="Visit Dentist 111 Nottingham - Same-day appointments for $49">Dentist 111</a> standard tooth extraction costs start at £199, complex extractions £299, and wisdom tooth extractions £499. Private services can range from £150 to £500, depending on the complexity.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-bs-expanded="false" aria-bs-controls="collapseTwo">
                                        How long does it take to recover from tooth extraction?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Recovery typically takes 7–10 days, with complete healing varying by person. Clinics in Nottingham, such as Dentist 111, offer comprehensive aftercare for faster recovery.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingFour" aria-bs-expanded="false" aria-bs-controls="headingFour">
                                        How much does wisdom tooth extraction cost in Nottingham?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Dentist 111 wisdom tooth extractions in Nottingham can cost between £299 and £499 per tooth.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingFive" aria-bs-expanded="false" aria-bs-controls="headingFive">
                                        Is wisdom tooth extraction painful?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    The procedure itself is pain-free with anaesthesia. Dentists, including those at <a href="{{ route('emergency.dentist.cities', 'nottingham') }}" title="Emergency Dental Services Available 24 Hours In Dentist 111 Nottingham">Dentist 111 in Nottingham</a>, use modern techniques to reduce discomfort and ensure swift recovery.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingSix" aria-bs-expanded="false" aria-bs-controls="headingSix">
                                        What foods are recommended after wisdom tooth extraction?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Soft foods like yoghurt, soups, and mashed potatoes are ideal. If you're in Nottingham, Dentist 111 provides personalized dietary tips post-surgery.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingSeven" aria-bs-expanded="false" aria-bs-controls="headingSeven">
                                        What should I avoid after tooth extraction?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingSeven" class="collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    To prevent dry sockets, avoid smoking, alcohol, and straw used for at least 48 hours. Nottingham residents can rely on Dentist 111 for expert aftercare.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingEight" aria-bs-expanded="false" aria-bs-controls="headingEight">
                                        How do I stop bleeding after tooth extraction?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingEight" class="collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    Apply clean gauze to the area and bite down gently for 20–30 minutes. <a href="{{ route('emergency.dentist.county', 'nottinghamshire') }}" title="Emergency Dentist 111 Nottinghamshire - Same-day appointments for $49">Nottinghamshire</a> patients can contact Dentist 111 for emergency advice if bleeding persists.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingNine" aria-bs-expanded="false" aria-bs-controls="headingNine">
                                        What is an emergency tooth extraction?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingNine" class="collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    An emergency extraction is necessary for severe pain, infection, or trauma. If you're in Nottingham or Nottinghamshire, <a href="{{ route('home') }}" title="Visit Dentist 111 - Same-day appointments for $49">Dentist 111</a> offers same-day emergency services.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingTen" aria-bs-expanded="false" aria-bs-controls="headingTen">
                                        What is a dry socket after tooth extraction?
                                    </button>
                                </h2>
                            </div>
                            <div id="headingTen" class="collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    A dry socket occurs when the blood clot is dislodged, exposing the bone. It causes severe pain and requires immediate dental care. Dentist 111 in Nottingham treats dry socket cases promptly.
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