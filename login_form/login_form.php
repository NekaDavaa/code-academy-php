<?php
session_start();
$db_username = 'root';
$db_password = 'NekaDava';
?>
<form method="POST">
<input type="text" name="username" />
<input type="password" name="password" />
<input type="submit" name="submit" value="Login" />
</form>
<?php 
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
 if ($username === $db_username && $password === $db_password) {
 	 $_SESSION['loggedin'] = true;
 	header('Location: loggen_page.php');
 	exit();
 }
  else {
    header('Location: login_form.php?wrong_details');
  }
}
 if(isset($_GET['wrong_details'])) {
   	echo "Wrong details!";
   }

if(isset($_GET['logout'])) {
   echo "Successfully Logged Out!";
}