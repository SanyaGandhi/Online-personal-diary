<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    
    <meta charset="utf-8">
    <title>SignUp</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

<form class="signup-form" action="signup.php" method = "post">

<h1>Sign Up</h1>

<div class="txtbx">
<input type="text" name="username" required>
<span data-placeholder="Username"></span>

</div>

<div class="txtbx">
<input type="text" name="email" required>  
<span data-placeholder="Email"></span>
  
</div>


<div class="txtbx">
<input type="text" name="PhoneNumber" required>
<span data-placeholder="Phone Number"></span>
</div>


<div class="txtbx">
<input type="text" name="Description" required>
  <span data-placeholder="Description"></span>
  
</div>


<div class="txtbx">
<input type="password" name="password_1" required>  
<span data-placeholder="Password"></span>
  
</div>


<div class="txtbx">
<input type="password" name="password_2" required> 
<span data-placeholder="Repeat Password"></span>
 
</div>

<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p><br>


<input type="submit" class="signupbtn" name="signupbtn" value="Sign Up">

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

</body>
</html>