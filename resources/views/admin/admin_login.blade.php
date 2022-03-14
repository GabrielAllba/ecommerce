<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="{{asset("assets/img/logo.png")}}" alt="">
                  <span class="d-none d-lg-block">Ecommerce Admin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">
                @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('error')}}
                  </div>
                @endif
                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form action="{{route('admin.store.login')}}" class="row g-3 needs-validation" method="POST">
                      @csrf
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control"
                        required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password"
                      class="form-control" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

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
