<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <!--vinculación hoja de estilos --> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Formulario de Registro--> 
    <section class="formulario"> 
        <h1>Usuario nuevo</h1>
        <form method=post action=nuevo_usuario.php>
        <p>Nombre <input class="textos" type="text" placeholder="ingrese su nombre" name="nombre"></p>
        <p>Usuario <input class="textos" type="text" placeholder="ingrese su usuario" name="usuario"></p>
        <p>Contraseña <input class="textos" type="text" placeholder="ingrese su clave" name="clave"></p>
        <input class="boton" type="submit" value ="registrarse">
        <!-- botón de regreso -->
        <button class="boton" type="button" onclick="location.href='index.php'">volver a iniciar sesión</button> 
        </form>
    </section>    
</body>
</html>