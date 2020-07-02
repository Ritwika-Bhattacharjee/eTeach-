<?php
session_start();
include("dbconnection.php");
$ans1 = $_POST['ans1'];
$ans2 = $_POST['ans2'];
$ans3 = $_POST['ans3'];
$qno=array();
$username = $_SESSION["u"];
$subject = $_SESSION["subject3"];

for($i=0; $i<3; $i++){
	$qno[$i] = $_SESSION["level3questions"][$i];
}

if(isset($_POST["sub3"]))
{
	if($_FILES["image1"]["tmp_name"]!=""){
		$file1 = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));
		$sql1= "INSERT INTO `test3`(`username`, `qno`, `ans`, `ansimg`) VALUES ('$username','$qno[0]','$ans1','$file1')";
	}
	else{
		$sql1= "INSERT INTO `test3`(`username`, `qno`, `ans`) VALUES ('$username','$qno[0]','$ans1')";
	}
	if($_FILES["image2"]["tmp_name"]!=""){
		$file2 = addslashes(file_get_contents($_FILES["image2"]["tmp_name"]));
		$sql2= "INSERT INTO `test3`(`username`, `qno`, `ans`, `ansimg`) VALUES ('$username','$qno[1]','$ans2','$file2')";
	}
	else{
		$sql2= "INSERT INTO `test3`(`username`, `qno`, `ans`) VALUES ('$username','$qno[1]','$ans2')";
	}
	if($_FILES["image3"]["tmp_name"]!=""){
		$file3 = addslashes(file_get_contents($_FILES["image3"]["tmp_name"]));
		$sql3= "INSERT INTO `test3`(`username`, `qno`, `ans`, `ansimg`) VALUES ('$username','$qno[2]','$ans3','$file3')";
	}
	else{
		$sql3= "INSERT INTO `test3`(`username`, `qno`, `ans`) VALUES ('$username','$qno[2]','$ans3')";
	}
}

$result1=$connect->query($sql1);

$result2=$connect->query($sql2);

$result3=$connect->query($sql3);
$sql = "UPDATE `teachertbl` SET `level3` = 'A' WHERE `username`='$username'";
$result=$connect->query($sql);
header("location: custhome.php");

?>