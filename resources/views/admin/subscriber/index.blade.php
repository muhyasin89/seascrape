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
                <a href="{{ url('/admin/subscriber/category/create') }}"><button class="btn btn-primary">
                        Create Category
                    </button></a>
                <a href="{{ url('/admin/subscriber/category/') }}"><button class="btn btn-info"> Index Category</button> </a>
            </td>
        </tr>
        <tr>
            <td>No</td>
            <td>Email</td>
            <td>Active</td>
            <td>Category</td>
            <td>Admin</td>
            <td>Action</td>

        </tr>
        </thead>
        <tbody>

        <?php $i =1; ?>
        @foreach($subscriber as $key => $value)
        <tr>
            <td><?php echo $i; $i++; ?></td>
            <td>{{ $value->email }}</td>
            <td>@if($value->status)
                    Active
                    <?php $btn = 'btn-info'; $info='Deactive'?>
                @else
                    Deactivate
                    <?php $btn = 'btn-danger';  $info='Active'?>
                @endif
            </td>
            <td>
                @if($value->category)
                    {{ $value->category->category }}
                @endif
            </td>
            <td>
                @if($value->user)
                    {{ $value->user->fullname }}
                @endif
            </td>
            <td>
                <a href="{{ url('admin/subscriber/change_status/'.$value->id) }}"><button class="btn <?php echo $btn; ?>">
                        <?php echo $info; ?>
                    </button> </a><br>
                <a href="{{ url('admin/subscriber/edit/'.$value->id) }}">
                    <button class="btn btn-warning">Edit</button>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection