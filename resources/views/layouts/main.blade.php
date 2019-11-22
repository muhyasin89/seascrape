<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SeaScraper') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    @yield('extends_css')
    @include('partial.css')
    <style>
        .news_news{
            border-color: #153486;
            border-width: 1px;
            border-style: solid;
        }

        .news_news p, .news_news h2{  padding: 2.5%;  }

        .footer_href p{  margin: 0 0 5px;  }

        .btn{  border-radius: 0px;  }

        .btn-primary, .btn-primary:hover, .btn-primary:focus{
            color: #fff;
            background-color: #153486;
            border-color: #2e6da4;
            width:12.5em;
        }

        .social-white{  padding-top: 2.5%;  }
        .social-white img{  padding:5px;  }

        .nav_header a{
            color: hsla(0,0%, 100%,.7);
            transition: color .3s;
        }
        .nav_header>div>a:hover{  color:white;  }

        .nav_header li{ list-style-type: none; }
        #close:hover{
            cursor:pointer;
        }

    </style>
</head>
<body>
    @include('partial.header')
    <nav id="menu" class="panel" role="navigation">
        <div class="row mar_top_5">
            <div class="col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-3 col-xs-2 col-xs-4">
                <a href="{{ url('/') }}"><img id="image_white" src="{{ URL::asset('/image/SSI_White.png') }}" width="250"></a>
            </div>
            <div class="col-lg-offset-4 col-lg-5 col-md-offset-5 col-md-4 mar_top_2_5 col-xs-8">
                <h4 id="first_class">FIRST CLASS SUBSEA SPECIALIST  <a id="close" class="float_right mar_right_20 san_semi_bold">X</a></h4>

            </div>
        </div>
        <div class="row mar_top_5">
            <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-6 col-xs-12">
                {{--<div class="row nav_header">--}}
                        {{--<div class="col-lg-6 col-xs-12"><a href="{{ url('about') }}"><h2 class="nav_about">ABOUT</h2></a></div>--}}
                        {{--<div class="col-lg-6 col-xs-12"><a href="{{ url('project') }}"> <h2 class="nav_project">PROJECT</h2></a></div>--}}
                        {{--<div class="col-lg-6 col-xs-12"><a href="{{ url('news') }}"><h2 class="nav_news">NEWS</h2></a></div>--}}
                        {{--<div class="col-lg-6 col-xs-12"><a href="{{ url('hse') }}"><h2 class="nav_hse">HSE</h2></a></div>--}}
                        {{--<div class="col-lg-6 col-xs-12"><a href="{{ url('services') }}"><h2 class="nav_services">SERVICES</h2></a></div>--}}
                        {{--<div class="col-lg-6 col-xs-12"><a href="{{ url('career') }}" ><h2 class="nav_career">CAREER</h2></a></div>--}}
                        {{--<div class="col-lg-6 col-xs-12"><a href="{{ url('services/our_equipment') }}"><h2 class="nav_assets">ASSETS</h2></a> </div>--}}
                        {{--<div class="col-lg-6 col-xs-12"><a href="{{ url('contact_us') }}"> <h2 class="nav_contact_us">CONTACT US</h2></a></div>--}}
                {{--</div>--}}
                <ul class="nav_header">
                    <li><a href="{{ url('about') }}"><h2 class="nav_about">ABOUT</h2></a></li>
                    <li><a href="{{ url('project') }}"> <h2 class="nav_project">PROJECT</h2></a></li>
                    <li><a href="{{ url('news') }}"><h2 class="nav_news">NEWS</h2></a></li>
                    <li><a href="{{ url('hse') }}"><h2 class="nav_hse">HSE</h2></a></li>
                    <li><a href="{{ url('services') }}"><h2 class="nav_services">SERVICES</h2></a></li>
                    <li><a href="{{ url('career') }}" ><h2 class="nav_career">CAREER</h2></a></li>
                    <li><a href="{{ url('services/our_equipment') }}"><h2 class="nav_assets">ASSETS</h2></a></li>
                    <li><a href="{{ url('contact_us') }}"> <h2 class="nav_contact_us">CONTACT US</h2></a></li>
                </ul>
            </div>
            <div class="col-lg-offset-2 col-lg-3 col-xs-12">
                <p class="text1 mar_left_5">Seascape Surveys are driven by experienced <br>
                    And client focussed management team, and<br>
                    currently employs over 100 staff members<br>
                    thought South East Asia.</p>
                <p class="float_right">---READ MORE</p>
            </div>
        </div>
    </nav>
    <div class="sticky_nav">
        @if($data['page'] == 'home')
            <!--  <div id="fp-nav" class="hidden-xs hidden-sm">
          <ul>
              <li id="li-first">01</li>
              <li id="li-second">02</li>
              <li id="li-third">03</li>
              <li id="li-fourth">04</li>
              <li id="li-five">05</li>
          </ul>
        </div>-->
        @endif
    </div>
    {{--<div class="stick_footer ">--}}
        {{--<div id="stick_p">Scroll Down </div>--}}
        {{--<i class="stick_scroll_down glyphicon glyphicon-chevron-down"></i>--}}
        {{--<i class="stick_scroll_up glyphicon glyphicon-chevron-up"></i>--}}
    {{--</div>--}}
    @yield('content')
    @if($data['page'] != 'home')
     @include('partial.footer')
    @endif

    <!-- Scripts -->
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}
    <script src="{{ asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bigSlide.js') }}"></script>

    @yield('extends_js')
    <script>
        $(document).ready(function() {
            $('.menu-link').bigSlide({
                menuWidth:'18em',
                speed: '4000',
            });
            this.$menu = $('#menu');
            this.$push = $('.push');
            var bigSlideAPI = ($('.menu-link').bigSlide()).bigSlideAPI;
            @if($data['page'] == 'home')
            $('.menu-link').click(function(){
                $('#fp-nav').hide();
                $(".head_nav").hide();
            });
            @endif
            $('#close').click(function() {
                bigSlideAPI.view.toggleClose();
                @if($data['page'] == 'home')
                    $('#fp-nav').show();
                    $(".head_nav").show();
                @endif
            });
            @yield('inside_document_ready')
        });

        @yield('inside_js')
        $('.stick_scroll_up').hide();
        // animationHover('.nav_about','bounceIn');
        // animationHover('.nav_project','bounceIn');
        // animationHover('.nav_news','bounceIn');
        // animationHover('.nav_hse','bounceIn');
        // animationHover('.nav_services','bounceIn');
        // animationHover('.nav_career','bounceIn');
        // animationHover('.nav_assets','bounceIn');
        // animationHover('.nav_contact_us','bounceIn');

        function onScrollCheck(element, animation){
            $(element).each(function() {
                if (isScrolledIntoView(this) == true) {
                    animation;
                }
            });
        }

        // Check if element is scrolled into view
        function isScrolledIntoView(elem) {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height();

            var elemTop = $(elem).offset().top;
            var elemBottom = elemTop + $(elem).height();

            return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
        }

        function animationHover(element, animation){
            console.log(element);
            element = $(element);
            element.hover(
                function() {
                    element.addClass('animated ' + animation);
                },
                function(){
                    //wait for animation to finish before removing classes
                    window.setTimeout( function(){
                        element.removeClass('animated ' + animation);
                    }, 2000);
                }
            );
        };

        function animationClick(element, animation){
            element = $(element);
            element.click(
                function() {
                    element.addClass('animated ' + animation);
                    //wait for animation to finish before removing classes
                    window.setTimeout( function(){
                        element.removeClass('animated ' + animation);
                    }, 2000);
                }
            );
        };

        @if($data['page'] != 'home')
            $(".stick_footer").click(function(){
                $('html, body').animate({
                    scrollTop: $(".footer_image").offset().top
                }, 2000);
            });
        @endif

    </script>

</body>
</html>
