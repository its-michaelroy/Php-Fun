<?php

// Double quotes allow variable interpolation, single quotes do not
// Single quotes are used for literal strings
// Concatenation is done with the dot (.) no (+) exists
$title = "PHP Fundamentals Course";
$message = "Welcome to the $title!";

echo $message;

// Multiline strings can be created with heredoc or nowdoc syntax
// Heredoc allows variable interpolation, nowdoc does not
$json = <<<JSON
{
    "title": "$title",
    "message": "$message"
}
JSON;

echo "\nJSON Output:\n";
echo $json;
?>
