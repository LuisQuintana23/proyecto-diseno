<?php include("includes/header.php")?>
<?php include("includes/navbar.php")?>


<?php include("db.php")?>

<div class="container p-3">
    <div class="row">
    <div class="col-md-4">

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


    </div>
    </div>
</div>

<?php include("includes/footer.php")?>


