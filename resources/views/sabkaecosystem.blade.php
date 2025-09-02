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
        <div class="page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <!-- Page Header Box Start -->
                        <div class="page-header-box">
                            <h1 class="wow fadeInUp" data-cursor="-opaque">Sabka World <span>Ecosystem</span></h1>
                            <nav class="wow fadeInUp" data-wow-delay="0.2s">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sabka World Ecosystem</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Page Header Box End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Services Section Start -->
        <div class="flowchart-section" style="position: relative; bottom: 80px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title section-title-center">
                            <!-- <h3 class="wow fadeInUp">sabka World Ecosystem</h3> -->
                            <!-- <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                                    Sabka Ecosystem <span>Flowchart</span>
                                </h2> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img src="images/flowfinal.png" alt="">
                    </div>
                </div>
            </div>
        </div>



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

                    <div class="col-lg-6 " style="position: relative; top: 60px;">
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
                                        adaptable, and ready to drive economic growth.
                                    </p>
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
                                                        "The platform helped me land my dream job within just 3 weeks.
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
                                                        "The resume-building tools and personalized insights helped me
                                                        stand out. I received four interview calls in a week after
                                                        updating my profile."
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
                                        <!-- Testimonial Slide End -->
                                    </div>
                                    <div class="testimonial-pagination"></div>
                                </div>
                            </div>
                            <!-- Testimonial Slider End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Our Testimonials Section End -->


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
