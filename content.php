<!DOCTYPE html>
<html>
<body>


<?php
$myfile = fopen("usernames.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("usernames.txt"));
fclose($myfile);
?>

</body>
</html>
