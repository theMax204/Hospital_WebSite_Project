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
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/generalh.css">
    <link rel="stylesheet" href="css/registros.css">
    <link rel="stylesheet" href="css/procesarRegistro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://kit.fontawesome.com/97cef9f55a.js" crossorigin="anonymous" rel="stylesheet">

	<!-- JS -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/principal.js"></script>
</head>

<body class="bodyprincipal">

	<!-- // Header -->
	<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    include "headerdos.php";
    ?>

	<section class="container">
        <div class="containerregistro">
            <div class="contenidologin">
                <div class="containerreg">
                    <div class="tabsreg">
                        <div class="tabreg uiregister active" data-tab="tabreg-login">Login</div>
                        <div class="tabreg uiregister" data-tab="tabreg-register">Register</div>
                    </div>

                    <!-- Login form -->
                    <form id="tabreg-login" class="formaregistro uiregister active">
                        <h2 class="mb-4">Login</h2>
                        <div class="mb-3">
                            <label for="loginUsername" class="form-label">Username</label>
                            <input type="text" id="loginUsername" class="uiregister form-control" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Password</label>
                            <input type="password" id="loginPassword" class="uiregister form-control" placeholder="Password">
                        </div>
                        <button class="next btn btn-primary">Next</button>
                    </form>

                    <!-- Register form -->
                    <form id="tabreg-register" class="formaregistro uiregister" enctype="multipart/form-data" action="procesarregistro.php" method="POST">
                        <h2 class="mb-4">Register</h2>
                        <div class="mb-3">
                            <label for="registerUsername" class="form-label">Cedula</label>
                            <input type="text" id="registerCedula" name="registerCedula" class="uiregister form-control" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Nombre</label>
                            <input type="text" id="registerUsername" name="registerUsername" class="uiregister form-control" placeholder="Nombre">
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

            $sql = "INSERT INTO usuarios (cedula, nombre, email, telefono, apellidos, fecha_nacimiento, password) 
                    VALUES ('$cedula', '$nombre', '$email', '$telefono', '$apellidos', '$fechaNacimiento', '$hashedPassword')";

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

</body>

</html>