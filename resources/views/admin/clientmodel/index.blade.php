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
            <td colspan="6">
                <a href="{{ url('/admin/client/model/create') }}"><button class="btn btn-primary">
                        Create Client Model
                    </button></a>
            </td>
        </tr>
        <tr>
            <td>No</td>
            <td>Title</td>
            <td>Image</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>

        <?php $i =1; ?>
        @foreach($client as $key => $value)
        <tr>
            <td><?php echo $i; $i++; ?></td>
            <td>{{ $value->title }}</td>
            <td><img src="{{ asset('image/client/model/'.$value->image ) }}" width="200">
            </td>

            <td>
                <a href="{{ url('admin/client/model/'.$value->id) }}"><button class="btn btn-info">Show</button> </a>
                <a href="{{ url('admin/client/model/'.$value->id.'/edit') }}"><button class="btn btn-warning">
                        Edit
                    </button></a>
                {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'client_model.delete', $value->id  ] ])}}
                    {{Form::button('<i class="fa fa-trash-o"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection