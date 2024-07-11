<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- meta settings -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=1200">
  <meta name="format-detection" content="telephone=no">
  <!-- meta keywords / description -->
  <meta name="keywords" content="">
  <meta name="description" content="">

  <!-- title -->
  <?php $product = $data['product']; ?>
  <title>{{ $product->name }}｜{{ $product->user->name }}</title>
  <link rel="apple-touch-icon" href="/common/img/apple-touch-icon.png" sizes="180x180">

  <!-- styles -->
  <link rel="stylesheet" href="/css/pc/reset.css">
  <link rel="stylesheet" href="/css/pc/plugin.css">
  <link rel="stylesheet" href="/css/pc/base.css">
  <link rel="stylesheet" href="/css/pc/module.css">
  <link rel="stylesheet" href="/css/pc/styling.css">
  <link rel="stylesheet" href="/css/sp/detail_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
</head>

<body class="styling-detail">
  @include('/layouts.header')
  <div class="wrapper wrapper--product">
    <div class="contents">

      <div class="main styling-page">

        <div class="container bd-space">

          <div class="content-break">

            <!-- 左カラム -->
            <!-- スタイリング画像スライダー -->
            <div class="content-break-inner content-break-inner--wide styling-detail__slider">

              <div class="slider-connected slider-connected--large">

                <div class="slider-connected__main-outer">
                  <ul class="slider-connected__main js-thum-slider">
                    <?php $productImages = $data['productImages']; ?>
                    @foreach ($productImages as $image)
                    <li class="slider-connected__main-item">
                      <img src="{{ $image->file_name }}" alt="">
                    </li>
                    @endforeach
                  </ul>
                  <!-- [/for main-slider] -->
                </div>

                <ul class="slider-connected__thumbnail js-thumItem-slider">
                  @foreach ($productImages as $image)
                  <li class="slider-connected__thumbnail-item">
                    <div class="slider-connected__thumbnail-item-image">
                      <img class="thumbnail-image" src="{{ $image->file_name }}" alt="">
                    </div>
                  </li>
                  @endforeach
                </ul>
                <!-- [/for thumbnail] -->

              </div>
              <!-- [/slider-connected] -->

            </div>
            <!-- [/content-break-inner] -->
            <!-- /左カラム -->

            <!-- 右カラム -->
            <div class="content-break-inner content-break-inner--l-wide content-break-inner--sticky">

              <!-- スタッフ詳細 -->
              <div class="styling-detail__staff">
                <div class="detail-icon">
                  <div class="detail-icon__image">
                    <a href="{{ $product->user->facebook_link }}" target="blank">
                      <img src="{{ $product->user->profile_picture }}" alt="">
                    </a>
                  </div>
                  <div class="detail-icon__texts">
                    <a href="{{ $product->user->facebook_link }}" target="blank">
                      <p class="detail-icon__texts-name">
                        <span class="detail-icon__texts-name-big">{{ $product->user->name }}</span>
                      </p>
                    </a>
                    <a href="#" class="detail-icon__texts-text">SDT: {{ $product->user->phone_number }}</a>
                    <a href="#" class="detail-icon__texts-text">Địa chỉ: {{ $product->user->address }}</a>
                  </div>
                </div>
                <!-- [/detail-icon] -->
              </div>

              <!-- スタイリング本文 -->
              <div class="styling-detail__main">
                <div class="content-styling-inner">
                  <h1 class="title-content">{{ $product->name }}</h1>
                  <!-- [/title-content] -->
                  @if ($product->price > 0)
                  <h2>Giá: ₩{{ number_format($product->price) }}/1 {{ $product->quantityType ? $product->quantityType->name : "null" }}</h2>
                  @else
                  <h2>Giá: {{ $product->quantityType ? $product->quantityType->name : "null" }}</h2>
                  @endif
                  <p class="text-item text-item--mlarge text-item--narrow">{{ $product->description }}</p>
                    <div class="two-buttons flex">
                      <div class="left">
                        <button type="submit" class="add-button">
                          <a href="{{ $product->user->facebook_link }}" target="blank"><i class="fab fa-facebook-f"></i> Liên hệ</a>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- [/link-button] -->

            </div>
            <!-- [/content-break-inner] -->
            <!-- /右カラム -->

          </div>
          <!-- [/content-break] -->

        </div>
        <!-- [/container] -->

        <!-- 同じアイテムのを使ったスタイリング-->
        <section class="styling-detail__other-styling">
          <div class="container">

            <h2 class="title-h2-small">Có thể bạn quan tâm</h2>
            <!-- [/title-h2-small] -->

            <div class="js-tab-target current">
              <ul class="content-area content-area--five-lineup">
                <?php $otherProducts = $data['otherProducts'] ?>
                @foreach ($otherProducts as $otherProduct)
                <li class="content-area__list">
                  <a href="{{ '/products/'.$otherProduct->id }}" class="content-cassette">
                    <div class="content-cassette__image">
                      <img class="lazy other-products" src="{{ $otherProduct->productImage->first()->file_name }}" 
                      data-src="{{ $otherProduct->productImage->first()->file_name }}" alt="">
                    </div>
                    <div class="detail-icon">
                      <div class="detail-icon__image">
                        <img src="{{ $otherProduct->user->profile_picture }}" alt="">
                      </div>
                      <div class="detail-icon__texts">
                        <p class="text-item">{{ $otherProduct->name }}</p>
                      </div>
                    </div>
                  </a>
                  <!-- [/content-cassette] -->
                </li>
                @endforeach
              </ul>
              <!-- [/content-area] -->
            </div>
            <!-- [/js-tab-target] -->
          </div>
          <!-- [/container] -->
        </section>
        <!-- [/section] -->
        <br>
      </div>
      <!-- [/main] -->

    </div>
    <!-- [/contents] -->
  </div>
  <!-- [/wrapper] -->

  @include('/layouts.footer-pc')

  <!-- scripts -->
  <script src="/js/intersection-observer.min.js"></script>
  <script src="/js/lazy-image-loader.js"></script>
  <script src="/js/pc/lib/lib.js"></script>
  <script src="/js/pc/common.js"></script>
  <script src="/js/pc/gnav.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
{{--   @jquery --}}
</body>

</html>
