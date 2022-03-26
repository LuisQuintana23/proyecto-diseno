<?php
    //mostrara un nuevo formulario y tambien recibira los datos
    include("db.php");

    if(isset($_GET['id_usuario'])){
        $id = $_GET['id_usuario'];
        //primero se traen todos los datos
        $query_select = "SELECT * FROM usuario WHERE id_usuario = $id";
        $resultado_select = mysqli_query($conexion, $query_select);

        if (mysqli_num_rows($resultado_select) == 1) {//obtiene el numero de filas
            $fila = mysqli_fetch_array($resultado_select);
            $nombre = $fila["nombre"];
            $apellido = $fila["apellido"];
            $usuario = $fila["nombre_usuario"];
            $direccion = $fila["direccion"];
            $correo = $fila["correo"];
            $contra_original = $fila["contrasena"];//contra 2 ya que nos servira si no se quiere cambiar la contrasena
            $tipo = $fila["tipo"];
        }


    }

    if (isset($_POST['btn_update'])){//cuando se presiona el boton de actualizar se ejecuta
        $id = $_GET['id_usuario'];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $usuario = $_POST["usuario"];
        $direccion = $_POST["direccion"];
        $correo = $_POST["correo"];
        $contra = $_POST["contrasena"];
        $tipo = $_POST["tipo"];
        
        if($contra == ""){//verifica si el campo esta vacio
            //no se actualiza contrasena
            $query_update = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', nombre_usuario='$usuario', direccion='$direccion', correo='$correo', tipo='$tipo' WHERE id_usuario = '$id'";
        } else{
            //se actualiza contrasena y se cifra
            $query_update = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', nombre_usuario='$usuario', direccion='$direccion', correo='$correo', contrasena=MD5('$contra'), tipo='$tipo' WHERE id_usuario = '$id'";
        }

        mysqli_query($conexion, $query_update);
        header("Location: crud.php");
    }

?>

<?php include("includes/header.php") ?>;

<div class="container p-2">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <!-- Se llama a si mismo ya que crear el formulario y tambien cambia datos -->
                <form action="user_edit.php?id_usuario=<?php echo $_GET['id_usuario']; ?>" method="POST">
                    <div class="form-group mb-2">
                        <input type="text" value="<?php echo $nombre; ?>" class="form-control" name="nombre"
                        placeholder="Nombre" autofocus required>
                    </div>

                    <div class="form-group mb-2">
                        <input type="text" value="<?php echo $apellido; ?>" class="form-control" name="apellido"
                        placeholder="Apellido" required>
                    </div>

                    <div class="form-group mb-2">
                        <input type="text"  value="<?php echo $usuario; ?>"  class="form-control" name="usuario"
                        placeholder="Usuario" required>
                    </div>

                    <div class="form-group mb-2">
                        <input type="text"  value="<?php echo $direccion; ?>" class="form-control" name="direccion"
                        placeholder="Direccion" required>
                    </div>

                    <div class="form-group mb-2">
                        <input type="email"  value="<?php echo $correo; ?>"  class="form-control" name="correo"
                        placeholder="Correo" required>
                    </div>

                    <div class="form-group mb-2">
                        <input type="password" class="form-control" name="contrasena"
                        placeholder="Contraseña (Opcional)">
                    </div>

                    <div class="form-group mb-2">
                        <input type="text"  value="<?php echo $tipo; ?>" class="form-control" name="tipo"
                        placeholder="Tipo" required>
                    </div>

                    <button class="btn btn-success" name="btn_update">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>;
