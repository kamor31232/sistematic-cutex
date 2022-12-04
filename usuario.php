<?php include("./includes/header.php") ?>

<div class="row">
  <?php include("./includes/aside.php") ?>
  <section class="col-9 section-general">
    <?php include("./includes/nav.php") ?>
    <div class="container">
      <!-- Boton Crear Usuario-->
      <div class="d-flex justify-content-end my-4">
        <!-- Rediccionamiento del boton-->
        <a href="crear-usuario.php" class="btn btn-success">
          Crear usuario
        </a>
      </div>
      <div class="input-group col-6 mb-4">
        <input type="text" class="form-control" placeholder="Nombre ó documento" aria-label="Text input with dropdown button">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">Buscar</button>
        </div>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Rol</th>
            <th scope="col">Documento</th>
            <th scope="col">Correo electrónico</th>
            <th scope="col">Estado</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Katerine</td>
            <td>Morcillo</td>
            <td>Vendedor</td>
            <td>108582456</td>
            <td>km@gmail.com</td>
            <td><button type="button" class="btn btn-success">Activo</button></td>
            <td><button type="button" class="btn btn-warning">Editar</button></td>
          </tr>
          <tr>
            <td>Pepito</td>
            <td>Perez</td>
            <td>Auxiliar de bodega</td>
            <td>1085812556</td>
            <td>p@gmail.com</td>
            <td><button type="button" class="btn btn-danger">Inactivo</button></td>
            <td><button type="button" class="btn btn-warning">Editar</button></td>
          </tr>
        </tbody>
      </table>
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link">Anterior</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Siguiente</a>
        </li>
      </ul>

    </div>


  </section>
</div>

<?php include("./includes/footer.php") ?>