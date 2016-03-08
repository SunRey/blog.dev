<nav class="blue-grey darken-3" role="navigation">
  <div class="nav-wrapper container">
    <a id="logo-container" href="{{{ action('HomeController@sayHello')}}}" class="brand-logo"><img class='img-responsive' src="/Brand@0,25x.png" alt="JSR.Blog"></a>

    <ul class="right hide-on-med-and-down">
      <li>
        <a class="page-scroll red-text text-accent" href="#resume">Resume</a>
      </li>
      <li>
        <a class="page-scroll red-text text-accent" href="#contact">Contact</a>
      </li>
      <li>
        <a class="page-scroll red-text text-accent" href="{{{ action('PostsController@index') }}}">Blog</a>
      </li>

    @if(Auth::check())
      <li>
        <a class="page-scroll red-text text-accent" href="{{{ action('HomeController@getLogout') }}}">Logout</a>
      </li>
      <li>
        <a class="page-scroll red-text text-accent" href="{{{ action('PostsController@managePosts') }}} ">Manager</a>
      </li>
    @else
      <li>
        <a class="page-scroll red-text text-accent" href="{{{ action('HomeController@getLogin') }}}">Login</a>
      </li>
    @endif

    </ul>

    <ul id="nav-mobile" class="side-nav blue-grey darken-3">
      <li>
        <a class="page-scroll red-text text-accent" href="#resume">Resume</a>
      </li>
      <li>
        <a class="page-scroll red-text text-accent" href="#contact">Contact</a>
      </li>
      <li>
        <a class="page-scroll red-text text-accent" href="{{{ action('PostsController@index') }}}">Blog</a>
      </li>

    @if(Auth::check())
      <li>
        <a class="page-scroll red-text text-accent" href="{{{ action('HomeController@getLogout') }}}">Logout</a>
      </li>
      <li>
        <a class="page-scroll red-text text-accent" href="{{{ action('PostsController@managePosts') }}} ">Manager</a>
      </li>
    @else
      <li>
        <a class="page-scroll red-text text-accentv" href="{{{ action('HomeController@getLogin') }}}">Login</a>
      </li>
    @endif
    </ul>

    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons red-text text-accent">menu</i></a>
  </div>
</nav>