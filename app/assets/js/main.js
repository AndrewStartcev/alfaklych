$(document).ready(() => {

  $('.new-header-burger').click(() => {
    $('.new-header-burger').toggleClass('close')
    $('.new-header-mobile-menu').toggleClass('active')
  })


  let radioName = $('input[name="radio_name"]:checked').val();
  let radioTheme = $('input[name="radio_name"]:checked').attr('data-name');
  let priceHome = 0;
  let firstPrice = 0;
  let dateCredits = 0;

  $('#tablo-2').html(radioName + '%')
  $('input[name="radio_name"]').change(function () {
    radioName = $('input[name="radio_name"]:checked').val()
    radioTheme = $('input[name="radio_name"]:checked').attr('data-name');

    $('.callout').removeClass('show')
    $('.callout[data-theme="' + radioTheme + '"]').addClass('show')
    $('#tablo-2').html(radioName + '%')

    calculate()
  });

  const sliderRange1 = $("#slider-range-1")
  if (sliderRange1) {
    let dataMin = sliderRange1.attr('data-min')
    let dataMax = sliderRange1.attr('data-max')
    sliderRange1.slider({
      range: "min",
      value: 1000000,
      step: 1000,
      min: Number(dataMin),
      max: Number(dataMax),
      slide: function (event, ui) {
        $("#amount-1").val(ui.value);
        priceHome = ui.value
        calculate()
      }
    });
    $("#amount-1").val(sliderRange1.slider("value"));
    priceHome = sliderRange1.slider("value")
  }

  const sliderRange2 = $("#slider-range-2")
  if (sliderRange2) {
    let dataMin = sliderRange2.attr('data-min')
    let dataMax = sliderRange2.attr('data-max')
    sliderRange2.slider({
      range: "min",
      value: 200000,
      step: 1000,
      min: Number(dataMin),
      max: Number(dataMax),
      slide: function (event, ui) {
        $("#amount-2").val(ui.value);
        firstPrice = ui.value
        calculate()
      }
    });
    $("#amount-2").val(sliderRange2.slider("value"));
    firstPrice = sliderRange2.slider("value")
  }

  const sliderRange3 = $("#slider-range-3")
  if (sliderRange3) {
    let dataMin = sliderRange3.attr('data-min')
    let dataMax = sliderRange3.attr('data-max')
    $("#slider-range-3").slider({
      range: "min",
      value: 1,
      step: 1,
      min: Number(dataMin),
      max: Number(dataMax),
      slide: function (event, ui) {
        $("#amount-3").val(ui.value);
        dateCredits = ui.value
        calculate()
      }
    });
    $("#amount-3").val($("#slider-range-3").slider("value"));
    dateCredits = sliderRange3.slider("value")
  }

  calculate()
  function calculate() {
    let summCredits = priceHome - firstPrice
    if (summCredits < 0) {
      summCredits = 0
    }
    let procent = (summCredits / 100) * radioName
    let sumProcent = (procent / 12).toFixed()
    let dateToMounth = (Number(dateCredits) * 12).toFixed()
    let summ = ((Number(summCredits) / Number(dateToMounth)) + Number(sumProcent)).toFixed()
    let allSumm = (Number(summ) / 100).toFixed() * 40 + Number(summ)

    $('#tablo-1').html(summ + " ₽");
    $('#tablo-3').html(priceHome + " ₽")
    $('#tablo-4').html(allSumm + " ₽")

  }
});

$(window).scroll(headerSticky);
$(window).ready(headerSticky);

function headerSticky() {
  if ($(window).scrollTop() >= 137) {
    $('.new-header-bottom').addClass('sticky');
    $('.new-header-mobile-menu').addClass('sticky');
  }
  else {
    $('.new-header-bottom').removeClass('sticky');
    $('.new-header-mobile-menu').removeClass('sticky');
  }
}


const feedbacksSwiper = new Swiper('.feedbacks__slider', {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,

  autoplay: {
    disableOnInteraction: false,
    delay: 5000,
  },
  navigation: {
    nextEl: '.feedbacks__button--next',
    prevEl: '.feedbacks__button--prev',
  },
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
  breakpoints: {
    1023: {
      slidesPerView: 2,
      spaceBetween: 30
    }
  }
});

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
