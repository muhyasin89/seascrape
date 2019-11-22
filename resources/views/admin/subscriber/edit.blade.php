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
        {!! Form::model($subscriber, ['method' => 'PUT','route' => ['subscriber.update', $subscriber->id],'files'=> true]) !!}
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" placeholder="{{ $subscriber->email }}" disabled>
        </div>
        <div class="form-group">
            {{ Form::label('category', 'Category') }}
            {{ Form::select('category',$data ,null,  array('class'=> 'form-control')) }}
        </div>

        {{ Form::submit('Edit Subscriber!', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>

@endsection