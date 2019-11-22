<!--
/**
 * Created by PhpStorm.
 * User: muhyasin89
 * Date: 12/01/18
 * Time: 14.55
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

        {{ Form::open(array('url' => 'admin/subscriber/category/')) }}
        <div class="form-group">
            {{ Form::label('category', 'Category') }}
            {{ Form::text('category', Input::old('category'), array('class' => 'form-control')) }}
        </div>


        {{ Form::submit('Create Category!', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>

@endsection