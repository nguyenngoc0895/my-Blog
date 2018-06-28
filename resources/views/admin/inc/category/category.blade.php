@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create your category </h3>
            </div>
            @include('includes.messages')
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('category.store')}}">
                {{ csrf_field()}}
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Category title</label>
                    <input type="email" class="form-control" name="name" id="name" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="slug">Category slug</label>
                    <input type="password" class="form-control" name="slug" id="slug" placeholder="SubTitle">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
@endsection