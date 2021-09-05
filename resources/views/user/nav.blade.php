<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <!-- base:css -->
  <link rel="stylesheet" href="user/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="user/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="user/css/style.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<body>

  <div class="horizontal-menu">

    <nav class="bottom-navbar">
      <div class="container">
        <ul class="nav page-navigation">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">
              <i class="fas fa-2x fa-home mb-2"></i>
              <span class="menu-title">Homepage</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/app')}}" class="nav-link">

              <i class="fas fa-2x fa-file-medical mb-2"></i>
              <span class="menu-title">Add Application</span>
              <i class="menu-arrow"></i>
            </a>

          </li>


          <li class="nav-item">
            <a href="{{url('/my')}}" class="nav-link">
              <i class="fas fa-2x fa-file-alt mb-2"></i>
              <span class="menu-title">My Application</span>
              <i class="menu-arrow"></i>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{url('/again')}}" class="nav-link">
              <i class="fas fa-2x fa-file-medical-alt mb-2"></i>
              <span class="menu-title">Appeal</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          

          <li class="nav-item">
            <a href="{{url('/complain')}}" class="nav-link">
              <i class="fas fa-2x fa-file-upload mb-2"></i>
              <span class="menu-title">Add Complain</span>
              <i class="menu-arrow"></i>
            </a>
          </li>


          <li>
            <x-app-layout>
            </x-app-layout>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <script src="user/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="user/js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <script src="user/vendors/chart.js/Chart.min.js"></script>
  <script src="user/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="user/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
  <script src="user/vendors/justgage/raphael-2.1.4.min.js"></script>
  <script src="user/vendors/justgage/justgage.js"></script>
  <!-- Custom js for this page-->
  <script src="user/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>