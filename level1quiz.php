<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Level 1 Quiz</title>
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
		
	</style>
</head>
<body>
	<script>
		
	</script>
	<header>
    <div class="wrapper">
        <h1 id="eteach">eTeach</h1>
        <nav>
            <h2>LEVEL 1 - PRELIMINARY TEST</h2>
        </nav>
    </div>
</header>

<div class="row" style="width: 80%; background: url('back12.jpg') no-repeat; background-size: cover; margin: auto;">
	<div class="col-md-8">
				<div class="mainbody">
	
	<?php
	session_start();
	$_SESSION["level1questions"]=array();
	include("dbconnection.php");
	$sql = "SELECT COUNT(DISTINCT `qno`) FROM `level1`";
	$result=$connect->query($sql);
	$row=$result->fetch_assoc();
	$max = $row['COUNT(DISTINCT `qno`)'];
/*$username = $_SESSION["u"];*/
for ($i=0; $i<=5; $i++) {
   $num[$i] = rand(1,$max);
   for ($j=0; $j<$i; $j++) {             
      while ($num[$j] == $num[$i]){               
         $num[$i] = rand(1,$max);               
         $j = 0;             
      }           
   }    
}    
sort($num); 
		
		for($i=0; $i<5; $i++){
			array_push($_SESSION["level1questions"],$num[$i]);
			$sql = "SELECT * FROM `level1` WHERE `qno` = '$num[$i]'";
			$result=$connect->query($sql);
			$row=$result->fetch_assoc();
			echo '<div class="contents">
		<p>Q'.($i+1). '. <span>'.$row['question'].'</span></p>
		<p id="colorchange">A. <span>'.$row['opa'].'</span>
		<p id="colorchange">B. <span>'.$row['opb'].'</span>
		<p id="colorchange">C. <span>'.$row['opc'].'</span>
		<p id="colorchange">D. <span>'.$row['opd'].'</span>
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
	<form name="level1ans" action="level1process.php" method="POST">
		<h3>Answer Sheet:</h3>
		<ul type="none">
			<li>
				1. <input type="radio" id="no1" name="no1" value="A">A
				<input type="radio" id="no1" name="no1" value="B">B
				<input type="radio" id="no1" name="no1" value="C">C
				<input type="radio" id="no1" name="no1" value="D">D
			</li>
			<li>
				2. <input type="radio" id="no2" name="no2" value="A">A
				<input type="radio" id="no2" name="no2" value="B">B
				<input type="radio" id="no2" name="no2" value="C">C
				<input type="radio" id="no2" name="no2" value="D">D
			</li>
			<li>
				3. <input type="radio" id="no3" name="no3" value="A">A
				<input type="radio" id="no3" name="no3" value="B">B
				<input type="radio" id="no3" name="no3" value="C">C
				<input type="radio" id="no3" name="no3" value="D">D
			</li>
			<li>
				4. <input type="radio" id="no4" name="no4" value="A">A
				<input type="radio" id="no4" name="no4" value=B>B
				<input type="radio" id="no4" name="no4" value="C">C
				<input type="radio" id="no4" name="no4" value="D">D
			</li>
			<li>
				5. <input type="radio" id="no5" name="no5" value="A">A
				<input type="radio" id="no5" name="no5" value="B">B
				<input type="radio" id="no5" name="no5" value="C">C
				<input type="radio" id="no5" name="no5" value="D">D
			</li>
		</ul>
		<div><input type="submit" name="sub3" id="sub3"></div>
	</form>
</div>
	</div>
</div>





</body>
</html>