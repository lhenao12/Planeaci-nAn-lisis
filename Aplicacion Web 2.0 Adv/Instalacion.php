<?php
//##############################Crear la tabla de usuarios#############################################
//Conexion
$conexion = mysql_connect("localhost","lhenao","Lehr1279");
if (!$conexion)
{
	
die('No se ha establecido conexion con la base de datos'.mysql_error());

}else{
//Peticion
mysql_select_db("blogs1",$conexion);

$sqlUsuarios = "CREATE TABLE usuarios(

	usuario varchar(40) Not null,
	contrasena varchar(40)Not Null,
	nombre varchar(40),
	apellidouno varchar(40),
	apellidodos varchar(40),
	titulo varchar(40),
	descripcion varchar(1500),
	foto varchar(40),
	webpersonal char(100),
	email varchar(80),
	permisos int
	
)";
//ejecutar
mysql_query($sqlUsuarios,$conexion);
//cerrar
mysql_close($conexion);

echo '<br><h2>Se ha Creado la tabla de Usuarios exitosamente</h2></br>';
}

//##############################Insertaremos Contenido de prueba en la tabla de usuarios##########################
//Conexion
$conexion = mysql_connect("localhost","lhenao","Lehr1279");
if (!$conexion)
{
	
die('No se ha establecido conexion con la base de datos'.mysql_error());

}else{

//Peticion
mysql_select_db("blogs",$conexion);

mysql_query("INSERT INTO usuarios(usuario,contrasena,nombre,apellidouno,apellidodos,titulo,descripcion,foto,webpersonal,email,permisos)VALUES('lhenao','Lehr1279','Luis Enrique','Henao','Rodriguez','Empezando BLOG','Este es el BLOG de primera instancia en PHP y Mysql','LEHR','www.lehr12.com.co','lhenao12@gmail.com',1)");

//ejecutar
//cerrar
mysql_close($conexion);

echo '<br><h2>Se ha Insertado en  la tabla de Usuarios exitosamente</h2></br>';
}
//##############################Crear la tabla de config usuarios#############################################
//Conexion
$conexion = mysql_connect("localhost","lhenao","Lehr1279");
if (!$conexion)
{
	
die('No se ha establecido conexion con la base de datos'.mysql_error());

}else{

//Peticion
mysql_select_db("blogs",$conexion);

$sqlConfig = "CREATE TABLE configusuarios(

	usuario varchar(40) Not null,
	piel varchar(40),
	respuestas varchar(40)
	
)";


//ejecutar
mysql_query($sqlConfig,$conexion);


//cerrar

mysql_close($conexion);

echo '<br><h2>Se ha Creado la tabla de ConfigUsuarios exitosamente</h2></br>';
}
//##############################Insertaremos Contenido de prueba en l configuracion de usuarios#########################
///Conexion
$conexion = mysql_connect("localhost","lhenao","Lehr1279");
if (!$conexion)
{
	
die('No se ha establecido conexion con la base de datos'.mysql_error());

}else{

//Peticion
mysql_select_db("blogs",$conexion);

mysql_query("INSERT INTO configusuarios(usuario,piel,respuestas)VALUES('lhenao','default','si')");

//ejecutar
//cerrar
mysql_close($conexion);

echo '<br><h2>Se ha Insertado en  la tabla de ConfigUsuarios exitosamente</h2></br>';

}



//##############################Crear la tabla posts#############################################
//Conexion
$conexion = mysql_connect("localhost","lhenao","Lehr1279");
if (!$conexion)
{
	
die('No se ha establecido conexion con la base de datos'.mysql_error());

}else{
//Peticion
mysql_select_db("blogs",$conexion);

$sqlPosts = "CREATE TABLE posts(

	utc int Not null,
	anio int, 
	mes int, 
	dia int,
	hora int, 
	minuto int,
	segundo int,
	usuario varchar(80),
	titulo varchar(120),
	subtitulo char(200),
	icono varchar(80),
	texto varchar(4000),
	imagen varchar(200),
	video  varchar(200), 
	sonido varchar(200) 
)";
//ejecutar
mysql_query($sqlPosts,$conexion);
//cerrar
mysql_close($conexion);

echo '<br><h2>Se ha Creado la tabla de POSTS exitosamente</h2></br>';
}

//##############################Insertaremos Contenido de prueba en la tabla de posts#############################
//Conexion
$conexion = mysql_connect("localhost","lhenao","Lehr1279");
if (!$conexion)
{
	
die('No se ha establecido conexion con la base de datos'.mysql_error());

}else{

//Peticion
mysql_select_db("blogs",$conexion);

mysql_query("INSERT INTO posts(utc,anio,mes,dia,hora,minuto,segundo,usuario,titulo,subtitulo,icono,texto,imagen,video,sonido)VALUES(0000000,2014,11,10,18,26,30,'lhenao','Este es  el primer Post','BienVenido al Blog temporal','lhenao','este es el primer post','imagen','video','sonido')");

//ejecutar
//cerrar
mysql_close($conexion);

echo '<br><h2>Se ha Insertado en  la tabla de POSTS exitosamente</h2></br>';
}
//##############################Crear la tabla de logs#############################################
//Conexion
$conexion = mysql_connect("localhost","lhenao","Lehr1279");
if (!$conexion)
{
	
die('No se ha establecido conexion con la base de datos'.mysql_error());

}else{
//Peticion
mysql_select_db("blogs",$conexion);

$sqlLogs = "CREATE TABLE logs(

	utc int Not null,
	anio int, 
	mes int, 
	dia int,
	hora int, 
	minuto int,
	segundo int,
	ip varchar(80),
	navegador varchar(300),
	usuario char(80),
	operacion varchar(80)
)";
//ejecutar
mysql_query($sqlLogs,$conexion);
//cerrar
mysql_close($conexion);

echo '<br><h2>Se ha Creado la tabla de Logs exitosamente</h2></br>';
}
//##############################Insertaremos Contenido de prueba en la tabla de logs###################
//Conexion
$conexion = mysql_connect("localhost","lhenao","Lehr1279");
if (!$conexion)
{
	
die('No se ha establecido conexion con la base de datos'.mysql_error());

}else{

//Peticion
mysql_select_db("blogs",$conexion);

mysql_query("INSERT INTO logs(utc,anio,mes,dia,hora,minuto,segundo,ip,navegador,usuario,operacion)VALUES(0000000,2014,11,10,18,26,30,'127.0.0.1','Chrome','lhenao','Create')");

//ejecutar
//cerrar
mysql_close($conexion);

echo '<br><h2>Se ha Insertado en  la tabla de Logs exitosamente</h2></br>';
}

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>