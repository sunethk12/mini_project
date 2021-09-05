<!DOCTYPE html>

<html lang="en">

<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>



	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #54a0d6;">
			<a class="navbar-brand" href="#"><!--Navbar --></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{url('/')}}"><b>Home </b><span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#news"><b>News</b></a>
					</li>

					
					<li class="nav-item">
						<a class="nav-link" href="{{url('/about')}}" tabindex="-1" aria-disabled="true"><b>Contact Us</b></a>
					</li>
					
					</ul>


			

				@if (Route::has('login'))
               
                    @auth

				
                <a  href="{{url('/dash')}}">
                  <button>Dashboard</button>
                  
                </a>
             

					<x-app-layout>
   
  					 </x-app-layout>

					 
   
                    @else
			<a href="{{ route('login') }}" ><button class="btn btn-warning my-2 my-sm-0 ">Log in</button></a>

                        @if (Route::has('register'))
						 <a href="{{ route('register') }}" ><button class="btn btn-warning my-2 my-sm-0 ml-3 ">Register</button></a> 
                        @endif
                    @endauth
                </div>
            @endif


			</div>
		</nav>

	</div>

	<!--carousel-->

	<div class="container-fluid mb-5 ">
		<div class="carousel slide carousel-fade" data-ride="carousel" id="indicator">
			<ol class="carousel-indicators">
				<li data-target="#indicator" data-slide-to="0"></li>
				<li data-target="#indicator" data-slide-to="1"></li>


			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/covid2.jpg" class="d-block w-100" alt="...">
					
				</div>
				<div class="carousel-item">
					<img src="images/covidnew.jpg" class="d-block w-100" alt="...">
					
				</div>


			</div>
			<a href="#indicator" class="carousel-control-prev" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a href="#indicator" class="carousel-control-next" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</div>


	<!--jumbotrone-->
	

	<div class="container-fluid">
		<div class="jumbotron mb-5">

			<h1 class="display-4">Get your allowance while staying at home.....</h1>
			<p class="lead">Are you struggling with fulfilling your essential daily needs because of this Covid-19 pandemic??? 
				Here we are giving 5000 rupees allowance for the families who are in need. 
				<br>
				You can now apply for allowance using website and we will review your request and approve it as soon as possible. 
				Also you can easily make an appeal if your application got reject.
				<br>
				Because of this Covid-19 pandemic, we all are in a huge economic and financial crisis. 
				We can overcome this giving helping hand to each other. Let’s build our financial stability. 
				<br>
				No more waits at government office during this pandemic. <br>
				Apply while stay home. And easily get your allowance to your bank account. 
				</p>

			<hr class="my-4">
			<p>Stay safe, be happy, make strong country.</p>
			<a class="btn btn-primary btn-lg " href="#" role="button" style="margin-left: 85%;">Get Start</a>


		</div>
	</div>

	

	<div class="container-fluid mt-5">
		<div class="row text-center" id="heading">
			<div class="col-md-12 col-md-offset-3 wow animated zoomInDown" id="heading-text">
				<h2>News</h2>

				<hr class="full">
				<br />
			</div>
		</div>
	</div>


	<!--news-->
	

	<div class="container-fluid mt-3" id="news">
	@foreach($data as $data)
		<div class="card mb-3">
			<div class="row">
				<div class="col-md-3">
					<img src="newsimage/{{$data->image}}" class="card-img " style="width:230px;height:170px;">
				</div>
				<div class="col-md-7">
					<div class="card-body mt-4">
						<h4 class="card-title">{{$data->title}}</h4>
						<p class="card-text">
						
						{{$data->description}}
						</p>



					<p style="margin-left:75%;color:blue;">Published Date :	{{$data->post_date}} </p>

					</div>
				</div>
				<div class="col-md-2 mt-5">
					<a href="#"> <button class="btn" style="background-color:#FB550C;color:white;">View
							More</button></a>
				</div>
			</div>
		</div>

		@endforeach

	</div>




	<div class="footer-main">
		<div class="footer-main-div">



			<div class="footer-menu-one">
				<ul>
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="{{url('/about')}}">Contact Us</a></li>
				</ul>
			</div>
		</div>


		<div class="footer-bottom">
			<div class="row mt-3">
				<div class="col-md-12 text-center">
					<p class="copyright">
						Copyright &copy;
						<script>document.write(new Date().getFullYear());</script> All rights reserved
					</p>
				</div>
			</div>
		</div>
	</div>






</body>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
	integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
	crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
	integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
	crossorigin="anonymous"></script>


</html>