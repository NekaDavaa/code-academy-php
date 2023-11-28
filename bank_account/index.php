<?php

include 'BankAccount.php';

?>
<form method="POST">
<label>IBAN:
	<input type="text" name="iban">
	<input type="submit" name="submit">
</label>
</form>

<?php

if (isset($_POST['submit'])) {
	$input_iban = $_POST['iban'];
	$ba_obj = new BankAccount("$input_iban");
}


$logged = $_SESSION['logged'];

if ($logged) {
    	header('Location: my_profile.php');
 	exit();
}
else {
	echo "Please login";
}