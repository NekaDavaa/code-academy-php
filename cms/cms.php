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


//$myConf = new Config();
//$myConf->set("kola1", "mercedes");
//myConf->set("oaskdoak", "mercedes");
//$myConf->set("opaskdao", "mercedes");
//$myConf->set("okdasodkas", "mercedes");
//$myConf->loadFromFile("asd");
//echo "<pre>";
//print_r ($myConf->checksetvalue());
//echo "</pre>";
