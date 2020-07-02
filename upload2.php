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
$opa = $_POST['opa'];
$opb = $_POST['opb'];
$opc = $_POST['opc'];
$opd = $_POST['opd'];
$ans = $_POST['ans'];

$sql = "INSERT INTO `level2` (`qno`, `field`, `question`, `opa`, `opb`, `opc`, `opd`, `ans`) VALUES ('0','$field','$question','$opa','$opb','$opc','$opd','$ans')";
$result=$connect->query($sql);
if($result==0){
	echo "failed";
	
}
else{
	echo header("location: adminhome.php");
}
/*$sql = "SELECT * FROM `level1` WHERE `qno`=2";
$result=$connect->query($sql);
$row=$result->fetch_assoc();
echo $row["question"];*/

/*header("location: adminhome.php")*/

?>