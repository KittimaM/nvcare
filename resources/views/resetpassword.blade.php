<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Reset</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
  <link rel="stylesheet" href="{{ asset ('css/reset.css') }}">


</head>
<body>
<!-- partial:index.partial.html -->
<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Reset Password</h3>
		
		<div class="card-text">
			<form action="{{url('reset/'.$user_name)}} " method="get">
				@csrf
				<div class="form-group">
					<h5 value="{{$user_name}}" name=user_name class="name" >You are " {{ $user_name }} "</h5>
                    <label for="header">Please enter new password</label>
					<input type="password" name="password" class="form-control form-control-sm" placeholder="Enter new password">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
 
				</div>
				@if (session('success'))
                <span class="text-success text-center">{{ session('success') }}</span><br>
                <h6 class="text-center"><a href="{{route('login')}}">Back to login</a></h6>
                @endif
				<button type="submit" class="btn btn-primary btn-block">Submit</button>
			</form>
                <br><span><a href="{{route('fg')}}">This is not me</a></span>
		</div>
	</div>
</div>


<!-- partial -->


  
</body>
</html>
