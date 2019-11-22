<!--
/**
 * Created by PhpStorm.
 * User: muhyasin89
 * Date: 02/01/18
 * Time: 17.19
 */-->

@extends('layouts.email')
@section('content')
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8">
            <h4>{{ $newsletter->title }}</h4>
            <p>{!! $newsletter->content !!}</p>
        </div>
    </div>
@endsection