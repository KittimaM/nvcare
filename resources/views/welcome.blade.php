<!DOCTYPE html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('bootstrap-5.1.0-dist\css\bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title> NVcare</title>
    
    <!--ลิ้งล็อคอิน-->
    <link rel="icon" type="image/png" href="{{asset('image/logins/icons')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logins/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logins/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logins/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logins/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="logins/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logins/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logins/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="logins/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logins/css/util.css">
	<link rel="stylesheet" type="text/css" href="logins/css/main.css">

    <!--ลิ้งสไลด์หน้าแรก--> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="slide/css/owl.carousel.min.css">
    <link rel="stylesheet" href="slide/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="slide/css/style.css">

  </head>

 <body> 


        
<!--==============================================slide=================================================-->
    <div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image:url(image/slide/slide1.jpg);">
            <div class=""></div>
          <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2></h2>
                      <h1 class="mb-3"></h1>
                  </div>
                </div>
              </div>
          </div>
        </div>
  
        <div class="slider-item js-fullheight" style="background-image:url(image/slide/slide2.jpg);">
            <div class=""></div>
          <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2></h2>
                      <h1 class="mb-3"></h1>
                  </div>
                </div>
              </div>
          </div>
        </div>
  
        <div class="slider-item js-fullheight" style="background-image:url(image/slide/slide3.jpg);">
            <div class=""></div>
          <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2></h2>
                      <h1 class="mb-3"></h1>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
  
      <script src="slide/js/jquery.min.js"></script>
      <script src="slide/js/popper.js"></script>
      <script src="slide/js/bootstrap.min.js"></script>
      <script src="slide/js/owl.carousel.min.js"></script>
      <script src="slide/js/main.js"></script>
      <!--===============================================login================================================-->
      
        <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{route('admin')}}" method="post">
        @csrf
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
              
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="user_name" placeholder="User name" value="{{old('user_name')}}">
						<span class="focus-input100"></span>
					</div>
          <span class="text-danger">@error('user_name') {{$message}} @enderror</span>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
          
					</div>
          <span class="text-danger">@error('password') {{$message}} @enderror</span>
          @if (session('password'))<span class="text-danger">{{ session('password') }}</span>@endif
          @if (session('user'))<span class="text-danger">{{ session('user') }}</span>@endif

					<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Sign in
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="{{route('fg')}}" class="txt2">
							User name / password?
						</a>
					</div>

					<div class="w-full text-center">
						<a href="register" class="txt3">
							Sign Up
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('image/login/login.jpg');"></div>
			</div>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
	
	<script src="Logins/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="Logins/vendor/animsition/js/animsition.min.js"></script>
	<script src="Logins/vendor/bootstrap/js/popper.js"></script>
	<script src="Logins/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="Logins/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<script src="Logins/vendor/daterangepicker/moment.min.js"></script>
	<script src="Logins/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="Logins/vendor/countdowntime/countdowntime.js"></script>
	<script src="Logins/js/main.js"></script>
<!--===============================================================================================-->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
    

  </body>
  </html>
