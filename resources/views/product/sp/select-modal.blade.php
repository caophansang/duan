<form id="search_form" action="search_form_styling" method="get">
  <?php $selected_category = $data['selected_category']; ?>
  <?php $selected_category2 = $data['selected_category2']; ?>
  <input type="hidden" name="q" value="{{ $data['q'] }}">
  <input type="hidden" name="category" value="{{ !empty($selected_category) ? $selected_category->id : '' }}">
  <input type="hidden" name="category2" value="{{ !empty($selected_category2) ? $selected_category2->id : '' }}">
  <input type="hidden" name="page" value="">
</form>
<!-- start [モーダル(絞り込み)] -->
<?php $categories = $data['categories']; ?>
<?php $product_categories = $data['product_categories']; ?>
<?php $service_categories = $data['service_categories']; ?>
<div id="select-modal1" class="mod-select-modal mod-select-modal--sort">
  <form action="#" method="get">
    <ul class="mod-select-modal__list">
      <!---------------------------------------------- start [slide-lv1] ------------------------------------------>
      <li class="mod-select-modal__item mod-select-modal__item--slide-lv1" data-slide-lv="lv1">
        <div class="mod-select-modal__head">
          <span class="mod-select-modal__heading">Tìm kiếm</span>
          <button class="mod-select-modal__close-btn js-selectmodal-trigger" data-select-modal="select-modal1">close</button>
        </div>
        <div class="mod-select-modal__body">
          <div class="mod-select-modal__scroll">
            <div class="container mod-select-modal__body-container">
              <div class="sort-block" data-level="1">
                <div class="sort-search">
                  <input type="text" name="q" value="{{ $data['q'] }}" class="sort-search__input" placeholder="Tên sản phẩm" autocomplete="off">
                  <!-- サジェスト表示 -->
                  <ul class="sort-search__suggest" style="display: none;">
                  </ul>
                  <!-- /サジェスト表示 -->
                </div>
                <!-- [/sort-search] -->

                <ul class="sort-block__list">
                  <li class="sort-block__item" data-lv1-item="category" data-get-ttl-scope>
                    <div class="sort-block__item-head">
                      <span class="sort-block__item-head-txt" data-get-ttl-target>Loại sản phẩm</span>
                    </div>
                    <div class="sort-block__item-body">
                      <span class="sort-block__item-txt js-reflect-target" data-slide-trigger="lv2">
                        <?php
                        $s = 'Không lựa chọn';

                        if (!empty($selected_category)) {
                          $s = $selected_category->name;
                        }
                        ?>
                        {{ $s }}
                      </span>
                    </div>
                  </li>

                  <li class="sort-block__item" data-lv1-item="category2" data-get-ttl-scope>
                    <div class="sort-block__item-head">
                      <span class="sort-block__item-head-txt" data-get-ttl-target>Loại dịch vụ</span>
                    </div>
                    <div class="sort-block__item-body">
                      <span class="sort-block__item-txt js-reflect-target" data-slide-trigger="lv2">
                        <?php
                        $s = 'Không lựa chọn';

                        if (!empty($selected_category2)) {
                          $s = $selected_category2->name;
                        }
                        ?>
                        {{ $s }}
                      </span>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- [/sort-block] -->

            </div>
          </div>
          <!-- [/.mod-select-modal__scroll] -->
        </div>
        <div class="mod-btns mod-btns--main">
          <button value="clear" type="button" class="mod-btns__btn-clear">Reset</button>
          <button name="submit" value="send" type="button" class="mod-btns__btn-submit">Tìm kiếm</button>
        </div>
        <!-- [/mod-btns] -->
      </li>
      <!---------------------------------------------- end [slide-lv1] ------------------------------------------>
      <!---------------------------------------------- start [slide-lv2] ------------------------------------------>
      <li class="mod-select-modal__item mod-select-modal__item--slide-lv2" data-slide-lv="lv2">
        <div class="mod-select-modal__head">
          <div class="mod-select-modal__back-btn">back</div>
          <span class="mod-select-modal__heading"></span>
        </div>
        <div class="mod-select-modal__body">

          <!-- start [カテゴリ2階層目] -->
          <div class="select-detail js-clear-scope" data-level="2" data-lv2-item="category">
            <div class="select-detail__container">
              <div class="category-detail js-reflect-trigger">
                <ul class="category-detail__list">
                  <div class="mod-sub-detail-check js-clickback-lv1 js-reflect-trigger">
                    <ul class="mod-sub-detail-check__list">
                      <li class="mod-detail-check__item clear">
                        <label class="mod-detail-check__label">
                          <input type="radio" name="category" class="mod-detail-check__input" value="">
                          <span>Không lựa chọn</span>
                        </label>
                      </li>
                      @foreach ($product_categories as $c)
                      <li class="category-detail__item" data-get-ttl-scope>
                        <span class="category-detail__txt" data-slide-trigger="lv3" data-get-ttl-target data-lv2-subitem="{{ $c->id }}">
                          {{ $c->name }}
                        </span>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </ul>
              </div>
              <!-- [/category-detail] -->
            </div>
            <!-- [/.select-detail__container] -->
          </div>
          <!-- [/select-detail] -->
          <!-- end [/カテゴリ2階層目] -->
        </div>
      </li>

      <li class="mod-select-modal__item mod-select-modal__item--slide-lv2" data-slide-lv="lv2">
        <div class="mod-select-modal__head">
          <div class="mod-select-modal__back-btn">back</div>
          <span class="mod-select-modal__heading"></span>
        </div>
        <div class="mod-select-modal__body">

          <!-- start [カテゴリ2階層目] -->
          <div class="select-detail js-clear-scope" data-level="2" data-lv2-item="category2">
            <div class="select-detail__container">
              <div class="category-detail js-reflect-trigger">
                <ul class="category-detail__list">
                  <div class="mod-sub-detail-check js-clickback-lv1 js-reflect-trigger">
                    <ul class="mod-sub-detail-check__list">
                      <li class="mod-detail-check__item clear">
                        <label class="mod-detail-check__label">
                          <input type="radio" name="category2" class="mod-detail-check__input" value="">
                          <span>Không lựa chọn</span>
                        </label>
                      </li>
                      @foreach ($service_categories as $c)
                      <li class="category-detail__item" data-get-ttl-scope>
                        <span class="category-detail__txt" data-slide-trigger="lv3" data-get-ttl-target data-lv2-subitem="{{ $c->id }}">
                          {{ $c->name }}
                        </span>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </ul>
              </div>
              <!-- [/category-detail] -->
            </div>
            <!-- [/.select-detail__container] -->
          </div>
          <!-- [/select-detail] -->
          <!-- end [/カテゴリ2階層目] -->
        </div>
      </li>
      <!---------------------------------------------- end [slide-lv2] ------------------------------------------>

      <!---------------------------------------------- start [slide-lv3] ------------------------------------------>
      <li class="mod-select-modal__item mod-select-modal__item--slide-lv3" data-slide-lv="lv3">
        <div class="mod-select-modal__head">
          <div class="mod-select-modal__back-btn">back</div>
          <span class="mod-select-modal__heading"></span>
        </div>
        <div class="mod-select-modal__body">
          <div class="container mod-select-modal__body-container">
            <!-- start [カテゴリ3階層目] -->
            <div class="select-detail js-clickback-lv1" data-level="3" data-lv3-item="category">
              <div class="select-detail__container">
                <?php foreach ($product_categories as $c1) { ?>
                <div class="category-detail-sub js-reflect-trigger" data-lv3-subitem="{{$c1->id}}">
                  <div class="mod-detail-check">
                    <ul class="mod-detail-check__list">
                      <li class="mod-detail-check__item">
                        <label class="mod-detail-check__label">
                          <input type="radio" name="category" class="mod-detail-check__input" value="{{$c1->id}}">
                          <span>Tất cả {{ $c1->name }}</span>
                        </label>
                      </li>
                      <?php foreach ($categories->where('parent_id', $c1->id) as $c2) { ?>
                      <li class="mod-detail-check__item">
                        <label class="mod-detail-check__label">
                          <input type="radio" name="category" class="mod-detail-check__input" value="{{ $c2->id }}">
                          <span>{{ $c2->name }}</span>
                        </label>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                  <!-- [/mod-detail-check] -->
                </div>
                <!-- [/category-detail-sub] -->
                <?php } ?>
              </div>
              <!-- [/.select-detail__container] -->
            </div>
            <!-- [/select-detail] -->
            <!-- end [/カテゴリ3階層目] -->
          </div>
        </div>
      </li>

      <li class="mod-select-modal__item mod-select-modal__item--slide-lv3" data-slide-lv="lv3">
        <div class="mod-select-modal__head">
          <div class="mod-select-modal__back-btn">back</div>
          <span class="mod-select-modal__heading"></span>
        </div>
        <div class="mod-select-modal__body">
          <div class="container mod-select-modal__body-container">
            <!-- start [カテゴリ3階層目] -->
            <div class="select-detail js-clickback-lv1" data-level="3" data-lv3-item="category2">
              <div class="select-detail__container">
                <?php foreach ($service_categories as $c1) { ?>
                <div class="category-detail-sub js-reflect-trigger" data-lv3-subitem="{{$c1->id}}">
                  <div class="mod-detail-check">
                    <ul class="mod-detail-check__list">
                      <li class="mod-detail-check__item">
                        <label class="mod-detail-check__label">
                          <input type="radio" name="category2" class="mod-detail-check__input" value="{{$c1->id}}">
                          <span>Tất cả {{ $c1->name }}</span>
                        </label>
                      </li>
                      <?php foreach ($categories->where('parent_id', $c1->id) as $c2) { ?>
                      <li class="mod-detail-check__item">
                        <label class="mod-detail-check__label">
                          <input type="radio" name="category2" class="mod-detail-check__input" value="{{ $c2->id }}">
                          <span>{{ $c2->name }}</span>
                        </label>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                  <!-- [/mod-detail-check] -->
                </div>
                <!-- [/category-detail-sub] -->
                <?php } ?>
              </div>
              <!-- [/.select-detail__container] -->
            </div>
            <!-- [/select-detail] -->
            <!-- end [/カテゴリ3階層目] -->
          </div>
        </div>
      </li>
      <!---------------------------------------------- end [slide-lv3] ------------------------------------------>
    </ul>
  </form>
</div>

<div class="select-modal-overlay"></div>
<!-- [/select-modal-overlay] -->
