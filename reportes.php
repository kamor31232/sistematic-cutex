<?php include("./includes/header.php") ?>

<div class="row">
    <?php include("./includes/aside.php") ?>
    <section class="col-9 section-general">
        <?php include("./includes/nav.php") ?>
        <div class="container">

            <div class="row mt-4">
                <div class="form-group col-3 mb-4">
                    <label for="exampleFormControlInput1">Fecha inicio</label>
                    <input type="date" class="form-control" placeholder="Nombre ó documento" aria-label="Text input with dropdown button">
                </div>
                <div class="form-group col-3 mb-4">
                    <label for="exampleFormControlInput1">Fecha fin</label>
                    <input type="date" class="form-control" placeholder="Nombre ó documento" aria-label="Text input with dropdown button">
                </div>
            </div>

            <button type="button" class="btn btn-success">Filtar</button>

        </div>


    </section>
</div>

<?php include("./includes/footer.php") ?>