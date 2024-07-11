"use strict";

var productSearch = {
  form: "form#search_form",
  params: [
    "category",
    "category2",
    "q",
    "page",
  ],
  resetPage: function () {
    $(productSearch.form + " input[name=page]").val("");
  },
  searchCategory: function () {
    var category = $(this).data("category");
    var on = $(this).parent().hasClass("list-nav__detail-item--current");
    if (on) {
      $(productSearch.form + " input[name=category]").val("");
    } else {
      $(productSearch.form + " input[name=category]").val(category);
    }
    productSearch.resetPage();
    productSearch.submit();
  },

  resetCategory: function () {
    var on = $(this).parent().hasClass("list-nav__list-item--current");
    if (on) {
      $(productSearch.form + " input[name=category]").val("");
      productSearch.resetPage();
      productSearch.submit();
    }
  },


  searchCategory2: function () {
    var category = $(this).data("category2");
    var on = $(this).parent().hasClass("list-nav__detail-item--current");
    if (on) {
      $(productSearch.form + " input[name=category2]").val("");
    } else {
      $(productSearch.form + " input[name=category2]").val(category);
    }
    productSearch.resetPage();
    productSearch.submit();
  },

  resetCategory2: function () {
    var on = $(this).parent().hasClass("list-nav__list-item--current");
    if (on) {
      $(productSearch.form + " input[name=category2]").val("");
      productSearch.resetPage();
      productSearch.submit();
    }
  },

  searchPage: function () {
    $(productSearch.form + " input[name=page]").val($(this).data("page"));
    productSearch.submit();
  },
  submit: function () {
    var form = $(productSearch.form);
    var a = [];
    var brand = '';
    for (var i = 0, l = productSearch.params.length; i < l; ++i) {
      var k = productSearch.params[i];
      var v = $("input[name=" + k + "]", form).val();
      if (k === "page" && v === "1") {
        continue;
      }
      if (v) {
        console.log(v);
        a.push(k + "=" + encodeURIComponent(v));
      }
    }
    var url = "";
    var qs = a.join("&");
    if (qs) {
      url += "?" + qs;
    } else {
      url = "/";
    }
    location.href = url + '#productx';
  },
};

$(function () {
  $(productSearch.form).on("submit", function (e) {
    productSearch.submit();
    e.preventDefault();
  });
  $(productSearch.form + " input[name=submit]").on(
    "click",
    productSearch.submit
  );

  $("a.list-nav__detail-link.category").on("click", productSearch.searchCategory);

  $("a.list-nav__link--arrow.category1").on(
    "click",
    productSearch.resetCategory
  );

  $("div.pager-area a").on("click", productSearch.searchPage);

  $("a.list-nav__detail-link.category2").on(
    "click",
    productSearch.searchCategory2
  );
  $("a.list-nav__link--arrow.category2").on(
    "click",
    productSearch.resetCategory2
  );
});
