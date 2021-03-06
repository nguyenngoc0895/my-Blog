<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create your category </h3>
            </div>
            <?php echo $__env->make('includes.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="<?php echo e(route('tag.update', $tag->id)); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PUT')); ?>

            <div class="card-body">
                <div class="form-group">
                    <label for="name">Tag title</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Title" value="<?php echo e($tag->name); ?>">
                </div>
                <div class="form-group">
                    <label for="slug">Tag slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="slug" value="<?php echo e($tag->slug); ?>">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" class="btn btn-warning" href="<?php echo e(route('category.index')); ?>">Back</a>
            </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>