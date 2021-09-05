
<x-app-layout>
   
   </x-app-layout>
   
   <!DOCTYPE html>
<html lang="en">
  <head>
  <title>Bank Details</title>
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
                    <h4 class="card-title">Bank Account Details</h4>

                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Branch Name</th>
                            <th>Account Holder's Name</th>
                            <th>Account Number</th>
                            <th></th>
                          </tr>
                        </thead>
                        @foreach($data as $data)
                        <tbody>
                          <tr>
                            <td>{{$data->bname}}</td>
                            <td>{{$data->branch}}</td>
                            <td>{{$data->accname}}</td>
                            <td>{{$data->accnumber}}</td>
                            
                            <td><a href="{{url('/deletebank',$data->id)}}"><button class="btn btn-danger" style="color:white;"> Delete</button></a></td>
                          </tr>
                         
                          
                        </tbody>
                        @endforeach
                      </table>
                  

                    </div>

                    <div class="template-demo">
                          
                         <a href="{{url('downloadpdf')}}"> <button type="button" class="btn btn-info btn-icon-text"> Print <i class="mdi mdi-printer btn-icon-append"></i>
                          </button>
                        </a>
                    </div>

                    
                  </div>
  
                  
                </div>
              </div>


</div>


</div>
     
    
  @include("admin.adminscript")
  </body>

</html>