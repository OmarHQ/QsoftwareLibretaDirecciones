<?php
require 'models/model.ListadoContactos.php';


$contactos=ListarContactos();
        //  echo "<pre>";
        //  print_r ($contactos);
        //  echo "</pre>";

require 'views/view.ListadoContactos.php';
?>