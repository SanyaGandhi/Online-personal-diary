<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>Login/SignUp</title>
  </head>
  <body>

<form class="login-form" action="login.php" method="post">
<h1>Login</h1>
<div class="txtbx">
  <span data-placeholder="Username"></span>
  <input type="text" name="user_name" required>

  </div>


  <div class="txtbx">
  <span data-placeholder="Password"></span>
    <input type="password" name="user_pass" required>

  </div>

<input type="submit" class="logbtn" value="Login">

<div class="bottomtxt">
<br>
  Don't have an account?
  <a href="..\signup-form\signup.php">SignUp</a>
  </div>
</form>

  </body>
</html>