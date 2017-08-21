<?php
	$server = "localhost"; //direccion del servidor de mysql
	$mysql_usr = "root"; //usuario del servidor de mysql
	$mysql_pass = "root"; //contraseña del servidor de mysql
	$mysql_db = "definitiva"; //base de datos que vamos a usar
	//conectamos al servidor con todos esos parametros
	$BBDD = mysqli_connect($server, $mysql_usr, $mysql_pass, $mysql_db)
		or die("Error al conectar con la base de datos :'(");
	//recogemos los datos del formulario mediante POST
	$usuario = $_POST["cajanombre"];
	$contrasenya = $_POST["cajacontra"];
    $repecontrasenya = $_POST["cajarepe"];
    $email = $_POST["cajaemail"];
	//hacemos la consulta sobre el usuario

	$query = "INSERT INTO usuarios (usuaris, contrasenya, repeteix_contrasenya,email) VALUES ('$usuario','$contrasenya','$repecontrasenya','$email')";
	$result = mysqli_query($BBDD, $query);
	//comprobamos que no de ningun error la consulta
	if(!$result){
	  echo mysqli_error($BBDD);
	}
	//comprobamos que el usuario y contraseña sean correctos
	if(mysqli_num_rows($result) == 1){
		echo "Validado!!";
	} else {
		echo "REGISTRADO!!";
	}
	//cerramos la conexion con mysql
	mysqli_close($BBDD);
?>