<?php
session_start();
include 'DatabaseAdaptor.php';

if (isset($_SESSION['user'])) {    
    $arr = $theDBA->getGrades($_SESSION['user']);
    //exams
    $str = "<table><tr><th>Exams</th></tr><tr><td>Exam 1</td><td>Exam 2</td><td>Final Exam</td></tr>";
    $str .= "<tr><td>" . $arr[0]["exam_1"] . "</td><td>" . $arr[0]["exam_2"] .  "</td><td>" . $arr[0]["exam_final"] . "</td></tr>";
    $str .= "</table>";
    //homework
    $str .= "<table><tr><th>Homework</th></tr><tr><td>Homework 1</td><td>Homework 2</td><td>Homework 3</td><td>Homework 4</td><td>Homework 5</td></tr>";
    $str .= "<tr><td>" . $arr[0]["homework_1"] . "</td><td>" . $arr[0]["homework_2"] .  "</td><td>" . $arr[0]["homework_3"] .  "</td><td>". $arr[0]["homework_4"] .  "</td><td>" . $arr[0]["homework_5"] . "</td></tr>";
    $str .= "</table>";
    // labs
    $str .= "<table><tr><th>Labs</th></tr><tr><td>Lab 1</td><td>Lab 2</td><td>Lab 3</td><td>Lab 4</td><td>Lab 5</td></tr>";
    $str .= "<tr><td>" . $arr[0]["lab_1"] . "</td><td>" . $arr[0]["lab_2"] .  "</td><td>" . $arr[0]["lab_3"] .  "</td><td>". $arr[0]["lab_4"] .  "</td><td>" . $arr[0]["lab_5"] . "</td></tr>";
    $str .= "</table>";
    echo $str;
}

else{
    echo "Please log in to see your grades.";
}
?>

