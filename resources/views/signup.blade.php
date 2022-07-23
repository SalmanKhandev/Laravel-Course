<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

<br><br><br><br><br><br>
      <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">

                @if($errors->any())
                
                 <ul style="list-style: none;">
                    @foreach($errors->all() as $error)
                    <li style="color:red; font-weight:bold;">{{$error}}</li>
                    @endforeach
                 </ul>
      
                @endif


                <h2>Signup Now!</h2><br>
                <form method="POST" action="{{url('register')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email">Full Name:</label>
                        <input type="text" required placeholder="Full Name" class="form-control" id="email" name="fullname">
                      </div>
                    <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" required placeholder="Email Address" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Profile Picture:</label>
                        <input type="file" required  class="form-control"  name="picture">
                      </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" required placeholder="Password" class="form-control" id="pwd" name="password">
                    </div>
                   
                    <button type="submit" class="btn btn-primary btn-block">Singup Now</button>
                  </form>
            </div>

        </div>

      </div>
    
</body>
</html>