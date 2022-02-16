<?php
require 'model.Conexion.php';

function ListarContactos(){
        $conexion=conexion();
        $statement = $conexion->prepare('SELECT * FROM direcciones');
        $statement->execute();
        $resultado = $statement->fetchAll();
        return $resultado;
}
?>