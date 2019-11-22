@extends('layouts.main')

@section('content')
    <div class="project_container font_size_16 mar_top_0">
        <div class="row mar_bot_10">
            <div class="col-md-10 primary_color" id="project_desc">
                {!! $data['detail']['description']  !!}
            </div>
            <div class="col-md-2 san_light primary_color">
                <p class="font_size_13_p" style="letter-spacing: 2px;">Client</p>
                <h4>{{$data['detail']['client']}}</h4><br>
                <p class="font_size_13_p" style="letter-spacing: 2px;">Year</p>
                <h4>{{$data['detail']['year']}}</h4><br>
                <p class="font_size_13_p" style="letter-spacing: 2px;">Vessels</p>
                <h4>{!! str_replace(",","<br/>",$data['detail']['vesels']) !!}</h4><br>
                <p class="font_size_13_p" style="letter-spacing: 2px;">Duration</p>
                <h4>{{$data['detail']['duration']}}</h4><br>
                <p class="font_size_13_p" style="letter-spacing: 2px;">WROV</p>
                <h4>{{$data['detail']['wrov']}}</h4><br>
            </div>
        </div>
        <div class="row primary_color mar_bot_10" style="display:flex; align-items: center;">
            <div class="col-lg-4">
                @if($data['prevProject'])
                    <a href="{{ url('project/project/'. $data['prevProject']['id']) }}" >
                        <div class="row" style="display:flex; align-items: center;">
                            <div class="col-lg-2">
                                <img src="{{ asset('image/prev.png') }}" width="100%" />
                            </div>
                            <div class="col-lg-10">
                                <p style="color:#7183B1;">PREVIOUS PROJECT</p>
                                <h3 style="font-weight:bold;">{{ $data['prevProject']['title'] }}</h3>
                            </div>
                        </div>
                    </a>
                @endif
            </div>
            <div class="col-lg-offset-4 col-lg-4 text-right">
                @if($data['nextProject'])
                    <a href="{{ url('project/project/'. $data['nextProject']['id']) }}" >
                        <div class="row" style="display:flex; align-items: center;">
                            <div class="col-lg-10">
                                <p style="color:#7183B1;">NEXT PROJECT</p>
                                <h3 style="font-weight:bold;">{{ $data['nextProject']['title'] }}</h3>
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
