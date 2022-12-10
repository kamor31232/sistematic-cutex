<?php include("./includes/header.php") ?>
<!-- base de datos incluida en la interfaz producto-->
<?php include("./database/db.php") ?>

<!-- Código php para paginación y el boton buscador -->
<?php
$limit = 10;
$offset = 0;
$filter = '';

if (isset($_GET['search'])) {
  $filter = $_GET['search'];
}
if (isset($_GET['pages'])) {
  $offset = $_GET['pages'];
}
?>
<!-- Inicio del contenido de la interfaz producto -->
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
      <!-- mensaje de alerta que aparece abajo del buscador-->
      <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php session_unset();
      } ?>

      <!-- Buscador de producto -->
      <!--  <div class="input-group col-6 mb-4">
        <input type="text" class="form-control" placeholder="Nombre ó referencia" aria-label="Text input with dropdown button">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">Buscar</button>
        </div>
      </div> -->
      <div class="input-group col-6 mb-4">
        <form>
          <input type="text" class="form-control" name="search" value="<?php echo $filter ?>" placeholder="Nombre ó documento" aria-label="Text input with dropdown button">
        </form>
      </div>
      <!-- Tabla de contenido de productos del sistema  -->
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
          <!-- Codigo php y consultas sql para traerse los datos productos de la base de datos -->
          <?php

          $offsetPage = $limit * $offset;
          $query = "SELECT u.id as id, u.names as names, u.surnames as surnames, u.document_number as document, u.email as email, r.name as rol, u.status as status
         FROM user as u INNER JOIN rol as r ON u.rol_id= r.id WHERE u.names LIKE '%$filter%' OR u.document_number LIKE '%$filter%' LIMIT $limit OFFSET $offsetPage";

          $result_user = mysqli_query($conn, $query);


          while ($row = mysqli_fetch_array($result_user)) { ?>

            <tr>
              <td> <?php echo $row['names'] ?></td>
              <td><?php echo $row['surnames'] ?></td>
              <td><?php echo $row['rol'] ?></td>
              <td><?php echo $row['document'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td>
                <?php
                if ($row['status'] === 'active') {
                ?>
                  <a href="./controller/user/update-status.php?id=<?php echo $row['id'] ?>&status=inactive" type="button" class="btn btn-success">Activo</a>
                <?php
                } else {
                ?>
                  <a href="./controller/user/update-status.php?id=<?php echo $row['id'] ?>&status=active" type="button" class="btn btn-danger">Inactivo</a>
                <?php
                }
                ?>
              </td>

              <td><a href="editar-usuario.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-warning">Editar</a></td>
            </tr>

          <?php } ?>

          ?>
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