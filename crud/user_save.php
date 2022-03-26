<?php

include("db.php");


if (isset($_POST["btn_guardar"])){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $usuario = $_POST["usuario"];
    $direccion = $_POST["direccion"];
    $correo = $_POST["correo"];
    $contra = $_POST["contrasena"];
    $tipo = $_POST["tipo"];

    //echo "Nombre: ".$nombre." Apellido: ".$apellido. " Usuario: ".$usuario.
    //" Direccion: ".$direccion. " Email: ".$correo.
    //" Contra: ".$contra. " Tipo: ".$tipo;

    $query_select = "SELECT * FROM usuario";

    $query_insert = "INSERT INTO usuario(nombre, apellido, nombre_usuario, direccion, correo, contrasena, tipo) VALUES ('$nombre', '$apellido', '$usuario', '$direccion', '$correo', MD5('$contra'), '$tipo')";
    //----CONSULTA
    $resultado = mysqli_query($conexion, $query_insert);
    if (!$resultado){
        die("El usuario no se ha registrado");
    }

    $_SESSION['message'] = 'Usuario '. $usuario. ' guardado';
    $_SESSION['message_type'] = 'success';


    header("Location: crud.php");

}

?>