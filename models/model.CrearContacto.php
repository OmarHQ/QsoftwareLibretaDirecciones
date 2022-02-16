<?php

require 'model.conexion.php';

$conexion = conexion();

function CrearContacto($nombre, $apellido, $calle, $localidad, $movil, $email, $website, $notas){
    $conexion=conexion();
    $statement = $conexion->prepare('INSERT INTO direcciones (Id, Genero, Nombre, Apellido, Calle, Localidad, Movil, Email, Website, Categoria, Notas, Estado, FechaNacimiento) VALUES (NULL, NULL, :nombre, :apellido, :calle, :localidad, :movil, :email, :website, "1", :notas, "ACTIVO", CURDATE())');
    
    $statement->execute(array(
        ':nombre' => $nombre,
        ':apellido' => $apellido,
        ':calle'=> $calle,
        ':localidad'=> $localidad,
        ':movil' => $movil,
        ':email' => $email,
        ':website'=> $website,
        ':notas' => $notas
    ));
    if (isset($statement))
        return true;
    else 
        return false;
}

?>