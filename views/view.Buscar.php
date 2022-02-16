<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0656c6ac87.js" crossorigin="anonymous"></script>
    <title>Libreta de Direcciones</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>
<header>
        <div class="contenedor">
            <div class= "logo izquierda">
                <p>
                    <h2>FLITRO DE BÚSQUEDA</h2>
                </p>
            </div>
            <div class="derecha">
               <form action="../controllers/controller.Buscar.php" method="GET" name="busqueda" class="buscar">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>
                <nav class="menu">
                    <ul>
                    <li><input type="button" onclick="location.href='../controllers/controller.CrearContacto.php'" value="Crear Contacto"><i class="fa fa-address-book"></i></li>
                    </ul>
                </nav>
            </div>
        </div>
</header>

<div class="table-wrapper">
    <table class="fl-table">
    <h2 style="color:blue;"><?php echo $titulo; ?></h2>
    
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Calle</th>
        <th>Localidad</th>
        <th>Movil</th>
        <th>Email</th>
        <th>WebSite</th>
        <th>Notas</th>
        <th>ACTUALIZAR</th>
        <th>ELIMINAR</th>
    </tr>
    </thead>
    
    <tr>
    <?php if(!empty($busqueda)): ?>
        <?php foreach ($busqueda as $dato):?>
            <tr>
                <?php if ($dato['Estado']=='ACTIVO'):?>
                <td><?php echo $dato['Id'];?></td>
                <td><?php echo $dato['Nombre'];?></td>
                <td><?php echo $dato['Apellido'];?></td>
                <td><?php echo $dato['Calle'];?></td>
                <td><?php echo $dato['Localidad'];?></td>
                <td><?php echo $dato['Movil'];?></td>
                <td><?php echo $dato['Email'];?></td>
                <td><?php echo $dato['Website'];?></td>
                <td><?php echo $dato['Notas'];?></td>
                <td><input type="button" onclick="location.href='../controllers/controller.EditarContacto.php?id=<?php echo $dato['Id'];?>'" value="Editar Contacto"></td>
                <td><input type="button" onclick="location.href='../controllers/controller.BorrarContacto.php?id=<?php echo $dato['Id'];?>'" value="Borrar Contacto"></td>
                <?php endif;?>
            </tr>
        <?php endforeach;?> 
    <?php endif;?>
    </tr>
    </table>
</div>

<?php
require 'view.footer.php';
?>