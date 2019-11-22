@extends('layouts.main')

@section('content')
    <div class="content_container">
        <div class="row" style="margin-right:0;">
            <div class="col-lg-offset-5 col-lg-7 shade_background hse_content mar_bot_20">
                <div class="margin_10 primary_color">
                    <h1 class="fira_bold">Health and Safety</h1>
                    <br>
                    <p class="san_light font_size_18_p">
                        The management of Seascape Surveys recognises that the Health and Safety of employees is a fundamental requirement for successful business.
                        <br><br>
                        The management of Seascape Surveys is committed to :
                        <br><br>
                        Operational compliance with all national and international regulatory HSE requirements, and are directly accountable to clients for the HSE
                        <br><br>
                        performance of all Seascape Surveys employees.
                        <br><br>
                        Making regular meeting to review HSE performance and issues and ensure that HSE matters are well communicated from top to bottom.
                        <br><br>
                        Providing general and specialist safety training to all employees.<br>
                        Making regular site visits to appreciate first hand the working conditions<br>
                        on vessels, and to gather feedback and comments from employees.
                        <br><br>
                        Support all employees in their actions to stop work, or refuse to work if they feel unsafe, or believe there is a safer way to work.
                    </p>
                    <br><br><br>
                    <button class="btn" style="border: 1px solid #153486;padding: 2% 8% 2% 4%;
    background: transparent;">
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
