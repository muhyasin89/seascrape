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
        {{ Form::open(array('url' => 'admin/client/model', 'files' => true)) }}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
        </div>
            <div class="col-lg-12">
                <img class="cropper" id="image_upload_preview" src="#">
            </div>
            <div class="col-lg-12">
                    <div class="form-group">
                        {{ Form::label('image', 'Image') }}
                        {{ Form::file('image', $attributes = array('id'=>'image_file')) }}
                    </div>
                    {{ Form::submit('Create Client Model!', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
            </div>
    </div>

@endsection

@section('js_extends')
<script>
    function readURL(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#image_upload_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image_file").change(function() {
        readURL(this);
    });
</script>
@endsection