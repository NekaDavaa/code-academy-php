<?php
$xmlstring = 'dataset.xml';
$xml = simplexml_load_file($xmlstring);
$json = json_encode($xml);
$array = json_decode($json,TRUE);
echo "<pre>";
print_r($array['record'][0]['product_name']);
echo "</pre>";