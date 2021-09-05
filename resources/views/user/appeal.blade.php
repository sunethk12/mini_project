
<!doctype html>
<html lang="en">

<head>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Appeal</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="ap/css/bootstrap.min.css">
  
</head>

<body>
<!-- nav bar-->
@include('user.nav')
@include('sweet::alert')
<div class="container">

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Your Appeal Here</h4>
                 
                  <form class="forms-sample" action="{{url('/uploadapp')}}" method="POST">
                  @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Name">
                      @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">NIC</label>
                      <input type="text" class="form-control" name="nic" placeholder="NIC" maxlength="10">
                      @error('nic')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Contact</label>
                      <input type="text" class="form-control" name="contact" placeholder="Contact" maxlength="10">
                      @error('contact')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Address</label>
                      <input type="text" class="form-control" name="address" placeholder="Address">
                      @error('address')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Grama niladhari division</label>
                      <input type="text" class="form-control" name="gsd" placeholder="Grama niladhari division ">
                      @error('gsd')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
                    </div>
                
                    <div class="form-group">
                      <label for="exampleTextarea1">Speacial Reason for Consider as an Appeal</label>
                      <textarea class="form-control" name="reason" rows="4" placeholder="Mention your reason briefly..."></textarea>
                      @error('reason')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

                    
               
</div>

</body>
  

</html>


<!--footer-->
@include('footer')