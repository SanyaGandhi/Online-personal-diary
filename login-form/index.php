<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
<!-- from here -->
<form class="login-form" action="login.php" method="post"> 
<h1>Login</h1>
<div class="txtbx">
<input type="text" name="user_name" required>
  <span data-placeholder="Username"></span>
  
</div>

<div class="txtbx">
<input type="password" name="user_pass" required>
  <span data-placeholder="Password"></span>
   
</div>


<input type="submit" class="logbtn" value="Login">


<div class="bottomtxt">
<br>
  Don't have an account?
  <a href="..\signup-form\signup.php">SignUp</a>
  </div>
</form>

<script type="text/javascript">

$(".txtbx input").on("focus", function (){
  $(this).addClass("focus");
});

$(".txtbx input").on("blur", function (){
  if($(this).val() == "")
  $(this).removeClass("focus");
});

</script>

<!-- till here -->
  </body>
</html>