<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.css")
    <style>
      label{
         display:inline-block;
         width:200px;
      }
 </style>
   
 </head>
 <body >

<div class="container-scroller" >
@include("admin.dash")
<div style="position:relative; top: 80px;right: -180px;" border="7px"  bgcolor="blue" padding="8px">
    <form action="{{url('/uploadfood')}} " method="post" enctype="multipart/form-data" >
        @csrf
        <div>
            <label >Title</label>
            <input style="color:blue" type="text" name="title" placeholder="Write a title" required>
        </div><br>
        <div>                                           
     <label >Price</label>
     <input style="color:blue" type="number" name="price" placeholder="Write price" required>
 </div> <br><div>
     <label >image</label>
     <input  style="color:blue"type="file" name="image"  required>
 </div><br>
 <div>
     <label >Description</label>
     <input  style="color:blue"type="text" name="des" placeholder="Describe" required>
 </div><br>
 <div>
     <input class="btn btn-primary" style="color:white;position:relative" type="submit" value="Save">
 </div><br>
    </form>
    <div><table bgcolor="black">
        <tr>
            <th style="padding:10px">Food name</th>
        <th style="padding: 10px">Price</th>
        <th style="padding: 10px">Description</th>
        <th style="padding: 10px">Image</th>
        <th style="padding: 10px">Action</th>
        <th style="padding: 10px">Action2</th>
        </tr> @foreach($data as $data)
        <tr align="center" bgcolor="white" style="color:black; height:300px;">
<td>{{$data->Title}}</td>
<td>{{$data->Price}}</td>
<td>{{$data->Description}}</td>
<td><img style="height:100%"  width="250" src="/foodimage/{{$data->image}}" ></td>
<td><a class="btn btn-primary" href="{{url('/deletemenu',$data->id)}}"> Delete </a></td>
<td><a class="btn btn-primary" href="{{url('/updatemenu',$data->id)}}"> Update </a></td>
        </tr>@endforeach
    </table></div>
</div>
</div>
@include("admin.script")

  </body>
</html>