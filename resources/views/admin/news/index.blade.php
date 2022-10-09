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
                <h4><li><ul> Announcements </ul>    
                  <ul>  <a href="{{url('add-news')}}" class="btn btn-primary float-right">Add Announcement</a></ul>
                    </li>
                </h4>
            </div>
            <div class="card-body">
            <table class="table table-bordered">
             <thead>
               <tr>
                 <th>Id</th>
                 <th>Announcement</th>
                 <th>Edit</th>
                 <th>Delete</th>
               </tr>
             </thead>
             <tbody>
               @foreach ($news as $item)
               <tr>
                 <td>{{$item->id}}</td>
                 <td>{{$item->description}}</td>
                 <td><a href="{{url('edit-news/'.$item->id)}}"class="btn btn-success btn-sm">Edit</a>
               </td>
               <td><a href="{{url('delete-news/'.$item->id)}}"class="btn btn-success btn-sm">Delete</a>
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