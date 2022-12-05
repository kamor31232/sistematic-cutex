<?php include("./includes/header.php") ?>
<?php include("./database/db.php") ?>

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
      <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php session_unset();
      } ?>
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
          <?php
          $query = "SELECT u.id as id, u.names as names, u.surnames as surnames, u.document_number as document, u.email as email, r.name as rol, u.status as status
          FROM user as u INNER JOIN rol as r ON u.rol_id= r.id";
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
                  <button type="button" class="btn btn-success">Activo</button>
                <?php
                } else {
                ?>
                  <button type="button" class="btn btn-danger">Inactivo</button>
                <?php
                }
                ?>
              </td>

              <td><button type="button" class="btn btn-warning">Editar</button></td>
            </tr>

          <?php } ?>

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