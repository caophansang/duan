<header class="header white">

  <div class="header-container">
{{--     <div class="header-trigger">
      <span></span>
      <span></span>
    </div> --}}
    
    <div class="header-trigger">
      <a href="/">
        <img src="/img/logo.png" class="img-logo">
      </a>
    </div>
    <!-- [/header-trigger] -->

    <nav class="header-nav nav1">
      <ul class="header-nav__list">
        @if (Auth::check())
        <li class="header-nav__list-item">
          <div class="header-nav__link">
            <div class="dropdown">
              <button class="dropbtn">
                <div class="user-profile">
                    <img class="avatar" src="{{ Auth::user()->profile_picture }}">
                    <span>&nbsp{{ substr(Auth::user()->name,0,12) }}</span>
                </div>
              </button>
              <div class="dropdown-content">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                  <a  onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><i class="fab fa-sign-out" aria-hidden="true"></i>&nbspĐăng xuất</a>
                </form>
              </div>
            </div>
          </div>
        </li>
        @else
          <li class="header-nav__list-item">
            <div class="header-nav__link js-search-button">
                <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-primary">
                  <div class="login-button">&nbsp&nbsp
                      <i class="fab fa-facebook"></i>
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
