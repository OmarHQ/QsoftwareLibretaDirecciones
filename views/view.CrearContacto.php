<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0656c6ac87.js" crossorigin="anonymous"></script>
    <title>Libreta de Direcciones</title>
    <link rel="stylesheet" href="../css/estilosFormularioRegistro.css">    
</head>

<body>
    <section id="contact">
	<div class="sectionheader">	<h1>CREAR CONTACTO</h1></div>
	    <article>
	    <p>Llene los campos necesarios para su Libreta de Contactos</p>
		
	<label for="checkcontact" class="contactbutton"><div class="mail"></div></label><input id="checkcontact" type="checkbox">
	
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="contactform">
				
                <p class="input_wrapper"><input type="text" name="nombre" value=""  id ="nombre" required><label for="nombre">NOMBRE</label></p>
				
                <p class="input_wrapper"><input type="text" name="apellido" value=""  id ="apellido" required><label for="apellido">APELLIDO</label></p>
				
                <p class="input_wrapper"><input type="text" name="calle" value=""  id ="calle"><label for="calle">CALLE</label></p>

                <p class="input_wrapper"><input type="text" name="localidad" value=""  id ="localidad"><label for="localidad">LOCALIDAD</label></p>

                <p class="input_wrapper"><input type="text" name="movil" value=""  id ="movil"><label for="movil">CELULAR</label></p>

                <p class="input_wrapper"><input type="text" name="email" value=""  id ="email"><label for="email">E-MAIL</label></p>

                <p class="input_wrapper"><input type="text" name="website" value=""  id ="website"><label for="website">WEB SITE</label></p>

                <p class="input_wrapper"><input type="text" name="notas" value=""  id ="notas"><label for="notas">NOTAS</label></p>
                				
                <p class="submit_wrapper"><input type="submit" value="CREAR CONTACTO"></p>			
			
            </form>
	    </article>
    </section>
</body>
</html>