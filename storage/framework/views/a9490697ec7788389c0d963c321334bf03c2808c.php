  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo e(asset('admin/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><b>My</b>Blog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?php echo e(asset('admin/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block"><?php echo e(Auth::user()->name); ?></a>
        </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->  
                <li class="nav-item">
                <a href="<?php echo e(route('post.index')); ?>" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Posts</p>
                </a>
                </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('posts.category', Auth::user())): ?>
                    <li class="nav-item">
                    <a href="<?php echo e(route('category.index')); ?>" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Categories</p>
                    </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('posts.tag', Auth::user())): ?>
                    <li class="nav-item">
                    <a href="<?php echo e(route('tag.index')); ?>" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Tags</p>
                    </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                <a href="<?php echo e(route('user.index')); ?>" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>User</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo e(route('role.index')); ?>" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Role</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo e(route('permission.index')); ?>" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Permissions</p>
                </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>