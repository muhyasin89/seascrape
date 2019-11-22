<!--
/**
 * Created by PhpStorm.
 * User: muhyasin89
 * Date: 12/01/18
 * Time: 19.24
 */-->


@extends('layouts.admin')

@section('content')
    <div class="col-lg-11">

        {{ Html::ul($errors->all()) }}
        {!! Form::model($category, ['method' => 'PUT','route' => ['subscriber_category.update', $category->id]]) !!}
        <div class="form-group">
            {{ Form::label('category', 'Category') }}
            {{ Form::text('category', $category->category, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Edit Category!', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>

@endsection