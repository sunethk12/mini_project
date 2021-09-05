
<x-app-layout>
   
   </x-app-layout>
   
   <!DOCTYPE html>
<html lang="en">
  <head>
  <title>Complains</title>
  @include("admin.admincss")
  </head>
  <body>
  @include('sweet::alert')
  <div class="container-scroller">
  @include("admin.navbar")

  
<div class="container mt-3">


<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Complains</h4>
                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Grama Niladhari Division</th>
                            <th>Complain</th>
                            <th></th>
                          </tr>
                        </thead>
                        @foreach($data as $data)
                        <tbody>
                          <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->contact}}</td>
                            <td>{{$data->gsd}}</td>
                            <td>{{$data->complain}}</td>
                            <td><a href="{{url('/deletecomp',$data->id)}}"><button class="btn btn-danger" style="color:white;"> Delete</button></a></td>
                          </tr>
                          
                          
                          
                          
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div>









</div>



</div>
     
    
  @include("admin.adminscript")
  </body>
</html>