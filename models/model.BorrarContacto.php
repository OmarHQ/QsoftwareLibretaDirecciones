<?php
require 'model.Conexion.php';

function BorrarContacto($id){
    $conexion=conexion();
    $statement = $conexion->prepare ("UPDATE direcciones SET Estado='INHABILITADO' WHERE Id=$id");
    $statement->execute();
    return ($statement) ? $statement : false;

}
?>