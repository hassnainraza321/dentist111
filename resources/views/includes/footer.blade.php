<footer class="footer-bg footer-p bg-custom-dark pt-50">
    <div class="footer-top pb-50">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <div class="f-widget-title">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('img/f_logo.png') }}" alt="Dentist 111 Logo" />
                            </a>
                        </div>
                        <div class="footer-link">
                            <p>Emergency dental services available 24 hours a day. We provide evening, weekend and late night dental appointments to patients in Nottinghamshire and the surrounding  areas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <div class="f-widget-title">
                            <p class="footer-heading mb-0">Other Links</p>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <li><a href="{{ route('emergency.dentist.county', 'nottingham') }}" title="Emergency Dentist in Nottingham">Emergency Dentist</a></li>
                                <li><a href="{{ route('our.services') }}">Services</a></li>
                                <li><a href="{{ route('our.location') }}">Locations</a></li>
                                <li><a href="{{ route('contact.us') }}">Contact Us</a></li>
                                <li><a href="{{ route('plan111') }}">Plan 111</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('sitemap.xml') }}" target="_blank">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <div class="f-widget-title">
                            <p class="footer-heading mb-0">Timings</p>
                        </div>
                        <div class="f-contact">
                            <ul>
                                <li class="fcc-timmings"><p class="mb-0">Monday : 6:30AM - 11:30PM</p></li>
                                <li class="fcc-timmings"><p class="mb-0">Tuesday : 6AM - 11:30PM</p></li>
                                <li class="fcc-timmings"><p class="mb-0">Wednesday : 5AM - 11:30PM</p></li>
                                <li class="fcc-timmings"><p class="mb-0">Thursday : 5:30AM - 11:30PM</p></li>
                                <li class="fcc-timmings"><p class="mb-0">Friday : 5AM - 11:30PM</p></li>
                                <li class="fcc-timmings"><p class="mb-0">Saturday : Open 24 hours</p></li>
                                <li class="fcc-timmings"><p class="mb-0">Sunday : Open 24 hours</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <div class="f-widget-title">
                            <p class="footer-heading mb-0">Contact Us</p>
                        </div>
                        <div class="f-contact">
                            <ul>
                                <li>
                                    <i class="icon fa-solid fa-location-dot"></i>
                                    <span>
                                        Dentist 111 - Nottingham: 24-26 Station Street, Kirkby-in-Ashfield, NG17 7AS
                                    </span>
                                </li>
                                <li>
                                    <i class="icon fa-solid fa-location-dot"></i>
                                    <span>
                                        Dentist 111 - Leicester: 146 Melton road, Leicester,  LE4 5EE
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon fas fa-phone"></i>
                                    <span class="mt-3">
                                        Dentist 111 - Nottingham: <a href="tel:{{ Helper::$admin_phone_number }}" title="Book Appointment for £49 in Nottinghamshire">{{ Helper::$admin_phone_number }}</a>
                                        <br>
                                        Dentist 111 - Leicester: <a href="https://wa.me/{{ Helper::$admin_leicester_whatsapp_phone_number }}?text=Book Appointment for £49" title="Book Appointment for £49 on WhatsApp in Leicestershire" target="_blank" rel="noopener noreferrer">{{ Helper::$admin_leicester_phone_number }}</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="copy-text">
                        Copyright &copy; {{ date('Y') }}. All rights reserved. <a href="{{ route('privacy.policy') }}">Privacy Policy</a>
                    </div>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="footer-social">
                        <a href="https://www.facebook.com/profile.php?id=61561480733686" target="_blank" rel="noopener noreferrer" title="Dentist 111 Facebook Page"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/dentist__111/" target="_blank" rel="noopener noreferrer" title="Dentist 111 Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/{{ isset($is_from_leicestershire) && $is_from_leicestershire ? Helper::$admin_leicester_whatsapp_phone_number : Helper::$admin_whatsapp_phone_number }}?text=Hello" title="Dentist 111 WhatsApp Number" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
