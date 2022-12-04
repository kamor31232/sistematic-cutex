<?php include("./includes/header.php") ?>

<div class="row">
    <?php include("./includes/aside.php") ?>
    <section class="col-9 section-general">
        <?php include("./includes/nav.php") ?>
        <div class="container">
            <!-- Boton Crear Usuario-->
            <div class="d-flex justify-content-end my-4">
                <!-- Rediccionamiento del boton-->
                <a href="crear-proveedor.php" class="btn btn-success">
                    Crear Proveedor
                </a>
            </div>
            <div class="input-group col-6 mb-4">
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
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Billetera_Mandy</td>
                        <td></td>
                        <td>1085826</td>
                        <td>billeterasm@gmail.com</td>
                        <td>890A</td>
                        <td><button type="button" class="btn btn-warning">Editar</button></td>
                    </tr>
                    <tr>
                        <td>Pepito</td>
                        <td>Perez</td>
                        <td>1085812556</td>
                        <td>p@gmail.com</td>
                        <td>1235B</td>
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