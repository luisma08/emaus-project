import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js';

var slideContainer1 = document.querySelector('.mySwiper1');
var slideContainer2 = document.querySelector('.mySwiper2');
var slideContainer3 = document.querySelector('.mySwiper3');
var slideContainer4 = document.querySelector('.mySwiper4');
var slideContainer5 = document.querySelector('.mySwiper5');

//slider effect flip

var swiper1 = new Swiper(slideContainer1, {
    effect: "flip",
    autoplay:{
      delay:5000,
    },
    loop: true,
    pagination: {
      el: ".swiper-pagination",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

var swiper2 = new Swiper(slideContainer2, {
  effect: "flip",
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper3 = new Swiper(slideContainer3, {
  effect: "flip",
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// Slider per view

var swiper4 = new Swiper(slideContainer4, {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    autoplay:{
        delay:5000,
    },

    loop: true,

    breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        },

        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },

        1024: {
            slidesPerView: 3,
            spaceBetween: 40,
        },

        1450: {
          slidesPerView: 4,
          spaceBetween: 40,
        }
      }
  });

var swiper5 = new Swiper(slideContainer5, {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  autoplay:{
      delay:5000,
  },

  loop: true,

  breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      },

      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },

      768: {
          slidesPerView: 2,
          spaceBetween: 30,
      },

      1024: {
          slidesPerView: 3,
          spaceBetween: 40,
      },

      1450: {
        slidesPerView: 4,
        spaceBetween: 40,
      }
    }
});

//event hover

  //slideContainer1.addEventListener('mouseenter', () => {
    //swiper.autoplay.start();
  //  swiper1.slideNext();
  //});
