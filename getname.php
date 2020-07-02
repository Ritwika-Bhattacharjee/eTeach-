<?php
session_start();
$connect="";
$connect = new mysqli("localhost", "root", "", "iwpproject");
if($connect -> connect_errno)
{
	echo "Could not connect db";
}
$username = $_POST['user'];
$_SESSION["ansu"]=$username;
header("location: answerscript.php");
/*$sql = "SELECT COUNT(*) FROM `test3` WHERE `username`='$username'";
$result=$connect->query($sql);
$row=$result->fetch_assoc(); 
$max=$row['COUNT(*)'];
$sql = "SELECT * FROM `test3` WHERE `username` = '$username'";
$result=$connect->query($sql);

for($i=0; $i<$max; $i++){
	$row=$result->fetch_assoc(); 
	$qno = $row['qno'];
	$sql1 = "SELECT * FROM `level3` WHERE `qno`='$qno'";
	$result1=$connect->query($sql1);
	$row1=$result1->fetch_assoc();
	$question = $row1['question'];
	$answer = $row['ans'];

	echo '<div id="answersheet">
	<div class="row" id="insideans">
		<div class="col-md-8">
		<p id="q">Q'.($i+1).'. '.$question.'</p>
	</div>
	<div class="col-md-4">
		<img src="data:image/jpg;base64,'.base64_encode($row1['qimage']).'" id="prpic">.
	</div>
	
	</div>

	<p style="padding-left: 60px;"><b>ANSWER '.($i+1).':</b></p>
	<p id="answered">'.$answer.'</p><img src="data:image/jpg;base64,'.base64_encode($row['ansimg']).'" id="prpic">
	
</div>';

}*/

?>

<!--<img src="data:image/jpg;base64,'.base64_encode($row['profilepic']).'" id="prpic">-->