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
            <td colspan="7">
                <a href="{{ url('/admin/about/management/create') }}"><button class="btn btn-primary">
                        Create About Key Management
                    </button></a>
            </td>
        </tr>
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Image</td>
            <td>Position</td>
            <td>Description</td>
            <td>Next<hr>Prev</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>

        <?php $i =1; ?>
        @foreach($management as $key => $value)
        <tr>
            <td><?php echo $i; $i++; ?></td>
            <td>{{ $value->name }}</td>
            <td><img src="{{ asset('image/about/management/'.$value->image) }}" width="75px" ></td>
            <td>{{ $value->position }}
            </td>
            <td>{{ $value->description }}</td>
            <td> {{ $value->next }}<hr>{{ $value->prev}}</td>
            <td>
                <a href="{{ url('admin/about/management/'.$value->id.'/edit') }}"><button class="btn btn-warning">
                        Edit
                    </button></a>
                {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'management.delete', $value->id  ] ])}}
                    {{Form::button('<i class="fa fa-trash-o"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection