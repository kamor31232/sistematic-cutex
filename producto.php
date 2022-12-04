<?php include("./includes/header.php") ?>

<div class="row">
  <?php include("./includes/aside.php") ?>
  <section class="col-9 section-general">
    <?php include("./includes/nav.php") ?>
    <div class="container">
      <!-- Boton Crear producto -->
      <div class="d-flex justify-content-end my-4">
        <!-- Rediccionamiento del boton-->
        <a href="crear-producto.php" class="btn btn-success">
          Crear producto
        </a>
      </div>

      <div class="input-group col-6 mb-4">
        <input type="text" class="form-control" placeholder="Nombre ó referencia" aria-label="Text input with dropdown button">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">Buscar</button>
        </div>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Referencia</th>
            <th scope="col">Categoria</th>
            <th scope="col">Sub-categoria</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Bolso grande</td>
            <td>4521L</td>
            <td>Mujer</td>
            <td>Bolsos</td>
            <td>Bolso playero rayos</td>
            <td>10</td>
            <td>55000</td>
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