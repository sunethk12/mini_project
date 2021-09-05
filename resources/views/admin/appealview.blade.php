
<x-app-layout>
   
   </x-app-layout>
   
   <!DOCTYPE html>
<html lang="en">
  <head>
  <title>Appeals</title>
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
					<div class="card-body mt-2">
						
						<p class="card-text">
                        <b>Name  :</b>  {{$data->name}} <br> 
                        <b>NIC no  :</b>  {{$data->nic}} <br>
                        <b>Contact No  :</b>  {{$data->contact}} <br>
                        <b> Address  : </b> {{$data->address}}  <br>
                        <b> Grama niladhari division  : </b> {{$data->gsd}} <br>
                        <b> Reason for considering appeal  : </b> {{$data->reason}} <br> 
                        

					</div>
				</div>
				<div class="col-md-2 mt-5">
					
                    <a href="{{url('/deleteapp',$data->id)}}"><button class="btn btn-danger" style="color:white;"> Delete Appeal</button></a>
                    
				</div>
			</div>
		</div>


      @endforeach

       






</div>
















</div>
     
    
  @include("admin.adminscript")
  </body>
</html>