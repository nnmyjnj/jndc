<nav class="navbar has-shadow">
  <div class="container">
    <div class="navbar-start">

      <a class="navbar-item" href="{{route('home')}}">
        <img style="width:134px; height:22px;" src="{{asset('images/devmarketer-logo.png')}}" alt="JNDC logo">
      </a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
    </div>

    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>

    <div class="navbar-end">
      <a class="nav-item is-tab is-hidden-tablet is-active">Learn</a>
      <a class="nav-item is-tab is-hidden-tablet">Discuss</a>
      <a class="nav-item is-tab is-hidden-tablet">Share</a>
      @if(Auth::guest())
        <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
        <a href="{{ route('register') }}" class="navbar-item is-tab">Join the Community</a>
      @else
        <div class="dropdown m-t-10">
          <div class="dropdown-trigger">
            <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
              <span>{{ Auth::user()->name }} &nbsp;<span class="icon"><i class="fa fa-caret-down"></i></span></span>
            </button>
          </div>
          <ul class="dropdown-menu" id="dropdown-menu" role="menu" style="margin-top:-6px:">
            <li><a href="#"><span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>Profile</a></li>
            <li><a href="#"><span class="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>Notifications</a></li>
            <li><a href="{{route('manage.dashboard')}}"><span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>Manage</a></li>
            <li class="seperator"></li>
            <li><a href="{{ route('logout')}}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                  <span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>
                  Logout</a>
                  @include('_includes.forms.logout')
            </li>

          </ul>
</div>
      @endif
    </div>
  </div>
</nav>
