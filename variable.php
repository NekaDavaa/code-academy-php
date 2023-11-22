<form method="POST">
  <select name="title">
    <option value="g-n">г-н</option>
    <option value="g-ca">г-ца</option>
    <option value="d-r">д-р</option>
  </select>
  <input type="submit" name="asd">
</form>


<?php
if (isset($_POST['title'])) {
	 $selected = $_POST['title'];
	switch ($selected) {
		case 'g-n':
			echo "Gospodin";
			break;
		case 'g-ca':
			echo "Gospojica";
			break;
		case 'd-r':
			echo "Doktor";
			break;
	}
}

