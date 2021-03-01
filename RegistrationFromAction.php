<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>

	<h1>Registration Form</h1>

	<?php 

		if($_SERVER['REQUEST_METHOD'] == "POST") {
			
			if(empty($_POST['firstname']) && empty($_POST['lastname']) && empty($_POST['male']) && empty($_POST['email']) && empty($_POST['female']) && empty($_POST['uname']) && empty($_POST['pass']) && empty($_POST['re'])) {
				echo "Please fill up the form properly";
			} 
			else {
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$gender = $_POST['gender'];
				$mail = $_POST['mail'];
				$username = $_POST['username'];
				$pw = $_POST['pw'];
				$email = $_POST['email'];
				echo "Client name is: $fname $lname";

				$f=fopen("store.txt", "a");
				fwrite($f, $fname." ".$lname." ".$gender." ".$mail." ".$username." ".$pw." ".$email);
			}
		}
	?>

</body>
</html>