<?php
session_start();
include("dbconnection.php");
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$email=$_POST['email'];
$sqll="SELECT * from `teachertbl` where `username` = '$username'";
$result=$connect->query($sqll);
//echo "Result:".$result;
$row=$result->fetch_assoc(); 
//echo $row['Username'];
//if($row==0)
//	echo "Unsuccessfull";
//else {
	//echo "Successfull";
//	include("shopcart.html");
//}
if($row==0) {
	$sql="INSERT INTO `teachertbl`(`tid`, `name`, `email`, `username`, `password`, `role`) 
VALUES ('0','$name','$email','$username','$password', 'C')";
$result=$connect->query($sql);
if($result==0)
	echo "Values not inserted";
else {
//	echo "Values successfully inserted";
	$_SESSION["u"]=$username;
	$_SESSION["type"]="C";
	header("location: custhome.php");
}
}
else {
//	echo '<script type="text/javascript">';
//	echo ' alert("Duplicate")';  //not showing an alert box.
//	echo '</script>';
// echo "<script type='text/javascript'>alert("DUPLICATE USER ID NOT ALLOWED");</script>";
//	echo "DUPLICATE USER ID NOT ALLOWED";
//	include("signin.html");
	header("location: homepage.html");
}

//($row!=0)
//{
/* if($row['role']='A';
$_SESSION['role']='A';
header("location: ./admin.php");
else if($row['role']=="C")
admin.php
session_start();
if($_SESSION['role']=="A")*/
?>




