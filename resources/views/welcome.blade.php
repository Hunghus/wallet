<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
    <head>

        <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <title>WalletChainos</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- mobile specific metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{URL::asset("css/base.css")}}">
        <link rel="stylesheet" href="{{URL::asset("css/vendor.css")}}">
        <link rel="stylesheet" href="{{URL::asset("css/main.css")}}">

        <!-- script
        ================================================== -->
        <script src="js/modernizr.js"></script>
        <script src="js/pace.min.js"></script>

        <!-- favicons
        ================================================== -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

    </head>

    <body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="#">
                <img src="images/logo.svg" alt="Homepage">
            </a>
        </div> <!-- end header-logo -->

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=top>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">
                <h1>
                    Hello folks, we are <br>
                    Team Chainos
                </h1>

                <p>
                    We create stunning digital wallet <br>
                    That will help the electronic money management.
                </p>
            </div> <!-- end home-content__main -->

        </div> <!-- end home-content -->

        <ul class="home-sidelinks">
            <li><a class="smoothscroll" href="#WALLET">WALLET<span>your finances</span></a></li>
            <li><a class="smoothscroll" href="#DEPOSIT">DEPOSIT<span>what we do</span></a></li>
            <li><a  class="smoothscroll" href="#SEND">SEND<span>get in touc</span></a></li>
            <li><a  class="smoothscroll" href="#HISTORY">HISTORY<span>history transfers</span></a></li>
            <li><a  class="smoothscroll" href="#ACCOUNT">ACCOUNT<span>login or register</span></a></li>
        </ul> <!-- end home-sidelinks -->

        <ul class="home-social">
            <li class="home-social-title">Follow Us</li>
            <li><a href="#0">
                    <i class="fab fa-facebook"></i>
                    <span class="home-social-text">Facebook</span>
                </a></li>
            <li><a href="#0">
                    <i class="fab fa-twitter"></i>
                    <span class="home-social-text">Twitter</span>
                </a></li>
            <li><a href="#0">
                    <i class="fab fa-linkedin"></i>
                    <span class="home-social-text">LinkedIn</span>
                </a></li>
        </ul> <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    </body>
</html>
