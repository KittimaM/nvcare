<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sign up</title>

    <link rel="stylesheet" href="{{ asset ('bootstrap-5.1.0-dist\css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('registers/style.css') }}">

    <script src="registers/script.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</head>
<body>

    <div class="registration-form">
        <form action="{{route('adduser')}}" method="post">
            @csrf
            <div class="form-icon">
                <img src="image/user.png" alt="Admin" class="rounded-circle" width="150">
            </div>
            <div class="form-group">
                <span class="text-danger">@error('user_name') {{ $message }} @enderror</span> 
                <input type="text" class="form-control item" name="user_name" placeholder="User name" value="{{old('user_name')}}" >
                
                <span class="text-danger">@error('name_user') {{$message}} @enderror </span>
                <input type="text" class="form-control item" name="name_user" placeholder="Full name" value="{{old('name_user')}}">
                
                <span class="text-danger">@error('password') {{$message}} @enderror </span>
                <input type="password" class="form-control item" name="password" placeholder="Password" value="{{old('password')}}">
                
                <span class="text-danger">@error('email') {{$message}} @enderror </span>
                <input type="text" class="form-control item" name="email" placeholder="Email" value="{{old('email')}}">
                
                <span class="text-danger">@error('birth_date') {{$message}} @enderror </span>
                <input type="date" class="form-control item" name="birth_date" placeholder="Birth date" value="{{old('birth_date')}}">
            
                <span class="text-danger">@error('uni') {{$message}} @enderror </span>
                <input type="text" class="form-control item" name="uni" placeholder="University" value="{{old('uni')}}">

                <span class="text-danger">@error('year') {{$message}} @enderror </span>
                <input type="text" class="form-control item" name="year" placeholder="Year" value="{{old('year')}}">
                
                <span class="text-danger">@error('stdid') {{$message}} @enderror </span>
                <input type="text" class="form-control item" name="stdid" placeholder="Student ID" value="{{old('stdid')}}">
                
                <span class="text-danger">@error('gender') {{$message}} @enderror<br> </span>
                
                <input type="radio"   name="gender"  value="Male">
                <label for="gender" >Male</label>
                <input type="radio"  name="gender"  value="female">
                <label for="gender" >female</label>
                <br>
                <br>
                <span class="text-danger">@error('allow') {{$message}} @enderror<br> </span>
                <h5>Allowed to do pretests</h5>
                <input type="radio"   name="allow"  value="Yes">
                <label for="allow" >Yes</label>
                <input type="radio"   name="allow"  value="No">
                <label for="allow" >No</label>
                <br>
                

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account" > Create Account</button>
            </div>
            <br>
    
            <a href="/"  class="tex" >Already have an account</a>
        </form>
    </div>

</body>

</html>

