<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create your role </h3>
            </div>
            <?php echo $__env->make('includes.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="<?php echo e(route('role.store')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

                <div class="card-body">
                    <div class="col-lg-offset-3 col-lg-6">
                        <div class="form-group">
                            <label for="name">role title</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Role">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-2">
                            <label for="name">Post Permission</label>
                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($permission->for == 'post'): ?>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="<?php echo e($permission->id); ?>"><?php echo e($permission->name); ?></label>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="col-lg-2">
                            <label for="name">User Permission</label>
                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($permission->for == 'user'): ?>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="<?php echo e($permission->id); ?>"><?php echo e($permission->name); ?></label>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="col-lg-2">
                            <label for="name">Other Permission</label>
                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($permission->for == 'other'): ?>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="<?php echo e($permission->id); ?>"><?php echo e($permission->name); ?></label>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a type="button" class="btn btn-warning" href="<?php echo e(route('role.index')); ?>">Back</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>