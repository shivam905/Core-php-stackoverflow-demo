<?php  /*unused page*/

$cate  = $_REQUEST['category'];

include ("connection.php");

$sql1 = "select * from question_record where category = '".$cate."'";

$selr = mysqli_query($conn,$sql1);

     if(mysqli_num_rows($selr) > 0)
    {
     
      while($row = mysqli_fetch_assoc($selr)) 
      {
        $_SESSION['username'] = $row["user_name"];
        $_SESSION['question'] = $row["questions"];
        $_SESSION['category'] = $row["category"];
        $_SESSION['qid']      = $row["qid"];

      echo "<script>alert('you choose : $cate');
        window.location.href='home_cat.php';</script>";
      }
  }
      		
			else
			{
				
				echo "<script>alert('you select wrong category');
				window.location.href='home_cat.php';</script>";
				
			}
 
mysqli_close($conn);
?>