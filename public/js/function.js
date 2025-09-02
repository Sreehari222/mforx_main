(function ($) {
    "use strict";

    var $window = $(window);
    var $body = $('body');

    /* Preloader Effect */
    $window.on('load', function(){
        $(".preloader").fadeOut(600);
    });

    /* Sticky Header */
    if($('.active-sticky-header').length){
        $window.on('resize', function(){
            setHeaderHeight();
        });

        function setHeaderHeight(){
            $("header.main-header").css("height", $('header .header-sticky').outerHeight());
        }

        $window.on("scroll", function() {
            var fromTop = $(window).scrollTop();
            setHeaderHeight();
            var headerHeight = $('header .header-sticky').outerHeight();
            $("header .header-sticky").toggleClass("hide", (fromTop > headerHeight + 100));
            $("header .header-sticky").toggleClass("active", (fromTop > 600));
        });
    }

    /* Slick Menu JS */
    $('#menu').slicknav({
        label : '',
        prependTo : '.responsive-menu'
    });

    if($("a[href='#top']").length){
        $(document).on("click", "a[href='#top']", function() {
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });
    }

    /* Hero Company Slider JS */
    if ($('.hero-company-slider').length) {
        const hero_company_slider = new Swiper('.hero-company-slider .swiper', {
            slidesPerView : 2,
            speed: 2000,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
            },
            breakpoints: {
                768:{
                    slidesPerView: 4,
                },
                991:{
                    slidesPerView: 5,
                }
            }
        });
    }

    /* testimonial Slider JS */
    if ($('.testimonial-slider').length) {
        const testimonial_slider = new Swiper('.testimonial-slider .swiper', {
            slidesPerView : 1,
            speed: 1000,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.testimonial-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.testimonial-button-next',
                prevEl: '.testimonial-button-prev',
            },
            breakpoints: {
                768:{
                    slidesPerView: 1,
                },
                991:{
                    slidesPerView: 1,
                }
            }
        });
    }

    /* Skill Bar */
    if ($('.skills-progress-bar').length) {
        $('.skills-progress-bar').waypoint(function() {
            $('.skillbar').each(function() {
                $(this).find('.count-bar').animate({
                    width:$(this).attr('data-percent')
                },2000);
            });
        },{
            offset: '70%'
        });
    }

    /* Youtube Background Video JS */
    if ($('#herovideo').length) {
        var myPlayer = $("#herovideo").YTPlayer();
    }

    /* Init Counter */
    if ($('.counter').length) {
        $('.counter').counterUp({ delay: 6, time: 1500 });
    }

    /* Image Reveal Animation */
    if ($('.reveal').length) {
        gsap.registerPlugin(ScrollTrigger);
        let revealContainers = document.querySelectorAll(".reveal");
        revealContainers.forEach((container) => {
            let image = container.querySelector("img");
            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: container,
                    toggleActions: "play none none none"
                }
            });
            tl.set(container, {
                autoAlpha: 1
            });
            tl.from(container, 1, {
                xPercent: -100,
                ease: Power2.out
            });
            tl.from(image, 1, {
                xPercent: 100,
                scale: 1,
                delay: -1,
                ease: Power2.out
            });
        });
    }

    /* Text Effect Animation Start */
    if($('.text-effect').length) {
        var textheading = $(".text-effect");

        if(textheading.length == 0) return;
        gsap.registerPlugin(SplitText);
        textheading.each(function(index, el) {

            el.split = new SplitText(el, {
                type: "lines,words,chars",
                linesClass: "split-line"
            });

            if($(el).hasClass('text-effect')){
                gsap.set(el.split.chars, {
                    opacity: .3,
                    x: "-7",
                });
            }
            el.anim = gsap.to(el.split.chars, {
                scrollTrigger: {
                    trigger: el,
                    start: "top 92%",
                    end: "top 60%",
                    markers: false,
                    scrub: 1,
                },
                x: "0",
                y: "0",
                opacity: 1,
                duration: .7,
                stagger: 0.2,
            });

        });
    }
    /* Text Effect Animation End */

    /* Parallaxie js */
    var $parallaxie = $('.parallaxie');
    if($parallaxie.length && ($window.width() > 991)) {
        if ($window.width() > 768) {
            $parallaxie.parallaxie({
                speed: 0.55,
                offset: 0,
            });
        }
    }

    /* Zoom Gallery screenshot */
    $('.gallery-items').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom',
        image: {
            verticalFit: true,
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300,
            opener: function(element) {
                return element.find('img');
            }
        }
    });

    /* Contact form validation */
    var $contactform = $("#contactForm");

    // Get form action URL
    var contactSubmitUrl = $contactform.attr("action");

    // Set up CSRF token for Laravel
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $contactform.validator({focus: false}).on("submit", function (event) {
        if (!event.isDefaultPrevented()) {
            event.preventDefault();
            submitForm();
        }
    });

    function submitForm(){
        $.ajax({
            type: "POST",
            url: contactSubmitUrl,
            data: $contactform.serialize(),
            success: function (response) {
                console.log("Success response:", response);
                if (response.message === 'Message sent successfully') {
                    formSuccess();
                } else {
                    submitMSG(false, response.message || 'An unexpected error occurred.');
                }
            },
            error: function (xhr) {
                console.error("AJAX error:", xhr);
                let errorMessage = 'An error occurred while sending the message.';
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    errorMessage = Object.values(xhr.responseJSON.errors).flat().join(' ');
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                }
                submitMSG(false, errorMessage);
            }
        });
    }

    function formSuccess(){
        $contactform[0].reset();
        submitMSG(true, "Message Sent Successfully!");
    }

    function submitMSG(valid, msg){
        var msgClasses = valid ? "h4 text-success" : "h4 text-danger";
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
    /* Contact form validation end */

    /* Animated Wow Js */
    new WOW().init();

    /* Popup Video */
    if ($('.popup-video').length) {
        $('.popup-video').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: true
        });
    }

    /* Page Testimonials Item Active Start */
    var $page_testimonials = $('.page-testimonials');
    if ($page_testimonials.length) {
        var $testimonial_item = $page_testimonials.find('.testimonial-item');

        if ($testimonial_item.length) {
            $testimonial_item.on({
                mouseenter: function () {
                    if (!$(this).hasClass('active')) {
                        $testimonial_item.removeClass('active');
                        $(this).addClass('active');
                    }
                },
                mouseleave: function () {
                    // Optional: Add logic for mouse leave if needed
                }
            });
        }
    }
    /* Page Testimonials Item Active End */

    $(document).ready(function () {
    $('#investorForm').on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        let form = $(this);
        let url = form.attr('action');
        let submitBtn = form.find('button[type=submit]');

        // Optional: Disable submit button during request
        submitBtn.prop('disabled', true).text('Sending...');

        $.ajax({
            url: url,
            method: 'POST',
            data: form.serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
            },
            success: function (response) {
                // Show success message
                alert(response.message || 'Form submitted successfully!');

                // Optionally clear the form
                form[0].reset();
            },
            error: function (xhr) {
                // Show error details
                if (xhr.status === 422) {
                    // Laravel validation errors
                    let errors = xhr.responseJSON.errors;
                    let errorMsg = 'Please correct the following errors:\n\n';
                    $.each(errors, function (key, messages) {
                        errorMsg += '- ' + messages[0] + '\n';
                    });
                    alert(errorMsg);
                } else {
                    alert('An unexpected error occurred. Please try again.');
                }
            },
            complete: function () {
                // Re-enable submit button
                submitBtn.prop('disabled', false).text('Submit');
            }
        });
    });
});


})(jQuery);
