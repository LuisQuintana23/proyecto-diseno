<?php
    $host = "142.93.184.138"; 
    $dbname = "proyecto_web"; 
    $username = "refugio"; 
    $password = "vivaAMLO777$$$";
    $nombre = $_POST['nombre'];
    $apellido=$_POST['apellido'];
    $usuario=$_POST['usuario'];
    $direccion=$_POST['direccion'];
    $correo=$_POST['correo'];
    $contra = md5($_POST['contrasena']);

    $insert="INSERT INTO usuario (nombre, apellido, nombre_usuario, direccion, correo, contrasena,tipo) VALUES
    ('$nombre','$apellido','$usuario','$direccion','$correo','$contra','U')";
    try { 
        $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password); 
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result= $db->query($insert);
        echo "<script>alert('Usuario creado.');location.href='login.html';</script>";
    }catch (PDOException $exception){
        if( strpos($exception->errorInfo[2],'correo_un')==true){
            echo "<script>alert('Usuario no creado. Correo ya está en uso');window.history.go(-1);</script>";
        }else{
            echo "<script>alert('Usuario no creado. Usuario ya está en uso');window.history.go(-1);</script>";
        }
    }
?> 