<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
<title>User Contacts</title>
    @include("admin.admincss")
</head>

<body>
@include('sweet::alert')

    <div class="container-scroller">

        @include("admin.navbar")


        <div class="container mt-5">





            <table class="table " style="background-color:white;color:black;">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Message</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                @foreach($data as $data)
                <tbody>
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->contact}}</td>
                        <td>{{$data->msg}}</td>
                        <td><a href="{{url('/deletecon',$data->id)}}"><button class="btn btn-danger"
                                    style="color:white;"> Delete</button></a></td>
                    </tr>

                </tbody>
                @endforeach
            </table>





        </div>




    </div>


    @include("admin.adminscript")
</body>

</html>