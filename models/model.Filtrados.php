<?php
require 'model.Conexion.php';

function FiltrarIncluyeMovilEmail($genero,$categoria, $localidad){
    
    $conexion=conexion();
    
    $statement=$conexion->prepare(
        "SELECT * FROM direcciones WHERE Genero=:genero AND Categoria=:categoria AND Localidad=:localidad AND Movil!='' And Email!=''"
        );
    
    $statement->execute(array(
        ":genero"=>$genero,
        ":categoria"=>$categoria,
        ":localidad"=>$localidad
        
    ));
    $resultados=$statement->fetchAll();
    // echo ("<pre>");
    // print_r($resultados);
    // echo ("</pre>");
    return ($resultados) ? $resultados :false;
}

function FiltrarIncluyeSoloMovil($genero,$categoria, $localidad){
    
    $conexion=conexion();
    
    $statement=$conexion->prepare(
        "SELECT * FROM direcciones WHERE Genero=:genero AND Categoria=:categoria AND Localidad=:localidad and Movil!='' and Email=''"
        );
    
    $statement->execute(array(
        ":genero"=>$genero,
        ":categoria"=>$categoria,
        ":localidad"=>$localidad
        
    ));
    $resultados=$statement->fetchAll();
    
    return ($resultados) ? $resultados :false;
}

function FiltrarIncluyeSoloEmail($genero,$categoria, $localidad){
    
    $conexion=conexion();
    
    $statement=$conexion->prepare(
        "SELECT * FROM direcciones WHERE Genero=:genero AND Categoria=:categoria AND Localidad=:localidad and Movil='' and Email!=''"
        );
    
    $statement->execute(array(
        ":genero"=>$genero,
        ":categoria"=>$categoria,
        ":localidad"=>$localidad
        
    ));
    $resultados=$statement->fetchAll();
    
    return ($resultados) ? $resultados :false;
}

function FiltrarNoMovilNoEmail($genero,$categoria, $localidad){
    
    $conexion=conexion();
    
    $statement=$conexion->prepare(
        "SELECT * FROM direcciones WHERE Genero=:genero AND Categoria=:categoria AND Localidad=:localidad and Movil='' and Email=''"
        );
    
    $statement->execute(array(
        ":genero"=>$genero,
        ":categoria"=>$categoria,
        ":localidad"=>$localidad
        
    ));
    $resultados=$statement->fetchAll();
    
    return ($resultados) ? $resultados :false;
}

?>