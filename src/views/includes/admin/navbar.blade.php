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
          <a class="nav-link" href="{{ route($adminRouteName . 'welcome') }}">
            Home
          </a>
        </li>
        @guest('admin')
          <li class="nav-item">
            <a class="nav-link" href="{{ route($adminRouteName . 'login') }}">
              Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route($adminRouteName . 'register') }}">
              Register
            </a>
          </li>
        @endguest
        @auth('admin')
          <li class="dropdown nav-item">
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="javascript:void(0)" role="button">
              {{ Auth::guard('admin')->user()->name }}
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route($adminRouteName . 'welcome') }}">
                Profile
              </a>
              <a class="dropdown-item" href="{{ route($adminRouteName . 'welcome') }}">
                Account
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route($adminRouteName . 'admins.index') }}">
                Admins
              </a>
              <a class="dropdown-item" href="{{ route($adminRouteName . 'contacts.index') }}">
                Contacts
              </a>
              <a class="dropdown-item" href="{{ route($adminRouteName . 'translations.index') }}">
                Translations
              </a>
              <a class="dropdown-item" href="{{ route($adminRouteName . 'users.index') }}">
                Users
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route($adminRouteName . 'logout') }}">
                Logout
              </a>
            </div>
          </li>
        @endauth
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" placeholder="Search" type="search" />
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
          Search
        </button>
      </form>
    </div>
  </div>
</nav>
