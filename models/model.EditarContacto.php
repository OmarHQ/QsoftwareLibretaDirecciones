<?php
require 'model.Conexion.php';

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripcslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;

}

function IdContacto ($id){
    return (int) limpiarDatos($id);
}

function ContactoPorId($id){
    $conexion=conexion();
    $statement=$conexion->query("SELECT * FROM direcciones WHERE Id=$id LIMIT 1");
    $resultado = $statement->fetchAll();
    return ($resultado) ? $resultado : false;

}

function EditarContacto($id, $nombre, $apellido, $genero, $calle, $localidad, $movil, $email, $website,$categoria,$notas,$fecha){
    $conexion=conexion();
    $statement = $conexion->prepare ("UPDATE direcciones SET Nombre= :nombre, Apellido= :apellido, Genero= :genero, Calle= :calle, Localidad= :localidad, Movil= :movil, Email=:email, Website=:website, Categoria=:categoria, Notas=:notas, FechaNacimiento=:fecha WHERE Id= :id");
    $statement->execute(array(
        ':id'=>$id,
        ':nombre'=>$nombre,
        ':apellido'=>$apellido,
        ':genero'=> $genero,
        ':calle'=> $calle,
        ':localidad'=>$localidad,
        ':movil'=>$movil,
        ':email'=>$email,
        ':website'=>$website,
        ':categoria'=>$categoria,
        ':notas'=>$notas,
        ':fecha'=>$fecha
                
    ));
    return ($statement) ? $statement : false;

}

?>


