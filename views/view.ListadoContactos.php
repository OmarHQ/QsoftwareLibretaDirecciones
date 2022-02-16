<?php
require 'view.header.php';
?>

<div class="table-wrapper">
    <table class="fl-table">
    <h2>Lista de Contactos</h2>
    
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
   
        <?php foreach ($contactos as $dato):?>
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
                <td><input type="button" onclick="location.href='controllers/controller.EditarContacto.php?id=<?php echo $dato['Id'];?>'" value="Editar Contacto"></td>
                <td><input type="button" onclick="location.href='controllers/controller.BorrarContacto.php?id=<?php echo $dato['Id'];?>'" value="Borrar Contacto"></td>
                <?php endif;?>
            </tr>
        <?php endforeach;?> 
    </tr>
    </table>
</div>

<?php
require 'view.footer.php';
?>