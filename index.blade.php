<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Student Information</h2>
  <a href="{{url('/')}}/crud-add"><button type="button" class="btn btn-success">Add+</button></a>
  <p></p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Phone No</th>
        <th>Email</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($input as $data)
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->phoneno}}</td>
        <td>{{$data->email}}</td>
        <td><img src="{{ asset('/images/'.$data->image)}}" width="70px" height="30px" alt="Image">
        <td><a href="{{url('/')}}/crud-edit/{{$data->id}}"><button type="button" class="btn btn-primary">Edit</button></a>
        <a href="{{url('/')}}/crud-delete/{{$data->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
