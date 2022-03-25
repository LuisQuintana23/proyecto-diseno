<?php include("includes/header.php")?>
<?php include("includes/navbar.php")?>


<?php include("db.php")?>

<div class="container p-3">
    <div class="row">
    <div class="col-md-4">

        <?php if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <!--Limpiar datos de sesion para que aviso no aparezca al recargar pagina-->
        <?php session_unset();} ?>


        <div class="card card-body">
            <!--Formulario-->
            <form action="user_save.php" method="POST">

                <div class="form-group mb-2">
                    <input type="text" class="form-control" name="nombre"
                    placeholder="Nombre" autofocus required>
                </div>

                <div class="form-group mb-2">
                    <input type="text" class="form-control" name="apellido"
                    placeholder="Apellido" required>
                </div>

                <div class="form-group mb-2">
                    <input type="text" class="form-control" name="usuario"
                    placeholder="Usuario" required>
                </div>

                <div class="form-group mb-2">
                    <input type="text" class="form-control" name="direccion"
                    placeholder="Direccion" required>
                </div>

                <div class="form-group mb-2">
                    <input type="email" class="form-control" name="correo"
                    placeholder="Correo" required>
                </div>

                <div class="form-group mb-2">
                    <input type="password" class="form-control" name="contrasena"
                    placeholder="Contraseña" required minlength=8>
                </div>

                <div class="form-group mb-2">
                    <input type="text" class="form-control" name="tipo"
                    placeholder="Tipo" required>
                </div>

                <input type="submit" class="btn btn-success btn-block mb-2"
                name="btn_guardar" value="Guardar">

            </form>
        </div>

    </div>
    <div class="col-md-8">
            <table class="table table-bordered">
                <thead>

                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Dirección</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Tipo</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query_consulta = "SELECT * FROM usuario";
                        $array_usuarios = mysqli_query($conexion, $query_consulta);

                        while($fila = mysqli_fetch_array($array_usuarios)){ ?>
                            <tr>
                                <td><?php echo $fila['id_usuario']?></td>
                                <td><?php echo $fila['nombre']?></td>
                                <td><?php echo $fila['apellido']?></td>
                                <td><?php echo $fila['nombre_usuario']?></td>
                                <td><?php echo $fila['direccion']?></td>
                                <td><?php echo $fila['correo']?></td>
                                <td><?php echo $fila['contrasena']?></td>
                                <td><?php echo $fila['tipo']?></td>
                                <td>
                                    <a href="user_edit.php?id_usuario=<?php echo $fila['id_usuario']?>">
                                        <i class="fa fa-pencil-square-o btn btn-warning"></i> 
                                    </a>
                                    <a href="user_delete.php?id_usuario=<?php echo $fila['id_usuario']?>">
                                        <i class="fa fa-trash btn btn-danger"></i>
                                    </a>
                                </td>
                            </tr>                            


                        <?php } ?>
                </tbody>
            </table>

    </div>
    </div>
</div>

<?php include("includes/footer.php")?>


