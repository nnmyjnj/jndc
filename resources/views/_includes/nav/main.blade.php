<nav class="navbar has-shadow">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item is-paddingless" href="{{route('home')}}">
        <img style="width:134px; height:22px;" src="{{asset('images/devmarketer-logo.png')}}" alt="JNDC logo">
      </a>
      <button class="button navbar-burger">
       <span></span>
       <span></span>
       <span></span>
     </button>
    </div>

    <div class="navbar-menu">
      <div class="navbar-start">
        <a href="#" class="navbar-item is-tab is-active">Learn</a>
        <a href="#" class="navbar-item is-tab">Discuss</a>
        <a href="#" class="navbar-item is-tab">Share</a>
      </div> <!-- end of .navbar-start -->

    <div class="navbar-end nav-menu" style="overflow: visible">
      @guest
        <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
        <a href="{{ route('register') }}" class="navbar-item is-tab">Join the Community</a>
      @else
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">{{ Auth::user()->name }}</a>
          <div class="navbar-dropdown is-right">
            <a href="#" class="navbar-item"><span class="icon"><i class="fa fa-fw fa-user-circle-o m-r-5"></i></span>Profile</a>
            <a href="#" class="navbar-item"><span class="icon"><i class="fa fa-fw m-r-5 fa-bell"></i></span>Notifications</a>
            <a href="{{route('manage.dashboard')}}" class="navbar-item"><span class="icon"><i class="fa fa-fw m-r-5 fa-cog"></i></span>Manage</a>
            <hr class="navbar-divider">
            <a href="{{ route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                  <span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>
                  Logout</a>
                  @include('_includes.forms.logout')
          </div>
        </div>
      @endguest
    </div>
  </div>

  </div>
</nav>
