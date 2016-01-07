<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="{{asset("vendor\zurb\foundation\dist\foundation.css")}}">

        @yield('top-script')
    </head>
    <body>
        @include('partials.nav-bar')
        
        @yield('content')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        @yield('bottom-script')

        @include('partials.footer')
    </body>
</html>