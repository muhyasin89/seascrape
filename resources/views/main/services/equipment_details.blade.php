@extends('layouts.main')
@section('extends_css')
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
@section('extends_css')
<style>
    #test{
        border: 2px solid #153486;
        min-width: 150px;
        padding: 1.5%;
        margin:2.5%;
    }
</style>
@endsection

@section('content')
    <div class="equipment_container">
        <div class="row">
            <div class="col-md-12">
               <h4 class="san_semi_bold mar_bot_2_5 primary_color mar_left_2_5 font_size_13_p">---- Fleet /
                    @if($data['detail']['category'] == 'vessel')
                        Vessel
                    @else
                        Rov
                    @endif
                    / {{ $data['detail']['title'] }}
            </h4>
            </div>
        </div>
        <div class="row mar_bot_5" style="display: flex;">
            <div class="col-lg-6 pad_right_0" >
                <img src="{{ asset('image/services/equipment/'. $data['detail']['image']) }}" id="equipment_image" >
            </div>
            <div class="col-lg-6 shade_background primary_color pad_left_0">
                <div class="margin_5">
                    <p class="san_light" style="letter-spacing:3px">
                        @if($data['detail']['category'] == 'vessel')
                            Vessel
                        @else
                            Rov
                        @endif
                    </p>
                    <h2 class="font_weight_bold mar_bot_5">{{ $data['detail']['title'] }}</h2>
                    <p class="font_size_18_p mar_bot_5">
                        {{ $data['detail']['description'] }}
                    </p>
                    <a href="{{  asset('image/services/equipment/'. $data['detail']['pdf_file'])  }}" target="_blank" id="test ">
                        <button class="shade_background" id="pdf_download">
                            <img src="{{ asset('image/services/pdf_icon.png') }}" /> {{ $data['detail']['pdf_file'] }}
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row primary_color mar_bot_10" style="display:flex; align-items: center;">
            <div class="col-lg-5">
                @if($data['prevEquipment'])
                    <a href="{{ url('services/equipment_details/'. $data['prevEquipment']['id']) }}" >
                        <div class="row" style="display:flex; align-items: center;">
                            <div class="col-lg-2">
                                <img src="{{ asset('image/prev.png') }}" width="100%" />
                            </div>
                            <div class="col-lg-10">
                                <p style="color:#7183B1;">PREVIOUS FLEET</p>
                                <h3 style="font-weight:bold;">{{ $data['prevEquipment']['title'] }}</h3>
                            </div>
                        </div>
                    </a>
                @endif
            </div>
            <div class="col-lg-2 text-center">
                <a href="{{  url('services/our_equipment/')}}">
                    <button id="pdf_download" style="background:transparent;">
                        <h4>Other Fleet</h4>
                    </button>
                </a>
            </div>
            <div class="col-lg-5 text-right">
                @if($data['nextEquipment'])
                    <a href="{{ url('services/equipment_details/'. $data['nextEquipment']['id']) }}" >
                        <div class="row" style="display:flex; align-items: center;">
                            <div class="col-lg-10">
                                <p style="color:#7183B1;">NEXT FLEET</p>
                                <h3 style="font-weight:bold;">{{ $data['nextEquipment']['title'] }}</h3>
                            </div>
                            <div class="col-lg-2">
                                <img src="{{ asset('image/next.png') }}" width="100%" />
                            </div>
                        </div>
                    </a>
                @endif
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
