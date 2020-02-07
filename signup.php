<?php 
/**
 * Created by PhpStorm.
 * User: Allan
 * Date: 06/09/2019
 * Time: 12:00pm
 */
	session_start();
	// connect to database
	$db = mysqli_connect("localhost","root","","project");

	
	if (isset($_POST['register_btn'])) {
		$studentname = mysqli_real_escape_string($db,$_POST['studentname']); 
		$email = mysqli_real_escape_string($db,$_POST['email']);
		// db check

			// $email = mysqli_query($db,"SELECT * FROM students WHERE email='$email'");
			// $count = mysqli_num_rows($email);

			// if ($count !=0) 
			// {
			// 	die("Email Already Exist, Use Another Email");
			// }




			// end db check
		$phonenumber = mysqli_real_escape_string($db,$_POST['phonenumber']);
		$school_ld_no = mysqli_real_escape_string($db,$_POST['school_ld_no']);
		$gender = mysqli_real_escape_string($db,$_POST['gender']);

		$password = mysqli_real_escape_string($db,$_POST['password']);
		$password2 = mysqli_real_escape_string($db,$_POST['password_2']);
		if ($password === $password2) {
			
			// create user
			$password = md5($password); 
			$sql = "INSERT INTO `students`(`id`, `studentname`, `email`, `phonenumber`, `schoolid`,`gender`, `password`) VALUES (null,'$studentname','$email','$phonenumber','$school_ld_no','$gender','$password')";
			$save = mysqli_query($db, $sql);
			if ($save) {
				$_SESSION['message'] = "You are now Logged In";
				$_SESSION['studentname'] = $studentname;
				$_SESSION['id'] = $school_ld_no;
				header("location: index.php");
			}else{
				echo "Saving Failed";
			}
		}else{

			echo '<script type="text/javascript" >alert("The Two Passwords Do Not Match")</script>';
		}
	}

 ?>


.<!DOCTYPE html>
<html>
<head>
	<title>REGISTER ACCOUNT</title>
	
	<style type="text/css">
		body
		{
			background-image: url(images/back.jpg);
			filter: blur(px);
			height: 100%;
			-webkit-filter:blur(px);
			/*background-repeat: no-repeat;*/
			background-size: cover;
			background-position: center;
			padding: 5px;
		}
		h1	
		{
			text-align: center;
			margin-top: 0px;
		}
		form
		{
			background-color: green;
			border: solid gray 5px;
			width: 25%;
			border-radius: 5px;
			margin: 100px auto;
			background: ;
			padding: 50px;
		}
		ul 
		{
			    list-style-type: none;
			    margin: 0;
			    padding: 0;
			    overflow: hidden;
			    background-color:#003333;
			    align-items: center;
			    width: 100%;
		}

		li 
		{
		    float: left;
		    border-right: 2px solid #bbb;
		    margin-right: 2px; 

		}

		li a 
		{
		    display: inline-block;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		}

		li a:hover 
		{
		    background-color: #ff1a75;
		}
		table
		{
			align-content: center;
			width: 100%;

		}
		td
		{
			box-shadow: :0 3px 0 red ;
		}
		.btn:hover
		{
			background-color: red;

		}	
		.btn
		{
			background-color: blue;
			color: white;
			font-weight: bold;
		}	
		.header
		{
			background-color: #1a3333;
			color: white;
			text-align: center;
			top: 0px;
			width: 100%;
			padding: 5px;
			margin-left: 2%;
			margin-right: 10%;
		}
		header
		{
			height: 40%;
		}
		input
		{
			box-shadow: 1px 1px 2px 1px green;
			border: 1px;
		}

	</style>
</head>
<body>
	<div class="header">
		<h2>Welcome Home <br>Kenya Industrial Training Institute</h2>
	</div>
	<?php 
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>" .$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	} 

	?>
	<form action="signup.php" method="POST">
		<h1>KENYA INDUSTRIAL TRAINING INSTITUTE</h1>
		<div>
		<ul>
  		<li><a href="index.php">Home</a></li>
  		<li style="float:right"><a class="active" href="contactus.html">Contact Us</a></li>
		</ul>
	</div><br>
	<!-- inputs for registration -->
		<div class="header">
	 	<h1>Register Your Account</h1>
		<table align="center">
				<tr>
					<td>Student Name:</td>
					<td><input type="text" name="studentname" class="textInput" placeholder="studentname..." value="" required></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" class="textInput" placeholder="email..." value="" required></td>
				</tr>
				<tr>
					<td>Phone No:</td>
					<td><input type="phonenumber" minlength="10" maxlength="10" name="phonenumber" class="textInput" placeholder="phone number..." value="" required></td>
				</tr>
				<tr>
					<td>School Id No:</td>
					<td><input type="school_ld_no" name="school_ld_no" class="textInput" placeholder="school_ld_no..." value="" required></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><input type="radio" name="gender" value="Male" >Male<input type="radio" name="gender" value="Female">Female</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" minlength="8"  maxlength="12" class="textInput" placeholder="password..." value="" required></td>
				</tr>
				<tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="password_2" minlength="8"  maxlength="12" class="password2" placeholder="confirm..." value="" required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="register_btn" value="Register" class="btn"></td>
				</tr>
			</table>

		</div>
		<br>
			<br>
			<div>
			<a href="index.php" style="float: right;">Already a Member? Sign In</a>
			</div>

	</form>
	 <footer class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
                <p class="copyright">Copyright © 2020 KITI</p>
            </div>
        </footer> 
</body>
</html>