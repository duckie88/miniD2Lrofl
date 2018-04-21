<?php
session_start();
include 'DatabaseAdaptor.php';

if (isset($_SESSION['user'])) {    
    $arr = $theDBA->getGrades($_SESSION['user']);
    echo $arr[0]["exam_1"];
}
?>


