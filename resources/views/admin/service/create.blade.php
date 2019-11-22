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

        {{ Form::open(array('url' => 'admin/service/equipment', 'files' => true)) }}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
        </div>
            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image', $attributes = array()) }}
            </div>
            <div class="form-group">
                {{ Form::label('category', 'Category') }}
                {{ Form::select('category', array('vessel' => 'Vessel', 'rov' => 'ROV'),null,  array('class'=> 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('pdf_file', 'PDF File') }}
                {{ Form::file('pdf_file', $attributes = array()) }}
            </div>

        <div class="form-group">
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
        </div>
            <div class="form-group">
                {{ Form::label('next', 'Next') }}
                {{ Form::select('next', $data,null,  array('class'=> 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('prev', 'Prev') }}
                {{ Form::select('prev', $data,null,  array('class'=> 'form-control')) }}
            </div>

        {{ Form::submit('Create Service!', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>

@endsection