<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="CSS/stylelogin.css">
<body>

    <div class="login-container">
        <div class="login-box">
            <h2>Login Form</h2>
            <form>
                <div class="input-group">
                    <label> Gmail </label>
                    <input type="text" placeholder="Enter gmail" name="gmail" require>
                </div>
                <div class="input-group">
                    <label> Password </label>
                    <input type="password"placeholder="Enter Password" name="psw" required>
                </div>
                    <label> <input type="checkbox" Cheked="cheked" name="remember"> Remember Me </label>
                    <br>
                    <button type="submit" class="btn-login"> Login</button> 
                    <br>
                        <a href="index.php" class="cancelbtn">Cancel</a>    
                        <br>
                        <span class="psw"> Forgot <a href="#">password?</a> </span>
            </form> 
        </div>
    </div>
</body>
</html>