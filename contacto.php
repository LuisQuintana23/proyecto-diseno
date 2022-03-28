<?php
    $host = "142.93.184.138"; 
    $dbname = "proyecto_web"; 
    $username = "refugio"; 
    $password = "vivaAMLO777$$$";
    $nombre = $_POST['nombre'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];
    $motivo=$_POST['motivo'];
    $modo=$_POST['modo'];
    $text=$_POST['coment'];

    $insert="INSERT INTO comentario (nombre, apellido, correo, motivo, modo,comentario) VALUES
    ('$nombre','$apellido','$correo','$motivo','$modo','$text')";
    try { 
        $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password); 
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result= $db->query($insert);
        echo "<script>alert('Comentario enviado.');location.href='index.html';</script>";
        
    }catch (PDOException $exception){
        die("Connection error: " . $exception->getMessage()); 
    }
?> 