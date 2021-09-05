
<x-app-layout>
   
   </x-app-layout>
   
   <!DOCTYPE html>
<html lang="en">
  <head>
  <title>Dashboard</title>
  @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">   
  @include("admin.navbar")

  
  <div class="container mt-5">
  


  <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Pending Applications</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{ $count }}</h2>
                          
                        </div>
                       
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Complains</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{ $count2 }}</h2>
                          
                        </div>
                       
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Appeals</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">{{ $count3 }}</h2>
                          
                        </div>
                        
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12 col-xl-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title">Contact Information -({{$c}})</h4>
                      <p class="text-muted mb-1 small">Date & Time</p>
                    </div>
                    @foreach($data as $data)
                    <div class="preview-list">
                      <div class="preview-item border-bottom">
                        
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">{{$data->name}}</h6>
                              <p class="text-muted text-small">{{$data->created_at}}</p>
                            </div>
                            <p class="text-muted">{{$data->msg}}</p>
                          </div>
                        </div>
                      </div>
                     
                     
                        
                      </div>
                      @endforeach
                    </div>
                   
                  </div>
                  
                </div>
                
              </div>
              
              
            </div>


</div>



</div>
  @include("admin.adminscript")
  </body>
</html>