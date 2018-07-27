@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create your permission </h3>
            </div>
            @include('includes.messages')
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('permission.update', $permission->id)}}" method="post">
                {{ csrf_field()}}
                {{ method_field('PUT')}}
            <div class="card-body">
                <div class="form-group">
                    <label for="name">permission title</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Title" value="{{ $permission->name}}">
                </div>
                <div class="form-group">
                    <label for="for">Permission for</label>
                    <select name="for" id="for" class="form-control">
                        <option value="user">User</option>
                        <option value="post">Post</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" class="btn btn-warning" href="{{ route('permission.index')}}">Back</a>
            </div>
            </form>
        </div>
    </div>
@endsection