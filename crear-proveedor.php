<?php include("./includes/header.php") ?>

<div class="row">
    <?php include("./includes/aside.php") ?>
    <section class="col-9 section-general">
        <?php include("./includes/nav.php") ?>
        <div class="container">

            <form class="mt-4" action="proveedor.php">
                <h1 class="text-center">Crear proveedor</h1>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Nombre</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escriba sus nombres" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Telefono</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Digite su número de telefono" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Apellidos</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escriba sus apellidos completos " required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Referencia producto</label>
                        <select class="form-control" id="exampleFormControlSelect1" required>
                            <option>4567B</option>
                            <option>5678D</option>
                            <option>7894V</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">NIT</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Digite su número de documento ó NIT" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Correo eléctrónico</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ejemplo@gmail.com" required>
                    </div>

                </div>

        </div>

        <div class="row justify-content-center">
            <button class="btn btn-success" type="submit">Guardar</button>
            <a class="btn btn-danger ml-4" href="proveedor.php" type="submit">Cancelar</a>

        </div>



        </form>
</div>
</section>
</div>

<?php include("./includes/footer.php") ?>