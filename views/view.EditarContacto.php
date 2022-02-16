<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0656c6ac87.js" crossorigin="anonymous"></script>
    <title>Libreta de Direcciones</title>
    <link rel="stylesheet" href="../css/estilosEditarContacto.css">    
</head>

<body>
    
    <div class="mainscreen">
   
      <div class="card">
        
            <div class="leftside">
            <img
                src="../img/Contact.png"
                class="product"
                alt="Shoes"
            />
            </div>
        
            <div class="rightside">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                
                <h1>Edición de Contacto </h1>
                <input type="hidden" name="id" value="<?php echo $contacto['Id'];?>">
                <p>Nombre</p>
                <input type="text" class="inputbox" name="nombre" value="<?php echo $contacto['Nombre'];?>" required />

                <p>Apellido</p>
                <input type="text" class="inputbox" name="apellido" value="<?php echo $contacto['Apellido'];?>" required />
                
                <p>Género</p>
                <select class="inputbox" name="genero" id="card_type">
                    <option value="<?php echo $contacto['Genero'];?>">Seleccione Género</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>

                <p>Calle</p>
                <input type="text" class="inputbox" value="<?php echo $contacto['Calle'];?>" name="calle"/>

                <p>Localidad</p>
                <select class="inputbox" name="localidad" id="card_type">
                    <option value="<?php echo $contacto['Localidad'];?>">Seleccione Localidad</option>
                    <option value="La Paz">La Paz</option>
                    <option value="Cochabamba">Cochabamba</option>
                    <option value="Santa Cruz">Santa Cruz</option>
                </select>

                <p>Teléfono Móvil</p>
                <input type="text" class="inputbox" name="movil" value="<?php echo $contacto['Movil'];?>" required />

                <p>e-mail</p>
                <input type="text" class="inputbox" value="<?php echo $contacto['Email'];?>" name="email"/>

                <p>Web Site</p>
                <input type="text" class="inputbox" value="<?php echo $contacto['Website'];?>" name="website"/>
                
                <p>Categoría</p>
                <select class="inputbox" name="categoria" id="card_type">
                    <option value="<?php echo $contacto['Categoria'];?>">Seleccione Categoría</option>
                    <option value='1'>1: Privado</option>
                    <option value='2'>2: Amigo</option>
                    <option value='3'>3: Pariente</option>
                    <option value='4'>4: Trabajo</option>
                </select>

                <p>Notas</p>
                <input type="text" class="inputbox" value="<?php echo $contacto['Notas'];?>" name="notas"/>

                <div class="expcvv">

                    <p class="expcvv_text">Fecha de Nacimiento</p>
                    <input type="date" class="inputbox" name="fecha" value="<?php echo $contacto['FechaNacimiento'];?>" id="exp_date"/>

                </div>
                
                <p></p>
                <input type="submit" class="button" value="Editar"></input>
                <!-- <button type="submit" class="button">Cancelar</button> -->
                </form>
            </div>
      </div>
    </div>
  
</body>
</html>