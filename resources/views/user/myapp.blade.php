<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Application</title>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="ap/css/bootstrap.min.css">

</head>

<body>
    <!-- nav bar-->
    @include('user.nav')
    @include('sweet::alert')
    <div class="container" style="height: 900px;">

      
    @if(count($data) <= 0)

  <div class="container">
 <h2>You have not subitted application yet.</h2>
</div>


@else
    



   
        @foreach($data as $data)
        <div class="card mb-3" style="background-color:white;color:black;">
            <div class="row">
                <div class="col-md-10">
                    <div class="card-body mt-2">

                        <p class="card-text">
                            

                        <b>Full name  :</b>  {{$data->name}} <br>
                        <b>No of members  : </b> {{$data->no_of_members}} <br>
                        <b>NIC no  :</b>  {{$data->nic}} <br>
                        <b>Contact No  :</b>  {{$data->contact}} <br>
                        <b> Permanent address  : </b> {{$data->address}}  <br>
                        <b> Divisional secretary's division  : </b> {{$data->dsd}}<br>
                        <b> Grama niladhari's division  : </b> {{$data->gsd}} <br>
                        <b> Job done  : </b> {{$data->job}} <br> 
                        <b> Category  :</b>  {{$data->category}} <br>
                        <b>Status :</b> {{$data->status}} <br>


                        </p>    


                    </div>
                </div>
                <div class="col-md-2 mt-5">
                @if($data->status =='pending')

                    <a href=""><button class="btn btn-primary" style="color:white;" >{{$data->status}}
                            </button></a>
               @elseif($data->status =='rejected')            
               <a href=""><button class="btn btn-danger" style="color:white;" >{{$data->status}}
                            </button></a>
                @else
                <a href=""><button class="btn btn-success" style="color:white;">
                {{$data->status}}</button></a>

                @endif
                </div>
            </div>
        </div>


        @endforeach






        @if($data->status =='approved')

        <div class="alert alert-success" role="alert">
  Your application has approved. Now you can enter your bank details. 
</div>


        <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Enter Your Bank Details</h4>
                  
                  <form class="forms-sample" action="{{url('/bankup')}}" method="POST"> 
                  @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Bank Name</label>
                      <input type="text" class="form-control" name="bname" placeholder="Name">
                      @error('bname')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                
                    <div class="form-group">
                      <label for="exampleInputCity1">Branch Name</label>
                      <input type="text" class="form-control" name="branch" placeholder="Branch Name">
                      @error('branch')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleInputCity1">Account Holder's Name</label>
                      <input type="text" class="form-control" name="accname" placeholder="Account Holder's Name">
                      @error('accname')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputCity1">Account Number</label>
                      <input type="text" class="form-control" name="accnumber" placeholder="Account Number">
                      @error('accnumber')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>






                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>


        @else
        

        @endif

      
@endif
    </div>

</body>

<!--footer-->
@include('footer')

</html>