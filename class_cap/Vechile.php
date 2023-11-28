<?php
class Vechile {
	private $marka;
	private $model;
	private $godina;
	private $cvqt;

	public function __construct() {
  
 	}

      public function setMarka($marka) {
      	$this->marka = $marka;
      }

      public function setModel($model) {
      	$this->model = $model;
      }

      public function setGodina($godina) {
      	$this->godina = $godina;
      }

      public function setCvqt($cvqt) {
      	$this->cvqt = $cvqt;
      }
     public function getMarka($marka) {
      	return $this->marka;
      }
      public function getModel($model) {
      	return $this->model;
      }
       public function getGodina($godina) {
      	return $this->godina;
      }
      public function getCvqt() {
      	return $this->cvqt;
      }

      //Class Vechile end
}

class Car extends Vechile {
	 
	 private $broi_vrati;
	 private $broi_skorosti;

	public function __construct(){

	}
       
     public function setBroiVrati($broi_vrati) {
      	$this->broi_vrati = $broi_vrati;
      }

       public function getBroiVrati() {
      	 return $this->broi_vrati;
      }

         public function setBroiSkorosti($broi_skorosti) {
      	$this->broi_skorosti = $broi_skorosti;
      }

          public function getBroiSkorosti() {
      	return $this->broi_skorosti;
      }
}




