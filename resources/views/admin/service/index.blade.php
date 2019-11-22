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
                <a href="{{ url('/admin/service/equipment/create') }}"><button class="btn btn-primary">
                        Create Service Equipment
                    </button></a>
            </td>
        </tr>
        <tr>
            <td>No</td>
            <td>Title</td>
            <td>Description</td>
            <td>Image</td>
            <td>Path</td>
            <td>Type</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>

        <?php $i =1; ?>
        @foreach($service as $key => $value)
        <tr>
            <td><?php echo $i; $i++; ?></td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->description }}</td>
            <td><img src="{{ asset('/image/services/equipment/'.$value->image) }}" width="75px" /> </td>
            <td>{{ asset('/image/services/equipment/'.$value->pdf_file) }}</td>
            <td>{{ $value->category }}</td>
            <td>
                <a href="{{ asset('/image/service/equipment/'.$value->pdf_file) }}" target="_blank"><button class="btn btn-default">File</button> </a>
                <a href="{{ url('admin/service/equipment/'.$value->id) }}"><button class="btn btn-info">Show</button> </a>
                <a href="{{ url('admin/service/equipment/'.$value->id.'/edit') }}"><button class="btn btn-warning">
                        Edit
                    </button></a>
                {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'service_equipment.delete', $value->id  ] ])}}
                    {{Form::button('<i class="fa fa-trash-o"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection