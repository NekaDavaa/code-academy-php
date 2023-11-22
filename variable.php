<?php
$month = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30'];

$counter = 0;
$skipCounter = 0;

foreach ($month as $day) {
    if ($skipCounter > 0) {
        
        $skipCounter--;
       
        continue;
    }

    echo $day . "<br>";

    $counter++;
    if ($counter % 5 == 0) {
        $skipCounter = 2;
    }
}




