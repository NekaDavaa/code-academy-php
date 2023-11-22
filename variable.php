<?php

$week = ['Ponedelnik', 'Vtornik', 'Srqda', 'Chetvurtuk', 'Petuk', 'Subota', 'Nedelq'];


$inputKey = array_rand($week);
$input = $week[$inputKey];
echo $input . "<br>";

if ($input === $week['0'] ||$input === $week['1'] || $input === $week['2'] ||$input === $week['3'] ||$input === $week['4']) {
	echo "Happy work week";
}
else {
	echo "Happy weekend";
}
