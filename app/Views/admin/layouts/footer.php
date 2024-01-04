<footer class="main-footer bg-dark">
    <strong>Power by <a href="https://github.com/saimonweb" target="_blank"> Simon Barrios</a></strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ;?>public/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ;?>public/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ;?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ;?>public/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ;?>public/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url() ;?>public/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ;?>public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ;?>public/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ;?>public/admin/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ;?>public/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ;?>public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ;?>public/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ;?>public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ;?>public/admin/dist/js/adminlte.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url();?>public/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>public/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>public/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>public/admin/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url();?>public/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>public/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>public/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>public/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>public/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url();?>public/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url();?>public/admin/plugins/toastr/toastr.min.js"></script>
<!-- Modulos Propios -->
<script src="<?php echo base_url();?>public/admin/dist/js/modals.js?=v1.02"></script>
<script src="<?php echo base_url();?>public/admin/dist/js/mensajes.js"></script>
<script>
  $(function () {
    var base_url= "<?php echo base_url();?>";
    // INICIA DATATABLES CONFIGURACION
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      language: {
          "lengthMenu": "Mostrar _MENU_ registros por pagina",
          "zeroRecords": "No se encontraron resultados en su busqueda",
          "searchPlaceholder": "Buscar registros",
          "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
          "infoEmpty": "No existen registros",
          "infoFiltered": "(filtrado de un total de _MAX_ registros)",
          "search": "Buscar:",
          "paginate": {
              "first": "Primero",
              "last": "Último",
              "next": "Siguiente",
              "previous": "Anterior"
          },
      },
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    // FIN DATATABLES CONFIGURACION

  });
</script>
</body>
</html>
