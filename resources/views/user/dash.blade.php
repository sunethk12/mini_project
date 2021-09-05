<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- base:css -->
  <link rel="stylesheet" href="user/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="user/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="user/css/style.css">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  
</head>

<body>
  <div class="container-scroller">

    <!-- partial:partials/_horizontal-navbar.html -->
    @include("user.nav")
    <!-- partial -->


    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          <h1 class="display-4" style="text-align:center;">Hello {{ Auth::user()->name }} </h1>

          <h3 class="display-4" style="text-align:left;">Instructions for the applicant </h3>


          <div class="container-fluid">
            <div class="jumbotron mb-1">

              <h1 class="display-4">ADD APPLICATION</h1> <br>
              <p class="lead">
                If you are belonging to any of following category, by clicking on add application tab you can fill this application to
                receive the allowance. <br>
                a) Samurdhi recipient <br>
                b) Samurdhi appealed <br>
                c) Job losser due to COVID <br>
                d) Low income earner <br>
                e) Employed abroad <br>
                If any subject is not relevant for you, please be aware to mention as “N/A”.


                <hr class="my-4">

                <a class="btn btn-primary btn-lg " href="{{url('/app')}}" role="button" style="margin-left: 85%;">Add Application</a>


            </div>


            <div class="jumbotron mb-1">

              <h1 class="display-4">MY APPLICATION</h1> <br>
              <p class="lead">
              After you filled your application, it is sent for approval process and by clicking
               on my application tab you can check whether it is approved or not within 48 hours. If your application has approved then 
               you can enter your bank account details through this section.


                <hr class="my-4">

                <a class="btn btn-primary btn-lg " href="{{url('/my')}}" role="button" style="margin-left: 85%;">My Application</a>


            </div>


            <div class="jumbotron mb-1">

              <h1 class="display-4">APPEAL</h1>  <br>
              <p class="lead">
              If you are not belonging to any kind of category included in the application, by clicking on
               appeal tab you can add and send your special appeal for us.
Please be aware to clearly mention your matter.
Please check your account to know whether it is approved or not within 48 hours.



                <hr class="my-4">

                <a class="btn btn-primary btn-lg " href="{{url('/again')}}" role="button" style="margin-left: 85%;">Appeal</a>


            </div>


            <div class="jumbotron mb-1">

              <h1 class="display-4">ADD COMPLAINS</h1> <br>
              <p class="lead">If you are having any issue regarding allowance payment, by clicking on add complains tab 
                 you can write for us.

                <hr class="my-4">

                <a class="btn btn-primary btn-lg " href="{{url('/complain')}}" role="button" style="margin-left: 85%;">Add Complains</a>


            </div>

          </div>

        </div>
        <!-- content-wrapper ends -->

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
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

@include('footer')