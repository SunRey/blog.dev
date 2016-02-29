<nav id="mainNav" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="{{{ action('HomeController@sayHello')}}}"><img class='img-responsive' src="/Brand@0,25x.png" alt="JSR.Blog"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
            <a class="page-scroll" href="#resume">Resume</a>
        </li>
        <li>
            <a class="page-scroll" href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a>
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
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<br><br>

{{-- <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img class='img-responsive' src="/Brand@0,25x.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Resume <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Portfolio</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> --}}