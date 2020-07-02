<?php
session_start();
$connect="";
$connect = new mysqli("localhost", "root", "", "iwpproject");
if($connect -> connect_errno)
{
	echo "Could not connect db";
}
$username = $_SESSION["ansu"];
$m1 = $_POST['mark1'];
$m2 = $_POST['mark2'];
$m3 = $_POST['mark3'];

$tm=$m1+$m2+$m3;
if($tm>=15){
	$s="Q";
}
else{
	$s="A";
}
$s1='C';

$sql = "SELECT * FROM `test3` WHERE `username` = '$username'";
$result=$connect->query($sql);
$row=$result->fetch_assoc();
$qno = $row['qno'];
$sql1 = "UPDATE `test3` SET `marks` = '$m1' WHERE `username` = '$username' AND `qno`='$qno'";
$result1=$connect->query($sql1);

$row=$result->fetch_assoc();
$qno = $row['qno'];
$sql1 = "UPDATE `test3` SET `marks` = '$m2' WHERE `username` = '$username' AND `qno`='$qno'";
$result1=$connect->query($sql1);

$row=$result->fetch_assoc();
$qno = $row['qno'];
$sql1 = "UPDATE `test3` SET `marks` = '$m3' WHERE `username` = '$username' AND `qno`='$qno'";
$result1=$connect->query($sql1);

$sql = "UPDATE `teachertbl` SET `level3marks`='$tm',`level3`='$s',`level3status`='$s1' WHERE `username`='$username'";
$result=$connect->query($sql);
if($result==0){
	echo "failed";
	
}
else{
	echo header("location: adminhome.php");
}
?>