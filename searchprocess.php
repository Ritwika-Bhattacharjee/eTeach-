<?php
session_start();
$connect="";
$connect = new mysqli("localhost", "root", "", "iwpproject");
if($connect -> connect_errno)
{
	echo "Could not connect db";
}
$_SESSION["criteria"]="";
$_SESSION["susername"]="";
$_SESSION["sname"]="";
$_SESSION["sid"]="";
$x1 = $_POST['criteria'];
$x2 = $_POST['getinput'];

if($x1=='username'){
	$_SESSION["criteria"]=1;
	$_SESSION["susername"]=$x2;
}

else if($x1=='name'){
	$_SESSION["criteria"]=2;
	$_SESSION["sname"]=$x2;
}

else if($x1=='id'){
	$_SESSION["criteria"]=3;
	$_SESSION["sid"]=$x2;
}
header("location: search.php");
?>