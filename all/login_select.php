<?php
session_start();
include ("connection.php");

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql = "select * from user_details where email_id='".$email."' AND password='".$password."'";

$selres = mysqli_query($conn,$sql);

if(!$selres)
{	
 	
 	die("Data Mismatch".mysqli_error($conn));
}
 	
  	 if(mysqli_num_rows($selres) > 0)
  	{

  		while($row = mysqli_fetch_assoc($selres)) 
  		{

          $_SESSION['username'] = $row["first_name"]." ".$row["last_name"];
          $_SESSION['user_id']  = $row["user_id"];
          $_SESSION['fname'] = $row["first_name"];
          $_SESSION['lname'] = $row["last_name"];
          $_SESSION["email"] = $row["email_id"];
          $_SESSION["dob"]   = $row["dob"];
          $_SESSION["gen"]   = $row["gender"];
          $_SESSION["add"]   = $row["address"];
          $_SESSION["city"]  = $row["city"];
          $_SESSION["qua"]   = $row["qualification"];
          $_SESSION["mob"]   = $row["mobile_no"];

  	     echo "<script>alert('Log In successfully done');
  	    window.location.href='home.php';</script>"; 
    	}
  }
else
{

  echo "<script>alert('you enter wrong details');
        window.location.href='login.php'</script>";
}

mysqli_close($conn);
?>