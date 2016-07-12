<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{ csrf_token() }}" />

        <title>@yield('title', app_name())</title>

        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        <!-- Styles -->
        {!! Html::style('css/vendor/owl.carousel/owl.carousel.css') !!}
        @yield('before-styles-end')
        {!! Html::style(elixir('css/frontend.css')) !!}
        {!! Html::style(elixir('css/dark.css')) !!}
        @yield('after-styles-end')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    </head>
    <body>
        @include('includes.partials.logged-in-as')
        @include('frontend.includes.nav')

        <section class="content-wrap">
            @include('includes.partials.messages')
            @yield('content')


        <footer class="youplay-footer-parallax">
            <div class="wrapper" style="background-image: url('/img/banners/footer-bg.jpg')">
                <div class="social">
                    <div class="container">
                        <h3>Connect socially with <strong>Lone Star</strong></h3>

                        <div class="row icons">
                            <div class="col-xs-6 col-sm-3">
                                <a href="https://www.facebook.com/lonestarwarriorsgaming/">
                                    <i class="fa fa-facebook-square"></i>
                                    <span>Like on Facebook</span>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <a href="https://twitter.com/lone_warriors">
                                    <i class="fa fa-twitter-square"></i>
                                    <span>Follow on Twitter</span>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <a href="https://plus.google.com/+Lonestarwarriorsgaming/">
                                    <i class="fa fa-google-plus-square"></i>
                                    <span>Follow on Google+</span>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <a href="https://www.youtube.com/c/lonestarwarriorsgaming">
                                    <i class="fa fa-youtube-square"></i>
                                    <span>Watch on Youtube</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        Copyright &copy; 2016 <strong>JP IT</strong>. SOME RIGHTS RESERVED<br>
                        <h6>EVE Online and the EVE logo are the registered trademarks of CCP hf. All rights are reserved worldwide. All other trademarks are the property of their respective owners. EVE Online, the EVE logo, EVE and all associated logos and designs are the intellectual property of CCP hf. All artwork, screenshots, characters, vehicles, storylines, world facts or other recognizable features of the intellectual property relating to these trademarks are likewise the intellectual property of CCP hf. CCP hf. has granted permission to JP IT to use EVE Online and all associated logos and designs for promotional and information purposes on its website but does not endorse, and is not in any way affiliated with, JP IT. CCP is in no way responsible for the content on or functioning of this website, nor can it be liable for any damage arising from the use of this website.</h6>
                    </div>
                </div>
            </div>
        </footer>
        </section><!-- Section -->

        <!-- Scripts -->
        {!! Html::script('js/vendor/jquery/jquery.min.js') !!}
        {!! Html::script('js/vendor/bootstrap/bootstrap.min.js') !!}

        @yield('before-scripts-end')
        {!! Html::script(elixir('js/frontend.js')) !!}
        @yield('after-scripts-end')

        <script>
            if(typeof youplay !== 'undefined') {
                youplay.init({
                    smoothscroll: false,
                });
            }
        </script>

        @include('includes.partials.ga')
    </body>
</html>