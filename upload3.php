<?php
session_start();
$connect="";
$connect = new mysqli("localhost", "root", "", "iwpproject");
if($connect -> connect_errno)
{
	echo "Could not connect db";
}
$question = $_POST['ques'];
$field = $_POST['field'];


if(isset($_POST["sub10"]))
{
	if($_FILES["image"]["tmp_name"]!=""){
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		$sql = "INSERT INTO `level3`(`qno`, `field`, `question`, `qimage`) VALUES ('0','$field','$question','$file')";
	}
	else{
		$sql = "INSERT INTO `level3`(`qno`, `field`, `question`) VALUES ('0','$field','$question')";
	}

}
$result=$connect->query($sql);
if($result==0){
	echo "failed";
	
}
else{
	echo header("location: adminhome.php");
}
?>