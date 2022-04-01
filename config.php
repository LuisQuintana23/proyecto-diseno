<?php
    $host = "142.93.184.138"; 
    $dbname = "proyecto_web"; 
    $username = "refugio"; 
    $password = "metroBUS$$$3232";
    $usuario = $_POST['usuario'];
    $contra = md5($_POST['contrasenia']);
    try { 
        $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password); 
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $consulta= $db->query("SELECT * FROM usuario WHERE nombre_usuario='$usuario' AND contrasena='$contra'");
        $aux=$consulta->fetch();
        if($aux){
            if($aux){
                header("location:index.html");
            }else{
                echo "<script>alert('No se pudo acceder al sistema');window.history.go(-1);</script>";
            }
        }else{
            echo "<script>alert('No se pudo acceder al sistema');window.history.go(-1);</script>";
        }
    }catch (PDOException $exception){ 
        die("Connection error: " . $exception->getMessage()); 
    }
?> 
