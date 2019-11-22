<header id="header" class="menu_header row mar_top_0" >
    <div class="head_nav sticky add_head_nav">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
            <div class="hidden-xs ">
                <div class="add_head_nav_sub">
                    <a href="#menu" class="menu-link">
                        MENU
                    </a>
                </div>
                <a href="{{ url('/') }}" class="home_style white_background">
                    <img id="img-nav" class="width_150" src="{{ asset('image/SSI_Color.png') }}" />
                </a>
            </div>
            <a href="#menu" class="menu-link hidden-lg hidden-md hidden-sm ">
                <img id="nav_img" src="{{ asset('image/menu_header.png') }}" />
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-6 float_right san_light hidden-md hidden-sm">
            <h4 class="float_right first_color san_light resp_lh_56 first_class">FIRST CLASS SUBSEA SPECIALIST</h4>
        </div>
    </div>
</header>
@if($data['page'] == 'home')
    <!-- <div id="first-trigger" style="position:absolute">
    <div class="hidden-xs hidden-sm mar_top_5"></div>
    <div id="headerHome" class="section header_div" data-anchor="1" data-strict='true' style="position:absolute">
        <div class="row ">
            <div class="col-lg-12">
                <div class="home_banner" >
                    <img id="img_home_header" class="home_slide" src="{{ asset('image/header_combine1.png') }}" />
                    <div class="white_color row info_home add_info_home">
                        <p class="san_light white_color mar_bot_2" >SEASCAPE SURVEYS INDONESIA</p>
                        <h2 class="fira_bold mar_bot_5" id="survey_home_h2">We provides a wide range of survey and positioning
                            services onboard offshore installation and construction vessels and barges.</h2><br>
                        <a href="#" class="font_size_16 font_weight_bold"><button class="home_btn">Learn More</button></a>
                    </div>
                    <div class="home_banner_before"></div>
                </div>
            </div>
        </div>
    </div>
        <div id="headerHomeEnd"></div> -->

@elseif(($data['page'] == 'about') || ($data['page'] == 'services' && $data['sub'] != 'equipment_details') || ($data['page'] == 'project') || ($data['page'] == 'hse') || ($data['page']== 'career'))
    <div class="row header_top_about add_header_top_about">
        <img src="{{ asset('image/about/header_about_mobile.png') }}"/>
        @if($data['page'] == 'about')
            <div class="info white_color row add_info_first">
                <p class="san_light white_color" style="letter-spacing: 4px;">ABOUT US</p>
                <h1 class="fira_bold white_color">Get to know more<br>about us</h1>
            </div>
            <div class="info white_color san_light add_info_second">
                <div class="row">
                    <div class="col-lg-3 ">
                        @if($data['sub'] == 'company')
                                <span class="font_size_16 font_weight_bold " id="underlined">About Company</span>
                        @else
                            <a href="{{ url('about/company') }}">
                                <span class="font_size_16">About Company</span>
                            </a>
                        @endif
                    </div>
                    <div class="col-lg-3">
                        @if($data['sub'] == 'core')
                            <span class="font_size_16 font_weight_bold " id="underlined">Core Value</span>
                        @else
                            <a href="{{ url('about') }}">
                                <span  class="font_size_16">Core Value</span>
                            </a>
                        @endif
                    </div>
                    <div class="col-lg-3">
                        @if($data['sub'] == 'mission_statement')
                            <span class="font_size_16 font_weight_bold " id="underlined">Mission Statement</span>
                        @else
                            <a href="{{ url('about/mission_statement') }}">
                                <span class="font_size_16">Mission Statement</span>
                            </a>
                        @endif
                    </div>
                    <div class="col-lg-3">
                        @if($data['sub'] == 'key_management')
                            <span class="font_size_16 font_weight_bold " id="underlined">Key Management</span>
                        @else
                            <a href="{{ url('about/key_management') }}">
                                <span class="font_size_16">Key Management</span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @elseif($data['page'] == 'services' && $data['sub'] != 'equipment_details')
            <div class="info white_color row add_info_first">
                <p class="san_light white_color" style="letter-spacing: 4px;">SERVICES</p>
                <h1 class="fira_bold white_color">
                    @if($data['sub'] == 'subsea_inspection')
                        Subsea Inspection
                    @elseif($data['sub'] == 'survey_positioning')
                        Survey & Positioning
                    @elseif($data['sub'] == 'our_equipment')
                        Subsea Inspection
                    @endif
                </h1>
            </div>
            <div class="info white_color san_light add_info_second">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="{{ url('services') }}">
                            @if($data['sub'] == 'survey_positioning')
                                <div class="font_size_16 font_weight_bold" id="underlined">Survey & Positioning</div>
                            @else
                                <div class="font_size_16">Survey & Positioning</div>
                            @endif
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('services/subsea_inspection') }}">
                            @if($data['sub'] == 'subsea_inspection')
                                <div class="font_size_16 font_weight_bold" id="underlined">Subsea Inspection</div>
                            @else
                                <div class="font_size_16">Subsea Inspection</div>
                            @endif
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('services/our_equipment') }}">
                            @if($data['sub'] == 'our_equipment')
                                <div class="font_size_16 font_weight_bold" id="underlined">Our Equipment</div>
                            @else
                                <div class="font_size_16">Our Equipment</div>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        @elseif($data['page'] == 'career')
            <div class="info white_color row add_info_first">
                <p class="san_light white_color" style="letter-spacing: 4px;">CAREER</p>
                <h1 class="fira_bold white_color hse_header_title">Join With Us</h1>
            </div>
        @elseif($data['page'] == 'hse')
            <div class="info white_color row add_info_first">
                <p class="san_light white_color" style="letter-spacing: 4px;">HSE</p>
                <h1 class="fira_bold white_color hse_header_title">Health & Safety Environtment</h1>
            </div>
        @elseif($data['page'] == 'project')
            <div class="info white_color row add_info_first">
                <p class="san_light white_color" style="letter-spacing: 4px;">PROJECT</p>
                @if($data['sub'] == 'list')
                    <div class="fira_bold white_color" style="font-size: 48px; margin-bottom: 10px; margin-top: 20px;">
                        Selective Work <br> History
                    </div>
                @elseif($data['sub'] == 'project')
                    <div class="fira_bold white_color" style="font-size: 48px; max-width: 60%; margin-bottom: 10px; margin-top: 10%;">
                        <span class="primary_color white_background">
                            {{$data['detail']['title']}}
                        </span>
                    </div>
                @endif
            </div>
        @endif
    </div>
@elseif($data['page'] == 'news')
    @if($data['sub'] == 'list')
    <div class="row header_top_about">
        <img src="{{ asset('image/news/header_news.png') }}">
    </div>
    <div class="info white_color row">
        <p>FEATURED NEWS</p>
        <h2>Seascape Awarded 52 Million Dollar <br>Contract with PHE ONWJ</h2>
    </div>
    @elseif($data['sub'] == 'newsletter')
        <div class="row header_top_about">
            <img src="{{ asset('image/news/header_news_2.png') }}">
        </div>
        <div class="info white_color row">
            <p>NEWSLETTER</p>
            <h2>Seascape survey<br>
                Newsletter</h2>
        </div>
    @elseif($data['sub'] == 'post')
        <div class="row header_top_about">
            <img src="{{ asset('image/news/header_news_3.png') }}">
        </div>
    @endif
@endif
