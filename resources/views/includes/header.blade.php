<header>
    <ul class="nav nav-pills bg-dark p-3">
        <li class="nav-item">
          <a class="nav-link text-white {{ request()->routeIs('home') ? 'active' : ''}}" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ request()->routeIs('travels.*') ? 'active' : ''}}" href="{{ route('travels.index') }}">Travels</a>
        </li>
      </ul>
</header>