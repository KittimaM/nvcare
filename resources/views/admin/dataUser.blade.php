<!-- Navigation -->
  @extends('navbar_admin')
  @section('content')
<head>
  <meta charset="UTF-8">
  <title>NVcare</title>
  <link rel="stylesheet" href="{{ asset ('bootstrap-5.1.0-dist\css\bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('css/datauser.css') }}">

</head>
<body>
  
<!-- partial:index.partial.html -->

<table class = "dopretest">
      <thead>

        <tr>
          <th>User name</th>
          <th>Full name</th>
          <th>Email</th>
          <th>Birth Date</th>
          <th>University</th>
          <th>Year</th>
          <th>Student ID</th>
          <th>Gender</th>
          <th>Score1</th>
          <th>Score2</th>
          
          
        </tr>
      <thead>
      <tbody>
        @foreach($user_name as $row)
          @if($row->user_name != 'Admin')
          <tr>
          <td>{{ $row->user_name }}</td>
          <td>{{ $row->name_user }}</td>
          <td>{{ $row->email }}</td>
          <td>{{ $row->birth_date }}</td>
          <td>{{ $row->uni }}</td>
          <td>{{ $row->year }}</td>
          <td>{{ $row->stdid }}</td>
          <td>{{ $row->gender }}</td>
          <td>{{ $row->joy->total }}</td>
          <td>{{ $row->joy->total2 }}</td>
       
          @endif
          @endforeach

  
        </tr>
      
   
      </tbody>
</table>
 


<table class = "nopretest">
      <thead>
        <tr>
          <th>User name</th>
          <th>Full name</th>
          <th>Email</th>
          <th>Birth Date</th>
          <th>University</th>
          <th>Year</th>
          <th>Student ID</th>
          <th>Gender</th>
          
          
          
        </tr>
      <thead>
      <tbody>
        @foreach($nopretest as $row)
          @if($row->user_name != 'Admin')
          <tr>
          <td>{{ $row->user_name }}</td>
          <td>{{ $row->name_user }}</td>
          <td>{{ $row->email }}</td>
          <td>{{ $row->birth_date }}</td>
          <td>{{ $row->uni }}</td>
          <td>{{ $row->year }}</td>
          <td>{{ $row->stdid }}</td>
          <td>{{ $row->gender }}</td>
         
          @endif
          @endforeach

  
        </tr>
      
   
      </tbody>
</table>
      
</body>
@endsection
