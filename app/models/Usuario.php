<?php
require_once __DIR__ . "/../config/database.php";

class Usuario {
    public static function login($usuario, $password) {
        $db = Database::connect();
        $pass = sha1($password);
        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$pass'";
        return $db->query($sql);
    }
}
