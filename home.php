<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <section class=textos>
    
    <?php
    //valida que si se haya iniciado sesión
        session_start();
        if(!isset($_SESSION['usuario'])){
            echo'<script>
                    alert("debe iniciar sesión");
                    window.location = "index.php";
                </script>';
            session_destroy();
            die();
        }
        
        $user = $_SESSION['usuario']; //función de cadena, convierte todo a mayúscula
        echo "Bienvenido $user";
    ?>
    </section>

         
<!-- formulario de opciones-->
    <section class="formulario">
    <h2>Cambie de mayúscula a minúscula</h2> 
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="radio" name="opcion" value="1" />mayúscula <br />
            <input type="radio" name="opcion" value="2" />minúscula<br />
            <input type="submit" name="submit" value="Submit Form"><br>
    </section>
    <section class="formulario">
    <?php
        //importando datos desde el formulario de la misma página
        if(isset($_POST['submit']))
        {
        $name = $_POST['opcion'];
        //Aplicación de Switch
        switch($name){

            case 1:
            $str = strtoupper($user);
            echo $str;
            break;

            case 2:
            $str = strtolower($user);
            echo $str;
            break;
            }
        }
 
    ?>
    </section>


<section class="formulario"> 
<h2>Calculo fecha de nacimiento</h2>
</form>
    </br>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p> <input class="textos" type="text" placeholder="año/mes/día" name="fecha_dada"></p>
    <input type="submit" name="enviar" value="Submit Form"><br>
    </form>
</br>
    </section>
    <section class="formulario">
<?php
    //Función calculo de días de vida.

    if(isset($_POST['enviar']))
            {
    //fecha dada
        $fecha_dada = $_POST['fecha_dada'];
    // fecha actual
        $fecha_actual= date("Y/m/d");
    //Definción de la función
    function dias_pasados($fecha_inicial,$fecha_final)
    {
    $dias = (strtotime($fecha_inicial)-strtotime($fecha_final))/86400;
    $dias = abs($dias); $dias = floor($dias);
    return $dias;
    }
    //asignando datos a la función
    $fecha = dias_pasados($fecha_dada,$fecha_actual);    
    //presentando la función
    echo "$fecha días";
}
?>
</section>
</br>


<!--enlace para cerrar sesión -->
<a href = "cerrar_sesion.php"><p style="text-align:center">Cerrar sesión</a> 
</body>
</html>