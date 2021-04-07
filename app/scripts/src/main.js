"use strict";

document.addEventListener('DOMContentLoaded', function () {
  const lazyLoadInstance = new LazyLoad({});

  const toggleMnu = jQuery(".toggle-mnu");
  const toggleHiddenMnu = jQuery(".hidden-toggle");
  const hiddenMnu = jQuery(".hidden-mnu");
  toggleMnu.click(function () {
    toggleMnu.toggleClass("on");
    toggleHiddenMnu.fadeToggle("on");
    hiddenMnu.fadeToggle('');
    jQuery(".aside-left, .main, .aside-right").toggleClass("is-blurred");

    return false;
  });

  function tMnu() {
    if (jQuery(window).width() < 1050) {
      jQuery('.main-mnu ul li a').click(function () {
        toggleMnu.toggleClass("on");
        toggleHiddenMnu.fadeToggle("on");
        hiddenMnu.fadeOut('fast');
        // return false;
      });
    }
  }
  tMnu();

  jQuery(window).on('resize', function () {
    tMnu();
  });

  const mnuOverlay = document.querySelector('.hidden-mnu__overlay');
  window.onclick = e => {
    if (e.target == mnuOverlay) {
      toggleMnu[0].click();
    }
  }

  const reviewSlider = document.querySelector(".s-review-slider");
  jQuery(reviewSlider).on('init', function (event, slick) {
  }).slick({
    slidesToShow: 2,
    slidesToScroll:1,
    focusOnSelect: true,
    lazyLoad: 'ondemand',
    dots: false,
    arrows: true,
    prevArrow: '<button type="button" class="slick-prev"><svg width="32" height="54" viewBox="0 0 32 54" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M30.7269 50.7239C31.4097 51.3452 31.4097 52.4195 30.7269 53.0408C30.1293 53.5846 29.2162 53.5846 28.6186 53.0408L0.812849 27.7396C0.376863 27.3429 0.376865 26.6571 0.812851 26.2604L28.6186 0.959175C29.2162 0.41543 30.1293 0.415431 30.7269 0.959175C31.4097 1.58054 31.4097 2.65475 30.7269 3.27612L4.65455 27L30.7269 50.7239Z" fill="#4F4F4F" fill-opacity="1"/></svg></button>',
    nextArrow: '<button type="button" class="slick-next"><svg width="32" height="54" viewBox="0 0 32 54" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.27315 50.7239C0.590274 51.3452 0.590273 52.4195 1.27315 53.0408C1.87072 53.5846 2.78383 53.5846 3.3814 53.0408L31.1872 27.7396C31.6231 27.3429 31.6231 26.6571 31.1871 26.2604L3.3814 0.959175C2.78383 0.41543 1.87072 0.415431 1.27315 0.959175C0.590274 1.58054 0.590272 2.65475 1.27315 3.27612L27.3455 27L1.27315 50.7239Z" fill="#4F4F4F" fill-opacity="1"/></svg></button>',
    speed: 600,
    cssEase: 'ease-out',
    responsive: [
       {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll:2,
        }
      }]
  }).on('afterChange', function (event, slick, currentSlide, nextSlide) {});


  const rentSlider = document.querySelector(".rent-slider");
  let $carousel = jQuery(rentSlider).on('init', function (event, slick) {
  }).slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll:1,
    focusOnSelect: true,
    lazyLoad: 'ondemand',
    // centerMode: true,
    variableWidth: true,
    dots: false,
    arrows: true,
    prevArrow: '<button type="button" class="slick-prev"><svg width="32" height="54" viewBox="0 0 32 54" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M30.7269 50.7239C31.4097 51.3452 31.4097 52.4195 30.7269 53.0408C30.1293 53.5846 29.2162 53.5846 28.6186 53.0408L0.812849 27.7396C0.376863 27.3429 0.376865 26.6571 0.812851 26.2604L28.6186 0.959175C29.2162 0.41543 30.1293 0.415431 30.7269 0.959175C31.4097 1.58054 31.4097 2.65475 30.7269 3.27612L4.65455 27L30.7269 50.7239Z" fill="#ffffff" fill-opacity="0.8"/></svg></button>',
    nextArrow: '<button type="button" class="slick-next"><svg width="32" height="54" viewBox="0 0 32 54" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.27315 50.7239C0.590274 51.3452 0.590273 52.4195 1.27315 53.0408C1.87072 53.5846 2.78383 53.5846 3.3814 53.0408L31.1872 27.7396C31.6231 27.3429 31.6231 26.6571 31.1871 26.2604L3.3814 0.959175C2.78383 0.41543 1.87072 0.415431 1.27315 0.959175C0.590274 1.58054 0.590272 2.65475 1.27315 3.27612L27.3455 27L1.27315 50.7239Z" fill="#ffffff" fill-opacity="0.8"/></svg></button>',
    speed: 600,
    // fade: true,
    cssEase: 'ease-in-out',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll:1,
        }
      },{
        breakpoint: 480,
        settings: {
          variableWidth: false,
        }
      }
    ]
  });

  $carousel.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    var direction,
        slideCountZeroBased = slick.slideCount - 1;

    if (nextSlide == currentSlide) {
      direction = "same";

    } else if (Math.abs(nextSlide - currentSlide) == 1) {
      direction = (nextSlide - currentSlide > 0) ? "right" : "left";

    } else {
      direction = (nextSlide - currentSlide > 0) ? "left" : "right";
    }

    // Add a temp CSS class for the slide animation (.slick-current-clone-animate)
    if (direction == 'right') {
      jQuery('.slick-cloned[data-slick-index="' + (nextSlide + slideCountZeroBased + 1) + '"]', $carousel).addClass('slick-current-clone-animate');
    }

    if (direction == 'left') {
      jQuery('.slick-cloned[data-slick-index="' + (nextSlide - slideCountZeroBased - 1) + '"]', $carousel).addClass('slick-current-clone-animate');
    }
  });

  $carousel.on('afterChange', function (event, slick, currentSlide, nextSlide) {
    jQuery('.slick-current-clone-animate', $carousel).removeClass('slick-current-clone-animate');
    jQuery('.slick-current-clone-animate', $carousel).removeClass('slick-current-clone-animate');
  });


  jQuery('.popup-with-move-anim').magnificPopup({
    type: 'inline',
    fixedContentPos: false,
    fixedBgPos: true,
    overflowY: 'auto',
    closeBtnInside: true,
    preloader: false,
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-slide-bottom'
  });



});

