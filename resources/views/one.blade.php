<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    .container{
        
        
        width: 60%;
        margin-top:30px;


      }
      </style>
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-12">
    <h1 class="float-left">User Data</h1>
    
  </div>

<hr>


<div class="card">
   

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">User_Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->user_role}}</td>
      <td><a href="/dashboard" class="btn btn-sm btn-primary">CLOSE</a></td>
    </tr>

  </tbody>  

</table>
                
</div>
    </div>
    </div>
               
            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>