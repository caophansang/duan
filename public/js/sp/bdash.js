"use strict";

bdashRecommend.renderHtml = function (obj) {
  var dom = "";
  dom += '<div class="slide-small__list-item">';
  dom += '<div class="content-cassette">';
  dom += '<a href="' + obj.detail_url + '">';
  dom += '<div class="content-cassette__image">';
  // dom += '<img src="';
  dom += '<img class="anlys_item-reccommend" src="';
  dom += obj.image_large;
  dom += '" alt="">';
  dom += "</div>";
  dom +=
    '<div class="content-cassette__content content-cassette__content--center">';
  dom += '<p class="text-item">';
  dom += obj.jun_brand_set_name;
  dom += " / ";
  dom += obj.prod_name;
  dom += "</p>";
  dom += '<p class="text-item text-item--bottom">';
  // dom += '<p class="text-item text-item--red text-item--bottom">';
  dom += '<span class="text-item text-item--xlarge">&yen;';
  dom += obj.tax_included_sale_price.toLocaleString();
  dom += "</span>";
  if (obj.sale_price_rate < 100) {
    dom += '<span class="text-off">';
    dom += 100 - obj.sale_price_rate;
    dom += "%OFF</span>";
  }
  dom += "</p>";
  dom += "</div>";
  dom += "</a>";
  dom += "</div>";
  dom += "</div>";
  return dom;
};

bdashRecommend.bindSlick = function (dom) {
  $(".js-slide-small-recommend", dom).each(function () {
    $(this).slick({
      dots: true,
      centerMode: true,
      slidesToShow: 1,
      centerPadding: "26%",
      autoplay: true,
      autoplaySpeed: 2000,
    });
  });
};

bdashRecommend.js_slider = ".js-slide-small-recommend";

$(function () {
  bdashRecommend.requestRecommend();
});
