<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Custom Authentication</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
<h3>Edit User</h3>
<hr>
<form action="{{'/user-updated/'. $users->id}}" method="POST">
@csrf
@method("PUT")
<div class="form-group">
<label for="name">Full Name</label>
<input type="text" class="form-control" name="name" placeholder="Enetr your Full Name" value="{{ $users->name}}">
<span class="text-danger">@error('name') {{$message}}@enderror</span>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" name="email" placeholder="Enetr your Email" value="{{$users->email}}">
<span class="text-danger">@error('email') {{$message}}@enderror</span>
</div>
<div class="form-group">

<label for="user_role">Role</label>
<select name="user_role" id="user_role" class="form-control">
    <option value="">{{$users->user_role}}</option>
    
    @foreach($data as $user)
           <option>{{$user->name}}</option>
    @endforeach

</select>

</div>

<div class="form-group">
<button class="btn btn-block btn-primary" type="submit" style="margin:20px 0px;">Submit</button></div>
<a href="/dashboard" class="btn btn-md btn-danger">Cancel</a>
</div>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>
