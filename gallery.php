<!DOCTYPE html>
<html>
<head>
	<title>gallery</title>
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
	<style>
		body{
			background: url(back18.jpg) no-repeat;
			background-size: cover;
			font-family: 'Berkshire Swash';

		}
		#heading{
			margin-top: 60px;
			padding-top: 30px;
			margin: auto;
			text-align: center;
			font-size: 60px;
			border-bottom: 2px solid black;
			width: 60%;
			padding-bottom: 30px;
		}
		.image1{
			text-align: left;
			margin-left: 7%;
		}
		.image2{
			text-align: right;
			margin-left: 20%;
		}
		#name{
			background-color: #A1D627;
			padding-top: 10px;
			padding-bottom: 10px;
			text-align: center;
			width: 40%;
			margin-bottom: 0px;
			border-radius: 50px;
		}
		#name1{
			background-color: #E9F25A;
			padding-top: 10px;
			padding-bottom: 10px;
			text-align: center;
			width: 40%;
			margin-bottom: 0px;
			border-radius: 50px;
			margin-left: 42%;
		}
		#desc{
			background-color: #0D1F6B;
			opacity: 0.7;
			position: absolute;
			width: 400px;
			border-radius: 100px;
			padding: 50px;
			/*top: 280px;*/
			left: 60%;
			box-shadow: 10px 10px 10px 10px white;
		}
		#desc1{
			background-color: #0D1F6B;
			opacity: 0.7;
			position: absolute;
			width: 400px;
			border-radius: 100px;
			padding: 50px;
			/*top: 880px;*/
			right: 60%;
			box-shadow: 10px 10px 10px 10px white;
		}
		#desc p, #desc1 p{
			color: white;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<p id="heading">Our Gallery</p>
	<!--<div class="container">
		<div class="image1">
			<h1 id="name">Earth Day 2016</h1>
			<div style="background-color: #E9F25A; height: 490px; width: 80%; border: 10px solid white;">
			<img src="back17.jpg" width="95%" height="90%" style="margin: auto; margin-left: 2.5%; margin-right: 2.5%; margin-top: 2.5%; margin-bottom: 2.5%;">
			</div>
			<div id="desc">
				<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
			</div>
		</div>
		
	</div>
	<div class="container1" style="text-align: right;">
		<div class="image2" style="width: 90%;">
			<h1 id="name1">Earth Day 2016</h1>
			<div style="background-color: #A1D627; height: 490px; width: 80%; border: 10px solid white;">
			<img src="back17.jpg" width="95%" height="90%" style="margin: auto; margin-left: 2.5%; margin-right: 2.5%; margin-top: 2.5%; margin-bottom: 2.5%;">
			</div>
			<div id="desc1">
				<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
			</div>
		</div>
	</div>-->

	<?php
		session_start();
		$connect="";
		$connect = new mysqli("localhost", "root", "", "iwpproject");
		if($connect -> connect_errno)
		{
			echo "Could not connect db";
		}
		$sql="SELECT COUNT(DISTINCT `imgno`) FROM `gallery`";
		$result=$connect->query($sql);
		$row=$result->fetch_assoc();
		$max= $row['COUNT(DISTINCT `imgno`)'];
		$sql = "SELECT * FROM `gallery`";
		$result=$connect->query($sql);
		

		$max= $max/2;
		$top=280;
		for($i=0; $i<$max; $i++){
			$row=$result->fetch_assoc(); 
			if($row!=0){
				echo '<div class="container">
		<div class="image1">
			<h1 id="name">'.$row['title'].'</h1>
			<div style="background-color: #E9F25A; height: 490px; width: 80%; border: 10px solid white;">
			<img src="data:image/jpg;base64,'.base64_encode($row['image']).'" width="95%" height="90%" style="margin: auto; margin-left: 2.5%; margin-right: 2.5%; margin-top: 2.5%; margin-bottom: 2.5%;">
			</div>
			<div id="desc" style="top: '.$top.'px;">
				<P>'.$row['description'].'</P>
			</div>
		</div>
		
	</div> ';
	$top = $top+600;
			}
			
	$row=$result->fetch_assoc(); 
	if($row!=0){
		echo '<div class="container1" style="text-align: right;">
		<div class="image2" style="width: 90%;">
			<h1 id="name1">'.$row['title'].'</h1>
			<div style="background-color: #A1D627; height: 490px; width: 80%; border: 10px solid white;">
			<img src="data:image/jpg;base64,'.base64_encode($row['image']).'" width="95%" height="90%" style="margin: auto; margin-left: 2.5%; margin-right: 2.5%; margin-top: 2.5%; margin-bottom: 2.5%;">
			</div>
			<div id="desc1" style="top: '.$top.'px;">
				<P>'.$row['description'].'</P>
			</div>
		</div>
	</div>';	
	$top = $top+600;
	}
	
	
		}

	?>
</body>
</html>
