

<!DOCTYPE html>
<html lang="en">
<head>
<title>My Diary</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
  background-size: 100% 100%;
  background-repeat:  no-repeat;
  padding-top: 15%;
  padding-right:15% 
  padding-left:15%;
  padding-bottom: 9%;
  text-align: center;
  
  color: black;
}
.header button{
  background-color: #cc0099;
  border: none;
  border-radius: 20px;
  color: white;
  padding: 1%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 120%;
  margin: 20px 50px;
  cursor: pointer;
}

/* Increase the font size of the heading */
.header h1 {
  padding-top: 7%;
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  
  overflow: hidden;
  background-color: #cc0099;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  font-size: 120%;
  padding: 20px ;
  /* padding bottom: 50px; */
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
 /* -ms-flex: 100%; /* IE10 */
  /* flex: 100%; */ 
  height:100%;
  background-color: #cc0099;
  padding: 20px;
  padding-bottom: 50px;

}
.whywrite h1 {
  
  font-size: 30px;
}
.whywrite div.reason1 {
  border-spacing: 20px;
 background-color: #ffffff;
 /* border-radius: 20%; */
 padding: 50px;
 text-align: center; 
 -ms-flex: 30%; /* IE10 */
  flex: 30%;

}
.whywrite div.reason2 {

 background-color: #ffffff;
 /* border-radius: 20px; */
 padding: 50px;
 text-align: center; 
 -ms-flex: 30%; /* IE10 */
  flex: 30%;

}.whywrite div.reason3 {
  border-spacing: 20px;
 background-color: #ffffff;
 /* border-radius: 20%; */
 padding: 50px;
 text-align: center; 
 -ms-flex: 30%; /* IE10 */
  flex: 30%;

}
.whyhere h1 {
  
  font-size: 30px;
}
.whyhere div.here1{
  margin-bottom: 2%;
  background-color: #F5DAE3;
}
.whyhere div.here2{
  background-color: brown;
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
  background: #cc0099;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
/*@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}*/

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="navbar">
  <a href="signup-form\index.php" class="right">Sign up</a>
   <a href="login-form\index.php"class="right">Login</a>
</div>
<div class="header" >
  <h1>Welcome to your personalized web diary!!</h1>
  <button onclick="window.location.href = 'signup-form/index.php';">Create account</button>
  <!-- <a href="signup-form\signup.php" class="button">Create Account</a> -->
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
      <h3>To record and recall events and issues</h3>
  </div>
    </div>
    
   <div class="reason2">
     <div >
      <img src="reason2.jpg" width="100" height="100" style="border-radius: 50%";>
    </div>
    <h3> honestly express your own thoughts and feelings</h3>  </div>
   <div class="reason3">
     <div >
      <img src="reason3.png" width="100" height="100" style="border-radius: 50%";>
    </div>
    <h3>To get therapeutic mental release</h3>
  </div>
  </div>

  <div class="row">  
  <div class="reason1">
    <div >
      <img src="reason4.png" width="100" height="100" style="border-radius: 50%";>
    </div>
    <div>
      <h3>To have better self-reflection</h3>
  </div>
    </div>
    
   <div class="reason2">
     <div >
      <img src="reason5.png" width="100" height="100" style="border-radius: 50%;">
    </div>
    <h3>To gain a new perspective</h3>
  </div>
   <div class="reason3">
     <div >
      <img src="reason6.png" width="100" height="100" style="border-radius: 50%;">
    </div>
    <h3>To increase vocabulary and enhance writing skills</h3>
  </div>
  </div>
 
</section>

<section class="whyhere">
   <h1 style="text-align: center;">Why write here?</h1>
  <div class="row here1">
     <div style="padding: 3%;padding-left: 7%;">
      <img src="reason3.png" style=" border-radius: 25%;">
    </div> 
    <div style="padding-left:50%;padding-top: 7%;" >
      <p style="font-size: 1em;">Meow Meow</p>
    </div>
  </div>
  <div class="row here1">
  
   <div style="padding-left:3%;padding-left: 7%; padding-top: 7%;" >
     <p style="font-size: 1em;">Meow Meow</p>
   </div>
   <div style="padding: 3%; padding-left:55%;">
    <img src="reason3.png" style=" border-radius: 25%;">
  </div> 
 </div>
 <div class="row here1">
  <div style="padding: 3%;padding-left: 7%;">
   <img src="reason3.png" style=" border-radius: 25%;">
 </div> 
 <div style="padding-left:50%;padding-top: 7%;" >
   <p style="font-size: 1em;">Meow Meow</p>
 </div>
</div>
<div class="row here1">
  
  <div style="padding-left:3%;padding-left: 7%; padding-top: 7%;" >
    <p style="font-size: 1em;">Meow Meow</p>
  </div>
  <div style="padding: 3%; padding-left:55%;">
   <img src="reason3.png" style=" border-radius: 25%;">
 </div> 
</div>
 
  
</section>






<div class="footer">
  <h2>We are a hardworking team of Three</h2>
  <h3> Divyam <i class="fa fa-book"></i> Sanya <i class="fa fa-book"></i>  Abhishek  </h3>
</div>

</body>
</html>
