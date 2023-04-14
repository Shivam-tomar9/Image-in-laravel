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

  <form action="{{url('/')}}/crud-save" method='post' enctype="multipart/form-data">
    @csrf
    <div class="col-md-4">
    <div class="card bg-primary">

  <div class="form-group">
  <h2>Registeration form</h2>
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name"  required>
    </div>
    
    <div class="form-group">
      <label for="email">Phone No:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter phone no" name="phoneno" required>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="" name="image" required>
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
  </form>
</div>


</body>
</html>
