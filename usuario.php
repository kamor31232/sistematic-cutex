<?php include("./includes/header.php") ?>
<!-- base de datos incluida en la interfaz usuario-->


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
<!-- Inicio del contenido de la interfaz usuario -->
<div class="row">
  <?php include("./includes/aside.php") ?>
  <section class="col-9 section-general">
    <?php include("./includes/nav.php") ?>
    <div class="container">
      <!-- Boton Crear Usuario-->
      <!-- Validar el rol del usuario para crear usuario -->
      <?php
      if ($rolSession === '1') { ?>
        <div class="d-flex justify-content-end my-4">
          <!-- Rediccionamiento del boton-->
          <a href="crear-usuario.php" class="btn btn-success">
            Crear usuario
          </a>
        </div>
      <?php }
      ?>

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
      <!-- Buscador de usuario  -->
      <div class="input-group col-6 mb-4 mt-4">
        <form>
          <input type="text" class="form-control" name="search" value="<?php echo $filter ?>" placeholder="Nombre ó documento" aria-label="Text input with dropdown button">
        </form>
      </div>
      <!-- Tabla de contendo de usuarios del sistema  -->
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Rol</th>
            <th scope="col">Documento</th>
            <th scope="col">Correo electrónico</th>
            <!-- Validar el rol del usuario para no poder editar o cambiar estado -->
            <?php
            if ($rolSession === '1') { ?>
              <th scope="col">Estado</th>
              <th scope="col"></th>
            <?php }
            ?>

          </tr>
        </thead>
        <tbody>
          <!-- Codigo php y consultas sql para traerse los datos usuarios de la base de datos  -->
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

              <!-- Validar el rol del usuario para no poder editar o cambiar estado -->
              <?php
              if ($rolSession === '1') { ?>
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
              <?php }
              ?>
            </tr>

          <?php } ?>

        </tbody>
      </table>
      <ul class="pagination justify-content-center">
        <?php

        $query = "SELECT COUNT(*) as ctn
        FROM user as u INNER JOIN rol as r ON u.rol_id= r.id WHERE u.names LIKE '%$filter%' OR u.document_number LIKE '%$filter%'";

        $pages = mysqli_query($conn, $query);

        if (mysqli_num_rows($pages) === 1) {

          $row = mysqli_fetch_array($pages);
          $totalCount = $row['ctn'];
          $totalPages = ceil($totalCount / $limit);

        ?>
          <?php if ($offset > 0) { ?>
            <li class="page-item">
              <a href="usuario.php?search=<?php echo $filter ?>&pages=<?php echo $offset  - 1 ?>" class="page-link">Anterior</a>
            </li>
          <?php }  ?>

          <?php
          for ($i = 1; $i <= $totalPages; $i++) { ?>
            <li class="page-item"><a class="page-link" href="#"><?php echo $i ?></a></li>
          <?php } ?>
          <?php if (($offset + 1) < $totalPages) { ?>
            <li class="page-item">
              <a class="page-link" href="usuario.php?search=<?php echo $filter ?>&pages=<?php echo $offset  + 1 ?>">Siguiente</a>
            </li>
          <?php } ?>

        <?php } ?>
      </ul>

    </div>


  </section>
</div>

<?php include("./includes/footer.php") ?>