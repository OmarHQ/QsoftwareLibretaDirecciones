<?php
require 'model.Conexion.php';

function FiltrarFechaNacimiento($estado,$localidad,$mes){
    
    $meses = ['enero'=>'01', 'febrero'=>'02', 'marzo'=>'03', 'abril'=>'04', 'mayo'=>'05', 'junio'=>'06', 'julio'=>'07', 'agosto'=>'08', 'septiembre'=>'09', 'octubre'=>'10', 'noviembre'=>'11', 'diciembre'=>'12'];
    foreach($meses as $x=>$y){
        if($mes==$x){
        $mes=$y;    
        }
    };
    
    $conexion=conexion();
    
    $statement=$conexion->prepare(
        "SELECT * FROM direcciones WHERE Estado=:estado AND Localidad=:localidad AND  FechaNacimiento LIKE '%-$mes-%'"
        );
    
    $statement->execute(array(
        ":estado"=>$estado,
        ":localidad"=>$localidad
        
    ));
    
    $resultados=$statement->fetchAll();
    return ($resultados) ? $resultados :false;
}

