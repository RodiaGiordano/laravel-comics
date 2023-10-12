<div class="header_wrapper">
    <img src="{{ Vite::asset('public\images\dc-logo.png')}}" alt="" />
    <ul>
        <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'single' ? 'active' : ''}}" href="{{route('single')}}">Single</a>
          </li>
    </ul>
  </div>

