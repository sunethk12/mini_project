<!DOCTYPE html>

<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>



<body>
@include('sweet::alert')

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #54a0d6;">
            <a class="navbar-brand" href="#"><!--Navbar --> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/')}}"><b>Home</b> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}"><b>News</b></a>
                    </li>

                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/about')}}" tabindex="-1" aria-disabled="true"><b>Contact Us</b></a>
                    </li>

                </ul>

                @if (Route::has('login'))

                @auth


                <a href="{{url('/dash')}}">
                    <button><b>Dashboard</b></button>

                </a>

                <x-app-layout>

                </x-app-layout>

                @else
                <a href="{{ route('login') }}"><button class="btn btn-success my-2 my-sm-0 ">Log in</button></a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"><button
                        class="btn btn-success my-2 my-sm-0 ml-3 ">Register</button></a>
                @endif
                @endauth
            </div>
            @endif

      </div>
    </nav>




</div>
    <div class="container-fluid">
        <div class="mb-5" style="background-color: rgb(232, 239, 240);">
            <h2 class="ml-3">Drop us a message</h2>
            <form action="{{url('/contactinfo')}}" method="POST">
            @csrf
                <div class="form-group col-md-12">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="name">
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror    
                </div>
                <div class="form-group col-md-12">
                    <label for="Email1">Email</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror 
                </div>
                <div class="form-group col-md-12">
                    <label for="Contact">Conatct Number</label>
                    <input type="text" class="form-control" name="contact">
                    @error('contact')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                    <label for="Message">Message</label>
                    <textarea class="form-control" name="msg" rows="5"></textarea>
                    @error('msg')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" name="sendMessage"
                    style="margin-left:90%;margin-bottom:20px;background-color:#FB550C;color:white;">Send
                    Message</button>
            </form>
        </div>
</div>





</body>

</html>

@include("footer")