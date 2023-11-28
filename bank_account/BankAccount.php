<?php
include 'Calculator.php';
class BankAccount extends Calculator {
	public function __construct ($iban) {
		if ($this->iban === $iban) {
			$_SESSION['logged'] = true;
			echo "Iban is correct <br>";
		}
		else {
			echo "Please input correct IBAN to proceed!";
			exit();
		}
	}
}