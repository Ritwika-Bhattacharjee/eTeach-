<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>admin home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <style>
    	body {
    background-color: #166523;
    font: normal 15px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
    color: white;
}
.clear {
    clear: both;
}
.wrapper {
    margin: 0 auto;
    padding: 0 10px;
    width: 940px;
}

#heading {
    font-family: 'Crete Round', serif;
    font-weight: bold;
    color: white;
    font-size: 45px;
    margin-bottom: 20px;
}
a {
    text-decoration: none;
    color: white;
}
#white:hover {
    color: #02b8dd;
}
#white{
	color: white;
}
header {
    height: 120px;
}
header h1 {
    float: left;
    margin-top: 32px;
}
header h1 .color {
    color: white;
}
header nav {
    float: right;
}
header nav ul li {
    float: left;
    display: inline-block;
    margin-top: 50px;
}
header nav ul li a {
    color: #444;
    text-transform: uppercase;
    font-weight: bold;
    display: block;
    margin-right: 20px;
}

.choose
{
	background-color: black;
	color: white;
	padding-top: 30px;
	padding-bottom: 30px;
	text-align: center;
	opacity: 0.8;
	font-family: 'Crete Round', serif;
    font-size: 20px;
}
.choose button{
	font-family: 'Crete Round', serif;
    font-size: 20px;
    background-color: black;
    color: white;
    border: none;
}
#dropdown1{
	position: absolute;
	border: 2px solid black;
	margin-left: 20px;
	left: -2%;
	top: 200px;
	display: none;
	width: 30%;
}
#dropdown2{
	position: absolute;
	border: 2px solid black;
	margin-left: 20px;
	left: 30%;
	top: 200px;
	display: none;
	width: 30%;
}
#dropdown1 button, #dropdown2 button{
	width: 100%;
	font-size: 17px;
	font-family: 'Crete Round', serif;
	background-color: #075635;
	color: white;
	border-color: black;
	padding-top: 5px;
	padding-bottom: 5px;
	border: 1px solid black;
}

#a:hover, #b:hover, #c:hover{
	color: yellow;
}
#dropdown1 button:hover, #dropdown2 button:hover{
	background-color: #5BEEB1;
	font-size: 19px;
	color: black;
}
#qcandidates, #wcandidates, #ncandidates{
	background: url("back14.jpg") no-repeat;
	background-size: cover;
	width: 100%;
	padding-bottom: 500px;
	display: none;
}
#allcandidates{
	background: url("back14.jpg") no-repeat;
	background-size: cover;
	width: 100%;
	padding-bottom: 500px;
}
.ctable{
	width: 70%;
	margin: auto;
	padding-top: 40px;
	padding-bottom: 80px;
	text-align: center;
}
.ctable tr{
	border-bottom: 1px solid white;

}
.ctable h1{
	font-family: 'Calistoga', cursive;
	color: white;
	margin-bottom: 30px;
	font-size: 30px;
	font-weight: bold;

}
#head{
	background-color: #166523;
	color: white;
	font-size: 25px;
	font-family: 'Calistoga', cursive;
	text-transform: uppercase;
	font-weight: bold;
	text-align: center;
	padding-top: 15px;
	padding-bottom: 15px;
}
#inside{
	font-family: 'Calistoga', cursive;
	text-align: center;
	font-size: 15px;
	padding-top: 10px;
	padding-bottom: 10px;
	background-color: black;
	font-weight: bold;
}
#level1upload, #level2upload, #level3upload{
	background: url("back15.png") no-repeat;
	background-size: cover;
	width: 100%;
	padding-bottom: 500px;
	color: white;
	font-family: 'Calistoga', cursive;
	display: none;
}
.ucontents{
	width: 50%;
	margin: auto;
	padding-top: 80px;
}
.ucontents h2{
	font-weight: bold;
	font-size: 30px;
	text-align: center;
	padding-bottom: 10px;
	border-bottom: 1px solid white;
	margin-bottom: 30px;
}
.ucontents p{
	font-weight: bold;
	color: #94F0A3;
	font-size: 20px;
}
#sub8, #sub9, #sub10{
	background-color: #94F0A3;
	padding: 5px 5px 5px 5px;
	color: black;
	margin-top: 20px;
	font-weight: bold;
	font-size: 15px;
}
#sub8:hover, #sub9:hover{
	background-color: white;
	padding: 7px 7px 7px 7px;
}
#grade{
	background: url("back16.jpg") no-repeat;
	background-size: cover;
	font-family: 'Calistoga', cursive;
	color: white;
	display: none;

}
.gcontents{
	width: 90%;
	margin: auto;
}
.gcontents h2{
	font-size: 30px;
	font-weight: bold;
	padding-top: 60px;
	margin-bottom: 30px;
	text-align: center;
}
#form11{
	padding-top: 30px;
	text-align: center;
}
#form11 p{
	font-size: 18px;
}
#sub11{
	background-color: #94F0A3;
	font-weight: bold;
	padding: 5px 5px 5px 5px;
	font-size: 15px;
	margin-top: 20px;
	margin-bottom: 20px;

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
	font-size: 18px;
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

    </style>
</head>
<body>
	<script>
		function showd1(){
			element = document.getElementById("dropdown1");
			element.style.display="block";
			element1 = document.getElementById("dropdown2");
			element1.style.display="none";
		}
		function hided1(){
			element = document.getElementById("dropdown1");
			element.style.display="none";
		}
		function showd2(){
			element = document.getElementById("dropdown2");
			element.style.display="block";
			element1 = document.getElementById("dropdown1");
			element1.style.display="none";
		}
		function hided2(){
			element = document.getElementById("dropdown2");
			element.style.display="none";
		}
		function hideall(){
			element1 = document.getElementById("dropdown2");
			element1.style.display="none";
			element2 = document.getElementById("dropdown1");
			element2.style.display="none";
		}
		function showa(){
			element = document.getElementById("allcandidates");
			element.style.display="block";
			element = document.getElementById("qcandidates");
			element.style.display="none";
			element = document.getElementById("wcandidates");
			element.style.display="none";
			element = document.getElementById("ncandidates");
			element.style.display="none";
			element = document.getElementById("level1upload");
			element.style.display="none";
			element = document.getElementById("level2upload");
			element.style.display="none";
			element = document.getElementById("level3upload");
			element.style.display="none";
			element = document.getElementById("grade");
			element.style.display="none";
		}
		function showq(){
			element = document.getElementById("allcandidates");
			element.style.display="none";
			element = document.getElementById("qcandidates");
			element.style.display="block";
			element = document.getElementById("wcandidates");
			element.style.display="none";
			element = document.getElementById("ncandidates");
			element.style.display="none";
			element = document.getElementById("level1upload");
			element.style.display="none";
			element = document.getElementById("level2upload");
			element.style.display="none";
			element = document.getElementById("level3upload");
			element.style.display="none";
			element = document.getElementById("grade");
			element.style.display="none";
		}
		function showw(){
			element = document.getElementById("allcandidates");
			element.style.display="none";
			element = document.getElementById("qcandidates");
			element.style.display="none";
			element = document.getElementById("wcandidates");
			element.style.display="block";
			element = document.getElementById("ncandidates");
			element.style.display="none";
			element = document.getElementById("level1upload");
			element.style.display="none";
			element = document.getElementById("level2upload");
			element.style.display="none";
			element = document.getElementById("level3upload");
			element.style.display="none";
			element = document.getElementById("grade");
			element.style.display="none";
		}
		function shown(){
			element = document.getElementById("allcandidates");
			element.style.display="none";
			element = document.getElementById("qcandidates");
			element.style.display="none";
			element = document.getElementById("wcandidates");
			element.style.display="none";
			element = document.getElementById("ncandidates");
			element.style.display="block";
			element = document.getElementById("level1upload");
			element.style.display="none";
			element = document.getElementById("level2upload");
			element.style.display="none";
			element = document.getElementById("level3upload");
			element.style.display="none";
			element = document.getElementById("grade");
			element.style.display="none";
		}
		function show1(){
			element = document.getElementById("level1upload");
			element.style.display="block";
			element = document.getElementById("level2upload");
			element.style.display="none";
			element = document.getElementById("allcandidates");
			element.style.display="none";
			element = document.getElementById("qcandidates");
			element.style.display="none";
			element = document.getElementById("wcandidates");
			element.style.display="none";
			element = document.getElementById("ncandidates");
			element.style.display="none";
			element = document.getElementById("level3upload");
			element.style.display="none";
			element = document.getElementById("grade");
			element.style.display="none";
		}
		function show2(){
			element = document.getElementById("level1upload");
			element.style.display="none";
			element = document.getElementById("level2upload");
			element.style.display="block";
			element = document.getElementById("allcandidates");
			element.style.display="none";
			element = document.getElementById("qcandidates");
			element.style.display="none";
			element = document.getElementById("wcandidates");
			element.style.display="none";
			element = document.getElementById("ncandidates");
			element.style.display="none";
			element = document.getElementById("level3upload");
			element.style.display="none";
			element = document.getElementById("grade");
			element.style.display="none";
		}
		function show3(){
			element = document.getElementById("level3upload");
			element.style.display="block";
			element = document.getElementById("level1upload");
			element.style.display="none";
			element = document.getElementById("level2upload");
			element.style.display="none";
			element = document.getElementById("allcandidates");
			element.style.display="none";
			element = document.getElementById("qcandidates");
			element.style.display="none";
			element = document.getElementById("wcandidates");
			element.style.display="none";
			element = document.getElementById("ncandidates");
			element.style.display="none";
			element = document.getElementById("grade");
			element.style.display="none";
		}
		function showgrade(){
			element = document.getElementById("grade");
			element.style.display="block";
			element = document.getElementById("level3upload");
			element.style.display="none";
			element = document.getElementById("level1upload");
			element.style.display="none";
			element = document.getElementById("level2upload");
			element.style.display="none";
			element = document.getElementById("allcandidates");
			element.style.display="none";
			element = document.getElementById("qcandidates");
			element.style.display="none";
			element = document.getElementById("wcandidates");
			element.style.display="none";
			element = document.getElementById("ncandidates");
			element.style.display="none";

		}
	</script>
	<header>
    <div class="wrapper">
        <h1 id="heading">eTeach</h1>
        <nav>
            <ul>
                <li><a href="adminhome.php" id="white">Home</a></li>
                <li><a href="#" id="white">Contact Us</a></li>
                <li><a href="#" id="white">About Us</a></li>
                <li><a href="editgallery.php" id="white">Gallery</a></li>
                <li><a href="search.php" id="white">Search</a></li>
                <li><a href="logout.php" id="white">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>

<div>
	<div class="choose">
		<table width="100%">
			<tr>
				<td>
					<div id="a" onmouseover="showd1()">View Candidates
						<div id="dropdown1"  onmouseout="hided1()">
							<ul>
								<li><button onclick="shown()">New Candidates</button></li>
								<li><button onclick="showq()">Qualified Candidates</button></li>
								<li><button onclick="showw()">Waiting Candidates</button></li>
								<li><button onclick="showa()">All Candidates</button></li>
							</ul>
						</div>
					</div>
				</td>	
				<td>
					<div id="b" onmouseover="showd2()">Upload Questions
						<div id="dropdown2"  onmouseout="hided2()">
							<ul>
								<li><button onclick="show1()">Level 1</button></li>
								<li><button onclick="show2()">Level 2</button></li>
								<li><button onclick="show3()">Level 3</button></li>
							</ul>
						</div>
					</div>
				</td>	
				<td><button id="c" onclick="showgrade()" onmouseover="hideall()">Grade Candidates</button></td>
			</tr>
		</table>
	</div>
</div>


<div id="allcandidates">
	<div class="ctable">
		<h1>LIST OF ALL CANDIDATES</h1>
		<table width="100%">
			<tr>
				<td id="head">ID</td>
				<td id="head">Name</td>
				<td id="head">Email</td>
				<td id="head">Age</td>
				<td id="head">Gender</td>
				<td id="head">Level 1</td>
				<td id="head">Level 2</td>
				<td id="head">Level 3</td>
			</tr>
			<?php
			
			include("dbconnection.php");
			$sql = "SELECT COUNT(DISTINCT `username`) FROM `teachertbl` WHERE `role`='C'";
			$result=$connect->query($sql);
			$row=$result->fetch_assoc();
			$max = $row['COUNT(DISTINCT `username`)'];
			$sql = "SELECT * FROM `teachertbl` WHERE `role`='C'";
			$result=$connect->query($sql);
			for($i=0; $i<$max; $i++){
				$row=$result->fetch_assoc();
				$s1="";
				$s2="";
				$s3="";
				if($row['level1']=='NA'){
					$s1="Not Attempted";
				}
				else if($row['level1']=='A'){
					$s1=$row['level1marks']." (Not Qualified)";
				}
				else if($row['level1']=='Q'){
					$s1=$row['level1marks']." (Qualified)";
				}
				if($row['level2']=='NA'){
					$s2="Not Attempted";
				}
				else if($row['level2']=='A'){
					$s2=$row['level2marks']." (Not Qualified)";
				}
				else if($row['level2']=='Q'){
					$s2=$row['level2marks']." (Qualified)";
				}
				if($row['level3']=='NA'){
					$s3="Not Attempted";
				}
				else if($row['level3']=='A'){
					$s3=$row['level3marks']." (Not Qualified)";
				}
				else if($row['level3']=='Q'){
					$s3=$row['level3marks']." (Qualified)";
				}

				echo '<tr>
				<td id="inside">'.$row['tid'].'</td>
				<td id="inside">'.$row['name'].'</td>
				<td id="inside">'.$row['email'].'</td>
				<td id="inside">'.$row['age'].'</td>
				<td id="inside">'.$row['gender'].'</td>
				<td id="inside">'.$s1.'</td>
				<td id="inside">'.$s2.'</td>
				<td id="inside">'.$s3.'</td>
			</tr>';
			}
			?>
			
		</table>
	</div>
	
</div>

<div id="qcandidates">
	<div class="ctable">
		<h1>LIST OF QUALIFIED CANDIDATES</h1>
		<table width="100%">
			<tr>
				<td id="head">ID</td>
				<td id="head">Name</td>
				<td id="head">Email</td>
				<td id="head">Age</td>
				<td id="head">Gender</td>
				<td id="head">Level 1</td>
				<td id="head">Level 2</td>
				<td id="head">Level 3</td>
			</tr>
			<?php
			
			include("dbconnection.php");
			$sql = "SELECT COUNT(DISTINCT `username`) FROM `teachertbl` WHERE `role`='C' AND `level3`='Q'";
			$result=$connect->query($sql);
			$row=$result->fetch_assoc();
			$max = $row['COUNT(DISTINCT `username`)'];
			$sql = "SELECT * FROM `teachertbl` WHERE `role`='C' AND `level3`='Q'";
			$result=$connect->query($sql);
			for($i=0; $i<$max; $i++){
				$row=$result->fetch_assoc();
				$s1="";
				$s2="";
				$s3="";
				if($row['level1']=='NA'){
					$s1="Not Attempted";
				}
				else if($row['level1']=='A'){
					$s1=$row['level1marks']." (Not Qualified)";
				}
				else if($row['level1']=='Q'){
					$s1=$row['level1marks']." (Qualified)";
				}
				if($row['level2']=='NA'){
					$s2="Not Attempted";
				}
				else if($row['level2']=='A'){
					$s2=$row['level2marks']." (Not Qualified)";
				}
				else if($row['level2']=='Q'){
					$s2=$row['level2marks']." (Qualified)";
				}
				if($row['level3']=='NA'){
					$s3="Not Attempted";
				}
				else if($row['level3']=='A'){
					$s3=$row['level3marks']." (Not Qualified)";
				}
				else if($row['level3']=='Q'){
					$s3=$row['level3marks']." (Qualified)";
				}

				echo '<tr>
				<td id="inside">'.$row['tid'].'</td>
				<td id="inside">'.$row['name'].'</td>
				<td id="inside">'.$row['email'].'</td>
				<td id="inside">'.$row['age'].'</td>
				<td id="inside">'.$row['gender'].'</td>
				<td id="inside">'.$s1.'</td>
				<td id="inside">'.$s2.'</td>
				<td id="inside">'.$s3.'</td>
			</tr>';
			}
			?>
			
		</table>
	</div>
	
</div>


<div id="wcandidates">
	<div class="ctable">
		<h1>CANDIDATES IN WAITING LIST FOR SELECTION</h1>
		<table width="100%">
			<tr>
				<td id="head">ID</td>
				<td id="head">Name</td>
				<td id="head">Email</td>
				<td id="head">Age</td>
				<td id="head">Gender</td>
				<td id="head">Level 1</td>
				<td id="head">Level 2</td>
				<td id="head">Level 3</td>
			</tr>
			<?php
			
			include("dbconnection.php");
			$sql = "SELECT COUNT(DISTINCT `username`) FROM `teachertbl` WHERE `role`='C' AND `level3status`='NC' AND `level3`='A'";
			$result=$connect->query($sql);
			$row=$result->fetch_assoc();
			$max = $row['COUNT(DISTINCT `username`)'];
			$sql = "SELECT * FROM `teachertbl` WHERE `role`='C' AND `level3status`='NC' AND `level3`='A'";
			$result=$connect->query($sql);
			for($i=0; $i<$max; $i++){
				$row=$result->fetch_assoc();
				$s1="";
				$s2="";
				$s3="";
				if($row['level1']=='NA'){
					$s1="Not Attempted";
				}
				else if($row['level1']=='A'){
					$s1=$row['level1marks']." (Not Qualified)";
				}
				else if($row['level1']=='Q'){
					$s1=$row['level1marks']." (Qualified)";
				}
				if($row['level2']=='NA'){
					$s2="Not Attempted";
				}
				else if($row['level2']=='A'){
					$s2=$row['level2marks']." (Not Qualified)";
				}
				else if($row['level2']=='Q'){
					$s2=$row['level2marks']." (Qualified)";
				}
				if($row['level3']=='NA'){
					$s3="Not Attempted";
				}
				else if($row['level3']=='A'){
					$s3=$row['level3marks']." (Not Qualified)";
				}
				else if($row['level3']=='Q'){
					$s3=$row['level3marks']." (Qualified)";
				}

				echo '<tr>
				<td id="inside">'.$row['tid'].'</td>
				<td id="inside">'.$row['name'].'</td>
				<td id="inside">'.$row['email'].'</td>
				<td id="inside">'.$row['age'].'</td>
				<td id="inside">'.$row['gender'].'</td>
				<td id="inside">'.$s1.'</td>
				<td id="inside">'.$s2.'</td>
				<td id="inside">'.$s3.'</td>
			</tr>';
			}
			?>
			
		</table>
	</div>
	
</div>

<div id="ncandidates">
	<div class="ctable">
		<h1>LIST OF NEW CANDIDATES</h1>
		<table width="100%">
			<tr>
				<td id="head">ID</td>
				<td id="head">Name</td>
				<td id="head">Email</td>
				<td id="head">Age</td>
				<td id="head">Gender</td>
			</tr>
			<?php
			
			include("dbconnection.php");
			$sql = "SELECT COUNT(DISTINCT `username`) FROM `teachertbl` WHERE `role`='C' AND `level1`='NA'";
			$result=$connect->query($sql);
			$row=$result->fetch_assoc();
			$max = $row['COUNT(DISTINCT `username`)'];
			$sql = "SELECT * FROM `teachertbl` WHERE `role`='C' AND `level1`='NA'";
			$result=$connect->query($sql);
			for($i=0; $i<$max; $i++){
				$row=$result->fetch_assoc();
				

				echo '<tr>
				<td id="inside">'.$row['tid'].'</td>
				<td id="inside">'.$row['name'].'</td>
				<td id="inside">'.$row['email'].'</td>
				<td id="inside">'.$row['age'].'</td>
				<td id="inside">'.$row['gender'].'</td>
			</tr>';
			}
			?>
			
		</table>
	</div>
	
</div>

<div id="level1upload">
	<div class="ucontents">
		<h2>LEVEL 1 QUESTIONS</h2>
		<form name="form7" action="upload1.php" method="POST">
			<p>Question:</p>
			<textarea name="ques" rows="10" cols="90">Type Your Question here...</textarea><br>
			<br>
			<p>OptionA:  <input type="text" name="opa"></p><br>
			<p>OptionB:  <input type="text" name="opb"></p><br>
			<p>OptionC:  <input type="text" name="opc"></p><br>
			<p>OptionD:  <input type="text" name="opd"></p><br>
			<p>Answer:   <select id="ans" name="ans">
			  <option value="A">Option A</option>
			  <option value="B">Option B</option>
			  <option value="C">Option C</option>
			  <option value="D">Option D</option>
			</select></p>
			<div style="text-align: center;">
				<input type="submit" name="sub8" value="Upload" id="sub8">
			</div>
		</form>
	</div>
</div>

<div id="level2upload">
	<div class="ucontents">
		<h2>LEVEL 2 QUESTIONS</h2>
		<form name="form8" action="upload2.php" method="POST">
			<p>Field: <select id="field" name="field">
			  <option value="physics">Physics</option>
			  <option value="chemistry">Chemistry</option>
			  <option value="biology">Biology</option>
			</select></p>
			<br>
			<p>Question:</p>
			<textarea name="ques" rows="10" cols="90">Type Your Question here...</textarea><br>
			<br>
			<p>OptionA:  <input type="text" name="opa"></p><br>
			<p>OptionB:  <input type="text" name="opb"></p><br>
			<p>OptionC:  <input type="text" name="opc"></p><br>
			<p>OptionD:  <input type="text" name="opd"></p><br>
			<p>Answer:   <select id="ans" name="ans">
			  <option value="A">Option A</option>
			  <option value="B">Option B</option>
			  <option value="C">Option C</option>
			  <option value="D">Option D</option>
			</select></p>
			<div style="text-align: center;">
				<input type="submit" name="sub9" value="Upload" id="sub9">
			</div>
		</form>
	</div>
</div>


<div id="level3upload">
	<div class="ucontents">
		<h2>LEVEL 3 QUESTIONS</h2>
		<form name="form9" action="upload3.php" method="POST"  enctype="multipart/form-data">
			<p>Field: <select id="field" name="field">
			  <option value="physics">Physics</option>
			  <option value="chemistry">Chemistry</option>
			  <option value="biology">Biology</option>
			</select></p>
			<br>
			<p>Question:</p>
			<textarea name="ques" rows="15" cols="90">Type Your Question here and upload any necessary image associated with the question...</textarea><br>
			<br>
			<p>Image(If necessary):</p>
			<input type="file" name="image" id="image">
			
			<div style="text-align: center;">
				<input type="submit" name="sub10" value="Upload" id="sub10">
			</div>
		</form>
	</div>
</div>


<div id="grade">
    <div class="gcontents">
        <h2>LIST OF STUDENTS WITH UNCHECKED LEVEL 3 QUIZ</h2>
        <table width="100%">
			<tr>
				<td id="head">ID</td>
				<td id="head">Name</td>
				<td id="head">Username</td>
				<td id="head">Level 1 marks</td>
				<td id="head">Level 2 marks</td>
			</tr>
			<?php
			
			include("dbconnection.php");
			$sql = "SELECT COUNT(DISTINCT `username`) FROM `teachertbl` WHERE `role`='C' AND `level3status`='NC' AND `level3`='A'";
			$result=$connect->query($sql);
			$row=$result->fetch_assoc();
			$max = $row['COUNT(DISTINCT `username`)'];
			$sql = "SELECT * FROM `teachertbl` WHERE `role`='C' AND `level3status`='NC' AND `level3`='A'";
			$result=$connect->query($sql);
			for($i=0; $i<$max; $i++){
				$row=$result->fetch_assoc();
				
				echo '<tr>
				<td id="inside">'.$row['tid'].'</td>
				<td id="inside">'.$row['name'].'</td>
				<td id="inside">'.$row['username'].'</td>
				<td id="inside">'.$row['level1marks'].'</td>
				<td id="inside">'.$row['level2marks'].'</td>
				
			</tr>';
			}
			?>
			
		</table>

		<form name="form11" action="getname.php" method="POST" id="form11">
			<p>Enter the username of the candidate whose paper you want to correct:  <input type="text" name="user"></p>
			<input type="submit" name="sub11" id="sub11">
		</form>
    </div>
</div>

<!--<div id="answersheet">
	<div class="row" id="insideans">
		<div class="col-md-8">
		<p id="q">Q1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div class="col-md-4">
		<img src="qimage3.jpg">
	</div>
	
	</div>

	<p style="padding-left: 60px;"><b>ANSWER 1:</b></p>
	<p id="answered">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
	
</div>-->





</body>
</html>