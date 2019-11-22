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
        {{ Form::open(array('url' => 'admin/about/management', 'files' => true)) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
        </div>
            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image', $attributes = array()) }}
            </div>
        <div class="form-group">
            {{ Form::label('position', 'position') }}
            {{ Form::text('position', Input::old('position'), array('class' => 'form-control')) }}
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

        {{ Form::submit('Create About!', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>

@endsection
@section('js_extends')
    <script src="{{ asset('js/tinymce/jquery.tinymce.min.js') }}"></script>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script>
        var editor_config = {
            path_absolute:"{{ URL::to('/') }}/",
            selector: "textarea",
            plugins:[
                "advlist auto link list link image charmap print preview hr anchor pagebreak",
                "searchreplace word count visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table context menu directionality",
                "emoticons template paste textcolor colorpocker textpattern"
            ],
            toolbar : "insertfileundo redo | styleselect| bold italic| alignleft aligncenter alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback: function(field_name, url, type, win){
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsTagName('body')[0].clientWidth;
                var y =window.innerHeight || document.documentElement.clientHeight || document.getElementsTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute +'laravel-filemanager?field_name='+field_name;
                console.log('cmsURL');
                if(type == 'image'){
                    cmsUrl = cmsURL + "&type=Images";
                }else{
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endsection