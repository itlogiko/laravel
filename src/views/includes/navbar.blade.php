<nav class="bg-light fixed-top navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route($routeName . 'welcome') }}">
      {{ config('app.name') }}
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="mr-auto navbar-nav">
        <li class="active nav-item">
          <a class="nav-link" href="{{ route($routeName . 'welcome') }}">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route($routeName . 'contact') }}">
            Contact
          </a>
        </li>
        @guest    
          <li class="nav-item">
            <a class="nav-link" href="{{ route($routeName . 'login') }}">
              Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route($routeName . 'register') }}">
              Register
            </a>
          </li>
        @endguest
        @auth    
          <li class="dropdown nav-item">
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="javascript:void(0)" role="button">
              {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route($routeName . 'welcome') }}">
                Profile
              </a>
              <a class="dropdown-item" href="{{ route($routeName . 'welcome') }}">
                Account
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route($routeName . 'logout') }}">
                Logout
              </a>
            </div>
          </li>
        @endauth
        <li class="nav-item">
          <a class="nav-link" href="{{ route($adminRouteName . 'welcome') }}">
            Admin
          </a>
        </li>
      </ul>
      <form action="{{ route($routeName . 'locale') }}" class="form-inline my-2 my-lg-0" method="POST" name="locale">
        @csrf
        @method('POST')
        <select class="form-control" name="locale" onchange="document.locale.submit()">
          <option value=""></option>
          @foreach ($locales as $localeName => $localeValue)
            <option
              @if($localeValue === config('app.locale'))
                selected
              @endif
              value="{{ $localeValue }}"
            >
              {{ $localeName }}
            </option>
          @endforeach
        </select>
      </form>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" placeholder="Search" type="search" />
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
          Search
        </button>
      </form>
    </div>
  </div>
</nav>
