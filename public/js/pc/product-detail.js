/* ---------------------------------------------
*  For position sticky
--------------------------------------------- */
$(window).on("load orientationchange resize", function () {
  var winHeignt = window.innerHeight;

  var $contentSt = $("#contentSt");
  var ctHeignt = $contentSt.innerHeight();

  var $header = $(".header");
  var hdHeignt = 20; //$header.innerHeight();

  var stickyHeight = winHeignt - ctHeignt - hdHeignt;

  var topPosi = (winHeignt - ctHeignt) / 2;

  if (winHeignt < ctHeignt) {
    $contentSt.css({
      top: stickyHeight,
    });
  } else {
    $contentSt.css({
      //top: '15px'
      top: "60px",
      //top: topPosi+'px'
    });
  }
});

/* ---------------------------------------------
*  slider for review
--------------------------------------------- */
$(function () {
  $(".js-slider-review").each(function () {
    $(this).slick({
      slidesToShow: 3,
      swipeToSlide: true,
      //autoplay: true,
      autoplaySpeed: 2000,
      pauseOnFocus: false,
      dots: true,
      variableWidth: true,
    });
  });
  $(".review-comment").matchHeight();
});

/* ---------------------------------------------
*  smooth scroll
--------------------------------------------- */
$(function () {
  $('a[href^="#"]').click(function () {
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});

/* ---------------------------------------------
*  select SKU
--------------------------------------------- */
$(function () {
  //カラー選択スライダー
  $(".js-slider-color").each(function () {
    $(this).slick({
      slidesToShow: 5,
      slidesToScroll: 5,
      //swipeToSlide: true,
      //pauseOnFocus: false,
      infinite: false,
      variableWidth: true,
    });
  });

  var $clBtn = $(".js-color-button");
  var $clOuter = $(".color-item__thum");
  var clClass = "current";
  var $currentBtn = $clBtn.hasClass(clClass);
  var $sizeList = $(".size-list");
  var $szBtn = $(".js-size-button");
  var $ctaBtn = $(".js-cta-btn");

  //カラー選択
  $clBtn.on("click", function () {
    var $this = $(this);
    var anc = $this.data("index");
    var sz = $this.data("size");
    var position = $(anc).offset().top - 9;

    //色別ボタンのカレント処理
    $clBtn.removeClass(clClass);
    $this.addClass(clClass);

    //当該画像へスクロール
    $("html, body").animate({ scrollTop: position }, 500, "swing");

    $sizeList.hide();
    $sizeList.removeClass("current");
    $(sz).show();
    $(sz).addClass("current");

    setCtaBtn($(".size-list.current .current"));
  });

  //カラーhover
  $clBtn.hover(
    function () {
      var hsz = $(this).data("size");
      sethover = setTimeout(function () {
        $sizeList.hide();
        $(hsz).show();
      }, 200);
    },
    function () {
      clearTimeout(sethover);
    }
  );

  $clOuter.hover(
    function () {},
    function () {
      $(".size-list").hide();
      $(".size-list.current").show();
    }
  );

  //サイズ選択
  var $szBtn = $(".js-size-button");
  var $szOuter = $(".size-item");
  var $szTarget = $(".js-size-output");
  var szClass = "current";
  var $currentBtn = $szBtn.hasClass(szClass);
  var $ctaBtn = $(".js-cta-btn");
  //var $sizeList = $('.size-list')
  var $btnText = $(".js-cart-btn-text");
  var $addcartText = "カートに入れる";
  var $restockText = "再入荷メール";

  $szBtn.on("click", function () {
    var $this = $(this);
    var selectedSize = String($this.data("size"));

    //console.log(selectedSize);

    //色別ボタンのカレント処理
    $szBtn.removeClass(szClass);
    $(
      ".js-size-button[data-size=" + selectorEscape(selectedSize) + "]"
    ).addClass(szClass);

    $(".product-detail__chat.stock a").addClass("ok");
    setCtaBtn($this);
  });

  function setCtaBtn(target) {
    if (target.hasClass("sold-out")) {
      $ctaBtn.removeClass("addcart");
      $ctaBtn.addClass("restock");
      var restock_text = target.data("restock_text");
      if (restock_text) {
        $btnText.text(restock_text);
      } else {
        $btnText.text($restockText);
      }
    } else if (target.hasClass("in-stock")) {
      $ctaBtn.removeClass("restock");
      $ctaBtn.addClass("addcart");
      var cart_text = target.data("cart_text");
      if (cart_text) {
        $btnText.html(cart_text);
      } else {
        $btnText.text($addcartText);
      }
    }
    // SKU別割引
    $ctaBtn.data("price", target.data("price"));
  }

  function selectorEscape(val) {
    return val.replace(/[ !"#$%&'()*+,.\/:;<=>?@\[\\\]^`{|}~]/g, "\\$&");
  }
});

$(function () {
  $('[data-fancybox="sizeguide"').fancybox({
    loop: true,
    infobar: false,
    transitionEffect: "slide",
    buttons: ["close", "cta"],
    hash: false,
  });

  var gh = $("#img01").offset().top - 9;

  $(".layout-change").on("click", function () {
    $(this).toggleClass("col1");
    $(".product-detail__gallery").toggleClass("row");
    $("html, body").animate({ scrollTop: gh }, 500, "swing");
  });
});

/* ---------------------------------------------
*  UNISIZE
--------------------------------------------- */
var target = document.getElementById("jol-unisize");

var observer = new MutationObserver((mutations) => {
  $("body").toggleClass("unisize-open");
});

var config = {
  childList: true,
};

observer.observe(target, config);
