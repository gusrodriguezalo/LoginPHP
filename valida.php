<?php
    error_reporting(E_ALL ^ E_NOTICE);
    //captura de usuario y clave escritos en el formulario por metodo POST
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    //inicia sesión en MySql
    session_start();
    //realizar conexión con la base de datos
    include('conexion_bd.php');
    //se realiza la consulta, buscando que en la base de datos se encuentre el mismo usuario y clave digitados
    $consulta="SELECT * FROM datos WHERE Usuario = '$usuario' AND clave = '$clave'";
    //realiza la consulta de la tabla y valida que los datos sean iguales
    $resultado = mysqli_query($conexion, $consulta);
    //regresa el número de filas y lo almacena en la variable $filas
    $filas = mysqli_num_rows($resultado);
      
        if($filas > 0) //si el valor es correcto o True remite a la página home, de lo contrario genera un mensaje y vuelve a cargar index.
            {
            $_SESSION['usuario'] = $usuario;
            header("location:home.php");
            }
        else{
            
            include("index.php");
            echo'<script>
                    alert("usuario o clave equivocados");
                 </script>';
            }    
             
?>