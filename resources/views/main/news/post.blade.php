@extends('layouts.main')
@section('extends_css')
    <style>
        .social-container{
            position:fixed;
            left:100px;
        }
        .social-container a{
            display: block;
        }


    </style>
@endsection

@section('content')
    <div class="row mar_top_5 mar_bot_5 main_text">
        <div class="col-lg-offset-2 col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <p>{{ $data['detail']['category'] }}</p>
                    <h2>{{ $data['detail']['title'] }}</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <p>{!! $data['detail']['content'] !!}</p>
                </div>
            </div>

            <div class="row mar_top_5">
                <div class="col-lg-4">
                    @if($data['detail']['prev'] > 0)
                        <a href="{{ url('news/detail/'.$data['detail']['prev']) }}">
                            <img src="{{ asset('image/prev.png') }}" width="50px">
                        </a>
                    @endif
                </div>
                <div class="col-lg-4 col-md-offset-4">
                    @if($data['detail']['next'] > 0)
                        <a href="{{ url('news/detail/'.$data['detail']['next']) }}">
                            <img src="{{ asset('image/next.png') }}" width="50px">
                        </a>
                    @endif</div>
            </div>
        </div>
        <div class="social-container">

                <a href="#" class="facebook" aria-label="Share this page with Facebook" role="button">
                    <img src="{{ asset('image/news/facebook_share_icon.png') }}" width="50px">
                </a>

                <a href="#" class="twitter" aria-label="Share this page with Twitter" role="button">
                    <img src="{{ asset('image/news/twitter_share_icon.png') }}" width="50px">
                </a>

        </div>
    </div>
@endsection

@section('extends_js')
    <script src="{{ asset('js/share.js') }}"></script>
    <script src="{{ asset('js/jquery-socialshare.js') }}"></script>
    <script>
        $(function () {
            $(".social-container a, .social-container button").jqss();
        });
    </script>
@endsection
