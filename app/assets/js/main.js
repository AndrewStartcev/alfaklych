$(document).ready(() => {

  $("#slider-range-1").slider({
    range: "min",
    value: 6500000,
    step: 1000,
    min: 343000,
    max: 100000000,
    slide: function (event, ui) {
      $("#amount-1").val(ui.value);
    }
  });
  $("#amount-1").val($("#slider-range-1").slider("value"));
  $("#slider-range-2").slider({
    range: "min",
    value: 1500000,
    step: 1000,
    min: 950000,
    max: 6000000,
    slide: function (event, ui) {
      $("#amount-2").val(ui.value);
    }
  });
  $("#amount-2").val($("#slider-range-2").slider("value"));
  $("#slider-range-3").slider({
    range: "min",
    value: 20,
    step: 1,
    min: 1,
    max: 30,
    slide: function (event, ui) {
      $("#amount-3").val(ui.value);
    }
  });
  $("#amount-3").val($("#slider-range-3").slider("value"));


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
