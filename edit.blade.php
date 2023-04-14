<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <form action="{{url('/')}}/crud-update" method='post' enctype="multipart/form-data">
    @csrf
    <input type="hidden" class="form-control"  placeholder="" name="id" value="{{$input->id}}">
    <div class="col-md-4">
    <div class="card bg-success">

  <div class="form-group">
  <h2>Update form</h2>
   
      <label for="email">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter name" name="name" value="{{$input->name}}">
    </div>
    <div class="form-group">
      <label for="email">Phone No:</label>
      <input type="text" class="form-control"  placeholder="Enter phone no" name="phoneno" value="{{$input->phoneno}}">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control"  placeholder="Enter email" name="email" value="{{$input->email}}">
    </div>


    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="password" value="{{$input->password}}">
    </div>
   

    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="" name="image" >
    
    </div>

   
    <button type="submit" class="btn btn-success">Update</button>
  </form>
</div>
</div>
</div>


</body>
</html>
