<form method="POST">
<label>Napishete faila koito iskate da otvorite <br>
<input type="text" name="file_name">
</label>
<input type="submit" name="submit">
</form>
<?php
$file_name = "";
if (isset($_POST['submit'])) {
	$file_name = $_POST['file_name'];
}
if (!empty($file_name)) {
try {
    $handle = fopen("$file_name.txt", "r");
    if (!$handle) {
        throw new Exception("Not valid file name");
    }
while(! feof($handle)) {
  $content = fgets($handle);
  echo $content. "<br>";
}
fclose($handle);
}
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
}