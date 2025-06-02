<?php
// SQlite
class DB {
    function execute($query) {
        $db = new SQLite3('../data/data.db');
        $result = $db->query($query);
        //return $result;

        if ($result) {
            $all = $result->fetchArray(SQLITE3_ASSOC);
            return $all;
        }
    }
}
