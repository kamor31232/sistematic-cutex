<?php include("./includes/header.php") ?>

<div class="row">
  <?php include("./includes/aside.php") ?>
  <section class="col-9 section-general">
    <?php include("./includes/nav.php") ?>
    <div class="container">

      <form class="mt-4" action="producto.php">
        <h1 class="text-center">Crear producto</h1>
        <div class="form-group">
          <label for="exampleFormControlInput1">Nombre</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del producto" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Descripción</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Referencia</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="vgXXX" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Cantidad</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Digite la cantidad" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Precio</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Digite el precio" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Categoria</label>
          <select class="form-control" id="exampleFormControlSelect1" required>
            <option>Hombre</option>
            <option>Mujer</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Subcategoria</label>
          <select class="form-control" id="exampleFormControlSelect1" required>
            <option>Bolsos</option>
            <option>Billeteras</option>
            <option>Pieles</option>

          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Proveedor</label>
          <select class="form-control" id="exampleFormControlSelect1" required>
            <option>Bolsos_Sonia</option>
            <option>Mundo_billeteras</option>
            <option>Todo_pieles</option>

          </select>
        </div>

        <div class="row justify-content-center">
          <button class="btn btn-success" type="submit">Guardar</button>
          <a class="btn btn-danger ml-4" href="producto.php" type="submit">Cancelar</a>

        </div>



      </form>
    </div>
  </section>
</div>

<?php include("./includes/footer.php") ?>