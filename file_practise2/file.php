<div class="wrapper">
<form method="POST">
<label>Name of the file
<input type="text" name="create_file"><label>
<label>Content of the file
<input type="text" name="content_file"><label>
<input type="submit" value="Submit" name="submit_create">
</form>


<form method="POST">
<label>Read the file
<input type="text" name="read_content_file"><label>
<input type="submit" value="Submit" name="submit_read_content">
</form>
</div>

<?php
//Create the file and put filename and content
if (isset($_POST['submit_create'])) {
   $file_name = $_POST['create_file'];
   $file_content = $_POST['content_file'];
   $newfile = fopen("$file_name.txt", "w");
   $txt = "$file_content";
   fwrite($newfile, $txt);
   fclose($newfile);
} 

//Read content of the file
if (isset($_POST['submit_read_content'])) {
   $read_file_content = $_POST['read_content_file'];
   $myfile = fopen("$read_file_content.txt", "r");
   while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
}

