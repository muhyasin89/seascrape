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
                <a href="{{ url('/admin/about/core/create') }}"><button class="btn btn-primary">
                        Create About Core Content
                    </button></a>
            </td>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{ $project->name }}</td>
        </tr>
        <tr>
            <td>Image</td>
            <td><img src="{{ asset('image/about/management/'.$project->image) }}" width="75px" ></td>
        </tr>
        <tr>
            <td>Position</td>
            <td>{{ $project->position }}
        </tr>
        <tr>
            <td>Description</td>
            <td>{{ $project->description }}</td>
        </tr>
        <tr>
            <td>Action</td>
            <td> <a href="{{ url('admin/about/management/'.$project->id.'/edit') }}"><button class="btn btn-warning">
                        Edit
                    </button></a>
                {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'management.delete', $project->id  ] ])}}
                {{Form::button('<i class="fa fa-trash-o"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                {{ Form::close() }}</td>
        </tr>
        </thead>

    </table>
@endsection