
<!DOCTYPE html>
<html>
<head>
<title> select code</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>

h2{font-size:35px; color: red; margin-top: 80px;}
</style>
<script type="text/javascript" src="reg_script.js"></script>


</head>

<body>
<div class="container">

<?php
session_start();
include ("header.html");
?>
  
  <div class="leftpane">
    <img src="images/any.png" height="100%" width="100%" align="center"> 
 </div>
  <div class="middlepane">
  
  

<form align="center" name="login"  onsubmit="return logvalidation()" method="post" action="login_select.php">
  <h2> <u>Log In Form</u></h2>
<table border="" cellpadding="15" cellspacing="2" align="center" margin-top="50px">

     <tr>
		<td><b>User Name</b></td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td><b>Password</b></td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit"></td>
		
	</tr>

</table>
<br>
<b style="font-size:20px; color: blue">not registered user ? </b><a href="registration.php" style="color: red;"> Sign UP</a>
  </form>
</div>


<div class="rightpane">
    <img src="images/query.png" height="100%" width="100%" align="center"> 

  </div>

  <?php
include ("footer.html");

?>
</div>
</body>

</html>