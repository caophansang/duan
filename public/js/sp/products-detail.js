var galleryThumbs = new Swiper(".product-detail__slider-thum", {
  //spaceBetween: 10,
  slidesPerView: "auto",
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});

var galleryTop = new Swiper(".product-detail__slider-main", {
  spaceBetween: 10,
  autoHeight: true,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: galleryThumbs,
  },
});

var review = new Swiper(".js-review-slider", {
  spaceBetween: 10,
  //freeMode: true,
  autoHeight: true,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

var recommend = new Swiper(".js-recommend-slider", {
  spaceBetween: 10,
  //freeMode: true,
  autoHeight: true,
  loop: true,
  slidesPerView: 2,
  centeredSlides: true,
  pagination: {
    el: ".swiper-pagination",
  },
});

$(function () {
  $(".js-icon-movie").on("click", function () {
    var slideNumber = $(this).data("slide-no");
    galleryTop.slideTo(slideNumber);
  });

  $('[data-fancybox="gallery"]').fancybox({
    loop: true,
    infobar: false,
    transitionEffect: "slide",
    buttons: ["close", "cta"],

    beforeShow: function () {
      //console.log("loaded");
      //$('.fancybox-cta').clone().appendTo('.fancybox-container');
      //$('.fancybox-cta').show();
    },

    beforeClose: function () {
      //$('.fancybox-cta').hide();
    },
  });
});
