<?php

if (isset($_SESSION['userId']) && isset($_SESSION['rolId'])) {
  $id = $_SESSION['userId'];
  $rolSession = $_SESSION['rolId'];

  $query = "SELECT u.id as id, r.name as rol, u.names as names FROM user as u INNER JOIN rol as r ON u.rol_id = r.id
   WHERE u.id = '$id'";

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $names = $row['names'];
    $rol = $row['rol'];
  }
} else {
  header("Location: ./inicio.php");
}

?>

<aside class="col-3 general-aside">
  <div class="d-flex flex-column container my-4">
    <img src="./img/logo.jpg" alt="" />
    <div class="d-flex flex-column justify-content-center align-items-center mt-3">
      <h3><?php echo $names ?></h3>
      <p><?php echo $rol ?></p>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center mt-3">
      <!-- Validar el rol del usuario -->
      <a class="link" href="usuario.php">Usuario</a>
      <a class="link" href="producto.php">Producto</a>
      <!-- Validar el rol del usuario para poder ver facturas -->
      <?php
      if ($rolSession !== '2') { ?>
        <a class="link" href="factura.php">Factura</a>
      <?php }
      ?>
      <!-- Validar el rol del usuario para poder ver proveedores -->
      <?php
      if ($rolSession !== '3') { ?>
        <a class="link" href="proveedor.php">Proveedor</a>
      <?php }
      ?>
      <!-- Validar el rol del usuario para poder ver reportes -->
      <?php
      if ($rolSession === '1') { ?>
        <a class="link" href="reportes.php">Reportes</a>
      <?php }
      ?>
    </div>
  </div>
</aside>