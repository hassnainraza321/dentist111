<header class="header-area">
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <nav class="second-menu navbar navbar-expand-lg header-nav">
                <div class="logo">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="Dentist111 Logo" class="img-fluid logo-image" />
                    </a>
                </div>
                <button type="button" class="navbar-toggler" aria-label="navbar" aria-expanded="false" aria-controls="navBar" data-bs-toggle="collapse" data-bs-target="#navBar">
                    <span id="hamburgerTrigger">
                      <span class="fas fa-bars"></span>
                    </span>
                </button>
                <div id="navBar" class="collapse navbar-collapse main-menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('emergency.dentist.county', 'nottingham') }}" title="Emergency Dentist in Nottingham">Emergency Dentist</a>
                        </li>
                        <li class="nav-item has-sub dropdown">
                            <a class="nav-link custom-nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>Services</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('dental.abscess.treatment') }}">Dental Abscess Treatment</a>
                                <a class="dropdown-item" href="{{ route('lost.filling') }}">Lost Filling</a>
                                <a class="dropdown-item" href="{{ route('extraction') }}">Extraction</a>
                                <a class="dropdown-item" href="{{ route('dental.implants') }}">Dental Implants</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('our.location') }}">Locations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.us') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-2 col-lg-2 text-right d-none d-lg-block mt-10 mb-10 text-right text-xl-right">
                    <div class="login">
                        <ul>
                            <li>
                                <div class="second-header-btn">
                                    <a href="tel:{{ isset($is_from_leicestershire) && $is_from_leicestershire ? Helper::$admin_leicester_phone_number : Helper::$admin_phone_number }}" class="btn"><i class="fas fa-phone"></i> {{ isset($is_from_leicestershire) && $is_from_leicestershire ? Helper::$admin_leicester_phone_number : Helper::$admin_phone_number }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
