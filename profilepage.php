<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Profile page</title>
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
    <script>
        function showedit(){
            element1= document.getElementById("editprofile");
            element2= document.getElementById("profile");
            element1.style.display="block"; 
            element2.style.display="none";           

        }
        function showprofile(){
            element2= document.getElementById("editprofile");
            element1= document.getElementById("profile");
            element1.style.display="block";
            element2.style.display="none";            

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



        <?php
        include("dbconnection.php");
                $user = $_SESSION["u"];
                $sqll="SELECT * from `teachertbl` where `username` = '$user'";
$result=$connect->query($sqll);
$row=$result->fetch_assoc();
$row1 = mysqli_fetch_array($result);

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
    <div id="edit"><button id="editbu" onclick="showedit()">Edit Profile</button></div>
</div>
</div>';
        ?>
        
    
<div id="editprofile">
<div class="wrapper3">
    <!-- enctype="multipart/form-data"-->
    <form name="myform1" action="editprocess.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Profile Photo:</td>
                <td><input type="file" name="image" id="image"></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr><tr>
                <td>Password:</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="text" name="dob"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="text" name="gender"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td><input type="text" name="mobno"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Educational Qualification:</td>
                <td><input type="text" name="education"></td>
            </tr>
            <tr>
                <td>Working Experience:</td>
                <td><input type="text" name="work"></td>
            </tr>
            <tr>
                <td>Additional Skills:</td>
                <td><input type="text" name="skills"></td>
            </tr>

        </table>
        <br>
        <div id="edit"><input type="submit" name="sub1" id="sub1" value="Update" onclick="showprofile();"></div>
    </form>
</div>
</div>

</body>
</html>