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
     <h1>Filtrar Según Criterio</h1>
    </header>
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <table>
            <thead>
                <th>Genero</th>
                <th>Categoria</th>
                <th>Localidad</th>
                <th>Celular</th>
                <th>Email</th>
            </thead>
            <tr>
                <td>
                    <select name="genero" id="genero">
                        <option value=""></option>
                        <option value="masculino">Maculino</option>
                        <option value="femenino">Femenino</option>
                    </select>
                </td>
                <td>
                    <select  name="categoria">
                        <option value=""></option>
                        <option value="1">Privado</option>
                        <option value="2">Amigos</option>
                        <option value="3">Parientes</option>
                        <option value="4">Trabajo</option>
                    </select>
                </td>
                <td>
                    <select  name="localidad">
                        <option value=""></option>
                        <option value="La Paz">La Paz</option>
                        <option value="Cochabamba">Cochabamba</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                    </select>
                </td>
                <td>
                    <input type="checkbox" name="check[0]" value="movil">
                </td>
                <td>
                    <input type="checkbox" name="check[1]" value="email"/>
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
        <th>Apellido</th>
        <th>Calle</th>
        <th>Localidad</th>
        <th>Movil</th>
        <th>Email</th>
        <th>WebSite</th>
        <th>Notas</th>
    
    </tr>
    </thead>
    
    <tr>
        <?php if (isset($resultado[0]['Genero']) && isset($resultado[0]['Categoria']) && isset($resultado[0]['Localidad'])):?>
        <?php foreach ($resultado as $dato):?>
            <tr>
                
                <td><?php echo $dato['Id'];?></td>
                <td><?php echo $dato['Nombre'];?></td>
                <td><?php echo $dato['Apellido'];?></td>
                <td><?php echo $dato['Calle'];?></td>
                <td><?php echo $dato['Localidad'];?></td>
                <td><?php echo $dato['Movil'];?></td>
                <td><?php echo $dato['Email'];?></td>
                <td><?php echo $dato['Website'];?></td>
                <td><?php echo $dato['Notas'];?></td>
                
            </tr>
        <?php endforeach;?> 
        
        <?php endif;?>
    </tr>
    </table>
</div>

</body>
</html>