@extends('layouts.main')
@section('extends_css')
    <link href="{{ asset('css/lightslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fullPage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home_smooth.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jarallax.css') }}" rel="stylesheet">
    <style>
        html,body{
            max-width:100%;
            overflow-x: hidden;
        }

        #content-slider{
            background-color: #EEF5FF;
        }
        #content-slider li{
            background-color: #EEF5FF;
            display: block;
            width: 25%;
            text-decoration: none;
            line-height: 175px;
            height: 175px;
            text-align: center;
        }
        #content-slider li img{
            vertical-align: middle;
            max-height: 150px;
        }

        #content-slider li > h2,#content-slider li > p{
            padding: 5px;
        }

        @media only screen and (min-width: 992px)  {
            #fp-nav.right{right: 63px;}
        }
    </style>
@endsection
@section('content')
    <div id="number">
        <ul id='myFpNav'>
            <li class="page1"><a href="#Home">1</a></li>
            <li class="page1"><a href="#OurServices">2</a></li>
            <li class="page1"><a href="#OurFleet">3</a></li>
            <li class="page1"><a href="#NewsFromUs">4</a></li>
            <li class="page1"><a href="#OurStatistic">5</a></li>
            <li class="page1"><a href="#OurContact">6</a></li>
        </ul>
        <!-- <div id="moveable" class="one"></div> -->
    </div>
    <div id="fullPage" >
        <div id="headerHome" class="section ">
            <div class="row" style="margin-top: 1%;">
                <div class="col-lg-12">
                    <div class="home_banner" >
                        <img id="img_home_header" class="home_slide" src="{{ asset('image/header_combine1.png') }}" />
                        <div class="white_color row info_home add_info_home">
                            <p class="san_light white_color mar_bot_2 title-line" >SEASCAPE SURVEYS INDONESIA</p>
                            <h2 class="fira_bold title-line" >
                                We provides
                            </h2>
                            <h3 class="fira_bold ">

                                <div class="text-line">
                                    a wide range of survey and positioning services
                                </div>
                                <div class="text-line">
                                    onboard offshore installation
                                </div>
                                <div class="text-line">
                                    and
                                </div>
                                <div class="text-line">
                                    construction vessels and barges.
                                </div>
                            </h3><br>
                            <a href="#" class="font_size_16 font_weight_bold"><button class="home_btn text-line">Learn More</button></a>
                        </div>
                        <div class="home_banner_before"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content_relative" class="section">
            <div class="row header_mar_top">
                <div class="col-lg-8 col-md-8 col-sm-12" >
                    <div id="tulisan">
                        <img id="img-nav" class="img-nav-sub kacamata" src="{{ asset('image/home/our_service_background_1.png') }}" />
                        <div class="grey_box_our_service san_light">
                            <p class="title-line">—Services</p>
                            <h2 class="fira_bold mar_top_5 title-line">Our Services</h2>
                            <p class="mar_top_5 font_size_service">
                                <span class="text-line">
                                    Seascape Surveys provides a wide range of survey
                                </span>
                                <br>
                                <span class="text-line">
                                    And positioning services onboard offshore
                                </span>
                                <br>
                                <span class="text-line">
                                    Installation and construction vessels and barges
                                </span>
                            </p>
                            <button class="btn btn-primary mar_top_5 text-line">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="equipment" class="section">
            <div class="row ">
                <div class="col-lg-6 col-md-6">
                    <div id="equipment_0" class="parag_best_equipment san_light">
                        <p class="title-line">—Fleet</p>
                        <h2 class="fira_bold title-line">Best Equipment for<br> your needs</h2>
                        <p class="mar_top_5 font_size_service">
                            <span class="text-line">
                                Seascape provides a complete in-house package including air and
                            </span>
                            <br>
                            <span class="text-line">
                                Saturation diving, ROV inspection and construction. In conduction
                            </span>
                            <br>
                            <span class="text-line">
                                With its survey inspection reporting departments.
                            </span>
                        </p>
                        <button class="btn btn-primary mar_top_5 text-line">Our Equipment</button>
                    </div>

                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 equipment_dekstop">
                    <img id="equipment_1" src="{{ asset('/image/home/equipment.jpeg') }}" />
                    <div id="equipment_2" class="equipment_background"></div>
                </div>
            </div>
        </div>
        <div id="news" class="section">
            <div class="row ">
                <div class="our_lattest_update primary_color">
                    <div class="our_lattest_background mar_top_min_8 ">
                        <p class="mar_left_10 title-line">-- News</p>
                        <h2 class="fira_bold mar_left_10 title-line">Our Latest Update</h2>
                    </div>
                    <div class="mar_home_list">
                        <div id="news_content" class="row mar_top_5">
                            <div id="first-news" class="col-lg-4 col-sm-12 col-xs-11 float_left box_latest_grey">
                                <h4 class="san_light">NEWS</h4>
                                <h2 class="fira_bold">Seascape Awarded
                                    Subsea Service Contract
                                    In Indonesia<br></h2>

                                <p class="tanggal">23 APRIL 2016</p>
                            </div>
                            <div id="second-news" class="col-lg-4 col-sm-12 col-xs-11  float_left box_latest_grey">
                                <h4 class="san_light">PRESS RELEASE</h4>

                                <h2 class="fira_bold">Seascape were awarded
                                    Diving and ROV
                                    Inspection project<br></h2>

                                <p class="tanggal">23 SEPTEMBER 2017</p>
                            </div>
                            <div id="third-news" class="col-lg-4 col-sm-12 col-xs-11  float_left box_latest_grey">
                                <h4 class="san_light">PRESS RELEASE</h4>

                                <h2 class="fira_bold">Seascape Awarded<br>
                                    Subsea Services
                                    Contract with
                                    Combined Estimated
                                    Value of USD 28 Million<br></h2>
                                <p class="tanggal">23 SEPTEMBER 2017</p>
                            </div>
                            <div class="col-lg-offset-9 col-lg-3 mar_top_3">
                                <button class="btn btn-primary float_right mar_right_15 text-line"> See More </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="statistic" class="section">
            <div class="statistic">
                <div class="row ">
                    <div class="col-lg-offset-4 col-lg-8 mar_top_10">
                        <div id="static_title" class="col-lg-6">
                            <p align="center" class="title-line">
                                statistic
                            </p>
                            <h4 align="center" class="san_semi_bold title-line">
                                We Keep Partnership with Trust
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row clear_footer">
                    <div class="col-lg-3 col-xs-6">
                        <h1 align="center" class="fira_bold">
                            <span id="number1">117</span></h1>
                        <p align="center">project done</p>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <h1 align="center" class="fira_bold">
                            <span id="number2">89</span></h1>
                        <p align="center">total client</p>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <h1 align="center" class="fira_bold">
                           <span id="number3">192</span>+</h1>
                        <p align="center">total value</p>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <h1 align="center" class="fira_bold">
                            <span id="number4">14</span></h1>
                        <p align="center">years experience</p>
                    </div>
                </div>
            </div>
            <div class="company">
                <ul id="content-slider" class="content-slider">
                    @foreach($data['client'] as $client)
                        <li>
                            <img src="{{ asset('/image/client/model/'.$client->image) }}" class="mar_0" />
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <footer class="section">
            <div class="row mar_top_10">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align:right">
                    <h4>CONTACT</h4>
                    <p><img src="{{ asset('image/social/email.png') }}"> office@seascapesurveys.com</p>
                    <p><img src="{{ asset('image/social/handphone.png') }}">+62 21 867000</p>
                    <p><img src="{{ asset('image/social/printer.png') }}">+62 21 8671111</p><br>
                    <p>ADDRESS<br>
                        Jl. Raya Karanggan Muda No. 172<br>
                        Gunung Putri, Bogor 16961<br>
                        INDONESIA</p>
                </div>
                <div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h4>NEWSLETTER</h4>
                    <p>We Provides a wide range of<br>
                        Survey and positioning services<br>
                        Onboard offshore</p>
                    <div class="row mar_top_5">
                        <div id="newsletter" class="col-lg-6">
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                            {{ csrf_field() }}
                            {{ Html::ul($errors->all()) }}
                            {{Form::open([ 'method'  => 'post', 'url'=>'admin/subscriber/store' ])}}
                            {{ Form::text('email', Input::old('email'), array('class' => 'form-control mar_top_5 subscriber', 'placeholder' => 'Enter your email')) }}
                            {{Form::button('Subscribe', array('type' => 'submit', 'class' => 'btn btn-subscriber mar_top_5 form-control'))}}
                            {{ Form::close() }}
                        </div>
                    </div>


                </div>
            </div>
            <div class="row mar_top_10">
                <div class="float_left col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <p> &#9400; 2017 PT.Seascape Surveys Indonesia</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 add_footer_social_white_home">
                    <a href="#"><img src="{{ asset('image/social/facebook.png') }}" ></a>
                    <a href="#"><img src="{{ asset('image/social/youtube.png') }}" ></a>
                    <a href="#"><img src="{{ asset('image/social/twitter.png') }}" ></a>
                    <a href="#"><img src="{{ asset('image/social/linkedin.png') }}" ></a>
                </div>
                <div class="float_right col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <p align="right">Power by KARTALA</p>
                </div>
            </div>
        </footer>
    </div>



@endsection

@section('extends_js')
    <script src="{{ asset('js/lightslider.js') }}"></script>
    <script src="{{ asset('js/jquery.fullPage.js') }}"></script>
    <script src="{{ asset('js/scrollmagic.js') }}"></script>
    <script src="{{ asset('js/gsap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jarallax.js') }}"></script>

@endsection
@section('inside_document_ready')
    $('#content-slider').lightSlider({auto:true, loop:true, pauseOnHover:true});

    // initial var
    var s1HomeBanner = $('.home_banner'),
        s1HomeBackground = $('.home_banner_before'),
        s2Background = $('.kacamata'),
        s2ContentBackground = $('.grey_box_our_service'),
        s3BackgroundImage = $('#equipment_2'),
        s3Image = $('#equipment_1'),
        s4FirstNews = $('#first-news'),
        s4SecondNews = $('#second-news'),
        s4ThirdNews = $('#third-news'),
        s5WorldBackground = $('.statistic'),
        s5Number1 = $('#number1'),
        s5Number1Val = $('#number1').text(),
        s5Number2 = $('#number2'),
        s5Number2Val = $('#number2').text(),
        s5Number3 = $('#number3'),
        s5Number3Val = $('#number3').text(),
        s5Number4 = $('#number4'),
        s5Number4Val = $('#number4').text();

    // gsap timeline
    // text content reveal on section load
    var textContentReveal = function(){
        var titleLine = $('.active .title-line'),
            textLine = $('.active .text-line'),
            tl_Text = new TimelineMax({paused:false});

        // define the timeline
        tl_Text
            .fromTo(titleLine, 1,
                    { autoAlpha: 0, y: -50, rotationX: 25, transformPerspective: 1000, transformOrigin: "center" },
                    { autoAlpha: 1, y:0, rotationX: 0 },
                    0)

            .staggerFromTo(textLine, 1,
                { autoAlpha: 0, x: 25, rotationX: 25, transformPerspective: 1000, transformOrigin: "center" },
                { autoAlpha: 1, x:0, rotationX: 0 },
                0.25);

        // play the function
        tl_Text.restart().timeScale(1);
            // console.log("reveal");
    };

    // Store this function and call it on section leave
    var textContentHide = function(){
        // refresh the variables and create a timeline
        var titleLine = $('.active .title-line'),
            textLine = $('.active .text-line'),
            tl_Text = new TimelineMax({paused:true});

        // repeat the same timeline as "onload" event
        tl_Text
            .fromTo(titleLine, 1,
                    { autoAlpha: 0, y: -50, rotationX: 25, transformPerspective: 1000, transformOrigin: "center" },
                    { autoAlpha: 1, y:0, rotationX: 0},
                    0)

            .staggerFromTo(textLine, 1,
                { autoAlpha: 0, x: -25, rotationX: 25, transformPerspective: 1000, transformOrigin: "center" },
                { autoAlpha: 1, x:0, rotationX: 0 },
                0.25, "-=1");

        // play this function backward and 3x faster
        tl_Text.reverse().timeScale(3);
                // console.log("hide");
    };

    // 🎞️1️⃣ Timeline #1: total duration of 4s
    var tl_section1 = new TimelineMax({ paused: true });
    tl_section1
        //.from(s1HomeBanner, 1, { autoAlpha: 0, y: "20%", ease:  Sine. easeInOut})
        .from(s1HomeBackground, 4, { y: '5%', autoAlpha: 0, ease:  Sine. easeInOut});

    // 🎞️1️⃣ Timeline #2: total duration of 4s
    var tl_section2 = new TimelineMax({ paused: true });
    tl_section2
        .from(s2Background, 4, {x: "-10%", autoAlpha: 0, ease:  Sine.easeOut})
        .from(s2ContentBackground, 3, {y: "10%", autoAlpha: 0, ease:  Sine.easeInOut}, "-=4");

    // 🎞️1️⃣ Timeline #3: total duration of 4s
    var tl_section3 = new TimelineMax({ paused: true });
    tl_section3
        .from(s3BackgroundImage, 4, { height: "120%", autoAlpha: 0, ease:  Sine.easeInOut})
        .from(s3Image, 3, {y: "-20%", autoAlpha: 0, ease:  Sine.easeInOut}, "-=3s");

    // 🎞️1️⃣ Timeline #4: total duration of 4s
    var tl_section4 = new TimelineMax({ paused: true });
    tl_section4
        .from(s4FirstNews, 4, { y: "20%", autoAlpha: 0, ease:  Sine.easeInOut})
        .from(s4SecondNews, 3, { autoAlpha: 0, ease:  Sine.easeInOut }, "-=3")
        .from(s4ThirdNews, 4, { y: "-20%", autoAlpha: 0, ease:  Sine.easeInOut }, "-=3");

    // 🎞️1️⃣ Timeline #5: total duration of 4s
    var tl_section5 = new TimelineMax({ paused: true }),
        game1 = {score: 0},
        game2 = {score: 0},
        game3 = {score: 0},
        game4 = {score: 0};
    tl_section5
        .fromTo(s5WorldBackground, 4, { backgroundSize: "250%"}, {backgroundSize: "100%",autoRound:false, ease:  Sine.easeInOut})
        .fromTo(game1, 2, {score: 0}, {score: s5Number1Val, onUpdate: updateNum1, ease:  Sine.easeInOut}, "-=4")
        .fromTo(game2, 2, {score: 0}, {score: s5Number2Val, onUpdate: updateNum2, ease:  Sine.easeInOut}, "-=3.5")
        .fromTo(game3, 2, {score: 0}, {score: s5Number3Val, onUpdate: updateNum3, ease:  Sine.easeInOut}, "-=2.5")
        .fromTo(game4, 2, {score: 0}, {score: s5Number4Val, onUpdate: updateNum4, ease:  Sine.easeInOut}, "-=2");

    function updateNum1(){
        s5Number1.html(Math.ceil(game1.score));
    };
    function updateNum2(){
        s5Number2.html(Math.ceil(game2.score));
    };
    function updateNum3(){
        s5Number3.html(Math.ceil(game3.score));
    };
    function updateNum4(){
        s5Number4.html(Math.ceil(game4.score));
    };

    $("#fullPage").fullpage({
        anchors:['Home', 'OurServices', 'OurFleet', 'NewsFromUs', 'OurStatistic', 'OurContact'],
        animateAnchor: false,
        scrollingSpeed: 1500, // increase the speed to avoid double slides scroll (default 700)

        // 🛬 SECTION IS LOADED 🛬
        afterLoad: function(anchorLink, index) {
            var loadedSection = $(this);

            // Slide #1 is loaded
            if (index == 1) {
                // tl_section1fadeIn.restart();
                tl_section1.restart().timeScale(2);
                textContentReveal();
            }
            else if(index == 2){
                tl_section2.restart().timeScale(2);
                textContentReveal();
            }
            else if(index == 3){
                tl_section3.restart().timeScale(2);
                textContentReveal();
            }
            else if(index == 4){
                tl_section4.restart().timeScale(2);
                textContentReveal();
            }
            else if(index == 5){
                tl_section5.restart().timeScale(2);
                textContentReveal();
            }


        }, // end of "onLoad" events

        // 🛫 SECTION IS LEAVED 🛫
        onLeave: function(index, nextIndex, direction) {
            var leavingSection = $(this);
            activateNavItem($('#myFpNav').find('li').eq(nextIndex-1));

            // Slide #1 is leaved
            if (index == 1) {
                tl_section1.reverse().timeScale(3);
                textContentHide();
            }
            if (index == 2) {
                tl_section2.reverse().timeScale(3);
                textContentHide();
            }
            else if (index == 3) {
                tl_section3.reverse().timeScale(3);
                textContentHide();
            }
            else if (index == 4) {
                tl_section4.reverse().timeScale(3);
                textContentHide();
            }
            else if (index == 5) {
                tl_section5.reverse().timeScale(3);
                textContentHide();
            }

        }, // end of "onLeave" events

        afterRender: function(){
                activateNavItem($('#myFpNav').find('li').eq($('.section.active').index()));
            }
        });
    function activateNavItem(item){
        item.addClass('active').siblings().removeClass('active');
        item.next().addClass('page3').next().removeClass('page3');
        item.prev().addClass('page3').prev().removeClass('page3');
    }
@endsection
