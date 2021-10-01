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
            <h3>Create New Role</h3>
            <hr>
            <form action="registeredrole" method="POST">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('Fail'))
                    <div class="alert alert-danger">{{Session::get('Fail')}}</div>
                @endif
                @csrf
                <label for="name">Role Name</label>
                <input type="text" class="form-control" name="name" value="" id="name">
                <span class="text-danger">@error('name') {{$message}}@enderror</span>

                <div class="form-group">
                    <button class="btn btn-md btn-primary"style="margin-top:20px;">Submit</button>

                </div>
                <div class="form-group">

                   <a href="role" class="btn btn-md btn-success" style="margin-top:20px;">View Role Created</a>
                </div>


            </form>
        </div>
    </div>
</div>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>