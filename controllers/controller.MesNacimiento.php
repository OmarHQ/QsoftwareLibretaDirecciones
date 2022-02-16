<?php

require '../models/model.FechaNacimiento.php';
    

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$estado = 'ACTIVO';
    $localidad=$_POST['localidad'];
    $mes=$_POST['mesNacimiento'];
    $resultado=FiltrarFechaNacimiento($estado,$localidad,$mes);
    
    }
    
   
require '../views/view.FiltradoPorNacimiento.php';

?>