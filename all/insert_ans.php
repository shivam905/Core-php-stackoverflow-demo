<?php
session_start();
include ("connection.php");

$uid = $_SESSION['user_id'];
$qid = $_REQUEST['qid'];
$cid = $_REQUEST['cid'];

$ans = $_REQUEST['answer'];

//$uid = $_REQUEST['uid'];

$sql = "insert into answer_record(answer,user_id,category_id,question_id) 
							VALUES('$ans','$uid','$cid','$qid')";

$res = mysqli_query($conn,$sql);


if (!$res)
			{ 
				echo "<script>alert('you enter wrong details please try again !');
				window.location.href='home_cat.php'</script>";
			}	

			else
			{
				
				echo "<script>alert('your answer updated successfully..');
				window.location.href='home.php'</script>";
				
			}

mysqli_close($conn);
?>