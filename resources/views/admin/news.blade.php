<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
<title>News</title>
    @include("admin.admincss")


</head>

<body>


    <div class="container-scroller">

        @include("admin.navbar")
        @include('sweet::alert')


        <div class="container mt-5">

            <div class="col-12 grid-margin stretch-card">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Latest News</h4>

                        <form class="forms-sample" action="{{url('/uploadnews')}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="NewsTitle">News Title</label>
                                <input type="text" class="form-control" name="title" placeholder="News Title">
                                @error('title')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
                            </div>


                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" class="form-control" name="date" placeholder="YYYY/MM/DD">
                                @error('date')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
                            </div>



                            <div class="form-group">
                                <label>Image upload</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                                @error('image')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
                            </div>

                            <div class="form-group">
                                <label for="description">News Description</label>
                                <textarea class="form-control" name="description" rows="4"></textarea>
                                @error('description')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
                            </div>


                            <button type="submit" class="btn btn-primary mr-2">Post</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>

            </div>



            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Posted News</h4>
                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Title</th>
                            <th>Posted Date</th>
                            <th>Description</th>
                            <th></th>
                          </tr>
                        </thead>
                        @foreach($data as $data)
                        <tbody>
                          <tr>
                            <td>{{$data->title}}</td>
                            <td>{{$data->post_date}}</td>
                            <td>{{$data->description}}</td>
                            <td><a href="{{url('/deletenews',$data->id)}}"><button class="btn btn-danger" style="color:white;"> Delete</button></a></td>
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


    <!-- @include("admin.adminscript") -->
</body>

<script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="admin/assets/vendors/select2/select2.min.js"></script>
<script src="admin/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="admin/assets/js/off-canvas.js"></script>
<script src="admin/assets/js/hoverable-collapse.js"></script>
<script src="admin/assets/js/misc.js"></script>
<script src="admin/assets/js/settings.js"></script>
<script src="admin/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="admin/assets/js/file-upload.js"></script>
<script src="admin/assets/js/typeahead.js"></script>
<script src="admin/assets/js/select2.js"></script>





</html>