@extends('layouts.main')
@section('extends_css')
<style>
    .news_news{
        display: block;
        cursor: pointer;
    }

    .news_news:hover {
        color: white;
        background-image: url({{ url('image/news/news_hover.png') }});
        background-repeat: no-repeat;
        background-size: 100% 100%;

    }

    #maps{
        min-height: 400px;
        background: transparent;
    }

    #maps iframe{
        width: 100%;
        max-height: 500px;
    }
    #maps p{
        margin:0;
    }
</style>
    {{--<link href="{{ asset('js/parallax.js') }}" rel="stylesheet" />--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
@endsection

@section('content')
    <div class="contact_container primary_color">
        <div class="contact_image">
            <img src="{{ asset('image/contact.jpg') }}"/>
        </div>
        <div class="row mar_top_5 ">
            <div class="col-lg-offset-2 col-lg-7 mar_top_8">
                <p style="color: #7183B1;">CONTACT US</p>
                <h1>Seascape Surveys has offices<br> located throughtout<br> the Asia - Pacific Region.
                </h1>
            </div>
        </div>
        <div class="row mar_top_2_5 mar_bot_5">
            <div class="col-lg-offset-1 col-lg-5 shade_background pad_5">
                <p class="san_semi_bold" style="color:#7183B1;">GENERAL INFORMATION</p>
                <p class="font_size_18_p fira_bold">office@seascapesurveys.com </p><br>
                <p class="san_semi_bold" style="color:#7183B1;">VESSEL & PROJECT ENQUIRIES</p>
                <p class="font_size_18_p fira_bold">info@seascapesurveys.com </p><br>
                <p class="san_semi_bold" style="color:#7183B1;">CAREER & VACANCY</p>
                <p class="font_size_18_p fira_bold">recruitment@seascapesurveys.com </p><br>
            </div>

        </div>
    </div>
    <div class="row primary_color">
        <?php $val = 1; ?>
        @foreach($data['maps'] as $item)
            @if($val == 1)
                <div class="col-lg-12">
                    <div id="maps" data-relative-input="true">
                        {!! $item['maps']  !!}
                    </div>
                </div>
            @endif
                <div class="col-lg-4 news_news" data-id="{{ $item['id'] }}">
                    <div class="margin_5">
                        <p>PT. Seascape Surveys Indonesia</p>
                        <h2>{{ $item['location'] }}</h2>
                        <p>{!! $item['description'] !!}

                        </p>
                    </div>
                </div>
        <?php $val++;?>
        @endforeach
    </div>

@endsection
@section('extends_js')
<script>
    $('div.news_news').click(function(){
        var link=$(this).data('id');
        $.ajax({
            url: "/maps/"+link,
            context: document.body
        }).done(function(data) {
            $('#maps').html(data.maps)
            //console.log(data.maps);
        });

        console.log();
    });


    var maps = document.getElementById('maps');
    var parallaxInstance = new Parallax(maps, {
        relativeInput: true
    });


    parallaxInstance.friction(0.2, 0.2);

</script>
@endsection

