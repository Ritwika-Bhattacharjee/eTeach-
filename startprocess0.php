<?php
session_start();
include("dbconnection.php");
if(isset($_POST["sub7"])){
	header("location: level1quiz.php");

}

?>