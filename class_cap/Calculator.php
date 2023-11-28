<?php

class Text {
   private $text = "";

   public function __construct ($text) {
      $this->text = $text;
   }

   public function getText() {
      return $this->text;
   }

}

$text_obj = new Text("asasdasd");
echo $text_obj->getText();