<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>English Administration   </title>
    <meta name="description" content="">
    <link href="./assets/img/favicon.ico" rel="shortcut icon">
    <!-- Fonts -->
    <link href="{{asset('assets/fonts/cloudicon/cloudicon.css')}}" rel="stylesheet" onload="if(media!='all')media='all'">
    <link href="{{asset('assets/fonts/fontawesome/css/all.css')}}" rel="stylesheet" onload="if(media!='all')media='all'">
    <link href="{{asset('assets/fonts/evafeat/evafeat.css')}}" rel="stylesheet" onload="if(media!='all')media='all'">
    <!-- RTL STYLES-->
    <link href="{{asset('assets/css/rtl/bootstrap-rtl.min.css')}}" disabled="true" rel="stylesheet" class="rtl">
    <link href="{{asset('assets/css/rtl/style-rtl.min.css')}}" disabled="true" rel="stylesheet" class="rtl">
    <!-- CSS styles -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" class="ltr" onload="if(media!='all')media='all'">
    <link href="{{asset('assets/css/flickity.min.css')}}" rel="stylesheet" onload="if(media!='all')media='all'">
    <link href="{{asset('assets/css/aos.min.css')}}" rel="stylesheet" onload="if(media!='all')media='all'">
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet"  onload="if(media!='all')media='all'">
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet" onload="if(media!='all')media='all'">
    <link href="{{asset('assets/css/filter.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/modal.css')}}">
</head>
<body>
    <div class="box-container limit-width">
        <!-- ***** SETTINGS ****** -->
        <section id="settings"> </section>
        <!-- ***** LOADING PAGE ****** -->
        <div id="spinner-area">
            <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
            <div class="spinner-txt">Loading...</div>
            </div>
        </div>
        <!-- ***** FRAME MODE ****** -->
        <div class="body-borders" data-border="20">
            <div class="top-border bg-white"></div>
            <div class="right-border bg-white"></div>
            <div class="bottom-border bg-white"></div>
            <div class="left-border bg-white"></div>
        </div>
        <!-- ***** UPLOADED MENU FROM HEADER.HTML ***** -->
        <header id="header"> </header>
        @yield('content')
        <!-- ***** UPLOADED FOOTER FROM FOOTER.HTML ***** -->
        <footer id="footer"> </footer>
    </div>

    <div class="modalaliz" id="modalaliz">
        <button id="closeX">&times</button>
        <div class="quiz-container" id="quiz">
            <div class="quiz-header">
                <h2 id="question">Question is loading...</h2>
                <ul>
                    <li>
                    <input type="radio" name="answer" id="a" class="answer" />
                    <label for="a" id="a_text">Answer...</label>
                    </li>
                    <li>
                    <input type="radio" name="answer" id="b" class="answer" />
                    <label for="b" id="b_text">Answer...</label>
                    </li>
                    <li>
                    <input type="radio" name="answer" id="c" class="answer" />
                    <label for="c" id="c_text">Answer...</label>
                    </li>
                    <li>
                    <input type="radio" name="answer" id="d" class="answer" />
                    <label for="d" id="d_text">Answer...</label>
                    </li>

                </ul>
            </div>
            <div class="button_block">
            <button id="submit">Submit</button>
            <button id="submitMath"> Math</button>
            <button id="submitRus"> Russia</button>
            <button id="submitFiz"> Fizika</button>

            </div>
        </div>
    </div>
    <!-- ***** BUTTON GOw TOP ***** -->
    <a href="#0" class="cd-top"> <i class="fas fa-angle-up"></i> </
</body>
</html>
<!-- Javascript -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/quiz.js')}}"></script>
<script defer src="{{asset('assets/js/popper.min.js')}}"></script>
<script defer src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script defer src="{{asset('assets/js/jquery.countdown.js')}}"></script>
<script defer src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script defer src="{{asset('assets/js/slick.min.js')}}"></script>
<script defer src="{{asset('assets/js/flickity.pkgd.min.js')}}"></script>
<script defer src="{{asset('assets/js/flickity-fade.min.js')}}"></script>
<script defer src="{{asset('assets/js/aos.min.js')}}"></script>
<script defer src="{{asset('assets/js/isotope.min.js')}}"></script>
<script defer src="{{asset('assets/js/jquery.scrollme.min.js')}}"></script>
<script defer src="{{asset('assets/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script async src="{{asset('assets/js/lazysizes.min.js')}}"></script>
<script defer src="{{asset('assets/js/scripts.min.js')}}"></script>
<script defer src="{{asset('assets/js/settings-init.js')}}"></script>
<script defer src="{{asset('assets/js/onlineDetector.js')}}"></script>
<script src="{{asset('base.js')}}"></script>
<script src="{{asset('assets/js/quiz-test.js')}}"></script>
<!-- <script>
    $(window).on('load', function() {
        preloader();
    });
</script> -->
<script>new WOW().init();</script>
