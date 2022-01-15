<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!--vinculación hoja de estilos --> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- valida inicio de sesión-->    
    <?php
        session_start();
        if(isset($_SESSION['usuario'])){
            header("location: home.php");
        }
    ?><?php
    error_reporting(0);
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: home.php");
    }
    ?>
    <!-- Formulario de acceso--> 
    <section class="formulario"> 
        <h1>Bienvenido</h1>
        <form method=post action=valida.php>
        <p>Usuario <input class="textos" type="text" placeholder="ingrese su usuario" name="usuario"></p>
        <p>Contraseña <input class="textos" type="text" placeholder="ingrese su clave" name="clave"></p>
        <input class="boton" type="submit" value ="iniciar sesión">
        <button class="boton" type="button" onclick="location.href='registro.php'">registro</button>
        </form>
    </section>    
</body>
</html>



