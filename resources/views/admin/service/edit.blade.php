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
            {!! Form::model($service, ['method' => 'PUT','route' => ['service_equipment.update', $service->id],'files'=> true]) !!}
            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', $service->title, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('category', 'Category') }}
                {{ Form::select('category', array('vessel' => 'Vessel', 'rov' => 'ROV'),null,  array('class'=> 'form-control')) }}
            </div>
            <div class="form-group">
                <a href="{{ asset('image/service/equipment/'.$service->pdf_file) }}" target="_blank">Download File</a><br>
                File Path : {{ asset('image/service/equipment/'. $service->pdf_file) }}<br>
                {{ Form::label('pdf_file', 'PDF File') }}
                {{ Form::file('pdf_file', $attributes = array()) }}
            </div>
        <div class="form-group">
            <img src="{{ asset('image/service/equipment/'.$service->image) }}"  width="150px" /><br>
            File Path : {{ asset('image/service/equipment/'. $service->image) }}<br>
            {{ Form::label('image', 'Image') }}
            {{ Form::file('image', $attributes = array()) }}
        </div>
            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::textarea('description', $service->description, array('class' => 'form-control')) }}
            </div>
        <div class="form-group">
            {{ Form::label('next', 'Next') }}
            {{ Form::select('next', $data, null,  array('class'=> 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('prev', 'Prev') }}
            {{ Form::select('prev', $data, null,  array('class'=> 'form-control')) }}
        </div>
            {{ Form::submit('Create Service!', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>

@endsection