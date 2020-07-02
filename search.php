<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>search page</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style1.css">
<style>
	body {
    background-color: black;
    font: normal 15px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
    color: white;
}
#profile
{
	background-color: black;
}
#prpic{
	width: 120px;
	height: 120px;
	border-radius: 60px;
	/*margin-left: 40%;*/
}
.wrapper2 {
    margin: 0 auto;
    padding: 0 10px;
    width: 50%;
    background-color: gray;
    padding-top: 60px;
    padding-left: 30px; 
    padding-bottom: 50px;
}
#name{
	font-family: 'Crete Round', serif;
	font-size: 30px;
	/*margin-left: 18%;*/
	color: black;
	/*padding-left: 70px;*/
}
#left{
	font-family: 'Crete Round', serif;
	font-size: 20px;
	color: black;
}
#right{
	font-family: 'Crete Round', serif;
	font-size: 15px;
	color: white;
	padding-left: 20px;
}
#adjust{
	margin: auto;
	text-align: center;
}
#editbu{
	margin-bottom: 30px;
	font-size: 20px;
	font-family: 'Crete Round', serif;
	background-color: #36BFCA;
	color: white;
	padding-top: 4px;
	padding-bottom: 4px;

}
#editbu:hover{
	background-color: white;
	color: #36BFCA;
	font-weight: bold;
}
#edit{
	margin: auto;
	text-align: center;
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
.mainbody{
	width: 50%;
	margin: auto;
	text-align: center;
	padding-top: 60px;
}
.mainbody p{
	font-size: 25px;
	font-weight: bold;
	font-family: 'Crete Round', serif;
	margin-bottom: 20px;
}
.mainbody input{
	margin-left: 10px;
	margin-bottom: 20px;
}
#searchbar{
	width: 50%;
	height: 30px;
	padding-left: 20px;
	border-radius: 10px;
}
#sub16{
	background-color: lightblue;
	color: black;
	font-weight: bold;
	padding: 5px;
	border-radius: 10px;
}
#sub16:hover{
	background-color: white;
}

</style>

</head>
<body>
	
	<header style="background-color: #166523;">
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

<div class="mainbody">
	<form name="form15" action="searchprocess.php" method="POST">
		<p>Enter criteria for search:</p>
		<input type="radio" id="getuser" name="criteria" value="username">Candidate Username
				<input type="radio" id="no1" name="criteria" value="name">Candidate Name
				<input type="radio" id="no1" name="criteria" value="id">Unique Id
				<br><br>
		<input type="text" name="getinput" placeholder="search..." id="searchbar">
		<input type="submit" name="sub16" value="Search" id="sub16">
	</form>
</div>


<?php
$connect="";
$connect = new mysqli("localhost", "root", "", "iwpproject");
if($connect -> connect_errno)
{
	echo "Could not connect db";
}
if($_SESSION["criteria"]!=""){
	if($_SESSION["criteria"]==1){
	$username = $_SESSION["susername"];
	$sql = "SELECT * FROM `teachertbl` WHERE `username` = '$username'";
	$result=$connect->query($sql);
	$row=$result->fetch_assoc(); 
}
else if($_SESSION["criteria"]==2){
	$name = $_SESSION["sname"];
	$sql = "SELECT * FROM `teachertbl` WHERE `name` = '$name'";
	$result=$connect->query($sql);
	$row=$result->fetch_assoc(); 
}
else if($_SESSION["criteria"]==3){
	$id = $_SESSION["sid"];
	$sql = "SELECT * FROM `teachertbl` WHERE `tid` = '$id'";
	$result=$connect->query($sql);
	$row=$result->fetch_assoc(); 
}

if($row==0){
	echo "<h3 style='width: 50%; margin: auto; text-align: center; font-weight: bold; font-size:25px; margin-top: 30px;'>Candidate not found!</h3>";
}
else{
	echo '<div id="profile">
    <div class="wrapper2">
        <div id="adjust"><img src="data:image/jpg;base64,'.base64_encode($row['profilepic']).'" id="prpic">
        <p id="name">'.$row['name'].'</p></div>
        
        <br>
<table>
            <tr>
                <td id="left">Unique Id:</td>

                <td id="right">'.$row['tid'].'</td>
            </tr>
            <tr>
                <td id="left">Username:</td>
                <td id="right">'.$row['username'].'</td>
            </tr>
            <tr>
                <td id="left">Password:</td>
                <td id="right">'.$row['password'].'</td>
            </tr>
            <tr>
                <td id="left">Date of Birth:</td>
                <td id="right">'.$row['dob'].'</td>
            </tr>
            <tr>
                <td id="left">Age:</td>
                <td id="right">'.$row['age'].'</td>
            </tr>
            <tr>
                <td id="left">Gender:</td>
                <td id="right">'.$row['gender'].'</td>
            </tr>
            <tr>
                <td id="left">Email:</td>
                <td id="right">'.$row['email'].'</td>
            </tr>
            <tr>
                <td id="left">Mobile No:</td>
                <td id="right">'.$row['mobno'].'</td>
            </tr>
            <tr>
                <td id="left">Address:</td>
                <td id="right">'.$row['address'].'</td>
            </tr>
            <tr>
                <td id="left">Educational Qualification:</td>
                <td id="right">'.$row['education'].'</td>
            </tr>
            <tr>
                <td id="left">Working Experience:</td>
                <td id="right">'.$row['work'].'</td>
            </tr>
            <tr>
                <td id="left">Additional Skills:</td>
                <td id="right">'.$row['skills'].'</td>
            </tr>
        </table>
        <br>
    <br>
    
</div>
</div>';
}

}

        


?>
</body>
</html>