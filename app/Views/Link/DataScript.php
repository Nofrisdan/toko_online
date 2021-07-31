  <!-- Bootstrap 3.3.7 -->
  <script src="<?= base_url(); ?>/Lte2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="<?= base_url(); ?>/Lte2/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/Lte2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="<?= base_url(); ?>/Lte2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?= base_url(); ?>/Lte2/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>/Lte2/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url(); ?>/Lte2/dist/js/demo.js"></script>
  <!-- page script -->
  <script>
      $(function() {
          $('#example1').DataTable()
          $('#example2').DataTable({
              'paging': true,
              'lengthChange': false,
              'searching': false,
              'ordering': true,
              'info': true,
              'autoWidth': false
          })
      })
  </script>

  <!-- sw -->

  <script src="<?= base_url() ?>/sw/dist/sweetalert2.all.min.js"></script>

  <!-- my js -->
  <script src="<?= base_url(); ?>/assets/js/sw.js"></script>