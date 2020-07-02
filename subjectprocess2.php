<?php
session_start();
include("dbconnection.php");
$username = $_SESSION["u"];
$subject=$_POST['subject3'];
$sql = "UPDATE `teachertbl` SET `level3subject` = '$subject' WHERE `username`= '$username'";
$result=$connect->query($sql);
header("location: level3quiz.php");
?>