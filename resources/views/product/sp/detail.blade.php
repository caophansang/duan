<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- meta settings -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- meta keywords / description -->
  <meta name="keywords" content="">
  <meta name="description" content="">

  <!-- title -->
  <?php $product = $data['product']; ?>
  <title>{{ $product->name }}｜{{ $product->user->name }}</title>
  <link rel="apple-touch-icon" href="/common/img/apple-touch-icon.png" sizes="180x180">
  <!-- styles -->
  <link href="/css/sp/reset.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/sp/plugin.css">
  <link rel="stylesheet" href="/css/sp/base.css">
  <link rel="stylesheet" href="/css/sp/module.css">
  <link rel="stylesheet" href="/css/sp/styling.css">
  <link rel="stylesheet" href="/css/sp/detail_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  @toastr_css
</head>

<body class="page-space styling-detail">
  @include('/product.sp.header')
  <div class="wrapper">
    <div class="contents">
      <div class="main styling-page">
        <!-- [/container] -->

        <!-- スタイリング画像スライダー -->
        <div class="styling-detail__slider">
          <div class="slider-wide-arrow-gray js-slide-gray-arrow">
            <?php $productImages = $data['productImages']; ?>
            @foreach ($productImages as $image)
            <div class="image-main">
              <p class="image-main__item">
                <img src="{{ $image->file_name }}" alt="{{ $product->name }}">
              </p>
              <p class="image-main__text">{{ $product->name }}</p>
            </div>
            @endforeach
          </div>
          <!-- [/slider-wide] -->
        </div><!-- / .styling-detail__slider -->

        <!-- スタイリング本文 -->
        <div class="styling-detail__main">
          <div class="container mgb-sp--30">
            <div class="title-icon mgb-sp--15">
              <h1 class="title-icon__text">{{ $product->name }}</h1>
              <div class="title-icon__image">
                <a href="{{ $product->user->facebook_link }}">
                  <p class="title-icon__image-item">
                    <img src="{{ $product->user->profile_picture }}" alt="">
                  </p>
                  <p class="title-icon__image-caption">{{ $product->user->name }}</p>
                </a>
              </div>
            </div>
            <!-- [/title-icon] -->
            @if($product->price > 0)
            <p class="text-item text-item--xxxlarge mgb-sp--25">Giá: ₩{{ number_format($product->price) }}/1{{ $product->quantityType ? $product->quantityType->name : "null" }}</p>
            @else
            <p class="text-item text-item--xxxlarge mgb-sp--25">Giá: {{ $product->quantityType ? $product->quantityType->name : "null" }}</p>
            @endif
            <p class="text-item text-item--mlarge text-item--narrow">{{ $product->description }}</p>
          <!-- [/container] -->
          </div>
        </div><!-- / .styling-detail__main -->

          <div class="two-buttons flex">
            <div class="left">
              <button type="submit" class="add-button">
                <a href="{{ $product->user->facebook_link }}" target="blank"><i class="fab fa-facebook-f"></i> Liên hệ </a>
              </button>
            </div>
          </div>
        </div>

        <section class="section section--styling">
          <div class="container">

            <h2 class="title-item title-item--xlarge mgb-sp--30">Có thể bạn quan tâm</h2>
            <!-- [/title-item] -->

            <div class="content-area">
              <?php $otherProducts = $data['otherProducts'] ?>
              @foreach ($otherProducts as $otherProduct)
              <div class="content-cassette content-cassette--three">
                <a href="{{ '/products/'.$otherProduct->id }}">
                  <div class="content-cassette__image">
                    <img class="other-products" src="{{ $otherProduct->productImage->first()->file_name }}" alt="">
                  </div>
                </a>
                <a href="#">
                  <div class="detail-icon">
                    <div class="detail-icon__image">
                      <img src="{{ $otherProduct->user->profile_picture }}" alt="">
                    </div>
                    <div class="detail-icon__texts">
                      <p class="text-item text-item--xlarge">{{ $otherProduct->name }}</p>
                    </div>
                  </div>
                </a>
              </div>
              @endforeach
              <!-- [/content-cassette] -->
            </div>
            <!-- [/content-area] -->

          </div>
          <!-- [/container] -->
        </section><!-- / .section section--styling -->

      </div>
      <!-- [/main] -->

    </div>
    <!-- [/contents] -->

   @include('/layouts.footer-sp')

  </div>
  <!-- [/wrapper] -->

  <!-- scripts -->
  <script src="/js/sp/lib/lib.js"></script>
  <script src="/js/sp/common.js"></script>
  <script src="/js/sp/gnav.js"></script>
  <script>
    (function() {
 
      window.inputNumber = function(el) {

            var min = el.attr('min') || false;
            var max = el.attr('max') || false;

            var els = {};

            els.dec = el.prev();
            els.inc = el.next();

            el.each(function() {
              init($(this));
            });

            function init(el) {

              els.dec.on('click', decrement);
              els.inc.on('click', increment);

              function decrement() {
                var value = el[0].value;
                value--;
                if(!min || value >= min) {
                  el[0].value = value;
                }
              }

              function increment() {
                var value = el[0].value;
                value++;
                if(!max || value <= max) {
                  el[0].value = value++;
                }
              }
            }
          }
        })();

        inputNumber($('.input-number'));
  </script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  @toastr_js
  @toastr_render
</body>

</html>
