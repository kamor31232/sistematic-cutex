<?php include("./includes/header.php") ?>


<div class="row">
  <?php include("./includes/aside.php") ?>
  <section class="col-9 section-general">
    <?php include("./includes/nav.php") ?>
    <div class="container">

      <form class="mt-4" action="./controller/user/create.php" method="POST">
        <h1 class="text-center">Crear usuario</h1>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" class="form-control" name="names" placeholder="Escriba sus nombres" required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Apellidos</label>
            <input type="text" class="form-control" name="surnames" placeholder="Escriba sus apellidos completos " required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Dirección</label>
            <input type="text" class="form-control" name="address" placeholder="Escriba dirección " required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Genero</label>
            <select class="form-control" name="gender" required>
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
              <option value="O">otros</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Tipo de documento</label>
            <select class="form-control" name="document_type" required>
              <?php
              $query = "SELECT * FROM document_type";
              $result_document = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_array($result_document)) { ?>
                <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
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
                <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Número de documento</label>
            <input type="number" class="form-control" name="document_number" placeholder="Digite su número de documento" required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Telefono</label>
            <input type="number" class="form-control" name="cellphone" placeholder="Digite su número de telefono" required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Correo eléctrónico</label>
            <input type="email" class="form-control" name="email" placeholder="ejemplo@gmail.com" required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Contraseña</label>
            <input type="password" class="form-control" name="password" placeholder="prueba123" required>
          </div>

          <!-- <div class="custom-file form-group col-md-12 mb-4">
            <input type="file" class="custom-file-input" id="customFileLang" lang="es">
            <label class="custom-file-label" for="customFileLang">Seleccionar foto</label>
          </div> -->
        </div>

    </div>

    <div class="row justify-content-center">
      <button class="btn btn-success" type="submit" name="save_user">Guardar</button>
      <a class="btn btn-danger ml-4" href="usuario.php" type="submit">Cancelar</a>

    </div>



    </form>
</div>
</section>
</div>

<?php include("./includes/footer.php") ?>