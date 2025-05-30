<?php
echo("Hello World\n");
// 1. no data types
// 2. We can change data types dynamically from string to integer, etc.
//3. Vars start with $ and are case-sensitive. No let/var/const


$greeting = "Hello, PHP!\n";
$year = 2024;
$isFinished = True; //case-insensitive
echo $greeting;
echo "The year was $year and it is " . ($isFinished ? "finished" : "not finished") . ".\n";

$vname = "course";
$$vname = "PHP Programming"; // Variable variables
echo $course;
?>
