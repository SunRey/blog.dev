<nav class="black" role="navigation">
  <div class="nav-wrapper container">
    <a id="logo-container" href="{{{ action('HomeController@sayHello')}}}" class="brand-logo"><img class='img-responsive' src="/Brand@0,25x.png" alt="JSR.Blog"></a>

    <ul class="right hide-on-med-and-down">
      <li>
        <a class="page-scroll" href="#resume">Resume</a>
      </li>
      <li>
        <a class="page-scroll" href="#contact">Contact</a>
      </li>

    @if(Auth::check())
      <li>
        <a class="page-scroll" href="{{{ action('HomeController@getLogout') }}}">Logout</a>
      </li>
      <li>
        <a class="page-scroll" href="{{{ action('PostsController@managePosts') }}} ">Manager</a>
      </li>
    @else
      <li>
        <a class="page-scroll" href="{{{ action('HomeController@getLogin') }}}">Login</a>
      </li>
    @endif

    </ul>

    <ul id="nav-mobile" class="side-nav">
      <li><a href="#">Navbar Link</a></li>
    </ul>

    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>