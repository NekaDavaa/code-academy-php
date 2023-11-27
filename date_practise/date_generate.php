<form method="POST">
<input type="month" name="choosen_date" />
<input type="submit" name="submit" value="Generate dates" />
</form>

<?php

if (isset($_POST['submit'])) {
	$choosen_date = $_POST['choosen_date'];
	$date = new DateTime($choosen_date);
    $choosenMonth = $date->format('F');
    $firstDayOfMonth = $date->format('01');
    $lastDayOfMonth = $date->format('t'); 
    $all_days = range("$firstDayOfMonth", "$lastDayOfMonth");

    foreach ($all_days as $day) {
    	echo $day . " of $choosenMonth <br />";
    }
     
}