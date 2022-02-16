<?php
require 'model.Conexion.php';

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripcslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;

}

function Buscar($busqueda){
    $busqueda=limpiarDatos($busqueda);
    $conexion=conexion();
    $statement=$conexion->prepare(
        'SELECT * FROM direcciones WHERE Nombre LIKE :busqueda'
    );
    $statement->execute(array(':busqueda'=> "%$busqueda%"));
    $resultados=$statement->fetchAll();
    // echo ("<pre>");
    // print_r($resultados);
    // echo ("</pre>");
    return ($resultados) ? $resultados :false;
}
?>