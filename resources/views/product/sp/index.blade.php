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
  <title>K99</title>
  <link rel="apple-touch-icon" href="/common/img/apple-touch-icon.png" sizes="180x180">

  <!-- styles -->
  <link rel="stylesheet" href="/css/sp/reset.css" >
  <link rel="stylesheet" href="/css/sp/plugin.css">
  <link rel="stylesheet" href="/css/sp/base.css">
  <link rel="stylesheet" href="/css/sp/module.css">
  <link rel="stylesheet" href="/css/sp/article.css">
  <link rel="stylesheet" href="/css/sp/styling.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js" crossorigin="anonymous" SameSite="none Secure"></script>

</head>

<body class="styling-list">

  @include('/product.sp.header')
{{--   @include('/product.sp.gnav') --}}

  <div class="wrapper">
    <div class="contents">
      <div class="main">
        <!-- styling-list ------------------------------------>
        <div class="styling-list__wrap">
          <div class="select-box">
            <div class="select-box__left">
              <button type="button" class="js-selectmodal-trigger" data-select-modal="select-modal1"><span class="icon"></span>Tìm kiếm</button>
            </div>
          </div>
          <!-- [/select-box] -->

          <div class="container">
            <div class="styling-list__head">
              <?php $products = $data['products'] ?>
              <?php $services = $data['services'] ?>
              <h1 class="title-h1">
                Sản phẩm bán chạy
                <span class="hits">({{ $products->total() }})</span>
              </h1>
            </div>
          </div>

          <section class="section container mgb-sp--35 mgb-sp--75">
            <!-- [/title-h2] -->

            <div class="content-area styling-list__col-half">

              @foreach ($products as $product)
              <div class="content-cassette">
                <a href="{{ '/products/'.$product->id }}l">
                  <div class="content-cassette__image">
                    <img class="product-image" src="{{ $product->productImage->first()->file_name }}" alt="{{ $product->name }}">
                  </div>
                </a>
                <a href="#">
                  <div class="detail-icon">
                    <div class="detail-icon__image">
                      <img class="staff-icon" src="{{ $product->user->profile_picture }}" alt="">
                    </div>
                    <div class="detail-icon__texts">
                      <p class="text-item text-item--xlarge staff-name">{{ $product->name }}</p>
                      <p class="text-item shop-name">{{ $product->user->name }}</p>
{{--                       <div class="stars">
                      <?php
                        $rating_sum = $product->rating()->avg('product_rating.rating');
                        $average_stars = round($rating_sum * 2) / 2;
                        $drawn = 5;
                        for ($i = 0; $i < floor($average_stars); $i++)
                        {
                          $drawn--;
                          echo '<span class="star on"></span>';
                        }

                        if ($rating_sum - floor($average_stars) == 0.5)
                        {
                          $drawn--;
                          echo '<span class="star half"></span>';
                        }
                        if ($rating_sum <= 0) {
                          for ($i = 0; $i < 5; $i++)
                          {
                            $drawn--;
                            echo '<span class="star"></span>';
                          }
                        }
                      ?>
                        <span class="rating-number">({{  $product->rating()->count() }})</span>
                      </div> --}}
                      @if ($product->price > 0)
                      <p class="item-price ">₩{{ number_format($product->price) }}/1 {{ $product->quantityType ? $product->quantityType->name : "null" }}</p>
                      @else
                      <p class="item-price ">Giá: {{ $product->quantityType ? $product->quantityType->name : "null" }}</p>
                      @endif
                    </div>
                  </div>
                </a>
              </div>
              <!-- [/content-cassette] -->
              @endforeach
            </div>
            <!-- [/content-area] -->

            <!-- pager --------------->
            {{ $products->appends(['service_page' => $services->currentPage()])->withQueryString()->links() }}
            <!-- /pager --------------->

          </section>

          <div class="container">
            <div class="styling-list__head">
              <h1 class="title-h1">
                Dịch vụ phổ biến
                <span class="hits">({{ $services->total() }})</span>
              </h1>
            </div>
          </div>

          <section class="section container mgb-sp--35 mgb-sp--75">
            <!-- [/title-h2] -->

            <div class="content-area styling-list__col-half">

              @foreach ($services as $product)
              <div class="content-cassette">
                <a href="{{ '/products/'.$product->id }}l">
                  <div class="content-cassette__image">
                    <img class="product-image" src="{{ $product->productImage->first()->file_name }}" alt="{{ $product->name }}">
                  </div>
                </a>
                <a href="#">
                  <div class="detail-icon">
                    <div class="detail-icon__image">
                      <img class="staff-icon" src="{{ $product->user->profile_picture }}" alt="">
                    </div>
                    <div class="detail-icon__texts">
                      <p class="text-item text-item--xlarge staff-name">{{ $product->name }}</p>
                      <p class="text-item shop-name">{{ $product->user->name }}</p>
                      @if ($product->price > 0)
                      <p class="item-price ">₩{{ number_format($product->price) }}/1 {{ $product->quantityType ? $product->quantityType->name : "null" }}</p>
                      @else
                      <p class="item-price ">Giá: {{ $product->quantityType ? $product->quantityType->name : "null" }}</p>
                      @endif
                    </div>
                  </div>
                </a>
              </div>
              <!-- [/content-cassette] -->
              @endforeach
            </div>
            <!-- [/content-area] -->

            <!-- pager --------------->
            {{ $services->appends(['product_page' => $products->currentPage()])->withQueryString()->links() }}
            <!-- /pager --------------->

          </section>
        </div>
        <!-- / .styling-list__wrap -->
        <!-- /styling-list ------------------------------------>
      </div>
      <!-- [/main] -->

    </div>
    <!-- [/contents] -->


    <div id="fixed-select-box">
      <ul id="fixed-select-box__list">
        <li id="fixed-select-box__item">
          <button type="button" class="fixed-select-box__btn js-selectmodal-trigger" data-select-modal="select-modal1"><span class="icon"></span>Tìm kiếm</button>
        </li>
      </ul>
    </div>
    <!-- [/fixed-select-box] -->

  </div>
  <!-- [/wrapper] -->
  @include('/product.sp.select-modal')
  @include('/layouts.footer-sp')
  <!-- scripts -->
  <script src="/js/intersection-observer.min.js"></script>
  <script src="/js/lazy-image-loader.js"></script>
  <script src="/js/sp/lib/lib.js"></script>
  <script src="/js/sp/common.js"></script>
  <script src="/js/sp/gnav.js"></script>
  <script src="/js/sp/select-modal.js"></script>
  <script src="/js/sp/product-search.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin="anonymous" SameSite="none Secure"></script>

</body>

</html>
