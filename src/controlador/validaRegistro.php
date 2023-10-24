<?php
    include('../modelo/conexionPDO.php');

    if(!empty($_POST['correo'])&&!empty($_POST['contrasena'])&&!empty($_POST['nombre'])&&!empty($_POST['apellido'])&&!empty($_POST['direccion'])&&!empty($_POST['telefono'])&&empty($_POST['tipo'])){

        $correo = $_POST['correo']; 
        $contra = $_POST['contrasena'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $tipo = $_POST['tipo'];

        $sql = "INSERT INTO usuarios( NombreUsuario, ApellidoUsuario, CorreoUsuario, contrasena, direccion, telefono, id_cargo) VALUES (:nombre,:apellido,:correo,:contra,:direc,:tel,:tipo)";
        $stmt = $conexion->prepare($sql);
        $stmt -> bindParam(":nombre",$nombre);
        $stmt -> bindParam(":apellido",$apellido);
        $stmt -> bindParam(":correo",$correo);
        $stmt -> bindParam(":contra",$contra);
        $stmt -> bindParam(":direc",$direccion);
        $stmt -> bindParam(":tel",$telefono);
        $stmt -> bindParam(":tipo",$tipo);

        if($stmt -> execute()){
            header("Location: ../../_menu.html");
        } else print("Error al registrar Datos");
        

    } else print ("Todos los campos deben de estar llenos");


?>