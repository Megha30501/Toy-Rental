<?php
//require 'PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';



	require 'dbconnect.php';
	$email=$_POST['txt_mail'];

	$qry1="SELECT * FROM user where email='".$email."'";
	$rs1=mysqli_query($con,$qry1);
	if(mysqli_num_rows($rs1)>0)
	{
	$row=mysqli_fetch_assoc($rs1);
	$pass=$row['password'];
	//echo $pass;
	$body="Your password is : $pass<br>
		   ";
//	echo $body;
   // header("location:login.php");
	$sub="Password Recover";
	$mail = new PHPMailer;

	$mail->isSMTP();                                   // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                            // Enable SMTP authentication
	$mail->Username = 'toyrental6@gmail.com';          // SMTP username
	$mail->Password = 'toyrentalcreart'; // SMTP password
	$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                 // TCP port to connect to

	$mail->setFrom('toyrental6@gmail.com', 'ToyRental');
	$mail->addReplyTo('toyrental6@gmail.com', 'ToyRental');
	$mail->addAddress($email);   // Add a recipient
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');
	$mail->isHTML(true);  // Set email format to HTML

	$bodyContent = $body;
	
	$mail->Subject = $sub;
	$mail->Body    = $bodyContent;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}

}
else
{
	echo "Email Not Exist!";
}

?>
