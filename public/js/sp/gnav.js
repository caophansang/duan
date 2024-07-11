/* ---------------------------------------------
*   header Scroll
--------------------------------------------- */
$(function () {
  var $header = $(".header");
  var headerHeight = $header.outerHeight();
  var headerClass = "header-scroll";
  var headerBgClass = "bg-white";
  var value = $("html,body").scrollTop();
  var startPos = 400;

  if ($("#top-kv").length) {
    var kvBottom = $("#top-kv").position().top + $("#top-kv").height();
    var topKV = true;
  }

  headerDisplay(value);

  $(window).on("scroll", function () {
    var value = $(this).scrollTop();
    headerDisplay(value);
    if (topKV) {
      headerDisplayBG(value);
    }
  });

  function headerDisplay(value) {
    if (value > startPos && value > headerHeight) {
      $header.addClass(headerClass);
    } else if (startPos > value) {
      $header.removeClass(headerClass);
    }
    startPos = value;
  }

  function headerDisplayBG(value) {
    if (value > kvBottom) {
      $header.addClass(headerBgClass);
    } else {
      $header.removeClass(headerBgClass);
    }
  }
});

