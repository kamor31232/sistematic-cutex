<?php include("./includes/header.php") ?>
<!-- base de datos incluida en la interfaz usuario-->


<div class="row">
    <?php include("./includes/aside.php") ?>
    <section class="col-9 section-general">
        <?php include("./includes/nav.php") ?>
        <div class="container">
            <!-- Boton Crear Usuario-->
            <div class="d-flex justify-content-end my-4">
                <!-- Rediccionamiento del boton-->
                <a href="crear-factura.php" class="btn btn-success">
                    Crear factura
                </a>
            </div>
            <div class="input-group col-6 mb-4">
                <input type="date" class="form-control" placeholder="Nombre ó documento" aria-label="Text input with dropdown button">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Buscar</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">N° de factura</th>
                        <th scope="col">fecha</th>
                        <th scope="col">Nombre cliente</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1232</td>
                        <td>02/11/2022</td>
                        <td>Alonso Zuñiga</td>
                        <td>300000</td>
                        <td><button type="button" class="btn btn-warning">Editar</button></td>
                    </tr>
                    <tr>
                        <td>1233</td>
                        <td>03/11/2022</td>
                        <td>Pepito</td>
                        <td>35000</td>
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