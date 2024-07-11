<nav class="global-nav">

  <div class="global-nav-inner">

    <div class="global-nav__menu jadore_member_nologin">
      <ul class="global-nav__menu-list">
        <li class="global-nav__menu-list-item">
          <a href="https://www.jadore-jun.jp/mypage/login.php" class="global-nav__menu-link jadore_login_url">ログイン</a>
        </li>
        <li class="global-nav__menu-list-item">
          <a href="https://www.jadore-jun.jp/mypage/members_confirm.php" class="global-nav__menu-link jadore_register_url">会員登録</a>
        </li>
        <li class="global-nav__menu-list-item">
          <a href="https://www.jadore-jun.jp/mypage/?page=fav" class="global-nav__menu-link jadore_fav_url">お気に入り</a>
        </li>
      </ul>
    </div>
    <div class="global-nav__menu jadore_member_logined" style="display: none;">
      <!-- ログイン時のみ表示-->
      <ul class="global-nav__member-info">
        <li class="member-name">
          <p><span class="jadore_member_name"></span> 様</p>
        </li>
        <li class="member-rank">
          <p>会員ランク : <span class="jadore_member_rank_name"></span></p>
        </li>
        <li class="member-point">
          <p>所持ポイント : <span class="jadore_member_point"></span>pt</p>
        </li>
      </ul>
      <!-- /ログイン時のみ表示-->
    </div>
    <!-- [1階層目] =============================================================== -->
    <div class="global-nav-contents global-nav-contents--level1 js-gnav-scope" data-menu="1">
      <!-- ログイン時のみ表示-->
      <div class="global-nav__target jadore_member_logined" style="display: none;">
        <ul class="global-nav__list">
          <li class="global-nav__list-item">
            <a href="https://www.jadore-jun.jp/mypage/" class="global-nav__link anlys_leftnav-normal jadore_mypage_url">マイページ</a>
          </li>
          <li class="global-nav__list-item">
            <a href="https://www.jadore-jun.jp/products/list.php?mode=favorite" class="global-nav__link anlys_leftnav-normal jadore_favorite_url">お気に入り (<span class="jadore_member_favorite_count"></span>)</a>
          </li>
        </ul>
      </div>
      <!-- /ログイン時のみ表示-->

      <!-- SALE-->
      <div class="sale-menu mgb-sp--25">
        <div class="global-nav__target text-bold">
          <p class="global-nav__target-title text-xlarge">SALE</p>

          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale text-middle">すべてのセール商品を見る</a>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click text-middle" data-level="2" data-target="2-sale-brand"> ブランドから選ぶ</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click text-middle" data-level="2" data-target="2-sale-women">WOMEN</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click text-middle" data-level="2" data-target="2-sale-men">MEN</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click text-middle" data-level="2" data-target="2-sale-kids">KIDS</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click text-middle" data-level="2" data-target="2-sale-home">HOME</p>
            </li>
          </ul>
        </div>
        <hr>
      </div>
      <!-- /SALE-->

      <div class="global-nav__target">
        <ul class="global-nav__list">
          <li class="global-nav__list-item">
            <p class="global-nav__link js-menu-click text-middle" data-level="2" data-target="2-7">スタイリングを探す</p>
          </li>
          <li class="global-nav__list-item">
            <a href="/news" class="global-nav__link text-middle">NEWS/ARTICLEを読む</a>
          </li>
        </ul>
      </div>
      <div class="global-nav__target text-bold">
        <ul class="global-nav__list">
          <li class="global-nav__list-item narrow">
            <p class="global-nav__link js-menu-click text-xlarge" data-level="2" data-target="2-3">WOMEN</p>
          </li>
          <li class="global-nav__list-item narrow">
            <p class="global-nav__link js-menu-click  text-xlarge" data-level="2" data-target="2-4">MEN</p>
          </li>
          <li class="global-nav__list-item narrow">
            <p class="global-nav__link js-menu-click  text-xlarge" data-level="2" data-target="2-5">KIDS</p>
          </li>
          <li class="global-nav__list-item narrow">
            <p class="global-nav__link js-menu-click text-xlarge" data-level="2" data-target="2-6">HOME</p>
          </li>
        </ul>
      </div>
      <div class="global-nav__target">
        <ul class="global-nav__list">
          <li class="global-nav__list-item">
            <p class="global-nav__link js-menu-click text-mlarge text-bold" data-level="2" data-target="2-8">ブランド一覧</p>
          </li>
          <li class="global-nav__list-item">
            <p class="global-nav__link js-menu-click text-large" data-level="2" data-target="2-1">新着アイテム</p>
          </li>
          <li class="global-nav__list-item">
            <p class="global-nav__link js-menu-click text-large" data-level="2" data-target="2-2">ランキング</p>
          </li>
        </ul>
      </div>
      <div class="global-nav__target mgt-sp--15">
        <ul class="global-nav__list">
          <li class="global-nav__list-item">
            <a href="/help/index.html" class="global-nav__link anlys_leftnav-normal">HELPトップ</a>
          </li>
          <li class="global-nav__list-item">
            <a href="/help/index.html" class="global-nav__link anlys_leftnav-normal">ご利用ガイド</a>
          </li>
          <li class="global-nav__list-item">
            <a href="/faq/index.html" class="global-nav__link anlys_leftnav-normal">よくある質問</a>
          </li>
          <li class="global-nav__list-item">
            <a href="https://www.jadore-jun.jp/contact/" class="global-nav__link anlys_leftnav-normal">お問い合わせ</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- [/1階層目] =============================================================== -->

    <!-- [2階層目] =============================================================== -->
    <div class="global-nav-contents global-nav-contents--sub js-gnav-scope" data-menu="2">
      <!-- ログイン時のみ表示-->
      <!-- 2-0 マイページ ------------------------------------------------------>
      <div class="global-nav-contents-outer js-gnav-target jadore_member_logined" data-target="2-0" style="display: none;">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">マイページ</p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/mypage/?from=header" class="global-nav__link anlys_leftnav-normal jadore_mypage_url">マイページトップ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/mypage/order_history.php?from=header" class="global-nav__link anlys_leftnav-normal jadore_order_history_url">購入履歴一覧</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/mypage/edit.php" class="global-nav__link anlys_leftnav-normal jadore_edit_url">登録内容変更</a>
            </li>
            <li class="global-nav__list-item jadore_logout_elem" style="display: none;">
              <a href="javascript:;" class="global-nav__link anlys_leftnav-normal">ログアウト</a>
            </li>
          </ul>
          <form id="gnav_logout_form" method="post" action="https://www.jadore-jun.jp/frontparts/login_check.php" class="jadore_logout_url">
            <input type="hidden" name="mode" value="logout">
            <input type="hidden" name="transactionid" value="">
            <input type="hidden" name="url" value="/">
          </form>
        </div>
      </div>
      <!-- [/global-nav-contents-outer] -->
      <!-- /ログイン時のみ表示-->

      <!-- 2-sale-brand  ----------------------------------------------------- -->
      <div class="sale-menu">
        <div class="global-nav-contents-outer js-gnav-target" data-target="2-sale-brand">
          <div class="global-nav-contents-return">
            <p class="global-nav-contents-return__link js-return"></p>
            <p class="global-nav-contents-return__text"><span class="sale-icon">SALE</span>ブランド一覧</p>
          </div>
          <!-- [/global-nav-contents-return] -->

          <div class="global-nav__target">
            <p class="global-nav__target-title">WOMEN</p>
            <ul class="global-nav__list">
              <li class="global-nav__list-item">
                <a href="/adam-et-rope-femme/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ADAM ET ROPÉ FEMME</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/rope/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ROPÉ</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/rope-mademoiselle/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ROPÉ mademoiselle</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/rope-eternel/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ROPÉ ÉTERNEL</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/rope-picnic/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ROPÉ PICNIC</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/vis/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ViS</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/salon-adam-et-rope/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">SALON adam et ropé</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/adam-et-rope-le-magasin/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ADAM ET ROPÉ Le Magasin</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/bonjour-records/product/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">bonjour records</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/bonjour-girl/product/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">Bonjour Girl</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/nergy/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">NERGY</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/jun-and-rope/product/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">JUN&amp;ROPÉ</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/dewlux/product/?bid=18001&sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">DeWLuX</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/pop-by-jun/product/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">POP BY JUN</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/saturdays-nyc/product/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">Saturdays NYC</a>
              </li>
            </ul>
            <p class="global-nav__target-title">MEN</p>
            <ul class="global-nav__list">
              <li class="global-nav__list-item">
                <a href="/adam-et-rope-homme/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ADAM ET ROPÉ HOMME</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/wild-life-tailor/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ADAM ET ROPÉ WILD LIFE TAILOR</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/pop-by-jun/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">POP BY JUN</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/junred/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">JUNRed</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/bonjour-records/product/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">bonjour records</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/bonjour-bonsoir/product/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">bonjour bonsoir</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/jun-and-rope-men/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">JUN&amp;ROPÉ MEN</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/saturdays-nyc/product/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">Saturdays NYC</a>
              </li>
            </ul>
            <p class="global-nav__target-title">KIDS</p>
            <ul class="global-nav__list">
              <li class="global-nav__list-item">
                <a href="/rope-picnic/product/?sex=kids&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ROPÉ PICNIC</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/moun-ten/product/?stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">MOUN TEN.</a>
              </li>
            </ul>
            <p class="global-nav__target-title">HOME</p>
            <ul class="global-nav__list">
              <li class="global-nav__list-item">
                <a href="/pop-by-jun/product/?sex=home&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">POP BY JUN</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/salon-adam-et-rope/product/?sex=home&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">SALON adam et ropé</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/adam-et-rope-le-magasin/product/?sex=home&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ADAM ET ROPÉ Le Magasin</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/bonjour-records/product/?sex=home&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">bonjour records</a>
              </li>
              <li class="global-nav__list-item">
                <a href="/saturdays-nyc/product/?sex=home&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">Saturdays NYC</a>
              </li>
            </ul>

          </div>
        </div>
        <!-- [/global-nav-contents-outer] -->
      </div>

      <!-- 2-sale-WOMEN ----------------------------------------------------- -->
      <div class="sale-menu">
        <div class="global-nav-contents-outer js-gnav-target" data-target="2-sale-women">
          <div class="global-nav-contents-return">
            <p class="global-nav-contents-return__link js-return"></p>
            <p class="global-nav-contents-return__text"><span class="sale-icon">SALE</span>WOMEN</p>
          </div>
          <!-- [/global-nav-contents-return] -->

          <div class="global-nav__target">
            <ul class="global-nav__list">
              <!-- 全て-->
              <li class="global-nav__list-item">
                <a href="/product/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">すべてのセールアイテム</a>
              </li>
              <!-- トップス-->
              <li class="global-nav__list-item">
                <a href="/product/tops/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">トップス</a>
              </li>
              <!-- ジャケット/アウター-->
              <li class="global-nav__list-item">
                <a href="/product/jacket-outerwear/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ジャケット/アウター</a>
              </li>
              <!-- パンツ-->
              <li class="global-nav__list-item">
                <a href="/product/pants/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">パンツ</a>
              </li>
              <!-- オールインワン/サロペット-->
              <li class="global-nav__list-item">
                <a href="/product/allinone-salopette/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">オールインワン/サロペット</a>
              </li>
              <!-- スカート-->
              <li class="global-nav__list-item">
                <a href="/product/skirt/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">スカート</a>
              </li>
              <!-- ワンピース-->
              <li class="global-nav__list-item">
                <a href="/product/onepiece/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ワンピース</a>
              </li>
              <!-- バッグ-->
              <li class="global-nav__list-item">
                <a href="/product/bag/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">バッグ</a>
              </li>
              <!-- シューズ-->
              <li class="global-nav__list-item">
                <a href="/product/shoes/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">シューズ</a>
              </li>
              <!-- ファッション雑貨-->
              <li class="global-nav__list-item">
                <a href="/product/fashion-accessories/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ファッション雑貨</a>
              </li>
              <!-- 財布/小物-->
              <li class="global-nav__list-item">
                <a href="/product/wallet-accessory/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">財布/小物</a>
              </li>
              <!-- 時計-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=2200&brand_type=2&pricesort=2" class="global-nav__link anlys_leftnav-sale">時計</a>
              </li>
              -->
              <!-- ヘアアクセサリー-->
              <li class="global-nav__list-item">
                <a href="/product/hair-accessory/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ヘアアクセサリー</a>
              </li>
              <!-- アクセサリー-->
              <li class="global-nav__list-item">
                <a href="/product/accessory/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">アクセサリー</a>
              </li>
              <!-- アンダーウェア-->
              <li class="global-nav__list-item">
                <a href="/product/underwear/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">アンダーウェア</a>
              </li>
              <!-- レッグウェア-->
              <li class="global-nav__list-item">
                <a href="/product/leg-wear/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">レッグウェア</a>
              </li>
              <!-- 帽子-->
              <li class="global-nav__list-item">
                <a href="/product/hat/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">帽子</a>
              </li>
              <!-- インテリア-->
              <li class="global-nav__list-item">
                <a href="/product/interior/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">インテリア</a>
              </li>
              <!-- 食器/キッチン-->
              <li class="global-nav__list-item">
                <a href="/product/tableware-kitchenware/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">食器/キッチン</a>
              </li>
              <!-- 雑貨/ホビー/スポーツ-->
              <li class="global-nav__list-item">
                <a href="/product/zakka-hobby-sports/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">雑貨/ホビー/スポーツ</a>
              </li>
              <!-- コスメ/香水-->
              <li class="global-nav__list-item">
                <a href="/product/cosmetics/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">コスメ/香水</a>
              </li>
              <!-- 水着/着物・浴衣-->
              <li class="global-nav__list-item">
                <a href="/product/swimwear-kimono-yukata/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">水着/着物・浴衣</a>
              </li>
              <!-- マタニティ/ベビー-->
              <li class="global-nav__list-item">
                <a href="/product/maternity-baby/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">マタニティ/ベビー</a>
              </li>
              <!-- FOOD-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=3600&brand_type=2&pricesort=2" class="global-nav__link anlys_leftnav-sale">FOOD</a>
              </li>
              -->
              <!-- その他-->
              <li class="global-nav__list-item">
                <a href="/product/others/?sex=women&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">その他</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 2-sale-MEN ----------------------------------------------------- -->
      <div class="sale-menu">
        <div class="global-nav-contents-outer js-gnav-target" data-target="2-sale-men">
          <div class="global-nav-contents-return">
            <p class="global-nav-contents-return__link js-return"></p>
            <p class="global-nav-contents-return__text"><span class="sale-icon">SALE</span>MEN</p>
          </div>

          <div class="global-nav__target">
            <ul class="global-nav__list">
              <!-- 全て-->
              <li class="global-nav__list-item">
                <a href="/product/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">すべてのセールアイテム</a>
              </li>
              <!-- トップス-->
              <li class="global-nav__list-item">
                <a href="/product/tops/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">トップス</a>
              </li>
              <!-- ジャケット/アウター-->
              <li class="global-nav__list-item">
                <a href="/product/jacket-outerwear/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ジャケット/アウター</a>
              </li>
              <!-- パンツ-->
              <li class="global-nav__list-item">
                <a href="/product/pants/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">パンツ</a>
              </li>
              <!-- スーツ/ネクタイ-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=1700&brand_type=1&pricesort=2" class="global-nav__link anlys_leftnav-sale">スーツ/ネクタイ</a>
              </li>
              -->
              <!-- バッグ-->
              <li class="global-nav__list-item">
                <a href="/product/bag/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">バッグ</a>
              </li>
              <!-- シューズ-->
              <li class="global-nav__list-item">
                <a href="/product/shoes/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">シューズ</a>
              </li>
              <!-- ファッション雑貨-->
              <li class="global-nav__list-item">
                <a href="/product/fashion-accessories/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ファッション雑貨</a>
              </li>
              <!-- 財布/小物-->
              <li class="global-nav__list-item">
                <a href="/product/wallet-accessory/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">財布/小物</a>
              </li>
              <!-- 時計-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=2200&brand_type=1&pricesort=2" class="global-nav__link anlys_leftnav-sale">時計</a>
              </li>
              -->
              <!-- アクセサリー-->
              <li class="global-nav__list-item">
                <a href="/product/accessory/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">アクセサリー</a>
              </li>
              <!-- アンダーウェア-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=2500&brand_type=1&pricesort=2" class="global-nav__link anlys_leftnav-sale">アンダーウェア</p>
              </li>
              -->
              <!-- レッグウェア-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=2600&brand_type=1&pricesort=2" class="global-nav__link anlys_leftnav-sale">レッグウェア</a>
              </li>
              -->
              <!-- 帽子-->
              <li class="global-nav__list-item">
                <a href="/product/hat/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">帽子</a>
              </li>
              <!-- インテリア-->
              <li class="global-nav__list-item">
                <a href="/product/interior/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">インテリア</a>
              </li>
              <!-- 食器/キッチン-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=2900&brand_type=1&pricesort=2" class="global-nav__link anlys_leftnav-sale">食器/キッチン</a>
              </li>
              -->
              <!-- 雑貨/ホビー/スポーツ-->
              <li class="global-nav__list-item">
                <a href="/product/zakka-hobby-sports/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">雑貨/ホビー/スポーツ</a>
              </li>
              <!-- コスメ/香水-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=3200&brand_type=1&pricesort=2" class="global-nav__link anlys_leftnav-sale">コスメ/香水</a>
              </li>
              -->
              <!-- FOOD-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=3600&brand_type=1&pricesort=2" class="global-nav__link anlys_leftnav-sale">FOOD</a>
              </li>
              -->
              <!-- その他-->
              <li class="global-nav__list-item">
                <a href="/product/others/?sex=men&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">その他</a>
              </li>
            </ul>
          </div>

        </div>
        <!-- [/global-nav-contents-outer] -->
      </div>

      <!-- 2-sale-KIDS ----------------------------------------------------- -->
      <div class="sale-menu">
        <div class="global-nav-contents-outer js-gnav-target" data-target="2-sale-kids">
          <div class="global-nav-contents-return">
            <p class="global-nav-contents-return__link js-return"></p>
            <p class="global-nav-contents-return__text"><span class="sale-icon">SALE</span>KIDS</p>
          </div>
          <!-- [/global-nav-contents-return] -->

          <div class="global-nav__target">
            <ul class="global-nav__list">
              <!-- 全て-->
              <li class="global-nav__list-item">
                <a href="/product/?sex=kids&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">すべてのアイテム</a>
              </li>
              <!-- トップス-->
              <li class="global-nav__list-item">
                <a href="/product/tops/?sex=kids&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">トップス</a>
              </li>
              <!-- ジャケット/アウター-->
              <li class="global-nav__list-item">
                <a href="/product/jacket-outerwear/?sex=kids&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ジャケット/アウター</a>
              </li>
              <!-- パンツ-->
              <li class="global-nav__list-item">
                <a href="/product/pants/?sex=kids&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">パンツ</a>
              </li>
              <!-- オールインワン/サロペット-->
              <li class="global-nav__list-item">
                <a href="/product/allinone-salopette/?sex=kids&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">オールインワン/サロペット</a>
              </li>
              <!-- スカート-->
              <li class="global-nav__list-item">
                <a href="/product/skirt/?sex=kids&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">スカート</a>
              </li>
              <!-- ワンピース-->
              <li class="global-nav__list-item">
                <a href="/product/onepiece/?sex=kids&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ワンピース</a>
              </li>
              <!-- バッグ-->
              <li class="global-nav__list-item">
                <a href="/product/bag/?sex=kids&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">バッグ</a>
              </li>
              <!-- シューズ-->
              <li class="global-nav__list-item">
                <a href="/product/shoes/?sex=kids&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">シューズ</a>
              </li>
              <!-- ファッション雑貨-->
              <li class="global-nav__list-item">
                <a href="/product/fashion-accessories/?sex=kids&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ファッション雑貨</a>
              </li>
              <!-- 財布/小物-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=2100&brand_type=6&pricesort=2" class="global-nav__link anlys_leftnav-sale">財布/小物</a>
              </li>
              -->
              <!-- ヘアアクセサリー-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=2300&brand_type=6&pricesort=2" class="global-nav__link anlys_leftnav-sale">ヘアアクセサリー</a>
              </li>
              -->
              <!-- アクセサリー-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=2400&brand_type=6&pricesort=2" class="global-nav__link anlys_leftnav-sale">アクセサリー</a>
              </li>
              -->
              <!-- レッグウェア-->
              <li class="global-nav__list-item">
                <a href="/product/leg-wear/?sex=kids&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">レッグウェア</a>
              </li>
              <!-- 帽子-->
              <li class="global-nav__list-item">
                <a href="/product/hat/?sex=kids&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">帽子</a>
              </li>
              <!-- 食器/キッチン-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=2900&brand_type=6&pricesort=2" class="global-nav__link">食器/キッチン</a>
              </li>
              -->
              <!-- 雑貨/ホビー/スポーツ-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=3000&brand_type=6&pricesort=2" class="global-nav__link">雑貨/ホビー/スポーツ</a>
              </li>
              -->
              <!-- コスメ/香水-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=3200&brand_type=6&pricesort=2" class="global-nav__link">コスメ/香水</a>
              </li>
              -->
              <!-- 水着/着物・浴衣-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=3300&brand_type=6&pricesort=2" class="global-nav__link">水着/着物・浴衣</a>
              </li>
              -->
              <!-- マタニティ/ベビー-->
              <li class="global-nav__list-item">
                <a href="/product/maternity-baby/?sex=kids&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">マタニティ/ベビー</a>
              </li>
              <!-- その他ー-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=3500&brand_type=6&pricesort=2" class="global-nav__link">その他</a>
              </li>
              -->
            </ul>
          </div>

        </div>
        <!-- [/global-nav-contents-outer] -->
      </div>

      <!-- 2-sale-HOME ----------------------------------------------------- -->
      <div class="sale-menu">
        <div class="global-nav-contents-outer js-gnav-target" data-target="2-sale-home">
          <div class="global-nav-contents-return">
            <p class="global-nav-contents-return__link js-return"></p>
            <p class="global-nav-contents-return__text"><span class="sale-icon">SALE</span>HOME</p>
          </div>
          <!-- [/global-nav-contents-return] -->

          <div class="global-nav__target">
            <ul class="global-nav__list">
              <!-- 全て-->
              <li class="global-nav__list-item">
                <a href="/product/?sex=home&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">すべてのアイテム</a>
              </li>
              <!-- ファッション雑貨-->
              <li class="global-nav__list-item">
                <a href="/product/fashion-accessories/?sex=home&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">ファッション雑貨</a>
              </li>
              <!-- 財布/小物-->
              <li class="global-nav__list-item">
                <a href="/product/wallet-accessory/?sex=home&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">財布/小物</a>
              </li>
              <!-- インテリア-->
              <li class="global-nav__list-item">
                <a href="/product/interior/?sex=home&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">インテリア</a>
              </li>
              <!-- 食器/キッチン-->
              <li class="global-nav__list-item">
                <a href="/product/tableware-kitchenware/?sex=home&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">食器/キッチン</a>
              </li>
              <!-- 雑貨/ホビー/スポーツ-->
              <li class="global-nav__list-item">
                <a href="/product/zakka-hobby-sports/?sex=home&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">雑貨/ホビー/スポーツ</a>
              </li>
              <!-- コスメ/香水-->
              <li class="global-nav__list-item">
                <a href="/product/cosmetics/?sex=home&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">コスメ/香水</a>
              </li>
              <!-- FOOD-->
              <!--
              <li class="global-nav__list-item">
                <a href="https://www.jadore-jun.jp/products/list.php?category_id=3600&brand_type=3&pricesort=2" class="global-nav__link">FOOD</a>
              </li>
              -->
              <!-- その他-->
              <li class="global-nav__list-item">
                <a href="https://www.junonline.jp/product/others/?sex=home&stock=1&sale=1&list_unit=fku" class="global-nav__link anlys_leftnav-sale">その他</a>
              </li>
            </ul>
          </div>

        </div>
        <!-- [/global-nav-contents-outer] -->
      </div>

      <!-- 2-1 新着情報 ----------------------------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-1">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">新着アイテム</p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/?sex=women" class="global-nav__link anlys_leftnav-normal text-large">WOMEN</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/?sex=men" class="global-nav__link anlys_leftnav-normal text-large">MEN</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/?sex=kids" class="global-nav__link anlys_leftnav-normal text-large">KIDS</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/?sex=home" class="global-nav__link anlys_leftnav-normal text-large">HOME</a>
            </li>
          </ul>
        </div>

      </div>
      <!-- [/global-nav-contents-outer] -->
      <!-- 2-2 ランキング ----------------------------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-2">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">ランキング</p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_type=2" class="global-nav__link anlys_leftnav-normal text-large">WOMEN</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_type=1" class="global-nav__link anlys_leftnav-normal text-large">MEN</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_type=6" class="global-nav__link anlys_leftnav-normal text-large">KIDS</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_type=3" class="global-nav__link anlys_leftnav-normal text-large">HOME</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- [/global-nav-contents-outer] -->
      <!-- 2-3 WOMEN ----------------------------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">WOMEN</p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav__target text-bold">
          <ul class="global-nav__list">
            <li class="global-nav__list-item narrow">
              <a href="/product/?sex=women" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_type=2" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/?sex=women&mode=polist" class="global-nav__link anlys_leftnav-normal text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_type=2&search_brand_id=&search_page_max=&search_back_number=&search_pageno=&search_dev=&search_tag=" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- 全て-->
            <li class="global-nav__list-item">
              <a href="/product/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-1100">トップス</p>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-1200">ジャケット/アウター</p>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-1300">パンツ</p>
            </li>
            <!-- オールインワン/サロペット-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-1400">オールインワン/サロペット</p>
            </li>
            <!-- スカート-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-1500">スカート</p>
            </li>
            <!-- ワンピース-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-1600">ワンピース</p>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-1800">バッグ</p>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-1900">シューズ</p>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-2000">ファッション雑貨</p>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-2100">財布/小物</p>
            </li>
            <!-- 時計-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-2200">時計</p>
            </li>
            <!-- ヘアアクセサリー-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-2300">ヘアアクセサリー</p>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-2400">アクセサリー</p>
            </li>
            <!-- アンダーウェア-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-2500">アンダーウェア</p>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-2600">レッグウェア</p>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-2700">帽子</p>
            </li>
            <!-- インテリア-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-2800">インテリア</p>
            </li>
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-2900">食器/キッチン</p>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-3000">雑貨/ホビー/スポーツ</p>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-3200">コスメ/香水</p>
            </li>
            <!-- 水着/着物・浴衣-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-3300">水着/着物・浴衣</p>
            </li>
            <!-- マタニティ/ベビー-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-3400">マタニティ/ベビー</p>
            </li>
            <!-- FOOD-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-3600">FOOD</p>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-3-3500">その他</p>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/?sex=women&sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/news" class="global-nav__link anlys_leftnav-normal">NEWS/ARTICLEを読む</a>
            </li>
          </ul>
        </div>

      </div>
      <!-- [/global-nav-contents-outer] -->
      <!-- 2-4 MEN ----------------------------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">MEN</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target text-bold">
          <ul class="global-nav__list">
            <li class="global-nav__list-item narrow">
              <a href="/product/?sex=men" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item narow">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_type=1" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item narrow">
              <a href="/product/?sex=men&mode=polist" class="global-nav__link anlys_leftnav-normal text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item narrow">
              <a href="https://www.jadore-jun.jp/coordinate/?search_type=1&search_brand_id=&search_page_max=&search_back_number=&search_pageno=&search_dev=&search_tag=" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- 全て-->
            <li class="global-nav__list-item">
              <a href="/product/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-1100">トップス</p>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-1200">ジャケット/アウター</p>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-1300">パンツ</p>
            </li>
            <!-- スーツ/ネクタイ-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-1700">スーツ/ネクタイ</p>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-1800">バッグ</p>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-1900">シューズ</p>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-2000">ファッション雑貨</p>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-2100">財布/小物</p>
            </li>
            <!-- 時計-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-2200">時計</p>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-2400">アクセサリー</p>
            </li>
            <!-- アンダーウェア-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-2500">アンダーウェア</p>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-2600">レッグウェア</p>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-2700">帽子</p>
            </li>
            <!-- インテリア-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-2800">インテリア</p>
            </li>
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-2900">食器/キッチン</p>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-3000">雑貨/ホビー/スポーツ</p>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-3200">コスメ/香水</p>
            </li>
            <!-- FOOD-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-3600">FOOD</p>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-4-3500">その他</p>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/?sex=men&sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/news" class="global-nav__link anlys_leftnav-normal">NEWS/ARTICLEを読む</a>
            </li>
          </ul>
        </div>

      </div>
      <!-- [/global-nav-contents-outer] -->
      <!-- 2-5 KIDS ----------------------------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">KIDS</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target text-bold">
          <ul class="global-nav__list">
            <li class="global-nav__list-item narrow">
              <a href="/product/?sex=kids" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item narrow">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_type=6" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- 全て-->
            <li class="global-nav__list-item">
              <a href="/product/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-1100">トップス</p>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-1200">ジャケット/アウター</p>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-1300">パンツ</p>
            </li>
            <!-- オールインワン/サロペット-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-1400">オールインワン/サロペット</p>
            </li>
            <!-- スカート-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-1500">スカート</p>
            </li>
            <!-- ワンピース-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-1600">ワンピース</p>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-1800">バッグ</p>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-1900">シューズ</p>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-2000">ファッション雑貨</p>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-2100">財布/小物</p>
            </li>
            <!-- ヘアアクセサリー-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-2300">ヘアアクセサリー</p>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-2400">アクセサリー</p>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-2600">レッグウェア</p>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-2700">帽子</p>
            </li>
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-2900">食器/キッチン</p>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-3000">雑貨/ホビー/スポーツ</p>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-3200">コスメ/香水</p>
            </li>
            <!-- 水着/着物・浴衣-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-3300">水着/着物・浴衣</p>
            </li>
            <!-- マタニティ/ベビー-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-3400">マタニティ/ベビー</p>
            </li>
            <!-- その他ー-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-5-3500">その他</p>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/?sex=kids&sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/news" class="global-nav__link anlys_leftnav-normal">NEWS/ARTICLEを読む</a>
            </li>
          </ul>
        </div>

      </div>
      <!-- [/global-nav-contents-outer] -->
      <!-- 2-6 HOME ----------------------------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-6">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">HOME</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target text-bold">
          <ul class="global-nav__list">
            <li class="global-nav__list-item narrow">
              <a href="/product/?sex=home" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item narrow">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_type=3" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- 全て-->
            <li class="global-nav__list-item">
              <a href="/product/?sex=home" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- インテリア-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-6-2800">インテリア</p>
            </li>
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-6-2900">食器/キッチン</p>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-6-3000">雑貨/ホビー/スポーツ</p>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-6-3200">コスメ/香水</p>
            </li>
            <!-- FOOD-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-6-3600">FOOD</p>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="2-6-3500">その他</p>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/?sex=home&sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/news" class="global-nav__link anlys_leftnav-normal">NEWS/ARTICLEを読む</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- [/global-nav-contents-outer] -->
      <!-- 2-7 スタイリングを探す ---------------------------------------------->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-7">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">スタイリングを探す</p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_type=2&search_brand_id=&search_page_max=&search_back_number=&search_pageno=&search_dev=&search_tag=" class="global-nav__link anlys_leftnav-normal text-large">WOMEN</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_type=1&search_brand_id=&search_page_max=&search_back_number=&search_pageno=&search_dev=&search_tag=" class="global-nav__link anlys_leftnav-normal text-large">MEN</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- [/global-nav-contents-outer] -->
      <!-- 2-8 ブランド一覧 ----------------------------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-8">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">ブランド一覧</p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav__target">
          <p class="global-nav__target-title">WOMEN</p>
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-adam-f">ADAM ET ROPÉ FEMME
              </p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-rope">ROPÉ</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-rope-m">ROPÉ mademoiselle</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-rope-e">ROPÉ ÉTERNEL</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-rope-p">ROPÉ PICNIC</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-vis">ViS</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-salon">SALON adam et ropé</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-magasin">ADAM ET ROPÉ Le Magasin</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-bon-r-w">bonjour records</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-bon-g">Bonjour Girl</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-nergy">NERGY</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-junrope-w">JUN&amp;ROPÉ</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-dewlux">DeWLuX</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-seads">Sea'ds Mara</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-conveni">THE CONVENI</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-popbyjun">POP BY JUN</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-saturdays-nyc">Saturdays NYC</p>
            </li>
          </ul>
          <p class="global-nav__target-title">MEN</p>
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-adam-h">ADAM ET ROPÉ HOMME
              </p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-wild">ADAM ET ROPÉ WILD LIFE TAILOR</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-conveni">THE CONVENI</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-popbyjun">POP BY JUN</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-junred">JUNRed</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-bon-r-m">bonjour records</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-bon-b">bonjour bonsoir</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-junrope-m">JUN&amp;ROPÉ MEN</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-saturdays-nyc">Saturdays NYC</p>
            </li>
          </ul>
          <p class="global-nav__target-title">KIDS</p>
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-rope-p-k">ROPÉ PICNIC</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-mounten">MOUN TEN.</p>
            </li>
          </ul>
          <p class="global-nav__target-title">HOME</p>
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-conveni">THE CONVENI</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-popbyjun">POP BY JUN</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-salon-h">SALON adam et ropé</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-magasin-h">ADAM ET ROPÉ Le Magasin</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-bon-r">bonjour records</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-chateau">Chateau Jun</p>
            </li>
            <li class="global-nav__list-item">
              <p class="global-nav__link js-menu-click" data-level="3" data-target="br-saturdays-nyc">Saturdays NYC</p>
            </li>
          </ul>
        </div>
      </div>
      <!-- [/global-nav-contents-outer] -->
    </div>
    <!-- [/2階層目] =============================================================== -->

    <!-- [3階層目] =============================================================== -->
    <div class="global-nav-contents global-nav-contents--sub js-gnav-scope" data-menu="3">
      <!-- 2-3 WOMEN > 1100-トップス --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-1100">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">トップス</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/tops/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのトップス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/tshirt-cutsew/?sex=women" class="global-nav__link anlys_leftnav-normal">Tシャツ/カットソー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/shirt-blouse/?sex=women" class="global-nav__link anlys_leftnav-normal">シャツ/ブラウス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/polo-shirt/?sex=women" class="global-nav__link anlys_leftnav-normal">ポロシャツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/knit-sweater/?sex=women" class="global-nav__link anlys_leftnav-normal">ニット/セーター</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/parka/?sex=women" class="global-nav__link anlys_leftnav-normal">パーカー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/sweat/?sex=women" class="global-nav__link anlys_leftnav-normal">スウェット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/cardigan/?sex=women" class="global-nav__link anlys_leftnav-normal">カーディガン</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/jersey/?sex=women" class="global-nav__link anlys_leftnav-normal">ジャージ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/tank-tops/?sex=women" class="global-nav__link anlys_leftnav-normal">タンクトップ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/camisole/?sex=women" class="global-nav__link anlys_leftnav-normal">キャミソール</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/tube-top/?sex=women" class="global-nav__link anlys_leftnav-normal">チューブトップ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/vest/?sex=women" class="global-nav__link anlys_leftnav-normal">ベスト</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/other-tops/?sex=women" class="global-nav__link anlys_leftnav-normal">その他トップス</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 1200-ジャケット/アウター --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-1200">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">ジャケット/アウター</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのジャケット/アウター</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/tailored-jacket/?sex=women" class="global-nav__link anlys_leftnav-normal">テーラードジャケット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/no-collar-jacket/?sex=women" class="global-nav__link anlys_leftnav-normal">ノーカラージャケット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/denim-jacket/?sex=women" class="global-nav__link anlys_leftnav-normal">デニムジャケット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/riders-jacket/?sex=women" class="global-nav__link anlys_leftnav-normal">ライダースジャケット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/jacket/?sex=women" class="global-nav__link anlys_leftnav-normal">ブルゾン</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/coveralls/?sex=women" class="global-nav__link anlys_leftnav-normal">カバーオール</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/military-jacket/?sex=women" class="global-nav__link anlys_leftnav-normal">ミリタリージャケット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/down-vest/?sex=women" class="global-nav__link anlys_leftnav-normal">ダウンベスト</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/down-jacket/?sex=women" class="global-nav__link anlys_leftnav-normal">ダウンジャケット/コート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/duffle-coat/?sex=women" class="global-nav__link anlys_leftnav-normal">ダッフルコート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/mods-coat/?sex=women" class="global-nav__link anlys_leftnav-normal">モッズコート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/pea-coat/?sex=women" class="global-nav__link anlys_leftnav-normal">ピーコート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/stand-collar-coat/?sex=women" class="global-nav__link anlys_leftnav-normal">ステンカラーコート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/trench-coat/?sex=women" class="global-nav__link anlys_leftnav-normal">トレンチコート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/chester-coat/?sex=women" class="global-nav__link anlys_leftnav-normal">チェスターコート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/mouton-coat/?sex=women" class="global-nav__link anlys_leftnav-normal">ムートンコート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/nylon-jacket/?sex=women" class="global-nav__link anlys_leftnav-normal">ナイロンジャケット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/mountain-parker/?sex=women" class="global-nav__link anlys_leftnav-normal">マウンテンパーカー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/stadium-jumper/?sex=women" class="global-nav__link anlys_leftnav-normal">スタジャン</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/poncho/?sex=women" class="global-nav__link anlys_leftnav-normal">ポンチョ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/other-outer/?sex=women" class="global-nav__link anlys_leftnav-normal">その他アウター</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 1300-パンツ --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-1300">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">パンツ</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/pants/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのパンツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/pants/denim-pants/?sex=women" class="global-nav__link anlys_leftnav-normal">デニムパンツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/pants/chino-pants/?sex=women" class="global-nav__link anlys_leftnav-normal">チノパンツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/pants/slacks/?sex=women" class="global-nav__link anlys_leftnav-normal">スラックス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/pants/pants/?sex=women" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 1400-オールインワン/サロペット --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-1400">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">オールインワン/サロペット</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/allinone-salopette/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのオールインワン/サロペット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/allinone-salopette/connected-allinone/?sex=women" class="global-nav__link anlys_leftnav-normal">つなぎ/オールインワン</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/allinone-salopette/salopette-overalls/?sex=women" class="global-nav__link anlys_leftnav-normal">サロペット/オーバーオール</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 1500-スカート --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-1500">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">スカート</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/skirt/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのスカート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/skirt/skirt/?sex=women" class="global-nav__link anlys_leftnav-normal">スカート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/skirt/denim-skirt/?sex=women" class="global-nav__link anlys_leftnav-normal">デニムスカート</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 1600-ワンピース --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-1600">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">ワンピース</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/onepiece/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのワンピース</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/onepiece/onepiece-dress/?sex=women" class="global-nav__link anlys_leftnav-normal">ワンピース</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/onepiece/tunic/?sex=women" class="global-nav__link anlys_leftnav-normal">チュニック</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/onepiece/dress/?sex=women" class="global-nav__link anlys_leftnav-normal">ドレス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/onepiece/shirts-onepiece/?sex=women" class="global-nav__link anlys_leftnav-normal">シャツワンピース</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/onepiece/jumper-skirt/?sex=women" class="global-nav__link anlys_leftnav-normal">ジャンパースカート</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 1800-バッグ --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-1800">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">バッグ</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/bag/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/backpack-rucksack/?sex=women" class="global-nav__link anlys_leftnav-normal">バックパック/リュック</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/tote-bag/?sex=women" class="global-nav__link anlys_leftnav-normal">トートバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/messenger-bag/?sex=women" class="global-nav__link anlys_leftnav-normal">メッセンジャーバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/waist-pouch/?sex=women" class="global-nav__link anlys_leftnav-normal">ボディバッグ/ウエストポーチ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/boston-bag/?sex=women" class="global-nav__link anlys_leftnav-normal">ボストンバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/shoulder-bag/?sex=women" class="global-nav__link anlys_leftnav-normal">ショルダーバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/handbag/?sex=women" class="global-nav__link anlys_leftnav-normal">ハンドバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/clutch-bag/?sex=women" class="global-nav__link anlys_leftnav-normal">クラッチバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/eco-bag/?sex=women" class="global-nav__link anlys_leftnav-normal">エコバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/basket-type-bag/?sex=women" class="global-nav__link anlys_leftnav-normal">かごバッグ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 1900-シューズ --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-1900">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">シューズ</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/shoes/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/sneakers/?sex=women" class="global-nav__link anlys_leftnav-normal">スニーカー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/sandal/?sex=women" class="global-nav__link anlys_leftnav-normal">サンダル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/pumps/?sex=women" class="global-nav__link anlys_leftnav-normal">パンプス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/boots/?sex=women" class="global-nav__link anlys_leftnav-normal">ブーツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/booties/?sex=women" class="global-nav__link anlys_leftnav-normal">ブーティ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/dress-shoes/?sex=women" class="global-nav__link anlys_leftnav-normal">ドレスシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/ballet-slippers/?sex=women" class="global-nav__link anlys_leftnav-normal">バレエシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/rain-shoes/?sex=women" class="global-nav__link anlys_leftnav-normal">レインシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/flip-flops/?sex=women" class="global-nav__link anlys_leftnav-normal">ビーチサンダル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/other-shoes/?sex=women" class="global-nav__link anlys_leftnav-normal">その他シューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/shoecare-items/?sex=women" class="global-nav__link anlys_leftnav-normal">シューケア/シューズ小物</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/slip-on/?sex=women" class="global-nav__link anlys_leftnav-normal">スリッポン</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/loafers/?sex=women" class="global-nav__link anlys_leftnav-normal">ローファー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/running-shoes/?sex=women" class="global-nav__link anlys_leftnav-normal">ランニングシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/training-shoes/?sex=women" class="global-nav__link anlys_leftnav-normal">トレーニングシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/casual-shoes/?sex=women" class="global-nav__link anlys_leftnav-normal">カジュアルシューズ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 2000-ファッション雑貨 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-2000">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">ファッション雑貨</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのファッション雑貨</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/stole-snood/?sex=women" class="global-nav__link anlys_leftnav-normal">ストール/スヌード</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/muffler-shawl/?sex=women" class="global-nav__link anlys_leftnav-normal">マフラー/ショール</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/belt/?sex=women" class="global-nav__link anlys_leftnav-normal">ベルト</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/sunglasses/?sex=women" class="global-nav__link anlys_leftnav-normal">サングラス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/eyeglasses/?sex=women" class="global-nav__link anlys_leftnav-normal">メガネ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/gloves/?sex=women" class="global-nav__link anlys_leftnav-normal">手袋</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/neck-warmer/?sex=women" class="global-nav__link anlys_leftnav-normal">ネックウォーマー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/umbrella/?sex=women" class="global-nav__link anlys_leftnav-normal">長傘</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/folding-umbrella/?sex=women" class="global-nav__link anlys_leftnav-normal">折りたたみ傘</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/raincoat-poncho/?sex=women" class="global-nav__link anlys_leftnav-normal">レインコート/ポンチョ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 2100-財布/小物 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-2100">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">財布/小物</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/?sex=women" class="global-nav__link anlys_leftnav-normal">すべての財布/小物</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/wallet/?sex=women" class="global-nav__link anlys_leftnav-normal">財布</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/coin-case-pocketbook/?sex=women" class="global-nav__link anlys_leftnav-normal">コインケース/札入れ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/business-card-holder/?sex=women" class="global-nav__link anlys_leftnav-normal">名刺入れ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/pouch/?sex=women" class="global-nav__link anlys_leftnav-normal">ポーチ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/hand-mirror-compact-mirror/?sex=women" class="global-nav__link anlys_leftnav-normal">手鏡/コンパクト</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/handkerchief/?sex=women" class="global-nav__link anlys_leftnav-normal">ハンカチ/ハンドタオル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/bandana-scarf/?sex=women" class="global-nav__link anlys_leftnav-normal">バンダナ/スカーフ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/key-chain/?sex=women" class="global-nav__link anlys_leftnav-normal">キーホルダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/key-case-key-accessories/?sex=women" class="global-nav__link anlys_leftnav-normal">キーケース/キーアクセサリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/card-case/?sex=women" class="global-nav__link anlys_leftnav-normal">カードケース</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/other-small-goods/?sex=women" class="global-nav__link anlys_leftnav-normal">その他小物</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 2200-時計 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-2200">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">時計</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/wrist-watch/?sex=women" class="global-nav__link anlys_leftnav-normal">すべての時計</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wrist-watch/wrist-watch/?sex=women" class="global-nav__link anlys_leftnav-normal">腕時計</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 2300-ヘアアクセサリー --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-2300">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">ヘアアクセサリー</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/hair-accessory/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのヘアアクセサリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hair-accessory/pony-tail-holder/?sex=women" class="global-nav__link anlys_leftnav-normal">ヘアゴム</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hair-accessory/scrunchies/?sex=women" class="global-nav__link anlys_leftnav-normal">シュシュ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hair-accessory/hair-band/?sex=women" class="global-nav__link anlys_leftnav-normal">ヘアバンド</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hair-accessory/head-band/?sex=women" class="global-nav__link anlys_leftnav-normal">カチューシャ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hair-accessory/barrette/?sex=women" class="global-nav__link anlys_leftnav-normal">バレッタ/ヘアクリップ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hair-accessory/other-hair-accessories/?sex=women" class="global-nav__link anlys_leftnav-normal">その他ヘアアクセサリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hair-accessory/hairpin/?sex=women" class="global-nav__link anlys_leftnav-normal">ヘアピン</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 2400-アクセサリー --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-2400">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">アクセサリー</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/accessory/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのアクセサリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/accessory/necklace/?sex=women" class="global-nav__link anlys_leftnav-normal">ネックレス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/accessory/ring/?sex=women" class="global-nav__link anlys_leftnav-normal">リング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/accessory/earrings-for-both-ears/?sex=women" class="global-nav__link anlys_leftnav-normal">ピアス（両耳用）</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/accessory/earrings/?sex=women" class="global-nav__link anlys_leftnav-normal">イヤリング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/accessory/bracelet/?sex=women" class="global-nav__link anlys_leftnav-normal">ブレスレット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/accessory/bangle-wristband/?sex=women" class="global-nav__link anlys_leftnav-normal">バングル/リストバンド</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/accessory/anklet/?sex=women" class="global-nav__link anlys_leftnav-normal">アンクレット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/accessory/brooch-corsage/?sex=women" class="global-nav__link anlys_leftnav-normal">ブローチ/コサージュ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/accessory/single-earrings/?sex=women" class="global-nav__link anlys_leftnav-normal">イヤリング（片耳用）</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/accessory/choker/?sex=women" class="global-nav__link anlys_leftnav-normal">チョーカー</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 2500-アンダーウェア --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-2500">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">アンダーウェア</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/underwear/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのアンダーウェア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/underwear/bra/?sex=women" class="global-nav__link anlys_leftnav-normal">ブラ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/underwear/shorts/?sex=women" class="global-nav__link anlys_leftnav-normal">ショーツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/underwear/other-underwear-inner/?sex=women" class="global-nav__link anlys_leftnav-normal">その他アンダーウエア/インナー</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 2600-レッグウェア --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-2600">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">レッグウェア</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/leg-wear/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのレッグウェア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/leg-wear/socks/?sex=women" class="global-nav__link anlys_leftnav-normal">ソックス/靴下</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/leg-wear/tights-stockings/?sex=women" class="global-nav__link anlys_leftnav-normal">タイツ/ストッキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/leg-wear/leggings-spats/?sex=women" class="global-nav__link anlys_leftnav-normal">レギンス/スパッツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/leg-wear/leg-warmer/?sex=women" class="global-nav__link anlys_leftnav-normal">レッグウォーマー</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 2700-帽子 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-2700">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">帽子</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/hat/?sex=women" class="global-nav__link anlys_leftnav-normal">すべての帽子</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hat/cap/?sex=women" class="global-nav__link anlys_leftnav-normal">キャップ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hat/hat/?sex=women" class="global-nav__link anlys_leftnav-normal">ハット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hat/hunting-beret/?sex=women" class="global-nav__link anlys_leftnav-normal">ハンチング/ベレー帽</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hat/knit-cap-beanies/?sex=women" class="global-nav__link anlys_leftnav-normal">ニットキャップ/ビーニー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hat/casket/?sex=women" class="global-nav__link anlys_leftnav-normal">キャスケット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hat/sun-visor/?sex=women" class="global-nav__link anlys_leftnav-normal">サンバイザー</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 2800-インテリア --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-2800">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">インテリア</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/interior/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのインテリア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/room-shoes-slippers/?sex=women" class="global-nav__link anlys_leftnav-normal">ルームシューズ/スリッパ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/face-towel/?sex=women" class="global-nav__link anlys_leftnav-normal">フェイスタオル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/towel/?sex=women" class="global-nav__link anlys_leftnav-normal">バスタオル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/candle/?sex=women" class="global-nav__link anlys_leftnav-normal">キャンドル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/incense-room-sprays/?sex=women" class="global-nav__link anlys_leftnav-normal">お香/ルームフレグランス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/interior-accessory/?sex=women" class="global-nav__link anlys_leftnav-normal">インテリアアクセサリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/flower-base/?sex=women" class="global-nav__link anlys_leftnav-normal">フラワーベース</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/storage-items/?sex=women" class="global-nav__link anlys_leftnav-normal">収納グッズ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 2900-食器/キッチン --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-2900">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">食器/キッチン</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/?sex=women" class="global-nav__link anlys_leftnav-normal">すべての食器/キッチン</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/tableware/?sex=women" class="global-nav__link anlys_leftnav-normal">食器</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/glasses-mug-cup-tumbler/?sex=women" class="global-nav__link anlys_leftnav-normal">グラス/マグカップ/タンブラー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/cutlery/?sex=women" class="global-nav__link anlys_leftnav-normal">カトラリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/kitchen-tools/?sex=women" class="global-nav__link anlys_leftnav-normal">キッチンツール</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/apron/?sex=women" class="global-nav__link anlys_leftnav-normal">エプロン</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 3000-雑貨/ホビー/スポーツ --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-3000">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">雑貨/ホビー/スポーツ</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/?sex=women" class="global-nav__link anlys_leftnav-normal">すべての雑貨/ホビー/スポーツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/pen/?sex=women" class="global-nav__link anlys_leftnav-normal">ペン類</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/stationery/?sex=women" class="global-nav__link anlys_leftnav-normal">ステーショナリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/mobile-case-mobile-cover/?sex=women" class="global-nav__link anlys_leftnav-normal">モバイルケース/カバー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/mobile-accessory/?sex=women" class="global-nav__link anlys_leftnav-normal">モバイルアクセサリー</a>
            </li>
            <!--li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/toy/?sex=women" class="global-nav__link anlys_leftnav-normal">おもちゃ</a>
            </l-->
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/badge/?sex=women" class="global-nav__link anlys_leftnav-normal">バッジ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/sports-goods/?sex=women" class="global-nav__link anlys_leftnav-normal">スポーツグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/golf-items/?sex=women" class="global-nav__link anlys_leftnav-normal">ゴルフグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/camera-camera-accessories/?sex=women" class="global-nav__link anlys_leftnav-normal">カメラ/カメラグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/pet-items/?sex=women" class="global-nav__link anlys_leftnav-normal">ペットグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/travel-goods/?sex=women" class="global-nav__link anlys_leftnav-normal">トラベルグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/other-goods/?sex=women" class="global-nav__link anlys_leftnav-normal">その他雑貨</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 3200-コスメ/香水 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-3200">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">コスメ/香水</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのコスメ/香水</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/perfume/?sex=women" class="global-nav__link anlys_leftnav-normal">香水</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/skin-care/?sex=women" class="global-nav__link anlys_leftnav-normal">スキンケア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/makeup/?sex=women" class="global-nav__link anlys_leftnav-normal">メイクアップ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/body-care/?sex=women" class="global-nav__link anlys_leftnav-normal">ボディケア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/neil-polish-nail-care-products/?sex=women" class="global-nav__link anlys_leftnav-normal">ネイル/ハンドケア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/lip-care/?sex=women" class="global-nav__link anlys_leftnav-normal">リップケア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/hair-care/?sex=women" class="global-nav__link anlys_leftnav-normal">ヘアケア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/soap-shower-gel/?sex=women" class="global-nav__link anlys_leftnav-normal">石鹸/ボディソープ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/bath-care-products/?sex=women" class="global-nav__link anlys_leftnav-normal">入浴剤</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/oral-care-dental-care-items/?sex=women" class="global-nav__link anlys_leftnav-normal">オーラルケア/歯磨きグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/other-cosmetics/?sex=women" class="global-nav__link anlys_leftnav-normal">その他コスメ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 3300-水着/着物・浴衣 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-3300">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">水着/着物・浴衣</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/swimwear-kimono-yukata/?sex=women" class="global-nav__link anlys_leftnav-normal">すべての水着/着物・浴衣</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/swimwear-kimono-yukata/swimsuit/?sex=women" class="global-nav__link anlys_leftnav-normal">水着</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/swimwear-kimono-yukata/swimming-accessories/?sex=women" class="global-nav__link anlys_leftnav-normal">スイムグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/swimwear-kimono-yukata/kimono-yukata/?sex=women" class="global-nav__link anlys_leftnav-normal">着物/浴衣</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/swimwear-kimono-yukata/traditional-japanese-clothing-accessories/?sex=women" class="global-nav__link anlys_leftnav-normal">和装小物</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 3400-マタニティ/ベビー --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-3400">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">マタニティ/ベビー</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/maternity-baby/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのマタニティ/ベビー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/maternity-baby/kids-gift-set/?sex=women" class="global-nav__link anlys_leftnav-normal">ベビーギフト</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 3500-その他 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-3500">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">その他</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/others/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのその他</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/others/gift-wrap-kit/?sex=women" class="global-nav__link anlys_leftnav-normal">ラッピングキット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/others/others/?sex=women" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-3 WOMEN > 3600-FOOD --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-3-3600">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">その他</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/food/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのFOOD</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/food/food/?sex=women" class="global-nav__link anlys_leftnav-normal">FOOD</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- 2-4 MEN > 1100-トップス --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-1100">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">トップス</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/tops/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのトップス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/tshirt-cutsew/?sex=men" class="global-nav__link anlys_leftnav-normal">Tシャツ/カットソー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/shirt-blouse/?sex=men" class="global-nav__link anlys_leftnav-normal">シャツ/ブラウス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/polo-shirt/?sex=men" class="global-nav__link anlys_leftnav-normal">ポロシャツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/knit-sweater/?sex=men" class="global-nav__link anlys_leftnav-normal">ニット/セーター</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/parka/?sex=men" class="global-nav__link anlys_leftnav-normal">パーカー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/sweat/?sex=men" class="global-nav__link anlys_leftnav-normal">スウェット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/cardigan/?sex=men" class="global-nav__link anlys_leftnav-normal">カーディガン</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/ensemble/?sex=men" class="global-nav__link anlys_leftnav-normal">アンサンブル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/tank-tops/?sex=men" class="global-nav__link anlys_leftnav-normal">タンクトップ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/vest/?sex=men" class="global-nav__link anlys_leftnav-normal">ベスト</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/other-tops/?sex=men" class="global-nav__link anlys_leftnav-normal">その他トップス</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 1200-ジャケット/アウター --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-1200">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">ジャケット/アウター</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのジャケット/アウター</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/tailored-jacket/?sex=men" class="global-nav__link anlys_leftnav-normal">テーラードジャケット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/no-collar-jacket/?sex=men" class="global-nav__link anlys_leftnav-normal">ノーカラージャケット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/riders-jacket/?sex=men" class="global-nav__link anlys_leftnav-normal">ライダースジャケット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/jacket/?sex=men" class="global-nav__link anlys_leftnav-normal">ブルゾン</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/coveralls/?sex=men" class="global-nav__link anlys_leftnav-normal">カバーオール</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/military-jacket/?sex=men" class="global-nav__link anlys_leftnav-normal">ミリタリージャケット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/down-vest/?sex=men" class="global-nav__link anlys_leftnav-normal">ダウンベスト</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/down-jacket/?sex=men" class="global-nav__link anlys_leftnav-normal">ダウンジャケット/コート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/mods-coat/?sex=men" class="global-nav__link anlys_leftnav-normal">モッズコート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/pea-coat/?sex=men" class="global-nav__link anlys_leftnav-normal">ピーコート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/stand-collar-coat/?sex=men" class="global-nav__link anlys_leftnav-normal">ステンカラーコート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/trench-coat/?sex=men" class="global-nav__link anlys_leftnav-normal">トレンチコート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/chester-coat/?sex=men" class="global-nav__link anlys_leftnav-normal">チェスターコート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/mountain-parker/?sex=men" class="global-nav__link anlys_leftnav-normal">マウンテンパーカー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/stadium-jumper/?sex=men" class="global-nav__link anlys_leftnav-normal">スタジャン</a>
            </li>
            <!--li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/poncho/?sex=men" class="global-nav__link anlys_leftnav-normal">ポンチョ</a>
            </li-->
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/other-outer/?sex=men" class="global-nav__link anlys_leftnav-normal">その他アウター</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/ma1/?sex=men" class="global-nav__link anlys_leftnav-normal">MA-1</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 1300-パンツ --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-1300">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">パンツ</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/pants/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのパンツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/pants/denim-pants/?sex=men" class="global-nav__link anlys_leftnav-normal">デニムパンツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/pants/cargo-pants/?sex=men" class="global-nav__link anlys_leftnav-normal">カーゴパンツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/pants/chino-pants/?sex=men" class="global-nav__link anlys_leftnav-normal">チノパンツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/pants/slacks/?sex=men" class="global-nav__link anlys_leftnav-normal">スラックス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/pants/pants/?sex=men" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 1700-スーツ/ネクタイ --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-1700">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">スーツ/ネクタイ</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/suit/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのスーツ/ネクタイ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/suit/suit-jacket/?sex=men" class="global-nav__link anlys_leftnav-normal">スーツジャケット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/suit/setup/?sex=men" class="global-nav__link anlys_leftnav-normal">セットアップ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/suit/necktie/?sex=men" class="global-nav__link anlys_leftnav-normal">ネクタイ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/suit/bow-ties/?sex=men" class="global-nav__link anlys_leftnav-normal">蝶ネクタイ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/suit/necktie-pin/?sex=men" class="global-nav__link anlys_leftnav-normal">ネクタイピン</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 1800-バッグ --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-1800">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">バッグ</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/bag/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/backpack-rucksack/?sex=men" class="global-nav__link anlys_leftnav-normal">バックパック/リュック</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/tote-bag/?sex=men" class="global-nav__link anlys_leftnav-normal">トートバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/waist-pouch/?sex=men" class="global-nav__link anlys_leftnav-normal">ボディバッグ/ウエストポーチ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/shoulder-bag/?sex=men" class="global-nav__link anlys_leftnav-normal">ショルダーバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/handbag/?sex=men" class="global-nav__link anlys_leftnav-normal">ハンドバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/clutch-bag/?sex=men" class="global-nav__link anlys_leftnav-normal">クラッチバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/eco-bag/?sex=men" class="global-nav__link anlys_leftnav-normal">エコバッグ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 1900-シューズ --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-1900">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">シューズ</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/shoes/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/sneakers/?sex=men" class="global-nav__link anlys_leftnav-normal">スニーカー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/sandal/?sex=men" class="global-nav__link anlys_leftnav-normal">サンダル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/boots/?sex=men" class="global-nav__link anlys_leftnav-normal">ブーツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/dress-shoes/?sex=men" class="global-nav__link anlys_leftnav-normal">ドレスシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/ballet-slippers/?sex=men" class="global-nav__link anlys_leftnav-normal">バレエシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/rain-shoes/?sex=men" class="global-nav__link anlys_leftnav-normal">レインシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/flip-flops/?sex=men" class="global-nav__link anlys_leftnav-normal">ビーチサンダル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/shoecare-items/?sex=men" class="global-nav__link anlys_leftnav-normal">シューケア/シューズ小物</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/slip-on/?sex=men" class="global-nav__link anlys_leftnav-normal">スリッポン</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/loafers/?sex=men" class="global-nav__link anlys_leftnav-normal">ローファー</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 2000-ファッション雑貨 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-2000">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">ファッション雑貨</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのファッション雑貨</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/stole-snood/?sex=men" class="global-nav__link anlys_leftnav-normal">ストール/スヌード</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/muffler-shawl/?sex=men" class="global-nav__link anlys_leftnav-normal">マフラー/ショール</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/belt/?sex=men" class="global-nav__link anlys_leftnav-normal">ベルト</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/sunglasses/?sex=men" class="global-nav__link anlys_leftnav-normal">サングラス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/gloves/?sex=men" class="global-nav__link anlys_leftnav-normal">手袋</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/umbrella/?sex=men" class="global-nav__link anlys_leftnav-normal">長傘</a>
            </li>
            <!--li class="global-nav__list-item">
              <a href="/product/fashion-accessories/folding-umbrella/?sex=men" class="global-nav__link anlys_leftnav-normal">折りたたみ傘</a>
            </li-->
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/raincoat-poncho/?sex=men" class="global-nav__link anlys_leftnav-normal">レインコート/ポンチョ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 2100-財布/小物 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-2100">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">財布/小物</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/?sex=men" class="global-nav__link anlys_leftnav-normal">すべての財布/小物</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/wallet/?sex=men" class="global-nav__link anlys_leftnav-normal">財布</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/coin-case-pocketbook/?sex=men" class="global-nav__link anlys_leftnav-normal">コインケース/札入れ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/business-card-holder/?sex=men" class="global-nav__link anlys_leftnav-normal">名刺入れ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/pouch/?sex=men" class="global-nav__link anlys_leftnav-normal">ポーチ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/handkerchief/?sex=men" class="global-nav__link anlys_leftnav-normal">ハンカチ/ハンドタオル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/bandana-scarf/?sex=men" class="global-nav__link anlys_leftnav-normal">バンダナ/スカーフ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/key-chain/?sex=men" class="global-nav__link anlys_leftnav-normal">キーホルダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/key-case-key-accessories/?sex=men" class="global-nav__link anlys_leftnav-normal">キーケース/キーアクセサリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/card-case/?sex=men" class="global-nav__link anlys_leftnav-normal">カードケース</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/other-small-goods/?sex=men" class="global-nav__link anlys_leftnav-normal">その他小物</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 2200-時計 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-2200">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">時計</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/wrist-watch/?sex=men" class="global-nav__link anlys_leftnav-normal">すべての時計</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wrist-watch/wrist-watch/?sex=men" class="global-nav__link anlys_leftnav-normal">腕時計</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 2400-アクセサリー --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-2400">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">アクセサリー</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/accessory/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのアクセサリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/accessory/necklace/?sex=men" class="global-nav__link anlys_leftnav-normal">ネックレス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/accessory/bracelet/?sex=men" class="global-nav__link anlys_leftnav-normal">ブレスレット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/accessory/bangle-wristband/?sex=men" class="global-nav__link anlys_leftnav-normal">バングル/リストバンド</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 2500-アンダーウェア --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-2500">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">アンダーウェア</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/underwear/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのアンダーウェア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/underwear/trunk-underwear/?sex=men" class="global-nav__link anlys_leftnav-normal">トランクス</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 2600-レッグウェア --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-2600">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">レッグウェア</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/leg-wear/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのレッグウェア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/leg-wear/socks/?sex=men" class="global-nav__link anlys_leftnav-normal">ソックス/靴下</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/leg-wear/leggings-spats/?sex=men" class="global-nav__link anlys_leftnav-normal">レギンス/スパッツ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 2700-帽子 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-2700">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">帽子</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/hat/?sex=men" class="global-nav__link anlys_leftnav-normal">すべての帽子</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hat/cap/?sex=men" class="global-nav__link anlys_leftnav-normal">キャップ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hat/hat/?sex=men" class="global-nav__link anlys_leftnav-normal">ハット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hat/hunting-beret/?sex=men" class="global-nav__link anlys_leftnav-normal">ハンチング/ベレー帽</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hat/knit-cap-beanies/?sex=men" class="global-nav__link anlys_leftnav-normal">ニットキャップ/ビーニー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hat/sun-visor/?sex=men" class="global-nav__link anlys_leftnav-normal">サンバイザー</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 2800-インテリア --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-2800">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">インテリア</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/interior/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのインテリア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/room-shoes-slippers/?sex=men" class="global-nav__link anlys_leftnav-normal">ルームシューズ/スリッパ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/face-towel/?sex=men" class="global-nav__link anlys_leftnav-normal">フェイスタオル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/towel/?sex=men" class="global-nav__link anlys_leftnav-normal">バスタオル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/candle/?sex=men" class="global-nav__link anlys_leftnav-normal">キャンドル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/incense-room-sprays/?sex=men" class="global-nav__link anlys_leftnav-normal">お香/ルームフレグランス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/bed-linen/?sex=men" class="global-nav__link anlys_leftnav-normal">ベッドリネン</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 2900-食器/キッチン --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-2900">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">食器/キッチン</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/?sex=men" class="global-nav__link anlys_leftnav-normal">すべての食器/キッチン</a>
            </li>
            <!--li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/tableware/?sex=men" class="global-nav__link anlys_leftnav-normal">食器</a>
            </li-->
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/glasses-mug-cup-tumbler/?sex=men" class="global-nav__link anlys_leftnav-normal">グラス/マグカップ/タンブラー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/kitchen-tools/?sex=men" class="global-nav__link anlys_leftnav-normal">キッチンツール</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/apron/?sex=men" class="global-nav__link anlys_leftnav-normal">エプロン</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 3000-雑貨/ホビー/スポーツ --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-3000">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">雑貨/ホビー/スポーツ</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/?sex=men" class="global-nav__link anlys_leftnav-normal">すべての雑貨/ホビー/スポーツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/pen/?sex=men" class="global-nav__link anlys_leftnav-normal">ペン類</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/stationery/?sex=men" class="global-nav__link anlys_leftnav-normal">ステーショナリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/mobile-case-mobile-cover/?sex=men" class="global-nav__link anlys_leftnav-normal">モバイルケース/カバー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/mobile-accessory/?sex=men" class="global-nav__link anlys_leftnav-normal">モバイルアクセサリー</a>
            </li>
            <!--li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/toy/?sex=men" class="global-nav__link anlys_leftnav-normal">おもちゃ</a>
            </li-->
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/badge/?sex=men" class="global-nav__link anlys_leftnav-normal">バッジ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/sports-goods/?sex=men" class="global-nav__link anlys_leftnav-normal">スポーツグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/golf-items/?sex=men" class="global-nav__link anlys_leftnav-normal">ゴルフグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/camera-camera-accessories/?sex=men" class="global-nav__link anlys_leftnav-normal">カメラ/カメラグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/travel-goods/?sex=men" class="global-nav__link anlys_leftnav-normal">トラベルグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/other-goods/?sex=men" class="global-nav__link anlys_leftnav-normal">その他雑貨</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 3200-コスメ/香水 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-3200">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">コスメ/香水</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのコスメ/香水</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/perfume/?sex=men" class="global-nav__link anlys_leftnav-normal">香水</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/skin-care/?sex=men" class="global-nav__link anlys_leftnav-normal">スキンケア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/lip-care/?sex=men" class="global-nav__link anlys_leftnav-normal">リップケア</a>
            </li>
            <!--li class="global-nav__list-item">
              <a href="/product/cosmetics/soap-shower-gel/?sex=men" class="global-nav__link anlys_leftnav-normal">石鹸/ボディソープ</a>
            </li-->
            <!--li class="global-nav__list-item">
              <a href="/product/cosmetics/bath-care-products/?sex=men" class="global-nav__link anlys_leftnav-normal">入浴剤</a>
            </li-->
            <!--li class="global-nav__list-item">
              <a href="/product/cosmetics/oral-care-dental-care-items/?sex=men" class="global-nav__link anlys_leftnav-normal">オーラルケア/歯磨きグッズ</a>
            </li-->
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/other-cosmetics/?sex=men" class="global-nav__link anlys_leftnav-normal">その他コスメ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 3500-その他 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-3500">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">その他</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/others/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのその他</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/others/gift-wrap-kit/?sex=men" class="global-nav__link anlys_leftnav-normal">ラッピングキット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/others/others/?sex=men" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-4 MEN > 3600-FOOD --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-4-3600">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">その他</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/food/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのFOOD</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/food/food/?sex=men" class="global-nav__link anlys_leftnav-normal">FOOD</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- 2-5 KIDS > 1100-トップス --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-1100">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">トップス</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/tops/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのトップス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/tshirt-cutsew/?sex=kids" class="global-nav__link anlys_leftnav-normal">Tシャツ/カットソー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/shirt-blouse/?sex=kids" class="global-nav__link anlys_leftnav-normal">シャツ/ブラウス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/knit-sweater/?sex=kids" class="global-nav__link anlys_leftnav-normal">ニット/セーター</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/parka/?sex=kids" class="global-nav__link anlys_leftnav-normal">パーカー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/sweat/?sex=kids" class="global-nav__link anlys_leftnav-normal">スウェット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tops/cardigan/?sex=kids" class="global-nav__link anlys_leftnav-normal">カーディガン</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 1200-ジャケット/アウター --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-1200">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">ジャケット/アウター</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのジャケット/アウター</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/no-collar-jacket/?sex=kids" class="global-nav__link anlys_leftnav-normal">ノーカラージャケット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/denim-jacket/?sex=kids" class="global-nav__link anlys_leftnav-normal">デニムジャケット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/jacket/?sex=kids" class="global-nav__link anlys_leftnav-normal">ブルゾン</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/down-jacket/?sex=kids" class="global-nav__link anlys_leftnav-normal">ダウンジャケット/コート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/trench-coat/?sex=kids" class="global-nav__link anlys_leftnav-normal">トレンチコート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/jacket-outerwear/other-outer/?sex=kids" class="global-nav__link anlys_leftnav-normal">その他アウター</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 1300-パンツ --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-1300">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">パンツ</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/pants/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのパンツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/pants/denim-pants/?sex=kids" class="global-nav__link anlys_leftnav-normal">デニムパンツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/pants/pants/?sex=kids" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 1400-オールインワン/サロペット --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-1400">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">オールインワン/サロペット</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/allinone-salopette/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのオールインワン/サロペット</a>
            </li>
            <!--li class="global-nav__list-item">
              <a href="/product/allinone-salopette/connected-allinone/?sex=kids" class="global-nav__link anlys_leftnav-normal">つなぎ/オールインワン</a>
            </li-->
            <li class="global-nav__list-item">
              <a href="/product/allinone-salopette/salopette-overalls/?sex=kids" class="global-nav__link anlys_leftnav-normal">サロペット/オーバーオール</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 1500-スカート --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-1500">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">スカート</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/skirt/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのスカート</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/skirt/skirt/?sex=kids" class="global-nav__link anlys_leftnav-normal">スカート</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 1600-ワンピース --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-1600">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">ワンピース</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/onepiece/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのワンピース</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/onepiece/onepiece-dress/?sex=kids" class="global-nav__link anlys_leftnav-normal">ワンピース</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/onepiece/dress/?sex=kids" class="global-nav__link anlys_leftnav-normal">ドレス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/onepiece/jumper-skirt/?sex=kids" class="global-nav__link anlys_leftnav-normal">ジャンパースカート</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 1800-バッグ --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-1800">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">バッグ</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/bag/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/backpack-rucksack/?sex=kids" class="global-nav__link anlys_leftnav-normal">バックパック/リュック</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/tote-bag/?sex=kids" class="global-nav__link anlys_leftnav-normal">トートバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/messenger-bag/?sex=kids" class="global-nav__link anlys_leftnav-normal">メッセンジャーバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/waist-pouch/?sex=kids" class="global-nav__link anlys_leftnav-normal">ボディバッグ/ウエストポーチ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/shoulder-bag/?sex=kids" class="global-nav__link anlys_leftnav-normal">ショルダーバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/handbag/?sex=kids" class="global-nav__link anlys_leftnav-normal">ハンドバッグ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/bag/clutch-bag/?sex=kids" class="global-nav__link anlys_leftnav-normal">クラッチバッグ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 1900-シューズ --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-1900">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">シューズ</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/shoes/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/sneakers/?sex=kids" class="global-nav__link anlys_leftnav-normal">スニーカー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/sandal/?sex=kids" class="global-nav__link anlys_leftnav-normal">サンダル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/boots/?sex=kids" class="global-nav__link anlys_leftnav-normal">ブーツ</a>
            </li>
            <!--li class="global-nav__list-item">
              <a href="/product/shoes/booties/?sex=kids" class="global-nav__link anlys_leftnav-normal">ブーティ</a>
            </li-->
            <li class="global-nav__list-item">
              <a href="/product/shoes/ballet-slippers/?sex=kids" class="global-nav__link anlys_leftnav-normal">バレエシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/moccasins/?sex=kids" class="global-nav__link anlys_leftnav-normal">モカシン/デッキシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/rain-shoes/?sex=kids" class="global-nav__link anlys_leftnav-normal">レインシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/shoes/casual-shoes/?sex=kids" class="global-nav__link anlys_leftnav-normal">カジュアルシューズ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 2000-ファッション雑貨 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-2000">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">ファッション雑貨</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのファッション雑貨</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/stole-snood/?sex=kids" class="global-nav__link anlys_leftnav-normal">ストール/スヌード</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/muffler-shawl/?sex=kids" class="global-nav__link anlys_leftnav-normal">マフラー/ショール</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/belt/?sex=kids" class="global-nav__link anlys_leftnav-normal">ベルト</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/gloves/?sex=kids" class="global-nav__link anlys_leftnav-normal">手袋</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/umbrella/?sex=kids" class="global-nav__link anlys_leftnav-normal">長傘</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/fashion-accessories/raincoat-poncho/?sex=kids" class="global-nav__link anlys_leftnav-normal">レインコート/ポンチョ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 2100-財布/小物 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-2100">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">財布/小物</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべての財布/小物</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/handkerchief/?sex=kids" class="global-nav__link anlys_leftnav-normal">ハンカチ/ハンドタオル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/wallet-accessory/other-small-goods/?sex=kids" class="global-nav__link anlys_leftnav-normal">その他小物</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 2300-ヘアアクセサリー --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-2300">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">ヘアアクセサリー</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/hair-accessory/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのヘアアクセサリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hair-accessory/head-band/?sex=kids" class="global-nav__link anlys_leftnav-normal">カチューシャ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 2400-アクセサリー --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-2400">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">アクセサリー</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/accessory/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのアクセサリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/accessory/bangle-wristband/?sex=kids" class="global-nav__link anlys_leftnav-normal">バングル/リストバンド</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 2600-レッグウェア --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-2600">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">レッグウェア</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/leg-wear/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのレッグウェア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/leg-wear/socks/?sex=kids" class="global-nav__link anlys_leftnav-normal">ソックス/靴下</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/leg-wear/tights-stockings/?sex=kids" class="global-nav__link anlys_leftnav-normal">タイツ/ストッキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/leg-wear/leggings-spats/?sex=kids" class="global-nav__link anlys_leftnav-normal">レギンス/スパッツ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 2700-帽子 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-2700">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">帽子</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/hat/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべての帽子</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hat/cap/?sex=kids" class="global-nav__link anlys_leftnav-normal">キャップ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hat/hat/?sex=kids" class="global-nav__link anlys_leftnav-normal">ハット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/hat/knit-cap-beanies/?sex=kids" class="global-nav__link anlys_leftnav-normal">ニットキャップ/ビーニー</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 2900-食器/キッチン --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-2900">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">食器/キッチン</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべての食器/キッチン</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/tableware/?sex=kids" class="global-nav__link anlys_leftnav-normal">食器</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/glasses-mug-cup-tumbler/?sex=kids" class="global-nav__link anlys_leftnav-normal">グラス/マグカップ/タンブラー</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 3000-雑貨/ホビー/スポーツ --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-3000">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">雑貨/ホビー/スポーツ</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべての雑貨/ホビー/スポーツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/badge/?sex=kids" class="global-nav__link anlys_leftnav-normal">バッジ</a>
            </li>
            <!--li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/other-goods/?sex=kids" class="global-nav__link anlys_leftnav-normal">その他雑貨</a>
            </li-->
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 3200-コスメ/香水 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-3200">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">コスメ/香水</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのコスメ/香水</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/hair-care/?sex=kids" class="global-nav__link anlys_leftnav-normal">ヘアケア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/soap-shower-gel/?sex=kids" class="global-nav__link anlys_leftnav-normal">石鹸/ボディソープ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/oral-care-dental-care-items/?sex=kids" class="global-nav__link anlys_leftnav-normal">オーラルケア/歯磨きグッズ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 3300-水着/着物・浴衣 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-3300">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">水着/着物・浴衣</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/swimwear-kimono-yukata/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべての水着/着物・浴衣</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/swimwear-kimono-yukata/swimsuit/?sex=kids" class="global-nav__link anlys_leftnav-normal">水着</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 3400-マタニティ/ベビー --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-3400">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">マタニティ/ベビー</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/maternity-baby/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのマタニティ/ベビー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/maternity-baby/bib/?sex=kids" class="global-nav__link anlys_leftnav-normal">スタイ/よだれかけ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/maternity-baby/rompers/?sex=kids" class="global-nav__link anlys_leftnav-normal">ロンパース</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/maternity-baby/baby-products/?sex=kids" class="global-nav__link anlys_leftnav-normal">ベビー用品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/maternity-baby/baby-shoes/?sex=kids" class="global-nav__link anlys_leftnav-normal">ベビーシューズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/maternity-baby/kids-gift-set/?sex=kids" class="global-nav__link anlys_leftnav-normal">ベビーギフト</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-5 KIDS > 3500-その他 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-5-3500">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">その他</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/others/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのその他</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/others/gift-wrap-kit/?sex=kids" class="global-nav__link anlys_leftnav-normal">ラッピングキット</a>
            </li>
            <!--li class="global-nav__list-item">
              <a href="/product/others/others/?sex=kids" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li-->
          </ul>
        </div>
      </div>

      <!-- 2-6 HOME > 2800-インテリア --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-6-2800">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">インテリア</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/interior/?sex=home" class="global-nav__link anlys_leftnav-normal">すべてのインテリア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/cushion-cushion-cover/?sex=home" class="global-nav__link anlys_leftnav-normal">クッション/クッションカバー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/room-shoes-slippers/?sex=home" class="global-nav__link anlys_leftnav-normal">ルームシューズ/スリッパ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/face-towel/?sex=home" class="global-nav__link anlys_leftnav-normal">フェイスタオル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/towel/?sex=home" class="global-nav__link anlys_leftnav-normal">バスタオル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/candle/?sex=home" class="global-nav__link anlys_leftnav-normal">キャンドル</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/incense-room-sprays/?sex=home" class="global-nav__link anlys_leftnav-normal">お香/ルームフレグランス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/interior-accessory/?sex=home" class="global-nav__link anlys_leftnav-normal">インテリアアクセサリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/flower-base/?sex=home" class="global-nav__link anlys_leftnav-normal">フラワーベース</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/interior/audio/?sex=home" class="global-nav__link anlys_leftnav-normal">オーディオ家電</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-6 HOME > 2900-食器/キッチン --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-6-2900">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">食器/キッチン</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/?sex=home" class="global-nav__link anlys_leftnav-normal">すべての食器/キッチン</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/tableware/?sex=home" class="global-nav__link anlys_leftnav-normal">食器</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/glasses-mug-cup-tumbler/?sex=home" class="global-nav__link anlys_leftnav-normal">グラス/マグカップ/タンブラー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/cutlery/?sex=home" class="global-nav__link anlys_leftnav-normal">カトラリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/kitchen-tools/?sex=home" class="global-nav__link anlys_leftnav-normal">キッチンツール</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/tableware-kitchenware/apron/?sex=home" class="global-nav__link anlys_leftnav-normal">エプロン</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-6 HOME > 3000-雑貨/ホビー/スポーツ --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-6-3000">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">雑貨/ホビー/スポーツ</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/?sex=home" class="global-nav__link anlys_leftnav-normal">すべての雑貨/ホビー/スポーツ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/pen/?sex=home" class="global-nav__link anlys_leftnav-normal">ペン類</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/journal-memo-pad/?sex=home" class="global-nav__link anlys_leftnav-normal">手帳/メモ帳</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/sticker-tapes/?sex=home" class="global-nav__link anlys_leftnav-normal">ステッカー/テープ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/stationery/?sex=home" class="global-nav__link anlys_leftnav-normal">ステーショナリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/mobile-case-mobile-cover/?sex=home" class="global-nav__link anlys_leftnav-normal">モバイルケース/カバー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/mobile-accessory/?sex=home" class="global-nav__link anlys_leftnav-normal">モバイルアクセサリー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/toy/?sex=home" class="global-nav__link anlys_leftnav-normal">おもちゃ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/badge/?sex=home" class="global-nav__link anlys_leftnav-normal">バッジ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/sports-goods/?sex=home" class="global-nav__link anlys_leftnav-normal">スポーツグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/camera-camera-accessories/?sex=home" class="global-nav__link anlys_leftnav-normal">カメラ/カメラグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/pet-items/?sex=home" class="global-nav__link anlys_leftnav-normal">ペットグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/zakka-hobby-sports/other-goods/?sex=home" class="global-nav__link anlys_leftnav-normal">その他雑貨</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-6 HOME > 3200-コスメ/香水 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-6-3200">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">コスメ/香水</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/?sex=home" class="global-nav__link anlys_leftnav-normal">すべてのコスメ/香水</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/perfume/?sex=home" class="global-nav__link anlys_leftnav-normal">香水</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/skin-care/?sex=home" class="global-nav__link anlys_leftnav-normal">スキンケア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/body-care/?sex=home" class="global-nav__link anlys_leftnav-normal">ボディケア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/neil-polish-nail-care-products/?sex=home" class="global-nav__link anlys_leftnav-normal">ネイル/ハンドケア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/lip-care/?sex=home" class="global-nav__link anlys_leftnav-normal">リップケア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/hair-care/?sex=home" class="global-nav__link anlys_leftnav-normal">ヘアケア</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/soap-shower-gel/?sex=home" class="global-nav__link anlys_leftnav-normal">石鹸/ボディソープ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/bath-care-products/?sex=home" class="global-nav__link anlys_leftnav-normal">入浴剤</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/oral-care-dental-care-items/?sex=home" class="global-nav__link anlys_leftnav-normal">オーラルケア/歯磨きグッズ</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/cosmetics/other-cosmetics/?sex=home" class="global-nav__link anlys_leftnav-normal">その他コスメ</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-6 HOME > 3500-その他 --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-6-3500">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">その他</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/others/?sex=home" class="global-nav__link anlys_leftnav-normal">すべてのその他</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/others/gift-wrap-kit/?sex=home" class="global-nav__link anlys_leftnav-normal">ラッピングキット</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/others/others/?sex=home" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2-6 HOME > 3600-FOOD --------------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="2-6-3600">
        <div class="global-nav-contents-return">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text">その他</p>
        </div>
        <!-- [/global-nav-contents-return] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/product/food/?sex=home" class="global-nav__link anlys_leftnav-normal">すべてのFOOD</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/food/food/?sex=home" class="global-nav__link anlys_leftnav-normal">FOOD</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/product/food/wine/?sex=home" class="global-nav__link anlys_leftnav-normal">ワイン</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- 2-8 ブランド一覧 > br-adam-f ADAM ET ROPÉ FEMME ----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-adam-f">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/adam-et-rope-femme/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-adametrope-f.png" alt="ADAM ET ROPÉ FEMME(アダム エ ロペ ファム)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="adam-et-rope-femme">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/ha-gen.jpg" alt="" /></div>
              <div class="text">Haagen-Dazs meets ADAM ET ROPÉ<br>8月10日(土)より発売開始</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target text-bold">
          <ul class="global-nav__list">
            <li class="global-nav__list-item text-narrow">
              <a href="/adam-et-rope-femme/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item text-narrow">
              <a href="https://www.jadore-jun.jp/ranking/?brand_id=10512" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item text-narrow">
              <a href="/adam-et-rope-femme/product/?mode=polist" class="global-nav__link anlys_leftnav-normal text-large">予約アイテム</a>
            </li>
            <li class="global-nav__list-item text-narrow">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=10512" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- オールインワン/サロペット-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/allinone-salopette/" class="global-nav__link anlys_leftnav-normal">オールインワン/サロペット</a>
            </li>
            <!-- スカート-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/skirt/" class="global-nav__link anlys_leftnav-normal">スカート</a>
            </li>
            <!-- ワンピース-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/onepiece/" class="global-nav__link anlys_leftnav-normal">ワンピース</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/shoes/" class="global-nav__link anlys_leftnav-normal">シューズ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- ヘアアクセサリー-->
            <!--li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/hair-accessory/" class="global-nav__link anlys_leftnav-normal">ヘアアクセサリー</a>
            </li-->
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/accessory/" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/hat/" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
            <!-- インテリア-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/interior/" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/zakka-hobby-sports/" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/cosmetics/" class="global-nav__link anlys_leftnav-normal">コスメ/香水</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-femme/product/?mode=limiteditem" class="global-nav__link anlys_leftnav-normal">限定アイテム</a>
            </li>
          </ul>
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=GA" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="http://www.adametrope.com/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-conveni CONVENI ----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-conveni">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/the-conveni/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-conveni.png" alt="THE CONVENI(ザ･コンビニ)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="the-conveni">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=17000" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- シューズ-->
            <!--li class="global-nav__list-item">
              <a href="/the-conveni/product/shoes/" class="global-nav__link anlys_leftnav-normal">シューズ</a>
            </li-->
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/hat/" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
            <!-- インテリア-->
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/interior/" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li>
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/tableware-kitchenware/" class="global-nav__link anlys_leftnav-normal">食器/キッチン</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/zakka-hobby-sports/" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/cosmetics/" class="global-nav__link anlys_leftnav-normal">コスメ/香水</a>
            </li>
            <!-- FOOD-->
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/food/" class="global-nav__link anlys_leftnav-normal">FOOD</a>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <a href="/the-conveni/product/others/" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="http://www.theconveni.com/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-popbyjun POP BY JUN ----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-popbyjun">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/pop-by-jun/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-popbyjun.png" alt="POP BY JUN(ポップ・バイ・ジュン)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="pop-by-jun">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/pop-by-jun/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target mgb-sp--30">
          <p class="global-nav__target-title sub-brand">HOLIDAY BOILEAU</p>
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/pop-by-jun/product/?bid=19003" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=19003" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item mgt-sp--25">
              <a href="/pop-by-jun/product/?bid=19003" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <p class="global-nav__target-title sub-brand">MAD FRUITS</p>
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/pop-by-jun/product/?bid=19002" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=19002" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item mgt-sp--25">
              <a href="/pop-by-jun/product/?bid=19002" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://www.popbyjun.com/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-rope ROPE----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-rope">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/rope/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-rope.png" alt="ROPÉ(ロペ)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="rope">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/rope/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/rope/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10300&sub_brand_id=10301" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/rope/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=10300" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム -->
            <li class="global-nav__list-item">
              <a href="/rope/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/rope/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/rope/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/rope/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- オールインワン/サロペット-->
            <li class="global-nav__list-item">
              <a href="/rope/product/allinone-salopette/" class="global-nav__link anlys_leftnav-normal">オールインワン/サロペット</a>
            </li>
            <!-- スカート-->
            <li class="global-nav__list-item">
              <a href="/rope/product/skirt/" class="global-nav__link anlys_leftnav-normal">スカート</a>
            </li>
            <!-- ワンピース-->
            <li class="global-nav__list-item">
              <a href="/rope/product/onepiece/" class="global-nav__link anlys_leftnav-normal">ワンピース</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/rope/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <a href="/rope/product/shoes/" class="global-nav__link anlys_leftnav-normal">シューズ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/rope/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/rope/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/rope/product/accessory/" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
            <!-- アンダーウェア-->
            <li class="global-nav__list-item">
              <a href="/rope/product/underwear/" class="global-nav__link anlys_leftnav-normal">アンダーウェア</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/rope/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- インテリア-->
            <li class="global-nav__list-item">
              <a href="/rope/product/interior/" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <a href="/rope/product/cosmetics/" class="global-nav__link anlys_leftnav-normal">コスメ/香水</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/rope/product/?mode=limiteditem" class="global-nav__link anlys_leftnav-normal">限定アイテム</a>
            </li>
          </ul>
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=GG" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.rope-jp.com/rope/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-rope-m ROPÉ mademoiselle----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-rope-m">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/rope-mademoiselle/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-rope-m.png" alt="ROPÉ mademoiselle(ロペ マドモアゼル)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="rope-mademoiselle">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10300&sub_brand_id=10302" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=10300" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- オールインワン/サロペット-->
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/allinone-salopette/" class="global-nav__link anlys_leftnav-normal">オールインワン/サロペット</a>
            </li>
            <!-- スカート-->
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/skirt/" class="global-nav__link anlys_leftnav-normal">スカート</a>
            </li>
            <!-- ワンピース-->
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/onepiece/" class="global-nav__link anlys_leftnav-normal">ワンピース</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/shoes/" class="global-nav__link anlys_leftnav-normal">シューズ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/accessory/" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/zakka-hobby-sports/" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/rope-mademoiselle/product/?mode=limiteditem" class="global-nav__link anlys_leftnav-normal">限定アイテム</a>
            </li>
          </ul>
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=GW" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.rope-jp.com/rope_mademoiselle/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-rope-e ROPÉ ÉTERNEL----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-rope-e">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/rope-eternel/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-rope-e.png" alt="ROPÉ ÉTERNEL(ロペ エターナル)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="rope-eternel">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10300&sub_brand_id=10303" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=10300" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- オールインワン/サロペット-->
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/allinone-salopette/" class="global-nav__link anlys_leftnav-normal">オールインワン/サロペット</a>
            </li>
            <!-- スカート-->
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/skirt/" class="global-nav__link anlys_leftnav-normal">スカート</a>
            </li>
            <!-- ワンピース-->
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/onepiece/" class="global-nav__link anlys_leftnav-normal">ワンピース</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/accessory/" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/rope-eternel/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=GX" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.rope-jp.com/rope_eternel/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-rope-p ROPÉ PICNIC----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-rope-p">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/rope-picnic/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-rope-p.png" alt="ROPÉ PICNIC(ロペピクニック)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="rope-picnic-women">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10100" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=10100" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- オールインワン/サロペット-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/allinone-salopette/" class="global-nav__link anlys_leftnav-normal">オールインワン/サロペット</a>
            </li>
            <!-- スカート-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/skirt/" class="global-nav__link anlys_leftnav-normal">スカート</a>
            </li>
            <!-- ワンピース-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/onepiece/" class="global-nav__link anlys_leftnav-normal">ワンピース</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/shoes/" class="global-nav__link anlys_leftnav-normal">シューズ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- ヘアアクセサリー-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/hair-accessory/" class="global-nav__link anlys_leftnav-normal">ヘアアクセサリー</a>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/accessory/" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/hat/" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
            <!-- インテリア-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/interior/" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/zakka-hobby-sports/" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/cosmetics/" class="global-nav__link anlys_leftnav-normal">コスメ/香水</a>
            </li>
            <!-- 水着/着物・浴衣-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/swimwear-kimono-yukata/" class="global-nav__link anlys_leftnav-normal">水着/着物・浴衣</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/?mode=limiteditem" class="global-nav__link anlys_leftnav-normal">限定アイテム</a>
            </li>
          </ul>
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=GD|GI|GR" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.ropepicnic.com/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-rope-p-k ROPÉ PICNIC - KIDS----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-rope-p-k">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/rope-picnic/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-rope-p.png" alt="ROPÉ PICNIC(ロペピクニック)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="rope-picnic-kids">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/?sex=kids&sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/?sex=kids" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10100&brand_type=6" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/?sex=kids" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/tops/?sex=kids" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/jacket-outerwear/?sex=kids" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/pants/?sex=kids" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- オールインワン/サロペット-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/allinone-salopette/?sex=kids" class="global-nav__link anlys_leftnav-normal">オールインワン/サロペット</a>
            </li>
            <!-- スカート-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/skirt/?sex=kids" class="global-nav__link anlys_leftnav-normal">スカート</a>
            </li>
            <!-- ワンピース-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/onepiece/?sex=kids" class="global-nav__link anlys_leftnav-normal">ワンピース</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/bag/?sex=kids" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/shoes/?sex=kids" class="global-nav__link anlys_leftnav-normal">シューズ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/fashion-accessories/?sex=kids" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/wallet-accessory/?sex=kids" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- ヘアアクセサリー-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/hair-accessory/?sex=kids" class="global-nav__link anlys_leftnav-normal">ヘアアクセサリー</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/leg-wear/?sex=kids" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/hat/?sex=kids" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
            <!-- 水着/着物・浴衣-->
            <li class="global-nav__list-item">
              <a href="/rope-picnic/product/swimwear-kimono-yukata/?sex=kids" class="global-nav__link anlys_leftnav-normal">水着/着物・浴衣</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=GR" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.ropepicnic.com/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-vis ViS----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-vis">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/vis/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-vis.png" alt="ViS(ビス)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="vis">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/vis/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/vis/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10200" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/vis/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=10200" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/vis/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/vis/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/vis/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/vis/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- オールインワン/サロペット-->
            <li class="global-nav__list-item">
              <a href="/vis/product/allinone-salopette/" class="global-nav__link anlys_leftnav-normal">オールインワン/サロペット</a>
            </li>
            <!-- スカート-->
            <li class="global-nav__list-item">
              <a href="/vis/product/skirt/" class="global-nav__link anlys_leftnav-normal">スカート</a>
            </li>
            <!-- ワンピース-->
            <li class="global-nav__list-item">
              <a href="/vis/product/onepiece/" class="global-nav__link anlys_leftnav-normal">ワンピース</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/vis/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <a href="/vis/product/shoes/" class="global-nav__link anlys_leftnav-normal">シューズ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/vis/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/vis/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- ヘアアクセサリー-->
            <li class="global-nav__list-item">
              <a href="/vis/product/hair-accessory/" class="global-nav__link anlys_leftnav-normal">ヘアアクセサリー</a>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/vis/product/accessory/" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/vis/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/vis/product/hat/" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/vis/product/?mode=limiteditem" class="global-nav__link anlys_leftnav-normal">限定アイテム</a>
            </li>
          </ul>
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=BV|XJ" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.visjp.com/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-salon SALON adam et ropé ----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-salon">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/salon-adam-et-rope/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-salon.png" alt="SALON adam et ropé(サロン アダム エ ロペ)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="salon-adam-et-rope-women">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=15000" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=15000" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- スカート-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/skirt/" class="global-nav__link anlys_leftnav-normal">スカート</a>
            </li>
            <!-- ワンピース-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/onepiece/" class="global-nav__link anlys_leftnav-normal">ワンピース</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/shoes/" class="global-nav__link anlys_leftnav-normal">シューズ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- ヘアアクセサリー-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/hair-accessory/" class="global-nav__link anlys_leftnav-normal">ヘアアクセサリー</a>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/accessory/" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
            <!-- アンダーウェア-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/underwear/" class="global-nav__link anlys_leftnav-normal">アンダーウェア</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/hat/" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
            <!-- インテリア-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/interior/" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li>
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/tableware-kitchenware/" class="global-nav__link anlys_leftnav-normal">食器/キッチン</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/zakka-hobby-sports/" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/cosmetics/" class="global-nav__link anlys_leftnav-normal">コスメ/香水</a>
            </li>
            <!-- マタニティ/ベビー-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/maternity-baby/" class="global-nav__link anlys_leftnav-normal">マタニティ/ベビー</a>
            </li>
            <!-- FOOD-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/food/" class="global-nav__link anlys_leftnav-normal">FOOD</a>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/others/" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <!--ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/?mode=limiteditem" class="global-nav__link anlys_leftnav-normal">限定アイテム</a>
            </li>
          </ul-->
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=SH" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://salon.adametrope.com/salon/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-salon-h SALON adam et ropé - HOME----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-salon-h">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/salon-adam-et-rope/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-salon.png" alt="SALON adam et ropé(サロン アダム エ ロペ)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="salon-adam-et-rope-home">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/?sex=home&sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/?sex=home" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=15000&brand_type=3" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/?sex=home&mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=15000?sex=home" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/?sex=home" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/bag/?sex=home" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/wallet-accessory/?sex=home" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- インテリア-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/interior/?sex=home" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li>
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/tableware-kitchenware/?sex=home" class="global-nav__link anlys_leftnav-normal">食器/キッチン</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/zakka-hobby-sports/?sex=home" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/cosmetics/?sex=home" class="global-nav__link anlys_leftnav-normal">コスメ/香水</a>
            </li>
            <!-- FOOD-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/food/?sex=home" class="global-nav__link anlys_leftnav-normal">FOOD</a>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/others/?sex=home" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <!--ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/salon-adam-et-rope/product/?sex=home&mode=limiteditem" class="global-nav__link anlys_leftnav-normal">限定アイテム</a>
            </li>
          </ul-->
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=SH" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://salon.adametrope.com/salon/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-magasin ADAM ET ROPÉ Le Magasin -- --------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-magasin">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/adam-et-rope-le-magasin/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-magasin.png" alt="ADAM ET ROPÉ Le Magasin(アダム エ ロペ ル マガザン)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="adam-et-rope-le-magasin-women">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10513" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=10513" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- オールインワン/サロペット-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/allinone-salopette/" class="global-nav__link anlys_leftnav-normal">オールインワン/サロペット</a>
            </li>
            <!-- スカート-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/skirt/" class="global-nav__link anlys_leftnav-normal">スカート</a>
            </li>
            <!-- ワンピース-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/onepiece/" class="global-nav__link anlys_leftnav-normal">ワンピース</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/shoes/" class="global-nav__link anlys_leftnav-normal">シューズ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- 時計-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/wrist-watch/" class="global-nav__link anlys_leftnav-normal">時計</a>
            </li>
            <!-- ヘアアクセサリー-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/hair-accessory/" class="global-nav__link anlys_leftnav-normal">ヘアアクセサリー</a>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/accessory/" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/hat/" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
            <!-- インテリア-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/interior/" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li>
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/tableware-kitchenware/" class="global-nav__link anlys_leftnav-normal">食器/キッチン</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/zakka-hobby-sports/" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/cosmetics/" class="global-nav__link anlys_leftnav-normal">コスメ/香水</a>
            </li>
            <!-- 水着/着物・浴衣-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/swimwear-kimono-yukata/" class="global-nav__link anlys_leftnav-normal">水着/着物・浴衣</a>
            </li>
            <!-- マタニティ/ベビー-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/maternity-baby/" class="global-nav__link anlys_leftnav-normal">マタニティ/ベビー</a>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/others/" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/?mode=limiteditem" class="global-nav__link anlys_leftnav-normal">限定アイテム</a>
            </li>
          </ul>
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=EK" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.lemagasin.jp/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-magasin-h ADAM ET ROPÉ Le Magasin -HOME----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-magasin-h">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/adam-et-rope-le-magasin/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-magasin.png" alt="ADAM ET ROPÉ Le Magasin(アダム エ ロペ ル マガザン)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="adam-et-rope-le-magasin-home">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/?sex=home" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10513&brand_type=3" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/?sex=home&mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/?sex=home" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/bag/?sex=home" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/fashion-accessories/?sex=home" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/wallet-accessory/?sex=home" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- ヘアアクセサリー-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/hair-accessory/?sex=home" class="global-nav__link anlys_leftnav-normal">ヘアアクセサリー</a>
            </li>
            <!-- インテリア-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/interior/?sex=home" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li>
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/tableware-kitchenware/?sex=home" class="global-nav__link anlys_leftnav-normal">食器/キッチン</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/zakka-hobby-sports/?sex=home" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/cosmetics/?sex=home" class="global-nav__link anlys_leftnav-normal">コスメ/香水</a>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/others/?sex=home" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-le-magasin/product/?mode=limiteditem" class="global-nav__link anlys_leftnav-normal">限定アイテム</a>
            </li>
          </ul>
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=EK" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.lemagasin.jp/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-bon-r-w bonjour records -WOMEN----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-bon-r-w">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/bonjour-records/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-bon-r.png" alt="bonjour records(ボンジュールレコード)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="bonjour-records">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/?sex=women&sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/?sex=women" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_type=2&brand_id=10600" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/?sex=women&mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/?sex=women" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/tops/?sex=women" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/jacket-outerwear/?sex=women" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/pants/?sex=women" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/bag/?sex=women" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/shoes/?sex=women" class="global-nav__link anlys_leftnav-normal">シューズ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/fashion-accessories/?sex=women" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/wallet-accessory/?sex=women" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/accessory/?sex=women" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/leg-wear/?sex=women" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/hat/?sex=women" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
            <!-- インテリア-->
            <!--li class="global-nav__list-item">
              <a href="/bonjour-records/product/interior/?sex=women" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li--->
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/tableware-kitchenware/?sex=women" class="global-nav__link anlys_leftnav-normal">食器/キッチン</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/zakka-hobby-sports/?sex=women" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/others/?sex=women" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=ZP" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.bonjour.jp/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-bon-g Bonjour Girl----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-bon-g">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/bonjour-girl/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-bon-g.png" alt="Bonjour Girl(ボンジュールガール)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="bonjour-girl">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/bonjour-girl/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10600&sub_brand_id=10603" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <!--li class="global-nav__list-item">
              <a href="/bonjour-girl/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li-->
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/bonjour-girl/product/&sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/bonjour-girl/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/bonjour-girl/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/bonjour-girl/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- ファッション雑貨-->
            <!--li class="global-nav__list-item">
              <a href="/bonjour-girl/product/&fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li-->
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/bonjour-girl/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/bonjour-girl/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/bonjour-girl/product/hat/" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
            <!-- インテリア-->
            <!--li class="global-nav__list-item">
              <a href="/bonjour-girl/product/interior/" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li-->
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/bonjour-girl/product/zakka-hobby-sports/" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <a href="/bonjour-girl/product/cosmetics/" class="global-nav__link anlys_leftnav-normal">コスメ/香水</a>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <a href="/bonjour-girl/product/others/" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=ZP" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.bonjour.jp/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-nergy NERGY----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-nergy">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/nergy/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-nergy.png" alt="NERGY(ナージー)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="nergy">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/nergy/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/nergy/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=16000" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/nergy/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=16000" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- スカート-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/skirt/" class="global-nav__link anlys_leftnav-normal">スカート</a>
            </li>
            <!-- ワンピース-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/onepiece/" class="global-nav__link anlys_leftnav-normal">ワンピース</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/shoes/" class="global-nav__link anlys_leftnav-normal">シューズ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- ヘアアクセサリー-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/hair-accessory/" class="global-nav__link anlys_leftnav-normal">ヘアアクセサリー</a>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/accessory/" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
            <!-- アンダーウェア-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/underwear/" class="global-nav__link anlys_leftnav-normal">アンダーウェア</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/hat/" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
            <!-- インテリア-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/interior/" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li>
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/tableware-kitchenware/" class="global-nav__link anlys_leftnav-normal">食器/キッチン</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/zakka-hobby-sports/" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/cosmetics/" class="global-nav__link anlys_leftnav-normal">コスメ/香水</a>
            </li>
            <!-- 水着/着物・浴衣-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/swimwear-kimono-yukata/" class="global-nav__link anlys_leftnav-normal">水着/着物・浴衣</a>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <a href="/nergy/product/others/" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/nergy/product/?mode=limiteditem" class="global-nav__link anlys_leftnav-normal">限定アイテム</a>
            </li>
          </ul>
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=NJ" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.nergy.jp/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-junrope-w JUN&ROPÉ----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-junrope-w">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/jun-and-rope/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-junrope-w.png" alt="JUN&ROPÉ(ジュン アンド ロペ)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="jun-and-rope">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_type=2&brand_id=10400" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=10400" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- スカート-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/skirt/" class="global-nav__link anlys_leftnav-normal">スカート</a>
            </li>
            <!-- ワンピース-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/onepiece/" class="global-nav__link anlys_leftnav-normal">ワンピース</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/hat/" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/tableware-kitchenware/" class="global-nav__link anlys_leftnav-normal">食器/キッチン</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope/product/zakka-hobby-sports/" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=ER" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.junandrope.jp/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-dewlux DeWLuX----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-dewlux">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/dewlux/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-dewlux.png" alt="DeWLuX(デューラックス)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="dewlux">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/dewlux/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/dewlux/product/" class="global-nav__link anlys_leftnav-normal  text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=18000" class="global-nav__link anlys_leftnav-normal  text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/dewlux/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list brand-banner mgt-sp--0 mgb-sp--10">
            <li class="global-nav__list-item">
              <a href="https://www.junonline.jp/article/dewlux-pearl">
                <div class="image"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brand-banner/dewlux-1.jpg" alt="" /></div>
                <p class="title">PEARL series</p>
              </a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.junonline.jp/article/dewlux-zirconia">
                <div class="image"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brand-banner/dewlux-2.jpg" alt="" /></div>
                <p class="title">ZIRCONIA series</p>
              </a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/dewlux/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/dewlux/product/accessory/" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/dewlux/product/accessory/necklace/" class="global-nav__link anlys_leftnav-normal">ネックレス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/dewlux/product/accessory/ring/" class="global-nav__link anlys_leftnav-normal">リング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/dewlux/product/accessory/earrings-for-both-ears/" class="global-nav__link anlys_leftnav-normal">ピアス</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/dewlux/product/accessory/earrings/" class="global-nav__link anlys_leftnav-normal">イヤリング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/dewlux/product/accessory/bracelet/" class="global-nav__link anlys_leftnav-normal">ブレスレット</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list brand-banner mgt-sp--20">
            <li class="global-nav__list-item">
              <a href="https://www.junonline.jp/news/21891">
                <div class="image"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brand-banner/dewlux-3.jpg" alt="" /></div>
                <p class="title">GIFT GUIDE</p>
              </a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.junonline.jp/article/dewlux-after-service">
                <div class="image"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brand-banner/dewlux-4.jpg" alt="" /></div>
                <p class="title">AFTER SERVICE</p>
              </a>
            </li>
          </ul>
        </div>

        <!--div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/dewlux/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div-->

        <!--div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/dewlux/product/?mode=limiteditem" class="global-nav__link anlys_leftnav-normal">限定アイテム</a>
            </li>
          </ul>
        </div-->
      </div>
      <!-- 2-8 ブランド一覧 > br-seads Sea'ds Mara----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-seads">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/seads-mara/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-seads.png" alt="Sea'ds Mara(シーズマーラ)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="seads-mara">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/seads-mara/product/" class="global-nav__link anlys_leftnav-normal  text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=18000&sub_brand_id=18003" class="global-nav__link anlys_leftnav-normal  text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/seads-mara/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/seads-mara/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/seads-mara/product/accessory/" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
          </ul>
        </div>

        <!--div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/seads-mara/product/&sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div-->

        <!--div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/seads-mara/product/?mode=limiteditem" class="global-nav__link anlys_leftnav-normal">限定アイテム</a>
            </li>
          </ul>
        </div-->
      </div>

      <!-- 2-8 ブランド一覧 > br-adam-h ADAM ET ROPÉ HOMME----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-adam-h">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/adam-et-rope-homme/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-adametrope-h.png" alt="ADAM ET ROPÉ HOMME(アダム エ ロペ オム)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="adam-et-rope-homme">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10511" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=10511" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- スーツ/ネクタイ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/suit/" class="global-nav__link anlys_leftnav-normal">スーツ/ネクタイ</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/shoes/" class="global-nav__link anlys_leftnav-normal">シューズ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- 時計-->
            <!--li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/wrist-watch/" class="global-nav__link anlys_leftnav-normal">時計</a>
            </li-->
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/accessory/" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/hat/" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
            <!-- インテリア-->
            <!--li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/interior/" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li-->
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/zakka-hobby-sports/" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/others/" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <!--ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/adam-et-rope-homme/product/?mode=limiteditem" class="global-nav__link anlys_leftnav-normal">限定アイテム</a>
            </li>
          </ul-->
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=m&bset=GM" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="http://www.adametrope.com/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-wild WILD LIFE TAILOR----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-wild">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/wild-life-tailor/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-wild.png" alt="AADAM ET ROPÉ WILD LIFE TAILOR(アダム エ ロペ ワイルド ライフ テーラー)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="wild-life-tailor">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/wild-life-tailor/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/wild-life-tailor/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10511&sub_brand_id=10506" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/wild-life-tailor/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=10511" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/wild-life-tailor/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/wild-life-tailor/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/wild-life-tailor/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/wild-life-tailor/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- スーツ/ネクタイ-->
            <li class="global-nav__list-item">
              <a href="/wild-life-tailor/product/suit/" class="global-nav__link anlys_leftnav-normal">スーツ/ネクタイ</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/wild-life-tailor/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/wild-life-tailor/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/wild-life-tailor/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/wild-life-tailor/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- インテリア-->
            <!--li class="global-nav__list-item">
              <a href="/wild-life-tailor/product/interior/" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li-->
          </ul>
        </div>

        <div class="global-nav__target">
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=m&bset=GP" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://wildlifetailor.adametrope.com/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-junred JUNRed----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-junred">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/junred/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-junred.png" alt="JUNRed(ジュンレッド)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="junred">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/junred/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/junred/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10000" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/junred/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=10000" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/junred/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/junred/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/junred/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/junred/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/junred/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <a href="/junred/product/shoes/" class="global-nav__link anlys_leftnav-normal">シューズ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/junred/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/junred/product/wallet-accessory/" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- ヘアアクセサリー-->
            <!--li class="global-nav__list-item">
              <a href="/junred/product/hair-accessory/" class="global-nav__link anlys_leftnav-normal">ヘアアクセサリー</a>
            </li-->
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/junred/product/accessory/" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
            <!-- アンダーウェア-->
            <li class="global-nav__list-item">
              <a href="/junred/product/underwear/" class="global-nav__link anlys_leftnav-normal">アンダーウェア</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/junred/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/junred/product/hat/" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
            <!-- インテリア-->
            <!--li class="global-nav__list-item">
              <a href="/junred/product/interior/" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li-->
            <!-- 食器/キッチン-->
            <!--li class="global-nav__list-item">
              <a href="/junred/product/tableware-kitchenware/" class="global-nav__link anlys_leftnav-normal">食器/キッチン</a>
            </li-->
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/junred/product/zakka-hobby-sports/" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <a href="/junred/product/others/" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/junred/product/?mode=limiteditem" class="global-nav__link anlys_leftnav-normal">限定アイテム</a>
            </li>
          </ul>
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=m&bset=AN" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.junred.jp/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-bon-r-w bonjour records -MEN----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-bon-r-m">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/bonjour-records/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-bon-r.png" alt="bonjour records(ボンジュールレコード)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="bonjour-records">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/?sex=men&sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/?sex=men" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_type=1&brand_id=10600" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/?sex=men&mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/?sex=men" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/tops/?sex=men" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/jacket-outerwear/?sex=men" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/pants/?sex=men" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/bag/?sex=men" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/shoes/?sex=men" class="global-nav__link anlys_leftnav-normal">シューズ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/fashion-accessories/?sex=men" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/wallet-accessory/?sex=men" class="global-nav__link anlys_leftnav-normal">財布/小物</a>
            </li>
            <!-- アンダーウェア-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/underwear/?sex=men" class="global-nav__link anlys_leftnav-normal">アンダーウェア</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/leg-wear/?sex=men" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/hat/?sex=men" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/tableware-kitchenware/?sex=men" class="global-nav__link anlys_leftnav-normal">食器/キッチン</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/zakka-hobby-sports/?sex=men" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/others/?sex=men" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=m&bset=ZP" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.bonjour.jp/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-bon-b bonjour bonsoir----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-bon-b">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/bonjour-bonsoir/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-bon-b.png" alt="bonjour bonsoir(ボンジュールボンソワール)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="bonjour-bonsoir">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/bonjour-bonsoir/product/?sex=men&sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/bonjour-bonsoir/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10600&sub_brand_id=10602" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <!--li class="global-nav__list-item">
              <a href="/bonjour-bonsoir/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li-->
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/bonjour-bonsoir/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/bonjour-bonsoir/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <!--li class="global-nav__list-item">
              <a href="/bonjour-bonsoir/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li-->
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/bonjour-bonsoir/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/bonjour-bonsoir/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- アクセサリー-->
            <!--li class="global-nav__list-item">
              <a href="/bonjour-bonsoir/product/accessory/" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li-->
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/bonjour-bonsoir/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/bonjour-bonsoir/product/zakka-hobby-sports/" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <a href="/bonjour-bonsoir/product/others/" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>

        <!--div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/bonjour-bonsoir/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div-->

        <div class="global-nav__target">
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=m&bset=ZP" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.bonjourbonsoir.jp/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-junrope-m JUN&ROPÉ MEN----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-junrope-m">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/jun-and-rope-men/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-junrope-m.png" alt="JUN&ROPÉ MEN(ジュン アンド ロペ メンズ)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="jun-and-rope-men">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/jun-and-rope-men/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/jun-and-rope-men/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10400&sub_brand_id=10402" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/jun-and-rope-men/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=10402" class="global-nav__link anlys_leftnav-normal text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope-men/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope-men/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope-men/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope-men/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope-men/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope-men/product/hat/" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/jun-and-rope-men/product/zakka-hobby-sports/" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://www.junandrope.jp/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-mounten MOUN TEN. ----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-mounten">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/moun-ten/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-mounten.png" alt="MOUN TEN.(マウンテン)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="moun-ten">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->
        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/moun-ten/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/moun-ten/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10800" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/moun-ten/product/?mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/moun-ten/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/moun-ten/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/moun-ten/product/jacket-outerwear/" class="global-nav__link anlys_leftnav-normal">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/moun-ten/product/pants/" class="global-nav__link anlys_leftnav-normal">パンツ</a>
            </li>
            <!-- オールインワン/サロペット-->
            <li class="global-nav__list-item">
              <a href="/moun-ten/product/allinone-salopette/" class="global-nav__link anlys_leftnav-normal">オールインワン/サロペット</a>
            </li>
            <!-- ワンピース-->
            <li class="global-nav__list-item">
              <a href="/moun-ten/product/onepiece/" class="global-nav__link anlys_leftnav-normal">ワンピース</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/moun-ten/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/moun-ten/product/fashion-accessories/" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- レッグウェア-->
            <li class="global-nav__list-item">
              <a href="/moun-ten/product/leg-wear/" class="global-nav__link anlys_leftnav-normal">レッグウェア</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/moun-ten/product/hat/" class="global-nav__link anlys_leftnav-normal">帽子</a>
            </li>
          </ul>
        </div>

      </div>
      <!-- 2-8 ブランド一覧 > br-bon-r bonjour records----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-bon-r">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/bonjour-records/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-bon-r.png" alt="bonjour records(ボンジュールレコード)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="bonjour-records">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/?sex=home&sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/?sex=home" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_type=3&brand_id=10600" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/?sex=home&mode=polist" class="global-nav__link anlys_leftnav-normal  text-large">プレオーダー</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/?sex=home" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/bag/?sex=home" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/fashion-accessories/?sex=home" class="global-nav__link anlys_leftnav-normal">ファッション雑貨</a>
            </li>
            <!-- アクセサリー-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/accessory/?sex=home" class="global-nav__link anlys_leftnav-normal">アクセサリー</a>
            </li>
            <!-- インテリア-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/interior/?sex=home" class="global-nav__link anlys_leftnav-normal">インテリア</a>
            </li>
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/tableware-kitchenware/?sex=home" class="global-nav__link anlys_leftnav-normal">食器/キッチン</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/zakka-hobby-sports/?sex=home" class="global-nav__link anlys_leftnav-normal">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- 音楽/本・雑誌 -->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/music-books/?sex=home" class="global-nav__link anlys_leftnav-normal">音楽/本・雑誌 </a>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <a href="/bonjour-records/product/others/?sex=home" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=l&bset=ZP" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.bonjour.jp/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 2-8 ブランド一覧 > br-chateau Chateau Jun----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-chateau">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><a href="/chateau-jun/"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-chateau.png" alt="Chateau Jun(シャトージュン)"></a></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="chateau-jun">
          <a href="/parts-sp.html" class="global-nav__link anlys_leftnav-normal">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/chateau-jun/product/" class="global-nav__link anlys_leftnav-normal text-large">新商品</a>
            </li>
            <li class="global-nav__list-item">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10700" class="global-nav__link anlys_leftnav-normal text-large">ランキング</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/chateau-jun/product/" class="global-nav__link anlys_leftnav-normal">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/chateau-jun/product/tops/" class="global-nav__link anlys_leftnav-normal">トップス</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/chateau-jun/product/bag/" class="global-nav__link anlys_leftnav-normal">バッグ</a>
            </li>
            <!-- 食器/キッチン-->
            <li class="global-nav__list-item">
              <a href="/chateau-jun/product/tableware-kitchenware/" class="global-nav__link anlys_leftnav-normal">食器/キッチン</a>
            </li>
            <!-- FOOD-->
            <li class="global-nav__list-item">
              <a href="/chateau-jun/product/food/" class="global-nav__link anlys_leftnav-normal">FOOD</a>
            </li>
            <!-- その他-->
            <li class="global-nav__list-item">
              <a href="/chateau-jun/product/others/" class="global-nav__link anlys_leftnav-normal">その他</a>
            </li>
          </ul>
        </div>

        <!--div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/chateau-jun/product/?sale=1" class="global-nav__link anlys_leftnav-normal sale">SALE</a>
            </li>
          </ul>
        </div-->

        <div class="global-nav__target">
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://www.chateaujun.com/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 2-8 ブランド一覧 > br-saturdays Saturdays NYC ----------------------------- -->
      <div class="global-nav-contents-outer js-gnav-target" data-target="br-saturdays-nyc">
        <div class="global-nav-contents-return brand-logo">
          <p class="global-nav-contents-return__link js-return"></p>
          <p class="global-nav-contents-return__text"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/common/img/brandlogo-black/logo-saturdays.png" alt="Saturdays NYC(サタデーズ・ニューヨークシティ)"></p>
        </div>
        <!-- [/global-nav-contents-return] -->

        <div class="global-nav-contents-brand" data-brands="saturdays-nyc">
          <a href="/parts-sp.html" class="global-nav__link">
            <div class="item">
              <div class="photo"><img class="lazy" src="/common/img/lazy_dummy.svg" data-src="/dummy/art-title.jpg" alt="" /></div>
              <div class="text">この秋必要なアウター</div>
            </div>
          </a>
        </div>
        <!-- [/global-nav-contents-brand] -->

        <div class="global-nav__target text-bold">
          <ul class="global-nav__list">
            <li class="global-nav__list-item text-narrow">
              <a href="/saturdays-nyc/product/" class="global-nav__link text-large">新商品</a>
            </li>
            <li class="global-nav__list-item text-narrow">
              <a href="https://www.jadore-jun.jp/ranking/?ranking_type=1&brand_id=10900" class="global-nav__link text-large">ランキング</a>
            </li>
            <li class="global-nav__list-item text-narrow">
              <a href="https://www.jadore-jun.jp/coordinate/?search_brand_id=10900" class="global-nav__link text-large">Staff Styling</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <!-- すべてのアイテム-->
            <li class="global-nav__list-item">
              <a href="/saturdays-nyc/product/" class="global-nav__link">すべてのアイテム</a>
            </li>
            <!-- トップス-->
            <li class="global-nav__list-item">
              <a href="/saturdays-nyc/product/tops/" class="global-nav__link">トップス</a>
            </li>
            <!-- ジャケット/アウター-->
            <li class="global-nav__list-item">
              <a href="/saturdays-nyc/product/jacket-outerwear/" class="global-nav__link">ジャケット/アウター</a>
            </li>
            <!-- パンツ-->
            <li class="global-nav__list-item">
              <a href="/saturdays-nyc/product/pants/" class="global-nav__link">パンツ</a>
            </li>
            <!-- 水着-->
            <li class="global-nav__list-item">
              <a href="/saturdays-nyc/product/swimwear-kimono-yukata/" class="global-nav__link">水着</a>
            </li>
            <!-- バッグ-->
            <li class="global-nav__list-item">
              <a href="/saturdays-nyc/product/bag/" class="global-nav__link">バッグ</a>
            </li>
            <!-- シューズ-->
            <li class="global-nav__list-item">
              <a href="/saturdays-nyc/product/shoes/" class="global-nav__link">シューズ</a>
            </li>
            <!-- ファッション雑貨-->
            <li class="global-nav__list-item">
              <a href="/saturdays-nyc/product/fashion-accessories/" class="global-nav__link">ファッション雑貨</a>
            </li>
            <!-- 財布/小物-->
            <li class="global-nav__list-item">
              <a href="/saturdays-nyc/product/wallet-accessory/" class="global-nav__link">財布/小物</a>
            </li>
            <!-- 帽子-->
            <li class="global-nav__list-item">
              <a href="/saturdays-nyc/product/hat/" class="global-nav__link">帽子</a>
            </li>
            <!-- 雑貨/ホビー/スポーツ-->
            <li class="global-nav__list-item">
              <a href="/saturdays-nyc/product/zakka-hobby-sports/" class="global-nav__link">雑貨/ホビー/スポーツ</a>
            </li>
            <!-- コスメ/香水-->
            <li class="global-nav__list-item">
              <a href="/saturdays-nyc/product/cosmetics/" class="global-nav__link">コスメ/香水</a>
            </li>
            <!-- 雑誌-->
            <li class="global-nav__list-item">
              <a href="/saturdays-nyc/product/music-books/" class="global-nav__link">雑誌</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <ul class="global-nav__list">
            <li class="global-nav__list-item">
              <a href="/saturdays-nyc/product/?sale=1" class="global-nav__link sale">SALE</a>
            </li>
          </ul>
        </div>

        <div class="global-nav__target">
          <div class="container mgt-sp--40">
            <div class="link-more link-more--icontab">
              <a href="https://outlet.jadore-jun.jp/search?sex=m&bset=BB" target="_blank" class="link-more__text">OUTLET</a>
            </div>
          </div>
          <div class="container mgt-sp--15">
            <div class="link-more link-more--icontab">
              <a href="https://www.saturdaysnyc.co.jp/" target="_blank" class="link-more__text">BRAND SITE</a>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- [/3階層目] =============================================================== -->
  </div>
  <!-- [/global-nav-inner] -->
</nav>

<!-- [/global-nav] -->
<div class="overlay"></div>
<!-- [/overlay] -->
