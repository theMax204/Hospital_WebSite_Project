<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro y Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- CSS -->
    <link rel="stylesheet" href="/src/css/normalize.css">
    <link rel="stylesheet" href="/src/css/style.css">
    <link rel="stylesheet" href="/src/css/normalize.css">
    <link rel="stylesheet" href="/src/css/procesarRegistro.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://kit.fontawesome.com/97cef9f55a.js" crossorigin="anonymous" rel="stylesheet">
</head>

<body class="bodyprincipal">
    <!-- Header -->
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
                            <a class="nav-link active" aria-current="page" href="index.php">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Citas en linea.php">Citas en línea</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Mapa.php">Mapa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registros.php">Registrarse</a>
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
    <section class="container">
        <div class="container-registro">
            <div class="contenido-login">
                <div class="container-reg">
                    <div class="tabs-reg">
                        <div class="tab-reg ui-register active" data-tab="tab-login">Iniciar Sesión</div>
                        <div class="tab-reg ui-register" data-tab="tab-registrar">Registrarse</div>
                    </div>
                    <!-- Formulario de inicio de sesión -->
                    <form id="tab-login" class="formulario-registro ui-register active">
                        <h2 class="mb-4">Iniciar Sesión</h2>
                        <div class="mb-3">
                            <label for="login-username" class="form-label">Nombre de Usuario</label>
                            <input type="text" id="login-username" class="ui-register form-control" placeholder="Nombre de Usuario">
                        </div>
                        <div class="mb-3">
                            <label for="login-password" class="form-label">Contraseña</label>
                            <input type="password" id="login-password" class="ui-register form-control" placeholder="Contraseña">
                        </div>
                        <button class="next btn btn-primary">Siguiente</button>
                    </form>
                    <!-- Register form -->
                    <form id="tabreg-register" class="formaregistro uiregister" enctype="multipart/form-data" action="registros.php" method="POST"> <!--cambie la ubicacion del action-->
                        <h2 class="mb-4">Register</h2>
                        <div class="mb-3">
                            <label for="registerUsername" class="form-label">Cedula</label>
                            <input type="text" id="registerCedula" name="registerCedula" class="uiregister form-control" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Nombre</label>
                            <input type="text" id="registerUsernameReg" name="registerUsername" class="uiregister form-control" placeholder="Nombre"> <!--Cambie el registerUsername a registerUsernameReg-->
                        </div>
                        <div class="mb-3">
                            <label for="registerEmail" class="form-label">Email</label>
                            <input type="email" id="registerEmail" name="registerEmail" class="uiregister form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="registerPhone" class="form-label">Numero Telefonico</label>
                            <input type="tel" id="registerPhone" name="registerPhone" class="uiregister form-control" placeholder="Teléfono">
                        </div>
                        <div class="mb-3">
                            <label for="registerLastName" class="form-label">Apellidos</label>
                            <input type="text" id="registerLastName" name="registerLastName" class="uiregister form-control" placeholder="Apellidos">
                        </div>
                        <div class="mb-3">
                            <label for="registerBirthDate" class="form-label">Fecha De Nacimiento</label>
                            <input type="date" id="registerBirthDate" name="registerBirthDate" class="uiregister form-control">
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Contraseña</label>
                            <input type="password" id="registerPassword" name="registerPassword" class="uiregister form-control" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label for="registerRole" class="form-label">Rol</label>
                            <select id="registerRole" name="registerRole" class="uiregister form-control"> <!--añadi esta seccion para que el usuario puede escoger que tipo de rol es-->
                                <option value="Normal">Normal</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="registerProfileImage" class="form-label">Imagen de perfil</label>
                            <input type="file" id="registerProfileImage" name="registerProfileImage" class="uiregister form-control" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <button class="prev btn btn-secondary">Previous</button>
                            <button class="next btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="registroExitosoModal" tabindex="-1" aria-labelledby="registroExitosoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registroExitosoModalLabel">Registro Exitoso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¡El registro ha sido exitoso!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Proceso de registro - PHP -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $response = array(); // Initialize the response array
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $dbname = "bdapphospital";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            $response["status"] = "error";
            $response["message"] = "Error de conexión: " . $conn->connect_error;
        } else {
            $cedula = mysqli_real_escape_string($conn, $_POST["registerCedula"]);
            $nombre = mysqli_real_escape_string($conn, $_POST["registerUsername"]);
            $email = mysqli_real_escape_string($conn, $_POST["registerEmail"]);
            $telefono = mysqli_real_escape_string($conn, $_POST["registerPhone"]);
            $apellidos = mysqli_real_escape_string($conn, $_POST["registerLastName"]);
            $fechaNacimiento = $_POST["registerBirthDate"];
            $password = $_POST["registerPassword"];
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $rolNombre = mysqli_real_escape_string($conn, $_POST["registerRole"]); //añadi esto para capturar el valor seleccionado y buscar el ID para la tabla de roles
            $selectedRole = $_POST['registerRole'];

            // Mapear el rol seleccionado a su ID correspondiente en la tabla 'roles'
            $rolesMapping = [
                'Normal' => 1,
                'Admin' => 2
            ];

            // Obtener el ID del rol seleccionado
            $idRol = $rolesMapping[$selectedRole];

            // Buscar el ID del rol en la base de datos
            $query = "SELECT id FROM roles WHERE nombre = '$rolNombre'";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $rolId = $row["id"];
            } else {
                // Manejar el error si no se encuentra el rol
                echo "Error: Rol no encontrado";
                exit();
            }
            //lo de arriba tanbien es para capturar el valor seleccionado y buscar el ID para la tabla de roles

            $sql = "INSERT INTO usuarios (cedula, nombre, email, telefono, apellidos, fecha_nacimiento, password, rol_id) 
                    VALUES ('$cedula', '$nombre', '$email', '$telefono', '$apellidos', '$fechaNacimiento', '$hashedPassword', '$rolId')";
            $result = mysqli_query($connection, $query);
            if ($conn->query($sql) === TRUE) {
                $response["status"] = "success";
                // Muestra el modal de registro exitoso
                echo '<script>
                        $(document).ready(function() {
                        $("#registroExitosoModal").modal("show");
                        setTimeout(function() {
                            window.location.href = "registros.php";
                        }, 2000); // Redirige después de 2 segundos (ajusta este valor según tus necesidades)
                    });
                    </script>';
                // Redirect to the index page upon successful registration
                header("Location: registros.php");
                exit(); // Ensure script execution is stopped after redirection
            } else {
                $response["status"] = "error";
                $response["message"] = "Error al registrar: " . $conn->error;
            }
        }
        // Output JSON response only if it's an AJAX request
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            echo json_encode($response);
        }
        $conn->close();
    } else {
        // Handle the case when the script is accessed directly
        echo "No direct access allowed.";
    }
    ?>
    <!-- Footer -->
    <?php include "footer.php"; ?>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/src/js/main.js"></script>
    <script src="/src/js/principal.js"></script>
</body>

</html>