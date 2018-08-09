<?php
// Set date as DateTime object
$date = new DateTime ($date);

// Set now as DateTime object
$now = date ('m/d/Y H:i:s', time()); //
$myfile = fopen("python/words.csv", "a") or die("Unable to open file!");
$txt = $now . ",".$_POST['region'] . "," . $_POST['word'];
fwrite($myfile, "\n". $txt);
fclose($myfile);
?>