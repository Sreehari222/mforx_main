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
</head>

<body>
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img src="images/logoforxnew.png" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class=""><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('ecosystem') }}">Sabka
                                        Ecosystem</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('investor') }}">Investor
                                        Corner</a></li>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
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
                            <li class=""><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('ecosystem') }}">Sabka Ecosystem</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('investor') }}">Investor Corner</a>
                            </li>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header End -->
    <!-- Hero Section Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/faviconnew.png" alt=""></div>
        </div>
    </div>
    <!-- Hero Section Start -->
    <div class="hero">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <div class="video-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column -->
                <div class="col-lg-8">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <div class="section-title">
                            <h1 class="wow fadeInUp" data-cursor="-opaque">
                                <span>The World of Opportunities.</span>
                            </h1>
                        </div>
                    </div>
                    <!-- Hero Content End -->
                    <!-- Our Blog Section Start -->
                    <div class="our-platform container">
                        <div class="row g-4">
                            @forelse($videos as $video)
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="post-item wow fadeInUp h-100">
                                        <div class="post-meta">
                                            <div class="row p-0">
                                                <div class="col-12 col-sm-6">
                                                    <ul class="mb-3 mb-sm-0">
                                                        <li>
                                                            <a href="#">
                                                                @if ($video->type === 'self')
                                                                    <i
                                                                        class="fa-regular fa-circle-check text-success"></i>
                                                                    Self Service <br>
                                                                    <span>Platform</span>
                                                                @else
                                                                    <i class="fa-regular fa-star text-warning"></i>
                                                                    Premium Pro <br>
                                                                    <span>Platform</span>
                                                                @endif
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Dynamic Button Section -->
                                                <div
                                                    class="col-12 col-sm-6 d-flex justify-content-center align-items-center">
                                                    <div class="post-item-btn">
                                                        @if ($video->type === 'self')
                                                            <a href="https://www.sabkaworld.com/"
                                                                class="readmore-btn">
                                                                Visit Website
                                                            </a>
                                                        @else
                                                            <a href="{{route('notfound')}}" class="readmore-btn premium-pro-btn"
                                                                style="color: #35259f;">
                                                                Visit Website
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Video Section -->
                                        <div class="post-item-video-content mt-3 mt-sm-0">
                                            <div class="demo-video-card">
                                                @if ($video->video_url)
                                                    <!-- Show uploaded video -->
                                                    <div class="video-wrapper">
                                                        <video class="video-thumbnail img-fluid rounded" controls
                                                            preload="metadata">
                                                            <source src="{{ Storage::url($video->video_url) }}"
                                                                type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                @elseif($video->thumbnail)
                                                    <!-- Thumbnail if no video -->
                                                    <div class="video-wrapper">
                                                        <img src="{{ Storage::url($video->thumbnail) }}"
                                                            alt="{{ $video->title }}"
                                                            class="video-thumbnail img-fluid rounded" />
                                                    </div>
                                                @else
                                                    <!-- Fallback -->
                                                    <div class="video-wrapper">
                                                        <img src="{{ asset('images/default-thumbnail.jpg') }}"
                                                            alt="No Video Available"
                                                            class="video-thumbnail img-fluid rounded" />
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center">No videos found.</p>
                            @endforelse
                        </div>
                    </div>
                    <!-- Our Blog Section End -->
                </div>
                <!-- Right Column -->
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center justify-content-md-end align-items-end"
                    style="height: 100%;">
                    <div class="post-item wow fadeInUp p-4"
                        style="position: relative; top: clamp(50px, 15vw, 100px); width: 100%; max-width: 400px;">
                        <div class="app-buttons">
                            <div class="get-app-text text-white mb-3 d-flex justify-content-center align-items-center fw-bolder"
                                style="font-size: clamp(14px, 4vw, 16px);">
                                <b class="pe-2">Click</b> to Get SABKA App
                            </div>
                            <div
                                class="app-store-links d-flex flex-column flex-md-row gap-3 justify-content-center align-items-center">
                                <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
                                    alt="App Store"
                                    style="width: 100%; max-width: 150px; cursor: pointer; height: auto;"
                                    id="play" />
                                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                    alt="Google Play"
                                    style="width: 100%; max-width: 150px; cursor: pointer; height: auto;"
                                    id="app" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Coming Soon Modal -->
    <!-- <div id="comingSoonModal" class="coming-soon-modal">
        <div class="coming-soon-content">
            <h2> Coming Soon!</h2>
            <p>Our Premium Pro platform is currently under development. Stay tuned for an amazing experience!</p>
            <button class="close-btn" onclick="closeModal()">Got it!</button>
        </div>
    </div> -->
    <!-- CSS -->
    <!-- Hero Section End -->
    <div class="page-video-gallery" style="position: relative; bottom: 80px">
        <div class="container">
            <!-- Video Gallery Header Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-5">
                        <h3 class="wow fadeInUp" style="margin-top: 150px;">Platform . People . Purpose</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"
                            style="font-size: 30px;">
                            Sabka is Not Just a Job Vacancy Posting <span>Platform</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            It is India’s First Quick Recruitment Platform - Built on Trust, Driven by People, and
                            Designed To Transform the Way We Recruit.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Video Gallery Header End -->
            <!-- Swiper Slider Start -->
            <div class="page-video-gallery">
                <div class="container">
                    <div class="row">
                        @foreach ($welcomeVideos as $index => $video)
                            <div class="col-lg-4 col-md-6">
                                <div class="video-gallery-image wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                                    <a href="{{ Str::startsWith($video->video_url, ['http://', 'https://'])
                                        ? $video->video_url
                                        : asset('storage/' . $video->video_url) }}"
                                        class="popup-video" data-cursor-text="Play">
                                        <figure>
                                            <img src="{{ $video->thumbnail ? asset('storage/' . $video->thumbnail) : asset('images/default-thumbnail.jpg') }}"
                                                alt="{{ $video->title }}">
                                        </figure>
                                        <div class="video-overlay-info">
                                            <h5>{{ $video->title }}</h5>
                                            <span>{{ $video->position ? '' . $video->position : '' }}</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <img src="{{ asset('images/flowfinal.png') }}"alt="Sabka World Ecosystem"
                usemap="#flowmap"style="max-width: 100%; height: auto;">
            <map name="flowmap">
                <!-- Sabka Job App -->
                <!-- <area shape="rect" coords="50,260,250,340" href="https://example.com/sabka-job-app" alt="Sabka Job App" target="_blank"> -->
                <!-- www.sabkaworld.com -->
                <area shape="rect" coords="50,380,250,460" href="https://www.sabkaworld.com"
                    alt="Sabka World Website" target="_blank">
                <!-- Sabka Pro Hiring -->
                <area shape="rect" coords="450,380,650,460" href="https://example.com/sabka-pro-hiring"
                    alt="Sabka Pro Hiring" target="_blank">
            </map>
            <!-- About Us Section Start -->
            <div class="about-us">
                <div class="container">
                    <div class="row section-row align-items-center">
                        <div class="col-lg-12">
                            <!-- Section Title Start -->
                            <div class="section-title section-title-center">
                                <h3 class="wow fadeInUp">About Us</h3>
                                <h4 class="text-effect" data-cursor="-opaque"
                                    style="font-size: 30px; font-weight: 100;">India’s Fastest Growing Recruitment
                                    Platform
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
            </div>
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
            <!-- About Us Section End -->


            <!-- Gallery Section Start -->


            <div class="col-lg-12">
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Media and Events</h3>
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
        </div>
    </div>


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
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">The Revolutionary
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
    <!-- CTA Box Section End -->

    <!-- Welcome Section Start -->
    <!-- <section class="welcome-sabka">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="welcome-item wow fadeInUp">
                        <div class="welcome-content">
                            <h3>25,000+</h3>
                            <p>Job seekers actively looking for jobs</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="welcome-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="welcome-content">
                            <h3>5,000+</h3>
                            <p>Employers looking for candidates</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="welcome-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="welcome-content">
                            <h3>250,000+</h3>
                            <p>Job vacancies listed</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="welcome-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="welcome-content">
                            <h3>24,000+</h3>
                            <p>Job applications processed</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="welcome-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="welcome-content">
                            <h3>300+</h3>
                            <p>Employer-reported candidate selections</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="welcome-item wow fadeInUp" data-wow-delay="1s">
                        <div class="welcome-content">
                            <h3>Thousands</h3>
                            <p>Interview opportunities created</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section> -->
    <!-- Welcome Section End -->
    <div class="hero-company-slider" style="margin-bottom: 130px;">
        <p>Recruitment Partners</p>

        <div class="swiper">
    <div class="swiper-wrapper">
        @foreach ($partners as $partner)
            <div class="swiper-slide">
                <div class="company-logo">
                    <img src="{{ asset('storage/' . $partner->logo) }}"
                         alt="{{ $partner->name ?? 'Partner Logo' }}">
                </div>
            </div>
        @endforeach
    </div>
</div>

    </div>



    <!-- Testimonials Section Start -->
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
                                                    smoother than ever. We consistently find high-quality
                                                    candidates
                                                    faster than on any other portal."
                                                </p>
                                            </div>
                                        </div>
                                    </div>
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
    <!-- Testimonials Section End -->

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
    <!-- Mermaid.js Script for Flowchart (UPDATED) -->


</body>

</html>
