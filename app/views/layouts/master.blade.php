<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <!-- Compressed CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.1/foundation.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <!-- Compressed JavaScript -->
        <script src="https://cdn.jsdelivr.net/foundation/6.1.1/foundation.min.js"></script>
        @yield('top-script')
    </head>
    <body>
        @include('partials.nav-bar')
        
        @yield('content')

        
        @yield('bottom-script')

        @include('partials.footer')
    </body>
</html>