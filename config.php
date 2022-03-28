<?php
    $host = "142.93.184.138"; 
    $dbname = "proyecto_web"; 
    $username = "refugio"; 
    $password = "vivaAMLO777$$$";
    $usuario = $_POST['usuario'];
    $contra = $_POST['contrasenia'];
    try { 
        $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password); 
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $consulta== $db->query("SELECT * from usuario where nombre_usuario='$usuario' and contrasena=md5($contra)");
        $aux=$consulta->fetch();
        if($consulta){
            header("location:index.html")
        }else{
            echo ("Usuario no encontrado");
        }
    }catch (PDOException $exception){ 
        die("Connection error: " . $exception->getMessage()); 
    }
?> 