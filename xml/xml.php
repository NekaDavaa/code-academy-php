<?php
 $xml = simplexml_load_file('dataset.xml');

   
$products = [];
foreach ($xml->record as $product) {
    $products[] = $product;
}


print_r ($products);
