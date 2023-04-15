<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>custom login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
        <h4>your welcome</h4>
                <hr>
        
           <table class="table">
            <thead>
                <th>name</th>
                <th>email</th>
                <th>action</th>
            </thead>
            <tbody>
                <td>{{$data -> name}}</td>
                <td>{{$data -> email}}</td>
                <td><a href="logout">log out</a></td>
            </tbody>
           </table>
        </div>
    </div>
</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>