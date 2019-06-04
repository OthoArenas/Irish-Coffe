<?php

    /* MUESTRA MULTIPLES PRODUCTOS , CANTIDAD DE PRODUCTOS COMO PARAMETRO */
    function obtenerProductos($cantidad = 1){
        include 'conexion.php';

        try {
            $sql = "SELECT * FROM productos LIMIT $cantidad";
            $resultado = $conexion->query ($sql);
        } catch (Exception $e) {
            echo $e->getMessage();
            return array();
        }
        return $resultado;
    }

    /* MUESTRA UN SOLO PRODUCTO, ID DEL PRODUCTO COMO PARAMETRO */
    function obtenerProducto ($id_producto) {
        include 'conexion.php';

        try {
            $sql = "SELECT nombre, imagen_completa, precio, descripcion, descripcion_corta FROM productos WHERE id = $id_producto";
            $resultado = $conexion->query($sql); 
        } catch (Exception $e) {
            echo $e->getMessage();
            return array();
        }
        return $resultado;
    }

?>