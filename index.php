
<?php 
/**
 * Created by PhpStorm.
 * User: Allan
 * Date: 25/08/2019
 * Time: 05:43pm
 */
	session_start();
	
 ?>


.<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	 
	<title>LogIn</title>
	
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
		form
		{
			background-color: transparent;
			border: solid gray 5px;
			width: 25%;
			border-radius: 5px;
			margin: 100px auto;
			background: ;
			padding: 50px;


		}
		h1
		{
			font-size: 20px;
			font-style:;
			text-align: center;
			color: ;
			font-family:courier;
			font-style: italic;


		}
		img
		{
			margin-left: 30%;
			margin-right: 20%;
			height: 128px;

		}
		
		ul 
		{
			    list-style-type: none;
			    margin: 0;
			    padding: 0;
			    overflow: hidden;
			    background-color: #003333;
		}

		li 
		{
		    float: left;
		    border-right: 1px solid #bbb;
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

		body
		{
			padding: 0px;
			margin: 0px;
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

		#frm
		{
			border: solid gray 5px;
			width: 20%;
			border-radius: 5px;
			margin: 100px auto;
			background: brown;
			padding: 50px;
		}
		#btn
		{
			font-weight: bold;
			background: #337ab7;
			padding: 5px;
			margin-left: 69%;
			color: white;
		}
		#error_msg
		{
			width: 50%;
			margin: 5px;
			height: 30px;
			border: 1px solid #FF0000;
			background: #FFB9B8;
			color: #FF0000;
			text-align: center;
			padding: 10px;
		}
		input
		{
			box-shadow: 1px 1px 2px 1px red;
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
	<form action="room.php" method="POST" id="frm" class="col-md-12 contact_text">
		
		<div>
				<img src="images/logo.jpg">
		</div>
		<br>
		<br>
		<div>
				<ul>
		  		<li><a href="index.php">Home</a></li>
		  		<li><a href="contactus.html">Contact Us</a></li>
		  		<li style="float:right"><a class="active" href="signup.php">Sign Up</a></li>
				</ul>
		</div>
		<br>
		<div>
				<h1 >KENYA INDUSTRIAL TRAINING INSTITUTE</h1>
		</div>
	
		<br>
	<table align="center">
				<tr>
  					<td>Email:</td>
  					<td><input type="text" id="email" name="email" placeholder="email..." value="" required></td>

  				</tr>
  				<tr>
  					<td>Password:</td>
  					<td><input type="password" id="pass" name="pass" minlength="8"  maxlength="10" placeholder="password..." value="" required></td>
  					
  				</tr>
  				<tr>
  					<td></td>
  					<td><input type="submit" id="btn" value="Log In" name="btn_login"></td>
  					
  				</tr>
  					
		</table>
			<br>
			<a href="request.php" style="float: right;">Forgot Password?</a>
			<br>
  				
			<a href="signup.php" style="float: right;">Not Yet a Member? Sign Up</a>

</form>
 <footer class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
                <p class="copyright">Copyright © 2020 KITI</p>
            </div>
        </footer> 
</body>
</html>
