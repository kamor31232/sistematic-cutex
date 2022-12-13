<?php include("./includes/header.php") ?>


<div class="row">
    <?php include("./includes/aside.php") ?>
    <section class="col-9 section-general">
        <?php include("./includes/nav.php") ?>
        <div class="container">
            <!-- Boton Crear Usuario-->
            <!-- Validar el rol del usuario para crear proveedor -->
            <?php
            if ($rolSession === '1') { ?>
                <div class="d-flex justify-content-end my-4">
                    <!-- Rediccionamiento del boton-->
                    <a href="crear-proveedor.php" class="btn btn-success">
                        Crear Proveedor
                    </a>
                </div>
            <?php }
            ?>

            <div class="input-group col-6 mb-4 mt-4">
                <input type="text" class="form-control" placeholder="Nombre, documento ó NIT" aria-label="Text input with dropdown button">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Buscar</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Documento ó NIT</th>
                        <th scope="col">Correo electrónico</th>
                        <th scope="col">Referencia producto</th>
                        <!-- Validar el rol del usuario para editar proveedor -->
                        <?php
                        if ($rolSession === '1') { ?>
                            <th scope="col"></th>
                        <?php }
                        ?>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Billetera_Mandy</td>
                        <td></td>
                        <td>1085826</td>
                        <td>billeterasm@gmail.com</td>
                        <td>890A</td>
                        <!-- Validar el rol del usuario para editar proveedor -->
                        <?php
                        if ($rolSession === '1') { ?>
                            <td><button type="button" class="btn btn-warning">Editar</button></td>
                        <?php }
                        ?>

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