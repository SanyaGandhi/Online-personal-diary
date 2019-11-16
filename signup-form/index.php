<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>SignUp</title>
  </head>
  <body>

<form action="signup.php" method = "post">

<div class="container sign">

<h1>Sign Up</h1>

<div class="txtbx">
  <span data-placeholder="Username"></span>
  <input type="text" name="username" required>
</div>

<div class="txtbx">
  <span data-placeholder="Email"></span>
  <input type="text" name="email" required>
</div>
<div class="txtbx">
  <span data-placeholder="Phone Number"></span>
  <input type="text" name="PhoneNumber" required>
</div>


<div class="txtbx">
  <span data-placeholder="Description"></span>
  <input type="text" name="Description" required>
</div>


<div class="txtbx">
  <span data-placeholder="Password"></span>
  <input type="password" name="password_1" required>
</div>


<div class="txtbx">
  <span data-placeholder="Repeat Password"></span>
  <input type="password" name="password_2" required>
</div>


<div class="terms">
<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p><br>
</div>

<div class="btns">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="signupbtn">Submit</button>
</div>

</div>


</form>

</body>
</html>