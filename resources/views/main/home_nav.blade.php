<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/home_nav.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body id="all">
   <div class="row mar_top_5">
        <div class="col-lg-offset-1 col-lg-2">
            <img src="{{ URL::asset('/image/SSI_White.png') }}" width="250">
        </div>
       <div class="col-lg-offset-5 col-lg-3 mar_top_2_5">
           <h4>FIRST CLASS SUBSEA SPECIALIST</h4>
       </div>
   </div>
   <div class="row mar_top_5">
       <div class="col-lg-offset-1 col-lg-4">
           <table class="width_100">
                <tr>
                    <td class="width_50"><h2>ABOUT</h2></td>
                    <td class="width_50"><h2>PROJECT</h2></td>
                </tr>
               <tr>
                   <td><h2>NEWS</h2></td>
                   <td><h2>HSE</h2></td>
               </tr>
               <tr>
                   <td><h2>SERVICES</h2></td>
                   <td><h2>CAREER</h2></td>
               </tr>
               <tr>
                   <td><h2>ASSETS</h2></td>
                   <td><h2>CONTACT US</h2></td>
               </tr>
           </table>
       </div>
        <div class="col-lg-offset-2 col-lg-3">
            <p class="text1">Seascape Surveys are driven by experienced <br>
                And client focussed management team, and<br>
                currently employs over 100 staff members<br>
                thought South East Asia.</p>
        </div>
   </div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

