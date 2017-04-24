<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>BSQRD TV</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app">
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/img/bsqrd/cornerlogo.png') }}"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home" class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>
                    <li><a a target="_blank" href="https://www.twitch.tv/teambsqrd" class="smoothScroll">Twitch</a></li>
                    <li><a href="#desc" class="smoothScroll">About</a></li>
                    <li><a href="#showcase" class="smoothScroll">Commissions</a></li>
                    <li><a href="#contact" class="smoothScroll">{{ trans('adminlte_lang::message.contact') }}</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <!--<li><a href="#">{{ trans('adminlte_lang::message.login') }}</a></li>-->
                        <!--<li><a href="#">{{ trans('adminlte_lang::message.register') }}</a></li>-->
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home">
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                        <a a target="_blank" href="https://www.twitch.tv/teambsqrd"><img src="{{ asset('/img/bsqrd/BSQRDSiteLogo.png') }}"></a>
                    </div>
                </div>
                <div class="row centered row-eq-height">
                    <div class="col-lg-2">

                        <!--<h5>Spoopy</h5>-->
                        <!--<p></p>-->
                        <img class="hidden-xs hidden-sm hidden-md sean" src="{{ asset('/img/bsqrd/Sean.png') }}">
                    </div>
                    <div class="col-lg-8">
                        <div class="video-container">
                    		<iframe
                                src="https://clips.twitch.tv/embed?clip=LachrymoseYummyLlamaFunRun"
                                frameborder="0"
                                scrolling="no"
                                allowfullscreen=false
                                autoplay=false>
                            </iframe>
                        </div>
    	            </div>
                    <div class="col-lg-2">
                        <img class="hidden-xs hidden-sm hidden-md john" src="{{ asset('/img/bsqrd/John.png') }}">
                        <!--<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scared BB</h5>-->
                        <!--<p></p>-->
                    </div>
                </div>
            </div> <!--/ .container -->
        </div><!--/ #headerwrap -->
    </section>

    <section id="desc" name="desc">
        <!-- INTRO WRAP -->
        <div id="intro">
            <div class="container">
                <div class="row centered">
                    <h1>Meet the Team</h1>
                    <br>
                    <br>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/bsqrd/PS4.png') }}" alt="">
                        <h3>Games</h3>
                        <p>We stream on <a target="_blank" href="https://www.twitch.tv/teambsqrd">Twitch</a>!</p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/bsqrd/artIcon.png') }}" alt="">
                        <h3>Art</h3>
                        <p></p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/bsqrd/communityIcon.png') }}" alt="">
                        <h3>Peepz (Community)</h3>
                        <p></p>
                    </div>
                </div>
                <br>
                <!--<hr>-->
            </div> <!--/ .container -->
        </div><!--/ #introwrap -->

        <!-- FEATURES WRAP -->
        <!--<div id="features">-->

        <!--</div><!--/ #features -->
    </section>

    <section id="showcase" name="showcase">
        <div id="showcase">
            <div class="container">
                <div class="row">
                    <h1 class="centered">Commissions</h1>
                    <br>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('/img/item-01.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('/img/item-02.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div><!-- /container -->
        </div>
    </section>

    <section id="contact" name="contact">
        <div id="footerwrap">
            <div class="container">
                <div class="col-lg-4">
                    <h3>Sean</h3>
                    <h4>E: <a href="mailto:sean@bsqrd.tv" target="_top">sean@bsqrd.tv</a></h4>
                    <p>
                        <ul>
                            <li>Commissions</li>
                            <li>Art Projects</li>
                            <li>Stream Related Inquiries</li>
                        </ul>
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3>John</h3>
                    <h4>E: <a href="mailto:john@bsqrd.tv" target="_top">john@bsqrd.tv</a></h4>
                    <p>
                        <ul>
                            <li>BSQRD.TV Website</li>
                            <li>Coding Opportunities</li>
                        </ul>
                    </p>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </section>
    <footer>
        <div id="c">
            <div class="container">
                <p>
                </p>

            </div>
        </div>
    </footer>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./{{ mix('/js/app-landing.js') }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
