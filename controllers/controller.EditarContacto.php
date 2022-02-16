<?php
require '../models/model.EditarContacto.php';


if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $id=$_POST['id'];
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    $genero = $_POST['genero'];
    $calle = filter_var($_POST['calle'], FILTER_SANITIZE_STRING);
    $localidad = $_POST['localidad'];
    $movil = filter_var($_POST['movil'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $website = filter_var($_POST['website'], FILTER_SANITIZE_STRING);
    $categoria = $_POST['categoria'];
    $notas = filter_var($_POST['notas'], FILTER_SANITIZE_STRING);
    $fecha = $_POST['fecha'];

    $resultado=EditarContacto($id, $nombre, $apellido, $genero, $calle, $localidad, $movil, $email, $website,$categoria,$notas,$fecha);
    
    if ($resultado==true)
    {
        
        echo '<script type="text/javascript">
        alert("Contacto Editado");
        window.location.href="../index.php";
        </script>';
        
    }
    else{
        echo 'contacto No editado';
    }



}
else {
    $IdContacto = IdContacto($_GET['id']);
    if(empty($IdContacto)){
        header('Location: ../index.php');
    }
    $contacto = ContactoPorId($IdContacto);
            
    if(!$contacto){
        header('Location: ../index.php');
    }
    $contacto=$contacto[0];
}

require '../views/view.EditarContacto.php';

?>