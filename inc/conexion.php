<?php

    try {
        $conexion = new mysqli('localhost','root','root','Irish');
        $conexion->set_charset('utf8'); /* Hace que se vean correctamente los caracteres en Español */
    } catch (Exception $e) {
        echo $e ->getMessage();
        exit;
    }

    /* CÓDIGO PARA IDENTIFICAR SI HAY ERROR EN LA CONEXIÓN CON LA BASE DE DATOS */
    /* if ($conexion->ping()) {
        echo 'Todo bien';
    } else {
        echo $conexion->connect_error;
    } */

?>