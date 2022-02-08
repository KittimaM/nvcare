<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Score</title>
  <link rel="stylesheet" href="css/scores.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form action="{{route('welcome')}}" method="get">
<div class="contact-us">
  <form>
    @csrf
    <h1>Your score part 1 is '{{$total}}'</h1>
    <h1>Your score part 2 is '{{ $total2 }}'</h1><br>
    <button type="submit" value="{{ $user_name }}" name="user_name">Home</button>
  </form>
</div>
</form>
<!-- partial -->
  
</body>
</html>
