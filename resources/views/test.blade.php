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
    <title>Nextmind - AI Agency & Technology HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ asset('css/mousecursor.css') }}">
    <!-- Main Custom Css -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen">

    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logoforxnew.png" alt="Logo" style="width: 190px; ">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class=""><a class="nav-link" href="{{ route('dashboard') }}">Home</a></li>
                                <!-- <ul>
                                        <li class="nav-item"><a class="nav-link" href="index.html">Home - Main</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-image.html">Home -
                                                Image</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-video.html">Home -
                                                Video</a></li>
                                    </ul> -->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('ecosystem') }}">Sabka
                                        Ecosystem</a></li>
                                </li>
                                <!-- <li class="nav-item"><a class="nav-link" href="#">Blog</a></li> -->
                                <!-- <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="service-single.html">Service
                                                Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog
                                                Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
                                        <li class="nav-item"><a class="nav-link" href="project-single.html">Projects
                                                details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="team.html">Our Team</a></li>
                                        <li class="nav-item"><a class="nav-link" href="team-single.html">Team
                                                Details</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="testimonials.html">Testimonials</a></li>
                                        <li class="nav-item"><a class="nav-link" href="image-gallery.html">Image
                                                Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="video-gallery.html">Video
                                                Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="faqs.html">FAQs</a></li>
                                        <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                    </ul>
                                </li> -->

                                <li class="nav-item"><a class="nav-link" href="{{ route('investor') }}">Investor
                                        Corner</a></li>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact
                                        Us</a></li>
                            </ul>
                        </div>

                        <!-- Header App Buttons Start -->
                        <!-- <div class="header-app-buttons">
                            <a href="https://apps.apple.com" target="_blank" class="header-store-btn apple">
                                <i class="fab fa-apple"></i>
                                <span>App Store</span>
                            </a>
                            <a href="https://play.google.com/store" target="_blank" class="header-store-btn google">
                                <i class="fab fa-google-play"></i>
                                <span>Google Play</span>
                            </a>
                        </div> -->
                        <!-- Header App Buttons End -->

                        <!-- Header Btn Start -->
                        <!-- <div class="header-btn">
                            <a href="contact.html" class="btn-default">Get Started</a>
                        </div> -->
                        <!-- Header Btn End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>

</head>

<body>
    <div class="hero">
        <!-- Video Background -->
        <video autoplay muted loop playsinline class="hero-video">
            <source src="images/sabcanew.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video>

        <!-- Dark Gradient Overlay -->
        <div class="video-overlay"></div>

        <!-- Content Container -->
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column -->
                <div class="col-lg-8 col-md-12">
                    <div class="hero-content">
                        <!-- Section Title -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s" style="text-align: left;">
                            <h2 class="responsive-heading"
                                style="font-size: clamp(24px, 5vw, 40px); color: white; line-height: 1.2;">
                                Welcome to Sabka <span style="color: #f3a9ff;">World of Opportunities</span>
                            </h2>
                        </div>
                        <!-- Yellow Highlight - Main Question -->
                        <div class="yellow-highlightt large wow fadeInUp" data-wow-delay="0.12s"
                            style="font-size: clamp(16px, 3vw, 20px); ">
                            Need Direct Self-Service Access to Job Vacancies & The Job Seeker Pool?

                        </div>

                        <!-- Secondary Button - Added above App Download -->
                        <div class="hero-secondary-btn wow fadeInUp" data-wow-delay="0.14s"
                            style="margin-bottom: 0px;">
                            <a href="https://sabkaworld.com" target="_blank" class="secondary-btn"
                                style="
                                display: inline-flex;
                                align-items: center;
                                gap: 8px;
                                padding: 12px 25px;
                                border: 2px solid rgba(255, 255, 255, 0.4);
                                background: rgba(255, 255, 255, 0.1);
                                color: white;
                                text-decoration: none;
                                border-radius: 30px;
                                font-size: 14px;
                                font-weight: 500;
                                transition: all 0.3s ease;
                                backdrop-filter: blur(10px);
                                text-transform: uppercase;
                                letter-spacing: 0.5px;
                                position: relative;
                                bottom: 50px;
                            ">
                                <i class="fas fa-globe"></i>
                                <span>For website access <strong>click here</strong></span>
                            </a>
                        </div>

                        <!-- App Download Title -->
                        <div class="app-section-title wow fadeInUp" data-wow-delay="0.15s">
                            Download Sabka Job App
                        </div>

                        <!-- App Buttons -->
                        <div class="hero-app-buttons wow fadeInUp" data-wow-delay="0.2s">
                            <a href="https://apps.apple.com" target="_blank" class="hero-store-btn apple">
                                <i class="fab fa-apple"></i>
                                <span>App Store</span>
                            </a>
                            <a href="https://play.google.com/store" target="_blank" class="hero-store-btn google">
                                <img src="images/google-play.png" alt="">
                                <span>Google Play</span>
                            </a>
                        </div>

                        <!-- Yellow Highlight - No Time Question -->
                        <div class="yellow-highlight small wow fadeInUp" data-wow-delay="0.22s">
                            No Time for Self Service? Get Pro Support for Your Hiring
                        </div>

                        <!-- Explore Button -->
                        <!-- Explore Button Group -->
                        <div class="hero-btn-group wow fadeInUp" data-wow-delay="0.25s"
                            style="display: flex; flex-direction: column; gap: 16px; position: relative; bottom: 10px;">

                            <!-- Recruitment Button -->
                            <a href="https://sabkaworld.com" target="_blank" class="store-btn"
                                style="display: inline-flex; align-items: center; gap: 8px; justify-content: center;
                                   padding: 12px 20px; width: 100%; background: rgba(255,255,255,0.1); border-radius: 12px;
                                   color: white; font-weight: 500; text-decoration: none; backdrop-filter: blur(10px);">
                                <i class="fas fa-rocket"></i>
                                <span>Explore Personalised Recruitment Services</span>
                            </a>

                            <!-- Courses Button (Matching Style) -->
                            <a href="https://sabkaworld.com" target="_blank" class="store-btn"
                                style="display: inline-flex; align-items: center; gap: 8px; justify-content: center;
                                   padding: 12px 20px; width: 100%; background: rgba(255,255,255,0.1); border-radius: 12px;
                                   color: white; font-weight: 500; text-decoration: none; backdrop-filter: blur(10px);">
                                <i class="fas fa-rocket"></i>
                                <span>For Courses and Classes</span>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0" style="position: relative; bottom: 90px;">
                    <!-- Video 1 -->
                    <div class="video-gallery-image mb-3 wow fadeInUp" data-wow-delay="0.3s">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                            <img src="images/graduation.jpg" alt="Video Gallery 1">
                            <div class="play-btn"><i class="fas fa-play"></i></div>
                            <div class="video-overlay-info">
                                <h5 class="video-name">John Doe</h5>
                                <p class="video-position">Creative Director</p>
                            </div>
                        </a>
                    </div>

                    <!-- Video 2 -->
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="0.4s">
                        <a href="https://www.youtube.com/watch?v=oUFJJNQGwhk" class="popup-video">
                            <img src="images/graduation.jpg" alt="Video Gallery 2">
                            <div class="play-btn"><i class="fas fa-play"></i></div>
                            <div class="video-overlay-info">
                                <h5 class="video-name">Jane Smith</h5>
                                <p class="video-position">Marketing Head</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="hero-company-slider">
            <!-- Company slider content can be added here -->
        </div>
    </div>

    <style>
        .video-gallery-image {
            position: relative;
            overflow: hidden;
        }

        .video-gallery-image figure img {
            width: 100%;
            display: block;
        }

        .video-overlay-info {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 15px;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            text-align: center;
            opacity: 0;
            transition: 0.3s ease;
        }

        .video-gallery-image:hover .video-overlay-info {
            opacity: 1;
        }

        .video-overlay-info h5 {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }

        .video-overlay-info span {
            font-size: 14px;
            display: block;
            margin-top: 4px;
        }
    </style>


    <div class="page-video-gallery" style="position: relative; bottom: 80px">
        <div class="container">
            <!-- Video Gallery Header Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-5">
                        <h3 class="wow fadeInUp" style="margin-top: 150px;">Videos</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            Video <span>Corner</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            Explore our collection of inspiring stories, success journeys, and behind-the-scenes
                            moments
                            that showcase our commitment to transforming careers and empowering individuals.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Video Gallery Header End -->

            <!-- Swiper Slider Start -->
            @foreach ($videos as $key => $video)
                <div class="col-lg-4 col-md-6">
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="{{ 0.2 * $key }}s">
                        <div class="video-overlay-info">
                            <h5>{{ $video->title }}</h5>
                            <span>{{ $video->designation }}</span>
                        </div>
                        <video width="100%" height="200" controls style="margin-top: 10px;">
                            <source src="{{ asset($video->video_file) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            @endforeach

            <section class="roadmap">
                <img src="images/line.png" alt="" class="img-line">
                <div class="shape"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title section-title-center">
                                <h3 class="wow fadeInUp">sabka world ecosystem</h3>
                                <h2 class="wow fadeInUp" data-wow-delay="0.2s">A Structured model for
                                    <span>Employment, Empowerment, and Scalable Investment.</span>
                                </h2>
                            </div>
                        </div>

                        <!-- Desktop View -->
                        <div class="desktop-view">
                            <div class="roadmap__main" data-aos="fade-up" data-aos-duration="2000">
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">Emforx Solutions Pvt Ltd</h3>
                                </div>

                                <div class="section-title">
                                    <h3 class="wow fadeInUp">Sabka Care Foundation</h3>
                                </div>

                                <div class="roadmap-box">
                                    <div class="content">
                                        <h5 class="title">Sabka Job App - The Mobile Application</h5>
                                        <p class="text">An open platform connecting job seekers with employers
                                            without Intermediaries.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box right">
                                    <div class="content">
                                        <h5 class="title">Education</h5>
                                        <p class="text">Providing quality educational resources, scholarships, and
                                            learning opportunities to underprivileged students and youth.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box">
                                    <div class="content">
                                        <h5 class="title">www.sabkaworld.com - The Website</h5>
                                        <p class="text">A nationwide open platform providing extensive job listings,
                                            career resources, and employer branding solutions.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box right">
                                    <div class="content">
                                        <h5 class="title">Employment</h5>
                                        <p class="text">Free training programs, job placement assistance, and career
                                            guidance for those seeking meaningful employment opportunities.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box">
                                    <div class="content">
                                        <h5 class="title">Sabka Pro Hiring - Professional Recruitment Service</h5>
                                        <p class="text">The professional recruitment arm for structured hiring
                                            solutions. We don't just connect people to jobs - we guide them, add
                                            real value, uphold ethics, and help them build a better future.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box right">
                                    <div class="content">
                                        <h5 class="title">Empowerment</h5>
                                        <p class="text">Supporting individuals with essential resources like food,
                                            clothing, accommodation, and travel assistance for job interviews.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box">
                                    <div class="content">
                                        <h5 class="title">Sabka Skill Academy - The Job Preparation Studio</h5>
                                        <p class="text">A learning platform to upskill job seekers for better
                                            careers.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box right">
                                    <div class="content">
                                        <h5 class="title">Engagement</h5>
                                        <p class="text">Building strong community connections through mentorship
                                            programs, networking events, and ongoing support systems.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box">
                                    <div class="content">
                                        <!-- <h5 class="title">Sabka Skill Academy - The Job Preparation Studio</h5> -->
                                        <p class="text">
                                            <strong>The Engine Behind Sabka’s Vision.</strong> Emforx is the parent
                                            company powering an integrated ecosystem built to solve India’s
                                            employment and skill-gap crisis through scalable technology and
                                            human-centric platforms:
                                        </p>
                                        <ul class="text">
                                            <li>Sabkaworld.com & Sabka Mobile App – A nationwide open platform for
                                                job seekers and employers</li>
                                            <li>Sabka Pro Hiring & Sabka Visa – Technology powered Domestic and
                                                International recruitment</li>
                                            <li>Sabka Skill Academy – Practical, industry-aligned job training and
                                                upskilling programs</li>
                                        </ul>
                                        <p class="text">
                                            <strong>Mission:</strong> To be India’s most trusted name in employment
                                            – Locally and Globally.
                                        </p>
                                    </div>
                                </div>

                                <!-- ✅ Excellence on RIGHT side -->
                                <div class="roadmap-box right" style="height: 200px;">
                                    <div class="content">
                                        <h5 class="title">Excellence</h5>
                                        <p class="text">Maintaining high standards in all programs while
                                            continuously innovating to deliver maximum impact and sustainable
                                            outcomes.</p>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- Mobile View -->
                        <div class="mobile-view">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">Emforx Solutions Pvt Ltd</h3>
                            </div>

                            <div class="roadmap__main" data-aos="fade-up" data-aos-duration="2000">
                                <div class="roadmap-box">
                                    <div class="content">
                                        <h5 class="title">Sabka Job App - The Mobile Application</h5>
                                        <p class="text">An open platform connecting job seekers with employers
                                            without Intermediaries.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box">
                                    <div class="content">
                                        <h5 class="title">www.sabkaworld.com - The Website</h5>
                                        <p class="text">A nationwide open platform providing extensive job listings,
                                            career resources, and employer branding solutions.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box">
                                    <div class="content">
                                        <h5 class="title">Sabka Pro Hiring - Professional Recruitment Service</h5>
                                        <p class="text">The professional recruitment arm for structured hiring
                                            solutions. We don't just connect people to jobs - we guide them, add
                                            real value, uphold ethics, and help them build a better future.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box">
                                    <div class="content">
                                        <h5 class="title">Sabka Skill Academy - The Job Preparation Studio</h5>
                                        <p class="text">A learning platform to upskill job seekers for better
                                            careers.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="section-title">
                                <h3 class="wow fadeInUp">Sabka Care Foundation</h3>
                            </div>

                            <div class="roadmap__main" data-aos="fade-up" data-aos-duration="2000">
                                <div class="roadmap-box">
                                    <div class="content">
                                        <h5 class="title">Education</h5>
                                        <p class="text">Providing quality educational resources, scholarships, and
                                            learning opportunities to underprivileged students and youth.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box">
                                    <div class="content">
                                        <h5 class="title">Employment</h5>
                                        <p class="text">Free training programs, job placement assistance, and career
                                            guidance for those seeking meaningful employment opportunities.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box">
                                    <div class="content">
                                        <h5 class="title">Empowerment</h5>
                                        <p class="text">Supporting individuals with essential resources like food,
                                            clothing, accommodation, and travel assistance for job interviews.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box">
                                    <div class="content">
                                        <h5 class="title">Engagement</h5>
                                        <p class="text">Building strong community connections through mentorship
                                            programs, networking events, and ongoing support systems.</p>
                                    </div>
                                </div>

                                <div class="roadmap-box">
                                    <div class="content">
                                        <h5 class="title">Excellence</h5>
                                        <p class="text">Maintaining high standards in all programs while
                                            continuously innovating to deliver maximum impact and sustainable
                                            outcomes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const elements = document.querySelectorAll('.wow, [data-aos]');
                    elements.forEach(el => {
                        el.classList.add('fadeInUp');
                        if (el.hasAttribute('data-aos')) {
                            el.classList.add('aos-animate');
                        }
                    });
                });

                window.addEventListener('scroll', function() {
                    const elements = document.querySelectorAll('[data-aos]');
                    elements.forEach(el => {
                        const rect = el.getBoundingClientRect();
                        if (rect.top < window.innerHeight && rect.bottom > 0) {
                            el.classList.add('aos-animate');
                        }
                    });
                });
            </script>














            <!-- About Us Section Start -->
            <div class="about-us">
                <div class="container">
                    <div class="row section-row align-items-center">
                        <div class="col-lg-12">
                            <!-- Section Title Start -->
                            <div class="section-title section-title-center">
                                <h3 class="wow fadeInUp">About Us</h3>
                                <h4 class="text-effect" data-cursor="-opaque"
                                    style="font-size: 30px; font-weight: 100;">Sabka
                                    is India’s next-generation employment platform, designed to simplify job search
                                    and
                                    hiring
                                    through advanced technology.

                                </h4>
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



                <!-- Gallery Section Start -->
                <style>
                    .image-anime {
                        position: relative;
                        overflow: hidden;
                    }

                    .image-anime img {
                        width: 100%;
                        display: block;
                        transition: 0.3s ease;
                    }

                    .overlay-text {
                        position: absolute;
                        top: -100%;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: rgba(15, 15, 15, 0.8);
                        color: #fff;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;
                        transition: 0.4s ease;
                        text-align: center;
                    }

                    .image-anime:hover .overlay-text {
                        top: 0;
                    }

                    .overlay-text h4 {
                        font-size: 18px;
                        margin-bottom: 6px;
                    }

                    .overlay-text p {
                        font-size: 14px;
                        margin: 0;
                    }
                </style>

                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Gallery with Title</h3>
                    </div>
                </div>

                <div class="page-gallery">
                    <div class="container">
                        <div class="row gallery-items page-gallery-box">
                            @foreach ($galleries as $index => $item)
                                <div class="col-lg-4 col-6">
                                    <div class="photo-gallery wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                                        <a href="{{ asset('storage/' . $item->image) }}" data-cursor-text="View">
                                            <figure class="image-anime">
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                                <div class="overlay-text">
                                                    <h4>{{ $item->name }}</h4>
                                                    <p>{{ $item->role }}</p>
                                                </div>
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Gallery Section End -->



                <style>
                    .slider-container {
                        overflow: hidden;
                        width: 100%;
                        position: relative;
                    }

                    .slider-wrapper {
                        display: flex;
                        transition: transform 0.5s ease-in-out;
                        width: calc(100% * 2);
                        /* 12 projects (6 original + 6 duplicates) for seamless loop */
                    }

                    .project-slide {
                        flex: 0 0 16.666%;
                        /* 100% / 6 = 16.666% for 6 projects visible */
                        padding: 0 10px;
                        box-sizing: border-box;
                    }

                    .project-item {
                        height: 100%;
                    }


                    /* Responsive adjustments */
                    @media (max-width: 1200px) {
                        .project-slide {
                            flex: 0 0 25%;
                            /* 4 slides visible */
                        }
                    }

                    @media (max-width: 768px) {
                        .project-slide {
                            flex: 0 0 50%;
                            /* 2 slides visible */
                        }

                        .section-title h2 {
                            font-size: 28px;
                        }

                        .container-fluid {
                            padding: 0 15px;
                        }
                    }

                    @media (max-width: 576px) {
                        .project-slide {
                            flex: 0 0 100%;
                        }

                        .section-title h2 {
                            font-size: 24px;
                        }

                        .project-content {
                            padding: 15px;
                        }

                        .project-image {
                            height: 500px;
                        }

                        .project-content p {
                            padding-right: 300px;
                            font-size: 14px;
                            line-height: 1.6;

                        }


                    }
                </style>


            </div>
        </div>
    </div>
    </div>



    <div class="what-we-do">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- What We Box Start -->
                    <div class="what-we-box">
                        <h3 class="text-effect">We fuse technology, purpose, and innovation to create scalable,
                            employment-ready solutions that empower individuals and drive inclusive growth.</h3>

                        <!-- What We Image Start -->
                        <div class="what-we-img wow fadeInUp" data-wow-delay="0.2s">
                            <img src="images/ChatGPT Image Jun 18, 2025, 01_02_13 PM.png" alt="">
                        </div>
                        <!-- What We Image End -->

                        <!-- What We Image List Start -->
                        <div class="what-we-img-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>Skill Mapping Intelligence</li>
                                <li>Career Pathway Modeling</li>
                                <li>AI-Enabled Job Matching</li>
                                <li>Workforce Analytics</li>
                            </ul>
                        </div>
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
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Innovative
                                Hiring,<span> Meaningful Employment</span></h2>

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
                        <div class="what-we-do-body wow fadeInUp" data-wow-delay="0.8s">
                            <ul>
                                <li>Skill Development</li>
                                <li>Job Market Access</li>
                                <li>AI-Driven Training</li>
                                <li>Opportunity Matching</li>
                                <li>Employment Empowerment</li>
                            </ul>
                        </div>
                        <!-- What We Do Body End -->

                        <!-- What We Do Button Start -->
                        <div class="what-we-do-button wow fadeInUp" data-wow-delay="1.0s">
                            <a href="contact.html" class="btn-default">contact us</a>
                        </div>
                        <!-- What We Do Button End -->
                    </div>
                    <!-- What We Do Content End -->
                </div>
            </div>
        </div>
    </div>


    <!-- Special Features Section Start -->
    <div class="special-features">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Special Features</h3>
                        <!-- <h2>Special  <span>Features</span></h2> -->
                    </div>
                </div>
            </div>
            <div class="row">
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
                            <h3>Direct Employer Selection</h3>
                            <p>Employers can directly choose candidates best suited for their roles.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="feature-item-content">
                            <h3>Direct Job Seeker Contact</h3>
                            <p>Job seekers can reach out to employers directly for opportunities.</p>
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
                            <h3>Urgent Jobseeker & Hiring Badge</h3>
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
                            <h3>Cash Back Offers</h3>
                            <p>Enjoy exclusive cash back offers for job seekers.</p>
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
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="fas fa-user-cog"></i>
                        </div>
                        <div class="feature-item-content">
                            <h3>Profile Optimisation Support</h3>
                            <p>Get expert help to optimize your profile and enhance visibility.</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- CTA Box Section End -->

    <!-- What We Do Section Start -->

    <!-- What We Do Section End -->

    <!-- Our Testimonials Section Start -->

    <section class="welcome-sabka">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Welcome to Sabka</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">India’s Fastest
                            Growing
                            <span>Hiring Platform</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @php $delay = 0.2; @endphp
                @foreach ($welcomeStats as $stat)
                    <div class="col-lg-4 col-md-6">
                        <div class="welcome-item wow fadeInUp" data-wow-delay="{{ $delay }}s">
                            <div class="welcome-content">
                                <h3>{{ $stat->value }}</h3>
                                <p>{{ $stat->title }}</p>
                            </div>
                        </div>
                    </div>
                    @php $delay += 0.2; @endphp
                @endforeach
            </div>

            <div class="row">
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
            </div>
        </div>
    </section>


    <!-- Our Blog Section End -->

    <div class="our-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonials-box">
                        <!-- Testimonials Content Start -->
                        <div class="testimonials-content">
                            <!-- Section Title Start -->
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
                            <!-- Section Title End -->

                            <!-- Testimonials Body Start -->
                            <div class="testimonials-body">
                                @foreach ($testimonials as $testimonial)
                                    <div class="testimonials-counter-item">
                                        <h2><span class="counter">{{ $testimonial->count }}</span>+</h2>
                                        <p>{{ $testimonial->title }}</p>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Testimonials Body End -->
                        </div>
                        <!-- Testimonials Content End -->

                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <!-- Testimonial Slide Start -->
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
                                                    "The platform helped me land my dream job within just 3
                                                    weeks.
                                                    The interface is intuitive, and I appreciated the smart job
                                                    alerts
                                                    that perfectly matched my skills."
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->
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
                                                    "The resume-building tools and personalized insights helped
                                                    me
                                                    stand out. I received four interview calls in a week after
                                                    updating my profile."
                                                </p>
                                            </div>
                                        </div>
                                    </div>
