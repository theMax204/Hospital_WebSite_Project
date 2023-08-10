<header>
    <nav class="navbar navbar-expand-lg bg-colorarriba">
      <div class="container-fluid">
        <img class="logoprinc" src="img/logo.png" alt="icon"> <a class="navbar-brand" href="#">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="menu navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Principal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="Citas en linea.php">Citas en linea</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="Mapa.php">Mapa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registros.php">Resgistrarse</a>
          </li>

          
            
          </ul>

        </div>
      </div>
    </nav>
    <div>
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
        
        <div class="container" style="margin-top: 50px; ">
          
          <div class="card-body">
            <div class="cardbase titulomain-card">
              <div class="titulosecondmain card-body">
                <h2 class="tituloprincipal">Encuentre aquí el especialista de su preferencia</h2>
                <p class="tituloservicios">Todos los servicios disponibles</p>
                <form class="d-flex" role="search" onsubmit="submitForm(event)">
                  <input id="buscador" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
      </div>
    </div>
  </header>