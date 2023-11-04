AOS.init({
    duration: 800,
    easing: 'slide'
});

(function ($) {

    "use strict";

    $(window).stellar({
        responsive: true,
        parallaxBackgrounds: true,
        parallaxElements: true,
        horizontalScrolling: false,
        hideDistantElements: false,
        scrollProperty: 'scroll'
    });


    var fullHeight = function () {

        $('.js-fullheight').css('height', $(window).height());
        $(window).resize(function () {
            $('.js-fullheight').css('height', $(window).height());
        });

    };
    fullHeight();

    // loader
    var loader = function () {
        setTimeout(function () {
            if ($('#ftco-loader').length > 0) {
                $('#ftco-loader').removeClass('show');
            }
        }, 1);
    };
    loader();

    // Scrollax
    $.Scrollax();

    var carousel = function () {
        $('.home-slider').owlCarousel({
            loop: true,
            autoplay: true,
            margin: 0,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: false,
            autoplayHoverPause: false,
            items: 1,
            navText: ["<span class='ion-md-arrow-back'></span>", "<span class='ion-chevron-right'></span>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
        $('.carousel-testimony').owlCarousel({
            autoplay: true,
            center: true,
            loop: true,
            items: 1,
            margin: 30,
            stagePadding: 0,
            nav: false,
            navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });

    };
    carousel();

    $('nav .dropdown').hover(function () {
        var $this = $(this);
        // 	 timer;
        // clearTimeout(timer);
        $this.addClass('show');
        $this.find('> a').attr('aria-expanded', true);
        // $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
        $this.find('.dropdown-menu').addClass('show');
    }, function () {
        var $this = $(this);
        // timer;
        // timer = setTimeout(function(){
        $this.removeClass('show');
        $this.find('> a').attr('aria-expanded', false);
        // $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
        $this.find('.dropdown-menu').removeClass('show');
        // }, 100);
    });


    $('#dropdown04').on('show.bs.dropdown', function () {
        console.log('show');
    });



    // scroll
    var scrollWindow = function () {
        $(window).scroll(function () {
            var $w = $(this),
                st = $w.scrollTop(),
                navbar = $('.ftco_navbar'),
                sd = $('.js-scroll-wrap');

            if (st > 150) {
                if (!navbar.hasClass('scrolled')) {
                    navbar.addClass('scrolled');
                }
            }
            if (st < 150) {
                if (navbar.hasClass('scrolled')) {
                    navbar.removeClass('scrolled sleep');
                }
            }
            if (st > 350) {
                if (!navbar.hasClass('awake')) {
                    navbar.addClass('awake');
                }

                if (sd.length > 0) {
                    sd.addClass('sleep');
                }
            }
            if (st < 350) {
                if (navbar.hasClass('awake')) {
                    navbar.removeClass('awake');
                    navbar.addClass('sleep');
                }
                if (sd.length > 0) {
                    sd.removeClass('sleep');
                }
            }
        });
    };
    scrollWindow();


    var counter = function () {

        $('#section-counter').waypoint(function (direction) {

            if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {

                var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
                $('.number').each(function () {
                    var $this = $(this),
                        num = $this.data('number');
                    console.log(num);
                    $this.animateNumber({
                        number: num,
                        numberStep: comma_separator_number_step
                    }, 7000);
                });

            }

        }, {
            offset: '95%'
        });

    }
    counter();

    var contentWayPoint = function () {
        var i = 0;
        $('.ftco-animate').waypoint(function (direction) {

            if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {

                i++;

                $(this.element).addClass('item-animate');
                setTimeout(function () {

                    $('body .ftco-animate.item-animate').each(function (k) {
                        var el = $(this);
                        setTimeout(function () {
                            var effect = el.data('animate-effect');
                            if (effect === 'fadeIn') {
                                el.addClass('fadeIn ftco-animated');
                            } else if (effect === 'fadeInLeft') {
                                el.addClass('fadeInLeft ftco-animated');
                            } else if (effect === 'fadeInRight') {
                                el.addClass('fadeInRight ftco-animated');
                            } else {
                                el.addClass('fadeInUp ftco-animated');
                            }
                            el.removeClass('item-animate');
                        }, k * 50, 'easeInOutExpo');
                    });

                }, 100);

            }

        }, {
            offset: '95%'
        });
    };
    contentWayPoint();


    // magnific popup
    $('.image-popup').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });


    $('.appointment_date').datepicker({
        'format': 'm/d/yyyy',
        'autoclose': true
    });

    $('.appointment_time').timepicker();


})(jQuery);



/* scroll to top */

let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document with smooth scroll
mybutton.addEventListener("click", function () {
    smoothScrollToTop();
});

function smoothScrollToTop() {
    // Scroll to the top of the document smoothly
    window.scroll({
        top: 0,
        behavior: "smooth"
    });
}



//count number aos and js

const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-end-number');
        const count = +counter.innerText;
        const speed = +counter.getAttribute('data-speed');

        const increment = target / speed;

        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 1);
        } else {
            counter.innerText = target;
        }
    };

    updateCount();
});



// accordion
// $(document).ready(function () {
//     const accordionCards = document.querySelectorAll('.card-header');
//     accordionCards.forEach((card, index) => {
//         card.addEventListener('click', () => {

//             const allImages = document.querySelectorAll('.image');
//             allImages.forEach(image => {
//                 image.classList.add('d-none');
//             });

//             const imageElement = document.getElementById(`image${index}`);
//             if (imageElement) {
//                 imageElement.classList.remove('d-none');
//             }

//         });
//     });
//     if (#image[index] == #images_index[index]) {
//         var currentImageIndex = 0;
//         function changeImages() {
//             var images = document.querySelectorAll('.image-slider img');
//             images[currentImageIndex].classList.add('d-none');
//             currentImageIndex = (currentImageIndex + 1) % images.length;
//             images[currentImageIndex].classList.remove('d-none');

//             setTimeout(changeImages, 5000);
//         }
//         changeImages();
//     }
// });

$(document).ready(function () {
    const accordionCards = document.querySelectorAll('.card-header');
    const imageSliders = document.querySelectorAll('.image-slider');

    let activeAccordionIndex = 0;
    let imageSliderIntervals = []; // Store intervals for each image slider

    // Helper function to start the image slider for a specific index
    function startImageSliderForIndex(index) {
        const imageSlider = imageSliders[index];

        if (imageSlider) {
            imageSliders.forEach((slider, i) => {
                slider.classList.add('d-none');
                clearInterval(imageSliderIntervals[i]); // Clear intervals for all sliders
            });

            imageSlider.classList.remove('d-none');

            // Start the timer for the image slider of the active accordion
            let currentImageIndex = 0;
            const images = imageSlider.querySelectorAll('img');

            function changeImages() {
                images[currentImageIndex].classList.add('d-none');
                currentImageIndex = (currentImageIndex + 1) % images.length;
                images[currentImageIndex].classList.remove('d-none');
            }

            imageSliderIntervals[index] = setInterval(changeImages, 5000);
        }
    }

    accordionCards.forEach((card, index) => {
        card.addEventListener('click', () => {
            // Update the active accordion index
            activeAccordionIndex = index;

            // Start the image slider for the clicked accordion
            startImageSliderForIndex(activeAccordionIndex);
        });
    });

    // Initialize image sliders
    startImageSliderForIndex(activeAccordionIndex);
});




//blog_info page

$(document).ready(function () {

    var images = [];
    var currentIndex = 0;

    // Collect all image sources
    $('.gallery-item a').each(function () {
        images.push($(this).data('image'));
    });

    // Show modal and set initial image
    $('#teamModal').on('show.bs.modal', function (event) {
        currentIndex = images.indexOf($(event.relatedTarget).data('image'));
        showImage(currentIndex);
    });

    // Show previous image
    $('#prevBtn').click(function () {
        currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
        showImage(currentIndex);
    });

    // Show next image
    $('#nextBtn').click(function () {
        currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
        showImage(currentIndex);
    });

    // Function to display image
    function showImage(index) {
        var imageSource = images[index];
        $('#teamModal .modal-body img').attr('src', imageSource);
    }
});


//blog_info page end


//toggle icon

function toggleButton(button) {
    var icon = button.querySelector('#toggleIcon');
    if (icon.classList.contains('fa-bars-staggered')) {
        icon.classList.remove('fa-bars-staggered');
        icon.classList.add('fa-times');
    } else {
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars-staggered');
    }
}
//toggle icon end










