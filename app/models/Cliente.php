<?php
require_once __DIR__ . "/../config/database.php";

class Cliente {

    public static function listar() {
        return Database::connect()->query("SELECT * FROM clientes");
    }

    public static function guardar($data) {
        $db = Database::connect();

        $sql = "INSERT INTO clientes 
                (nombres, apellidos, cedula, telefono, correo)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $db->prepare($sql);
        $stmt->bind_param(
            "sssss",
            $data['nombres'],
            $data['apellidos'],
            $data['cedula'],
            $data['telefono'],
            $data['correo']
        );

        return $stmt->execute();
    }

    public static function obtener($id) {
        return Database::connect()
            ->query("SELECT * FROM clientes WHERE id_cliente = $id")
            ->fetch_assoc();
    }

    public static function actualizar($data) {
        $db = Database::connect();

        $sql = "UPDATE clientes 
                SET nombres=?, apellidos=?, cedula=?, telefono=?, correo=?
                WHERE id_cliente=?";

        $stmt = $db->prepare($sql);
        $stmt->bind_param(
            "sssssi",
            $data['nombres'],
            $data['apellidos'],
            $data['cedula'],
            $data['telefono'],
            $data['correo'],
            $data['id_cliente']
        );

        return $stmt->execute();
    }

    public static function eliminar($id) {
        return Database::connect()
            ->query("DELETE FROM clientes WHERE id_cliente = $id");
    }
}
