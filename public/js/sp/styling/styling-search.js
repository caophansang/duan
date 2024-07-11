"use strict";

var productSearch = {
  form: "form#search_form",
  params: [
    "shop_code",
    "cid",
    "sex",
    "q",
    "staff_height",
    "color_find",
    "page",
  ],
  changeQ: function () {
    var s = $("div#select-modal1 input[name=q]").val();
    $(productSearch.form + " input[name=q]").val(s);
  },
  changeSex: function () {
    var s = $("div#select-modal1 input[name=sex]:checked").val();
    if (!s) {
      s = "";
    }
    $(productSearch.form + " input[name=sex]").val(s);
  },
  changeBrand: function () {
    var s = $("div#select-modal1 input[name=brand]:checked").val();
    if (!s) {
      s = "";
    }
    $(productSearch.form).data("brand", s);
    $(productSearch.form + " input[name=shop_code]").val("");
  },
  changeShop: function () {
    var s = $("div#select-modal1 input[name=shop-code]:checked").val();
    if (!s) {
      s = "";
    }
    console.log(s);
    $(productSearch.form + " input[name=shop_code]").val(s);
  },
  changeCategory: function () {
    var s = $("div#select-modal1 input[name=category]:checked").val();
    if (!s) {
      s = "";
    }
    $(productSearch.form).data("cgy", s);
  },
  changeHeight: function () {
    var s = $("div#select-modal1 input[name=staff_height]:checked").val();
    if (!s) {
      s = "";
    }
    $(productSearch.form + " input[name=staff_height]").val(s);
  },
  changeColor: function () {
    var s = $("div#select-modal1 input[name=color_find]:checked").val();
    if (!s) {
      s = "";
    }
    $(productSearch.form + " input[name=color_find]").val(s);
  },
  resetBrand: function () {
    $(productSearch.form).data("brand", "");
    $(productSearch.form + " input[name=shop_code]").val("");
  },
  resetCategory: function () {
    $(productSearch.form).data("cgy", "");
  },
  resetHeight: function () {
    $(productSearch.form + " input[name=staff_height]").val("");
  },
  resetColor: function () {
    $(productSearch.form + " input[name=color_find]").val("");
  },
  resetPage: function () {
    $(productSearch.form + " input[name=page]").val("");
  },
  resetAll: function () {
    this.changeQ();
    this.resetBrand();
    this.changeShop();
    this.changeSex();
    this.resetCategory();
    this.resetHeight();
    this.resetColor();
    this.resetPage();
  },
  searchPage: function () {
    $(productSearch.form + " input[name=page]").val($(this).data("page"));
    productSearch.submit();
  },
  submit: function () {
    var form = $(productSearch.form);
    var a = [];
    for (var i = 0, l = productSearch.params.length; i < l; ++i) {
      var k = productSearch.params[i];
      var v = $("input[name=" + k + "]", form).val();
      if (k === "page" && v === "1") {
        continue;
      }
      console.log(v,k);
      if (v) {
        a.push(k + "=" + encodeURIComponent(v));
      }
    }
    var brand = form.data("brand");
    var cgy = form.data("cgy");
    var url = "";
    if (brand) {
      url += "/" + brand + "/styling";
    } else {
      url += "/styling";
    }
    if (cgy) {
      url += "/" + cgy;
    }
    url += "/";
    var qs = a.join("&");
    if (qs) {
      url += "?" + qs;
    }
    location.href = url;
  },
};

$(function () {
  $(productSearch.form).on("submit", function () {
    return false;
  });
  $("div.mod-btns--main button[name=submit]").on("click", function () {
    productSearch.resetPage();
    productSearch.submit();
  });
  $("div#select-modal1 input[name=q]").on("change", productSearch.changeQ);
  $("div#select-modal1 input[name=sex]").on("change", productSearch.changeSex);
  $("div#select-modal1 input[name=brand]").on(
    "change",
    productSearch.changeBrand
  );
    $("div#select-modal1 input[name=shop-code]").on(
    "change",
    productSearch.changeShop
  );
  $("div#select-modal1 input[name=category]").on(
    "change",
    productSearch.changeCategory
  );
  $("div#select-modal1 input[name=staff_height]").on("change", productSearch.changeHeight);
  $("div#select-modal1 input[name=color_find]").on("change", productSearch.changeColor);
  $("div.pager-area a").on("click", productSearch.searchPage);
});