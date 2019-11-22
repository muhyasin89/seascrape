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
    <div id="content_relative" class="section " data-anchor="2">
        <div class="row mar_top_3">
            <div class="col-lg-8 col-md-8 col-sm-12" >
                <div id="tulisan" class="test">
                    <div class="grey_box_our_service san_light">
                        <p>—Services<br></p>
                        <h2 class="fira_bold mar_top_5">Our Services</h2>
                        <p class="mar_top_5 font_size_service">Seascape Surveys provides a wide range of survey<br>
                            And positioning services onboard offshore<br>
                            Installation and construction vessels and barges<br></p>
                        <button class="btn btn-primary mar_top_10">Learn More</button>
                    </div>
                        <img id="img-nav" class="img-nav-sub kacamata" src="{{ asset('image/home/our_service_background_1.png') }}" />
                </div>
            </div>
            {{--<div id="segitiga" class="col-lg-4 col-md-4 hidden-sm hidden-xs" style="z-index:-1;">--}}
                {{--<div class="back_service">--}}
                    {{--<img id="img-nav" src="{{ asset('image/home/back_our_service.png') }}" />--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <div id="equipment" class="section" data-anchor="3">
        <div class="clear_div hidden-xs"></div>
        <div class="row equipment">
            <div class="col-lg-6 col-md-6">
                <div id="equipment_0" class="parag_best_equipment san_light">
                    <p>—Fleet</p>
                    <h2 class="fira_bold">Best Equipment for<br> your needs</h2>
                    <p class="mar_top_5 font_size_service">Seascape provides a complete in-house package including air and<br>
                        Saturation diving, ROV inspection and construction. In conduction<br>
                        With its survey inspection reporting departments.</p>
                    <button class="btn btn-primary mar_top_5">Our Equipment</button>
                </div>

            </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 equipment_dekstop">
                    <img id="equipment_1" src="{{ asset('/image/home/equipment.jpeg') }}" />
                    <div id="equipment_2" class="equipment_background"></div>
                </div>
        </div>
    </div>
    <div class="row_equipment section" data-anchor="4">
        <div class="clear_div_latests hidden-xs">
        </div>
        <div id="our_latest_update" >
            <div class="our_lattest_update">
                <div class="our_lattest_background mar_top_min_8">
                    <p class="mar_left_10">-- News</p>
                    <h2 class="fira_bold mar_left_10">Our Latest Update</h2>
                </div>
                <div class="mar_home_list">
                    <div id="news_content" class="row mar_top_10">
                        <div class="col-lg-4 col-sm-12 col-xs-11 float_left box_latest_grey">
                            <h4 class="san_light">NEWS</h4>
                            <h2 class="fira_bold">Seascape Awarded
                                Subsea Service Contract
                                In Indonesia<br></h2>

                            <p class="tanggal">23 APRIL 2016</p>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-xs-11  float_left box_latest_grey">
                            <h4 class="san_light">PRESS RELEASE</h4>

                            <h2 class="fira_bold">Seascape were awarded
                                Diving and ROV
                                Inspection project<br></h2>

                            <p class="tanggal">23 SEPTEMBER 2017</p>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-xs-11  float_left box_latest_grey">
                            <h4 class="san_light">PRESS RELEASE</h4>

                            <h2 class="fira_bold">Seascape Awarded<br>
                                Subsea Services
                                Contract with
                                Combined Estimated
                                Value of USD 28 Million<br></h2>
                            <p class="tanggal">23 SEPTEMBER 2017</p>
                        </div>
                        <div class="col-lg-offset-9 col-lg-3 mar_top_5">
                            <button class="btn btn-primary float_right mar_right_15"> See More </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="footer" class="section" data-anchor="5">
    {{--<div class="clear_div_footer pad_top_101"></div>--}}
    <div class="clear_div_footer"></div>
    <div id="statistic">
        <div class="statistic">
            <div class="col-lg-offset-4 col-lg-8 mar_top_2_5">
                <div id="static_title" class="col-lg-6">
                    <p align="center">
                        statistic
                    </p>
                    <h4 align="center" class="san_semi_bold">
                        We Keep Partnership with Trust
                    </h4>
                </div>
            </div>
            <div class="row clear_footer">
                <div class="col-lg-3 col-xs-6">
                    <h1 align="center" class="fira_bold"><span class="count">117</span></h1>
                    <p align="center">project done</p>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <h1 align="center" class="fira_bold"><span class="count">89</span></h1>
                    <p align="center">total client</p>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <h1 align="center" class="fira_bold"><span class="count">192</span>+</h1>
                    <p align="center">total value</p>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <h1 align="center" class="fira_bold"><span class="count">14</span></h1>
                    <p align="center">years experience</p>
                </div>
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
    <div id="page5">
    @include('partial.footer')
    </div>
</div>
<!--** end:fullpage **-->
</div>
@endsection
@section('extends_js')
    <script src="{{ asset('js/lightslider.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/jquery.fullPage.js') }}"></script>
    {{--<script type="text/javascript" src="https://alvarotrigo.com/fullPage/dist/fullpage.dragAndMove2.limited.min.js"></script>--}}
    <script type="text/javascript" src="https://alvarotrigo.com/fullPage/jquery.fullpage.extensions.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jarallax.js') }}"></script>
@endsection
@section('inside_document_ready')
    animationHover('.stick_footer','bounce');

    function li_active(hash_number){

        if(hash_number != '#1'){
            $('.page1').css("background-color","#153486");
        }else{
            $('.page1').css("background-color","#3D7EC1");
        }

        if(hash_number != '#2'){
            $('.page2').css("background-color","#122C70");
        }

        if(hash_number != '#3'){
            $('.page3').css("background-color","#223E88");
        }

        if(hash_number != '#4'){
            $('.page4').css("background-color","#153486");
        }

        if(hash_number != '#5'){
            $('.page5').css("background-color","#122C70");
        }
    }

    function checkscroll(hash_number){
      if($('#moveable').hasClass('one')){
            $('#moveable').removeClass('one');
        }else if($('#moveable').hasClass('two')){
            $('#moveable').removeClass('two');
        }else if($('#moveable').hasClass('three')){
            $('#moveable').removeClass('three');
        }else if($('#moveable').hasClass('four')){
            $('#moveable').removeClass('four');
        }else if($('#moveable').hasClass('five')){
            $('#moveable').removeClass('five');
        }
    }

    $(window).scroll(function (event) {
        var hash_number=window.location.hash;
        var warna_hover ="#3D7EC1";

        li_active(hash_number);
        checkscroll(hash_number);
            if(hash_number  == '#1'){
                $('.page1').css("background-color",warna_hover);
                $('#moveable').addClass('one');
            }else if(hash_number  == '#2'){
                $('.page2').css("background-color",warna_hover);
                $('#moveable').addClass('two');
            }else if(hash_number  == '#3'){
                $('.page3').css("background-color",warna_hover);
                $('#moveable').addClass('three');
            }else if(hash_number  == '#4'){
                $('.page4').css("background-color",warna_hover);
                $('#moveable').addClass('four');
            }else{
                $('.page5').css("background-color",warna_hover);
                $('#moveable').addClass('five');
            }

        //console.log("ini location:"+window.location.hash);
    });

    function removeArray(array, element) {
        const index = array.indexOf(element);
        array.splice(index, 1);
    }

    function removeAll(number){
        var array_list=[1,2,3,4];
        var array_number=[
            ['.home_banner_before','.info_home'],
            ['.kacamata','#tulisan','#segitiga'],
            ['#equipment_0','#equipment_1','#equipment_2'],
            ['.our_lattest_background','.our_lattest_update']
        ];

        var array_animation=[
            ['animated fadeInUpBig','animated fadeInDown'],
            ['animated fadeInUp','appear_tulisan','appear_segitiga'],
            ['appear_to_up','animated fadeInDown','appear_to_up'],
            ['animated fadeInDown','appear_from_none']
        ];

        removeArray(array_list,number);
        //console.log('number:'+number);
        //console.log('===========================================');
        //console.log('ini array sisa:'+array_list);

        //add zoom Out
        len_array =array_list.length;
       for (var i = 0;  i < len_array; i++) {
                number_left = array_list[i];
                //console.log('number_left:'+number_left);
                for(var j=0; j < array_number[number_left-1].length;j++){
                    if($(array_number[number_left-1][j]).hasClass(array_animation[number_left-1][j])){
                        //console.log('has number:'+array_number[number_left-1][j]+'|add animation: '+array_animation[number_left-1][j]);
                        $(array_number[number_left-1][j]).removeClass(array_animation[number_left-1][j])
                    }
                    //console.log('add zoomout to:'+array_number[number_left-1][j]+"|nomor j:"+j);
                    $(array_number[number_left-1][j]).addClass('animated zoomOut');
                }
        }

        //add animation
        for(var r = 0; r < array_number[number-1].length;r++){
        //console.log('r:'+r+'|array_number:'+ number-1 +'|number class:'+ array_number[number-1][r] + '|animation class :'+array_animation[number-1][r]);
            if($(array_number[number-1][r]).hasClass('animated zoomOut')){
                $(array_number[number-1][r]).removeClass('animated zoomOut');
                //console.log('remove zoomout to:'+array_number[number-1][r]+"|nomor r:"+r);
            }
            $(array_number[number-1][r]).addClass(array_animation[number-1][r]);
        }
    }

    //console.log('===========================================');

    function checknumber(number)
    {
         if(number == 5){
            count();
        }else{
            {{--console.log('number:'+number);--}}
            removeAll(number);
        }
    }

    function add_margin_top(){
        var height = (($(window).height()*2)/10);
        var list = (($('div#fp-nav').height()*2)/10) ;

        console.log(list+'height');
        var one = 0;
        var two = one+list;
        var three = two+list;
        var four = three+list;
        var five = four + list;

        $('.one').css('top', one-1);
        $('.two').css('top',two);
        $('.three').css('top',three);
        $('.four').css('top',four);
        $('.five').css('top',five);
    }

    $('#fullpage').fullpage({
        anchors: ['1', '2', '3', '4','5'],
        navigationTooltips: ['1','2','3','4','5'],
        css3: true,
        scrollingSpeed: 1000,
        navigation: true,
        slidesNavigation: true,
        responsiveHeight: 330,
        dragAndMove: true,
        dragAndMoveKey: 'YWx2YXJvdHJpZ28uY29tX0EyMlpISmhaMEZ1WkUxdmRtVT0wWUc=',
        controlArrows: false,
        autoScrolling: false,
        fitToSection: true,
        fitToSectionDelay: 1000,


        afterLoad: function(anchorLink, index){
            //console.log('anchor:'+anchorLink+'|index: '+index);
            //console.log(check);
            add_margin_top();
            checknumber(index);
        }
    });

    $.fn.fullpage.setKeyboardScrolling(true);
    add_list();

    $('#fp-nav').append('<div id="moveable" class="one"></div>');

    @desktop
    $(function() {
        $.scrollify({
            section : ".section",
        });
    });


    @elsedesktop
        @tablet
        $(function() {
            $.scrollify({
                section : ".section",
            });
        });

        @endtablet
    @enddesktop
@endsection
@section('inside_js')

@endsection


