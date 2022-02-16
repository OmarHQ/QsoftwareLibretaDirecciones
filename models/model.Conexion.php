<?php

function conexion(){
    try {
       $conexion = new PDO('mysql:host=localhost;dbname=libreta_direc','root','centinela');
       return $conexion;
   } catch (PDOException $e) {
       return false;
   }

}



?>