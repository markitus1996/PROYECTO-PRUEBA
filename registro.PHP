<?php
	$server = "localhost"; //direccion del servidor de mysql
	$mysql_usr = "root"; //usuario del servidor de mysql
	$mysql_pass = ""; //contraseña del servidor de mysql
	$mysql_db = "Proyecto"; //base de datos que vamos a usar
	//conectamos al servidor con todos esos parametros
	$BBDD = mysqli_connect($server, $mysql_usr, $mysql_pass, $mysql_db)
		or die("Error al conectar con la base de datos :'(");
	//recogemos los datos del formulario mediante POST
	$email = $_POST["cajaemail"];
	$contrasenya = $_POST["cajacontra"];


	//hacemos la consulta sobre el usuario
	$query = "SELECT  id  FROM usuarios WHERE  nombre ='$email' AND contrasenya ='$contrasenya'";
	$result = mysqli_query($BBDD, $query);
	//comprobamos que no de ningun error la consulta
	if(!$result){
	  echo mysqli_error($BBDD);
	}
	//comprobamos que el usuario y contraseña sean correctos
	if(mysqli_num_rows($result) == 1){
		echo "HOLA";
	} else {
		echo "usuarios o contrassenya incorrectos!!";
	}
	//cerramos la conexion con mysql
	mysqli_close($BBDD);
?>
