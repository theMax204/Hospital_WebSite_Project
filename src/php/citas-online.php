<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Citas</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/generalh.css">
  <link rel="stylesheet" href="css/citas-online.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-colorarriba">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img class="logoprinc" src="img/logo.png" alt="icon">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav menu">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="src/php/citas-online.php">Citas en línea</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="src/mapa.html">Ubicaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="src/php/registros.php">Registrarse</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2300">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/Imagenhospital1.jpg" class="imgcarusel" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Imagenhospital2.jpg" class="imgcarusel" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Imagenhospital3.jpg" class="imgcarusel" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Imagenhospital4.jpg" class="imgcarusel" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="card-base mt-4">
        <div class="card-body titulomain-card">
          <div class="titulosecondmain card-body">
            <h2 class="tituloprincipal">Encuentre aquí el especialista de su preferencia</h2>
            <p class="tituloservicios">Todos los servicios disponibles</p>
            <form class="d-flex" role="search" onsubmit="submitForm(event)">
              <input id="buscador" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Contenido -->
  <div class="card-citas">
    <div class="container" style="margin-top: 100px;">
      <section class="row justify-content-center">
        <div class="col-md-6 col-lg-7">
          <form class="texto-modificado" action="">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                  <label for="nombre">Nombre</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="apellido" placeholder="Apellidos">
                  <label for="apellido">Apellidos</label>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="cedula" placeholder="Cédula">
                  <label for="cedula">Cédula</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
                  <label for="telefono">Teléfono</label>
                </div>
              </div>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" placeholder="Email">
              <label for="email">Email</label>
            </div>
            <div class="mb-3">
              <select class="form-select" aria-label="Servicio deseado">
                <option value="" disabled selected>Servicio deseado:</option>
                <option value="1">Cardiologia</option>
                <option value="2">Dermatologia</option>
                <option value="3">Departamento De Emergencias</option>
                <option value="4">Endocrinologia</option>
                <option value="5">Farmacia</option>
                <option value="6">Fisiatria</option>
                <option value="7">Gastroenterologia</option>
                <option value="8">Geriatria</option>
                <option value="9">Ginecologia</option>
                <option value="10">Medicina General</option>
                <option value="11">Medicina Interna</option>
                <option value="12">Nutrición</option>
                <option value="13">Odontologia</option>
                <option value="14">Oftalmologia</option>
                <option value="15">Oncologia</option>
                <option value="16">Optometria</option>
                <option value="17">Ortopedia y Traumatologia</option>
                <option value="18">Otorrinolaringologia</option>
                <option value="19">Otros</option>
                <option value="20">Pediatria</option>
                <option value="21">Psiquiatra y Psicologia</option>
                <option value="22">Radiologia</option>
                <option value="23">Reumatologia</option>
                <option value="24">Terapia Fisica</option>
                <option value="25">Urologia</option>
                <option value="26">Vascular Periferico</option>
              </select>
            </div>
            <div class="mb-3">
              <select class="form-select" aria-label="Sede de preferencia">
                <option value="" disabled selected>Seleccione la sede de preferencia:</option>
                <option value="1">Sede 1</option>
                <option value="2">Sede 2</option>
                <option value="3">Sede 3</option>
              </select>
            </div>
            <div class="mb-3">
              <textarea placeholder="Asunto" class="form-control" name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>
  <!-- Footer -->
  <?php include "footer.php" ?>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="https://kit.fontawesome.com/97cef9f55a.js" crossorigin="anonymous"></script>
  <!-- archivos js adicionales -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/principal.js"></script>
</body>

</html>