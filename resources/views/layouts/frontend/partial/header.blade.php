<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="{{ ('/')}}" class="scrollto">{{ config('app.name') }}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#about">{{ __('FreeGames')}}</a></li>
          @if(Auth::check())
            <li><a href="{{ route('admin.subscriptions.create')}}">{{ __('Join VIP')}}</a></li>
          @endif
          @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>

          @else
          <li class="menu-has-children"><a href="">{{ Auth::user()->name }}</a>
            <ul>
             @can('edit-user')
             <li><a href="{{route('home')}}">{{ __('Dashboard')}}</a></li>
             @endcan
              <li><a href="{{route('admin.profile', Auth::user()->id)}}">{{ __('Premium Predictions')}}</a></li>
              <li><a href="{{route('strategy')}}">{{ __('Strategy')}}</a></li>
              <li class="menu-has-children">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>            
            </ul>
          </li>
          @endguest
          <li><a href="#contact">{{ __('Contact Us')}}</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
