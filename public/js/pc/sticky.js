/* ---------------------------------------------
*  For position sticky
--------------------------------------------- */
$(window).on("load orientationchange resize", function () {
  var winHeignt = window.innerHeight;

  var $contentSt = $("#contentSt");
  var ctHeignt = $contentSt.innerHeight();

  var $header = $(".header");
  var hdHeignt = $header.innerHeight();

  var stickyHeight = winHeignt - ctHeignt - hdHeignt;

  if (winHeignt < ctHeignt) {
    $contentSt.css({
      top: stickyHeight,
    });
  } else {
    $contentSt.css({
      top: "15px",
    });
  }
});
