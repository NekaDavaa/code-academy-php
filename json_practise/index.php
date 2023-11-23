<?php
//Step 1 - Plain array
$fruits = [
  'Banan' => '5lv.',
  'Qbulka' => '10lv.',
  'Qgoda' => '8lv.',
  'Grozde' => '3lv',
  'Portokal' => '4lv.'
];
//Step 2 - Serialized array
$data = serialize($fruits);
//Step 3 - Put data into json file
$file = 'fruits_data.json';
$current = file_get_contents($file);
$current .= "$data";
file_put_contents($file, $current);
//Step 4 - Read data from serialized file
$new_current = file_get_contents($file);
$de_serialized = unserialize($new_current);
var_dump($de_serialized);