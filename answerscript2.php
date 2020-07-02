<!DOCTYPE html>
<html>
<head>
	<title>answerscript</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
	<style>
		body{
			background-color: black;
		}
		#answersheet{
	background: black;
	padding-top: 40px;
}
#insideans{
	width: 100%;
	margin:auto;
	font-family: 'Crete Round', serif;
	background-color: black;
	padding-left: 60px;
}

#q{
	color: #94F0A3;
	font-size: 20px;
}
#answered{
	color: white;
	font-size: 18px;
	padding-left: 60px;
	padding-right: 60px;
	font-family: 'Crete Round', serif;
	padding-top: 30px;
	padding-bottom: 30px;
	border-bottom: 1px solid white;
}
#gradesheet{
	font-family: 'Crete Round', serif;
	background-color: #567A5C;
	color: white;
	padding-left: 100px;
	padding-right: 100px;
	padding-top: 60px;
	padding-bottom: 60px;
}
#gradesheet span{
	margin: 20px;
}
#gradesheet input{
	margin: 20px;
}
#sub12{
	padding: 5px;
	font-size: 18px;
	margin-left: 50%;
	background-color: #A0DBA9;
}
#sub12:hover{
	background-color: white;
}
#names{
	color: white;
	font-family: 'Crete Round', serif;
}
#back{
	background-color: orange;
	font-weight: bold;
	margin-top: 20px;
	margin-left: 20px;
	padding: 5px;
	font-family: 'Crete Round', serif;
}
#back:hover{
	background-color: white;
	color: orange;
}

	</style>


</head>
<body>
	<a href="custhome.php"><button id="back">BACK</button></a>
	<?php
	session_start();
$connect="";
$connect = new mysqli("localhost", "root", "", "iwpproject");
if($connect -> connect_errno)
{
	echo "Could not connect db";
}
$username = $_SESSION["u"];

$sql = "SELECT * FROM `teachertbl` WHERE `username`='$username'";
$result=$connect->query($sql);
$row=$result->fetch_assoc(); 
if(($row['level3']=='A' || $row['level3']=='Q') && $row['level3status']=='C'){


	$sql = "SELECT COUNT(*) FROM `test3` WHERE `username`='$username'";
$result=$connect->query($sql);
$row=$result->fetch_assoc(); 
$max=$row['COUNT(*)'];
$sql = "SELECT * FROM `test3` WHERE `username` = '$username'";
$result=$connect->query($sql);
echo '<div style="background-color: black; text-align: center;"><h2 id="names">ANSWER SCRIPT</h2>
	<h3 id="names">Username:  '.$username.'</h3></div>';

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

	<p style="padding-left: 60px; color: white;"><b>ANSWER '.($i+1).':</b></p>
	<p id="answered">'.$answer.'<img src="data:image/jpg;base64,'.base64_encode($row['ansimg']).'" id="prpic"><br><p id="answered">Marks Obtained: '.$row['marks'].'</p>
	 
	
</div>';

}
}





?>

</div>

</body>
</html>