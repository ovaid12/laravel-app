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
    <h1 class="float-left">Role</h1>
    @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('Fail'))
        <div class="alert alert-success">{{Session::get('Fail')}}</div>
    @endif

    </div>
</div>

<hr>


<div class="card">
   

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      
      <td>
        
          
          <a class="btn btn-sm btn-danger" href="{{'delete/'.$user->id}}">DELETE</a>

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