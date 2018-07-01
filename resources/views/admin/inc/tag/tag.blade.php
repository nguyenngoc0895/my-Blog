@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create your tag </h3>
            </div>
            @include('includes.messages')
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="{{ route('tag.store')}}" method="post">
            {{ csrf_field()}}
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Tag title</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="slug">Tag slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="slug">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" class="btn btn-warning" href="{{ route('tag.index')}}">Back</a>
            </div>
            </form>
        </div>
    </div>
@endsection