/* ==========================================================
[ 目次 ]

<body>クラス設定
header Scroll
Tab
Slider
Search Area

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

    $.when(
      $(".js-slide-middle.current").slick("unslick"),
      $(".js-slide-small.current").slick("unslick"),
      $thisScope.removeClass("current"),
      $thisTarget.removeClass("current"),
      $this.addClass("current"),
      $("#" + tagId).addClass("current")
    ).done(function () {
      $(".js-slide-middle.current").slick({
        centerMode: true,
        slidesToShow: 1,
        centerPadding: "11%",
        //autoplay: true,
        //autoplaySpeed: 2000
      });
      $(".js-slide-small.current").slick({
        dots: true,
        centerMode: true,
        slidesToShow: 1,
        centerPadding: "26%",
        autoplay: true,
        autoplaySpeed: 2000,
      });
    });
  });
});

/*  switching-tab
--------------------------------------------- */
$(function () {
  var $btn = $(".js-switching-tab");
  var $tabOuter = $(".js-switching-outer");
  var $tabTarget = $(".js-switching-tab-target");
  var $slideWide = $(".js-slide-wide");

  $btn.on("click", function () {
    var $this = $(this);
    var tagId = $this.data("id");
    var $thisOuter = $this.closest($tabOuter);
    var $thisScope = $thisOuter.find($btn);
    var $thisTarget = $thisOuter.find($tabTarget);
    var $thisSlide = $thisTarget.find($slideWide);

    $.when(
      $(".js-slide-wide.current").slick("unslick"),
      $thisScope.removeClass("current"),
      $thisTarget.removeClass("current"),
      $thisSlide.removeClass("current"),
      $this.addClass("current"),
      $("#" + tagId).addClass("current"),
      $thisSlide.addClass("current")
    ).done(function () {
      $(".js-slide-wide.current").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 5000,
      });
    });
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
    autoplaySpeed: 5000,
  });

  $(".js-slide-gray-arrow").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    pauseOnHover: false,
    pauseOnFocus: false,
  });

  $(".js-slide-wide").each(function () {
    if ($(this).hasClass("current")) {
      $(this).slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });
    }
  });

  $(".js-slide-middle").each(function () {
    if ($(this).hasClass("current")) {
      $(this).slick({
        centerMode: true,
        slidesToShow: 1,
        centerPadding: "11%",
      });
    }
  });

  $(".js-slide-small").each(function () {
    if ($(this).hasClass("current")) {
      $(this).slick({
        dots: true,
        centerMode: true,
        slidesToShow: 1,
        centerPadding: "20%",
        autoplay: true,
        autoplaySpeed: 4000,
      });
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

/*  もっと見る
--------------------------------------------- */
$(function () {
  $(".link-more-acrd").on("click", function () {
    $(this).siblings(".more-contents").toggleClass("show");
  });
});

/* ---------------------------------------------
*   page-top
--------------------------------------------- */
$(function () {
  $("body").append('<p id="page-top"><a href="#" id="page-top-btn"><img src="/img/pc/icon_arrow_top.png"></a></p>');

  var topBtn = $("#page-top");
  var pageTopBtn = $("#page-top-btn");
  topBtn.hide();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 800) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });

  pageTopBtn.on("click",function () {
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
*   fixed-select-box
--------------------------------------------- */
$(function () {
  var target = $(".fixed-select-box__btn");
  target.hide();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 600) {
      target.fadeIn();
    } else {
      target.fadeOut();
    }
  });
});
