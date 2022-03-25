<?php
    include("db.php");

    if (isset($_GET['id_usuario'])){
        $id = $_GET['id_usuario'];
        $query_eliminar = "DELETE FROM usuario WHERE id_usuario = $id";
        $resultado_eliminar = mysqli_query($conexion, $query_eliminar);
        if (!$resultado_eliminar){
            die("La consulta fallo");
        }

        $_SESSION['message'] = 'Se ha eliminado al usuario';
        $_SESSION['message_type'] = 'danger';
        header("Location: crud.php");

    }

?>