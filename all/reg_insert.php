<?php
session_start();
include ("connection.php");

$fname     = $_REQUEST['fname'];
$lname     = $_REQUEST['lname'];
$dob       = $_REQUEST['dob'];
$gender    = $_REQUEST['gender'];
$address   = $_REQUEST['address'];
$city      = $_REQUEST['city'];
$qu        = $_REQUEST['qual'];
$mobile_no = $_REQUEST['mobile_no'];
$email     = $_REQUEST['email'];
$password  = $_REQUEST['password'];
$cpassword = $_REQUEST['cpassword'];

$q=""; 

foreach($qu as $qua) 
{ 
$q.= $qua.","; 
} 

$sel = "SELECT * FROM user_details WHERE email_id ='".$email."'";

$selres = mysqli_query($conn,$sel);
 	
  	if(mysqli_num_rows($selres) > 0)
  	{
  		 $_SESSION['error']="Email Already Exist!!";
  	     echo "<script>window.location.href='registration.php'</script>"; 
				
  	}
  	else
  	{

		$sql="insert into user_details(first_name,last_name,dob,gender,address,city,qualification,mobile_no,email_id,password,c_password) 
    VALUES('$fname','$lname','$dob','$gender','$address','$city','$q','$mobile_no','$email','$password','$cpassword')"; 

$res = mysqli_query($conn,$sql);

			if (!$res)
			{
				echo "<script>alert('you enter wrong details \n please try again !');
				window.location.href='registration.php'</script>";
			}	

			else
			{
				
				echo "<script>alert('your registration done successfully...');
				window.location.href='login.php'</script>";
				
			}

	}

?>