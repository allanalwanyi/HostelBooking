<!-- How to reset the password -->
<!-- New password and update the database -->
<?php 
	include("config.php");

	if (!isset($_GET["code"])) {
		exit("Can't find Page");
	}

	$code = $_GET["code"];

	$getEmailQuery = mysqli_query($conn, "SELECT email FROM reset WHERE code='$code'");
	if (mysqli_num_rows($getEmailQuery) == 0) {
		exit("Can't find Page");
	}
	if (isset($_POST["password"])) {
		$pw = $_POST["password"];
		$pw = md5($pw);

		$row = mysqli_fetch_array($getEmailQuery);
		$email = $row["email"];

		$query = mysqli_query($conn,"UPDATE students SET password='$pw' WHERE email='$email'");
		if ($query) {
			$query = mysqli_query($conn,"DELETE FROM reset WHERE code='$code'");
			exit("Password Updated");
		}
		else{
			exit("Something Went Wrong");
		}
	}

 ?>
 <form method="POST">
 	<input type="password" name="password" placeholder="New Password">
 	<br>
 	<input type="submit" name="submit" value="Update password">
 	
 </form>