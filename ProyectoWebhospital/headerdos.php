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
              <a class="nav-link" aria-current="page" href="index.php">Principal</a>
            </li>
                    <li class="nav-item <?php if ($currentPage === 'Citas en linea.php') echo 'active'; ?>">
                        <a class="nav-link" aria-current="page" href="Citas en linea.php">Citas en linea</a>
                    </li>
                    <li class="nav-item <?php if ($currentPage === 'Mapa.php') echo 'active'; ?>">
                        <a class="nav-link" aria-current="page"  href="Mapa.php">Mapa</a>
                    </li>
                    <li class="nav-item <?php if ($currentPage === 'registros.php') echo 'active'; ?>">
                        <a class="nav-link" href="registros.php">Registrarse</a>
                </li>
                </ul>
            </div>
      </div>
    </nav>
    <div>

    
  </header>