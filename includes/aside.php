<?php

if (isset($_SESSION['userId'])) {
  $id = $_SESSION['userId'];

  $query = "SELECT u.id as id, r.id as rol, u.names as names FROM user as u INNER JOIN rol as r ON u.rol_id = r.id
   WHERE u.id = '$id'";

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $names = $row['names'];
  }
}

?>

<aside class="col-3 general-aside">
  <div class="d-flex flex-column container my-4">
    <img src="./img/logo.jpg" alt="" />
    <div class="d-flex flex-column justify-content-center align-items-center mt-3">
      <h3><?php echo $names ?></h3>
      <p>Administrador</p>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center mt-3">
      <a class="link" href="usuario.php">Usuario</a>
      <a class="link" href="producto.php">Producto</a>
      <a class="link" href="factura.php">Factura</a>
      <a class="link" href="proveedor.php">Proveedor</a>
      <a class="link" href="reportes.php">Reportes</a>

      <?php

      $_SESSION['userId'];

      $_SESSION['rolId']

      ?>

      <?php if (isset($_SESSION['userId'])) { ?>
        <div style="color: white; font-size: 20px;">
          <?= $_SESSION['userId']
          ?>

        </div>
        <div style="color: white; font-size: 20px;">
          <?=
          $_SESSION['rolId'] ?>

        </div>
      <?php
      } ?>
    </div>
  </div>
</aside>