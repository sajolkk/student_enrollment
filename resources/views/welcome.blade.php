<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Salt Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('admin/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('admin/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin/images/favicon.html')}}" />
</head>

<body class="welcome">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="px-5 py-5">
              <div class="user-btn text-center">
              		
              	<a class="btn btn-primary text-white p-3" href=" {{ url('admin.admin-login') }} "> ADMIN </a>
              	<a class="btn btn-primary text-white p-3" href=""> TEACHER </a>
              	<a class="btn btn-primary text-white p-3" href=""> STUDENT </a>
				<h4 class="text-white text-center pt-4">Select Your Correct Option</h4>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('admin/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('admin/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{ asset('admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('admin/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{ asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('admin/js/misc.js')}}"></script>
  <script src="{{ asset('admin/js/settings.js')}}"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
</html>
