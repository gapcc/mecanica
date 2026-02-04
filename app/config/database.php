<?php
class Database {
    public static function connect() {
        $db = new mysqli("localhost", "fff", " o500", "mecanica");
        if ($db->connect_error) {
            die("Error BD");
        }
        return $db;
    }
}
