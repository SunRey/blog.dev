<nav class="blue-grey darken-3" role="navigation">
  <div class="nav-wrapper container">
    <a href="{{{ action('HomeController@sayHello')}}}" class="brand-logo"><img class='img-responsive' id="logo-container" src="/small_logo.jpg" alt="JSR.Blog"></a>

    <ul class="right hide-on-med-and-down">
      <li>
        <a class="page-scroll red-text accent-3-text" href="http://alumni.codeup.com/uploads/146-1457722729.pdf" target="_blank">Resume</a>
      </li>
      <li>
        <a class="page-scroll red-text accent-3-text" href="#contact">Contact</a>
      </li>
      <li>
        <a class="page-scroll red-text accent-3-text" href="{{{ action('PostsController@index') }}}" hidden>Blog</a>
      </li>

    @if(Auth::check())
      <li>
        <a class="page-scroll red-text accent-3-text" href="{{{ action('HomeController@getLogout') }}}">Logout</a>
      </li>
      <li>
        <a class="page-scroll red-text accent-3-text" href="{{{ action('PostsController@managePosts') }}} ">Manager</a>
      </li>
    @else
      <li>
        <a class="page-scroll red-text accent-3-text" href="{{{ action('HomeController@getLogin') }}}">Login</a>
      </li>
    @endif

    </ul>

    <ul id="nav-mobile" class="side-nav blue-grey darken-3">
      <li>
        <a class="page-scroll red-text accent-3-text" href="http://alumni.codeup.com/uploads/146-1457722729.pdf" target="_blank">Resume</a>
      </li>
      <li>
        <a class="page-scroll red-text accent-3-text" href="#contact">Contact</a>
      </li>
      <li>
        <a class="page-scroll red-text accent-3-text" href="{{{ action('PostsController@index') }}}">Blog</a>
      </li>

    @if(Auth::check())
      <li>
        <a class="page-scroll red-text accent-3-text" href="{{{ action('HomeController@getLogout') }}}">Logout</a>
      </li>
      <li>
        <a class="page-scroll red-text accent-3-text" href="{{{ action('PostsController@managePosts') }}} ">Manager</a>
      </li>
    @else
      <li>
        <a class="page-scroll red-text accent-3-textv" href="{{{ action('HomeController@getLogin') }}}">Login</a>
      </li>
    @endif
    </ul>

    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons red-text accent-3-text">menu</i></a>
  </div>
</nav>