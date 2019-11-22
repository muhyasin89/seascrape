@extends('layouts.main')

@section('content')
    <div class="mar_bot_15 primary_color san_light">

        <img src="{{ asset('image/about/Line.png') }}" width="100%" />
        @foreach($data['list'] as $item)
            <div class="row project_container" >
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3" style="margin-top:20px">
                    <p class="san_light" style="font-size: 18px;">Subsea Inspection</p>
                    <p class="san_light" style="font-size: 14px;color: #7183B1;">{{ $item['year'] }}</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-7">
                    <h2 style="font-weight: bold;">{{ $item['title'] }}</h2>
                    <p class="san_light" style="font-size: 14px;color: #7183B1;">Fleet: {{ $item['vesels'] }}</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align:right;">
                    <a href="{{ url('project/project/'.$item['id']) }}" >
                        <button class="btn btn-primary mar_top_10">See Detail</button>
                    </a>
                </div>
            </div>
            <img src="{{ asset('image/about/Line.png') }}" width="100%" />
        @endforeach
    </div>
    <div class="shade_background primary_color">
        <div style="padding:2.5% calc(5% + 15px)">
            <div class="row" >
                <div class="col-lg-7 col-xs-7">
                    <p class="san_light" style="letter-spacing:4px;">CAREER OPPORTUNITIES</p>
                    <h1 class="fira_bold">Let’s join with us</h1>
                </div>
                <div class="col-lg-offset-2 col-lg-3 col-xs-4" style="text-align:right">
                    <button class="btn btn-primary" style="margin-top:10%;">CAREER</button>
                </div>
            </div>
        </div>
    </div>
@endsection
