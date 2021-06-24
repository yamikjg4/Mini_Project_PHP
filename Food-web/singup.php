<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  
</script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">  
</script>
<link rel="stylesheet" type="text/css" href="style.css">

    <title>SingUp</title>
</head>
<body>
    <div class="singup">
    <img src="https://cdn3.iconfinder.com/data/icons/login-5/512/LOGIN_6-512.png" class="people">
    <h1>Create New Account</h1>
    <form action="#" onsubmit="return validation()" >
    <p>Full Name</p>
    <input type="text"  placeholder="Enter Name" maxlength="150" required/>
    <p>Phone No</p>
    <input type="tel" id="phone" placeholder="1234-45-6789" name="phone" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{4}">
    <p>Email Id</p>
    <input type="email"  class="form-control" placeholder="Enter Email" required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" />
    <p>Password</p>
    <input type="password"  placeholder="Enter Password" required minlength="8" maxlength="15" />
    <br>
    <a href="login.php">Already Account Login</a>
    <input type="Submit" value="SingUp" class="form-control" />
    </form>
</div>
</body>
</html>