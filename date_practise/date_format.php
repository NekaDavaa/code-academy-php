<form method="POST">
<label>
<input type="date" name="cal_name"></label>
<input type="submit" name="submit">
</form>
<?php
session_start();
$send_time = "";
if (isset($_POST['submit'])) {
	 $_SESSION['send_time'] = ($_POST['cal_name']);
	 echo "Your choosen date is " . $_SESSION['send_time'];
}
$send_time = $_SESSION['send_time'];
?>
<form method="get">
    <label for="filter">Choose a filter:</label>
    <select name="filter" id="filter">
        <option value="option1">ДД/ММ/ГГГГ</option>
        <option value="option2">ММ/ДД/ГГГГ</option>
        <option value="option3">ГГГГ-ММ-ДД</option>
    </select>
     <input type="submit" name="filters" value="Apply">
</form>

<?php

if (isset($_GET['filters'])) {
   $choosen_option = $_GET['filter'];

   switch ($choosen_option) {
   	case 'option1':
   		$datetimeFormat = 'd-m-Y';
   		break;
    case 'option2':
   		$datetimeFormat = 'm-d-Y';
   		break;

   		  	case 'option3':
   		$datetimeFormat = 'Y-m-d';
   		break;
   
   }
   $recived_time = strtotime($send_time);
   $date = new DateTime();
   $date->setTimestamp($recived_time);
   $final_date = $date->format($datetimeFormat);
   echo $final_date;
}