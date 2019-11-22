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
                <a href="{{ url('/admin/maps/create') }}"><button class="btn btn-primary">
                        Create Maps
                    </button></a>
            </td>
        </tr>
        <tr>
            <td>No</td>
            <td>Location</td>
            <td>Maps</td>
            <td>Description</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>

        <?php $i =1; ?>
        @foreach($maps as $key => $value)
        <tr>
            <td><?php echo $i; $i++; ?></td>
            <td>{{ $value->location }}</td>
            <td width="25%">{!! $value->maps  !!}
            </td>
            <td>{{ $value->description }}</td>
            <td>
                <a href="{{ url('admin/maps/'.$value->id.'/edit') }}"><button class="btn btn-warning">
                        Edit
                    </button></a>
                {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'maps.destroy', $value->id  ] ])}}
                    {{Form::button('<i class="fa fa-trash-o"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection