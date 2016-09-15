<!DOCTYPE html>
<html>
    <head>
        @include('partials.head')
        @yield('top-script')
    </head>
    <body id="page-top">
        @include('partials.nav-bar')
        
        @if(Session::has('errorMessage')) 
            <p class="bg-danger">{{{ Session::get('errorMessage') }}}</p>
        @endif

        @yield('content')
        
        @include('partials.footer')

        {{-- // <script src="/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script> --}}
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="/bower_components/Materialize/dist/js/materialize.min.js" type="text/javascript"></script>
        <script src="/js/init.js"></script>
        <script src="/js/ninja.js"></script>

        @yield('bottom-script')

    </body>
</html>
