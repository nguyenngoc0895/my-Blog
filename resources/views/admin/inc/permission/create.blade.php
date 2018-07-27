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
            <form role="form" action="{{ route('permission.store')}}" method="post">
                {{ csrf_field()}}
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Permission title</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="permission">
                </div>
                <div class="form-group">
                    <label for="for">Permission for</label>
                    <select name="for" id="for" class="form-control">
                        <option selected disabled>Select Permission for</option>
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