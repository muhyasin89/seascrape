@extends('layouts.main')
@section('extends_css')
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row" style="margin:0 9% 2%" >
        <div class="col-lg-5" >
            <p class="san_light" style="color:#153486;letter-spacing: 2px;">SURVEY & POSITIONING</p>
            <h2 class="fira_bold" style="color:#153486;">Offshore Construction<br> Support</h2>
        </div>
        <div class="col-lg-7 primary_color san_light mar_bot_5">
            <div style="padding:0 7% 0 10%">
                <p style="font-size:18px;">Seascape Surveys provides a wide range of survey and positioning services onboard offshore installation and construction vessels and barges.
                    <br><br>
                    Using the latest in surface and subsea positioning and telemetry equipment, Seascape Surveys work for a range of clients onboard offshore diving, ROV and construction support vessels, and deliver the accuracy and reliability required to safely and efficiently execute any project above or below the surface.
                    <br><br>
                    Our standard DP vessel positioning systems include high accuracy DGPS receivers, navigation and recording systems, precision gyrocompasses, motion sensors, USBL systems, USBL mini-beacons, and velocity of sound profilers.
                    <br><br>
                    Seascape Surveys can be relied upon to provide accurate survey and positioning during offshore platform installations, pipelay operations, or topside float-over installations.
                    <br><br>
                    Our standard barge positioning systems include high accuracy DGPS receivers, navigation and recording systems, barge and AHT management systems, gyrocompasses, remote telemetry links, industrial wireless networking, and AHT positioning systems.
                    <br><br>
                    If you own or operate offshore construction vessels, are currently tendering for offshore installation projects, or are planning to execute offshore installation projects in the coming months, we would be pleased to provide you with further details or a complete technical and commercial proposal upon request. </p>
            </div>
        </div>
    </div>
    <div class="shade_background primary_color">
        <div class="row " style="margin: 0 9% 2%">
            <div class="col-lg-7">
                <div style="padding: 0 10% 5% 0;">
                    <p class="san_semi_bold mar_top_5" style="color:#153486;letter-spacing: 2px;">SURVEY & POSITIONING</p>
                    <h2 class="fira_bold"> Positioning of DP Vessel</h2>
                    <br><br>
                    <p class="san_light" style="font-size:18px;">
                        <img id="service_img" src="{{ asset('image/services/service_image_1.png') }}" class="mar_left_5 mar_bot_5 visible-xs">
                        Seascape Surveys specialises in providing surface and subsea positioning services onboard dynamically-positioned ( DP ) vessels. We provide these services to a wide range of Clients, primarily onboard Diving Support and ROV Support Vessels.
                        <br><br>
                        Our standard DP vessel positioning system includes DGPS receivers, navigation and data logging systems, gyrocompass, motion reference unit, sound velocimeter and mini-beacons. A 2-man survey team is generally adequate to provide 24-hours operations for most project applications.
                        <br><br>
                        We can also provide USBL transducers and any other additional survey equipment and personnel if required for particular project applications.
                        <br><br>
                        If you own or operate DP vessels in the offshore oil and gas industry we would be pleased to provide you with further details or a complete technical and commercial proposal upon request.
                        <br><br>
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="{{ asset('image/services/service_image_1.png') }}" width="100%" class="mar_top_10 hidden-xs" style="padding-right:10%" />
            </div>
        </div>
    </div>
    <div class="row" style="margin:0 9% 2%">
        <div class="col-lg-5">
            <img src="{{ asset('image/services/service_images_2.png') }}" class="mar_top_10 hidden-xs" width="100%" />
        </div>
        <div class="col-lg-7">
            <div class="primary_color" style="padding: 0 7% 5% 10%;">
                <p class="san_semi_bold mar_top_5" style="color:#153486;letter-spacing: 2px;">SURVEY & POSITIONING</p>
                <h2 class="fira_bold">Offshore Survey Services</h2>
                <br><br>
                <p class="san_light" style="font-size:18px;">
                    <img src="{{ asset('image/services/service_images_2.png') }}" class="mar_left_5 mar_bot_5 visible-xs" />
                    Seascape Surveys has the resources, capabilities and experience to perform a wide range of marine survey projects
                </p>
                <br>
                <ul id="oss_list" class="san_light">
                    <li>Positioning of DP Vessels</li>
                    <li>Offshore Construction Support</li>
                    <li>ROV Pipeline/Platform Inspection</li>
                    <li>Drilling Rig Positioning</li>
                    <li>Bathymetric Surveys</li>
                    <li>Drilling Site, Platform Site and Pipelines/Cable Route 	Surveys</li>
                    <li>Metocean Surveys</li>
                    <li>Geotechnical Surveys</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shade_background primary_color mar_top_10">
        <div style="padding:2.5% calc(5% + 15px)">
            <div class="row" >
                <div class="col-lg-7 col-xs-7">
                    <p class="san_light" style="letter-spacing:4px;">CONTACT</p>
                    <h1 class="fira_bold">Let’s get in touch with us</h1>
                </div>
                <div class="col-lg-offset-2 col-lg-3 col-xs-4" style="text-align:right">
                    <button class="btn btn-primary" style="margin-top:10%;">CONTACT</button>
                </div>
            </div>
        </div>
    </div>
@endsection
