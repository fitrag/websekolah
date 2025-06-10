<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title')  {{ $title ?? ': SMKN 1 Seputih Agung'}}</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('images/LOGO_SMK.png')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css')}}">
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flexor - v2.2.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .marquee-container {
      width: 60%;
      overflow: hidden;
      background:#39312f;
      border: 0px solid #ddd;
    }

    .marquee-text {
      display: inline-block;
      padding-left: 100%;
      white-space: nowrap;
      animation: marquee 10s linear infinite;
      font-size: 20px;
      color: rgb(255, 255, 255);;
    }

    @keyframes marquee {
      from { transform: translateX(0); }
      to   { transform: translateX(-100%); }
    }
  </style>

</head>

<body>

    <x-navigation/>
    <x-carousel/>
    
    
    @yield('content')
    
    <x-footer/>
    
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{ asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>

  <script src="{{ asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>

  <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>


  <script src="{{ asset('assets/js/common-pages.js')}}"></script>

  @stack('js')
</body>

</html>