<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Acc Admin </h3>
            </div>
            <?php echo $__env->make('includes.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="<?php echo e(route('user.update', $user->id)); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PUT')); ?>

            <div class="card-body">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name">Name User</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="User Name" value="<?php if(old('name')): ?> <?php echo e(old('name')); ?> <?php else: ?><?php echo e($user->name); ?> <?php endif; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php if(old('email')): ?> <?php echo e(old('email')); ?> <?php else: ?><?php echo e($user->email); ?> <?php endif; ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php if(old('phone')): ?> <?php echo e(old('phone')); ?> <?php else: ?><?php echo e($user->phone); ?> <?php endif; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Confirm_password">Checkbox</label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="status" <?php if(old('status') == 1 || $user->status == 1): ?> checked <?php endif; ?> value="1"> Status</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Assign Role</label>
                        <div class="row">
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-3">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="role[]" value="<?php echo e($role->id); ?>"
                                            <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($user_role->id == $role->id): ?>
                                                    checked
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            ><?php echo e($role->name); ?></label>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" class="btn btn-warning" href="<?php echo e(route('user.index')); ?>">Back</a>
            </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>