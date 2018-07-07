<?php $__env->startSection('head'); ?>
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/select2/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create your post </h3>
            </div>
            <?php echo $__env->make('includes.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="<?php echo e(route('post.store')); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

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
                <div class="checkbox">
                    <label >
                        <input type="checkbox"  name="status" >Check me out
                    </label>
                </div>
            </div>
            <!-- /.card-body -->
            <div  class="card-body">
                <label>Add tag</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <!-- add category-->
            <div class="card-body">
                <label>Add category</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
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
                <a type="button" class="btn btn-warning" href="<?php echo e(route('post.index')); ?>">Back</a>
            </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.content-wrapper -->
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <script src="<?php echo e(asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
    <script>
    $(function () {
        $('.textarea').wysihtml5({
            toolbar: {
                fa: true
            }
        })
    })
    </script>
    <!-- Select2 -->
    <script src="<?php echo e(asset('admin/plugins/select2/select2.full.min.js')); ?>"></script>
    <script>
        $(document).ready(function(){
            //Initialize Select2 Elements
            $('.select2').select2();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>