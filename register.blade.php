
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
@if ($errors->any())
<div class="alert alert-warning">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

  <h2>Register</h2>
  <form   action = "{{ url('/store')}}"  method="post">
   @csrf

  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" name="name" value="{{ old('name')}}" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail">Email</label>
    <input type="email"   class="form-control"  name="email" value=" {{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword">Password</label>
    <input type="password"   class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
 

  <div class="form-group">
    <label for="exampleInputPassword">Address</label>
    <input type="text"   class="form-control" name="address" value=" {{ old('address') }}" id="exampleInputPassword1" placeholder="Address">
  </div> 


  <div class="form-group">
    <label for="exampleInputPassword">Gender</label>
    <br>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
  </div> 


  
   <div class="form-group">
    <label for="exampleInputPassword">LinkedIn Url</label>
    <input type="url"   class="form-control" name="linkedIn" value="{{ old('linkedIn') }}" id="exampleInputPassword1" placeholder="LinkedIn Url">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword">Image</label>
    <input type="file"   class="form-control" name="image" value="{{ old('image') }}" id="exampleInputPassword1">
  </div>


  
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>

</body>
</html>





