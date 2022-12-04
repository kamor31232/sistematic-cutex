<?php include("./includes/header.php") ?>

<div class="row">
  <?php include("./includes/aside.php") ?>
  <section class="col-9 section-general">
    <?php include("./includes/nav.php") ?>
    <div class="container">

      <form class="mt-4" action="usuario.php">
        <h1 class="text-center">Crear usuario</h1>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escriba sus nombres" required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Escriba sus nombres" required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Apellidos</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escriba sus apellidos completos " required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Genero</label>
            <select class="form-control" id="exampleFormControlSelect1" required>
              <option>Masculino</option>
              <option>Femenino</option>
              <option>otros</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Tipo de documento</label>
            <select class="form-control" id="exampleFormControlSelect1" required>
              <option>C.C</option>
              <option>P.A</option>
              <option>C.E</option>
              <option>P.P.T</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Rol</label>
            <select class="form-control" id="exampleFormControlSelect1" required>
              <option>Administrador</option>
              <option>Vendedor</option>
              <option>Auxiliar de Bodega</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Número de documento</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Digite su número de documento" required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Telefono</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Digite su número de telefono" required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Correo eléctrónico</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ejemplo@gmail.com" required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Contraseña</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="prueba123" required>
          </div>

          <div class="custom-file form-group col-md-12 mb-4">
            <input type="file" class="custom-file-input" id="customFileLang" lang="es">
            <label class="custom-file-label" for="customFileLang">Seleccionar foto</label>
          </div>
        </div>

    </div>

    <div class="row justify-content-center">
      <button class="btn btn-success" type="submit">Guardar</button>
      <a class="btn btn-danger ml-4" href="usuario.php" type="submit">Cancelar</a>

    </div>



    </form>
</div>
</section>
</div>

<?php include("./includes/footer.php") ?>