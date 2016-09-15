<!DOCTYPE html>
<html>
    <head>
        @include('partials.head_rewrite')
        @yield('top-script')
    </head>
    <body id="page-top">
    @include('partials.nav-rewrite')

    @if(Session::has('errorMessage'))
        <p>{{{ Session::get('errorMessage') }}}</p>
    @endif

    @yield('content')

    @include('partials.footer-rewrite')

    {{-- // <script src="/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script> --}}
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    {{--<script src="/bower_components/Materialize/dist/js/materialize.min.js" type="text/javascript"></script>--}}
    {{--<script src="/js/init.js"></script>--}}
    <script src="/js/ninja.js"></script>

    @yield('bottom-script')

    </body>
</html>