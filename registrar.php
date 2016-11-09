<?php
require_once('conn/connect.php');
$nombre = $_POST["nombre"];
$apellidos= $_POST["apellidos"];
$email= $_POST["email"];
$usuario= $_POST["usuario"];
$clave= $_POST["clave"];


$consulta = "INSERT INTO usuario (nombres, apellidos, correo, nombre_usuario, clave)  VALUES('$nombre','$apellidos', '$email','$usuario', '$clave')";
$consulta_verificar_usuario="SELECT * FROM usuario WHERE usuario='$usuario'";
$consulta_verificar_email="SELECT * FROM usuario WHERE correo='$email'";
$verificar_usuario=$connect->query($consulta_verificar_usuario);
$verificar_email=$connect->query($consulta_verificar_email);
$fila=mysqli_num_rows($verificar_usuario);
$fila_mail=mysqli_num_rows($verificar_email);

    if($fila>0)
    {
        echo '<script>
        alert("Nombre de usuario no se encuentra disponible");
        windows.history.go(-1);
        </script>';
    }
        else

    {
        if($fila_mail>0)
           echo '<script>
        alert("Email en uso");
        windows.history.go(-1);
        </script>';
        else
        {
            $resultado=$connect->query($consulta);
            echo'Usuario registrado exitosamente';
        }
    }


