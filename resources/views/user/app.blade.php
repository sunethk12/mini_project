

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Application</title>
  <!-- Bootstrap CSS -->

  <link rel="stylesheet" type="text/css" href="ap/css/bootstrap.min.css">
 

 
</head>



<body>
<!-- nav bar-->
@include('user.nav')

@include('sweet::alert')



  <div class="container bg-white text-black p-5">
    <!-- starting container -->
    <h2 class="pt-2 pb-4 text-center font-weight-bold">Rs.5000 Allowance Requesting Application - 2021 </h2>

    <form action="{{url('/upload')}}" method="POST">

    @csrf

      <div class="form-group row">
        <label for="fullname" class="col-sm-2 col-form-label font-weight-bold">Full name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="fullname"  placeholder="Ex-: Keraminiyage Nimal Herath">
          @error('fullname')
                        <span class="text-danger">{{$message}}</span>
                @enderror 
        </div>
      </div>

      <div class="form-group row">
        <label for="fmembers" class="col-sm-2 col-form-label font-weight-bold">No of members</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="fmembers" placeholder="Ex-: 4" >
          @error('fmembers')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
        </div>
      </div>

      <div class="form-group row">
        <label for="nic" class="col-sm-2 col-form-label font-weight-bold ">NIC no</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nic" placeholder="Ex-: 785124952v" maxlength="10">
          @error('nic')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
        </div>
      </div>

      <div class="form-group row">
        <label for="contact" class="col-sm-2 col-form-label font-weight-bold ">Contact no</label>
        <div class="col-sm-10">
          <input type="tel" class="form-control" name="contact" placeholder="Ex-: 0772323256" maxlength="10">
          @error('contact')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
        </div>
      </div>


      <div class="form-group row">
        <label for="address" class="col-sm-2 col-form-label font-weight-bold ">Permanent address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="address" placeholder="Ex-: N0: 10,Magawela,Meetiyagoda" >
          @error('address')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
        </div>
      </div>

      <div class="form-group row">
        <label for="dsd" class="col-sm-2 col-form-label font-weight-bold ">Divisional secretary's division</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="dsd" placeholder="Ex-: Ambalangoda" >
          @error('dsd')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
        </div>
      </div>

      <div class="form-group row">
        <label for="gnd" class="col-sm-2 col-form-label font-weight-bold">Grama niladhari's division</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="gsd" placeholder="Ex-: Udakarawa" >
          @error('gsd')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
        </div>
      </div>

      <div class="form-group row">
        <label for="job" class="col-sm-2 col-form-label font-weight-bold">Job done</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="job" placeholder="Ex-: Private bus driver" >
        </div>
      </div>

      <div class="form-group row">
        <label for="category" class="col-sm-2 col-form-label font-weight-bold ">Category you belongs</label>
        <div class="col-sm-10">
          <select class="custom-select" name="category">
            <option value="" selected>Select category*</option>
            <option>Samurdhi recipient</option>
            <option >Samurdhi appealed</option>
            <option >Job losser due to COVID</option>
            <option >Low income earner</option>
            <option >Employed abroad</option>
          </select>
          @error('category')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
        </div>
      </div>



      <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="check5">
            <label class="form-check-label" for="check5">
              I hereby declare that the details provided in the resume are true to the best of my knowledge and I shall
              bear all responsibilities for their accuracy.
            </label>
          </div>
        </div>
      </div>


      <div class="form-group row">
        <div class="col-sm-6 text-center">
          <button type="submit" class="btn btn-primary " >Submit</button>
        </div>
      </div>
    </form>



  </div><!-- closing container -->
   
  
  <!--  js -->
  <script src="ap/js/jquery.min.js"></script>
  <script src="ap/js/popper.js"></script>
  <script src="ap/js/bootstrap.min.js"></script>
  <script src="ap/js/main.js"></script>
</body>

<!--footer-->
@include('footer')

</html>