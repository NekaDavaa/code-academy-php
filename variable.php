<?php
$number = 32563;
$numberAsString = strval($number);
foreach (str_split($numberAsString) as $digit) {
    echo $digit . "<br>";
}