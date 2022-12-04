<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css" />
</head>

<body>
  <div>
    <div class="row">
      <div class="col d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #f1f5f7">
        <div>
          <img src="./img/logo.jpg" style="height: 70px; width: 100%; object-fit: contain" alt="" />
          <br />
          <br />
          <div class="card" style="width: 500px">
            <div class="card-body">
              <form action="usuario.php" class="px-4 py-3" style="width: 100%">
                <h1 class="text-center">Iniciar sesión</h1>
                <div class="form-group mt-4">
                  <label for="exampleFormControlSelect1">Rol</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Administrador</option>
                    <option>Vendedor</option>
                    <option>Auxiliar de bodega</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormEmail1">Correo electronico</label>
                  <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@ejemplo.com" />
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormPassword1">Contraseña</label>
                  <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Escriba su contraseña" />
                </div>
                <div class="flex justify-content-center">
                  <button type="submit" class="btn btn-primary">
                    Ingresar
                  </button>
                </div>
              </form>
            </div>
          </div>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-center text-primary" style="text-decoration: underline" href="recuperar.html">Recuperar contraseña</a>
        </div>
      </div>
      <div class="col h-auto w-100" style="
            background-image: url(./img/1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
          "></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>