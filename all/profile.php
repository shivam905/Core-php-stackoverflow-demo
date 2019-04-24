
<!DOCTYPE html>
<html>
<head>
<title> Profile</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<div class="container">
<?php
session_start();
include ("header.html");
?>

<nav align="left">
      <a href="home.php" >Home </a>&nbsp;&nbsp;&nbsp;
      <a href="post_question.php">Post Your Question </a>&nbsp;&nbsp;&nbsp;
      <a href="profile.php">View Profile</a>&nbsp;&nbsp;&nbsp;
      <a class="a1" href="logout.php">Log Out</a>&nbsp;&nbsp;&nbsp;
  </nav>

  <div class="leftpane">
    <span style="position: absolute; max-height: 200px; width: 200px; margin-left: 50px;">
<a href="profile.php"><img src="images/pro.png" height="100px" width="100px" style="float:left;margin-left: 20px; margin-top: 30px;"></a>
 
  <b style="font-size: 20px; color: brown; margin-top: 20px; float: left; position: relative;"><?php echo $_SESSION['username'];?></b>

<b style="font-size: 18px; color: blue; float: left; margin-top:10px; position: relative;"><u><?php echo $_SESSION['email'];?> </u></b>
</span>
 </div>

 <div class="middlepane">
<br>
 <h1 align="center" style="font-size: 30px;">Welcome <b style="color: red;"><?php echo $_SESSION['username'];?></b> to Query.com / <b style="color: green">Profile</b></h1><br>

<table cellspacing="2" cellpadding="6" border="1" align="center">

  <tr>
       <td align="right"><b>First Name :</b></td>
       <td><b style="font-size: 20px; color: brown"><?php echo $_SESSION['fname'];?></b></td>   
     </tr>
                           
     <tr>
       <td align="right"><b>Last Name :</b></td>
       <td><b style="font-size: 20px; color: brown"><?php echo $_SESSION['lname'];?></td>
     </tr>

     <tr>
       <td align="right"><b>Date Of Birth :</b></td>
       <td><b style="font-size: 20px; color: brown"><?php echo $_SESSION['dob'];?></td>
     </tr>

     <tr>
       <td align="right"><b>Gender :</b></td>
       <td>
     
       <b style="font-size: 20px; color: brown"><?php echo $_SESSION['gen'];?>
       </td>
     </tr>

     <tr>
       <td align="right"><b>Address :</b></td>
       <td><b style="font-size: 20px; color: brown"><?php echo $_SESSION['add'];?></td>
     </tr>

     <tr>
       <td align="right"><b>City :</b></td>
       <td><b style="font-size: 20px; color: brown"><?php echo $_SESSION['city'];?></td>
     </tr>

     <tr>
       <td align="right"><b>Qualification :</b></td>
       <td><b style="font-size: 20px; color: brown"><?php echo $_SESSION['qua'];?></td> 
     </tr>

     <tr>
       <td align="right"><b>Mobile No. :</b></td>
       <td><b style="font-size: 20px; color: brown"><?php echo $_SESSION['mob'];?></td>
     </tr>

     <tr>
       <td align="right"><b>Email-ID :</b></td>
       <td><b style="font-size: 20px; color: brown"><?php echo $_SESSION['email'];?></td>
     </tr>
</tr></table>



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

<!--?php echo 'hhhhhh' ?-->