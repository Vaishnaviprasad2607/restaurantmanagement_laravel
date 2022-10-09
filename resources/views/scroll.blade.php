<html>
    <head>
        <style>
body { font-family: 'helvetica'; }
#contain {
    border:30px;
  height: 300px;
  overflow-y: scroll;
}
#table_scroll {
  width: 100%;
  margin-top: 100px;
  margin-bottom: 100px;
  border-collapse: collapse;
}
#table_scroll thead th {
  padding: 10px;
  background-color: #ea922c;
  color: #fff;
}
#table_scroll tbody td {
  padding: 10px;
  background-color: #ed3a86;
  color: #fff;
}
        </style>
    </head>
    <body>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<div id="contain">
<table class="table table-bordered" style="border:20px solid white;color:black;font-style:arial">

             <tbody style="background-color:#fd9d94;text-align:center;font-style:arial">
               @foreach ($news as $item)
               <tr>
                
                 <td>{{$item->description}}</td>
               </tr>
               @endforeach
             </tbody>
            </table>
<script>
    var my_time;
$(document).ready(function() {
  pageScroll();
  $("#contain").mouseover(function() {
    clearTimeout(my_time);
  }).mouseout(function() {
    pageScroll();
  });
});

function pageScroll() {  
	var objDiv = document.getElementById("contain");
  objDiv.scrollTop = objDiv.scrollTop + 1;  
  if (objDiv.scrollTop == (objDiv.scrollHeight - 100)) {
    objDiv.scrollTop = 0;
  }
  my_time = setTimeout('pageScroll()', 25);
}
</script>
    </body>
</html>