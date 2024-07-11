/* ---------------------------------------------
*   selrct modal & overlay show
--------------------------------------------- */
$(function () {
  "use strict";

  $(".mod-select-modal").hide();

  var $body = $("body");
  var $trigger = $(".js-selectmodal-trigger");
  var $overlay = $(".select-modal-overlay");
  var openClass = "js-selectmodal-opened";
  var params = {
    duration: 200,
    //easing: "easeOutQuart"
    complete: function () {
      $(".mod-select-modal__scroll").scrollTop(1);
    },
  };

  var flag = false;

  $trigger.on("click.selectmodal", function () {
    $("header").hide();

    var thisModalNumber = $(this).data("select-modal");
    var $thisModal = $("#" + thisModalNumber);
    var $content = $thisModal;
    var isOpened = $body.hasClass(openClass);
    //var contantAnimName = isOpened ? "slideUp" : "slideDown";
    var contantAnimName = isOpened ? "fadeOut" : "fadeIn";
    var overlayAnimName = isOpened ? "fadeOut" : "fadeIn";

    $thisModal.toggleClass("open");

    bodyFixChange();
    if (!$content.hasClass("velocity-animating")) {
      $body.toggleClass(openClass);
      $content.velocity("stop").velocity(contantAnimName, params);
      $overlay.velocity("stop").velocity(overlayAnimName, params);
    }

    return false;
  });

  $overlay.on("click", function () {
    var $content = $(".mod-select-modal");
    var isOpened = $body.hasClass(openClass);
    var contantAnimName = isOpened ? "slideUp" : "slideDown";
    var overlayAnimName = isOpened ? "fadeOut" : "fadeIn";

    bodyFixChange();
    $body.toggleClass(openClass);
    $overlay.velocity("stop").velocity(overlayAnimName, params);
    $content.velocity("stop").velocity(contantAnimName, params);

    return false;
  });

  var bodyElm = $("body");
  var wrapElm = $(".wrapper");
  var preventElm = $(".wrapper > .contents");

  var scrollPosi;
  function bodyFixSet() {
    scrollPosi = $(window).scrollTop();

    bodyElm.css({
      height: "100%",
      width: "100%",
      overflow: "hidden",
    });
    wrapElm.css({
      position: "fixed",
      width: "100%",
      "z-index": "1",
      top: -scrollPosi,
    });
  }

  //body固定解除

  function bodyFixReset() {
    bodyElm.css({
      position: "relative",
      width: "auto",
      top: "auto",
      overflow: "auto",
    });

    wrapElm.css({
      position: "relative",
      width: "auto",
      top: "auto",
      overflow: "visible",
    });

    $("header").show();

    //scroll位置調整
    $("html, body").scrollTop(scrollPosi);
  }

  function bodyFixChange() {
    $(".mod-select-modal__scroll").scrollTop(1);

    if (flag == false) {
      bodyFixSet();
      flag = true;
    } else {
      bodyFixReset();
      flag = false;
    }
  }

  //scroll bugfix
  var $scrlCont = $(".mod-select-modal__scroll");

  //scroll
  $scrlCont.scroll(function () {
    var scrlContTop = $(this).scrollTop();
    var scrlContOH = $(this).outerHeight();
    var scrlContSH = $(this)[0].scrollHeight;

    if (scrlContTop === 0) {
      $(this).scrollTop(1);
    } else if (scrlContTop + scrlContOH === scrlContSH) {
      $(this).scrollTop(scrlContTop - 1);
    }
  });
});

/* ---------------------------------------------
*   accordion
--------------------------------------------- */
$(function () {
  "use strict";
  var $trigger = $(".js-sort-trigger");

  $trigger.on("click", function () {
    var $thisScope = $(this).closest(".js-sort-scope");
    var $thisTarget = $thisScope.find(".js-sort-target");
    $thisScope.toggleClass("js-sort-acc-open");
    $thisTarget.slideToggle();
  });
});

/* ---------------------------------------------
*   slide modal
--------------------------------------------- */
$(function () {
  "use strict";
  var $body = $("body");
  var trigger = "[data-slide-trigger]";
  var targetSlide = "[data-slide-lv]";

  $(trigger).on("click", function () {
    var $this = $(this);
    var thisTriggerLv = $this.data("slide-trigger");
    var thisSelectItem = $this.closest("[data-lv1-item]").data("lv1-item");
    var thisSelectItemLv2 = $this.closest("[data-lv2-item]").data("lv2-item");

    var openSlideTitle = $this
      .closest("[data-get-ttl-scope]")
      .find("[data-get-ttl-target]")
      .text(); //開くスライドのタイトルを取得s

    var $thisTargetSlide = $(
      targetSlide + "[data-slide-lv= " + thisTriggerLv + "]"
    ); //開く対象のスライドを取得

    $thisTargetSlide.find(".mod-select-modal__heading").text(openSlideTitle); //開いたスライドにタイトルを設定

    if (thisTriggerLv == "lv2") {
      $("[data-lv2-item]").hide();
      $body.addClass("js-slidemodal-lv2");
      $body.removeClass("js-slidemodal-lv3");
    } else if (thisTriggerLv == "lv3") {
      $("[data-lv3-item]").hide();
      $body.addClass("js-slidemodal-lv3");
      $body.removeClass("js-slidemodal-lv2");
    }

    ///////
    $("[data-lv2-item]").each(function () {
      var thisItemLv2 = $(this).data("lv2-item");
      if (thisItemLv2 == thisSelectItem) {
        $(this).show();
      }
    });
    $("[data-lv3-item]").each(function () {
      var thisItemLv3 = $(this).data("lv3-item");
      if (thisItemLv3 == thisSelectItemLv2) {
        $(this).show();
      }
    });

    ///カテゴリ3のサブアイテムブロックの表示/非表示
    var thisSubItemLv2 = $this.data("lv2-subitem");
    var $subItemLv3 = $("[data-lv3-subitem]");

    $subItemLv3.each(function () {
      var thisSubItemLv3 = $(this).data("lv3-subitem");
      if (thisSubItemLv3 == thisSubItemLv2) {
        $subItemLv3.hide();
        $(this).show();
      }
    });
  });

  // クリック時に、1階層目に戻る
  var $backTrigger = $(
    ".js-clickback-lv1 input , .mod-btns--sub .mod-btns__btn-submit"
  );
  $backTrigger.on("click", function () {
    $body.removeClass("js-slidemodal-lv2");
    $body.removeClass("js-slidemodal-lv3");
  });

  // 戻るボタン「＜」をクリック時の処理
  var $backBtn = $(".mod-select-modal__back-btn");
  $backBtn.on("click", function () {
    var closeSlideLv = $(this).closest("[data-slide-lv]").data("slide-lv"); //現在のスライドLvを取得

    if (closeSlideLv == "lv2") {
      $body.removeClass("js-slidemodal-lv2");
    } else if (closeSlideLv == "lv3") {
      $body.removeClass("js-slidemodal-lv3");
      $body.addClass("js-slidemodal-lv2");
    }
  });
});

/* ---------------------------------------------
*   disable radio
--------------------------------------------- */


$(function () {
  "use strict";

  var nowchecked = $('.mod-select-modal input[name="sex"]:checked').val();
  var $brandItem = $(".brand-detail__item");

  $('.mod-select-modal input[name="sex"]').click(function () {
    // タイプ選択時のブランド表示/非表示切り替え
    var sex = $(this).val();
    $brandItem.hide();

    $brandItem.each(function () {
      var brandType = $(this).data("brand-type");
      if (!brandType) {
        return;
      }

      if (brandType === "women" || brandType === "men") {
        if (sex === "unisex") {
          $(this).show();
        }
      }
      if (brandType == sex) {
        $(this).show();
      }
    });

    // radio選択解除
    if ($(this).val() == nowchecked) {
      $(this).prop("checked", false);
      nowchecked = false;
      $brandItem.show();
    } else {
      nowchecked = $(this).val();
    }
    productSearch.changeSex();
  });
});

/* ---------------------------------------------
*  set select value
--------------------------------------------- */
$(function () {
  "use strict";
  var lv1_item = "[data-lv1-item]";
  var lv2_item = "[data-lv2-item]";
  var lv3_item = "[data-lv3-item]";
  var $trigger = $(".js-reflect-trigger input");
  var target = ".js-reflect-target";
  var btn = ".mod-btns--sub .mod-btns__btn-submit";
  var lv1_val;
  var lv2_val;
  var lv3_val;
  var checkedInputText;
  var defaultText = "指定なし";

  $trigger.on("click", function () {
    var arr = [];
    var $thisSope = $(this).closest(".js-reflect-trigger");

    $thisSope
      .find("input:checked")
      .next()
      .each(function () {
        arr.push($(this).text());
      });
    checkedInputText = arr.join(" / ");

    if (checkedInputText == "") {
      checkedInputText = defaultText;
    }

    var thisScopeLv2 = $(this).closest(lv2_item);
    var thisScopeLv3 = $(this).closest(lv3_item);
    lv2_val = thisScopeLv2.data("lv2-item");
    lv3_val = thisScopeLv3.data("lv3-item");

    if (!$thisSope.find(btn).length) {
      reflectValue();
    }
  });

  $(".mod-btns--sub .mod-btns__btn-submit").on("click", function () {
    var arr = [];
    var lv2_item = $(this).closest("[data-lv2-item]").data("lv2-item");
    $(this)
      .closest("[data-lv2-item]")
      .find("input:checked")
      .next()
      .each(function () {
        arr.push($(this).text());
      });
    var txt = arr.join(" / ");
    if (!txt) {
      txt = defaultText;
    }
    $("[data-lv1-item=" + lv2_item + "] " + target).text(txt);
  });

  // 1階層目クリアボタン
  var $brandItem = $(".brand-detail__item");
  var targetTex = ".sort-block__item-txt";

  $(".mod-btns--main .mod-btns__btn-clear").on("click", function () {
    $(this.form)
      .find("textarea, :text, select, .sort-price__input")
      .val("")
      .end()
      .find(":checked")
      .prop("checked", false);

    checkedInputText = defaultText; //「指定なし」に戻す
    reflectValue();

    $brandItem.show(); //ブランドを全て表示
    $(targetTex).text(defaultText); //「指定なし」に戻す

    $(".js-sub-data").fadeOut(); //shopの枠を隠す

    $("li[data-lv1-item=particular]").hide();
    productSearch.resetAll();
  });

  // 2階層目クリアボタン
  $(".mod-btns--sub .mod-btns__btn-clear").on("click", function () {
    $(this).closest(".js-clear-scope").find(":checked").prop("checked", false);

    var lv2_item = $(this).closest("[data-lv2-item]").data("lv2-item");
    $("[data-lv1-item=" + lv2_item + "] " + target).text(defaultText);
  });

  //チェックした項目の反映
  function reflectValue() {
    $(lv1_item).each(function () {
      lv1_val = $(this).data("lv1-item");
      if (lv1_val == lv2_val || lv1_val == lv3_val) {
        $(this).find(target).text(checkedInputText);
      }
    });
  }
});

/* ---------------------------------------------
*  shop choice
--------------------------------------------- */
$(function () {
  "use strict";
  var $btnAll = $(".mod-detail-check__input");
  var $btnSubAll = $(".mod-sub-detail-check__input");
  var btnTrigger = "js-shop-select";
  var $btnTarget = $(".js-sub-data");
  var $subItem = $(".js-subItem");
  var targetTex = ".sort-block__item-txt.shop-code";
  var defaultText = "指定なし";

  $btnAll.on("click", function () {
    $(targetTex).text(defaultText);
    $btnSubAll.prop("checked", false);

    var subType = $(this).data("sub-type");
    if ($(this).hasClass(btnTrigger)) {
      $btnTarget.css({
        display: "flex",
      });
    } else {
      $btnTarget.hide();
    }
    $subItem.hide();
    $("[data-sub-item][data-sub-item = " + subType + "]").show();
  });

  // デフォルト
  $("[data-sub-item]").hide();
  var brand_key = $btnTarget.data("brand-key");
  if (brand_key) {
    $("[data-sub-item][data-sub-item = " + brand_key + "]").show();
  }
});

/* ---------------------------------------------
*  textfieldのEnterでのsubmit防止
--------------------------------------------- */
$(function () {
  "use strict";

  $(document).on(
    "keypress",
    ".mod-select-modal--sort input:not(.allow-submit)",
    function (event) {
      return event.which !== 13;
    }
  );
});

/* ---------------------------------------------
*  focus
--------------------------------------------- */
$(function () {
  "use strict";
  var $target = $(".js-input-focus");

  // Androidでテキストフィールドにfocusすると、「リセット・決定」ボタンが
  //入力欄に被ってしまうため、クラスを付与してフォーカス時にボタンを非表示

  $target.focusin(function () {
    $(".android .mod-select-modal--sort .mod-btns").addClass("js-is-focus");
  });
  $target.focusout(function () {
    $(".android .mod-select-modal--sort .mod-btns").removeClass("js-is-focus");
  });
});
