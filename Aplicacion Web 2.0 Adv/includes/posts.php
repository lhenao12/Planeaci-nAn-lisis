<?php
//session_start(); 
$_SESSION['usuariotemporal'] = "lhenao";

$conexion = mysql_connect("localhost","lhenao","Lehr1279");

$db = mysql_select_db('blogs');

$peticion = "call sp_post_inicial('".$_SESSION['usuariotemporal']."');";
$resultado = mysql_query($peticion, $conexion) or die('Error en el query: '.mysql_error());

while($fila = mysql_fetch_assoc($resultado)){

echo"

<article style='background: rgbd(153,153,153)'>
		 <div id='Escudo de los henao'<a href='#'><img src=\"/Aplicacion Web 2.0 Adv/images/".$fila['imagen'].".jpg\");></a></div>
		 	<time>".$fila['anio']."/".$fila['mes']." /".$fila['dia']."</time>
			<h3>".$fila['titulo']."</h3>
			<h4>".$fila['subtitulo']."</h4>
			<p>".$fila['texto']."</p>
</article>";
	
}

mysql_close($conexion);

?>