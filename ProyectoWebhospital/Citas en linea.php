<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  
    <link rel="stylesheet" href="css/generalh.css">
    <link rel="stylesheet" href="css/Citas en linea.css">
</head>


<!-- cabecera  -->
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
include "headerdos.php";
?>
<!-- cabecera -->


<!-- contenido-->
<body class="bodyprincipal">
<div class="cardcitas" >
  <div class="container" style="margin-top: 100px;">
    <section class="row justify-content-center">

  
      <div class="col-md-6 col-lg-7">
        <form class="textomodificado" action="">
          <div class="row">
            <div class="col">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                <label for="nombre">Nombre</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="apellido" placeholder="Apellidos">
                <label for="apellido">Apellidos</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                <label for="celuda">Cedula</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                <label for="telefono">Telefono</label>
              </div>
            </div>
          </div>
  
          <div class="form-floating">
            <input type="email" class="form-control" id="email" placeholder="Email">
            <label for="email">Email</label>
          </div>

          <div class="col" style="margin-top: 50px;">
            <div class="form-floating">
          <select class="form-select" aria-label="Default select example">
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
          </div>

          <div class="col" style="margin-top: 50px;">
            <div class="form-floating">
          <select class="form-select" aria-label="Default select example">
            <option value="" disabled selected>Seleccione la sede de preferencia:</option>
            <option value="1">Sede 1</option>
            <option value="2">Sede 2</option>
            <option value="3">Sede 3</option>
          </select>
          </div>
          </div>

          <div class="form-group" style="margin-top: 20px;">
            <textarea placeholder="Asunto" class="form-control" name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
          </div>
  
          <div class="form-group" style="margin-top: 10px;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>


<div>
  
</div>


</body>
<!--  pie  -->
<?php include "footer.php" ?>
<!-- pie-->





<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="https://kit.fontawesome.com/97cef9f55a.js" crossorigin="anonymous"></script>
<!-- archivos js adicionales -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"
  integrity="integrity=" sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe
  crossorigin="anonymous"></script>
 


<script src="js/principal.js"></script>
</html>