<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Customer Home page</title>
	<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <style>
    	#marks1, #marks2{
    		width: 40%;
    		left: 30%;
    		position: absolute;
    		background-color: black; 
    		font-family: 'Crete Round', serif;
    		border-radius: 3px;
    		border: 3px solid ;
    		padding: 20px 20px 20px 20px;
    		color: white;
    		font-size: 15px;
    		top: 100px;
    		display: none;
    	}
    	#m{
    		margin-top: 10px;
    		color: #0A6941;
    		font-family: 'Crete Round', serif;
    		font-size: 20px;
    		;
    	}
    	#select{
    		display: none;
    	}
    	#select2{
    		display: none;
    	}
    	#select0{
    		display: none;
    	}
    	.attempted0, .subject0{
    		position: absolute;
    		top: 200px;
    		width: 40%;
    		background-color: #B4E859;
    		padding-left: 30px;
    		
    		padding-bottom: 20px;
    		left: 30%;
    		border: 5px solid #72A11F;
    		border-radius: 5px;
    		color: black;
    		font-size: 20px;
    		font-family: 'Crete Round', serif;
    		text-align: center;
    	}
    	.failmsg2, .subject2, .attempted2{
    		position: absolute;
    		top: 800px;
    		width: 40%;
    		background-color: #B4E859;
    		padding-left: 30px;
    		
    		padding-bottom: 20px;
    		left: 30%;
    		border: 5px solid #72A11F;
    		border-radius: 5px;
    		color: black;
    		font-size: 20px;
    		font-family: 'Crete Round', serif;
    		text-align: center;
    	}
    	.failmsg, .subject, .attempted{
    		position: absolute;
    		top: 600px;
    		width: 40%;
    		background-color: #B4E859;
    		padding-left: 30px;
    		
    		padding-bottom: 20px;
    		left: 30%;
    		border: 5px solid #72A11F;
    		border-radius: 5px;
    		color: black;
    		font-size: 20px;
    		font-family: 'Crete Round', serif;
    		text-align: center;
    	}
    	#sub5, #sub6, #sub7{
    		font-family: 'Crete Round', serif;
    		background-color: green;
    		color: white;
    		font-size: 18px;
    		padding: 5px 5px 5px 5px;
    	}
    	#sub5:hover{
    		background-color: white;
    		color: black;
    	}
    </style>
</head>
<body>
	<script>
		function hidemarks1(){
			element = document.getElementById("marks1");
			element.style.display="none";

		}
		function showmarks1(){
			element = document.getElementById("marks1");
			element.style.display="block";

		}
		function hidemarks2(){
			element = document.getElementById("marks2");
			element.style.display="none";

		}
		function showmarks2(){
			element = document.getElementById("marks2");
			element.style.display="block";

		}
		function showdash(){
			var element1 = document.getElementById("op1");
			var element2 = document.getElementById("op2");
			element1.style.display = "block";
			element2.style.display = "none";
		}
		function showscores(){
			var element2 = document.getElementById("op1");
			var element1 = document.getElementById("op2");
			element1.style.display = "block";
			element2.style.display = "none";
		}
		function showmessage0(){
			var element = document.getElementById("select0");
			element.style.display="block";
		}
		function showmessage(){
			var element = document.getElementById("select");
			element.style.display="block";
		}
		function hidemessage(){
			var element = document.getElementById("select");
			element.style.display="none";
		}
		function showmessage2(){
			var element = document.getElementById("select2");
			element.style.display="block";
		}
		function hidemessage2(){
			var element = document.getElementById("select2");
			element.style.display="none";
		}
		function hidemessage0(){
			var element = document.getElementById("select0");
			element.style.display="none";
		}
		function hideattempt(){
			var element = document.getElementById("select");
			element.style.display="none";
		}
		function hideattempt2(){
			var element = document.getElementById("select2");
			element.style.display="none";
		}
		function hideattempt0(){
			var element = document.getElementById("select0");
			element.style.display="none";
		}

	</script>
	<header>
    <div class="wrapper">
        <h1 id="heading">eTeach</h1>
        <nav>
            <ul>
                <li><a href="custhome.php">Home</a></li>
                <li><a href="profilepage.php">My Profile</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>

<div>
	<div class="choose">
		<table width="100%">
			<tr>
				<td><button id="dash" onclick="showdash()">Dashboard</button></td>
				<td><button id="sc" onclick="showscores()">View Scores</button></td>
			</tr>
		</table>
	</div>
</div>

<div class="wrapper">
	<div class="dashboard" id="op1">
		<div id="test1">
			<h2>Level 1 (Preliminary Test)</h2>
			<p>This is the first level test for recruitment of any aspiring teachers for any subject. Every candidate must attempt this test before moving on to any further levels of examination.</p>
			<p>The test comprises 20 Multiple Choice Questions(MCQs) with 4 options for each question. They will be single answer correct type questions with <b>NO negative marking.</b></p>
			<p>These will be basic questions related to all primary subjects such as Science , Maths, Logical Reasoning, Aptitude, General Knowledge, etc. to assess the basic requirements of the individual for becoming a teacher.</p>
			<button onclick="showmessage0()">Attempt</button>
		</div>
		<div id="test2">
			<h2>Level 2 (Subject Specific Test)</h2>
			<p>This is the level 2 test which can only be attempted by candidates who have secured qualifying marks in the level 1 preliminary test.</p>
			<p>The candidate can choose a particular field as per his comfort. Questions will be asked only from that subject/field. The test comprises 20 Multiple Choice Questions(MCQs) with 4 options for each question. They will be single answer correct type questions with <b>negative marking, i.e., 25% of the marks will be deducted for each wrong answer.</b></p>
			<p>There will be 5 easy level questions, 10 medium level questions and 5 difficult type questions related to the subject chosen by the candidate.</p>
			<button onclick="showmessage()">Attempt</button>
		</div>
		<div id="test3">
			<h2>Level 3 (Subjective Test)</h2>
			<p>This is the level 3, i.e., the final level examination for selection of the teachers. his can only be attempted when the candidate has secured qualifying marks in both the level 1 and level 2 examinations.</p>
			<p>The candidate will again be asked to choose the subject from which he prefers to receive the questions. Questions will be asked only from that particular subject.</p>
			<p>There will bw 3 subjective type questions. The questions may be descriptive, may e=require numerical calculations, diagrams or all of the above. The candidate can type his answer in the textbox provided or may uploaded a scanned copy of his handwritten answer as well using the upload answer option button.</p>
			<button onclick="showmessage2()">Attempt</button>
		</div>
	</div>
</div>

<div class="wrapper">
	<div class="scores" id="op2">

		<?php
		include("dbconnection.php");
		$username = $_SESSION["u"];
		$sql = "SELECT * FROM `test1` WHERE `username`='$username'";
		$result=$connect->query($sql);
		$i=1;
		echo '<div id="marks1">
		<img src="close.png" style="margin-left: 95%; margin-top: 0px;" onclick="hidemarks1()">';
		while($i<=5){
			
			$row=$result->fetch_assoc();
			$qno = $row['qno'];
			$sql1="SELECT * FROM `level1` WHERE `qno`='$qno'";
			$result1=$connect->query($sql1);
			$row1=$result1->fetch_assoc();
			echo '<p>Q'.$i.' '.$row1['question'].'</p>';
			echo '<p>Correct Answer: '.$row['correctanswer'].'</p>';
			echo '<p>Your Answer: '.$row['youranswer'].'</p>';
			echo '<p>Marks awarded: '.$row['marks'].'</p><br>';
			$i++;

		}
		echo '</div>';
		$sql2 = "SELECT * FROM `teachertbl` WHERE `username` = '$username'";
		$result2=$connect->query($sql2);
		$row2=$result2->fetch_assoc();
		$marks = $row2['level1marks'];
		$s=$row2['level1'];
		$status="";
		if($s=='A'){
			$status = "Marks obtained: ".$marks." (Not Qualified)";
		}
		else if($s=="NA"){
			$status = "Not Attempted";
		}
		else if($s=="Q"){
			$status = "Marks obtained: ".$marks." (Qualified)";
		}

		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$sql = "SELECT * FROM `test2` WHERE `username`='$username'";
		$result=$connect->query($sql);
		$i=1;
		echo '<div id="marks2">
		<img src="close.png" style="margin-left: 95%; margin-top: 0px;" onclick="hidemarks2()">';
		while($i<=5){
			
			$row=$result->fetch_assoc();
			$qno = $row['qno'];
			$sql1="SELECT * FROM `level2` WHERE `qno`='$qno'";
			$result1=$connect->query($sql1);
			$row1=$result1->fetch_assoc();
			echo '<p>Q'.$i.' '.$row1['question'].'</p>';
			echo '<p>Correct Answer: '.$row['correctanswer'].'</p>';
			echo '<p>Your Answer: '.$row['youranswer'].'</p>';
			echo '<p>Marks awarded: '.$row['marks'].'</p><br>';
			$i++;

		}
		echo '</div>';
		$sql2 = "SELECT * FROM `teachertbl` WHERE `username` = '$username'";
		$result2=$connect->query($sql2);
		$row2=$result2->fetch_assoc();
		$marks = $row2['level2marks'];
		$s=$row2['level2'];
		$status1="";
		if($s=='A'){
			$status1 = "Marks obtained: ".$marks." (Not Qualified)";
		}
		else if($s=="NA"){
			$status1 = "Not Attempted";
		}
		else if($s=="Q"){
			$status1 = "Marks obtained: ".$marks." (Qualified)";
		}
		$status3="";
		if($row2['level3']=='NA'){
			$status3 = "Not Attempted";
		}
		else if($row2['level3']=='A' && $row2['level3status']=='NC'){
			$status3 = "Waiting for Correction";
		}
		else if($row2['level3']=='A' && $row2['level3status']=="C"){
			$status3 = "Marks Obtained: ".$row2['level3marks']." (Not Qualified)";
		}
		else if($row2['level3']=='Q' && $row2['level3status']=="C"){
			$status3 = "Marks Obtained: ".$row2['level3marks']." (Qualified)";
		}


		echo '<h2>Level 1 (Preliminary Test)</h2>
		<p id="m">'.$status.'</p>
		<br>
		<button onclick="showmarks1()">Details</button>
		<h2>Level 2 (Subject Specific Test)</h2>
		<p id="m">'.$status1.'</p>
		<br>
		<button onclick="showmarks2()">Details</button>
		<h2>Level 3 (Subjective Test)</h2>
		<p id="m">'.$status3.'</p>
		<a href="answerscript2.php"><button>Details</button></a>';
			

		?>
	</div>
</div>

<div id="select0">
	<?php
		include("dbconnection.php");
	$username = $_SESSION["u"];
	$sql = "SELECT * FROM `teachertbl` WHERE `username` = '$username'";
	$result=$connect->query($sql);
	$row=$result->fetch_assoc();

	if($row['level1']=='NA'){
		echo '<div class="subject0">
		<img src="close.png" style="margin-left: 95%; margin-top: 0px;" onclick="hidemessage0()">
	<h3>Are you sure you want to start test?</h3>
	<form name="form7" action="startprocess0.php" method="POST">
		
		<input type="submit" name="sub7" value="Start Test" id="sub7">

	</form>
</div>
';
	}
	else{
		echo "<div class='attempted0'>
		<img src='close.png' style='margin-left: 95%; margin-top: 0px;' onclick='hideattempt0()'>
		<p id='msg'>You have already attempted LEVEL 1 quiz.</p>
		<p id='msg'>Better luck next time!</p></div>";
	}

	?>
</div>

<div id="select">
	<?php
	include("dbconnection.php");
	$username = $_SESSION["u"];
	$sql = "SELECT * FROM `teachertbl` WHERE `username` = '$username'";
	$result=$connect->query($sql);
	$row=$result->fetch_assoc();

	if($row['level2']=='NA'){
		if($row['level1']=='Q'){
		echo '<div class="subject">
		<img src="close.png" style="margin-left: 95%; margin-top: 0px;" onclick="hidemessage()">
	<h3>Choose your preferred subject/field for level 2 quiz:</h3>
	<form name="form4" action="subjectprocess.php" method="POST">
		<input type="radio" id="physics" name="subject2" value="physics">
		<span>Physics</span>
		<input type="radio" id="chemistry" name="subject2" value="chemistry">
		<span>Chemistry</span>
		<input type="radio" id="biology" name="subject2" value="biology">
		<span>Biology</span>
		<br>
		<br>
		<input type="submit" name="sub5" value="Start Test" id="sub5">

	</form>
</div>';
	}
	else{
		echo "<div class='failmsg'>
		<img src='close.png' style='margin-left: 95%; margin-top: 0px;' onclick='hidemessage()'>
		<p id='msg'>You cannot attempt LEVEL 2 QUIZ since you have not secured enough marks to qualify LEVEL1.</p>
		<p id='msg'>Better luck next time!</p></div>";
	}
	}
	else if($row['level2']=='A'||$row["level2"]=='Q'){
		echo "<div class='attempted'>
		<img src='close.png' style='margin-left: 95%; margin-top: 0px;' onclick='hideattempt()'>
		<p id='msg'>You have already attempted LEVEL 2 quiz.</p>
		<p id='msg'>Better luck next time!</p></div>";
	}

	
	?>
</div>

<div id="select2">
	<?php
	include("dbconnection.php");
	$username = $_SESSION["u"];
	$sql = "SELECT * FROM `teachertbl` WHERE `username` = '$username'";
	$result=$connect->query($sql);
	$row=$result->fetch_assoc();
	if($row['level3']=='NA'){
		if($row['level2']=='Q'){
		echo '<div class="subject2">
		<img src="close.png" style="margin-left: 95%; margin-top: 0px;" onclick="hidemessage2()">
	<h3>Choose your preferred subject/field for level 2 quiz:</h3>
	<form name="form4" action="subjectprocess2.php" method="POST">
		<input type="radio" id="physics" name="subject3" value="physics">
		<span>Physics</span>
		<input type="radio" id="chemistry" name="subject3" value="chemistry">
		<span>Chemistry</span>
		<input type="radio" id="biology" name="subject3" value="biology">
		<span>Biology</span>
		<br>
		<br>
		<input type="submit" name="sub6" value="Start Test" id="sub6">

	</form>
</div>';
	}
	else{
		echo "<div class='failmsg2'>
		<img src='close.png' style='margin-left: 95%; margin-top: 0px;' onclick='hidemessage2()'>
		<p id='msg'>You cannot attempt LEVEL 3 QUIZ since you have not secured enough marks to qualify LEVEL2.</p>
		<p id='msg'>Better luck next time!</p></div>";
	}
	}
	else{
		echo "<div class='attempted2'>
		<img src='close.png' style='margin-left: 95%; margin-top: 0px;' onclick='hideattempt2()'>
		<p id='msg'>You have already attempted LEVEL 3 quiz.</p>
		<p id='msg'>Better luck next time!</p></div>";
	}

	
	?>
</div>


</body>
</html>

