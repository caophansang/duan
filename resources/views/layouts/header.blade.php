<header class="header">

  <div class="header-container">

    <div class="header-trigger">
      <a href="/">
        {{-- <h2>K99</h2> --}}
        <img src="/img/logo.png" class="page-logo">
      </a>
    </div>
    <nav class="header-nav">
      <ul class="header-nav__list">
        @if (Auth::check())
        <li class="header-nav__list-item">
          <div class="header-nav__link">
            <div class="dropdown">
              <button class="dropbtn">
                <div class="user-profile">
                  <img class="avatar" src="{{ Auth::user()->profile_picture }}">
                  <span>&nbsp{{ substr(Auth::user()->name,0,25) }}</span>
                </div>
              </button>
              <div class="dropdown-content">
                <a href="{{ route('admin-products-list') }}" id="modalBtn1"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbspQuản lý bán hàng</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                  <a onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt" aria-hidden="true"></i>&nbspĐăng xuất</a>
                </form>
              </div>
            </div>
          </div>
        </li>
        @else
        <li class="title-center">Trang TMDT Đầu Tiên Tại => Korea</li>
        <li class="header-nav__list-item">
          <div class="header-nav__link js-search-button">
            <a href="{{ route('login') }}" class="btn btn-primary">
              <div class="login-button">&nbsp&nbsp
                <i class="fas fa-sign-in-alt"></i>
                <span class="login-text">&nbspĐăng nhập</span>
              </div>
            </a>
          </div>
        </li>
        @endif
      </ul>
    </nav>
    <!-- [/header-nav] -->

  </div>
  <!-- [/header-container] -->

</header>
<!-- [/header] -->