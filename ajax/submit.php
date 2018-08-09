<?php
// Set date as DateTime object
$date = new DateTime ($date);

// Set now as DateTime object
$now = date ('m/d/Y H:i:s', time()); //
$myfile = fopen("python/survey.csv", "a") or die("Unable to open file!");
$txt = $now . ",".$_POST['predicted'] . "," . $_POST['userResponse'];
fwrite($myfile, "\n". $txt);
fclose($myfile);
?>