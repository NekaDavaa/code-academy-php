<?php

class Add {
   private $total;

   public function __construct ($total = 0) {
        $this->total = $total;
   }

   public function add() {
   	$this->total++;
   }

   public function getTotalValue() {
   	return $this->total;
   }

}

$add_obj = new Add();
$add_obj->add();
$add_obj->getTotalValue();