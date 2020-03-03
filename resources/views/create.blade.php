
@extends('layouts.backend')

@section('title')
    Create task
@endsection

@section('content')
<div class="block">
        <div class="block-content">
            <div class="container">
                <form action="{{ route('store') }}" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label for="title">Ttitle</label>
                                <input type="text" class="form-control form-control-alt" id="title" name="title" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="description">Textarea</label>
                                <textarea class="form-control form-control-alt" id="description" name="description" rows="7" placeholder="Enter description"></textarea>
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