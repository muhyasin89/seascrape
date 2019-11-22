@extends('layouts.main')

@section('extends_css')
<style>
    /* override position and transform in 3.3.x */
    .carousel-inner .item.left.active {
        transform: translateX(-20%);
    }
    .carousel-inner .item.right.active {
        transform: translateX(20%);
    }

    .carousel-inner .item.next {
        transform: translateX(20%)
    }
    .carousel-inner .item.prev {
        transform: translateX(-20%)
    }

    .carousel-inner .item.right,
    .carousel-inner .item.left {
        transform: translateX(0);
    }

    .carousel-control.left,.carousel-control.right {background-image:none;}


    .slider_bottom{
        padding:3% 0;
        background-image: linear-gradient(400deg, #3D7EC1 0%, #153486 100%);
    }

    .slider_bottom > div > div {
        padding-left:7%;
    }

    .slider_bottom_item{
        padding: 3% 0;
    }


    #content-slider li{
        background-color: #EEF5FF;
        display: list-item;
        min-height: 300px;
        max-width: 300px;
        margin: 0 1%;
    }

    #content-slider li > h2,#content-slider li > p{
        padding: 15px 35px;
    }



</style>
<link href="{{ asset('css/lightslider.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="primary_color content_container" >
        <div class="row">
            <div class="col-lg-4">
                <p class="san_semi_bold" style="letter-spacing:2.15px"> ABOUT | CORE VALUE</p>
                <h1 class="fira_bold color_new">CORE VALUE</h1>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    @foreach($data['content'] as $item )
                        <div class="col-lg-6">
                            <div class="content_about pad_10">
                                <h2 class="fira_bold">{{ $item['title'] }}</h2>
                                <p class="san_light font_size_16">{!! $item['content'] !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row mar_bot_10 mar_top_10">
            <div class="col-lg-12">
                <p class="san_semi_bold" style="letter-spacing: 2px;">ABOUT | COMPETITIVE STRENGTH</p>
                <h1 class="fira_bold color_new">Competitive Strength</h1>
                <br><br>
                <p class="san_light" style="font-size:18px">
                    Seascape Surveys has a achieved a well deserved reputation for providing professional services and solutions, on time, and within budget.  The key to our success is our team of skilled and committed personnel, client focused approach, and safe working culture.  Our knowledgeable team of professional staff understand in order to build trusted and long standing relationships with our clients, we need to provide the best equipment, personnel and services possible.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 slider_bottom primary_background">
            <div class="row">
                <div class="col-lg-11">
                    <ul id="content-slider" class="content-slider">
                        @foreach($data['slider'] as $item )
                            <li>
                                <h2 class="fira_bold slider_bottom_item">{{ $item['title'] }}</h2>
                                <p class="san_light pad_bot_5">{!! $item['content'] !!}</p>
                            </li>
                            <li>
                                <h2 class="fira_bold slider_bottom_item">{{ $item['title'] }}</h2>
                                <p class="san_light pad_bot_5">{!! $item['content'] !!}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="shade_background primary_color">
        <div style="padding:2.5% calc(5% + 15px)">
            <div class="row" >
                <div class="col-lg-7 col-xs-7">
                    <p class="san_light">SERVICES</p>
                    <h2 class="fira_bold">Find out what can we do <br>for you</h2>
                </div>
                <div class="col-lg-offset-2 col-lg-3 col-xs-4" style="text-align:right">
                    <button class="btn btn-primary" style="margin-top:10%;">Services</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extends_js')
    <script src="{{ asset('js/lightslider.js') }}"></script>
    <script type="text/javascript">
        $('#myCarousel').carousel({
            interval: 10000
        })

        $("#content-slider").lightSlider({
            loop:true,
            keyPress:true,
            auto:true
        });

        $('.carousel .item').each(function(){
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));


            if (next.next().length>0) {
                next.next().children(':first-child').clone().appendTo($(this));
            }
            else {
                $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
            }
        });

    </script>
@endsection
