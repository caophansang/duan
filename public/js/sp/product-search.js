"use strict";

var productSearch = {
  form: "form#search_form",
  params: [
    "q",
    "category",
    "category2",
    "page",
    "orderby",
  ],
  changeQ: function () {
    var s = $("div#select-modal1 input[name=q]").val();
    $(productSearch.form + " input[name=q]").val(s);
  },
  changeCategory: function () {
    var s = $("div#select-modal1 input[name=category]:checked").val();
    if (!s) {
      s = "";
    }
    $(productSearch.form + " input[name=category]").val(s);
  },

  changeCategory2: function () {
    var s = $("div#select-modal1 input[name=category2]:checked").val();
    if (!s) {
      s = "";
    }
    $(productSearch.form + " input[name=category2]").val(s);
  },
  resetCategory: function () {
    $(productSearch.form + " input[name=category]").val("");
  },
  resetCategory2: function () {
    $(productSearch.form + " input[name=category2]").val("");
  },
  resetPage: function () {
    $(productSearch.form + " input[name=page]").val("");
  },
  resetAll: function () {
    this.changeQ();
    this.resetCategory();
    this.resetCategory2();
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
      if (v) {
        a.push(k + "=" + encodeURIComponent(v));
      }
    }
    var url = "";
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
  $("div#select-modal1 input[name=category]").on(
    "change",
    productSearch.changeCategory
  );
  $("div#select-modal1 input[name=category2]").on(
    "change",
    productSearch.changeCategory2
  );
  $("div#select-modal2 input[name=orderby]").on(
    "change",
    productSearch.changeOrderby
  );
  $("div.pager-area a").on("click", productSearch.searchPage);
});
