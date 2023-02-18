const readMore = new Swiper('.js--swiper_read-more', {
  // Optional parameters
  loop: false,

  slidesPerView: 1,
  spaceBetween: 10,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      // slidesPerView: 2,
      // spaceBetween: 20
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 2,
      // spaceBetween: 30
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 3,
      // spaceBetween: 40
    }
  },

  // Navigation arrows
  navigation: {
    nextEl: '.js--swiper-button-next',
    prevEl: '.js--swiper-button-prev',
  },
  
  


});