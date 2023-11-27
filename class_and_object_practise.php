<?php 
class Radio {
   public function volumeUP() {
   	echo "Volume up+++";
   }
    public function volumeDOWN() {
   	echo "Volume down---";
   }
}

class Car { 
    private $text;

    public function __construct() {
        echo "Class initialized<br>";
        $this->radio = new Radio;
    }

    
    public function setText($text) {
        $this->text = $text;
    }

    
    public function getText() {
        return $this->text;
    }
}

$fiat = new Car;
//$fiat->setText("asdsda");
//$fiat->getText();
echo $fiat->radio->volumeUP();
?>