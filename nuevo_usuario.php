<?php
    // se realiza conexión con la base de datos
    include('conexion_bd.php');
    // captura de datos del formulario de registro
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    //se insertan los datos a la base de datos por SQL
    $consulta="INSERT INTO `datos` (`Id`, `Nombre`, `Usuario`, `Clave`) VALUES (NULL, '$nombre', '$usuario', '$clave');";
    //consulta si el registro ha sido exitoso o genera error
    $resultado = mysqli_query($conexion,$consulta) or die("error de registro");
    // mensaje de alerta informando el registro correcto
    echo "<script>
                alert('Registro exitoso');
                window.location= 'index.php'
    </script>";
    mysqli_close($conexion);
?>