<?php 
require_once("connection.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer-master/PHPMailer-master/src/Exception.php');
require('PHPMailer-master/PHPMailer-master/src/PHPMailer.php');
require('PHPMailer-master/PHPMailer-master/src/SMTP.php');
$otp=rand(1000,100000);
$mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(true); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // "ssl" secure transfer enabled REQUIRED for GMail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // 465 or 587
    $mail->IsHTML(true);
    $mail->Username = "nipun.testing11@gmail.com";
    $mail->Password = "Sadeepa@11";
    $mail->SetFrom("nipun.testing11@gmail.com");
    $mail->Subject = "One Time Password From Authentication System";
    $mail->Body = "Hey Welcome USER.. <br><br> Your Confirmation One Time Password is : {$otp}. <br><br> Enter this OTP to mark your Attendance..<br><br>
    				";
    $mail->AddAddress("nipunsadeepa10@gmail.com");
    if(!$mail->Send()){
    	echo 'Error : ' . $mail->ErrorInfo;
    }else{
    	echo "sent succesfully";
    }

    

// <?php
// // Import PHPMailer classes into the global namespace
// // These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// // Load Composer's autoloader
// require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
 /*if(isset($_POST['submit'])){
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
	    $mail->isSMTP();                                            // Set mailer to use SMTP
	    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'nipunsadeepa10@gmail.com';                     // SMTP username
	    $mail->Password   = 'sadeepa10';                               // SMTP password
	    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
	    $mail->Port       = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('nipunsadeepa10@gmail.com', 'Admin');
	    $mail->addAddress('nipun.testing11@gmail.com', 'testing');     // Add a recipient
	    // $mail->addAddress('ellen@example.com');               // Name is optional
	    $mail->addReplyTo('nipunsadeepa10@gmail.com', 'Admin');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    // Attachments
	    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Here is the test mail';
	    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $result=$mail->send();
	    echo 'Message has been sent'.$result;
	} 
		catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sending Otp</title>
</head>
<body>
	<form action="" method="post">
		<input type="submit" name="submit" value="sent">
	</form>

</body>
</html>