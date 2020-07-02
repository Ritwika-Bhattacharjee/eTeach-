<?php
session_start();
$connect="";
$connect = new mysqli("localhost", "root", "", "iwpproject");
if($connect -> connect_errno)
{
	echo "Could not connect db";
}
$title = $_POST['title'];
$desc = $_POST['desc'];
if(isset($_POST["sub14"]))
{
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$sql = "INSERT INTO `gallery`(`imgno`, `image`, `title`, `description`) VALUES ('0','$file','$title','$desc')";
$result=$connect->query($sql);
if($result==0){
	echo "failed";
	
}
else{
	echo header("location: editgallery.php");
}

}


?>