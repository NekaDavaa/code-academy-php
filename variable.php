<?php

$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";

$pieces = explode(" ", $pizza);

echo "<pre>";
print_r($pieces);
echo "</pre>";