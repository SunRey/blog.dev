@extends('layouts.master')

@section('content')
<main>
    <div id="index-banner" class="parallax-container">

        <div class="section no-pad-bot">
          <div class="container">
            <br><br>
            <h1 class="header center blue-grey-text text-lighten-2">Hello, this is {{{ $name }}}'s MVC Blog!!!</h1>
            <div class="row center">
              <h5 class="header col s12 light">This site uses the frameworks Laravel, on the back-end, and Bootstrap, on the front-end, to implement a MVC design patter as part of my learning experience at Codeup. Thank you for visiting.</h5>
            </div>
            <div class="row center">
              <a href="#">Link To Angular Soon</a>
            </div>
            <br><br>
          </div>
        </div>

        <div class="parallax">
            <img src="/img/php.jpg" alt="Unsplashed background-keyboard">
        </div>
    </div>

    <div class="container">
        <div class="section">
            
            <div class="row">
                <div class="col sm12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                    <h5 class="center">About Me</h5>

                    <p class="light">I am a native Texan and 7th generation San Antonio son. This personal page is my way of saying 'Hello, let me show you what I have been up to.' I am uaually developing it ever so carefully, piece by piece.</p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">Collaboration</h5>

                        <p class="light">I have enjoyed working in small to medium sized developer groups. I am flexible enough to sometimes take lead or to support the direction of others. You can be a very gifted developer, but it takes many to build a symphony.</p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                        <h5 class="center">Always learning</h5>

                        <p class="light">One of my best qualities that applies to my development career is my courisoity and passion to find answers. This has been a big factor to why coding has had usch a big appeal to me. There is so much to know, and I could never know it all.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">
                        @include('partials.resume')
                    </h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="/img/inclass.jpg" alt="Unsplashed background me at Codeup"></div>
    </div>

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Contact Us</h4>
                    <p class="left-align light">Tee chuta hhat yudd! Goodness gracious me! Artoo Detoowha bo Seethreepiowha ey toota odd mischka Jabba du Hutt. I don't think they're going to let us in, Artoo. We'd better go. Artoo, wait. Oh, dear! Artoo. Artoo, I really don't think we should rush into all this. Oh, Artoo! Artoo, wait for me! Just you deliver Master Luke's message and get us out of here. Oh my! Oh! Oh, no.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="/img/keyboard.jpg" alt="Unsplashed background php code"></div>
    </div>
</main>

@stop

@section('bottom-script')
    
@stop