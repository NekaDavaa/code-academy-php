<div class="wrapper">
<form method="POST">
<label>Content of the file
<input type="text" name="content_file"><label>
<input type="submit" value="Submit" name="submit_create">
</form>

<form method="POST">
<input type="submit" value="Read the file" name="submit_read_content">
</form>
</div>
<?php
//Add content
if (isset($_POST['submit_create'])) {
$file = fopen('static.txt','a');
$content = $_POST['content_file'];
$writ = fwrite($file,"$content");
if($writ){
	echo "Content added";
}
fclose($file);
}
//Read content
if (isset($_POST['submit_read_content'])) {
$file_name = "static.txt";
echo file_get_contents("$file_name");
}