<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>MFORX</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/faviconnew.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Optional: Animate on scroll -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Bootstrap Css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="css/all.min.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="css/custom.css" rel="stylesheet" media="screen">

    <style>
        .why-invest-section {
            background: #000000;
            /* padding: 80px 0; */
            position: relative;
            overflow: hidden;
        }

        .why-invest-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.02"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.02"/><circle cx="50" cy="10" r="1" fill="%23ffffff" opacity="0.02"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            pointer-events: none;
        }

        .why-invest-content {
            position: relative;
            z-index: 2;
        }

        .investment-hero {
            text-align: center;
            margin-bottom: 60px;
        }

        .investment-hero h2 {
            margin-top: 20px;
            color: rgb(255, 255, 255);
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            background: linear-gradient(135deg, rgb(231, 141, 92), rgb(162, 155, 254));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .investment-hero .highlight {
            color: rgb(255, 255, 255);
            position: relative;
        }

        .investment-hero .highlight::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(135deg, rgb(231, 141, 92), rgb(162, 155, 254));
            border-radius: 2px;
        }

        .investment-hero p {
            color: #cccccc;
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .investment-tagline {
            background: linear-gradient(135deg, rgb(231, 141, 92), rgb(162, 155, 254));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 1.5rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .investment-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            margin-top: 60px;
        }

        .investment-points {
            padding: 40px;
        }

        .investment-points h3 {
            color: rgb(255, 255, 255);
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .investment-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .investment-list li {
            color: rgb(255, 255, 255);
            font-size: 1.1rem;
            margin-bottom: 15px;
            padding-left: 30px;
            position: relative;
            line-height: 1.6;
        }

        .investment-list li::before {
            content: '▲';
            color: rgb(231, 141, 92);
            font-size: 1rem;
            position: absolute;
            left: 0;
            top: 2px;
        }

        .investment-vision {
            text-align: center;
            padding: 40px;
            position: relative;
        }

        .investment-vision h3 {
            color: rgb(255, 255, 255);
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 20px;
            line-height: 1.4;
            position: relative;
            z-index: 2;
        }

        .investment-vision p {
            color: rgb(255, 255, 255);
            font-size: 1.2rem;
            font-weight: 600;
            line-height: 1.4;
            position: relative;
            z-index: 2;
        }

        .geometric-background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0.3;
            z-index: 1;
        }

        .geometric-background svg {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .investment-cta {
            text-align: center;
            margin-top: 50px;
        }

        .investment-cta h2 {
            color: rgb(255, 255, 255);
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .investment-cta .cta-highlight {
            background: linear-gradient(135deg, rgb(231, 141, 92), rgb(162, 155, 254));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .terms-note {
            color: #888888;
            font-size: 0.9rem;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .investment-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .investment-hero h2 {
                font-size: 2.5rem;
            }

            .investment-cta h2 {
                font-size: 2rem;
            }

            .investment-points,
            .investment-vision {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <!-- Header Start -->
    <style>
        .main-header {
            position: relative;
        }

        .header-sticky {
            position: sticky;
            top: 0;
            z-index: 1000;

            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            width: 190px;
        }

        .right-logo {
            position: absolute;
            top: -50px;
            right: 20px;
            z-index: 998;
            /* Reduced z-index to be below navbar toggle */
            pointer-events: none;
            /* Prevents interference with navbar toggle */
        }

        .right-logo img {
            max-height: 150px;
            object-fit: contain;
            width: 150px;
        }

        .right-logo a {
            pointer-events: auto;
            /* Re-enable pointer events only for the link */
        }

        /* Ensure navbar toggle has higher z-index */
        .navbar-toggler {
            z-index: 1001;
            position: relative;
        }

        /* Custom responsive menu styles */
        .responsive-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: #000000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .responsive-menu.active {
            display: block;
        }

        .responsive-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .responsive-menu li {
            border-bottom: 1px solid #575454;
        }

        .responsive-menu a {
            display: block;
            padding: 15px 20px;
            text-decoration: none;
            color: #ba2929;
        }

        .responsive-menu a:hover {
            background-color: #4b2106;
        }

        @media (max-width: 991px) {
            .main-menu {
                display: none;
            }

            .navbar-toggle {
                display: block;
                background: none;
                border: none;
                cursor: pointer;
                padding: 8px;
                z-index: 1001;
                position: relative;
                top: 17px;
            }

            .navbar-toggle span {
                display: block;
                width: 25px;
                height: 3px;
                background: #821a1a;
                margin: 5px 0;
                transition: 0.3s;
            }
        }

        @media (min-width: 992px) {
            .navbar-toggle {
                display: none;
            }

            .responsive-menu {
                display: none !important;
            }
        }

        @media (max-width: 767px) {
            .right-logo {
                top: 0px;
                right: 35px;
            }

            .right-logo img {
                max-height: 80px;
                width: 100px;
            }

            .navbar-brand img {
                width: 140px;
            }
        }
    </style>
    </head>

    <body>
        <header class="main-header">
            <div class="header-sticky">
                <nav class="navbar navbar-expand-lg">
                    <div class="container d-flex justify-content-between align-items-center w-100">
                        <a class="navbar-brand" href="index.html">
                            <img src="images/logoforxnew.png" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse main-menu">
                            <div class="nav-menu-wrapper">
                                <ul class="navbar-nav mr-auto" id="menu">
                                    <li class=""><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('ecosystem') }}">Sabka
                                            Ecosystem</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('investor') }}">Investor
                                            Corner</a></li>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact
                                            Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="right-logo">
                            <a href="https://www.sabkaworld.com/">
                                <img src="images/Logo - Sabka-01.png" alt="Sabka Logo">
                            </a>
                        </div>

                        <!-- Custom navbar toggle button -->
                        <button class="navbar-toggle" type="button" onclick="toggleMenu()">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <!-- Responsive menu -->
                        <div class="responsive-menu" id="responsiveMenu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="sabcaecosystem.html">Sabka World Ecosystem</a></li>
                                <li><a href="investorcorner.html">Investor Corner</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <script>
            function toggleMenu() {
                const menu = document.getElementById('responsiveMenu');
                menu.classList.toggle('active');
            }

            // Close menu when clicking outside
            document.addEventListener('click', function (event) {
                const menu = document.getElementById('responsiveMenu');
                const toggle = document.querySelector('.navbar-toggle');

                if (!toggle.contains(event.target) && !menu.contains(event.target)) {
                    menu.classList.remove('active');
                }
            });

            // Close menu when window is resized to desktop size
            window.addEventListener('resize', function () {
                if (window.innerWidth >= 992) {
                    document.getElementById('responsiveMenu').classList.remove('active');
                }
            });
        </script>

        <!-- Header End -->

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <!-- Page Header Box Start -->
                        <div class="page-header-box">
                            <h1 class="wow fadeInUp" data-cursor="-opaque">Investor <span>Corner</span></h1>
                            <nav class="wow fadeInUp" data-wow-delay="0.2s">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index-2.html">home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Investor Corner</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Page Header Box End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Why Invest in Sabka Section Start -->
        <div class="why-invest-section">
            <div class="container">
                <div class="why-invest-content">
                    <!-- Investment Hero Start -->
                    <div class="investment-hero wow fadeInUp">
                        <!-- <p class="investment-tagline">Now, it's your turn</p> -->
                        <h2>Why Investing in Sabka?</h2>
                        <!-- <p>Your Participation Means Partnership in Something Truly Meaningful</p> -->
                    </div>
                    <!-- Investment Hero End -->

                    <!-- Investment Grid Start -->
                    <div class="investment-grid">
                        <!-- Investment Points Start -->
                        <div class="investment-points wow fadeInLeft" data-wow-delay="0.2s">
                            <h3>Be Part of The Growth Story : Invest in India’s First and Fastest Growing Quick
                                Recruitment Platform</h3>
                            <ul class="investment-list">
                                <li>Founder With Proven Industry Expertise</li>
                                <li>Proven Market Acceptance</li>
                                <li>Multiple Revenue Channels & Income Models</li>
                                <li>Technology-Powered, Globally Scalable Platforms</li>
                                <li>Premium Office Infrastructure & Execution-Ready Teams</li>
                                <li>Media Recognition and Public Credibility</li>
                                <li>Strong Social Foundation & Trust-Driven Branding</li>
                            </ul>

                        </div>
                        <!-- Investment Points End -->

                        <!-- Investment Vision Start -->
                        <div class="col-lg-12">
                            <div class="wow scaleIn">
                                <img src="images/c1.webp" class="w-100 rotate-animation" alt="">
                            </div>
                        </div>
                        <!-- Investment Vision End -->
                    </div>
                    <!-- Investment Grid End -->
                </div>
            </div>
        </div>
        <!-- Why Invest in Sabka Section End -->

        <!-- How It Work Section Start -->
        <div class="how-it-work" style="padding-left: 380px; text-align: center;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- How Work Content Start -->
                        <div class="how-work-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">sabka</h3>
                                <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Revenue &
                                    Investments
                                    <span>At Present</span>
                                </h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- How Work Steps Start -->
                            <div class="how-work-steps">
                                <!-- How Work Item Start -->
                                <div class="how-work-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="how-work-header">
                                        <div class="icon-box">
                                            <img src="images/icon-how-work-step-1.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="how-work-item-content">
                                        <h3>Revenue Mode </h3>
                                        <p>Subscriptions, Paid Visual Optimisatiions,Premium Recruitment Packages,
                                            Training,Classes and Courses</p>
                                    </div>
                                </div>
                                <!-- How Work Item End -->

                                <!-- How Work Item Start -->
                                <div class="how-work-item wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="how-work-header">
                                        <div class="icon-box">
                                            <img src="images/icon-how-work-step-2.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="how-work-item-content">
                                        <h3>Mode of Operation</h3>
                                        <p>Pre - Sees Funded</p>
                                    </div>
                                </div>
                                <!-- How Work Item End -->

                                <!-- How Work Item Start -->
                                <div class="how-work-item wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="how-work-header">
                                        <div class="icon-box">
                                            <img src="images/icon-how-work-step-3.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="how-work-item-content">
                                        <h3>Closed Invetments</h3>
                                        <p>Preseed Round 1</p>
                                    </div>
                                </div>
                                <!-- How Work Item End -->

                                <!-- How Work Item Start -->
                                <div class="how-work-item wow fadeInUp" data-wow-delay="1s">
                                    <div class="how-work-header">
                                        <div class="icon-box">
                                            <img src="images/icon-how-work-step-4.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="how-work-item-content">
                                        <h3>Prseed Investment Type</h3>
                                        <p>Equity Funding .</p>
                                    </div>
                                </div>
                                <!-- How Work Item End -->
                            </div>
                            <!-- How Work Steps End -->
                        </div>
                        <!-- How Work Content End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- How Work Video Content Start -->
                        <div class="how-work-video-content">
                            <!-- How Work Video Start -->
                            <!-- <div class="col-lg-12">
                            <div class="wow scaleIn">
                                <img src="images/c1.webp" class="w-100 rotate-animation" alt="">
                            </div>
                        </div> -->
                            <!-- How Work Video Start -->

                            <!-- Section Footer Text Start -->
                            <!-- <div class="section-footer-text wow fadeInUp" data-wow-delay="0.2s">
                            <p>We help businesses design, build, and deploy intelligent solutions that drive real
                                results. <a href="contact.html">Contact Now</a></p>
                        </div> -->
                            <!-- Section Footer Text End -->
                        </div>
                        <!-- How Work Video Content End -->
                    </div>
                </div>
            </div>
        </div>

        <!-- How It Work Section End -->

        <!-- Contact Form Container Start -->
        <div class="contact-form-container" style="padding: 20px;">
            <div class="contact-form" style="max-width: 700px; margin: 0 auto;">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-cursor="-opaque">Investor Request Form</h2>
                </div>
                <!-- Section Title End -->

                <!-- Contact Form Start -->
                <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp"
                    data-wow-delay="0.2s">
                    <div class="row">
                        <!-- Name -->
                        <div class="form-group col-md-6 mb-4">
                            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group col-md-6 mb-4">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                        </div>

                        <!-- Mobile -->
                        <div class="form-group col-md-6 mb-4">
                            <input type="text" name="mob" class="form-control" placeholder="Mobile Number" required>
                        </div>

                        <!-- Country -->
                        <div class="form-group col-md-6 mb-4">
                            <div class="select-wrapper" style="position: relative;">
                                <select name="country" class="form-control" required
                                    style="appearance: none; -webkit-appearance: none; -moz-appearance: none; padding-right: 40px;">
                                    <option value="">Select Country</option>
                                    <option value="India">India</option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="France">France</option>
                                    <option value="Japan">Japan</option>
                                    <option value="China">China</option>
                                    <option value="Singapore">Singapore</option>
                                </select>
                                <span
                                    style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); pointer-events: none; color: #666;">
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none">
                                        <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <!-- State -->
                        <div class="form-group col-md-6 mb-4">
                            <input type="text" name="state" class="form-control" placeholder="State" required>
                        </div>

                        <!-- City -->
                        <div class="form-group col-md-6 mb-4">
                            <input type="text" name="city" class="form-control" placeholder="City" required>
                        </div>

                        <!-- Message -->
                        <div class="form-group col-md-12 mb-5">
                            <textarea name="message" class="form-control" rows="4" placeholder="Your Message"
                                required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-lg-12">
                            <div class="contact-form-btn text-center">
                                <button type="submit" class="btn-default" style="width: 160px; padding: 15px 20px;">
                                    <span>Submit</span>
                                </button>
                                <div id="msgSubmit" class="h3 hidden"></div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Contact Form End -->
            </div>
        </div>

        <!-- Contact Form Container End -->

        <!-- Footer Start -->
        <footer class="main-footer">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-7">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-cursor="-opaque">Let's start work <span>together!</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Looking for a new opportunity? Join us and
                                take
                                the next step in your career journey.</p>
                        </div>
                        <!-- Section Title End -->
                    </div>

                    <div class="col-lg-5">
                        <!-- Section Button Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('contact') }}" class="btn-default">Let's Work Together</a>
                        </div>
                        <!-- Section Button End -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <!-- About Footer Start -->
                        <div class="about-footer">
                            <!-- Footer Logo Start -->
                            <div class="footer-logo">
                                <img src="images/logoforxnew1.png" alt="">
                            </div>
                            <!-- Footer Logo End -->

                            <!-- Social Media Icons Start -->
                            <div class="footer-social">
                                <h3>Follow Us</h3>
                                <div class="social-links">
                                    <a href="#" class="social-link facebook" aria-label="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="social-link x-twitter" aria-label="X (formerly Twitter)">
                                        <i class="fab fa-x-twitter"></i>
                                    </a>
                                    <a href="#" class="social-link instagram" aria-label="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#" class="social-link linkedin" aria-label="LinkedIn">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" class="social-link youtube" aria-label="YouTube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Social Media Icons End -->
                        </div>
                        <!-- About Footer End -->
                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="footer-contact-box">
                            <!-- Footer Links Start -->
                            <div class="footer-links">
                                <h3>Get In Touch</h3>
                                <p><a href="tel:152885253">+(00) - 152 885 253</a></p>
                                <p><a href="mailto:info@domainname.com">info@domainname.com</a></p>
                            </div>
                            <!-- Footer Links End -->

                            <!-- Footer Links Start -->
                            <div class="footer-links">
                                <h3>Our Location</h3>
                                <p>123 Lorem Street Suite 5B, Ips Park London, UK SW1A 1AA</p>
                            </div>
                            <!-- Footer Links End -->
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <!-- Footer Links Start -->
                        <div class="footer-links footer-privacy-policy">
                            <h3>Subscribe Newsletter's</h3>
                            <!-- Footer Newsletter Form Start -->
                            <div class="footer-newsletter-form">
                                <form id="newslettersForm" action="#" method="POST">
                                    <div class="form-group">
                                        <input type="email" name="mail" class="form-control" id="mail"
                                            placeholder="Enter your email" required>
                                        <button type="submit" class="newsletter-btn">subscribe<i
                                                class="fa-regular fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- Footer Newsletter Form End -->
                        </div>
                        <!-- Footer Links End -->
                    </div>

                    <div class="col-lg-12">
                        <!-- Footer Copyright Text Start -->
                        <div class="footer-copyright-text">
                            <p>EmforX Solutions Pvt Ltd | All Rights Reserved</p>
                        </div>
                        <!-- Footer Copyright Text End -->
                    </div>
                </div>
            </div>
        </footer>

        <style>
            /* Social Media Icons Styling */
            .footer-social {
                margin-top: 20px;
            }

            .footer-social h3 {
                color: #73328b;
                font-size: 18px;
                margin-bottom: 15px;
                font-weight: 600;
            }

            .social-links {
                display: flex;
                gap: 12px;
                flex-wrap: wrap;
            }

            .social-link {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 40px;
                height: 40px;
                background: linear-gradient(135deg, #bb3f3f 0%, #764ba2 100%);
                border-radius: 50%;
                color: #fff;
                text-decoration: none;
                transition: all 0.3s ease;
                font-size: 18px;
            }

            .social-link:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
                color: #fff;
            }

            .social-link.facebook:hover {
                background: linear-gradient(135deg, #3b5998, #4c70ba);
            }

            .social-link.x-twitter:hover {
                background: linear-gradient(135deg, #000000, #1a1a1a);
            }

            .social-link.instagram:hover {
                background: linear-gradient(135deg, #e4405f, #fd5949, #fccc63);
            }

            .social-link.linkedin:hover {
                background: linear-gradient(135deg, #0077b5, #0099d4);
            }

            .social-link.youtube:hover {
                background: linear-gradient(135deg, #ff0000, #cc0000);
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                .social-links {
                    justify-content: center;
                }

                .footer-social {
                    text-align: center;
                    margin-top: 30px;
                }
            }
        </style>

        <!-- Footer End -->

        <!-- Jquery Library File -->
        <script src="js/jquery-3.7.1.min.js"></script>
        <!-- Bootstrap js file -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Validator js file -->
        <script src="js/validator.min.js"></script>
        <!-- SlickNav js file -->
        <script src="js/jquery.slicknav.js"></script>
        <!-- Swiper js file -->
        <script src="js/swiper-bundle.min.js"></script>
        <!-- Counter js file -->
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Magnific js file -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Parallax js -->
        <script src="js/parallaxie.js"></script>
        <!-- MagicCursor js file -->
        <script src="js/gsap.min.js"></script>
        <script src="js/magiccursor.js"></script>
        <!-- Text Effect js file -->
        <script src="js/SplitText.js"></script>
        <script src="js/ScrollTrigger.min.js"></script>
        <!-- SmoothScroll -->
        <script src="js/SmoothScroll.js"></script>
        <!-- YTPlayer js File -->
        <script src="js/jquery.mb.YTPlayer.min.js"></script>
        <!-- Wow js file -->
        <script src="js/wow.min.js"></script>
        <!-- Main Custom js file -->
        <script src="js/function.js"></script>
    </body>

</html>
