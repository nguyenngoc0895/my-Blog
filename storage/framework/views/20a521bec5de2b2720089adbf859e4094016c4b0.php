<header class="masthead" style="background-image: url('user/img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1 class="text-dark">Login here</h1>
                    <span class="subheading">nhanh=))</span>
                </div>
            </div>
        </div>
    </div>
</header>

 
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="content col-md-10 col-lg-10">
                <h4>welcome to vietnam</h4>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('user.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>