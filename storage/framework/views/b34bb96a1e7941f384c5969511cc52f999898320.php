<?php $__env->startSection('head'); ?>
     <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/datatables/dataTables.bootstrap4.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Blank Page</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
        </ol>
        <a class="col-lg-offset-4 btn btn-success" href="<?php echo e(route('user.create')); ?>">Add new user</a>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Table With Full Features</h3>
            <?php echo $__env->make('includes.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>S.No</th>
                <th>User Name</th>
                <th>Assigned Roles</th>
                <th>AStatus</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->index + 1); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td>
                            <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($role->name); ?> |
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td><?php echo e($user->status? 'Active' : 'Not Active'); ?></td>
                        <td><a href="<?php echo e(route('user.edit', $user->id)); ?>"><ion-icon name="create"></ion-icon></span></a></td>
                        <td>
                            <form id="delete-form-<?php echo e($user->id); ?>" method="post" action="<?php echo e(route('user.destroy', $user->id)); ?>" style="display:none">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                            </form>
                            <a href="" onclick="
                            if( confirm('Mày có chắc với quyết định của mày không?')){
                                event.preventDefault();
                                document.getElementById('delete-form-<?php echo e($user->id); ?>').submit();
                            }
                            else{
                                event.preventDefault();
                            }    
                            ">
                            <ion-icon name="trash"></ion-icon></a> 
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
            <tr>
                <th>S.No</th>
                <th>User Name</th>
                <th>Assigned Roles</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <script src="<?php echo e(asset('admin/plugins/datatables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/plugins/datatables/dataTables.bootstrap4.js')); ?>"></script>
    <script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
    <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>