<?php

spl_autoload_register(function($class_name) {
    // Skip built-in classes like SQLite3
    if (class_exists($class_name, false)) {
        return;
    }
    $file = "classes/$class_name.php";
    if (file_exists($file)) {
        include_once $file;
    }
});

?>
