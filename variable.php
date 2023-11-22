<form method="POST">
<input type="number" name="user_input">
<input type="submit">
</form>

<?php

if (isset($_POST['user_input'])) {
 $user_input = $_POST['user_input'];

 echo $result = strlen($user_input);

}