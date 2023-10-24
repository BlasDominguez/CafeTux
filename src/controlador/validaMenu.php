<?php

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    session_start();
    $_SESSION['correo'] = $correo;

    $conexion =mysqli_connect("localhost","root","root","cafetux");

    $consulta = "SELECT * FROM usuarios WHERE CorreoUsuario= '$correo' AND contrasena ='$contrasena'";
    $resultado =mysqli_query($conexion,$consulta);

    $filas=mysqli_fetch_array($resultado);

    if($filas['id_cargo']==1){
        header('location:../../proveedor/index.php');
    } else
    if($filas['id_cargo']==2){
        header('location:../../_menu.html');
    }

    
?>