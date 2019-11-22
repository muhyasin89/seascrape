<!--
/**
 * Created by PhpStorm.
 * User: muhyasin89
 * Date: 31/01/18
 * Time: 13.53
 */-->
@extends('layouts.admin')
@section('css_extends')
    <link href="{{ asset('css/cropper.css') }}" rel="stylesheet" />
@endsection
@section('content')

<div class="row">
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
    {{ Form::open(array('url' => 'admin/client/model/image', 'files' => true)) }}
    <div class="col-lg-12">
        <input type="hidden" name="id" value="{{ $client->id }}" />
        <img class="cropper" id="image_upload_preview" src="{{ $client->image }}">
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="dataX1" class="col-sm-3 control-label">X1:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="dataX1" placeholder="x1">
            </div>
        </div>
        <div class="form-group">
            <label for="dataY1" class="col-sm-3 control-label">Y1:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="dataY1" placeholder="y1">
            </div>
        </div>
        <div class="form-group">
            <label for="dataX2" class="col-sm-3 control-label">X2:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="dataX2" placeholder="x2">
            </div>
        </div>
        <div class="form-group">
            <label for="dataY2" class="col-sm-3 control-label">Y2:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="dataY2" placeholder="y2">
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="dataWidth" class="col-sm-3 control-label">Width:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="dataWidth" placeholder="width">
            </div>
        </div>
        <div class="form-group">
            <label for="dataHeight" class="col-sm-3 control-label">Height:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="dataHeight" placeholder="height">
            </div>
        </div>
        <div>
            <button id="cropper-enable" type="button" class="btn btn-success">Enable</button>
            <button id="cropper-disable" type="button" class="btn btn-danger">Disable</button>
        </div>
    </div>
    <div class="col-lg-12">
        {{ Form::submit('Create Model!', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>
</div>

@endsection
@section('js_extends')
        <script src="{{ asset('js/cropper.js') }}" type="application/javascript"></script>
        <script>
            $(function() {
                var $cropper = $(".cropper"),
                    $dataX1 = $("#dataX1"),
                    $dataY1 = $("#dataY1"),
                    $dataX2 = $("#dataX2"),
                    $dataY2 = $("#dataY2"),
                    $dataHeight = $("#dataHeight"),
                    $dataWidth = $("#dataWidth"),
                    cropper;

                $cropper.cropper({
                    aspectRatio: 16 / 9,
                    preview: ".extra-preview",
                    done: function(data) {
                        $dataX1.val(data.x1);
                        $dataY1.val(data.y1);
                        $dataX2.val(data.x2);
                        $dataY2.val(data.y2);
                        $dataHeight.val(data.height);
                        $dataWidth.val(data.width);
                    }
                });

                cropper = $cropper.data("cropper");

                $("#cropper-enable").click(function() {
                    $cropper.cropper("enable");
                });


                $("#cropper-disable").click(function() {
                    cropper.disable();
                });
            });
@endsection