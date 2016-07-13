var elixir = require('laravel-elixir');
//require('./elixir-extensions');

elixir(function(mix) {
 mix
     .phpUnit()
     //.compressHtml()

    /**
     * Copy needed files from /node directories
     * to /public directory.
     */
     .copy(
       'node_modules/font-awesome/fonts',
       'public/build/fonts/font-awesome'
     )
     .copy(
         'node_modules/owl.carousel/dist/assets/owl.carousel.css',
         'public/css/vendor/owl.carousel/owl.carousel.css'
     )
     .copy(
         'node_modules/magnific-popup/dist/magnific-popup.css',
         'public/css/vendor/popup'
     )
     .copy(
         'node_modules/social-likes/dist/social-likes_flat.css',
         'public/css/vendor/social-likes'
     )
     .copy(
         'node_modules/social-likes/dist/social-likes.min.js',
         'resources/assets/js/plugin/social-likes'
     )
     .copy(
         'node_modules/magnific-popup/dist/jquery.magnific-popup.min.js',
         'resources/assets/js/plugin/magnific-popup'
     )
     .copy(
       'node_modules/bootstrap-sass/assets/fonts/bootstrap',
       'public/build/fonts/bootstrap'
     )
     .copy(
       'node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
         'public/js/vendor/bootstrap'
     )
     .copy(
         'node_modules/jquery/dist/jquery.min.js',
         'public/js/vendor/jquery'
     )
     .copy(
         'node_modules/HexagonProgress/jquery.hexagonprogress.min.js',
         'resources/assets/js/plugin/hexagonprogress'
     )
     .copy(
         'node_modules/jarallax/jarallax/jarallax.js',
         'resources/assets/js/plugin/jarallax'
     )
     .copy(
         'node_modules/jquery.countdown/dist/jquery.countdown.min.js',
         'resources/assets/js/plugin/jquery.countdown/jquery.countdown.min.js'
     )
     .copy(
         'node_modules/owl.carousel/dist/owl.carousel.min.js',
         'resources/assets/js/plugin/owl.carousel/owl.carousel.min.js'
     )
     .copy(
         'node_modules/smoothscroll-for-websites/Smoothscroll.js',
         'resources/assets/js/plugin/smoothscroll/smoothscroll.js'
     )


     /**
      * Process frontend SCSS stylesheets
      */
     .sass([
        'frontend/app.scss',
        'plugin/sweetalert/sweetalert.scss'
     ], 'resources/assets/css/frontend/app.css')
     .sass([
         'frontend/youplay.scss',
         'plugin/sweetalert/sweetalert.scss'
     ], 'resources/assets/css/frontend/dark.css')

     /**
      * Combine pre-processed frontend CSS files
      */
     .styles([
        'frontend/app.css'
     ], 'public/css/frontend.css')

     .styles([
         'frontend/dark.css'
     ], 'public/css/dark.css')

     /**
      * Combine frontend scripts
      */
     .scripts([
         'plugin/css-shapes-polyfill/shapes-polyfill.min.js',
         'plugin/hexagonprogress/jquery.hexagonprogress.min.js',
         'plugin/jarallax/jarallax.js',
         'plugin/jquery.countdown/jquery.countdown.min.js',
         'plugin/owl.carousel/owl.carousel.min.js',
         'plugin/smoothscroll/smoothscroll.js',
         'plugin/youplay/youplay.min.js',
         'plugin/sweetalert/sweetalert.min.js',
         'plugin/magnific-popup/jquery.magnific-popup.min.js',
         'plugin/social-likes/social-likes.min.js',
         'plugins.js',
         'frontend/app.js'
     ],  'public/js/frontend.js')

     /**
      * Process backend SCSS stylesheets
      */
     .sass([
         'backend/app.scss',
         'backend/plugin/toastr/toastr.scss',
         'plugin/sweetalert/sweetalert.scss'
     ], 'resources/assets/css/backend/app.css')

     /**
      * Combine pre-processed backend CSS files
      */
     .styles([
         'backend/app.css'
     ], 'public/css/backend.css')

     /**
      * Combine backend scripts
      */
     .scripts([
         'plugin/sweetalert/sweetalert.min.js',
         'plugins.js',
         'backend/app.js',
         'backend/plugin/toastr/toastr.min.js',
         'backend/custom.js'
     ], 'public/js/backend.js')

    /**
      * Apply version control
      */
     .version(["public/css/frontend.css", "public/css/dark.css", "public/js/frontend.js", "public/css/backend.css", "public/js/backend.js"]);
});