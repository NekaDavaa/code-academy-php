<?php
class Currency {
	public function fromCurrency() {
		if (isset($_POST['submit'])) {
			return $from_currency = $_POST['from_currency'];
		}
		return null;
	}
		public function toCurrency() {
		if (isset($_POST['submit'])) {
			return $to_currency = $_POST['to_currency'];
		}
		return null;
	}
}
class Calculator {
     private $currency;
        public function __construct() {
        	$this->currency = new Currency;
        }
     public function inputSum() {
	if (isset($_POST['submit'])) {
		$input = $_POST['amount_to_convert'];
		$input_int = intval($input);
		return $input_int;
	}
  }
    public function exchangeRate() {
    $exchangeRates = [
    'bgn_to_eur' => 0.51129,
    'bgn_to_aud' => 0.81573,
    'eur_to_bgn' => 1.95583,
    'eur_to_aud' => 1.59549,
    'aud_to_bgn' => 1.22549,
    'aud_to_eur' => 0.62695,];
    return $exchangeRates;
    }
       public function convertSum() {
         if (isset($_POST['submit'])) {	
             $input_sum = $this->inputSum();
             $choosen_from_currency = $this->currency->fromCurrency();
             $choosen_to_currency = $this->currency->toCurrency();
             $exchangeRate = $this->exchangeRate();
             $choosen_currecies_key = $choosen_from_currency . '_to_' . $choosen_to_currency;
             if (array_key_exists($choosen_currecies_key, $exchangeRate)) {
             	return "<span>" . $input_sum * $exchangeRate[$choosen_currecies_key] . "</span>";
             }
             else {	
             	echo "<span>Impossible combination</span>";
             }
         }
   }      
}
