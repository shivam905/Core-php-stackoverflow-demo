
<!DOCTYPE html>
<html>
<head>
<title> registration form</title>
<script type="text/javascript" src="reg_script.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<div class="container">

<?php
session_start();
include ("header.html");
?>
  
  <div class="leftpane">
    <img src="images/any.png" height="100%" width="100%" align="center"> 
 </div>
  <div class="middlepane">
  
	<h1 align="center" style="margin-top: 20px;"> <u style="color:red;">Registration Form</u> </h1>

  <form name="reg" method="POST" action="reg_insert.php" onsubmit="return validateForm()">

	<table cellspacing="2" cellpadding="4" border="2" align="center">
    <?php
      if(isset($_SESSION['error']))
      {?>
      <tr><td colspan="2" style="color: red;"><?php echo $_SESSION['error'];$_SESSION['error']=''; ?></td></tr>
     <?php
      }
      ?>
     <tr>
       <td align="right"><b>First Name :</b></td>
       <td><input type="text" name="fname" id="t1" ></td>   
     </tr>
                           
     <tr>
       <td align="right"><b>Last Name :</b></td>
       <td><input type="text" name="lname"></td>
     </tr>

     <tr>
       <td align="right"><b>Date Of Birth :</b></td>
       <td><input type="Date" name="dob"></td>
     </tr>

     <tr>
       <td align="right"><b>Gender :</b></td>
       <td>
     
       <input type="radio" name="gender" value="male"> Male
       <input type="radio" name="gender" value="female"> Female
       <input type="radio" name="gender" value="other"> Other 
       </td>
     </tr>

     <tr>
       <td align="right"><b>Address :</b></td>
       <td><input type="text" name="address"></td>
     </tr>

     <tr>
       <td align="right"><b>City :</b></td>
       <td><select name="city">

         <option value="1" selected> Enter Your City</option>
         <option value="kanpur">KANPUR</option> 
         <option value="lucknow">LUCKNOW</option> 
         <option value="unnao">UNNAO</option> 
         <option value="agra">AGRA</option> 
         </select></td>
     </tr>

     <tr>
       <td align="right"><b>Qualification :</b></td>
       <td>
  
          <input type="checkbox" class="abc" name="qual[]" id="q1" value="MCA"> MCA
          <input type="checkbox" class="abc" name="qual[]" id="q2" value="MBA"> MBA
          <input type="checkbox" class="abc" name="qual[]" id="q3" value="Btech"> Btech
          <input type="checkbox" class="abc" name="qual[]" id="q4" value="Mtech"> Mtech
     </td> 
     </tr>

     <tr>
       <td align="right"><b>Mobile No. :</b></td>
       <td><input type="tel" name="mobile_no" maxlength="10"></td>
     </tr>

     <tr>
       <td align="right"><b>Email-ID :</b></td>
       <td><input type="email" name="email" placeholder="abc123@xyz.pq"></td>
     </tr>

     <tr>
       <td align="right"><b>Password :</b></td>
       <td><input type="password" name="password"></td>
     </tr>

     <tr>
       <td align="right"><b>Confirm Password :</b></td>
       <td><input type="password" name="cpassword"></td>
     </tr>

     <tr>
     	<td></td>
     <td align="left" >
     
       <input type="submit" value="Submit" align="center">

       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="reset">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="button" name="back" onclick="window.history.back()" value="back">

    </td></tr>
</tr></table>
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