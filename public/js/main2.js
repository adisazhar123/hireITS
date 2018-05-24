$(document).ready(function() {
  "use strict";



  $('.counter').counterUp({
    delay: 10,
    time: 1000
  });


  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 300
  });





  $('.active-realated-carusel').owlCarousel({
    items: 1,
    loop: true,
    margin: 100,
    dots: true,
    nav: true,
    navText: ["<span class='lnr lnr-arrow-up'></span>", "<span class='lnr lnr-arrow-down'></span>"],
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 1,
      },
      768: {
        items: 1,
      }
    }
  });


  $('.active-about-carusel').owlCarousel({
    items: 1,
    loop: true,
    margin: 100,
    nav: true,
    navText: ["<span class='lnr lnr-arrow-up'></span>",
      "<span class='lnr lnr-arrow-down'></span>"
    ],
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 1,
      },
      768: {
        items: 1,
      }
    }
  });


  $('.active-review-carusel').owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    margin: 30,
    dots: true
  });

  $('.active-info-carusel').owlCarousel({
    items: 1,
    loop: true,
    margin: 100,
    dots: true,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 1,
      },
      768: {
        items: 1,
      }
    }
  });


  $('.active-testimonial').owlCarousel({
    items: 2,
    loop: true,
    margin: 30,
    dots: true,
    autoplay: true,
    nav: true,
    navText: ["<span class='lnr lnr-arrow-up'></span>", "<span class='lnr lnr-arrow-down'></span>"],
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 1,
      },
      768: {
        items: 2,
      }
    }
  });


  $('.active-testimonials-slider').owlCarousel({
    items: 3,
    loop: true,
    margin: 30,
    dots: true,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 1,
      },
      768: {
        items: 2,
      },
      801: {
        items: 3,
      }
    }
  });




});