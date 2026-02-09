<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
<body>

<h2>Login Form</h2>

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="img/avatar1.jpg" alt="Avatar" class="avatar">
  </div>

<div class="container">
    <label for="uname"><b> User Name</b> </label>
    <input type="text" placeholder="Enter User name" name="uname" require>

    <label for="pws"><b>Password</b></label>
    <input type="password"placeholder="Enter Password" name="psw" required>

    <button type="submit" class="loginbtn"> login</button>

    <label>
        <input type="checkbox" Cheked="cheked" name="remember"> Remember Me
    </label>
    
</div>

    <div class="container" style="background-color:#f1f1f1">
        
        <a href="index.php" class="cancelbtn">Cancel</a>
        <span class="psw">    
        Forgot <a href="#">password?</a>
        </span>
    </div>

</body>
</html>