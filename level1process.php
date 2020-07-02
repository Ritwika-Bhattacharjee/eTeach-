<?php
session_start();
include("dbconnection.php");
$i=0;
$answered[$i]=$_POST["no1"];
$i++;
$answered[$i]=$_POST["no2"];
$i++;
$answered[$i]=$_POST["no3"];
$i++;
$answered[$i]=$_POST["no4"];
$i++;
$answered[$i]=$_POST["no5"];
$i++;
$marks=0;
$totalmarks = 25;
$qmarks = (40*$totalmarks)/100;
$username = $_SESSION["u"];

for($i=0; $i<5; $i++){
	$x=$_SESSION["level1questions"][$i];
	$sql = "SELECT * FROM `level1` WHERE `qno` = '$x'";
	$result=$connect->query($sql);
	$row=$result->fetch_assoc();
	$a = $row["ans"];
	$m=0;

	if($answered[$i]==$row['ans']){
		$marks = $marks+5;
		$m=5;
	}
	$sql = "INSERT INTO `test1`(`username`, `qno`, `youranswer`, `correctanswer`, `marks`) VALUES ('$username','$x','$answered[$i]','$a','$m')";
	$result=$connect->query($sql);

}

$sql = "UPDATE `teachertbl` SET `level1marks` = '$marks' WHERE `username`='$username'";
$result=$connect->query($sql);
if($marks>=$qmarks){
	$sql = "UPDATE `teachertbl` SET `level1` = 'Q' WHERE `username`='$username'";
	$result=$connect->query($sql);
}
else{
	$sql = "UPDATE `teachertbl` SET `level1` = 'A' WHERE `username`='$username'";
	$result=$connect->query($sql);
}




header("location: custhome.php")
?>