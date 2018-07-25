@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create your role </h3>
            </div>
            @include('includes.messages')
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="{{ route('role.store')}}" method="post">
            {{ csrf_field()}}
            <div class="card-body">
                <div class="form-group">
                    <label for="name">role title</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Role">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" class="btn btn-warning" href="{{ route('role.index')}}">Back</a>
            </div>
            </form>
        </div>
    </div>
@endsection