<footer class="main-footer">
    <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-alpha
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('admin/plugins/fastclick/fastclick.js')); ?>"></script>
    <!--script post admin-->
<script src="<?php echo e(asset('admin/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('admin/plugins/fastclick/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('admin/dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('admin/dist/js/demo.js')); ?>"></script>}
<!-- Bootstrap WYSIHTML5 -->
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
<?php $__env->startSection('footer'); ?>
    <?php echo $__env->yieldSection(); ?>