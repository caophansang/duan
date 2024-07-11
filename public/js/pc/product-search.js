"use strict";

var productSearch = {
  form: "form#search_form",
  params: [
    "bid",
    "cid1",
    "cid2",
    "sex",
    "q",
    "stock",
    "mode",
    "color",
    "size",
    "price1",
    "price2",
    "off_rate",
    "off_rate1",
    "off_rate2",
    "sale",
    "terms",
    "tag",
    "outlet",
    "list_unit",
    "page",
    "orderby",
    "image_size",
  ],
  resetPage: function () {
    $(productSearch.form + " input[name=page]").val("");
  },
  searchSex: function () {
    var sex = $(this).data("sex");
    var on = $(this).parent().hasClass("list-nav__list-item--current");
    if (on) {
      $(productSearch.form + " input[name=sex]").val("");
    } else {
      $(productSearch.form + " input[name=sex]").val(sex);
    }
    productSearch.resetPage();
    productSearch.submit();
  },
  searchCategory1: function () {
    var brand = $(productSearch.form).data("brand");
    if (brand) {
      $(productSearch.form).attr("action", "/" + brand + "/product/");
    } else {
      $(productSearch.form).attr("action", "/product/");
    }
    $(productSearch.form + " input[name=size]").val("");
    $(productSearch.form + " input[name=terms]").val("");
    productSearch.resetPage();
    productSearch.submit();
  },
  searchCategory: function () {
    var url = $(this).data("url");
    var url2 = $(this).data("url2");
    var on = $(this).parent().hasClass("list-nav__detail-item--current");
    if (on) {
      if (url2) {
        $(productSearch.form).attr("action", url2);
      } else {
        var brand = $(productSearch.form).data("brand");
        if (brand) {
          $(productSearch.form).attr("action", "/" + brand + "/product/");
        } else {
          $(productSearch.form).attr("action", "/product/");
        }
      }
    } else {
      $(productSearch.form).attr("action", url);
    }
    $(productSearch.form + " input[name=size]").val("");
    $(productSearch.form + " input[name=terms]").val("");
    productSearch.resetPage();
    productSearch.submit();
  },
  searchSale: function () {
    var sale = $("div.sale input[name=sale]:checked").val();
    $(productSearch.form + " input[name=sale]").val(sale);
    productSearch.resetPage();
    productSearch.submit();
  },
  searchMode: function () {
    var a = [];
    $("div.mode input[name=mode]:checked").each(function () {
      a.push($(this).val());
    });
    $(productSearch.form + " input[name=mode]").val(a.join(","));
    productSearch.resetPage();
    productSearch.submit();
  },
  searchPrice: function () {
    var price1 = $("div.price input[name=price1]").val();
    var price2 = $("div.price input[name=price2]").val();
    $(productSearch.form + " input[name=price1]").val(price1);
    $(productSearch.form + " input[name=price2]").val(price2);
    productSearch.resetPage();
    productSearch.submit();
  },
  searchColor: function () {
    var a = [];
    $("input.color-check__input:checked").each(function () {
      a.push($(this).val());
    });
    $(productSearch.form + " input[name=color]").val(a.join(","));
    productSearch.resetPage();
    productSearch.submit();
  },
  searchSize: function () {
    var a = [];
    $("input.mod-detail-check__input:checked").each(function () {
      a.push($(this).val());
    });
    $(productSearch.form + " input[name=size]").val(a.join(","));
    productSearch.resetPage();
    productSearch.submit();
  },
  searchCategory4: function () {
    var a = [];
    $("input.particular-check__input:checked").each(function () {
      a.push($(this).val());
    });
    $(productSearch.form + " input[name=terms]").val(a.join(","));
    productSearch.resetPage();
    productSearch.submit();
  },
  searchStock: function () {
    $(productSearch.form + " input[name=stock]").val($(this).data("stock"));
    productSearch.resetPage();
    productSearch.submit();
  },
  searchListUnit: function () {
    $(productSearch.form + " input[name=list_unit]").val(
      $(this).data("list_unit")
    );
    productSearch.resetPage();
    productSearch.submit();
  },
  searchOrderby: function () {
    $(productSearch.form + " input[name=orderby]").val($(this).data("orderby"));
    productSearch.resetPage();
    productSearch.submit();
  },
  searchImageSize: function () {
    $(productSearch.form + " input[name=image_size]").val($(this).data("image_size"));
    productSearch.resetPage();
    productSearch.submit();
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
    var url = form.attr("action");
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
  $(productSearch.form + " input[name=submit]").on(
    "click",
    productSearch.submit
  );
  $("a.list-nav__link.sex").on("click", productSearch.searchSex);
  $("a.list-nav__detail-link.category").on(
    "click",
    productSearch.searchCategory
  );
  $("li.category.list-nav__list-item--current a.list-nav__link.category1").on(
    "click",
    productSearch.searchCategory1
  );
  $("div.sale button[type=submit]").on("click", productSearch.searchSale);
  $("div.mode button[type=submit]").on("click", productSearch.searchMode);
  $("div.price button[type=submit]").on("click", productSearch.searchPrice);
  $("div.color button[type=submit]").on("click", productSearch.searchColor);
  $("div.size button[type=submit]").on("click", productSearch.searchSize);
  $("div.particular button[type=submit]").on(
    "click",
    productSearch.searchCategory4
  );
  $("a.select-box__detail-item-link.stock").on(
    "click",
    productSearch.searchStock
  );
  $("a.select-box__detail-item-link.list_unit").on(
    "click",
    productSearch.searchListUnit
  );
  $("a.select-box__detail-item-link.orderby").on(
    "click",
    productSearch.searchOrderby
  );
  $("a.select-box__detail-item-link.image_size").on(
    "click",
    productSearch.searchImageSize
  );
  $("div.pager-area a").on("click", productSearch.searchPage);
});
