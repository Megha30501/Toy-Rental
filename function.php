<?php
	function SendMail($receiver,$subject,$content)
	{
		if($_SERVER['SERVER_NAME']=="localhost")
		{
			/* please read below instruction to send email 
		    this code is working perfectly and we just need to do following  changes
			
			1) uncomment following line in php.ini file
			;php_openssl.dll
			remove ;(semicolon) from begging and then it will look like following
			php_openssl.dll then save file and then restart wamp server.
			
			3) then login into your gmail account in any browser 
			
			4) and then copy paste below url
			https://www.google.com/settings/security/lesssecureapps
			into address bar
			
			and then enable less secure mail option (turn on)
			
			*/ 
			require_once('lib/class.phpmailer.php');
			$UserName="Toy Rental"; // replace with your own gmail email address
			$Password="toyrentalcreart"; // replace with your own gmail email password
			$SenderEmailAddress="toyrental6@gmail.com"; // replace with your own gmail email address
			$ContactName="Dhara & Megha"; // replace with your own name
			$ReceiverName=$receiver; // replace with your receiver email address, passed as an argument in function 
			$mail = new PHPMailer(true); 
			$mail->IsSMTP(); 
			try 
			{
			$mail->Host       = "mail.gmail.com"; 	// SMTP server
			$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
			$mail->Username   = $UserName;  // GMAIL username
			$mail->Password   = $Password;            // GMAIL password
			$mail->AddReplyTo($SenderEmailAddress,$SenderEmailAddress);
			$mail->AddAddress($receiver,$receiver);
			$mail->SetFrom($SenderEmailAddress,$SenderEmailAddress);
			
			//$mail->AddReplyTo($SenderEmailAddress,$ContactName);
			$mail->Subject = $subject;
			// replace with your subject, passed as an argument in function 
			$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
			$mail->Body = $content; // replace with your mail content, passed as an argument in function 
			$mail->Send();
			//echo "Message Sent OK<p></p>\n";
			} 
			catch (phpmailerException $e)
			{
			echo $e->errorMessage(); 
			} catch (Exception $e) 
			{
			echo $e->getMessage(); 
			}
		}
		else //we are on server 
		{
			$headers[] = 'MIME-Version: 1.0';
			$headers[] = 'Content-type: text/html; charset=iso-8859-1';

			// Additional headers
			$headers[] = 'To: $receiver';
			$headers[] = 'From: info@theeasylearnacademy.com';
			/* $headers[] = 'Cc: birthdayarchive@example.com';
			$headers[] = 'Bcc: birthdaycheck@example.com'; */

			// Mail it
		    mail($receiver, $subject, $content, implode("\r\n", $headers));
		}
	}
?>	