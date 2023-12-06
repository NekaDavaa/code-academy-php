<?php
 $xml = simplexml_load_file('dataset.xml');

   
$products = [];
foreach ($xml->record as $product) {
    $products[] = $product;
}

function sortByName($a, $b) {
    return strcmp($a->product_name, $b->product_name);
}

usort($products, 'sortByName');

foreach ($products as $product) {
    echo "<img src='$product->brand'/>";
    echo $product->product_name . "<br>"; 
}
