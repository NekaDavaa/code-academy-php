<?php
class Currency {
	public function fromCurrency() {
		if (isset($_POST['submit'])) {
			echo $from_currency = $_POST['from_currency'];
		}
	}
		public function toCurrency() {
		if (isset($_POST['submit'])) {
			echo $to_currency = $_POST['to_currency'];
		}
	}
}

class Calculator {
	
}