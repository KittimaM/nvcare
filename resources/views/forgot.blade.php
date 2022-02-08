<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>forgot</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
  <link rel="stylesheet" href="{{ asset('css/forget.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Forgot User name or Password</h3>
		
		<div class="card-text">
			<form action="{{route('check')}}" method="get">
				@csrf
				<div class="form-group">
					<label for="exampleInputEmail1">Enter your email </label>
					<input type="email" name="email" class="form-control form-control-sm" placeholder="Enter your email address">
				</div>
				@if (session('Nfound'))<span class="text-danger">{{ session('Nfound') }}</span>@endif
				<button type="submit" class="btn btn-primary btn-block">select</button>
			</form>
			<br><span ><a href="{{route('login')}}" >I remember my account </a></span>
		</div>
	</div>
</div>
<!-- partial -->



  
</body>
</html>
