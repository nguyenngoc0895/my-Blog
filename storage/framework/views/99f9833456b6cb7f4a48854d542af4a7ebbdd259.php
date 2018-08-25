<header class="masthead" style="background-image: url(<?php echo e(Storage::disk('local')->url($post->image)); ?>)">>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?php echo e($post->title); ?></h1>
                    <span class="subheading"><?php echo e($post->subtitle); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

 
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="content col-md-10 col-lg-10">
                <small>Created at <?php echo e($post->created_at->diffForHumans()); ?></small>
                
                <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('category', $category)); ?>" class="text-white">
                    <small class="pull-right bg-dark text-white" style="margin-right: 20px; border-radius: 5px; padding: 5px;">
                        <?php echo e($category->name); ?>    
                    </small> </a> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo htmlspecialchars_decode($post->body); ?>

                
                <h3>Tag clouds</h3>
                <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <small class="pull-left bg-dark text-white" style="margin-right:20px; border-radius:5px; padding: 5px;">
                        <a href="<?php echo e(route('tag', $tag)); ?>" class="text-white"> <?php echo e($tag->name); ?> </a>     
                    </small> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('user.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>