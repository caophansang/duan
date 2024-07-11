"use strict";

checkedItem.renderHtml = function (obj) {
  var dom = "";
  dom += '<div class="content-cassette">';
  dom += '<a href="' + obj.detail_url + '">';
  dom += '<div class="content-cassette__image">';
  // dom += '<img src="';
  dom += '<img class="anlys_item-checked" src="';
  dom += obj.image_large;
  dom += '" alt="';
  dom += obj.jun_brand_set_name;
  dom += " / ";
  dom += obj.prod_name;
  dom += '">';
  if (obj.sale_price_rate < 100) {
    dom += '<div class="icon-text-off">';
    dom += 100 - obj.sale_price_rate;
    dom += "%OFF</div>";
  }
  dom += "</div>";
  dom += '<div class="content-cassette__content">';
  dom += '<p class="brand-name">';
  dom += obj.jun_brand_set_name;
  dom += "</p>";
  dom += '<p class="item-name">';
  dom += obj.prod_name;
  dom += "</p>";
  dom += '<p class="item-price ';
  if (obj.sale_price_rate < 100) {
    dom += "sale";
  }
  dom += '">&yen;';
  dom += obj.tax_included_sale_price.toLocaleString();
  dom += "</p>";
  dom += "</div>";
  dom += "</a>";
  dom += "</div>";
  return dom;
};

checkedItem.js_slider = ".content-area";
