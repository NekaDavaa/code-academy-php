<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  echo "Please login first";
  exit();  
}
else {
	echo "Hello, root" . "<br />";
	echo "<a href='loggen_page.php?logout'>Log-out</a>";
}

if(isset($_GET['logout'])) {
   session_destroy();
   header('Location: login_form.php?logout');
   exit();
}