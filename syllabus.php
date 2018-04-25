<?php

$file = fopen("syllabus.txt", "r");
$description = "";
while(!feof($file)){
$description .= fgets($file) . "<br>";
}
fclose($file);
echo $description;

?>