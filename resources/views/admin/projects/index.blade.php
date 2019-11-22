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
                <a href="{{ url('/admin/projects/create') }}"><button class="btn btn-primary">
                        Create Project
                    </button></a>
            </td>
        </tr>
        <tr>
            <td>No</td>
            <td>title<br>
                client<br>
                year<br>
                location
            </td>
            <td>
                vesels<br>
                duration<br>
                wrov<br>
                next<br>
                prev
            </td>

            <td>description</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>

        <?php $i =1; ?>
        @foreach($project as $key => $value)
            <tr>
                <td><?php echo $i; $i++; ?></td>
                <td>title: {{ $value->title }}<br>
                    client: {{ $value->client }}<br>
                    year: {{ $value->year }}<br>
                    location: {{ $value->location }}
                </td>
                <td>vesels: {{ $value->vesels }}<br>
                    duration: {{ $value->duration }}<br>
                    wrov: {{ $value->wrov }}<br>
                    next: <a href="/admin/projects/{{ $value->next }}" target="_blank">Next</a><br>
                    prev: <a href="/admin/projects/{{ $value->prev }}" target="_blank">Prev</a>
                </td>
                <td>{!! $value->description !!}</td>
                <td>

                    <a href="{{ url('admin/projects/'.$value->id) }}"><button class="btn btn-info">Show</button> </a>
                    <a href="{{ url('admin/projects/'.$value->id.'/edit') }}"><button class="btn btn-warning">
                            Edit
                        </button></a>
                    {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'projects.destroy', $value->id  ] ])}}
                    {{Form::button('<i class="fa fa-trash-o"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection