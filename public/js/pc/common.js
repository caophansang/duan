/* ==========================================================
[ 目次 ]

<body>クラス設定
Tab
Slider
Search Area
page-top
select menu
slide menu
accordion
reset button
number only

========================================================== */

/* ---------------------------------------------
*   <body>クラス設定
--------------------------------------------- */
/**
 * <body>要素に、ユーザーのOS・デバイスとブラウザ等に関数情報をクラスとして付与する
 * OS・デバイス: ios, iphone, ipad, android, androidphone, androidtablet, windows, mac
 * ブラウザ: ie, edge, chrome, firefox, safari
 */
$(function () {
  "use strict";

  $("body").addClass(function () {
    var bodyClasses = "";

    // プラットフォーム判定
    if (is.ios()) {
      bodyClasses += " ios";

      if (is.iphone()) {
        bodyClasses += " iphone";
      } else if (is.ipad()) {
        bodyClasses += " ipad";
      }
    } else if (is.android()) {
      bodyClasses += " android";

      if (is.androidPhone()) {
        bodyClasses += " androidphone";
      } else if (is.androidTablet()) {
        bodyClasses += " androidtablet";
      }
    } else if (is.windows()) {
      bodyClasses += " windows";
    } else if (is.mac()) {
      bodyClasses += " mac";
    }

    // ブラウザ判定
    if (is.ie()) {
      bodyClasses += " ie";

      if (is.ie(10)) {
        bodyClasses += " ie10";
      } else if (is.ie(11)) {
        bodyClasses += " ie11";
      }
    } else if (is.edge()) {
      bodyClasses += " edge";
    } else if (is.chrome()) {
      bodyClasses += " chrome";
    } else if (is.firefox()) {
      bodyClasses += " firefox";
    } else if (is.safari()) {
      bodyClasses += " safari";
    }

    return bodyClasses;
  });
});

/* ---------------------------------------------
*   Tab
--------------------------------------------- */
$(function () {
  var $btn = $(".js-tab");
  var $tabOuter = $(".tab-area-outer");
  var $tabTarget = $(".js-tab-target");

  $btn.on("click", function () {
    var $this = $(this);
    var tagId = $this.data("id");
    var $thisOuter = $this.closest($tabOuter);
    var $thisScope = $thisOuter.find($btn);
    var $thisTarget = $thisOuter.find($tabTarget);

    $thisScope.removeClass("current"),
      $thisTarget.removeClass("current"),
      $this.addClass("current"),
      $("#" + tagId).addClass("current");
  });
});

/*  switching-tab
--------------------------------------------- */
$(function () {
  var $btn = $(".js-switching-tab");
  var $tabOuter = $(".js-switching-outer");
  var $tabTarget = $(".js-switching-tab-target");

  $btn.on("click", function () {
    var $this = $(this);
    var tagId = $this.data("nav");
    var $thisOuter = $this.closest($tabOuter);
    var $thisScope = $thisOuter.find($btn);
    var $thisTarget = $thisOuter.find($tabTarget);

    $thisScope.removeClass("current"),
      $thisTarget.removeClass("current"),
      $this.addClass("current"),
      $("#" + tagId).addClass("current");
  });
});

/* ---------------------------------------------
*   Slider
--------------------------------------------- */
$(function () {
  $(".js-slide-wide-dot").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    pauseOnFocus: false,
  });

  $(".js-slide-middle").each(function () {
    $(this).slick({
      appendArrows: $(".slider-middle-wrapper-arrow"),
      centerMode: true,
      slidesToShow: 8.3,
      centerPadding: "1%",
      swipeToSlide: true,
      autoplay: true,
      autoplaySpeed: 2000,
      pauseOnFocus: false,
    });
  });

  $(".js-slider-small-dot").each(function () {
    $(this).slick({
      appendArrows: $(".slider-small-dot-arrow"),
      dots: true,
      centerMode: true,
      slidesToShow: 8,
      centerPadding: ".5%",
      swipeToSlide: true,
      autoplay: true,
      autoplaySpeed: 2000,
      pauseOnFocus: false,
    });
  });

  $(".js-slider-xsmall-dot").each(function () {
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

  $(".js-slider-tetrameric-arrow").each(function () {
    $(this).slick({
      slidesToShow: 4,
      swipeToSlide: true,
      autoplay: true,
      autoplaySpeed: 2000,
      pauseOnFocus: false,
      variableWidth: true,
    });
  });

  $(".js-slider-tetrameric-dot").each(function () {
    $(this).slick({
      dots: true,
      centerMode: true,
      slidesToShow: 5,
      centerPadding: "5.3%",
      autoplay: true,
      swipeToSlide: true,
      autoplaySpeed: 2000,
      pauseOnFocus: false,
    });
  });
});

/*  Thumbnail
--------------------------------------------- */
$(function () {
  var slider = ".js-thum-slider"; // スライダー
  var thumbnailItem = ".slider-connected__thumbnail-item"; // サムネイル画像アイテム

  // サムネイル画像アイテムに data-index でindex番号を付与
  $(thumbnailItem).each(function () {
    var index = $(thumbnailItem).index(this);
    $(this).attr("data-index", index);
  });

  // スライダー初期化後、カレントのサムネイル画像にクラス「thumbnail-current」を付ける
  // 「slickスライダー作成」の前にこの記述は書いてください。
  $(slider).on("init", function (slick) {
    var index = $(
      ".slider-connected__main-item.slick-slide.slick-current"
    ).attr("data-slick-index");
    $(thumbnailItem + '[data-index="' + index + '"]').addClass(
      "thumbnail-current"
    );
  });

  //slickスライダー初期化
  $(slider).slick({
    arrows: true,
    autoplay: true,
    autoplaySpeed: 7000,
    speed: 600,
    infinite: true,
  });

  //サムネイル画像アイテムをクリックしたときにスライダー切り替え
  $(thumbnailItem).on("click", function () {
    var index = $(this).attr("data-index");
    $(slider).slick("slickGoTo", index, false);
  });

  //サムネイル画像のカレントを切り替え
  $(slider).on("beforeChange", function (
    event,
    slick,
    currentSlide,
    nextSlide
  ) {
    $(thumbnailItem).each(function () {
      $(this).removeClass("thumbnail-current");
    });
    $(thumbnailItem + '[data-index="' + nextSlide + '"]').addClass(
      "thumbnail-current"
    );
  });

  //ボタンを押したら最後に飛ばす
  $(".js-slide-last").on("click touchstart", function (e) {
    var slide = $(".js-thum-slider");
    var originalSlides = slide.find(".slick-track").children();
    var filteredSlides = originalSlides.filter(":not(.slick-cloned)"); //removed cloned slides from object
    e.preventDefault();

    slide.slick("slickGoTo", filteredSlides.length - 1);
  });

  //restart slide autoplay if current is video, redraw video link
  $(slider).on("beforeChange", function (
    event,
    slick,
    currentSlide,
    nextSlide
  ) {
    $(".js-thumItem-slider li")
      .eq(nextSlide)
      .addClass("active")
      .siblings("li")
      .removeClass("active");
    $(".js-thum-slider li")
      .eq(nextSlide)
      .addClass("active")
      .siblings("li")
      .removeClass("active");

    //restart slide autoplay if current is video, redraw video link
    var presentSlide = $(slider).find(".slick-current")[0];
    var isVideo = $(presentSlide).hasClass("js-movie");
    if (isVideo) {
      $(this).slick("slickPlay");
      $(".js-slide-last").show();
    }
  });

  //adjust slider depending if there is video slide
  $(slider).on("afterChange", function (event, slick, currentSlide) {
    var presentSlide = $(slider).find(".slick-current")[0];
    var isVideo = $(presentSlide).hasClass("js-movie");
    var isAutoplay = isVideo ? false : true;
    //pause autoplay, remove video link
    if (isVideo) {
      $(this).slick("slickPause");
      $(".js-slide-last").hide();
    }
  });
});

/*  Search Area
--------------------------------------------- */
$(function () {
  var $bodyTarget = $("body");
  var $headerSearch = $(".header-search");
  var $searchButton = $(".js-search-button");
  var $jsFocus = $(".js-focus");
  var $searchClose = $(".js-close");

  $searchButton.on("click", function () {
    $headerSearch.fadeIn(500);
    $jsFocus.focus();
    bodyFix();
  });

  $searchClose.on("click", function () {
    $headerSearch.fadeOut(500);
    bodyFixReset();
  });

  function bodyFix() {
    scrollPosi = $(window).scrollTop();
    $bodyTarget.css({
      position: "fixed",
      width: "100%",
      "z-index": "1",
      top: -scrollPosi,
    });
  }

  //body fixリセット
  function bodyFixReset() {
    $bodyTarget.css({
      position: "relative",
      width: "auto",
      top: "auto",
    });
    //scroll位置を調整
    $.when($("html, body").scrollTop(scrollPosi)).then(function () {
      $(".header").removeClass("header-scroll");
    });
  }
});

/* ---------------------------------------------
*   page-top
--------------------------------------------- */
$(function () {
  $("body").append('<p class="page-top-btn"><a href="#"></a></p>');

  var topBtn = $(".page-top-btn");
  topBtn.hide();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });

  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });
});

/* ---------------------------------------------
*   select menu
--------------------------------------------- */
$(function () {
  var $menuScope = $(".js-select-scope");
  var selectMenu = ".js-select-menu";
  var menuChoise = ".js-select-target";

  $(selectMenu, $menuScope)
    .mouseover(function (e) {
      $(menuChoise, this).stop().slideDown("fast");
    })
    .mouseout(function (e) {
      $(menuChoise, this).stop().slideUp("fast");
    });
});

/* ---------------------------------------------
*   slide menu
--------------------------------------------- */
$(function () {
  var $jsSideScope = $(".js-side-scope");
  var jsSideMenu = ".js-side-menu";
  var jsSideTarget = ".js-side-target";

  $(jsSideMenu, $jsSideScope)
    .mouseover(function (e) {
      $(jsSideTarget, this).stop().show();
    })
    .mouseout(function (e) {
      $(jsSideTarget, this).stop().hide();
    });
});

/* ---------------------------------------------
*   accordion
--------------------------------------------- */
$(function () {
  var $trigger = $(".js-accordion-button");
  var openClass = "open";

  $trigger.on("click", function () {
    var $thisScope = $(this).closest(".js-accordion-menu");
    var $thisTarget = $thisScope.find(".js-accordion-target");
    $thisTarget.slideToggle();
    $(this).toggleClass(openClass);
  });
});

/* ---------------------------------------------
*   reset button
--------------------------------------------- */
$(function () {
  var $resetBtn = $(".js-reset");
  var resetArea = ".js-reset-area";

  $resetBtn.on("click", function () {
    var $resetScope = $(this).closest(resetArea);
    var $inputFind = $resetScope.find("input");
    var $inputCheck = $resetScope.find("input:checked");

    for (var i = 0; i < $inputFind.length; i++) {
      if ($inputFind) {
        //inputにcheckされていたら外す
        //inputにtextが入力されていたら消す
        $inputCheck.prop("checked", false);
        $inputFind.val("");
      }
    }
  });
});

/* ---------------------------------------------
*  popup
--------------------------------------------- */
$(function () {
  $(".size-popup").magnificPopup({
    delegate: "a",
    type: "inline",
    removalDelay: 500,
    closeMarkup:
      '<button title="%title%" type="button" class="mfp-close hover-opacity"><img src="/common/pc/img/icon_modal_close_black.svg"></button>',
  });

  $(".open-popup").magnificPopup({
    delegate: "a",
    type: "inline",
    removalDelay: 500,
    closeMarkup:
      '<button title="%title%" type="button" class="mfp-close hover-opacity"><img src="/common/pc/img/icon_modal_close_black.svg"></button>',
  });
});

/* ---------------------------------------------
*  color output
--------------------------------------------- */
$(function () {
  var $clBtn = $(".js-color-button");
  var $clOuter = $(".color-item");
  var $clTarget = $(".js-color-output");
  var clClass = "current";
  var $currentBtn = $clBtn.hasClass(clClass);

  if ($currentBtn == true) {
    var $this = $(this);
    var tagId = $this.attr("data-color");
    var tagCurrentId = $(".js-color-button.current").data("color");

    //色別のテキストを出力
    $clTarget.append(tagCurrentId);
  }

  //ボタンを押したらdata属性のテキストを出力
  $clBtn.on("click", function () {
    var $this = $(this);
    var tagId = $this.data("color");
    var $thisOuter = $this.closest($clOuter);
    var $thisScope = $thisOuter.find($clBtn);
    var $thisTarget = $thisOuter.find($clTarget);

    //色別ボタンのカレント処理
    $clBtn.removeClass(clClass);
    $this.addClass(clClass);

    //色別のテキストを出力
    $thisTarget.empty();
    $thisTarget.append(tagId);

    var index = $(this).attr("data-index");
    $(".js-thum-slider").slick("slickGoTo", index, false);
  });
});

/* ---------------------------------------------
*  outlet banner
--------------------------------------------- */
$(function () {
  var outletBanner = {
    key: "outlet_banner",
    init: function () {
      if (this.isClosed()) {
        return;
      }
      $("body").append(
        '<p class="outlet-banner"><span class="outlet-banner-close"></span><a href="https://outlet.jadore-jun.jp/" target="_blank"><img src="/common/pc/img/outlet-banner.png" alt="JUN公式アウトレット"></a></p>'
      );
      var ol = $(".outlet-banner");
      var olb = $(".outlet-banner-close");
      ol.hide();
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          ol.fadeIn();
        } else {
          ol.fadeOut();
        }
      });
      olb.click(function () {
        ol.remove();
        outletBanner.closed();
      });
    },
    isClosed: function () {
      return sessionStorage.getItem(this.key);
    },
    closed: function () {
      sessionStorage.setItem(this.key, "closed");
    },
  };
  //outletBanner.init();
});
