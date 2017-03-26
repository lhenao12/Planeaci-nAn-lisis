<?php
session_start(); 
$_SESSION['usuariotemporal'] = "lhenao";

$conexion = mysql_connect("localhost","lhenao","Lehr1279");

$db = mysql_select_db('blogs');

$peticion = "call sp_variablesusuario('".$_SESSION['usuariotemporal']."');";
$resultado = mysql_query($peticion, $conexion) or die('Error en el query: '.mysql_error());

while($fila = mysql_fetch_assoc($resultado)){

$_SESSION['usuario'] = $fila['usuario'];
$_SESSION['nombre'] = $fila['nombre'];
$_SESSION['apellidouno'] = $fila['apellidouno'];
$_SESSION['apellidodos'] = $fila['apellidodos'];
$_SESSION['titulo'] = $fila['titulo'];
$_SESSION['descripcion'] = $fila['descripcion'];
$_SESSION['foto'] = $fila['foto'];
$_SESSION['webpersonal'] = $fila['webpersonal'];
$_SESSION['email'] = $fila['email'];
$_SESSION['permisos'] = $fila['permisos'];
	
}

mysql_close($conexion);

echo'<"html >
<head>
<meta http-equiv="REFRESH" content="0;url=/Aplicacion Web 2.0 Adv/index.php">
</head>

<body>
</body>
</html>' ;  

?>