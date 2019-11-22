@extends('layouts.main')

@section('content')
    <div class="content_container mar_bot_20">
        <div class="row">
            <div class="col-lg-6 primary_color">
                <div class="pad_right_20">
                    <p class="san_semi_bold">ABOUT / MISSION STATEMENT</p>
                    <h2 class="fira_bold color_new">Mission Statement</h2>
                    <br><br>
                    <p class="san_light" style="font-size:18px"> Seascape Surveys is a provider of Subsea Survey, ROV, Diving, Subsea Inspection and Maintenance services to the offshore energy sector globally with a focus on the Asia-Pacific region. We actively promote a culture of Health, Safety, Environmentally friendly, Quality and Integrity throughout our organization.<br>
                        <br><br><br>
                        Through practical and cost-effective solutions, reliability and teamwork we will build mutually beneficial long-term relationships with our clients and employees.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mar_top_8">
                <div class="pad_right_5 pad_left_15">
                    <hr style="border-top: 2px solid #153486;">
                    <br>
                    <h3 class="san_semi_bold color_new" style="padding:0 2%">Our mission is to be the leading supplier of Subsea Survey, ROV, Diving, Subsea Inspection and Maintenance services within the Asia-Pacific region with a reputation for delivering high quality services that meet or exceed client requirements, safely, effectively and within budget.</h3>
                    <br>
                    <hr style="border-top: 2px solid #153486;">
                    <img src="{{ asset('image/about/background_about_mission.png') }}" width="55%" style="position: absolute;bottom: -73.5%; z-index: -1;right: 0;" />

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
