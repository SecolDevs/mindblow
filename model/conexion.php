<?php

class Conexion{

    public static function conectar()    {
        try {
            $conn = new PDO('mysql:host=localhost; dbname = mindblow', 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("SET NAMES UTF8");
        } catch (Exception $e) {
            die("Error " . $e->getMessage());
            echo "En la linea: " . $e->getLine();
        }
        return $conn;
    }
}

?>