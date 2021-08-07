<html>
<head>
<link rel="Stylesheet" type="text/css" href="homemain.css" >
<style>

</style>
</head>
<body style="background-image:url('back11.jpg');background-position: center;
			background-repeat: no-repeat;
			background-size: cover;">

<div class="container-fuild heading" >
<p class="letter">E Waste Vellore</p>
</div>
 <?php
 
 include "nav.php"
 
 ?>
 
    
<div class="container-fluid bg_img" style="margin-right:38%;height:65%" >

    <center><p class="login_text">Register your vehicle</p></center>
<form method="post" action="vanreg2.php"> <br> 
    <label for="name">Driver Full Name : </label>
    <input id="name" type="text" name="name"><br> <br>
    <label for="number">Driver Contact No : </label>
    <input for="number" type="number" name="number"><br> <br>
    <label for="vanno">Vehicle no : </label>
    <input id="vanno" type="text" name="vanno"><br> <br>
     <label for="password">Password : </label>
    <input id="paswword" type="password" name="password"> <br> <br> <br>
    
   <center><button name="submit" type="submit" class="button_design">Register</button></button></center>
</form>
    
</div>        
</div>       
    <div class="footer">
  <p> Clean India Better India</p>
</div>

</body>    
</html>
