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
            <td colspan="5">
                <a href="{{ url('/admin/about/core/create') }}"><button class="btn btn-primary">
                        Create About Core Content
                    </button></a>
            </td>
        </tr>
        <tr>
            <td>No</td>
            <td>Title</td>
            <td>Active</td>
            <td>Type</td>
            <td>Action</td>

        </tr>
        </thead>
        <tbody>

        <?php $i =1; ?>
        @foreach($core as $key => $value)
        <tr>
            <td><?php echo $i; $i++; ?></td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->content }}
            </td>
            <td>{{ $value->category }}</td>
            <td>
                <a href="{{ url('admin/about/core/'.$value->id.'/edit') }}"><button class="btn btn-warning">
                        Edit
                    </button></a>
                {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'about_core.delete', $value->id  ] ])}}
                    {{Form::button('<i class="fa fa-trash-o"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection