<?php
require '../models/model.Buscar.php';

if ($_SERVER['REQUEST_METHOD']=='GET' && !empty($_GET['busqueda'])){
    $busqueda = Buscar($_GET['busqueda']);
    //print_r ($busqueda[0]['Nombre']);
    if (empty($busqueda)){
        $titulo = 'No se encontraron resultados de ' .'"'. $_GET['busqueda'].'"';
        
    }
    else{
        $titulo = 'Resultados de la busqueda '.'"'. $busqueda[0]['Nombre'].'"' ;
    }

} else {
    header ('Location: ../index.php');
}
require '../views/view.Buscar.php';
?>