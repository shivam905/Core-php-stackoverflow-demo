
<!DOCTYPE html>
<html>
<head>
<title> home page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">

.column {
    float: left;
}


.row:after {
    content: "";
    display: table;
    clear: both;
}

</style>
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
<a href="sel_profile.php"><img src="images/pro.png" height="100px" width="100px" style="float:left;margin-left: 20px; margin-top: 30px;"></a>



  <b style="font-size: 20px; color: brown; margin-top: 20px; float: left; position: relative;"><?php echo $_SESSION['username'];?></b>

<b style="font-size: 18px; color: blue; float: left; margin-top:10px; position: relative;"><u><?php echo $_SESSION['email'];?> </u></b>
</span>
 </div>
 <div class="rightpane">
    <img src="images/query.png" height="100%" width="100%" align="center"> 

  </div>
<?php

$cat = $_REQUEST['category'];
include ("connection.php");
$sql = "select * from category where category_id = '".$cat."'";   // category ko dropdown me lane ke liye hai ye.

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

      }}
?>


 <div class="middlepane">
<br>
<h1 align="center" style="font-size: 30px;">Welcome <b style="color: red;"><?php echo $_SESSION['username'];?></b> to Query.com / <b style="color: green"><?php echo $categ ?></b></h1><br>
<form name="search" method="post" action="home_cat.php" align="center">

  <b style="font-size: 20px; color: green;">Search Category : <select name="category">
<option value= "0">-- SELECT --</option>
<?php
include ("connection.php");
$sql = "select * from category";   // category ko dropdown me lane ke liye hai ye.

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
 <?php

       }
    }

        ?>         
         </select></b> <input type="submit" name="submit" style="margin-left: 20px;">

         <br><br>

       </form>
<br><br><br>

<?php

include ("connection.php");

$sql = "select * from category where category_id='".$_REQUEST['category']."'";


    $selres = mysqli_query($conn,$sql);

if(!$selres)
{ 
  
  die("Data Mismatch".mysqli_error($conn));
}
  
     if(mysqli_num_rows($selres) > 0)
    {

      while($row = mysqli_fetch_assoc($selres)) 
      {
        $cate = $row["category_name"];

        $cid = $row["category_id"];
        ?>



<?php
        

$sql1 = "SELECT question_record.*,user_details.* FROM question_record LEFT JOIN user_details ON question_record.user_id = user_details.user_id where question_record.category_id = '".$cid."'";

    $selres1 = mysqli_query($conn,$sql1);
  
     if(mysqli_num_rows($selres1) > 0)
    {

      while($row = mysqli_fetch_assoc($selres1)) 
      {

       $name = $row['first_name']." ".$row['last_name'];
       $uid= $row['user_id'];
       $que = $row["question"];
       $qid = $row["question_id"];

        ?>

<b style='font-size: 20px; color: #FF3396; margin-left:120px;'>Name :</b><b style='font-size: 20px; color: red; margin-left:5px;'><?php echo $name; ?></b>
  <br>
       <div class="row">
  <div class="column" style="margin-left:120px;">
        <b style='font-size: 20px; color: #FF3396;'>Ques &nbsp;:</b></div>
    <div class="column" style= "margin-left: 7px;">
        <b style='font-size: 20px; color: black; '><?php echo nl2br($que); ?></b>
  </div>
</div>
  
        <br><br>
 
<?php

        $sql2 = "SELECT answer_record.*,user_details.* FROM answer_record LEFT JOIN user_details ON answer_record.user_id = user_details.user_id where answer_record.question_id='".$qid."'";

    $selres2 = mysqli_query($conn,$sql2);
  
     if(mysqli_num_rows($selres2) > 0)
    {
     
      while($row = mysqli_fetch_assoc($selres2)) 
      {

        
   // $anss=$row["answers"];
       /* $_SESSION['username'] = $row["asked_by"];
        $_SESSION['question'] = $row["questions"];
        $_SESSION['qid'] = $row["qid"];
        $_SESSION['category'] = $row["category"];*/
       $aname = $row['first_name']." ".$row['last_name'];  
       $uid= $row['user_id'];
   $answ = $row["answer"];

?>

<b style='font-size: 18px; color: brown; margin-left:190px;'>Name &nbsp;:</b>
  <b style='font-size: 18px; color: blue; margin-left:5px;'><?php echo $aname; ?></b>       
        <br>
      
        <div class="row">

      <div class="column" style="margin-left:190px;">
        <b style='font-size: 18px; color: brown; margin-left:0px;'>Ans &nbsp;&nbsp;&nbsp;&nbsp;:</b>
      </div>
      <div class="column" style= "margin-left:10px;">
        <b style='font-size: 18px; color: green;'><?php echo nl2br($answ); ?></b>
      </div>
    </div>
        <br><br>      
  
        
    <?php 
    }} ?>
    <form name="reply" method="post" action="insert_ans.php" align="left">
  
    <input type="hidden" name="cid" value="<?php echo $cid; ?>">
    <input type="hidden" name="qid" value="<?php echo $qid; ?>">

    <textarea name="answer" id="text1" rows="2" cols="50" placeholder="Enter Your Answer Here...." style="margin-top: 10px; margin-left: 190px;"></textarea> 

  <input type="submit" name="submit" style="position: absolute; margin-top: 25px;">
  <br><br> </form> 
<?php }} 
  ?>
  
 <?php 
}}

mysqli_close($conn);
?>
 
 
</div>

<!-- <?php
include ("footer.html");
?> -->

</div>
</body>
</html>

