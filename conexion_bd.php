<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conexión de la base de datos</title>
</head>
<body>
<?php
//conexión con la base de datos ubicando de foma global las credenciales de acceso y la tabla
$conexion = new mysqli('localhost', 'root', '12345', 'login');
		//Condicional para validar credenciales de acceso
        if($conexion -> connect_error){
			die("Error de conexión (" . $conexion -> connect_error . ")" );// si ha error anula la conexión e indica el error
		}
?>
</body>
</html>

