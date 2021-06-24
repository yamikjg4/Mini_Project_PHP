<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  
</script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">  
</script>
    <title>Login</title>
</head>
<body>
    <div class="login">
        <img src="https://cdn3.iconfinder.com/data/icons/login-5/512/LOGIN_6-512.png" class="people">
        <h1>Login Here</h1>
        <form action="#" onsubmit="return validation()" >
        <p>Email Id</p>
        <input type="email" class="form-control" placeholder="Enter Email" required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" />
        <p>Password</p>
        <input type="password"  placeholder="Enter Password" required maxlength="15" minlength="8">
        <a href="Forgot.php">Forget Password</a>   
        <input type="Submit" value="Login" class="form-control" />
        <p id="or">OR</p>
        <a href="singup.php">
        <input type="button" value="SingUp" class="form-control"/>
        </a>
    </form> 
    </div>
  
</body>
</html>