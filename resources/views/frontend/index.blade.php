@extends('frontend.layouts.master')

@section('before-styles-end')

{!! Html::style('css/vendor/popup/magnific-popup.css') !!}
        {!! Html::style('css/vendor/social-likes/social-likes_flat.css') !!}

@endsection

@section('content')

        <!-- Banner -->
<section class="youplay-banner banner-top youplay-banner-parallax">
    <div class="image" style="background-image: url('/img/banner-bg.jpg')">
    </div>

    <div class="info">
        <div>
            <div class="container">
                <h2>Coming soon: <br>The lone Star App</h2>
                <em>"Our custom build web platform"</em>
                <br>
                <br>
                <br>
                <a class="btn btn-lg" href="#!">Learn More!</a>
            </div>
        </div>
    </div>
</section>
<!-- /Banner -->
<!-- Images With Text -->
<div class="youplay-carousel" data-autoplay="5000">
    <a class="angled-img" href="store-product-1.html">
        <div class="img">
            <img src="/img/game-bloodborne-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4>Bloodborne</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="angled-img" href="#!">
        <div class="img">
            <img src="/img/game-dark-souls-ii-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4>Dark Souls II</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="angled-img" href="#!">
        <div class="img">
            <img src="/img/game-lords-of-the-fallen-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4>Lords of the Fallen</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="angled-img" href="#!">
        <div class="img">
            <img src="/img/game-middle-eart-shadow-of-mordor-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4>Middle-earth: Shadow of Mordor</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="angled-img" href="#!">
        <div class="img">
            <img src="/img/game-soul-sacrifice-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4>Soul Sacrifice</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="angled-img" href="#!">
        <div class="img">
            <img src="/img/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4>Kingdoms of Amalur: Reckoning</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="angled-img" href="#!">
        <div class="img">
            <img src="/img/game-the-witcher-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4>The Witcher: Rise of the White Wolf</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="angled-img" href="#!">
        <div class="img">
            <img src="/img/game-diablo-iii-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4>Diablo III: Reaper of Souls</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="angled-img" href="#!">
        <div class="img">
            <img src="/img/game-dragons-dogma-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4>Dragons Dogma</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<!-- /Images With Text -->
<!-- Popular -->
<h2 class="container h1">Popular <a href="#!" class="btn pull-right">See More</a></h2>
<div class="youplay-carousel">
    <a class="angled-img" href="#!">
        <div class="img">
            <img src="/img/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4>Kingdoms of Amalur: Reckoning</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="angled-img" href="#!">
        <div class="img">
            <img src="/img/game-the-witcher-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4>The Witcher: Rise of the White Wolf</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="angled-img" href="#!">
        <div class="img">
            <img src="/img/game-diablo-iii-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4>Diablo III: Reaper of Souls</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="angled-img" href="#!">
        <div class="img">
            <img src="/img/game-dragons-dogma-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4>Dragons Dogma</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<!-- /Popular -->

<!-- Specials -->
<h2 class="container h1">Specials <a href="#!" class="btn pull-right">See More</a></h2>
<div class="youplay-carousel">
    <a class="angled-img" href="#!">
        <div class="img img-offset">
            <img src="/img/game-dark-souls-ii-500x375.jpg" alt="">
            <div class="badge bg-default">
                -20%
            </div>
        </div>
        <div class="bottom-info">
            <h4>Dark Souls II</h4>
            <div class="row">
                <div class="col-xs-6">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="price">$39.99 <sup><del>$49.99</del></sup>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="angled-img" href="#!">
        <div class="img img-offset">
            <img src="/img/game-lords-of-the-fallen-500x375.jpg" alt="">
            <div class="badge bg-default">
                -25%
            </div>
        </div>
        <div class="bottom-info">
            <h4>Lords of the Fallen</h4>
            <div class="row">
                <div class="col-xs-6">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="price">$26.25 <sup><del>$35.00</del></sup>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="angled-img" href="#!">
        <div class="img img-offset">
            <img src="/img/game-dragons-dogma-500x375.jpg" alt="">
            <div class="badge bg-default">
                -30%
            </div>
        </div>
        <div class="bottom-info">
            <h4>Dragons Dogma</h4>
            <div class="row">
                <div class="col-xs-6">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="price">$34.99 <sup><del>$49.99</del></sup>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="angled-img" href="#!">
        <div class="img img-offset">
            <img src="/img/game-soul-sacrifice-500x375.jpg" alt="">
            <div class="badge bg-success">
                -100%
            </div>
        </div>
        <div class="bottom-info">
            <h4>Soul Sacrifice</h4>
            <div class="row">
                <div class="col-xs-6">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="price"><span class="text-success">FREE!</span>  <sup><del>$29.99</del></sup>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<!-- /Specials -->


<!-- Preorder -->
<div class="h2"></div>
<section class="youplay-banner youplay-banner-parallax small">
    <div class="image" style="background-image: url('/img/home-platform-areas.png');">
    </div>

    <div class="info container align-center">
        <div>
            <h2>Lone Star Warriors:<br> Web Platform</h2>

            <!-- See countdown init in bottom of the page -->
            <div class="countdown h2" data-end="2016/06/20"></div>

            <br>
            <br>
            <a class="btn btn-lg" href="#!">Learn more</a>
        </div>
    </div>
</section>
<!-- /Preorder -->


<!-- Latest News -->
<h2 class="container h1">Latest News</h2>
<section class="youplay-news container">
    <!-- Single News Block -->
    <div class="news-one row vertical-gutter">
        <div class="col-md-4">
            <a href="blog-post-1.html" class="angled-img">
                <div class="img">
                    <img src="/img/game-bloodborne-500x375.jpg" alt="">
                </div>
                <div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="9.1 out of 10"><span>9.1</span>
                </div>
            </a>
        </div>
        <div class="col-md-8">
            <div class="clearfix">
                <h3 class="h2 pull-left m-0"><a href="blog-post-1.html">Bloodborne - First Try!</a></h3>
                <span class="date pull-right"><i class="fa fa-calendar"></i> Today</span>
            </div>
            <div class="tags">
                <i class="fa fa-tags"></i>  <a href="#">Bloodborne</a>, <a href="#">first try</a>, <a href="#">first boss problem</a>, <a href="#">newbie game</a>
            </div>
            <div class="description">
                <p>
                    Gus sit amet suum motum. Nescio quando, aut quomodo, nescio quo. Illud scio, amet tortor. Suarum impotens prohibere eum.
                </p>
                <p>
                    Sum expectantes. Ego hodie expectantes. Expectantes, et misit unum de pueris Gus interficere. Et suus vos. Nescio quis, qui est bonus usus liberi ad Isai? Qui nosti ... Quis dimisit filios ad necem ... hmm? Gus!
                </p>
            </div>
            <a href="blog-post-1.html" class="btn read-more pull-left">Read More</a>
        </div>
    </div>
    <!-- /Single News Block -->

    <!-- Single News Block -->
    <div class="news-one row vertical-gutter">
        <div class="col-md-4">
            <a href="blog-post-2.html" class="angled-img">
                <div class="img">
                    <img src="/img/game-dark-souls-ii-500x375.jpg" alt="">
                </div>
                <div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="9 out of 10"><span>9</span>
                </div>
            </a>
        </div>
        <div class="col-md-8">
            <div class="clearfix">
                <h3 class="h2 pull-left m-0"><a href="blog-post-2.html">Coming to Youplay - Dark Souls II</a></h3>
                <span class="date pull-right"><i class="fa fa-calendar"></i> March 9, 2015</span>
            </div>
            <div class="tags">
                <i class="fa fa-tags"></i>  <a href="#">Dark Souls II</a>, <a href="#">coming soon</a>, <a href="#">first review</a>, <a href="#">sale date</a>
            </div>
            <div class="description">
                Ille vivere. Ut ad te quaerebam ... purgare caeli. Sunt uh ... nonnullus propter errorem qui de rebus inter nos et iacere puto suus in causa, id est in mensa. Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium.
            </div>
            <a href="blog-post-2.html" class="btn read-more pull-left">Read More</a>
        </div>
    </div>
    <!-- /Single News Block -->

    <!-- Single News Block -->
    <div class="news-one row vertical-gutter">
        <div class="col-md-4">
            <a href="blog-post-3.html" class="angled-img">
                <div class="img">
                    <img src="/img/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
                </div>
                <div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="3.8 out of 10"><span>3.8</span>
                </div>
            </a>
        </div>
        <div class="col-md-8">
            <div class="clearfix">
                <h3 class="h2 pull-left m-0"><a href="blog-post-3.html">Review Kingdoms of Amalur</a></h3>
                <span class="date pull-right"><i class="fa fa-calendar"></i> March 1, 2015</span>
            </div>
            <div class="tags">
                <i class="fa fa-tags"></i>  <a href="#">Kingdoms of Amalur</a>, <a href="#">game</a>, <a href="#">review</a>
            </div>
            <div class="description">
                Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum
                duo te mihi videtur.
            </div>
            <a href="blog-post-3.html" class="btn read-more">Read More</a>
        </div>
    </div>
    <!-- /Single News Block -->
</section>
<!-- /Latest News -->


<!-- Partners -->
<section class="youplay-banner youplay-banner-parallax small mt-80">
    <div class="image" style="background-image: url('/img/Providence.dark.svg');">
    </div>

    <div class="info align-center">
        <div>
            <h2 class="mb-40">Partners</h2>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="owl-carousel" data-autoplay="6000">
                        <div class="item">
                            <a href="#">
                                <img src="/img/partner-logo-1.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/img/partner-logo-2.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/img/partner-logo-3.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/img/partner-logo-4.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/img/partner-logo-5.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/img/partner-logo-6.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/img/partner-logo-7.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/img/partner-logo-8.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Partners -->


<!-- Features -->
<h2 class="container h1">Why Buy from Us</h2>
<section class="youplay-features container">
    <div class="col-md-3 col-sm-6">
        <a class="feature angled-bg" href="#">
            <i class="fa fa-cc-visa"></i>
            <h3>Payment</h3>
            <small>More than 10 payment systems</small>
        </a>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="feature angled-bg">
            <i class="fa fa-gamepad"></i>
            <h3>Games</h3>
            <small>A large number of games</small>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="feature angled-bg">
            <i class="fa fa-money"></i>
            <h3>Cheap</h3>
            <small>Lowest prices on the Internet</small>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="feature angled-bg">
            <i class="fa fa-users"></i>
            <h3>Community</h3>
            <small>The largest gaming community</small>
        </div>
    </div>

    <div class="container youplay-news youplay-post">

        <div class="col-md-9">
            <!-- Post Info -->
            <article class="news-one">

                <!-- Post Text -->
                <div class="description">
                    <a href="https://www.youtube.com/watch?v=1nKW9kTjsps" class="angled-img pull-left video-popup">
                        <div class="img">
                            <img src="/img/game-bloodborne-500x375.jpg" alt="">
                        </div>
                        <i class="fa fa-play icon"></i>
                    </a>
                    <p>
                        Jackson Isai? Tu quoque ... A te quidem a ante. Vos scitis quod blinking res Ive 'been vocans super vos? Et conteram illud, et conteram hoc. Maledicant druggie excors. Iam hoc tu facere conatus sum ad te in omni tempore?
                    </p>

                    <p>
                        Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus. Qui curis! Modo nobis certamen est, qui non credunt at.
                    </p>

                    <p>
                        Nonne vides quid sit? Tu es ... Jesse me respice. Tu ... blowfish sunt. A blowfish! Cogitare. Statura pusillus, nec sapientium panem, nec artificum. Sed predators facile prædam blowfish secretum telum non se habet. Non ille? Quid faciam blowfish, Isai.
                        Blowfish quid faciat? In blowfish inflat, purus?
                    </p>

                    <p>
                        Blowfish librantur in se quatuor, quinquies maior quam normalis, et quare? Quare id faciam? Ut terrorem facit, qui quid. Terrent! Ut alter, scarier pisces agminis off. Et quod tu es? Vos blowfish. Tu iustus in omnibus visio. Vides ... suus ' suus 'non
                        aliud aerem. Nunc ... qui cum partibus blowfish Isai? Tu damnare ius. Vos blowfish. Dicere iterum. Dicere illam quasi velis eam. Es BLOWFISH!
                    </p>

                    <p>
                        Ut sibi fuerat socius sagittis. Ego intervenerit. Vere quia a te nuper iratus occidit illos undecim annorum puer. Deinde, si hoc forte qui fuit imperavit.
                    </p>
                </div>
                <!-- /Post Text -->

                <!-- Post Share -->
                <div class="btn-group social-list social-likes" data-counters="no">
                    <span class="btn btn-default facebook" title="Share link on Facebook"></span>
                    <span class="btn btn-default twitter" title="Share link on Twitter"></span>
                    <span class="btn btn-default plusone" title="Share link on Google+"></span>
                </div>
                <!-- /Post Share -->
            </article>
            <!-- /Post Info -->
        </div>

@endsection