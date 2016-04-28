@extends('layouts.master')

@section('content')
<main>
    <div id="index-banner" class="parallax-container">

        <div class="section no-pad-bot">
          <div class="container">
            <br><br>
            <h1 class="center red-text accent-3-text lead-title" id="heavy">"My" MVC Web Application</h1>
            <div class="row center">
              <h5 class="col s12 light-blue-text lighten-5-text" id="medium">I'm {{{ $name }}}, and this is my personal site. I created it using Materialize and Angular on the front-end for styling and responsiveness. It also features Laravel on the back-end, for implementing an MVC design pattern. Look around and if you have any questions use the contact link to reach me. Thank you for visiting.</h5>
            </div>
            <br><br>
          </div>
        </div>

        <div class="parallax">
            <img src="/img/keyboard.jpg" id="washout" alt="Unsplashed background-keyboard">
        </div>
    </div>

    <div class="container">
        <div class="section">
            
            <div class="row">
                <div class="col sm12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                    <h5 class="center">About Me</h5>

                    <p class="light">I am a native Texan and 7th generation San Antonio son. This personal page is my way of saying "Hello, let me show you what I have been up to." It is still in development as I carefully craft it feature by feature.</p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">Collaboration</h5>

                        <p class="light">I enjoy working in small to medium sized groups. I feel comfotable in a lead role, but I enjoy being able to support and learn from those around me. The higher value of knowledge is the ability to share and help others with it.</p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                        <h5 class="center">Always learning</h5>

                        <p class="light">One of my best qualities, that applies to me as a developer, is my curiosity and passion to find solutions. This has been a big factor to why coding has had such a big appeal to me, and has fosted a new passion for it. There is so much to know, and even more ways to apply it.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h3 class="header col s12 lead-title">
                        <a class="modal-trigger" href="#modal1">Resume</a>
                    </h3>
                </div>
            </div>
            <div id="modal1" class="modal">
                <div class="modal-content">
                    @include('partials.resume')
                </div>
            </div>
        </div>
        <div class="parallax"><img src="/img/inclass.jpg" alt="Unsplashed background me at Codeup"></div>
    </div>

    <div class="container">
        <div class="section scrollspy" id="contact">
            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Contact Me</h4>
                    <p class="light">Please <a href="mailto:jreyes.satx@gmail.com?Subject=I%20saw%20your%20webpage!" target="_top">email me</a> if you have questions or think I could help you on a project.</p>
                    <p class="light deep-orange-text text-accent-2">eMail Modal comming soon! :)</p>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6">

                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="responsive-img activator" src="/img/furry_tail.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><a href="http://furry-tail-endings.org" target="_blank">Furry-Tail-Endings.org</a><i class="material-icons right">more_vert</i></span>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                <div class="section">
                                    <p class="grey-text text-darken-4">Our final group project at Codeup was creating a portal for pet fosters, that would allow for forums, events, information, and marketing, aiding them through the pet foster process. We were inspired by <a href="http://sanantoniopetsalive.com">San Antonio Pets Alive</a>, and San Antonio's "no kill" status.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col s12 m6">

                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="responsive-img activator" src="/img/gopher_it.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><a href="http://sunrey.github.io" target="_blank">Whack-A-Mole Game</a><i class="material-icons right">more_vert</i></span>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">My GitHub Pages<i class="material-icons right">close</i></span>
                                <div class="section">
                                    <p class="grey-text text-darken-4">A "whack-a-mole" style game made with vanilla JavaScript and jQuery, for a simple grid setup</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="parallax"><img src="/img/php.jpg" id="washout" alt="Unsplashed background php code"></div>
    </div>
</main>

@stop

@section('bottom-script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.scrollspy').scrollSpy();

            $('.modal-trigger').leanModal({
                dismissable: true,
                opcaity: .8
            });



        });
    </script>
@stop