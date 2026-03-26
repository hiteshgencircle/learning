var $ = jQuery;
/*Sticky Header*/
$(window).scroll(function () {
  if ($(window).scrollTop() >= 100) {
      $('.header').addClass('is-sticky');
  } else {
      $('.header').removeClass('is-sticky');
  }
});
/*Sticky Header*/

// Menu Start
$(document).ready(function () {
  $('.menu-icon a').on("click", function(){
    $("body").toggleClass("menu-open");
  })
});

$(".menuclose").click(function(){
  $("body").removeClass("menu-open");
});

// Tabs
$(document).ready(function(){

	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})

// Accordion
$(document).ready(function() {
  $(".accordion-set > a").on("click", function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this)
        .siblings(".accordion-inner-content")
        .slideUp(200);
    } else {

      $(".accordion-set > a").removeClass("active");
      $(this).addClass("active");
      $(".accordion-inner-content").slideUp(200);
      $(this)
        .siblings(".accordion-inner-content")
        .slideDown(200);
    }
  });
});



// Banner Slider
if ($('.banner').length) {
    var swiper = new Swiper(".banner-slider", {
        slidesPerView: 1,
        loop: true,
        speed: 1500,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        grabCursor: true,
        centeredSlides: true,
        spaceBetween: 0,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
}

// Explore Mobile Slider
if ($('.explore-img-grid').length) {
  var swiper = new Swiper(".explore-img-grid-slider", {
      slidesPerView: 3,
      loop: false,
      speed: 1500,
      grabCursor: true,
      spaceBetween: 30,
      navigation: {
        nextEl: ".explore-button-next",
        prevEl: ".explore-button-prev",
      },
      breakpoints: {
        100: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 15,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
    });
}

// Testimonial Slider
if ($('.testimonial').length) {
  var swiper = new Swiper(".testimonial-slider", {
      slidesPerView: 1,
      loop: true,
      speed: 1500,
      grabCursor: true,
      spaceBetween: 0,
      scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
      },
    });
}

// Testimonial Slider
if ($('.testimonial-with-content').length) {
  var swiper = new Swiper(".testimonial-with-content-slider", {
      slidesPerView: 1,
      loop: true,
      speed: 1500,
      grabCursor: true,
      spaceBetween: 0,
      scrollbar: {
        el: ".testimonial-swiper-scrollbar",
        hide: true,
      },
    });
}

// instagram Slider
if ($('.instagram').length) {
  var swiper = new Swiper(".instagram-slider", {
      slidesPerView: 5,
      loop: true,
      speed: 1500,
      grabCursor: true,
      spaceBetween: 15,
      navigation: {
        nextEl: ".instagram-swiper-button-next",
        prevEl: ".instagram-swiper-button-prev",
      },
      breakpoints: {
        100: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 15,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 15,
        },
      },
    });
}

// Zigzag with Slider
if ($('.zigzag-with-slider').length) {
  var swiper = new Swiper(".zigzag-inner-slider", {
      slidesPerView: 1,
      loop: false,
      speed: 1500,
      grabCursor: true,
      spaceBetween: 15,
      navigation: {
        nextEl: ".zigzag-swiper-button-next",
        prevEl: ".zigzag-swiper-button-prev",
      },
    });
}

// Discover Rooms Slider
if ($('.discover-rooms').length) {
  var swiper = new Swiper(".discover-rooms-slider", {
      slidesPerView: 2.2,
      loop: true,
      speed: 1500,
      grabCursor: true,
      centeredSlides: true,
      spaceBetween: 30,
      navigation: {
        nextEl: ".discover-swiper-button-next",
        prevEl: ".discover-swiper-button-prev",
      },
      breakpoints: {
        100: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        768: {
          slidesPerView: 2.2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 2.2,
          spaceBetween: 30,
        },
      },
    });
}

// Discover Rooms Slider
if ($('.content-with-gallery').length) {
  var swiper = new Swiper(".content-gallery-slider", {
      slidesPerView: 2.2,
      loop: true,
      speed: 1500,
      grabCursor: false,
      centeredSlides: true,
      allowTouchMove: false,
      spaceBetween: 30,
      navigation: {
        nextEl: ".content-gallery-swiper-button-next",
        prevEl: ".content-gallery-swiper-button-prev",
      },
      breakpoints: {
        100: {
          slidesPerView: 1,
          spaceBetween: 0,
          grabCursor: true,
          allowTouchMove: true,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 15,
          grabCursor: true,
          allowTouchMove: true,
        },
        768: {
          slidesPerView: 2.2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 2.2,
          spaceBetween: 30,
        },
      },
    });
}


// Experiences Slider
if ($('.experiences-slider').length) {
  var swiper = new Swiper(".experiences-inner-slider", {
    slidesPerView: 3,
      loop: true,
      speed: 500,
      grabCursor: true,
      centeredSlides: true,
      spaceBetween: 1,
      navigation: {
        nextEl: ".experiences-swiper-button-next",
        prevEl: ".experiences-swiper-button-prev",
      },
      breakpoints: {
        100: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        768: {
          slidesPerView: 2.2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
    });
}

// Img Grid Slider
if ($('.img-grid-slider').length) {
  var swiper = new Swiper(".img-grid-slider-inner", {
    slidesPerView: 3,
      loop: true,
      dots: true,
      speed: 500,
      grabCursor: true,
      centeredSlides: true,
      spaceBetween: 1,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        100: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        768: {
          slidesPerView: 2.2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      },
    });
}

// Testimonial Slider
if ($('.trip-testimonial').length) {
  var swiper = new Swiper(".trip-testimonial-slider", {
      slidesPerView: 2,
      grid: {
        rows: 1
      },
      loop: true,
      speed: 1500,
      grabCursor: true,
      spaceBetween: 0,
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        100: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
      },
    });
}
