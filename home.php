

<!DOCTYPE html>
<html lang="en">
<head>
<title>My Diary</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  background-image: url("diary3.jpg");
  background-size: 100% 90%;
  background-repeat:  no-repeat;
  padding-top: 15%;
  padding-right:15% 
  padding-left:15%;
  padding-bottom: 20%;
  text-align: center;
  
  color: black;
}
.header button{
  background-color: #cc0099;
  border: none;
  border-radius: 20px;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 20px 50px;
  cursor: pointer;
}

/* Increase the font size of the heading */
.header h1 {
  padding-top: 10%;
  font-size: 60px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.left {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
 
 
}
.center{
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
 
 
}
.right {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
 
 
}
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}
.whywrite{
  align-self: center;
  text-align: center;
 -ms-flex: 100%; /* IE10 */
  flex: 100%;
  background-color: #ddd;
  padding: 20px;
  padding-bottom: 30px;

}
.whywrite div.reason1 {
  border-spacing: 20px;
 background-color: #ffffff;
 border-radius: 20%;
 padding: 20px;
 text-align: center; 
 -ms-flex: 30%; /* IE10 */
  flex: 30%;

}
.whywrite div.reason2 {

 background-color: #ffffff;
 border-radius: 20px;
 padding: 20px;
 text-align: center; 
 -ms-flex: 30%; /* IE10 */
  flex: 30%;

}.whywrite div.reason3 {
  border-spacing: 20px;
 background-color: #ffffff;
 border-radius: 20%;
 padding: 20px;
 text-align: center; 
 -ms-flex: 30%; /* IE10 */
  flex: 30%;

}
.features{
     
    padding: 5%;
}
.features img{
     text-align: left;
}
/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: #F4D9E2;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #F4D9E2;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
/*@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}*/

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
/*@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}*/
</style>
</head>
<body>

<div class="navbar">
  <a href="signup-form\signup.php" class="right">Sign up</a>
   <a href="login-form\login.php"class="right">Login</a>
</div>
<div class="header" >
  <h1>Welcome to your personalized web diary!!</h1>
  <button>Create account</button>
</div>
<!-- <div style="background-color: black;" heigth="50">
  hello
</div> -->
<section class="whywrite">
  <h1>Why should you write?</h1>
  <div class="row">  
  <div class="reason1">
    <div >
      <img src="reason1.png" width="100" height="100" style="border-radius: 50%";>
    </div>
    <div>
      To record and recall events and issues
  </div>
    </div>
    
   <div class="reason2">
     <div >
      <img src="reason2.jpg" width="100" height="100" style="border-radius: 50%";>
    </div>
    To honestly express your own thoughts and feelings
  </div>
   <div class="reason3">
     <div >
      <img src="reason3.png" width="100" height="100" style="border-radius: 50%";>
    </div>
    To get therapeutic mental release
  </div>
  </div>

  <div class="row">  
  <div class="reason1">
    <div >
      <img src="reason4.png" width="100" height="100" style="border-radius: 50%";>
    </div>
    <div>
      To have better self-reflection
  </div>
    </div>
    
   <div class="reason2">
     <div >
      <img src="reason5.png" width="100" height="100" style="border-radius: 50%;">
    </div>
    To gain a new perspective
  </div>
   <div class="reason3">
     <div >
      <img src="reason6.png" width="100" height="100" style="border-radius: 50%;">
    </div>
    To increase vocabulary and enhance writing skills
  </div>
  </div>
 
</section>

<section class="whyhere">
   <h1 style="text-align: center;">Why write here?</h1>
  <div class="row">
     <div class="here1" style="padding: 5%">
      <img src="reason3.png" style="float: left; border-radius: 50%;"  width="100" height="100">
    </div> 
    <div style="float: right; padding-left: 40%; padding-top:5%">
      <p style="font-size: 20px;">Hello</p>
    </div>
  </div>
  
</section>
<section class="features">
  <h1 style="text-align: center; font-size: 45px">Features</h1>
  <div class="row">
    <div class="left">
      <div>
        <img src="diary2.jpg" width="400" height="333">
      </div>
      <div>
        write description
      </div>
    </div>
    <div class="center">
      <img src="diary2.jpg" width="400" height="333">
    </div>
    <div class="right">
      <img src="diary2.jpg" width="400" height="333">
    </div>
   
  </div>
 
</section>



<div class="row1">
 <!--  <div class="side">
    <h1 style="text-align: center;">Why write?</h1>
    <h5>Photo of me:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>More Text</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
  </div> -->
  <!-- <div class="main">
    <h2>TITLE HEADING</h2>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div> -->
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>
