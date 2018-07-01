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
            <form role="form" action="{{ route('category.update', $category->id)}}" method="post">
                {{ csrf_field()}}
                {{ method_field('PUT')}}
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Category title</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Title" value="{{ $category->name}}">
                </div>
                <div class="form-group">
                    <label for="slug">Category slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" value="{{ $category->slug}}">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" class="btn btn-warning" href="{{ route('category.index')}}">Back</a>
            </div>
            </form>
        </div>
    </div>
@endsection