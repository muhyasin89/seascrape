@extends('layouts.main')

@section('content')
    <div class="margin_5">
        <div class="row">
        <div class="col-lg-12">
            <p>NEWS</p>
            <h2>Latest News</h2>
        </div>
    </div>
        <div class="row grid">
            @foreach($data['list'] as $item)
                <a href="{{ url('/news/detail/'.$item['id']) }}">
            <div class="col-lg-4 news_list">
                <p class="san_light">{{ $item->category }}</p>
                <h2 class="fira_bold">{{ $item->title }}</h2>
            </div>
                </a>
            @endforeach
        </div>
    </div>

@endsection
@section('extends_js')
    <script src="{{ asset('js/masonry.js') }}"></script>
    <script>
        $('.grid').masonry({
            // options
            itemSelector: '.news_list'
        });
    </script>
@endsection

