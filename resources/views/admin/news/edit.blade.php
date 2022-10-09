<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
  @include("admin.css")
 
 </head>
 <body>

<div class="container-scroller" >
@include("admin.dash")
<div class="container mt-5">
   
    <div class="row">
     <div class="col-md-12">
     @if(session()->has('message'))
 <div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert">
     
   </button>
   {{session()->get('message')}}
 </div>
 @endif
        <div class="card">
            <div class="card-header">
                <h4><li><ul> Edit Announcements </ul>    
                  <ul>  <a href="{{url('news')}}" class="btn btn-danger float-right">Back</a></ul>
                    </li>
                </h4>
            </div>
            <div class="card-body">
            <form action="{{url('update-news/'.$news->id)}}"  method="POST" >
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Description</label>
        <input type="text" style="color:white"name="description"value="{{$news->description}}" class="form-control">
    </div>
    <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
  
</div>
</form>
            </div>
        </div>
     </div>
    </div>
</div>
@include("admin.script")

  </body>
</html> 