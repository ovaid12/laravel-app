<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        .flexbutton{
            display:flex;
            justify-content:space-between;
            
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
            <h3>Register Here</h3>
            <hr>
            <form action="register-user" method="post">
                @if(Session::has('key'))
                    <div class="alert alert-success">{{Session::get('key')}}</div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('Fail')}}</div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enetr your Full Name" value="">
                    <span class="text-danger">@error('name') {{$message}}@enderror</span>
                
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enetr your Email" value="">
                    <span class="text-danger">@error('email') {{$message}}@enderror</span>
                
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enetr your password" value="">
                    <span class="text-danger">@error('password') {{$message}}@enderror</span>
                
                </div>

                <div class="form-group ">
                     <label for="user_role">Role</label>
                    
                           <select name="user_role" class="form-control" >
                                <option>--Select a role--</option>
                                
                                
                                @foreach($data as $user)
                                

                                <option value="{{$user->name}}">{{$user->name}}</option>
                                
                                @endforeach
                                
                            </select> 
                            
                        
                 </div>

                 


                
        <div class="flex-button">

            <button class="btn btn-block btn-primary" type="submit" style="margin-top:20px;">Register</button>
            <a href="login" class="btn btn-md btn-success" style="margin-top:20px;">Login</a>
        
        </div>

            <div class="float-right" style="margin-top:20px">
                            
                <a href="/createnewrole" class="btn btn-md btn-success">Create New Role</a>

            </div>   
            
            
                
        </div>
    </div>
               
            </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>