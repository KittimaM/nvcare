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

<table class = "pretest">
      <thead>

        <tr>
          <th>User name</th>
          <th> | </th>
          @for($i=1;$i<=10;$i++)
            <th>{{ $i }}</th>
          @endfor
          <th> | </th>
          @for($i=1;$i<=25;$i++)
            <th>{{ $i }}</th>
          @endfor
          <th> | </th>
          <th>part 1 </th>
          <th>part 2</th>
          
          
          
        </tr>
      <thead>
      <tbody>
      @foreach($user_name as $row)
          @if($row->user_name != 'Admin')
          <tr>
          <td>{{ $row->user_name }}</td>
        <td> | </td>

          @for($i=1;$i<=10;$i++)
            <td>{{ $row->connectfirst->$i }}</td>
          @endfor
          <td> | </td>
          @for($i=11;$i<=35;$i++)
            <td>{{ $row->connectsecond->$i }}</td>
          @endfor
          <td> | </td>
          <td>{{ $row->joy->total }}</td>
          <td> | </td>
          <td>{{ $row->joy->total2 }}</td>
          

          @endif
          @endforeach
         

  
        </tr>
      
   
      </tbody>
</table>

<table class = "eachtotal">
        <thead>

        <tr>
        @for($i=1;$i<=10;$i++)
            <th>{{ $i }}</th>
        @endfor
        @for($i=1;$i<=25;$i++)
            <th>{{ $i }}</th>
        @endfor
        
        
        
        </tr>
        <thead>
      
      <tbody>
          <tr>
          
          @for($i=1;$i<=35;$i++)
          @php($sum = 0)
            @if($i<=10)
              @foreach($pretest as $row)
                @php($sum = $sum+$row->$i)
              @endforeach
              <td>{{ $sum }} </td>
            @else
              @foreach($care as $row)
                @php($sum = $sum+$row->$i)
              @endforeach
              <td>{{ $sum }} </td>
            @endif
          @endfor
        
        
            
        </tr>
      </tbody>
</table>
 


      
</body>
@endsection
