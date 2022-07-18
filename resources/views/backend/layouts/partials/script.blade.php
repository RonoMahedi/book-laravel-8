
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('backend/js/dataTables.bootstrap4.min.js') }}"></script>


  <!-- Core plugin JavaScript-->
  <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Select2 JS -->
  <script src="{{ asset('backend/js/select2.min.js') }}"></script>

  <!-- Summer Note JS -->
  <script src="{{ asset('backend/js/summernote.js') }}"></script>


  <!-- Custom scripts for all pages-->
  <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('backend/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('backend/js/demo/chart-pie-demo.js') }}"></script>


<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
 {!! Toastr::message() !!}

 <script>
  $(document).ready( function () {
      $('#dataTable').DataTable();
      $('.select2').select2();
      $('#summernote').summernote();
  } );
</script>
