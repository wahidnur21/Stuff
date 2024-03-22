<!-- REQUIRED SCRIPTS -->  
<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/admin/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/admin/plugins/raphael/raphael.min.js"></script>
<script src="/admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/admin/plugins/chart.js/Chart.min.js"></script>

<script src="/admin/dist/js/demo.js"></script>

<!-- PAGE SCRIPTS -->
<script src="/admin/dist/js/pages/dashboard2.js"></script>

<!-- DataTables & Plugins -->
<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables-bs4/js/.dataTables.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/.dataTables.responsive.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/.responsive.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/.dataTables.buttons.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/.buttons.bootstrap4.min.js"></script>
<script src="/admin/plugins/jszip/jszip.min.js"></script>
<script src="/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/admin/plugins/datatables-buttons/js/.buttons.html5.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/.buttons.print.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/.buttons.colVis.min.js"></script>


<!-- page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>