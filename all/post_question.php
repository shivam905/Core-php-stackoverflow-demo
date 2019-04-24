
<!DOCTYPE html>
<html>
<head>
<title>Post Question</title>
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
      <a href="post_question.php" >Post Your Question </a>&nbsp;&nbsp;&nbsp;
      <a href="profile.php">View Profile</a>&nbsp;&nbsp;&nbsp;
      <a class="a1" href="logout.php">Log Out </a>&nbsp;&nbsp;&nbsp;
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
<h1 align="center" style="font-size: 30px;">Welcome <b style="color: red;"><?php echo $_SESSION['username'];?></b> to Query.com / <b style="color: green">Post Question</b></h1><br><br><br>


	<form name="comment" method="post" action="insert_question.php" onsubmit="return validateForm()" align="center">

    <b style="font-size: 20px; color: brown;"><?php echo $_SESSION['username'];?></b>

      <b style="margin-left: 200px;">Question Category:</b> <select name="category">

        <option value= "0">-- SELECT --</option>

<?php
include ("connection.php");
$sql = "select * from category";

    $selres = mysqli_query($conn,$sql);

if(!$selres)
{ 
  
  die("Data Mismatch".mysqli_error($conn));
}
  
     if(mysqli_num_rows($selres) > 0)
    {

         while($row = mysqli_fetch_assoc($selres)) 
      {
      $categ = $row["category_name"]; 
      $cid = $row["category_id"]; 
?>



         <option value= <?php echo $cid; ?>><?php echo $categ; ?></option>
        <!--  <input type="hidden" name="category_value" value="<?php echo $cid; ?>">  -->
 <?php
       }
    }
        ?>         
         </select>
        <br>

<textarea name="ques" id="text1" rows="5" cols="80" placeholder="Post Your Question Here...." style="margin-top: 20px;"></textarea> 
<br>

	<input type="submit" name="submit" style="margin-top: 20px; margin-left: 520px;">
	</form>


</div>

<div class="rightpane">
    <img src="images/query.png" height="100%" width="100%" align="center"> 

  </div>
<?php

include ("footer.html");
?>
</div>

  <script type="text/javascript">

  	function validateForm() 
{
         

           if( document.comment.category.value =="0")
         {
            alert( "Please choose Question category type !" );
            document.comment.category.focus();
            return false;
         }

         if(document.comment.ques.value =="")
           {
         	alert( "Please Enter Question !" );
            document.comment.ques.focus(); 
            return false;
           }

         return(true);
}
  </script>
</body>
</html>

