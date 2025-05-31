<?php
//OLD
$list = array("id" => 1, 2, 3, 4, 5); // Old array declaration
$countries = array("USA", "Canada", "Mexico"); // Old array with string values

// NEW array declaration using short syntax
$list2 = [1, 2, 3, 4, 5]; // Array declaration
$names = ["Alice", "Bob", "Charlie"]; // Array with string values
$mixed = [1, "two", 3.0, true]; // Mixed array with different types

// Associative array with key-value pairs
$person = [
    "name" => "John",
    "age" => 30,
    "is_student" => false
];

echo $list["id"];
echo "\n";
echo $countries[2]; // Accessing elements in the old array
echo "\n";
echo $list2[0]; // Accessing elements in the new array
echo "\n";
echo $names[1]; // Accessing elements in the new array with string values
echo "\n";
echo $mixed[1]; // Accessing mixed array element
echo "\n";
echo $person["name"]; // Accessing associative array element
echo "\n";
echo $person["age"]; // Accessing another associative array element
echo "\n";
echo $person["is_student"] ? "Yes" : "No"; // Accessing boolean value in associative array

// Looping through an array
foreach ($names as $name) {
    echo $name . "\n"; // Output each name in the array
}

// Looping through an associative array
foreach ($person as $key => $value) {
    echo "$key: $value\n"; // Output each key-value pair in the associative array
}

// Adding elements to an array
$names[] = "David"; // Adding a new name to the end of the array
$person["city"] = "New York"; // Adding a new key-value pair to the associative array

// Removing elements from an array
unset($names[1]); // Removing the second name from the array
unset($person["age"]); // Removing the age key from the associative array

// Checking if an element exists in an array
if (in_array("Alice", $names)) {
    echo "Alice is in the names array.\n"; // Check if "Alice" exists in the names array
}
if (array_key_exists("city", $person)) {
    echo "City: " . $person["city"] . "\n"; // Check if "city" key exists in the associative array
}
// Sorting an array
sort($names); // Sort the names array in ascending order
echo "\nSorted names: " . implode(", ", $names) . "\n"; // Output sorted names

// Sorting an associative array by keys
ksort($person); // Sort the associative array by keys
echo "Sorted person by keys:\n";
foreach ($person as $key => $value) {
    echo "$key: $value\n"; // Output each key-value pair in the sorted associative array
}
