<?php
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
            $contra = $fila["contrasena"];
            $tipo = $fila["tipo"];
        }


    }

?>

<?php include("includes/header.php") ?>;

<div class="container p-2">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="">
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
                        <input type="password"  value="<?php echo $contra; ?>" class="form-control" name="contrasena"
                        placeholder="Contraseña" required minlength=8>
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
