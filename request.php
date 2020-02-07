<!-- confirmation of email if sent to server -->
<!-- phpmailer code start -->
 <?php 


		// Import PHPMailer classes into the global namespace
		// These must be at the top of your script, not inside a function
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require 'PHPMailer/src/Exception.php';
		require 'PHPMailer/src/PHPMailer.php';
		require 'PHPMailer/src/SMTP.php';
		require 'config.php';



		if (isset($_POST["email"])) {

			$emailTo = $_POST["email"];

			$code = uniqid(true);
			$query = mysqli_query($conn, "INSERT INTO reset(code, email) VALUES('$code', '$emailTo')");
			if(!$query){
				exit("Error");
			}

			$mail = new PHPMailer(true);

		try {
		    //Server settings
		    $mail->isSMTP();                                            // Send using SMTP
		    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'lubembeallan.com';                     // SMTP username
		    $mail->Password   = 'password';                               // SMTP password
		    $mail->SMTPSecure = 'TLS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
		    $mail->Port       = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('lubembeallan.com', 'Hostels');
		    $mail->addAddress($emailTo);     // Add a recipient
		    $mail->addReplyTo('no-reply@lubembeallan.com', 'No reply');

		    // Content
		    $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetpassword.php?code=$code";
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Your Password Reset Link';
		    $mail->Body    = "<h1> You Requested a Password Reset</h1> Click <a href='$url'>this link</a> to do so ";
		    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

		}

	
		

  ?>
  <!-- phpmailer code end -->
  <form method="POST">
	  	<input type="text" name="email" placeholder="Email" autocomplete="off"> 
	  	<br>
	  	<input type="submit" name="submit" value="Reset email">
  </form>
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  	<style type="text/css">
  		body
  		{
  			/*background-image: url("images/grad1.jpg");*/
  			/*padding: 10px;
  			align-items: center;
  			background-color: green;
			border: solid gray 5px;
			width: 25%;
			border-radius: 5px;
			margin: 100px auto;
			background: ;
			padding: 50px;*/
			height: 100%;
  		}
  	</style>
  </head>
  <body>
  
  </body>
  </html>