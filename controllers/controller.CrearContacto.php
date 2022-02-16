<?php
require '../models/model.CrearContacto.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    $calle = filter_var($_POST['calle'], FILTER_SANITIZE_STRING);
    $localidad = filter_var($_POST['localidad'], FILTER_SANITIZE_STRING);
    $movil = filter_var($_POST['movil'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $website = filter_var($_POST['website'], FILTER_SANITIZE_STRING);
    $notas = filter_var($_POST['notas'], FILTER_SANITIZE_STRING);
    $resultado=CrearContacto($nombre, $apellido, $calle, $localidad, $movil, $email, $website, $notas);
    if ($resultado==true)
    {
        
        echo '<script type="text/javascript">
        alert("Contacto Creado");
        window.location.href="../index.php";
        </script>';
        
    }
    else{
        echo 'contacto no registrado';
    }

}    


require '../views/view.CrearContacto.php';

?>