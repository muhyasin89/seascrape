@extends('layouts.main')

@section('content')
    <div class="content_container mar_bot_20">
        <div class="row">
            <div class="col-lg-6 primary_color">
                <div class="pad_right_20">
                    <p>ABOUT / ABOUT COMPANY</p>
                    <h2 class="color_new">Seascape Survey</h2>
                    <br>
                    <br>
                    <p style="font-size:18px;">Founded in 2005, Seascape Surveys has rapidly developed a strong record of outstanding performance, and is at the forefront in the industry, providing results driven solutions and services to clients throughout the Asia-Pacific region and beyond.<br><br>

                        In February 2008, Seascape Surveys became a subsidiary company of Mermaid Offshore Services (MOS), a leading provider of offshore Saturation and Air Diving, subsea Inspection, Repair and Maintenance, and subsea construction services to the offshore oil & gas industry. </p>
                    <br>
                    <br>
                    <br>
                    <hr style="border-top: 2px solid #153486;">
                    <br>
                    <h3 class="color_new" style="padding:2%">Seascape Surveys are driven by an experienced and client focussed management team, and currently employs over 100 staff members throughout South East Asia.  </h3>
                    <br>
                    <hr style="border-top: 2px solid #153486;">
                    <img src="{{ asset('image/about/background_about_mission.png') }}" width="60%" style="position: absolute;bottom: -34.5%; z-index: -1" />
                </div>
            </div>
            <div class="col-lg-6 mar_top_10">
                <div class="pad_right_5 pad_left_15">
                    <img src="{{ asset('image/about/image_final.png') }}" width="100%" style="margin: 3% 0" />
                    <p class="san_light mar_top_5 mar_bot_5 primary_color" style="font-size:18px;">
                        Seascape Surveys owns and operates a large inventory of survey, positioning, and subsea inspection equipment, and own and operate the SS Barakuda, a dedicated offshore survey and ROV support vessel.
                        <br><br><br>
                        Seascape Surveys have completed projects across the globe, and developed an enviable reputation of delivering excellent service throughout the industry, with high quality equipment and personnel providing specialist survey, positioning and subsea inspection services safely and cost effectively.
                    </p>
                    <br><br><br>
                    <button class="btn" style="border: 1px solid #153486;padding: 2% 8% 2% 4%;
    background: white;">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset('image/services/pdf_icon.png') }}" width="100%" />
                            </div>
                            <div class="col-lg-8">
                                <p style="color:#3859A8; font-family: norito-sans-regular;">Download Our Brochure</p>
                                <h4 style="color:#153486; font-family: norito-sans-semi-bold;">HSE-Seascape.pdf</h4>
                            </div>
                        </div>
                    </button>
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
