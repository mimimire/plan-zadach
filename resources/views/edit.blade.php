@extends('layouts.backend')

@section('title')
Edit Task
@endsection

@section('content')
<div class="block">
        <div class="block-content">
            <div class="container">
                <form action="{{ route('update', $task->id) }}" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input value="{{$task->title}}" type="text" class="form-control form-control-alt" id="title" name="title" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="description">Textarea</label>
                                <textarea class="form-control form-control-alt" id="description" name="description" rows="7" placeholder="Enter description">{{$task->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input  value ="{{$task->status}}" type="text" class="form-control form-control-alt" id="status" name="status" placeholder="Enter status">
                            </div>


                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection