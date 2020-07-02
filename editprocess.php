<?php
session_start();

include("dbconnection.php");
$username = $_SESSION["u"];
$name=$_POST['name'];
$password=$_POST['password'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobno=$_POST['mobno'];
$address=$_POST['address'];
$education=$_POST['education'];
$work=$_POST['work'];
$skills=$_POST['skills'];

$sqll="UPDATE `teachertbl` SET `name`='$name',`password`='$password',`dob`='$dob',`age`='$age',`gender`='$gender',`email`='$email',`mobno`='$mobno',`address`='$address',`education`='$education',`work`='$work',`skills`='$skills' WHERE `username`='$username'";
$result=$connect->query($sqll);

if(isset($_POST["sub1"]))
{
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$sql = "UPDATE `teachertbl` SET `profilepic`='$file' WHERE `username` = '$username'";
$result1=$connect->query($sql);

}

header("location: profilepage.php");
?>