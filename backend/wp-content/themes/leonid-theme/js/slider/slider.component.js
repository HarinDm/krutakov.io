const swiper = new Swiper('.js--swiper', {
  // Optional parameters
  loop: false,

  // If we need pagination
  pagination: {
    el: '.js--swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.js--swiper-button-next',
    prevEl: '.js--swiper-button-prev',
  },

});

// const swiperLogo = new SwiperLogo('.js--swiper-logo', {
//   // Optional parameters
//   loop: true,
//   slidesPerView: 7,
//   spaceBetween: 30,

//   // If we need pagination
//   pagination: {
//     el: '.js--swiper-pagination',
//   },

//   // Navigation arrows
//   navigation: {
//     nextEl: '.js--swiper-button-next',
//     prevEl: '.js--swiper-button-prev',
//   },

// });