<?php include("./includes/header.php") ?>
<?php include("./database/db.php") ?>

<div class="row">
  <?php include("./includes/aside.php") ?>
  <section class="col-9 section-general">
    <?php include("./includes/nav.php") ?>
    <div class="container">

      <form class="mt-4" action="producto.php">
        <h1 class="text-center">Crear producto</h1>
        <div class="form-group">
          <label for="exampleFormControlInput1">Nombre</label>
          <input type="text" class="form-control" name="name" placeholder="Nombre del producto" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Descripción</label>
          <textarea class="form-control" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Referencia</label>
          <input type="text" class="form-control" name="reference" placeholder="vgXXX" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Cantidad</label>
          <input type="number" class="form-control" name="stock" placeholder="Digite la cantidad" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Precio</label>
          <input type="number" class="form-control" name="price" placeholder="Digite el precio" required>
        </div>
        <!-- Categoria  -->
        <div class="form-group">
          <label for="exampleFormControlSelect1">Categoria</label>
          <select class="form-control" id="exampleFormControlSelect1" required>
            <option>Hombre</option>
            <option>Mujer</option>
          </select>
        </div>
        <!-- ------  -->
        <div class="form-group">
          <label for="exampleFormControlSelect1">Subcategoria</label>
          <select class="form-control" name="subcategory" required>
            <?php
            $query = "SELECT * FROM subcategory";
            $result_document = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result_document)) { ?>
              <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
            <?php } ?>
            <!-- <option>Bolsos</option>
            <option>Billeteras</option>
            <option>Pieles</option>  -->

          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Proveedor</label>
          <select class="form-control" name="provider" required>
            <?php
            $query = "SELECT * FROM provider";
            $result_document = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result_document)) { ?>
              <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
            <?php } ?>

            <!-- <option>Bolsos_Sonia</option>
            <option>Mundo_billeteras</option>
            <option>Todo_pieles</option>  -->

          </select>
        </div>

        <div class="row justify-content-center">
          <button class="btn btn-success" type="submit" name="save_product">Guardar</button>
          <a class="btn btn-danger ml-4" href="producto.php" type="submit">Cancelar</a>

        </div>

      </form>
    </div>
  </section>
</div>

<?php include("./includes/footer.php") ?>