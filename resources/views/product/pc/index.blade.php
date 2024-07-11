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
  <title>K99</title>
  <link rel="apple-touch-icon" href="/common/img/apple-touch-icon.png" sizes="180x180">

  <!-- styles -->
  <link href="/css/pc/reset.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/pc/plugin.css">
  <link rel="stylesheet" href="/css/pc/base.css">
  <link rel="stylesheet" href="/css/pc/module.css">
  <link rel="stylesheet" href="/css/pc/styling.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

</head>

<body class="product-list styling-list">

  @include('/layouts.header')
  <div class="wrapper">

    <div class="contents">

      <div class="slider-wide js-slide-wide-dot" id="top-kv" style="width: 1175px; margin: auto; padding-left: 10px;">
        <?php $banners = $data['banners'] ?>
        @foreach ($banners as $banner)
        <div class="slider-wide__list">
          <a href="{{ $banner->target_link }}" target="blank">
            <img src="{{ $banner->file_name }}" alt="">
          </a>
          <p class="slider-wide__caption-large">{{ $banner->description }}</p>
        </div>
        @endforeach
      </div>

      <div class="product-area">

        <aside class="list-menu">

          <div class="search-nav mgb-pc--20">
            <?php $selected_category = $data['selected_category']; ?>
            <?php $selected_category2 = $data['selected_category2']; ?>
            <?php $services = $data['services'] ?>
            <?php $products = $data['products'] ?>
            <form id="search_form" action="" method="get" class="search-nav__form" data-brand="">
              <input type="search" name="q" value="{{ $data['q'] }}" placeholder="Nhập tên sản phẩm" class="search-nav__frame" autocomplete="off">
              <input type="hidden" name="category" value="{{ !empty($selected_category) ? $selected_category->id : '' }}">
              <input type="hidden" name="category2" value="{{ !empty($selected_category2) ? $selected_category2->id : '' }}">
              <input type="hidden" name="q" value="{{ $data['q'] }}">
              <input type="hidden" name="page" value="">
              <input type="button" name="submit" class="search-nav__icon">
            </form>
          </div>
          <!-- [/search-nav] -->

          <!-- Loại sp -->
          <!-- Loại sp -->
          <div class="list-nav mgb-pc--35">
            <p class="list-menu-title">Sản Phẩm Theo Loại</p>
            <ul class="list-nav__list js-side-scope">
              <?php $product_categories = $data['product_categories'] ?>
              <?php $categories = $data['categories'] ?>
              @foreach ($product_categories as $c1)
              <?php $checked = false; ?> 
              <?php if ( (!empty($selected_category) 
              && ($categories->where('id', $selected_category->parent_id)->first())
              && ($c1->id == $categories->where('id', $selected_category->parent_id)->first()->id)) 
              ||( !empty($selected_category) && $selected_category->id == $c1->id )) {
                $checked = true;
              } ?>

              <?php if (!empty($selected_category)) {
                  if ( $checked == false) {
                    continue;
                  }
                }
              ?>
              <li class="list-nav__list-item js-side-menu category
                {{ $checked ? 'list-nav__list-item--current' : '' }}
                ">
                <a href="javascript:" class="list-nav__link list-nav__link--arrow category1">
                  <p class="list-nav__text">{{ $c1->name }}</p>
                </a>
                <ul class="list-nav__detail js-side-target">
                  <li class="list-nav__detail-item
                    {{ !empty($selected_category) && $selected_category->id == $c1->id ? 'list-nav__detail-item--current' : '' }}
                    ">
                    <a href="javascript:" class="list-nav__detail-link category
                      " data-category="{{$c1->id}}">
                      Tất cả {{ $c1->name }}
                    </a>
                  </li>
                  @foreach ($categories->where('parent_id', $c1->id) as $c2)
                  <li class="list-nav__detail-item
                    {{ !empty($selected_category) && ($selected_category->id === $c2->id) ? 'list-nav__detail-item--current' : '' }}
                    ">
                    <a href="javascript:" class="list-nav__detail-link category
                      " data-category="{{$c2->id}}">
                      {{ $c2->name }}
                    </a>
                  </li>
                  @endforeach
                </ul>
              </li>
              @endforeach

              @if (!empty($selected_category))
              <li class="list-nav__list-item js-accordion-menu">
                <button class="list-nav__link js-accordion-button">
                  <p class="list-nav__text">Sản phẩm khác</p>
                </button>
                <ul class="list-nav__detail js-accordion-target">
                  @foreach ($product_categories as $c1)
                  <?php if (!empty($selected_category) && $selected_category->id === $c1->id) {
                      continue;
                    }?>
                  <li class="list-nav__list-item js-side-menu category">
                    <a href="javascript:" class="list-nav__link list-nav__link--arrow category1">
                      <p class="list-nav__text">{{ $c1->name }}</p>
                    </a>
                    <ul class="list-nav__detail js-side-target">
                      <li class="list-nav__detail-item">
                        <a href="javascript:" class="list-nav__detail-link category
                          " data-category="{{$c1->id}}">
                          Tất cả {{ $c1->name }}
                        </a>
                      </li>
                      @foreach ($categories->where('parent_id', $c1->id) as $c2)
                      <li class="list-nav__detail-item">
                        <a href="javascript:" class="list-nav__detail-link category
                          " data-category="{{$c1->id}}">
                          {{ $c2->name }}
                        </a>
                      </li>
                      @endforeach
                    </ul>
                  </li>
                  @endforeach
                </ul>
              </li>
              @endif
            </ul>
          </div>

          <div class="list-nav mgb-pc--35">
            <p class="list-menu-title">Dịch Vụ</p>
            <ul class="list-nav__list js-side-scope">
              <?php $service_categories = $data['service_categories'] ?>
              <?php $categories = $data['categories'] ?>
              @foreach ($service_categories as $c1)
              <?php $checked = false; ?> 
              <?php if ( (!empty($selected_category2) 
              && ($categories->where('id', $selected_category2->parent_id)->first())
              && ($c1->id == $categories->where('id', $selected_category2->parent_id)->first()->id)) 
              ||( !empty($selected_category2) && $selected_category2->id == $c1->id )) {
                $checked = true;
              } ?>

              <?php if (!empty($selected_category2)) {
                  if ( $checked == false) {
                    continue;
                  }
                }
              ?>
              <li class="list-nav__list-item js-side-menu category2
                {{ $checked ? 'list-nav__list-item--current' : '' }}
                ">
                <a href="javascript:" class="list-nav__link list-nav__link--arrow category2">
                  <p class="list-nav__text">{{ $c1->name }}</p>
                </a>
                <ul class="list-nav__detail js-side-target">
                  <li class="list-nav__detail-item
                    {{ !empty($selected_category2) && $selected_category2->id == $c1->id ? 'list-nav__detail-item--current' : '' }}
                    ">
                    <a href="javascript:" class="list-nav__detail-link category2
                      " data-category2="{{$c1->id}}">
                      Tất cả {{ $c1->name }}
                    </a>
                  </li>
                  @foreach ($categories->where('parent_id', $c1->id) as $c2)
                  <li class="list-nav__detail-item
                    {{ !empty($selected_category2) && ($selected_category2->id === $c2->id) ? 'list-nav__detail-item--current' : '' }}
                    ">
                    <a href="javascript:" class="list-nav__detail-link category2
                      " data-category2="{{$c2->id}}">
                      {{ $c2->name }}
                    </a>
                  </li>
                  @endforeach
                </ul>
              </li>
              @endforeach

              @if (!empty($selected_category2))
              <li class="list-nav__list-item js-accordion-menu">
                <button class="list-nav__link js-accordion-button">
                  <p class="list-nav__text">Dịch vụ khác</p>
                </button>
                <ul class="list-nav__detail js-accordion-target">
                  @foreach ($service_categories as $c1)
                  <?php if (!empty($selected_category2) && $selected_category2->id === $c1->id) {
                      continue;
                    }?>
                  <li class="list-nav__list-item js-side-menu category">
                    <a href="javascript:" class="list-nav__link list-nav__link--arrow category2">
                      <p class="list-nav__text">{{ $c1->name }}</p>
                    </a>
                    <ul class="list-nav__detail js-side-target">
                      <li class="list-nav__detail-item">
                        <a href="javascript:" class="list-nav__detail-link category2
                          " data-category2="{{$c1->id}}">
                          Tất cả {{ $c1->name }}
                        </a>
                      </li>
                      @foreach ($categories->where('parent_id', $c1->id) as $c2)
                      <li class="list-nav__detail-item">
                        <a href="javascript:" class="list-nav__detail-link category2
                          " data-category2="{{$c1->id}}">
                          {{ $c2->name }}
                        </a>
                      </li>
                      @endforeach
                    </ul>
                  </li>
                  @endforeach
                </ul>
              </li>
              @endif
            </ul>
          </div>
          <!-- [/list-nav] -->
        </aside>
        <!-- [/list-menu] -->

        <div class="content-main">
          <h1 class="title-h1 mgb-pc--50" id="productx">
            Sản phẩm bán chạy
            <span class="hits">({{ $products->total() }})</span>
          </h1>

          <div class="content-area">
            @foreach ($products as $product)
            <div class="content-cassette content-cassette--four">
              <a href="{{ '/products/'.$product->id }}">
                <div class="content-cassette__image">
                  <img class="product-image" src="{{ $product->productImage->first()->file_name }}" alt="{{ $product->name }}">
                </div>
                <div class="detail-icon">
                  <div class="detail-icon__image">
                    <img src="{{ $product->user->profile_picture }}" alt="">
                  </div>
                  <div class="detail-icon__texts">
                    <p class="text-item staff-name">{{ $product->name }}</p>
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
            @endforeach
          </div>
          {{ $products->appends(['service_page' => $services->currentPage()])->withQueryString()->links() }}
          <br><br><br><br>
          <!-- [/content-area] -->

          {{--  Dich vu --}}
         <h1 class="title-h1 mgb-pc--50" id="servicex">
            Dịch vụ phổ biến
            <span class="hits">({{ $services->total() }})</span>
          </h1>

          <div class="content-area">
            @foreach ($services as $service)
            <div class="content-cassette content-cassette--four">
              <a href="{{ '/products/'.$service->id }}">
                <div class="content-cassette__image">
                  <img class="product-image" src="{{ $service->productImage->first()->file_name }}" alt="{{ $service->name }}">
                </div>
                <div class="detail-icon">
                  <div class="detail-icon__image">
                    <img src="{{ $service->user->profile_picture }}" alt="">
                  </div>
                  <div class="detail-icon__texts">
                    <p class="text-item staff-name">{{ $service->name }}</p>
                    <p class="text-item shop-name">{{ $service->user->name }}</p>
                    @if ($service->price > 0)
                    <p class="item-price ">₩{{ number_format($service->price) }}/1 {{ $service->quantityType ? $service->quantityType->name : "null" }}</p>
                    @else
                    <p class="item-price ">Giá: {{ $service->quantityType ? $service->quantityType->name : "null" }}</p>
                    @endif
                  </div>
                </div>
              </a>
            </div>
            @endforeach
          </div>

          <!-- pager --------------->
          {{ $services->appends(['$product_page' => $products->currentPage()])->withQueryString()->links() }}
          <!-- /pager --------------->

        </div>
        <!-- [/content-main] -->

      </div>
      <!-- [/product-area] -->

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
  <script src="/js/pc/styling/styling-search.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>
