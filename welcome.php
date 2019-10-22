

<!DOCTYPE html>
<html lang="en">
<head>
<title>My Diary</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script type="text/javascript">
  
          function view_text () {
  
              // Find html elements.
  
              var textArea = document.getElementById('my_text');
  
              var div = document.getElementById('view_text');

               
  
              // Put the text in a variable so we can manipulate it.
  
              var text = textArea.value;
  
               
  
              // Make sure html and php tags are unusable by disabling < and >.
  
              text = text.replace(/\</gi, "<");
  
              text = text.replace(/\>/gi, ">");
  
               
  
              // Exchange newlines for <br />
  
              text = text.replace(/\n/gi, "<br />");
  
               
  
              // Basic BBCodes.
  
              text = text.replace(/\[b\]/gi, "<b>");
  
              text = text.replace(/\[\/b\]/gi, "</b>");
  
               
  
              text = text.replace(/\[i\]/gi, "<i>");
  
              text = text.replace(/\[\/i\]/gi, "</i>");
  
               
  
              text = text.replace(/\[u\]/gi, "<u>");
  
              text = text.replace(/\[\/u\]/gi, "</u>");
  
               
  
              // Print the text in the div made for it.
  
              div.innerHTML = text;
  
          }
  
           
  
          function mod_selection (val1,val2) {
  
              // Get the text area
  
              var textArea = document.getElementById('my_text');
  
               
  
              // IE specific code.
  
              if( -1 != navigator.userAgent.indexOf ("MSIE") ) {
  
                   
  
                  var range = document.selection.createRange();
  
                  var stored_range = range.duplicate();
  
                   
  
                  if(stored_range.length > 0) {
  
                      stored_range.moveToElementText(textArea);
  
                      stored_range.setEndPoint('EndToEnd', range);
  
                      textArea.selectionstart = stored_range.text.length - range.text.length;
  
                      textArea.selectionend = textArea.selectionstart + range.text.length;
  
                  }
  
              }
  
              // Do we even have a selection?
  
              if (typeof(textArea.selectionstart) != "undefined") {
  
                  // Split the text in three pieces - the selection, and what comes before and after.
  
                  var begin = textArea.value.substr(0, textArea.selectionstart);
  
                  var selection = textArea.value.substr(textArea.selectionstart, textArea.selectionend - textArea.selectionstart);
  
                  var end = textArea.value.substr(textArea.selectionend);
  
                   
  
                  // Insert the tags between the three pieces of text.
  
                  textArea.value = begin + val1 + selection + val2 + end;

              }
  
          }
  
      </script>
  
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
  background-image: url("diaryw.jpg");
  background-size: 100% 100%;
  background-repeat:  no-repeat;
  padding-top: 15%;
  padding-right:15%;
  padding-left:15%;
  padding-bottom: 15%;
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
  columns: #000000; 
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
.text_edit {

    width: 500px;

    height: 300px;

    resize: none;

}

 

#view_text {

    width: 500px;

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

  <a href="signup-form\signup.php" class="right"></a>
   <a href="login-form\login.php"class="right"></a> 
</div>
<div class="header" >
  <h1>We welcome the hidden writer in you!</h1>
  <button onclick="window.location.href='signup-form/signup.php'">Write your first diary!</button>
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


<section>
  <input type="button" value="B" onclick="mod_selection('[b]','[/b]')" />

    <input type="button" value="I" onclick="mod_selection('[i]','[/i]')" />

    <input type="button" value="U"onclick="mod_selection('[u]','[/u]')"  />

    <br />

     

    <!-- Text area -->

    <textarea class="text_edit" id="my_text"></textarea>

    <br />

     

    <!-- Submit button -->

    <input type="button" value="Show text"  onclick="view_text()"/>

     

    <!-- Empty div to put the text in -->

    <div id="view_text">
      hello
    </div>

 

</section>






<div class="footer">
  <h2>We are a hardworking team of Three</h2>
  <h3> Divyam <i class="fa fa-book"></i> Sanya <i class="fa fa-book"></i>  Abhishek  </h3>
</div>

</body>
</html>
