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

</head>

<body>
    <!-- Preloader Start -->
    <!-- <div class="preloader">
  <div class="loading-container">
   <div class="loading"></div>
   <div id="loading-icon"><img src="images/loader.svg" alt=""></div>
  </div>
 </div> -->
    <!-- Preloader End -->

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
            document.addEventListener('click', function(event) {
                const menu = document.getElementById('responsiveMenu');
                const toggle = document.querySelector('.navbar-toggle');

                if (!toggle.contains(event.target) && !menu.contains(event.target)) {
                    menu.classList.remove('active');
                }
            });

            // Close menu when window is resized to desktop size
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 992) {
                    document.getElementById('responsiveMenu').classList.remove('active');
                }
            });
        </script>
        <!-- Header End -->

        <!-- Page Header Start -->
        <div class="page-header ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <!-- Page Header Box Start -->
                        <div class="page-header-box">
                            <h1 class="wow fadeInUp" data-cursor="-opaque">About <span>Us</span></h1>
                            <nav class="wow fadeInUp" data-wow-delay="0.2s">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">about us</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Page Header Box End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- About Us Section Start -->
        <div class="about-us">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <!-- <h3 class="wow fadeInUp">Welcome to Sabka</h3> -->
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">India’s Fastest
                                Growing
                                <span>Recruitment Platform</span>
                            </h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                @php
                    use App\Models\Stat;
                    $stats = Stat::all()->keyBy('key');
                @endphp

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- About Us Box Start -->
                        <div class="about-us-box">
                            <div class="about-us-item">
                                <div class="about-item-content">
                                    <h3>Job Seekers Hired Daily</h3>
                                    <h2><span class="counter">{{ $stats['job_seekers']->value ?? 0 }}</span>+</h2>
                                </div>
                                <div class="icon-box">
                                    <img src="images/icon-about-item-1.svg" alt="">
                                </div>
                            </div>
                            <div class="about-item-image">
                                <img src="images/about-item-image-1.png" alt="">
                            </div>
                        </div>
                        <!-- About Us Box End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- About Us Box Start -->
                        <div class="about-us-box">
                            <div class="about-us-item">
                                <div class="about-item-content">
                                    <h3>Verified Companies</h3>
                                    <h2><span class="counter">{{ $stats['companies']->value ?? 0 }}</span>+</h2>
                                </div>
                                <div class="icon-box">
                                    <img src="images/icon-about-item-2.svg" alt="">
                                </div>
                            </div>
                            <div class="about-item-image">
                                <img src="images/about-item-image-2.png" alt="">
                            </div>
                        </div>
                        <!-- About Us Box End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- About Us Box Start -->
                        <div class="about-us-box">
                            <div class="about-us-item">
                                <div class="about-item-content">
                                    <h3>Instant Profile Creation</h3>
                                    <h2><span class="counter">{{ $stats['profiles']->value ?? 0 }}</span>%</h2>
                                </div>
                                <div class="icon-box">
                                    <img src="images/icon-about-item-3.svg" alt="">
                                </div>
                            </div>
                            <div class="about-item-image">
                                <img src="images/about-item-image-3.png" alt="">
                            </div>
                        </div>
                        <!-- About Us Box End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- About Us Box Start -->
                        <div class="about-us-box">
                            <div class="about-us-item">
                                <div class="about-item-content">
                                    <h3>Direct Connect Success</h3>
                                    <h2><span class="counter">{{ $stats['connections']->value ?? 0 }}</span>X</h2>
                                </div>
                                <div class="icon-box">
                                    <img src="images/icon-about-item-4.svg" alt="">
                                </div>
                            </div>
                            <div class="about-item-image">
                                <img src="images/about-item-image-4.png" alt="">
                            </div>
                        </div>
                        <!-- About Us Box End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us Section End -->

        <!-- Our Approach Section Start -->
        <!-- <div class="our-approach">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our mission & Vission</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Empowering careers through
                            meaningful <span>opportunities</span></h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="approach-item-list">
                        <div class="approach-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-approach-1.svg" alt="">
                            </div>
                            <div class="approach-item-content">
                                <h3>Our Mission</h3>
                                <p>To connect people with the right career opportunities, simplify the job search
                                    process, and support businesses in building strong, skilled teams.</p>
                            </div>
                        </div>

                        <div class="approach-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-approach-2.svg" alt="">
                            </div>
                            <div class="approach-item-content">
                                <h3>Our vision</h3>
                                <p>To create a world where everyone has access to fulfilling job opportunities and
                                    companies thrive with the right talent in place.</p>
                            </div>
                        </div>

                        <div class="approach-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-approach-3.svg" alt="">
                            </div>
                            <div class="approach-item-content">
                                <h3>Our goal</h3>
                                <p>To streamline recruitment, empower job seekers, and support organizations in creating
                                    efficient and engaging hiring experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="approach-image">
                        <figure class="image-anime reveal">
                            <img src="images/approach-image.jpg" alt="">
                        </figure>

                        <div class="approach-counter-box">
                            <div class="approach-counter-item">
                                <h2><span class="counter">15</span>+</h2>
                                <p>Business problem</p>
                            </div>

                            <div class="approach-counter-item">
                                <h2><span class="counter">2.3</span>+</h2>
                                <p>Business setup</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
        <!-- Our Approach Section End -->


        <section class="welcome-sabka">
            <div class="container">


                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="welcome-item wow fadeInUp">
                            <div class="welcome-content">
                                <h3>25,000+</h3>
                                <p>Jobs Posted Daily</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="welcome-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="welcome-content">
                                <h3>5,000+</h3>
                                <p>Daily Interviews</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="welcome-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="welcome-content">
                                <h3>250,000+</h3>
                                <p>Daily Job Applications</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="welcome-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="welcome-content">
                                <h3>24,000+</h3>
                                <p>Daily In-App Interactions</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="welcome-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="welcome-content">
                                <h3>300+</h3>
                                <p>Daily WhatsApp Interactions</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="welcome-item wow fadeInUp" data-wow-delay="1s">
                            <div class="welcome-content">
                                <h3>1000+</h3>
                                <p>Daily Call Initiations</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="welcome-features wow fadeInUp" data-wow-delay="1.2s">
                        <ul>
                            <li>Unlimited Interviews for Job Seekers</li>
                            <li>Unlimited Candidate Selection for Employers</li>
                            <li>Quick Decision Making</li>
                            <li>User-Friendly and Feature-Rich Hiring Experience</li>
                            <li>Revolutionary Hiring: Employers Select Candidates Directly</li>
                        </ul>
                    </div>
                </div>
            </div> -->
            </div>
        </section>
        <!-- Our Solution Section Start -->
        <!-- <div class="our-solution">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="our-solution-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">all-in-one job solution</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                                Connecting talent with <span>opportunity</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">
                                Whether you're seeking your dream job or hiring top talent, we provide end-to-end
                                solutions to make your journey seamless, efficient, and impactful.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="solution-item-list">
                        <div class="solution-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-solution-1.svg" alt="">
                            </div>
                            <div class="solution-item-content">
                                <h3>Smart Job Matching</h3>
                                <p>Our AI-powered system matches candidates with jobs based on skills, interests, and
                                    location preferences.</p>
                            </div>
                        </div>

                        <div class="solution-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-solution-2.svg" alt="">
                            </div>
                            <div class="solution-item-content">
                                <h3>Resume & Profile Builder</h3>
                                <p>Create a professional resume and profile in minutes with our intuitive tools and
                                    templates.</p>
                            </div>
                        </div>

                        <div class="solution-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-solution-3.svg" alt="">
                            </div>
                            <div class="solution-item-content">
                                <h3>Employer Dashboard</h3>
                                <p>Manage listings, screen applicants, and schedule interviews—all from one powerful
                                    dashboard.</p>
                            </div>
                        </div>

                        <div class="solution-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="images/icon-solution-4.svg" alt="">
                            </div>
                            <div class="solution-item-content">
                                <h3>Career Guidance</h3>
                                <p>Access expert tips, career blogs, and personalized advice to take your job search to
                                    the next level.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
        <!-- Our Solution Section End -->


        <!-- Special Features Section Start -->
        <div class="special-features ">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3>Special Features</h3>
                            <!-- <h2>Special  <span>Features</span></h2> -->
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon-box">
                                <i class="fas fa-filter"></i>
                            </div>
                            <div class="feature-item-content">
                                <h3>Easy Job Filtering & Quick Apply</h3>
                                <p>Find jobs that match your skills and apply instantly with a single click.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon-box">
                                <i class="fas fa-list-check"></i>
                            </div>
                            <div class="feature-item-content">
                                <h3>Quick Candidate Shortlisting</h3>
                                <p>Employers can efficiently shortlist and select top talent with ease.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon-box">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="feature-item-content">
                                <h3> Direct Employer Connect</h3>
                                <p>Job seekers can reach out to employers directly for opportunities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon-box">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="feature-item-content">
                                <h3>Direct Job Seeker connect</h3>
                                <p>Employers can directly choose candidates best suited for their roles.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon-box">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="feature-item-content">
                                <h3>Any Location Search</h3>
                                <p>Search for jobs anywhere, tailored to your preferred location.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon-box">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="feature-item-content">
                                <h3>Secure In-App Chats</h3>
                                <p>Communicate securely with hidden phone numbers for privacy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon-box">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="feature-item-content">
                                <h3>Direct WhatsApp & Calling</h3>
                                <p>Connect instantly via WhatsApp or direct calls for quick communication.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon-box">
                                <i class="fas fa-eye-slash"></i>
                            </div>
                            <div class="feature-item-content">
                                <h3>Profile Switching & Hiding</h3>
                                <p>Control your profile visibility with flexible switching options.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon-box">
                                <i class="fas fa-crown"></i>
                            </div>
                            <div class="feature-item-content">
                                <h3>Affordable Subscription Plans</h3>
                                <p>Access premium features with budget-friendly subscription options.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon-box">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div class="feature-item-content">
                                <h3>Profile Optimisation with Urgent Badge</h3>
                                <p>Stand out with cost-effective priority badges for urgent needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon-box">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                            <div class="feature-item-content">
                                <h3>Joining Gift Offers</h3>
                                <p>Get Hired Through Sabka. Get Rewarded.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="icon-box">
                                <i class="fas fa-share-alt"></i>
                            </div>
                            <div class="feature-item-content">
                                <h3>Job Vacancy Sharing & Reporting</h3>
                                <p>Share job listings and report issues effortlessly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA Box Section Start -->
        <!-- <div class="cta-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-box-box">
                        <div class="cta-box-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">our facts</h3>
                                <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Investing for a
                                    meaningful purpose is an opportunity to <span>grow together</span></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.4s">Join Us - Let's build Kerala's First
                                    Global Brand in Recruitment and Employment Oriented Education.
                                </p>
                            </div>

                            <div class="cta-box-body wow fadeInUp" data-wow-delay="0.6s">
                                <a href="contact.html" class="btn-default btn-highlighted">Get Started Today</a>
                                <a href="contact.html" class="btn-default">Send a Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
        <!-- CTA Box Section End -->

        <!-- Our Team Section Start -->
        <!-- <div class="our-team">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">our team</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            The human talent driving <span>career success</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item wow fadeInUp">
                        <div class="team-image">
                            <a href="team-single.html" class="image-anime" data-cursor-text="View">
                                <figure>
                                    <img src="images/team-1.jpg" alt="">
                                </figure>
                            </a>
                        </div>

                        <div class="team-body">
                            <div class="team-content">
                                <h3><a href="team-single.html">Sophia Bennett</a></h3>
                            </div>

                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-image">
                            <a href="team-single.html" class="image-anime" data-cursor-text="View">
                                <figure>
                                    <img src="images/team-2.jpg" alt="">
                                </figure>
                            </a>
                        </div>

                        <div class="team-body">
                            <div class="team-content">
                                <h3><a href="team-single.html">Darrell steward</a></h3>
                            </div>

                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-image">
                            <a href="team-single.html" class="image-anime" data-cursor-text="View">
                                <figure>
                                    <img src="images/team-3.jpg" alt="">
                                </figure>
                            </a>
                        </div>

                        <div class="team-body">
                            <div class="team-content">
                                <h3><a href="team-single.html">Ava mitchell</a></h3>
                            </div>

                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-image">
                            <a href="team-single.html" class="image-anime" data-cursor-text="View">
                                <figure>
                                    <img src="images/team-4.jpg" alt="">
                                </figure>
                            </a>
                        </div>

                        <div class="team-body">
                            <div class="team-content">
                                <h3><a href="team-single.html">Ethan carter</a></h3>
                            </div>

                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
        <!-- Our Team Section End -->

        <!-- What We Do Section Start -->
        <div class="what-we-do">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- What We Box Start -->
                        <div class="what-we-box">
                            <h3 class="text-effect">
                                <span style="color: #e63946;">Employment.</span>
                                <span style="color: #457b9d;">Empowerment.</span>
                                <span style="color: #2a9d8f;">Evolution</span>
                            </h3>

                            <!-- What We Image Start -->
                            <div class="what-we-img wow fadeInUp" data-wow-delay="0.2s">
                                <img src="images/ChatGPT Image Jun 18, 2025, 01_02_13 PM.png" alt="">
                            </div>
                            <!-- What We Image End -->

                            <!-- What We Image List Start -->
                            <!-- <div class="what-we-img-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>Skill Mapping Intelligence</li>
                                <li>Career Pathway Modeling</li>
                                <li>AI-Enabled Job Matching</li>
                                <li>Workforce Analytics</li>
                            </ul>
                        </div> -->
                            <!-- What We Image List End -->
                        </div>
                        <!-- What We Box End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- What We Do Content Start -->
                        <div class="what-we-do-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">Our Vision & Mission</h3>
                                <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"> Revolutionary
                                    Ecosystem for Jobs, <span> Skills & Empowerment</span></h2>
                                <!-- Vision Section -->
                                <div class="vision-section wow fadeInUp" data-wow-delay="0.4s">
                                    <h4 style="color: #6c5ce7; font-weight: 600; margin-bottom: 15px;">OUR VISION</h4>
                                    <p style="margin-bottom: 25px;">To illuminate the lives of millions by eradicating
                                        unemployment, connecting talent with the right opportunities, and empowering
                                        individuals to secure a better future. Through technology and skill development,
                                        we
                                        aim to reshape the job market, ensuring that no potential goes untapped and
                                        every
                                        family experiences the dignity of meaningful employment.</p>
                                </div>

                                <!-- Mission Section -->
                                <div class="mission-section wow fadeInUp" data-wow-delay="0.6s">
                                    <h4 style="color: #6c5ce7; font-weight: 600; margin-bottom: 15px;">OUR MISSION</h4>
                                    <p>Sabka is on a mission to revolutionize employment by bridging the gap between job
                                        seekers and industries, fostering a future where every skilled individual finds
                                        the
                                        right opportunity. We equip job seekers with essential, future-proof skills
                                        while
                                        enabling employers to navigate the challenges of an AI-driven world. By tackling
                                        unemployment at its core, we strive to build a workforce that is resilient,
                                        adaptable, and ready to drive economic growth.</p>
                                </div>
                            </div>
                            <!-- Section Title End -->

                            <!-- What We Do Body Start -->
                            <!-- <div class="what-we-do-body wow fadeInUp" data-wow-delay="0.8s">
                            <ul>
                                <li>Skill Development</li>
                                <li>Job Market Access</li>
                                <li>AI-Driven Training</li>
                                <li>Opportunity Matching</li>
                                <li>Employment Empowerment</li>
                            </ul>
                        </div> -->
                            <!-- What We Do Body End -->

                            <!-- What We Do Button Start -->
                            <!-- <div class="what-we-do-button wow fadeInUp" data-wow-delay="1.0s">
                            <a href="contact.html" class="btn-default">contact us</a>
                        </div> -->
                            <!-- What We Do Button End -->
                        </div>
                        <!-- What We Do Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- What We Do Section End -->

        <!-- Our Testimonials Section Start -->
        <!-- <div class="our-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonials-box">
                        <div class="testimonials-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">Testimonials</h3>
                                <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                                    Empowering Careers with <span>Smart Hiring</span>
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="0.4s">
                                    Hear how professionals and companies are transforming their career journeys
                                    through our intelligent job-matching and recruitment platform.
                                </p>
                            </div>

                            <div class="testimonials-body">
                                <div class="testimonials-counter-item">
                                    <h2><span class="counter">200</span>+</h2>
                                    <p>companies hired successfully</p>
                                </div>

                                <div class="testimonials-counter-item">
                                    <h2><span class="counter">500</span>+</h2>
                                    <p>job seekers placed</p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-header">
                                                <div class="testimonial-author">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="images/author-1.jpg" alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>Priya Sharma</h3>
                                                        <p>Software Engineer</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-quotes-img">
                                                    <img src="images/testimonials-quotes-img.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>
                                                    "The platform helped me land my dream job within just 3 weeks.
                                                    The interface is intuitive, and I appreciated the smart job alerts
                                                    that perfectly matched my skills."
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-header">
                                                <div class="testimonial-author">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="images/author-2.jpg" alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>Ravi Menon</h3>
                                                        <p>UI/UX Designer</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-quotes-img">
                                                    <img src="images/testimonials-quotes-img.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>
                                                    "The resume-building tools and personalized insights helped me
                                                    stand out. I received four interview calls in a week after
                                                    updating my profile."
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-header">
                                                <div class="testimonial-author">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="images/author-3.jpg" alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>Sneha Reddy</h3>
                                                        <p>HR Manager</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-quotes-img">
                                                    <img src="images/testimonials-quotes-img.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>
                                                    "As a recruiter, this platform has made our hiring process
                                                    smoother than ever. We consistently find high-quality candidates
                                                    faster than on any other portal."
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
        <!-- Our Testimonials Section End -->

        <!-- Our Faqs Section Start -->
        <!-- <div class="our-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faqs-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">faq's</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Job seeker questions,
                                <span>answered here</span></h2>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-accordion" id="accordion">
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    1. How do I apply for jobs on your platform?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>You can create an account, complete your profile, and directly apply to jobs
                                        listed by employers using the 'Apply Now' button on each job post.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    2. Is there any fee to use this job portal?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>No, our platform is completely free for job seekers. You can browse and apply for
                                        jobs at no cost.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    3. Can I upload my resume?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, you can upload your resume while creating your profile or apply to jobs
                                        directly using your uploaded CV.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    4. How will I know if I am shortlisted?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>If you are shortlisted, the employer will contact you via email or phone. You’ll
                                        also get a notification through your account dashboard.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    5. Can I apply for multiple jobs at once?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, you can apply to as many job listings as you like. Make sure each
                                        application is tailored to increase your chances of selection.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
        <!-- Our Faqs Section End -->

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
                                    <a href="#" class="social-link x-twitter"
                                        aria-label="X (formerly Twitter)">
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
