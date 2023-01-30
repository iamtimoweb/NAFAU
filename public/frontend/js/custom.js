$(document).ready(function () {

    /*------------------------------------
	Sticky Menu
--------------------------------------*/
    var windows = $(window);
    var stick = $(".header-sticky");
    windows.on('scroll', function () {
        var scroll = windows.scrollTop();
        if (scroll < 5) {
            stick.removeClass("sticky");
        } else {
            stick.addClass("sticky");
        }
    });
    /*--
  Mobile Menu
------------------------*/
    $('.main-menu nav').meanmenu({
        meanScreenWidth: '991',
        meanMenuContainer: '.mobile-menu',
        meanMenuClose: '<i class="ti-close"></i>',
        meanMenuOpen: '<i class="ti-menu"></i>',
        meanRevealPosition: 'right',
        meanMenuCloseSize: '30px',
    });

    /*------------------------------------
      Owl Carousel
  --------------------------------------*/
    $('.slider-owl').owlCarousel({
        loop: true,
        nav: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
        autoplay: true,
        smartSpeed: 2000,
        autoplayTimeout: 10000,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });


    /*-- testimonial slider
  -----------------------------------*/
    $('.testimonial-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 7000,
        fade: true,
        draggable: false,
        cssEase: 'linear',
        dots: false,
        arrows: true,
        prevArrow: '<button type=\'button\' class=\'prevArrow\'></button>',
        nextArrow: '<button type=\'button\' class=\'nextArrow\'></button>',
    });

    /*-- Shuffle js filter and masonry
-----------------------------------*/
    function ourImpactShuffle() {
        if ($('.our-impact__wrapper').length !== 0) {
            var Shuffle = window.Shuffle;
            var myShuffle = new Shuffle(document.querySelector('.our-impact__wrapper'), {
                itemSelector: '.our-impact__item',
                sizer: '.our-impact__sizer',
                buffer: 1
            });
            $('input[name="our-impact__filter"]').on('change', function (event) {
                var input = event.currentTarget;
                if (input.checked) {
                    console.log(input.checked)
                    console.log(typeof (input.value) + '-' + input.value)
                    myShuffle.filter(input.value);
                }
            });
            $('.our-impact__btn-group label').on('click', function () {
                $('.our-impact__btn-group label').removeClass('active');
                $(this).addClass('active');
            });
        }
    }

    ourImpactShuffle();


    /*-- Our Strategy
-----------------------------------*/
    $('.strategy_active').owlCarousel({
        // loop:true,
        margin: 30,
        items: 1,
        // autoplay:true,
        navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
        nav: true,
        dots: false,
        autoplayHoverPause: true,
        autoplaySpeed: 800,
        responsive: {
            0: {
                items: 1,
                // nav: false,
            },
            767: {
                items: 2,
                // nav: false
            },
            992: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    });

    /*-- Our Programs
-----------------------------------*/
    $('.programs_active').owlCarousel({
        margin: 5,
        items: 1,
        autoplay: true,
        loop: true,
        navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
        nav: true,
        dots: false,
        autoplayHoverPause: true,
        autoplaySpeed: 300,
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 2
            },

            1024: {
                items: 3
            },

            1366: {
                items: 4
            }
        }
    });

    /*-- Malnutrition Slick Slider
-----------------------------------*/
    $('.malnutrition__slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: false,
        autoplay: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 401,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    /*====================
    display function feedbacks on submitting of a form
    * ====================*/
    function displaySubmitting(submitBtn, defaultText, doSubmit) {
        if (doSubmit) {
            submitBtn.attr("disabled", true)
                .html(
                    ' <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>\n' +
                    '  Please wait...'
                )
                .css('cursor', 'not-allowed');
        } else {
            submitBtn.attr("disabled", false)
                .html(defaultText)
                .css('cursor', 'pointer');
        }
    }

    /*-- Contact Form
-----------------------------------*/
    const contactForm = $('#contactForm');
    if (contactForm.length) {
        contactForm.validate({
            rules: {
                firstname: {
                    required: true,
                    maxlength: 30,
                    minlength: 3
                },
                lastname: {
                    required: true,
                    maxlength: 30,
                    minlength: 3
                },
                email: {
                    required: true,
                    maxlength: 30,
                    email: true
                },
                subject: {
                    required: true,
                    maxlength: 30,
                    minlength: 3
                },
                message: {
                    required: true,
                    maxlength: 500,
                    minlength: 3
                }
            },
            errorElement: "span",
            errorPlacement: function (error, element) {
                error.addClass("invalid-feedback");
                element.closest(".form-group").append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass("is-invalid").css({border: '1px solid #dc3545'});
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass("is-invalid").css({border: 0});
            },

            submitHandler: function (form, e) {
                e.preventDefault();
                const submit__button = contactForm.find("button[type='submit']")
                const submit__button__text = submit__button.text();
                displaySubmitting(submit__button, '', true)
                const Alert = $('#alertSuccess');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method: contactForm.attr('method'),
                    url: contactForm.attr('action'),
                    data: contactForm.serialize(),
                    beforeSend: function () {
                        contactForm.find('span.error-text').text('')
                    },
                    success: function (res) {
                        if (res.status === 400) {
                            $.each(res.error, function (prefix, val) {
                                $('span.' + prefix + '_error').text(val[0]).addClass("text-danger");
                            });
                            displaySubmitting(submit__button, submit__button__text, false)
                        } else if (res.status === 200) {
                            contactForm[0].reset();
                            Alert.text(res.message).show();
                            setTimeout(() => {
                                Alert.slideUp(500);
                            }, 4000)
                            displaySubmitting(submit__button, submit__button__text, false)
                        }
                    },
                    error: function (err) {
                        console.log('Error:', err);
                        displaySubmitting(submit__button, submit__button__text, false)
                    }
                });
                return false;
            }
        })
    }

    /*-- back to top button
    Back-to-top
    -----------------------------------*/
    // easeInOutExpo Declaration
    jQuery.extend(jQuery.easing, {
        easeInOutExpo: function (x, t, b, c, d) {
            if (t === 0) {
                return b;
            }
            if (t === d) {
                return b + c;
            }
            if ((t /= d / 2) < 1) {
                return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
            }
            return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
        }
    });

    /**
     * Initiate portfolio lightbox
     */
    const portfolioLightbox = GLightbox({
        selector: '.our-impact__gallery-popup, .image-popup, .popup-image',
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });


    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $(".back-to-top").addClass('active');
        } else {
            $(".back-to-top").removeClass('active');
        }
    });

    $(".back-to-top").click(function () {
        $("html, body").animate(
            {
                scrollTop: 0
            },
            1500,
            "easeInOutExpo"
        );
        return false;
    });
})
