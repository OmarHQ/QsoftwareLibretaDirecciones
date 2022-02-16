<?php
require '../models/model.Filtrados.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$genero = $_POST['genero'];
    $categoria=$_POST['categoria'];
    $localidad=$_POST['localidad'];
    // $movil='';
    // $email='';
    
    if(isset($_POST['check'])){
        $check=$_POST['check'];
        if (!empty($check[0]) && !empty($check[1])){
        $movil=$check[0];
        $email=$check[1];
        $resultado=FiltrarIncluyeMovilEmail($genero,$categoria,$localidad);    
        }
        
        if (!empty($check[0]) && empty($check[1])){
            $movil=$check[0];
            $resultado=FiltrarIncluyeSoloMovil($genero, $categoria, $localidad);
        }

        if (empty($check[0]) && !empty($check[1])){
            $email=$check[1];
            $resultado=FiltrarIncluyeSoloEmail($genero, $categoria, $localidad);
        }
        //$email=$_POST['email'];
        // $num=count($check);
        // //print_r ($num);
        // for ($i=0;$i<$num;$i++){
        //     $valor=$check[$i];
        //     echo $valor;
        // }
        // $resultado=Filtrar($genero, $categoria, $localidad);
    }
    else{
        
    $resultado=FiltrarNoMovilNoEmail($genero, $categoria, $localidad);
    }
    //echo $genero;
   }    

require '../views/view.FiltrarContactos.php';
?>