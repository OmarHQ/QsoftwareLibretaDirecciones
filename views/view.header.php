<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0656c6ac87.js" crossorigin="anonymous"></script>
    <title>Libreta de Direcciones</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
<header>
        <div class="contenedor">
            <div class= "logo izquierda">
                <p>
                    <h2>LIBRETA DE DIRECCIONES</h2>
                </p>
            </div>
            <div class="derecha">
               <form action="controllers/controller.Buscar.php" method="GET" name="busqueda" class="buscar">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>
                <nav class="menu">
                    <ul>
                    <li><input type="button" onclick="location.href='controllers/controller.CrearContacto.php'" value="Crear Contacto"><i class="fa fa-address-book"></i></li>
                    <li><input type="button" onclick="location.href='controllers/controller.FiltrarContactos.php'" value="Filtrar"><i class="fa fa-filter"></i></li>
                    <li><input type="button" onclick="location.href='controllers/controller.MesNacimiento.php'" value="Filtrar por fecha"><i class="fa fa-filter"></i></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>