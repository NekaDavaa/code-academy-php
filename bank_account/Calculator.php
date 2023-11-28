<?php 
include 'Person.php';
class Calculator extends Person {
	public function __construct() {
         parent::__construct();
	}
	public function deposit($value) {
      $this->balance += $value;
   	}
	public function withdraw($value) {
		$this->balance -= $value;
	}
	public function getDeposit() {
		return $this->balance;
	}
}
