<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <meta charset="utf-8">
    <title>SignUp</title>
  </head>
  <body>

<form action="/action_page.php">

<div class="container">

<h1>Sign Up</h1>

<label for="Username"><b>Username</b></label>
<input type="text"placeholder="Username"name="Username" required><br><br>

<label for="Email"><b>Email</b></label>
<input type="text"placeholder="Email"name="Email" required><br>

<label for="PhoneNumber"><b>Phone Number</b></label>
<input type="text"placeholder="PhoneNumber"name="PhoneNumber"><br>

<label for="Description"><b>Description</b></label>
<input type="textarea"placeholder="Something about yourself...."name="Description"><br>

<label for="Password"><b>Password</b></label>
<input type="text"placeholder="Password"name="Password" required><br>

<label for="Password"><b>Repeat Password</b></label>
<input type="text"placeholder="Password"name="Repeat-Password" required><br>

<label><input type="checkbox"  name="public" style="margin-bottom:15px"> Public Account </label>

<label><input type="checkbox"  name="private" style="margin-bottom:15px"> Private Account </label>

<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>


<div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>


</form>

</body>
</html>

