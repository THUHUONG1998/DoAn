<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <base href="{{ asset('') }}"></base>
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="AdminLTE-master/dist/css/adminlte.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="AdminLTE-master/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="AdminLTE-master/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="AdminLTE-master/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-master/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="AdminLTE-master/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="AdminLTE-master/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="AdminLTE-master/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    @include('pages.patials.header')
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
    @include('pages.patials.menu')
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          @yield('content')
      </div>
      <!-- /.content-wrapper -->
    @include('pages.patials.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

<!-- jQuery -->
<script src="AdminLTE-master/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="AdminLTE-master/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="AdminLTE-master/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="AdminLTE-master/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="AdminLTE-master/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="AdminLTE-master/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="AdminLTE-master/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="AdminLTE-master/plugins/moment/moment.min.js"></script>
<script src="AdminLTE-master/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="AdminLTE-master/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="AdminLTE-master/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="AdminLTE-master/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-master/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="AdminLTE-master/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdminLTE-master/dist/js/demo.js"></script>
<script src="AdminLTE-master/dist/js/adminlte.min.js"></script>

  <script>
    $('#delete').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var user_id = button.data('userid')
        var modal = $(this);
        modal.find('.modal-body #user_id').val(user_id);
    })
</script>
<script>
  $('#deletePermission').on('show.bs.modal', function(event){
      var button = $(event.relatedTarget)
      var permission_id = button.data('permissionid')
      var modal = $(this);
      modal.find('.modal-body #permission_id').val(permission_id);
  })
</script>
<script>
  $('#deleteRole').on('show.bs.modal', function(event){
      var button = $(event.relatedTarget)
      var role_id = button.data('roleid')
      var modal = $(this);
      modal.find('.modal-body #role_id').val(role_id);
  })
</script>
<script>
  $('#deletebenhvien').on('show.bs.modal', function(event){
      var button = $(event.relatedTarget)
      var permission_id = button.data('benhvienid')
      var modal = $(this);
      modal.find('.modal-body #benhvien_id').val(benhvien_id);
  })
</script>
<script>
  $('#deletechuyenkhoa').on('show.bs.modal', function(event){
      var button = $(event.relatedTarget)
      var permission_id = button.data('chuyenkhoaid')
      var modal = $(this);
      modal.find('.modal-body #chuyenkhoa_id').val(chuyenkhoa_id);
  })
</script>
<script>
  $('#deletekhunggio').on('show.bs.modal', function(event){
      var button = $(event.relatedTarget)
      var permission_id = button.data('khunggioid')
      var modal = $(this);
      modal.find('.modal-body #khunggio_id').val(chuyenkhoa_id);
  })
</script>
<script>
  $('#deletebacsi').on('show.bs.modal', function(event){
      var button = $(event.relatedTarget)
      var permission_id = button.data('bacsiid')
      var modal = $(this);
      modal.find('.modal-body #bacsi_id').val(bacsi_id);
  })
</script>
<script>
  $('#deletebenhnhan').on('show.bs.modal', function(event){
      var button = $(event.relatedTarget)
      var permission_id = button.data('benhnhanid')
      var modal = $(this);
      modal.find('.modal-body #benhnhan_id').val(benhnhan_id);
  })
</script>

<script type="text/javascript">
    var url = "{{route('show-chuyenkhoa')}}";
    $("select[name='id_benhvien']").change(function(){
        var id_benhvien = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: url,
            method: 'POST',
            data: {
                id_benhvien: id_benhvien,
                _token: token
            },
            success: function(data) {
                $("select[name='id_chuyenkhoa'").html('');
                $.each(data, function(key, value){
                    $("select[name='id_chuyenkhoa']").append(
                        "<option value=" + value.id + ">" + value.tenchuyenkhoa + "</option>"
                    );
                });
            }
        });
    });
</script>
  @yield('script')
</body>
</html>
