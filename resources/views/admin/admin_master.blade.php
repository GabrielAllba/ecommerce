<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ecommerce Admin - Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/quill/quill.snow.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/quill/quill.bubble.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/remixicon/remixicon.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/simple-datatables/style.css")}}" rel="stylesheet">

  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <!-- Template Main CSS File -->
  <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.body.navbar')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.body.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    @yield('admin')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('admin.body.footer')

  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <!-- Vendor JS Files -->
  <script src="{{asset("assets/vendor/apexcharts/apexcharts.min.js")}}"></script>
  <script src="{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("assets/vendor/chart.js/chart.min.js")}}"></script>
  <script src="{{asset("assets/vendor/echarts/echarts.min.js")}}"></script>
  <script src="{{asset("assets/vendor/quill/quill.min.js")}}"></script>
  <script src="{{asset("assets/vendor/simple-datatables/simple-datatables.js")}}"></script>
  <script src="{{asset("assets/vendor/tinymce/tinymce.min.js")}}"></script>
  <script src="{{asset("assets/vendor/php-email-form/validate.js")}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset("assets/js/main.js")}}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
  integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
      @if(Session::has('message'))
      var type = "{{Session::get('alert-type', 'info')}}"
      switch(type){
          case 'info':
              toastr.info("{{Session::get('message')}}");
              break;
          case 'success':
              toastr.success("{{Session::get('message')}}");
              break;
          case 'warning':
              toastr.warning("{{Session::get('message')}}");
              break;
          case 'error':
              toastr.error("{{Session::get('message')}}");
              break;
      }
      @endif
  </script>
</body>

</html>
