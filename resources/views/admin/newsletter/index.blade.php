<!--/**
 * Created by PhpStorm.
 * User: muhyasin89
 * Date: 30/11/17
 * Time: 19.08
 */-->
@extends('layouts.admin')

@section('content')
    <h3>Newsletter</h3>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td colspan="8">
                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-large btn-info" href="{{ URL::to('admin/newsletter/create') }}">Create Newsletter</a>
            </td>
        </tr>
        <tr>
            <td>No</td>
            <td>Title</td>
            <td>Content</td>

            <td>Description</td>
            <td>Date</td>
            <td>Publish</td>
            <td>Type</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>

        <?php $i =1; ?>
        @foreach($news as $key => $value)
        <tr>
            <td><?php echo $i; $i++; ?></td>
            <td>{{ $value->title }}</td>
            <td>{!! $value->content !!}</td>

            <td>{{ $value->description }}</td>
            <td>{{ $value->date  }}</td>
            <td>{{ $value->publish }}</td>
            <td>{{ $value->type }}</td>
            <td>
                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('admin/newsletter/' . $value->id) }}">Show Newsletter</a><br>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('admin/newsletter/' . $value->id . '/edit') }}">Edit Newsletter</a>


                {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'newsletter.destroy', $value->id  ] ])}}
                    {{Form::button('<i class="fa fa-trash-o"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                {{ Form::close() }}
                <table class="table table-striped">
                    <tr>
                        <td>Send NewsLetter</td>
                    </tr>
                    <tr>
                        <td>
                            {{ Form::open(array('url' => 'admin/newsletter/setting')) }}
                            <div class="form-group">
                                {{ Form::label('group', 'Group') }}
                                {{ Form::hidden('id', $value->id) }}
                                {{ Form::select('group', $data,null,  array('class'=> 'form-control')) }}
                                {{ csrf_field() }}
                                {{ Form::submit('Send NewsLetter!', array('class' => 'btn btn-primary')) }}
                            </div>
                            {{ Form::close() }}
                        </td>

                    </tr>

                </table>
            </td>
        </tr>



        @endforeach
        </tbody>
    </table>
@endsection