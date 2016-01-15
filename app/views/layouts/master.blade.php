<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{{ csrf_token() }}}">

        <title></title>

        <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" type="text/css">

        <link rel="stylesheet" href="/bower_components/normalize-css/normalize.css">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css" type="text/css">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="/css/animate.min.css" type="text/css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="/css/creative.css" type="text/css">


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

        <script src="/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- Plugin JavaScript -->
        <script src="/js/jquery.easing.min.js"></script>
        <script src="/js/jquery.fittext.js"></script>
        <script src="/js/wow.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="/js/creative.js"></script>
        
        @yield('bottom-script')

    </body>
</html>