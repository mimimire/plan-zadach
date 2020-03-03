@extends('layouts.backend')

@section('title')
Tasks
@endsection
@section('content')

<a class="btn btn-success" href="{{ route('create') }}"><i class="fa fa-plus"> Create</i></a>
<div class="container">
<table class="table table-vcenter table-hover table-striped">
<thead>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th class = "text-center" scope="col">Status</th>
            <th scope="col">Actions</th>
            <th scope="col">Created at</th>

</thead>
<tbody>
    @foreach($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->title}}</td>
            <td>{{$task->description}}</td>
            <td class="text-center">{!! $task->status == 1 ? '<i class="fa fa-check"></i>': '<i class ="fa fa-times"></i>'!!}</td>
            <td class ="text-center">
                <div class="btn-group">
                    <a class="btn btn-sm btn-outline-warning" href="{{route('edit', $task->id) }}"><i class="fa fa-fw fa-pencil-alt"></i></a>
                    <a class="btn btn-sm btn-outline-danger" href="{{route('delete', $task->id)}}"><i class="fa fa-fw fa-trash"></i></a>
                </div>
            </td>
            <td>{{$task->created_at}}</td>
        </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
@endsection