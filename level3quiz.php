<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Level 2 Quiz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
	<style>
		body {
    background: url("back12.jpg") no-repeat;
			background-size: cover;
    font: normal 15px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
}
		.mainbody{
			
			
			margin: auto;
			margin-top: 20px;
			border-radius: 50px;
			color: white;
			padding-left: 100px;
			padding-top: 20px;
			padding-bottom: 50px;
			font-family: 'Crete Round', serif;
			font-size: 20px;
					}
		.wrapper {
    margin: 0 auto;
    padding: 0 0px;
    width: 940px;
}

/*for header*/
header {
    height: 120px;
    color: black;
    background-color: #219C62;
}
header h1 {
    float: left;
    margin-top: 32px;
}
header h1 .color {
    color: #02b8dd;
}
header nav {
    float: right;
}

#eteach{
	font-family: 'Crete Round', serif;
    font-weight: bold;
    color: #444;
    font-size: 45px;
    margin-bottom: 20px;
}
nav h2{
	font-family: 'Crete Round', serif;
    font-weight: bold;
    color: black;
    font-size: 35px;
    margin-bottom: 20px;
    margin-top: 50px;
}
#next, #previous{
	font-family: 'Crete Round', serif;
	font-size: 15px;
	font-weight: bold;
	width: 100px;
	border: 3px solid white;
	padding: 5px 5px 5px 5px;
	margin-left: 10px;
	margin-right: 10px;
	border-radius: 5px;
}
#next{
	background-color: green;
}
#previous{
	background-color: violet;
}
#next:hover, #previous:hover{
	background-color: white;
}
#buttons
{
	
	float: right;
}
.answersheet
{
	
	color: white;
	margin-top: 20px;
	
	padding-right: 50px;
	padding-top: 10px;
	padding-bottom: 30px;
}
.answersheet h3{
	font-family: 'Crete Round', serif;
	font-size: 20px;	
	border-bottom: 1px solid white;
	width: 40%;
}
.answersheet ul li{
	font-family: 'Crete Round', serif;
	font-size: 20px;
	padding-right: 60px;	
}
#sub3{
	font-family: 'Crete Round', serif;
	font-size: 15px;
	font-weight: bold;
	width: 100px;
	border: 3px solid white;
	padding: 5px 5px 5px 5px;
	margin-left: 10px;
	margin-right: 10px;
	border-radius: 5px;
	background-color: green;
	margin-left: 80%;
	margin-top: 10px;
}
#colorchange{
	color: #C8EF84;
}
.contents{
	border-bottom: 3px solid white;
	padding-bottom:20px;
	padding-top: 20px;
}
		
	</style>
</head>
<body>
	<script>
		
	</script>
	<header>
    <div class="wrapper">
        <h1 id="eteach">eTeach</h1>
        <nav>
            <h2>LEVEL 3 - SUBJECT DESCRIPTIVE TEST</h2>
        </nav>
    </div>
</header>

<div class="row" style="width: 100%; background: url('back12.jpg') no-repeat; background-size: cover; margin: auto;">
	<div class="col-md-8">
				<div class="mainbody">
		<?php
	session_start();
	$_SESSION["level3questions"]=array();
	include("dbconnection.php");
	$sql = "SELECT COUNT(DISTINCT `qno`) FROM `level3`";
	$result=$connect->query($sql);
	$row=$result->fetch_assoc();
	$max = $row['COUNT(DISTINCT `qno`)'];
	$username = $_SESSION["u"];
	$sql = "SELECT * FROM `teachertbl` WHERE `username`='$username'";
	$result=$connect->query($sql);
	$row=$result->fetch_assoc();
	$subject = $row["level3subject"];
	$_SESSION["subject3"]=$subject;

/*$username = $_SESSION["u"];*/
/*for ($i=0; $i<=5; $i++) {
   $num[$i] = rand(1,$max);
   for ($j=0; $j<$i; $j++) {             
      while ($num[$j] == $num[$i]){               
         $num[$i] = rand(1,$max);               
         $j = 0;             
      }           
   }    
}*/
$num = array();
for ($i=0; $i < 3 ; $i++) { 
	$x=rand(1,$max);
	$num[$i]=$x;
	$sql = "SELECT * FROM `level3` WHERE `qno` = '$x'";
	$result=$connect->query($sql);
	$row=$result->fetch_assoc();
	if($row['field']!=$subject){
		$i--;
		continue;
	}
	else{
		for($j=0; $j<$i; $j++){
			if($x==$num[$j]){
				$i--; break;
			}
		}
		continue;
	}

  }  
sort($num); 
		
		for($i=0; $i<3; $i++){
			array_push($_SESSION["level3questions"],$num[$i]);
			$sql = "SELECT * FROM `level3` WHERE `qno` = '$num[$i]'";
			$result=$connect->query($sql);
			$row=$result->fetch_assoc();
			echo '<div class="contents">
		<p>Q'.($i+1). '. <span>'.$row['question'].'</span></p>
		<img src="data:image/jpg;base64,'.base64_encode($row['qimage']).'" id="qimage">
	</div>';
		}   
 ?>

	<!--<div id="buttons">
		<button id="previous"><<-Previous</button>
	<button id="next">Next->></button>
	</div>-->
	
</div>
	</div>
	<div class="col-md-4">
		<div class="answersheet">
	<form name="level1ans" action="level3process.php" method="POST" enctype="multipart/form-data">
		<h3>Answer Sheet:</h3>
		<ul type="none">
			<li>
				1. <textarea name="ans1" rows="10" cols="30">Type Answer 1 here or upload your scanned answer image...</textarea>
				<input type="file" name="image1" id="image">
			</li>
			<li>
				2. <textarea name="ans2" rows="10" cols="30">Type Answer 2 here or upload your scanned answer image...</textarea>
				<input type="file" name="image2" id="image">
			</li>
			<li>
				3. <textarea name="ans3" rows="10" cols="30">Type Answer 3 here or upload your scanned answer image...</textarea>
				<input type="file" name="image3" id="image">
			</li>
			
		</ul>
		<div><input type="submit" name="sub3" id="sub3"></div>
	</form>
</div>
	</div>
</div>





</body>
</html>