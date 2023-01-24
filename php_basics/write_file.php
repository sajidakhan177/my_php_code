<?php
/*$myfile = fopen("newfile.txt", "w");
$text = "hello \n";
fwrite($myfile, $text);

$text = "hi sajida";
fwrite($myfile, $text);
fclose($myfile);*/
$myfile = fopen("newfile.txt", "a");
$text = " \n this content is appended";
fwrite($myfile, $text);


?>