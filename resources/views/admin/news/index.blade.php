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
            <td colspan="8">
                <a href="{{ url('/admin/news/create') }}"><button class="btn btn-primary">
                        Create News
                    </button></a>
            </td>
        </tr>
        <tr>
            <td>No</td>
            <td>Title
                <hr>
                Slug
            </td>
            <td>Category</td>
            <td>Content</td>
            <td>Next<hr>
            Prev</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>

        <?php $i =1; ?>
        @foreach($news as $key => $value)
        <tr>
            <td><?php echo $i; $i++; ?></td>
            <td>Title:{{ $value->title }}
                <hr>
                Slug: {{ $value->slug }}
            </td>
            <td>{{ $value->category }}
            </td>

            <td>{!! $value->content !!}</td>
            <td> Next:<a href="{{ url('admin/news/'.$value->next) }}" target="_blank"></a><hr>
                Prev:<a href="{{ url('admin/news/'.$value->prev) }}" target="_blank"></a>
            </td>
            <td>
                <a href="{{ url('admin/news/'.$value->id) }}"><button class="btn btn-info">Show</button> </a>
                <a href="{{ url('admin/news/'.$value->id.'/edit') }}"><button class="btn btn-warning">
                        Edit
                    </button></a>
                {{Form::open([ 'method'  => 'DELETE', 'route' => [ 'news.destroy', $value->id  ] ])}}
                    {{Form::button('<i class="fa fa-trash-o"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection