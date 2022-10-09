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
<div class="container mt-5">
   
    <div class="row">
     <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4><li><ul> Slider    </ul>    
                  <ul>  <a href="{{url('add-slider')}}" class="btn btn-primary float-right">Add Slider</a></ul>
                    </li>
                </h4>
            </div>
            <div class="card-body">
             <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Heading</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($slides as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->heading}}</td>
                  <td>
                    <img src="{{asset('uploads/slider/'.$item->image)}}"  style="width:200px;height:100px" >
                  </td>
                  <td>{{$item->status}}</td>
                     @if ($item->status == '1')
                            hidden
                     @else
                            visible
                     @endif
                  <td><a href="{{url('edit-slider/'.$item->id)}}"class="btn btn-success btn-sm">Edit</a>
                </td>
                </tr>
                @endforeach
              </tbody>
             </table>
            </div>
        </div>
     </div>
    </div>
</div>
@include("admin.script")

  </body>
</html> 