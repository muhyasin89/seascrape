<!--/**
 * Created by PhpStorm.
 * User: muhyasin89
 * Date: 30/11/17
 * Time: 19.08
 */-->
@extends('layouts.admin')

@section('content')
    <h3>Subscriber</h3>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td colspan="4">
                <a href="{{ url('/admin/client/model/') }}"><button class="btn btn-primary">
                        Create About Core Content
                    </button></a>
            </td>
        </tr>
        <tr>
            <td>Title</td>
            <td>{{ $client->title }}</td>
        </tr>
        <tr>
            <td>Image</td>
            <td><img src="{{ asset('image/client/model/'.$client->image) }}" width="75px" ></td>
        </tr>

        <tr>
            <td>Action</td>
            <td> <a href="{{ url('admin/client/model/'.$client->id.'/edit') }}"><button class="btn btn-warning">
                        Edit
                    </button></a>
                {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'client_model.delete', $client->id  ] ])}}
                {{Form::button('<i class="fa fa-trash-o"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                {{ Form::close() }}</td>
        </tr>
        </thead>

    </table>
@endsection