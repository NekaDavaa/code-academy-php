<?php
$arr = [5, 10, 15, 20, 50, 'asd', 50123];


function calcArr($arr) {
   $totalsum = array_sum($arr);
   echo $totalsum;
}

calcArr($arr);





