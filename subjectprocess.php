<?php
session_start();
include("dbconnection.php");
$username = $_SESSION["u"];
$subject=$_POST['subject2'];
$sql = "UPDATE `teachertbl` SET `level2subject` = '$subject' WHERE `username`= '$username'";
$result=$connect->query($sql);
header("location: level2quiz.php")
?>