<?php 
$today = new DateTime(date('Y-m-d', strtotime('today')));
$plustwodays = new DateTime(date('Y-m-d', strtotime('+2 days')));
$todayTimestamp = $today->getTimestamp();
$plusTwoDaysTimestamp = $plustwodays->getTimestamp();
$secondsDifference = $plusTwoDaysTimestamp - $todayTimestamp;
echo $secondsDifference . " seconds";
?>
