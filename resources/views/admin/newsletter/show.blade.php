<!--
/**
 * Created by PhpStorm.
 * User: muhyasin89
 * Date: 30/11/17
 * Time: 19.08
 */-->

@extends('layouts.admin')

@section('content')
    <h1>Showing Newsletter with id:{{ $newsletter->id }} </h1>

    <div class="jumbotron text-center">
        <h2>{{ $newsletter->title }}</h2>
        <p>
            <strong>Title:</strong> {{ $newsletter->title }}<br>
            <strong>Content:</strong> {!! $newsletter->content !!}<br>
            <strong>Description:</strong> {!! $newsletter->description  !!}<br>
            <strong>Date:</strong> {!! $newsletter->date  !!}<br>
            <strong>Publish:</strong>
            @if($newsletter->publish)
                Publish
            @else
                Pending
            @endif
            <br>
        </p>
    </div>

    </div>
@endsection
