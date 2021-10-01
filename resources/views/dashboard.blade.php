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
     <h1 class="float-left">Users</h1>
     <a href="registration" class="btn btn-md btn-success">Create a New User</a>
     @if(Session::has('success'))
       <div class="alert alert-success">{{Session::get('success')}}</div>
     @endif

    </div>
 </div>

 <nav class="navbar navbar-dark bg-dark" style="color:White; margin-top:20px;font-size:30px;border-radius:10px;">
  
     
    {{$data->name}}
    <a class="btn btn-md btn-success" href="login">
     
     logout
  </a>
    </nav>
 
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
      @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->user_role}}</td>
      <td>
        <a href="{{'show/' .$user->id}}" class="btn btn-sm btn-secondary">SHOW</a>
          <a href="{{'edit-user/'.$user->id}}" class="btn btn-sm btn-primary">EDIT</a>
          <a class="btn btn-sm btn-danger" href="{{'destroy/'.$user->id}}">DELETE</a>

          <!-- <button type="button" class="btn btn-sm btn-danger"><a href="{{'delete/'.$user->id}}">Delete</a></button> -->
          
      </td>
    </tr>
    @endforeach

</table>
                
        </div>


</div>
               
            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>