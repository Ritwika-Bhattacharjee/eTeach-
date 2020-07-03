<?php
$name = $_POST["name"];
$email = $_POST["email"];
$mobno = $_POST["mobno"];
$query = $_POST["query"];
	require 'phpmailer/PHPMailerAutoload.php';
	require 'phpmailer/class.smtp.php';
	require 'phpmailer/class.phpmailer.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 25;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';

	$mail->Username='riya19262619@gmail.com';
	$mail->Password='####YOUR PASSWORD####';

	$mail->setFrom('ritspure@gmail.com');
	$mail->addAddress('cheesemadhucrackers@gmail.com');
	$mail->addReplyTo($email);

	$mail->isHTML(true);
	$mail->Subject="Complaint/Query From eTeach Customer";
	$mail->Body='<h2>Name: '.$name.'</h2><br><p>Query/Complaint: '.$query.'</p><br><p>Contact No: '.$mobno.'</p><p>Email: '.$email.'</p>';
	$result = $mail->send();
	if(!$mail->send()){
		echo "Message Send failed";
	}
	else{
		echo "Message Send Successful". $mail->ErrofInfo;
	}
?>

<!--<?php/*
$to = 'cheesemadhucrackers@gmail.com';
$subject = 'Hello from XAMPP!';
$message = 'This is a test';
$headers = "From: riya19262619@gmail.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}-->*/