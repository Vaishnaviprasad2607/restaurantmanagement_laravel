<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.css")
 
 </head>
 <body>

<div class="container-scroller" >
@include("admin.dash")
<div style="position:relative; top:60px; right: -150px;">
<table bgcolor="black"  border="5px"  border-color="white" >
    <tr>
        <th style="padding: 30px">Name</th>
        <th style="padding: 30px">Email</th>
        <th style="padding: 30px">Action</th>
    </tr>
    @foreach($data as $data)
    <tr align="center"bgcolor="white" style="color:black">
    <td>{{$data->name}}</td>
    <td>{{$data->email}}</td>
    @if($data->usertype=="0")
    <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
    @else
    <td><a >Not allowed</a></td>
    @endif
    </tr>
    @endforeach
</table>
</div>
</div>
@include("admin.script")

  </body>
</html> 