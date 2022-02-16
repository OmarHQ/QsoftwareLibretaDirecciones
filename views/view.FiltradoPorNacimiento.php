<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0656c6ac87.js" crossorigin="anonymous"></script>
    <title>Libreta de Direcciones</title>
    <link rel="stylesheet" href="../css/estilosFiltrado.css">
</head>

<body>
    <header>
     <h1>Filtrar Según Fecha de Nacimiento</h1>
    </header>
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <table>
            <thead>
                
                <th>Localidad</th>
                <th>Mes de Nacimiento</th>
                
            </thead>
            <tr>
                
                <td>
                    <select  name="localidad">
                        <option value=""></option>
                        <option value="La Paz">La Paz</option>
                        <option value="Cochabamba">Cochabamba</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                    </select>
                </td>
                
                <td>
                    <select  name="mesNacimiento">
                        <option value=""></option>
                        <option value="enero">enero</option>
                        <option value="febrero">febrero</option>
                        <option value="marzo">marzo</option>
                        <option value="abril">abril</option>
                        <option value="mayo">mayo</option>
                        <option value="junio">junio</option>
                        <option value="julio">julio</option>
                        <option value="agosto">agosto</option>
                        <option value="septiembre">septiembre</option>
                        <option value="octubre">octubre</option>
                        <option value="noviembre">noviembre</option>
                        <option value="diciembre">diciembre</option>
                    </select>
                </td>
                <td>
                    <input type="submit" name="filtrar" value="Filtrar">
                </td>
            </tr>
        </table>
    </form>
</br>
<div class="table-wrapper">
    <table class="fl-table">
               
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Estado</th>
        <th>Localidad</th>
        <th>Fecha de Nacimiento</th>
        
    </tr>
    </thead>
    
    <tr>
        <?php if (isset($resultado[0]['Genero']) && isset($resultado[0]['Categoria']) && isset($resultado[0]['Localidad'])):?>
        <?php foreach ($resultado as $dato):?>
            <tr>
                
                <td><?php echo $dato['Id'];?></td>
                <td><?php echo $dato['Nombre'];?></td>
                <td><?php echo $dato['Estado'];?></td>
                <td><?php echo $dato['Localidad'];?></td>
                <td><?php echo $dato['FechaNacimiento'];?></td>
                
            </tr>
        <?php endforeach;?> 
        
        <?php endif;?>
    </tr>
    </table>
</div>

</body>
</html>