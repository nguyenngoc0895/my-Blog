@extends('admin.layouts.admin')

@section('head')
            <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create your post </h3>
            </div>
            @include('includes.messages')
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('post.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="subtitle">SubTitle</label>
                    <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="SubTitle">
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug">
                </div>
                <div class="form-group">
                    <label for="image">image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                <input type="checkbox" class="form-check-input" name="status" id="exampleCheck1">
                <label class="form-check-label" for="status">Check me out</label>
                </div>
            </div>
            <!-- /.card-body -->
                   <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Write something</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <!-- tools box -->
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pad">
                                <div class="mb-3">
                                    <textarea class="textarea" placeholder="Place some text here" name="body" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- ./row -->
            </section>
            <!-- /.content -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" class="btn btn-warning" href="{{ route('post.index')}}">Back</a>
            </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.content-wrapper -->
    </div>

@endsection

@section('footer')
    <script src="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <script>
    $(function () {
        $('.textarea').wysihtml5({
            toolbar: {
                fa: true
            }
        })
    })

</script>
@endsection