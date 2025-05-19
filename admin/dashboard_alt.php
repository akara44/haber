 <!-- jQuery -->
 <script src="plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="plugins/bootstrbootstrap.bundle.min.js"></script>
 <!-- DataTables  & Plugins -->
 <script src="plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="plugins/datatables-bdataTables.bootstrap4.min.js"></script>
 <script src="plugins/datatables-responsidataTables.responsive.min.js"></script>
 <script src="plugins/datatables-responsiresponsive.bootstrap4.min.js"></script>
 <script src="plugins/datatables-buttodataTables.buttons.min.js"></script>
 <script src="plugins/datatables-buttobuttons.bootstrap4.min.js"></script>
 <script src="plugins/jszip/jszip.min.js"></script>
 <script src="plugins/pdfmake/pdfmake.min.js"></script>
 <script src="plugins/pdfmake/vfs_fonts.js"></script>
 <script src="plugins/datatables-buttobuttons.html5.min.js"></script>
 <script src="plugins/datatables-buttobuttons.print.min.js"></script>
 <script src="plugins/datatables-buttobuttons.colVis.min.js"></script>
 <!-- AdminLTE App -->
 <script src="diadminlte.min.js?v=3.2.0"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="didemo.js"></script>
 <!-- Page specific script -->
 <script>
     $(function() {
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
 </body>

 </html>