<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'cafetux');

    try {
        // Ejecutamos las variables y aplicamos UTF8
        $conexion = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        echo "Conexión Satisfactoria";
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
    return $conexion;


?>