<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>Excelsius Salud -Registro de clientes</title>
	<link rel="stylesheet" href="css/registro.css">
</head>
<body>
<h1>Registrate en nuestro sistema</h1>
<form action="registrar.php" method="post" class="form-register">
<h2 class="form-titulo">CREA UNA CUENTA</h2>
<div class="contenedor-inputs">
    <input type="text"name="nombre" placeholder="Nombre" class="input-48" required>
    <input type="text" name="apellidos" placeholder="Apellidos" class="input-48" required>
    <input type="email" name="email" placeholder="E-mail" class="input-100" required>
    <input type="text" name="usuario" placeholder="Usuario" class="input-48"required>
    <input type="password" name="clave" placeholder="Contraseña" class="input-48" required>
 
    <input type="submit" value="Registrar" class="btn-enviar">
    <p class="form-link">¿Ya tienes una cuenta?<a href="login.html">Ingresa aqui</a></p>
</div>
</form>
</body>
</html>
