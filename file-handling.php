<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
</head>
<?php
// define variables and set to empty values
$fname = $lname= $gender = $email = $username = $password =$recoverymail = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  	$fname = test_input($_POST["fname"]);
  	$lname = test_input($_POST["lname"]);
  	$email = test_input($_POST["email"]);
  	$username = test_input($_POST["username"]);
  	$password = test_input($_POST["password"]);
  	$recoverymail = test_input($_POST["recoverymail"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<body>
	<h1>Registration form</h1>

	<fieldset>
		<legend>Basic Information:</legend>
	<form>
		<label>FirstName</label>
		<input type="text" id="fname" name="fname">
		<br>
		<label>LasttName</label>
		<input type="text" id="lname" name="lname">
		<br>
		<label>Gender</label>
		<input type="radio" id="Male" name="gender" value="male">
		<label for="male"> Male</label>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label>
		<br>
		<label>Email:</label>
		<input type="email" id="Email" name="email">
		<br>
	</form>
	</fieldset>
	<fieldset>
	<legend>User Account Information</legend>
	<form>
		<label>Username</label>
		<input type="text" id="username" name="username">
		<br>
		<label>Password</label>
		<input type="Password" id="password" name="password">
		<br>
		<label>Recovery Email:</label>
		<input type="email" id="recoverymail" name="recoverymail">
	</form>
	</fieldset>
	<button type="submit" form="form1" value="Submit">Submit</button>
</body>
</html>