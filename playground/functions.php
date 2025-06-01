<?php

function printHello() {
    echo "Hello, World!\n";
}

//Can specify data types for function parameters and return types
//boolean, integer, float, string, array, callable, object
function addNumbers(int $a,int $b) {
    return $a + $b;
}

printHello();
$result = addNumbers(b: 5,a: 10);
echo "The sum is: $result\n";
