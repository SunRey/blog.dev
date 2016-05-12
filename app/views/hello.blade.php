@extends('layouts.master')

@section('content')
<main>
    <div id="index-banner" class="parallax-container valign-wrapper">

        <div class="section no-pad-bot valign">
            <div class="container">
                <div class="row center">
                    <div class="col s4 m4">
                        <img src="/img/codeup-shot-sml.jpg" alt="It's me" class="circle responsive-img">
                    </div>
                    <div class="col s8 m8">
                        <h5 class="light-blue-text lighten-5-text flow-text" id="medium">This is my personal MVC web application. I created it using the frameworks Materialize and Angular, on the front-end, for styling and responsiveness. Using Laravel on the back-end, I implement an MVC design pattern. Look around and if you have any questions use the contact link to reach me. Thank you for visiting.</h5>
                    </div>
                </div>
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
                        <h2 class="center brown-text"><i class="material-icons">account_circle</i></h2>
                        <p class="light">I am from San Antonio, and can trace back my roots through 7 generations here. My background in is retail, customer service, and management. I look forward to leverage this knowledge in a development environment. From my attention to detail to working well in groups, I dedicated to honing my craft.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">code</i></h2>
                        <p class="light">I am a resourceful problem solver who puts a premium on well written code. I enjoy the challenges coding has allowed me to solve, and bringing that outlook towards many aspects in my life. Helping others and learning from others goes hand in hand, and I am a firm believer that together we can do more.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">fingerprint</i></h2>
                        <p class="light">One of my best qualities, that applies to me as a developer, is my curiosity and passion to find solutions. This has been a big factor to why coding has had such a big appeal to me, and why it fosters a passion in me. There is so much to know, and even more ways to apply it.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="parallax-container valign-wrapper">
            <div class="parallax">
                <img src="/img/inclass.jpg" alt="Unsplashed background me at Codeup">
            </div>
    </div>

    <div class="container">
        <div class="section scrollspy" id="contact">
            <div class="row">

                <div class="col s12 m6 center">
                    <h3><i class="material-icons brown-text medium">send</i></h3>
                    <h4>Contact Me</h4>
                    <p class="light">Please <a href="mailto:jreyes.satx@gmail.com?Subject=I%20saw%20your%20webpage!" target="_top">email me</a> if you have questions or think I could help you on a project.</p>
                    <p class="light deep-orange-text text-accent-2">eMail Modal comming soon! :)</p>
                </div>

                <div class="col s12 m6 center">
                    <h3><i class="material-icons brown-text medium">description</i></h3>
                    <h4>
                        <a class="modal-trigger link" href="#modal1">Resume</a>
                    </h4>
                </div>
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        @include('partials.resume')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-container valign-wrapper">
        <div class="parallax">
            <img src="/img/php.jpg" id="washout" alt="Unsplashed background php code">
        </div>
    </div>

    <div class="container">
        <div class="section no-pad-bot">
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