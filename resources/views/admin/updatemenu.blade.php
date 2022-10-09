<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      label{
        display:inline-block;
        width:200px;
      }
    </style>
    <base href="/public">
    @include("admin.css")
 </head
 <body >
 <div class="container-scroller" >
@include("admin.dash")

<div class="container-fluid page-body-wrapper">
 <div class="container" align="center" style="padding:100px">
  @if(session()->has('message'))
 <div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert">
     
   </button>
   {{session()->get('message')}}
 </div>
 @endif
 <form action="{{url('editmenu',$data->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div  style="padding:15px;">
    <label for="">Title</label>
    <input type="text" style="color:black" name="title" value="{{$data->Title}}"></div>
   <div style="padding:15px;"> <label for="">Price</label>
 <input type="number"style="color:black"  name="price" value="{{$data->Price}}"></div>
 <div style="padding:15px;"> <label for="">Description</label>
 <input type="text"style="color:black"  name="des" value="{{$data->Description}}"></div>
 <div  style="padding:15px;">
 <label for="">Old image</label>
  <img height="150" width="150" src="foodimage/{{$data->image}}" alt="">
  </div>
  <div style="padding:15px;"><label for="">Change image</label>

<input type="file" name="file"></div>
<div style="padding:15px;"> 
<input type="submit" class="btn btn-primary"></div>
  </div>
 </form>

 </div>
 
 
</div>
</div>
@include("admin.script")

  </body>
</html>