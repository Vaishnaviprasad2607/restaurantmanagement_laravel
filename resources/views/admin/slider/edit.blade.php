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
        @if(session('status'))
        <h5 class="alert alert-success">{{session('status')}}</h5>
        @endif
        <div class="card">
            <div class="card-header">
                <h4><li><ul>Edit Slider </ul>    
                  <ul>  <a href="{{url('slider')}}" class="btn btn-danger btn-sm float-right">BACK</a></ul>
                    </li>
                </h4>
            </div>
            <div class="card-body">
<form action="{{url('update-slider/'.$slide->id)}}"  method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Heading</label>
        <input type="text" style="color:white"name="heading" value="{{$slide->heading}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Description</label>
      <textarea name="description"style="color:white" id="" cols="30" rows="10" class="form-control">$slide->description</textarea>
  </div>
  <div class="form-group">
    <label for="">Link</label>
    <input type="text"style="color:white" name="link"  value="{{$slide->link}}"class="form-control">
</div>
<div class="form-group">
    <label for="">Link-name</label>
    <input type="text"style="color:white" name="link_name"value="{{$slide->link_name}}" class="form-control">
</div>
<div class="form-group">
    <label for="">Slider image upload</label>
    <input type="file" name="image" class="form-control">
    <img src="{{asset('uploads/slider/'.$slide->image)}}"  width="300px" >
</div>
<div class="form-group">
    <label for="">Status</label>
    <input type="checkbox" name="status" {{$slide->status =='1' ? 'checked':' '}}>  0=visible,1=hidden
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