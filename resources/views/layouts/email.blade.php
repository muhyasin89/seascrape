
<!--**
 * Created by PhpStorm.
 * User: muhyasin89
 * Date: 02/01/18
 * Time: 14.25
 *-->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SeaScraper') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/email.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4 header_image">
            <img src="{{ asset('image/SSI_Color.png') }}"><br>
            <h4 align="center" class="san_light">FIRST CLASS SUBSEA SPECIALIST</h4>
        </div>
        <div class="col-lg-4"></div>
    </div>
    @yield('content')
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8">
                    <p align="center">
                        Questions? Seascape Surveys Indonesia is always here to help. Contact hello@seascapesurveys.com and we'll get back to you soon.
                    </p>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-offset-4 col-lg-4 social">
                    <img src="{{ asset('image/social/facebook_blue.png') }}" />
                    <img src="{{ asset('image/social/youtube_blue.png') }}" />
                    <img src="{{ asset('image/social/twitter_blue.png') }}" />
                    <img src="{{ asset('image/social/linkedin_blue.png') }}" />
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-12">
                    <p align="center">
                        This email was sent to ghiyaatsm@gmail.com. Visit seascapesurveys.com for more info.
                        If you no longer wish to receive these emails you may unsubscribe at any time.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>