<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">

          <div class="card-body p-5 text-center">
            
          <div class="card-body p-5 text-center">
                <div class="position-relative" style="margin-top: 1px;"> <!-- Adjust the margin-top to move the image up or down -->
                    <img src="../img/logop3.png" class="position-absolute top-0 start-50 translate-middle-x" style="z-index: 1; width: 250px; height: auto;"> <!-- Adjust the width and height of the image -->
                </div>
            </div>

            <div class="mb-md-5 mt-md-4 pb-5">
                <br>
              <h2 class="fw-bold mb-2 text-uppercase">Iniciar Sesión</h2>
              
              <p class="text-white-50 mb-5">Por favor ingresa con tu código y contraseña</p>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Ingresa tu código"/>
                <label class="form-label" for="typeEmailX">Código</label>
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Ingresa tu contraseña"/>
                <label class="form-label" for="typePasswordX">Contraseña</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">¿Olvidaste tu contraseña?</a></p>

              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Inicia sesión</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="bi bi-facebook fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="bi bi-instagram fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="bi bi-google fa-lg"></i></a>
              </div>
            </div>

            <div>
              <p class="mb-0">¿No tienes cuenta? <a href="registroUsuario.php" class="text-white-50 fw-bold">Registrate</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>

<!-- Estilos asociados al login
    Estos estilos fueron sacados de un template -->
<style>
.gradient-custom {
background: #6a11cb;

background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))

}
</style>