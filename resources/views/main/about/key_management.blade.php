@extends('layouts.main')
@section('extends_css')
    <style>
        .management{
            display: block;
            cursor: pointer;
        }

        #next, #prev{padding-top: 150px;}
        #main_text{padding-top: 10%;}

        .description_text{ min-height: 400px}
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-12 mar_bot_5">
                <div class="mar_left_2_5">
                    <p class="san_light">ABOUT / KEY MANAGEMENT</p>
                    <h2 class="fira_bold color_new">Key Management</h2>
                    @if($data['first'])
                        <div id="key_management_primary" class="row mar_top_5">
                            <div class="col-lg-offset-1 col-lg-4 image_first">
                                <img id="main_image" src="{{ asset('image/about/management/'.$data['first']->image) }}" width="300px"></div>
                            <div class="col-lg-5 description_text shade_background">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="{{ asset('image/prev.png') }}" id="prev"  data-id="{{$data['first']->prev}}" width="75px" class=" management"/>
                                    </div>
                                    <div id="main_text" class="col-lg-8">
                                        <p class="break_word">
                                            {!!  $data['first']->description !!}
                                        </p>
                                    </div>
                                    <div class="col-lg-1">
                                        <img src="{{ asset('image/next.png') }}" id="next" width="75px" data-id="{{$data['first']->prev}}" class=" management"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="row grid">
                @foreach($data['rest'] as $item)
                <div class="col-lg-3 management" data-id="{{ $item['id'] }}">
                    <p align="center">
                        <img src="{{ asset('image/about/management/'.$item['image']) }}" width="200px" />
                    </p>

                    <h5 class="fira_bold" align="center">{{ $item['name'] }}</h5>
                    <p align="center"><span class="break_word">{!!  $item['position'] !!} </span>  </p>
                </div>
                @endforeach
            </div>
    </div>
    <div class="row primary_color shade_background ">
        <div class="col-lg-7 col-sm-7 col-xs-7">
            <div class="margin_5">
                <p class="san_light">SERVICES</p>
                <h2 class="fira_bold">See Company Structure</h2>
            </div>

        </div>
        <div class="col-lg-offset-2 col-lg-3 col-sm-4 col-xs-4">
            <button class="btn btn-primary mar_top_20">Services</button>
        </div>
    </div>

@endsection

@section('extends_js')
    <script src="{{ asset('js/scrollmagic.js') }}"></script>
    <script src="{{ asset('js/gsap.js') }}"></script>
    <script src="{{ asset('js/masonry.js') }}"></script>
<script>

    var main_image= TweenMax.from("#main_image", 2.2, {width:"0px",  ease:Power1.easeIn}),
        main_text= TweenMax.from("#main_text", 2.2, {width:"0px",  ease:Power1.easeOut});

    $('.grid').masonry({
        // options
        itemSelector: '.management'
    });

    $( ".management" ).click(function() {
        var link=$(this).data('id');
        $.ajax({
            url: "/about/key_management/"+link,
            context: document.body
        }).done(function(data) {
            console.log(data.description);
            $('#next').data("id", data.next);
            $('#prev').data("id", data.prev);


            $('#prev').click(function () {
                main_image.restart();
                main_text.restart();
            });
            
            $('#next').click(function () {
                main_image.restart();
                main_text.restart();
            });

            $('#main_text').empty();
            $('#main_text').html(data.description);
            $('#main_image').attr("src","/image/about/management/"+data.image);
//            var key_management= $('#key_management_primary');
//            if(key_management.hasClass('fadeInLeft')){
//                key_management.removeClass('fadeInLeft');
//                key_management.addClass('fadeInRight');
//            }else if(key_management.hasClass('fadeInRight')){
//                key_management.removeClass('fadeInRight');
//                key_management.addClass('fadeInLeft');
//            }
//            else{
//                key_management.addClass('animated fadeInLeft');
//            }

        });
    });
</script>
@endsection
