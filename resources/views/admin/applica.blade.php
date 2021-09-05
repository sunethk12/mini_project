
<x-app-layout>
   
   </x-app-layout>
   
   <!DOCTYPE html>
<html lang="en">
  <head>
    <title>View Applications</title>
  @include("admin.admincss")
  </head>
  <body>
  @include('sweet::alert')
  <div class="container-scroller">
  @include("admin.navbar")

  
<div class="container mt-3">
@foreach($data as $data)
        <div class="card mb-3" style="background-color:white;color:black;" >
			<div class="row">
				<div class="col-md-10">
					<div class="card-body mt-3">
						
						<p class="card-text">
                        <b>Full name  :</b>  {{$data->name}} <br>
                        <b>No of members  : </b> {{$data->no_of_members}} <br>
                        <b>NIC no  :</b>  {{$data->nic}} <br>
                        <b>Contact No  :</b>  {{$data->contact}} <br>
                        <b> Permanent address  : </b> {{$data->address}}  <br>
                        <b> Divisional secretary's division  : </b> {{$data->dsd}}<br>
                        <b> Grama niladhari's division  : </b> {{$data->gsd}} <br>
                        <b> Job done  : </b> {{$data->job}} <br> 
                        <b> Category  :</b>  {{$data->category}}</p> 

					</div>
				</div>
				<div class="col-md-2 mt-5">
					<a href="{{url('/updateapp',$data->id)}}"> <button class="btn" style="background-color:#16D830;color:white;">Approve</button></a><br>
                    <a href="{{url('/rejectapp',$data->id)}}"> <button class="btn mt-4" style="background-color:#FB550C;color:white;">Reject</button></a>
				</div>
			</div>
		</div>


      @endforeach

</div>

</div>
     
    
  @include("admin.adminscript")
  </body>
  
</html>