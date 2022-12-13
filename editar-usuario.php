<?php include("./includes/header.php") ?>


<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT u.id as id, u.names as names, u.surnames as surnames, u.document_number as document, u.email as email, r.id as rol, u.status as status
    ,u.address as address, u.gender as gender, dt.id as document_type, u.cellphone as cellphone 
    FROM user as u INNER JOIN rol as r ON u.rol_id= r.id INNER JOIN document_type AS dt ON u.document_type_id= dt.id WHERE u.id= $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $names = $row['names'];
        $surnames = $row['surnames'];
        $address = $row['address'];
        $gender = $row['gender'];
        $document_type = $row['document_type'];
        $rol = $row['rol'];
        $document_number = $row['document'];
        $cellphone = $row['cellphone'];
        $email = $row['email'];
    }
    # code...
}


?>

<div class="row">
    <?php include("./includes/aside.php") ?>
    <section class="col-9 section-general">
        <?php include("./includes/nav.php") ?>
        <div class="container">

            <form class="mt-4" action="./controller/user/edit.php?id=<?php echo $id ?>" method="POST">
                <h1 class="text-center">Editar usuario</h1>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Nombre</label>
                        <input type="text" class="form-control" name="names" value="<?php echo $names ?>" placeholder="Escriba sus nombres" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Apellidos</label>
                        <input type="text" class="form-control" name="surnames" value="<?php echo $surnames ?>" placeholder="Escriba sus apellidos completos " required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Dirección</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $address ?>" placeholder="Escriba dirección " required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Genero</label>
                        <select class="form-control" name="gender" required>
                            <option value="M" <?php if ($gender == 'M') echo ' selected="selected"'; ?>>Masculino</option>
                            <option value="F" <?php if ($gender == 'F') echo ' selected="selected"'; ?>>Femenino</option>
                            <option value="O" <?php if ($gender == 'O') echo ' selected="selected"'; ?>>otros</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Tipo de documento</label>
                        <select class="form-control" name="document_type" required>
                            <?php
                            $query = "SELECT * FROM document_type";
                            $result_document = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result_document)) { ?>
                                <option value="<?php echo $row['id'] ?>" <?php if ($document_type == $row['id']) echo ' selected="selected"'; ?>><?php echo $row['name'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Rol</label>
                        <select class="form-control" name="rol" required>
                            <?php
                            $query = "SELECT * FROM rol";
                            $result_document = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result_document)) { ?>
                                <option value="<?php echo $row['id'] ?>" <?php if ($rol == $row['id']) echo ' selected="selected"'; ?>><?php echo $row['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Número de documento</label>
                        <input type="number" class="form-control" name="document_number" value="<?php echo $document_number ?>" placeholder="Digite su número de documento" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Telefono</label>
                        <input type="number" class="form-control" name="cellphone" value="<?php echo $cellphone ?>" placeholder="Digite su número de telefono" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Correo eléctrónico</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $email ?>" placeholder="ejemplo@gmail.com" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="prueba123">
                    </div>

                    <!-- <div class="custom-file form-group col-md-12 mb-4">
            <input type="file" class="custom-file-input" id="customFileLang" lang="es">
            <label class="custom-file-label" for="customFileLang">Seleccionar foto</label>
          </div> -->
                </div>

        </div>

        <div class="row justify-content-center">
            <button class="btn btn-success" type="submit" name="edit_user">Actualizar</button>
            <a class="btn btn-danger ml-4" href="usuario.php" type="submit">Cancelar</a>

        </div>



        </form>
</div>
</section>
</div>

<?php include("./includes/footer.php") ?>