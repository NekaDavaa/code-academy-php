<?php
class Car { 
  protected $marka;
  protected $model;
  protected $godina;

  public function __construct($marka, $model, $godina) {
     
     $this->marka = $marka;
     $this->model = $model;
     $this->godina = $godina;
  }

  public function getMarka() {
  	return $this->marka;
  }
   public function getModel() {
  	return $this->model;
  }
   public function getGodina() {
  	return $this->godina;
  }
}



class SuperCar extends Car {
	public function __construct($marka, $model, $godina) {
         parent::__construct($marka, $model, $godina);
	}

	public function EchoCar() {
		echo "Kolata e marka" . $this->getMarka();
		echo "Kolata e model" . $this->getModel();
		echo "Kolata e godina" . $this->getGodina();
	}
}

$super_car = new SuperCar("Fiat", "Punto", "2001");
$super_car->EchoCar();