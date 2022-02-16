<?php
require '../models/model.BorrarContacto.php';
$id = $_GET['id'];
$borrar=BorrarContacto($id);
if ($borrar==true)
    {
        
        echo '<script type="text/javascript">
        alert("Contacto Eliminado");
        window.location.href="../index.php";
        </script>';
        
    }
    else{
        echo 'contacto No eliminado';
    }
?>