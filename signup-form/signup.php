<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    
    <meta charset="utf-8">
    <title>SignUp</title>
  </head>
  <body>

<form class="signup-form" action="/action_page.php">

<div class="container">

<h1>Sign Up</h1>


<div class="txtbx">
  <span data-placeholder="Name"></span>
  <input type="text" name="name" required>
  
  </div>

<div class="txtbx">
  <span data-placeholder="Username"></span>
  <input type="text" name="user_name" required>
  
  </div>

  <div class="txtbx">
  <span data-placeholder="Email"></span>
  <input type="text" name="email" required>
  </div>
 
  
  <div class="txtbx">
  <span data-placeholder="Mobile"></span>
  <input type="text" name="mobile_number" required>
  </div>
 
  <div class="txtbx">
  <span data-placeholder="Password"></span>
  <input type="password" name="pwd" required>
  </div>
 
  <div class="txtbx">
  <span data-placeholder="Repeat Password"></span>
  <input type="password" name="rep_pwd" required>
  </div>
 
<!-- <label class="chkbx"><input type="checkbox"  name="public" style="margin-bottom:15px"> Public Account </label>

<label class="chkbx"><input type="checkbox"  name="private" style="margin-bottom:15px"> Private Account </label> -->
<!-- 
<div class="row">
    <div class="col-sm-6" style="background-color:lavender;">Public Account</div>
    <div class="col-sm-6" style="background-color:lavenderblush;">Private Account</div>
  </div> -->

  <div class="row">
  <div class="column">
    <h3>Public Account</h3>
  </div>
  <div class="column">
    <h3>Private  Account</h3>
  </div>
</div>

<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>


<div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>


</form>

</body>
</html>

