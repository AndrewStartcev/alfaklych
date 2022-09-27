$(document).ready(() => {

})


const mainSwiper = new Swiper('.main-slider', {
  loop: true,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
    disableOnInteraction: false,
    delay: 5000,
  },
  pagination: {
    el: '.main-slider__pagination',
    type: 'bullets',
    clickable: true
  },
  navigation: {
    nextEl: '.main-slider__button--next',
    prevEl: '.main-slider__button--prev',
  },
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});
