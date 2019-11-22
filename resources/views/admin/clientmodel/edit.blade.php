<!--/**
 * Created by PhpStorm.
 * User: muhyasin89
 * Date: 30/11/17
 * Time: 19.08
 */-->
@extends('layouts.admin')

@section('content')
    <div class="col-lg-11">

        {{ Html::ul($errors->all()) }}
            {!! Form::model($client, ['method' => 'PUT','route' => ['client_model.update', $client->id]]) !!}
            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', $client->title, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                <img src="{{ asset('image/client/model/'.$client->image) }}" width="75px"/>
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image', $attributes = array()) }}
            </div>

            {{ Form::submit('Create Client Model!', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>

@endsection