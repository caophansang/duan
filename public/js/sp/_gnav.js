/* ---------------------------------------------
*   header Scroll
--------------------------------------------- */
$(function() {
    var $header = $('.header');
    var headerHeight = $header.outerHeight();
    var headerClass = 'header-scroll';
    var headerBgClass = 'bg-white';
    var value = $('html,body').scrollTop();
    //var kvBottom = $('#top-kv').position().top + $('#top-kv').height();
    var startPos = 400;
  
    if($('#top-kv').length){
      var kvBottom = $('#top-kv').position().top + $('#top-kv').height();
      var topKV = true;
    }
  
    headerDisplay(value);

    $(window).on('scroll', function() {
        var value = $(this).scrollTop();
        headerDisplay(value);
        if(topKV){
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
            //console.log(value);
            //console.log(kvBottom);
            $header.addClass(headerBgClass);
        } else {
            $header.removeClass(headerBgClass);
        }
    }
});

/* ---------------------------------------------
*   Gnav
--------------------------------------------- */
$(window).on('load', function() {
    $('.global-nav').addClass('loaded');
});

//メニューの開閉JS
$(function() {
    var $bodyTarget = $('body');
    var $headerTrigger = $('.header-trigger');
    var $wrapper = $('.wrapper');
    var $header = $('.header');
    var $globalNav = $('.global-nav');
    var $overlay = $('.overlay');
    var activeClass = 'active';
    var openClass = 'open';

    $headerTrigger.on('click', function() {
        if ($(this).hasClass(activeClass)) {
            $(this).removeClass(activeClass);
            $wrapper.removeClass(openClass);
            $header.removeClass(openClass);
            $globalNav.removeClass(openClass);
            $overlay.removeClass(openClass);
            bodyFixReset();
        } else {
            $(this).addClass(activeClass);
            $wrapper.addClass(openClass);
            $header.addClass(openClass);
            $globalNav.addClass(openClass);
            $overlay.addClass(openClass);
            bodyFix();
        }
    });

    $overlay.on('click', function() {
        if ($(this).hasClass(openClass)) {
            $(this).removeClass(openClass);
            $headerTrigger.removeClass(activeClass);
            $wrapper.removeClass(openClass);
            $header.removeClass(openClass);
            $globalNav.removeClass(openClass);
            bodyFixReset();
        }
    });

    //メニュー内の詳細メニュー開閉JS
    var directTrigger = '.js-direct-link';
    var gnavTrigger = '.js-menu-click';
    var gnavScope = '.js-gnav-scope';
    var gnavTarget = '.js-gnav-target';
    var returnTrigger = '.js-return';
    var showClass = 'is-show';
    var hideClass = 'is-hide';

    $(directTrigger).on('click', function() {
        var $this = $(this);
        var level = $this.data('level');
        var target = $this.data('target');
        var targetAry = target.split(',');
        var aryLength = targetAry.length;
        $(gnavScope).removeClass(hideClass).removeClass(showClass);

        $headerTrigger.addClass(activeClass);
        $wrapper.addClass(openClass);
        $header.addClass(openClass);
        $globalNav.addClass(openClass);
        $overlay.addClass(openClass);
        bodyFix();

        $(gnavScope).addClass(hideClass);
        for (var i = level; i < gnavScope.length; i++) {
            $('[data-menu="' + i + '"]').removeClass(hideClass);
        }
        $('[data-menu="' + level + '"]').addClass(showClass);
        for (var i = 0; i < aryLength; i++) {
            $('[data-target="' + targetAry[i] + '"]').show();
        }
    });

    $(gnavTrigger).on('click', function() {
        var $this = $(this);
        var level = $this.data('level');
        var target = $this.data('target');
        var $thisScope = $this.closest(gnavScope);

        $thisScope.addClass(hideClass);
        $('[data-menu="' + level + '"]').addClass(showClass);
        $('[data-target="' + target + '"]').show();
    });

    $(returnTrigger).on('click', function() {
        var $this = $(this);
        var $thisScope = $this.closest(gnavScope);
        var prevLevel = $thisScope.data('menu') - 1;
        var $thisTarget = $this.closest(gnavTarget);

        $thisScope.removeClass(showClass);

        $thisScope.on('transitionend.gnavMenu', function() {
            $thisTarget.hide();
            $thisScope.off('transitionend.gnavMenu');
        });

        $('[data-menu="' + prevLevel + '"]')
            .removeClass(hideClass)
            .addClass(showClass);
    });

    function bodyFix() {
        scrollPosi = $(window).scrollTop();
        $bodyTarget.css({
            position: 'fixed',
            width: '100%',
            'z-index': '1',
            top: -scrollPosi
        });
    }

    //body fixリセット
    function bodyFixReset() {
        $bodyTarget.css({
            position: 'relative',
            width: 'auto',
            top: 'auto'
        });
        //scroll位置を調整
        $.when($('html, body').scrollTop(scrollPosi)).then(function() {
            $('.header').removeClass('header-scroll');
        });
    }
});
