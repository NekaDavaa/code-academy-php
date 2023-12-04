<?php

class Config {
    private $settings;
    public function __construct() {
        $this->settings = new stdClass();
    }


    public function set(string $key, $value) {
        $this->settings->$key = $value;
    }

     public function get(string $key) {
        return $this->settings->$key ?? null;
    }

     public function remove(string $key) {
         unset($this->settings->$key);
    }
     public function has(string $key) {
           return isset($this->settings->$key);
     }

     public function clear() {
        $this->settings = new stdClass();
    }

    public function loadFromFile(string $filename) {
    	if (!file_exists($filename)) {
    		throw new Exception("Файлът $filename не съществува.");
    	}

    	$jsonData = file_get_contents($filename);
    	$phpReadableData = json_decode($jsonData);
    	$this->clear();
        foreach ($phpReadableData as $key => $value) {
        	$this->set("$key", "$value");
        }
        
        echo "var dump ot json-a" . "<br>";
        echo "<pre>";
    	
    	var_dump ($phpReadableData);
    	echo "</pre>";
    	

    }

    public function checksetvalue() {
    	echo "<pre>";
    	var_dump ($this->settings);
    	echo "</pre>";
    }


}

$myConfig = new Config();
$myConfig->set("kola", "mercedes");	
try {
	$myConfig->loadFromFile("data" . ".json");
} 
catch (Exception $e) {
	echo "Грешка: " . $e->getmessage() . "<br>";
}


$myConfig->checksetvalue();

