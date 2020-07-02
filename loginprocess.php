<?php
session_start();

include("dbconnection.php");
$logname=$_POST['logname'];
$logpass=$_POST['logpass'];
$sqll="SELECT * from `teachertbl` where `username` = '$logname'";
$result=$connect->query($sqll);
//echo "Resu         lt:".$result;
$row=$result->fetch_assoc();
if($row==0){
	echo "Account Does not Exist!";
}
else{
	if($row["password"] == $logpass){
	$_SESSION["u"]=$logname;
	$_SESSION["type"]="X";		
		if($row["role"]=="C"){
			$_SESSION["type"]="C";
			header("location: custhome.php");
		}
		else if($row["role"]=="A"){
			$_SESSION["type"]="A";
			$_SESSION["criteria"]="";
			$_SESSION["susername"]="";
			$_SESSION["sname"]="";
			$_SESSION["sid"]="";
			header("location: adminhome.php");
		}
		
	}
	else{
		echo "wrong password";
	}
}

?>

