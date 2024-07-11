"use strict";

checkedItem.renderHtml = function (obj) {
  var dom = "";
  dom += '<div class="slider-small-dot__list js-direct-link">';
  dom += '<a href="' + obj.detail_url + '">';
  dom += '<div class="content-cassette hover-opacity">';
  dom += '<div class="content-cassette__image">';
  dom += '<img src="';
  dom += obj.image_large;
  dom += '" alt="">';
  dom += "</div>";
  dom += "</div>";
  dom += "</a>";
  dom += "</div>";
  return dom;
};

checkedItem.bindSlick = function (dom) {
  $(".js-slider-xsmall-dot-checked-item", dom).each(function () {
    $(this).slick({
      appendArrows: $(".slider-xsmall-dot-arrow"),
      dots: true,
      centerMode: true,
      slidesToShow: 12,
      centerPadding: ".5%",
      swipeToSlide: true,
      autoplay: true,
      autoplaySpeed: 2000,
      pauseOnFocus: false,
    });
  });
};

checkedItem.js_slider = ".js-slider-xsmall-dot-checked-item";
