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
    }

    public function exportToJson(string $given_filename) {
    	 
         $txt = $this->checksetvalue();
         $txt_to_json = json_encode($txt);
         $newfile = fopen("$given_filename", "w");
         fwrite($newfile, $txt_to_json);
         fclose($newfile);

    }


    
    public function checksetvalue() {
    	
    	return $this->settings;
    	
    }


}

$myConfig = new Config();
$myConfig->set("kola", "mercedes");

try {
	//$myConfig->loadFromFile("mnogokeys" . ".json");
} 
catch (Exception $e) {
	echo "Грешка: " . $e->getmessage() . "<br>";
}

//$myConfig->exportToJson("mnogokeys" . ".json");

echo "<pre>";
var_dump ($myConfig->checksetvalue());
echo "</pre>";

