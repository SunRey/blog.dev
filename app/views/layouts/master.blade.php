<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="description" content="Jonathan Reyes - MVC Portfolio">
        <meta name="author" content="JoNathan">

        <meta name="csrf-token" content="{{{ csrf_token() }}}">

        <title>Jonathan Reyes's Developer Site</title>

        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="stylesheet" href="/bower_components/Materialize/dist/css/materialize.min.css" type="text/css">
        <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css" type="text/css">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        @yield('top-script')

    </head>
    <body id="page-top">
        @include('partials.nav-bar')
        
        @if(Session::has('errorMessage')) 
            <p class="bg-danger">{{{ Session::get('errorMessage') }}}</p>
        @endif

        @yield('content')
        
        @include('partials.footer')

        <script src="/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="/bower_components/Materialize/dist/js/materialize.min.js" type="text/javascript"></script>

        @yield('bottom-script')

    </body>
</html>