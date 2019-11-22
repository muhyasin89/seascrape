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
                <a href="{{ url('/admin/service/equipment') }}"><button class="btn btn-primary">
                        Create About Core Content
                    </button></a>
            </td>
        </tr>
        <tr>
            <td>Title</td>
            <td>{{ $service->title }}</td>
        </tr>
        <tr>
            <td>File</td>
            <td><a href="{{ asset('image/service/equipment/'.$service->pdf_file) }}" target="_blank"> Pdf File</a><br>
                {{ asset('image/service/equipment') }}
            </td>
        </tr>

        <tr>
            <td>Description</td>
            <td>{{ $service->description }}</td>
        </tr>
        <tr>
            <td>Action</td>
            <td> <a href="{{ url('admin/service/equipment/'.$service->id.'/edit') }}"><button class="btn btn-warning">
                        Edit
                    </button></a>
                {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'service_equipment.delete', $service->id  ] ])}}
                {{Form::button('<i class="fa fa-trash-o"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                {{ Form::close() }}</td>
        </tr>
        </thead>

    </table>
@endsection