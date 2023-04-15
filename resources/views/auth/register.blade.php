<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>custom registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>registration</h4>
                <hr>
                <form action="{{ route('register-user')}}" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-successs">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif

                    @csrf
                   <div class="form-group" style="margin-top:10px;">
                      <label for="name">full name</label>
                      <input type="text" class="form-control" placeholder="enter full name" name="name" value="{{old('name')}}">
                      <span class="text-danger">@error ('name') {{$message}}@enderror</span>
                   </div>

                   <div class="form-group" style="margin-top:10px;">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" placeholder="enter email" name="email" value="{{old('email')}}">
                      <span class="text-danger">@error('email') {{$message}}@enderror</span>
                   </div>

                   <div class="form-group" style="margin-top:10px;">
                      <label for="location">location</label>
                      <input type="text" class="form-control" placeholder="enter location" name="location" value="{{old('location')}}">
                      <span class="text-danger">@error('location') {{$message}}@enderror</span>
                   </div>

                   <div class="form-group" style="margin-top:10px;">
                      <label for="location" >password</label>
                      <input type="password" class="form-control" placeholder="enter password" name="password" value="">
                      <span class="text-danger">@error('password') {{$message}}@enderror</span>
                   </div>

                   <div class="form-group">
                      <button  class="btn btn-block btn-primary" type="submit" style="margin-top:10px;">Register </button>
                   </div>
                   <br>
                   <a href="login">arledy registered !! please login here.</a>
                </form>

            </div>
        </div>
    
    </div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>