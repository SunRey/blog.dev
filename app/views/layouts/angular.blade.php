<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Jonathan Reyes - MVC Portfolio">
        <meta name="author" content="JoNathan">
        <meta name="csrf-token" content="{{{ csrf_token() }}}">

        <title>Jonathan Reyes's Developer Site</title>

        <link rel="stylesheet" href="/bower_components/bootstrap-css/css/bootstrap.min.css" type="text/css">

        <link rel="stylesheet" href="/bower_components/angular-material/angular-material.min.css" type="text/css">

        <link rel="stylesheet" href="/bower_components/normalize-css/normalize.css">

        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        @yield('top-script')

    </head>
    <body ng-app='blogIndex' layout="column">
        @include('partials.angular-nav')
        
        @if(Session::has('errorMessage')) 
            <p class="bg-danger">{{{ Session::get('errorMessage') }}}</p>
        @endif

        @yield('content')
        
        

        <script src="/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="/bower_components/angular/angular.min.js" type="text/javascript"></script>
        <script src="/bower_components/angular-animate/angular-animate.min.js" type="text/javascript"></script>
        <script src="/bower_components/angular-aria/angular-aria.min.js" type="text/javascript"></script>
        <script src="/bower_components/angular-material/angular-material.min.js" type="text/javascript"></script>
        <script src="/js/blogIndex.js"></script>


        
        @yield('bottom-script')

    </body>
</html>