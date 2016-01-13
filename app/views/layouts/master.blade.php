<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/bower_components/normalize-css/normalize.css">

        @yield('top-script')
    </head>
    <body>
        @include('partials.nav-bar')
        
        <div class="container">
            @yield('content')
        </div>
        
        @include('partials.footer')

        <script src="/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        @yield('bottom-script')

    </body>
</html>