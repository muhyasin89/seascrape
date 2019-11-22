<!--/**
 * Created by PhpStorm.
 * User: muhyasin89
 * Date: 30/11/17
 * Time: 19.08
 */-->
@extends('layouts.admin')

@section('content')
    <div class="col-lg-11">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{ Html::ul($errors->all()) }}
        {{ Form::open(array('url' => 'admin/about/core')) }}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('content', 'Content') }}
            {{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('category', 'Category') }}
            {{ Form::select('category', array('normal' => 'Normal', 'slider' => 'Slider','both' => 'Both'),null,  array('class'=> 'form-control')) }}

        </div>
        {{ Form::submit('Create About!', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>

@endsection