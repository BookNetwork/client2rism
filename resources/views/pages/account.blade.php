<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Aguafina Script' rel='stylesheet'>
<link rel="stylesheet" href="css/login.css">
</head>
<html>
    <body>
    <div class="col-md-3 loginBackground">
        <center>
            <h1 style=" font-family:">Welcome Back</h1>
            <h1 style=" font-family:Sofia">Sign in</h1>
            <img src="../images/user.png" class="img" alt="Cinque Terre" height="110" width="110">
            <div>     
            <form action="/LoginAuth" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   
                <div class="form-group">
                    <label for="email" style=" font-family:Abel">Email address:</label>
                    <input type="text" class="form-control" name="email">
                    @if ($errors->has('email'))
                    <span class="help-blocks">
                        <strong style="color: red;">{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="pwd" style=" font-family:Abel">Password:</label>
                    <input type="password" class="form-control" name="pwd">
                        @if ($errors->has('pwd'))
                        <span class="help-blocks">
                            <strong style="color: red;">{{ $errors->first('pwd') }}</strong>
                        </span>
                        @endif
                </div>
                
            <a href="forgotPassword"> Forgot Password </a><br/>
                <button type="submit" class="btn btn-primary col-md-12">Submit</button>
            </form><br/>
            @if ($mess = Session::get('mailSuccess'))
                    <span class="alert alert-success col-md-12">
                      <strong >{{ $mess }}</strong>
                    </span>
            @endif

            @if ($mess = Session::get('LoginFaild'))
                    <span class="alert alert-danger col-md-12">
                      <strong >{{ $mess }}</strong>
                    </span>
            @endif
            </div>
        </center>
    </div>
</body>

</html>










