<nav>
  <div>
    <ul>
      <li>
        <a href="{{{ action('HomeController@showRewrite') }}}">Home</a>
      </li>
      <li>
        <a href="#About">About</a>
      </li>
      <li>
        <a href="{{{ action('PostsController@index') }}}">Blog</a>
      </li>
      <li>
        <a href="#">Portfolio</a>
      </li>
      <li>
        <a href="#contact">Contact</a>
      </li>

      <li>
        <a class="page-scroll red-text accent-3-textv" href="{{{ action('HomeController@getLogin') }}}">Login</a>
      </li>

      <li>
        <a href="{{{ action('HomeController@getLogout') }}}">Logout</a>
      </li>
      <li>
        <a href="{{{ action('PostsController@managePosts') }}} ">Manager</a>
      </li>
    </ul>

  </div>
</nav>