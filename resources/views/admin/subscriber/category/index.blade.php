<!--
/**
 * Created by PhpStorm.
 * User: muhyasin89
 * Date: 12/01/18
 * Time: 14.59
 */-->
@extends('layouts.admin')

@section('content')
    <h3>Subscriber</h3>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td colspan="4"><a href="{{ url('/admin/subscriber') }}"><button class="btn btn-primary">Subscriber</button> </a> </td>
        </tr>
        <tr>
            <td>No</td>
            <td>Category</td>
            <td>Admin</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>

        <?php $i =1; ?>
        @foreach($category as $key => $value)
            <tr>
                <td><?php echo $i; $i++; ?></td>
                <td>{{ $value->category }}</td>
                <td>{{ $value->user->fullname }}</td>
                <td>
                    <a href="{{ url('admin/subscriber/edit/'.$value->id) }}"><button class="btn btn-warning">
                            Edit
                        </button></a>
                    {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'subscriber_category.delete', $value->id  ] ])}}
                    {{Form::button('<i class="fa fa-trash-o"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection