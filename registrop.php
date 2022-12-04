<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div>
      <div class="row">
        <div
          class="col d-flex justify-content-center align-items-center"
          style="height: 100vh; background-color: #f1f5f7"
        >
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="well well-sm">
                  <form class="form-horizontal" method="post">
                    <fieldset>
                      <legend class="text-center header">
                        Registro personal
                      </legend>

                      <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"
                          ><i class="fa fa-user bigicon"></i
                        ></span>
                        <div class="col-md-8">
                          <input
                            id="fname"
                            name="name"
                            type="text"
                            placeholder="Nombres"
                            class="form-control"
                          />
                        </div>
                      </div>
                      <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"
                          ><i class="fa fa-user bigicon"></i
                        ></span>
                        <div class="col-md-8">
                          <input
                            id="lname"
                            name="name"
                            type="text"
                            placeholder="Apellidos"
                            class="form-control"
                          />
                        </div>
                      </div>

                      <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"
                          ><i class="fa fa-envelope-o bigicon"></i
                        ></span>
                        <div class="col-md-8">
                          <input
                            id="email"
                            name="email"
                            type="text"
                            placeholder="Correo electrónico"
                            class="form-control"
                          />
                        </div>
                      </div>

                      <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"
                          ><i class="fa fa-phone-square bigicon"></i
                        ></span>
                        <div class="col-md-8">
                          <input
                            id="phone"
                            name="phone"
                            type="text"
                            placeholder="Celular"
                            class="form-control"
                          />
                        </div>
                      </div>
                      <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"
                          ><i class="fa fa-phone-square bigicon"></i
                        ></span>
                        <div class="col-md-8">
                          <input id="address" name=address" type="text"
                          placeholder="Dirección" class="form-control" />
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-12 text-center">
                          <button type="submit" class="btn btn-primary btn-lg">
                            Registrarse
                          </button>
                          <a class="dropdown-item" href="inicio.php">Iniciar sesión</a>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="col h-auto w-100"
          style="
            background-image: url(./img/1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
          "
        ></div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
      integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
