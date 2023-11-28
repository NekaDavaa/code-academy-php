<?php
include 'index.php';
?>


if ($logged) {
	echo "<a href='loggen_page.php?logout'>Log-out</a>";
	echo "Your account balance is " . $ba_obj->getDeposit() . " lv.";
}
else {
	echo "Please login";
}