<?php 
session_start();
include ("connection.php");

$userid = $_SESSION['user_id'];
$catid = $_REQUEST['category'];
$que = $_REQUEST['ques'];


$sql = "insert into question_record(question,category_id,user_id) VALUES('$que','$catid','$userid')";

$res = mysqli_query($conn,$sql);

if (!$res)
			{
				echo "<script>alert('you enter wrong details \n please try again !');
				window.location.href='post_question.php'</script>";
			}	

			else
			{
				
				echo "<script>alert('your question uploaded successfully..');
				window.location.href='home.php'</script>";
				
			}

mysqli_close($conn);
?>

