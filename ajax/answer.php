<?php
$result = shell_exec('python python/predict.py "' . $_POST['userResponse'] . '"' );
echo $result;
?>
