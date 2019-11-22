@if($data['page'] == 'home')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <style>
        .statistic h1{
            font-size: 4em;
        }

        .company img{
            margin: 15% 0 0 10%;
        }

        .header_top{
            margin-top:13.5%;
            margin-left: 5%;
        }


        .mar_home_list{
            margin: 2% 5%;
        }

    </style>
@elseif($data['page'] == 'about')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@elseif($data['page'] == 'services')
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
    <style>
        .list_fleet{
            margin-bottom: 10px;
        }
        #lf_link {
            text-indent: 30px;
        }
        #lf_link a:hover, #lf_link a{
            color: #153486;
            text-decoration: none;
        }
    </style>
@elseif($data['page'] == 'news')
    <style>
        .header_top_about{
            margin-left: 2.5%;
        }

        .news_list{
            border-color: #153486;
            border-width: 1px;
            border-style: solid;
        }

        .news_list:hover{
            background-image: url({{asset('image/news/news_hover.png')}});
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
        }

        .news_list p, .news_list h2{
            padding: 5% 2.5%;
        }



        .mar_btn_bot{
            margin-bottom: 10px;
        }

        .btn-a{
            color: #fff;
            background-color: #153486;
            border-color: #2e6da4;
            width: 12.5em;
        }
    </style>
@elseif($data['page'] == 'hse')
    <style>
        .hse_content{
            margin-top: -13%;
            z-index: -1;
            animation: slide_up 3s;
        }
        .info {
            color: #153486;
            margin-left: 8%;
            margin-top: 0%;
        }
        .hse_header_title{
            font-size: 48px;
            max-width: 350px;
        }

        @keyframes slide_up{
            from {margin-top: -9%;  }
            to{margin-top: -13%;  }
        }
    </style>
@elseif($data['page'] == 'career')
    <style>
        .career_content{
            margin-top: -13%;
            z-index: -1;
            animation: slide_up 3s;
        }
         .info {
            color: #153486;
            margin-left: 8%;
            margin-top: 0%;
        }
        .hse_header_title{
            font-size: 48px;
            max-width: 350px;
        }
        @keyframes slide_up{
            from {margin-top: -9%;  }
            to{margin-top: -13%;  }
        }
    </style>
@elseif($data['page'] == 'project')
    <link href="{{ asset('css/project.css') }}" rel="stylesheet">
@elseif($data['page'] == 'contact')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endif
