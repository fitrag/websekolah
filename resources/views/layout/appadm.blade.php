<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title')  {{ $title ?? ': Admin'}}</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('images/LOGO_SMK.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('style/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{ asset('style/assets/css/bootstrap/css/bootstrap.min.css') }}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{ asset('style/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('style/assets/icon/themify-icons/themify-icons.css') }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{ asset('style/assets/icon/font-awesome/css/font-awesome.min.css') }}">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('style/assets/css/jquery.mCustomScrollbar.css') }}">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('style/assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('style/assets/css/table.css') }}">
      <link href="{{ asset('style/assets/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('style/assets/css/datepicker.css') }}">
      
      <link href="{{ asset('style/assets/datatables-responsive/css/responsive.bootstrap4.min.css')}}" rel="stylesheet">
  
    </head>

  <body>
  <!-- Pre-loader start -->
  @yield('contentlogin')
    
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('style/assets/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/assets/js/jquery-ui/jquery-ui.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('style/assets/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/assets/js/bootstrap/js/bootstrap.min.js ') }}"></script>
    <script type="text/javascript" src="{{ asset('style/assets/pages/widget/excanvas.js ') }}"></script>
    <!-- waves js -->
    <script src="{{ asset('style/assets/pages/waves/js/waves.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('style/assets/js/jquery-slimscroll/jquery.slimscroll.js') }} "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('style/assets/js/modernizr/modernizr.js') }} "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="{{ asset('style/assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('style/assets/js/jquery.mCustomScrollbar.concat.min.js') }} "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('style/assets/js/chart.js/Chart.js') }}"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="{{ asset('style/assets/pages/widget/amchart/gauge.js') }}"></script>
    <script src="{{ asset('style/assets/pages/widget/amchart/serial.js') }}"></script>
    <script src="{{ asset('style/assets/pages/widget/amchart/light.js') }}"></script>
    <script src="{{ asset('style/assets/pages/widget/amchart/pie.min.js') }}"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="{{ asset('style/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/vertical-layout.min.js') }} "></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('style/assets/pages/dashboard/custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/assets/js/script.js ') }}"></script>

    <script src="{{ asset('style/assets/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('style/assets/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('style/assets/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/assets/js/bootstrap-datepicker.js ') }}"></script>
    <script type="text/javascript" src="{{ asset('style/assets/js/bootstrap-datepicker.de.js ') }}"></script>
    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
          });
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

      <script type="text/javascript">
        $('.date').datepicker({
            format: 'yyyy/mm/dd',
            autoclose:'true'
        });
      </script>
 @stack('js')
</body>

</html>
