<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soporte Patitos S.A</title>

  <!--Bootstrap conexion----->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <!--Favicon.ico in the root directory-->
  <link rel="shortcut icon" href="./css/img/iconono.jpeg">
  <!--Css links connection-->
  <link rel="stylesheet" href="./css/normalize.css" />
  <link rel="stylesheet" href="./css/main.css" />
  <link rel="stylesheet" href="./css/login.css">
</head>


<body>
  <!--Cabecera-->
  <header>
    <nav>
      <div class="navbar navbar-expand-lg bg-body-tertiary boder-bottom border-body navbar bg-dark" data-bs-theme="dark">
        <img class="img-bandera" src="./css/img/costa-rica.png" style="width: 25px; height: 25px;">
      </div>
    </nav>
  </header>
  <!--contenido-->

  <main class="container-fluid">
    <div class="demo-container">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-12 mx-auto">
            <div class="text-center image-size-small position-relative">
              <img src="./css/img/logo.patito.png" class="rounded-circle p-2 bg-white">
              <div class="icon-camera">
              </div>
            </div>
            <div class="p-5 bg-white rounded shadow-lg">
              <h3 class="mb-2 text-center pt-5">Sign In</h3>
              <form>
                <label class="font-500">Cedula</label>
                <input name="" class="form-control form-control-lg mb-3" type="text">
                <label class="font-500">Password</label>
                <input name="" class="form-control form-control-lg" type="password">
                <p class="m-0 py-4"><a href="./Clave olvidada.php" class="text-muted">Forget password?</a></p>
                <button class="btn btn-warning btn-block btn-lg w-100 shadow-lg">SIGN IN</button>
              </form>
              <div class="footer">
                <p class="text-center lead">Created by Soporte Patito S.A</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


  <!-- JavaScript -->
  <script src="./js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  <script src="js/Login.js"></script>
</body>

</html>