"use strict";

bdashRecommend.renderHtml = function (obj) {
  var dom = "";
  dom += '<div class="swiper-slide">';
  dom += '<div class="content-cassette">';
  dom += '<a href="' + obj.detail_url + '">';
  dom += '<div class="content-cassette__image">';
  dom += '<img src="';
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

bdashRecommend.bindSlick = function () {
  new Swiper(".js-recommend-slider-bdash", {
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
};

bdashRecommend.js_slider = ".swiper-wrapper";

$(function () {
  var hinban = $("#bdash-recommend").data("hinban");
  var category = $("#bdash-recommend").data("category");
  var lmkh_kbn = $("#bdash-recommend").data("lmkh_kbn");
  bdashRecommend.requestRecommend({
    itemId: hinban,
    column_34_604: category,
    column_34_602: lmkh_kbn,
  });
});
