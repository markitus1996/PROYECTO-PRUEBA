<?php
  $server = "localhost";
  $userdb = "root";
  $passdb = "";
  $database = "Proyecto";

  $conexion = new mysqli($server, $userdb, $passdb, $database);
  $conexion->set_charset("utf8");
?>

<html manifest="" lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>CRM Postventa</title>
    </head>
<body>
<div align="center">
<img src="img/Logo%20AVI.png">
</div>
<div align = "center">
<H4>Username</H4>
<input class="input">
<H4>Password</H4>
<input class="input" type="password">
</div>
<div align="center">
<img src="img/Logo%20AVI.png">
</div>
</body>
</html>
